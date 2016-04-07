//Load all functions
jQuery(function(){
	accordion();
	tabs();
	upload();
	checkbox();
	radio();
	select();
	modal();
	tooltip();
	//fields_focus();
	disable();
	disable_link();

	scrollTo_click('.scroll_to', 100);
	//sticky($id);


	/////////////////////////////////////////////////////////////////////////////////
	//Additional actons
	//checkbox_change($id);
	//checkbox_set($id);
	//checkbox_unset($id);

	//radio_change($id);
	//radio_set($id);
	//radio_unset($id);
	//radio_group_unset($input_group);

	//tabs_set($id, $tabs);

	//accordion_open($id, $accordion);
	//accordion_close($id, $accordion);

	//modal_open($id);
	//modal_close($id);
	//modal_calculate_center($id);

	//sticky_footer($container, $id, $offset);

	//scrollTo($id, $offset)

	//setCookie($key, $value, $time);
	//getCookie($key);

	//escape_string($str);
});

//Actions on window resize
jQuery(window).resize(function(){

});


/////////////////////////////////////////////////////////////////////////////////

//Checkbox script
function checkbox(){

	var $input = jQuery('input[type=checkbox]');

	//On page load set
	$input.each(function(){

		//Check if there is checked class in input
		if(jQuery(this).is(':checked')){
			var $id = jQuery(this).attr('id');
			checkbox_set($id);
		}

		//Check if input is disabled
		if(jQuery(this).is(':disabled')){
			jQuery(this).closest('.checkbox').find('label').addClass('disabled');
		}
	});

	//On click action
	jQuery('.checkbox label').on('click',function(e){
		var $id = jQuery(this).attr('for');
		checkbox_change($id);
	});

	//Fix IE11 force trigger if image is in label
	jQuery('.checkbox label > img').on('click', function(){
		var $label = jQuery(this).closest('label'),
			$id = $label.attr('for');
		$label.trigger('click');
		checkbox_change($id);
	});

	//On space click action
	$input.keypress(function(e) {
		if (e.keyCode == 0 || e.keyCode == 32) {
			var $id = jQuery(this).attr('id');
			checkbox_change($id);
		}
	});

	//Stop checkbox from activating if there is a link in label
	jQuery('.checkbox label a').on('click',function(e){
		e.stopPropagation();
	});

	//On focus add class to display focus style
	$input.bind('focus', function(){
		jQuery(this).closest('.checkbox').addClass('focus');
	});

	//On blur remove class to display focus style
	$input.bind('blur', function(){
		jQuery(this).closest('.checkbox').removeClass('focus');
	})
}

//Checkbox change state
function checkbox_change($id){
	if(typeof $id == 'undefined'){
		$id ='';
	}

	$id = escape_string($id);

	var $input = jQuery('input[id="'+$id+'"]'),
		$label = jQuery('label[for="'+$id+'"]');
	if(!$input.is(':disabled')){
		if($input.prop('checked')){
			$label.removeClass('checked');
		}else{
			$label.addClass('checked');
		}
	}else{
		jQuery(this).addClass('disabled');
	}

}

//Checkbox set by id
function checkbox_set($id){
	var $input = jQuery('input[id="'+$id+'"]'),
		$label = jQuery('label[for="'+$id+'"]');
	$label.addClass('checked');
	$input.prop('checked', true);
}

//Checkbox unset by id
function checkbox_unset($id){
	var $input = jQuery('input[id="'+$id+'"]'),
		$label = jQuery('label[for="'+$id+'"]');
	$label.removeClass('checked');
	$input.prop('checked', false);
}

/////////////////////////////////////////////////////////////////////////////////

