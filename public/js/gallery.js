/*		Gallery JS		*/


function showArtwork(event)
{
	let artwork = event.target;

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