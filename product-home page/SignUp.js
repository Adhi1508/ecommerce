function Validate()
{
   const firstname = document.getElementById("fname").value;
   const lastname = document.getElementById("lname").value;
   const username = document.getElementById("uname").value;
   const password = document.getElementById("pass").value;
   const Cpassword = document.getElementById("cpass").value;

   
   if(firstname.trim() =="" || lastname.trim()=="" || username.trim()=="" || password.trim()=="" || Cpassword.trim()=="")
   {
      alert("No blank values! Please fill empty fields.");
      return false;
   }
   
   else if(password != Cpassword)
   {
      alert("password do not match")
      return false;
   }

   else 
   {
    return true;
   }
}

/*function register(firstname, lastname, username, password)
{
    //create request object
    let request = new XMLHttpRequest();

    //Create event handler that specifies what should happen when server responds 
    request.onload = () => {
        //check HTTP status code 
        if(request.status === 200)
        {
            //get data from server 
            let responseData = request.responseText;
            document.getElementById("ServerResponse").innerHTML = responseData;

        }

        else 
            alert("Error communicating with server" + request.status);

    };

    //set up request with HTTP method and url
    request.open("POST", "getRegistration.php");
    request.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

    request.send("firstname=" + firstname +  "Lastname=" + lastname + "Username=" + username + "Password=" + password);

}
*/










function checkPass(){
    let strength = document.getElementById("strength");
    /*
    (?=.*[a-z])      at least 1 lowercase letter
    (?=.*[A-Z])      at least 1 uppercase letter
    (?=.*[0-9])      at least 1 digit
    ([^A-Za-z0-9])   at least 1 special character
    (?=.{8,})        at least 8 characters long
    */
    let strongRegex = RegExp('(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[^A-Za-z0-9])(?=.{8,})');
    
    //at least 6 characters long
    let minRegex = RegExp('(?=.{6,})');
 
    let pwd = document.getElementById("pass");
 
    if (pwd.value.length==0){
        strength.innerHTML="Type Password";
    }else if(minRegex.test(pwd.value)==false){
        strength.innerHTML="The Password must be at least 6 Characters Long";
    }else if(strongRegex.test(pwd.value)){
        strength.innerHTML='<span  style="color:green", "text-align= center">Strong</span>';
    }else{
        strength.innerHTML='<div style="color:red", "text-align= center">Weak!!! Please use Uppercase, Lowercase, Number, and Special Character</div>';
    }
 }