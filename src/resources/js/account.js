import "../css/account.scss";
require('bootstrap');




document.addEventListener('DOMContentLoaded', function() {


   
    let header = document.querySelector("header");

    header.classList.remove('bg-transparent');
    header.classList.add('bg-dark');
    header.classList.add('sticky-top');
    header.classList.remove('position-absolute');

    let left_menu = document.querySelectorAll('.items-list li a');
    let left_menu_active = document.querySelector('.items-list li .active');
    let account_content = document.querySelector('.account-content');
    fetch('/'+left_menu_active.name)
          .then(response=>response.text())
          .then(
            response =>{
                
               var main = (new DOMParser).parseFromString(response,'text/html').querySelector('main')
               account_content.innerHTML = main.innerHTML
               var script = main.getElementsByClassName('filter-script')[0];
               eval(script.innerHTML);
            
                }
                )
    
    for(let i = 0; i < left_menu.length; i++) {
        left_menu[i].addEventListener('click',function(e) {
          
          left_menu_active.classList.remove("active");
          left_menu_active.classList.add("link-dark");  
          left_menu[i].classList.add("active");
          left_menu[i].classList.remove("link-dark");
          left_menu_active = left_menu[i];
          
          fetch('/'+left_menu_active.name)
          .then(response=>response.text())
          .then(
            response =>{
                
               var main = (new DOMParser).parseFromString(response,'text/html').querySelector('main')
               account_content.innerHTML = main.innerHTML
               var script = main.getElementsByClassName('filter-script')[0];
               eval(script.innerHTML);
            
                }
                )
        
           
        })
        }
   

})