


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
    if (!Validator.String(code, 6,6)) {
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

    const compareValue = password.localeCompare(password2);
    //alert(compareValue);
   // alert(password);
    //alert(password2);

    if (!Validator.String(password, 1,32)) {
        document.getElementById("infoMessage").textContent = "Please enter a valid Password.";
        document.getElementById("infoMessage").style.display = "block";
        return false;
    }
    if (!Validator.String(password2, 1,32) ) {
        document.getElementById("infoMessage").textContent = "not duplicated";
        document.getElementById("infoMessage").style.display = "block";
        return false;
    }
    if(compareValue!==0){
        //alert("im here");
        document.getElementById("infoMessage").textContent = "not duplicated";
        document.getElementById("infoMessage").style.display = "block";
        return false;
    }
    document.getElementById("infoMessage").style.display = "none";
    return true;
}
function registrationValidator(){
    //alert("heyyyyy");
    const email = document.getElementById("email").value;
    const password = document.getElementById("password").value;
    const phone = document.getElementById('phone').value;
    const username = document.getElementById('username').value;
    const fullname = document.getElementById('fullname').value;
    //const rememberMe = document.getElementById("rememberMe").checked;

    if (!Validator.Email(email)) {

        return false; // Prevent form submission
    }

    if (!Validator.String(password, 1,32)) {
        document.getElementById("infoMessage").textContent = "Please enter a valid Password.";
        document.getElementById("infoMessage").style.display = "block";
        return false;
    }
    if (!Validator.String(phone, 8,8)) {
        document.getElementById("infoMessage").textContent = "Please enter a valid phone number.";
        document.getElementById("infoMessage").style.display = "block";
        return false;
    }
    if (!Validator.String(username, 6,255)) {
        document.getElementById("infoMessage").textContent = "Please enter a valid username.";
        document.getElementById("infoMessage").style.display = "block";
        return false;
    }
    if (!Validator.String(username, 6,255)) {
        document.getElementById("infoMessage").textContent = "Please enter a valid Full name.";
        document.getElementById("infoMessage").style.display = "block";
        return false;
    }

    document.getElementById("infoMessage").style.display = "none";
    return true;

}

function registrationValidator1(){
    //alert("heyyyyy");
    const email = document.getElementById("email1").value;
    const password = document.getElementById("password1").value;
    const phone = document.getElementById('phone1').value;
    const username = document.getElementById('username1').value;
    const fullname = document.getElementById('fullname1').value;
    //const rememberMe = document.getElementById("rememberMe").checked;

    if (!Validator.Email(email)) {

        return false; // Prevent form submission
    }

    if (!Validator.String(password, 1,32)) {
        document.getElementById("infoMessage1").textContent = "Please enter a valid Password.";
        document.getElementById("infoMessage1").style.display = "block";
        return false;
    }
    if (!Validator.String(phone, 8,8)) {
        document.getElementById("infoMessage1").textContent = "Please enter a valid phone number.";
        document.getElementById("infoMessage1").style.display = "block";
        return false;
    }
    if (!Validator.String(username, 6,255)) {
        document.getElementById("infoMessage1").textContent = "Please enter a valid username.";
        document.getElementById("infoMessage1").style.display = "block";
        return false;
    }
    if (!Validator.String(fullname, 6,255)) {
        document.getElementById("infoMessage1").textContent = "Please enter a valid Full name.";
        document.getElementById("infoMessage1").style.display = "block";
        return false;
    }

    document.getElementById("infoMessage1").style.display = "none";
    return true;

}

function ValidatoraddBlog(){
    const title = document.getElementById("title").value;
    const cmnt = document.getElementById("cmnt").value;

    if (!Validator.String(title, 6,255)) {
        document.getElementById("infoMessage").textContent = "Please enter a valid Title.";
        document.getElementById("infoMessage").style.display = "block";
        return false;
    }
    if (!Validator.String(cmnt, 6,500)) {
        document.getElementById("infoMessage").textContent = "Please enter a valid comment.";
        document.getElementById("infoMessage").style.display = "block";
        return false;
    }
    document.getElementById("infoMessage").style.display = "none";
    return true;
}

function cmntValidator(){
    const cmnt = document.getElementById("cmnt").value;
    if (!Validator.String(cmnt, 6,500)) {
        document.getElementById("infoMessage").textContent = "Please enter a valid comment.";
        document.getElementById("infoMessage").style.display = "block";
        return false;
    }
    document.getElementById("infoMessage").style.display = "none";
    return true;
}