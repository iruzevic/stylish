//Load all functions
jQuery(document).ready(function(){
    accordion();
    tabs();
    upload();
    checkbox();
    radio();
    select();
    modal();
    tooltip();
    scrollto('.scroll_to', 100);
    //sticky('.header');
    //checkbox_unset('');

    disable();
});

//Actions on window resize
jQuery(window).resize(function(){
    select();
});



/////////////////////////////////////////////////////////////////////////////////

//Checkbox script
function checkbox(){

    //On page load set
    jQuery('input[type=checkbox]').each(function(){

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

    //On space click action
    jQuery('input[type="checkbox"]').keypress(function(e) {
        if (e.keyCode == 0 || e.keyCode == 32) {
            var $id = jQuery(this).attr('id');
            checkbox_change($id);
        }
    });

    //Stop checkbox from activating if there is a link in label
    jQuery('.checkbox label a').on('click',function(e){
        e.stopPropagation();
    });
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

    //On page load set
    jQuery('input[type=radio]').each(function(){

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

    //On space click action
    jQuery('input[type="radio"]').keypress(function(e) {
        if (e.keyCode == 0 || e.keyCode == 32) {
            var $id = jQuery(this).attr('id');
            radio_change($id);
        }
    });

    //Stop radio from activating if there is a link in label
    jQuery('.radio label a').on('click',function(e){
        e.stopPropagation();
    });
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
function select(id){

    if(typeof id == 'undefined'){
        id ='.select';
    }

    //Wrap select input to container for custom icon
    jQuery('select').each(function(){
        var container = jQuery(this);
        var style = container.attr('data-style');

        if(style !== 'false' && container.parents(id).length == 0){
            container.wrap('<div class="select field-row"></div>'); //Field-row class is for magento
        }
    });

    //Calculate the wrapper width and add some more.
    jQuery(id).each(function(){
        var container = jQuery(this);
        var style = container.attr('data-style');
        if(style !== 'false') {
            var select = container.outerWidth() + 50;
            container.children('select').css({minWidth: select});
        }
    });
}

/////////////////////////////////////////////////////////////////////////////////

//Tooltip script
function tooltip() {
    jQuery('.tooltip_trigger').on({
        mouseenter: function () {

            //Set variables and selectors
            var $this = jQuery(this).closest('.tooltip'),
                $position = $this.attr('data-tip-position'),
                $title = $this.attr('data-tip-title'),
                $content = $this.attr('data-tip-content'),
                $width = $this.attr('data-tip-width'),

                $el_width = $this.width(),
                $el_height = $this.height(),
                $arrow = 10,
                $arrow_move = 20,
                $style, $top, $left,$tip = '';

            //Check if attributes are set
            if($position == '' || $position == undefined){
                $position = 'bottom';
            }
            if($title == '' || $title == undefined){
                $title = '';
            }
            if($content == '' || $content == undefined){
                $content = '';
            }
            if($width == '' || $width == undefined){
                $width = 280;
            }

            //Position the tip
            if ($position == 'bottom') {
                $top = $el_height + $arrow_move;
                $left = ($el_width / 2) - ($width / 2);
                $style = 'width:' + $width + 'px; top:' + $top + 'px; left:' + $left + 'px;';
            }

            if ($position == 'top') {
                $top = $el_height + $arrow_move;
                $left = ($el_width / 2) - ($width / 2);
                $style = 'width:' + $width + 'px; bottom:' + $top + 'px; left:' + $left + 'px;';
            }

            if ($position == 'right') {
                $top = ($el_height/2)-$arrow-$arrow_move;
                $left = $el_width + $arrow_move;
                $style = 'width:' + $width + 'px; top:' + $top + 'px; left:' + $left + 'px;';
            }

            if ($position == 'left') {
                $top = ($el_height/2)-$arrow-$arrow_move;
                $left = $width + $arrow_move;
                $style = 'width:' + $width + 'px; top:' + $top + 'px; left:-' + $left + 'px;';
            }

            $tip = '<div class="tip" style="' + $style + '" data-position="' + $position + '"><div class="tip_title">' + $title + '</div>' + $content + '</div>'

            jQuery($tip).hide().appendTo($this).fadeIn(200);

        },
        //Remove the tip
        mouseleave: function () {
            jQuery('.tip').stop(true,true).remove();
        },
        mouseout: function () {
            jQuery('.tip').stop(true,true).remove();
        }
    });
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
function tabs(){
    //Tabs first load

    var $tabs = jQuery('.tabs');

    $tabs.each(function(){

        var $this = jQuery(this),
            $active = $this.attr('data-active');

        //if active tab is not set add active to first tab
        if($active == '' || $active === undefined){
            $active = $this.find('.t_head li:first-child').data('tab');
        }

        $this.find('.t_head li[data-tab="'+$active+'"]').addClass('active');
        $this.find('.t_content[data-content="'+$active+'"]').addClass('active');
    });


    //Tabs click action
    jQuery('.t_head li').click(function(){
        var $this = jQuery(this),
            $active = jQuery(this).data('tab'),
            $tabs = $this.closest('.tabs');
        $tabs.find('.t_head li').removeClass('active');
        $tabs.find('.t_content').removeClass('active');
        $this.addClass('active');
        $tabs.find('.t_content[data-content="'+$active+'"]').addClass('active');
    });
}

/////////////////////////////////////////////////////////////////////////////////

//Accordion script
function accordion(){

    //Accordion first load
    jQuery('.accordion').each(function(){
        var $id = jQuery(this).data('active');
        accordion_open($id, this);
    });

    //Accordion click action
    jQuery('.a_head').click(function(){
        var $this = jQuery(this),
            $id = $this.data('acc'),
            $accordion = $this.closest('.accordion'),
            $a_head = $accordion.find('.a_head'),
            $a_head_id = $accordion.find('.a_head[data-acc="'+$id+'"]'),
            $a_content = $accordion.find('.a_content'),
            $a_content_id = $accordion.find('.a_content[data-content="'+$id+'"]'),
            $auto_close= $accordion.data('autoclose');

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
    });
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
function modal(ID, action){
    var active_class = 'active';

    if(typeof ID == 'undefined'){
        ID = '';
    }

    if(typeof action == 'undefined'){
        action = 'open';
    }

    //function to close modal windows
    function close_modal(modal) {
        var close_on_overlay = modal.attr('data-close-on-overlay'),
            close_on_esc = modal.attr('data-close-on-esc'),
            close_on_btn = modal.attr('data-close-on-btn');

        //Close modal on Esc key
        if(close_on_esc !== 'false') {
            jQuery(document).keyup(function (e) {
                if (e.keyCode == 27) {
                    modal.removeClass(active_class);
                    jQuery('html').removeClass('modal_active');
                }
            });
        }

        //Close modal on overlay click
        if(close_on_overlay !== 'false') {
            jQuery('.m_overlay').on('click', function () {
                modal.removeClass(active_class);
                jQuery('html').removeClass('modal_active');
            });
        }

        //Close modal on .close_modal class
        if(close_on_btn !== 'false') {
            jQuery('.close_modal').on('click', function (e) {
                e.preventDefault();
                modal.removeClass(active_class);
                jQuery('html').removeClass('modal_active');
            });
        }
    }

    //Open modal window
    if(action == 'open'){

        //If no ID, open modal on button click
        if(ID == ''){
            //Classic on click action
            jQuery('.open_modal').on('click', function(e){
                e.preventDefault();
                var id = jQuery(this).data('modal');
                var modal = jQuery('.modal[data-modal="'+id+'"]');

                //Show modal
                modal_calculate_center(id);
                modal.addClass(active_class);
                jQuery('html').addClass('modal_active');

                close_modal(modal);

            });

            //ID provided open modal form JS.
        }else{
            modal = jQuery('.modal[data-modal="'+ID+'"]');
            modal_calculate_center(ID);
            modal.addClass(active_class);
            jQuery('html').addClass('modal_active');
            close_modal(modal);
        }

        //Close modal window
    }else if(action == 'close'){
        var modal = jQuery('.modal[data-modal="'+ID+'"]');
        modal.removeClass(active_class);
        jQuery('html').removeClass('modal_active');
    }
}

//Calculate modal center position if data-slide is scale
function modal_calculate_center(ID){

    if(ID == '') {
        var $modal = jQuery('.modal');
    }else {
        var $modal = jQuery('.modal[data-modal="' + ID + '"]');
    }

    var $slide_type = $modal.attr('data-slide');

    if($slide_type == 'scale') {
        var $window_height = jQuery(window).height(),
            $modal_height = $modal.find('.m_content').height(),
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
function sticky(id){
    jQuery(window).scroll(function() {
        if (jQuery(this).scrollTop() > 1){
            jQuery(id).addClass("sticky");
        }
        else{
            jQuery(id).removeClass("sticky");
        }
    });
}

/////////////////////////////////////////////////////////////////////////////////

//Global scroll to content
function scrollto($id, $offset){

    if($offset == ''){
        $offset = 0;
    }

    jQuery($id).click(function(e){
        var $id_scroll = jQuery(this).attr('data-scroll-to');

        if($id_scroll !== undefined){
            e.preventDefault();
            var id = jQuery($id_scroll);
            if(id.length){
                jQuery('html, body').animate({
                    scrollTop: id.offset().top - $offset
                }, 500);
                return false;
            }
        }
    })
}

/////////////////////////////////////////////////////////////////////////////////

//Create escape function for selectors (for magento)
function escape_string(str) {
    return str.replace(/([;&,\.\+\*\~':"\!\^#$%@\[\]\(\)=>\|])/g, '\\$1');
}

//Disable function
function disable(){
    jQuery('a.disabled').on('click', function(e){
        e.preventDefault();
        jQuery(this).off();
    });
}

//Set cookie
function setCookie(key, value, time) {
    var expires = new Date();
    expires.setTime(expires.getTime() + (time));
    document.cookie = key + '=' + value + ';expires=' + expires.toUTCString();
}

//Get cookie value
function getCookie(key) {
    var keyValue = document.cookie.match('(^|;) ?' + key + '=([^;]*)(;|$)');
    return keyValue ? keyValue[2] : null;
}


