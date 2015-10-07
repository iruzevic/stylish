function checkbox() {
    jQuery("input[type=checkbox]").each(function() {
        if (jQuery(this).is(":checked")) {
            var $id = jQuery(this).attr("id");
            checkbox_set($id);
        }
        jQuery(this).is(":disabled") && jQuery(this).closest(".checkbox").find("label").addClass("disabled");
    }), jQuery(".checkbox label").on("click", function(e) {
        var $id = jQuery(this).attr("for");
        checkbox_change($id);
    }), jQuery(".checkbox label > img").on("click", function() {
        var $label = jQuery(this).closest("label"), $id = $label.attr("for");
        $label.trigger("click"), checkbox_change($id);
    }), jQuery('input[type="checkbox"]').keypress(function(e) {
        if (0 == e.keyCode || 32 == e.keyCode) {
            var $id = jQuery(this).attr("id");
            checkbox_change($id);
        }
    }), jQuery(".checkbox label a").on("click", function(e) {
        e.stopPropagation();
    });
}

function checkbox_change($id) {
    "undefined" == typeof $id && ($id = ""), $id = escape_string($id);
    var $input = jQuery('input[id="' + $id + '"]'), $label = jQuery('label[for="' + $id + '"]');
    $input.is(":disabled") ? jQuery(this).addClass("disabled") : $input.prop("checked") ? $label.removeClass("checked") : $label.addClass("checked");
}

function checkbox_set($id) {
    var $input = jQuery('input[id="' + $id + '"]'), $label = jQuery('label[for="' + $id + '"]');
    $label.addClass("checked"), $input.prop("checked", !0);
}

function checkbox_unset($id) {
    var $input = jQuery('input[id="' + $id + '"]'), $label = jQuery('label[for="' + $id + '"]');
    $label.removeClass("checked"), $input.prop("checked", !1);
}

function radio(id) {
    jQuery("input[type=radio]").each(function() {
        if (jQuery(this).is(":checked")) {
            var $id = jQuery(this).attr("id");
            radio_set($id);
        }
        jQuery(this).is(":disabled") && jQuery(this).closest(".radio").find("label").addClass("disabled");
    }), jQuery(".radio label").on("click", function() {
        var $id = jQuery(this).attr("for");
        radio_change($id);
    }), jQuery(".radio label > img").on("click", function() {
        var $label = jQuery(this).closest("label"), $id = $label.attr("for");
        $label.trigger("click"), radio_change($id);
    }), jQuery('input[type="radio"]').keypress(function(e) {
        if (0 == e.keyCode || 32 == e.keyCode) {
            var $id = jQuery(this).attr("id");
            radio_change($id);
        }
    }), jQuery(".radio label a").on("click", function(e) {
        e.stopPropagation();
    });
}

function radio_change($id) {
    "undefined" == typeof $id && ($id = ""), $id = escape_string($id);
    var $input = jQuery('input[id="' + $id + '"]'), $input_group = $input.attr("name"), $label = jQuery('label[for="' + $id + '"]');
    $input.is(":disabled") ? jQuery(this).addClass("disabled") : (jQuery('.radio[data-group="' + $input_group + '"] label').removeClass("checked"), 
    $label.addClass("checked"));
}

function radio_set($id) {
    var $input = jQuery('input[id="' + $id + '"]'), $input_group = $input.attr("name"), $label = jQuery('label[for="' + $id + '"]');
    jQuery('.radio[data-group="' + $input_group + '"] label').removeClass("checked"), 
    $label.addClass("checked"), $input.prop("checked", !0);
}

function radio_unset($id) {
    var $input = jQuery('input[id="' + $id + '"]'), $input_group = $input.attr("name"), $group = jQuery('.radio[data-group="' + $input_group + '"]');
    $group.find("label").removeClass("checked"), $group.find('input[type="radio"]').prop("checked", !1);
}

function radio_group_unset($input_group) {
    var $group = jQuery('.radio[data-group="' + $input_group + '"]');
    $group.find("label").removeClass("checked"), $group.find('input[type="radio"]').prop("checked", !1);
}

