/*menu handler*/
$(function(){
  function stripTrailingSlash(str) {
    if(str.substr(-1) == '/') {
      return str.substr(0, str.length - 1);
    }
    return str;
  }

  var url = window.location.pathname;  
  var activePage = stripTrailingSlash(url);
  $('.nav li a').each(function(){  
    var currentPage = stripTrailingSlash($(this).attr('href'));
    //alert(activePage+":"+currentPage);
    if (activePage == "/se/"+currentPage) {
      $(this).parent().addClass('active'); 
    } 
  });
});

function readURL(input) {

    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('#productImage').attr('src', e.target.result);
        }

        reader.readAsDataURL(input.files[0]);
    }
}

$("#productImageInput").change(function(){
    readURL(this);
});