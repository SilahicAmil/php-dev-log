console.log("hello world");

$(document).ready(function () {
  $("#show-more-text").hide();

  $("#show-more-content").click(function () {
    $("#show-more-text").toggle();
  });

  $("#sidebar-menu-hidden-text").hide();
  $("#change-css-button").click(function () {
    $("#sidebar-menu-hidden-text").toggle();
  });
});
