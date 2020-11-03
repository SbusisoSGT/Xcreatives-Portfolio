/*		Js		*/

// const artworkElements = document.querySelectorAll('.artwork');

// for(element of artworkElements){
//     element.addEventListener('click', showArtwork);
// }

function showArtwork(event)
{
	var artwork = event.target;
	// var height = artwork.height;
	// var width = artwork.width;

	// alert("Height: " + height + "\nWidth: " + width);
	// if(height > width)
	// 	document.querySelector('main-pic').style.width = "60%";
	// else
	// 	document.querySelector('main-pic').style.width = "85%";

	const src = artwork.attributes.src.value;
	document.querySelector('.main-pic').attributes.src.value = src;

	var artwork_container = document.querySelector('.full-artwork-container');
	artwork_container.style.width = '100%';

}

function closeArtwork()
{
	var artwork_container = document.querySelector('.full-artwork-container');
	artwork_container.style.width = '0';
}

function slideUp()
{
	
}

// $('.artwork').click(function(){
// 			$('.full-artwork').show();
// 			// $('.overlay').show();
// 			$('body').css('overflow', 'hidden');
// 		});