//Radio script
function radio(id){

	var $input = jQuery('input[type=radio]');

	//On page load set
	$input.each(function(){

		//Check if there is checked class in input
		if(jQuery(this).is(':checked')){
			var $id = jQuery(this).attr('id');
			radio_set($id);
		}

		//Check if input is disabled
		if(jQuery(this).is(':disabled')){
			jQuery(this).closest('.radio').find('label').addClass('disabled');
		}
	});

	//On click action
	jQuery('.radio label').on('click', function(){
		var $id = jQuery(this).attr('for');
		radio_change($id)
	});

	//Fix IE11 force trigger if image is in label
	jQuery('.radio label > img').on('click', function(){
		var $label = jQuery(this).closest('label'),
			$id = $label.attr('for');
		$label.trigger('click');
		radio_change($id);
	});

	//On space click action
	$input.keypress(function(e) {
		if (e.keyCode == 0 || e.keyCode == 32) {
			var $id = jQuery(this).attr('id');
			radio_change($id);

			console.log(e.keyCode);
			return false;
		}
	});

	//On left, right, up, down change radio state
	$input.keyup(function(e) {
		if (e.keyCode == 37 || e.keyCode == 38 || e.keyCode == 39 || e.keyCode == 40) {
			var $id = jQuery(this).attr('id');
			radio_change($id);
		}
	});

	//Stop radio from activating if there is a link in label
	jQuery('.radio label a').on('click',function(e){
		e.stopPropagation();
	});

	//On focus add class to display focus style
	$input.bind('focus', function(){
		jQuery(this).closest('.radio').addClass('focus');
	});

	//On blur remove class to display focus style
	$input.bind('blur', function(){
		jQuery(this).closest('.radio').removeClass('focus');
	})
}

//Radio change state
function radio_change($id){
	if(typeof $id == 'undefined'){
		$id ='';
	}

	$id = escape_string($id);

	var $input = jQuery('input[id="'+$id+'"]'),
		$input_group = $input.attr('name'),
		$label = jQuery('label[for="'+$id+'"]');

	if(!$input.is(':disabled')){
		jQuery('.radio[data-group="'+$input_group+'"] label').removeClass('checked');
		$label.addClass('checked');
	}else{
		jQuery(this).addClass('disabled');
	}
}

//Radio set by id
function radio_set($id){
	var $input = jQuery('input[id="'+$id+'"]'),
		$input_group = $input.attr('name'),
		$label = jQuery('label[for="'+$id+'"]');
	jQuery('.radio[data-group="'+$input_group+'"] label').removeClass('checked');
	$label.addClass('checked');
	$input.prop('checked', true);
}

//Radio unset by id
function radio_unset($id){
	var $input = jQuery('input[id="'+$id+'"]'),
		$input_group = $input.attr('name'),
		$group = jQuery('.radio[data-group="'+$input_group+'"]');
	$group.find('label').removeClass('checked');
	$group.find('input[type="radio"]').prop('checked', false);
}

//Radio unset by group name
function radio_group_unset($input_group){
	var $group = jQuery('.radio[data-group="'+$input_group+'"]');
	$group.find('label').removeClass('checked');
	$group.find('input[type="radio"]').prop('checked', false);
}

/////////////////////////////////////////////////////////////////////////////////

//Select script
function select($id){

	if(typeof $id == 'undefined'){
		$id ='.select';
	}

	var $input = jQuery('select');

	//On init
	$input.each(function(){
		var $this = jQuery(this),
			$style = $this.attr('data-style'),
			$select = $this.closest($id).outerWidth()+50;

		if($style !== 'false' && $this.parents($id).length == 0){
			$this.wrap('<div class="select field-row"></div>'); //Field-row class is for magento
		}
		if($style !== 'false') {
			$this.css({minWidth: $select});
		}

		jQuery(window).resize(function(){
			$select = $this.closest($id).outerWidth()+50;
			if($style !== 'false') {
				$this.css({minWidth: $select});
			}
		});
	});

	//On focus add class to display focus style
	$input.bind('focus', function(){
		jQuery(this).closest($id).addClass('focus');
	});

	//On blur remove class to display focus style
	$input.bind('blur', function(){
		jQuery(this).closest($id).removeClass('focus');
	})
}

/////////////////////////////////////////////////////////////////////////////////

