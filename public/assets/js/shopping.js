$(document).ready(function() {
    $('.js-item-popup').click(function() {
      var id = $(this).closest('tr').data('id');
      openPopup(id);
    });
  });

function openPopup(id) {
    var popupWrapper = document.getElementById("popupWrapper");
    var popupIframe = document.getElementById("popupIframe");
    var editUrl = "shopping/edit/" + id;
  
    popupIframe.src = editUrl;
    popupWrapper.style.display = "block";
  }
  
  function closePopup() {
    var popupWrapper = document.getElementById("popupWrapper");
    var popupIframe = document.getElementById("popupIframe");
  
    popupIframe.src = "";
    popupWrapper.style.display = "none";
  }