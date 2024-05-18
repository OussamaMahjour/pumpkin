import "../css/layout.scss";
import "../../node_modules/bootstrap/dist/css/bootstrap.css"
require('bootstrap');






document.addEventListener('DOMContentLoaded', function() {
  let search =document.getElementById('search');
  let search_container = document.getElementById('search_container');
  const side_menu = document.querySelector(".side-bar");
  let close_menu = document.querySelector(".close-menu");
  let menu_button = document.querySelector(".fa-bars");
  let side_menu_active_item = document.querySelector(".side-bar .active");
  let side_menu_items = this.getElementsByClassName("sidebar-item");
  let side_menu_content = document.querySelector(".side-bar-content");
  let product_card = document.querySelectorAll(".product-card");
    //search bar
    document.addEventListener('click',function(e){
            if(e.target!=search_container && !search_container.contains(e.target)){
                search_container.classList.remove('show');
            }
            if(e.target!=side_menu && !side_menu.contains(e.target) && e.target!=menu_button){
              side_menu.classList.remove("open");
            }
    });
    
    search.addEventListener('keyup',function(e) {
      if(e.key == 'Enter'){
        window.location.href = '/searchPage?search='+search.value;
      }
      fetch("/search?search="+search.value).then(response => response.json())
        .then(search_container.innerHTML = "")  
        .then(response=>{
            if(response.length==0){
              search_container.classList.remove('show');
            }
            else{
              search_container.classList.add('show');
            }
            for(let i=0;i<response.length;i++){ 
              let element =response[i];

              search_container.innerHTML +=" <li class='nav-item text-start' >\
                      <a href='/searchPage?search="+element.name+"' class='link-dark text-decoration-none'> <p style='padding-left:5px;'>   "+element.name+" </p></a> </li>"
            }



          })         
      });

            //side bar 
            menu_button.addEventListener('click',function(){

              if(!side_menu.classList.contains("open")){
                      side_menu.classList.add("open");
                      fetch("/"+ side_menu_active_item.name).then(html => html.text())
                      .then(html=>{
                        side_menu_content.innerHTML=html;
                        let script = side_menu_content.getElementsByClassName('filter-script');
                        eval(script[0].innerHTML);
                       
                        
                       
                      });
          
              }
              else{
                      side_menu.classList.remove("open");
              }

            });
            close_menu.addEventListener('click',function(){

              if(!side_menu.classList.contains("open")){
                  side_menu.classList.add("open");
              }
              else{
                  side_menu.classList.remove("open");
              }

            });

            
          
            for(let i = 0; i < side_menu_items.length; i++) {
              side_menu_items[i].addEventListener('click',function(e) {
                
                side_menu_active_item.classList.remove("active");  
                side_menu_items[i].classList.add("active");
                side_menu_active_item = side_menu_items[i];
                fetch("/"+ side_menu_active_item.name).then(html => html.text())
                .then(html=>{
                  
                  

                  side_menu_content.innerHTML=html;
                  let script = side_menu_content.getElementsByClassName('filter-script');
                  eval(script[0].innerHTML);
                });
                
              });
             
              
            }
            //basket handler
            let basket_button = document.querySelectorAll(".basket-button");
            let form = new FormData();
            
            if(product_card.length !=0){
              product_card.forEach(element => {
               element.addEventListener('click',function(e){
                 if(!e.target.closest(".ignore")){
                    window.location.href= "/product?pr="+element.id;
                 
                }
                
               })
             });
            }   
            
          basket_button.forEach((element)=>{
            element.addEventListener('click',function(e){
              form.append('product',element.value);
              form.append('quantity',1);
                fetch('/addToBasket',{
                  method: "POST",
                  body:form
                })
                .then(response=>{
                
                  if(response.status==200){
                    element.classList.remove('basket-button');
                    element.getElementsByTagName('i')[0].classList.remove('fa-cart-shopping');
                    element.getElementsByTagName('i')[0].classList.add('fa-check');
                  }
                  else if(response.status==302){
                    window.location.replace("/login");
                  }
                
                });
            })

          })
         
  
      
      
            
            
            
           

   
          
              
    });
   
    