//Tooltip script
function tooltip() {
	var $trigger = jQuery('.tooltip_trigger');

	if (Modernizr.touch) {
		$trigger.on('click', function (e) {
			e.preventDefault();
			var $this = jQuery(this),
				$tip = $this.closest('.tooltip').find('.tip');

			if($tip.hasClass('inactive')){
				hide_all_tips();
				show_tip(this);
			}else{
				hide_tip(this);
			}

		});
	}else{
		$trigger.on({
			mouseover: function (e) {
				e.preventDefault();
				show_tip(this);
			},
			mouseout: function (e) {
				e.preventDefault();
				hide_tip(this);
			}
		});
	}


	function show_tip($this){
		//Set variables and selectors
		$this = jQuery($this);
		var $tip = $this.closest('.tooltip').find('.tip'),
			$position = $tip.attr('data-tip-position'),
			$arrow = $tip.attr('data-tip-arrow'),
			$el_width = $this.outerWidth(),
			$el_height = $this.outerHeight(),
			$tip_width = $tip.outerWidth(),
			$tip_height = $tip.outerHeight(),
			$arrow_size = 10,
			$arrow_move = $arrow_size*2,
			$style, $top, $left, $bottom, $right = '';


		//Check if attributes are set
		if($position == '' || $position == undefined){
			$position = 'bottom';
			$tip.attr('data-tip-position', $position)
		}
		if($arrow == '' || $arrow == undefined){
			$arrow = 'center';
			$tip.attr('data-tip-arrow', $arrow)
		}
		if($arrow_size == '' || $arrow_size == undefined){
			$arrow_size = 10;
		}

		//Set positions of tip
		if ($position == 'top') {
			$bottom = $el_height + $arrow_move;
			$top = 'auto'
		}
		//Set positions of tip
		if ($position == 'bottom') {
			$top = $el_height + $arrow_move;
			$bottom = 'auto'
		}
		//Set positions of tip
		if ($position == 'right') {
			$right = -($tip_width + $arrow_move);
			$left = 'auto'
		}
		//Set positions of tip
		if ($position == 'left') {
			$left = -($tip_width + $arrow_move);
			$right = 'auto'
		}

		//Set positions of arrow
		if ($position == 'top' || $position == 'bottom') {
			switch ($arrow){
				case 'left':
					$left = ($el_width/2)-$arrow_size-$arrow_move;
					$right = 'auto';
					break;
				case 'center':
					$left = ($el_width/2)-($tip_width/2);
					$right = 'auto';
					break;
				case 'right':
					$left = 'auto';
					$right = ($el_width/2)-$arrow_size-$arrow_move;
					break;
			}
		}

		//Set positions of arrow
		if ($position == 'left' || $position == 'right') {
			switch ($arrow){
				case 'top':
					$top = ($el_height/2)-$arrow_size-$arrow_move;
					$bottom = 'auto';
					break;
				case 'center':
					$top = ($el_height/2)-($tip_height/2);
					$bottom = 'auto';
					break;
				case 'bottom':
					$top = 'auto';
					$bottom = ($el_height/2)-$arrow_size-$arrow_move;
					break;
			}
		}

		$style = {
			'width':  $tip_width,
			'top':    $top,
			'bottom': $bottom,
			'left':   $left,
			'right':  $right
		};

		jQuery($tip).css($style).removeClass('inactive');
	}

	function hide_tip($this){
		$this = jQuery($this);
		var $tip = $this.closest('.tooltip').find('.tip'),
			$dont_hide = $tip.attr('data-hide');

		if($dont_hide == '' || $dont_hide == undefined || $dont_hide == 'true' ){
			$tip.addClass('inactive');
		}
	}

	function hide_all_tips(){
		jQuery('.tip').addClass('inactive');
	}
}

/////////////////////////////////////////////////////////////////////////////////

//Upload script
function upload(){
	jQuery('.upload input[type=text]').click(function() {
		jQuery(this).closest('.upload').find('input[type=file]').trigger('click');
	});
	jQuery('.upload .btn').click(function(e) {
		e.preventDefault();
		jQuery(this).closest('.upload').find('input[type=file]').trigger('click');
	});
	jQuery('.upload input[type=file]').change(function() {
		jQuery(this).closest('.upload').find('input[type=text]').val(jQuery(this).val());
	});
}

/////////////////////////////////////////////////////////////////////////////////

//Tabs script
function tabs($tabs_id){

	if(typeof $tabs_id == 'undefined'){
		$tabs_id ='.tabs';
	}

	jQuery($tabs_id).each(function(){

		var $this = jQuery(this),
			$active = $this.attr('data-active');

		//if active tab is not set add active to first tab
		if($active == '' || $active === undefined){
			$active = $this.find('.t_head li:first-child').attr('data-tab');
		}

		tabs_set($active, this)
	});

	//Tabs click action
	jQuery('.t_head li').click(function(){
		tabs_change(this, $tabs_id);
	});

	//Change tabs
	function tabs_change($id, $tabs_id){
		var $this = jQuery($id),
			$active = $this.attr('data-tab'),
			$tabs = $this.closest($tabs_id),
			$t_head = $tabs.find('.t_head li'),
			$t_head_id = $tabs.find('.t_head li[data-tab="'+$active+'"]'),
			$t_content = $tabs.find('.t_content'),
			$t_content_id = $tabs.find('.t_content[data-content="'+$active+'"]');

		$t_head.removeClass('active');
		$t_content.removeClass('active');

		$t_head_id.addClass('active');
		$t_content_id.addClass('active');
	}
}

