//Load all functions
jQuery(function(){
	form.init();
	modal.init();
	accordion();
	tabs();
	tooltip();
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

form = {
	init: function(){
		form.radio.init();
		form.checkbox.init();
		form.select.init();
		form.upload.init();
		form.fieldFocus.init();
	},

	//Select input
	select: {

		selector: '.select',
		input: 'select',

		init: function ($id) {

			var $input = jQuery(form.select.input);
			if(typeof $id == 'undefined'){
				$id = form.select.selector;
			}

			//On init
			$input.each(function(){
				var $self = jQuery(this),
					$style = $self.attr('data-style'),
					$select = $self.closest($id).outerWidth()+50;

				if($style !== 'false' && $self.parents($id).length == 0){
					$self.wrap('<div class="select field-row"></div>'); //Field-row class is for magento
				}
				if($style !== 'false') {
					$self.css({minWidth: $select});
				}

				jQuery(window).resize(function(){
					$select = $self.closest($id).outerWidth()+50;
					if($style !== 'false') {
						$self.css({minWidth: $select});
					}
				});
			});

			//On focus add class to display focus style
			$input.bind('focus', function(){
				form.select.onFocus(this);
			});

			//On blur remove class to display focus style
			$input.bind('blur', function(){
				form.select.onBlur(this);
			})
		},
		onFocus: function($this){
			jQuery($this).closest(form.select.selector).addClass('focus');

		},
		onBlur: function($this){
			jQuery($this).closest(form.select.selector).removeClass('focus');
		}
	},

	//Checkbox input
	checkbox: {

		selector: '.checkbox',
		labelSelector: '.checkbox label',
		input: 'input[type="checkbox"]',

		init: function(){

			var $input = jQuery(form.checkbox.input);

			//On page load set
			$input.each(function(){

				var $self = jQuery(this);

				//Check if there is checked class in input
				if($self.is(':checked')){
					var $id = jQuery(this).attr('id');
					form.checkbox.onSet($id);
				}

				//Check if input is disabled
				if($self.is(':disabled')){
					$self.closest(form.checkbox.selector).find('label').addClass('disabled');
				}
			});

			//On click action
			jQuery(form.checkbox.labelSelector).on('click',function(e){
				var $id = jQuery(this).attr('for');
				form.checkbox.onChange($id);
			});

			//Fix IE11 force trigger if image is in label
			jQuery(form.checkbox.labelSelector + ' > img').on('click', function(){
				var $label = jQuery(this).closest('label'),
					$id = $label.attr('for');
				$label.trigger('click');
				form.checkbox.onChange($id);
			});

			//On space click action
			$input.keypress(function(e) {
				if (e.keyCode == 0 || e.keyCode == 32) {
					var $id = jQuery(this).attr('id');
					form.checkbox.onChange($id);
				}
			});

			//Stop checkbox from activating if there is a link in label
			jQuery(form.checkbox.labelSelector + ' a').on('click',function(e){
				e.stopPropagation();
			});

			//On focus add class to display focus style
			$input.bind('focus', function(){
				form.checkbox.onFocus(this);
			});

			//On blur remove class to display focus style
			$input.bind('blur', function(){
				form.checkbox.onBlur(this);
			})
		},
		onChange: function($id){
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
		},
		onSet: function($id){
			var $input = jQuery('input[id="'+$id+'"]'),
				$label = jQuery('label[for="'+$id+'"]');
			$label.addClass('checked');
			$input.prop('checked', true);
		},
		onUnset: function($id){
			var $input = jQuery('input[id="'+$id+'"]'),
				$label = jQuery('label[for="'+$id+'"]');
			$label.removeClass('checked');
			$input.prop('checked', false);
		},
		onFocus: function($this){
			jQuery($this).closest(form.checkbox.selector).addClass('focus');

		},
		onBlur: function($this){
			jQuery($this).closest(form.checkbox.selector).removeClass('focus');
		}
	},

	//Radio input
	radio: {

		selector: '.radio',
		labelSelector: '.radio label',
		input: 'input[type="radio"]',

		init: function(){

			var $input = jQuery(form.radio.input);

			//On page load set
			$input.each(function(){

				var $self = jQuery(this);

				//Check if there is checked class in input
				if($self.is(':checked')){
					var $id = jQuery(this).attr('id');
					form.radio.onSet($id);
				}

				//Check if input is disabled
				if($self.is(':disabled')){
					$self.closest(form.radio.selector).find('label').addClass('disabled');
				}
			});

			//On click action
			jQuery(form.radio.labelSelector).on('click', function(){
				var $id = jQuery(this).attr('for');
				form.radio.onChange($id);
			});

			//Fix IE11 force trigger if image is in label
			jQuery(form.checkbox.labelSelector + ' > img').on('click', function(){
				var $label = jQuery(this).closest('label'),
					$id = $label.attr('for');
				$label.trigger('click');
				form.radio.onChange($id);
			});

			//On space click action
			$input.keypress(function(e) {
				if (e.keyCode == 0 || e.keyCode == 32) {
					var $id = jQuery(this).attr('id');
					form.radio.onChange($id);

					return false;
				}
			});

			//On left, right, up, down change radio state
			$input.keyup(function(e) {
				if (e.keyCode == 37 || e.keyCode == 38 || e.keyCode == 39 || e.keyCode == 40) {
					var $id = jQuery(this).attr('id');
					form.radio.onChange($id);
				}
			});

			//Stop radio from activating if there is a link in label
			jQuery(form.checkbox.labelSelector + ' a').on('click',function(e){
				e.stopPropagation();
			});

			//On focus add class to display focus style
			$input.bind('focus', function(){
				form.radio.onFocus(this);
			});

			//On blur remove class to display focus style
			$input.bind('blur', function(){
				form.radio.onBlur(this);
			})
		},
		onChange: function($id){
			if(typeof $id == 'undefined'){
				$id ='';
			}

			$id = escape_string($id);

			var $input = jQuery('input[id="'+$id+'"]'),
				$groupName = $input.attr('name'),
				$label = jQuery('label[for="'+$id+'"]');

			if(!$input.is(':disabled')){
				jQuery('.radio[data-group="'+$groupName+'"] label').removeClass('checked');
				$label.addClass('checked');
			}else{
				jQuery(this).addClass('disabled');
			}
		},
		onSet: function($id){
			var $input = jQuery('input[id="'+$id+'"]'),
				$group = $input.attr('name'),
				$label = jQuery('label[for="'+$id+'"]');
			jQuery('.radio[data-group="'+$group+'"] label').removeClass('checked');
			$label.addClass('checked');
			$input.prop('checked', true);
		},
		onUnset: function($id){
			var $input = jQuery('input[id="'+$id+'"]'),
				$groupName = $input.attr('name'),
				$group = jQuery('.radio[data-group="'+$groupName+'"]');
			$group.find('label').removeClass('checked');
			$group.find('input[type="radio"]').prop('checked', false);
		},
		onUnsetGroup: function(group){
			var $groupSelector = jQuery('.radio[data-group="'+group+'"]');
			$groupSelector.find('label').removeClass('checked');
			$groupSelector.find(form.radio.input).prop('checked', false);
		},
		onFocus: function($this){
			jQuery($this).closest(form.radio.selector).addClass('focus');

		},
		onBlur: function($this){
			jQuery($this).closest(form.radio.selector).removeClass('focus');
		}
	},

	//Upload files
	upload: {
		selector: '.upload',
		inputSelector: 'input[type=text]',
		btnSelector: '.btn',
		inputUploadSelector: 'input[type=file]',

		init: function(){
			var $uplod = jQuery(form.upload.selector);

			$uplod.find(form.upload.inputSelector).on('click', function () {
				jQuery(this).closest(form.upload.selector).find(form.upload.inputUploadSelector).trigger('click');
			});

			$uplod.find(form.upload.btnSelector).on('click', function (e) {
				e.preventDefault();
				jQuery(this).closest(form.upload.selector).find(form.upload.inputUploadSelector).trigger('click');
			});

			$uplod.find(form.upload.inputUploadSelector).on('change', function () {
				var $self = jQuery(this);
				$self.closest(form.upload.selector).find(form.upload.inputSelector).val($self.val());
			});

		}
	},

	//Add Focus Class on field
	fieldFocus:{

		selector: 'input, select, textarea',
		fieldSelector: '.field',

		init: function(){
			var $selector = jQuery(form.fieldFocus.selector);

			//On focus add class to display focus style
			$selector.bind('focus', function(){
				form.fieldFocus.onFocus(this);
			});

			//On blur remove class to display focus style
			$selector.bind('blur', function(){
				form.fieldFocus.onBlur(this);
			})
		},

		onFocus: function($this){
			jQuery($this).closest(form.fieldFocus.fieldSelector).addClass('focus');

		},
		onBlur: function($this){
			jQuery($this).closest(form.fieldFocus.fieldSelector).removeClass('focus');
		}
	}

};

/////////////////////////////////////////////////////////////////////////////////

//Modal Window script
modal = {
	openSelector: '.open_modal, .modal_open',
	closeSelector: '.close_modal, .modal_close',
	overlaySelector: '.m_overlay',
	modalSelector: '.modal',

	init: function(){

		//Open on click
		jQuery(modal.openSelector).on('click', function(e) {
			e.preventDefault();
			var $modalId = jQuery(this).attr('data-modal');

			modal.onOpen($modalId);
		});

		//Close modal on Esc key
		jQuery(document).keyup(function (e) {
			if (e.keyCode == 27) {
				modal.onClose();
			}
		});

		//Close modal on .close_modal class
		jQuery(modal.closeSelector+', '+modal.overlaySelector).on('click', function (e) {
			e.preventDefault();
			var $modal = jQuery(this).closest(modal.modalSelector),
				$modalId = $modal.attr('data-modal'),
				$closeOnOverlayAction = $modal.attr('data-close-on-overlay');

			if($closeOnOverlayAction !== 'false') {
				modal.onClose($modalId);
			}

		});

	},

	//Modal open by id
	onOpen: function($modalId){
		var $modal = jQuery(modal.modalSelector+'[data-modal="'+$modalId+'"]');

		$modal.find('.m_content_wrap').css('top', modal.calculatePosition($modalId));
		$modal.addClass('active');

		jQuery('body').css('paddingRight', modal.calculateScrollBarSize());
		jQuery('html').addClass('modal_active');

		jQuery(window).resize(function(){
			$modal.find('.m_content_wrap').css('top', modal.calculatePosition($modalId));
		});
	},

	//Modal close by id
	onClose: function($modalId){

		var $modal;
		if(typeof $modalId == 'undefined'){
			$modal = jQuery(modal.modalSelector);
		}else{
			$modal = jQuery(modal.modalSelector+'[data-modal="'+$modalId+'"]');
		}

		$modal.removeClass('active');
		jQuery('html').removeClass('modal_active');
		jQuery('body').css('paddingRight', '');

	},

	//Modal Calculate center position if data-slide is scale
	calculatePosition: function($modalId){
		var $modal;
		if(typeof $modalId == 'undefined'){
			$modal = jQuery(modal.modalSelector);
		}else{
			$modal = jQuery(modal.modalSelector+'[data-modal="'+$modalId+'"]');
		}

		if($modal.attr('data-slide') == 'scale') {
			var $windowHeight = jQuery(window).height(),
				$modalHeight = $modal.find('.m_content').outerHeight(),
				$move;

			//Check calculations
			if ($windowHeight <= $modalHeight) {
				$move = 0;
			} else {
				$move = ($windowHeight - $modalHeight) / 2;
			}
		}

		return $move;
	},

	//Calculate browsers scrollBar width
	calculateScrollBarSize: function(){
		return (window.innerWidth-$(window).width());
	}
};

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


