/*
var loginButton=document.getElementById("loginButton");
var name=document.getElementById("name");
var email=document.getElementById("email");
var buttonId=document.getElementById("buttonId");


loginButton.addEventListener("click",function(){
    var naam=name.value;
    var emailAddress=email.value;
    if(naam=='' || emailAddress=='')
    {
      
        alert("invalid name and email");
          
    }
    else
    {
        anchor = document.createAttribute("A");  // Get the <a> element with id="myAnchor"
        att = document.createAttribute("HREF");        // Create a "href" attribute
        att.value = "profile_page.html";            // Set the value of the href attribute
        anchor.setAttributeNode(att);  
        buttonId.appendChild(anchor);
        document.write(buttonId);   
    }
});
*/