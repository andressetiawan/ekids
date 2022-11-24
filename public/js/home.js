const genderCards = document.querySelectorAll(".form-card-gender");
const phoneCategoryCards = document.querySelectorAll(".phone-category-card");
const phoneInputs = document.querySelectorAll("#form-phone-input");
let phoneFormGroup = document.querySelectorAll(".form-group");
phoneFormGroup = phoneFormGroup[phoneFormGroup.length - 1];
const phoneInputElements = [];

let postData = {
    name: "",
    gender: "",
    phoneCategory: "",
    phoneNumber: "",
    birthOfDate: "",
};

document.querySelector("#form-name-input").addEventListener("keyup", (ev) => {
    postData = { ...postData, name: ev.target.value };
});

document.querySelector("#form-date-input").addEventListener("change", (ev) => {
    postData = { ...postData, birthOfDate: ev.target.value };
});

function clearGenderCards() {
    genderCards.forEach((card) => card.classList.remove("active"));
}

function clearPhoneForm() {
    phoneCategoryCards.forEach((card) => card.classList.remove("active"));
    phoneInputElements.forEach((ipt) => {
        ipt.remove();
    });
}

phoneCategoryCards.forEach((card, index) => {
    card.addEventListener("click", (ev) => {
        clearPhoneForm();

        const inputEl = document.createElement("input");
        inputEl.setAttribute("type", "number");
        inputEl.setAttribute("name", "phoneNumber");
        inputEl.setAttribute("id", "form-phone-input");

        card.classList.add("active");

        phoneInputs[index].checked = true;

        if (phoneInputs[index].checked) {
            console.log(phoneFormGroup);
            if (phoneInputs[index].value === "Orang tua") {
                inputEl.setAttribute(
                    "placeholder",
                    "Masukan nomor handpone orang tua"
                );
                phoneInputElements.push(inputEl);
                phoneFormGroup.appendChild(inputEl);
            } else {
                inputEl.setAttribute(
                    "placeholder",
                    "Masukan nomor handpone anak"
                );
                phoneInputElements.push(inputEl);
                phoneFormGroup.appendChild(inputEl);
            }

            inputEl.addEventListener("keyup", (ev) => {
                postData = { ...postData, phoneNumber: ev.target.value };
            });

            postData = { ...postData, phoneCategory: phoneInputs[index].value };
        }
    });
});

genderCards.forEach((card) => {
    card.addEventListener("click", (ev) => {
        clearGenderCards();

        ev.target.classList.add("active");
        if (ev.target.classList.contains("boy")) {
            document.getElementById("form-gender-input").value = "Laki-laki";
        } else {
            document.getElementById("form-gender-input").value = "Perempuan";
        }

        postData = {
            ...postData,
            gender: document.getElementById("form-gender-input").value,
        };
    });
});

document.getElementById("btn-submit").addEventListener("click", (ev) => {
    let IsPhoneValid = false;

    if (postData.name === "") {
        alert("Kolom nama belum terisi");
        ev.preventDefault();
    } else if (postData.birthOfDate === "") {
        alert("Kolom nomor tanggal lahir belum lengkap");
        ev.preventDefault();
    } else if (postData.gender === "") {
        alert("Kolom gender belum terisi");
        ev.preventDefault();
    } else if (postData.phoneCategory === "") {
        alert("Kolom nomor handphone belum lengkap");
        ev.preventDefault();
    } else if (postData.phoneNumber === "") {
        alert("Kolom nomor handphone belum lengkap");
        ev.preventDefault();
    }

    if (postData.phoneNumber === "" && postData.phoneNumber.length < 11) {
        alert("Masukan nomor handphone yang valid");
        ev.preventDefault();
        IsPhoneValid = false;
    } else if (
        postData.phoneNumber !== "" &&
        postData.phoneNumber.length < 11
    ) {
        alert("Masukan nomor handphone yang valid");
        ev.preventDefault();
        IsPhoneValid = false;
    } else {
        IsPhoneValid = true;
    }

    // Success validation
    if (
        postData.name !== "" &&
        postData.birthOfDate !== "" &&
        postData.gender !== "" &&
        postData.phoneCategory !== "" &&
        IsPhoneValid
    ) {
        console.log(postData);
    }
});
