$(document).ready(function() {
  var toggleCollapse = document.querySelector(".toggleCollapse");
  toggleCollapse.addEventListener("click", function(){
    document.querySelector("body").classList.toggle("active");
  })
  setActiveMenu();

  function setActiveMenu() {
    var currentUrl = window.location.href;
    $('.sidebar ul li a').each(function() {
      if ($(this).attr('href') === currentUrl) {
        $(this).addClass('active');
      } else {
        $(this).removeClass('active');
      }
    });
  }
});