function select($id) {
    "undefined" == typeof $id && ($id = ".select"), jQuery("select").each(function() {
        var $this = jQuery(this), $style = $this.attr("data-style"), $select = $this.closest($id).outerWidth() + 50;
        "false" !== $style && 0 == $this.parents($id).length && $this.wrap('<div class="select field-row"></div>'), 
        "false" !== $style && $this.css({
            minWidth: $select
        }), jQuery(window).resize(function() {
            $select = $this.closest($id).outerWidth() + 50, "false" !== $style && $this.css({
                minWidth: $select
            });
        });
    });
}

function tooltip() {
    function show_tip($this) {
        $this = jQuery($this);
        var $style, $top, $left, $bottom, $tip = $this.closest(".tooltip").find(".tip"), $position = $tip.attr("data-tip-position"), $arrow = $tip.attr("data-tip-arrow"), $el_width = $this.outerWidth(), $el_height = $this.outerHeight(), $tip_width = $tip.outerWidth(), $tip_height = $tip.outerHeight(), $arrow_size = 10, $arrow_move = 2 * $arrow_size, $right = "";
        if (("" == $position || void 0 == $position) && ($position = "bottom", $tip.attr("data-tip-position", $position)), 
        ("" == $arrow || void 0 == $arrow) && ($arrow = "center", $tip.attr("data-tip-arrow", $arrow)), 
        ("" == $arrow_size || void 0 == $arrow_size) && ($arrow_size = 10), "top" == $position && ($bottom = $el_height + $arrow_move, 
        $top = "auto"), "bottom" == $position && ($top = $el_height + $arrow_move, $bottom = "auto"), 
        "right" == $position && ($right = -($tip_width + $arrow_move), $left = "auto"), 
        "left" == $position && ($left = -($tip_width + $arrow_move), $right = "auto"), "top" == $position || "bottom" == $position) switch ($arrow) {
          case "left":
            $left = $el_width / 2 - $arrow_size - $arrow_move, $right = "auto";
            break;

          case "center":
            $left = $el_width / 2 - $tip_width / 2, $right = "auto";
            break;

          case "right":
            $left = "auto", $right = $el_width / 2 - $arrow_size - $arrow_move;
        }
        if ("left" == $position || "right" == $position) switch ($arrow) {
          case "top":
            $top = $el_height / 2 - $arrow_size - $arrow_move, $bottom = "auto";
            break;

          case "center":
            $top = $el_height / 2 - $tip_height / 2, $bottom = "auto";
            break;

          case "bottom":
            $top = "auto", $bottom = $el_height / 2 - $arrow_size - $arrow_move;
        }
        $style = {
            width: $tip_width,
            top: $top,
            bottom: $bottom,
            left: $left,
            right: $right
        }, jQuery($tip).css($style).removeClass("inactive");
    }
    function hide_tip($this) {
        $this = jQuery($this);
        var $tip = $this.closest(".tooltip").find(".tip"), $dont_hide = $tip.attr("data-hide");
        ("" == $dont_hide || void 0 == $dont_hide || "true" == $dont_hide) && $tip.addClass("inactive");
    }
    function hide_all_tips() {
        jQuery(".tip").addClass("inactive");
    }
    var $trigger = jQuery(".tooltip_trigger");
    Modernizr.touch ? $trigger.on("click", function(e) {
        e.preventDefault();
        var $this = jQuery(this), $tip = $this.closest(".tooltip").find(".tip");
        $tip.hasClass("inactive") ? (hide_all_tips(), show_tip(this)) : hide_tip(this);
    }) : $trigger.on({
        mouseover: function(e) {
            e.preventDefault(), show_tip(this);
        },
        mouseout: function(e) {
            e.preventDefault(), hide_tip(this);
        }
    });
}

