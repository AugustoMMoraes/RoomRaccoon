$(document).ready(function() {
    $('.js-item-popup').click(function() {
      var id = $(this).closest('tr').data('id');
      openPopup(id);
    });

    $('.table-container').on('click', '.btn-delete', function() {
      var id = $(this).closest('tr').data('id');

      /** Might change this in the future, if the table structure change, it will get the wrong text*/
      var name = $(this).closest('tr').find('td:eq(0)').text();
      openPopupDelete(id);
    });
    
    $('.js-item-add-popup').click(function() {
      openPopupAdd();
    });

  document.querySelector('.close-btn').addEventListener('click', closePopup);

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
    location.reload();
  }

  function openPopupDelete(id) {
    var popupWrapper = document.getElementById("popupWrapper");
    var popupIframe = document.getElementById("popupIframe");
    var editUrl = "shopping/delete/" + id;
  
    popupIframe.src = editUrl;
    popupWrapper.style.display = "block";
  }

  function openPopupAdd() {
    var popupWrapper = document.getElementById("popupWrapper");
    var popupIframe = document.getElementById("popupIframe");
    var editUrl = "shopping/add/";
  
    popupIframe.src = editUrl;
    popupWrapper.style.display = "block";
  }
