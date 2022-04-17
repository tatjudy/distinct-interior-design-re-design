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

let scrollPos = 0;
const nav = document.querySelector('header');

function debounce(func, wait = 10, immediate = true) {
	let timeout;
	return function() {
	  let context = this, args = arguments;
	  let later = function() {
		timeout = null;
		if (!immediate) func.apply(context, args);
	  };
	  let callNow = immediate && !timeout;
	  clearTimeout(timeout);
	  timeout = setTimeout(later, wait);
	  if (callNow) func.apply(context, args);
	};
  };

function checkPosition() {
	let windowY = window.scrollY;
	if (windowY < scrollPos) {
		//scrolling up
		nav.classList.add('is-visible');
		nav.classList.remove('is-hidden');
	} 
	else {
		//scrolling down
		nav.classList.add('is-hidden');
		nav.classList.remove('is-visible');
	}
	scrollPos = windowY;
}

window.addEventListener('scroll', debounce(checkPosition));