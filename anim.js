var $canvas;
$(document).ready(function () {
    $('#main').append("<canvas id='canvas'\n\style='\n\
        position:fixed;\n\
        display:block;\n\
        height: 100%;\n\
        z-index:0;\n\
        top:50%;\n\
        left:50%;\n\
        -webkit-transform:translate(-50%, -50%);\n\
        transform:translate(-50%, -50%);\n\
        width: 100%;'></canvas>");
    //canvas init
    $canvas = $('#canvas');
    var canvas = document.getElementById("canvas");
    var context = canvas.getContext("2d");
    var W = $canvas.width();
    var H = $canvas.height();
    canvas.width = W;
    canvas.height = H;
    var mp = 250;
    var particles = [];
    for (var i = 0; i < mp; i++) {
        particles.push(makeParticle());
    }

    function draw() {
        context.clearRect(0, 0, W, H);
        context.fillStyle = "rgba(13, 48, 110, 1)";
        context.beginPath();
        for (var i = 0; i < particles.length; i++) {
            var p = particles[i];
            context.moveTo(p.x, p.y);
            context.arc(p.x, p.y, p.r, 0, Math.PI * 2, true);
        }
        context.fill();
        update();
    }

    var runcounter = 0;
    function update() {
        runcounter++;
        for (var i = 0; i < particles.length; i++, mp) {
            var p = particles[i];
            p.mx = p.mx * .99;
            p.my = p.my * .99;
            p.my += .001 * Math.cos(p.a) * p.d; //+ p.d + 1 + p.r / 2;
            p.mx += .001 * Math.sin(p.a) * p.d; // * 2;
            p.x += p.mx;
            p.y += p.my;
            p.a = Math.random() * (Math.PI * 2); // angle
            if (p.x > W + p.r || p.x < 0 - p.r || p.y > H + p.r || p.y < 0 - p.r) {
                particles.splice(i, 1);
                i--;
            }
            ;
        }
    }
    setTimeout(setInterval(draw, 33), 50);

    function makeParticle() {
        return {
            x: Math.random() * W, //start X
            y: Math.random() * H, //start Y
            mx: Math.random() * .25 -.125, //momentum x
            my: Math.random() * .25 -.125, //momentum y
            r: Math.random() * 2 + 2, //radius
            d: Math.random() * 25 + 2, //density
            a: Math.random() * (Math.PI * 2) // angle
        };
    }
});





