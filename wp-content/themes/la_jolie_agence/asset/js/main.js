$(window).load(function () {
  // Parallax
  $(".parallax-window").parallax({
    imageSrc: "wp-content/themes/la_jolie_agence/asset/img/fleur.jpg",
  });

  //   var fullscreen = function () {
  //     var fheight = $(window).height();
  //     $(".fullscreen").css("height", fheight);
  //   };

  //   //Execute on load
  //   fullscreen();

  //   //Execute on window resize
  //   $(window).resize(function () {
  //     fullscreen();
  //   });
  
//   Flexslider
  $(".flexslider").flexslider({
    animation: "slide",
    directionNav: false,
    controlNav: false,
  });
});
