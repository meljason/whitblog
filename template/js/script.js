//alert('This is a test')

//reference: https://stackoverflow.com/questions/39495581/how-to-generate-alert-when-clicking-submit-button-only-when-the-html-form-is-fu
function userSubmit() {
    if(personalityFormValidation()==true) {
        alert("Hooray! Your form has been submitted! We will get back to you soon!");
        return true
    }
    else {
        return false;
    }
}

function personalityFormValidation() {
    flagBool = true;

    //Regex to validate whether the text field contain integer number
    if(document.personalityform.firstname.value == "" || !/^[a-zA-Z]*$/g.test(document.personalityform.firstname.value)) {
        alert("Your first name is either Empty or has Invalid Characters!");
        flagBool = false;
    }

    //Regex to validate whether the text field contain integer number
    if(document.personalityform.lastname.value == "" || !/^[a-zA-Z]*$/g.test(document.personalityform.lastname.value)) {
        alert("Your last name is either Empty or has Invalid Characters!");
        flagBool = false;
    }

    //Regex to validate email
    //Email regex reference: https://stackoverflow.com/questions/46155/how-to-validate-an-email-address-in-javascript
    if (!/^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test(personalityform.email.value))
    {
        alert("Your Email is Empty!");
        flagBool = false;
    }

    //Regex to validate Age - Should not be <= 0
    //regex reference: https://stackoverflow.com/questions/9038522/regular-expression-for-any-number-greater-than-0
    if (document.personalityform.age.value == "" || !/^[1-9][0-9]*$/g.test(personalityform.age.value)) {
        alert("Your Age is either Empty or is invalid!");
        flagBool = false;
    }


    //TESTING PURPOSE
    // ----------------------------------------------------------------
    // if(document.personalityform.licenseLevel.selectedIndex == 0) {
    //     alert("ay-yo this is none here");
    //     flagBool = false;
    // }

    // if(document.personalityform.licenseLevel.selectedIndex == 1) {
    //     alert("ay-yo this is G1 here");
    //     flagBool = false;
    // }

    // if(document.personalityform.licenseLevel.selectedIndex == 2) {
    //     alert("ay-yo this is G2 here");
    //     flagBool = false;
    // }

    // if(document.personalityform.licenseLevel.selectedIndex == 3) {
    //     alert("ay-yo this is G3 here");
    //     flagBool = false;
    // }

    //User cannot have a driving license below 16 years old
    if((document.personalityform.age.value < 16 && document.personalityform.licenseLevel.selectedIndex == 1) ||
        (document.personalityform.age.value < 16 && document.personalityform.licenseLevel.selectedIndex == 2) ||
        (document.personalityform.age.value < 16 && document.personalityform.licenseLevel.selectedIndex == 3))
    {
        alert("You cannot hold a driving license when you are younger than 16!");
        flagBool = false;
    }


    if(document.personalityform.descriptionuser.value == "") {
        alert("Please provide a decription of yourself!");
        flagBool = false;
    }

    if ((document.personalityform.genderChoice[0].checked == false) && (document.personalityform.genderChoice[1].checked == false)) {
        alert("Please select your gender!");
        flag = false;
    }

    return flagBool;
}
