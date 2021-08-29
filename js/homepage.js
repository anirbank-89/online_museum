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
    