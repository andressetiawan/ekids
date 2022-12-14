<?php

namespace App\Http\Controllers;

use App\Models\Form;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view("admin", [
            "title" => "Admin Dashboard"
        ]);
    }

    public function present(Request $request)
    {
        $data = Form::find($request->id);
        if (is_null($data)) {
            return redirect("/admin")->with("isError", true);
        } else {
            $data->isVerify = 1;
            $result = $data->save();
            if ($result) {
                return redirect("/admin")->with("isError", false);
            }
        }
    }
}
