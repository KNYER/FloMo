function table(){
    const xhttp = new XMLHttpRequest();
    xhttp.onload = function(){
        document.getElementById("table").innerHTML = this.responseText;
        
   }
    xhttp.open('GET','includes/history.php',true);
    xhttp.send()
 }

 setInterval(function(){ 
    table()
}, 300)
