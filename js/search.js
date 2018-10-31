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