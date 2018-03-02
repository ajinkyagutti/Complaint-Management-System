function validate(form){
var emailRegex = /^[A-Za-z0-9._]*\@[A-Za-z]*\.[A-Za-z]{2,5}$/; 
var fname = form.firstname.value;
var  lname = form.lastname.value;
var  femail = form.email.value;
var  fpassword = form.password.value;
var  cpassword = form.conpassword.value;
var  fmonth = form.birthday_month.value;
var  fday = form.birthday_day.value;
var  fyear = form.birthday_year.value;
var  fsex = form.sex.value;
 
 if( fname == "" )
   {
	 form.firstname.focus() ;
	 alert("Error: Enter the first name");
     return false;
   }
  
 else if( lname == "" )
   {
     form.lastname.focus() ;
	 alert("Error: Enter the last name");
     return false;
   }
 else   if (femail == "" )
 {
  form.email.focus();
  alert("Error: Enter the email id");
  return false;
  }
  else if(!emailRegex.test(femail))
{
	form.email.focus();
  alert("Error: Enter the valid email id");
  return false;
 }
   
  else  if(fpassword == "")
  {
   form.password.focus();
   alert("Error: Enter the password");
   return false;
  }
else  if(cpassword == "")
  {
   form.conpassword.focus();
   alert("Error: Confirm the password");
   return false;
  }
else if(fpassword !=  cpassword){
   form.conpassword.focus();
   alert("Error: Passwords don't match"); 
  return false;
   }
else   if (fmonth == "") {
        form.birthday_month.focus();
  alert("select the birthday month");
        return false;
     }
 else if (fday == "") {
        form.birthday_day.focus();
  alert("select the birthday day");
        return false;
     }
else  if (fyear == "") {
        form.birthday_year.focus();
  alert("select the birthday year");
        return false;
     }
else  if(form.radiobutton[0].checked == false && form.radiobutton[1].checked == false){
    alert("select your gender");
    return false;
   }
 else if(fname != '' && lname != '' && femail != '' && fpassword != '' && cpassword != '' && fmonth != '' && fday != '' && fyear != ''){
   alert("You have successfully Signed Up!");
   }


}