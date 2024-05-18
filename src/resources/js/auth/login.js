import "/var/www/resources/css/auth/login.scss";
require('bootstrap');

document.addEventListener('DOMContentLoaded', function() {

  const forms = document.querySelector(".forms"),
  pwShowHide = document.querySelectorAll(".eye-icon"),
  links = document.querySelectorAll(".link");
  pwShowHide.forEach(eyeIcon => {
  eyeIcon.addEventListener("click", () => {
    let pwFields = eyeIcon.parentElement.parentElement.querySelectorAll(".password");
    
    pwFields.forEach(password => {
        if(password.type === "password"){
            password.type = "text";
            eyeIcon.classList.replace("bx-hide", "bx-show");
            return;
        }
        password.type = "password";
        eyeIcon.classList.replace("bx-show", "bx-hide");
    })
    
  })
  })  

  let header = document.querySelector("header");
  header.classList.remove('bg-transparent');
  header.classList.add('bg-dark');
  header.classList.add('sticky-top');
  header.classList.remove('position-absolute');


});
