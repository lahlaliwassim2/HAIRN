
const sliderContainer = document.querySelector('.carousel-container');
const textSlide = document.querySelector('.text-slide');
const imageSlide = document.querySelector('.image-slide');
const btnUp = document.querySelector('.button-up');
const btnDown = document.querySelector('.button-down');
const slidesLength = imageSlide.querySelectorAll('div').length;

let activeSlideIndex = 0;

//Faire correspondre l'image avec le texte associé au chargement de la page
textSlide.style.top = `-${(slidesLength - 1) * 100}vh`;

btnUp.addEventListener('click', () => changeSlide('up'));
btnDown.addEventListener('click', () => changeSlide('down'));

const changeSlide = (direction) => {
	const currentSliderHeight = sliderContainer.clientHeight;
	if (direction === 'up') {
		activeSlideIndex++;
		if (activeSlideIndex > slidesLength - 1) {
			activeSlideIndex = 0;
		}
	} else if (direction === 'down') {
		activeSlideIndex--;
		if (activeSlideIndex < 0) {
			activeSlideIndex = slidesLength - 1;
		}
	}

	imageSlide.style.transform = `translateY(-${activeSlideIndex * currentSliderHeight}px)`;
	imageSlide.style.transition = 'transform .3s ease-in-out';
	textSlide.style.transform = `translateY(${activeSlideIndex * currentSliderHeight}px)`;
	textSlide.style.transition = 'transform .3s ease-in-out';
};
