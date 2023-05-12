console.log("hello world");

$(document).ready(function () {
  // Toggle Placeholder Content on ?id=:id page
  $("#show-more-text").hide();
  $("#show-more-content").click(function () {
    $(this).text(function (i, text) {
      // if text is show more then when clicked set to show less
      // else when "unclicked" show more
      return text === "Show More" ? "Show Less" : "Show More";
    });
    $("#show-more-text").toggle();
  });
});
