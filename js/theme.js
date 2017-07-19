
$(document).ready(function(){
	(function blogPostsSlider(){
		var items = $("#blog .blog-post");
		var right_button = $("#blog .slider .slider-direction-right");
		var left_button = $("#blog .slider .slider-direction-left");
		var slider_container = $("#blog .slider .slider-container");

		// hiding elements and just keep the first 4 elements
		var items_visiable_count = 4;
		var items_count = $(items).length;
		var last_item_index = items_visiable_count-1;
		$.each(items, function(index, item) {
			if (index > last_item_index) {
				$(item).hide();
			}
		});

		$(slider_container).css('height', $("#blog .slider .slider-container .slider-item").height());


		right_button.click(function() {
			if (items_count > last_item_index+1) {
				$(items[last_item_index+1]).show();
				$(items[last_item_index-3]).hide();
				last_item_index++;
			}
		});
		left_button.click(function() {
			if (items_visiable_count < last_item_index+1) {
				$(items[last_item_index-4]).show();
				$(items[last_item_index]).hide();
				last_item_index--;
			}
		});
	})();
});