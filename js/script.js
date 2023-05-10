console.log("hello world");

$(document).ready(function () {
  // Toggle Placeholder Content on ?id=:id page
  $("#show-more-text").hide();
  $("#show-more-content").click(function () {
    $("#show-more-text").toggle();
  });
});
