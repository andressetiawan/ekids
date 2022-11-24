<?php

namespace App\Http\Controllers;

use App\Models\Form;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Barryvdh\DomPDF\Facade\Pdf;

class HomeController extends Controller
{
    public function index()
    {
        return view("home", [
            "title" => "Echo Kids | Christmas Registration Form"
        ]);
    }

    public function create(Request $request)
    {
        $data = [
            "name" => $request["name"],
            "gender" => $request["gender"],
            "phoneCategory" => $request["phoneCategory"],
            "phoneNumber" => $request["phoneNumber"],
            "class" => $request["class"],
            "dateOfBirth" => $request["date"]
        ];

        try {
            $result = Form::create($data);
            if ($result->wasRecentlyCreated) {
                $id = Crypt::encryptString($result->id);
                return redirect("/success/" . $id);
            } else {
                return redirect("/")->with("isSuccess", false);
            }
        } catch (Exception $ex) {
            dd($ex->getMessage());
            return redirect("/")->with("isSuccess", false);
        }
    }

    public function success($id)
    {
        try {
            $dataId = rtrim(str_replace("i:", "", Crypt::decryptString($id)), ";");
            $data = Form::find($dataId);
            return view("success", [
                "title" => "Echo Kids | Thank you for register",
                "data" => $data
            ]);
        } catch (Exception $ex) {
            return redirect("/");
        }
    }

    public function download($id)
    {
        try {
            $data = Form::find($id);
            $url = Crypt::encryptString($id);
            $props = [
                "data" => $data,
                "title" => "ticket_EK_" . $data->name . ".pdf",
                "url" => $url
            ];

            $pdf = Pdf::loadView("successpdf", $props);
            return $pdf->download("ticket_EK_" . $data->name . ".pdf");
            // return view("successpdf", $props);
        } catch (Exception $ex) {
            return redirect("/");
        }
    }

    public function verify($id)
    {
        try {
            $dataId = rtrim(str_replace("i:", "", Crypt::decryptString($id)), ";");
            $result = Form::find($dataId)->update([
                "isVerify" => true
            ]);
            if ($result) {
                return redirect("/success/" . $id);
            } else {
                return redirect("/");
            }
        } catch (Exception $ex) {
            return redirect("/");
        }
    }
}
