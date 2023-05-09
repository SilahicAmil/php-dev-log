console.log("hello world");

$(document).ready(function () {
  $("#show-more-text").hide();
  $("#hide-content").click(function () {
    $("#hide").toggle();
    console.log("toogl");
  });

  $("#show-more-content").click(function () {
    $("#show-more-text").toggle();
  });
});
