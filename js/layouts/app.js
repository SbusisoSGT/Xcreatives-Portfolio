/* Navbar JS */

$(document).ready(function(){
	var $dropMenu = $('.dropdown-container');
	$('#menu-icon').click(function(event){
       	event.preventDefault();
       	if ($dropMenu.is(':hidden')){
            $('.dropdown-container').slideDown();

      	}else{
            $('.dropdown-container').slideUp();
       	}
   	});


	$('.overlay').click(function(){
		$('.hide-element').hide();
		$('body').css('overflow', 'scroll');
	});
});

function showDropdown(){
    var dropdown = document.querySelector('.dropdown-container');
    dropdown.style.display = 'block';
} 

function closeDropdown(){
    var dropdown = document.querySelector('.dropdown-container');
    dropdown.style.display = 'none';
}