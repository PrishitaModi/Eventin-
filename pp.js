  function p(){
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function()
    // console.log("nhar");
    {if(xmlhttp.readyState==4 && xmlhttp.status==200){
      localStorage.setItem("response", xmlhttp.responseText);
       localStorage.setItem('setupTime', now);
      console.log(xmlhttp.responseText);
       // document.getElementById("myInput").innerHTML=xlmhttp.responseText;
            alert("webpage " + xmlhttp.responseText + " created !");
            
            
             
      }
      else{
            console.log("demo");
            
      }      
     }

     var content = "<html><head><meta charser=/"utf-8/"/><body><h1>HTML Links</h1><p><a href="invi.html">Visit W3Schools.com!</a></p></body></html>";


xmlhttp.open("GET","2.php?content="+content,true);
xmlhttp.send();
}

function myFunction() {
  /* Get the text field */
  var copyText = document.getElementById("myInput");

  /* Select the text field */
  copyText.select();
  copyText.setSelectionRange(0, 99999); /* For mobile devices */

  /* Copy the text inside the text field */
  document.execCommand("copy");

  /* Alert the copied text */
  alert("Copied the text: " + copyText.value);
}
