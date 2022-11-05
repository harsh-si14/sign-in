
    
    var   emailV, pswV;
    
    
    
    var EmailBox = document.getElementById("emailBox");
    var PswBox = document.getElementById("pswBox");
    
 
    
    function sendData(event) {
      event.preventDefault();
      readFormData();
      if (   emailV == "" && pswV == "") {
        alert("Fields can not be blank");
      } 
      else {
        alert("Sign-up Successfully");
       
          
        
          
    
        clearFormData();
      }
    }
   
    
     
    
    
   
   
    
    function readFormData() {
    
    
      emailV = EmailBox.value;
      pswV = PswBox.value;
      console.log(emailV, pswV);
    }
    

    
    function clearFormData() {
     
 
      EmailBox.value = "";
      PswBox.value = "";
    }
    
    document.querySelectorAll(".btn")[0].onclick = sendData;