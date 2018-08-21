/*
File Name: haj.js
Programmer: Brandon El Haj
*/

// Changes mobile nav button to black 
$("#hamburger-menu").hover(function () {
      $(this).css({ "background-image": "url('/images/hamburger_icon_hover.svg')" });
   },
   function () {
      $(this).css({ "background-image": "url('/images/hamburger_icon.svg')" });
   }
);

// These functions bold the current link to let the user know which page he is on. 
$(function() {
    var lastpart = getLastPart(window.location.href);
    $('nav a[href$="/' + lastpart + '"]').addClass('active');
    if (lastpart == "index.php") {
        $('nav a[href$="/home"]').addClass('active');
	}
});
function getLastPart(url) {
    var parts = url.split("/");
    return (url.lastIndexOf('/') !== url.length - 1 ? parts[parts.length - 1] : parts[parts.length - 2]);
}

// This function clears the Name and Email and Message fields on the contact form after its submitted.
$(".reset").click(function() {
    $(this).closest('form').find("input[type=text], input[type=email], textarea").val("");
});


