

$(window).load(function () {

  // Parallax
  $(".parallax-window").parallax({
    imageSrc: "wp-content/themes/la_jolie_agence/asset/img/parralax1.jpg",
  });
  $(".parallax-window-about").parallax({
    imageSrc: "wp-content/themes/la_jolie_agence/asset/img/parralax-about2.jpg",
  });
  $(".parallax-window-about").parallax({
    imageSrc: "wp-content/themes/la_jolie_agence/asset/img/parralax-about3.jpg",
  });
  $(".parallax-gallery").parallax({
    imageSrc:
      "../wp-content/themes/la_jolie_agence/asset/img/parallax.jpg",
  });
 
  // Flexslider
  $(".flexslider").flexslider({
    animation: "slide",
    directionNav: false,
    controlNav: false,
  });

  // NAVBAR JS
  $(window).scroll(function () {
    // checks if window is scrolled more than 700px, hide/show --->  navbar
    if ($(this).scrollTop() > 700) {
      $(".navbar").css( "position", "fixed");
      $(".navbar").css( "background-color", "#fff");
      $(".nav-link").css( "color", "#666");
    } else {
      $(".navbar").css( "position", "absolute" );
      $(".navbar").css( "background-color", "transparent" );
      $(".nav-link").css( "color", "#fff" );
    }
  });

});

// var scroll = new SmoothScroll('body', {
//   speed: 500,
//   speedAsDuration: true,
//   // linear: true,
// });
