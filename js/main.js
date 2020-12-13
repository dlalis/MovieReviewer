function myFunctionName() {
    var x = document.getElementById("reg_username_input_id");
    if(x.value.length < 5 ){
       document.getElementById("reg_username_input_id").style.border = '1px solid #b24747';
    }
    else{
      document.getElementById("reg_username_input_id").style.border = '0px';
    }
}
function myFunctionEmail() {
    var x = document.getElementById("email_input_id");
    if(!validateEmail(x.value)){
       document.getElementById("email_input_id").style.border = '1px solid #b24747';
    }
    else{
      document.getElementById("email_input_id").style.border = '0px';
    }
}
function validateEmail(inputText)
{
  var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
  if(inputText.match(mailformat)){
    return true;
  }
  else{
    return false;
  }
}
function myFunctionPass() {
    var x = document.getElementById("reg_password_input_id").value;
    var y = document.getElementById("password_check_input_id").value;

    if(x !=y || x.length <5 || y.length <5){
       document.getElementById("reg_password_input_id").style.border = '1px solid #b24747';
       document.getElementById("password_check_input_id").style.border = '1px solid #b24747';
    }
    else{
      document.getElementById("reg_password_input_id").style.border = '0px';
      document.getElementById("password_check_input_id").style.border = '0px';
    }
}
