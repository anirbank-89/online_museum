// validation applied--------------------------------------
  
function fun_e()
{
  var email=document.form.new_email.value;
  var pattern=document.form.new_email.pattern;
  var a=document.getElementById("error_email");

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

function fun1()
{
  var x1=document.getElementById("error_email").innerHTML;
  var x6="";

  if(x1==x6)
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
    alert("Please Fill out the email box properly first !");
    return false;
  }
} 
function fun_p()
{
  var password=document.form.new_password.value;
  var a=document.getElementById("error_password");
  var b=document.getElementById("success_password");
  if(password=="")
  {
    a.innerHTML="***Please Set Your Password";
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
function fun2()
{
  var x1=document.getElementById("error_password").innerHTML;
  var x6="";

  if(x1==x6)
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
    alert("Please Fill out the password box properly first !");
    return false;
  }
} 

// password show & hide----------------------------------------
$("document").ready(function(){
  $("input[name=check1]").click(function(){
    if($("input[name=check1]").is(":checked"))
    {
      $("input[name=password]").attr("type","text");
      $("#show_hide1").html("hide");
    }
    else
    {
      $("input[name=password]").attr("type","password");
      $("#show_hide1").html("show");
    }
  });

  $("input[name=check2]").click(function(){
    if($("input[name=check2]").is(":checked"))
    {
      $("input[name=old_password]").attr("type","text");
      $("#show_hide2").html("hide");
    }
    else
    {
      $("input[name=old_password]").attr("type","password");
      $("#show_hide2").html("show");
    }
  });
  $("input[name=check3]").click(function(){
    if($("input[name=check3]").is(":checked"))
    {
      $("input[name=new_password]").attr("type","text");
      $("#show_hide3").html("hide");
    }
    else
    {
      $("input[name=new_password]").attr("type","password");
      $("#show_hide3").html("show");
    }
  });
  $("input[name=check4]").click(function(){
    if($("input[name=check4]").is(":checked"))
    {
      $("input[name=confirm_password]").attr("type","text");
      $("#show_hide4").html("hide");
    }
    else
    {
      $("input[name=confirm_password]").attr("type","password");
      $("#show_hide4").html("show");
    }
  });
});



// drawing the alponas
    $("document").ready(function(){

    for(i=0;i<30;i=i+4)
    {
        var p1="#alpona"+(1+i);
        var p2="#alpona"+(2+i);
        var p3="#alpona"+(3+i);
        var p4="#alpona"+(4+i);
        // document.write(p1,p2,p3,p4,"<br>");
        var a=$(p1);
        var b=$(p2);
        var c=$(p3);
        var d=$(p4);

                a.drawArc({
                strokeStyle: 'rgba(0,0,0,0.8)',
                strokeWidth:1,
                x: 209, y:35,
                radius: 20,
                }).drawArc({
                fillStyle:'rgba(0,0,0,0.6)',
                strokeStyle: 'rgba(0,0,0,0.8)',
                strokeWidth:1,
                x: 269, y:35,
                radius:10,
                }).drawLine({
                strokeStyle: '#888888',
                strokeWidth: 5,
                // shadowColor: 'black',
                // shadowBlur: 20,
                rounded: true,
                x1: 10, y1: 35,
                x2: 150, y2: 35,
                });

                b.drawArc({
                strokeStyle: 'rgba(0,0,0,0.8)',
                strokeWidth:1,
                x:32, y:35,
                radius: 30,
                }).drawArc({
                fillStyle:'rgba(0,0,0,0.6)',
                strokeStyle: 'rgba(0,0,0,0.8)',
                strokeWidth:1,
                x: 90, y:35,
                radius: 10,
                }).drawArc({
                strokeStyle: 'rgba(0,0,0,0.8)',
                strokeWidth:1,
                x:150, y:35,
                radius: 20,
                }).drawArc({
                fillStyle:'rgba(0,0,0,0.6)',
                strokeStyle: 'rgba(0,0,0,0.8)',
                strokeWidth:1,
                x:210, y:35,
                radius: 10,
                }).drawArc({
                strokeStyle: 'rgba(0,0,0,0.8)',
                strokeWidth:1,
                x:268, y:35,
                radius: 30,
                });

                c.drawArc({
                fillStyle:'rgba(0,0,0,0.6)',
                strokeStyle: 'rgba(0,0,0,0.8)',
                strokeWidth:1,
                x:30, y:35,
                radius: 10,
                }).drawArc({
                strokeStyle: 'rgba(0,0,0,0.8)',
                strokeWidth:1,
                x: 90, y:35,
                radius: 20,
                }).drawArc({
                fillStyle:'rgba(0,0,0,0.6)',
                strokeStyle: 'rgba(0,0,0,0.8)',
                strokeWidth:1,
                x:150, y:35,
                radius: 10,
                }).drawArc({
                strokeStyle: 'rgba(0,0,0,0.8)',
                strokeWidth:1,
                x:210, y:35,
                radius: 30,
                }).drawArc({
                fillStyle:'rgba(0,0,0,0.6)',
                strokeStyle: 'rgba(0,0,0,0.8)',
                strokeWidth:1,
                x:270, y:35,
                radius: 10,
                });

                d.drawArc({
                strokeStyle: 'rgba(0,0,0,0.8)',
                strokeWidth:1,
                x:32, y:35,
                radius: 20,
                }).drawArc({
                fillStyle:'rgba(0,0,0,0.6)',
                strokeStyle: 'rgba(0,0,0,0.8)',
                strokeWidth:1,
                x: 90, y:35,
                radius: 10,
                }).drawLine({
                strokeStyle: '#888888',
                strokeWidth: 5,
                // shadowColor: 'black',
                // shadowBlur: 20,
                rounded: true,
                x1: 149, y1: 35,
                x2: 289, y2: 35,
                });
    }
    
});