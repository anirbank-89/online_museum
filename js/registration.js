//---------------------------------------VALIDATION----------------------------------------
//-----------------------------------------------------------------------------------------



//-----------------------------------------------------------------------------------------
//-----------------------------Validation For Registration Page----------------------------

function fun1r()
{
  var name1=document.form.name.value;
  var a=document.getElementById("span1");
  a.innerHTML="name1";

  if(name1=="")
  {
    a.innerHTML="***Please Enter Your Name";
    a.style.color="red";
    return false;
  }
  if(name1.search(/[0-9]/)!=-1)
  {
    a.innerHTML="***Invalid name (containing digits)";
    a.style.color="red";
    return false;
  }
  if(name1.search(/[!,@,#,$,%,^,&,*,(,),<,>,.,,]/)!=-1)
  {
    a.innerHTML="***Invalid name (containing Special characters) ";
    a.style.color="red";
    return false;
  }
  if(name1.search(/[" "]/)!=-1)
  {
    a.innerHTML="***Don't give a Space Between Words";
    a.style.color="red";
    return false;
  }
  if(name1.length<7)
  {
    a.innerHTML="***Please Enter a valid Name";
    a.style.color="red";
    return false;
  }
  if(name1.length>35)
  {
    a.innerHTML="***Please Enter a valid Name";
    a.style.color="red";
    return false;
  }
  else
  {
    a.innerHTML="";
    a.style.color="green";   
  }
}

function fun3r()
{
  var email=document.form.email.value;
  var pattern=document.form.email.pattern;
  var a=document.getElementById("span4");

  if(email=="")
  {
    a.innerHTML="***Please Enter Your Email Id";
    a.style.color="red";
    return false;
  }
  if(!email.match(pattern))
  {
    a.innerHTML="***Invalid Email";
    a.style.color="red";
    return false;
  }
  else
  {
    a.innerHTML="";
    a.style.color="green";       
  }            
}
function fun4r()
{
  var mobile=document.form.mobile.value;
  var a=document.getElementById("span5");
  if(mobile=="")
  {
    a.innerHTML="***Please Enter Your Mobile Number";
    a.style.color="red";
    return false;
  }
  if(mobile.length<10)
  {
    a.innerHTML="***Please Enter 10 digits Mobile Number";
    a.style.color="red";
    return false;
  }
  if(mobile.length>10)
  {
    a.innerHTML="***Please Enter 10 digits Mobile Number";
    a.style.color="red";
    return false;
  }
  if(isNaN(mobile))
  {
    a.innerHTML="***Please Enter Digits Only";
    a.style.color="red";
    return false;
  }
  if(mobile.charAt(0)!=9 && mobile.charAt(0)!=8 && mobile.charAt(0)!=7 && mobile.charAt(0)!=6)
  {
    a.innerHTML="***Invalid Number ( mobile number should start with 9 , 8 , 7 , 6 )";
    a.style.color="red";
    return false;
  }
  else
  {
    a.innerHTML="";
    a.style.color="green";     
  }
}
function fun5r()
{
  var password=document.form.password.value;
  var a=document.getElementById("span12");
  var b=document.getElementById("span13");
  if(password=="")
  {
    a.innerHTML="***Please Set Your Password";
    a.style.color="red";
    b.innerHTML="";
    return false;
  }
  if(password.search(/[" "]/)!=-1)
  {
    a.innerHTML="***Don't give a Space Between characters";
    a.style.color="red";
    b.innerHTML="";
    return false;
  }
  if(password.search(/[a-z]/)==-1)
  {
    a.innerHTML="***Password Should Contain Atleast 1 lower case";
    a.style.color="red";
    b.innerHTML="";
    return false;
  }
  if(password.search(/[A-Z]/)==-1)
  {
    a.innerHTML="***Password Should Contain Atleast 1 upper case";
    a.style.color="red";
    b.innerHTML="";
    return false;
  }
  if(password.search(/[0-9]/)==-1)
  {
    a.innerHTML="***Password Should Contain Atleast 1 digit";
    a.style.color="red";
    b.innerHTML="";
    return false;
  }
  if(password.search(/[@,#,$,%,&,*]/)==-1)
  {
    a.innerHTML="***Password Should Contain Atleast 1 Special Characters (like, @,#,$,%,&,*)";
    a.style.color="red";
    b.innerHTML="";
    return false;
  }
  if(password.search(/[!,^,(,),_,-,=,+,<,>,.,,,;,:]/)!=-1)
  {
    a.innerHTML="***Password Should contain only these Special Characters (@,#,$,%,&,*)";
    a.style.color="red";
    b.innerHTML="";
    return false;

  }
  else
  {
    a.innerHTML="";
    a.style.color="green";
    if(password.length<=5)
    {
      b.innerHTML="***Weak Password";
      b.style.color="red";
    }
    if(password.length>5 && password.length<8 )
    {
      b.innerHTML="***Medium Password";
      b.style.color="blue";
    }
    if(password.length>=8)
    {
      b.innerHTML="***Strong Password";
      b.style.color="green";
    }
  }
}
function fun_r()
{
  var x1=document.getElementById("span1").innerHTML;
  var x3=document.getElementById("span4").innerHTML;
  var x4=document.getElementById("span5").innerHTML;
  var x5=document.getElementById("span12").innerHTML;
  var x6="";

  if(x1==x6 && x3==x6 && x4==x6 && x5==x6)
  {
    if(confirm("Press 'Ok' to Register"))
    {
      return true;
    }
    else
    {
      return false;
    }
  }
  else
  {
    alert("Please Fill out the necessary fields");
    return false;
  }
} 

$("document").ready(function(){
  $("input[name=box]").click(function(){
    if($("input[name=box]").is(":checked"))
    {
      $("input[name=password]").attr("type","text");
      $("#span_box").html("hide");
    }
    else
    {
      $("input[name=password]").attr("type","password");
      $("#span_box").html("show");
    }
  });
});

//-----------------------------------------------------------------------------------------



//-----------------------------------------------------------------------------------------
//-------------------------------Validation For Update Page--------------------------------
function fun1u()
{
  var name1=document.form.name2.value;
  var a=document.getElementById("span1");
  a.innerHTML="name1";

  if(name1=="")
  {
    a.innerHTML="***Please Enter Your Name";
    a.style.color="red";
    return false;
  }
  if(name1.search(/[0-9]/)!=-1)
  {
    a.innerHTML="***Invalid name (containing digits)";
    a.style.color="red";
    return false;
  }
  if(name1.search(/[!,@,#,$,%,^,&,*,(,),<,>,.,,]/)!=-1)
  {
    a.innerHTML="***Invalid name (containing Special characters) ";
    a.style.color="red";
    return false;
  }
  if(name1.search(/[" "]/)!=-1)
  {
    a.innerHTML="***Don't give a Space Between Words";
    a.style.color="red";
    return false;
  }
  if(name1.length<7)
  {
    a.innerHTML="***Please Enter a valid Name";
    a.style.color="red";
    return false;
  }
  if(name1.length>35)
  {
    a.innerHTML="***Please Enter a valid Name";
    a.style.color="red";
    return false;
  }
  else
  {
    a.innerHTML="";
    a.style.color="green";
       
  }
}

function fun4u()
{
  var mobile=document.form.mobile2.value;
  var a=document.getElementById("span5");
  if(mobile=="")
  {
    a.innerHTML="***Please Enter Your Mobile Number";
    a.style.color="red";
    return false;
  }
  if(mobile.length<10)
  {
    a.innerHTML="***Please Enter 10 digits Mobile Number";
    a.style.color="red";
    return false;
  }
  if(mobile.length>10)
  {
    a.innerHTML="***Please Enter 10 digits Mobile Number";
    a.style.color="red";
    return false;
  }
  if(isNaN(mobile))
  {
    a.innerHTML="***Please Enter Digits Only";
    a.style.color="red";
    return false;
  }
  if(mobile.charAt(0)!=9 && mobile.charAt(0)!=8 && mobile.charAt(0)!=7 && mobile.charAt(0)!=6)
  {
    a.innerHTML="***Invalid Number ( mobile number should start with 9 , 8 , 7 , 6 )";
    a.style.color="red";
    return false;
  }
  else
  {
    a.innerHTML="";
    a.style.color="green";       
  }
}
function fun_u()
{
  var x1=document.getElementById("span1").innerHTML;
  var x4=document.getElementById("span5").innerHTML;
  var x6="";

  if(x1==x6 && x4==x6 )
  {
    if(confirm("Press 'Ok' to Update"))
    {
      return true;
    }
    else
    {
      return false;
    }
  }
  else
  {         
    alert("fill out the necessary fields");
    return false;
  }
} 

//-----------------------------------------------------------------------------------------



//-----------------------------------------------------------------------------------------
//--------------------------Validation For Password Change Field---------------------------
$("document").ready(function(){
  $("input[name=newpass]").keyup(function(){
    $("#col1_p").show();
  });
});
function fun1p()
{
  var password=document.form.newpass.value;
  var a=document.getElementById("span1l");
  if(password=="")
  {
    a.innerHTML="* Please Set Your Password";
    a.style.color="red";
    return false;
  }
  if(password.search(/[a-z]/)==-1)
  {
    a.innerHTML="* Password Should Contain Atleast 1 lower case";
    a.style.color="red";
    return false;
  }
  if(password.search(/[A-Z]/)==-1)
  {
    a.innerHTML="* Password Should Contain Atleast 1 upper case";
    a.style.color="red";
    return false;
  }
  if(password.search(/[0-9]/)==-1)
  {
    a.innerHTML="* Password Should Contain Atleast 1 digit";
    a.style.color="red";
    return false;
  }
  if(password.search(/[@,#,$,%,&,*]/)==-1)
  {
    a.innerHTML="* Password Should Contain Atleast 1 Special Characters (like, @,#,$,%,&,*)";
    a.style.color="red";
    return false;
  }
  if(password.search(/[!,^,(,),_,-,=,+,<,>,.,,,;,:]/)!=-1)
  {
    a.innerHTML="* Password Should contain only these Special Characters (@,#,$,%,&,*)";
    a.style.color="red";
    return false;
  }
  else
  {
    a.innerHTML="";
    a.style.color="green";
    var b=document.getElementById("span1l1");
    if(password.length<=5)
    {
      b.innerHTML="Weak Password";
      b.style.color="red";
    }
    if(password.length>5 && password.length<8 )
    {
      b.innerHTML="Medium Password";
      b.style.color="blue";
    }
    if(password.length>=8)
    {
      b.innerHTML="Strong Password";
      b.style.color="green";
    }
  }
}
function fun_p()
{
  var x1=document.getElementById("span1l").innerHTML;
  var x6="";

  if(x1==x6)
  {
    if(confirm("Press 'Ok' to Change Password"))
    {
      return true;
    }
    else
    {
      return false;
    }
  }
  else
  {    
    alert("Please Valid The New Password First");
    return false;
  }
} 

//-----------------------------------------------------------------------------------------



//-----------------------------------------------------------------------------------------