//Tabs set by id
function tabs_set($id, $tabs){

	if(typeof $id == 'undefined'){
		$id ='';
	}

	if(typeof $tabs == 'undefined'){
		$tabs ='.tabs';
	}

	$tabs = jQuery($tabs);
	$tabs.find('.t_head li').removeClass('active');
	$tabs.find('.t_content').removeClass('active');
	$tabs.find('.t_head li[data-tab="'+$id+'"]').addClass('active');
	$tabs.find('.t_content[data-content="'+$id+'"]').addClass('active');
}

/////////////////////////////////////////////////////////////////////////////////

//Accordion script
function accordion($accordion_id){

	if(typeof $accordion_id == 'undefined'){
		$accordion_id ='.accordion';
	}

	//Accordion first load
	jQuery($accordion_id).each(function(){
		var $id = jQuery(this).attr('data-active');
		accordion_open($id, this);
	});

	//Accordion click action
	jQuery('.a_head').click(function(){
		accordion_change(this, $accordion_id);
	});

	//Change accordion
	function accordion_change($id, $accordion_id){
		var $this = jQuery($id),
			$active = $this.attr('data-acc'),
			$accordion = $this.closest($accordion_id),
			$a_head = $accordion.find('.a_head'),
			$a_head_id = $accordion.find('.a_head[data-acc="'+$active+'"]'),
			$a_content = $accordion.find('.a_content'),
			$a_content_id = $accordion.find('.a_content[data-content="'+$active+'"]'),
			$auto_close= $accordion.attr('data-autoclose');

		if($auto_close !== false){
			if(!$a_head_id.hasClass('active')) {
				$a_head.removeClass('active');
				$a_content.removeClass('active');

				$a_head_id.addClass('active');
				$a_content_id.addClass('active');
			}else{
				$a_head_id.removeClass('active');
				$a_content_id.removeClass('active');
			}
		}else{
			$a_head_id.toggleClass('active');
			$a_content_id.toggleClass('active');
		}
	}
}

//Accordion open by id
function accordion_open($id, $accordion){

	if(typeof $id == 'undefined'){
		$id ='';
	}

	if(typeof $accordion == 'undefined'){
		$accordion ='.accordion';
	}

	$accordion = jQuery($accordion);
	$accordion.find('.a_head[data-acc="'+$id+'"]').addClass('active');
	$accordion.find('.a_content[data-content="'+$id+'"]').addClass('active');
}

//Accordion close by id
function accordion_close($id, $accordion){

	if(typeof $id == 'undefined'){
		$id ='';
	}

	if(typeof $accordion == 'undefined'){
		$accordion ='.accordion';
	}

	$accordion = jQuery($accordion);
	$accordion.find('.a_head[data-acc="'+$id+'"]').removeClass('active');
	$accordion.find('.a_content[data-content="'+$id+'"]').removeClass('active');
}

/////////////////////////////////////////////////////////////////////////////////

//Modal Window script
function modal(){

	var $modal_id = '.modal',
		$modal = jQuery($modal_id);

	//Open on click
	jQuery('.open_modal, .modal_open').on('click', function(e) {
		e.preventDefault();
		var $id = jQuery(this).attr('data-modal');
		modal_open($id);
	});

	//Close modal on Esc key
	jQuery(document).keyup(function (e) {
		if (e.keyCode == 27) {
			modal_close();
		}
	});

	//Close modal on overlay click
	jQuery('.m_overlay').on('click', function () {
		var $modal = jQuery(this).closest('.modal'),
			$id = $modal.attr('data-modal'),
			$action = $modal.attr('data-close-on-overlay');

		if($action !== 'false') {
			modal_close($id);
		}
	});

	//Close modal on .close_modal class
	jQuery('.close_modal, .modal_close').on('click', function (e) {
		e.preventDefault();
		var $modal = jQuery(this).closest('.modal'),
			$id = $modal.attr('data-modal'),
			$action = $modal.attr('data-close-on-btn');

		if($action !== 'false') {
			modal_close($id);
		}
	});
}

//Modal open by id
function modal_open($id){
	var $modal = jQuery('.modal[data-modal="'+$id+'"]');
	modal_calculate_center($id);
	$modal.addClass('active');
	jQuery('html').addClass('modal_active');

	jQuery(window).resize(function(){
		modal_calculate_center($id);
	});
}

