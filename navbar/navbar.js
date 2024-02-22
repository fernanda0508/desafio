// navbar.js
$(function () {
  console.log("Navbar.js loaded");
  $("#navbar-placeholder").load("../../navbar/navbar.html", function (response, status, xhr) {
    if (status == "error") {
      console.log("Error loading navbar:", xhr.status, xhr.statusText);
    }
  });
});
