// I Didn't use owlcarosel cause I thought it may not be allow to use any library and framework

$(document).ready(function() {
	blogPostsSlider();
	ourMembersSlider();
});

function blogPostsSlider() {
	var items = $("#blog .blog-post");
	var right_button = $("#blog .slider .slider-direction-right");
	var left_button = $("#blog .slider .slider-direction-left");
	var slider_container = $("#blog .slider .slider-container");

	if (window.matchMedia('(max-width: 768px)'))
		var items_visiable_count = 4;
	else if (window.matchMedia('(max-width: 640px)'))
		var items_visiable_count = 2;
	else
		var items_visiable_count = 1;

	var items_count = $(items).length;
	var last_item_index = items_visiable_count - 1;

	// hiding items and just keep the first 4 items
	$.each(items, function(index, item) {
		$(item).show();
		if (index > last_item_index) {
			$(item).hide();
		}
	});

	// height of slider-container to prevent any height changes
	$(slider_container).css('height', $("#blog .slider .slider-container .slider-item").height());


	right_button.click(function() {
		if (items_count > last_item_index + 1) {
			$(items[last_item_index + 1]).show();
			$(items[last_item_index + 1 - items_visiable_count]).hide();
			last_item_index++;
		}
	});
	left_button.click(function() {
		if (items_visiable_count < last_item_index + 1) {
			$(items[last_item_index - items_visiable_count]).show();
			$(items[last_item_index]).hide();
			last_item_index--;
		}
	});
};

function ourMembersSlider() {
	var items = $("#our-members .member");
	var slider_container = $("#our-members .slider .slider-container");

	if (window.matchMedia('(max-width: 640px)'))
		var items_visiable_count = 5;
	else
		var items_visiable_count = 1;

	var items_count = $(items).length;

	var nav_buttons_count = items_count - items_visiable_count + 1;
	if (nav_buttons_count <= 1) return;

	// hiding items and just keep the first 5 items
	$.each(items, function(index, item) {
		$(item).show();
		if (index > items_visiable_count - 1) {
			$(item).hide();
		}
	});

	// adding slider nav buttons
	if (!$('.slider-nav').length)
		$("#our-members .slider").append('<div class="slider-nav"></div>');
	else
		$('.slider-nav').html('');
	var slider_nav = $("#our-members .slider .slider-nav");
	for (var i = 0; i < nav_buttons_count; i++) {
		$(slider_nav).append('<span class="slider-nav-button"><i class="fa fa-circle" aria-hidden="true"></i></span>');
	}

	// define the current slider nav button
	var slider_nav_buttons = $("#our-members .slider .slider-nav .slider-nav-button");
	$(slider_nav_buttons[0]).addClass('slider-curr-page');

	// action!
	$(slider_nav_buttons).each(function(index) {
		$(this).click(function() {
			// hide all items
			$(items).each(function(index, item) {
				$(item).hide();
			});

			// show items based on nav_button index
			for (var i = index; i < index + items_visiable_count; i++) {
				$(items[i]).show();
			}

			$(".slider-curr-page").removeClass('slider-curr-page');
			$(this).toggleClass('slider-curr-page');
		});
	});
};
var waitForFinalEvent = (function() {
	var timers = {};
	return function(callback, ms, uniqueId) {
		if (!uniqueId) {
			uniqueId = "Don't call this twice without a uniqueId";
		}
		if (timers[uniqueId]) {
			clearTimeout(timers[uniqueId]);
		}
		timers[uniqueId] = setTimeout(callback, ms);
	};
})();
$(window).resize(function() {
	waitForFinalEvent(function() {
		ourMembersSlider();
		blogPostsSlider();
	}, 500, "some unique string");
});