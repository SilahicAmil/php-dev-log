console.log("hello world");

$(document).ready(function () {
  // Toggle Placeholder Content on ?id=:id page
  $("#show-more-text").hide();
  $("#show-more-content").click(function () {
    $("#show-more-text").toggle();
  });

  // Toggle Placeholder Content on index.php Left Side Bar Menu
  //
  $("#sidebar-menu-hidden-text").hide();
  $("#change-css-button").click(function () {
    $("#sidebar-menu-hidden-text").toggle();
  });
});
