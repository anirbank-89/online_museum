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

    for(i=0;i<30;i=i+1)
    {
        var p1="#close_eye"+(1+i);
        var p2="#open_eye"+(1+i);
        // for login icon
        var $a=$("#login_logo");

        // for eye1
        var $b=$(p1);
        var $c=$(p2);


            // drawing login icon
                $a.drawArc({
                fillStyle:'#888888',
                x: 148, y: 200,
                radius: 100,
                start: -75, end: 75
                }).drawArc({
                fillStyle: '#888888',
                x: 148, y: 55,
                radius: 40,
                });

            // drawing eye1
                $b.drawArc({
                strokeStyle: '#888888',
                strokeWidth: 15,
                x: 145, y: 163,
                radius: 130,
                start: -50, end: 50
                }).drawArc({
                strokeStyle: '#888888',
                strokeWidth: 15,
                x: 145, y: -13,
                radius: 130,
                start: 130, end: -130
                }).drawArc({
                fillStyle: '#888888',
                x: 145, y: 75,
                radius: 30,
                }).drawLine({
                strokeStyle: '#888888',
                strokeWidth: 15,
                shadowColor: 'white',
                shadowBlur: 20,
                rounded: true,
                x1: 50, y1: 30,
                x2: 235, y2: 120,
                });

                $c.drawArc({
                strokeStyle: '#3399FF',
                strokeWidth: 15,
                shadowColor: '#888888',
                shadowBlur: 10,
                x: 145, y: 163,
                radius: 130,
                start: -50, end: 50
                }).drawArc({
                strokeStyle: '#3399FF',
                strokeWidth: 15,
                shadowColor: '#888888',
                shadowBlur: 10,
                x: 145, y: -13,
                radius: 130,
                start: 130, end: -130
                }).drawArc({
                fillStyle: '#3399FF',
                shadowColor: '#888888',
                shadowBlur: 10,
                x: 145, y: 75,
                radius: 30,
                });
    }
        // password visible & unvisible for eye1
        $("#close_eye1").click(function(){
            $("#open_eye1").show();
            $("#close_eye1").hide();
            $("input[name='password']").attr("type","text");
        });
        $("#open_eye1").click(function(){
            $("#close_eye1").show();
            $("#open_eye1").hide();
            $("input[name='password']").attr("type","password");
        });

        // password visible & unvisible for eye2
        $("#close_eye2").click(function(){
            $("#open_eye2").show();
            $("#close_eye2").hide();
            $("input[name='password']").attr("type","text");

        });
        $("#open_eye2").click(function(){
            $("#close_eye2").show();
            $("#open_eye2").hide();
            $("input[name='password']").attr("type","password");
        });

        // password visible & unvisible for eye3
        $("#close_eye3").click(function(){
            $("#open_eye3").show();
            $("#close_eye3").hide();
            $("input[name='password']").attr("type","text");
        });
        $("#open_eye3").click(function(){
            $("#close_eye3").show();
            $("#open_eye3").hide();
            $("input[name='password']").attr("type","password");
        });
// ----------------------------------------------------
// ------------------------------------------------------

    $("#user").attr("checked",true);
    $("input[type='radio']").click(function(){
    if($("#user").is(":checked"))
    {
      $("#unpaid_user_div").show();
      $("#paid_user_div").hide();
      $("#seller_div").hide();
    }
    if($("#paid_user").is(":checked"))
    {
      $("#unpaid_user_div").hide();
      $("#paid_user_div").show();
      $("#seller_div").hide();
    }
    if($("#seller").is(":checked"))
    {
      $("#unpaid_user_div").hide();
      $("#paid_user_div").hide();
      $("#seller_div").show();
    }

  });
});
