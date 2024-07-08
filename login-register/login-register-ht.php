<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- LOGIN -->
    <div class="containerform">
        <div class="login-form-container">
            <div class="forms">
                <span id="form-close1"><i class="fa-regular fa-circle-xmark"></i></span>
                <form action="includes/login-inc-ht.php" method="post" class="input-group-login">
                    <h3>Log In</h3>
                    <input type="email" name="email" class="box" placeholder="Enter your email" required>
                    <!-- INPUT PASSWORD STARTS -->
                    <div class="password-field">
                        <input type="password" name="password" class="box password" placeholder="Enter your password" minlength="8"
                            required>
                        <i class="fa-regular fa-eye-slash showHidePw"></i>
                    </div>
                    <!-- INPUT PASSWORD ENDS -->
                    <input type="submit" name="submit" value="Login Now" class="btn">
                    <input type="checkbox" id="remember" checked="checked">
                    <label for="remember">Remember Me</label>
                    <p>Forgot Password? <a href="#">Click Here</a></p>
                    <p>Don't Have An Account? <span id="register">Register now</span></p>
                </form>
            </div>
        </div>
    </div>

    <!-- REGISTER -->
    <div class="containerform">
        <div class="register-form-container">
            <form action="includes/register-inc-ht.php" method="post" class="input-group-register" onkeyup="verifyPassword()" onsubmit="return verifyPassword()">
                <span id="form-close2"><i class="fa-regular fa-circle-xmark"></i></span>
                <h3>Register</h3>
                <input type="text" name="firstname" class="box" id="box-n1" placeholder="First Name" required>
                <input type="text" name="lastname" class="box" id="box-n2" placeholder="Last Name" required>
                <input type="email" name="email" class="box" id="box-e" placeholder="Enter your email" required>
                <div class="password-field pass1">
                    <input type="password" name="password" class="box password" id="pswd" placeholder="Enter password" required>
                    <i class="fa-regular fa-eye-slash showHidePw"></i>
                </div>
                <div class="password-field pass2">
                    <input type="password" name="passwordCo" class="box password" id="pswd1" placeholder="Confirm password" required>
                    <i class="fa-regular fa-eye-slash showHidePw"></i>
                </div>
                <input type="checkbox" name="tc" id="terms-conditions" required>
                <label for="terms-conditions">I agree to the terms and conditions</label>
                <br><span id="message" style="color: red"></span>
                <input type="submit" name="submit" value="Register" class="btn" onclick="welcome();">
                <p>Already Have An Account? <span id="login1">Login</span></p>
            </form>
        </div>
    </div>
    <script>
        const formBtn = document.querySelector('#login'),
        form2Btn = document.querySelector('#login1'),
        registerBtn = document.querySelector('#register'),
        loginForm = document.querySelector('.login-form-container'),
        registerForm = document.querySelector('.register-form-container'),
        pwShowHide = document.querySelectorAll(".showHidePw"),
        pwFields = document.querySelectorAll(".password"),
        formClose1 = document.querySelector('#form-close1'),
        formClose2 = document.querySelector('#form-close2');

document.getElementById("login").onclick = function() {openLogin()};
document.getElementById("login1").onclick = function() {reOpenLogin()};
document.getElementById("register").onclick = function() {openRegister()};
document.getElementById("form-close1").onclick = function() {closeLogin()};
document.getElementById("form-close2").onclick = function() {closeRegister()};

// OPEN AND CLOSE LOGIN FORM
function openLogin() {
    formBtn.addEventListener('click',() =>{
    loginForm.classList.add('active');
    loginForm.style.display = 'flex';
    registerForm.style.display = 'none';
    
})}

function reOpenLogin() {
    form2Btn.addEventListener('click',() =>{
        loginForm.classList.add('active');
        loginForm.style.display = 'flex';
        registerForm.style.display = 'none';
        
    })
}

function closeLogin() {
    formClose1.addEventListener('click',function() {
        loginForm.classList.remove('active');
})}


// OPEN AND CLOSE SIGN UP FORM
function openRegister() {
    registerBtn.addEventListener('click',() =>{
    registerForm.classList.add('register');
    registerForm.style.display = 'flex';
    loginForm.style.display = 'none';

})}

function closeRegister() {
    formClose2.addEventListener('click',() =>{
        registerForm.classList.remove('register');
    })}

// PASSWORD VALIDATION

function verifyPassword() {   
    const pw = document.getElementById("pswd").value,
    pw1 = document.getElementById("pswd1").value,
    n1 = document.getElementById("box-n1").value,
    n2 = document.getElementById("box-n2").value,
    email = document.getElementById("box-e").value,
    check = document.getElementById("terms-conditions").checked;

    if ((n1=="") || (email=="") || (n2 =="")) {
        document.getElementById("message").innerHTML = "**Fill empty inputs";
        return false;
    }

    //check empty password field  
    if(pw == "") {  
        document.getElementById("message").innerHTML = "**Fill the password please!";
        return false;
    }

   //minimum password length validation  
    if(pw.length < 8) {  
        document.getElementById("message").innerHTML = "**Password length must be atleast 8 characters";  
        return false;  
    }  
    
  //maximum length of password validation  
    if(pw.length > 15) {  
        document.getElementById("message").innerHTML = "**Password length must not exceed 15 characters";  
        return false;  
    } 
  // check confirmation of password
    if(pw != pw1) {  
        document.getElementById("message").innerHTML = "**Passswords doesn't match";  
        return false;
    }
    if (check == false) {
        document.getElementById("message").innerHTML = "**Agree to the terms and conditions ";
        return false;
    }
    else {
        document.getElementById("messagee").innerHTML = "You are all set";
        return true;
    }
}

function welcome() {
    if (verifyPassword()!==false){
        window.alert("Welcome 😄");
    }
}

// SHOW AND HIDE PASSWORD
pwShowHide.forEach(eyeIcon =>{
    eyeIcon.addEventListener("click", ()=>{
        pwFields.forEach(pwField =>{
            if (pwField.type ==="password"){
                pwField.type = "text";
                pwShowHide.forEach(icon =>{
                    icon.classList.replace("fa-eye-slash", "fa-eye");
                })
            } else {
                pwField.type = "password";
                pwShowHide.forEach(icon =>{
                    icon.classList.replace("fa-eye", "fa-eye-slash");
                })
            }
        }) 
    })
})
    </script>
<br><br><br><br><br><br><br><br><br><br><br><br>
</body>
</html>