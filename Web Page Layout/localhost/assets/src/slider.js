$(document).ready(function(){
	let position = 0;
	const slideslidesToShow = 3;
	const slidesToScroll = 2;
	const container = $('.training-slider');
	const track = $('.slider-track');
	const item = $('.slider-item');
	const btnPrev = $('.training-slider__btn-left');
	const btnNext = $('.training-slider__btn-right');
	const itemsCount = item.length;
	const itemWidth = container.width() / slideslidesToShow;
	const movePosition = slidesToScroll * itemWidth;
	
	item.each(function(index, item) {
		$(item).css({
			maxWidth: itemWidth,
		});
	});
	
	btnNext.click(function(){
		const itemsRight = itemsCount - (Math.abs(position) + slideslidesToShow * itemWidth) / itemWidth;
		
		position -= itemsRight >= slidesToScroll ? movePosition : itemsRight * itemWidth;
		
		setPosition();
		checkBtns();
	});
	
	btnPrev.click(function(){
		const itemsLeft = Math.abs(position) / itemWidth;
		
		position += itemsLeft >= slidesToScroll ? movePosition : itemsLeft * itemWidth;
		
		setPosition();
		checkBtns();
	});
	
	
	const setPosition = () => {
		track.css({
			transform: 'translateX('+position+'px)'
		});
	};
	
	const checkBtns = () => {
		btnPrev.prop("disabled", position === 0);
		btnNext.prop(
			"disabled", position <= -(itemsCount - slideslidesToShow) * itemWidth
		);
	};
	checkBtns();
});