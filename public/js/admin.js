let btn = document.querySelector('#btn');
let sidebar  = document.querySelector('.sidebar')
let searchbtn = document.querySelector('.bx-search-alt-2')

btn.onclick=function () {
    sidebar.classList.toggle("active");
}

searchbtn.onclick=function () {
    sidebar.classList.toggle("active");
}

$('.read-more-content').addClass('hide_content')
$('.read-more-show, .read-more-hide').removeClass('hide_content')

// Set up the toggle effect:
$('.read-more-show').on('click', function(e) {
  $(this).next('.read-more-content').removeClass('hide_content');
  $(this).addClass('hide_content');
  e.preventDefault();
});

// Changes contributed by @diego-rzg
$('.read-more-hide').on('click', function(e) {
  var p = $(this).parent('.read-more-content');
  p.addClass('hide_content');
  p.prev('.read-more-show').removeClass('hide_content'); // Hide only the preceding "Read More"
  e.preventDefault();
});


tinymce.init({
  selector: '#description',
  plugins: "advlist autolink autosave link image lists charmap print preview hr anchor pagebreak spellchecker searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking save table contextmenu directionality emoticons template textcolor paste textcolor colorpicker",


});


function hide() {
  $("#popupService").hide(); 
}

function show() {
  $("#popupService").show(); 
}


