<html class="language-fr supportsGridLayout fluidContainer chrome windows" lang="fr">
<!--<![endif]-->

<head>
    <meta http-equiv="Content-type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <link rel="shortcut icon" href="{{asset('img/ph.png')}}>
    <link rel="alternate" type="application/rss+xml" title="PornHub - RSS Feed" href="/rss">

    <link rel="publisher" href="https://plus.google.com/106654976348919347395">

    <meta name="msapplication-config" content="none">
    <title>Free Front End | Hub</title>
    <link rel="stylesheet" href="https://di.phncdn.com/www-static/css/generated-header.css?cache=2020040901" type="text/css">

    <link rel="stylesheet" href="{{asset('css/front-index-pc.css')}}"  type="text/css">

    <link rel="stylesheet" href="{{asset('css/large.css')}}" type="text/css" media="only screen and (min-width:1350px)">

    <link rel="stylesheet" href="{{asset('css/premium-modals.css')}}"  type="text/css">
    <script type="text/javascript" async="" src="{{asset('js/recaptcha__vi.js')}}"></script>
    <script type="text/javascript" async="" src="{{asset('js/timings-1.0.0.js')}}"></script>
    <script type="text/javascript" async="" src="{{asset('js/tubes-2.0.4.js')}}"></script>
    <script type="text/javascript" async="" src="{{asset('js/load-1.0.3.js')}}"></script>
    <script async="" src="//www.google-analytics.com/analytics.js"></script>

    <script src="{{asset('js/mg_utils-1.0.0.js')}}"></script>

    <script>
        var amateurUserFlag = 0,
            changing_thumbs = [],
            disableFlipbook = 'false',
            largeVersionMinimumScreenSize = 1900,
            screensize = window.screen.width,
            isLogged = 0,
            pageKeyStat = "homepage",
            platformPcSet = 1,
            focusSearchInput = 1, // Variable used in Header.js, related to search & autocomplete
            searchUrlVideo = "/video/search?search=",
            searchUrlPhoto = "/albums/female-straight-uncategorized?search=",
            searchUrlMember = "/user/search?gender=0&username=",
            searchUrlPornstar = "/pornstars/search?search=",
            searchUrlGifs = "/gifs/search?search=",
            searchUrlCam = '/live?k=',
            messageViewAll = "/chat/index", // variables used in "phub.js", related to notification
            notifViewAll = "/notifications",
            emailNotConfirmed = "Courriel pas encore confirm&eacute;!",
            accountDisabled = "Compte d&eacute;sactiv&eacute;. Veuillez essayer plus tard.",
            loginError = "Nom d'utilisateur/mot de passe non valide!",
            error513 = "Erreur 513.",
            error514 = "Erreur 514.",
            error515 = "Erreur 515.",
            errorNoUsername = "Indiquez votre pseudo ci-dessous&nbsp;:",
            errorNoPassword = "Indiquez votre mot de passe ci-dessous&nbsp;:",
            adOrientation = "straight",
            category = "",
            showStreamate = "1",
            premiumFlag = "0",
            phOrientationSegment = "straight",
            phCountryCode = "VN",
            playlistJs = "https://di.phncdn.com/www-static/js//playlist/playlist-basic.js?cache=2020040901";
        var playlists = "",
            watchLaterFull = "";
        var requestViewAll = "/user/friend_requests";

        var premiumRedirectCookieURL = '//fr.pornhub.com/user/premium_redirect_cookie?ajax=1';

        /*
         * Mixpanel Object fro Premium Only
         */
        var mixPanelObj = {
            isPremium: 0
        };

        function onLoad() {
            var site = 'pornhub';
            if (!window.jQuery) {
                try {
                    var a = new XMLHttpRequest();

                    a.open("GET", "//www.etahub.com/trackn?app_id=10305&product_name=" + site + "&category=ss&value=1",
                        true);
                    a.send();
                } catch (e) {

                }
            }
        }

        var textPHTranslation = {
            "loginTitle": "Ouvrez une session ou inscrivez-vous",
            "loginTitlePhoto": "Connectez-vous ou inscrivez-vous pour marquer votre photo pr\u00e9f\u00e9r\u00e9e",
            "loginTitleVideo": "Connectez-vous ou inscrivez-vous pour choisir votre vid\u00e9o pr\u00e9f\u00e9r\u00e9e",
            "loginTitlePlaylist": "Connectez-vous ou inscrivez-vous pour choisir une playlist pr\u00e9f\u00e9r\u00e9e",
            "loginTitlePlaylistAdd": "Connectez-vous ou inscrivez-vous pour ajouter \u00e0 la playlist",
            "loginTitleVoteDown": "Connectez-vous ou inscrivez-vous pour voter",
            "loginTitleComment": "Connectez-vous ou inscrivez-vous pour commenter",
            "loginTitleUploadVideo": "Connectez-vous ou inscrivez-vous pour t\u00e9l\u00e9charger une vid\u00e9o",
            "loginTitleSubscribe": "Connectez-vous ou inscrivez-vous pour vous abonner",
            "loginTitleDownload": "Login ou signup pour t\u00e9l\u00e9charger un video",
            "loginTitleToReply": "Connectez-vous ou inscrivez-vous pour r\u00e9pondre",
            "loginTitleToFlag": "Connectez-vous ou inscrivez-vous pour signaler",
            "loginTitleToFlagComment": "Connectez-vous ou inscrivez-vous pour signaler comme spam",
            "loginTitleToAddFriend": "Connectez-vous ou inscrivez-vous pour ajouter un ami",
            "loginTitleToTip": "Connectez-vous ou inscrivez-vous pour donner un pourboire"
        };

        var modalTranslationText = {
            "confirmEmail": "Veuillez confirmer votre adresse email pour \u00eatre en mesure d'ajouter des utilisateurs comme amis",
            "cannotAdd": "Vous ne pouvez pas \u00eatre ami avec un membre priv\u00e9.",
            "cannotSubscribe": "Vous ne pouvez pas vous abonner \u00e0 un membre priv\u00e9.",
            "blackWhiteListUrl": "\/utils\/url_status"
        };

        var videoTimeTrackingCondition = 0;
        var playlistViewCountCondition = 0;
        var reportTimeWatchedUrl = '';


        var networkSegement = false;
        var networkQuery = '@media only screen and (min-width: 1350px) { div.bar_items { width:1303px;} } ';

        var timing_appId = 16,
            timing_productId = 2,
            timing_pageType = 'home';
        var page_params = {
            getMenuType: '',
            jqeuryVersion: '',
            isIE7: false,
            isIE: (!!window.ActiveXObject && +(/msie\s(\d+)/i.exec(navigator.userAgent)[1])) || !!navigator
                .userAgent.match(/rv:11/) || false,
            isOldIE: (navigator.appName == 'Microsoft Internet Explorer' || !!(navigator.userAgent.match(
                    /Trident/) || navigator.userAgent.match(/rv:11/)) || !!navigator.userAgent.match(/MSIE 10/)) ||
                false,
            loadOnce: false,
            prerollFired: false,
            placeholderData: {
                "cams": "Cherchez des mod\u00e8les webcam...",
                "gifs": "Rechercher parmis les 1,930,035 GIFs...",
                "members": "Rechercher parmis les 133,293,808 membres...",
                "photos": "Rechercher parmis les 38,571,213 photos...",
                "pornstars": "Rechercher parmis les 22,890 Pornstars...",
                "videos": "Rechercher parmis les 11,624,689 vid\u00e9os..."
            }
        };

        //SET UP TO lazy_load-1.0.1.js
        page_params.lazyLoad = {
            dataSrc: 'src', //data-src attribute in image
            class_name: 'lazy', //Class name to locate the image to lazy load LEAVE THE UNDERSCORE "_"
            dataBkg: 'bkg', //Data attribute to lazy load background image
            classBkg: 'js_lazy_bkg', //Class to locate the tag which need background lazy load
            thumbUrl: 'thumb_url', //Data attribute to lazy load thumbnails in a section
            sections: [] //Array to push the sections to lazy load
        };

        page_params.zoneDetails = {};

    </script>

    <script type="text/javascript">
        (function () {
            if (typeof checkForGridSupport === 'function') {
                var htmlEl = document.documentElement;
                if (htmlEl) {
                    if (checkForGridSupport()) {
                        MG_Utils.addClass(htmlEl, 'supportsGridLayout');

                        var fluidContainer = 1;
                        if (fluidContainer) {
                            MG_Utils.addClass(htmlEl, 'fluidContainer');
                        }

                    } else {
                        MG_Utils.addClass(htmlEl, 'noGridLayout');
                    }
                }
            }
        })();

    </script>
    <script>
        if (page_params.isOldIE === true) {
            page_params.jqueryVersion = 'https://cdn1d-static-shared.phncdn.com/jquery-1.10.2.js';

            (function () {
                var po = document.createElement('script');
                po.type = 'text/javascript';
                po.async = true;
                po.src = page_params.jqueryVersion;
                var s = document.getElementsByTagName('script')[0];
                s.parentNode.insertBefore(po, s);
            })();
        } else {
            page_params.jqueryVersion = 'https://di.phncdn.com/www-static/js/lib/jquery-2.1.3.min.js?cache=2020040901';
        }

        var jsFileList = {};

        if (page_params.isOldIE === true || typeof window.performance === 'undefined') {
            (function (n, t) {
                "use strict";

                function w() {}

                function u(n, t) {
                    if (n) {
                        typeof n == "object" && (n = [].slice.call(n));
                        for (var i = 0, r = n.length; i < r; i++) t.call(n, n[i], i)
                    }
                }

                function it(n, i) {
                    var r = Object.prototype.toString.call(i).slice(8, -1);
                    return i !== t && i !== null && r === n
                }

                function s(n) {
                    return it("Function", n)
                }

                function a(n) {
                    return it("Array", n)
                }

                function et(n) {
                    var i = n.split("/"),
                        t = i[i.length - 1],
                        r = t.indexOf("?");
                    return r !== -1 ? t.substring(0, r) : t
                }

                function f(n) {
                    (n = n || w, n._done) || (n(), n._done = 1)
                }

                function ot(n, t, r, u) {
                    var f = typeof n == "object" ? n : {
                            test: n,
                            success: !t ? !1 : a(t) ? t : [t],
                            failure: !r ? !1 : a(r) ? r : [r],
                            callback: u || w
                        },
                        e = !!f.test;
                    return e && !!f.success ? (f.success.push(f.callback), i.load.apply(null, f.success)) : e || !f
                        .failure ? u() : (f.failure.push(f.callback), i.load.apply(null, f.failure)), i
                }

                function v(n) {
                    var t = {},
                        i, r;
                    if (typeof n == "object")
                        for (i in n) !n[i] || (t = {
                            name: i,
                            url: n[i]
                        });
                    else t = {
                        name: et(n),
                        url: n
                    };
                    return (r = c[t.name], r && r.url === t.url) ? r : (c[t.name] = t, t)
                }

                function y(n) {
                    n = n || c;
                    for (var t in n)
                        if (n.hasOwnProperty(t) && n[t].state !== l) return !1;
                    return !0
                }

                function st(n) {
                    n.state = ft;
                    u(n.onpreload, function (n) {
                        n.call()
                    })
                }

                function ht(n) {
                    n.state === t && (n.state = nt, n.onpreload = [], rt({
                        url: n.url,
                        type: "cache"
                    }, function () {
                        st(n)
                    }))
                }

                function ct() {
                    var n = arguments,
                        t = n[n.length - 1],
                        r = [].slice.call(n, 1),
                        f = r[0];
                    return (s(t) || (t = null), a(n[0])) ? (n[0].push(t), i.load.apply(null, n[0]), i) : (f ? (u(r,
                        function (n) {
                            s(n) || !n || ht(v(n))
                        }), b(v(n[0]), s(f) ? f : function () {
                        i.load.apply(null, r)
                    })) : b(v(n[0])), i)
                }

                function lt() {
                    var n = arguments,
                        t = n[n.length - 1],
                        r = {};
                    return (s(t) || (t = null), a(n[0])) ? (n[0].push(t), i.load.apply(null, n[0]), i) : (u(n,
                        function (n) {
                            n !== t && (n = v(n), r[n.name] = n)
                        }), u(n, function (n) {
                        n !== t && (n = v(n), b(n, function () {
                            y(r) && f(t)
                        }))
                    }), i)
                }

                function b(n, t) {
                    if (t = t || w, n.state === l) {
                        t();
                        return
                    }
                    if (n.state === tt) {
                        i.ready(n.name, t);
                        return
                    }
                    if (n.state === nt) {
                        n.onpreload.push(function () {
                            b(n, t)
                        });
                        return
                    }
                    n.state = tt;
                    rt(n, function () {
                        n.state = l;
                        t();
                        u(h[n.name], function (n) {
                            f(n)
                        });
                        o && y() && u(h.ALL, function (n) {
                            f(n)
                        })
                    })
                }

                function at(n) {
                    n = n || "";
                    var t = n.split("?")[0].split(".");
                    return t[t.length - 1].toLowerCase()
                }

                function rt(t, i) {
                    function e(t) {
                        t = t || n.event;
                        u.onload = u.onreadystatechange = u.onerror = null;
                        i()
                    }

                    function o(f) {
                        f = f || n.event;
                        (f.type === "load" || /loaded|complete/.test(u.readyState) && (!r.documentMode || r
                            .documentMode < 9)) && (n.clearTimeout(t.errorTimeout), n.clearTimeout(t.cssTimeout), u
                            .onload = u.onreadystatechange = u.onerror = null, i())
                    }

                    function s() {
                        if (t.state !== l && t.cssRetries <= 20) {
                            for (var i = 0, f = r.styleSheets.length; i < f; i++)
                                if (r.styleSheets[i].href === u.href) {
                                    o({
                                        type: "load"
                                    });
                                    return
                                } t.cssRetries++;
                            t.cssTimeout = n.setTimeout(s, 250)
                        }
                    }
                    var u, h, f;
                    i = i || w;
                    h = at(t.url);
                    h === "css" ? (u = r.createElement("link"), u.type = "text/" + (t.type || "css"), u.rel =
                        "stylesheet", u.href = t.url, t.cssRetries = 0, t.cssTimeout = n.setTimeout(s, 500)) : (
                        u = r.createElement("script"), u.type = "text/" + (t.type || "javascript"), u.src = t
                        .url);
                    u.onload = u.onreadystatechange = o;
                    u.onerror = e;
                    u.async = !1;
                    u.defer = !1;
                    t.errorTimeout = n.setTimeout(function () {
                        e({
                            type: "timeout"
                        })
                    }, 7e3);
                    f = r.head || r.getElementsByTagName("head")[0];
                    f.insertBefore(u, f.lastChild)
                }

                function vt() {
                    for (var t, u = r.getElementsByTagName("script"), n = 0, f = u.length; n < f; n++)
                        if (t = u[n].getAttribute("data-headjs-load"), !!t) {
                            i.load(t);
                            return
                        }
                }

                function yt(n, t) {
                    var v, p, e;
                    return n === r ? (o ? f(t) : d.push(t), i) : (s(n) && (t = n, n = "ALL"), a(n)) ? (v = {}, u(n,
                        function (n) {
                            v[n] = c[n];
                            i.ready(n, function () {
                                y(v) && f(t)
                            })
                        }), i) : typeof n != "string" || !s(t) ? i : (p = c[n], p && p.state === l || n ===
                        "ALL" && y() && o) ? (f(t), i) : (e = h[n], e ? e.push(t) : e = h[n] = [t], i)
                }

                function e() {
                    if (!r.body) {
                        n.clearTimeout(i.readyTimeout);
                        i.readyTimeout = n.setTimeout(e, 50);
                        return
                    }
                    o || (o = !0, vt(), u(d, function (n) {
                        f(n)
                    }))
                }

                function k() {
                    r.addEventListener ? (r.removeEventListener("DOMContentLoaded", k, !1), e()) : r.readyState ===
                        "complete" && (r.detachEvent("onreadystatechange", k), e())
                }
                var r = n.document,
                    d = [],
                    h = {},
                    c = {},
                    ut = "async" in r.createElement("script") || "MozAppearance" in r.documentElement.style || n
                    .opera,
                    o, g = n.head_conf && n.head_conf.head || "head",
                    i = n[g] = n[g] || function () {
                        i.ready.apply(null, arguments)
                    },
                    nt = 1,
                    ft = 2,
                    tt = 3,
                    l = 4,
                    p;
                if (r.readyState === "complete") e();
                else if (r.addEventListener) r.addEventListener("DOMContentLoaded", k, !1), n.addEventListener(
                    "load", e, !1);
                else {
                    r.attachEvent("onreadystatechange", k);
                    n.attachEvent("onload", e);
                    p = !1;
                    try {
                        p = !n.frameElement && r.documentElement
                    } catch (wt) {}
                    p && p.doScroll && function pt() {
                        if (!o) {
                            try {
                                p.doScroll("left")
                            } catch (t) {
                                n.clearTimeout(i.readyTimeout);
                                i.readyTimeout = n.setTimeout(pt, 50);
                                return
                            }
                            e()
                        }
                    }()
                }
                i.load = i.js = ut ? lt : ct;
                i.test = ot;
                i.ready = yt;
                i.ready(r, function () {
                    y() && u(h.ALL, function (n) {
                        f(n)
                    });
                    i.feature && i.feature("domloaded", !0)
                })
            })(window);
        }

    </script>

    <script type="text/javascript">
        (function (i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] || function () {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date();
            a = s.createElement(o),
                m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m)
        })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');
        ga('create', 'UA-2623535-1', 'auto');
        ga('require', 'linker');
        ga('linker:autoLink', ['pornhubselect.com', 'pornhubpremium.com', 'modelhub.com']);
        ga('require', 'displayfeatures'); /* no referer (); */
        ga('set', 'anonymizeIp', true);



        ga('set', 'dimension25', 'False');

        ga('send', 'pageview');

    </script>
    <script>
        var dcEl = 'vncqxfe0x9gy7jvvszya5';

    </script>
    <style>
        .kejh5ir2925tmce2ua,
        .kejh5ir2925tmce2ub,
        .kejh5ir2925tmce2ud,
        .kejh5ir2925tmce2ui {
            float: right;
            height: auto !important;
        }

        .kejh5ir2925tmce2ua {
            width: 40%;
        }

        .kejh5ir2925tmce2ub {
            width: 50%;
        }

        .kejh5ir2925tmce2ud,
        .kejh5ir2925tmce2ui {
            margin-top: 30px;
            width: 50%;
        }

        .kejh5ir2925tmce2uc {
            margin: 5px auto 0;
            text-align: center;
            width: 315px;
            z-index: 0;
        }

        .kejh5ir2925tmce2up {
            margin: 0;
            text-align: center;
            width: 315px;
            z-index: 0;
        }

        .kejh5ir2925tmce2uc .ad_title,
        .kejh5ir2925tmce2up .ad_title {
            display: block;
            font-size: 11px;
            text-align: center;
        }

        .kejh5ir2925tmce2uv {
            text-align: center;
            margin-bottom: 20px;
        }

        .kejh5ir2925tmce2uv div:first-child {
            float: right;
        }

        .kejh5ir2925tmce2uv iframe {
            clear: both;
            display: block;
            margin-bottom: 15px;
            margin-right: 2px;
        }

        .kejh5ir2925tmce2uu {
            padding: 5px;
            overflow: hidden;
            text-align: center;
            line-height: 0;
        }

        .kejh5ir2925tmce2uu.hd {
            height: 60px;
        }

        .kejh5ir2925tmce2uu.hd iframe {
            height: 60px;
        }

        .kejh5ir2925tmce2uu iframe {
            margin: auto;
        }

        .kejh5ir2925tmce2uu a>div {
            width: 648px;
            height: 64px;
        }


        .kejh5ir2925tmce2uh {
            padding: 0;
            background: none;
            border: 0;
            margin: auto;
            border-radius: 4px;
            text-align: center;
        }

        .kejh5ir2925tmce2uh iframe {
            display: inline-block;
        }
        .kejh5ir2925tmce2uf {
            padding: 30px 0 0;
            margin: 0 auto;
            width: 966px;
            text-align: center;
            clear: both;
        }

        .kejh5ir2925tmce2uw.kejh5ir2925tmce2uc {
            margin-top: 30px;
            width: 50%;
            float: right;
        }

        .kejh5ir2925tmce2uw.kejh5ir2925tmce2ue {
            margin: 0 auto;
            width: 315px;
        }
        vncqxfe0x9gy7jvvszya5 {
            display: block;
            height: 100%;
            margin: 0 auto;
            width: 100%;
        }

        .kejh5ir2925tmce2uw.kejh5ir2925tmce2uc>vncqxfe0x9gy7jvvszya5 {
            display: block;
            margin: 5px auto 0;
            text-align: center;
            width: 315px;
            z-index: 0;
        }

        .kejh5ir2925tmce2ur,
        .kejh5ir2925tmce2ur vncqxfe0x9gy7jvvszya5 {
            background-size: contain;
        }
        .kejh5ir2925tmce2uw.kejh5ir2925tmce2uc.kejh5ir2925tmce2uz {
            margin-top: 15px;
        }

        .kejh5ir2925tmce2uw.kejh5ir2925tmce2uc.kejh5ir2925tmce2uz vncqxfe0x9gy7jvvszya5 {
            margin: 0;
        }
        .kejh5ir2925tmce2us,
        .kejh5ir2925tmce2ut {
            margin: 0 auto;
        }
        .kejh5ir2925tmce2uw.kejh5ir2925tmce2ub vncqxfe0x9gy7jvvszya5 {
            margin: 5px auto 0;
        }
        .kejh5ir2925tmce2uw.kejh5ir2925tmce2uz vncqxfe0x9gy7jvvszya5,
        .kejh5ir2925tmce2uw.kejh5ir2925tmce2uz iframe {
            margin: 5px auto 0;
        }

        .kejh5ir2925tmce2uw.kejh5ir2925tmce2uz {
            text-align: center;
        }
        .kejh5ir2925tmce2uw.kejh5ir2925tmce2uq {
            float: right;
            margin-top: 40px;
            width: 50%;
        }

        .kejh5ir2925tmce2uw.kejh5ir2925tmce2uq vncqxfe0x9gy7jvvszya5 {
            margin: 5px auto 0;
            text-align: center;
            width: 315px;
            z-index: 0;
        }

        .kejh5ir2925tmce2uw.kejh5ir2925tmce2ua {
            width: 40%;
        }

        .kejh5ir2925tmce2uw.kejh5ir2925tmce2ua.kejh5ir2925tmce2ug {
            width: 40%;
        }

        .kejh5ir2925tmce2uw.kejh5ir2925tmce2ua vncqxfe0x9gy7jvvszya5 {
            margin: 0 auto;
        }

        .kejh5ir2925tmce2uw.kejh5ir2925tmce2ub {
            width: 50%;
        }
        <blade media|%20(min-width%3A1350px)%20%7B>.kejh5ir2925tmce2ua,
        .kejh5ir2925tmce2ub {
            margin-top: 50px;
        }
        .kejh5ir2925tmce2ud {
            width: 40%;
            margin-top: 50px;
        }

        .kejh5ir2925tmce2ui {
            width: 40%;
            margin-top: 30px;
        }
        .kejh5ir2925tmce2uc,
        .kejh5ir2925tmce2up {
            text-align: center;
            z-index: 0;
        }
        .kejh5ir2925tmce2up {
            margin: 0 auto;
            background-color: #101010;
        }
        .kejh5ir2925tmce2uc .ad_title,
        .kejh5ir2925tmce2up .ad_title {
            display: block;
            font-size: 11px;
            text-align: center;
        }
        .hd-thumbs .kejh5ir2925tmce2uc .ad_title,
        .hd-thumbs .kejh5ir2925tmce2uc .ad-link {
            display: block;
        }
        .kejh5ir2925tmce2uu.hd {
            height: 76px;
            margin: auto;
            width: 770px;
        }
        .kejh5ir2925tmce2uu.hd iframe {
            height: 76px !important;
        }
        .kejh5ir2925tmce2uh {
            padding: 20px;
            border: 1px solid #1D1D1D;
            background: #101010;
        }

        .kejh5ir2925tmce2uf .removeAdsStyle {
            font-size: 12px;
        }
        .kejh5ir2925tmce2uf ul li.ps-list {
            width: 16%;
        }

        .kejh5ir2925tmce2uw.kejh5ir2925tmce2uc {
            width: 40%;
            margin-top: 50px;
        }
        .kejh5ir2925tmce2uw.kejh5ir2925tmce2uc.kejh5ir2925tmce2uz {
            width: 40%;
            margin-top: 15px;
        }
        .kejh5ir2925tmce2uw.kejh5ir2925tmce2uc.kejh5ir2925tmce2uz vncqxfe0x9gy7jvvszya5 {
            margin: 0 auto;
        }
        .kejh5ir2925tmce2uw.kejh5ir2925tmce2uq {
            width: 40%;
        }
        .kejh5ir2925tmce2uw.kejh5ir2925tmce2ua.kejh5ir2925tmce2ug {
            width: 30%;
        }
        }
    </style>

    <script type="text/javascript" src="{{asset('js/jquery-2.1.3.min.js')}}">
    </script>
    <script type="text/javascript" src="{{asset('js/jquery-ui-1.10.3.js')}}">
    </script>
    <script type="text/javascript" src="{{asset('js/jquery.slimscroll-1.2.0.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/phub.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/playlist-basic.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/gif-browse.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/signin.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/footer.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/ph-footer.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/premium-modals.js')}}">
    </script>
    <script type="text/javascript" src="{{asset('js/front-index-pc.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/promo-banner.js')}}"></script>

    <script type="text/javascript" src="{{asset('js/vortex-simple-1.0.0.js')}}"></script>
