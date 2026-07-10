<!DOCTYPE html
    PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<!-- /Added by HTTrack -->

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <base href="{{ asset('/') }}" />
    <link rel="profile" href="http://gmpg.org/xfn/11" />
    <script>
        document.documentElement.className = document.documentElement.className + ' yes-js js_active js'
    </script>
    <title>
        Technosys
    </title>
    <meta name="robots" content="max-image-preview:large" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />
    <link rel="dns-prefetch" href="http://fonts.googleapis.com/" />
    <link rel="alternate" type="application/rss+xml" title="Techno » Feed" href="#" />
    <link rel="alternate" type="application/rss+xml" title="Techno » Comments Feed" href="#" />
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" rel="stylesheet" />
    <link href="wp-content/slide-out-form.css" rel="stylesheet" type="text/css" />
    <script src="https://code.jquery.com/jquery-3.2.1.min.js" type="text/javascript"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" type="text/javascript">
    </script>
    <script src="wp-content/slide-out-form.js" type="text/javascript"></script>
    <script type="text/javascript">
        /* <![CDATA[ */
        window._wpemojiSettings = {
            "baseUrl": "https:\/\/s.w.org\/images\/core\/emoji\/14.0.0\/72x72\/",
            "ext": ".png",
            "svgUrl": "https:\/\/s.w.org\/images\/core\/emoji\/14.0.0\/svg\/",
            "svgExt": ".svg",
            "source": {
                "concatemoji": "https:\/\/wp.ditsolution.net\/techno\/wp-includes\/js\/wp-emoji-release.min.js?ver=6.4.2"
            }
        };
        /*! This file is auto-generated */
        ! function(i, n) {
            var o, s, e;

            function c(e) {
                try {
                    var t = {
                        supportTests: e,
                        timestamp: (new Date).valueOf()
                    };
                    sessionStorage.setItem(o, JSON.stringify(t))
                } catch (e) {}
            }

            function p(e, t, n) {
                e.clearRect(0, 0, e.canvas.width, e.canvas.height), e.fillText(t, 0, 0);
                var t = new Uint32Array(e.getImageData(0, 0, e.canvas.width, e.canvas.height).data),
                    r = (e.clearRect(0, 0, e.canvas.width, e.canvas.height), e.fillText(n, 0, 0), new Uint32Array(e
                        .getImageData(0, 0, e.canvas.width, e.canvas.height).data));
                return t.every(function(e, t) {
                    return e === r[t]
                })
            }

            function u(e, t, n) {
                switch (t) {
                    case "flag":
                        return n(e, "\ud83c\udff3\ufe0f\u200d\u26a7\ufe0f", "\ud83c\udff3\ufe0f\u200b\u26a7\ufe0f") ? !1 : !
                            n(e, "\ud83c\uddfa\ud83c\uddf3", "\ud83c\uddfa\u200b\ud83c\uddf3") && !n(e,
                                "\ud83c\udff4\udb40\udc67\udb40\udc62\udb40\udc65\udb40\udc6e\udb40\udc67\udb40\udc7f",
                                "\ud83c\udff4\u200b\udb40\udc67\u200b\udb40\udc62\u200b\udb40\udc65\u200b\udb40\udc6e\u200b\udb40\udc67\u200b\udb40\udc7f"
                            );
                    case "emoji":
                        return !n(e, "\ud83e\udef1\ud83c\udffb\u200d\ud83e\udef2\ud83c\udfff",
                            "\ud83e\udef1\ud83c\udffb\u200b\ud83e\udef2\ud83c\udfff")
                }
                return !1
            }

            function f(e, t, n) {
                var r = "undefined" != typeof WorkerGlobalScope && self instanceof WorkerGlobalScope ? new OffscreenCanvas(
                        300, 150) : i.createElement("canvas"),
                    a = r.getContext("2d", {
                        willReadFrequently: !0
                    }),
                    o = (a.textBaseline = "top", a.font = "600 32px Arial", {});
                return e.forEach(function(e) {
                    o[e] = t(a, e, n)
                }), o
            }

            function t(e) {
                var t = i.createElement("script");
                t.src = e, t.defer = !0, i.head.appendChild(t)
            }
            "undefined" != typeof Promise && (o = "wpEmojiSettingsSupports", s = ["flag", "emoji"], n.supports = {
                everything: !0,
                everythingExceptFlag: !0
            }, e = new Promise(function(e) {
                i.addEventListener("DOMContentLoaded", e, {
                    once: !0
                })
            }), new Promise(function(t) {
                var n = function() {
                    try {
                        var e = JSON.parse(sessionStorage.getItem(o));
                        if ("object" == typeof e && "number" == typeof e.timestamp && (new Date).valueOf() <
                            e.timestamp + 604800 && "object" == typeof e.supportTests) return e.supportTests
                    } catch (e) {}
                    return null
                }();
                if (!n) {
                    if ("undefined" != typeof Worker && "undefined" != typeof OffscreenCanvas && "undefined" !=
                        typeof URL && URL.createObjectURL && "undefined" != typeof Blob) try {
                        var e = "postMessage(" + f.toString() + "(" + [JSON.stringify(s), u.toString(), p
                                .toString()
                            ].join(",") + "));",
                            r = new Blob([e], {
                                type: "text/javascript"
                            }),
                            a = new Worker(URL.createObjectURL(r), {
                                name: "wpTestEmojiSupports"
                            });
                        return void(a.onmessage = function(e) {
                            c(n = e.data), a.terminate(), t(n)
                        })
                    } catch (e) {}
                    c(n = f(s, u, p))
                }
                t(n)
            }).then(function(e) {
                for (var t in e) n.supports[t] = e[t], n.supports.everything = n.supports.everything && n
                    .supports[t], "flag" !== t && (n.supports.everythingExceptFlag = n.supports
                        .everythingExceptFlag && n.supports[t]);
                n.supports.everythingExceptFlag = n.supports.everythingExceptFlag && !n.supports.flag, n
                    .DOMReady = !1, n.readyCallback = function() {
                        n.DOMReady = !0
                    }
            }).then(function() {
                return e
            }).then(function() {
                var e;
                n.supports.everything || (n.readyCallback(), (e = n.source || {}).concatemoji ? t(e
                    .concatemoji) : e.wpemoji && e.twemoji && (t(e.twemoji), t(e.wpemoji)))
            }))
        }((window, document), window._wpemojiSettings);
        /* ]]> */
    </script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var taas = document.querySelector("a[href='Services.aspx?s=10']");
            if (taas) {
                var submenu = document.createElement("ul");
                submenu.className = "mega-sub-menu";
                submenu.innerHTML =
                    "<li class='mega-menu-item mega - indicator'><a class='mega-menu-link' href='Services.aspx?s=11'>Microsoft Dynamics 365</a></li>";
                taas.parentElement.appendChild(submenu);
                taas.parentElement.classList.add("mega-menu-item-has-children", "mega-menu-flyout");
            }
        });
    </script>
    <link rel="stylesheet" href="/wp-content/plugins/instagram-feed/css/sbi-styles.min.css" type="text/css"
        media="all" />
    <style id='wp-emoji-styles-inline-css' type='text/css'>
        img.wp-smiley,
        img.emoji {
            display: inline !important;
            border: none !important;
            box-shadow: none !important;
            height: 1em !important;
            width: 1em !important;
            margin: 0 0.07em !important;
            vertical-align: -0.1em !important;
            background: none !important;
            padding: 0 !important;
        }
    </style>
    <link rel="stylesheet" href="/wp-content/plugins/yith-woocommerce-wishlist/assets/css/jquery.selectBox.css"
        type="text/css" media="all" />
    <link rel="stylesheet" href="/wp-content/plugins/yith-woocommerce-wishlist/assets/css/font-awesome.css"
        type="text/css" media="all" />
    <link rel="stylesheet" href="/wp-content/plugins/woocommerce/assets/css/prettyPhoto.css" type="text/css"
        media="all" />
    <link rel="stylesheet" href="/wp-content/plugins/yith-woocommerce-wishlist/assets/css/style.css" type="text/css"
        media="all" />
    <style id='yith-wcwl-main-inline-css' type='text/css'>
        .yith-wcwl-share li a {
            color: #FFFFFF;
        }

        .yith-wcwl-share li a:hover {
            color: #FFFFFF;
        }

        .yith-wcwl-share a.facebook {
            background: #39599E;
            background-color: #39599E;
        }

        .yith-wcwl-share a.facebook:hover {
            background: #39599E;
            background-color: #39599E;
        }

        .yith-wcwl-share a.twitter {
            background: #45AFE2;
            background-color: #45AFE2;
        }

        .yith-wcwl-share a.twitter:hover {
            background: #39599E;
            background-color: #39599E;
        }

        .yith-wcwl-share a.pinterest {
            background: #AB2E31;
            background-color: #AB2E31;
        }

        .yith-wcwl-share a.pinterest:hover {
            background: #39599E;
            background-color: #39599E;
        }

        .yith-wcwl-share a.email {
            background: #FBB102;
            background-color: #FBB102;
        }

        .yith-wcwl-share a.email:hover {
            background: #39599E;
            background-color: #39599E;
        }

        .yith-wcwl-share a.whatsapp {
            background: #00A901;
            background-color: #00A901;
        }

        .yith-wcwl-share a.whatsapp:hover {
            background: #39599E;
            background-color: #39599E;
        }
    </style>
    <style id='classic-theme-styles-inline-css' type='text/css'>
        /*! This file is auto-generated */
        .wp-block-button__link {
            color: #fff;
            background-color: #32373c;
            border-radius: 9999px;
            box-shadow: none;
            text-decoration: none;
            padding: calc(.667em + 2px) calc(1.333em + 2px);
            font-size: 1.125em;
        }

        .wp-block-file__button {
            background: #32373c;
            color: #fff;
            text-decoration: none;
        }

        #txtname::placeholder {
            /* Firefox */
            color: white;
        }

        #txtmail::placeholder {
            /* Firefox */
            color: white;
        }

        #txtmobile::placeholder {
            /* Firefox */
            color: white;
        }

        #txtmsg::placeholder {
            /* Firefox */
            color: white;
        }
    </style>
    <style id='global-styles-inline-css' type='text/css'>
        body {
            --wp--preset--color--black: #000000;
            --wp--preset--color--cyan-bluish-gray: #abb8c3;
            --wp--preset--color--white: #ffffff;
            --wp--preset--color--pale-pink: #f78da7;
            --wp--preset--color--vivid-red: #cf2e2e;
            --wp--preset--color--luminous-vivid-orange: #ff6900;
            --wp--preset--color--luminous-vivid-amber: #fcb900;
            --wp--preset--color--light-green-cyan: #7bdcb5;
            --wp--preset--color--vivid-green-cyan: #00d084;
            --wp--preset--color--pale-cyan-blue: #8ed1fc;
            --wp--preset--color--vivid-cyan-blue: #0693e3;
            --wp--preset--color--vivid-purple: #9b51e0;
            --wp--preset--gradient--vivid-cyan-blue-to-vivid-purple: linear-gradient(135deg, rgba(6, 147, 227, 1) 0%, rgb(155, 81, 224) 100%);
            --wp--preset--gradient--light-green-cyan-to-vivid-green-cyan: linear-gradient(135deg, rgb(122, 220, 180) 0%, rgb(0, 208, 130) 100%);
            --wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange: linear-gradient(135deg, rgba(252, 185, 0, 1) 0%, rgba(255, 105, 0, 1) 100%);
            --wp--preset--gradient--luminous-vivid-orange-to-vivid-red: linear-gradient(135deg, rgba(255, 105, 0, 1) 0%, rgb(207, 46, 46) 100%);
            --wp--preset--gradient--very-light-gray-to-cyan-bluish-gray: linear-gradient(135deg, rgb(238, 238, 238) 0%, rgb(169, 184, 195) 100%);
            --wp--preset--gradient--cool-to-warm-spectrum: linear-gradient(135deg, rgb(74, 234, 220) 0%, rgb(151, 120, 209) 20%, rgb(207, 42, 186) 40%, rgb(238, 44, 130) 60%, rgb(251, 105, 98) 80%, rgb(254, 248, 76) 100%);
            --wp--preset--gradient--blush-light-purple: linear-gradient(135deg, rgb(255, 206, 236) 0%, rgb(152, 150, 240) 100%);
            --wp--preset--gradient--blush-bordeaux: linear-gradient(135deg, rgb(254, 205, 165) 0%, rgb(254, 45, 45) 50%, rgb(107, 0, 62) 100%);
            --wp--preset--gradient--luminous-dusk: linear-gradient(135deg, rgb(255, 203, 112) 0%, rgb(199, 81, 192) 50%, rgb(65, 88, 208) 100%);
            --wp--preset--gradient--pale-ocean: linear-gradient(135deg, rgb(255, 245, 203) 0%, rgb(182, 227, 212) 50%, rgb(51, 167, 181) 100%);
            --wp--preset--gradient--electric-grass: linear-gradient(135deg, rgb(202, 248, 128) 0%, rgb(113, 206, 126) 100%);
            --wp--preset--gradient--midnight: linear-gradient(135deg, rgb(2, 3, 129) 0%, rgb(40, 116, 252) 100%);
            --wp--preset--font-size--small: 13px;
            --wp--preset--font-size--medium: 20px;
            --wp--preset--font-size--large: 36px;
            --wp--preset--font-size--x-large: 42px;
            --wp--preset--spacing--20: 0.44rem;
            --wp--preset--spacing--30: 0.67rem;
            --wp--preset--spacing--40: 1rem;
            --wp--preset--spacing--50: 1.5rem;
            --wp--preset--spacing--60: 2.25rem;
            --wp--preset--spacing--70: 3.38rem;
            --wp--preset--spacing--80: 5.06rem;
            --wp--preset--shadow--natural: 6px 6px 9px rgba(0, 0, 0, 0.2);
            --wp--preset--shadow--deep: 12px 12px 50px rgba(0, 0, 0, 0.4);
            --wp--preset--shadow--sharp: 6px 6px 0px rgba(0, 0, 0, 0.2);
            --wp--preset--shadow--outlined: 6px 6px 0px -3px rgba(255, 255, 255, 1), 6px 6px rgba(0, 0, 0, 1);
            --wp--preset--shadow--crisp: 6px 6px 0px rgba(0, 0, 0, 1);
        }

        :where(.is-layout-flex) {
            gap: 0.5em;
        }

        :where(.is-layout-grid) {
            gap: 0.5em;
        }

        body .is-layout-flow>.alignleft {
            float: left;
            margin-inline-start: 0;
            margin-inline-end: 2em;
        }

        body .is-layout-flow>.alignright {
            float: right;
            margin-inline-start: 2em;
            margin-inline-end: 0;
        }

        body .is-layout-flow>.aligncenter {
            margin-left: auto !important;
            margin-right: auto !important;
        }

        body .is-layout-constrained>.alignleft {
            float: left;
            margin-inline-start: 0;
            margin-inline-end: 2em;
        }

        body .is-layout-constrained>.alignright {
            float: right;
            margin-inline-start: 2em;
            margin-inline-end: 0;
        }

        body .is-layout-constrained>.aligncenter {
            margin-left: auto !important;
            margin-right: auto !important;
        }

        body .is-layout-constrained> :where(:not(.alignleft):not(.alignright):not(.alignfull)) {
            max-width: var(--wp--style--global--content-size);
            margin-left: auto !important;
            margin-right: auto !important;
        }

        body .is-layout-constrained>.alignwide {
            max-width: var(--wp--style--global--wide-size);
        }

        body .is-layout-flex {
            display: flex;
        }

        body .is-layout-flex {
            flex-wrap: wrap;
            align-items: center;
        }

        body .is-layout-flex>* {
            margin: 0;
        }

        body .is-layout-grid {
            display: grid;
        }

        body .is-layout-grid>* {
            margin: 0;
        }

        :where(.wp-block-columns.is-layout-flex) {
            gap: 2em;
        }

        :where(.wp-block-columns.is-layout-grid) {
            gap: 2em;
        }

        :where(.wp-block-post-template.is-layout-flex) {
            gap: 1.25em;
        }

        :where(.wp-block-post-template.is-layout-grid) {
            gap: 1.25em;
        }

        .has-black-color {
            color: var(--wp--preset--color--black) !important;
        }

        .has-cyan-bluish-gray-color {
            color: var(--wp--preset--color--cyan-bluish-gray) !important;
        }

        .has-white-color {
            color: var(--wp--preset--color--white) !important;
        }

        .has-pale-pink-color {
            color: var(--wp--preset--color--pale-pink) !important;
        }

        .has-vivid-red-color {
            color: var(--wp--preset--color--vivid-red) !important;
        }

        .has-luminous-vivid-orange-color {
            color: var(--wp--preset--color--luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-amber-color {
            color: var(--wp--preset--color--luminous-vivid-amber) !important;
        }

        .has-light-green-cyan-color {
            color: var(--wp--preset--color--light-green-cyan) !important;
        }

        .has-vivid-green-cyan-color {
            color: var(--wp--preset--color--vivid-green-cyan) !important;
        }

        .has-pale-cyan-blue-color {
            color: var(--wp--preset--color--pale-cyan-blue) !important;
        }

        .has-vivid-cyan-blue-color {
            color: var(--wp--preset--color--vivid-cyan-blue) !important;
        }

        .has-vivid-purple-color {
            color: var(--wp--preset--color--vivid-purple) !important;
        }

        .has-black-background-color {
            background-color: var(--wp--preset--color--black) !important;
        }

        .has-cyan-bluish-gray-background-color {
            background-color: var(--wp--preset--color--cyan-bluish-gray) !important;
        }

        .has-white-background-color {
            background-color: var(--wp--preset--color--white) !important;
        }

        .has-pale-pink-background-color {
            background-color: var(--wp--preset--color--pale-pink) !important;
        }

        .has-vivid-red-background-color {
            background-color: var(--wp--preset--color--vivid-red) !important;
        }

        .has-luminous-vivid-orange-background-color {
            background-color: var(--wp--preset--color--luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-amber-background-color {
            background-color: var(--wp--preset--color--luminous-vivid-amber) !important;
        }

        .has-light-green-cyan-background-color {
            background-color: var(--wp--preset--color--light-green-cyan) !important;
        }

        .has-vivid-green-cyan-background-color {
            background-color: var(--wp--preset--color--vivid-green-cyan) !important;
        }

        .has-pale-cyan-blue-background-color {
            background-color: var(--wp--preset--color--pale-cyan-blue) !important;
        }

        .has-vivid-cyan-blue-background-color {
            background-color: var(--wp--preset--color--vivid-cyan-blue) !important;
        }

        .has-vivid-purple-background-color {
            background-color: var(--wp--preset--color--vivid-purple) !important;
        }

        .has-black-border-color {
            border-color: var(--wp--preset--color--black) !important;
        }

        .has-cyan-bluish-gray-border-color {
            border-color: var(--wp--preset--color--cyan-bluish-gray) !important;
        }

        .has-white-border-color {
            border-color: var(--wp--preset--color--white) !important;
        }

        .has-pale-pink-border-color {
            border-color: var(--wp--preset--color--pale-pink) !important;
        }

        .has-vivid-red-border-color {
            border-color: var(--wp--preset--color--vivid-red) !important;
        }

        .has-luminous-vivid-orange-border-color {
            border-color: var(--wp--preset--color--luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-amber-border-color {
            border-color: var(--wp--preset--color--luminous-vivid-amber) !important;
        }

        .has-light-green-cyan-border-color {
            border-color: var(--wp--preset--color--light-green-cyan) !important;
        }

        .has-vivid-green-cyan-border-color {
            border-color: var(--wp--preset--color--vivid-green-cyan) !important;
        }

        .has-pale-cyan-blue-border-color {
            border-color: var(--wp--preset--color--pale-cyan-blue) !important;
        }

        .has-vivid-cyan-blue-border-color {
            border-color: var(--wp--preset--color--vivid-cyan-blue) !important;
        }

        .has-vivid-purple-border-color {
            border-color: var(--wp--preset--color--vivid-purple) !important;
        }

        .has-vivid-cyan-blue-to-vivid-purple-gradient-background {
            background: var(--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple) !important;
        }

        .has-light-green-cyan-to-vivid-green-cyan-gradient-background {
            background: var(--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan) !important;
        }

        .has-luminous-vivid-amber-to-luminous-vivid-orange-gradient-background {
            background: var(--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-orange-to-vivid-red-gradient-background {
            background: var(--wp--preset--gradient--luminous-vivid-orange-to-vivid-red) !important;
        }

        .has-very-light-gray-to-cyan-bluish-gray-gradient-background {
            background: var(--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray) !important;
        }

        .has-cool-to-warm-spectrum-gradient-background {
            background: var(--wp--preset--gradient--cool-to-warm-spectrum) !important;
        }

        .has-blush-light-purple-gradient-background {
            background: var(--wp--preset--gradient--blush-light-purple) !important;
        }

        .has-blush-bordeaux-gradient-background {
            background: var(--wp--preset--gradient--blush-bordeaux) !important;
        }

        .has-luminous-dusk-gradient-background {
            background: var(--wp--preset--gradient--luminous-dusk) !important;
        }

        .has-pale-ocean-gradient-background {
            background: var(--wp--preset--gradient--pale-ocean) !important;
        }

        .has-electric-grass-gradient-background {
            background: var(--wp--preset--gradient--electric-grass) !important;
        }

        .has-midnight-gradient-background {
            background: var(--wp--preset--gradient--midnight) !important;
        }

        .has-small-font-size {
            font-size: var(--wp--preset--font-size--small) !important;
        }

        .has-medium-font-size {
            font-size: var(--wp--preset--font-size--medium) !important;
        }

        .has-large-font-size {
            font-size: var(--wp--preset--font-size--large) !important;
        }

        .has-x-large-font-size {
            font-size: var(--wp--preset--font-size--x-large) !important;
        }

        .wp-block-navigation a:where(:not(.wp-element-button)) {
            color: inherit;
        }

        :where(.wp-block-post-template.is-layout-flex) {
            gap: 1.25em;
        }

        :where(.wp-block-post-template.is-layout-grid) {
            gap: 1.25em;
        }

        :where(.wp-block-columns.is-layout-flex) {
            gap: 2em;
        }

        :where(.wp-block-columns.is-layout-grid) {
            gap: 2em;
        }

        .wp-block-pullquote {
            font-size: 1.5em;
            line-height: 1.6;
        }
    </style>
    <link rel="stylesheet" href="/wp-content/plugins/redux-framework/redux-core/assets/css/extendify-utilities.css"
        type="text/css" media="all" />
    <link rel="stylesheet" href="/wp-content/plugins/contact-form-7/includes/css/styles.css" type="text/css"
        media="all" />
    <link rel="stylesheet" href="/wp-content/plugins/woocommerce/assets/css/woocommerce-layout.css" type="text/css"
        media="all" />
    <link rel="stylesheet" href="/wp-content/plugins/woocommerce/assets/css/woocommerce-smallscreen.css" type="text/css"
        media="only screen and (max-width: 768px)" />
    <link rel="stylesheet" href="/wp-content/plugins/woocommerce/assets/css/woocommerce.css" type="text/css"
        media="all" />
    <style id='woocommerce-inline-inline-css' type='text/css'>
        .woocommerce form .form-row .required {
            visibility: visible;
        }
    </style>
    <link rel="stylesheet" href="/wp-content/plugins/extendify/public/build/utility-minimum.css" type="text/css"
        media="all" />
    <link rel="stylesheet" href="/wp-content/plugins/header-footer-elementor/assets/css/header-footer-elementor.css"
        type="text/css" media="all" />
    <link rel="stylesheet" href="/wp-content/plugins/elementor/assets/lib/eicons/css/elementor-icons.min.css"
        type="text/css" media="all" />
    <link rel="stylesheet" href="wp-content/uploads/elementor/css/custom-frontend.min.css" type="text/css"
        media="all" />
    <link rel="stylesheet" href="/wp-content/plugins/elementor/assets/lib/swiper/css/swiper.min.css" type="text/css"
        media="all" />
    <link rel="stylesheet" href="wp-content/uploads/elementor/css/post-9.css" type="text/css" media="all" />
    <link rel="stylesheet" href="/wp-content/plugins/dreamit-elementor-extension/assets/css/widgets-style.css"
        type="text/css" media="all" />
    <link rel="stylesheet" href="/wp-content/plugins/dreamit-elementor-extension/assets/css/flaticon.css"
        type="text/css" media="all" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet"
        type="text/css" />
    <link rel="stylesheet" href="/wp-content/plugins/elementor/assets/lib/font-awesome/css/all.min.css"
        type="text/css" media="all" />
    <link rel="stylesheet" href="/wp-content/plugins/elementor/assets/lib/font-awesome/css/v4-shims.min.css"
        type="text/css" media="all" />
    <link rel="stylesheet" href="wp-content/uploads/elementor/css/post-7.css" type="text/css" media="all" />
    <link rel="stylesheet" href="/wp-content/plugins/header-footer-elementor/inc/widgets-css/frontend.css"
        type="text/css" media="all" />
    <link rel="stylesheet" href="wp-content/uploads/elementor/css/post-10450.css" type="text/css" media="all" />
    <link rel="stylesheet" href="wp-content/uploads/maxmegamenu/style.css" type="text/css" media="all" />
    <link rel="stylesheet" href="wp-includes/css/dashicons.min.css" type="text/css" media="all" />
    <style id='dashicons-inline-css' type='text/css'>
        [data-font="Dashicons"]:before {
            font-family: 'Dashicons' !important;
            content: attr(data-icon) !important;
            speak: none !important;
            font-weight: normal !important;
            font-variant: normal !important;
            text-transform: none !important;
            line-height: 1 !important;
            font-style: normal !important;
            -webkit-font-smoothing: antialiased !important;
            -moz-osx-font-smoothing: grayscale !important;
        }
    </style>
    <link rel="stylesheet" href="/wp-content/plugins/yith-woocommerce-quick-view/assets/css/yith-quick-view.css"
        type="text/css" media="all" />
    <style id='yith-quick-view-inline-css' type='text/css'>
        #yith-quick-view-modal .yith-wcqv-main {
            background: #ffffff;
        }

        #yith-quick-view-close {
            color: #cdcdcd;
        }

        #yith-quick-view-close:hover {
            color: #ff0000;
        }
    </style>
    <link rel="stylesheet" href="/wp-content/themes/techno/assets/css/bootstrap.min.css" type="text/css"
        media="all" />
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Muli%3A300%2C400%2C500%2C600%2C700%2C800%2C900&amp;subset=latin%2Clatin-ext&amp;ver=6.4.2"
        type="text/css" media="all" />
    <link rel="stylesheet" href="/wp-content/themes/techno/venobox/venobox.css" type="text/css" media="all" />
    <link rel="stylesheet" href="/wp-content/themes/techno/assets/css/nivo-slider.css" type="text/css"
        media="all" />
    <link rel="stylesheet" href="/wp-content/themes/techno/assets/css/animate.css" type="text/css" media="all" />
    <link rel="stylesheet" href="/wp-content/themes/techno/assets/css/slick.css" type="text/css" media="all" />
    <link rel="stylesheet" href="/wp-content/themes/techno/assets/css/owl.carousel.css" type="text/css"
        media="all" />
    <link rel="stylesheet" href="/wp-content/themes/techno/assets/css/owl.transitions.css" type="text/css"
        media="all" />
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="/wp-content/themes/techno/assets/css/font-awesome.min.css" type="text/css"
        media="all" />
    <link rel="stylesheet" href="/wp-content/themes/techno/assets/css/meanmenu.min.css" type="text/css"
        media="all" />
    <link rel="stylesheet" href="/wp-content/themes/techno/assets/css/theme-default.css" type="text/css"
        media="all" />
    <link rel="stylesheet" href="/wp-content/themes/techno/assets/css/widget.css" type="text/css" media="all" />
    <link rel="stylesheet" href="/wp-content/themes/techno/assets/css/unittest.css" type="text/css" media="all" />
    <link rel="stylesheet" href="/wp-content/themes/techno/style.css" type="text/css" media="all" />
    <link rel="stylesheet" href="/wp-content/themes/techno/assets/css/responsive.css" type="text/css"
        media="all" />
    <link rel="stylesheet" href="/wp-content/themes/techno/woocommerce.css" type="text/css" media="all" />
    <style id='techno-woocommerce-style-inline-css' type='text/css'>
        @font-face {
            font-family: "star";
            src: url("https://wp.ditsolution.net/techno//wp-content/plugins/woocommerce/assets/fonts/star.eot");
            src: url("https://wp.ditsolution.net/techno//wp-content/plugins/woocommerce/assets/fonts/star.eot?#iefix") format("embedded-opentype"), url("https://wp.ditsolution.net/techno//wp-content/plugins/woocommerce/assets/fonts/star.woff") format("woff"), url("https://wp.ditsolution.net/techno//wp-content/plugins/woocommerce/assets/fonts/star.ttf") format("truetype"), url("https://wp.ditsolution.net/techno//wp-content/plugins/woocommerce/assets/fonts/star.svg#star") format("svg");
            font-weight: normal;
            font-style: normal;
        }
    </style>
    <link rel="stylesheet" href="/wp-content/themes/techno/assets/gallery/magnific-popup.css" type="text/css"
        media="all" />
    <link rel="stylesheet" href="/wp-content/themes/techno/assets/css/em-breadcrumb.css" type="text/css"
        media="all" />
    <style id='techno-breadcrumb-inline-css' type='text/css'>
        .logo img {
            ;
            ;
        }

        .logo a {
            margin-top: 0px;
        }

        .mean-container .mean-bar::before {
            content: "Technosys";
        }
    </style>
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Roboto%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7COpen+Sans%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic&amp;display=auto&amp;ver=6.4.2"
        type="text/css" media="all" />
    <link rel="stylesheet" href="/wp-content/plugins/dreamit-elementor-extension/inc/assets/css/flaticon.css"
        type="text/css" media="all" />
    <link rel="stylesheet" href="/wp-content/plugins/elementor/assets/lib/font-awesome/css/fontawesome.min.css"
        type="text/css" media="all" />
    <link rel="stylesheet" href="/wp-content/plugins/elementor/assets/lib/font-awesome/css/brands.min.css"
        type="text/css" media="all" />
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin="" />
    <script type="text/javascript" src="wp-includes/js/jquery/jquery.min.js" id="jquery-core-js"></script>
    <script type="text/javascript" src="wp-includes/js/jquery/jquery-migrate.min.js" id="jquery-migrate-js"></script>
    <script type="text/javascript" src="/wp-content/plugins/woocommerce/assets/js/jquery-blockui/jquery.blockUI.min.js"
        id="jquery-blockui-js" defer="defer" data-wp-strategy="defer"></script>
    <script type="text/javascript" id="wc-add-to-cart-js-extra">
        /* <![CDATA[ */
        // var wc_add_to_cart_params = { "ajax_url": "\/techno\/wp-admin\/admin-ajax.php", "wc_ajax_url": "\/techno\/?wc-ajax=%%endpoint%%", "i18n_view_cart": "View cart", "cart_url": "https:\/\/wp.ditsolution.net\/techno\/cart\/", "is_cart": "", "cart_redirect_after_add": "no" };
        /* ]]> */
    </script>
    <script type="text/javascript" src="/wp-content/plugins/woocommerce/assets/js/frontend/add-to-cart.min.js"
        id="wc-add-to-cart-js" defer="defer" data-wp-strategy="defer"></script>
    <script type="text/javascript" src="/wp-content/plugins/woocommerce/assets/js/js-cookie/js.cookie.min.js"
        id="js-cookie-js" defer="defer" data-wp-strategy="defer"></script>
    <script type="text/javascript" id="woocommerce-js-extra">
        /* <![CDATA[ */
        //var woocommerce_params = { "ajax_url": "\/techno\/wp-admin\/admin-ajax.php", "wc_ajax_url": "\/techno\/?wc-ajax=%%endpoint%%" };
        /* ]]> */
    </script>
    <script type="text/javascript" src="/wp-content/plugins/woocommerce/assets/js/frontend/woocommerce.min.js"
        id="woocommerce-js" defer="defer" data-wp-strategy="defer"></script>
    <script type="text/javascript" src="/wp-content/plugins/elementor/assets/lib/font-awesome/js/v4-shims.min.js"
        id="font-awesome-4-shim-js"></script>
    <script type="text/javascript" src="/wp-content/themes/techno/assets/gallery/jquery-magnific-popup-min.js"
        id="jquery-magnific-popup-js"></script>
    <link rel="https://api.w.org/" href="https://wp.ditsolution.net/techno/wp-json/" />
    <link rel="alternate" type="application/json" href="https://wp.ditsolution.net/techno/wp-json/wp/v2/pages/7" />
    <link rel="EditURI" type="application/rsd+xml" title="RSD"
        href="https://wp.ditsolution.net/techno/xmlrpc.php?rsd" />
    <meta name="generator" content="WordPress 6.4.2" />
    <meta name="generator" content="WooCommerce 8.5.1" />
    <link rel="canonical" href="https://wp.ditsolution.net/techno/" />
    <link rel="shortlink" href="https://wp.ditsolution.net/techno/" />
    <link rel="alternate" type="application/json+oembed"
        href="https://wp.ditsolution.net/techno/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fwp.ditsolution.net%2Ftechno%2F" />
    <link rel="alternate" type="text/xml+oembed"
        href="https://wp.ditsolution.net/techno/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fwp.ditsolution.net%2Ftechno%2F&amp;format=xml" />
    <meta name="generator" content="Redux 4.4.11" />
    <noscript>
        <style>
            .woocommerce-product-gallery {
                opacity: 1 !important;
            }
        </style>
    </noscript>
    <meta name="generator"
        content="Elementor 3.18.3; features: e_dom_optimization, e_optimized_assets_loading, additional_custom_breakpoints, block_editor_assets_optimize, e_image_loading_optimization; settings: css_print_method-external, google_font-enabled, font_display-auto" />
    <meta name="generator"
        content="Powered by Slider Revolution 6.5.7 - responsive, Mobile-Friendly Slider Plugin for WordPress with comfortable drag and drop interface." />
    <link rel="icon" href="wp-content/uploads/2021/02/cropped-logo-removebg-preview.png" sizes="32x32" />
    <link rel="icon" href="wp-content/uploads/2021/02/cropped-logo-removebg-preview.png" sizes="192x192" />
    <link rel="apple-touch-icon" href="wp-content/uploads/2021/02/cropped-logo-removebg-preview.png" />
    <meta name="msapplication-TileImage" content="wp-content/uploads/2021/02/cropped-logo-removebg-preview.png" />
    <script type="text/javascript">
        function setREVStartSize(e) {
            //window.requestAnimationFrame(function() {
            window.RSIW = window.RSIW === undefined ? window.innerWidth : window.RSIW;
            window.RSIH = window.RSIH === undefined ? window.innerHeight : window.RSIH;
            try {
                var pw = document.getElementById(e.c).parentNode.offsetWidth,
                    newh;
                pw = pw === 0 || isNaN(pw) ? window.RSIW : pw;
                e.tabw = e.tabw === undefined ? 0 : parseInt(e.tabw);
                e.thumbw = e.thumbw === undefined ? 0 : parseInt(e.thumbw);
                e.tabh = e.tabh === undefined ? 0 : parseInt(e.tabh);
                e.thumbh = e.thumbh === undefined ? 0 : parseInt(e.thumbh);
                e.tabhide = e.tabhide === undefined ? 0 : parseInt(e.tabhide);
                e.thumbhide = e.thumbhide === undefined ? 0 : parseInt(e.thumbhide);
                e.mh = e.mh === undefined || e.mh == "" || e.mh === "auto" ? 0 : parseInt(e.mh, 0);
                if (e.layout === "fullscreen" || e.l === "fullscreen")
                    newh = Math.max(e.mh, window.RSIH);
                else {
                    e.gw = Array.isArray(e.gw) ? e.gw : [e.gw];
                    for (var i in e.rl)
                        if (e.gw[i] === undefined || e.gw[i] === 0) e.gw[i] = e.gw[i - 1];
                    e.gh = e.el === undefined || e.el === "" || (Array.isArray(e.el) && e.el.length == 0) ? e.gh : e.el;
                    e.gh = Array.isArray(e.gh) ? e.gh : [e.gh];
                    for (var i in e.rl)
                        if (e.gh[i] === undefined || e.gh[i] === 0) e.gh[i] = e.gh[i - 1];

                    var nl = new Array(e.rl.length),
                        ix = 0,
                        sl;
                    e.tabw = e.tabhide >= pw ? 0 : e.tabw;
                    e.thumbw = e.thumbhide >= pw ? 0 : e.thumbw;
                    e.tabh = e.tabhide >= pw ? 0 : e.tabh;
                    e.thumbh = e.thumbhide >= pw ? 0 : e.thumbh;
                    for (var i in e.rl) nl[i] = e.rl[i] < window.RSIW ? 0 : e.rl[i];
                    sl = nl[0];
                    for (var i in nl)
                        if (sl > nl[i] && nl[i] > 0) {
                            sl = nl[i];
                            ix = i;
                        }
                    var m = pw > (e.gw[ix] + e.tabw + e.thumbw) ? 1 : (pw - (e.tabw + e.thumbw)) / (e.gw[ix]);
                    newh = (e.gh[ix] * m) + (e.tabh + e.thumbh);
                }
                var el = document.getElementById(e.c);
                if (el !== null && el) el.style.height = newh + "px";
                el = document.getElementById(e.c + "_wrapper");
                if (el !== null && el) {
                    el.style.height = newh + "px";
                    el.style.display = "block";
                }
            } catch (e) {
                console.log("Failure at Presize of Slider:" + e)
            }
            //});
        };
    </script>
    </style>
 <style id="techno_opt-dynamic-css" title="dynamic-css" class="redux-options-output">
        .techno_nav_area.prefix,
        .hbg2 {
            background-color: #ffffff;
        }

        .breadcumb-area,
        .breadcumb-blog-area {
            background-repeat: no-repeat;
            background-attachment: scroll;
            background-position: center center;
            background-image: url('wp-content/uploads/2022/04/101010.jpg');
            background-size: cover;
        }

        .brpt h2,
        .breadcumb-inner h2 {
            color: #ffffff;
        }

        .breadcumb-inner li:nth-last-child(-n+1) {
            color: #ffffff;
        }

        .single-video::before {
            background-color: rgba(0, 0, 0, 0.3);
        }

        #divImg {
            text-align: justify;
            font-size: 18px;
            color: black;
            padding: 0px 40px 0px 40px;
            margin-left: 18px;
        }

        /* Media query for mobile devices */
        @media (max-width: 767px) {
            #divImg {
                padding: 0px 23px 0px 23px;
            }
        }

        elementor-2741 .elementor-element.elementor-element-6d13a81 .section-title p {
            padding-right: 20px;
            font-size: 18px;
            font-weight: 600;
            color: red;
        }
    </style>
    <style type="text/css" id="wp-custom-css">
        .update-message.notice.inline.notice-warning.notice-alt {
            display: none !important;
        }
    </style>
    <style id="techno_opt-dynamic-css" title="dynamic-css" class="redux-options-output">
        .techno_nav_area.prefix,
        .hbg2 {
            background-color: #ffffff;
        }

        .breadcumb-area,
        .breadcumb-blog-area {
            background-repeat: no-repeat;
            background-attachment: scroll;
            background-position: center center;
            background-image: url('wp-content/uploads/2022/04/101010.jpg');
            background-size: cover;
        }

        .brpt h2,
        .breadcumb-inner h2 {
            color: #ffffff;
        }

        .breadcumb-inner li:nth-last-child(-n+1) {
            color: #ffffff;
        }

        .single-video::before {
            background-color: rgba(0, 0, 0, 0.3);
        }
    </style>
    <style type="text/css">
        /** Mega Menu CSS: fs **/
    </style>
    <style>
        .sn_whatsup {
            position: fixed;
            top: 470px;
            right: 10px;
            z-index: 1000;
            border-radius: 10px;
        }

        .sticky-btn a {
            top: 247px;
            position: fixed;
            right: -68px;
            z-index: 1000;
            transform: rotate(-90deg);
            background-color: red;
            padding: 10px 22px 37px;
            height: 0px;
            background-color: #eb610c;
            color: #fff;
            font-size: 21px;
            border-top-left-radius: 25px;
            border-top-right-radius: 25px;
        }

        .sticky-btn1 a {
            top: 380px;
            position: fixed;
            right: -68px;
            z-index: 1000;
            transform: rotate(-90deg);
            background-color: red;
            padding: 10px 22px 37px;
            height: 0px;
            background-color: #A6D35E;
            color: #fff;
            font-size: 21px;
            border-top-left-radius: 25px;
            border-top-right-radius: 25px;
        }
    </style>
    <style>
        #slidetoglle {
            top: 320px;
            position: fixed;
            right: -79px;
            z-index: 1000;
            transform: rotate(-90deg);
            padding: 10px 22px 37px;
            height: 0px;
            color: #fff;
            font-size: 21px;
            border-top-left-radius: 25px;
            border-top-right-radius: 25px;
        }

        #Button1 {
            background-color: #2a2aac;
            margin-left: 15px;
            color: white;
            margin-top: 10px;
        }
    </style>
    <style>
        .cross {
            margin-top: 20px;
        }

        p i {
            font-size: 15px !important;
            color: white;
            margin-right: 10px;
        }

        /*add by kavita  25/05/026*/
        #mega-menu-wrap-menu-1 #mega-menu-menu-1>li.mega-menu-flyout ul.mega-sub-menu li.mega-menu-item ul.mega-sub-menu {
            position: absolute;
            left: 100%;
            top: 0;
            max-height: 200px !important;
            overflow-y: auto !important;
        }
    </style>
    <style type="text/css">
        .contact {
            color: white;
        }

        .Project {
            text-align: justify
        }
    </style>

    <link rel='stylesheet' id='elementor-post-2947-css' href='/wp-content/uploads/elementor/css/post-2947.css'
        type='text/css' media='all' />
    <link rel='stylesheet' id='elementor-post-7116-css' href='/wp-content/uploads/elementor/css/post-7116.css'
        type='text/css' media='all' />
    <link rel='stylesheet' id='elementor-post-2937-css' href='/wp-content/uploads/elementor/css/post-2937.css'
        type='text/css' media='all' />
    <link href="/wp-content/uploads/elementor/css/post-2937.css" rel="stylesheet" type="text/css" />

      <link href="/wp-content/uploads/elementor/css/post-6543.css" rel="stylesheet" type="text/css" />
    <link href="/wp-content/uploads/elementor/css/post-2784.css" rel="stylesheet" type='text/css' media='all' />
    <link rel='stylesheet' href='/wp-content/uploads/elementor/css/post-2741.css' type='text/css' media='all' />
    <link rel='stylesheet' href='wp-content/plugins/header-footer-elementor/inc/widgets-css/frontend.css'
        type='text/css' media='all' />
    <link rel='stylesheet' href='/wp-content/uploads/elementor/css/post-10450.css' type='text/css' media='all' />
 <link rel='stylesheet' id='rt-tpg-css'
        href='/wp-content/plugins/the-post-grid/assets/css/thepostgrid.min2922.css' media='all' />
   
    <style id='yp'>
        #mega-menu-wrap-menu-1 #mega-menu-menu-1>li.mega-menu-item>a.active {
            color: #f37231;
        }
    </style>
    <style>
        #service-body {
            background-image: url('wp-content/uploads/2022/04/ServiceImage.jpg');
            background-repeat: no-repeat;
            background-size: cover;
            opacity: 0.9;
        }

        #headt h2 {
            margin: 0 0 0 45px;
        }

        .breadcumb-inner p {
            color: White;
            text-align: justify;
            margin-top: -25px;
        }

        .brpt h2 {


            margin-top: -25px;


        }

        #our {
            font-size: 40px;
            color: white;
            font-weight: 800;
        }
    </style>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $("#home-menu").addClass("active mega-menu-link");
        });
    </script>
    <style>
        #partner {
            text-align: center;
            font-family: 'Muli', sans-serif;
            color: #554d4d;
        }

        #partner p {
            padding: 0 50px 80px 50px;
        }

        .scroll {
            color: black;
            width: 210px;
            height: auto;
            border: 3px solid lightgray;
            border-radius: 5px 5px 5px 5px;
        }

        .scroll img {
            height: 60px;
        }

        #rev_slider_21_1 {
            background-color: #000 !important;
        }

        #rev_slider_21_1 {
            height: 600px !important;
            max-height: 600px !important;
            background-color: #000 !important;
        }

        .elementor-7 .elementor-element.elementor-element-8da140f {
            margin-top: -446px !important;
        }

        rs-arrow {
            top: 50% !important;
            left: auto !important;
            transform: translateY(-50%) !important;
            opacity: 1 !important;
            z-index: 999 !important;
        }

        rs-arrow.tp-leftarrow {
            left: 20px !important;
        }

        rs-arrow.tp-rightarrow {
            right: 20px !important;
        }

        .front-part {
            background: #d7dceb;
            position: relative;
            width: 100%;
            min-height: 260px;
        }

        .elementor-7 .elementor-element.elementor-element-d3e7fcd {
            padding: 0px !important;
        }

        #slider-21-slide-34-layer-0 {
            margin-top: -119px !important;
        }

        @media screen and (max-width: 767px) {
            #rev_slider_21_1_wrapper {
                margin-bottom: 0 !important;
                padding-bottom: 0 !important;
                overflow: hidden !important;
            }

            #rev_slider_21_1 {
                height: 380px !important;
                max-height: 380px !important;
            }

            .rev-slidebg {
                width: 100% !important;
                height: 100% !important;
                background-size: cover !important;
                background-position: center center !important;
                background-repeat: no-repeat !important;
                opacity: 1 !important;
                visibility: visible !important;
            }

            #rev_slider_21_1 rs-slide {
                height: 100% !important;
            }

            .elementor-7 .elementor-element.elementor-element-8da140f {
                margin-top: 0 !important;
            }

            rs-arrow {
                display: none !important;
            }
        }
    </style>
    <script src="https://www.google.com/recaptcha/api4c20.js?render=6Lf9bjcsAAAAANRzYv3ANwk94aHQ-Kd8Jk-tVNTt"></script>
    <script>
        function executeIndexRecaptcha() {
            if (typeof(Page_ClientValidate) == 'function') {
                if (!Page_ClientValidate('Index')) {
                    return false; // cancel if validation fails
                }
            }

            grecaptcha.ready(function() {
                grecaptcha.execute('6Lf9bjcsAAAAANRzYv3ANwk94aHQ-Kd8Jk-tVNTt', {
                    action: 'Index'
                }).then(function(token) {
                    document.getElementById('ContentPlaceHolder1_RecaptchaToken').value = token;

                    // Trigger actual ASP.NET PostBack for the button
                    __doPostBack('ctl00$ContentPlaceHolder1$buttonIndex', '');
                });
            });

            return false; // wait for reCAPTCHA to finish before submit
        }
    </script>
    <style>
        /* Wrapper */
        #rev_slider_21_1_wrapper {
            width: 100% !important;
            height: 900px !important;
            /* SAME AS IMAGE HEIGHT */
            max-height: 900px !important;
            overflow: hidden;
            margin: 0 auto;
        }

        /* Slider */
        #rev_slider_21_1 {
            width: 100% !important;
            height: 900px !important;
        }

        /* Slides */
        #rev_slider_21_1 rs-slide {
            width: 100% !important;
            height: 100% !important;
        }

        /* Background Image – PERFECT FIT */
        #rev_slider_21_1_wrapper .rev-slidebg {
            width: 100% !important;
            height: 100% !important;
            max-width: none !important;
            max-height: none !important;
            object-fit: cover !important;
            /* Banner look */
            object-position: center center !important;
        }

        /* Elementor Section */
        .elementor-section.elementor-section-full_width1 {
            min-height: 900px !important;
            padding: 0 !important;
        }

        /*RESPONSIVE (AUTO SCALE)*/
        @media (max-width: 1024px) {

            #rev_slider_21_1_wrapper,
            #rev_slider_21_1 {
                height: 700px !important;
            }
        }

        @media (max-width: 767px) {

            #rev_slider_21_1_wrapper,
            #rev_slider_21_1 {
                height: 480px !important;
            }
        }

        @media (max-width: 480px) {

            #rev_slider_21_1_wrapper,
            #rev_slider_21_1 {
                height: 360px !important;
            }
        }
    </style>
     <style type="text/css">
        /** Mega Menu CSS: fs **/
        .txtc {
            background: white;
            opacity: 0.9;
            border-radius: 15px 15px 15px 15px;
            padding: 35px;
            text-align: center;
        }

        .txtc p {
            text-align: justify;
            font-family: 'Muli', sans-serif;
            color: #282525;
            font-weight: bold;
            margin-top: 18px;
        }

        .txtcc {
            background: white;
            opacity: 0.9;
            border-radius: 15px 15px 15px 15px;
            padding: 35px;
            text-align: center;
        }

        .txtcc p {
            text-align: justify;
            font-weight: bold;
            font-family: 'Muli', sans-serif;
            color: #282525;
            margin-top: 18px;
        }

        .txtc h3 {
            color: #0c5adb;
        }

        .txtcc h3 {
            color: #0c5adb;
        }

        #about-body {
            background-image: url('wp-content/uploads/2022/04/bgimg.jpg');
            background-repeat: no-repeat;
            background-size: cover;
        }

        #about-body p {
            margin-top: -25px;
            color: white;
            text-align: justify;
        }

        #missiondiv {

            background-image: url('wp-content/uploads/2022/04/slider03.jpg');
            background-repeat: no-repeat;
            background-size: cover;
            min-height: 400px;
            width: auto;
        }

        .elementor-accordion p {
            color: white;
        }

        .Project {
            text-align: justify;
        }

        #serviceimg img {
            height: 500px;
            width: auto;
        }

        .elementor-background-overlay {
            background-image: url('wp-content/uploads/2022/04/101010.jpg');

        }

        /* Add by kavita */
        .elementor-element-f533e6d {
            position: relative !important;
            max-height: 800px !important;
            overflow: hidden !important;
        }

        /* End by kavita */
    </style>

    <style id="generate-style-inline-css">
        body {
            background-color: var(--base-2);
            color: var(--contrast);
        }

        a {
            color: var(--accent);
        }

        a {
            text-decoration: underline;
        }

        .entry-title a,
        .site-branding a,
        a.button,
        .wp-block-button__link,
        .main-navigation a {
            text-decoration: none;
        }

        a:hover,
        a:focus,
        a:active {
            color: var(--contrast);
        }

        .wp-block-group__inner-container {
            max-width: 1200px;
            margin-left: auto;
            margin-right: auto;
        }

        :root {
            --contrast: #222222;
            --contrast-2: #575760;
            --contrast-3: #b2b2be;
            --base: #f0f0f0;
            --base-2: #f7f8f9;
            --base-3: #ffffff;
            --accent: #1e73be;
        }

        :root .has-contrast-color {
            color: var(--contrast);
        }

        :root .has-contrast-background-color {
            background-color: var(--contrast);
        }

        :root .has-contrast-2-color {
            color: var(--contrast-2);
        }

        :root .has-contrast-2-background-color {
            background-color: var(--contrast-2);
        }

        :root .has-contrast-3-color {
            color: var(--contrast-3);
        }

        :root .has-contrast-3-background-color {
            background-color: var(--contrast-3);
        }

        :root .has-base-color {
            color: var(--base);
        }

        :root .has-base-background-color {
            background-color: var(--base);
        }

        :root .has-base-2-color {
            color: var(--base-2);
        }

        :root .has-base-2-background-color {
            background-color: var(--base-2);
        }

        :root .has-base-3-color {
            color: var(--base-3);
        }

        :root .has-base-3-background-color {
            background-color: var(--base-3);
        }

        :root .has-accent-color {
            color: var(--accent);
        }

        :root .has-accent-background-color {
            background-color: var(--accent);
        }

        .top-bar {
            background-color: #636363;
            color: #ffffff;
        }

        .top-bar a {
            color: #ffffff;
        }

        .top-bar a:hover {
            color: #303030;
        }

        .site-header {
            background-color: var(--base-3);
        }

        .main-title a,
        .main-title a:hover {
            color: var(--contrast);
        }

        .site-description {
            color: var(--contrast-2);
        }

        .mobile-menu-control-wrapper .menu-toggle,
        .mobile-menu-control-wrapper .menu-toggle:hover,
        .mobile-menu-control-wrapper .menu-toggle:focus,
        .has-inline-mobile-toggle #site-navigation.toggled {
            background-color: rgba(0, 0, 0, 0.02);
        }

        .main-navigation,
        .main-navigation ul ul {
            background-color: var(--base-3);
        }

        .main-navigation .main-nav ul li a,
        .main-navigation .menu-toggle,
        .main-navigation .menu-bar-items {
            color: var(--contrast);
        }

        .main-navigation .main-nav ul li:not([class*="current-menu-"]):hover>a,
        .main-navigation .main-nav ul li:not([class*="current-menu-"]):focus>a,
        .main-navigation .main-nav ul li.sfHover:not([class*="current-menu-"])>a,
        .main-navigation .menu-bar-item:hover>a,
        .main-navigation .menu-bar-item.sfHover>a {
            color: var(--accent);
        }

        button.menu-toggle:hover,
        button.menu-toggle:focus {
            color: var(--contrast);
        }

        .main-navigation .main-nav ul li[class*="current-menu-"]>a {
            color: var(--accent);
        }

        .navigation-search input[type="search"],
        .navigation-search input[type="search"]:active,
        .navigation-search input[type="search"]:focus,
        .main-navigation .main-nav ul li.search-item.active>a,
        .main-navigation .menu-bar-items .search-item.active>a {
            color: var(--accent);
        }

        .main-navigation ul ul {
            background-color: var(--base);
        }

        .separate-containers .inside-article,
        .separate-containers .comments-area,
        .separate-containers .page-header,
        .one-container .container,
        .separate-containers .paging-navigation,
        .inside-page-header {
            background-color: var(--base-3);
        }

        .entry-title a {
            color: var(--contrast);
        }

        .entry-title a:hover {
            color: var(--contrast-2);
        }

        .entry-meta {
            color: var(--contrast-2);
        }

        .sidebar .widget {
            background-color: var(--base-3);
        }

        .footer-widgets {
            background-color: var(--base-3);
        }

        .site-info {
            background-color: var(--base-3);
        }

        input[type="text"],
        input[type="email"],
        input[type="url"],
        input[type="password"],
        input[type="search"],
        input[type="tel"],
        input[type="number"],
        textarea,
        select {
            color: var(--contrast);
            background-color: var(--base-2);
            border-color: var(--base);
        }

        input[type="text"]:focus,
        input[type="email"]:focus,
        input[type="url"]:focus,
        input[type="password"]:focus,
        input[type="search"]:focus,
        input[type="tel"]:focus,
        input[type="number"]:focus,
        textarea:focus,
        select:focus {
            color: var(--contrast);
            background-color: var(--base-2);
            border-color: var(--contrast-3);
        }

        button,
        html input[type="button"],
        input[type="reset"],
        input[type="submit"],
        a.button,
        a.wp-block-button__link:not(.has-background) {
            color: #ffffff;
            background-color: #55555e;
        }

        button:hover,
        html input[type="button"]:hover,
        input[type="reset"]:hover,
        input[type="submit"]:hover,
        a.button:hover,
        button:focus,
        html input[type="button"]:focus,
        input[type="reset"]:focus,
        input[type="submit"]:focus,
        a.button:focus,
        a.wp-block-button__link:not(.has-background):active,
        a.wp-block-button__link:not(.has-background):focus,
        a.wp-block-button__link:not(.has-background):hover {
            color: #ffffff;
            background-color: #3f4047;
        }

        a.generate-back-to-top {
            background-color: rgba(0, 0, 0, 0.4);
            color: #ffffff;
        }

        a.generate-back-to-top:hover,
        a.generate-back-to-top:focus {
            background-color: rgba(0, 0, 0, 0.6);
            color: #ffffff;
        }

        :root {
            --gp-search-modal-bg-color: var(--base-3);
            --gp-search-modal-text-color: var(--contrast);
            --gp-search-modal-overlay-bg-color: rgba(0, 0, 0, 0.2);
        }

        @media (max-width:768px) {

            .main-navigation .menu-bar-item:hover>a,
            .main-navigation .menu-bar-item.sfHover>a {
                background: none;
                color: var(--contrast);
            }
        }

        .nav-below-header .main-navigation .inside-navigation.grid-container,
        .nav-above-header .main-navigation .inside-navigation.grid-container {
            padding: 0px 20px 0px 20px;
        }

        .site-main .wp-block-group__inner-container {
            padding: 40px;
        }

        .separate-containers .paging-navigation {
            padding-top: 20px;
            padding-bottom: 20px;
        }

        .entry-content .alignwide,
        body:not(.no-sidebar) .entry-content .alignfull {
            margin-left: -40px;
            width: calc(100% + 80px);
            max-width: calc(100% + 80px);
        }

        .rtl .menu-item-has-children .dropdown-menu-toggle {
            padding-left: 20px;
        }

        .rtl .main-navigation .main-nav ul li.menu-item-has-children>a {
            padding-right: 20px;
        }

        @media (max-width:768px) {

            .separate-containers .inside-article,
            .separate-containers .comments-area,
            .separate-containers .page-header,
            .separate-containers .paging-navigation,
            .one-container .site-content,
            .inside-page-header {
                padding: 30px;
            }

            .site-main .wp-block-group__inner-container {
                padding: 30px;
            }

            .inside-top-bar {
                padding-right: 30px;
                padding-left: 30px;
            }

            .inside-header {
                padding-right: 30px;
                padding-left: 30px;
            }

            .widget-area .widget {
                padding-top: 30px;
                padding-right: 30px;
                padding-bottom: 30px;
                padding-left: 30px;
            }

            .footer-widgets-container {
                padding-top: 30px;
                padding-right: 30px;
                padding-bottom: 30px;
                padding-left: 30px;
            }

            .inside-site-info {
                padding-right: 30px;
                padding-left: 30px;
            }

            .entry-content .alignwide,
            body:not(.no-sidebar) .entry-content .alignfull {
                margin-left: -30px;
                width: calc(100% + 60px);
                max-width: calc(100% + 60px);
            }

            .one-container .site-main .paging-navigation {
                margin-bottom: 20px;
            }
        }

        /* End cached CSS */
        .is-right-sidebar {
            width: 30%;
        }

        .is-left-sidebar {
            width: 30%;
        }

        .site-content .content-area {
            width: 100%;
        }

        @media (max-width:768px) {

            .main-navigation .menu-toggle,
            .sidebar-nav-mobile:not(#sticky-placeholder) {
                display: block;
            }

            .main-navigation ul,
            .gen-sidebar-nav,
            .main-navigation:not(.slideout-navigation):not(.toggled) .main-nav>ul,
            .has-inline-mobile-toggle #site-navigation .inside-navigation>*:not(.navigation-search):not(.main-nav) {
                display: none;
            }

            .nav-align-right .inside-navigation,
            .nav-align-center .inside-navigation {
                justify-content: space-between;
            }

            .has-inline-mobile-toggle .mobile-menu-control-wrapper {
                display: flex;
                flex-wrap: wrap;
            }

            .has-inline-mobile-toggle .inside-header {
                flex-direction: row;
                text-align: left;
                flex-wrap: wrap;
            }

            .has-inline-mobile-toggle .header-widget,
            .has-inline-mobile-toggle #site-navigation {
                flex-basis: 100%;
            }

            .nav-float-left .has-inline-mobile-toggle #site-navigation {
                order: 10;
            }
        }

        .elementor-template-full-width .site-content {
            display: block;
        }

        /*# sourceURL=generate-style-inline-css */
    </style>

    <link rel='stylesheet' id='elementor-frontend-css'
        href='/wp-content/plugins/elementor/assets/css/frontend.mineda1.css?ver=4.1.4' media='all' />
    <link rel='stylesheet' id='elementor-post-25-css'
        href='/wp-content/uploads/elementor/css/post-251639.css?ver=1782247367' media='all' />
    <link rel='stylesheet' id='elementor-post-59-css'
        href='/wp-content/uploads/elementor/css/post-598cd1.css?ver=1782247369' media='all' />
