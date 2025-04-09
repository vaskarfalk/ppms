! function(t) {
    let e = "myOwnLineShowMoreLess",
        s = function(e) {
            let s = t(this),
                o = s.css("display");
            parseInt(s.css("font-size"), 10), "inline" !== o && s.css({
                display: "inline-block"
            });
            let i = t("<span>"),
                n = s.get(0),
                r = window.getComputedStyle(n).getPropertyValue("line-height");
            if ("normal" == r) {
                var l = n.nodeName,
                    a = document.createElement(l);
                a.innerHTML = "&nbsp;";
                let g = window.getComputedStyle(n).getPropertyValue("font-size");
                a.style.fontSize = g, a.style.padding = "0px", a.style.border = "0px";
                var d = document.body;
                d.appendChild(a), r = a.offsetHeight, d.removeChild(a)
            }
            let h = parseInt(r),
                p = parseInt(e.settings.showLessLine);
            console.log(h, p);
            let c = e.settings.lessAtInitial ? "less" : "more";
            e.settings.lessAtInitial ? (s.css({
                "max-height": h * p + "px",
                overflow: "hidden",
                position: "relative"
            }), i.html(e.settings.showMoreText), i.attr("class", "show-more-less-handler"), i.attr("style", " background: rgb(255,255,255);background: linear-gradient(90deg, rgba(255,255,255,0) 0%, rgba(255,255,255,1) 17%, rgba(255,255,255,1) 100%); "), i.css({
                position: "absolute",
                right: "0",
                bottom: "0",
                "padding-left": "22px",
                display: "inline-block",
                cursor: "pointer",
                color: "#ff0012",
                "font-weight": "bold",
                "font-size": "14px"
            })) : (s.css({
                position: "relative"
            }), i.html(e.settings.showLessText), i.attr("class", "show-more-less-handler"), i.attr("style", " background: rgb(255,255,255);background: linear-gradient(90deg, rgba(255,255,255,0) 0%, rgba(255,255,255,1) 17%, rgba(255,255,255,1) 100%); "), i.css({
                position: "static",
                right: "0",
                bottom: "0",
                "padding-left": "0px",
                display: "inline-block",
                cursor: "pointer",
                color: "#ff0012",
                "font-weight": "bold",
                "font-size": "14px"
            })), i.on("click", function() {
                "less" == c ? (c = "more", s.css({
                    position: "relative",
                    overflow: "auto",
                    "max-height": "none"
                }), i.html(e.settings.showLessText), i.attr("class", "show-more-less-handler"), i.attr("style", " background: rgb(255,255,255);background: linear-gradient(90deg, rgba(255,255,255,0) 0%, rgba(255,255,255,1) 17%, rgba(255,255,255,1) 100%); "), i.css({
                    position: "static",
                    right: "0",
                    bottom: "0",
                    "padding-left": "0px",
                    display: "inline-block",
                    cursor: "pointer",
                    color: "#ff0012",
                    "font-weight": "bold",
                    "font-size": "14px"
                }), e.settings.lessAtInitial && !e.settings.showLessAfterMore && i.remove()) : (c = "less", s.css({
                    "max-height": h * p + "px",
                    overflow: "hidden",
                    position: "relative"
                }), i.html(e.settings.showMoreText), i.css({
                    position: "absolute",
                    right: "0",
                    bottom: "0",
                    "padding-left": "22px",
                    display: "inline-block",
                    cursor: "pointer",
                    color: "#ff0012",
                    "font-weight": "bold",
                    "font-size": "14px"
                }))
            }), s.append(i)
        },
        o = {
            init: function(o) {
                return this.each(function(i) {
                    let n = t(this);
                    if (!n.data(e)) {
                        let r = {
                            showLessLine: 1,
                            showLessText: "Show Less",
                            showMoreText: "Show More",
                            lessAtInitial: !0,
                            showLessAfterMore: !0
                        };
                        o && t.extend(!0, r, o), n.data(e, {
                            target: n,
                            settings: r
                        });
                        var l = t(this),
                            a = n.data(e);
                        s.call(l, a)
                    }
                })
            }
        };
    t.fn[e] = function(s) {
        return o[s] ? o[s].apply(this, Array.prototype.slice.call(arguments, 1)) : "object" != typeof s && s ? void t.error("Method " + s + " does not exist in jQuery." + e) : o.init.apply(this, arguments)
    }
}(jQuery);