/*
** Background Particles
*/
var makeBgParticles = (function() {

  Math.randMinMax = function(t,n,a) {
    var r=t+Math.random()*(n-t)
    return a&&(r=Math.round(r)),r
  }

  var w = window.innerWidth,
     h = window.innerHeight,
     numberOfStars = 50,
      PosX = 0,
      PosY = 0,
      tl = new TimelineMax();

  for (i=0; i< numberOfStars; i++) {
     $star = $('<div class="star" />'),

     PosX = Math.floor(Math.random() * w);
     PosY = Math.floor(Math.random() * h);

     var size = Math.floor(Math.random()* 200);
     $('.Global').append( $star );

      if(i%2 == 0){
        TweenLite.set($star, {backgroundColor: "#ffcd5e"})
      }
      if(i%3 == 0){
        TweenLite.set($star, {backgroundColor: "#fe8261"})
      }

    TweenLite.set($star, {
      x:PosX,
      y:PosY - (size * 10),
      width: size,
      height: size,
      opacity: 0.02
    });

     tl.to($star, Math.randMinMax(10, 100), {
        x: Math.randMinMax(-500, 1000),
        y: h + (size *2),
        opacity:.02,
        repeat:-1,
        repeatDelay:Math.randMinMax(0, 1),
        ease:Linear.easeNone},
        Math.randMinMax(0, 4))
    }
})();
