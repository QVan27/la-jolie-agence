$(window).load(function () {
  // Parallax
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
    // checks if window is scrolled more than 700px, hide/show --->  navbar / navbar-js
    if ($(this).scrollTop() > 700) {
      $(".navbar").fadeOut();
      $("#navbar-js").fadeIn();
    } else {
      $("#navbar-js").fadeOut();
      $(".navbar").fadeIn();
    }
  });

  //   $('#gallery-link').click(function (e) {
  //     e.preventDefault();

  //     $('.navbar').css('display', 'none');
  //     $('.navbar-link').css('display', 'block');
  // })
});