function upload() {
    jQuery(".upload input[type=text]").click(function() {
        jQuery(this).closest(".upload").find("input[type=file]").trigger("click");
    }), jQuery(".upload .btn").click(function(e) {
        e.preventDefault(), jQuery(this).closest(".upload").find("input[type=file]").trigger("click");
    }), jQuery(".upload input[type=file]").change(function() {
        jQuery(this).closest(".upload").find("input[type=text]").val(jQuery(this).val());
    });
}

function tabs($tabs_id) {
    function tabs_change($id, $tabs_id) {
        var $this = jQuery($id), $active = $this.attr("data-tab"), $tabs = $this.closest($tabs_id), $t_head = $tabs.find(".t_head li"), $t_head_id = $tabs.find('.t_head li[data-tab="' + $active + '"]'), $t_content = $tabs.find(".t_content"), $t_content_id = $tabs.find('.t_content[data-content="' + $active + '"]');
        $t_head.removeClass("active"), $t_content.removeClass("active"), $t_head_id.addClass("active"), 
        $t_content_id.addClass("active");
    }
    "undefined" == typeof $tabs_id && ($tabs_id = ".tabs"), jQuery($tabs_id).each(function() {
        var $this = jQuery(this), $active = $this.attr("data-active");
        ("" == $active || void 0 === $active) && ($active = $this.find(".t_head li:first-child").attr("data-tab")), 
        tabs_set($active, this);
    }), jQuery(".t_head li").click(function() {
        tabs_change(this, $tabs_id);
    });
}

function tabs_set($id, $tabs) {
    "undefined" == typeof $id && ($id = ""), "undefined" == typeof $tabs && ($tabs = ".tabs"), 
    $tabs = jQuery($tabs), $tabs.find(".t_head li").removeClass("active"), $tabs.find(".t_content").removeClass("active"), 
    $tabs.find('.t_head li[data-tab="' + $id + '"]').addClass("active"), $tabs.find('.t_content[data-content="' + $id + '"]').addClass("active");
}

function accordion($accordion_id) {
    function accordion_change($id, $accordion_id) {
        var $this = jQuery($id), $active = $this.attr("data-acc"), $accordion = $this.closest($accordion_id), $a_head = $accordion.find(".a_head"), $a_head_id = $accordion.find('.a_head[data-acc="' + $active + '"]'), $a_content = $accordion.find(".a_content"), $a_content_id = $accordion.find('.a_content[data-content="' + $active + '"]'), $auto_close = $accordion.attr("data-autoclose");
        $auto_close !== !1 ? $a_head_id.hasClass("active") ? ($a_head_id.removeClass("active"), 
        $a_content_id.removeClass("active")) : ($a_head.removeClass("active"), $a_content.removeClass("active"), 
        $a_head_id.addClass("active"), $a_content_id.addClass("active")) : ($a_head_id.toggleClass("active"), 
        $a_content_id.toggleClass("active"));
    }
    "undefined" == typeof $accordion_id && ($accordion_id = ".accordion"), jQuery($accordion_id).each(function() {
        var $id = jQuery(this).attr("data-active");
        accordion_open($id, this);
    }), jQuery(".a_head").click(function() {
        accordion_change(this, $accordion_id);
    });
}

function accordion_open($id, $accordion) {
    "undefined" == typeof $id && ($id = ""), "undefined" == typeof $accordion && ($accordion = ".accordion"), 
    $accordion = jQuery($accordion), $accordion.find('.a_head[data-acc="' + $id + '"]').addClass("active"), 
    $accordion.find('.a_content[data-content="' + $id + '"]').addClass("active");
}

function accordion_close($id, $accordion) {
    "undefined" == typeof $id && ($id = ""), "undefined" == typeof $accordion && ($accordion = ".accordion"), 
    $accordion = jQuery($accordion), $accordion.find('.a_head[data-acc="' + $id + '"]').removeClass("active"), 
    $accordion.find('.a_content[data-content="' + $id + '"]').removeClass("active");
}

