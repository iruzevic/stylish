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
    disable();

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
function select($id){

    if(typeof $id == 'undefined'){
        $id ='.select';
    }

    //On init
    jQuery('select').each(function(){
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
    jQuery('.open_modal').on('click', function(e) {
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
    jQuery('.close_modal').on('click', function (e) {
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
    jQuery(window).scroll(function() {
        if (jQuery(this).scrollTop() > 1){
            jQuery($id).addClass("sticky");
        }
        else{
            jQuery($id).removeClass("sticky");
        }
    });
}

/////////////////////////////////////////////////////////////////////////////////

//Scroll to content on click
function scrollTo_click($id, $offset){

    if(typeof $offset == 'undefined'){
        $offset = 0;
    }

    jQuery($id).click(function(e){
        var $id_scroll = jQuery(this).attr('data-scroll-to');

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


