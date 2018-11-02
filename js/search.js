function getSearch() {
           var name = document.getElementById('search_name').value; 
           var xhr = new XMLHttpRequest();
           xhr.onreadystatechange = function(){
               if (this.readyState == 4 && this.status == 200) {
                   document.getElementById('demo').innerHTML = this.responseText;
               }
           } 
           xhr.open("GET",'../Server/Search.php?name='+name, true);
           xhr.send();
       }

function getCategory() {

           var e = document.getElementById("Categories");
           var name = e.options[e.selectedIndex].text;
          
           var xhr = new XMLHttpRequest();
           xhr.onreadystatechange = function(){
               if (this.readyState == 4 && this.status == 200) {
                   document.getElementById('demo').innerHTML = this.responseText;
               }
           } 
           xhr.open("GET",'../Server/Search.php?name='+name, true);
           xhr.send();
       }

var cartArray=[];
function AddCart(product){
           cartArray.push(product);          
           var name=product;
           var xhr = new XMLHttpRequest();
           xhr.onreadystatechange = function(){
               if (this.readyState == 4 && this.status == 200) {
                   document.getElementById('cart').innerHTML = document.getElementById('cart').innerHTML+this.responseText;
               }
           } 
           xhr.open("GET",'../Server/Cart.php?name='+name, true);
           xhr.send();
}

function Buy(){
              if(cartArray.length>0){
                var i;
                
                for(i=0;i<cartArray.length;i++){
                   var name=cartArray[i];
                   var xhr = new XMLHttpRequest();
                   xhr.onreadystatechange = function(){
                       if (this.readyState == 4 && this.status == 200) {
                          document.getElementById('Bought').innerHTML = document.getElementById('Bought').innerHTML+this.responseText+"<br />";
                       }
                   } 
                   xhr.open("GET",'../Server/Buy.php?name='+name, true);
                   xhr.send();
                }
                
              }
      }

