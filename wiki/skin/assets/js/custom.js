//Load all Custom functions
jQuery(function(){

	//sidebar_menu_toggle();
	sidebar_menu_dropdown();

	SyntaxHighlighter.all();
});

//Actions on window resize
jQuery(window).resize(function(){

});



/////////////////////////////////////////////////////////////////////////////////
//GLOBAL

//Open/close sidebar menu
//function sidebar_menu_toggle(){
//    jQuery('#menu_toggle').click(function(e){
//        e.preventDefault();
//        var $html = jQuery('html'),
//            $sidebar = jQuery('#sidebar');
//        if($html.hasClass('menu_closed')){
//            $html.removeClass('menu_closed');
//            setCookie('sidebar_menu', '', 365*24*60*60*1000); //1 year;
//        }else{
//            $html.addClass('menu_closed');
//            setCookie('sidebar_menu', 'menu_closed', 365*24*60*60*1000); //1 year
//            $sidebar.find('li').removeClass('active');
//        }
//    });
//}

//Open/close sidebar dropdown menu
function sidebar_menu_dropdown(){

	var $hash = window.location.hash,
		$url,
		$html = jQuery('html');

	if(typeof $hash == 'undefined'){
		$url = window.location.href;
	}else{
		$url = window.location.href.split('#')[0];
	}

	jQuery('#sidebar a[href="'+$url+'"]').closest('li').addClass('active');
	$html.addClass('menu_closed');

}