</head>
<!-- Whatsapp Sticky -->
<div class="sn_whatsup">
    <a href="https://wa.me/9220437682" target="_blank">
        <img src="wp-content/images/w5.png" width="50px">
    </a>
</div>

<body>
    <!--- js-->
    <div class="em40_header_area_main">
        <!-- HEADER TOP AREA -->
        <div class="techno-header-top" style="background-color: #d66010">
            <div class="container">
                <!-- STYLE 1 LEFT ADDRESS RIGHT ICON  -->
                <div class="row">
                    <!-- TOP LEFT -->
                    <div class="col-xs-12 col-md-8 col-sm-8">
                        <div class="top-address" id="Div1">
                            <p>
                                <!-- Email -->
                                <i class="fa fa-envelope-o"></i><a href="mailto:info@technosyslabs.com"
                                    id="Literal1">info@technosyslabs.com</a>
                                <!-- Address -->
                                <i class="fa fa-map"></i><span id="Literal2">Gurugram, Haryana - 122002</span>
                                <!-- Phone -->
                                <i class="fa fa-phone"></i><a href="tel:919220437682" id="Literal3">+91
                                    9220437682</a>
                            </p>
                        </div>
                    </div>
                    <!-- TOP RIGHT -->
                    <div class="col-xs-12 col-md-4 col-sm-4">
                        <div class="top-right-menu">
                            <ul class="social-icons text-right">
                                <li><a class="facebook social-icon"
                                        href="https://www.facebook.com/profile.php?id=61584986437288"
                                        title="Facebook"><i class="fa fa-facebook"></i></a></li>
                                <li><a class="linkedin social-icon"
                                        href="https://www.linkedin.com/company/technosyslab/" title="LinkedIn"
                                        target="_blank">
                                        <i class="fa fa-linkedin"></i>
                                    </a>
                                </li>
                                <li><a class="instagram social-icon" href="https://www.instagram.com/technosyslabs/"
                                        title="Instagram"><i class="fa fa-instagram"></i></a></li>
                                <li>
                                    <a class="twitter social-icon" href="https://x.com/Technosyslabs" title="Twitter"
                                        target="_blank"> <i class="fa-brands fa-x-twitter"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- STYLE 2 lEFT ICON RIGHT MENU  -->
            </div>
        </div>
        <div class="mobile_logo_area d-sm-block d-md-block d-lg-none">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="mobile_menu_logo text-center">
                            <a href="/" title="Technosys">
                                <img src="wp-content/uploads/2021/02/newlogo.png" alt="Technosys"
                                    style="width: 250px;" />
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- START HEADER MAIN MENU AREA -->
        <!-- HEADER TRANSPARENT MENU -->
        <div class="techno-main-menu search-menu one_page d-md-none d-lg-block d-sm-none d-none">
            <div class="techno_nav_area scroll_fixed">
                <div class="container" style="max-width: 1200px">
                    <div class="row logo-left align-items-center">
                        <div class="col-md-4 col-sm-6 col-xs-4">
                            <div class="logo">
                                <a class="main_sticky_main_l standard-logo" href="/" title="Technosys">
                                    <img src="wp-content/uploads/2021/02/newlogo.png" alt="Technosys"
                                        style="width: 250px;" />
                                </a>
                                <a class="main_sticky_l" href="/" title="Technosys">
                                    <img src="wp-content/uploads/2021/02/newlogo.png" alt="Technosys"
                                        style="width: 250px;" />
                                </a>
                            </div>
                        </div>
                        <div class="col-md-8 col-sm-8 col-xs78">
                            <nav class="techno_menu main-search-menu">
                                <div id="mega-menu-wrap-menu-1" class="mega-menu-wrap">
                                    <div class="mega-menu-toggle">
                                        <div class="mega-toggle-blocks-left"></div>
                                        <div class="mega-toggle-blocks-center"></div>
                                        <div class="mega-toggle-blocks-right">
                                            <div class='mega-toggle-block mega-menu-toggle-animated-block mega-toggle-block-0'
                                                id='mega-toggle-block-0'>
                                                <button aria-label="Toggle Menu"
                                                    class="mega-toggle-animated mega-toggle-animated-slider"
                                                    type="button" aria-expanded="false">
                                                    <span class="mega-toggle-animated-box">
                                                        <span class="mega-toggle-animated-inner"></span>
                                                    </span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <ul id="mega-menu-menu-1"
                                        class="mega-menu max-mega-menu mega-menu-horizontal mega-no-js"
                                        data-event="hover_intent" data-effect="fade_up" data-effect-speed="200"
                                        data-effect-mobile="disabled" data-effect-speed-mobile="0"
                                        data-mobile-force-width="false" data-second-click="go"
                                        data-document-click="collapse" data-vertical-behaviour="standard"
                                        data-breakpoint="768" data-unbind="true" data-mobile-state="collapse_all"
                                        data-hover-intent-timeout="300" data-hover-intent-interval="100">
                                        <li class='mega-menu-item mega-menu-item-type-post_type mega-menu-item-object-page mega-align-bottom-left mega-menu-flyout mega-menu-item-5491'
                                            id='Li'><a class=" mega-menu-link" href="/" tabindex="0"
                                                id="home-menu">Home</a></li>
                                        <li class='mega-menu-item mega-menu-item-type-post_type mega-menu-item-object-page mega-align-bottom-left mega-menu-flyout mega-menu-item-5491'
                                            id='mega-menu-item-5491' style="font-weight: bold"><a
                                                class=" mega-menu-link" href="/about" tabindex="0"
                                                id="menuAbout">About Us</a></li>
                                        <li class='mega-menu-item mega-menu-item-type-post_type mega-menu-item-object-page mega-menu-item-has-children mega-align-bottom-left mega-menu-flyout mega-menu-item-5497'
                                            id='mega-menu-item-5497'>
                                            <a class="mega-menu-link" href="/services/technology-consulting"
                                                aria-haspopup="true" aria-expanded="false" tabindex="0"
                                                id="menuservice">Services<span class="mega-indicator"></span></a>
                                            <ul id="DivMenuservice" class="mega-sub-menu">
                                                <li class='mega-menu-item mega-menu-item-type-post_type mega-menu-item-object-page'
                                                    id='mega-menu-item-1'><a class='mega-menu-link'
                                                        href='/services/technology-consulting'>Technology
                                                        Consulting</a></li>
                                                <li class='mega-menu-item mega-menu-item-type-post_type mega-menu-item-object-page'
                                                    id='mega-menu-item-2'><a class='mega-menu-link'
                                                        href='/services/strategic-outsourcing'>Strategic
                                                        Outsourcing</a></li>
                                                <li class='mega-menu-item mega-menu-item-type-post_type mega-menu-item-object-page'
                                                    id='mega-menu-item-3'><a class='mega-menu-link'
                                                        href='/services/digital-transformation'>Digital
                                                        Transformation</a></li>
                                                <li class='mega-menu-item mega-menu-item-type-post_type mega-menu-item-object-page'
                                                    id='mega-menu-item-4'><a class='mega-menu-link'
                                                        href='/services/cloud-solutions'>Cloud Solutions</a></li>
                                                <li class='mega-menu-item mega-menu-item-type-post_type mega-menu-item-object-page'
                                                    id='mega-menu-item-5'><a class='mega-menu-link'
                                                        href='/services/cyber-security'>Cyber Security</a></li>
                                                <li class='mega-menu-item mega-menu-item-type-post_type mega-menu-item-object-page'
                                                    id='mega-menu-item-6'><a class='mega-menu-link'
                                                        href='/services/data-center-solutions'>Data Center
                                                        Solutions</a></li>
                                                <li class='mega-menu-item mega-menu-item-type-post_type mega-menu-item-object-page'
                                                    id='mega-menu-item-7'><a class='mega-menu-link'
                                                        href='/services/managed-services'>Managed Services</a></li>
                                                <li class='mega-menu-item mega-menu-item-type-post_type mega-menu-item-object-page'
                                                    id='mega-menu-item-8'><a class='mega-menu-link'
                                                        href='/services/enterprise-application'>Enterprise
                                                        Application</a></li>
                                                <li class='mega-menu-item mega-menu-item-type-post_type mega-menu-item-object-page'
                                                    id='mega-menu-item-9'><a class='mega-menu-link'
                                                        href='/services/database-services'>Database Services</a></li>
                                                <li class='mega-menu-item mega-menu-item-type-post_type mega-menu-item-object-page mega-menu-item-has-children mega-menu-flyout'
                                                    id='mega-menu-item-10'>
                                                    <a class='mega-menu-link'
                                                        href='/services/testing-as-a-service'>Testing as a Service
                                                        (TaaS)<span class='mega-indicator'></span></a>
                                                    <ul class='mega-sub-menu'>
                                                        <li class='mega-menu-item'><a class='mega-menu-link'
                                                                href='/services/microsoft-dynamics-365'>Microsoft
                                                                Dynamics
                                                                365</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class='mega-menu-item mega-menu-item-type-post_type mega-menu-item-object-page mega-menu-item-has-children mega-menu-flyout'
                                                    id='mega-menu-item-12'>
                                                    <a class='mega-menu-link'
                                                        href='/services/mobile-development-services'>Mobile Development
                                                        Services<span class='mega-indicator'></span></a>
                                                    <ul class='mega-sub-menu'>
                                                        <li class='mega-menu-item'><a class='mega-menu-link'
                                                                href='/services/cross-platfrom-app-development'>Cross-Platform
                                                                App
                                                                Development</a>
                                                        </li>
                                                        <li class='mega-menu-item'><a class='mega-menu-link'
                                                                href='/services/flutter-app-development'>Flutter App
                                                                Development</a>
                                                        </li>
                                                        <li class='mega-menu-item'><a class='mega-menu-link'
                                                                href='/services/react-native-app-development'>React
                                                                Native App
                                                                Development</a>
                                                        </li>
                                                        <li class='mega-menu-item'><a class='mega-menu-link'
                                                                href='/services/ui-ux-design-for-mobile-apps'>UI/UX
                                                                Design for Mobile
                                                                Apps</a>
                                                        </li>
                                                        <li class='mega-menu-item'><a class='mega-menu-link'
                                                                href='/services/app-maintenance-and-support'>App
                                                                Maintenance &
                                                                Support</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class='mega-menu-item mega-menu-item-type-post_type mega-menu-item-object-page mega-menu-item-has-children mega-menu-flyout'
                                                    id='mega-menu-item-18'>
                                                    <a class='mega-menu-link'
                                                        href='/services/web-development-services'>Web Development
                                                        Services<span class='mega-indicator'></span></a>
                                                    <ul class='mega-sub-menu'>
                                                        <li class='mega-menu-item'><a class='mega-menu-link'
                                                                href='/services/custom-website-development'>Custom
                                                                Website
                                                                Development</a>
                                                        </li>
                                                        <li class='mega-menu-item'><a class='mega-menu-link'
                                                                href='/services/responsive-website-design'>Responsive
                                                                Website
                                                                Design</a>
                                                        </li>
                                                        <li class='mega-menu-item'><a class='mega-menu-link'
                                                                href='/services/ecommerce-development'>E-Commerce
                                                                Development</a>
                                                        </li>
                                                        <li class='mega-menu-item'><a class='mega-menu-link'
                                                                href='/services/web-application-development'>Web
                                                                Application
                                                                Development</a>
                                                        </li>
                                                        <li class='mega-menu-item'><a class='mega-menu-link'
                                                                href='/services/api-integration-services'>API
                                                                Integration
                                                                Services</a>
                                                        </li>
                                                        <li class='mega-menu-item'><a class='mega-menu-link'
                                                                href='/services/website-maintenance-support'>Website
                                                                Maintenance &
                                                                Support</a>
                                                        </li>
                                                        <li class='mega-menu-item'><a class='mega-menu-link'
                                                                href='/services/seo-friendly-development'>SEO-Friendly
                                                                Development</a>
                                                        </li>
                                                        <li class='mega-menu-item'><a class='mega-menu-link'
                                                                href='/services/billing-and-revenue-management-portal'>Billing
                                                                and Revenue
                                                                Management Portal</a>
                                                        </li>
                                                        <li class='mega-menu-item'><a class='mega-menu-link'
                                                                href='/services/human-resources-management-system'>Human
                                                                Resource Management
                                                                System (HRMS)</a>
                                                        </li>
                                                        <li class='mega-menu-item'><a class='mega-menu-link'
                                                                href='/services/asset-management-system'>Asset
                                                                Management
                                                                System</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class='mega-menu-item mega-menu-item-type-post_type mega-menu-item-object-page mega-menu-item-has-children mega-align-bottom-left mega-menu-flyout mega-menu-item-5492'
                                            id='mega-menu-item-5492'>
                                            <a class="mega-menu-link" href="/projects/banking-and-finance"
                                                aria-haspopup="true" aria-expanded="false" tabindex="0"
                                                id="menuproject">Case Study<span class="mega-indicator"></span></a>
                                            <ul id="DivMenuproject" class="mega-sub-menu">
                                                <li class='mega-menu-item mega-menu-item-type-post_type mega-menu-item-object-page mega-menu-item-4922'
                                                    id='Li3'><a class='mega-menu-link'
                                                        href='/projects/banking-and-finance'>Banking and Finance</a>
                                                </li>
                                                <li class='mega-menu-item mega-menu-item-type-post_type mega-menu-item-object-page mega-menu-item-4922'
                                                    id='Li3'><a class='mega-menu-link'
                                                        href='/projects/medical-pharma'>Medical/Pharma</a></li>
                                                <li class='mega-menu-item mega-menu-item-type-post_type mega-menu-item-object-page mega-menu-item-4922'
                                                    id='Li3'><a class='mega-menu-link'
                                                        href='/projects/claim-management'>Claim
                                                        Management</a>
                                                </li>
                                                <li class='mega-menu-item mega-menu-item-type-post_type mega-menu-item-object-page mega-menu-item-4922'
                                                    id='Li3'><a class='mega-menu-link'
                                                        href='/projects/rpa-implementation'>RPA
                                                        Implementation</a>
                                                </li>
                                                <li class='mega-menu-item mega-menu-item-type-post_type mega-menu-item-object-page mega-menu-item-4922'
                                                    id='Li3'><a class='mega-menu-link'
                                                        href='/projects/reporting-and-compliance'>Reporting
                                                        &Compliance</a></li>
                                            </ul>
                                        </li>
                                        <li class='mega-menu-item mega-menu-item-type-post_type mega-menu-item-object-page mega-menu-item-has-children mega-align-bottom-left mega-menu-flyout mega-menu-item-5497'
                                            id='Li7'>
                                            <a class="mega-menu-link" href="javascript:void" aria-haspopup="true"
                                                aria-expanded="false" tabindex="0" id="menublog">Insights<span
                                                    class="mega-indicator"></span></a>
                                            <ul class="mega-sub-menu">
                                                <li class='mega-menu-item mega-menu-item-type-post_type mega-menu-item-object-page mega-menu-item-4922'
                                                    id='Li8'><a class="mega-menu-link" href="/blog/">Blogs</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class='mega-menu-item mega-menu-item-type-post_type mega-menu-item-object-page mega-align-bottom-left mega-menu-flyout mega-menu-item-4901'
                                            id='Li17'><a class="mega-menu-link" href="/career" tabindex="0"
                                                id="menucareer">Career</a></li>
                                        <li class='mega-menu-item mega-menu-item-type-post_type mega-menu-item-object-page mega-align-bottom-left mega-menu-flyout mega-menu-item-4901'
                                            id='mega-menu-item-4901'><a class="mega-menu-link" href="/contact-us"
                                                tabindex="0" id="menucontact">Contact</a></li>
                                    </ul>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- HEADER TRANSPARENT WITH SEARCH -->
        <!-- MOBILE MENU AREA -->
        <div class="home-2 mbm d-sm-block d-md-block d-lg-none header_area main-menu-area">
            <div class="menu_area mobile-menu">
                <nav>
                    <ul id="menu-main-menu" class="main-menu clearfix">
                        <li id="Li11"
                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-5491"><a
                                href="/">Home</a></li>
                        <li id="menu-item-5491"
                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-5491"><a
                                href="/about">AboutUs</a></li>
                        <li id="menu-item-5497"
                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-5497">
                            <a href="javascript:void">Services</a>
                            <ul id="Divmobilemenu" class="sub-menu">
                                <li id='menu-item-1' class='menu-item menu-item-type-post_type menu-item-object-page'>
                                    <a href='/services/technology-consulting'>Technology Consulting</a>
                                </li>
                                <li id='menu-item-2' class='menu-item menu-item-type-post_type menu-item-object-page'>
                                    <a href='/services/strategic-outsourcing'>Strategic Outsourcing</a>
                                </li>
                                <li id='menu-item-3' class='menu-item menu-item-type-post_type menu-item-object-page'>
                                    <a href='/services/digital-transformation'>Digital Transformation</a>
                                </li>
                                <li id='menu-item-4' class='menu-item menu-item-type-post_type menu-item-object-page'>
                                    <a href='/services/cloud-solutions'>Cloud Solutions</a>
                                </li>
                                <li id='menu-item-5' class='menu-item menu-item-type-post_type menu-item-object-page'>
                                    <a href='/services/cyber-security'>Cyber Security</a>
                                </li>
                                <li id='menu-item-6' class='menu-item menu-item-type-post_type menu-item-object-page'>
                                    <a href='/services/data-center-solutions'>Data Center Solutions</a>
                                </li>
                                <li id='menu-item-7' class='menu-item menu-item-type-post_type menu-item-object-page'>
                                    <a href='/services/managed-services'>Managed Services</a>
                                </li>
                                <li id='menu-item-8' class='menu-item menu-item-type-post_type menu-item-object-page'>
                                    <a href='/services/enterprise-application'>Enterprise Application</a>
                                </li>
                                <li id='menu-item-9' class='menu-item menu-item-type-post_type menu-item-object-page'>
                                    <a href='/services/database-services'>Database Services</a>
                                </li>
                                <li id='menu-item-10'
                                    class='menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children'>
                                    <a href='/services/testing-as-a-service'>Testing as a Service (TaaS)</a>
                                    <ul class='sub-menu'>
                                        <li class='mega-menu-item'><a class='mega-menu-link'
                                                href='/services/microsoft-dynamics-365'>Microsoft Dynamics 365</a></li>
                                    </ul>
                                </li>
                                <li id='menu-item-12'
                                    class='menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children'>
                                    <a href='/services/mobile-development-services'>Mobile Development Services</a>
                                    <ul class='sub-menu'>
                                        <li class='mega-menu-item'><a class='mega-menu-link'
                                                href='/services/cross-platfrom-app-development'>Cross-Platform App
                                                Development</a></li>
                                        <li class='mega-menu-item'><a class='mega-menu-link'
                                                href='/services/flutter-app-development'>Flutter App Development</a>
                                        </li>
                                        <li class='mega-menu-item'><a class='mega-menu-link'
                                                href='/services/react-native-app-development'>React Native App
                                                Development</a></li>
                                        <li class='mega-menu-item'><a class='mega-menu-link'
                                                href='/services/ui-ux-design-for-mobile-apps'>UI/UX Design for Mobile
                                                Apps</a></li>
                                        <li class='mega-menu-item'><a class='mega-menu-link'
                                                href='/services/app-maintenance-and-support'>App Maintenance &
                                                Support</a></li>
                                    </ul>
                                </li>
                                <li id='menu-item-18'
                                    class='menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children'>
                                    <a href='/services/web-development-services'>Web Development Services</a>
                                    <ul class='sub-menu'>
                                        <li class='mega-menu-item'><a class='mega-menu-link'
                                                href='/services/custom-website-development'>Custom Website
                                                Development</a></li>
                                        <li class='mega-menu-item'><a class='mega-menu-link'
                                                href='/services/responsive-website-design'>Responsive Website
                                                Design</a></li>
                                        <li class='mega-menu-item'><a class='mega-menu-link'
                                                href='/services/ecommerce-development'>E-Commerce Development</a>
                                        </li>
                                        <li class='mega-menu-item'><a class='mega-menu-link'
                                                href='/services/web-application-development'>Web Application
                                                Development</a>
                                        </li>
                                        <li class='mega-menu-item'><a class='mega-menu-link'
                                                href='/services/api-integration-services'>API Integration
                                                Services</a>
                                        </li>
                                        <li class='mega-menu-item'><a class='mega-menu-link'
                                                href='/services/website-maintenance-support'>Website Maintenance &
                                                Support</a></li>
                                        <li class='mega-menu-item'><a class='mega-menu-link'
                                                href='Services3697.html?s=25'>SEO-Friendly Development</a></li>
                                        <li class='mega-menu-item'><a class='mega-menu-link'
                                                href='/services/seo-friendly-development'>Billing and Revenue
                                                Management Portal</a>
                                        </li>
                                        <li class='mega-menu-item'><a class='mega-menu-link'
                                                href='/services/human-resources-management-system'>Human Resource
                                                Ma/services/billing-and-revenue-management-portal (HRMS)</a>
                                        </li>
                                        <li class='mega-menu-item'><a class='mega-menu-link'
                                                href='/services/asset-management-system'>Asset Management System</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li id="menu-item-6540"
                            class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-6540">
                            <a href="javascript:void">Case Study</a>
                            <ul id="Divmobileproject" class="sub-menu">
                                <li id='menu-item-4892'
                                    class='menu-item menu-item-type-post_type menu-item-object-page menu-item-4892'><a
                                        href='Projectcff1.html?p=1'>Banking and Finance</a></li>
                                <li id='menu-item-4892'
                                    class='menu-item menu-item-type-post_type menu-item-object-page menu-item-4892'><a
                                        href='/projects/medical-pharma'>Medical/Pharma</a></li>
                                <li id='menu-item-4892'
                                    class='menu-item menu-item-type-post_type menu-item-object-page menu-item-4892'><a
                                        href='/projects/claim-management'>Claim Management</a></li>
                                <li id='menu-item-4892'
                                    class='menu-item menu-item-type-post_type menu-item-object-page menu-item-4892'><a
                                        href='/projects/rpa-implementation'>RPA Implementation</a></li>
                                <li id='menu-item-4892'
                                    class='menu-item menu-item-type-post_type menu-item-object-page menu-item-4892'><a
                                        href='/projects/reporting-and-compliance'>Reporting &Compliance</a></li>
                            </ul>
                        </li>
                        <li id="menu-item-6541"
                            class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-6541">
                            <a href="#">Insights</a>
                            <ul class="sub-menu">
                                <li id="menu-item-7943"
                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-7943"><a
                                        href="https://technosyslabs.com/blog/index.php/technolabsblog/">Blogs</a></li>
                            </ul>
                        </li>
                        <li id="Li16"
                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4901"><a
                                href="/career">Career</a></li>
                        <li id="menu-item-4901"
                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4901"><a
                                href="/contact-us">Contact</a></li>
                    </ul>
                </nav>
            </div>
        </div>
        <!-- END MOBILE MENU AREA  -->
        <div class="container">
            <div id="slidetoglle">
                <div class="col-sm-12">
                    <!--<p class="text-right">-->
                    <a href="javascript:void" class="btn btn-info btn-lg cta-open"
                        style="border: none; font-size: 20px">Enquire Now</a>
                    <!--</p>-->
                </div>
            </div>
        </div>

        @yield('main')

        <footer itemtype="https://schema.org/WPFooter" itemscope="itemscope" id="colophon" role="contentinfo">
            <div class='footer-width-fixer'>
                <div data-elementor-type="wp-post" data-elementor-id="10450" class="elementor elementor-10450"
                    style="background: #1a1a3e;">
                    <section
                        class="elementor-section elementor-top-section elementor-element elementor-element-35f0c87 footer elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                        data-id="35f0c87" data-element_type="section"
                        data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                        <div class="elementor-container elementor-column-gap-default">
                            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-2f6dab5"
                                data-id="2f6dab5" data-element_type="column">
                                <div class="elementor-widget-wrap elementor-element-populated">
                                    <section
                                        class="elementor-section elementor-inner-section elementor-element elementor-element-db069e9 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                        data-id="db069e9" data-element_type="section">
                                        <div class="elementor-container elementor-column-gap-default">
                                            <div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-bb8e95b"
                                                data-id="bb8e95b" data-element_type="column">
                                                <div class="elementor-widget-wrap elementor-element-populated">
                                                    <div class="elementor-element elementor-element-9f04bdf elementor-widget elementor-widget-image"
                                                        data-id="9f04bdf" data-element_type="widget"
                                                        data-widget_type="image.default">
                                                        <div class="elementor-widget-container">
                                                            <a href="/">
                                                                <img loading="lazy" width="210" height="32"
                                                                    src="wp-content/uploads/2021/02/revlogo.png"
                                                                    class="attachment-large size-large wp-image-9197"
                                                                    alt="" />
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="elementor-element elementor-element-c51c71c elementor-widget elementor-widget-text-editor"
                                                        data-id="c51c71c" data-element_type="widget"
                                                        data-widget_type="text-editor.default">
                                                        <div class="elementor-widget-container">
                                                            <p style="color: white">We are a Technical Consultancy and
                                                                Enterprise IT Services Organisation, specialising in
                                                                Application and Infrastructure services and solutions.
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="elementor-element elementor-element-4b46e22 elementor-widget elementor-widget-heading"
                                                        data-id="4b46e22" data-element_type="widget"
                                                        data-widget_type="heading.default">
                                                        <div class="elementor-widget-container">
                                                            <h2 class="elementor-heading-title elementor-size-default"
                                                                style="color: #f37231; font-weight: 900">Follow Us
                                                            </h2>
                                                        </div>
                                                    </div>
                                                    <div class="elementor-element elementor-element-646eb7d e-grid-align-left elementor-shape-rounded elementor-grid-0 elementor-widget elementor-widget-social-icons"
                                                        data-id="646eb7d" data-element_type="widget"
                                                        data-widget_type="social-icons.default">
                                                        <div class="elementor-widget-container">
                                                            <div class="elementor-social-icons-wrapper elementor-grid">
                                                                <span class="elementor-grid-item"
                                                                    style="background-color: #d66010">
                                                                    <a class="elementor-icon elementor-social-icon elementor-social-icon-flaticon-facebook-4 elementor-repeater-item-b0435c4"
                                                                        href="https://www.facebook.com/profile.php?id=61584986437288"
                                                                        rel="nofollow"
                                                                        style="background-color: #d66010">
                                                                        <span
                                                                            class="elementor-screen-only">Flaticon-facebook-4</span>
                                                                        <i class="flaticon flaticon-facebook-4"></i>
                                                                    </a>
                                                                </span>
                                                                <span class="elementor-grid-item"
                                                                    style="background-color:#d66010">
                                                                    <a class="elementor-icon elementor-social-icon elementor-social-icon-linkedin"
                                                                        href="https://www.linkedin.com/company/technosyslab/"
                                                                        rel="nofollow" target="_blank"
                                                                        style="background-color:#d66010"> <span
                                                                            class="elementor-screen-only">LinkedIn</span>
                                                                        <i class="fab fa-linkedin-in"></i></a>
                                                                </span>
                                                                <span class="elementor-grid-item"
                                                                    style="background-color: #d66010">
                                                                    <a class="elementor-icon elementor-social-icon elementor-social-icon-flaticon-instagram-logo elementor-repeater-item-ef9ad52"
                                                                        href="https://www.instagram.com/technosyslabs/"
                                                                        rel="nofollow"
                                                                        style="background-color: #d66010">
                                                                        <span
                                                                            class="elementor-screen-only">Flaticon-instagram-logo</span>
                                                                        <i
                                                                            class="flaticon flaticon-instagram-logo"></i>
                                                                    </a>
                                                                </span>
                                                                <span class="elementor-grid-item"
                                                                    style="background-color: #d66010">
                                                                    <a class="elementor-icon elementor-social-icon elementor-social-icon-twitter elementor-repeater-item-ef171ba"
                                                                        href="https://x.com/Technosyslabs"
                                                                        rel="nofollow" target="_blank"
                                                                        style="background-color: #d66010"> <span
                                                                            class="elementor-screen-only">Twitter</span>
                                                                        <i class="fa-brands fa-x-twitter"></i></a>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-06ad2a5"
                                                data-id="06ad2a5" data-element_type="column">
                                                <div class="elementor-widget-wrap elementor-element-populated">
                                                    <div class="elementor-element elementor-element-c6cafb4 elementor-widget elementor-widget-heading"
                                                        data-id="c6cafb4" data-element_type="widget"
                                                        data-widget_type="heading.default">
                                                        <div class="elementor-widget-container">
                                                            <h2 class="elementor-heading-title elementor-size-default"
                                                                style="color: #f37231; font-weight: 800">Quick Links
                                                            </h2>
                                                        </div>
                                                    </div>
                                                    <div class="elementor-element elementor-element-15e297a elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list"
                                                        data-id="15e297a" data-element_type="widget"
                                                        data-widget_type="icon-list.default">
                                                        <div class="elementor-widget-container">
                                                            <ul class="elementor-icon-list-items">
                                                                <li class="elementor-icon-list-item">
                                                                    <a href="/">
                                                                        <span class="elementor-icon-list-icon">
                                                                            <i aria-hidden="true"
                                                                                class="flaticon flaticon-right-arrow"></i>
                                                                        </span>
                                                                        <span
                                                                            class="elementor-icon-list-text">Home</span>
                                                                    </a>
                                                                </li>
                                                                <li class="elementor-icon-list-item">
                                                                    <a href="/about">
                                                                        <span class="elementor-icon-list-icon">
                                                                            <i aria-hidden="true"
                                                                                class="flaticon flaticon-right-arrow"></i>
                                                                        </span>
                                                                        <span class="elementor-icon-list-text">About
                                                                            Us</span>
                                                                    </a>
                                                                </li>
                                                                <li class="elementor-icon-list-item">
                                                                    <a href="ContactUs.html">
                                                                        <span class="elementor-icon-list-icon">
                                                                            <i aria-hidden="true"
                                                                                class="flaticon flaticon-right-arrow"></i>
                                                                        </span>
                                                                        <span class="elementor-icon-list-text">Contact
                                                                            Us</span>
                                                                    </a>
                                                                </li>
                                                                <li class="elementor-icon-list-item">
                                                                    <a href="Services73bb.html?s=1">
                                                                        <span class="elementor-icon-list-icon">
                                                                            <i aria-hidden="true"
                                                                                class="flaticon flaticon-right-arrow"></i>
                                                                        </span>
                                                                        <span
                                                                            class="elementor-icon-list-text">Services</span>
                                                                    </a>
                                                                </li>
                                                                <li class="elementor-icon-list-item">
                                                                    <a href="Career.html">
                                                                        <span class="elementor-icon-list-icon">
                                                                            <i aria-hidden="true"
                                                                                class="flaticon flaticon-right-arrow"></i>
                                                                        </span>
                                                                        <span
                                                                            class="elementor-icon-list-text">Career</span>
                                                                    </a>
                                                                </li>
                                                                <li class="elementor-icon-list-item">
                                                                    <a href="Policy.html">
                                                                        <span class="elementor-icon-list-icon">
                                                                            <i aria-hidden="true"
                                                                                class="flaticon flaticon-right-arrow"></i>
                                                                        </span>
                                                                        <span
                                                                            class="elementor-icon-list-text">Policy</span>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-d24cfa0"
                                                data-id="d24cfa0" data-element_type="column">
                                                <div class="elementor-widget-wrap elementor-element-populated">
                                                    <div class="elementor-element elementor-element-e935da5 elementor-widget elementor-widget-heading"
                                                        data-id="e935da5" data-element_type="widget"
                                                        data-widget_type="heading.default">
                                                        <div class="elementor-widget-container">
                                                            <h2 class="elementor-heading-title elementor-size-default"
                                                                style="color: #f37231; font-weight: 800">IT Services
                                                            </h2>
                                                        </div>
                                                    </div>
                                                    <div class="elementor-element elementor-element-e4609bb elementor-widget elementor-widget-wp-widget-em_recent_post_widget"
                                                        data-id="e4609bb" data-element_type="widget"
                                                        data-widget_type="wp-widget-em_recent_post_widget.default">
                                                        <div class="elementor-widget-container">
                                                            <div class="single-widget-item">
                                                                <div class="recent-post-item">
                                                                    <div class="recent-post-image">
                                                                        <a href="#">
                                                                            <img loading="lazy" width="80"
                                                                                height="80"
                                                                                src="/wp-content/uploads/2023/04/blog2-80x80.png"
                                                                                class="attachment-techno-recent-image size-techno-recent-image wp-post-image"
                                                                                alt="" decoding="async"
                                                                             />
                                                                        </a>
                                                                    </div>
                                                                    <div class="recent-post-text">
                                                                        <h4>
                                                                            <a href="#">Project Consultancy
                                                                                Services
                                                                            </a>
                                                                        </h4>
                                                                        <span class="rcomment">August 9, 2023</span>
                                                                    </div>
                                                                </div>
                                                                <div class="recent-post-item">
                                                                    <div class="recent-post-image">
                                                                        <a href="#">
                                                                            <img loading="lazy" width="80"
                                                                                height="80"
                                                                                src="/wp-content/uploads/2023/04/blog1-80x80.png"
                                                                                class="attachment-techno-recent-image size-techno-recent-image wp-post-image"
                                                                                alt="" decoding="async"
                                                                                />
                                                                        </a>
                                                                    </div>
                                                                    <div class="recent-post-text">
                                                                        <h4>
                                                                            <a href="#">Functional Consultancy
                                                                                Services
                                                                            </a>
                                                                        </h4>
                                                                        <span class="rcomment">August 9, 2023</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-2139fa5"
                                                data-id="2139fa5" data-element_type="column">
                                                <div class="elementor-widget-wrap elementor-element-populated">
                                                    <div class="elementor-element elementor-element-22c737c elementor-widget elementor-widget-heading"
                                                        data-id="22c737c" data-element_type="widget"
                                                        data-widget_type="heading.default">
                                                        <div class="elementor-widget-container">
                                                            <h2 class="elementor-heading-title elementor-size-default"
                                                                style="color: #f37231; font-weight: 800">Contact Info
                                                            </h2>
                                                        </div>
                                                    </div>
                                                    <div class="elementor-element elementor-element-9bf67b3 elementor-widget elementor-widget-iconbox"
                                                        data-id="9bf67b3" data-element_type="widget"
                                                        data-widget_type="iconbox.default">
                                                        <div class="elementor-widget-container">
                                                            <div class="icon-box">
                                                                <div class="icon-box-icon">
                                                                    <div class="icon"
                                                                        style="background-color: #d66010">
                                                                        <i class="flaticon flaticon-placeholder"
                                                                            style="background-color: #d66010"></i>
                                                                    </div>
                                                                </div>
                                                                <div class="icon-box-content">
                                                                    <div class="title">
                                                                        <h2>Location</h2>
                                                                    </div>
                                                                    <div class="description">
                                                                        <span>
                                                                            <address
                                                                                class='contact-info offset-top-50'>
                                                                                <p>
                                                                                <p
                                                                                    style="box-sizing: border-box; margin: 0px; font-family: Muli, sans-serif; font-size: 16px;">
                                                                                    <span
                                                                                        style="box-sizing: border-box; font-size: medium;">AltF
                                                                                        Global Business Park, MR1, 7th
                                                                                        Floor, Tower D, Mehrauli,
                                                                                        Gurugram, Haryana-122002</span>
                                                                                </p>
                                                                                <p
                                                                                    style="box-sizing: border-box; margin: 0px; font-family: Muli, sans-serif; font-size: 16px;">
                                                                                    &nbsp;
                                                                                </p>
                                                                                <p
                                                                                    style="box-sizing: border-box; margin: 0px; font-family: Muli, sans-serif; font-size: 16px;">
                                                                                    <span
                                                                                        style="box-sizing: border-box; font-size: medium;">UK
                                                                                        Office
                                                                                        Address:&nbsp;&nbsp;</span><span
                                                                                        style="box-sizing: border-box; font-size: medium;">517
                                                                                        The Blenheim Center Prince
                                                                                        Regent Road, TW3 1ND UK</span>
                                                                                </p>
                                                                                </p>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="elementor-element elementor-element-ef164ca elementor-widget elementor-widget-iconbox"
                                                        data-id="ef164ca" data-element_type="widget"
                                                        data-widget_type="iconbox.default">
                                                        <div class="elementor-widget-container">
                                                            <div class="icon-box">
                                                                <div class="icon-box-icon">
                                                                    <div class="icon"
                                                                        style="background-color: #d66010">
                                                                        <i class="flaticon flaticon-communications"
                                                                            style="background-color: #d66010"></i>
                                                                    </div>
                                                                </div>
                                                                <div class="icon-box-content">
                                                                    <div class="title">
                                                                        <h2>Email Us</h2>
                                                                    </div>
                                                                    <div class="description" style="color: #9EB3EF;">
                                                                        <span>
                                                                            <dl>
                                                                                <dt></dt>
                                                                                <dd>info@technosyslabs.com</dd>
                                                                            </dl>
                                                                            </dl>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="elementor-element elementor-element-78e59a1 elementor-widget elementor-widget-iconbox"
                                                        data-id="78e59a1" data-element_type="widget"
                                                        data-widget_type="iconbox.default">
                                                        <div class="elementor-widget-container">
                                                            <div class="icon-box">
                                                                <div class="icon-box-icon">
                                                                    <div class="icon"
                                                                        style="background-color: #d66010">
                                                                        <i class="flaticon flaticon-call"
                                                                            style="background-color: #d66010"></i>
                                                                    </div>
                                                                </div>
                                                                <div class="icon-box-content">
                                                                    <div class="title">
                                                                        <h2>Phone Us</h2>
                                                                    </div>
                                                                    <div class="description" style="color: #9EB3EF;">
                                                                        <span>
                                                                            <dl class='offset-top-0'>
                                                                                <dt> </dt>
                                                                                <dd>+91 9220437682</dd>
                                                                            </dl>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                    <section
                                        class="elementor-section elementor-inner-section elementor-element elementor-element-5c19841 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                        data-id="5c19841" data-element_type="section">
                                        <div class="elementor-container elementor-column-gap-default">
                                            <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-58756fd"
                                                data-id="58756fd" data-element_type="column">
                                                <div class="elementor-widget-wrap elementor-element-populated">
                                                    <div class="elementor-element elementor-element-cdad299 elementor-widget elementor-widget-text-editor"
                                                        data-id="cdad299" data-element_type="widget"
                                                        data-widget_type="text-editor.default">
                                                        <div class="elementor-widget-container">
                                                            <p style="color: White">
                                                                &copy;
                                                                <script>
                                                                    document.write(new Date().getFullYear());
                                                                </script>
                                                                . Powered By <a href="http://dynamicconsultants.in/"
                                                                    target="_blank">Dynamic Edge Consultants Pvt.
                                                                    Ltd.</a>&nbsp; All Rights Reserved.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-37c3a54"
                                                data-id="37c3a54" data-element_type="column">
                                                <div class="elementor-widget-wrap elementor-element-populated">
                                                    <div class="elementor-element elementor-element-296457a elementor-icon-list--layout-inline elementor-align-right elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list"
                                                        data-id="296457a" data-element_type="widget"
                                                        data-widget_type="icon-list.default">
                                                        <div class="elementor-widget-container">
                                                            <ul
                                                                class="elementor-icon-list-items elementor-inline-items">
                                                                <li
                                                                    class="elementor-icon-list-item elementor-inline-item">
                                                                    <a href="Policy.html">
                                                                        <span class="elementor-icon-list-text">Privacy
                                                                            Policy</span>
                                                                    </a>
                                                                </li>
                                                                <li
                                                                    class="elementor-icon-list-item elementor-inline-item">
                                                                    <a href="ContactUs.html">
                                                                        <span class="elementor-icon-list-text">Contact
                                                                            Us</span>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </footer>
        <script type="text/javascript">
            window.RS_MODULES = window.RS_MODULES || {};
            window.RS_MODULES.modules = window.RS_MODULES.modules || {};
            window.RS_MODULES.waiting = window.RS_MODULES.waiting || [];
            window.RS_MODULES.defered = true;
            window.RS_MODULES.moduleWaiting = window.RS_MODULES.moduleWaiting || {};
            window.RS_MODULES.type = 'compiled';
        </script>
        <script>
            (function() {
                function maybePrefixUrlField() {
                    const value = this.value.trim()
                    if (value !== '' && value.indexOf('http') !== 0) {
                        this.value = 'http://' + value
                    }
                }

                const urlFields = document.querySelectorAll('.mc4wp-form input[type="url"]')
                for (let j = 0; j < urlFields.length; j++) {
                    urlFields[j].addEventListener('blur', maybePrefixUrlField)
                }
            })();
        </script>
        <!-- Instagram Feed JS -->
        <script type="text/javascript">
            var sbiajaxurl = "https://wp.ditsolution.net/techno/wp-admin/admin-ajax.php";
        </script>
        <div id="yith-quick-view-modal">
            <div class="yith-quick-view-overlay"></div>
            <div class="yith-wcqv-wrapper">
                <div class="yith-wcqv-main">
                    <div class="yith-wcqv-head">
                        <a href="#" id="yith-quick-view-close" class="yith-wcqv-close">X</a>
                    </div>
                    <div id="yith-quick-view-content" class="woocommerce single-product"></div>
                </div>
            </div>
        </div>
        <link href="https://fonts.googleapis.com/css?family=Roboto:400%7CMulish:600%2C800%2C500&amp;display=swap"
            rel="stylesheet" property="stylesheet" media="all" type="text/css">
        <script type='text/javascript'>
            (function() {
                var c = document.body.className;
                c = c.replace(/woocommerce-no-js/, 'woocommerce-js');
                document.body.className = c;
            })();
        </script>
        <script type="text/javascript">
            if (typeof revslider_showDoubleJqueryError === "undefined") {
                function revslider_showDoubleJqueryError(sliderID) {
                    console.log(
                        "You have some jquery.js library include that comes after the Slider Revolution files js inclusion."
                    );
                    console.log("To fix this, you can:");
                    console.log(
                        "1. Set 'Module General Options' -> 'Advanced' -> 'jQuery & OutPut Filters' -> 'Put JS to Body' to on"
                    );
                    console.log("2. Find the double jQuery.js inclusion and remove it");
                    return "Double Included jQuery Library";
                }
            }
        </script>
        <link rel="preload" as="font" id="rs-icon-set-revicon-woff"
            href="/wp-content/plugins/revslider/public/assets/fonts/revicons/revicons.woff" type="font/woff"
            crossorigin="anonymous" media="all" />
        <link rel="preload" as="font" id="rs-icon-set-fa-icon-woff" type="font/woff2"
            crossorigin="anonymous"
            href="/wp-content/plugins/revslider/public/assets/fonts/font-awesome/fonts/fontawesome-webfont.woff2"
            media="all" />
        <link rel="stylesheet" property="stylesheet" id="rs-icon-set-fa-icon-css"
            href="/wp-content/plugins/revslider/public/assets/fonts/font-awesome/css/font-awesome.css"
            type="text/css" media="all" />
        <link rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
        <div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="pswp__bg"></div>
            <div class="pswp__scroll-wrap">
                <div class="pswp__container">
                    <div class="pswp__item"></div>
                    <div class="pswp__item"></div>
                    <div class="pswp__item"></div>
                </div>
                <div class="pswp__ui pswp__ui--hidden">
                    <div class="pswp__top-bar">
                        <div class="pswp__counter"></div>
                        <button class="pswp__button pswp__button--close" aria-label="Close (Esc)"></button>
                        <button class="pswp__button pswp__button--share" aria-label="Share"></button>
                        <button class="pswp__button pswp__button--fs" aria-label="Toggle fullscreen"></button>
                        <button class="pswp__button pswp__button--zoom" aria-label="Zoom in/out"></button>
                        <div class="pswp__preloader">
                            <div class="pswp__preloader__icn">
                                <div class="pswp__preloader__cut">
                                    <div class="pswp__preloader__donut"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
                        <div class="pswp__share-tooltip"></div>
                    </div>
                    <button class="pswp__button pswp__button--arrow--left"
                        aria-label="Previous (arrow left)"></button>
                    <button class="pswp__button pswp__button--arrow--right"
                        aria-label="Next (arrow right)"></button>
                    <div class="pswp__caption">
                        <div class="pswp__caption__center"></div>
                    </div>
                </div>
            </div>
        </div>
        </script>
        <link rel='stylesheet' id='wc-blocks-style-css'
            href="/wp-content/plugins/woocommerce/assets/client/blocks/wc-blocks.css" type='text/css'
            media='all' />
        <link rel='stylesheet' id='photoswipe-css'
            href="/wp-content/plugins/woocommerce/assets/css/photoswipe/photoswipe.min.css" type='text/css'
            media='all' />
        <link rel='stylesheet' id='photoswipe-default-skin-css'
            href="/wp-content/plugins/woocommerce/assets/css/photoswipe/default-skin/default-skin.min.css"
            type='text/css' media='all' />
        <link rel='stylesheet' id='rs-plugin-settings-css'
            href="/wp-content/plugins/revslider/public/assets/css/rs6.css" type='text/css' media='all' />
        <style id='rs-plugin-settings-inline-css' type='text/css'>
            #rev_slider_21_1_wrapper .hades.tparrows {
                cursor: pointer;
                background: rgba(0, 0, 0, 0.25);
                width: 100px;
                height: 100px;
                position: absolute;
                display: block;
                z-index: 1000;
            }

            #rev_slider_21_1_wrapper .hades.tparrows:before {
                font-family: 'revicons';
                font-size: 30px;
                color: #ffffff;
                display: block;
                line-height: 100px;
                text-align: center;
                transition: background 0.3s, color 0.3s;
            }

            #rev_slider_21_1_wrapper .hades.tparrows.tp-leftarrow:before {
                content: '\e824';
            }

            #rev_slider_21_1_wrapper .hades.tparrows.tp-rightarrow:before {
                content: '\e825';
            }

            #rev_slider_21_1_wrapper .hades.tparrows.rs-touchhover:before {
                color: rgba(0, 0, 0, 0.5);
                background: #ffffff;
            }

            #rev_slider_21_1_wrapper .hades .tp-arr-allwrapper {
                position: absolute;
                left: 100%;
                top: 0px;
                background: #888;
                width: 100px;
                height: 100px;
                -webkit-transition: all 0.3s;
                transition: all 0.3s;
                -ms-filter: 'progid:dximagetransform.microsoft.alpha(opacity=0)';
                filter: alpha(opacity=0);
                -moz-opacity: 0.0;
                -khtml-opacity: 0.0;
                opacity: 0.0;
                -webkit-transform: rotatey(-90deg);
                transform: rotatey(-90deg);
                -webkit-transform-origin: 0% 50%;
                transform-origin: 0% 50%;
            }

            #rev_slider_21_1_wrapper .hades.tp-rightarrow .tp-arr-allwrapper {
                left: auto;
                right: 100%;
                -webkit-transform-origin: 100% 50%;
                transform-origin: 100% 50%;
                -webkit-transform: rotatey(90deg);
                transform: rotatey(90deg);
            }

            #rev_slider_21_1_wrapper .hades:hover .tp-arr-allwrapper {
                -ms-filter: 'progid:dximagetransform.microsoft.alpha(opacity=100)';
                filter: alpha(opacity=100);
                -moz-opacity: 1;
                -khtml-opacity: 1;
                opacity: 1;
                -webkit-transform: rotatey(0deg);
                transform: rotatey(0deg);
            }

            #rev_slider_21_1_wrapper .hades .tp-arr-iwrapper {}

            #rev_slider_21_1_wrapper .hades .tp-arr-imgholder {
                background-size: cover;
                position: absolute;
                top: 0px;
                left: 0px;
                width: 100%;
                height: 100%;
            }

            #rev_slider_21_1_wrapper .hades .tp-arr-titleholder {}

            #rev_slider_21_1_wrapper .hades .tp-arr-subtitleholder {}
        </style>
        <script type="text/javascript" src="/wp-content/plugins/yith-woocommerce-wishlist/assets/js/jquery.selectBox.min.js"
            id="jquery-selectBox-js"></script>
        <script type="text/javascript" src="/wp-content/plugins/woocommerce/assets/js/prettyPhoto/jquery.prettyPhoto.min.js"
            id="prettyPhoto-js" data-wp-strategy="defer"></script>
        <script type="text/javascript" id="jquery-yith-wcwl-js-extra">
            /* <![CDATA[ */
            var yith_wcwl_l10n = {
                "ajax_url": "\/techno\/wp-admin\/admin-ajax.php",
                "redirect_to_cart": "no",
                "yith_wcwl_button_position": "after_add_to_cart",
                "multi_wishlist": "",
                "hide_add_button": "1",
                "enable_ajax_loading": "",
                "ajax_loader_url": "https:\/\/wp.ditsolution.net\/techno\/wp-content\/plugins\/yith-woocommerce-wishlist\/assets\/images\/ajax-loader-alt.svg",
                "remove_from_wishlist_after_add_to_cart": "1",
                "is_wishlist_responsive": "1",
                "time_to_close_prettyphoto": "3000",
                "fragments_index_glue": ".",
                "reload_on_found_variation": "1",
                "mobile_media_query": "768",
                "labels": {
                    "cookie_disabled": "We are sorry, but this feature is available only if cookies on your browser are enabled.",
                    "added_to_cart_message": "<div class=\"woocommerce-notices-wrapper\"><div class=\"woocommerce-message\" role=\"alert\">Product added to cart successfully<\/div><\/div>"
                },
                "actions": {
                    "add_to_wishlist_action": "add_to_wishlist",
                    "remove_from_wishlist_action": "remove_from_wishlist",
                    "reload_wishlist_and_adding_elem_action": "reload_wishlist_and_adding_elem",
                    "load_mobile_action": "load_mobile",
                    "delete_item_action": "delete_item",
                    "save_title_action": "save_title",
                    "save_privacy_action": "save_privacy",
                    "load_fragments": "load_fragments"
                },
                "nonce": {
                    "add_to_wishlist_nonce": "ff85f564b2",
                    "remove_from_wishlist_nonce": "d5145cf058",
                    "reload_wishlist_and_adding_elem_nonce": "b9592173d3",
                    "load_mobile_nonce": "8bcc91fa2c",
                    "delete_item_nonce": "b9810e53a6",
                    "save_title_nonce": "3dc9035543",
                    "save_privacy_nonce": "5a4f117892",
                    "load_fragments_nonce": "a166851ba3"
                },
                "redirect_after_ask_estimate": "",
                "ask_estimate_redirect_url": "https:\/\/wp.ditsolution.net\/techno"
            };
            /* ]]> */
        </script>
        <script type="text/javascript" src="/wp-content/plugins/yith-woocommerce-wishlist/assets/js/jquery.yith-wcwl.min.js"
            id="jquery-yith-wcwl-js"></script>
        <script type="text/javascript" src="/wp-content/plugins/contact-form-7/includes/swv/js/index.js" id="swv-js"></script>
        <script type="text/javascript" id="contact-form-7-js-extra">
            /* <![CDATA[ */
            var wpcf7 = {
                "api": {
                    "root": "https:\/\/wp.ditsolution.net\/techno\/wp-json\/",
                    "namespace": "contact-form-7\/v1"
                }
            };
            /* ]]> */
        </script>
        <script type="text/javascript" src="/wp-content/plugins/contact-form-7/includes/js/index.js" id="contact-form-7-js">
        </script>
        <script type="text/javascript" src="/wp-content/plugins/revslider/public/assets/js/rbtools.min.js" defer async
            id="tp-tools-js"></script>
        <script type="text/javascript" src="/wp-content/plugins/revslider/public/assets/js/rs6.min.js" defer async
            id="revmin-js"></script>
        <script type="text/javascript" src="/wp-content/plugins/woocommerce/assets/js/sourcebuster/sourcebuster.min.js"
            id="sourcebuster-js-js"></script>
        <script type="text/javascript" id="wc-order-attribution-js-extra">
            /* <![CDATA[ */
            var wc_order_attribution = {
                "params": {
                    "lifetime": 1.0e-5,
                    "session": 30,
                    "ajaxurl": "https:\/\/wp.ditsolution.net\/techno\/wp-admin\/admin-ajax.php",
                    "prefix": "wc_order_attribution_",
                    "allowTracking": "yes"
                }
            };
            /* ]]> */
        </script>
        <script type="text/javascript" src="/wp-content/plugins/woocommerce/assets/js/frontend/order-attribution.min.js"
            id="wc-order-attribution-js"></script>
        <script type="text/javascript" src="wp-includes/js/dist/vendor/wp-polyfill-inert.min.js" id="wp-polyfill-inert-js">
        </script>
        <script type="text/javascript" src="wp-includes/js/dist/vendor/regenerator-runtime.min.js" id="regenerator-runtime-js">
        </script>
        <script type="text/javascript" src="wp-includes/js/dist/vendor/wp-polyfill.min.js" id="wp-polyfill-js"></script>
        <script type="text/javascript" src="wp-includes/js/dist/vendor/react.min.js" id="react-js"></script>
        <script type="text/javascript" src="wp-includes/js/dist/hooks.min.js" id="wp-hooks-js"></script>
        <script type="text/javascript" src="wp-includes/js/dist/deprecated.min.js" id="wp-deprecated-js"></script>
        <script type="text/javascript" src="wp-includes/js/dist/dom.min.js" id="wp-dom-js"></script>
        <script type="text/javascript" src="wp-includes/js/dist/vendor/react-dom.min.js" id="react-dom-js"></script>
        <script type="text/javascript" src="wp-includes/js/dist/escape-html.min.js" id="wp-escape-html-js"></script>
        <script type="text/javascript" src="wp-includes/js/dist/element.min.js" id="wp-element-js"></script>
        <script type="text/javascript" src="wp-includes/js/dist/is-shallow-equal.min.js" id="wp-is-shallow-equal-js"></script>
        <script type="text/javascript" src="wp-includes/js/dist/i18n.min.js" id="wp-i18n-js"></script>
        <script type="text/javascript" id="wp-i18n-js-after">
            /* <![CDATA[ */
            wp.i18n.setLocaleData({
                'text direction\u0004ltr': ['ltr']
            });
            /* ]]> */
        </script>
        <script type="text/javascript" src="wp-includes/js/dist/keycodes.min.js" id="wp-keycodes-js"></script>
        <script type="text/javascript" src="wp-includes/js/dist/priority-queue.min.js" id="wp-priority-queue-js"></script>
        <script type="text/javascript" src="wp-includes/js/dist/compose.min.js" id="wp-compose-js"></script>
        <script type="text/javascript" src="wp-includes/js/dist/private-apis.min.js" id="wp-private-apis-js"></script>
        <script type="text/javascript" src="wp-includes/js/dist/redux-routine.min.js" id="wp-redux-routine-js"></script>
        <script type="text/javascript" src="wp-includes/js/dist/data.min.js" id="wp-data-js"></script>
        <script type="text/javascript" id="wp-data-js-after">
            /* <![CDATA[ */
            (function() {
                var userId = 0;
                var storageKey = "WP_DATA_USER_" + userId;
                wp.data
                    .use(wp.data.plugins.persistence, {
                        storageKey: storageKey
                    });
            })();
            /* ]]> */
        </script>
        <script type="text/javascript" src="wp-includes/js/dist/vendor/lodash.min.js" id="lodash-js"></script>
        <script type="text/javascript" id="lodash-js-after">
            /* <![CDATA[ */
            window.lodash = _.noConflict();
            /* ]]> */
        </script>
        <script type="text/javascript" src="/wp-content/plugins/woocommerce/assets/client/blocks/wc-blocks-registry.js"
            id="wc-blocks-registry-js"></script>
        <script type="text/javascript" src="wp-includes/js/dist/url.min.js" id="wp-url-js"></script>
        <script type="text/javascript" src="wp-includes/js/dist/api-fetch.min.js" id="wp-api-fetch-js"></script>
        <script type="text/javascript" id="wp-api-fetch-js-after">
            /* <![CDATA[ */
            wp.apiFetch.use(wp.apiFetch.createRootURLMiddleware("https://wp.ditsolution.net/techno/wp-json/"));
            wp.apiFetch.nonceMiddleware = wp.apiFetch.createNonceMiddleware("2c55e7beb4");
            wp.apiFetch.use(wp.apiFetch.nonceMiddleware);
            wp.apiFetch.use(wp.apiFetch.mediaUploadMiddleware);
            wp.apiFetch.nonceEndpoint = "https://wp.ditsolution.net/techno/wp-admin/admin-ajax.php?action=rest-nonce";
            /* ]]> */
        </script>
        <script type="text/javascript" src="/wp-content/plugins/woocommerce/assets/client/blocks/wc-settings.js"
            id="wc-settings-js"></script>
        <script type="text/javascript" src="wp-includes/js/dist/data-controls.min.js" id="wp-data-controls-js"></script>
        <script type="text/javascript" src="wp-includes/js/dist/html-entities.min.js" id="wp-html-entities-js"></script>
        <script type="text/javascript" src="wp-includes/js/dist/notices.min.js" id="wp-notices-js"></script>
        <script type="text/javascript" id="wc-blocks-middleware-js-before">
            /* <![CDATA[ */
            var wcBlocksMiddlewareConfig = {
                storeApiNonce: 'bd9407693e',
                wcStoreApiNonceTimestamp: '1705679673'
            };

            /* ]]> */
        </script>
        <script type="text/javascript" src="/wp-content/plugins/woocommerce/assets/client/blocks/wc-blocks-middleware.js"
            id="wc-blocks-middleware-js"></script>
        <script type="text/javascript" src="/wp-content/plugins/woocommerce/assets/client/blocks/wc-blocks-data.js"
            id="wc-blocks-data-store-js"></script>
        <script type="text/javascript" src="wp-includes/js/dist/dom-ready.min.js" id="wp-dom-ready-js"></script>
        <script type="text/javascript" src="wp-includes/js/dist/a11y.min.js" id="wp-a11y-js"></script>
        <script type="text/javascript" src="wp-includes/js/dist/primitives.min.js" id="wp-primitives-js"></script>
        <script type="text/javascript" src="wp-includes/js/dist/warning.min.js" id="wp-warning-js"></script>
        <script type="text/javascript" src="/wp-content/plugins/woocommerce/assets/client/blocks/blocks-components.js"
            id="wc-blocks-components-js"></script>
        <script type="text/javascript" src="/wp-content/plugins/woocommerce/assets/client/blocks/blocks-checkout.js"
            id="wc-blocks-checkout-js"></script>
        <script type="text/javascript" src="/wp-content/plugins/woocommerce/assets/js/frontend/order-attribution-blocks.min.js"
            id="wc-order-attribution-blocks-js"></script>
        <script type="text/javascript" src="/wp-content/plugins/dreamit-elementor-extension/assets/js/tabscript.js"
            id="tabscript-js"></script>
        <script type="text/javascript" id="yith-wcqv-frontend-js-extra">
            /* <![CDATA[ */
            var yith_qv = {
                "ajaxurl": "\/techno\/wp-admin\/admin-ajax.php",
                "loader": "https:\/\/wp.ditsolution.net\/techno\/wp-content\/plugins\/yith-woocommerce-quick-view\/assets\/image\/qv-loader.gif",
                "lang": ""
            };
            /* ]]> */
        </script>
        <script type="text/javascript" src="/wp-content/plugins/yith-woocommerce-quick-view/assets/js/frontend.min.js"
            id="yith-wcqv-frontend-js"></script>
        <script type="text/javascript" src="/wp-content/themes/techno/assets/js/modernizr.custom.79639.js" id="modernizrs-js">
        </script>
        <script type="text/javascript" src="/wp-content/themes/techno/assets/js/vendor/modernizr-2.8.3.min.js" id="modernizr-js">
        </script>
        <script type="text/javascript" src="/wp-content/themes/techno/assets/js/bootstrap.min.js" id="bootstrap-js"></script>
        <script type="text/javascript" src="wp-includes/js/imagesloaded.min.js" id="imagesloaded-js"></script>
        <script type="text/javascript" src="/wp-content/themes/techno/assets/js/jquery.meanmenu.js" id="meanmenu-js"></script>
        <script type="text/javascript" src="/wp-content/themes/techno/assets/js/isotope.pkgd.min.js" id="isotope-js"></script>
        <script type="text/javascript" src="/wp-content/themes/techno/assets/js/jquery.scrollUp.js" id="scrollup-js"></script>
        <script type="text/javascript" src="/wp-content/themes/techno/assets/js/jquery.nivo.slider.pack.js" id="nivo-slider-js">
        </script>
        <script type="text/javascript" src="/wp-content/themes/techno/assets/js/parallax.min.js" id="paralax-js"></script>
        <script type="text/javascript" src="/wp-content/themes/techno/assets/js/jquery.counterup.min.js"
            id="jquery-counterup-js"></script>
        <script type="text/javascript" src="/wp-content/themes/techno/assets/js/slick.min.js" id="slick-js"></script>
        <script type="text/javascript" src="/wp-content/themes/techno/assets/js/jquery.nav.js" id="jquery-nav-js"></script>
        <script type="text/javascript" src="/wp-content/themes/techno/assets/js/headline.js" id="animate-text-js"></script>
        <script type="text/javascript" src="/wp-content/themes/techno/assets/js/wow.js" id="wow-js"></script>
        <script type="text/javascript" src="/wp-content/themes/techno/assets/js/jquery-scrolltofixed-min.js"
            id="jquery-scrolltofixed-js"></script>
        <script type="text/javascript" src="/wp-content/themes/techno/venobox/venobox.min.js" id="venobox-js"></script>
        <script type="text/javascript" src="/wp-content/themes/techno/assets/js/owl.carousel.min.js" id="owl-carousel-js">
        </script>
        <script type="text/javascript" src="/wp-content/themes/techno/assets/js/waypoints.min.js" id="waypoints-js"></script>
        <script type="text/javascript" src="/wp-content/themes/techno/assets/js/navigation.js" id="techno-navigation-js">
        </script>
        <script type="text/javascript" src="/wp-content/themes/techno/assets/js/skip-link-focus-fix.js"
            id="techno-skip-link-focus-fix-js"></script>
        <script type="text/javascript" src="/wp-content/themes/techno/assets/js/theme.js" id="techno-theme-js"></script>
        <script type="text/javascript" src="wp-includes/js/hoverIntent.min.js" id="hoverIntent-js"></script>
        <script type="text/javascript" id="megamenu-js-extra">
            /* <![CDATA[ */
            var megamenu = {
                "timeout": "300",
                "interval": "100"
            };
            /* ]]> */
        </script>
        <script type="text/javascript" src="/wp-content/plugins/megamenu/js/maxmegamenu.js" id="megamenu-js"></script>
        <script type="text/javascript" id="wc-cart-fragments-js-extra">
            /* <![CDATA[ */
            var wc_cart_fragments_params = {
                "ajax_url": "\/techno\/wp-admin\/admin-ajax.php",
                "wc_ajax_url": "\/techno\/?wc-ajax=%%endpoint%%",
                "cart_hash_key": "wc_cart_hash_accdbe9b69ea647a84f2d3e1e22fbf1d",
                "fragment_name": "wc_fragments_accdbe9b69ea647a84f2d3e1e22fbf1d",
                "request_timeout": "5000"
            };
            /* ]]> */
        </script>
        <script type="text/javascript" src="/wp-content/plugins/woocommerce/assets/js/frontend/cart-fragments.min.js"
            id="wc-cart-fragments-js" defer="defer" data-wp-strategy="defer"></script>
        <script type="text/javascript" defer src="/wp-content/plugins/mailchimp-for-wp/assets/js/forms.js"
            id="mc4wp-forms-api-js"></script>
        <script type="text/javascript" src="wp-includes/js/underscore.min.js" id="underscore-js"></script>
        <script type="text/javascript" id="wp-util-js-extra">
            /* <![CDATA[ */
            var _wpUtilSettings = {
                "ajax": {
                    "url": "\/techno\/wp-admin\/admin-ajax.php"
                }
            };
            /* ]]> */
        </script>
        <script type="text/javascript" src="wp-includes/js/wp-util.min.js" id="wp-util-js"></script>
        <script type="text/javascript" id="wc-add-to-cart-variation-js-extra">
            /* <![CDATA[ */
            var wc_add_to_cart_variation_params = {
                "wc_ajax_url": "\/techno\/?wc-ajax=%%endpoint%%",
                "i18n_no_matching_variations_text": "Sorry, no products matched your selection. Please choose a different combination.",
                "i18n_make_a_selection_text": "Please select some product options before adding this product to your cart.",
                "i18n_unavailable_text": "Sorry, this product is unavailable. Please choose a different combination."
            };
            /* ]]> */
        </script>
        <script type="text/javascript" src="/wp-content/plugins/woocommerce/assets/js/frontend/add-to-cart-variation.min.js"
            id="wc-add-to-cart-variation-js" defer="defer" data-wp-strategy="defer"></script>
        <script type="text/javascript" src="/wp-content/plugins/woocommerce/assets/js/zoom/jquery.zoom.min.js" id="zoom-js"
            defer="defer" data-wp-strategy="defer"></script>
        <script type="text/javascript" src="/wp-content/plugins/woocommerce/assets/js/photoswipe/photoswipe.min.js"
            id="photoswipe-js" defer="defer" data-wp-strategy="defer"></script>
        <script type="text/javascript" src="/wp-content/plugins/woocommerce/assets/js/photoswipe/photoswipe-ui-default.min.js"
            id="photoswipe-ui-default-js" defer="defer" data-wp-strategy="defer"></script>
        <script type="text/javascript" id="wc-single-product-js-extra">
            /* <![CDATA[ */
            var wc_single_product_params = {
                "i18n_required_rating_text": "Please select a rating",
                "review_rating_required": "yes",
                "flexslider": {
                    "rtl": false,
                    "animation": "slide",
                    "smoothHeight": true,
                    "directionNav": false,
                    "controlNav": "thumbnails",
                    "slideshow": false,
                    "animationSpeed": 500,
                    "animationLoop": false,
                    "allowOneSlide": false
                },
                "zoom_enabled": "1",
                "zoom_options": [],
                "photoswipe_enabled": "1",
                "photoswipe_options": {
                    "shareEl": false,
                    "closeOnScroll": false,
                    "history": false,
                    "hideAnimationDuration": 0,
                    "showAnimationDuration": 0
                },
                "flexslider_enabled": "1"
            };
            /* ]]> */
        </script>
        <script type="text/javascript" src="/wp-content/plugins/woocommerce/assets/js/frontend/single-product.min.js"
            id="wc-single-product-js" defer="defer" data-wp-strategy="defer"></script>
        <script type="text/javascript" src="/wp-content/plugins/elementor/assets/js/webpack.runtime.min.js"
            id="elementor-webpack-runtime-js"></script>
        <script type="text/javascript" src="/wp-content/plugins/elementor/assets/js/frontend-modules.min.js"
            id="elementor-frontend-modules-js"></script>
        <script type="text/javascript" src="/wp-content/plugins/elementor/assets/lib/waypoints/waypoints.min.js"
            id="elementor-waypoints-js"></script>
        <script type="text/javascript" src="wp-includes/js/jquery/ui/core.min.js" id="jquery-ui-core-js"></script>
        <script type="text/javascript" id="elementor-frontend-js-before">
            /* <![CDATA[ */
            var elementorFrontendConfig = {
                "environmentMode": {
                    "edit": false,
                    "wpPreview": false,
                    "isScriptDebug": false
                },
                "i18n": {
                    "shareOnFacebook": "Share on Facebook",
                    "shareOnTwitter": "Share on Twitter",
                    "pinIt": "Pin it",
                    "download": "Download",
                    "downloadImage": "Download image",
                    "fullscreen": "Fullscreen",
                    "zoom": "Zoom",
                    "share": "Share",
                    "playVideo": "Play Video",
                    "previous": "Previous",
                    "next": "Next",
                    "close": "Close",
                    "a11yCarouselWrapperAriaLabel": "Carousel | Horizontal scrolling: Arrow Left & Right",
                    "a11yCarouselPrevSlideMessage": "Previous slide",
                    "a11yCarouselNextSlideMessage": "Next slide",
                    "a11yCarouselFirstSlideMessage": "This is the first slide",
                    "a11yCarouselLastSlideMessage": "This is the last slide",
                    "a11yCarouselPaginationBulletMessage": "Go to slide"
                },
                "is_rtl": false,
                "breakpoints": {
                    "xs": 0,
                    "sm": 480,
                    "md": 768,
                    "lg": 992,
                    "xl": 1440,
                    "xxl": 1600
                },
                "responsive": {
                    "breakpoints": {
                        "mobile": {
                            "label": "Mobile Portrait",
                            "value": 767,
                            "default_value": 767,
                            "direction": "max",
                            "is_enabled": true
                        },
                        "mobile_extra": {
                            "label": "Mobile Landscape",
                            "value": 880,
                            "default_value": 880,
                            "direction": "max",
                            "is_enabled": false
                        },
                        "tablet": {
                            "label": "Tablet Portrait",
                            "value": 991,
                            "default_value": 1024,
                            "direction": "max",
                            "is_enabled": true
                        },
                        "tablet_extra": {
                            "label": "Tablet Landscape",
                            "value": 1200,
                            "default_value": 1200,
                            "direction": "max",
                            "is_enabled": false
                        },
                        "laptop": {
                            "label": "Laptop",
                            "value": 1366,
                            "default_value": 1366,
                            "direction": "max",
                            "is_enabled": false
                        },
                        "widescreen": {
                            "label": "Widescreen",
                            "value": 2400,
                            "default_value": 2400,
                            "direction": "min",
                            "is_enabled": false
                        }
                    }
                },
                "version": "3.18.3",
                "is_static": false,
                "experimentalFeatures": {
                    "e_dom_optimization": true,
                    "e_optimized_assets_loading": true,
                    "additional_custom_breakpoints": true,
                    "block_editor_assets_optimize": true,
                    "landing-pages": true,
                    "e_image_loading_optimization": true,
                    "e_global_styleguide": true
                },
                "urls": {
                    "assets": "https:\/\/wp.ditsolution.net\/techno\/wp-content\/plugins\/elementor\/assets\/"
                },
                "swiperClass": "swiper-container",
                "settings": {
                    "page": [],
                    "editorPreferences": []
                },
                "kit": {
                    "viewport_tablet": 991,
                    "active_breakpoints": ["viewport_mobile", "viewport_tablet"],
                    "global_image_lightbox": "yes",
                    "lightbox_enable_counter": "yes",
                    "lightbox_enable_fullscreen": "yes",
                    "lightbox_enable_zoom": "yes",
                    "lightbox_enable_share": "yes",
                    "lightbox_title_src": "title",
                    "lightbox_description_src": "description"
                },
                "post": {
                    "id": 7,
                    "title": "Techno%20%E2%80%93%20IT%20Solution%20%26%20Business%20Service%20WordPress%20Theme",
                    "excerpt": "",
                    "featuredImage": false
                }
            };
            /* ]]> */
        </script>
        <script type="text/javascript" src="/wp-content/plugins/elementor/assets/js/frontend.min.js" id="elementor-frontend-js">
        </script>
        <script type="text/javascript" id="rs-initialisation-scripts">
            var tpj = jQuery;

            var revapi21;

            if (window.RS_MODULES === undefined) window.RS_MODULES = {};
            if (RS_MODULES.modules === undefined) RS_MODULES.modules = {};
            RS_MODULES.modules["revslider211"] = {
                init: function() {
                    window.revapi21 = window.revapi21 === undefined || window.revapi21 === null || window.revapi21
                        .length === 0 ? document.getElementById("rev_slider_21_1") : window.revapi21;
                    if (window.revapi21 === null || window.revapi21 === undefined || window.revapi21.length == 0) {
                        window.revapi21initTry = window.revapi21initTry === undefined ? 0 : window.revapi21initTry + 1;
                        if (window.revapi21initTry < 20) requestAnimationFrame(function() {
                            RS_MODULES.modules["revslider211"].init()
                        });
                        return;
                    }
                    window.revapi21 = jQuery(window.revapi21);
                    if (window.revapi21.revolution == undefined) {
                        revslider_showDoubleJqueryError("rev_slider_21_1");
                        return;
                    }
                    revapi21.revolutionInit({
                        revapi: "revapi21",
                        DPR: "dpr",
                        sliderLayout: "fullwidth",
                        visibilityLevels: "1240,1024,778,480",
                        gridwidth: "1240,1024,778,480",
                        gridheight: "900,768,960,720",
                        lazyType: "smart",
                        perspective: 600,
                        perspectiveType: "global",
                        editorheight: "900,768,960,720",
                        responsiveLevels: "1240,1024,778,480",
                        progressBar: {
                            disableProgressBar: true
                        },
                        navigation: {
                            wheelCallDelay: 1000,
                            onHoverStop: false,
                            arrows: {
                                enable: true,
                                tmp: "<div class=\"tp-arr-allwrapper\">	<div class=\"tp-arr-imgholder\"></div></div > ",
                                style: "hades",
                                hide_onmobile: true,
                                hide_under: 778,
                                left: {
                                    h_offset: 30
                                },
                                right: {
                                    h_offset: 30
                                }
                            }
                        },
                        parallax: {
                            levels: [5, 10, 15, 20, 25, 30, 35, 40, 45, 46, 47, 48, 49, 50, 51, 30],
                            type: "scroll",
                            origo: "slidercenter",
                            speed: 0
                        },
                        scrolleffect: {
                            set: true,
                            multiplicator: 1.3,
                            multiplicator_layers: 1.3
                        },
                        viewPort: {
                            global: true,
                            globalDist: "-200px",
                            enable: false
                        },
                        fallbacks: {
                            allowHTML5AutoPlayOnAndroid: true
                        },
                    });

                }
            } // End of RevInitScript

            if (window.RS_MODULES.checkMinimal !== undefined) {
                window.RS_MODULES.checkMinimal();
            };
        </script>
</body>
<!-- Mirrored from www.technosyslabs.com/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 09 Jul 2026 07:21:49 GMT -->

</html>
