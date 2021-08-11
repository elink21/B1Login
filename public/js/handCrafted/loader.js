$(document).ready(function () {
  var tl = anime.timeline({
    easing: "linear",
    duration:350,
  });

  tl.add({
    targets: "#teamLogo",
    translateY: [-300, -300],
    delay: 100,
  })
    .add({
      targets: "#teamLogo",
      translateY: [-300, 0],
      fontSize: 10,
      opacity: [1,0],
      delay: 100,
    })
    .add({
      targets: ".staggerDiv",
      translateY: [0, -1500],
      opacity: [1, 0.5],
      delay: anime.stagger(200),
    })
    .add({
      targets: "#whiteScreen",
      opacity: [1, 0],
      complete: function () {
        $("#loader").fadeOut();
      },
    });
});
