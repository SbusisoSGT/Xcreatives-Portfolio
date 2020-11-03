/* Navbar JS */

// $(document).ready(function(){
// 	var $dropMenu = $('.dropdown-container');
// 	$('#menu-icon').click(function(event){
//        	event.preventDefault();
//        	if ($dropMenu.is(':hidden')){
//             $('.dropdown-container').slideDown();

//       	}else{
//             $('.dropdown-container').slideUp();
//        	}
//    	});


// 	$('.overlay').click(function(){
// 		$('.hide-element').hide();
// 		$('body').css('overflow', 'scroll');
// 	});
// });


let nav_html = "<i id='menu-icon' class='material-icons' onclick='showDropdown()'>menu</i>";
nav_html += "<div class='logo'>";
nav_html += "<a href='index.html'><span class='logo-img'>Xcreatives</span></a>";
nav_html += "</div>";

let dropdown_html = "<div class='dropdown-close'>";
dropdown_html += "<i class='fa fa-close' onclick='closeDropdown()'></i>";
dropdown_html += "</div>";
dropdown_html += "<ul class='dropdown-links'>";
dropdown_html += "<li><a href='index.html'>HOME</a></li>";
dropdown_html += "<li><a href='gallery.html'>GALLERY</a></li>";
dropdown_html += "<li><a href='contact.html'>CONTACT</a></li>";
dropdown_html += "<li><a href='contact.html'>ABOUT</a></li>";
dropdown_html += "</ul>";
dropdown_html += "<div class='dropdown-contact'>";
dropdown_html += "<a href='https://www.facebook.com/xcreatives' target='_blank'><i class='fab fa-facebook-f'></i></a>";
dropdown_html += "<a href='mailto:xakaweboss@gmail.com'><i class='fas fa-envelope'></i></a>";
dropdown_html += "<a href='https://www.wa.me/27609368929'><i class='fab fa-whatsapp'></i></a>";
dropdown_html += "</div>";

const nav = document.querySelector(".nav");
const dropdown = document.querySelector(".dropdown-container");

document.addEventListener('DOMContentLoaded', () => {
  nav.innerHTML = nav_html;
  dropdown.innerHTML = dropdown_html;
})

// nav.addEventListener('mouseover', () => {
//   nav.style.background = 'red';
// })

// function injectNav(){
//   nav.innerHTML = nav_html;
// }

// function injectDropdown(){
//   const dropdown = querySelector(".dropdown-container");
  
// }

function showDropdown(){
    var dropdown = document.querySelector('.dropdown-container');
    dropdown.style.height = "100%";
} 

function closeDropdown(){
    var dropdown = document.querySelector('.dropdown-container');
    dropdown.style.height = "0";
}