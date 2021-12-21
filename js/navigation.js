let menuBtn = document.querySelector('.menu-icon');
let menulink = document.querySelectorAll('.nav-container li');

menuBtn.addEventListener('click', function(event) {
	let siteNavigation = document.getElementById( 'site-navigation' );
	siteNavigation.classList.toggle( 'toggled' );
	menuBtn.classList.toggle('close-menu');
	event.preventDefault();
});

// for (let i=0; i<menulink.length; i++) {
// 	menulink[i].addEventListener('click', function(event) {
// 		//event.preventDefault();
// 		return false;
// 	});
// }
