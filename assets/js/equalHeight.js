/**
 * jquery.matchHeight-min.js v0.5.2
 * http://brm.io/jquery-match-height/
 * License: MIT
 */
(function(b) {
    b.fn.matchHeight = function(a) {
        if ("remove" === a) {
            var d = this;
            this.css("height", "");
            b.each(b.fn.matchHeight._groups, function(b, a) {
                a.elements = a.elements.not(d)
            });
            return this
        }
        if (1 >= this.length) return this;
        a = "undefined" !== typeof a ? a : !0;
        b.fn.matchHeight._groups.push({
            elements: this,
            byRow: a
        });
        b.fn.matchHeight._apply(this, a);
        return this
    };
    b.fn.matchHeight._apply = function(a, d) {
        var c = b(a),
            f = [c],
            e = b(window).scrollTop(),
            h = b("html").outerHeight(!0);
        d && (c.each(function() {
            var a = b(this),
                c = "inline-block" ===
                a.css("display") ? "inline-block" : "block";
            a.css({
                display: c,
                "padding-top": "0",
                "padding-bottom": "0",
                "border-top-width": "0",
                "border-bottom-width": "0",
                height: "100px"
            })
        }), f = m(c), c.css({
            display: "",
            "padding-top": "",
            "padding-bottom": "",
            "border-top-width": "",
            "border-bottom-width": "",
            height: ""
        }));
        b.each(f, function(a, c) {
            var d = b(c),
                f = 0,
                e = d.parents().add(d).filter(":hidden");
            e.css({
                display: "block"
            });
            d.each(function() {
                var a = b(this),
                    c = "inline-block" === a.css("display") ? "inline-block" : "block";
                a.css({
                    display: c,
                    height: ""
                });
                a.outerHeight(!1) > f && (f = a.outerHeight(!1));
                a.css({
                    display: ""
                })
            });
            e.css({
                display: ""
            });
            d.each(function() {
                var a = b(this),
                    c = 0;
                "border-box" !== a.css("box-sizing") && (c += g(a.css("border-top-width")) + g(a.css("border-bottom-width")), c += g(a.css("padding-top")) + g(a.css("padding-bottom")));
                a.css("height", f - c)
            })
        });
        b.fn.matchHeight._maintainScroll && b(window).scrollTop(e / h * b("html").outerHeight(!0));
        return this
    };
    b.fn.matchHeight._applyDataApi = function() {
        var a = {};
        b("[data-match-height], [data-mh]").each(function() {
            var d =
                    b(this),
                c = d.attr("data-match-height") || d.attr("data-mh");
            a[c] = c in a ? a[c].add(d) : d
        });
        b.each(a, function() {
            this.matchHeight(!0)
        })
    };
    b.fn.matchHeight._groups = [];
    b.fn.matchHeight._throttle = 80;
    b.fn.matchHeight._maintainScroll = !1;
    var l = -1,
        k = -1;
    b.fn.matchHeight._update = function(a) {
        if (a && "resize" === a.type) {
            a = b(window).width();
            if (a === l) return;
            l = a
        } - 1 === k && (k = setTimeout(function() {
            b.each(b.fn.matchHeight._groups, function() {
                b.fn.matchHeight._apply(this.elements, this.byRow)
            });
            k = -1
        }, b.fn.matchHeight._throttle))
    };
    b(b.fn.matchHeight._applyDataApi);
    b(window).bind("load resize orientationchange", b.fn.matchHeight._update);
    var m = function(a) {
            var d = null,
                c = [];
            b(a).each(function() {
                var a = b(this),
                    e = a.offset().top - g(a.css("margin-top")),
                    h = 0 < c.length ? c[c.length - 1] : null;
                null === h ? c.push(a) : 1 >= Math.floor(Math.abs(d - e)) ? c[c.length - 1] = h.add(a) : c.push(a);
                d = e
            });
            return c
        },
        g = function(a) {
            return parseFloat(a) || 0
        }
})(jQuery);