</head>

<body class="logged-out">
<div class="wrapper">
  <!-- Navbar -->
  @include('frontend.layout.partials.navbar')
  <!-- /.navbar -->
    <div class="container">
            <div class="frontListingWrapper">
                <div class="sectionWrapper">
                    <div class="sectionTitle">
                        <div class="filters mainFilter float-right">
                            <a href="/video?o=ht" class="float-right filterBtn"><span class="section_plus">+</span>Plus
                                de Vidéos</a>
                        </div>
                        <h1>
                            <a href="/video?o=ht" title="Vidéos torrides">
                                Vidéos torrides internationales <i class="flagIcon int"></i>
                            </a>
                        </h1>
                        <div class="reset"></div>
                    </div>
                    <ul class="videos-morepad videos full-row-thumbs videos-being-watched logInHotContainer"
                        id="hotVideosSection">
                    </ul>
                    <div class="reset"></div>
                </div>
            </div>

            <div class="reset"></div>
            <div class="pagination3">
                <ul class="firstPage">
                    <li class="page_current alpha"><span class="greyButton">1</span></li>
                    <li class="page_number"><a class="greyButton" href="/video?page=2">2</a></li>
                    <li class="page_number"><a class="greyButton" href="/video?page=3">3</a></li>
                    <li class="page_number"><a class="greyButton" href="/video?page=4">4</a></li>
                    <li class="page_number"><a class="greyButton" href="/video?page=5">5</a></li>
                    <li class="page_next_set"><a class="greyButton" href="/video?page=10">10</a></li>
                    <li class="page_next omega"><a href="/video?page=2" class="orangeButton">Suivant <img
                                class="pagination_arrow_right"
                                src="https://ai.phncdn.com/www-static/images/rightArrow.png" data-title="" title=""></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    @include('frontend.layout.partials.footer')
    </div>

    <script src="{{asset('js/mg_modal-1.0.0.js')}}"></script>
    <script defer="" src="{{asset('js/generated-lib.js')}}"></script>


    <script defer="" async="" src="{{asset('js/lazy_load-2.0.1.js')}}">
    </script>

    <script src="{{asset('js/networkbar-5.0.0.js')}}"></script>

    <script defer="" src="{{asset('js/front-index.js')}}"></script>
    <iframe id="htcheck" src="https://hubt.pornhub.com/htcheck.html?site_id=3" frameborder="0" width="0"
        height="0"></iframe>
</body>

</html>
