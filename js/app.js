const burger = document.querySelector('.burger')
const menu = document.querySelector('.header__menu')
burger.addEventListener('click', () => {
	burger.classList.toggle('active')
	menu.classList.toggle('active')
})

$('.room__wrapper').magnificPopup({
	delegate: 'a', 
	type: 'image',
	gallery: {
		enabled: true,
	},
	removalDelay: 300,
	mainClass: 'mfp-fade'
 });