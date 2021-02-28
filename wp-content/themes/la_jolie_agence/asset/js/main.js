$(window).load(function () {
  //   $(".page-flexslider").flexslider({
  //     animation: "slide",
  //     directionNav: false,
  //   });

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

 
    $('.flexslider').flexslider({
        animation: "slide",
        directionNav: false,
        controlNav: false,
    });

});
