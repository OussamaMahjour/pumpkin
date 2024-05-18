import "../css/product.scss";


document.addEventListener('DOMContentLoaded', function() {

    let add = document.querySelector(".add");
    let sub = document.querySelector(".sub");
    let quantity = document.querySelector(".quantity");
    let buy = document.querySelector(".buy");
    let favorite = document.querySelector(".favorite");
    add.addEventListener('click',function(){
        quantity.innerHTML = Number(quantity.innerHTML) + 1;
       

    });
    sub.addEventListener('click',function(){
        if(Number(quantity.innerHTML >1)){ 
        quantity.innerHTML = Number(quantity.innerHTML) - 1;
        }

    });
  
       buy.addEventListener('click',function(e){
          var form=new FormData();
           form.append('product',buy.value);
           form.append('quantity',quantity.innerHTML);
            fetch('/addToBasket',{
              method: "POST",
              body:form
            })
            .then(response=>{
              if(response.status==200){
                window.location.reload();
              }
              if(response.status==302){
                window.location.replace("/login");
              }
            
            });
         
        });
      favorite.addEventListener('click',function(e){
        var form = new FormData();
        form.append('product',favorite.id);
        fetch('/favorite',{
          method: "POST",
          body:form
        }).then(
          response=>{
            if(response.status==200){
              console.log(response.status);
          if(favorite.classList.contains("fa-regular")){
            favorite.classList.remove("fa-regular");
            favorite.classList.add("fa-solid");
          } 
          else{
            favorite.classList.remove("fa-solid");
            favorite.classList.add("fa-regular");
          }
        }else{
          window.location.href="/login"
        }

          }

        )

        
       
      });

     




});