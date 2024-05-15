


class Validator {
    static String(value, min = 1, max = Infinity) {
        value = value.trim();
        return value.length >= min && value.length <= max;
    }

    static Email(email) {
        const atIndex = email.indexOf("@");
        const dotIndex = email.lastIndexOf(".");

        if (atIndex < 1 || dotIndex - atIndex < 2 || !email ) {
            document.getElementById("infoMessage").textContent = "Please enter a valid email.";
            document.getElementById("infoMessage").style.display = "block";
            return false;
        }
        document.getElementById("infoMessage").style.display = "none";
        return true;
    }
    static validateNum(num, length = 8) {
        const numString = String(num);
        return /^\d+$/.test(numString) && numString.length === length;
    }
}


function login_Validitor(){
    //alert("heyyyyy");
    const email = document.getElementById("email").value;
    const password = document.getElementById("password").value;
    //const rememberMe = document.getElementById("rememberMe").checked;





    if (!Validator.Email(email)) {

        return false; // Prevent form submission
    }

    if (!Validator.String(password, 1,32)) {
        document.getElementById("infoMessage").textContent = "Please enter a valid Password.";
        document.getElementById("infoMessage").style.display = "block";
        return false;
    }


    document.getElementById("infoMessage").style.display = "none";
    return true;
}

function email_validatior(){
    const email = document.getElementById("Email").value;
    return Validator.Email(email);
}

function restCodeValidator(){
    const code=document.getElementById("code").value;
    if (!Validator.String(password, 6,6)) {
        document.getElementById("infoMessage").textContent = "Please enter a valid Code.";
        document.getElementById("infoMessage").style.display = "block";
        return false;
    }
    document.getElementById("infoMessage").style.display = "none";
    return true;

}

function newPasswordValidator(){
    const password = document.getElementById("password").value;
    const password2 = document.getElementById("password2").value;

    if (!Validator.String(password, 1,32)) {
        document.getElementById("infoMessage").textContent = "Please enter a valid Password.";
        document.getElementById("infoMessage").style.display = "block";
        return false;
    }
    if (!Validator.String(password2, 1,32) || password!== password2) {
        document.getElementById("infoMessage").textContent = "not duplicated";
        document.getElementById("infoMessage").style.display = "block";
        return false;
    }
    document.getElementById("infoMessage").style.display = "none";
    return true;
}