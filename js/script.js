//Load all functions
jQuery(document).ready(function(){
    accordion();
    tabs();
    upload();
    checkbox('');
    radio('');
    select('');
    modal('', 'open');
    tooltip();
    scrollto('.scroll_to');
    //sticky('.header');
    //checkbox_unset('');

    disable();
});

//Actions on window resize
jQuery(window).resize(function(){
    select('');
});



/////////////////////////////////////////////////////////////////////////////////

//Checkbox script
function checkbox(id){

    id = escape_string(id);

    jQuery('.checkbox').each(function(){
        //check if there is checked class in input
        if(jQuery('input[type=checkbox]',this).is(':checked')){
            jQuery('label',this).addClass('checked');
        }

        //Check if input is disabled
        if(jQuery('input[type=checkbox]',this).is(':disabled')){
            jQuery('label',this).addClass('disabled');
        }

    });

    if(id != ''){
        //Used if there is inline onchange action (ID has to passed)
        var input = jQuery('input[id="'+id+'"]');
        var label = jQuery('label[for="'+id+'"]');
        var check = label.closest('.checkbox').find('input[type=checkbox]');
        if(!check.is(':disabled')){
            if(input.prop('checked')){
                label.addClass('checked');
            }else{
                label.removeClass('checked');
            }
        }else{
            label.addClass('disabled');
        }
    }else{
        //Classic on click action
        jQuery('.checkbox label').on('click',function(e){

            var ID = jQuery(this).attr('for');
            var input = jQuery('input[id="'+ID+'"]');
            var label = jQuery('label[for="'+ID+'"]');
            var check = jQuery(this).closest('.checkbox').find('input[type=checkbox]');
            if(!check.is(':disabled')){
                if(input.prop('checked')){
                    label.removeClass('checked');
                }else{
                    label.addClass('checked');
                }
            }else{
                jQuery(this).addClass('disabled');
            }
        });
    }

    //Stop checkbox from activating if there is a link in label
    jQuery('.checkbox label a').on('click',function(e){
        e.stopPropagation();
    });
}

/////////////////////////////////////////////////////////////////////////////////

//Force checkbox to unset
function checkbox_unset(id){
    var input = jQuery('input[id="'+id+'"]');
    var label = jQuery('label[for="'+id+'"]');
    label.removeClass('checked');
}

/////////////////////////////////////////////////////////////////////////////////

//Radio script
function radio(id){

    id = escape_string(id);

    jQuery('.radio').each(function(){
        if(jQuery('input[type=radio]',this).is(':checked')){
            jQuery('label',this).addClass('checked');
        }
        if(jQuery('input[type=radio]',this).is(':disabled')){
            jQuery('label',this).addClass('disabled');
        }
    });

    if(id != ''){
        //Used if there is inline onchange action (ID has to passed)
        var input = jQuery('input[id="'+id+'"]');
        var input_group = input.attr('name');
        var label = jQuery('label[for="'+id+'"]');
        var radio = label.closest('.radio').find('input[type=radio]');

        if(!radio.is(':disabled')){
            jQuery('.radio[data-group="'+input_group+'"] label').removeClass('checked');
            label.addClass('checked');
        }else{
            jQuery(this).addClass('disabled');
        }
    }else{
        //Classic on click action
        jQuery('.radio label').on('click', function(){
            var ID = jQuery(this).attr('for');
            var input = jQuery('#' + escape_string(ID));
            var input_group = input.attr('name');
            var label = jQuery('label[for="'+ID+'"]');
            var radio = jQuery(this).closest('.radio').find('input[type=radio]');

            if(!radio.is(':disabled')){
                jQuery('.radio[data-group="'+input_group+'"] label').removeClass('checked');
                label.addClass('checked');
            }else{
                jQuery(this).addClass('disabled');
            }
        });
    }

    //Stop radio from activating if there is a link in label
    jQuery('.radio label a').on('click',function(e){
        e.stopPropagation();
    });
}

/////////////////////////////////////////////////////////////////////////////////

//Select script
function select(id){
    if(id == ''){
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
        var id= jQuery(this).data('active');
        jQuery(this).find('.a_head[data-acc="'+id+'"]').addClass('active');
        jQuery(this).find('.a_content[data-content="'+id+'"]').show();
    });
    //Accordion click action
    jQuery('.a_head').click(function(){
        var auto_close= jQuery(this).closest('.accordion').data('autoclose');
        if(auto_close !== false){
            if(!jQuery(this).hasClass('active')) {
                jQuery(this).closest('.accordion').find('.a_head').removeClass('active');
                jQuery(this).closest('.accordion').find('.a_content').slideUp('fast');
                jQuery(this).addClass('active');
                jQuery(this).next('.a_content').slideDown('fast');
            }else{
                jQuery(this).closest('.accordion').find('.a_head').removeClass('active');
                jQuery(this).closest('.accordion').find('.a_content').slideUp('fast');
            }
        }else{
            jQuery(this).toggleClass('active');
            jQuery(this).next('.a_content').slideToggle('fast');
        }
    });
}

/////////////////////////////////////////////////////////////////////////////////

//Modal Window script
function modal(ID, action){
    var active_class = 'active';

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
            jQuery('.modal_overlay').on('click', function () {
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
                modal.addClass(active_class);
                jQuery('html').addClass('modal_active');

                close_modal(modal);

            });

            //ID provided open modal form JS.
        }else{
            modal = jQuery('.modal[data-modal="'+ID+'"]');
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
function scrollto($id){
    jQuery($id).click(function(e){
        var $id_scroll = jQuery(this).attr('data-scroll-to');

        if($id_scroll !== undefined){
            e.preventDefault();
            var id = jQuery($id_scroll);
            if(id.length){
                jQuery('html, body').animate({
                    scrollTop: id.offset().top - 100
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