//Modal close by id
function modal_close($id){

	var $modal;
	if(typeof $id == 'undefined'){
		$modal = jQuery('.modal');
	}else{
		$modal = jQuery('.modal[data-modal="'+$id+'"]');
	}

	$modal.removeClass('active');
	jQuery('html').removeClass('modal_active');
}

//Modal Calculate center position if data-slide is scale
function modal_calculate_center($id){

	var $modal;
	if(typeof $id == 'undefined'){
		$modal = jQuery('.modal');
	}else{
		$modal = jQuery('.modal[data-modal="'+$id+'"]');
	}

	if($modal.attr('data-slide') == 'scale') {
		var $window_height = jQuery(window).height(),
			$modal_height = $modal.find('.m_content').outerHeight(),
			$move;

		//Check calculations
		if ($window_height <= $modal_height) {
			$move = 0;
		} else {
			$move = ($window_height - $modal_height) / 2;
		}

		//Add value to css
		$modal.find('.m_content_wrap').css('top', $move);
	}
}

/////////////////////////////////////////////////////////////////////////////////

//Make and object stick to the top on scroll
function sticky($id){

	$id = jQuery($id);

	if($id.length){
		var $item = $id.offset().top;
		jQuery(window).scroll(function() {
			if (jQuery(this).scrollTop() >= $item){
				$id.addClass("sticky");
			}
			else{
				$id.removeClass("sticky");
			}
		});
	}
}

/////////////////////////////////////////////////////////////////////////////////

function sticky_footer($container, $id, $offset){

	if(typeof $offset == 'undefined'){
		$offset = 0;
	}

	if(typeof $id == 'undefined'){
		$id = "#footer";
	}

	var $bottom = jQuery($container).position().top+jQuery($container).outerHeight(true)+$offset,
		$page_height = jQuery(window).height();

	if($page_height >= $bottom){
		jQuery($id).addClass('sticky');
	}else{
		jQuery($id).removeClass('sticky');
	}
}

/////////////////////////////////////////////////////////////////////////////////

//Scroll to content on click
function scrollTo_click($id, $offset){

	if(typeof $offset == 'undefined'){
		$offset = 0;
	}

	jQuery($id).click(function(e){
		var $self = jQuery(this),
			$id_scroll,
			$href_scroll = $self.attr('href'),
			$attr_scroll = $self.attr('data-scroll-to');

		if(typeof $attr_scroll !== 'undefined'){
			$id_scroll = $attr_scroll;
		}else{
			$id_scroll = $href_scroll;
		}

		if(typeof $id_scroll !== 'undefined' && $id_scroll.length){
			e.preventDefault();
			jQuery('html, body').animate({
				scrollTop: jQuery($id_scroll).offset().top - $offset
			}, 500);
			return false;
		}
	})
}

//Scroll to ID
function scrollTo($id, $offset){

	if(typeof $offset == 'undefined'){
		$offset = 0;
	}

	jQuery('html, body').animate({
		scrollTop: jQuery($id).offset().top - $offset
	}, 500);
	return false;
}

/////////////////////////////////////////////////////////////////////////////////

//On focus add class to field
function fields_focus(){
	var $selector = jQuery('input, select, textarea');
	$selector.bind('focus', function(){
		jQuery(this).closest('.field').addClass('focus');
	});

	$selector.bind('blur', function(){
		jQuery(this).closest('.field').removeClass('focus');
	})
}

/////////////////////////////////////////////////////////////////////////////////

//Create escape function for selectors (for magento)
function escape_string($str) {
	return $str.replace(/([;&,\.\+\*\~':"\!\^#$%@\[\]\(\)=>\|])/g, '\\$1');
}

//Disable function
function disable(){
	jQuery('a.disabled').on('click', function(e){
		e.preventDefault();
		jQuery(this).off();
	});
}

//Disable empty links
function disable_link(){
	jQuery('a[href="#"]').on('click', function(e){
		e.preventDefault();
	});
}

//Set cookie
function setCookie($key, $value, $time) {
	var $expires = new Date();
	$expires.setTime($expires.getTime() + ($time));
	document.cookie = $key + '=' + $value + ';expires=' + $expires.toUTCString();
}

//Get cookie value
function getCookie($key) {
	var $keyValue = document.cookie.match('(^|;) ?' + $key + '=([^;]*)(;|$)');
	return $keyValue ? $keyValue[2] : null;
}


