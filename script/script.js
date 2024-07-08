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


const fixedheader= document.querySelector('#fixed');

window.addEventListener('scroll', () => {
    console.log(window.scrollY);
    if (window.scrollY >= 50) {
        fixedheader.classList.add('header-colored');
    } else {
        fixedheader.classList.remove('header-colored');
    }
})

// slider script starts
let slider = tns({
    container : ".my-slider",
    "slideBy" : 1,
    "speed" : 400,
    "nav" : false,
    controlsContainer: "#controls",
    prevButton : ".previous",
    nextButton : ".next",
    responsive: {
        1600:{
            items : 4,
            gutter: 20
        },
        1024:{
            items : 3,
            gutter: 20
        },
        768: {
            items : 2,
            gutter: 20
        }, 
        480:{
            items :1,
        }

    }


})