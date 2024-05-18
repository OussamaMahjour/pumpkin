import "../../css/admin/index.scss";
import "../../../node_modules/bootstrap/dist/css/bootstrap.css"
require('bootstrap');
document.addEventListener("DOMContentLoaded", function(event) {

    let active_item = document.querySelector(".active");
    let nav_items = document.querySelectorAll(".nav-link");
    let addCustomer = document.querySelector(".addCustomer");
    let editCustomer = document.querySelectorAll(".editCustomer");
    let banCustomer = document.querySelectorAll(".banCustomer");
    let popContainer = document.querySelector(".popUp-container");
    let popUp = document.querySelectorAll(".popUp");
    let addProduct = document.querySelector(".addProduct");
    let editProduct = document.querySelectorAll('.editProduct');
    let removeProduct = document.querySelectorAll('.removeProduct');
   
    active_item.addEventListener('click',function(e){
        
    })
    nav_items.forEach(element => {
        element.addEventListener('click',function(e){
            
            element.classList.add('active');
            active_item.classList.remove('active');
            active_item = element;
            document.querySelector(".active-content").classList.remove("active-content");
            document.querySelector("."+element.name).classList.add("active-content");
           
        })
    
    });
    addCustomer.addEventListener('click',function(e){
        popContainer.style.display = "flex";
        popUp.forEach(function(element){
            element.style.display = "none"; 
        })
        document.querySelector(".addCustomer-popUp").style.display= "block";
    })
    popContainer.addEventListener('click',function(e){
        var contain = false;
        popUp.forEach(function(element){
            if(element.contains(e.target) || element == e.target){
                contain = true;
            }
        })
        if(!contain){
            popContainer.style.display = "none"
        }
    })
    editCustomer.forEach(function(element){
        element.addEventListener('click',function(e){
            popUp.forEach(function(element){
                element.style.display = "none"; 
            })
        popContainer.style.display = "flex";
        document.querySelector(".editCustomer-popUp").style.display= "block";
        document.querySelector(".editCustomer-popUp option[value='"+element.id+"']").selected=true;
        })

    });
    addProduct.addEventListener('click',function(e){
        popContainer.style.display = "flex";
        popUp.forEach(function(element){
            element.style.display = "none"; 
        })
        document.querySelector(".addProduct-popUp").style.display= "block";
    })
    editProduct.forEach(function(element){
        element.addEventListener('click',function(e){
            popUp.forEach(function(element){
                element.style.display = "none"; 
            })
        popContainer.style.display = "flex";
        document.querySelector(".editProduct-popUp").style.display= "block";
        document.querySelector(".editProduct-popUp option[value='"+element.id+"']").selected=true;
        })

    });
    removeProduct.forEach(function(element){
        element.addEventListener('click',function(e){
            var form = new FormData();
            form.append('id',element.id);
            fetch('/removeProduct',{
                method: "POST",
                body: form
            }).then(
                response=>
                    window.location.reload()

            )
           
        })
    })
    banCustomer.forEach(function(element){
        element.addEventListener('click',function(e){
            var form = new FormData();
            form.append('id',element.id)
            fetch('/removeUser',{
                method: "POST",
                body: form
            }).then(
                response=>window.location.reload()
            );
        })
    })
    
    });