function modal() {
    var $modal_id = ".modal";
    jQuery($modal_id);
    jQuery(".open_modal, .modal_open").on("click", function(e) {
        e.preventDefault();
        var $id = jQuery(this).attr("data-modal");
        modal_open($id);
    }), jQuery(document).keyup(function(e) {
        27 == e.keyCode && modal_close();
    }), jQuery(".m_overlay").on("click", function() {
        var $modal = jQuery(this).closest(".modal"), $id = $modal.attr("data-modal"), $action = $modal.attr("data-close-on-overlay");
        "false" !== $action && modal_close($id);
    }), jQuery(".close_modal, .modal_close").on("click", function(e) {
        e.preventDefault();
        var $modal = jQuery(this).closest(".modal"), $id = $modal.attr("data-modal"), $action = $modal.attr("data-close-on-btn");
        "false" !== $action && modal_close($id);
    });
}

function modal_open($id) {
    var $modal = jQuery('.modal[data-modal="' + $id + '"]');
    modal_calculate_center($id), $modal.addClass("active"), jQuery("html").addClass("modal_active"), 
    jQuery(window).resize(function() {
        modal_calculate_center($id);
    });
}

function modal_close($id) {
    var $modal;
    $modal = "undefined" == typeof $id ? jQuery(".modal") : jQuery('.modal[data-modal="' + $id + '"]'), 
    $modal.removeClass("active"), jQuery("html").removeClass("modal_active");
}

function modal_calculate_center($id) {
    var $modal;
    if ($modal = "undefined" == typeof $id ? jQuery(".modal") : jQuery('.modal[data-modal="' + $id + '"]'), 
    "scale" == $modal.attr("data-slide")) {
        var $move, $window_height = jQuery(window).height(), $modal_height = $modal.find(".m_content").outerHeight();
        $move = $modal_height >= $window_height ? 0 : ($window_height - $modal_height) / 2, 
        $modal.find(".m_content_wrap").css("top", $move);
    }
}

function sticky($id) {
    if ($id = jQuery($id), $id.length) {
        var $item = $id.offset().top;
        jQuery(window).scroll(function() {
            jQuery(this).scrollTop() >= $item ? $id.addClass("sticky") : $id.removeClass("sticky");
        });
    }
}

function sticky_footer($container, $id, $offset) {
    "undefined" == typeof $offset && ($offset = 0), "undefined" == typeof $id && ($id = "#footer");
    var $bottom = jQuery($container).position().top + jQuery($container).outerHeight(!0) + $offset, $page_height = jQuery(window).height();
    $page_height >= $bottom ? jQuery($id).addClass("sticky") : jQuery($id).removeClass("sticky");
}

function scrollTo_click($id, $offset) {
    "undefined" == typeof $offset && ($offset = 0), jQuery($id).click(function(e) {
        var $id_scroll = jQuery(this).attr("data-scroll-to");
        return "undefined" != typeof $id_scroll && $id_scroll.length ? (e.preventDefault(), 
        jQuery("html, body").animate({
            scrollTop: jQuery($id_scroll).offset().top - $offset
        }, 500), !1) : void 0;
    });
}

function scrollTo($id, $offset) {
    return "undefined" == typeof $offset && ($offset = 0), jQuery("html, body").animate({
        scrollTop: jQuery($id).offset().top - $offset
    }, 500), !1;
}

function escape_string($str) {
    return $str.replace(/([;&,\.\+\*\~':"\!\^#$%@\[\]\(\)=>\|])/g, "\\$1");
}

function disable() {
    jQuery("a.disabled").on("click", function(e) {
        e.preventDefault(), jQuery(this).off();
    });
}

function setCookie($key, $value, $time) {
    var $expires = new Date();
    $expires.setTime($expires.getTime() + $time), document.cookie = $key + "=" + $value + ";expires=" + $expires.toUTCString();
}

function getCookie($key) {
    var $keyValue = document.cookie.match("(^|;) ?" + $key + "=([^;]*)(;|$)");
    return $keyValue ? $keyValue[2] : null;
}

jQuery(function() {
    accordion(), tabs(), upload(), checkbox(), radio(), select(), modal(), tooltip(), 
    disable(), scrollTo_click(".scroll_to", 100);
}), jQuery(window).resize(function() {});