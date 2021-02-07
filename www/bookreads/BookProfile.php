
<?php
    include "header.inc.php";

//    HTMLBegin();
    $title = "title name";
    $image = "https://i.gr-assets.com/images/S/compressed.photo.goodreads.com/books/1459795105l/12996._SY475_.jpg";
    $author_name = "author name";
    $numberOfPages = 0;
    $publisher = "publisher name";
    $ISBN = "000000000";
    $average_rating = 3.9;
    $description = "In Othello, Shakespeare creates a powerful drama of a marriage that begins with fascination (between the exotic Moor Othello and the Venetian lady Desdemona), with elopement, and with intense mutual devotion and that ends precipitately with jealous rage and violent deaths. He sets this story in the romantic world of the Mediterranean, moving the action from Venice to the island of Cyprus and giving it an even more exotic coloring with stories of Othello's African past. Shakespeare builds so many differences into his hero and heroine—differences of race, of age, of cultural background—that one should not, perhaps, be surprised that the marriage ends disastrously. But most people who see or read the play feel that the love that the play presents between Othello and Desdemona is so strong that it would have overcome all these differences were it not for the words and actions of Othello's standard-bearer, Iago, who hates Othello and sets out to destroy him by destroying his love for Desdemona. As Othello succumbs to Iago's insinuations that Desdemona is unfaithful, fascination—which dominates the early acts of the play—turns to horror, especially for the audience. We are confronted by spectacles of a generous and trusting Othello in the grip of Iago's schemes; of an innocent Desdemona, who has given herself up entirely to her love for Othello only to be subjected to his horrifying verbal and physical assaults, the outcome of Othello's mistaken convictions about her faithlessness.";
?>


<!DOCTYPE html>
<html class="desktop
">
<head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# good_reads: http://ogp.me/ns/fb/good_reads#">
    <title><?php echo $title ?></title>


<!--    <link href='https://www.goodreads.com/book/show/12996.Othello' rel='canonical'>-->
<!--    <link rel="alternate" href="https://www.goodreads.com/en/book/show/12996" hreflang="en"/>-->
<!--    <link rel="alternate" href="https://www.goodreads.com/de/book/show/12996" hreflang="de"/>-->
<!--    <link rel="alternate" href="https://www.goodreads.com/tr/book/show/12996" hreflang="tr"/>-->
<!--    <link rel="alternate" href="https://www.goodreads.com/it/book/show/12996" hreflang="it"/>-->
<!--    <link rel="alternate" href="https://www.goodreads.com/pt/book/show/12996" hreflang="pt"/>-->
<!--    <link rel="alternate" href="https://www.goodreads.com/el/book/show/12996" hreflang="el"/>-->
<!--    <link rel="alternate" href="https://www.goodreads.com/ar/book/show/12996" hreflang="ar"/>-->
<!--    <link rel="alternate" href="https://www.goodreads.com/es/book/show/12996" hreflang="es"/>-->
<!--    <link rel="alternate" href="https://www.goodreads.com/fa/book/show/12996" hreflang="fa"/>-->
<!--    <link rel="alternate" href="https://www.goodreads.com/pl/book/show/12996" hreflang="pl"/>-->
<!--    <link rel="alternate" href="https://www.goodreads.com/sk/book/show/12996" hreflang="sk"/>-->
<!--    <link rel="alternate" href="https://www.goodreads.com/ro/book/show/12996" hreflang="ro"/>-->
<!--    <link rel="alternate" href="https://www.goodreads.com/nl/book/show/12996" hreflang="nl"/>-->
<!--    <link rel="alternate" href="https://www.goodreads.com/id/book/show/12996" hreflang="id"/>-->
<!--    <link rel="alternate" href="https://www.goodreads.com/zh/book/show/12996" hreflang="zh"/>-->
<!--    <link rel="alternate" href="https://www.goodreads.com/fr/book/show/12996" hreflang="fr"/>-->
<!--    <link rel="alternate" href="https://www.goodreads.com/no/book/show/12996" hreflang="no"/>-->
<!--    <link rel="alternate" href="https://www.goodreads.com/bg/book/show/12996" hreflang="bg"/>-->
<!--    <link rel="alternate" href="https://www.goodreads.com/ru/book/show/12996" hreflang="ru"/>-->
<!--    <link rel="alternate" href="https://www.goodreads.com/da/book/show/12996" hreflang="da"/>-->
<!--    <link rel="alternate" href="https://www.goodreads.com/cs/book/show/12996" hreflang="cs"/>-->
<!--    <link rel="alternate" href="https://www.goodreads.com/ka/book/show/12996" hreflang="ka"/>-->
<!--    <link rel="alternate" href="https://www.goodreads.com/fi/book/show/12996" hreflang="fi"/>-->
<!--    <link rel="alternate" href="https://www.goodreads.com/mn/book/show/12996" hreflang="mn"/>-->
<!--    <link rel="alternate" href="https://www.goodreads.com/ca/book/show/12996" hreflang="ca"/>-->
<!--    <link rel="alternate" href="https://www.goodreads.com/hu/book/show/12996" hreflang="hu"/>-->
<!--    <link rel="alternate" href="https://www.goodreads.com/hr/book/show/12996" hreflang="hr"/>-->
<!--    <link rel="alternate" href="https://www.goodreads.com/ta/book/show/12996" hreflang="ta"/>-->
<!--    <link rel="alternate" href="https://www.goodreads.com/sr/book/show/12996" hreflang="sr"/>-->
<!--    <link rel="alternate" href="https://www.goodreads.com/ko/book/show/12996" hreflang="ko"/>-->
<!--    <link rel="alternate" href="https://www.goodreads.com/vi/book/show/12996" hreflang="vi"/>-->
<!--    <link rel="alternate" href="https://www.goodreads.com/et/book/show/12996" hreflang="et"/>-->
<!--    <link rel="alternate" href="https://www.goodreads.com/sv/book/show/12996" hreflang="sv"/>-->


<!--    <link rel="alternate" href="android-app://com.goodreads/https/www.goodreads.com/book/show/12996.Othello">-->

<!--    <link rel="next" href="https://www.goodreads.com/book/show/12996.Othello?page=2">-->



<!--    <script type="text/javascript"> var ue_t0=window.ue_t0||+new Date();-->
<!--    </script>-->

<!--    <script type="text/javascript">-->
<!--        var ue_mid = "A1PQBFHBHS6YH1";-->
<!--        var ue_sn = "www.goodreads.com";-->
<!--        var ue_furl = "fls-na.amazon.com";-->
<!--        var ue_sid = "596-5873062-4886762";-->
<!--        var ue_id = "G0P6T6C4CV01TZY49Y50";-->
<!---->
<!--        (function(e){var c=e;var a=c.ue||{};a.main_scope="mainscopecsm";a.q=[];a.t0=c.ue_t0||+new Date();a.d=g;function g(h){return +new Date()-(h?0:a.t0)}function d(h){return function(){a.q.push({n:h,a:arguments,t:a.d()})}}function b(m,l,h,j,i){var k={m:m,f:l,l:h,c:""+j,err:i,fromOnError:1,args:arguments};c.ueLogError(k);return false}b.skipTrace=1;e.onerror=b;function f(){c.uex("ld")}if(e.addEventListener){e.addEventListener("load",f,false)}else{if(e.attachEvent){e.attachEvent("onload",f)}}a.tag=d("tag");a.log=d("log");a.reset=d("rst");c.ue_csm=c;c.ue=a;c.ueLogError=d("err");c.ues=d("ues");c.uet=d("uet");c.uex=d("uex");c.uet("ue")})(window);(function(e,d){var a=e.ue||{};function c(g){if(!g){return}var f=d.head||d.getElementsByTagName("head")[0]||d.documentElement,h=d.createElement("script");h.async="async";h.src=g;f.insertBefore(h,f.firstChild)}function b(){var k=e.ue_cdn||"z-ecx.images-amazon.com",g=e.ue_cdns||"images-na.ssl-images-amazon.com",j="/images/G/01/csminstrumentation/",h=e.ue_file||"ue-full-11e51f253e8ad9d145f4ed644b40f692._V1_.js",f,i;if(h.indexOf("NSTRUMENTATION_FIL")>=0){return}if("ue_https" in e){f=e.ue_https}else{f=e.location&&e.location.protocol=="https:"?1:0}i=f?"https://":"http://";i+=f?g:k;i+=j;i+=h;c(i)}if(!e.ue_inline){if(a.loadUEFull){a.loadUEFull()}else{b()}}a.uels=c;e.ue=a})(window,document);-->
<!---->
<!--        if (window.ue && window.ue.tag) { window.ue.tag('book:show:signed_in', ue.main_scope);window.ue.tag('book:show:signed_in:desktop', ue.main_scope); }-->
<!--    </script>-->


<!--    <script type="text/javascript">-->
<!--        if (window.Mobvious === undefined) {-->
<!--            window.Mobvious = {};-->
<!--        }-->
<!--        window.Mobvious.device_type = 'desktop';-->
<!--    </script>-->



<!--    <script src="https://s.gr-assets.com/assets/webfontloader-f5925439393a000d48096973793890d8.js"></script>-->
<!--    <script>-->
<!--        WebFont.load({-->
<!--            classes: false,-->
<!--            custom: {-->
<!--                families: ["Lato:n4,n7,i4", "Merriweather:n4,n7,i4"],-->
<!--                urls: ["https://s.gr-assets.com/assets/gr/fonts-e256f84093cc13b27f5b82343398031a.css"]-->
<!--            }-->
<!--        });-->
<!--    </script>-->

    <link rel="stylesheet" media="all" href="./css/goodreads_all.css" />



    <link rel="stylesheet" media="screen" href="./css/goodreads_screen.css" />

<!--    <script src="https://s.gr-assets.com/assets/desktop/libraries-41a429a5834e6352d597e2cf0b06486f.js"></script>-->
<!--    <script src="https://s.gr-assets.com/assets/application-e1f7a59d8a3ee82c2db20200ea66a37f.js"></script>-->

<!--    <script>-->
<!--        -->
<!--        var gptAdSlots = gptAdSlots || [];-->
<!--        var googletag = googletag || {};-->
<!--        googletag.cmd = googletag.cmd || [];-->
<!--        (function() {-->
<!--            var gads = document.createElement("script");-->
<!--            gads.async = true;-->
<!--            gads.type = "text/javascript";-->
<!--            var useSSL = "https:" == document.location.protocol;-->
<!--            gads.src = (useSSL ? "https:" : "http:") +-->
<!--                "//securepubads.g.doubleclick.net/tag/js/gpt.js";-->
<!--            var node = document.getElementsByTagName("script")[0];-->
<!--            node.parentNode.insertBefore(gads, node);-->
<!--        })();-->
<!--        -->
<!--    </script>-->
    
<!--    <script>-->
<!--        -->
<!--        googletag.cmd.push(function() {-->
<!--            googletag.pubads().setTargeting("sid", "osid.3ef9237958fcfb29a594dd991e8112c5");-->
<!--            googletag.pubads().setTargeting("grsession", "osid.3ef9237958fcfb29a594dd991e8112c5");-->
<!--            googletag.pubads().setTargeting("surface", "desktop");-->
<!--            googletag.pubads().setTargeting("signedin", "true");-->
<!--            googletag.pubads().setTargeting("gr_author", "false");-->
<!--            googletag.pubads().setTargeting("author", ["947","3137322","1020792","585","569","3706","799335","25885","2782"]);-->
<!--            googletag.pubads().setTargeting("genres", ["1","24","25","28","29","26","136","62","460","40","64","128","146","244","621","776","1053","8300","4","5","35","48","58","68","84","96","144","173","188","207","269","384","397","479","560","587","688","798","945","1024","1126","1413","1670","2093","2207","4005","5722","5737","6568"]);-->
<!--            googletag.pubads().setTargeting("Gender", "male");-->
<!--            googletag.pubads().setTargeting("Age", "20-24");-->
<!--            googletag.pubads().setTargeting("shelf", ["classics","plays","fiction","drama","school","literature","theatre","readforschool","poetry","tragedy"]);-->
<!--            googletag.pubads().setTargeting("tags", ["24","621","1","460","26","25","776","8300","146","9926"]);-->
<!--            googletag.pubads().setTargeting("gtargeting", "dcly0qk1t");-->
<!--            googletag.pubads().setTargeting("resource", "Work_995103");-->
<!--            googletag.pubads().enableAsyncRendering();-->
<!--            googletag.pubads().enableSingleRequest();-->
<!--            googletag.pubads().collapseEmptyDivs(true);-->
<!--            googletag.pubads().disableInitialLoad();-->
<!--            googletag.enableServices();-->
<!--        });-->
<!--        -->
<!--    </script>-->

<!--    <script>-->
<!--    -->
<!--        ! function(a9, a, p, s, t, A, g) {-->
<!--            if (a[a9]) return;-->
<!---->
<!--            function q(c, r) {-->
<!--                a[a9]._Q.push([c, r])-->
<!--            }-->
<!--            a[a9] = {-->
<!--                init: function() {-->
<!--                    q("i", arguments)-->
<!--                },-->
<!--                fetchBids: function() {-->
<!--                    q("f", arguments)-->
<!--                },-->
<!--                setDisplayBids: function() {},-->
<!--                _Q: []-->
<!--            };-->
<!--            A = p.createElement(s);-->
<!--            A.async = !0;-->
<!--            A.src = t;-->
<!--            g = p.getElementsByTagName(s)[0];-->
<!--            g.parentNode.insertBefore(A, g)-->
<!--        }("apstag", window, document, "script", "//c.amazon-adsystem.com/aax2/apstag.js");-->
<!---->
<!--        apstag.init({-->
<!--            pubID: '3211', adServer: 'googletag', bidTimeout: 4e3, params: { aps_privacy: '1YN' }-->
<!--        });-->
<!--    -->
<!--    </script>-->



<!--    <script src="https://s.gr-assets.com/assets/react_client_side/external_dependencies-51654d5556.js" defer="defer"></script>-->
<!--    <script src="https://s.gr-assets.com/assets/react_client_side/site_header-6b419369c5.js" defer="defer"></script>-->
<!--    <script src="https://s.gr-assets.com/assets/react_client_side/custom_react_ujs-b1220d5e0a4820e90b905c302fc5cb52.js" defer="defer"></script>-->


<!--    <script src="https://s.gr-assets.com/assets/book/show-a22931d02749837069b3b4a4ebf40236.js"></script>-->

<!--    <script>-->
<!---->
<!--        !function(d,s,id)-->
<!--        {var js, fjs = d.getElementsByTagName(s)[0];-->
<!--            if(!d.getElementById(id))-->
<!--            {js=d.createElement(s);-->
<!--                js.id=id;-->
<!--                js.src='https://platform.twitter.com/widgets.js';-->
<!--                fjs.parentNode.insertBefore(js,fjs);-->
<!--            }}(document,'script','twitter-wjs');-->
<!---->
<!--    </script>-->






<!--    <link rel="search" type="application/opensearchdescription+xml" href="/opensearch.xml" title="Goodreads">-->

<!--    <script>-->
<!---->
<!---->
<!--        var GoodreadsAnalytics = GoodreadsAnalytics || {};-->
<!--        var _gaq = _gaq || [];-->
<!---->
<!--        GoodreadsAnalytics.push = function () {-->
<!--            _gaq.push.apply(_gaq, arguments);-->
<!--        }-->
<!---->
<!--        GoodreadsAnalytics.push(['_setAccount', 'UA-968618-1']);-->
<!--        GoodreadsAnalytics.push(['_setCustomVar',-->
<!--            1,                        // Slot 1-->
<!--            'User Status',            // Custom variable name-->
<!--            'signed_in',  // Custom variable value: signed_out, signed_in,-->
<!--            //   signed_in_facebook_connected, or-->
<!--            //   goodreads_member_previously_signed_in-->
<!--            2                         // Visit-level scope, which means slot 1 will be-->
<!--                                      //   free when the visit ends.-->
<!--        ]);-->
<!--        GoodreadsAnalytics.push(['_setCustomVar',-->
<!--            2,                        // Slot 2-->
<!--            'Device Type',            // Custom variable name-->
<!--            'desktop',         // Custom variable value: desktop, mobile, or-->
<!--            //   tablet-->
<!--            2                         // Visit-level scope, which means slot 2 will be-->
<!--                                      //   free when the visit ends.-->
<!--        ]);-->
<!--        GoodreadsAnalytics.push(['_trackPageview']);-->
<!---->
<!--        (function () {-->
<!--            var ga = document.createElement('script');-->
<!--            ga.type = 'text/javascript';-->
<!--            ga.async = true;-->
<!--            ga.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'stats.g.doubleclick.net/dc.js';-->
<!--            var s = document.getElementsByTagName('script')[0];-->
<!--            s.parentNode.insertBefore(ga, s);-->
<!--        })();-->
<!---->
<!---->
<!--    </script>-->

<!--    <meta name="description" content="Othello book. Read 6,648 reviews from the world's largest community for readers. In Othello, Shakespeare creates a powerful drama of a marriage that begi...">-->


<!--    <meta content='summary' name='twitter:card'>-->
<!--    <meta content='@goodreads' name='twitter:site'>-->
<!--    <meta content='Othello by William Shakespeare' name='twitter:title'>-->
<!--    <meta content="Othello book. Read 6,648 reviews from the world's largest community for readers. In Othello, Shakespeare creates a powerful drama of a marriage that begi..." name='twitter:description'>-->
<!--    <meta content='https://i.gr-assets.com/images/S/compressed.photo.goodreads.com/books/1459795105i/12996._UY2503_SS2503_.jpg' name='twitter:image'>-->
<!--    <meta content='Othello' name='twitter:image:alt'>-->


<!--    <meta name="verify-v1" content="cEf8XOH0pulh1aYQeZ1gkXHsQ3dMPSyIGGYqmF53690=">-->
<!--    <meta name="google-site-verification" content="PfFjeZ9OK1RrUrKlmAPn_iZJ_vgHaZO1YQ-QlG2VsJs" />-->
<!--    <meta name="apple-itunes-app" content="app-id=355833469">-->
</head>


<body class="">
<!--<div data-react-class="ReactComponents.StoresInitializer" data-react-props="{}"><noscript data-reactid=".oabsebsydc" data-react-checksum="-1298067047"></noscript></div>-->

<div class="content">
<!--    <script>-->
<!---->
<!--        var initializeGrfb = function() {-->
<!--            $grfb.initialize({-->
<!--                appId: "2415071772"-->
<!--            });-->
<!--        };-->
<!--        if (typeof $grfb !== "undefined") {-->
<!--            initializeGrfb();-->
<!--        } else {-->
<!--            window.addEventListener("DOMContentLoaded", function() {-->
<!--                if (typeof $grfb !== "undefined") {-->
<!--                    initializeGrfb();-->
<!--                }-->
<!--            });-->
<!--        }-->
<!--        -->
<!--    </script>-->

<!--    <script>-->
<!--        -->
<!--        function loadScript(url, callback) {-->
<!--            var script = document.createElement("script");-->
<!--            script.type = "text/javascript";-->
<!---->
<!--            if (script.readyState) {  //Internet Explorer-->
<!--                script.onreadystatechange = function() {-->
<!--                    if (script.readyState == "loaded" ||-->
<!--                        script.readyState == "complete") {-->
<!--                        script.onreadystatechange = null;-->
<!--                        callback();-->
<!--                    }-->
<!--                };-->
<!--            } else {  //Other browsers-->
<!--                script.onload = function() {-->
<!--                    callback();-->
<!--                };-->
<!--            }-->
<!---->
<!--            script.src = url;-->
<!--            document.getElementsByTagName("head")[0].appendChild(script);-->
<!--        }-->
<!---->
<!--        function initAppleId() {-->
<!--            AppleID.auth.init({-->
<!--                clientId : 'com.goodreads.app',-->
<!--                scope : 'name email',-->
<!--                redirectURI: 'https://www.goodreads.com/apple_users/sign_in_with_apple_web',-->
<!--                state: 'apple_oauth_state_29bc57ea-a5eb-4cee-9a69-22ddba5948dc'-->
<!--            });-->
<!--        }-->
<!---->
<!--        var initializeSiwa = function() {-->
<!--            var APPLE_SIGN_IN_JS_URL =  "https://appleid.cdn-apple.com/appleauth/static/jsapi/appleid/1/en_US/appleid.auth.js"-->
<!--            loadScript(APPLE_SIGN_IN_JS_URL, initAppleId);-->
<!--        };-->
<!--        if (typeof AppleID !== "undefined") {-->
<!--            initAppleId();-->
<!--        } else {-->
<!--            initializeSiwa();-->
<!--        }-->
<!---->
<!--    </script>-->

    <div class='siteHeader'>
        <div data-react-class="ReactComponents.HeaderStoreConnector" data-react-props="{&quot;myBooksUrl&quot;:&quot;/review/list/129148878?ref=nav_mybooks&quot;,&quot;browseUrl&quot;:&quot;/book?ref=nav_brws&quot;,&quot;recommendationsUrl&quot;:&quot;/recommendations?ref=nav_brws_recs&quot;,&quot;choiceAwardsUrl&quot;:&quot;/choiceawards?ref=nav_brws_gca&quot;,&quot;genresIndexUrl&quot;:&quot;/genres?ref=nav_brws_genres&quot;,&quot;giveawayUrl&quot;:&quot;/giveaway?ref=nav_brws_giveaways&quot;,&quot;exploreUrl&quot;:&quot;/book?ref=nav_brws_explore&quot;,&quot;homeUrl&quot;:&quot;/?ref=nav_home&quot;,&quot;listUrl&quot;:&quot;/list?ref=nav_brws_lists&quot;,&quot;newsUrl&quot;:&quot;/news?ref=nav_brws_news&quot;,&quot;communityUrl&quot;:&quot;/group?ref=nav_comm&quot;,&quot;groupsUrl&quot;:&quot;/group?ref=nav_comm_groups&quot;,&quot;quotesUrl&quot;:&quot;/quotes?ref=nav_comm_quotes&quot;,&quot;featuredAskAuthorUrl&quot;:&quot;/ask_the_author?ref=nav_comm_askauthor&quot;,&quot;discussionsUrl&quot;:&quot;/topic?ref=nav_comm_discuss&quot;,&quot;autocompleteUrl&quot;:&quot;/book/auto_complete&quot;,&quot;defaultLogoActionUrl&quot;:&quot;/&quot;,&quot;topFullImage&quot;:{},&quot;logo&quot;:{&quot;clickthroughUrl&quot;:&quot;/&quot;,&quot;altText&quot;:&quot;Goodreads Home&quot;},&quot;searchPath&quot;:&quot;/search&quot;,&quot;newReleasesUrl&quot;:&quot;/new_releases?ref=nav_brws_newrels&quot;,&quot;profileEditUrl&quot;:&quot;/user/edit?ref=nav_profile_settings&quot;,&quot;myQuotesUrl&quot;:&quot;/quotes/list?ref=nav_profile_quotes&quot;,&quot;commentsUrl&quot;:&quot;/comment/list/129148878-mohsen-mahmoodzadeh?ref=nav_profile_comment&quot;,&quot;editFavGenresUrl&quot;:&quot;/user/edit_fav_genres?ref=nav_profile_favgenre\u0026return_url=%2Fbook%2Fshow%2F12996.Othello%3Fac%3D1%26from_search%3Dtrue%26qid%3DGSbtI3R7Hp%26rank%3D1&quot;,&quot;messageIconUrl&quot;:&quot;/message/inbox?ref=nav_my_messages&quot;,&quot;eventUrl&quot;:&quot;/event?ref=nav_comm_events&quot;,&quot;peopleUrl&quot;:&quot;/user/best_reviewers?ref=nav_comm_people&quot;,&quot;storiesUrl&quot;:&quot;/story?ref=nav_comm_cwriting&quot;,&quot;triviaUrl&quot;:&quot;/trivia?ref=nav_comm_trivia&quot;,&quot;quizzesUrl&quot;:&quot;/quizzes?ref=nav_comm_quiz&quot;,&quot;notificationIconUrl&quot;:&quot;/notifications?ref=nav_my_notifs&quot;,&quot;friendIconUrl&quot;:&quot;/friend?ref=nav_my_friends&quot;,&quot;myFriendsUrl&quot;:&quot;/friend?ref=nav_profile_friends&quot;,&quot;myRecsUrl&quot;:&quot;/recommendations/to_me?ref=nav_profile_friendrec&quot;,&quot;myGroupsUrl&quot;:&quot;/group/list/129148878-mohsen-mahmoodzadeh?ref=nav_profile_groups&quot;,&quot;helpUrl&quot;:&quot;/help?action_type=help_nav_bar\u0026ref=nav_profile_help&quot;,&quot;signOutUrl&quot;:&quot;/user/sign_out?ref=nav_profile_signout&quot;,&quot;readingNotesUrl&quot;:&quot;/notes?ref=nav_profile_knh&quot;,&quot;myReadingChallengeUrl&quot;:&quot;https://www.goodreads.com/challenges/11650?ref=nav_profile_rc&quot;,&quot;deployServices&quot;:[],&quot;defaultLogoAltText&quot;:&quot;Goodreads Home&quot;,&quot;mobviousDeviceType&quot;:&quot;desktop&quot;}"><header data-reactid=".ww89jdl728" data-react-checksum="-419183767"><div class="siteHeader__topLine gr-box gr-box--withShadow" data-reactid=".ww89jdl728.1"><div class="siteHeader__contents" data-reactid=".ww89jdl728.1.0"><div class="siteHeader__topLevelItem siteHeader__topLevelItem--searchIcon" data-reactid=".ww89jdl728.1.0.0"><button class="siteHeader__searchIcon gr-iconButton" aria-label="Toggle search" type="button" data-ux-click="true" data-reactid=".ww89jdl728.1.0.0.0"></button></div><a href="/" class="siteHeader__logo" aria-label="Goodreads Home" title="Goodreads Home" data-reactid=".ww89jdl728.1.0.1"></a><nav class="siteHeader__primaryNavInline" data-reactid=".ww89jdl728.1.0.2"><ul role="menu" class="siteHeader__menuList" data-reactid=".ww89jdl728.1.0.2.0"><li class="siteHeader__topLevelItem siteHeader__topLevelItem--home" data-reactid=".ww89jdl728.1.0.2.0.0"><a href="/?ref=nav_home" class="siteHeader__topLevelLink" data-reactid=".ww89jdl728.1.0.2.0.0.0">Home</a></li><li class="siteHeader__topLevelItem" data-reactid=".ww89jdl728.1.0.2.0.1"><a href="/review/list/129148878?ref=nav_mybooks" class="siteHeader__topLevelLink" data-reactid=".ww89jdl728.1.0.2.0.1.0">My Books</a></li><li class="siteHeader__topLevelItem" data-reactid=".ww89jdl728.1.0.2.0.2"><div class="primaryNavMenu primaryNavMenu--siteHeaderBrowseMenu ignore-react-onclickoutside" data-reactid=".ww89jdl728.1.0.2.0.2.0"><a class="primaryNavMenu__trigger primaryNavMenu__trigger--siteHeaderBrowseMenu" href="/book?ref=nav_brws" role="button" aria-haspopup="true" aria-expanded="false" data-ux-click="true" data-reactid=".ww89jdl728.1.0.2.0.2.0.0"><span data-reactid=".ww89jdl728.1.0.2.0.2.0.0.0">Browse ▾</span></a><div class="primaryNavMenu__menu gr-box gr-box--withShadowLarge" role="menu" data-reactid=".ww89jdl728.1.0.2.0.2.0.1"><div class="siteHeader__browseMenuDropdown" data-reactid=".ww89jdl728.1.0.2.0.2.0.1.0"><ul class="siteHeader__subNav" data-reactid=".ww89jdl728.1.0.2.0.2.0.1.0.0"><li role="menuitem" class="menuLink" data-reactid=".ww89jdl728.1.0.2.0.2.0.1.0.0.0"><a href="/recommendations?ref=nav_brws_recs" class="siteHeader__subNavLink" data-reactid=".ww89jdl728.1.0.2.0.2.0.1.0.0.0.0">Recommendations</a></li><li role="menuitem" class="menuLink" data-reactid=".ww89jdl728.1.0.2.0.2.0.1.0.0.1"><a href="/choiceawards?ref=nav_brws_gca" class="siteHeader__subNavLink" data-reactid=".ww89jdl728.1.0.2.0.2.0.1.0.0.1.0">Choice Awards</a></li><li role="menuitem" class="menuLink" data-reactid=".ww89jdl728.1.0.2.0.2.0.1.0.0.2"><a href="/genres?ref=nav_brws_genres" class="siteHeader__subNavLink siteHeader__subNavLink--genresIndex" data-reactid=".ww89jdl728.1.0.2.0.2.0.1.0.0.2.0">Genres</a></li><li role="menuitem" class="menuLink" data-reactid=".ww89jdl728.1.0.2.0.2.0.1.0.0.3"><a href="/giveaway?ref=nav_brws_giveaways" class="siteHeader__subNavLink" data-reactid=".ww89jdl728.1.0.2.0.2.0.1.0.0.3.0">Giveaways</a></li><li role="menuitem" class="menuLink" data-reactid=".ww89jdl728.1.0.2.0.2.0.1.0.0.4"><a href="/new_releases?ref=nav_brws_newrels" class="siteHeader__subNavLink" data-reactid=".ww89jdl728.1.0.2.0.2.0.1.0.0.4.0">New Releases</a></li><li role="menuitem" class="menuLink" data-reactid=".ww89jdl728.1.0.2.0.2.0.1.0.0.5"><a href="/list?ref=nav_brws_lists" class="siteHeader__subNavLink" data-reactid=".ww89jdl728.1.0.2.0.2.0.1.0.0.5.0">Lists</a></li><li role="menuitem" class="menuLink" data-reactid=".ww89jdl728.1.0.2.0.2.0.1.0.0.6"><a href="/book?ref=nav_brws_explore" class="siteHeader__subNavLink" data-reactid=".ww89jdl728.1.0.2.0.2.0.1.0.0.6.0">Explore</a></li><li role="menuitem" class="menuLink" data-reactid=".ww89jdl728.1.0.2.0.2.0.1.0.0.7"><a href="/news?ref=nav_brws_news" class="siteHeader__subNavLink" data-reactid=".ww89jdl728.1.0.2.0.2.0.1.0.0.7.0">News &amp; Interviews</a></li></ul><div class="siteHeader__spotlight siteHeader__spotlight--browseMenu" data-reactid=".ww89jdl728.1.0.2.0.2.0.1.0.1"><div class="featuredGenres featuredGenres--sparse" data-reactid=".ww89jdl728.1.0.2.0.2.0.1.0.1.0"><div class="spinnerContainer" data-reactid=".ww89jdl728.1.0.2.0.2.0.1.0.1.0.0"><div class="spinner" data-reactid=".ww89jdl728.1.0.2.0.2.0.1.0.1.0.0.0"><div class="spinner__mask" data-reactid=".ww89jdl728.1.0.2.0.2.0.1.0.1.0.0.0.0"><div class="spinner__maskedCircle" data-reactid=".ww89jdl728.1.0.2.0.2.0.1.0.1.0.0.0.0.0"></div></div></div><div class="spinnerFallbackText" data-reactid=".ww89jdl728.1.0.2.0.2.0.1.0.1.0.0.1">Loading…</div></div></div></div></div></div></div></li><li class="siteHeader__topLevelItem siteHeader__topLevelItem--community" data-reactid=".ww89jdl728.1.0.2.0.3"><div class="primaryNavMenu ignore-react-onclickoutside" data-reactid=".ww89jdl728.1.0.2.0.3.0"><a class="primaryNavMenu__trigger" href="/group?ref=nav_comm" role="button" aria-haspopup="true" aria-expanded="false" data-ux-click="true" data-reactid=".ww89jdl728.1.0.2.0.3.0.0"><span data-reactid=".ww89jdl728.1.0.2.0.3.0.0.0">Community ▾</span></a><div class="primaryNavMenu__menu gr-box gr-box--withShadowLarge" role="menu" data-reactid=".ww89jdl728.1.0.2.0.3.0.1"><ul class="siteHeader__subNav" data-reactid=".ww89jdl728.1.0.2.0.3.0.1.0"><li role="menuitem" class="menuLink" data-reactid=".ww89jdl728.1.0.2.0.3.0.1.0.0"><a href="/group?ref=nav_comm_groups" class="siteHeader__subNavLink" data-reactid=".ww89jdl728.1.0.2.0.3.0.1.0.0.0">Groups</a></li><li role="menuitem" class="menuLink" data-reactid=".ww89jdl728.1.0.2.0.3.0.1.0.1"><a href="/topic?ref=nav_comm_discuss" class="siteHeader__subNavLink" data-reactid=".ww89jdl728.1.0.2.0.3.0.1.0.1.0">Discussions</a></li><li role="menuitem" class="menuLink" data-reactid=".ww89jdl728.1.0.2.0.3.0.1.0.2"><a href="/quotes?ref=nav_comm_quotes" class="siteHeader__subNavLink" data-reactid=".ww89jdl728.1.0.2.0.3.0.1.0.2.0">Quotes</a></li><li role="menuitem" class="menuLink" data-reactid=".ww89jdl728.1.0.2.0.3.0.1.0.3"><a href="/ask_the_author?ref=nav_comm_askauthor" class="siteHeader__subNavLink" data-reactid=".ww89jdl728.1.0.2.0.3.0.1.0.3.0">Ask the Author</a></li><li role="menuitem" class="menuLink" data-reactid=".ww89jdl728.1.0.2.0.3.0.1.0.4"><a href="/trivia?ref=nav_comm_trivia" class="siteHeader__subNavLink" data-reactid=".ww89jdl728.1.0.2.0.3.0.1.0.4.0">Trivia</a></li><li role="menuitem" class="menuLink" data-reactid=".ww89jdl728.1.0.2.0.3.0.1.0.5"><a href="/quizzes?ref=nav_comm_quiz" class="siteHeader__subNavLink" data-reactid=".ww89jdl728.1.0.2.0.3.0.1.0.5.0">Quizzes</a></li><li role="menuitem" class="menuLink" data-reactid=".ww89jdl728.1.0.2.0.3.0.1.0.6"><a href="/story?ref=nav_comm_cwriting" class="siteHeader__subNavLink" data-reactid=".ww89jdl728.1.0.2.0.3.0.1.0.6.0">Creative Writing</a></li><li role="menuitem" class="menuLink" data-reactid=".ww89jdl728.1.0.2.0.3.0.1.0.7"><a href="/user/best_reviewers?ref=nav_comm_people" class="siteHeader__subNavLink" data-reactid=".ww89jdl728.1.0.2.0.3.0.1.0.7.0">People</a></li><li role="menuitem" class="menuLink" data-reactid=".ww89jdl728.1.0.2.0.3.0.1.0.8"><a href="/event?ref=nav_comm_events" class="siteHeader__subNavLink" data-reactid=".ww89jdl728.1.0.2.0.3.0.1.0.8.0">Events</a></li></ul></div></div></li></ul></nav><div accept-charset="UTF-8" class="searchBox searchBox--navbar" data-reactid=".ww89jdl728.1.0.3"><form autocomplete="off" action="/search" class="searchBox__form" role="search" aria-label="Search for books to add to your shelves" data-reactid=".ww89jdl728.1.0.3.0"><input class="searchBox__input searchBox__input--navbar" autocomplete="off" name="q" type="text" placeholder="Search books" aria-label="Search books" aria-controls="searchResults" data-reactid=".ww89jdl728.1.0.3.0.0"/><input type="hidden" name="qid" value="" data-reactid=".ww89jdl728.1.0.3.0.1"/><button type="submit" class="searchBox__icon--magnifyingGlass gr-iconButton searchBox__icon searchBox__icon--navbar" aria-label="Search" data-reactid=".ww89jdl728.1.0.3.0.2"></button></form></div><div class="siteHeader__personal" data-reactid=".ww89jdl728.1.0.4"><ul class="personalNav" data-reactid=".ww89jdl728.1.0.4.0"><li class="personalNav__listItem" data-reactid=".ww89jdl728.1.0.4.0.0"><div data-reactid=".ww89jdl728.1.0.4.0.0.0"><div class="dropdown dropdown--notifications" data-reactid=".ww89jdl728.1.0.4.0.0.0.0"><a class="dropdown__trigger dropdown__trigger--notifications dropdown__trigger--personalNav" href="/notifications?ref=nav_my_notifs" role="button" aria-haspopup="true" aria-expanded="false" title="Notifications" data-ux-click="true" data-reactid=".ww89jdl728.1.0.4.0.0.0.0.0"><span class="headerPersonalNav__icon
                       headerPersonalNav__icon--notifications" aria-label="Notifications" data-reactid=".ww89jdl728.1.0.4.0.0.0.0.0.0"></span></a><div class="dropdown__menu dropdown__menu--notifications gr-box gr-box--withShadowLarge" role="menu" data-reactid=".ww89jdl728.1.0.4.0.0.0.0.1"><div class="dropdown__container
                        gr-notifications
                        gr-notifications--sparse" data-reactid=".ww89jdl728.1.0.4.0.0.0.0.1.0"><div class="spinnerContainer" data-reactid=".ww89jdl728.1.0.4.0.0.0.0.1.0.0"><div class="spinner" data-reactid=".ww89jdl728.1.0.4.0.0.0.0.1.0.0.0"><div class="spinner__mask" data-reactid=".ww89jdl728.1.0.4.0.0.0.0.1.0.0.0.0"><div class="spinner__maskedCircle" data-reactid=".ww89jdl728.1.0.4.0.0.0.0.1.0.0.0.0.0"></div></div></div><div class="spinnerFallbackText" data-reactid=".ww89jdl728.1.0.4.0.0.0.0.1.0.0.1">Loading…</div></div></div></div></div></div></li><li class="personalNav__listItem" data-reactid=".ww89jdl728.1.0.4.0.1"><a href="/topic?ref=nav_bar_discussions_pane_discussion&amp;discussion_filter=groups" title="My group discussions" class="headerPersonalNav" data-reactid=".ww89jdl728.1.0.4.0.1.0"><span class="headerPersonalNav__icon headerPersonalNav__icon--discussions" aria-label="My group discussions" data-reactid=".ww89jdl728.1.0.4.0.1.0.0"></span></a></li><li class="personalNav__listItem" data-reactid=".ww89jdl728.1.0.4.0.2"><a href="/message/inbox?ref=nav_my_messages" title="Messages" class="headerPersonalNav" data-reactid=".ww89jdl728.1.0.4.0.2.0"><span class="headerPersonalNav__icon headerPersonalNav__icon--inbox" aria-label="Inbox" data-reactid=".ww89jdl728.1.0.4.0.2.0.0"></span></a></li><li class="personalNav__listItem" data-reactid=".ww89jdl728.1.0.4.0.3"><a href="/friend?ref=nav_my_friends" title="Friends" class="headerPersonalNav" data-reactid=".ww89jdl728.1.0.4.0.3.0"><span class="headerPersonalNav__icon headerPersonalNav__icon--friendRequests" aria-label="Friend Requests" data-reactid=".ww89jdl728.1.0.4.0.3.0.0"></span></a></li><li class="personalNav__listItem" data-reactid=".ww89jdl728.1.0.4.0.4"><div class="dropdown dropdown--profileMenu" data-reactid=".ww89jdl728.1.0.4.0.4.0"><a class="dropdown__trigger dropdown__trigger--profileMenu dropdown__trigger--personalNav" href="/user/show/129148878-mohsen-mahmoodzadeh" role="button" aria-haspopup="true" aria-expanded="false" data-ux-click="true" data-reactid=".ww89jdl728.1.0.4.0.4.0.0"><span class="headerPersonalNav__icon" data-reactid=".ww89jdl728.1.0.4.0.4.0.0.0"><img class="circularIcon circularIcon--border" src="https://i.gr-assets.com/images/S/compressed.photo.goodreads.com/users/1611697567i/129148878._UX60_CR0,0,60,60_.jpg" alt="Mohsen Mahmoodzadeh" data-reactid=".ww89jdl728.1.0.4.0.4.0.0.0.1"/></span></a><div class="dropdown__menu dropdown__menu--profileMenu gr-box gr-box--withShadowLarge" role="menu" data-reactid=".ww89jdl728.1.0.4.0.4.0.1"><div class="siteHeader__subNav siteHeader__subNav--profile gr-box gr-box--withShadowLarge" data-reactid=".ww89jdl728.1.0.4.0.4.0.1.0"><span class="siteHeader__subNavLink gr-h3 gr-h3--noMargin" data-reactid=".ww89jdl728.1.0.4.0.4.0.1.0.0"><span data-reactid=".ww89jdl728.1.0.4.0.4.0.1.0.0.0"> </span><span data-reactid=".ww89jdl728.1.0.4.0.4.0.1.0.0.1">Mohsen Mahmoodzadeh</span><span data-reactid=".ww89jdl728.1.0.4.0.4.0.1.0.0.2"> </span></span><ul data-reactid=".ww89jdl728.1.0.4.0.4.0.1.0.1"><li role="menuitem" class="menuLink" data-reactid=".ww89jdl728.1.0.4.0.4.0.1.0.1.0"><span data-reactid=".ww89jdl728.1.0.4.0.4.0.1.0.1.0.0"><a href="/user/show/129148878-mohsen-mahmoodzadeh" class="siteHeader__subNavLink" data-reactid=".ww89jdl728.1.0.4.0.4.0.1.0.1.0.0.0">Profile</a></span></li><li role="menuitem" class="menuLink" data-reactid=".ww89jdl728.1.0.4.0.4.0.1.0.1.2"><a href="/friend?ref=nav_profile_friends" class="siteHeader__subNavLink" data-reactid=".ww89jdl728.1.0.4.0.4.0.1.0.1.2.0">Friends</a></li><li role="menuitem" class="menuLink" data-reactid=".ww89jdl728.1.0.4.0.4.0.1.0.1.3"><span data-reactid=".ww89jdl728.1.0.4.0.4.0.1.0.1.3.0"><a href="/group/list/129148878-mohsen-mahmoodzadeh?ref=nav_profile_groups" class="siteHeader__subNavLink" data-reactid=".ww89jdl728.1.0.4.0.4.0.1.0.1.3.0.0"><span data-reactid=".ww89jdl728.1.0.4.0.4.0.1.0.1.3.0.0.0">Groups</span></a></span></li><li role="menuitem" class="menuLink" data-reactid=".ww89jdl728.1.0.4.0.4.0.1.0.1.4"><a href="/topic?ref=nav_comm_discuss" class="siteHeader__subNavLink" data-reactid=".ww89jdl728.1.0.4.0.4.0.1.0.1.4.0">Discussions</a></li><li role="menuitem" class="menuLink" data-reactid=".ww89jdl728.1.0.4.0.4.0.1.0.1.5"><a href="/comment/list/129148878-mohsen-mahmoodzadeh?ref=nav_profile_comment" class="siteHeader__subNavLink" data-reactid=".ww89jdl728.1.0.4.0.4.0.1.0.1.5.0">Comments</a></li><li role="menuitem" class="menuLink" data-reactid=".ww89jdl728.1.0.4.0.4.0.1.0.1.6"><a href="https://www.goodreads.com/challenges/11650?ref=nav_profile_rc" class="siteHeader__subNavLink" data-reactid=".ww89jdl728.1.0.4.0.4.0.1.0.1.6.0">Reading Challenge</a></li><li role="menuitem" class="menuLink" data-reactid=".ww89jdl728.1.0.4.0.4.0.1.0.1.7"><a href="/notes?ref=nav_profile_knh" class="siteHeader__subNavLink" data-reactid=".ww89jdl728.1.0.4.0.4.0.1.0.1.7.0">Kindle Notes &amp; Highlights</a></li><li role="menuitem" class="menuLink" data-reactid=".ww89jdl728.1.0.4.0.4.0.1.0.1.8"><a href="/quotes/list?ref=nav_profile_quotes" class="siteHeader__subNavLink" data-reactid=".ww89jdl728.1.0.4.0.4.0.1.0.1.8.0">Quotes</a></li><li role="menuitem" class="menuLink" data-reactid=".ww89jdl728.1.0.4.0.4.0.1.0.1.9"><a href="/user/edit_fav_genres?ref=nav_profile_favgenre&amp;return_url=%2Fbook%2Fshow%2F12996.Othello%3Fac%3D1%26from_search%3Dtrue%26qid%3DGSbtI3R7Hp%26rank%3D1" class="siteHeader__subNavLink" data-reactid=".ww89jdl728.1.0.4.0.4.0.1.0.1.9.0">Favorite genres</a></li><li role="menuitem" class="menuLink" data-reactid=".ww89jdl728.1.0.4.0.4.0.1.0.1.a"><span data-reactid=".ww89jdl728.1.0.4.0.4.0.1.0.1.a.0"><a href="/recommendations/to_me?ref=nav_profile_friendrec" class="siteHeader__subNavLink" data-reactid=".ww89jdl728.1.0.4.0.4.0.1.0.1.a.0.0"><span data-reactid=".ww89jdl728.1.0.4.0.4.0.1.0.1.a.0.0.0">Friends’ recommendations</span></a></span></li><li role="menuitem" class="menuLink" data-reactid=".ww89jdl728.1.0.4.0.4.0.1.0.1.b"><a href="/user/edit?ref=nav_profile_settings" class="siteHeader__subNavLink u-topGrayBorder" data-reactid=".ww89jdl728.1.0.4.0.4.0.1.0.1.b.0">Account settings</a></li><li role="menuitem" class="menuLink" data-reactid=".ww89jdl728.1.0.4.0.4.0.1.0.1.c"><a href="/help?action_type=help_nav_bar&amp;ref=nav_profile_help" class="siteHeader__subNavLink" data-reactid=".ww89jdl728.1.0.4.0.4.0.1.0.1.c.0">Help</a></li><li role="menuitem" class="menuLink" data-reactid=".ww89jdl728.1.0.4.0.4.0.1.0.1.d"><a href="/user/sign_out?ref=nav_profile_signout" class="siteHeader__subNavLink" data-method="POST" data-reactid=".ww89jdl728.1.0.4.0.4.0.1.0.1.d.0">Sign out</a></li></ul></div></div></div></li></ul></div><div class="siteHeader__topLevelItem siteHeader__topLevelItem--profileIcon" data-reactid=".ww89jdl728.1.0.5"><span class="headerPersonalNav" data-ux-click="true" data-reactid=".ww89jdl728.1.0.5.0"><a class="modalTrigger" role="button" aria-expanded="false" aria-haspopup="true" data-reactid=".ww89jdl728.1.0.5.0.0"><span class="headerPersonalNav__icon" data-reactid=".ww89jdl728.1.0.5.0.0.0"><img class="circularIcon circularIcon--border" src="https://i.gr-assets.com/images/S/compressed.photo.goodreads.com/users/1611697567i/129148878._UX60_CR0,0,60,60_.jpg" alt="Mohsen Mahmoodzadeh" data-reactid=".ww89jdl728.1.0.5.0.0.0.1"/></span></a></span></div><div class="modal modal--overlay" tabindex="0" data-reactid=".ww89jdl728.1.0.6"><div class="modal__content" data-reactid=".ww89jdl728.1.0.6.0"><div class="modal__close" data-reactid=".ww89jdl728.1.0.6.0.0"><button type="button" class="gr-iconButton" data-reactid=".ww89jdl728.1.0.6.0.0.0"><img alt="Dismiss" src="//s.gr-assets.com/assets/gr/icons/icon_close-63734f04e7baaa77fbad796225e5724c.svg" data-reactid=".ww89jdl728.1.0.6.0.0.0.0"/></button></div><div class="gr-genresForm" data-reactid=".ww89jdl728.1.0.6.0.1"><div class="gr-genresForm__title" data-reactid=".ww89jdl728.1.0.6.0.1.0">Follow Your Favorite Genres</div><div class="gr-genresForm__description" data-reactid=".ww89jdl728.1.0.6.0.1.1">We use your favorite genres to make better book recommendations and tailor what you see in your Updates feed.</div><form action="/user/edit_fav_genres" data-remote="true" method="post" data-reactid=".ww89jdl728.1.0.6.0.1.2"><div class="gr-genresForm__checkBoxes" data-reactid=".ww89jdl728.1.0.6.0.1.2.0"><label class="gr-genresForm__genreLabel" data-reactid=".ww89jdl728.1.0.6.0.1.2.0.$Art"><input name="favorites[Art]" type="hidden" value="false" data-reactid=".ww89jdl728.1.0.6.0.1.2.0.$Art.0"/><input name="favorites[Art]" type="checkbox" value="true" data-genre="Art" data-reactid=".ww89jdl728.1.0.6.0.1.2.0.$Art.1"/><span class="u-verticalAlignMiddle u-marginLeftTiny" data-reactid=".ww89jdl728.1.0.6.0.1.2.0.$Art.2">Art</span></label><label class="gr-genresForm__genreLabel" data-reactid=".ww89jdl728.1.0.6.0.1.2.0.$Biography"><input name="favorites[Biography]" type="hidden" value="false" data-reactid=".ww89jdl728.1.0.6.0.1.2.0.$Biography.0"/><input name="favorites[Biography]" type="checkbox" value="true" data-genre="Biography" data-reactid=".ww89jdl728.1.0.6.0.1.2.0.$Biography.1"/><span class="u-verticalAlignMiddle u-marginLeftTiny" data-reactid=".ww89jdl728.1.0.6.0.1.2.0.$Biography.2">Biography</span></label><label class="gr-genresForm__genreLabel" data-reactid=".ww89jdl728.1.0.6.0.1.2.0.$Business"><input name="favorites[Business]" type="hidden" value="false" data-reactid=".ww89jdl728.1.0.6.0.1.2.0.$Business.0"/><input name="favorites[Business]" type="checkbox" value="true" data-genre="Business" data-reactid=".ww89jdl728.1.0.6.0.1.2.0.$Business.1"/><span class="u-verticalAlignMiddle u-marginLeftTiny" data-reactid=".ww89jdl728.1.0.6.0.1.2.0.$Business.2">Business</span></label><label class="gr-genresForm__genreLabel" data-reactid=".ww89jdl728.1.0.6.0.1.2.0.$Children&#x27;s"><input name="favorites[Children&#x27;s]" type="hidden" value="false" data-reactid=".ww89jdl728.1.0.6.0.1.2.0.$Children&#x27;s.0"/><input name="favorites[Children&#x27;s]" type="checkbox" value="true" data-genre="Children&#x27;s" data-reactid=".ww89jdl728.1.0.6.0.1.2.0.$Children&#x27;s.1"/><span class="u-verticalAlignMiddle u-marginLeftTiny" data-reactid=".ww89jdl728.1.0.6.0.1.2.0.$Children&#x27;s.2">Children&#x27;s</span></label><label class="gr-genresForm__genreLabel" data-reactid=".ww89jdl728.1.0.6.0.1.2.0.$Christian"><input name="favorites[Christian]" type="hidden" value="false" data-reactid=".ww89jdl728.1.0.6.0.1.2.0.$Christian.0"/><input name="favorites[Christian]" type="checkbox" value="true" data-genre="Christian" data-reactid=".ww89jdl728.1.0.6.0.1.2.0.$Christian.1"/><span class="u-verticalAlignMiddle u-marginLeftTiny" data-reactid=".ww89jdl728.1.0.6.0.1.2.0.$Christian.2">Christian</span></label><label class="gr-genresForm__genreLabel" data-reactid=".ww89jdl728.1.0.6.0.1.2.0.$Classics"><input name="favorites[Classics]" type="hidden" value="false" data-reactid=".ww89jdl728.1.0.6.0.1.2.0.$Classics.0"/><input name="favorites[Classics]" type="checkbox" value="true" data-genre="Classics" data-reactid=".ww89jdl728.1.0.6.0.1.2.0.$Classics.1"/><span class="u-verticalAlignMiddle u-marginLeftTiny" data-reactid=".ww89jdl728.1.0.6.0.1.2.0.$Classics.2">Classics</span></label><label class="gr-genresForm__genreLabel" data-reactid=".ww89jdl728.1.0.6.0.1.2.0.$Comics"><input name="favorites[Comics]" type="hidden" value="false" data-reactid=".ww89jdl728.1.0.6.0.1.2.0.$Comics.0"/><input name="favorites[Comics]" type="checkbox" value="true" data-genre="Comics" data-reactid=".ww89jdl728.1.0.6.0.1.2.0.$Comics.1"/><span class="u-verticalAlignMiddle u-marginLeftTiny" data-reactid=".ww89jdl728.1.0.6.0.1.2.0.$Comics.2">Comics</span></label><label class="gr-genresForm__genreLabel" data-reactid=".ww89jdl728.1.0.6.0.1.2.0.$Cookbooks"><input name="favorites[Cookbooks]" type="hidden" value="false" data-reactid=".ww89jdl728.1.0.6.0.1.2.0.$Cookbooks.0"/><input name="favorites[Cookbooks]" type="checkbox" value="true" data-genre="Cookbooks" data-reactid=".ww89jdl728.1.0.6.0.1.2.0.$Cookbooks.1"/><span class="u-verticalAlignMiddle u-marginLeftTiny" data-reactid=".ww89jdl728.1.0.6.0.1.2.0.$Cookbooks.2">Cookbooks</span></label><label class="gr-genresForm__genreLabel" data-reactid=".ww89jdl728.1.0.6.0.1.2.0.$Ebooks"><input name="favorites[Ebooks]" type="hidden" value="false" data-reactid=".ww89jdl728.1.0.6.0.1.2.0.$Ebooks.0"/><input name="favorites[Ebooks]" type="checkbox" value="true" data-genre="Ebooks" data-reactid=".ww89jdl728.1.0.6.0.1.2.0.$Ebooks.1"/><span class="u-verticalAlignMiddle u-marginLeftTiny" data-reactid=".ww89jdl728.1.0.6.0.1.2.0.$Ebooks.2">Ebooks</span></label><label class="gr-genresForm__genreLabel" data-reactid=".ww89jdl728.1.0.6.0.1.2.0.$Fantasy"><input name="favorites[Fantasy]" type="hidden" value="false" data-reactid=".ww89jdl728.1.0.6.0.1.2.0.$Fantasy.0"/><input name="favorites[Fantasy]" type="checkbox" value="true" data-genre="Fantasy" data-reactid=".ww89jdl728.1.0.6.0.1.2.0.$Fantasy.1"/><span class="u-verticalAlignMiddle u-marginLeftTiny" data-reactid=".ww89jdl728.1.0.6.0.1.2.0.$Fantasy.2">Fantasy</span></label><label class="gr-genresForm__genreLabel" data-reactid=".ww89jdl728.1.0.6.0.1.2.0.$Fiction"><input name="favorites[Fiction]" type="hidden" value="false" data-reactid=".ww89jdl728.1.0.6.0.1.2.0.$Fiction.0"/><input name="favorites[Fiction]" type="checkbox" value="true" data-genre="Fiction" data-reactid=".ww89jdl728.1.0.6.0.1.2.0.$Fiction.1"/><span class="u-verticalAlignMiddle u-marginLeftTiny" data-reactid=".ww89jdl728.1.0.6.0.1.2.0.$Fiction.2">Fiction</span></label><label class="gr-genresForm__genreLabel" data-reactid=".ww89jdl728.1.0.6.0.1.2.0.$Graphic Novels"><input name="favorites[Graphic Novels]" type="hidden" value="false" data-reactid=".ww89jdl728.1.0.6.0.1.2.0.$Graphic Novels.0"/><input name="favorites[Graphic Novels]" type="checkbox" value="true" data-genre="Graphic Novels" data-reactid=".ww89jdl728.1.0.6.0.1.2.0.$Graphic Novels.1"/><span class="u-verticalAlignMiddle u-marginLeftTiny" data-reactid=".ww89jdl728.1.0.6.0.1.2.0.$Graphic Novels.2">Graphic Novels</span></label><label class="gr-genresForm__genreLabel" data-reactid=".ww89jdl728.1.0.6.0.1.2.0.$Historical Fiction"><input name="favorites[Historical Fiction]" type="hidden" value="false" data-reactid=".ww89jdl728.1.0.6.0.1.2.0.$Historical Fiction.0"/><input name="favorites[Historical Fiction]" type="checkbox" value="true" data-genre="Historical Fiction" data-reactid=".ww89jdl728.1.0.6.0.1.2.0.$Historical Fiction.1"/><span class="u-verticalAlignMiddle u-marginLeftTiny" data-reactid=".ww89jdl728.1.0.6.0.1.2.0.$Historical Fiction.2">Historical Fiction</span></label><label class="gr-genresForm__genreLabel" data-reactid=".ww89jdl728.1.0.6.0.1.2.0.$History"><input name="favorites[History]" type="hidden" value="false" data-reactid=".ww89jdl728.1.0.6.0.1.2.0.$History.0"/><input name="favorites[History]" type="checkbox" value="true" data-genre="History" data-reactid=".ww89jdl728.1.0.6.0.1.2.0.$History.1"/><span class="u-verticalAlignMiddle u-marginLeftTiny" data-reactid=".ww89jdl728.1.0.6.0.1.2.0.$History.2">History</span></label><label class="gr-genresForm__genreLabel" data-reactid=".ww89jdl728.1.0.6.0.1.2.0.$Horror"><input name="favorites[Horror]" type="hidden" value="false" data-reactid=".ww89jdl728.1.0.6.0.1.2.0.$Horror.0"/><input name="favorites[Horror]" type="checkbox" value="true" data-genre="Horror" data-reactid=".ww89jdl728.1.0.6.0.1.2.0.$Horror.1"/><span class="u-verticalAlignMiddle u-marginLeftTiny" data-reactid=".ww89jdl728.1.0.6.0.1.2.0.$Horror.2">Horror</span></label><label class="gr-genresForm__genreLabel" data-reactid=".ww89jdl728.1.0.6.0.1.2.0.$Memoir"><input name="favorites[Memoir]" type="hidden" value="false" data-reactid=".ww89jdl728.1.0.6.0.1.2.0.$Memoir.0"/><input name="favorites[Memoir]" type="checkbox" value="true" data-genre="Memoir" data-reactid=".ww89jdl728.1.0.6.0.1.2.0.$Memoir.1"/><span class="u-verticalAlignMiddle u-marginLeftTiny" data-reactid=".ww89jdl728.1.0.6.0.1.2.0.$Memoir.2">Memoir</span></label><label class="gr-genresForm__genreLabel" data-reactid=".ww89jdl728.1.0.6.0.1.2.0.$Music"><input name="favorites[Music]" type="hidden" value="false" data-reactid=".ww89jdl728.1.0.6.0.1.2.0.$Music.0"/><input name="favorites[Music]" type="checkbox" value="true" data-genre="Music" data-reactid=".ww89jdl728.1.0.6.0.1.2.0.$Music.1"/><span class="u-verticalAlignMiddle u-marginLeftTiny" data-reactid=".ww89jdl728.1.0.6.0.1.2.0.$Music.2">Music</span></label><label class="gr-genresForm__genreLabel" data-reactid=".ww89jdl728.1.0.6.0.1.2.0.$Mystery"><input name="favorites[Mystery]" type="hidden" value="false" data-reactid=".ww89jdl728.1.0.6.0.1.2.0.$Mystery.0"/><input name="favorites[Mystery]" type="checkbox" value="true" data-genre="Mystery" data-reactid=".ww89jdl728.1.0.6.0.1.2.0.$Mystery.1"/><span class="u-verticalAlignMiddle u-marginLeftTiny" data-reactid=".ww89jdl728.1.0.6.0.1.2.0.$Mystery.2">Mystery</span></label><label class="gr-genresForm__genreLabel" data-reactid=".ww89jdl728.1.0.6.0.1.2.0.$Nonfiction"><input name="favorites[Nonfiction]" type="hidden" value="false" data-reactid=".ww89jdl728.1.0.6.0.1.2.0.$Nonfiction.0"/><input name="favorites[Nonfiction]" type="checkbox" value="true" data-genre="Nonfiction" data-reactid=".ww89jdl728.1.0.6.0.1.2.0.$Nonfiction.1"/><span class="u-verticalAlignMiddle u-marginLeftTiny" data-reactid=".ww89jdl728.1.0.6.0.1.2.0.$Nonfiction.2">Nonfiction</span></label><label class="gr-genresForm__genreLabel" data-reactid=".ww89jdl728.1.0.6.0.1.2.0.$Poetry"><input name="favorites[Poetry]" type="hidden" value="false" data-reactid=".ww89jdl728.1.0.6.0.1.2.0.$Poetry.0"/><input name="favorites[Poetry]" type="checkbox" value="true" data-genre="Poetry" data-reactid=".ww89jdl728.1.0.6.0.1.2.0.$Poetry.1"/><span class="u-verticalAlignMiddle u-marginLeftTiny" data-reactid=".ww89jdl728.1.0.6.0.1.2.0.$Poetry.2">Poetry</span></label><label class="gr-genresForm__genreLabel" data-reactid=".ww89jdl728.1.0.6.0.1.2.0.$Psychology"><input name="favorites[Psychology]" type="hidden" value="false" data-reactid=".ww89jdl728.1.0.6.0.1.2.0.$Psychology.0"/><input name="favorites[Psychology]" type="checkbox" value="true" data-genre="Psychology" data-reactid=".ww89jdl728.1.0.6.0.1.2.0.$Psychology.1"/><span class="u-verticalAlignMiddle u-marginLeftTiny" data-reactid=".ww89jdl728.1.0.6.0.1.2.0.$Psychology.2">Psychology</span></label><label class="gr-genresForm__genreLabel" data-reactid=".ww89jdl728.1.0.6.0.1.2.0.$Romance"><input name="favorites[Romance]" type="hidden" value="false" data-reactid=".ww89jdl728.1.0.6.0.1.2.0.$Romance.0"/><input name="favorites[Romance]" type="checkbox" value="true" data-genre="Romance" data-reactid=".ww89jdl728.1.0.6.0.1.2.0.$Romance.1"/><span class="u-verticalAlignMiddle u-marginLeftTiny" data-reactid=".ww89jdl728.1.0.6.0.1.2.0.$Romance.2">Romance</span></label><label class="gr-genresForm__genreLabel" data-reactid=".ww89jdl728.1.0.6.0.1.2.0.$Science"><input name="favorites[Science]" type="hidden" value="false" data-reactid=".ww89jdl728.1.0.6.0.1.2.0.$Science.0"/><input name="favorites[Science]" type="checkbox" value="true" data-genre="Science" data-reactid=".ww89jdl728.1.0.6.0.1.2.0.$Science.1"/><span class="u-verticalAlignMiddle u-marginLeftTiny" data-reactid=".ww89jdl728.1.0.6.0.1.2.0.$Science.2">Science</span></label><label class="gr-genresForm__genreLabel" data-reactid=".ww89jdl728.1.0.6.0.1.2.0.$Science Fiction"><input name="favorites[Science Fiction]" type="hidden" value="false" data-reactid=".ww89jdl728.1.0.6.0.1.2.0.$Science Fiction.0"/><input name="favorites[Science Fiction]" type="checkbox" value="true" data-genre="Science Fiction" data-reactid=".ww89jdl728.1.0.6.0.1.2.0.$Science Fiction.1"/><span class="u-verticalAlignMiddle u-marginLeftTiny" data-reactid=".ww89jdl728.1.0.6.0.1.2.0.$Science Fiction.2">Science Fiction</span></label><label class="gr-genresForm__genreLabel" data-reactid=".ww89jdl728.1.0.6.0.1.2.0.$Self Help"><input name="favorites[Self Help]" type="hidden" value="false" data-reactid=".ww89jdl728.1.0.6.0.1.2.0.$Self Help.0"/><input name="favorites[Self Help]" type="checkbox" value="true" data-genre="Self Help" data-reactid=".ww89jdl728.1.0.6.0.1.2.0.$Self Help.1"/><span class="u-verticalAlignMiddle u-marginLeftTiny" data-reactid=".ww89jdl728.1.0.6.0.1.2.0.$Self Help.2">Self Help</span></label><label class="gr-genresForm__genreLabel" data-reactid=".ww89jdl728.1.0.6.0.1.2.0.$Sports"><input name="favorites[Sports]" type="hidden" value="false" data-reactid=".ww89jdl728.1.0.6.0.1.2.0.$Sports.0"/><input name="favorites[Sports]" type="checkbox" value="true" data-genre="Sports" data-reactid=".ww89jdl728.1.0.6.0.1.2.0.$Sports.1"/><span class="u-verticalAlignMiddle u-marginLeftTiny" data-reactid=".ww89jdl728.1.0.6.0.1.2.0.$Sports.2">Sports</span></label><label class="gr-genresForm__genreLabel" data-reactid=".ww89jdl728.1.0.6.0.1.2.0.$Thriller"><input name="favorites[Thriller]" type="hidden" value="false" data-reactid=".ww89jdl728.1.0.6.0.1.2.0.$Thriller.0"/><input name="favorites[Thriller]" type="checkbox" value="true" data-genre="Thriller" data-reactid=".ww89jdl728.1.0.6.0.1.2.0.$Thriller.1"/><span class="u-verticalAlignMiddle u-marginLeftTiny" data-reactid=".ww89jdl728.1.0.6.0.1.2.0.$Thriller.2">Thriller</span></label><label class="gr-genresForm__genreLabel" data-reactid=".ww89jdl728.1.0.6.0.1.2.0.$Travel"><input name="favorites[Travel]" type="hidden" value="false" data-reactid=".ww89jdl728.1.0.6.0.1.2.0.$Travel.0"/><input name="favorites[Travel]" type="checkbox" value="true" data-genre="Travel" data-reactid=".ww89jdl728.1.0.6.0.1.2.0.$Travel.1"/><span class="u-verticalAlignMiddle u-marginLeftTiny" data-reactid=".ww89jdl728.1.0.6.0.1.2.0.$Travel.2">Travel</span></label><label class="gr-genresForm__genreLabel" data-reactid=".ww89jdl728.1.0.6.0.1.2.0.$Young Adult"><input name="favorites[Young Adult]" type="hidden" value="false" data-reactid=".ww89jdl728.1.0.6.0.1.2.0.$Young Adult.0"/><input name="favorites[Young Adult]" type="checkbox" value="true" data-genre="Young Adult" data-reactid=".ww89jdl728.1.0.6.0.1.2.0.$Young Adult.1"/><span class="u-verticalAlignMiddle u-marginLeftTiny" data-reactid=".ww89jdl728.1.0.6.0.1.2.0.$Young Adult.2">Young Adult</span></label></div><button type="submit" class="gr-button gr-button--large" data-reactid=".ww89jdl728.1.0.6.0.1.2.1">Save</button></form></div></div></div><div class="modal modal--overlay modal--drawer" tabindex="0" data-reactid=".ww89jdl728.1.0.7"><div data-reactid=".ww89jdl728.1.0.7.0"><div class="modal__close" data-reactid=".ww89jdl728.1.0.7.0.0"><button type="button" class="gr-iconButton" data-reactid=".ww89jdl728.1.0.7.0.0.0"><img alt="Dismiss" src="//s.gr-assets.com/assets/gr/icons/icon_close_white-dbf4152deeef5bd3915d5d12210bf05f.svg" data-reactid=".ww89jdl728.1.0.7.0.0.0.0"/></button></div><div class="modal__content" data-reactid=".ww89jdl728.1.0.7.0.1"><div class="personalNavDrawer" data-reactid=".ww89jdl728.1.0.7.0.1.0"><div class="personalNavDrawer__personalNavContainer" data-reactid=".ww89jdl728.1.0.7.0.1.0.0"><ul class="personalNav" data-reactid=".ww89jdl728.1.0.7.0.1.0.0.0"><li class="personalNav__listItem" data-reactid=".ww89jdl728.1.0.7.0.1.0.0.0.0"><a href="/notifications?ref=nav_my_notifs" class="headerPersonalNav" data-reactid=".ww89jdl728.1.0.7.0.1.0.0.0.0.0"><span class="headerPersonalNav__icon
                       headerPersonalNav__icon--notifications" aria-label="Notifications" data-reactid=".ww89jdl728.1.0.7.0.1.0.0.0.0.0.0"></span></a></li><li class="personalNav__listItem" data-reactid=".ww89jdl728.1.0.7.0.1.0.0.0.1"><a href="/topic?ref=nav_bar_discussions_pane_discussion&amp;discussion_filter=groups" title="My group discussions" class="headerPersonalNav" data-reactid=".ww89jdl728.1.0.7.0.1.0.0.0.1.0"><span class="headerPersonalNav__icon headerPersonalNav__icon--discussions" aria-label="My group discussions" data-reactid=".ww89jdl728.1.0.7.0.1.0.0.0.1.0.0"></span></a></li><li class="personalNav__listItem" data-reactid=".ww89jdl728.1.0.7.0.1.0.0.0.2"><a href="/message/inbox?ref=nav_my_messages" title="Messages" class="headerPersonalNav" data-reactid=".ww89jdl728.1.0.7.0.1.0.0.0.2.0"><span class="headerPersonalNav__icon headerPersonalNav__icon--inbox" aria-label="Inbox" data-reactid=".ww89jdl728.1.0.7.0.1.0.0.0.2.0.0"></span></a></li><li class="personalNav__listItem" data-reactid=".ww89jdl728.1.0.7.0.1.0.0.0.3"><a href="/friend?ref=nav_my_friends" title="Friends" class="headerPersonalNav" data-reactid=".ww89jdl728.1.0.7.0.1.0.0.0.3.0"><span class="headerPersonalNav__icon headerPersonalNav__icon--friendRequests" aria-label="Friend Requests" data-reactid=".ww89jdl728.1.0.7.0.1.0.0.0.3.0.0"></span></a></li></ul></div><div class="personalNavDrawer__profileAndLinksContainer" data-reactid=".ww89jdl728.1.0.7.0.1.0.1"><div class="personalNavDrawer__profileContainer gr-mediaFlexbox gr-mediaFlexbox--alignItemsCenter" data-reactid=".ww89jdl728.1.0.7.0.1.0.1.0"><div class="gr-mediaFlexbox__media" data-reactid=".ww89jdl728.1.0.7.0.1.0.1.0.0"><a href="/user/show/129148878-mohsen-mahmoodzadeh" data-reactid=".ww89jdl728.1.0.7.0.1.0.1.0.0.0"><img class="circularIcon circularIcon--large circularIcon--border" src="https://i.gr-assets.com/images/S/compressed.photo.goodreads.com/users/1611697567i/129148878._UX60_CR0,0,60,60_.jpg" alt="Mohsen Mahmoodzadeh" data-reactid=".ww89jdl728.1.0.7.0.1.0.1.0.0.0.0"/></a></div><div class="gr-mediaFlexbox__desc" data-reactid=".ww89jdl728.1.0.7.0.1.0.1.0.1"><a href="/user/show/129148878-mohsen-mahmoodzadeh" class="gr-hyperlink gr-hyperlink--bold" data-reactid=".ww89jdl728.1.0.7.0.1.0.1.0.1.0">Mohsen Mahmoodzadeh</a><div class="u-displayBlock" data-reactid=".ww89jdl728.1.0.7.0.1.0.1.0.1.1"><a href="/user/show/129148878-mohsen-mahmoodzadeh" class="gr-hyperlink gr-hyperlink--naked" data-reactid=".ww89jdl728.1.0.7.0.1.0.1.0.1.1.0">View profile</a></div></div></div><div class="personalNavDrawer__profileMenuContainer" data-reactid=".ww89jdl728.1.0.7.0.1.0.1.1"><ul data-reactid=".ww89jdl728.1.0.7.0.1.0.1.1.0"><li role="menuitem" class="menuLink" data-reactid=".ww89jdl728.1.0.7.0.1.0.1.1.0.0"><span data-reactid=".ww89jdl728.1.0.7.0.1.0.1.1.0.0.0"><a href="/user/show/129148878-mohsen-mahmoodzadeh" class="siteHeader__subNavLink" data-reactid=".ww89jdl728.1.0.7.0.1.0.1.1.0.0.0.0">Profile</a></span></li><li role="menuitem" class="menuLink" data-reactid=".ww89jdl728.1.0.7.0.1.0.1.1.0.2"><a href="/friend?ref=nav_profile_friends" class="siteHeader__subNavLink" data-reactid=".ww89jdl728.1.0.7.0.1.0.1.1.0.2.0">Friends</a></li><li role="menuitem" class="menuLink" data-reactid=".ww89jdl728.1.0.7.0.1.0.1.1.0.3"><span data-reactid=".ww89jdl728.1.0.7.0.1.0.1.1.0.3.0"><a href="/group/list/129148878-mohsen-mahmoodzadeh?ref=nav_profile_groups" class="siteHeader__subNavLink" data-reactid=".ww89jdl728.1.0.7.0.1.0.1.1.0.3.0.0"><span data-reactid=".ww89jdl728.1.0.7.0.1.0.1.1.0.3.0.0.0">Groups</span></a></span></li><li role="menuitem" class="menuLink" data-reactid=".ww89jdl728.1.0.7.0.1.0.1.1.0.4"><a href="/topic?ref=nav_comm_discuss" class="siteHeader__subNavLink" data-reactid=".ww89jdl728.1.0.7.0.1.0.1.1.0.4.0">Discussions</a></li><li role="menuitem" class="menuLink" data-reactid=".ww89jdl728.1.0.7.0.1.0.1.1.0.5"><a href="/comment/list/129148878-mohsen-mahmoodzadeh?ref=nav_profile_comment" class="siteHeader__subNavLink" data-reactid=".ww89jdl728.1.0.7.0.1.0.1.1.0.5.0">Comments</a></li><li role="menuitem" class="menuLink" data-reactid=".ww89jdl728.1.0.7.0.1.0.1.1.0.6"><a href="https://www.goodreads.com/challenges/11650?ref=nav_profile_rc" class="siteHeader__subNavLink" data-reactid=".ww89jdl728.1.0.7.0.1.0.1.1.0.6.0">Reading Challenge</a></li><li role="menuitem" class="menuLink" data-reactid=".ww89jdl728.1.0.7.0.1.0.1.1.0.7"><a href="/notes?ref=nav_profile_knh" class="siteHeader__subNavLink" data-reactid=".ww89jdl728.1.0.7.0.1.0.1.1.0.7.0">Kindle Notes &amp; Highlights</a></li><li role="menuitem" class="menuLink" data-reactid=".ww89jdl728.1.0.7.0.1.0.1.1.0.8"><a href="/quotes/list?ref=nav_profile_quotes" class="siteHeader__subNavLink" data-reactid=".ww89jdl728.1.0.7.0.1.0.1.1.0.8.0">Quotes</a></li><li role="menuitem" class="menuLink" data-reactid=".ww89jdl728.1.0.7.0.1.0.1.1.0.9"><a href="/user/edit_fav_genres?ref=nav_profile_favgenre&amp;return_url=%2Fbook%2Fshow%2F12996.Othello%3Fac%3D1%26from_search%3Dtrue%26qid%3DGSbtI3R7Hp%26rank%3D1" class="siteHeader__subNavLink" data-reactid=".ww89jdl728.1.0.7.0.1.0.1.1.0.9.0">Favorite genres</a></li><li role="menuitem" class="menuLink" data-reactid=".ww89jdl728.1.0.7.0.1.0.1.1.0.a"><span data-reactid=".ww89jdl728.1.0.7.0.1.0.1.1.0.a.0"><a href="/recommendations/to_me?ref=nav_profile_friendrec" class="siteHeader__subNavLink" data-reactid=".ww89jdl728.1.0.7.0.1.0.1.1.0.a.0.0"><span data-reactid=".ww89jdl728.1.0.7.0.1.0.1.1.0.a.0.0.0">Friends’ recommendations</span></a></span></li><li role="menuitem" class="menuLink" data-reactid=".ww89jdl728.1.0.7.0.1.0.1.1.0.b"><a href="/user/edit?ref=nav_profile_settings" class="siteHeader__subNavLink u-topGrayBorder" data-reactid=".ww89jdl728.1.0.7.0.1.0.1.1.0.b.0">Account settings</a></li><li role="menuitem" class="menuLink" data-reactid=".ww89jdl728.1.0.7.0.1.0.1.1.0.c"><a href="/help?action_type=help_nav_bar&amp;ref=nav_profile_help" class="siteHeader__subNavLink" data-reactid=".ww89jdl728.1.0.7.0.1.0.1.1.0.c.0">Help</a></li><li role="menuitem" class="menuLink" data-reactid=".ww89jdl728.1.0.7.0.1.0.1.1.0.d"><a href="/user/sign_out?ref=nav_profile_signout" class="siteHeader__subNavLink" data-method="POST" data-reactid=".ww89jdl728.1.0.7.0.1.0.1.1.0.d.0">Sign out</a></li></ul></div></div></div></div></div></div></div></div><div class="headroom-wrapper" data-reactid=".ww89jdl728.2"><div style="position:relative;top:0;left:0;right:0;z-index:1;-webkit-transform:translateY(0);-ms-transform:translateY(0);transform:translateY(0);" class="headroom headroom--unfixed" data-reactid=".ww89jdl728.2.0"><nav class="siteHeader__primaryNavSeparateLine gr-box gr-box--withShadow" data-reactid=".ww89jdl728.2.0.0"><ul role="menu" class="siteHeader__menuList" data-reactid=".ww89jdl728.2.0.0.0"><li class="siteHeader__topLevelItem siteHeader__topLevelItem--home" data-reactid=".ww89jdl728.2.0.0.0.0"><a href="/?ref=nav_home" class="siteHeader__topLevelLink" data-reactid=".ww89jdl728.2.0.0.0.0.0">Home</a></li><li class="siteHeader__topLevelItem" data-reactid=".ww89jdl728.2.0.0.0.1"><a href="/review/list/129148878?ref=nav_mybooks" class="siteHeader__topLevelLink" data-reactid=".ww89jdl728.2.0.0.0.1.0">My Books</a></li><li class="siteHeader__topLevelItem" data-reactid=".ww89jdl728.2.0.0.0.2"><div class="primaryNavMenu primaryNavMenu--siteHeaderBrowseMenu ignore-react-onclickoutside" data-reactid=".ww89jdl728.2.0.0.0.2.0"><a class="primaryNavMenu__trigger primaryNavMenu__trigger--siteHeaderBrowseMenu" href="/book?ref=nav_brws" role="button" aria-haspopup="true" aria-expanded="false" data-ux-click="true" data-reactid=".ww89jdl728.2.0.0.0.2.0.0"><span data-reactid=".ww89jdl728.2.0.0.0.2.0.0.0">Browse ▾</span></a><div class="primaryNavMenu__menu gr-box gr-box--withShadowLarge" role="menu" data-reactid=".ww89jdl728.2.0.0.0.2.0.1"><div class="siteHeader__browseMenuDropdown" data-reactid=".ww89jdl728.2.0.0.0.2.0.1.0"><ul class="siteHeader__subNav" data-reactid=".ww89jdl728.2.0.0.0.2.0.1.0.0"><li role="menuitem" class="menuLink" data-reactid=".ww89jdl728.2.0.0.0.2.0.1.0.0.0"><a href="/recommendations?ref=nav_brws_recs" class="siteHeader__subNavLink" data-reactid=".ww89jdl728.2.0.0.0.2.0.1.0.0.0.0">Recommendations</a></li><li role="menuitem" class="menuLink" data-reactid=".ww89jdl728.2.0.0.0.2.0.1.0.0.1"><a href="/choiceawards?ref=nav_brws_gca" class="siteHeader__subNavLink" data-reactid=".ww89jdl728.2.0.0.0.2.0.1.0.0.1.0">Choice Awards</a></li><li role="menuitem" class="menuLink" data-reactid=".ww89jdl728.2.0.0.0.2.0.1.0.0.2"><a href="/genres?ref=nav_brws_genres" class="siteHeader__subNavLink siteHeader__subNavLink--genresIndex" data-reactid=".ww89jdl728.2.0.0.0.2.0.1.0.0.2.0">Genres</a></li><li role="menuitem" class="menuLink" data-reactid=".ww89jdl728.2.0.0.0.2.0.1.0.0.3"><a href="/giveaway?ref=nav_brws_giveaways" class="siteHeader__subNavLink" data-reactid=".ww89jdl728.2.0.0.0.2.0.1.0.0.3.0">Giveaways</a></li><li role="menuitem" class="menuLink" data-reactid=".ww89jdl728.2.0.0.0.2.0.1.0.0.4"><a href="/new_releases?ref=nav_brws_newrels" class="siteHeader__subNavLink" data-reactid=".ww89jdl728.2.0.0.0.2.0.1.0.0.4.0">New Releases</a></li><li role="menuitem" class="menuLink" data-reactid=".ww89jdl728.2.0.0.0.2.0.1.0.0.5"><a href="/list?ref=nav_brws_lists" class="siteHeader__subNavLink" data-reactid=".ww89jdl728.2.0.0.0.2.0.1.0.0.5.0">Lists</a></li><li role="menuitem" class="menuLink" data-reactid=".ww89jdl728.2.0.0.0.2.0.1.0.0.6"><a href="/book?ref=nav_brws_explore" class="siteHeader__subNavLink" data-reactid=".ww89jdl728.2.0.0.0.2.0.1.0.0.6.0">Explore</a></li><li role="menuitem" class="menuLink" data-reactid=".ww89jdl728.2.0.0.0.2.0.1.0.0.7"><a href="/news?ref=nav_brws_news" class="siteHeader__subNavLink" data-reactid=".ww89jdl728.2.0.0.0.2.0.1.0.0.7.0">News &amp; Interviews</a></li></ul><div class="siteHeader__spotlight siteHeader__spotlight--browseMenu" data-reactid=".ww89jdl728.2.0.0.0.2.0.1.0.1"><div class="featuredGenres featuredGenres--sparse" data-reactid=".ww89jdl728.2.0.0.0.2.0.1.0.1.0"><div class="spinnerContainer" data-reactid=".ww89jdl728.2.0.0.0.2.0.1.0.1.0.0"><div class="spinner" data-reactid=".ww89jdl728.2.0.0.0.2.0.1.0.1.0.0.0"><div class="spinner__mask" data-reactid=".ww89jdl728.2.0.0.0.2.0.1.0.1.0.0.0.0"><div class="spinner__maskedCircle" data-reactid=".ww89jdl728.2.0.0.0.2.0.1.0.1.0.0.0.0.0"></div></div></div><div class="spinnerFallbackText" data-reactid=".ww89jdl728.2.0.0.0.2.0.1.0.1.0.0.1">Loading…</div></div></div></div></div></div></div></li><li class="siteHeader__topLevelItem siteHeader__topLevelItem--community" data-reactid=".ww89jdl728.2.0.0.0.3"><div class="primaryNavMenu ignore-react-onclickoutside" data-reactid=".ww89jdl728.2.0.0.0.3.0"><a class="primaryNavMenu__trigger" href="/group?ref=nav_comm" role="button" aria-haspopup="true" aria-expanded="false" data-ux-click="true" data-reactid=".ww89jdl728.2.0.0.0.3.0.0"><span data-reactid=".ww89jdl728.2.0.0.0.3.0.0.0">Community ▾</span></a><div class="primaryNavMenu__menu gr-box gr-box--withShadowLarge" role="menu" data-reactid=".ww89jdl728.2.0.0.0.3.0.1"><ul class="siteHeader__subNav" data-reactid=".ww89jdl728.2.0.0.0.3.0.1.0"><li role="menuitem" class="menuLink" data-reactid=".ww89jdl728.2.0.0.0.3.0.1.0.0"><a href="/group?ref=nav_comm_groups" class="siteHeader__subNavLink" data-reactid=".ww89jdl728.2.0.0.0.3.0.1.0.0.0">Groups</a></li><li role="menuitem" class="menuLink" data-reactid=".ww89jdl728.2.0.0.0.3.0.1.0.1"><a href="/topic?ref=nav_comm_discuss" class="siteHeader__subNavLink" data-reactid=".ww89jdl728.2.0.0.0.3.0.1.0.1.0">Discussions</a></li><li role="menuitem" class="menuLink" data-reactid=".ww89jdl728.2.0.0.0.3.0.1.0.2"><a href="/quotes?ref=nav_comm_quotes" class="siteHeader__subNavLink" data-reactid=".ww89jdl728.2.0.0.0.3.0.1.0.2.0">Quotes</a></li><li role="menuitem" class="menuLink" data-reactid=".ww89jdl728.2.0.0.0.3.0.1.0.3"><a href="/ask_the_author?ref=nav_comm_askauthor" class="siteHeader__subNavLink" data-reactid=".ww89jdl728.2.0.0.0.3.0.1.0.3.0">Ask the Author</a></li><li role="menuitem" class="menuLink" data-reactid=".ww89jdl728.2.0.0.0.3.0.1.0.4"><a href="/trivia?ref=nav_comm_trivia" class="siteHeader__subNavLink" data-reactid=".ww89jdl728.2.0.0.0.3.0.1.0.4.0">Trivia</a></li><li role="menuitem" class="menuLink" data-reactid=".ww89jdl728.2.0.0.0.3.0.1.0.5"><a href="/quizzes?ref=nav_comm_quiz" class="siteHeader__subNavLink" data-reactid=".ww89jdl728.2.0.0.0.3.0.1.0.5.0">Quizzes</a></li><li role="menuitem" class="menuLink" data-reactid=".ww89jdl728.2.0.0.0.3.0.1.0.6"><a href="/story?ref=nav_comm_cwriting" class="siteHeader__subNavLink" data-reactid=".ww89jdl728.2.0.0.0.3.0.1.0.6.0">Creative Writing</a></li><li role="menuitem" class="menuLink" data-reactid=".ww89jdl728.2.0.0.0.3.0.1.0.7"><a href="/user/best_reviewers?ref=nav_comm_people" class="siteHeader__subNavLink" data-reactid=".ww89jdl728.2.0.0.0.3.0.1.0.7.0">People</a></li><li role="menuitem" class="menuLink" data-reactid=".ww89jdl728.2.0.0.0.3.0.1.0.8"><a href="/event?ref=nav_comm_events" class="siteHeader__subNavLink" data-reactid=".ww89jdl728.2.0.0.0.3.0.1.0.8.0">Events</a></li></ul></div></div></li></ul></nav></div></div></header></div>
    </div>
    <div class='siteHeaderBottomSpacer'></div>



    <div class="mainContentContainer ">




        <div class="mainContent ">
<!--            <div id="premiumAdTop">-->
<!--                <div data-react-class="ReactComponents.GoogleBannerAd" data-react-props="{&quot;adId&quot;:&quot;div-gpt-ad-goodr-book-top-970x66&quot;,&quot;className&quot;:&quot;googleBannerAd--pushdown&quot;}"></div>-->
<!--            </div>-->

            <div class="mainContentFloat ">
<!--                <div id="flashContainer">-->
<!--                </div-->

                <div class="leftContainer" itemscope itemtype="http://schema.org/Book">
                    <div id="topcol" class="last col stacked">

                        <div id="imagecol" class="col">
                            <div class="bookCoverContainer">
                                <div class="bookCoverPrimary">
                                    <a rel="nofollow" itemprop="image" href="/book/photo/12996.Othello"><img id="coverImage" alt="Othello" src="<?php echo $image ?>" /></a>
                                </div>
                                <div class="bookCoverActions">
<!--                                    <div class="coverButtonContainer">-->
<!--                                        <div class="coverButton">-->
<!--                                            <a href="https://www.goodreads.com/work/editions/995103-the-tragedy-of-othello-the-moor-of-venice">Other editions</a>-->
<!--                                        </div>-->
<!--                                    </div>-->
                                    <div class="coverButtonContainer">
                                        <div class="coverButton enlargeCover" id="edition_12996_enlarge">
                                            Enlarge cover
                                        </div>
                                        <div class="editionCover" id="edition_12996_enlarge_cover" style= "display: none;">
                                            <img src="<?php echo $image ?>" alt="12996. sy475 " />
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class='wtrButtonContainer' id='1_book_12996'>
                                <div class='wtrUp wtrLeft'>
                                    <form action="/shelf/add_to_shelf" accept-charset="UTF-8" method="post"><input name="utf8" type="hidden" value="&#x2713;" /><input type="hidden" name="authenticity_token" value="Wd7NiVVkUFJA5+oFlzwp5fjcBzWddED6HBPwJ84SFK7Se3FmC27WlRe3M2B7FooXBmTiCcRKckGVAUlwgDun1g==" />
                                        <input type="hidden" name="book_id" id="book_id" value="12996" />
                                        <input type="hidden" name="name" id="name" value="to-read" />
                                        <input type="hidden" name="unique_id" id="unique_id" value="1_book_12996" />
                                        <input type="hidden" name="wtr_new" id="wtr_new" value="true" />
                                        <input type="hidden" name="from_choice" id="from_choice" value="false" />
                                        <input type="hidden" name="from_home_module" id="from_home_module" value="false" />
                                        <input type="hidden" name="ref" id="ref" value="bm_bsh_wtrwtr" class="wtrLeftUpRef" />
                                        <input type="hidden" name="existing_review" id="existing_review" value="false" class="wtrExisting" />
                                        <input type="hidden" name="page_referrer" id="page_referrer" value="https://www.goodreads.com/" />
                                        <input type="hidden" name="page_url" id="page_url" value="/book/show/12996.Othello" />
                                        <input type="hidden" name="qid" id="qid" value="GSbtI3R7Hp" />
                                        <input type="hidden" name="rank" id="rank" value="1" />
                                        <button class='wtrToRead' type='submit'>
                                            <span class='progressTrigger'>Want to Read</span>
                                            <span class='progressIndicator'>saving…</span>
                                        </button>
                                    </form>

                                </div>

                                <div class='wtrRight wtrUp'>
                                    <form class="hiddenShelfForm" action="/shelf/add_to_shelf" accept-charset="UTF-8" method="post"><input name="utf8" type="hidden" value="&#x2713;" /><input type="hidden" name="authenticity_token" value="jI62VND3YkDbkWMtsvryucVMAYsgMOShm2bbLHhlqrQHKwq7jv3kh4zBukhe0FFLO/Tkt3kO1hoSdGJ7NkwZzA==" />
                                        <input type="hidden" name="unique_id" id="unique_id" value="1_book_12996" />
                                        <input type="hidden" name="book_id" id="book_id" value="12996" />
                                        <input type="hidden" name="a" id="a" />
                                        <input type="hidden" name="name" id="name" />
                                        <input type="hidden" name="from_choice" id="from_choice" value="false" />
                                        <input type="hidden" name="ref" id="ref" value="bm_bsh_wtres" class="wtrRefRightShelfMenu" />
                                        <input type="hidden" name="existing_review" id="existing_review" value="false" class="wtrExisting" />
                                        <input type="hidden" name="from_home_module" id="from_home_module" value="false" />
                                        <input type="hidden" name="page_referrer" id="page_referrer" value="https://www.goodreads.com/" />
                                        <input type="hidden" name="page_url" id="page_url" value="/book/show/12996.Othello" />
                                        <input type="hidden" name="qid" id="qid" value="GSbtI3R7Hp" />
                                        <input type="hidden" name="rank" id="rank" value="1" />
                                    </form>

                                    <button class='wtrShelfButton'></button>
                                    <div class='wtrShelfMenu'>
                                        <div class='wtrShelfList'>
                                            <ul class='wtrExclusiveShelves'>
                                                <li data-shelf-name='read'>
                                                    <button class='wtrExclusiveShelf' name='name' type='submit' value='read'>
                                                        <span class='progressTrigger'>Read</span>
                                                        <img alt="saving…" class="progressIndicator" src="https://s.gr-assets.com/assets/loading-trans-ced157046184c3bc7c180ffbfc6825a4.gif" />
                                                    </button>

                                                </li>
                                                <li data-shelf-name='currently-reading'>
                                                    <button class='wtrExclusiveShelf' name='name' type='submit' value='currently-reading'>
                                                        <span class='progressTrigger'>Currently Reading</span>
                                                        <img alt="saving…" class="progressIndicator" src="https://s.gr-assets.com/assets/loading-trans-ced157046184c3bc7c180ffbfc6825a4.gif" />
                                                    </button>

                                                </li>
                                                <li data-shelf-name='to-read'>
                                                    <button class='wtrExclusiveShelf' name='name' type='submit' value='to-read'>
                                                        <span class='progressTrigger'>Want to Read</span>
                                                        <img alt="saving…" class="progressIndicator" src="https://s.gr-assets.com/assets/loading-trans-ced157046184c3bc7c180ffbfc6825a4.gif" />
                                                    </button>

                                                </li>
                                            </ul>
                                            <ul class='wtrNonExclusiveShelves'>
                                            </ul>
                                            <div class='wtrShelfSearchAddShelf'>
                                                <form autocomplete="off" action="https://www.goodreads.com/shelf/add_to_shelf" accept-charset="UTF-8" method="post"><input name="utf8" type="hidden" value="&#x2713;" /><input type="hidden" name="authenticity_token" value="uzQAE7hmLqKr2YIEDCpJj8G17jLdtCOaa6RKICEy3Mwwkbz85myoZfyJW2HgAOp9Pw0LDoSKESHitvN3bxtvtA==" />
                                                    <input type="hidden" name="unique_id" id="unique_id" />
                                                    <input type="hidden" name="book_id" id="book_id" />
                                                    <input type="hidden" name="ref" id="ref" value="bm_bsh_wtrnes" class="wtrShelfSearchAddRef" />
                                                    <input type="hidden" name="existing_review" id="existing_review" value="false" class="wtrExisting" />
                                                    <button class='progressTrigger' name='name' type='submit' value=''>
                                                        Add "<span class='wtrButtonLabelShelfName'></span>" Shelf
                                                    </button>
                                                    <img alt="saving…" class="progressIndicator" src="https://s.gr-assets.com/assets/loading-trans-ced157046184c3bc7c180ffbfc6825a4.gif" />
                                                </form>

                                            </div>
                                        </div>
                                        <div class='wtrOtherShelfOptions'>
                                            <label class="wtrExclusiveShelf wtrAddShelf" for="add_shelf_1_book_12996">Add shelf</label>
                                            <form class="wtrAddShelf gr-form gr-form--compact" autocomplete="off" action="https://www.goodreads.com/shelf/add_to_shelf" accept-charset="UTF-8" method="post"><input name="utf8" type="hidden" value="&#x2713;" /><input type="hidden" name="authenticity_token" value="UQLiO2h4omoMyAghBcmVaeNr2JyOfBoU2niwaqUySf7ap17UNnIkrVuY0UTp4zabHdM9oNdCKK9Tagk96xv6hg==" />
                                                <input type="hidden" name="unique_id" id="unique_id" />
                                                <input type="hidden" name="book_id" id="book_id" />
                                                <input type="hidden" name="ref" id="ref" value="bm_bsh_wtrnes" class="wtrAddSearchRef" />
                                                <input type="hidden" name="existing_review" id="existing_review" value="false" class="wtrExisting" />
                                                <input type="hidden" name="from_choice" id="from_choice" value="false" />
                                                <input type="text" name="name" id="add_shelf_1_book_12996" autocorrect="off" autocomplete="off" />
                                                <img alt="saving…" class="progressIndicator" src="https://s.gr-assets.com/assets/loading-trans-ced157046184c3bc7c180ffbfc6825a4.gif" />
                                                <button name="button" type="submit" class="gr-form--compact__submitButton progressTrigger">Add</button>
                                            </form>

                                        </div>
                                    </div>
                                </div>

                                <div class='ratingStars wtrRating'>
                                    <div class='starsErrorTooltip hidden'>
                                        Error rating book. Refresh and try again.
                                    </div>
                                    <div class='myRating uitext greyText'>Rate this book</div>
                                    <div class='clearRating uitext'>Clear rating</div>
                                    <div class="stars" data-resource-id="12996" data-user-id="129148878" data-submit-url="/review/rate/12996?page_referrer=https%3A%2F%2Fwww.goodreads.com%2F&page_url=%2Fbook%2Fshow%2F12996.Othello&qid=GSbtI3R7Hp&rank=1&stars_click=true&wtr_button_id=1_book_12996" data-rating="0">
                                        <a class="star off" title="did not like it" href="#" ref="bm_rtg_st1_bsh">
                                            1 of 5 stars
                                        </a>
                                        <a class="star off" title="it was ok" href="#" ref="bm_rtg_st2_bsh">
                                            2 of 5 stars
                                        </a>
                                        <a class="star off" title="liked it" href="#" ref="bm_rtg_st3_bsh">
                                            3 of 5 stars
                                        </a>
                                        <a class="star off" title="really liked it" href="#" ref="bm_rtg_st4_bsh">
                                            4 of 5 stars
                                        </a>
                                        <a class="star off" title="it was amazing" href="#" ref="bm_rtg_st5_bsh">
                                            5 of 5 stars
                                        </a>
                                    </div>
                                </div>

                            </div>



                            <div class=previewButtonContainer data-book-id=12996 >
                            </div>

                        </div>

                        <div id="metacol" class="last col">
                            <h1 id="bookTitle" class="gr-h1 gr-h1--serif" itemprop="name">
                                <?php echo $title?>
                            </h1>
                            <h2 id="bookSeries">
                            </h2>

                            <div id="bookAuthors" class="">
                                <span class='by'>
                                    by
                                </span>
                                <span itemprop='author' itemscope='' itemtype='http://schema.org/Person'>
                                    <div class='authorName__container'>
                                        <a class="authorName" itemprop="url" href="https://www.goodreads.com/author/show/947.William_Shakespeare">
                                            <span itemprop="name">
                                                <?php echo $author_name ?>
                                            </span>
                                        </a>
                                    </div>
                                </span>
                            </div>

                            <div id="bookMeta"
                                 class="uitext stacked"
                                 style="position: relative"
                                 itemprop="aggregateRating"
                                 itemscope
                                 itemtype="https://schema.org/AggregateRating">
                                <!--
                              Partial expects the following locals:
                                - review_stats
                                - shelving_stats
                                - display_user_id
                              -->

                                <span class="stars staticStars notranslate"><span size="12x12" class="staticStar p10"></span><span size="12x12" class="staticStar p10"></span><span size="12x12" class="staticStar p10"></span><span size="12x12" class="staticStar p6">

                                    </span>
                                    <span size="12x12" class="staticStar p0">

                                    </span>
                                </span>
                                <span itemprop="ratingValue">
                                    <?php echo $average_rating ?>
                                </span>
<!--                                <span class="greyText">&nbsp;&middot;&nbsp;</span>-->
<!--                                <a id="rating_details" class="actionLinkLite" style="cursor: pointer; " href="#" onclick="return false">Rating details</a>-->
<!--                                <script>-->
<!--                                    -->
<!--                                    var newTip = new Tip($('rating_details'), "\n    <div id=\"moreBookData\" class=\"bookMeta\" >\n  \n\n  \n\n<table border=\"0\" id=\"rating_distribution\" style=\"width: auto; max-width: 500px;\" cellspacing=\"5\" cellpadding=\"0\">\n      <tr>\n        <th width=\"25\" class=\"right\">5&nbsp;<a size=\"12x12\" class=\"staticStar p10\" style=\"float: right;\"><\/a><\/th>\n        <td width=\"350\">\n          <div style=\"display: block; background-color: #215625; width: 86%;\" title=\"101917 ratings\" data-remote=\"true\">&nbsp;<\/div>\n        <\/td>\n        <td width=\"90\">\n          31% (101917)\n        <\/td>\n      <\/tr>\n      <tr>\n        <th width=\"25\" class=\"right\">4&nbsp;<a size=\"12x12\" class=\"staticStar p10\" style=\"float: right;\"><\/a><\/th>\n        <td width=\"350\">\n          <div style=\"display: block; background-color: #215625; width: 100%;\" title=\"117158 ratings\" data-remote=\"true\">&nbsp;<\/div>\n        <\/td>\n        <td width=\"90\">\n          36% (117158)\n        <\/td>\n      <\/tr>\n      <tr>\n        <th width=\"25\" class=\"right\">3&nbsp;<a size=\"12x12\" class=\"staticStar p10\" style=\"float: right;\"><\/a><\/th>\n        <td width=\"350\">\n          <div style=\"display: block; background-color: #215625; width: 67%;\" title=\"78761 ratings\" data-remote=\"true\">&nbsp;<\/div>\n        <\/td>\n        <td width=\"90\">\n          24% (78761)\n        <\/td>\n      <\/tr>\n      <tr>\n        <th width=\"25\" class=\"right\">2&nbsp;<a size=\"12x12\" class=\"staticStar p10\" style=\"float: right;\"><\/a><\/th>\n        <td width=\"350\">\n          <div style=\"display: block; background-color: #215625; width: 17%;\" title=\"19921 ratings\" data-remote=\"true\">&nbsp;<\/div>\n        <\/td>\n        <td width=\"90\">\n          6% (19921)\n        <\/td>\n      <\/tr>\n      <tr>\n        <th width=\"25\" class=\"right\">1&nbsp;<a size=\"12x12\" class=\"staticStar p10\" style=\"float: right;\"><\/a><\/th>\n        <td width=\"350\">\n          <div style=\"display: block; background-color: #215625; width: 4%;\" title=\"5572 ratings\" data-remote=\"true\">&nbsp;<\/div>\n        <\/td>\n        <td width=\"90\">\n          1% (5572)\n        <\/td>\n      <\/tr>\n\n<\/table>\n\n\n    <span class=\"value\">92<\/span>% of people liked it\n\n  <table>\n    <tr>\n      <td><strong>All editions:<\/strong><\/td>\n      <td>\n        <span class=\"value\">3.9<\/span> average rating,\n        <span class=\"value\">323329<\/span> ratings,\n        <span class=\"value\">6648<\/span> reviews,\n        added by <span class=\"value\">522977<\/span> people,\n        <span class=\"value\">108953<\/span> to-reads\n      <\/td>\n    <\/tr>\n\n      <tr>\n        <td><strong>This edition:<\/strong><\/td>\n        <td>\n          <span class=\"value\">3.89<\/span> average rating,\n          <span class=\"value\">295780<\/span> ratings,\n          <span class=\"value\">4774<\/span> reviews,\n          added by <span class=\"value\">469350<\/span> people\n        <\/td>\n      <\/tr>\n  <\/table>\n<\/div>\n\n", { style: 'goodreads', stem: 'topMiddle', hook: { tip: 'topMiddle', target: 'bottomMiddle' }, offset: { x: 5, y: 5 }, hideOn: 'click', showOn: 'click', closeButton: true, title: 'Rating details' });-->
<!--                                    $('rating_details').observe('prototip:shown', function() {-->
<!--                                        if (this.up('#box')) {-->
<!--                                            $$('div.prototip').each(function(i){i.setStyle({zIndex: $('box').getStyle('z-index')})});-->
<!--                                        } else {-->
<!--                                            $$('div.prototip').each(function(i){i.setStyle({zIndex: 6000})});-->
<!--                                        }-->
<!--                                    });-->
<!--                                    $('rating_details').observe('prototip:hidden', function () {-->
<!--                                        $$('span.elementTwo').each(function (e) {-->
<!--                                            if (e.getStyle('display') !== 'none') {-->
<!--                                                var lessLink = e.next();-->
<!--                                                swapContent(lessLink);-->
<!--                                            }-->
<!--                                        });-->
<!--                                    });-->
<!--                                    -->
<!--                                </script>-->
<!--                                <span class="greyText">&nbsp;&middot;&nbsp;</span>-->
<!--                                <a class="gr-hyperlink" href="#other_reviews">-->
<!--                                    <meta itemprop="ratingCount" content="323329" />-->
<!--                                    323,329-->
<!--                                    ratings-->
<!--                                </a><span class="greyText">&nbsp;&middot;&nbsp;</span>-->
<!--                                <a class="gr-hyperlink" href="#other_reviews">-->
<!--                                    <meta itemprop="reviewCount" content="6648" />-->
<!--                                    6,648-->
<!--                                    reviews-->
<!--                                </a>-->
                            </div>

                            <div id="descriptionContainer">

                                <div id="description" class="readable stacked" style="right:0">

                                    <span id="freeTextContainer16394401686507852407">
                                        <?php echo $description ?>
<!--                                        In Othello, Shakespeare creates a powerful drama of a marriage that begins with fascination (between the exotic Moor Othello and the Venetian lady Desdemona), with elopement, and with intense mutual devotion and that ends precipitately with jealous rage and violent deaths. He sets this story in the romantic world of the Mediterranean, moving the action from Venice to the island of Cyprus and giving it an even more exotic coloring with stories of Othello's African past. Shakespeare builds so many differences into his hero and heroine—differences of race, of age, of cultural background—that one should not, perhaps, be surprised that the marriage ends disastrously. But most people who see or read the play feel that the love that the play presents between Othello and Desdemona is so strong that it would have overcome all these differences were it not for the words and actions of Othello's standard-bearer, Iago, who hates Othello and sets out to destroy him by destroying his love for Desdemona. As Othello succumbs to Iago's insinuations that Desdemona is unfaithful, fascination—which dominates the early acts of the play—turns to horror, especially for the audience. We are confronted by spectacles of a generous and trusting Othello in the grip of Iago's schemes; of an innocent Desdemona, who has given herself up entirely to her love for Othello only to be subjected to his horrifying verbal and physical assaults, the outcome of Othello's mistaken convictions about her faithlessness.-->
                                    </span>

<!--                                    <span id="freeText16394401686507852407" style="display:none">-->
<!--                                        --><?php //echo $description ?>
<!--                                        In Othello, Shakespeare creates a powerful drama of a marriage that begins with fascination (between the exotic Moor Othello and the Venetian lady Desdemona), with elopement, and with intense mutual devotion and that ends precipitately with jealous rage and violent deaths. He sets this story in the romantic world of the Mediterranean, moving the action from Venice to the island of Cyprus and giving it an even more exotic coloring with stories of Othello's African past. Shakespeare builds so many differences into his hero and heroine—differences of race, of age, of cultural background—that one should not, perhaps, be surprised that the marriage ends disastrously. But most people who see or read the play feel that the love that the play presents between Othello and Desdemona is so strong that it would have overcome all these differences were it not for the words and actions of Othello's standard-bearer, Iago, who hates Othello and sets out to destroy him by destroying his love for Desdemona. As Othello succumbs to Iago's insinuations that Desdemona is unfaithful, fascination—which dominates the early acts of the play—turns to horror, especially for the audience. We are confronted by spectacles of a generous and trusting Othello in the grip of Iago's schemes; of an innocent Desdemona, who has given herself up entirely to her love for Othello only to be subjected to his horrifying verbal and physical assaults, the outcome of Othello's mistaken convictions about her faithlessness.-->
<!--                                    </span>-->
<!--                                    <a data-text-id="16394401686507852407" href="#"-->
<!--                                       onclick="swapContent($(this));; return false;">-->
<!--                                            ...more-->
<!--                                    </a>-->

                                </div>
                            </div>

                            <div id=buyButtonContainer class="uitext buttons buyableFeature u-marginTopXSmall u-paddingBottomXSmall u-bottomGrayBorder" data-book-id=12996 >

                                <div class="u-positionRelative">
                                    <h2 class='buyButtonContainer__title u-inlineBlock'%>Get A Copy</h2>
                                </div>

                                <ul class="buyButtonBar left">
                                    <li>
                                        <a class="buttonBar" href="/ebooks/download/12996.Othello">
                                            Download eBook
                                        </a>
                                    </li>
                                </ul>
                                <div class="clear"></div>
                            </div>


                            <div id="details" class="uitext darkGreyText">
                                <div class="row">
                                    <span itemprop="bookFormat">
                                        Paperback
                                    </span>
                                    ,
                                    <span itemprop="numberOfPages">
                                        <?php echo $numberOfPages ?> pages
                                    </span>
                                </div>

                                <div class="row">
                                    Published
                                    by <?php echo $publisher ?>

                                </div>

                                <div class="buttons">
                                    <a id="bookDataBoxShow" class="left inter actionLinkLite" style="display: none;"
                                       href="#"
                                       onclick="$j(&#39;#bookDataBoxShow&#39;).hide();
                                       $j(&#39;#bookDataBoxHide&#39;).show();
                                       $j(&#39;#bookDataBox&#39;).show();
                                       savePreference(&#39;book_show_details_flag&#39;, 1);; return false;">
                                            More Details...
                                    </a>

                                    <div id="bookDataBox" class="uitext" style=" margin: 10px 0">

<!--                                        <div class="clearFloats">-->
<!--                                            <div class="infoBoxRowTitle">-->
<!--                                                Original Title-->
<!--                                            </div>-->
<!--                                            <div class="infoBoxRowItem">-->
<!--                                                --><?php //echo $title ?>
<!--                                            </div>-->
<!--                                        </div>-->
                                        <div class="clearFloats">
                                            <div class="infoBoxRowTitle">ISBN</div>
                                            <div class="infoBoxRowItem">
                                                <?php echo $ISBN ?>
                                            </div>
                                        </div>

<!--                                        <div class="clearFloats">-->
<!--                                            <div class="infoBoxRowTitle">Edition Language</div>-->
<!--                                            <div class="infoBoxRowItem" itemprop='inLanguage'>English</div>-->
<!--                                        </div>-->



<!--                                        <div class="clearFloats">-->
<!--                                            <div class="infoBoxRowTitle">Characters</div>-->
<!--                                            <div class="infoBoxRowItem">-->
<!--                                                <a href="/characters/888-iago">Iago</a>, <a href="/characters/49037-bianca">Bianca</a>, <a href="/characters/51178-othello">Othello</a>, <a href="/characters/51179-miguel-c-ssio">Miguel Cássio</a>, <a href="/characters/51180-desd-mona">Desdêmona</a><span class="toggleLink"><a hide_txt="...less" class="actionLinkLite" tag="span" id="more_show688" href="#" onclick="$j(&#39;#more688&#39;).show(); $j(&#39;#more_show688&#39;).hide();; return false;">...more</a></span><span id="more688" class="toggleContent" style="display: none">, <a href="/characters/51181-emilia">Emilia</a>, <a href="/characters/51182-rodrigo">Rodrigo</a><span class="toggleLink"><a hide_txt="...less" class="actionLinkLite hideLink" tag="span" href="#" onclick="$j(&#39;#more688&#39;).hide(); $j(&#39;#more_show688&#39;).show();; return false;">...less</a></span></span>-->
<!--                                            </div>-->
<!--                                        </div>-->

<!--                                        <div class="infoBoxRowTitle">Setting</div>-->
<!--                                        <div class="infoBoxRowItem">-->
<!--                                            <a href="/places/2318-venice">Venice</a>-->
<!--                                            <span class='darkGreyText'>-->
<!--(Italy)-->
<!--</span>-->
<!---->
<!--                                            <br>-->
<!--                                            <a href="/places/117-cyprus">Cyprus</a>-->
<!---->
<!--                                            <br>-->
<!--                                        </div>-->
<!--                                        <br class="clear">-->
<!---->
<!---->
<!--                                        <div class="clear"></div>-->

<!--                                        <div class='infoBoxRowTitle otherEditions'>-->
<!--                                            <div class='otherEditionsLink'>-->
<!--                                                <a href="/work/editions/995103-the-tragedy-of-othello-the-moor-of-venice">Other Editions (198)</a>-->
<!--                                            </div>-->
<!--                                        </div>-->

<!--                                        <div class='infoBoxRowItem'>-->
<!--                                            <div class='otherEditionsRow'>-->
<!--                                                <div class='otherEditionCovers'>-->
<!--                                                    <ul>-->
<!--                                                        <li>-->
<!--                                                            <div class='otherEdition' id='edition_265016'>-->
<!--                                                                <a href="https://www.goodreads.com/book/show/265016.Othello"><img alt="Othello" src="https://i.gr-assets.com/images/S/compressed.photo.goodreads.com/books/1348916709i/265016._UY200_.jpg" />-->
<!--                                                                </a><script>-->
<!--                                                                    //<![CDATA[-->
<!--                                                                    var newTip = new Tip($('edition_265016'), "<div class=\'editionTitle\'>\nOthello (Paperback) \n<\/div>\n<div class=\'editionInfo\'>\nisbn: 0521618762\n<\/div>\n<div class=\'editionInfo\'>\nisbn13: 9780521618762\n<\/div>\n<div class=\'editionInfo\'>\n<\/div>\n<div class=\'editionInfo\'>\nformat: Paperback\n<\/div>\n<div class=\'editionInfo\'>\nPublished\nDecember 19th 2005\nby Cambridge University Press\n<\/div>\n<div class=\'enlargeCover\' id=\'edition_265016_enlarge\'>\n<a>\nEnlarge cover\n<\/a>\n<\/div>\n<div class=\'editionCover\' id=\'edition_265016_enlarge_cover\' style=\'display: none;\'>\n<img src=\"https://i.gr-assets.com/images/S/compressed.photo.goodreads.com/books/1348916709l/265016.jpg\" alt=\"265016\" />\n<\/div>\n<div class=\'editionAction\'>\n<div class=\'wtrButtonContainer\' id=\'2_book_265016\'>\n<div class=\'wtrUp wtrLeft\'>\n<form action=\"/shelf/add_to_shelf\" accept-charset=\"UTF-8\" method=\"post\"><input name=\"utf8\" type=\"hidden\" value=\"&#x2713;\" /><input type=\"hidden\" name=\"authenticity_token\" value=\"c7yIg6e7fAjZ6sy7IhMiYYs56s3V9uxYP6mJrlCBB2f4GTRs+bH6z466Fd7OOYGTdYEP8YzI3uO2uzD5Hqi0Hw==\" />\n<input type=\"hidden\" name=\"book_id\" id=\"book_id\" value=\"265016\" />\n<input type=\"hidden\" name=\"name\" id=\"name\" value=\"to-read\" />\n<input type=\"hidden\" name=\"unique_id\" id=\"unique_id\" value=\"2_book_265016\" />\n<input type=\"hidden\" name=\"wtr_new\" id=\"wtr_new\" value=\"true\" />\n<input type=\"hidden\" name=\"from_choice\" id=\"from_choice\" value=\"false\" />\n<input type=\"hidden\" name=\"from_home_module\" id=\"from_home_module\" value=\"false\" />\n<input type=\"hidden\" name=\"ref\" id=\"ref\" value=\"\" class=\"wtrLeftUpRef\" />\n<input type=\"hidden\" name=\"existing_review\" id=\"existing_review\" value=\"false\" class=\"wtrExisting\" />\n<input type=\"hidden\" name=\"page_url\" id=\"page_url\" />\n<button class=\'wtrToRead\' type=\'submit\'>\n<span class=\'progressTrigger\'>Want to Read<\/span>\n<span class=\'progressIndicator\'>saving…<\/span>\n<\/button>\n<\/form>\n\n<\/div>\n\n<div class=\'wtrRight wtrUp\'>\n<form class=\"hiddenShelfForm\" action=\"/shelf/add_to_shelf\" accept-charset=\"UTF-8\" method=\"post\"><input name=\"utf8\" type=\"hidden\" value=\"&#x2713;\" /><input type=\"hidden\" name=\"authenticity_token\" value=\"AxiwFkwcWlBA1cmykK5KZ/2jYK++7CeAqywjOTZkGy6IvQz5EhbclxeFENd8hOmVAxuFk+fSFTsiPppueE2oVg==\" />\n<input type=\"hidden\" name=\"unique_id\" id=\"unique_id\" value=\"2_book_265016\" />\n<input type=\"hidden\" name=\"book_id\" id=\"book_id\" value=\"265016\" />\n<input type=\"hidden\" name=\"a\" id=\"a\" />\n<input type=\"hidden\" name=\"name\" id=\"name\" />\n<input type=\"hidden\" name=\"from_choice\" id=\"from_choice\" value=\"false\" />\n<input type=\"hidden\" name=\"from_home_module\" id=\"from_home_module\" value=\"false\" />\n<input type=\"hidden\" name=\"page_url\" id=\"page_url\" />\n<\/form>\n\n<button class=\'wtrShelfButton\'><\/button>\n<\/div>\n\n<div class=\'ratingStars wtrRating\'>\n<div class=\'starsErrorTooltip hidden\'>\nError rating book. Refresh and try again.\n<\/div>\n<div class=\'myRating uitext greyText\'>Rate this book<\/div>\n<div class=\'clearRating uitext\'>Clear rating<\/div>\n<div class=\"stars\" data-resource-id=\"265016\" data-user-id=\"129148878\" data-submit-url=\"/review/rate/265016?stars_click=true&wtr_button_id=2_book_265016\" data-rating=\"0\"><a class=\"star off\" title=\"did not like it\" href=\"#\" ref=\"\">1 of 5 stars<\/a><a class=\"star off\" title=\"it was ok\" href=\"#\" ref=\"\">2 of 5 stars<\/a><a class=\"star off\" title=\"liked it\" href=\"#\" ref=\"\">3 of 5 stars<\/a><a class=\"star off\" title=\"really liked it\" href=\"#\" ref=\"\">4 of 5 stars<\/a><a class=\"star off\" title=\"it was amazing\" href=\"#\" ref=\"\">5 of 5 stars<\/a><\/div>\n<\/div>\n\n<\/div>\n\n\n<\/div>\n\n", { style: 'addbook', stem: 'bottomMiddle', hook: { tip: 'bottomMiddle', target: 'topMiddle' }, offset: { y: -3, x: 0 }, hideOn: false, width: 325, hideAfter: 0.05 });-->
<!--                                                                    $('edition_265016').observe('prototip:shown', function() {-->
<!--                                                                        if (this.up('#box')) {-->
<!--                                                                            $$('div.prototip').each(function(i){i.setStyle({zIndex: $('box').getStyle('z-index')})});-->
<!--                                                                        } else {-->
<!--                                                                            $$('div.prototip').each(function(i){i.setStyle({zIndex: 6000})});-->
<!--                                                                        }-->
<!--                                                                    });-->
<!---->
<!--                                                                    newTip['wrapper'].addClassName('prototipAllowOverflow');-->
<!---->
<!--                                                                    $('edition_265016').observe('prototip:shown', function () {-->
<!--                                                                        $$('div.prototip').each(function (e) {-->
<!--                                                                            if ($('edition_265016').hasClassName('ignored')) {-->
<!--                                                                                e.setStyle({'display': 'none'});-->
<!--                                                                                return;-->
<!--                                                                            }-->
<!--                                                                            e.setStyle({'overflow': 'visible'});-->
<!--                                                                        });-->
<!--                                                                    });-->
<!--                                                                    $('edition_265016').observe('prototip:hidden', function () {-->
<!--                                                                        $$('span.elementTwo').each(function (e) {-->
<!--                                                                            if (e.getStyle('display') !== 'none') {-->
<!--                                                                                var lessLink = e.next();-->
<!--                                                                                swapContent(lessLink);-->
<!--                                                                            }-->
<!--                                                                        });-->
<!--                                                                    });-->
<!---->
<!--                                                                    //]]>-->
<!--                                                                </script></div>-->
<!--                                                        </li>-->
<!--                                                        <li>-->
<!--                                                            <div class='otherEdition' id='edition_63669'>-->
<!--                                                                <a href="https://www.goodreads.com/book/show/63669.Otelo"><img alt="Otelo" src="https://i.gr-assets.com/images/S/compressed.photo.goodreads.com/books/1414377639i/63669._UY200_.jpg" />-->
<!--                                                                </a><script>-->
<!--                                                                    //<![CDATA[-->
<!--                                                                    var newTip = new Tip($('edition_63669'), "<div class=\'editionTitle\'>\nOtelo (Paperback) \n<\/div>\n<div class=\'editionInfo\'>\nisbn: 8420659606\n<\/div>\n<div class=\'editionInfo\'>\nisbn13: 9788420659602\n<\/div>\n<div class=\'editionInfo\'>\n<\/div>\n<div class=\'editionInfo\'>\nformat: Paperback\n<\/div>\n<div class=\'editionInfo\'>\nPublished\nJune 30th 2005\nby Alianza Editorial\n<\/div>\n<div class=\'enlargeCover\' id=\'edition_63669_enlarge\'>\n<a>\nEnlarge cover\n<\/a>\n<\/div>\n<div class=\'editionCover\' id=\'edition_63669_enlarge_cover\' style=\'display: none;\'>\n<img src=\"https://i.gr-assets.com/images/S/compressed.photo.goodreads.com/books/1414377639l/63669.jpg\" alt=\"63669\" />\n<\/div>\n<div class=\'editionAction\'>\n<div class=\'wtrButtonContainer\' id=\'3_book_63669\'>\n<div class=\'wtrUp wtrLeft\'>\n<form action=\"/shelf/add_to_shelf\" accept-charset=\"UTF-8\" method=\"post\"><input name=\"utf8\" type=\"hidden\" value=\"&#x2713;\" /><input type=\"hidden\" name=\"authenticity_token\" value=\"l9DkSVHHa3ka2dihhalJV6NIuux9v+gAKwFPKQLJkbgcdVimD83tvk2JAcRpg+qlXfBf0CSB2ruiE/Z+TOAiwA==\" />\n<input type=\"hidden\" name=\"book_id\" id=\"book_id\" value=\"63669\" />\n<input type=\"hidden\" name=\"name\" id=\"name\" value=\"to-read\" />\n<input type=\"hidden\" name=\"unique_id\" id=\"unique_id\" value=\"3_book_63669\" />\n<input type=\"hidden\" name=\"wtr_new\" id=\"wtr_new\" value=\"true\" />\n<input type=\"hidden\" name=\"from_choice\" id=\"from_choice\" value=\"false\" />\n<input type=\"hidden\" name=\"from_home_module\" id=\"from_home_module\" value=\"false\" />\n<input type=\"hidden\" name=\"ref\" id=\"ref\" value=\"\" class=\"wtrLeftUpRef\" />\n<input type=\"hidden\" name=\"existing_review\" id=\"existing_review\" value=\"false\" class=\"wtrExisting\" />\n<input type=\"hidden\" name=\"page_url\" id=\"page_url\" />\n<button class=\'wtrToRead\' type=\'submit\'>\n<span class=\'progressTrigger\'>Want to Read<\/span>\n<span class=\'progressIndicator\'>saving…<\/span>\n<\/button>\n<\/form>\n\n<\/div>\n\n<div class=\'wtrRight wtrUp\'>\n<form class=\"hiddenShelfForm\" action=\"/shelf/add_to_shelf\" accept-charset=\"UTF-8\" method=\"post\"><input name=\"utf8\" type=\"hidden\" value=\"&#x2713;\" /><input type=\"hidden\" name=\"authenticity_token\" value=\"3FbE9eh4MC3NUdW9KlhN/GbJxLce46ILrA9Ymi5OlktX83gatnK26poBDNjGcu4OmHEhi0fdkLAlHeHNYGclMw==\" />\n<input type=\"hidden\" name=\"unique_id\" id=\"unique_id\" value=\"3_book_63669\" />\n<input type=\"hidden\" name=\"book_id\" id=\"book_id\" value=\"63669\" />\n<input type=\"hidden\" name=\"a\" id=\"a\" />\n<input type=\"hidden\" name=\"name\" id=\"name\" />\n<input type=\"hidden\" name=\"from_choice\" id=\"from_choice\" value=\"false\" />\n<input type=\"hidden\" name=\"from_home_module\" id=\"from_home_module\" value=\"false\" />\n<input type=\"hidden\" name=\"page_url\" id=\"page_url\" />\n<\/form>\n\n<button class=\'wtrShelfButton\'><\/button>\n<\/div>\n\n<div class=\'ratingStars wtrRating\'>\n<div class=\'starsErrorTooltip hidden\'>\nError rating book. Refresh and try again.\n<\/div>\n<div class=\'myRating uitext greyText\'>Rate this book<\/div>\n<div class=\'clearRating uitext\'>Clear rating<\/div>\n<div class=\"stars\" data-resource-id=\"63669\" data-user-id=\"129148878\" data-submit-url=\"/review/rate/63669?stars_click=true&wtr_button_id=3_book_63669\" data-rating=\"0\"><a class=\"star off\" title=\"did not like it\" href=\"#\" ref=\"\">1 of 5 stars<\/a><a class=\"star off\" title=\"it was ok\" href=\"#\" ref=\"\">2 of 5 stars<\/a><a class=\"star off\" title=\"liked it\" href=\"#\" ref=\"\">3 of 5 stars<\/a><a class=\"star off\" title=\"really liked it\" href=\"#\" ref=\"\">4 of 5 stars<\/a><a class=\"star off\" title=\"it was amazing\" href=\"#\" ref=\"\">5 of 5 stars<\/a><\/div>\n<\/div>\n\n<\/div>\n\n\n<\/div>\n\n", { style: 'addbook', stem: 'bottomMiddle', hook: { tip: 'bottomMiddle', target: 'topMiddle' }, offset: { y: -3, x: 0 }, hideOn: false, width: 325, hideAfter: 0.05 });-->
<!--                                                                    $('edition_63669').observe('prototip:shown', function() {-->
<!--                                                                        if (this.up('#box')) {-->
<!--                                                                            $$('div.prototip').each(function(i){i.setStyle({zIndex: $('box').getStyle('z-index')})});-->
<!--                                                                        } else {-->
<!--                                                                            $$('div.prototip').each(function(i){i.setStyle({zIndex: 6000})});-->
<!--                                                                        }-->
<!--                                                                    });-->
<!---->
<!--                                                                    newTip['wrapper'].addClassName('prototipAllowOverflow');-->
<!---->
<!--                                                                    $('edition_63669').observe('prototip:shown', function () {-->
<!--                                                                        $$('div.prototip').each(function (e) {-->
<!--                                                                            if ($('edition_63669').hasClassName('ignored')) {-->
<!--                                                                                e.setStyle({'display': 'none'});-->
<!--                                                                                return;-->
<!--                                                                            }-->
<!--                                                                            e.setStyle({'overflow': 'visible'});-->
<!--                                                                        });-->
<!--                                                                    });-->
<!--                                                                    $('edition_63669').observe('prototip:hidden', function () {-->
<!--                                                                        $$('span.elementTwo').each(function (e) {-->
<!--                                                                            if (e.getStyle('display') !== 'none') {-->
<!--                                                                                var lessLink = e.next();-->
<!--                                                                                swapContent(lessLink);-->
<!--                                                                            }-->
<!--                                                                        });-->
<!--                                                                    });-->
<!---->
<!--                                                                    //]]>-->
<!--                                                                </script></div>-->
<!--                                                        </li>-->
<!--                                                        <li>-->
<!--                                                            <div class='otherEdition' id='edition_18601166'>-->
<!--                                                                <a href="https://www.goodreads.com/book/show/18601166-othello"><img alt="Othello" src="https://i.gr-assets.com/images/S/compressed.photo.goodreads.com/books/1384802673i/18601166._UY200_.jpg" />-->
<!--                                                                </a><script>-->
<!--                                                                    //<![CDATA[-->
<!--                                                                    var newTip = new Tip($('edition_18601166'), "<div class=\'editionTitle\'>\nOthello (Kindle Edition) \n<\/div>\n<div class=\'editionInfo\'>\n<\/div>\n<div class=\'editionInfo\'>\n<\/div>\n<div class=\'editionInfo\'>\nasin: B00847TGNI\n<\/div>\n<div class=\'editionInfo\'>\nformat: Kindle Edition\n<\/div>\n<div class=\'editionInfo\'>\nPublished\nMay 17th 2012\nby \n<\/div>\n<div class=\'enlargeCover\' id=\'edition_18601166_enlarge\'>\n<a>\nEnlarge cover\n<\/a>\n<\/div>\n<div class=\'editionCover\' id=\'edition_18601166_enlarge_cover\' style=\'display: none;\'>\n<img src=\"https://i.gr-assets.com/images/S/compressed.photo.goodreads.com/books/1384802673l/18601166.jpg\" alt=\"18601166\" />\n<\/div>\n<div class=\'editionAction\'>\n<div class=\'wtrButtonContainer\' id=\'4_book_18601166\'>\n<div class=\'wtrUp wtrLeft\'>\n<form action=\"/shelf/add_to_shelf\" accept-charset=\"UTF-8\" method=\"post\"><input name=\"utf8\" type=\"hidden\" value=\"&#x2713;\" /><input type=\"hidden\" name=\"authenticity_token\" value=\"PofEm6jiuDsMvNahp5Q4k37i9K+n41GoKfgpxYMSrku1Inh09ug+/FvsD8RLvpthgFoRk/7dYxOg6pCSzTsdMw==\" />\n<input type=\"hidden\" name=\"book_id\" id=\"book_id\" value=\"18601166\" />\n<input type=\"hidden\" name=\"name\" id=\"name\" value=\"to-read\" />\n<input type=\"hidden\" name=\"unique_id\" id=\"unique_id\" value=\"4_book_18601166\" />\n<input type=\"hidden\" name=\"wtr_new\" id=\"wtr_new\" value=\"true\" />\n<input type=\"hidden\" name=\"from_choice\" id=\"from_choice\" value=\"false\" />\n<input type=\"hidden\" name=\"from_home_module\" id=\"from_home_module\" value=\"false\" />\n<input type=\"hidden\" name=\"ref\" id=\"ref\" value=\"\" class=\"wtrLeftUpRef\" />\n<input type=\"hidden\" name=\"existing_review\" id=\"existing_review\" value=\"false\" class=\"wtrExisting\" />\n<input type=\"hidden\" name=\"page_url\" id=\"page_url\" />\n<button class=\'wtrToRead\' type=\'submit\'>\n<span class=\'progressTrigger\'>Want to Read<\/span>\n<span class=\'progressIndicator\'>saving…<\/span>\n<\/button>\n<\/form>\n\n<\/div>\n\n<div class=\'wtrRight wtrUp\'>\n<form class=\"hiddenShelfForm\" action=\"/shelf/add_to_shelf\" accept-charset=\"UTF-8\" method=\"post\"><input name=\"utf8\" type=\"hidden\" value=\"&#x2713;\" /><input type=\"hidden\" name=\"authenticity_token\" value=\"w4Aqroz4PHKq44oq/P35C2SbTLxQ3O9G1RmK0apVqu1IJZZB0vK6tf2zU08Q11r5miOpgAni3f1cCzOG5HwZlQ==\" />\n<input type=\"hidden\" name=\"unique_id\" id=\"unique_id\" value=\"4_book_18601166\" />\n<input type=\"hidden\" name=\"book_id\" id=\"book_id\" value=\"18601166\" />\n<input type=\"hidden\" name=\"a\" id=\"a\" />\n<input type=\"hidden\" name=\"name\" id=\"name\" />\n<input type=\"hidden\" name=\"from_choice\" id=\"from_choice\" value=\"false\" />\n<input type=\"hidden\" name=\"from_home_module\" id=\"from_home_module\" value=\"false\" />\n<input type=\"hidden\" name=\"page_url\" id=\"page_url\" />\n<\/form>\n\n<button class=\'wtrShelfButton\'><\/button>\n<\/div>\n\n<div class=\'ratingStars wtrRating\'>\n<div class=\'starsErrorTooltip hidden\'>\nError rating book. Refresh and try again.\n<\/div>\n<div class=\'myRating uitext greyText\'>Rate this book<\/div>\n<div class=\'clearRating uitext\'>Clear rating<\/div>\n<div class=\"stars\" data-resource-id=\"18601166\" data-user-id=\"129148878\" data-submit-url=\"/review/rate/18601166?stars_click=true&wtr_button_id=4_book_18601166\" data-rating=\"0\"><a class=\"star off\" title=\"did not like it\" href=\"#\" ref=\"\">1 of 5 stars<\/a><a class=\"star off\" title=\"it was ok\" href=\"#\" ref=\"\">2 of 5 stars<\/a><a class=\"star off\" title=\"liked it\" href=\"#\" ref=\"\">3 of 5 stars<\/a><a class=\"star off\" title=\"really liked it\" href=\"#\" ref=\"\">4 of 5 stars<\/a><a class=\"star off\" title=\"it was amazing\" href=\"#\" ref=\"\">5 of 5 stars<\/a><\/div>\n<\/div>\n\n<\/div>\n\n\n<\/div>\n\n", { style: 'addbook', stem: 'bottomMiddle', hook: { tip: 'bottomMiddle', target: 'topMiddle' }, offset: { y: -3, x: 0 }, hideOn: false, width: 325, hideAfter: 0.05 });-->
<!--                                                                    $('edition_18601166').observe('prototip:shown', function() {-->
<!--                                                                        if (this.up('#box')) {-->
<!--                                                                            $$('div.prototip').each(function(i){i.setStyle({zIndex: $('box').getStyle('z-index')})});-->
<!--                                                                        } else {-->
<!--                                                                            $$('div.prototip').each(function(i){i.setStyle({zIndex: 6000})});-->
<!--                                                                        }-->
<!--                                                                    });-->
<!---->
<!--                                                                    newTip['wrapper'].addClassName('prototipAllowOverflow');-->
<!---->
<!--                                                                    $('edition_18601166').observe('prototip:shown', function () {-->
<!--                                                                        $$('div.prototip').each(function (e) {-->
<!--                                                                            if ($('edition_18601166').hasClassName('ignored')) {-->
<!--                                                                                e.setStyle({'display': 'none'});-->
<!--                                                                                return;-->
<!--                                                                            }-->
<!--                                                                            e.setStyle({'overflow': 'visible'});-->
<!--                                                                        });-->
<!--                                                                    });-->
<!--                                                                    $('edition_18601166').observe('prototip:hidden', function () {-->
<!--                                                                        $$('span.elementTwo').each(function (e) {-->
<!--                                                                            if (e.getStyle('display') !== 'none') {-->
<!--                                                                                var lessLink = e.next();-->
<!--                                                                                swapContent(lessLink);-->
<!--                                                                            }-->
<!--                                                                        });-->
<!--                                                                    });-->
<!---->
<!--                                                                    //]]>-->
<!--                                                                </script></div>-->
<!--                                                        </li>-->
<!--                                                        <li>-->
<!--                                                            <div class='otherEdition' id='edition_9720492'>-->
<!--                                                                <a href="https://www.goodreads.com/book/show/9720492-otello"><img alt="Otello" src="https://i.gr-assets.com/images/S/compressed.photo.goodreads.com/books/1290015276i/9720492._UY200_.jpg" />-->
<!--                                                                </a><script>-->
<!--                                                                    //<![CDATA[-->
<!--                                                                    var newTip = new Tip($('edition_9720492'), "<div class=\'editionTitle\'>\nOtello (Paperback) \n<\/div>\n<div class=\'editionInfo\'>\nisbn: 8804509384\n<\/div>\n<div class=\'editionInfo\'>\nisbn13: 9788804509387\n<\/div>\n<div class=\'editionInfo\'>\n<\/div>\n<div class=\'editionInfo\'>\nformat: Paperback\n<\/div>\n<div class=\'editionInfo\'>\nPublished\n2002\nby Mondadori\n<\/div>\n<div class=\'enlargeCover\' id=\'edition_9720492_enlarge\'>\n<a>\nEnlarge cover\n<\/a>\n<\/div>\n<div class=\'editionCover\' id=\'edition_9720492_enlarge_cover\' style=\'display: none;\'>\n<img src=\"https://i.gr-assets.com/images/S/compressed.photo.goodreads.com/books/1290015276l/9720492.jpg\" alt=\"9720492\" />\n<\/div>\n<div class=\'editionAction\'>\n<div class=\'wtrButtonContainer\' id=\'5_book_9720492\'>\n<div class=\'wtrUp wtrLeft\'>\n<form action=\"/shelf/add_to_shelf\" accept-charset=\"UTF-8\" method=\"post\"><input name=\"utf8\" type=\"hidden\" value=\"&#x2713;\" /><input type=\"hidden\" name=\"authenticity_token\" value=\"vyFk4tzxfS8gLbnMK2tcBZ+DLcb7Rsb3BdudBpJhfYw0hNgNgvv76Hd9YKnHQf/3YTvI+qJ49EyMySRR3EjO9A==\" />\n<input type=\"hidden\" name=\"book_id\" id=\"book_id\" value=\"9720492\" />\n<input type=\"hidden\" name=\"name\" id=\"name\" value=\"to-read\" />\n<input type=\"hidden\" name=\"unique_id\" id=\"unique_id\" value=\"5_book_9720492\" />\n<input type=\"hidden\" name=\"wtr_new\" id=\"wtr_new\" value=\"true\" />\n<input type=\"hidden\" name=\"from_choice\" id=\"from_choice\" value=\"false\" />\n<input type=\"hidden\" name=\"from_home_module\" id=\"from_home_module\" value=\"false\" />\n<input type=\"hidden\" name=\"ref\" id=\"ref\" value=\"\" class=\"wtrLeftUpRef\" />\n<input type=\"hidden\" name=\"existing_review\" id=\"existing_review\" value=\"false\" class=\"wtrExisting\" />\n<input type=\"hidden\" name=\"page_url\" id=\"page_url\" />\n<button class=\'wtrToRead\' type=\'submit\'>\n<span class=\'progressTrigger\'>Want to Read<\/span>\n<span class=\'progressIndicator\'>saving…<\/span>\n<\/button>\n<\/form>\n\n<\/div>\n\n<div class=\'wtrRight wtrUp\'>\n<form class=\"hiddenShelfForm\" action=\"/shelf/add_to_shelf\" accept-charset=\"UTF-8\" method=\"post\"><input name=\"utf8\" type=\"hidden\" value=\"&#x2713;\" /><input type=\"hidden\" name=\"authenticity_token\" value=\"YB/tkTU6c/pGr4HQNdEGD26ntVB0cnsYFjyPGetxqcXrulF+azD1PRH/WLXZ+6X9kB9QbC1MSaOfLjZOpVgavQ==\" />\n<input type=\"hidden\" name=\"unique_id\" id=\"unique_id\" value=\"5_book_9720492\" />\n<input type=\"hidden\" name=\"book_id\" id=\"book_id\" value=\"9720492\" />\n<input type=\"hidden\" name=\"a\" id=\"a\" />\n<input type=\"hidden\" name=\"name\" id=\"name\" />\n<input type=\"hidden\" name=\"from_choice\" id=\"from_choice\" value=\"false\" />\n<input type=\"hidden\" name=\"from_home_module\" id=\"from_home_module\" value=\"false\" />\n<input type=\"hidden\" name=\"page_url\" id=\"page_url\" />\n<\/form>\n\n<button class=\'wtrShelfButton\'><\/button>\n<\/div>\n\n<div class=\'ratingStars wtrRating\'>\n<div class=\'starsErrorTooltip hidden\'>\nError rating book. Refresh and try again.\n<\/div>\n<div class=\'myRating uitext greyText\'>Rate this book<\/div>\n<div class=\'clearRating uitext\'>Clear rating<\/div>\n<div class=\"stars\" data-resource-id=\"9720492\" data-user-id=\"129148878\" data-submit-url=\"/review/rate/9720492?stars_click=true&wtr_button_id=5_book_9720492\" data-rating=\"0\"><a class=\"star off\" title=\"did not like it\" href=\"#\" ref=\"\">1 of 5 stars<\/a><a class=\"star off\" title=\"it was ok\" href=\"#\" ref=\"\">2 of 5 stars<\/a><a class=\"star off\" title=\"liked it\" href=\"#\" ref=\"\">3 of 5 stars<\/a><a class=\"star off\" title=\"really liked it\" href=\"#\" ref=\"\">4 of 5 stars<\/a><a class=\"star off\" title=\"it was amazing\" href=\"#\" ref=\"\">5 of 5 stars<\/a><\/div>\n<\/div>\n\n<\/div>\n\n\n<\/div>\n\n", { style: 'addbook', stem: 'bottomMiddle', hook: { tip: 'bottomMiddle', target: 'topMiddle' }, offset: { y: -3, x: 0 }, hideOn: false, width: 325, hideAfter: 0.05 });-->
<!--                                                                    $('edition_9720492').observe('prototip:shown', function() {-->
<!--                                                                        if (this.up('#box')) {-->
<!--                                                                            $$('div.prototip').each(function(i){i.setStyle({zIndex: $('box').getStyle('z-index')})});-->
<!--                                                                        } else {-->
<!--                                                                            $$('div.prototip').each(function(i){i.setStyle({zIndex: 6000})});-->
<!--                                                                        }-->
<!--                                                                    });-->
<!---->
<!--                                                                    newTip['wrapper'].addClassName('prototipAllowOverflow');-->
<!---->
<!--                                                                    $('edition_9720492').observe('prototip:shown', function () {-->
<!--                                                                        $$('div.prototip').each(function (e) {-->
<!--                                                                            if ($('edition_9720492').hasClassName('ignored')) {-->
<!--                                                                                e.setStyle({'display': 'none'});-->
<!--                                                                                return;-->
<!--                                                                            }-->
<!--                                                                            e.setStyle({'overflow': 'visible'});-->
<!--                                                                        });-->
<!--                                                                    });-->
<!--                                                                    $('edition_9720492').observe('prototip:hidden', function () {-->
<!--                                                                        $$('span.elementTwo').each(function (e) {-->
<!--                                                                            if (e.getStyle('display') !== 'none') {-->
<!--                                                                                var lessLink = e.next();-->
<!--                                                                                swapContent(lessLink);-->
<!--                                                                            }-->
<!--                                                                        });-->
<!--                                                                    });-->
<!---->
<!--                                                                    //]]>-->
<!--                                                                </script></div>-->
<!--                                                        </li>-->
<!--                                                        <li>-->
<!--                                                            <div class='otherEdition' id='edition_332492'>-->
<!--                                                                <a href="https://www.goodreads.com/book/show/332492.Othello"><img alt="Othello" src="https://i.gr-assets.com/images/S/compressed.photo.goodreads.com/books/1317068763i/332492._UY200_.jpg" />-->
<!--                                                                </a><script>-->
<!--                                                                    //<![CDATA[-->
<!--                                                                    var newTip = new Tip($('edition_332492'), "<div class=\'editionTitle\'>\nOthello (Paperback) \n<\/div>\n<div class=\'editionInfo\'>\nisbn: 1903436451\n<\/div>\n<div class=\'editionInfo\'>\nisbn13: 9781903436455\n<\/div>\n<div class=\'editionInfo\'>\n<\/div>\n<div class=\'editionInfo\'>\nformat: Paperback\n<\/div>\n<div class=\'editionInfo\'>\nPublished\nOctober 24th 1996\nby Bloomsbury Arden Shakespeare\n<\/div>\n<div class=\'enlargeCover\' id=\'edition_332492_enlarge\'>\n<a>\nEnlarge cover\n<\/a>\n<\/div>\n<div class=\'editionCover\' id=\'edition_332492_enlarge_cover\' style=\'display: none;\'>\n<img src=\"https://i.gr-assets.com/images/S/compressed.photo.goodreads.com/books/1317068763l/332492.jpg\" alt=\"332492\" />\n<\/div>\n<div class=\'editionAction\'>\n<div class=\'wtrButtonContainer\' id=\'6_book_332492\'>\n<div class=\'wtrUp wtrLeft\'>\n<form action=\"/shelf/add_to_shelf\" accept-charset=\"UTF-8\" method=\"post\"><input name=\"utf8\" type=\"hidden\" value=\"&#x2713;\" /><input type=\"hidden\" name=\"authenticity_token\" value=\"EGD4EryfIYlElKrskxo/Ys48QMAYlqMQLi5h/DmNgMmbxUT94pWnThPEc4l/MJyQMISl/EGokaunPNird6QzsQ==\" />\n<input type=\"hidden\" name=\"book_id\" id=\"book_id\" value=\"332492\" />\n<input type=\"hidden\" name=\"name\" id=\"name\" value=\"to-read\" />\n<input type=\"hidden\" name=\"unique_id\" id=\"unique_id\" value=\"6_book_332492\" />\n<input type=\"hidden\" name=\"wtr_new\" id=\"wtr_new\" value=\"true\" />\n<input type=\"hidden\" name=\"from_choice\" id=\"from_choice\" value=\"false\" />\n<input type=\"hidden\" name=\"from_home_module\" id=\"from_home_module\" value=\"false\" />\n<input type=\"hidden\" name=\"ref\" id=\"ref\" value=\"\" class=\"wtrLeftUpRef\" />\n<input type=\"hidden\" name=\"existing_review\" id=\"existing_review\" value=\"false\" class=\"wtrExisting\" />\n<input type=\"hidden\" name=\"page_url\" id=\"page_url\" />\n<button class=\'wtrToRead\' type=\'submit\'>\n<span class=\'progressTrigger\'>Want to Read<\/span>\n<span class=\'progressIndicator\'>saving…<\/span>\n<\/button>\n<\/form>\n\n<\/div>\n\n<div class=\'wtrRight wtrUp\'>\n<form class=\"hiddenShelfForm\" action=\"/shelf/add_to_shelf\" accept-charset=\"UTF-8\" method=\"post\"><input name=\"utf8\" type=\"hidden\" value=\"&#x2713;\" /><input type=\"hidden\" name=\"authenticity_token\" value=\"hUhnEn1IT9F0mybhpQ29oSK1nqkdpIXmb7R+RhL+tS4O7dv9I0LJFiPL/4RJJx5T3A17lUSat13mpscRXNcGVg==\" />\n<input type=\"hidden\" name=\"unique_id\" id=\"unique_id\" value=\"6_book_332492\" />\n<input type=\"hidden\" name=\"book_id\" id=\"book_id\" value=\"332492\" />\n<input type=\"hidden\" name=\"a\" id=\"a\" />\n<input type=\"hidden\" name=\"name\" id=\"name\" />\n<input type=\"hidden\" name=\"from_choice\" id=\"from_choice\" value=\"false\" />\n<input type=\"hidden\" name=\"from_home_module\" id=\"from_home_module\" value=\"false\" />\n<input type=\"hidden\" name=\"page_url\" id=\"page_url\" />\n<\/form>\n\n<button class=\'wtrShelfButton\'><\/button>\n<\/div>\n\n<div class=\'ratingStars wtrRating\'>\n<div class=\'starsErrorTooltip hidden\'>\nError rating book. Refresh and try again.\n<\/div>\n<div class=\'myRating uitext greyText\'>Rate this book<\/div>\n<div class=\'clearRating uitext\'>Clear rating<\/div>\n<div class=\"stars\" data-resource-id=\"332492\" data-user-id=\"129148878\" data-submit-url=\"/review/rate/332492?stars_click=true&wtr_button_id=6_book_332492\" data-rating=\"0\"><a class=\"star off\" title=\"did not like it\" href=\"#\" ref=\"\">1 of 5 stars<\/a><a class=\"star off\" title=\"it was ok\" href=\"#\" ref=\"\">2 of 5 stars<\/a><a class=\"star off\" title=\"liked it\" href=\"#\" ref=\"\">3 of 5 stars<\/a><a class=\"star off\" title=\"really liked it\" href=\"#\" ref=\"\">4 of 5 stars<\/a><a class=\"star off\" title=\"it was amazing\" href=\"#\" ref=\"\">5 of 5 stars<\/a><\/div>\n<\/div>\n\n<\/div>\n\n\n<\/div>\n\n", { style: 'addbook', stem: 'bottomMiddle', hook: { tip: 'bottomMiddle', target: 'topMiddle' }, offset: { y: -3, x: 0 }, hideOn: false, width: 325, hideAfter: 0.05 });-->
<!--                                                                    $('edition_332492').observe('prototip:shown', function() {-->
<!--                                                                        if (this.up('#box')) {-->
<!--                                                                            $$('div.prototip').each(function(i){i.setStyle({zIndex: $('box').getStyle('z-index')})});-->
<!--                                                                        } else {-->
<!--                                                                            $$('div.prototip').each(function(i){i.setStyle({zIndex: 6000})});-->
<!--                                                                        }-->
<!--                                                                    });-->
<!---->
<!--                                                                    newTip['wrapper'].addClassName('prototipAllowOverflow');-->
<!---->
<!--                                                                    $('edition_332492').observe('prototip:shown', function () {-->
<!--                                                                        $$('div.prototip').each(function (e) {-->
<!--                                                                            if ($('edition_332492').hasClassName('ignored')) {-->
<!--                                                                                e.setStyle({'display': 'none'});-->
<!--                                                                                return;-->
<!--                                                                            }-->
<!--                                                                            e.setStyle({'overflow': 'visible'});-->
<!--                                                                        });-->
<!--                                                                    });-->
<!--                                                                    $('edition_332492').observe('prototip:hidden', function () {-->
<!--                                                                        $$('span.elementTwo').each(function (e) {-->
<!--                                                                            if (e.getStyle('display') !== 'none') {-->
<!--                                                                                var lessLink = e.next();-->
<!--                                                                                swapContent(lessLink);-->
<!--                                                                            }-->
<!--                                                                        });-->
<!--                                                                    });-->
<!---->
<!--                                                                    //]]>-->
<!--                                                                </script></div>-->
<!--                                                        </li>-->
<!--                                                    </ul>-->
<!--                                                </div>-->
<!--                                            </div>-->
<!--                                            <div class='otherEditionsActions'>-->
<!--                                                <a class="actionLinkLite" href="/work/editions/995103-the-tragedy-of-othello-the-moor-of-venice">All Editions</a>-->
<!--                                                <span class='greyText'>-->
<!-- |-->
<!--</span>-->
<!--                                                <a rel="nofollow" href="/book/new?author%5Bname%5D=William+Shakespeare&amp;book%5Btitle%5D=Othello&amp;work%5Bid%5D=995103">Add a New Edition</a>-->
<!---->
<!--                                                <span class='secondaryCopy'>-->
<!-- |-->
<!--</span>-->
<!--                                                <a rel="nofollow" class="actionLinkLite" href="/book/combine/947">Combine</a>-->
<!--                                            </div>-->
<!--                                        </div>-->


                                    </div>

<!--                                    <a id="bookDataBoxHide" class="left inter actionLinkLite" style="" href="#" onclick="$j(&#39;#bookDataBoxShow&#39;).show(); $j(&#39;#bookDataBoxHide&#39;).hide(); $j(&#39;#bookDataBox&#39;).hide();-->
<!--                              savePreference(&#39;book_show_details_flag&#39;, 0);; return false;">...Less Detail</a>-->
<!---->
<!--                                    <a class="inter uitext greyText right" rel="nofollow" href="/book/edit/12996.Othello">Edit Details</a>-->
<!---->
<!--                                    <div class="clear"></div>-->
                                </div>
                            </div>


                        </div>

                        <div class="clear"></div>
                    </div>
                    <div class="clear"></div>





                    <div id='lazy_loadable_view'>
                        <img class="pageLoadingAnimation" src="https://s.gr-assets.com/assets/loading_big-5baaead7062b26142a19d19a9bccf5c2.gif" alt="Loading big" />
                    </div>


                </div>

                <div class="rightContainer">


<!--                    <div data-react-class="ReactComponents.ShareDialog" data-react-props="{&quot;signedIn&quot;:true,&quot;signInUrl&quot;:&quot;/user/sign_in&quot;,&quot;social&quot;:{&quot;inModal&quot;:{&quot;facebook&quot;:true,&quot;twitter&quot;:true,&quot;pinterest&quot;:true,&quot;copyLink&quot;:false},&quot;outsideModal&quot;:{&quot;facebook&quot;:true,&quot;twitter&quot;:true,&quot;pinterest&quot;:true,&quot;copyLink&quot;:false},&quot;fbOptions&quot;:{&quot;name&quot;:&quot;Othello by William Shakespeare&quot;,&quot;caption&quot;:&quot;goodreads.com&quot;,&quot;description&quot;:&quot;&quot;,&quot;link&quot;:&quot;https://www.goodreads.com/book/show/12996.Othello&quot;,&quot;picture&quot;:&quot;https://i.gr-assets.com/images/S/compressed.photo.goodreads.com/books/1459795105l/12996._SY75_.jpg&quot;},&quot;twitterOptions&quot;:{&quot;text&quot;:&quot;Othello by William Shakespeare&quot;,&quot;url&quot;:&quot;https://www.goodreads.com/book/show/12996.Othello&quot;,&quot;via&quot;:&quot;goodreads&quot;},&quot;pinterestOptions&quot;:{&quot;description&quot;:&quot;Othello by William Shakespeare&quot;,&quot;url&quot;:&quot;https://www.goodreads.com/book/show/12996.Othello&quot;,&quot;media&quot;:&quot;https://i.gr-assets.com/images/S/compressed.photo.goodreads.com/books/1459795105l/12996._SY475_.jpg&quot;}},&quot;sharingData&quot;:{&quot;resourceTypeFriendlyText&quot;:&quot;book&quot;,&quot;resourceId&quot;:12996},&quot;includePreview&quot;:true,&quot;previewData&quot;:{&quot;author&quot;:{&quot;name&quot;:&quot;William Shakespeare&quot;,&quot;isGoodreadsAuthor&quot;:false},&quot;rating&quot;:&quot;3.90&quot;,&quot;title&quot;:&quot;Othello&quot;,&quot;imageUrl&quot;:&quot;https://i.gr-assets.com/images/S/compressed.photo.goodreads.com/books/1459795105i/12996._UX75_.jpg&quot;,&quot;ratingsCount&quot;:323329,&quot;textReviewsCount&quot;:6648}}"><div data-reactid=".lze4do5dkw" data-react-checksum="-800132874"><div class="modal modal--overlay" tabindex="0" data-reactid=".lze4do5dkw.0"><div class="modal__content modal__content--share" data-reactid=".lze4do5dkw.0.0"><div class="modal__close" data-reactid=".lze4do5dkw.0.0.0"><button type="button" class="gr-iconButton" data-reactid=".lze4do5dkw.0.0.0.0"><img alt="Dismiss" src="//s.gr-assets.com/assets/gr/icons/icon_close-63734f04e7baaa77fbad796225e5724c.svg" data-reactid=".lze4do5dkw.0.0.0.0.0"/></button></div><span class="shareModal" data-reactid=".lze4do5dkw.0.0.1"><h2 class="gr-h3 gr-h3--serif shareModal__heading" data-reactid=".lze4do5dkw.0.0.1.0"><span data-reactid=".lze4do5dkw.0.0.1.0.0">Share this </span><span data-reactid=".lze4do5dkw.0.0.1.0.1">book</span><span data-reactid=".lze4do5dkw.0.0.1.0.2"> on Goodreads</span></h2><textarea aria-label="Share text" placeholder="Say something about this book..." class="gr-textInput shareModal__textInput" data-reactid=".lze4do5dkw.0.0.1.2"></textarea><noscript data-reactid=".lze4do5dkw.0.0.1.3"></noscript><div class="gr-mediaFlexbox shareModal__previewContainer" data-reactid=".lze4do5dkw.0.0.1.4"><img class="gr-mediaFlexbox__media sharePreview__image" src="https://i.gr-assets.com/images/S/compressed.photo.goodreads.com/books/1459795105i/12996._UX75_.jpg" alt="Othello" data-reactid=".lze4do5dkw.0.0.1.4.0"/><div class="gr-mediaFlexbox__desc" data-reactid=".lze4do5dkw.0.0.1.4.1"><div class="gr-h3 gr-h3--serif gr-h3--noMargin" data-reactid=".lze4do5dkw.0.0.1.4.1.0">Othello</div><div class="sharePreview__secondaryText" data-reactid=".lze4do5dkw.0.0.1.4.1.1"><div data-reactid=".lze4do5dkw.0.0.1.4.1.1.0"><span data-reactid=".lze4do5dkw.0.0.1.4.1.1.0.0">by </span><span data-reactid=".lze4do5dkw.0.0.1.4.1.1.0.1">William Shakespeare</span><noscript data-reactid=".lze4do5dkw.0.0.1.4.1.1.0.2"></noscript></div></div><div class="u-marginTopXSmall" data-reactid=".lze4do5dkw.0.0.1.4.1.2"><div class="u-marginTopXSmall" data-reactid=".lze4do5dkw.0.0.1.4.1.2.0"><div class="communityRating" aria-label="Rated 3.90 of 5" data-reactid=".lze4do5dkw.0.0.1.4.1.2.0.0"><span data-reactid=".lze4do5dkw.0.0.1.4.1.2.0.0.0"><span data-reactid=".lze4do5dkw.0.0.1.4.1.2.0.0.0.$0"><span data-reactid=".lze4do5dkw.0.0.1.4.1.2.0.0.0.$0.0"><div class="communityRating__starsWrapper communityRating__starsWrapper--medium" data-reactid=".lze4do5dkw.0.0.1.4.1.2.0.0.0.$0.0.0"><div class="communityRating__stars communityRating__stars--medium" style="width:72%;" aria-label="Rated 3.90 of 5" data-reactid=".lze4do5dkw.0.0.1.4.1.2.0.0.0.$0.0.0.0"></div></div><span class="gr-metaText" data-reactid=".lze4do5dkw.0.0.1.4.1.2.0.0.0.$0.0.1"><span data-reactid=".lze4do5dkw.0.0.1.4.1.2.0.0.0.$0.0.1.0">3.90</span><span data-reactid=".lze4do5dkw.0.0.1.4.1.2.0.0.0.$0.0.1.1"></span></span></span></span><span data-reactid=".lze4do5dkw.0.0.1.4.1.2.0.0.0.$1"><span data-reactid=".lze4do5dkw.0.0.1.4.1.2.0.0.0.$1.0"> · </span></span><span data-reactid=".lze4do5dkw.0.0.1.4.1.2.0.0.0.$2"><span class="gr-metaText u-inlineBlock" data-reactid=".lze4do5dkw.0.0.1.4.1.2.0.0.0.$2.0"><span data-reactid=".lze4do5dkw.0.0.1.4.1.2.0.0.0.$2.0.0">323329</span><span data-reactid=".lze4do5dkw.0.0.1.4.1.2.0.0.0.$2.0.1"> Ratings</span></span></span><span data-reactid=".lze4do5dkw.0.0.1.4.1.2.0.0.0.$3"><span data-reactid=".lze4do5dkw.0.0.1.4.1.2.0.0.0.$3.0"> · </span></span><span data-reactid=".lze4do5dkw.0.0.1.4.1.2.0.0.0.$4"><span class="gr-metaText u-inlineBlock" data-reactid=".lze4do5dkw.0.0.1.4.1.2.0.0.0.$4.0"><span data-reactid=".lze4do5dkw.0.0.1.4.1.2.0.0.0.$4.0.0">6648</span><span data-reactid=".lze4do5dkw.0.0.1.4.1.2.0.0.0.$4.0.1"> Reviews</span></span></span></span></div></div></div></div></div><button class="gr-button gr-button--Large shareModal__button" type="button" data-reactid=".lze4do5dkw.0.0.1.5">Share</button><div class="shareModal__bottomContainer shareModal__bottomContainer--social" data-reactid=".lze4do5dkw.0.0.1.6"><div class="shareModal__socialContainer" data-reactid=".lze4do5dkw.0.0.1.6.0"><div class="shareModal__socialPrompt" data-reactid=".lze4do5dkw.0.0.1.6.0.0">Or share on:</div><div class="shareSocialButtons shareSocialButtons--modal" data-reactid=".lze4do5dkw.0.0.1.6.0.1"><button class="shareSocialButtons__button shareSocialButtons__button--modal shareSocialButtons__button--facebook" aria-label="Share to Facebook" type="button" data-reactid=".lze4do5dkw.0.0.1.6.0.1.0"></button><button class="shareSocialButtons__button shareSocialButtons__button--modal shareSocialButtons__button--twitter" aria-label="Share to Twitter" type="button" data-reactid=".lze4do5dkw.0.0.1.6.0.1.1"></button><button class="shareSocialButtons__button shareSocialButtons__button--modal shareSocialButtons__button--pinterest" aria-label="Share to Pinterest" type="button" data-reactid=".lze4do5dkw.0.0.1.6.0.1.2"></button></div></div></div></span></div></div><div class="shareModuleBar" data-reactid=".lze4do5dkw.1"><a class="modalTrigger modalTrigger--shareModule" role="button" aria-expanded="false" aria-haspopup="true" data-reactid=".lze4do5dkw.1.0"><button class="gr-shareButton" type="button" data-reactid=".lze4do5dkw.1.0.0"><span class="gr-shareButton__innerWrapper" data-reactid=".lze4do5dkw.1.0.0.0"><span class="gr-shareButton__icon" data-reactid=".lze4do5dkw.1.0.0.0.0"></span><span class="gr-shareButton__textLabel" data-reactid=".lze4do5dkw.1.0.0.0.1">Share</span></span></button></a><div class="shareSocialButtons shareSocialButtons--shareBar" data-reactid=".lze4do5dkw.1.1"><button class="shareSocialButtons__button shareSocialButtons__button--shareBar shareSocialButtons__button--facebook" aria-label="Share to Facebook" type="button" data-reactid=".lze4do5dkw.1.1.0"></button><button class="shareSocialButtons__button shareSocialButtons__button--shareBar shareSocialButtons__button--twitter" aria-label="Share to Twitter" type="button" data-reactid=".lze4do5dkw.1.1.1"></button><button class="shareSocialButtons__button shareSocialButtons__button--shareBar shareSocialButtons__button--pinterest" aria-label="Share to Pinterest" type="button" data-reactid=".lze4do5dkw.1.1.2"></button></div></div></div></div>-->


<!--                    <div class="recommendItBar stacked actionLinkLite">-->
<!--                        <a class="recommendBook greyText" rel="nofollow" data-id="12996" data-title="Othello" data-image="https://i.gr-assets.com/images/S/compressed.photo.goodreads.com/books/1459795105l/12996._SY75_.jpg" href="#">Recommend It</a>-->
<!---->
<!--                        <span class="greyText">&nbsp;|&nbsp;</span>-->
<!--                        <a rel="nofollow" class="greyText" href="/book/stats?id=12996.Othello">Stats</a>-->
<!--                        <span class="greyText">&nbsp;|&nbsp;</span>-->
<!--                        <a rel="nofollow" class="greyText" href="/user_status/book/12996.Othello">Recent Status Updates</a>-->
<!--                    </div>-->





<!--                    <div id='relatedWorks-995103'>-->
<!--                        <div class=" clearFloats bigBox"><div class="h2Container gradientHeaderContainer"><h2 class="brownBackground">Readers also enjoyed</h2></div><div class="bigBoxBody"><div class="bigBoxContent containerWithHeaderContent"><div class='bookCarousel'>-->
<!--                                        <div class='carouselRow' style='width: 3600px'>-->
<!--                                            <ul>-->
<!--                                                <li class='cover' id='bookCover_12898'>-->
<!--                                                    <a href="https://www.goodreads.com/book/show/12898.Death_of_a_Salesman"><img alt="Death of a Salesman" src="https://i.gr-assets.com/images/S/compressed.photo.goodreads.com/books/1554514105l/12898._SX98_.jpg" />-->
<!--                                                    </a>-->
<!---->
<!---->
<!--                                                    <script type="text/javascript" charset="utf-8">-->
<!--                                                        //<![CDATA[-->
<!---->
<!--                                                        function submitShelfLink(unique_id, book_id, shelf_id, shelf_name, submit_form, exclusive) {-->
<!--                                                            var checkbox_id = 'shelf_name_' + unique_id + '_' + shelf_id;-->
<!--                                                            var element = document.getElementById(checkbox_id)-->
<!---->
<!--                                                            var checked = element.checked-->
<!--                                                            if (checked && exclusive) {-->
<!--                                                                // can't uncheck a radio by clicking it!-->
<!--                                                                return-->
<!--                                                            }-->
<!--                                                            if(document.getElementById("savingMessage")){-->
<!--                                                                Element.show('savingMessage')-->
<!--                                                            }-->
<!--                                                            var element_id = 'shelfInDropdownName_' + unique_id + '_' + shelf_id;-->
<!--                                                            Element.update(element_id, "saving...");-->
<!--                                                            if (submit_form) {-->
<!--                                                                Element.hide('shelfDropdown_' + unique_id)-->
<!--                                                                var form = document.getElementById('addBookForm' + book_id)-->
<!--                                                                if (form) {-->
<!--                                                                    form.shelf.value = shelf_name-->
<!--                                                                    form.onsubmit()-->
<!--                                                                }-->
<!--                                                            }-->
<!--                                                            else {-->
<!--                                                                var action = checked ? 'remove' : ''-->
<!--                                                                element.checked = !element.checked-->
<!--                                                                new Ajax.Request('/shelf/add_to_shelf', {asynchronous:true, evalScripts:true, onSuccess:function(request){shelfSubmitted(request, book_id, checkbox_id, element_id, unique_id, shelf_name)}, parameters:'book_id=' + book_id + '&name=' + shelf_name + '&a=' + action + '&authenticity_token=' + encodeURIComponent('l8ks4dLgdS6xyGl9CRdeisLtfv3H/elwFN13+aFhqsYcbJAOjOrz6eaYsBjlPf14PFWbwZ7D28udz86u70gZvg==')})-->
<!--                                                            }-->
<!--                                                        }-->
<!---->
<!--                                                        function shelfSubmitted(request, book_id, checkbox_id, element_id, unique_id, shelf_name) {-->
<!--                                                            Element.update('shelfList129148878_' + book_id, request.responseText)-->
<!--                                                            afterShelfSave(checkbox_id, element_id, unique_id, shelf_name.escapeHTML())-->
<!--                                                        }-->
<!---->
<!--                                                        function refreshGroupBox(group_id, book_id) {-->
<!--                                                            new Ajax.Updater('addGroupBooks' + book_id + '', '/group/add_book_box', {asynchronous:true, evalScripts:true, onSuccess:function(request){refreshGroupBoxComplete(request, book_id);}, parameters:'id=' + group_id + '&book_id=' + book_id + '&refresh=true' + '&authenticity_token=' + encodeURIComponent('FJNzutHIDxpmYVEPc1pc8XDqeQjcErjNvgt+x6wcvyifNs9Vj8KJ3TExiGqfcP8DjlKcNIUsinY3GceQ4jUMUA==')})-->
<!--                                                        }-->
<!--                                                        //]]>-->
<!--                                                    </script>-->
<!---->
<!---->
<!--                                                    <script>-->
<!--                                                        //<![CDATA[-->
<!--                                                        var newTip = new Tip($('bookCover_12898'), "\n\n  <h2><a class=\"readable bookTitle\" href=\"https://www.goodreads.com/book/show/12898.Death_of_a_Salesman?from_choice=false&amp;from_home_module=false\">Death of a Salesman<\/a><\/h2>\n\n      <div>\n        by <a class=\"authorName\" href=\"/author/show/8120.Arthur_Miller?a=9&amp;origin=related_works\">Arthur  Miller<\/a>\n      <\/div>\n\n          <div class=\"smallText uitext darkGreyText\">\n            <span class=\"minirating\"><span class=\"stars staticStars notranslate\"><span size=\"12x12\" class=\"staticStar p10\"><\/span><span size=\"12x12\" class=\"staticStar p10\"><\/span><span size=\"12x12\" class=\"staticStar p10\"><\/span><span size=\"12x12\" class=\"staticStar p6\"><\/span><span size=\"12x12\" class=\"staticStar p0\"><\/span><\/span> 3.54 avg rating &mdash; 191,496 ratings<\/span>            &mdash; published 1949\n          <\/div>\n\n    <div class=\"addBookTipDescription\">\n      \n<span id=\"freeTextContainer15821734341314986114\">&apos;For a salesman, there is no rock bottom to life. He don&apos;t put a bolt to a nut, he don&apos;t tell you the law or give you medicine. He&apos;s a man way out there in the blue, riding on a smile and a shoeshine.&apos;\n\nWilly Loman has been a salesman for 34 years. A<\/span>\n  <span id=\"freeText15821734341314986114\" style=\"display:none\">\'For a salesman, there is no rock bottom to life. He don\'t put a bolt to a nut, he don\'t tell you the law or give you medicine. He\'s a man way out there in the blue, riding on a smile and a shoeshine.\'\n\nWilly Loman has been a salesman for 34 years. At 60, he is cast aside, his usefulness now exhausted. With no future to dream about he must face the crushing disappointments of his past. He takes one final brave action, but is he heroic at last?, or a self-deluding fool?<\/span>\n  <a data-text-id=\"15821734341314986114\" href=\"#\" onclick=\"swapContent(\$(this));; return false;\">...more<\/a>\n\n    <\/div>\n\n      <div class=\'wtrButtonContainer\' id=\'7_book_12898\'>\n<div class=\'wtrUp wtrLeft\'>\n<form action=\"/shelf/add_to_shelf\" accept-charset=\"UTF-8\" method=\"post\"><input name=\"utf8\" type=\"hidden\" value=\"&#x2713;\" /><input type=\"hidden\" name=\"authenticity_token\" value=\"zHN+Us8qfUEEyJdD/NZJ3W0qOCP4ZPoIoQZ8nRZhUDpH1sK9kSD7hlOYTiYQ/Oovk5LdH6FayLMoFMXKWEjjQg==\" />\n<input type=\"hidden\" name=\"book_id\" id=\"book_id\" value=\"12898\" />\n<input type=\"hidden\" name=\"name\" id=\"name\" value=\"to-read\" />\n<input type=\"hidden\" name=\"unique_id\" id=\"unique_id\" value=\"7_book_12898\" />\n<input type=\"hidden\" name=\"wtr_new\" id=\"wtr_new\" value=\"true\" />\n<input type=\"hidden\" name=\"from_choice\" id=\"from_choice\" value=\"false\" />\n<input type=\"hidden\" name=\"from_home_module\" id=\"from_home_module\" value=\"false\" />\n<input type=\"hidden\" name=\"ref\" id=\"ref\" value=\"\" class=\"wtrLeftUpRef\" />\n<input type=\"hidden\" name=\"existing_review\" id=\"existing_review\" value=\"false\" class=\"wtrExisting\" />\n<input type=\"hidden\" name=\"book_origin\" id=\"book_origin\" value=\"related_works\" />\n<input type=\"hidden\" name=\"page_referrer\" id=\"page_referrer\" value=\"https://www.goodreads.com/\" />\n<input type=\"hidden\" name=\"page_url\" id=\"page_url\" value=\"/book/show/12996.Othello\" />\n<button class=\'wtrToRead\' type=\'submit\'>\n<span class=\'progressTrigger\'>Want to Read<\/span>\n<span class=\'progressIndicator\'>saving…<\/span>\n<\/button>\n<\/form>\n\n<\/div>\n\n<div class=\'wtrRight wtrUp\'>\n<form class=\"hiddenShelfForm\" action=\"/shelf/add_to_shelf\" accept-charset=\"UTF-8\" method=\"post\"><input name=\"utf8\" type=\"hidden\" value=\"&#x2713;\" /><input type=\"hidden\" name=\"authenticity_token\" value=\"LoQrqEKFyQMl9dbgw9jYHhjVRRk27/JgdGpVY8dhYR6lIZdHHI9PxHKlD4Uv8nvs5m2gJW/RwNv9eOw0iUjSZg==\" />\n<input type=\"hidden\" name=\"unique_id\" id=\"unique_id\" value=\"7_book_12898\" />\n<input type=\"hidden\" name=\"book_id\" id=\"book_id\" value=\"12898\" />\n<input type=\"hidden\" name=\"a\" id=\"a\" />\n<input type=\"hidden\" name=\"name\" id=\"name\" />\n<input type=\"hidden\" name=\"from_choice\" id=\"from_choice\" value=\"false\" />\n<input type=\"hidden\" name=\"from_home_module\" id=\"from_home_module\" value=\"false\" />\n<input type=\"hidden\" name=\"book_origin\" id=\"book_origin\" value=\"related_works\" />\n<input type=\"hidden\" name=\"page_referrer\" id=\"page_referrer\" value=\"https://www.goodreads.com/\" />\n<input type=\"hidden\" name=\"page_url\" id=\"page_url\" value=\"/book/show/12996.Othello\" />\n<\/form>\n\n<button class=\'wtrShelfButton\'><\/button>\n<\/div>\n\n<div class=\'ratingStars wtrRating\'>\n<div class=\'starsErrorTooltip hidden\'>\nError rating book. Refresh and try again.\n<\/div>\n<div class=\'myRating uitext greyText\'>Rate this book<\/div>\n<div class=\'clearRating uitext\'>Clear rating<\/div>\n<div class=\"stars\" data-resource-id=\"12898\" data-user-id=\"129148878\" data-submit-url=\"/review/rate/12898?book_origin=related_works&page_referrer=https%3A%2F%2Fwww.goodreads.com%2F&page_url=%2Fbook%2Fshow%2F12996.Othello&rate_books_page=false&stars_click=false&wtr_button_id=7_book_12898\" data-rating=\"0\"><a class=\"star off\" title=\"did not like it\" href=\"#\" ref=\"\">1 of 5 stars<\/a><a class=\"star off\" title=\"it was ok\" href=\"#\" ref=\"\">2 of 5 stars<\/a><a class=\"star off\" title=\"liked it\" href=\"#\" ref=\"\">3 of 5 stars<\/a><a class=\"star off\" title=\"really liked it\" href=\"#\" ref=\"\">4 of 5 stars<\/a><a class=\"star off\" title=\"it was amazing\" href=\"#\" ref=\"\">5 of 5 stars<\/a><\/div>\n<\/div>\n\n<\/div>\n\n\n\n\n", { style: 'addbook', stem: 'topRight', hook: { tip: 'topRight', target: 'bottomMiddle' }, hideOn: false, width: 400, hideAfter: 0.05, delay: 0.35 });-->
<!--                                                        $('bookCover_12898').observe('prototip:shown', function() {-->
<!--                                                            if (this.up('#box')) {-->
<!--                                                                $$('div.prototip').each(function(i){i.setStyle({zIndex: $('box').getStyle('z-index')})});-->
<!--                                                            } else {-->
<!--                                                                $$('div.prototip').each(function(i){i.setStyle({zIndex: 6000})});-->
<!--                                                            }-->
<!--                                                        });-->
<!---->
<!--                                                        newTip['wrapper'].addClassName('prototipAllowOverflow');-->
<!---->
<!--                                                        $('bookCover_12898').observe('prototip:shown', function () {-->
<!--                                                            $$('div.prototip').each(function (e) {-->
<!--                                                                if ($('bookCover_12898').hasClassName('ignored')) {-->
<!--                                                                    e.setStyle({'display': 'none'});-->
<!--                                                                    return;-->
<!--                                                                }-->
<!--                                                                e.setStyle({'overflow': 'visible'});-->
<!--                                                            });-->
<!--                                                        });-->
<!--                                                        $('bookCover_12898').observe('prototip:hidden', function () {-->
<!--                                                            $$('span.elementTwo').each(function (e) {-->
<!--                                                                if (e.getStyle('display') !== 'none') {-->
<!--                                                                    var lessLink = e.next();-->
<!--                                                                    swapContent(lessLink);-->
<!--                                                                }-->
<!--                                                            });-->
<!--                                                        });-->
<!---->
<!--                                                        //]]>-->
<!--                                                    </script>-->
<!---->
<!--                                                </li>-->
<!--                                                <li class='cover' id='bookCover_12220'>-->
<!--                                                    <a href="https://www.goodreads.com/book/show/12220.A_Streetcar_Named_Desire"><img alt="A Streetcar Named Desire" src="https://i.gr-assets.com/images/S/compressed.photo.goodreads.com/books/1389153133l/12220._SX98_.jpg" />-->
<!--                                                    </a>-->
<!---->
<!---->
<!--                                                    <script>-->
<!--                                                        //<![CDATA[-->
<!--                                                        var newTip = new Tip($('bookCover_12220'), "\n\n  <h2><a class=\"readable bookTitle\" href=\"https://www.goodreads.com/book/show/12220.A_Streetcar_Named_Desire?from_choice=false&amp;from_home_module=false\">A Streetcar Named Desire<\/a><\/h2>\n\n      <div>\n        by <a class=\"authorName\" href=\"/author/show/7751.Tennessee_Williams?a=9&amp;origin=related_works\">Tennessee Williams<\/a>\n      <\/div>\n\n          <div class=\"smallText uitext darkGreyText\">\n            <span class=\"minirating\"><span class=\"stars staticStars notranslate\"><span size=\"12x12\" class=\"staticStar p10\"><\/span><span size=\"12x12\" class=\"staticStar p10\"><\/span><span size=\"12x12\" class=\"staticStar p10\"><\/span><span size=\"12x12\" class=\"staticStar p6\"><\/span><span size=\"12x12\" class=\"staticStar p0\"><\/span><\/span> 3.99 avg rating &mdash; 265,598 ratings<\/span>            &mdash; published 1947\n          <\/div>\n\n    <div class=\"addBookTipDescription\">\n      \n<span id=\"freeTextContainer1205216948867172857\">The Pulitzer Prize and Drama Critics Circle Award winning play—reissued with an introduction by Arthur Miller (Death of a Salesman and The Crucible), and Williams’ essay “The World I Live In.”\n\nIt is a very short list of 20th-century American plays t<\/span>\n  <span id=\"freeText1205216948867172857\" style=\"display:none\">The Pulitzer Prize and Drama Critics Circle Award winning play—reissued with an introduction by Arthur Miller (Death of a Salesman and The Crucible), and Williams’ essay “The World I Live In.”\n\nIt is a very short list of 20th-century American plays that continue to have the same power and impact as when they first appeared—57 years after its Broadway premiere, Tennessee Williams’ A Streetcar Named Desire is one of those plays. The story famously recounts how the faded and promiscuous Blanche DuBois is pushed over the edge by her sexy and brutal brother-in-law, Stanley Kowalski. Streetcar launched the careers of Marlon Brando, Jessica Tandy, Kim Hunter, and Karl Malden, and solidified the position of Tennessee Williams as one of the most important young playwrights of his generation, as well as that of Elia Kazan as the greatest American stage director of the ’40s and ’50s.<\/span>\n  <a data-text-id=\"1205216948867172857\" href=\"#\" onclick=\"swapContent(\$(this));; return false;\">...more<\/a>\n\n    <\/div>\n\n      <div class=\'wtrButtonContainer\' id=\'8_book_12220\'>\n<div class=\'wtrUp wtrLeft\'>\n<form action=\"/shelf/add_to_shelf\" accept-charset=\"UTF-8\" method=\"post\"><input name=\"utf8\" type=\"hidden\" value=\"&#x2713;\" /><input type=\"hidden\" name=\"authenticity_token\" value=\"XlG2ZQ/ObkQjAdXAz6v618oP4/XprcCC4F87rHvFkvnV9AqKUcTog3RRDKUjgVklNLcGybCT8jlpTYL7NewhgQ==\" />\n<input type=\"hidden\" name=\"book_id\" id=\"book_id\" value=\"12220\" />\n<input type=\"hidden\" name=\"name\" id=\"name\" value=\"to-read\" />\n<input type=\"hidden\" name=\"unique_id\" id=\"unique_id\" value=\"8_book_12220\" />\n<input type=\"hidden\" name=\"wtr_new\" id=\"wtr_new\" value=\"true\" />\n<input type=\"hidden\" name=\"from_choice\" id=\"from_choice\" value=\"false\" />\n<input type=\"hidden\" name=\"from_home_module\" id=\"from_home_module\" value=\"false\" />\n<input type=\"hidden\" name=\"ref\" id=\"ref\" value=\"\" class=\"wtrLeftUpRef\" />\n<input type=\"hidden\" name=\"existing_review\" id=\"existing_review\" value=\"false\" class=\"wtrExisting\" />\n<input type=\"hidden\" name=\"book_origin\" id=\"book_origin\" value=\"related_works\" />\n<input type=\"hidden\" name=\"page_referrer\" id=\"page_referrer\" value=\"https://www.goodreads.com/\" />\n<input type=\"hidden\" name=\"page_url\" id=\"page_url\" value=\"/book/show/12996.Othello\" />\n<button class=\'wtrToRead\' type=\'submit\'>\n<span class=\'progressTrigger\'>Want to Read<\/span>\n<span class=\'progressIndicator\'>saving…<\/span>\n<\/button>\n<\/form>\n\n<\/div>\n\n<div class=\'wtrRight wtrUp\'>\n<form class=\"hiddenShelfForm\" action=\"/shelf/add_to_shelf\" accept-charset=\"UTF-8\" method=\"post\"><input name=\"utf8\" type=\"hidden\" value=\"&#x2713;\" /><input type=\"hidden\" name=\"authenticity_token\" value=\"H8oyTy3S7w6LXhp9XgtG26I+kgINlTqOMTrxgtvNy/WUb46gc9hpydwOwxiyIeUpXIZ3PlSrCDW4KEjVleR4jQ==\" />\n<input type=\"hidden\" name=\"unique_id\" id=\"unique_id\" value=\"8_book_12220\" />\n<input type=\"hidden\" name=\"book_id\" id=\"book_id\" value=\"12220\" />\n<input type=\"hidden\" name=\"a\" id=\"a\" />\n<input type=\"hidden\" name=\"name\" id=\"name\" />\n<input type=\"hidden\" name=\"from_choice\" id=\"from_choice\" value=\"false\" />\n<input type=\"hidden\" name=\"from_home_module\" id=\"from_home_module\" value=\"false\" />\n<input type=\"hidden\" name=\"book_origin\" id=\"book_origin\" value=\"related_works\" />\n<input type=\"hidden\" name=\"page_referrer\" id=\"page_referrer\" value=\"https://www.goodreads.com/\" />\n<input type=\"hidden\" name=\"page_url\" id=\"page_url\" value=\"/book/show/12996.Othello\" />\n<\/form>\n\n<button class=\'wtrShelfButton\'><\/button>\n<\/div>\n\n<div class=\'ratingStars wtrRating\'>\n<div class=\'starsErrorTooltip hidden\'>\nError rating book. Refresh and try again.\n<\/div>\n<div class=\'myRating uitext greyText\'>Rate this book<\/div>\n<div class=\'clearRating uitext\'>Clear rating<\/div>\n<div class=\"stars\" data-resource-id=\"12220\" data-user-id=\"129148878\" data-submit-url=\"/review/rate/12220?book_origin=related_works&page_referrer=https%3A%2F%2Fwww.goodreads.com%2F&page_url=%2Fbook%2Fshow%2F12996.Othello&rate_books_page=false&stars_click=false&wtr_button_id=8_book_12220\" data-rating=\"0\"><a class=\"star off\" title=\"did not like it\" href=\"#\" ref=\"\">1 of 5 stars<\/a><a class=\"star off\" title=\"it was ok\" href=\"#\" ref=\"\">2 of 5 stars<\/a><a class=\"star off\" title=\"liked it\" href=\"#\" ref=\"\">3 of 5 stars<\/a><a class=\"star off\" title=\"really liked it\" href=\"#\" ref=\"\">4 of 5 stars<\/a><a class=\"star off\" title=\"it was amazing\" href=\"#\" ref=\"\">5 of 5 stars<\/a><\/div>\n<\/div>\n\n<\/div>\n\n\n\n\n", { style: 'addbook', stem: 'topRight', hook: { tip: 'topRight', target: 'bottomMiddle' }, hideOn: false, width: 400, hideAfter: 0.05, delay: 0.35 });-->
<!--                                                        $('bookCover_12220').observe('prototip:shown', function() {-->
<!--                                                            if (this.up('#box')) {-->
<!--                                                                $$('div.prototip').each(function(i){i.setStyle({zIndex: $('box').getStyle('z-index')})});-->
<!--                                                            } else {-->
<!--                                                                $$('div.prototip').each(function(i){i.setStyle({zIndex: 6000})});-->
<!--                                                            }-->
<!--                                                        });-->
<!---->
<!--                                                        newTip['wrapper'].addClassName('prototipAllowOverflow');-->
<!---->
<!--                                                        $('bookCover_12220').observe('prototip:shown', function () {-->
<!--                                                            $$('div.prototip').each(function (e) {-->
<!--                                                                if ($('bookCover_12220').hasClassName('ignored')) {-->
<!--                                                                    e.setStyle({'display': 'none'});-->
<!--                                                                    return;-->
<!--                                                                }-->
<!--                                                                e.setStyle({'overflow': 'visible'});-->
<!--                                                            });-->
<!--                                                        });-->
<!--                                                        $('bookCover_12220').observe('prototip:hidden', function () {-->
<!--                                                            $$('span.elementTwo').each(function (e) {-->
<!--                                                                if (e.getStyle('display') !== 'none') {-->
<!--                                                                    var lessLink = e.next();-->
<!--                                                                    swapContent(lessLink);-->
<!--                                                                }-->
<!--                                                            });-->
<!--                                                        });-->
<!---->
<!--                                                        //]]>-->
<!--                                                    </script>-->
<!---->
<!--                                                </li>-->
<!--                                                <li class='cover' id='bookCover_52357'>-->
<!--                                                    <a href="https://www.goodreads.com/book/show/52357.Beowulf"><img alt="Beowulf" src="https://i.gr-assets.com/images/S/compressed.photo.goodreads.com/books/1327878125l/52357._SX98_.jpg" />-->
<!--                                                    </a>-->
<!---->
<!---->
<!--                                                    <script>-->
<!--                                                        //<![CDATA[-->
<!--                                                        var newTip = new Tip($('bookCover_52357'), "\n\n  <h2><a class=\"readable bookTitle\" href=\"https://www.goodreads.com/book/show/52357.Beowulf?from_choice=false&amp;from_home_module=false\">Beowulf<\/a><\/h2>\n\n      <div>\n        by <a class=\"authorName\" href=\"/author/show/4699102.Unknown?a=9&amp;origin=related_works\">Unknown<\/a>\n      <\/div>\n\n          <div class=\"smallText uitext darkGreyText\">\n            <span class=\"minirating\"><span class=\"stars staticStars notranslate\"><span size=\"12x12\" class=\"staticStar p10\"><\/span><span size=\"12x12\" class=\"staticStar p10\"><\/span><span size=\"12x12\" class=\"staticStar p10\"><\/span><span size=\"12x12\" class=\"staticStar p3\"><\/span><span size=\"12x12\" class=\"staticStar p0\"><\/span><\/span> 3.46 avg rating &mdash; 247,639 ratings<\/span>            &mdash; published 900\n          <\/div>\n\n    <div class=\"addBookTipDescription\">\n      \n<span id=\"freeTextContainer17835058595207075815\">Beowulf is a major epic of Anglo-Saxon literature, probably composed between the first half of the seventh century and the end of the first millennium. The poem was inspired by Germanic and Anglo-Saxon oral tradition recounting the exploits of Beowul<\/span>\n  <span id=\"freeText17835058595207075815\" style=\"display:none\">Beowulf is a major epic of Anglo-Saxon literature, probably composed between the first half of the seventh century and the end of the first millennium. The poem was inspired by Germanic and Anglo-Saxon oral tradition recounting the exploits of Beowulf, the hero who gave his name to the poem. Here, it\'s transcribed as a verse epic, onto which are grafted Christian additions.<\/span>\n  <a data-text-id=\"17835058595207075815\" href=\"#\" onclick=\"swapContent(\$(this));; return false;\">...more<\/a>\n\n    <\/div>\n\n      <div class=\'wtrButtonContainer\' id=\'9_book_52357\'>\n<div class=\'wtrUp wtrLeft\'>\n<form action=\"/shelf/add_to_shelf\" accept-charset=\"UTF-8\" method=\"post\"><input name=\"utf8\" type=\"hidden\" value=\"&#x2713;\" /><input type=\"hidden\" name=\"authenticity_token\" value=\"pxJFPynlPyqRRdJdPSSBCnnu1j6utlf2bWlqh2PRYD4st/nQd++57cYVCzjRDiL4h1YzAveIZU3ke9PQLfjTRg==\" />\n<input type=\"hidden\" name=\"book_id\" id=\"book_id\" value=\"52357\" />\n<input type=\"hidden\" name=\"name\" id=\"name\" value=\"to-read\" />\n<input type=\"hidden\" name=\"unique_id\" id=\"unique_id\" value=\"9_book_52357\" />\n<input type=\"hidden\" name=\"wtr_new\" id=\"wtr_new\" value=\"true\" />\n<input type=\"hidden\" name=\"from_choice\" id=\"from_choice\" value=\"false\" />\n<input type=\"hidden\" name=\"from_home_module\" id=\"from_home_module\" value=\"false\" />\n<input type=\"hidden\" name=\"ref\" id=\"ref\" value=\"\" class=\"wtrLeftUpRef\" />\n<input type=\"hidden\" name=\"existing_review\" id=\"existing_review\" value=\"false\" class=\"wtrExisting\" />\n<input type=\"hidden\" name=\"book_origin\" id=\"book_origin\" value=\"related_works\" />\n<input type=\"hidden\" name=\"page_referrer\" id=\"page_referrer\" value=\"https://www.goodreads.com/\" />\n<input type=\"hidden\" name=\"page_url\" id=\"page_url\" value=\"/book/show/12996.Othello\" />\n<button class=\'wtrToRead\' type=\'submit\'>\n<span class=\'progressTrigger\'>Want to Read<\/span>\n<span class=\'progressIndicator\'>saving…<\/span>\n<\/button>\n<\/form>\n\n<\/div>\n\n<div class=\'wtrRight wtrUp\'>\n<form class=\"hiddenShelfForm\" action=\"/shelf/add_to_shelf\" accept-charset=\"UTF-8\" method=\"post\"><input name=\"utf8\" type=\"hidden\" value=\"&#x2713;\" /><input type=\"hidden\" name=\"authenticity_token\" value=\"BkgieSN0qY2JDvfE/BWGepUHeoDALl8ulD8uo6iEiumN7Z6WfX4vSt5eLqEQPyWIa7+fvJkQbZUdLZf05q05kQ==\" />\n<input type=\"hidden\" name=\"unique_id\" id=\"unique_id\" value=\"9_book_52357\" />\n<input type=\"hidden\" name=\"book_id\" id=\"book_id\" value=\"52357\" />\n<input type=\"hidden\" name=\"a\" id=\"a\" />\n<input type=\"hidden\" name=\"name\" id=\"name\" />\n<input type=\"hidden\" name=\"from_choice\" id=\"from_choice\" value=\"false\" />\n<input type=\"hidden\" name=\"from_home_module\" id=\"from_home_module\" value=\"false\" />\n<input type=\"hidden\" name=\"book_origin\" id=\"book_origin\" value=\"related_works\" />\n<input type=\"hidden\" name=\"page_referrer\" id=\"page_referrer\" value=\"https://www.goodreads.com/\" />\n<input type=\"hidden\" name=\"page_url\" id=\"page_url\" value=\"/book/show/12996.Othello\" />\n<\/form>\n\n<button class=\'wtrShelfButton\'><\/button>\n<\/div>\n\n<div class=\'ratingStars wtrRating\'>\n<div class=\'starsErrorTooltip hidden\'>\nError rating book. Refresh and try again.\n<\/div>\n<div class=\'myRating uitext greyText\'>Rate this book<\/div>\n<div class=\'clearRating uitext\'>Clear rating<\/div>\n<div class=\"stars\" data-resource-id=\"52357\" data-user-id=\"129148878\" data-submit-url=\"/review/rate/52357?book_origin=related_works&page_referrer=https%3A%2F%2Fwww.goodreads.com%2F&page_url=%2Fbook%2Fshow%2F12996.Othello&rate_books_page=false&stars_click=false&wtr_button_id=9_book_52357\" data-rating=\"0\"><a class=\"star off\" title=\"did not like it\" href=\"#\" ref=\"\">1 of 5 stars<\/a><a class=\"star off\" title=\"it was ok\" href=\"#\" ref=\"\">2 of 5 stars<\/a><a class=\"star off\" title=\"liked it\" href=\"#\" ref=\"\">3 of 5 stars<\/a><a class=\"star off\" title=\"really liked it\" href=\"#\" ref=\"\">4 of 5 stars<\/a><a class=\"star off\" title=\"it was amazing\" href=\"#\" ref=\"\">5 of 5 stars<\/a><\/div>\n<\/div>\n\n<\/div>\n\n\n\n\n", { style: 'addbook', stem: 'topRight', hook: { tip: 'topRight', target: 'bottomMiddle' }, hideOn: false, width: 400, hideAfter: 0.05, delay: 0.35 });-->
<!--                                                        $('bookCover_52357').observe('prototip:shown', function() {-->
<!--                                                            if (this.up('#box')) {-->
<!--                                                                $$('div.prototip').each(function(i){i.setStyle({zIndex: $('box').getStyle('z-index')})});-->
<!--                                                            } else {-->
<!--                                                                $$('div.prototip').each(function(i){i.setStyle({zIndex: 6000})});-->
<!--                                                            }-->
<!--                                                        });-->
<!---->
<!--                                                        newTip['wrapper'].addClassName('prototipAllowOverflow');-->
<!---->
<!--                                                        $('bookCover_52357').observe('prototip:shown', function () {-->
<!--                                                            $$('div.prototip').each(function (e) {-->
<!--                                                                if ($('bookCover_52357').hasClassName('ignored')) {-->
<!--                                                                    e.setStyle({'display': 'none'});-->
<!--                                                                    return;-->
<!--                                                                }-->
<!--                                                                e.setStyle({'overflow': 'visible'});-->
<!--                                                            });-->
<!--                                                        });-->
<!--                                                        $('bookCover_52357').observe('prototip:hidden', function () {-->
<!--                                                            $$('span.elementTwo').each(function (e) {-->
<!--                                                                if (e.getStyle('display') !== 'none') {-->
<!--                                                                    var lessLink = e.next();-->
<!--                                                                    swapContent(lessLink);-->
<!--                                                                }-->
<!--                                                            });-->
<!--                                                        });-->
<!---->
<!--                                                        //]]>-->
<!--                                                    </script>-->
<!---->
<!--                                                </li>-->
<!--                                                <li class='cover' id='bookCover_17250'>-->
<!--                                                    <a href="https://www.goodreads.com/book/show/17250.The_Crucible"><img alt="The Crucible" src="https://i.gr-assets.com/images/S/compressed.photo.goodreads.com/books/1547467608l/17250._SX98_.jpg" />-->
<!--                                                    </a>-->
<!---->
<!---->
<!--                                                    <script>-->
<!--                                                        //<![CDATA[-->
<!--                                                        var newTip = new Tip($('bookCover_17250'), "\n\n  <h2><a class=\"readable bookTitle\" href=\"https://www.goodreads.com/book/show/17250.The_Crucible?from_choice=false&amp;from_home_module=false\">The Crucible<\/a><\/h2>\n\n      <div>\n        by <a class=\"authorName\" href=\"/author/show/8120.Arthur_Miller?a=9&amp;origin=related_works\">Arthur  Miller<\/a>\n      <\/div>\n\n          <div class=\"smallText uitext darkGreyText\">\n            <span class=\"minirating\"><span class=\"stars staticStars notranslate\"><span size=\"12x12\" class=\"staticStar p10\"><\/span><span size=\"12x12\" class=\"staticStar p10\"><\/span><span size=\"12x12\" class=\"staticStar p10\"><\/span><span size=\"12x12\" class=\"staticStar p6\"><\/span><span size=\"12x12\" class=\"staticStar p0\"><\/span><\/span> 3.59 avg rating &mdash; 331,831 ratings<\/span>            &mdash; published 1953\n          <\/div>\n\n    <div class=\"addBookTipDescription\">\n      \n<span id=\"freeTextContainer12504894615162568467\">&quot;I believe that the reader will discover here the essential nature of one of the strangest and most awful chapters in human history,&quot; Arthur Miller wrote of his classic play about the witch-hunts and trials in seventeenth-century Salem, Massachusetts<\/span>\n  <span id=\"freeText12504894615162568467\" style=\"display:none\">&quot;I believe that the reader will discover here the essential nature of one of the strangest and most awful chapters in human history,&quot; Arthur Miller wrote of his classic play about the witch-hunts and trials in seventeenth-century Salem, Massachusetts. Based on historical people and real events, Miller\'s drama is a searing portrait of a community engulfed by hysteria. In the rigid theocracy of Salem, rumors that women are practicing witchcraft galvanize the town\'s most basic fears and suspicions; and when a young girl accuses Elizabeth Proctor of being a witch, self-righteous church leaders and townspeople insist that Elizabeth be brought to trial. The ruthlessness of the prosecutors and the eagerness of neighbor to testify against neighbor brilliantly illuminates the destructive power of socially sanctioned violence.\n\nWritten in 1953, The Crucible is a mirror Miller uses to reflect the anti-communist hysteria inspired by Senator Joseph McCarthy\'s &quot;witch-hunts&quot; in the United States. Within the text itself, Miller contemplates the parallels, writing, &quot;Political opposition... is given an inhumane overlay, which then justifies the abrogation of all normally applied customs of civilized behavior. A political policy is equated with moral right, and opposition to it with diabolical malevolence.&quot;\n\nWIth an introduction by Christopher Bigsby.\n(back cover)<\/span>\n  <a data-text-id=\"12504894615162568467\" href=\"#\" onclick=\"swapContent(\$(this));; return false;\">...more<\/a>\n\n    <\/div>\n\n      <div class=\'wtrButtonContainer\' id=\'10_book_17250\'>\n<div class=\'wtrUp wtrLeft\'>\n<form action=\"/shelf/add_to_shelf\" accept-charset=\"UTF-8\" method=\"post\"><input name=\"utf8\" type=\"hidden\" value=\"&#x2713;\" /><input type=\"hidden\" name=\"authenticity_token\" value=\"eaIF5+lwxB0BM1FUQQQU6DJHuNnu88+OgIJ36pYohSXyB7kIt3pC2lZjiDGtLrcazP9d5bfN/TUJkM692AE2XQ==\" />\n<input type=\"hidden\" name=\"book_id\" id=\"book_id\" value=\"17250\" />\n<input type=\"hidden\" name=\"name\" id=\"name\" value=\"to-read\" />\n<input type=\"hidden\" name=\"unique_id\" id=\"unique_id\" value=\"10_book_17250\" />\n<input type=\"hidden\" name=\"wtr_new\" id=\"wtr_new\" value=\"true\" />\n<input type=\"hidden\" name=\"from_choice\" id=\"from_choice\" value=\"false\" />\n<input type=\"hidden\" name=\"from_home_module\" id=\"from_home_module\" value=\"false\" />\n<input type=\"hidden\" name=\"ref\" id=\"ref\" value=\"\" class=\"wtrLeftUpRef\" />\n<input type=\"hidden\" name=\"existing_review\" id=\"existing_review\" value=\"false\" class=\"wtrExisting\" />\n<input type=\"hidden\" name=\"book_origin\" id=\"book_origin\" value=\"related_works\" />\n<input type=\"hidden\" name=\"page_referrer\" id=\"page_referrer\" value=\"https://www.goodreads.com/\" />\n<input type=\"hidden\" name=\"page_url\" id=\"page_url\" value=\"/book/show/12996.Othello\" />\n<button class=\'wtrToRead\' type=\'submit\'>\n<span class=\'progressTrigger\'>Want to Read<\/span>\n<span class=\'progressIndicator\'>saving…<\/span>\n<\/button>\n<\/form>\n\n<\/div>\n\n<div class=\'wtrRight wtrUp\'>\n<form class=\"hiddenShelfForm\" action=\"/shelf/add_to_shelf\" accept-charset=\"UTF-8\" method=\"post\"><input name=\"utf8\" type=\"hidden\" value=\"&#x2713;\" /><input type=\"hidden\" name=\"authenticity_token\" value=\"B1IAsZVwQPPK54Y3y+zTBz3v3PK3Fv20XG+xbEq9Tw+M97xey3rGNJ23X1InxnD1w1c5zu4ozw/VfQg7BJT8dw==\" />\n<input type=\"hidden\" name=\"unique_id\" id=\"unique_id\" value=\"10_book_17250\" />\n<input type=\"hidden\" name=\"book_id\" id=\"book_id\" value=\"17250\" />\n<input type=\"hidden\" name=\"a\" id=\"a\" />\n<input type=\"hidden\" name=\"name\" id=\"name\" />\n<input type=\"hidden\" name=\"from_choice\" id=\"from_choice\" value=\"false\" />\n<input type=\"hidden\" name=\"from_home_module\" id=\"from_home_module\" value=\"false\" />\n<input type=\"hidden\" name=\"book_origin\" id=\"book_origin\" value=\"related_works\" />\n<input type=\"hidden\" name=\"page_referrer\" id=\"page_referrer\" value=\"https://www.goodreads.com/\" />\n<input type=\"hidden\" name=\"page_url\" id=\"page_url\" value=\"/book/show/12996.Othello\" />\n<\/form>\n\n<button class=\'wtrShelfButton\'><\/button>\n<\/div>\n\n<div class=\'ratingStars wtrRating\'>\n<div class=\'starsErrorTooltip hidden\'>\nError rating book. Refresh and try again.\n<\/div>\n<div class=\'myRating uitext greyText\'>Rate this book<\/div>\n<div class=\'clearRating uitext\'>Clear rating<\/div>\n<div class=\"stars\" data-resource-id=\"17250\" data-user-id=\"129148878\" data-submit-url=\"/review/rate/17250?book_origin=related_works&page_referrer=https%3A%2F%2Fwww.goodreads.com%2F&page_url=%2Fbook%2Fshow%2F12996.Othello&rate_books_page=false&stars_click=false&wtr_button_id=10_book_17250\" data-rating=\"0\"><a class=\"star off\" title=\"did not like it\" href=\"#\" ref=\"\">1 of 5 stars<\/a><a class=\"star off\" title=\"it was ok\" href=\"#\" ref=\"\">2 of 5 stars<\/a><a class=\"star off\" title=\"liked it\" href=\"#\" ref=\"\">3 of 5 stars<\/a><a class=\"star off\" title=\"really liked it\" href=\"#\" ref=\"\">4 of 5 stars<\/a><a class=\"star off\" title=\"it was amazing\" href=\"#\" ref=\"\">5 of 5 stars<\/a><\/div>\n<\/div>\n\n<\/div>\n\n\n\n\n", { style: 'addbook', stem: 'topRight', hook: { tip: 'topRight', target: 'bottomMiddle' }, hideOn: false, width: 400, hideAfter: 0.05, delay: 0.35 });-->
<!--                                                        $('bookCover_17250').observe('prototip:shown', function() {-->
<!--                                                            if (this.up('#box')) {-->
<!--                                                                $$('div.prototip').each(function(i){i.setStyle({zIndex: $('box').getStyle('z-index')})});-->
<!--                                                            } else {-->
<!--                                                                $$('div.prototip').each(function(i){i.setStyle({zIndex: 6000})});-->
<!--                                                            }-->
<!--                                                        });-->
<!---->
<!--                                                        newTip['wrapper'].addClassName('prototipAllowOverflow');-->
<!---->
<!--                                                        $('bookCover_17250').observe('prototip:shown', function () {-->
<!--                                                            $$('div.prototip').each(function (e) {-->
<!--                                                                if ($('bookCover_17250').hasClassName('ignored')) {-->
<!--                                                                    e.setStyle({'display': 'none'});-->
<!--                                                                    return;-->
<!--                                                                }-->
<!--                                                                e.setStyle({'overflow': 'visible'});-->
<!--                                                            });-->
<!--                                                        });-->
<!--                                                        $('bookCover_17250').observe('prototip:hidden', function () {-->
<!--                                                            $$('span.elementTwo').each(function (e) {-->
<!--                                                                if (e.getStyle('display') !== 'none') {-->
<!--                                                                    var lessLink = e.next();-->
<!--                                                                    swapContent(lessLink);-->
<!--                                                                }-->
<!--                                                            });-->
<!--                                                        });-->
<!---->
<!--                                                        //]]>-->
<!--                                                    </script>-->
<!---->
<!--                                                </li>-->
<!--                                                <li class='cover' id='bookCover_1554'>-->
<!--                                                    <a href="https://www.goodreads.com/book/show/1554.Oedipus_Rex"><img alt="Oedipus Rex  (The Theban Plays, #1)" src="https://i.gr-assets.com/images/S/compressed.photo.goodreads.com/books/1388182316l/1554._SX98_.jpg" />-->
<!--                                                    </a>-->
<!---->
<!---->
<!--                                                    <script>-->
<!--                                                        //<![CDATA[-->
<!--                                                        var newTip = new Tip($('bookCover_1554'), "\n\n  <h2><a class=\"readable bookTitle\" href=\"https://www.goodreads.com/book/show/1554.Oedipus_Rex?from_choice=false&amp;from_home_module=false\">Oedipus Rex  (The Theban Plays, #1)<\/a><\/h2>\n\n      <div>\n        by <a class=\"authorName\" href=\"/author/show/1002.Sophocles?a=9&amp;origin=related_works\">Sophocles<\/a>\n      <\/div>\n\n          <div class=\"smallText uitext darkGreyText\">\n            <span class=\"minirating\"><span class=\"stars staticStars notranslate\"><span size=\"12x12\" class=\"staticStar p10\"><\/span><span size=\"12x12\" class=\"staticStar p10\"><\/span><span size=\"12x12\" class=\"staticStar p10\"><\/span><span size=\"12x12\" class=\"staticStar p6\"><\/span><span size=\"12x12\" class=\"staticStar p0\"><\/span><\/span> 3.71 avg rating &mdash; 174,952 ratings<\/span>            &mdash; published -429\n          <\/div>\n\n    <div class=\"addBookTipDescription\">\n      \n<span id=\"freeTextContainer5250879780968598469\">&quot;...what man wins more happiness than just its shape and the ruin when that shape collapses?&quot;\n\nSophocles&apos; Oedipus Rex has never been surpassed for the raw and terrible power with which its hero struggles to answer the eternal question, &quot;Who am I?&quot; Th<\/span>\n  <span id=\"freeText5250879780968598469\" style=\"display:none\">&quot;...what man wins more happiness than just its shape and the ruin when that shape collapses?&quot;\n\nSophocles\' Oedipus Rex has never been surpassed for the raw and terrible power with which its hero struggles to answer the eternal question, &quot;Who am I?&quot; The play, a story of a king who acting entirely in ignorance kills his father and marries his mother, unfolds with shattering power; we are helplessly carried along with Oedipus towards the final, horrific truth. \n\nTo make Oedipus more accessible for the modern reader, our Prestwick House Literary Touchstone Classics includes a glossary of the more difficult words, as well as convenient sidebar notes to enlighten the reader on aspects that may be confusing or overlooked. We hope that the reader may, through this edition, more fully enjoy the beauty of the verse, the wisdom of the insights, and the impact of the drama.<\/span>\n  <a data-text-id=\"5250879780968598469\" href=\"#\" onclick=\"swapContent(\$(this));; return false;\">...more<\/a>\n\n    <\/div>\n\n      <div class=\'wtrButtonContainer\' id=\'11_book_1554\'>\n<div class=\'wtrUp wtrLeft\'>\n<form action=\"/shelf/add_to_shelf\" accept-charset=\"UTF-8\" method=\"post\"><input name=\"utf8\" type=\"hidden\" value=\"&#x2713;\" /><input type=\"hidden\" name=\"authenticity_token\" value=\"sv6r8trvzNT2wWsPxPsay79tptMm99HE7GDQERUWzqM5WxcdhOVKE6GRsmoo0bk5QdVD73/J439lcmlGWz992w==\" />\n<input type=\"hidden\" name=\"book_id\" id=\"book_id\" value=\"1554\" />\n<input type=\"hidden\" name=\"name\" id=\"name\" value=\"to-read\" />\n<input type=\"hidden\" name=\"unique_id\" id=\"unique_id\" value=\"11_book_1554\" />\n<input type=\"hidden\" name=\"wtr_new\" id=\"wtr_new\" value=\"true\" />\n<input type=\"hidden\" name=\"from_choice\" id=\"from_choice\" value=\"false\" />\n<input type=\"hidden\" name=\"from_home_module\" id=\"from_home_module\" value=\"false\" />\n<input type=\"hidden\" name=\"ref\" id=\"ref\" value=\"\" class=\"wtrLeftUpRef\" />\n<input type=\"hidden\" name=\"existing_review\" id=\"existing_review\" value=\"false\" class=\"wtrExisting\" />\n<input type=\"hidden\" name=\"book_origin\" id=\"book_origin\" value=\"related_works\" />\n<input type=\"hidden\" name=\"page_referrer\" id=\"page_referrer\" value=\"https://www.goodreads.com/\" />\n<input type=\"hidden\" name=\"page_url\" id=\"page_url\" value=\"/book/show/12996.Othello\" />\n<button class=\'wtrToRead\' type=\'submit\'>\n<span class=\'progressTrigger\'>Want to Read<\/span>\n<span class=\'progressIndicator\'>saving…<\/span>\n<\/button>\n<\/form>\n\n<\/div>\n\n<div class=\'wtrRight wtrUp\'>\n<form class=\"hiddenShelfForm\" action=\"/shelf/add_to_shelf\" accept-charset=\"UTF-8\" method=\"post\"><input name=\"utf8\" type=\"hidden\" value=\"&#x2713;\" /><input type=\"hidden\" name=\"authenticity_token\" value=\"777q79GLImuvsLM/uh+X/Ldr94uhEMhSi7Bn5RtxAqNkG1YAj4GkrPjgalpWNTQOSdMSt/gu+ukCot6yVVix2w==\" />\n<input type=\"hidden\" name=\"unique_id\" id=\"unique_id\" value=\"11_book_1554\" />\n<input type=\"hidden\" name=\"book_id\" id=\"book_id\" value=\"1554\" />\n<input type=\"hidden\" name=\"a\" id=\"a\" />\n<input type=\"hidden\" name=\"name\" id=\"name\" />\n<input type=\"hidden\" name=\"from_choice\" id=\"from_choice\" value=\"false\" />\n<input type=\"hidden\" name=\"from_home_module\" id=\"from_home_module\" value=\"false\" />\n<input type=\"hidden\" name=\"book_origin\" id=\"book_origin\" value=\"related_works\" />\n<input type=\"hidden\" name=\"page_referrer\" id=\"page_referrer\" value=\"https://www.goodreads.com/\" />\n<input type=\"hidden\" name=\"page_url\" id=\"page_url\" value=\"/book/show/12996.Othello\" />\n<\/form>\n\n<button class=\'wtrShelfButton\'><\/button>\n<\/div>\n\n<div class=\'ratingStars wtrRating\'>\n<div class=\'starsErrorTooltip hidden\'>\nError rating book. Refresh and try again.\n<\/div>\n<div class=\'myRating uitext greyText\'>Rate this book<\/div>\n<div class=\'clearRating uitext\'>Clear rating<\/div>\n<div class=\"stars\" data-resource-id=\"1554\" data-user-id=\"129148878\" data-submit-url=\"/review/rate/1554?book_origin=related_works&page_referrer=https%3A%2F%2Fwww.goodreads.com%2F&page_url=%2Fbook%2Fshow%2F12996.Othello&rate_books_page=false&stars_click=false&wtr_button_id=11_book_1554\" data-rating=\"0\"><a class=\"star off\" title=\"did not like it\" href=\"#\" ref=\"\">1 of 5 stars<\/a><a class=\"star off\" title=\"it was ok\" href=\"#\" ref=\"\">2 of 5 stars<\/a><a class=\"star off\" title=\"liked it\" href=\"#\" ref=\"\">3 of 5 stars<\/a><a class=\"star off\" title=\"really liked it\" href=\"#\" ref=\"\">4 of 5 stars<\/a><a class=\"star off\" title=\"it was amazing\" href=\"#\" ref=\"\">5 of 5 stars<\/a><\/div>\n<\/div>\n\n<\/div>\n\n\n\n\n", { style: 'addbook', stem: 'topRight', hook: { tip: 'topRight', target: 'bottomMiddle' }, hideOn: false, width: 400, hideAfter: 0.05, delay: 0.35 });-->
<!--                                                        $('bookCover_1554').observe('prototip:shown', function() {-->
<!--                                                            if (this.up('#box')) {-->
<!--                                                                $$('div.prototip').each(function(i){i.setStyle({zIndex: $('box').getStyle('z-index')})});-->
<!--                                                            } else {-->
<!--                                                                $$('div.prototip').each(function(i){i.setStyle({zIndex: 6000})});-->
<!--                                                            }-->
<!--                                                        });-->
<!---->
<!--                                                        newTip['wrapper'].addClassName('prototipAllowOverflow');-->
<!---->
<!--                                                        $('bookCover_1554').observe('prototip:shown', function () {-->
<!--                                                            $$('div.prototip').each(function (e) {-->
<!--                                                                if ($('bookCover_1554').hasClassName('ignored')) {-->
<!--                                                                    e.setStyle({'display': 'none'});-->
<!--                                                                    return;-->
<!--                                                                }-->
<!--                                                                e.setStyle({'overflow': 'visible'});-->
<!--                                                            });-->
<!--                                                        });-->
<!--                                                        $('bookCover_1554').observe('prototip:hidden', function () {-->
<!--                                                            $$('span.elementTwo').each(function (e) {-->
<!--                                                                if (e.getStyle('display') !== 'none') {-->
<!--                                                                    var lessLink = e.next();-->
<!--                                                                    swapContent(lessLink);-->
<!--                                                                }-->
<!--                                                            });-->
<!--                                                        });-->
<!---->
<!--                                                        //]]>-->
<!--                                                    </script>-->
<!---->
<!--                                                </li>-->
<!--                                                <li class='cover' id='bookCover_18525'>-->
<!--                                                    <a href="https://www.goodreads.com/book/show/18525.Dr_Faustus"><img alt="Dr. Faustus" src="https://i.gr-assets.com/images/S/compressed.photo.goodreads.com/books/1392156779l/18525._SX98_.jpg" />-->
<!--                                                    </a>-->
<!---->
<!---->
<!--                                                    <script>-->
<!--                                                        //<![CDATA[-->
<!--                                                        var newTip = new Tip($('bookCover_18525'), "\n\n  <h2><a class=\"readable bookTitle\" href=\"https://www.goodreads.com/book/show/18525.Dr_Faustus?from_choice=false&amp;from_home_module=false\">Dr. Faustus<\/a><\/h2>\n\n      <div>\n        by <a class=\"authorName\" href=\"/author/show/11155.Christopher_Marlowe?a=9&amp;origin=related_works\">Christopher Marlowe<\/a>\n      <\/div>\n\n          <div class=\"smallText uitext darkGreyText\">\n            <span class=\"minirating\"><span class=\"stars staticStars notranslate\"><span size=\"12x12\" class=\"staticStar p10\"><\/span><span size=\"12x12\" class=\"staticStar p10\"><\/span><span size=\"12x12\" class=\"staticStar p10\"><\/span><span size=\"12x12\" class=\"staticStar p6\"><\/span><span size=\"12x12\" class=\"staticStar p0\"><\/span><\/span> 3.81 avg rating &mdash; 56,195 ratings<\/span>            &mdash; published 1589\n          <\/div>\n\n    <div class=\"addBookTipDescription\">\n      \n<span id=\"freeTextContainer1170070234835176373\">The Tragical History of the Life and Death of Doctor Faustus, commonly referred to simply as Doctor Faustus, is an Elizabethan tragedy by Christopher Marlowe, based on German stories about the title character Faust, that was first performed sometime <\/span>\n  <span id=\"freeText1170070234835176373\" style=\"display:none\">The Tragical History of the Life and Death of Doctor Faustus, commonly referred to simply as Doctor Faustus, is an Elizabethan tragedy by Christopher Marlowe, based on German stories about the title character Faust, that was first performed sometime between 1588 and Marlowe\'s death in 1593. Two different versions of the play were published in the Jacobean era, several years later. The powerful effect of early productions of the play is indicated by the legends that quickly accrued around them—that actual devils once appeared on the stage during a performance, &quot;to the great amazement of both the actors and spectators&quot;, a sight that was said to have driven some spectators mad.<\/span>\n  <a data-text-id=\"1170070234835176373\" href=\"#\" onclick=\"swapContent(\$(this));; return false;\">...more<\/a>\n\n    <\/div>\n\n      <div class=\'wtrButtonContainer\' id=\'12_book_18525\'>\n<div class=\'wtrUp wtrLeft\'>\n<form action=\"/shelf/add_to_shelf\" accept-charset=\"UTF-8\" method=\"post\"><input name=\"utf8\" type=\"hidden\" value=\"&#x2713;\" /><input type=\"hidden\" name=\"authenticity_token\" value=\"A4kxvM601VH4UkT68PMlJbFN3rdWG0mSfRW5YIAyxOyILI1TkL5Tlq8CnZ8c2YbXT/U7iw8leyn0BwA3zht3lA==\" />\n<input type=\"hidden\" name=\"book_id\" id=\"book_id\" value=\"18525\" />\n<input type=\"hidden\" name=\"name\" id=\"name\" value=\"to-read\" />\n<input type=\"hidden\" name=\"unique_id\" id=\"unique_id\" value=\"12_book_18525\" />\n<input type=\"hidden\" name=\"wtr_new\" id=\"wtr_new\" value=\"true\" />\n<input type=\"hidden\" name=\"from_choice\" id=\"from_choice\" value=\"false\" />\n<input type=\"hidden\" name=\"from_home_module\" id=\"from_home_module\" value=\"false\" />\n<input type=\"hidden\" name=\"ref\" id=\"ref\" value=\"\" class=\"wtrLeftUpRef\" />\n<input type=\"hidden\" name=\"existing_review\" id=\"existing_review\" value=\"false\" class=\"wtrExisting\" />\n<input type=\"hidden\" name=\"book_origin\" id=\"book_origin\" value=\"related_works\" />\n<input type=\"hidden\" name=\"page_referrer\" id=\"page_referrer\" value=\"https://www.goodreads.com/\" />\n<input type=\"hidden\" name=\"page_url\" id=\"page_url\" value=\"/book/show/12996.Othello\" />\n<button class=\'wtrToRead\' type=\'submit\'>\n<span class=\'progressTrigger\'>Want to Read<\/span>\n<span class=\'progressIndicator\'>saving…<\/span>\n<\/button>\n<\/form>\n\n<\/div>\n\n<div class=\'wtrRight wtrUp\'>\n<form class=\"hiddenShelfForm\" action=\"/shelf/add_to_shelf\" accept-charset=\"UTF-8\" method=\"post\"><input name=\"utf8\" type=\"hidden\" value=\"&#x2713;\" /><input type=\"hidden\" name=\"authenticity_token\" value=\"ldyApIy/RdXxetsq6ChconzlswCThQmqv1Avqg1PLNgeeTxL0rXDEqYqAk8EAv9Qgl1WPMq7OxE2Qpb9Q2afoA==\" />\n<input type=\"hidden\" name=\"unique_id\" id=\"unique_id\" value=\"12_book_18525\" />\n<input type=\"hidden\" name=\"book_id\" id=\"book_id\" value=\"18525\" />\n<input type=\"hidden\" name=\"a\" id=\"a\" />\n<input type=\"hidden\" name=\"name\" id=\"name\" />\n<input type=\"hidden\" name=\"from_choice\" id=\"from_choice\" value=\"false\" />\n<input type=\"hidden\" name=\"from_home_module\" id=\"from_home_module\" value=\"false\" />\n<input type=\"hidden\" name=\"book_origin\" id=\"book_origin\" value=\"related_works\" />\n<input type=\"hidden\" name=\"page_referrer\" id=\"page_referrer\" value=\"https://www.goodreads.com/\" />\n<input type=\"hidden\" name=\"page_url\" id=\"page_url\" value=\"/book/show/12996.Othello\" />\n<\/form>\n\n<button class=\'wtrShelfButton\'><\/button>\n<\/div>\n\n<div class=\'ratingStars wtrRating\'>\n<div class=\'starsErrorTooltip hidden\'>\nError rating book. Refresh and try again.\n<\/div>\n<div class=\'myRating uitext greyText\'>Rate this book<\/div>\n<div class=\'clearRating uitext\'>Clear rating<\/div>\n<div class=\"stars\" data-resource-id=\"18525\" data-user-id=\"129148878\" data-submit-url=\"/review/rate/18525?book_origin=related_works&page_referrer=https%3A%2F%2Fwww.goodreads.com%2F&page_url=%2Fbook%2Fshow%2F12996.Othello&rate_books_page=false&stars_click=false&wtr_button_id=12_book_18525\" data-rating=\"0\"><a class=\"star off\" title=\"did not like it\" href=\"#\" ref=\"\">1 of 5 stars<\/a><a class=\"star off\" title=\"it was ok\" href=\"#\" ref=\"\">2 of 5 stars<\/a><a class=\"star off\" title=\"liked it\" href=\"#\" ref=\"\">3 of 5 stars<\/a><a class=\"star off\" title=\"really liked it\" href=\"#\" ref=\"\">4 of 5 stars<\/a><a class=\"star off\" title=\"it was amazing\" href=\"#\" ref=\"\">5 of 5 stars<\/a><\/div>\n<\/div>\n\n<\/div>\n\n\n\n\n", { style: 'addbook', stem: 'topRight', hook: { tip: 'topRight', target: 'bottomMiddle' }, hideOn: false, width: 400, hideAfter: 0.05, delay: 0.35 });-->
<!--                                                        $('bookCover_18525').observe('prototip:shown', function() {-->
<!--                                                            if (this.up('#box')) {-->
<!--                                                                $$('div.prototip').each(function(i){i.setStyle({zIndex: $('box').getStyle('z-index')})});-->
<!--                                                            } else {-->
<!--                                                                $$('div.prototip').each(function(i){i.setStyle({zIndex: 6000})});-->
<!--                                                            }-->
<!--                                                        });-->
<!---->
<!--                                                        newTip['wrapper'].addClassName('prototipAllowOverflow');-->
<!---->
<!--                                                        $('bookCover_18525').observe('prototip:shown', function () {-->
<!--                                                            $$('div.prototip').each(function (e) {-->
<!--                                                                if ($('bookCover_18525').hasClassName('ignored')) {-->
<!--                                                                    e.setStyle({'display': 'none'});-->
<!--                                                                    return;-->
<!--                                                                }-->
<!--                                                                e.setStyle({'overflow': 'visible'});-->
<!--                                                            });-->
<!--                                                        });-->
<!--                                                        $('bookCover_18525').observe('prototip:hidden', function () {-->
<!--                                                            $$('span.elementTwo').each(function (e) {-->
<!--                                                                if (e.getStyle('display') !== 'none') {-->
<!--                                                                    var lessLink = e.next();-->
<!--                                                                    swapContent(lessLink);-->
<!--                                                                }-->
<!--                                                            });-->
<!--                                                        });-->
<!---->
<!--                                                        //]]>-->
<!--                                                    </script>-->
<!---->
<!--                                                </li>-->
<!--                                                <li class='cover' id='bookCover_2696'>-->
<!--                                                    <a href="https://www.goodreads.com/book/show/2696.The_Canterbury_Tales"><img alt="The Canterbury Tales" src="https://i.gr-assets.com/images/S/compressed.photo.goodreads.com/books/1261208589l/2696._SX98_.jpg" />-->
<!--                                                    </a>-->
<!---->
<!---->
<!--                                                    <script>-->
<!--                                                        //<![CDATA[-->
<!--                                                        var newTip = new Tip($('bookCover_2696'), "\n\n  <h2><a class=\"readable bookTitle\" href=\"https://www.goodreads.com/book/show/2696.The_Canterbury_Tales?from_choice=false&amp;from_home_module=false\">The Canterbury Tales<\/a><\/h2>\n\n      <div>\n        by <a class=\"authorName\" href=\"/author/show/1838.Geoffrey_Chaucer?a=9&amp;origin=related_works\">Geoffrey Chaucer<\/a>\n      <\/div>\n\n          <div class=\"smallText uitext darkGreyText\">\n            <span class=\"minirating\"><span class=\"stars staticStars notranslate\"><span size=\"12x12\" class=\"staticStar p10\"><\/span><span size=\"12x12\" class=\"staticStar p10\"><\/span><span size=\"12x12\" class=\"staticStar p10\"><\/span><span size=\"12x12\" class=\"staticStar p6\"><\/span><span size=\"12x12\" class=\"staticStar p0\"><\/span><\/span> 3.51 avg rating &mdash; 193,126 ratings<\/span>            &mdash; published 1400\n          <\/div>\n\n    <div class=\"addBookTipDescription\">\n      \n<span id=\"freeTextContainer11851117922587222370\">The procession that crosses Chaucer&apos;s pages is as full of life and as richly textured as a medieval tapestry. The Knight, the Miller, the Friar, the Squire, the Prioress, the Wife of Bath, and others who make up the cast of characters -- including Ch<\/span>\n  <span id=\"freeText11851117922587222370\" style=\"display:none\">The procession that crosses Chaucer\'s pages is as full of life and as richly textured as a medieval tapestry. The Knight, the Miller, the Friar, the Squire, the Prioress, the Wife of Bath, and others who make up the cast of characters -- including Chaucer himself -- are real people, with human emotions and weaknesses. When it is remembered that Chaucer wrote in English at a time when Latin was the standard literary language across western Europe, the magnitude of his achievement is even more remarkable. But Chaucer\'s genius needs no historical introduction; it bursts forth from every page of The Canterbury Tales.\n\nIf we trust the General Prologue, Chaucer intended that each pilgrim should tell two tales on the way to Canterbury and two tales on the way back. He never finished his enormous project and even the completed tales were not finally revised. Scholars are uncertain about the order of the tales. As the printing press had yet to be invented when Chaucer wrote his works, The Canterbury Tales has been passed down in several handwritten manuscripts.<\/span>\n  <a data-text-id=\"11851117922587222370\" href=\"#\" onclick=\"swapContent(\$(this));; return false;\">...more<\/a>\n\n    <\/div>\n\n      <div class=\'wtrButtonContainer\' id=\'13_book_2696\'>\n<div class=\'wtrUp wtrLeft\'>\n<form action=\"/shelf/add_to_shelf\" accept-charset=\"UTF-8\" method=\"post\"><input name=\"utf8\" type=\"hidden\" value=\"&#x2713;\" /><input type=\"hidden\" name=\"authenticity_token\" value=\"JmudK9ZVbZG8ZhHpPU8VMxmRlXNJl0C32P9f7Az0oHGtziHEiF/rVus2yIzRZbbB5ylwTxCpcgxR7ea7Qt0TCQ==\" />\n<input type=\"hidden\" name=\"book_id\" id=\"book_id\" value=\"2696\" />\n<input type=\"hidden\" name=\"name\" id=\"name\" value=\"to-read\" />\n<input type=\"hidden\" name=\"unique_id\" id=\"unique_id\" value=\"13_book_2696\" />\n<input type=\"hidden\" name=\"wtr_new\" id=\"wtr_new\" value=\"true\" />\n<input type=\"hidden\" name=\"from_choice\" id=\"from_choice\" value=\"false\" />\n<input type=\"hidden\" name=\"from_home_module\" id=\"from_home_module\" value=\"false\" />\n<input type=\"hidden\" name=\"ref\" id=\"ref\" value=\"\" class=\"wtrLeftUpRef\" />\n<input type=\"hidden\" name=\"existing_review\" id=\"existing_review\" value=\"false\" class=\"wtrExisting\" />\n<input type=\"hidden\" name=\"book_origin\" id=\"book_origin\" value=\"related_works\" />\n<input type=\"hidden\" name=\"page_referrer\" id=\"page_referrer\" value=\"https://www.goodreads.com/\" />\n<input type=\"hidden\" name=\"page_url\" id=\"page_url\" value=\"/book/show/12996.Othello\" />\n<button class=\'wtrToRead\' type=\'submit\'>\n<span class=\'progressTrigger\'>Want to Read<\/span>\n<span class=\'progressIndicator\'>saving…<\/span>\n<\/button>\n<\/form>\n\n<\/div>\n\n<div class=\'wtrRight wtrUp\'>\n<form class=\"hiddenShelfForm\" action=\"/shelf/add_to_shelf\" accept-charset=\"UTF-8\" method=\"post\"><input name=\"utf8\" type=\"hidden\" value=\"&#x2713;\" /><input type=\"hidden\" name=\"authenticity_token\" value=\"tV2yDJbxPpNL8zH8p5Ky0j8QDgK8/ap00tVmqpq/QsA++A7jyPu4VByj6JlLuBEgwajrPuXDmM9bx9/91JbxuA==\" />\n<input type=\"hidden\" name=\"unique_id\" id=\"unique_id\" value=\"13_book_2696\" />\n<input type=\"hidden\" name=\"book_id\" id=\"book_id\" value=\"2696\" />\n<input type=\"hidden\" name=\"a\" id=\"a\" />\n<input type=\"hidden\" name=\"name\" id=\"name\" />\n<input type=\"hidden\" name=\"from_choice\" id=\"from_choice\" value=\"false\" />\n<input type=\"hidden\" name=\"from_home_module\" id=\"from_home_module\" value=\"false\" />\n<input type=\"hidden\" name=\"book_origin\" id=\"book_origin\" value=\"related_works\" />\n<input type=\"hidden\" name=\"page_referrer\" id=\"page_referrer\" value=\"https://www.goodreads.com/\" />\n<input type=\"hidden\" name=\"page_url\" id=\"page_url\" value=\"/book/show/12996.Othello\" />\n<\/form>\n\n<button class=\'wtrShelfButton\'><\/button>\n<\/div>\n\n<div class=\'ratingStars wtrRating\'>\n<div class=\'starsErrorTooltip hidden\'>\nError rating book. Refresh and try again.\n<\/div>\n<div class=\'myRating uitext greyText\'>Rate this book<\/div>\n<div class=\'clearRating uitext\'>Clear rating<\/div>\n<div class=\"stars\" data-resource-id=\"2696\" data-user-id=\"129148878\" data-submit-url=\"/review/rate/2696?book_origin=related_works&page_referrer=https%3A%2F%2Fwww.goodreads.com%2F&page_url=%2Fbook%2Fshow%2F12996.Othello&rate_books_page=false&stars_click=false&wtr_button_id=13_book_2696\" data-rating=\"0\"><a class=\"star off\" title=\"did not like it\" href=\"#\" ref=\"\">1 of 5 stars<\/a><a class=\"star off\" title=\"it was ok\" href=\"#\" ref=\"\">2 of 5 stars<\/a><a class=\"star off\" title=\"liked it\" href=\"#\" ref=\"\">3 of 5 stars<\/a><a class=\"star off\" title=\"really liked it\" href=\"#\" ref=\"\">4 of 5 stars<\/a><a class=\"star off\" title=\"it was amazing\" href=\"#\" ref=\"\">5 of 5 stars<\/a><\/div>\n<\/div>\n\n<\/div>\n\n\n\n\n", { style: 'addbook', stem: 'topRight', hook: { tip: 'topRight', target: 'bottomMiddle' }, hideOn: false, width: 400, hideAfter: 0.05, delay: 0.35 });-->
<!--                                                        $('bookCover_2696').observe('prototip:shown', function() {-->
<!--                                                            if (this.up('#box')) {-->
<!--                                                                $$('div.prototip').each(function(i){i.setStyle({zIndex: $('box').getStyle('z-index')})});-->
<!--                                                            } else {-->
<!--                                                                $$('div.prototip').each(function(i){i.setStyle({zIndex: 6000})});-->
<!--                                                            }-->
<!--                                                        });-->
<!---->
<!--                                                        newTip['wrapper'].addClassName('prototipAllowOverflow');-->
<!---->
<!--                                                        $('bookCover_2696').observe('prototip:shown', function () {-->
<!--                                                            $$('div.prototip').each(function (e) {-->
<!--                                                                if ($('bookCover_2696').hasClassName('ignored')) {-->
<!--                                                                    e.setStyle({'display': 'none'});-->
<!--                                                                    return;-->
<!--                                                                }-->
<!--                                                                e.setStyle({'overflow': 'visible'});-->
<!--                                                            });-->
<!--                                                        });-->
<!--                                                        $('bookCover_2696').observe('prototip:hidden', function () {-->
<!--                                                            $$('span.elementTwo').each(function (e) {-->
<!--                                                                if (e.getStyle('display') !== 'none') {-->
<!--                                                                    var lessLink = e.next();-->
<!--                                                                    swapContent(lessLink);-->
<!--                                                                }-->
<!--                                                            });-->
<!--                                                        });-->
<!---->
<!--                                                        //]]>-->
<!--                                                    </script>-->
<!---->
<!--                                                </li>-->
<!--                                                <li class='cover' id='bookCover_37793'>-->
<!--                                                    <a href="https://www.goodreads.com/book/show/37793.A_Doll_s_House"><img alt="A Doll&#39;s House" src="https://i.gr-assets.com/images/S/compressed.photo.goodreads.com/books/1427119396l/37793._SX98_.jpg" />-->
<!--                                                    </a>-->
<!---->
<!---->
<!--                                                    <script>-->
<!--                                                        //<![CDATA[-->
<!--                                                        var newTip = new Tip($('bookCover_37793'), "\n\n  <h2><a class=\"readable bookTitle\" href=\"https://www.goodreads.com/book/show/37793.A_Doll_s_House?from_choice=false&amp;from_home_module=false\">A Doll&#39;s House<\/a><\/h2>\n\n      <div>\n        by <a class=\"authorName\" href=\"/author/show/2730977.Henrik_Ibsen?a=9&amp;origin=related_works\">Henrik Ibsen<\/a>\n      <\/div>\n\n          <div class=\"smallText uitext darkGreyText\">\n            <span class=\"minirating\"><span class=\"stars staticStars notranslate\"><span size=\"12x12\" class=\"staticStar p10\"><\/span><span size=\"12x12\" class=\"staticStar p10\"><\/span><span size=\"12x12\" class=\"staticStar p10\"><\/span><span size=\"12x12\" class=\"staticStar p6\"><\/span><span size=\"12x12\" class=\"staticStar p0\"><\/span><\/span> 3.74 avg rating &mdash; 109,192 ratings<\/span>            &mdash; published 1879\n          <\/div>\n\n    <div class=\"addBookTipDescription\">\n      \n<span id=\"freeTextContainer10024326807192700856\">\n  A Doll&apos;s House (1879), is a masterpiece of theatrical craft which, for the first time portrayed the tragic hypocrisy of Victorian middle class marriage on the stage. The play ushered in a new social era and &quot;exploded like a bomb into contemporary <\/span>\n  <span id=\"freeText10024326807192700856\" style=\"display:none\">\n  A Doll\'s House (1879), is a masterpiece of theatrical craft which, for the first time portrayed the tragic hypocrisy of Victorian middle class marriage on the stage. The play ushered in a new social era and &quot;exploded like a bomb into contemporary life&quot;.  \n  The Student Edition contains these exclusive features: \n  \n    ·         A chronology of the playwright\'s life and work\n    ·         An introduction giving the background of the play\n    ·         Commentary on themes, characters. language and style\n    ·         Notes on individual words and phrases in the text\n    ·         Questions for further study\n    ·         Bibliography for further reading.\n  \n   \n<\/span>\n  <a data-text-id=\"10024326807192700856\" href=\"#\" onclick=\"swapContent(\$(this));; return false;\">...more<\/a>\n\n    <\/div>\n\n      <div class=\'wtrButtonContainer\' id=\'14_book_37793\'>\n<div class=\'wtrUp wtrLeft\'>\n<form action=\"/shelf/add_to_shelf\" accept-charset=\"UTF-8\" method=\"post\"><input name=\"utf8\" type=\"hidden\" value=\"&#x2713;\" /><input type=\"hidden\" name=\"authenticity_token\" value=\"Fy9k8Jmi8YV17A0qUONB626zw0gSr9grkfstOJ4zfRmcitgfx6h3QiK81E+8yeIZkAsmdEuR6pAY6ZRv0BrOYQ==\" />\n<input type=\"hidden\" name=\"book_id\" id=\"book_id\" value=\"37793\" />\n<input type=\"hidden\" name=\"name\" id=\"name\" value=\"to-read\" />\n<input type=\"hidden\" name=\"unique_id\" id=\"unique_id\" value=\"14_book_37793\" />\n<input type=\"hidden\" name=\"wtr_new\" id=\"wtr_new\" value=\"true\" />\n<input type=\"hidden\" name=\"from_choice\" id=\"from_choice\" value=\"false\" />\n<input type=\"hidden\" name=\"from_home_module\" id=\"from_home_module\" value=\"false\" />\n<input type=\"hidden\" name=\"ref\" id=\"ref\" value=\"\" class=\"wtrLeftUpRef\" />\n<input type=\"hidden\" name=\"existing_review\" id=\"existing_review\" value=\"false\" class=\"wtrExisting\" />\n<input type=\"hidden\" name=\"book_origin\" id=\"book_origin\" value=\"related_works\" />\n<input type=\"hidden\" name=\"page_referrer\" id=\"page_referrer\" value=\"https://www.goodreads.com/\" />\n<input type=\"hidden\" name=\"page_url\" id=\"page_url\" value=\"/book/show/12996.Othello\" />\n<button class=\'wtrToRead\' type=\'submit\'>\n<span class=\'progressTrigger\'>Want to Read<\/span>\n<span class=\'progressIndicator\'>saving…<\/span>\n<\/button>\n<\/form>\n\n<\/div>\n\n<div class=\'wtrRight wtrUp\'>\n<form class=\"hiddenShelfForm\" action=\"/shelf/add_to_shelf\" accept-charset=\"UTF-8\" method=\"post\"><input name=\"utf8\" type=\"hidden\" value=\"&#x2713;\" /><input type=\"hidden\" name=\"authenticity_token\" value=\"OB09/O3xVtlS+0HMGcsLx+xaK6ismUsmFnXzslGeq1uzuIETs/vQHgWrmKn14ag1EuLOlPWneZ2fZ0rlH7cYIw==\" />\n<input type=\"hidden\" name=\"unique_id\" id=\"unique_id\" value=\"14_book_37793\" />\n<input type=\"hidden\" name=\"book_id\" id=\"book_id\" value=\"37793\" />\n<input type=\"hidden\" name=\"a\" id=\"a\" />\n<input type=\"hidden\" name=\"name\" id=\"name\" />\n<input type=\"hidden\" name=\"from_choice\" id=\"from_choice\" value=\"false\" />\n<input type=\"hidden\" name=\"from_home_module\" id=\"from_home_module\" value=\"false\" />\n<input type=\"hidden\" name=\"book_origin\" id=\"book_origin\" value=\"related_works\" />\n<input type=\"hidden\" name=\"page_referrer\" id=\"page_referrer\" value=\"https://www.goodreads.com/\" />\n<input type=\"hidden\" name=\"page_url\" id=\"page_url\" value=\"/book/show/12996.Othello\" />\n<\/form>\n\n<button class=\'wtrShelfButton\'><\/button>\n<\/div>\n\n<div class=\'ratingStars wtrRating\'>\n<div class=\'starsErrorTooltip hidden\'>\nError rating book. Refresh and try again.\n<\/div>\n<div class=\'myRating uitext greyText\'>Rate this book<\/div>\n<div class=\'clearRating uitext\'>Clear rating<\/div>\n<div class=\"stars\" data-resource-id=\"37793\" data-user-id=\"129148878\" data-submit-url=\"/review/rate/37793?book_origin=related_works&page_referrer=https%3A%2F%2Fwww.goodreads.com%2F&page_url=%2Fbook%2Fshow%2F12996.Othello&rate_books_page=false&stars_click=false&wtr_button_id=14_book_37793\" data-rating=\"0\"><a class=\"star off\" title=\"did not like it\" href=\"#\" ref=\"\">1 of 5 stars<\/a><a class=\"star off\" title=\"it was ok\" href=\"#\" ref=\"\">2 of 5 stars<\/a><a class=\"star off\" title=\"liked it\" href=\"#\" ref=\"\">3 of 5 stars<\/a><a class=\"star off\" title=\"really liked it\" href=\"#\" ref=\"\">4 of 5 stars<\/a><a class=\"star off\" title=\"it was amazing\" href=\"#\" ref=\"\">5 of 5 stars<\/a><\/div>\n<\/div>\n\n<\/div>\n\n\n\n\n", { style: 'addbook', stem: 'topRight', hook: { tip: 'topRight', target: 'bottomMiddle' }, hideOn: false, width: 400, hideAfter: 0.05, delay: 0.35 });-->
<!--                                                        $('bookCover_37793').observe('prototip:shown', function() {-->
<!--                                                            if (this.up('#box')) {-->
<!--                                                                $$('div.prototip').each(function(i){i.setStyle({zIndex: $('box').getStyle('z-index')})});-->
<!--                                                            } else {-->
<!--                                                                $$('div.prototip').each(function(i){i.setStyle({zIndex: 6000})});-->
<!--                                                            }-->
<!--                                                        });-->
<!---->
<!--                                                        newTip['wrapper'].addClassName('prototipAllowOverflow');-->
<!---->
<!--                                                        $('bookCover_37793').observe('prototip:shown', function () {-->
<!--                                                            $$('div.prototip').each(function (e) {-->
<!--                                                                if ($('bookCover_37793').hasClassName('ignored')) {-->
<!--                                                                    e.setStyle({'display': 'none'});-->
<!--                                                                    return;-->
<!--                                                                }-->
<!--                                                                e.setStyle({'overflow': 'visible'});-->
<!--                                                            });-->
<!--                                                        });-->
<!--                                                        $('bookCover_37793').observe('prototip:hidden', function () {-->
<!--                                                            $$('span.elementTwo').each(function (e) {-->
<!--                                                                if (e.getStyle('display') !== 'none') {-->
<!--                                                                    var lessLink = e.next();-->
<!--                                                                    swapContent(lessLink);-->
<!--                                                                }-->
<!--                                                            });-->
<!--                                                        });-->
<!---->
<!--                                                        //]]>-->
<!--                                                    </script>-->
<!---->
<!--                                                </li>-->
<!--                                                <li class='cover' id='bookCover_92303'>-->
<!--                                                    <a href="https://www.goodreads.com/book/show/92303.The_Importance_of_Being_Earnest"><img alt="The Importance of Being Earnest" src="https://i.gr-assets.com/images/S/compressed.photo.goodreads.com/books/1298438452l/92303._SX98_.jpg" />-->
<!--                                                    </a>-->
<!---->
<!---->
<!--                                                    <script>-->
<!--                                                        //<![CDATA[-->
<!--                                                        var newTip = new Tip($('bookCover_92303'), "\n\n  <h2><a class=\"readable bookTitle\" href=\"https://www.goodreads.com/book/show/92303.The_Importance_of_Being_Earnest?from_choice=false&amp;from_home_module=false\">The Importance of Being Earnest<\/a><\/h2>\n\n      <div>\n        by <a class=\"authorName\" href=\"/author/show/3565.Oscar_Wilde?a=9&amp;origin=related_works\">Oscar Wilde<\/a>\n      <\/div>\n\n          <div class=\"smallText uitext darkGreyText\">\n            <span class=\"minirating\"><span class=\"stars staticStars notranslate\"><span size=\"12x12\" class=\"staticStar p10\"><\/span><span size=\"12x12\" class=\"staticStar p10\"><\/span><span size=\"12x12\" class=\"staticStar p10\"><\/span><span size=\"12x12\" class=\"staticStar p10\"><\/span><span size=\"12x12\" class=\"staticStar p3\"><\/span><\/span> 4.18 avg rating &mdash; 308,998 ratings<\/span>            &mdash; published 1895\n          <\/div>\n\n    <div class=\"addBookTipDescription\">\n      \n<span id=\"freeTextContainer13172946484632741753\">Oscar Wilde&apos;s madcap farce about mistaken identities, secret engagements, and lovers entanglements still delights readers more than a century after its 1895 publication and premiere performance. The rapid-fire wit and eccentric characters of The Impo<\/span>\n  <span id=\"freeText13172946484632741753\" style=\"display:none\">Oscar Wilde\'s madcap farce about mistaken identities, secret engagements, and lovers entanglements still delights readers more than a century after its 1895 publication and premiere performance. The rapid-fire wit and eccentric characters of The Importance of Being Earnest have made it a mainstay of the high school curriculum for decades.\n\nCecily Cardew and Gwendolen Fairfax are both in love with the same mythical suitor. Jack Worthing has wooed Gwendolen as Ernest while Algernon has also posed as Ernest to win the heart of Jack\'s ward, Cecily. When all four arrive at Jack\'s country home on the same weekend the &quot;rivals&quot; to fight for Ernest\'s undivided attention and the &quot;Ernests&quot; to claim their beloveds pandemonium breaks loose. Only a senile nursemaid and an old, discarded hand-bag can save the day!\n\nThis Prestwick House Literary Touchstone Edition includes a glossary and reader\'s notes to help the modern reader appreciate Wilde\'s wry wit and elaborate plot twists.<\/span>\n  <a data-text-id=\"13172946484632741753\" href=\"#\" onclick=\"swapContent(\$(this));; return false;\">...more<\/a>\n\n    <\/div>\n\n      <div class=\'wtrButtonContainer\' id=\'15_book_92303\'>\n<div class=\'wtrUp wtrLeft\'>\n<form action=\"/shelf/add_to_shelf\" accept-charset=\"UTF-8\" method=\"post\"><input name=\"utf8\" type=\"hidden\" value=\"&#x2713;\" /><input type=\"hidden\" name=\"authenticity_token\" value=\"ftCdyrlg5g5Lbf9yvCHg6vAOtvL/BA3QFKLSRKwZXAn1dSEl52pgyRw9JhdQC0MYDrZTzqY6P2udsGsT4jDvcQ==\" />\n<input type=\"hidden\" name=\"book_id\" id=\"book_id\" value=\"92303\" />\n<input type=\"hidden\" name=\"name\" id=\"name\" value=\"to-read\" />\n<input type=\"hidden\" name=\"unique_id\" id=\"unique_id\" value=\"15_book_92303\" />\n<input type=\"hidden\" name=\"wtr_new\" id=\"wtr_new\" value=\"true\" />\n<input type=\"hidden\" name=\"from_choice\" id=\"from_choice\" value=\"false\" />\n<input type=\"hidden\" name=\"from_home_module\" id=\"from_home_module\" value=\"false\" />\n<input type=\"hidden\" name=\"ref\" id=\"ref\" value=\"\" class=\"wtrLeftUpRef\" />\n<input type=\"hidden\" name=\"existing_review\" id=\"existing_review\" value=\"false\" class=\"wtrExisting\" />\n<input type=\"hidden\" name=\"book_origin\" id=\"book_origin\" value=\"related_works\" />\n<input type=\"hidden\" name=\"page_referrer\" id=\"page_referrer\" value=\"https://www.goodreads.com/\" />\n<input type=\"hidden\" name=\"page_url\" id=\"page_url\" value=\"/book/show/12996.Othello\" />\n<button class=\'wtrToRead\' type=\'submit\'>\n<span class=\'progressTrigger\'>Want to Read<\/span>\n<span class=\'progressIndicator\'>saving…<\/span>\n<\/button>\n<\/form>\n\n<\/div>\n\n<div class=\'wtrRight wtrUp\'>\n<form class=\"hiddenShelfForm\" action=\"/shelf/add_to_shelf\" accept-charset=\"UTF-8\" method=\"post\"><input name=\"utf8\" type=\"hidden\" value=\"&#x2713;\" /><input type=\"hidden\" name=\"authenticity_token\" value=\"vw3IEeRTnUHMsaiQocvsoUxKM9f3S0PLp9GPpZ0Y/NY0qHT+ulkbhpvhcfVN4U9TsvLW6651cXAuwzby0zFPrg==\" />\n<input type=\"hidden\" name=\"unique_id\" id=\"unique_id\" value=\"15_book_92303\" />\n<input type=\"hidden\" name=\"book_id\" id=\"book_id\" value=\"92303\" />\n<input type=\"hidden\" name=\"a\" id=\"a\" />\n<input type=\"hidden\" name=\"name\" id=\"name\" />\n<input type=\"hidden\" name=\"from_choice\" id=\"from_choice\" value=\"false\" />\n<input type=\"hidden\" name=\"from_home_module\" id=\"from_home_module\" value=\"false\" />\n<input type=\"hidden\" name=\"book_origin\" id=\"book_origin\" value=\"related_works\" />\n<input type=\"hidden\" name=\"page_referrer\" id=\"page_referrer\" value=\"https://www.goodreads.com/\" />\n<input type=\"hidden\" name=\"page_url\" id=\"page_url\" value=\"/book/show/12996.Othello\" />\n<\/form>\n\n<button class=\'wtrShelfButton\'><\/button>\n<\/div>\n\n<div class=\'ratingStars wtrRating\'>\n<div class=\'starsErrorTooltip hidden\'>\nError rating book. Refresh and try again.\n<\/div>\n<div class=\'myRating uitext greyText\'>Rate this book<\/div>\n<div class=\'clearRating uitext\'>Clear rating<\/div>\n<div class=\"stars\" data-resource-id=\"92303\" data-user-id=\"129148878\" data-submit-url=\"/review/rate/92303?book_origin=related_works&page_referrer=https%3A%2F%2Fwww.goodreads.com%2F&page_url=%2Fbook%2Fshow%2F12996.Othello&rate_books_page=false&stars_click=false&wtr_button_id=15_book_92303\" data-rating=\"0\"><a class=\"star off\" title=\"did not like it\" href=\"#\" ref=\"\">1 of 5 stars<\/a><a class=\"star off\" title=\"it was ok\" href=\"#\" ref=\"\">2 of 5 stars<\/a><a class=\"star off\" title=\"liked it\" href=\"#\" ref=\"\">3 of 5 stars<\/a><a class=\"star off\" title=\"really liked it\" href=\"#\" ref=\"\">4 of 5 stars<\/a><a class=\"star off\" title=\"it was amazing\" href=\"#\" ref=\"\">5 of 5 stars<\/a><\/div>\n<\/div>\n\n<\/div>\n\n\n\n\n", { style: 'addbook', stem: 'topRight', hook: { tip: 'topRight', target: 'bottomMiddle' }, hideOn: false, width: 400, hideAfter: 0.05, delay: 0.35 });-->
<!--                                                        $('bookCover_92303').observe('prototip:shown', function() {-->
<!--                                                            if (this.up('#box')) {-->
<!--                                                                $$('div.prototip').each(function(i){i.setStyle({zIndex: $('box').getStyle('z-index')})});-->
<!--                                                            } else {-->
<!--                                                                $$('div.prototip').each(function(i){i.setStyle({zIndex: 6000})});-->
<!--                                                            }-->
<!--                                                        });-->
<!---->
<!--                                                        newTip['wrapper'].addClassName('prototipAllowOverflow');-->
<!---->
<!--                                                        $('bookCover_92303').observe('prototip:shown', function () {-->
<!--                                                            $$('div.prototip').each(function (e) {-->
<!--                                                                if ($('bookCover_92303').hasClassName('ignored')) {-->
<!--                                                                    e.setStyle({'display': 'none'});-->
<!--                                                                    return;-->
<!--                                                                }-->
<!--                                                                e.setStyle({'overflow': 'visible'});-->
<!--                                                            });-->
<!--                                                        });-->
<!--                                                        $('bookCover_92303').observe('prototip:hidden', function () {-->
<!--                                                            $$('span.elementTwo').each(function (e) {-->
<!--                                                                if (e.getStyle('display') !== 'none') {-->
<!--                                                                    var lessLink = e.next();-->
<!--                                                                    swapContent(lessLink);-->
<!--                                                                }-->
<!--                                                            });-->
<!--                                                        });-->
<!---->
<!--                                                        //]]>-->
<!--                                                    </script>-->
<!---->
<!--                                                </li>-->
<!--                                                <li class='cover' id='bookCover_494785'>-->
<!--                                                    <a href="https://www.goodreads.com/book/show/494785.The_Duchess_of_Malfi"><img alt="The Duchess of Malfi" src="https://i.gr-assets.com/images/S/compressed.photo.goodreads.com/books/1175217568l/494785._SX98_.jpg" />-->
<!--                                                    </a>-->
<!---->
<!---->
<!--                                                    <script>-->
<!--                                                        //<![CDATA[-->
<!--                                                        var newTip = new Tip($('bookCover_494785'), "\n\n  <h2><a class=\"readable bookTitle\" href=\"https://www.goodreads.com/book/show/494785.The_Duchess_of_Malfi?from_choice=false&amp;from_home_module=false\">The Duchess of Malfi<\/a><\/h2>\n\n      <div>\n        by <a class=\"authorName\" href=\"/author/show/39090.John_Webster?a=9&amp;origin=related_works\">John Webster<\/a>\n      <\/div>\n\n          <div class=\"smallText uitext darkGreyText\">\n            <span class=\"minirating\"><span class=\"stars staticStars notranslate\"><span size=\"12x12\" class=\"staticStar p10\"><\/span><span size=\"12x12\" class=\"staticStar p10\"><\/span><span size=\"12x12\" class=\"staticStar p10\"><\/span><span size=\"12x12\" class=\"staticStar p6\"><\/span><span size=\"12x12\" class=\"staticStar p0\"><\/span><\/span> 3.63 avg rating &mdash; 12,869 ratings<\/span>            &mdash; published 1614\n          <\/div>\n\n    <div class=\"addBookTipDescription\">\n      \n<span id=\"freeTextContainer14837638639707712453\">More widely studied and more frequently performed than ever before, John Webster&apos;s The Duchess of Malfi is here presented in an accessible and thoroughly up-to-date edition.\n\nBased on the Revels Plays text, the notes have been augmented to cast furth<\/span>\n  <span id=\"freeText14837638639707712453\" style=\"display:none\">More widely studied and more frequently performed than ever before, John Webster\'s The Duchess of Malfi is here presented in an accessible and thoroughly up-to-date edition.\n\nBased on the Revels Plays text, the notes have been augmented to cast further light both on Webster\'s amazing dialogue and on the stage action. An entirely new introduction sets the tragedy in the context of pre-Civil War England and gives a revealing view of its imagery and dramatic action.\n\nFrom its well-documented early performances to the two productions seen in the West End of London in the 1995-96 season, a stage history gives an account of the play in performance. Students, actors, directors and theatre-goers will all find here a reappraisal of Webster\'s artistry in the greatest age of English theatre, which highlights why it has lived on stage with renewed force in the last decades of the twentieth century.<\/span>\n  <a data-text-id=\"14837638639707712453\" href=\"#\" onclick=\"swapContent(\$(this));; return false;\">...more<\/a>\n\n    <\/div>\n\n      <div class=\'wtrButtonContainer\' id=\'16_book_494785\'>\n<div class=\'wtrUp wtrLeft\'>\n<form action=\"/shelf/add_to_shelf\" accept-charset=\"UTF-8\" method=\"post\"><input name=\"utf8\" type=\"hidden\" value=\"&#x2713;\" /><input type=\"hidden\" name=\"authenticity_token\" value=\"/Fi+iU87DObCuL6n61P9bH33megMLobTt1sFGbVfKZF3/QJmETGKIZXoZ8IHeV6eg0981FUQtGg+SbxO+3aa6Q==\" />\n<input type=\"hidden\" name=\"book_id\" id=\"book_id\" value=\"494785\" />\n<input type=\"hidden\" name=\"name\" id=\"name\" value=\"to-read\" />\n<input type=\"hidden\" name=\"unique_id\" id=\"unique_id\" value=\"16_book_494785\" />\n<input type=\"hidden\" name=\"wtr_new\" id=\"wtr_new\" value=\"true\" />\n<input type=\"hidden\" name=\"from_choice\" id=\"from_choice\" value=\"false\" />\n<input type=\"hidden\" name=\"from_home_module\" id=\"from_home_module\" value=\"false\" />\n<input type=\"hidden\" name=\"ref\" id=\"ref\" value=\"\" class=\"wtrLeftUpRef\" />\n<input type=\"hidden\" name=\"existing_review\" id=\"existing_review\" value=\"false\" class=\"wtrExisting\" />\n<input type=\"hidden\" name=\"book_origin\" id=\"book_origin\" value=\"related_works\" />\n<input type=\"hidden\" name=\"page_referrer\" id=\"page_referrer\" value=\"https://www.goodreads.com/\" />\n<input type=\"hidden\" name=\"page_url\" id=\"page_url\" value=\"/book/show/12996.Othello\" />\n<button class=\'wtrToRead\' type=\'submit\'>\n<span class=\'progressTrigger\'>Want to Read<\/span>\n<span class=\'progressIndicator\'>saving…<\/span>\n<\/button>\n<\/form>\n\n<\/div>\n\n<div class=\'wtrRight wtrUp\'>\n<form class=\"hiddenShelfForm\" action=\"/shelf/add_to_shelf\" accept-charset=\"UTF-8\" method=\"post\"><input name=\"utf8\" type=\"hidden\" value=\"&#x2713;\" /><input type=\"hidden\" name=\"authenticity_token\" value=\"spPPPzfYyYF1D1FcgR5W/UOszIzw1hbilmUXSQ9+ya85NnPQadJPRiJfiDltNPUPvRQpsKnoJFkfd64eQVd61w==\" />\n<input type=\"hidden\" name=\"unique_id\" id=\"unique_id\" value=\"16_book_494785\" />\n<input type=\"hidden\" name=\"book_id\" id=\"book_id\" value=\"494785\" />\n<input type=\"hidden\" name=\"a\" id=\"a\" />\n<input type=\"hidden\" name=\"name\" id=\"name\" />\n<input type=\"hidden\" name=\"from_choice\" id=\"from_choice\" value=\"false\" />\n<input type=\"hidden\" name=\"from_home_module\" id=\"from_home_module\" value=\"false\" />\n<input type=\"hidden\" name=\"book_origin\" id=\"book_origin\" value=\"related_works\" />\n<input type=\"hidden\" name=\"page_referrer\" id=\"page_referrer\" value=\"https://www.goodreads.com/\" />\n<input type=\"hidden\" name=\"page_url\" id=\"page_url\" value=\"/book/show/12996.Othello\" />\n<\/form>\n\n<button class=\'wtrShelfButton\'><\/button>\n<\/div>\n\n<div class=\'ratingStars wtrRating\'>\n<div class=\'starsErrorTooltip hidden\'>\nError rating book. Refresh and try again.\n<\/div>\n<div class=\'myRating uitext greyText\'>Rate this book<\/div>\n<div class=\'clearRating uitext\'>Clear rating<\/div>\n<div class=\"stars\" data-resource-id=\"494785\" data-user-id=\"129148878\" data-submit-url=\"/review/rate/494785?book_origin=related_works&page_referrer=https%3A%2F%2Fwww.goodreads.com%2F&page_url=%2Fbook%2Fshow%2F12996.Othello&rate_books_page=false&stars_click=false&wtr_button_id=16_book_494785\" data-rating=\"0\"><a class=\"star off\" title=\"did not like it\" href=\"#\" ref=\"\">1 of 5 stars<\/a><a class=\"star off\" title=\"it was ok\" href=\"#\" ref=\"\">2 of 5 stars<\/a><a class=\"star off\" title=\"liked it\" href=\"#\" ref=\"\">3 of 5 stars<\/a><a class=\"star off\" title=\"really liked it\" href=\"#\" ref=\"\">4 of 5 stars<\/a><a class=\"star off\" title=\"it was amazing\" href=\"#\" ref=\"\">5 of 5 stars<\/a><\/div>\n<\/div>\n\n<\/div>\n\n\n\n\n", { style: 'addbook', stem: 'topRight', hook: { tip: 'topRight', target: 'bottomMiddle' }, hideOn: false, width: 400, hideAfter: 0.05, delay: 0.35 });-->
<!--                                                        $('bookCover_494785').observe('prototip:shown', function() {-->
<!--                                                            if (this.up('#box')) {-->
<!--                                                                $$('div.prototip').each(function(i){i.setStyle({zIndex: $('box').getStyle('z-index')})});-->
<!--                                                            } else {-->
<!--                                                                $$('div.prototip').each(function(i){i.setStyle({zIndex: 6000})});-->
<!--                                                            }-->
<!--                                                        });-->
<!---->
<!--                                                        newTip['wrapper'].addClassName('prototipAllowOverflow');-->
<!---->
<!--                                                        $('bookCover_494785').observe('prototip:shown', function () {-->
<!--                                                            $$('div.prototip').each(function (e) {-->
<!--                                                                if ($('bookCover_494785').hasClassName('ignored')) {-->
<!--                                                                    e.setStyle({'display': 'none'});-->
<!--                                                                    return;-->
<!--                                                                }-->
<!--                                                                e.setStyle({'overflow': 'visible'});-->
<!--                                                            });-->
<!--                                                        });-->
<!--                                                        $('bookCover_494785').observe('prototip:hidden', function () {-->
<!--                                                            $$('span.elementTwo').each(function (e) {-->
<!--                                                                if (e.getStyle('display') !== 'none') {-->
<!--                                                                    var lessLink = e.next();-->
<!--                                                                    swapContent(lessLink);-->
<!--                                                                }-->
<!--                                                            });-->
<!--                                                        });-->
<!---->
<!--                                                        //]]>-->
<!--                                                    </script>-->
<!---->
<!--                                                </li>-->
<!--                                                <li class='cover' id='bookCover_7728'>-->
<!--                                                    <a href="https://www.goodreads.com/book/show/7728.Antigone"><img alt="Antigone (The Theban Plays, #3)" src="https://i.gr-assets.com/images/S/compressed.photo.goodreads.com/books/1486701308l/7728._SY160_.jpg" />-->
<!--                                                    </a>-->
<!---->
<!---->
<!--                                                    <script>-->
<!--                                                        //<![CDATA[-->
<!--                                                        var newTip = new Tip($('bookCover_7728'), "\n\n  <h2><a class=\"readable bookTitle\" href=\"https://www.goodreads.com/book/show/7728.Antigone?from_choice=false&amp;from_home_module=false\">Antigone (The Theban Plays, #3)<\/a><\/h2>\n\n      <div>\n        by <a class=\"authorName\" href=\"/author/show/1002.Sophocles?a=9&amp;origin=related_works\">Sophocles<\/a>\n      <\/div>\n\n          <div class=\"smallText uitext darkGreyText\">\n            <span class=\"minirating\"><span class=\"stars staticStars notranslate\"><span size=\"12x12\" class=\"staticStar p10\"><\/span><span size=\"12x12\" class=\"staticStar p10\"><\/span><span size=\"12x12\" class=\"staticStar p10\"><\/span><span size=\"12x12\" class=\"staticStar p6\"><\/span><span size=\"12x12\" class=\"staticStar p0\"><\/span><\/span> 3.67 avg rating &mdash; 108,674 ratings<\/span>            &mdash; published -441\n          <\/div>\n\n    <div class=\"addBookTipDescription\">\n      \n<span id=\"freeTextContainer10594239930183436526\">The curse placed on Oedipus lingers and haunts a younger generation in this new and brilliant translation of Sophocles&apos; classic drama. The daughter of Oedipus and Jocasta, Antigone is an unconventional heroine who pits her beliefs against the King of<\/span>\n  <span id=\"freeText10594239930183436526\" style=\"display:none\">The curse placed on Oedipus lingers and haunts a younger generation in this new and brilliant translation of Sophocles\' classic drama. The daughter of Oedipus and Jocasta, Antigone is an unconventional heroine who pits her beliefs against the King of Thebes in a bloody test of wills that leaves few unharmed. Emotions fly as she challenges the king for the right to bury her own brother. Determined but doomed, Antigone shows her inner strength throughout the play.\n\nAntigone raises issues of law and morality that are just as relevant today as they were more than two thousand years ago. Whether this is your first reading or your twentieth, Antigone will move you as few pieces of literature can.\n\nTo make this quintessential Greek drama more accessible to the modern reader, this Prestwick House Literary Touchstone Edition includes a glossary of difficult terms, a list of vocabulary words, and convenient sidebar notes. By providing these, it is our intention that readers will more fully enjoy the beauty, wisdom, and intent of the play.<\/span>\n  <a data-text-id=\"10594239930183436526\" href=\"#\" onclick=\"swapContent(\$(this));; return false;\">...more<\/a>\n\n    <\/div>\n\n      <div class=\'wtrButtonContainer\' id=\'17_book_7728\'>\n<div class=\'wtrUp wtrLeft\'>\n<form action=\"/shelf/add_to_shelf\" accept-charset=\"UTF-8\" method=\"post\"><input name=\"utf8\" type=\"hidden\" value=\"&#x2713;\" /><input type=\"hidden\" name=\"authenticity_token\" value=\"yLdfq+OPl2oQXw4ofi2D2T7rymfboA5U4FEDUYTqnEBDEuNEvYURrUcP102SByArwFMvW4KePO9pQ7oGysMvOA==\" />\n<input type=\"hidden\" name=\"book_id\" id=\"book_id\" value=\"7728\" />\n<input type=\"hidden\" name=\"name\" id=\"name\" value=\"to-read\" />\n<input type=\"hidden\" name=\"unique_id\" id=\"unique_id\" value=\"17_book_7728\" />\n<input type=\"hidden\" name=\"wtr_new\" id=\"wtr_new\" value=\"true\" />\n<input type=\"hidden\" name=\"from_choice\" id=\"from_choice\" value=\"false\" />\n<input type=\"hidden\" name=\"from_home_module\" id=\"from_home_module\" value=\"false\" />\n<input type=\"hidden\" name=\"ref\" id=\"ref\" value=\"\" class=\"wtrLeftUpRef\" />\n<input type=\"hidden\" name=\"existing_review\" id=\"existing_review\" value=\"false\" class=\"wtrExisting\" />\n<input type=\"hidden\" name=\"book_origin\" id=\"book_origin\" value=\"related_works\" />\n<input type=\"hidden\" name=\"page_referrer\" id=\"page_referrer\" value=\"https://www.goodreads.com/\" />\n<input type=\"hidden\" name=\"page_url\" id=\"page_url\" value=\"/book/show/12996.Othello\" />\n<button class=\'wtrToRead\' type=\'submit\'>\n<span class=\'progressTrigger\'>Want to Read<\/span>\n<span class=\'progressIndicator\'>saving…<\/span>\n<\/button>\n<\/form>\n\n<\/div>\n\n<div class=\'wtrRight wtrUp\'>\n<form class=\"hiddenShelfForm\" action=\"/shelf/add_to_shelf\" accept-charset=\"UTF-8\" method=\"post\"><input name=\"utf8\" type=\"hidden\" value=\"&#x2713;\" /><input type=\"hidden\" name=\"authenticity_token\" value=\"8CJ2BTSJX+jBCVMUmifKjCPqXbkNwpoyoeyvANGkZYV7h8rqaoPZL5ZZinF2DWl+3VK4hVT8qIko/hZXn43W/Q==\" />\n<input type=\"hidden\" name=\"unique_id\" id=\"unique_id\" value=\"17_book_7728\" />\n<input type=\"hidden\" name=\"book_id\" id=\"book_id\" value=\"7728\" />\n<input type=\"hidden\" name=\"a\" id=\"a\" />\n<input type=\"hidden\" name=\"name\" id=\"name\" />\n<input type=\"hidden\" name=\"from_choice\" id=\"from_choice\" value=\"false\" />\n<input type=\"hidden\" name=\"from_home_module\" id=\"from_home_module\" value=\"false\" />\n<input type=\"hidden\" name=\"book_origin\" id=\"book_origin\" value=\"related_works\" />\n<input type=\"hidden\" name=\"page_referrer\" id=\"page_referrer\" value=\"https://www.goodreads.com/\" />\n<input type=\"hidden\" name=\"page_url\" id=\"page_url\" value=\"/book/show/12996.Othello\" />\n<\/form>\n\n<button class=\'wtrShelfButton\'><\/button>\n<\/div>\n\n<div class=\'ratingStars wtrRating\'>\n<div class=\'starsErrorTooltip hidden\'>\nError rating book. Refresh and try again.\n<\/div>\n<div class=\'myRating uitext greyText\'>Rate this book<\/div>\n<div class=\'clearRating uitext\'>Clear rating<\/div>\n<div class=\"stars\" data-resource-id=\"7728\" data-user-id=\"129148878\" data-submit-url=\"/review/rate/7728?book_origin=related_works&page_referrer=https%3A%2F%2Fwww.goodreads.com%2F&page_url=%2Fbook%2Fshow%2F12996.Othello&rate_books_page=false&stars_click=false&wtr_button_id=17_book_7728\" data-rating=\"0\"><a class=\"star off\" title=\"did not like it\" href=\"#\" ref=\"\">1 of 5 stars<\/a><a class=\"star off\" title=\"it was ok\" href=\"#\" ref=\"\">2 of 5 stars<\/a><a class=\"star off\" title=\"liked it\" href=\"#\" ref=\"\">3 of 5 stars<\/a><a class=\"star off\" title=\"really liked it\" href=\"#\" ref=\"\">4 of 5 stars<\/a><a class=\"star off\" title=\"it was amazing\" href=\"#\" ref=\"\">5 of 5 stars<\/a><\/div>\n<\/div>\n\n<\/div>\n\n\n\n\n", { style: 'addbook', stem: 'topRight', hook: { tip: 'topRight', target: 'bottomMiddle' }, hideOn: false, width: 400, hideAfter: 0.05, delay: 0.35 });-->
<!--                                                        $('bookCover_7728').observe('prototip:shown', function() {-->
<!--                                                            if (this.up('#box')) {-->
<!--                                                                $$('div.prototip').each(function(i){i.setStyle({zIndex: $('box').getStyle('z-index')})});-->
<!--                                                            } else {-->
<!--                                                                $$('div.prototip').each(function(i){i.setStyle({zIndex: 6000})});-->
<!--                                                            }-->
<!--                                                        });-->
<!---->
<!--                                                        newTip['wrapper'].addClassName('prototipAllowOverflow');-->
<!---->
<!--                                                        $('bookCover_7728').observe('prototip:shown', function () {-->
<!--                                                            $$('div.prototip').each(function (e) {-->
<!--                                                                if ($('bookCover_7728').hasClassName('ignored')) {-->
<!--                                                                    e.setStyle({'display': 'none'});-->
<!--                                                                    return;-->
<!--                                                                }-->
<!--                                                                e.setStyle({'overflow': 'visible'});-->
<!--                                                            });-->
<!--                                                        });-->
<!--                                                        $('bookCover_7728').observe('prototip:hidden', function () {-->
<!--                                                            $$('span.elementTwo').each(function (e) {-->
<!--                                                                if (e.getStyle('display') !== 'none') {-->
<!--                                                                    var lessLink = e.next();-->
<!--                                                                    swapContent(lessLink);-->
<!--                                                                }-->
<!--                                                            });-->
<!--                                                        });-->
<!---->
<!--                                                        //]]>-->
<!--                                                    </script>-->
<!---->
<!--                                                </li>-->
<!--                                                <li class='cover' id='bookCover_35031085'>-->
<!--                                                    <a href="https://www.goodreads.com/book/show/35031085-frankenstein"><img alt="Frankenstein: The 1818 Text" src="https://i.gr-assets.com/images/S/compressed.photo.goodreads.com/books/1498841231l/35031085._SX98_.jpg" />-->
<!--                                                    </a>-->
<!---->
<!---->
<!--                                                    <script>-->
<!--                                                        //<![CDATA[-->
<!--                                                        var newTip = new Tip($('bookCover_35031085'), "\n\n  <h2><a class=\"readable bookTitle\" href=\"https://www.goodreads.com/book/show/35031085-frankenstein?from_choice=false&amp;from_home_module=false\">Frankenstein: The 1818 Text<\/a><\/h2>\n\n      <div>\n        by <a class=\"authorName\" href=\"/author/show/11139.Mary_Wollstonecraft_Shelley?a=9&amp;origin=related_works\">Mary Wollstonecraft Shelley<\/a>\n      <\/div>\n\n          <div class=\"smallText uitext darkGreyText\">\n            <span class=\"minirating\"><span class=\"stars staticStars notranslate\"><span size=\"12x12\" class=\"staticStar p10\"><\/span><span size=\"12x12\" class=\"staticStar p10\"><\/span><span size=\"12x12\" class=\"staticStar p10\"><\/span><span size=\"12x12\" class=\"staticStar p6\"><\/span><span size=\"12x12\" class=\"staticStar p0\"><\/span><\/span> 3.82 avg rating &mdash; 1,202,065 ratings<\/span>            &mdash; published 1818\n          <\/div>\n\n    <div class=\"addBookTipDescription\">\n      \n<span id=\"freeTextContainer11589175874790979908\">Mary Shelley&apos;s seminal novel of the scientist whose creation becomes a monster\n\nThis edition is the original 1818 text, which preserves the hard-hitting and politically charged aspects of Shelley&apos;s original writing, as well as her unflinching wit and<\/span>\n  <span id=\"freeText11589175874790979908\" style=\"display:none\">Mary Shelley\'s seminal novel of the scientist whose creation becomes a monster\n\nThis edition is the original 1818 text, which preserves the hard-hitting and politically charged aspects of Shelley\'s original writing, as well as her unflinching wit and strong female voice. This edition also includes a new introduction and suggestions for further reading by author and Shelley expert Charlotte Gordon, literary excerpts and reviews selected by Gordon and a chronology and essay by preeminent Shelley scholar Charles E. Robinson.<\/span>\n  <a data-text-id=\"11589175874790979908\" href=\"#\" onclick=\"swapContent(\$(this));; return false;\">...more<\/a>\n\n    <\/div>\n\n      <div class=\'wtrButtonContainer\' id=\'18_book_35031085\'>\n<div class=\'wtrUp wtrLeft\'>\n<form action=\"/shelf/add_to_shelf\" accept-charset=\"UTF-8\" method=\"post\"><input name=\"utf8\" type=\"hidden\" value=\"&#x2713;\" /><input type=\"hidden\" name=\"authenticity_token\" value=\"AJgTRKKwYI0Ahi9VAOZq9OfMUl+g67AsXhR0pwktf0eLPa+r/LrmSlfW9jDszMkGGXS3Y/nVgpfXBs3wRwTMPw==\" />\n<input type=\"hidden\" name=\"book_id\" id=\"book_id\" value=\"35031085\" />\n<input type=\"hidden\" name=\"name\" id=\"name\" value=\"to-read\" />\n<input type=\"hidden\" name=\"unique_id\" id=\"unique_id\" value=\"18_book_35031085\" />\n<input type=\"hidden\" name=\"wtr_new\" id=\"wtr_new\" value=\"true\" />\n<input type=\"hidden\" name=\"from_choice\" id=\"from_choice\" value=\"false\" />\n<input type=\"hidden\" name=\"from_home_module\" id=\"from_home_module\" value=\"false\" />\n<input type=\"hidden\" name=\"ref\" id=\"ref\" value=\"\" class=\"wtrLeftUpRef\" />\n<input type=\"hidden\" name=\"existing_review\" id=\"existing_review\" value=\"false\" class=\"wtrExisting\" />\n<input type=\"hidden\" name=\"book_origin\" id=\"book_origin\" value=\"related_works\" />\n<input type=\"hidden\" name=\"page_referrer\" id=\"page_referrer\" value=\"https://www.goodreads.com/\" />\n<input type=\"hidden\" name=\"page_url\" id=\"page_url\" value=\"/book/show/12996.Othello\" />\n<button class=\'wtrToRead\' type=\'submit\'>\n<span class=\'progressTrigger\'>Want to Read<\/span>\n<span class=\'progressIndicator\'>saving…<\/span>\n<\/button>\n<\/form>\n\n<\/div>\n\n<div class=\'wtrRight wtrUp\'>\n<form class=\"hiddenShelfForm\" action=\"/shelf/add_to_shelf\" accept-charset=\"UTF-8\" method=\"post\"><input name=\"utf8\" type=\"hidden\" value=\"&#x2713;\" /><input type=\"hidden\" name=\"authenticity_token\" value=\"UOXBMCKcMo6gbAWzrWmKElIJowTMR80Jg9FJD78m3nTbQH3ffJa0Sfc83NZBQyngrLFGOJV5/7IKw/BY8Q9tDA==\" />\n<input type=\"hidden\" name=\"unique_id\" id=\"unique_id\" value=\"18_book_35031085\" />\n<input type=\"hidden\" name=\"book_id\" id=\"book_id\" value=\"35031085\" />\n<input type=\"hidden\" name=\"a\" id=\"a\" />\n<input type=\"hidden\" name=\"name\" id=\"name\" />\n<input type=\"hidden\" name=\"from_choice\" id=\"from_choice\" value=\"false\" />\n<input type=\"hidden\" name=\"from_home_module\" id=\"from_home_module\" value=\"false\" />\n<input type=\"hidden\" name=\"book_origin\" id=\"book_origin\" value=\"related_works\" />\n<input type=\"hidden\" name=\"page_referrer\" id=\"page_referrer\" value=\"https://www.goodreads.com/\" />\n<input type=\"hidden\" name=\"page_url\" id=\"page_url\" value=\"/book/show/12996.Othello\" />\n<\/form>\n\n<button class=\'wtrShelfButton\'><\/button>\n<\/div>\n\n<div class=\'ratingStars wtrRating\'>\n<div class=\'starsErrorTooltip hidden\'>\nError rating book. Refresh and try again.\n<\/div>\n<div class=\'myRating uitext greyText\'>Rate this book<\/div>\n<div class=\'clearRating uitext\'>Clear rating<\/div>\n<div class=\"stars\" data-resource-id=\"35031085\" data-user-id=\"129148878\" data-submit-url=\"/review/rate/35031085?book_origin=related_works&page_referrer=https%3A%2F%2Fwww.goodreads.com%2F&page_url=%2Fbook%2Fshow%2F12996.Othello&rate_books_page=false&stars_click=false&wtr_button_id=18_book_35031085\" data-rating=\"0\"><a class=\"star off\" title=\"did not like it\" href=\"#\" ref=\"\">1 of 5 stars<\/a><a class=\"star off\" title=\"it was ok\" href=\"#\" ref=\"\">2 of 5 stars<\/a><a class=\"star off\" title=\"liked it\" href=\"#\" ref=\"\">3 of 5 stars<\/a><a class=\"star off\" title=\"really liked it\" href=\"#\" ref=\"\">4 of 5 stars<\/a><a class=\"star off\" title=\"it was amazing\" href=\"#\" ref=\"\">5 of 5 stars<\/a><\/div>\n<\/div>\n\n<\/div>\n\n\n\n\n", { style: 'addbook', stem: 'topRight', hook: { tip: 'topRight', target: 'bottomMiddle' }, hideOn: false, width: 400, hideAfter: 0.05, delay: 0.35 });-->
<!--                                                        $('bookCover_35031085').observe('prototip:shown', function() {-->
<!--                                                            if (this.up('#box')) {-->
<!--                                                                $$('div.prototip').each(function(i){i.setStyle({zIndex: $('box').getStyle('z-index')})});-->
<!--                                                            } else {-->
<!--                                                                $$('div.prototip').each(function(i){i.setStyle({zIndex: 6000})});-->
<!--                                                            }-->
<!--                                                        });-->
<!---->
<!--                                                        newTip['wrapper'].addClassName('prototipAllowOverflow');-->
<!---->
<!--                                                        $('bookCover_35031085').observe('prototip:shown', function () {-->
<!--                                                            $$('div.prototip').each(function (e) {-->
<!--                                                                if ($('bookCover_35031085').hasClassName('ignored')) {-->
<!--                                                                    e.setStyle({'display': 'none'});-->
<!--                                                                    return;-->
<!--                                                                }-->
<!--                                                                e.setStyle({'overflow': 'visible'});-->
<!--                                                            });-->
<!--                                                        });-->
<!--                                                        $('bookCover_35031085').observe('prototip:hidden', function () {-->
<!--                                                            $$('span.elementTwo').each(function (e) {-->
<!--                                                                if (e.getStyle('display') !== 'none') {-->
<!--                                                                    var lessLink = e.next();-->
<!--                                                                    swapContent(lessLink);-->
<!--                                                                }-->
<!--                                                            });-->
<!--                                                        });-->
<!---->
<!--                                                        //]]>-->
<!--                                                    </script>-->
<!---->
<!--                                                </li>-->
<!--                                                <li class='cover' id='bookCover_51190'>-->
<!--                                                    <a href="https://www.goodreads.com/book/show/51190.Oroonoko"><img alt="Oroonoko" src="https://i.gr-assets.com/images/S/compressed.photo.goodreads.com/books/1438766417l/51190._SX98_.jpg" />-->
<!--                                                    </a>-->
<!---->
<!---->
<!--                                                    <script>-->
<!--                                                        //<![CDATA[-->
<!--                                                        var newTip = new Tip($('bookCover_51190'), "\n\n  <h2><a class=\"readable bookTitle\" href=\"https://www.goodreads.com/book/show/51190.Oroonoko?from_choice=false&amp;from_home_module=false\">Oroonoko<\/a><\/h2>\n\n      <div>\n        by <a class=\"authorName\" href=\"/author/show/28778.Aphra_Behn?a=9&amp;origin=related_works\">Aphra Behn<\/a>\n      <\/div>\n\n          <div class=\"smallText uitext darkGreyText\">\n            <span class=\"minirating\"><span class=\"stars staticStars notranslate\"><span size=\"12x12\" class=\"staticStar p10\"><\/span><span size=\"12x12\" class=\"staticStar p10\"><\/span><span size=\"12x12\" class=\"staticStar p10\"><\/span><span size=\"12x12\" class=\"staticStar p3\"><\/span><span size=\"12x12\" class=\"staticStar p0\"><\/span><\/span> 3.01 avg rating &mdash; 10,679 ratings<\/span>            &mdash; published 1688\n          <\/div>\n\n    <div class=\"addBookTipDescription\">\n      \n<span id=\"freeTextContainer14367934374488300932\">When Prince Oroonoko&apos;s passion for the virtuous Imoinda arouses the jealousy of his grandfather, the lovers are cast into slavery and transported from Africa to the colony of Surinam. Oroonoko&apos;s noble bearing soon wins the respect of his English capt<\/span>\n  <span id=\"freeText14367934374488300932\" style=\"display:none\">When Prince Oroonoko\'s passion for the virtuous Imoinda arouses the jealousy of his grandfather, the lovers are cast into slavery and transported from Africa to the colony of Surinam. Oroonoko\'s noble bearing soon wins the respect of his English captors, but his struggle for freedom brings about his destruction. Inspired by Aphra Behn\'s visit to Surinam, Oroonoko reflects the author\'s romantic views of native peoples as being in &quot;the first state of innocence, before man knew how to sin.&quot; The novel also reveals Behn\'s ambiguous attitude toward slavery: while she favored it as a means to strengthen England\'s power, her powerful and moving work conveys its injustice and brutality.<\/span>\n  <a data-text-id=\"14367934374488300932\" href=\"#\" onclick=\"swapContent(\$(this));; return false;\">...more<\/a>\n\n    <\/div>\n\n      <div class=\'wtrButtonContainer\' id=\'19_book_51190\'>\n<div class=\'wtrUp wtrLeft\'>\n<form action=\"/shelf/add_to_shelf\" accept-charset=\"UTF-8\" method=\"post\"><input name=\"utf8\" type=\"hidden\" value=\"&#x2713;\" /><input type=\"hidden\" name=\"authenticity_token\" value=\"fqVkArT+JUzlrwJiw8ErnOsLTOCWkuOM2XUS0d/I7Pz1ANjt6vSji7L/2wcv64huFbOp3M+s0TdQZ6uGkeFfhA==\" />\n<input type=\"hidden\" name=\"book_id\" id=\"book_id\" value=\"51190\" />\n<input type=\"hidden\" name=\"name\" id=\"name\" value=\"to-read\" />\n<input type=\"hidden\" name=\"unique_id\" id=\"unique_id\" value=\"19_book_51190\" />\n<input type=\"hidden\" name=\"wtr_new\" id=\"wtr_new\" value=\"true\" />\n<input type=\"hidden\" name=\"from_choice\" id=\"from_choice\" value=\"false\" />\n<input type=\"hidden\" name=\"from_home_module\" id=\"from_home_module\" value=\"false\" />\n<input type=\"hidden\" name=\"ref\" id=\"ref\" value=\"\" class=\"wtrLeftUpRef\" />\n<input type=\"hidden\" name=\"existing_review\" id=\"existing_review\" value=\"false\" class=\"wtrExisting\" />\n<input type=\"hidden\" name=\"book_origin\" id=\"book_origin\" value=\"related_works\" />\n<input type=\"hidden\" name=\"page_referrer\" id=\"page_referrer\" value=\"https://www.goodreads.com/\" />\n<input type=\"hidden\" name=\"page_url\" id=\"page_url\" value=\"/book/show/12996.Othello\" />\n<button class=\'wtrToRead\' type=\'submit\'>\n<span class=\'progressTrigger\'>Want to Read<\/span>\n<span class=\'progressIndicator\'>saving…<\/span>\n<\/button>\n<\/form>\n\n<\/div>\n\n<div class=\'wtrRight wtrUp\'>\n<form class=\"hiddenShelfForm\" action=\"/shelf/add_to_shelf\" accept-charset=\"UTF-8\" method=\"post\"><input name=\"utf8\" type=\"hidden\" value=\"&#x2713;\" /><input type=\"hidden\" name=\"authenticity_token\" value=\"aYzI5MZQupX+WgC2F8hTo6kj/ec9nkG6SYCsBiTP79jiKXQLmFo8UqkK2dP74vBRV5sY22SgcwHAkhVRauZcoA==\" />\n<input type=\"hidden\" name=\"unique_id\" id=\"unique_id\" value=\"19_book_51190\" />\n<input type=\"hidden\" name=\"book_id\" id=\"book_id\" value=\"51190\" />\n<input type=\"hidden\" name=\"a\" id=\"a\" />\n<input type=\"hidden\" name=\"name\" id=\"name\" />\n<input type=\"hidden\" name=\"from_choice\" id=\"from_choice\" value=\"false\" />\n<input type=\"hidden\" name=\"from_home_module\" id=\"from_home_module\" value=\"false\" />\n<input type=\"hidden\" name=\"book_origin\" id=\"book_origin\" value=\"related_works\" />\n<input type=\"hidden\" name=\"page_referrer\" id=\"page_referrer\" value=\"https://www.goodreads.com/\" />\n<input type=\"hidden\" name=\"page_url\" id=\"page_url\" value=\"/book/show/12996.Othello\" />\n<\/form>\n\n<button class=\'wtrShelfButton\'><\/button>\n<\/div>\n\n<div class=\'ratingStars wtrRating\'>\n<div class=\'starsErrorTooltip hidden\'>\nError rating book. Refresh and try again.\n<\/div>\n<div class=\'myRating uitext greyText\'>Rate this book<\/div>\n<div class=\'clearRating uitext\'>Clear rating<\/div>\n<div class=\"stars\" data-resource-id=\"51190\" data-user-id=\"129148878\" data-submit-url=\"/review/rate/51190?book_origin=related_works&page_referrer=https%3A%2F%2Fwww.goodreads.com%2F&page_url=%2Fbook%2Fshow%2F12996.Othello&rate_books_page=false&stars_click=false&wtr_button_id=19_book_51190\" data-rating=\"0\"><a class=\"star off\" title=\"did not like it\" href=\"#\" ref=\"\">1 of 5 stars<\/a><a class=\"star off\" title=\"it was ok\" href=\"#\" ref=\"\">2 of 5 stars<\/a><a class=\"star off\" title=\"liked it\" href=\"#\" ref=\"\">3 of 5 stars<\/a><a class=\"star off\" title=\"really liked it\" href=\"#\" ref=\"\">4 of 5 stars<\/a><a class=\"star off\" title=\"it was amazing\" href=\"#\" ref=\"\">5 of 5 stars<\/a><\/div>\n<\/div>\n\n<\/div>\n\n\n\n\n", { style: 'addbook', stem: 'topRight', hook: { tip: 'topRight', target: 'bottomMiddle' }, hideOn: false, width: 400, hideAfter: 0.05, delay: 0.35 });-->
<!--                                                        $('bookCover_51190').observe('prototip:shown', function() {-->
<!--                                                            if (this.up('#box')) {-->
<!--                                                                $$('div.prototip').each(function(i){i.setStyle({zIndex: $('box').getStyle('z-index')})});-->
<!--                                                            } else {-->
<!--                                                                $$('div.prototip').each(function(i){i.setStyle({zIndex: 6000})});-->
<!--                                                            }-->
<!--                                                        });-->
<!---->
<!--                                                        newTip['wrapper'].addClassName('prototipAllowOverflow');-->
<!---->
<!--                                                        $('bookCover_51190').observe('prototip:shown', function () {-->
<!--                                                            $$('div.prototip').each(function (e) {-->
<!--                                                                if ($('bookCover_51190').hasClassName('ignored')) {-->
<!--                                                                    e.setStyle({'display': 'none'});-->
<!--                                                                    return;-->
<!--                                                                }-->
<!--                                                                e.setStyle({'overflow': 'visible'});-->
<!--                                                            });-->
<!--                                                        });-->
<!--                                                        $('bookCover_51190').observe('prototip:hidden', function () {-->
<!--                                                            $$('span.elementTwo').each(function (e) {-->
<!--                                                                if (e.getStyle('display') !== 'none') {-->
<!--                                                                    var lessLink = e.next();-->
<!--                                                                    swapContent(lessLink);-->
<!--                                                                }-->
<!--                                                            });-->
<!--                                                        });-->
<!---->
<!--                                                        //]]>-->
<!--                                                    </script>-->
<!---->
<!--                                                </li>-->
<!--                                                <li class='cover' id='bookCover_1371'>-->
<!--                                                    <a href="https://www.goodreads.com/book/show/1371.The_Iliad"><img alt="The Iliad" src="https://i.gr-assets.com/images/S/compressed.photo.goodreads.com/books/1388188509l/1371._SX98_.jpg" />-->
<!--                                                    </a>-->
<!---->
<!---->
<!--                                                    <script>-->
<!--                                                        //<![CDATA[-->
<!--                                                        var newTip = new Tip($('bookCover_1371'), "\n\n  <h2><a class=\"readable bookTitle\" href=\"https://www.goodreads.com/book/show/1371.The_Iliad?from_choice=false&amp;from_home_module=false\">The Iliad<\/a><\/h2>\n\n      <div>\n        by <a class=\"authorName\" href=\"/author/show/903.Homer?a=9&amp;origin=related_works\">Homer<\/a>\n      <\/div>\n\n          <div class=\"smallText uitext darkGreyText\">\n            <span class=\"minirating\"><span class=\"stars staticStars notranslate\"><span size=\"12x12\" class=\"staticStar p10\"><\/span><span size=\"12x12\" class=\"staticStar p10\"><\/span><span size=\"12x12\" class=\"staticStar p10\"><\/span><span size=\"12x12\" class=\"staticStar p6\"><\/span><span size=\"12x12\" class=\"staticStar p0\"><\/span><\/span> 3.87 avg rating &mdash; 362,594 ratings<\/span>            &mdash; published -800\n          <\/div>\n\n    <div class=\"addBookTipDescription\">\n      \n<span id=\"freeTextContainer13147701168189393747\">Dating to the ninth century B.C., Homer’s timeless poem still vividly conveys the horror and heroism of men and gods wrestling with towering emotions and battling amidst devastation and destruction, as it moves inexorably to the wrenching, tragic con<\/span>\n  <span id=\"freeText13147701168189393747\" style=\"display:none\">Dating to the ninth century B.C., Homer’s timeless poem still vividly conveys the horror and heroism of men and gods wrestling with towering emotions and battling amidst devastation and destruction, as it moves inexorably to the wrenching, tragic conclusion of the Trojan War. Renowned classicist Bernard Knox observes in his superb introduction that although the violence of the Iliad is grim and relentless, it coexists with both images of civilized life and a poignant yearning for peace.\n \nCombining the skills of a poet and scholar, Robert Fagles, winner of the PEN/Ralph Manheim Medal for Translation and a 1996 Academy Award in Literature from the American Academy of Arts and Letters, brings the energy of contemporary language to this enduring heroic epic. He maintains the drive and metric music of Homer’s poetry, and evokes the impact and nuance of the Iliad’s mesmerizing repeated phrases in what Peter Levi calls “an astonishing performance.”<\/span>\n  <a data-text-id=\"13147701168189393747\" href=\"#\" onclick=\"swapContent(\$(this));; return false;\">...more<\/a>\n\n    <\/div>\n\n      <div class=\'wtrButtonContainer\' id=\'20_book_1371\'>\n<div class=\'wtrUp wtrLeft\'>\n<form action=\"/shelf/add_to_shelf\" accept-charset=\"UTF-8\" method=\"post\"><input name=\"utf8\" type=\"hidden\" value=\"&#x2713;\" /><input type=\"hidden\" name=\"authenticity_token\" value=\"qnmCPGkSHHcXauevsQjagn0Qiprks6sBp94Ob9pslcMh3D7TNxiasEA6PspdInlwg6hvpr2NmbouzLc4lEUmuw==\" />\n<input type=\"hidden\" name=\"book_id\" id=\"book_id\" value=\"1371\" />\n<input type=\"hidden\" name=\"name\" id=\"name\" value=\"to-read\" />\n<input type=\"hidden\" name=\"unique_id\" id=\"unique_id\" value=\"20_book_1371\" />\n<input type=\"hidden\" name=\"wtr_new\" id=\"wtr_new\" value=\"true\" />\n<input type=\"hidden\" name=\"from_choice\" id=\"from_choice\" value=\"false\" />\n<input type=\"hidden\" name=\"from_home_module\" id=\"from_home_module\" value=\"false\" />\n<input type=\"hidden\" name=\"ref\" id=\"ref\" value=\"\" class=\"wtrLeftUpRef\" />\n<input type=\"hidden\" name=\"existing_review\" id=\"existing_review\" value=\"false\" class=\"wtrExisting\" />\n<input type=\"hidden\" name=\"book_origin\" id=\"book_origin\" value=\"related_works\" />\n<input type=\"hidden\" name=\"page_referrer\" id=\"page_referrer\" value=\"https://www.goodreads.com/\" />\n<input type=\"hidden\" name=\"page_url\" id=\"page_url\" value=\"/book/show/12996.Othello\" />\n<button class=\'wtrToRead\' type=\'submit\'>\n<span class=\'progressTrigger\'>Want to Read<\/span>\n<span class=\'progressIndicator\'>saving…<\/span>\n<\/button>\n<\/form>\n\n<\/div>\n\n<div class=\'wtrRight wtrUp\'>\n<form class=\"hiddenShelfForm\" action=\"/shelf/add_to_shelf\" accept-charset=\"UTF-8\" method=\"post\"><input name=\"utf8\" type=\"hidden\" value=\"&#x2713;\" /><input type=\"hidden\" name=\"authenticity_token\" value=\"FZA+rCrGr+ZMWyBNUOMo+jEMk9BPvRqQnFP+TNu3IBSeNYJDdMwpIRsL+Si8yYsIz7R27BaDKCsVQUcblZ6TbA==\" />\n<input type=\"hidden\" name=\"unique_id\" id=\"unique_id\" value=\"20_book_1371\" />\n<input type=\"hidden\" name=\"book_id\" id=\"book_id\" value=\"1371\" />\n<input type=\"hidden\" name=\"a\" id=\"a\" />\n<input type=\"hidden\" name=\"name\" id=\"name\" />\n<input type=\"hidden\" name=\"from_choice\" id=\"from_choice\" value=\"false\" />\n<input type=\"hidden\" name=\"from_home_module\" id=\"from_home_module\" value=\"false\" />\n<input type=\"hidden\" name=\"book_origin\" id=\"book_origin\" value=\"related_works\" />\n<input type=\"hidden\" name=\"page_referrer\" id=\"page_referrer\" value=\"https://www.goodreads.com/\" />\n<input type=\"hidden\" name=\"page_url\" id=\"page_url\" value=\"/book/show/12996.Othello\" />\n<\/form>\n\n<button class=\'wtrShelfButton\'><\/button>\n<\/div>\n\n<div class=\'ratingStars wtrRating\'>\n<div class=\'starsErrorTooltip hidden\'>\nError rating book. Refresh and try again.\n<\/div>\n<div class=\'myRating uitext greyText\'>Rate this book<\/div>\n<div class=\'clearRating uitext\'>Clear rating<\/div>\n<div class=\"stars\" data-resource-id=\"1371\" data-user-id=\"129148878\" data-submit-url=\"/review/rate/1371?book_origin=related_works&page_referrer=https%3A%2F%2Fwww.goodreads.com%2F&page_url=%2Fbook%2Fshow%2F12996.Othello&rate_books_page=false&stars_click=false&wtr_button_id=20_book_1371\" data-rating=\"0\"><a class=\"star off\" title=\"did not like it\" href=\"#\" ref=\"\">1 of 5 stars<\/a><a class=\"star off\" title=\"it was ok\" href=\"#\" ref=\"\">2 of 5 stars<\/a><a class=\"star off\" title=\"liked it\" href=\"#\" ref=\"\">3 of 5 stars<\/a><a class=\"star off\" title=\"really liked it\" href=\"#\" ref=\"\">4 of 5 stars<\/a><a class=\"star off\" title=\"it was amazing\" href=\"#\" ref=\"\">5 of 5 stars<\/a><\/div>\n<\/div>\n\n<\/div>\n\n\n\n\n", { style: 'addbook', stem: 'topRight', hook: { tip: 'topRight', target: 'bottomMiddle' }, hideOn: false, width: 400, hideAfter: 0.05, delay: 0.35 });-->
<!--                                                        $('bookCover_1371').observe('prototip:shown', function() {-->
<!--                                                            if (this.up('#box')) {-->
<!--                                                                $$('div.prototip').each(function(i){i.setStyle({zIndex: $('box').getStyle('z-index')})});-->
<!--                                                            } else {-->
<!--                                                                $$('div.prototip').each(function(i){i.setStyle({zIndex: 6000})});-->
<!--                                                            }-->
<!--                                                        });-->
<!---->
<!--                                                        newTip['wrapper'].addClassName('prototipAllowOverflow');-->
<!---->
<!--                                                        $('bookCover_1371').observe('prototip:shown', function () {-->
<!--                                                            $$('div.prototip').each(function (e) {-->
<!--                                                                if ($('bookCover_1371').hasClassName('ignored')) {-->
<!--                                                                    e.setStyle({'display': 'none'});-->
<!--                                                                    return;-->
<!--                                                                }-->
<!--                                                                e.setStyle({'overflow': 'visible'});-->
<!--                                                            });-->
<!--                                                        });-->
<!--                                                        $('bookCover_1371').observe('prototip:hidden', function () {-->
<!--                                                            $$('span.elementTwo').each(function (e) {-->
<!--                                                                if (e.getStyle('display') !== 'none') {-->
<!--                                                                    var lessLink = e.next();-->
<!--                                                                    swapContent(lessLink);-->
<!--                                                                }-->
<!--                                                            });-->
<!--                                                        });-->
<!---->
<!--                                                        //]]>-->
<!--                                                    </script>-->
<!---->
<!--                                                </li>-->
<!--                                                <li class='cover' id='bookCover_4900'>-->
<!--                                                    <a href="https://www.goodreads.com/book/show/4900.Heart_of_Darkness"><img alt="Heart of Darkness" src="https://i.gr-assets.com/images/S/compressed.photo.goodreads.com/books/1392799983l/4900._SX98_.jpg" />-->
<!--                                                    </a>-->
<!---->
<!---->
<!--                                                    <script>-->
<!--                                                        //<![CDATA[-->
<!--                                                        var newTip = new Tip($('bookCover_4900'), "\n\n  <h2><a class=\"readable bookTitle\" href=\"https://www.goodreads.com/book/show/4900.Heart_of_Darkness?from_choice=false&amp;from_home_module=false\">Heart of Darkness<\/a><\/h2>\n\n      <div>\n        by <a class=\"authorName\" href=\"/author/show/3345.Joseph_Conrad?a=9&amp;origin=related_works\">Joseph Conrad<\/a>\n      <\/div>\n\n          <div class=\"smallText uitext darkGreyText\">\n            <span class=\"minirating\"><span class=\"stars staticStars notranslate\"><span size=\"12x12\" class=\"staticStar p10\"><\/span><span size=\"12x12\" class=\"staticStar p10\"><\/span><span size=\"12x12\" class=\"staticStar p10\"><\/span><span size=\"12x12\" class=\"staticStar p3\"><\/span><span size=\"12x12\" class=\"staticStar p0\"><\/span><\/span> 3.43 avg rating &mdash; 429,521 ratings<\/span>            &mdash; published 1899\n          <\/div>\n\n    <div class=\"addBookTipDescription\">\n      \n<span id=\"freeTextContainer18045865663174422448\">Heart of Darkness, a novel by Joseph Conrad, was originally a three-part series in Blackwood&apos;s Magazine in 1899. It is a story within a story, following a character named Charlie Marlow, who recounts his adventure to a group of men onboard an anchore<\/span>\n  <span id=\"freeText18045865663174422448\" style=\"display:none\">Heart of Darkness, a novel by Joseph Conrad, was originally a three-part series in Blackwood\'s Magazine in 1899. It is a story within a story, following a character named Charlie Marlow, who recounts his adventure to a group of men onboard an anchored ship. The story told is of his early life as a ferry boat captain. Although his job was to transport ivory downriver, Charlie develops an interest in investing an ivory procurement agent, Kurtz, who is employed by the government. Preceded by his reputation as a brilliant emissary of progress, Kurtz has now established himself as a god among the natives in “one of the darkest places on earth.” Marlow suspects something else of Kurtz: he has gone mad.\n\nA reflection on corruptive European colonialism and a journey into the nightmare psyche of one of the corrupted, Heart of Darkness is considered one of the most influential works ever written.<\/span>\n  <a data-text-id=\"18045865663174422448\" href=\"#\" onclick=\"swapContent(\$(this));; return false;\">...more<\/a>\n\n    <\/div>\n\n      <div class=\'wtrButtonContainer\' id=\'21_book_4900\'>\n<div class=\'wtrUp wtrLeft\'>\n<form action=\"/shelf/add_to_shelf\" accept-charset=\"UTF-8\" method=\"post\"><input name=\"utf8\" type=\"hidden\" value=\"&#x2713;\" /><input type=\"hidden\" name=\"authenticity_token\" value=\"YRlk+EC7OJi1V+vc3g+W80ceFe1mJtT5Z5BLmvBssA7qvNgXHrG+X+IHMrkyJTUBuabw0T8Y5kLugvLNvkUDdg==\" />\n<input type=\"hidden\" name=\"book_id\" id=\"book_id\" value=\"4900\" />\n<input type=\"hidden\" name=\"name\" id=\"name\" value=\"to-read\" />\n<input type=\"hidden\" name=\"unique_id\" id=\"unique_id\" value=\"21_book_4900\" />\n<input type=\"hidden\" name=\"wtr_new\" id=\"wtr_new\" value=\"true\" />\n<input type=\"hidden\" name=\"from_choice\" id=\"from_choice\" value=\"false\" />\n<input type=\"hidden\" name=\"from_home_module\" id=\"from_home_module\" value=\"false\" />\n<input type=\"hidden\" name=\"ref\" id=\"ref\" value=\"\" class=\"wtrLeftUpRef\" />\n<input type=\"hidden\" name=\"existing_review\" id=\"existing_review\" value=\"false\" class=\"wtrExisting\" />\n<input type=\"hidden\" name=\"book_origin\" id=\"book_origin\" value=\"related_works\" />\n<input type=\"hidden\" name=\"page_referrer\" id=\"page_referrer\" value=\"https://www.goodreads.com/\" />\n<input type=\"hidden\" name=\"page_url\" id=\"page_url\" value=\"/book/show/12996.Othello\" />\n<button class=\'wtrToRead\' type=\'submit\'>\n<span class=\'progressTrigger\'>Want to Read<\/span>\n<span class=\'progressIndicator\'>saving…<\/span>\n<\/button>\n<\/form>\n\n<\/div>\n\n<div class=\'wtrRight wtrUp\'>\n<form class=\"hiddenShelfForm\" action=\"/shelf/add_to_shelf\" accept-charset=\"UTF-8\" method=\"post\"><input name=\"utf8\" type=\"hidden\" value=\"&#x2713;\" /><input type=\"hidden\" name=\"authenticity_token\" value=\"+rY1t9joQiCAy9/i67I/mznOeWCfJuEMbznX2kCCRIVxE4lYhuLE59ebBocHmJxpx3acXMYY07fmK26NDqv3/Q==\" />\n<input type=\"hidden\" name=\"unique_id\" id=\"unique_id\" value=\"21_book_4900\" />\n<input type=\"hidden\" name=\"book_id\" id=\"book_id\" value=\"4900\" />\n<input type=\"hidden\" name=\"a\" id=\"a\" />\n<input type=\"hidden\" name=\"name\" id=\"name\" />\n<input type=\"hidden\" name=\"from_choice\" id=\"from_choice\" value=\"false\" />\n<input type=\"hidden\" name=\"from_home_module\" id=\"from_home_module\" value=\"false\" />\n<input type=\"hidden\" name=\"book_origin\" id=\"book_origin\" value=\"related_works\" />\n<input type=\"hidden\" name=\"page_referrer\" id=\"page_referrer\" value=\"https://www.goodreads.com/\" />\n<input type=\"hidden\" name=\"page_url\" id=\"page_url\" value=\"/book/show/12996.Othello\" />\n<\/form>\n\n<button class=\'wtrShelfButton\'><\/button>\n<\/div>\n\n<div class=\'ratingStars wtrRating\'>\n<div class=\'starsErrorTooltip hidden\'>\nError rating book. Refresh and try again.\n<\/div>\n<div class=\'myRating uitext greyText\'>Rate this book<\/div>\n<div class=\'clearRating uitext\'>Clear rating<\/div>\n<div class=\"stars\" data-resource-id=\"4900\" data-user-id=\"129148878\" data-submit-url=\"/review/rate/4900?book_origin=related_works&page_referrer=https%3A%2F%2Fwww.goodreads.com%2F&page_url=%2Fbook%2Fshow%2F12996.Othello&rate_books_page=false&stars_click=false&wtr_button_id=21_book_4900\" data-rating=\"0\"><a class=\"star off\" title=\"did not like it\" href=\"#\" ref=\"\">1 of 5 stars<\/a><a class=\"star off\" title=\"it was ok\" href=\"#\" ref=\"\">2 of 5 stars<\/a><a class=\"star off\" title=\"liked it\" href=\"#\" ref=\"\">3 of 5 stars<\/a><a class=\"star off\" title=\"really liked it\" href=\"#\" ref=\"\">4 of 5 stars<\/a><a class=\"star off\" title=\"it was amazing\" href=\"#\" ref=\"\">5 of 5 stars<\/a><\/div>\n<\/div>\n\n<\/div>\n\n\n\n\n", { style: 'addbook', stem: 'topRight', hook: { tip: 'topRight', target: 'bottomMiddle' }, hideOn: false, width: 400, hideAfter: 0.05, delay: 0.35 });-->
<!--                                                        $('bookCover_4900').observe('prototip:shown', function() {-->
<!--                                                            if (this.up('#box')) {-->
<!--                                                                $$('div.prototip').each(function(i){i.setStyle({zIndex: $('box').getStyle('z-index')})});-->
<!--                                                            } else {-->
<!--                                                                $$('div.prototip').each(function(i){i.setStyle({zIndex: 6000})});-->
<!--                                                            }-->
<!--                                                        });-->
<!---->
<!--                                                        newTip['wrapper'].addClassName('prototipAllowOverflow');-->
<!---->
<!--                                                        $('bookCover_4900').observe('prototip:shown', function () {-->
<!--                                                            $$('div.prototip').each(function (e) {-->
<!--                                                                if ($('bookCover_4900').hasClassName('ignored')) {-->
<!--                                                                    e.setStyle({'display': 'none'});-->
<!--                                                                    return;-->
<!--                                                                }-->
<!--                                                                e.setStyle({'overflow': 'visible'});-->
<!--                                                            });-->
<!--                                                        });-->
<!--                                                        $('bookCover_4900').observe('prototip:hidden', function () {-->
<!--                                                            $$('span.elementTwo').each(function (e) {-->
<!--                                                                if (e.getStyle('display') !== 'none') {-->
<!--                                                                    var lessLink = e.next();-->
<!--                                                                    swapContent(lessLink);-->
<!--                                                                }-->
<!--                                                            });-->
<!--                                                        });-->
<!---->
<!--                                                        //]]>-->
<!--                                                    </script>-->
<!---->
<!--                                                </li>-->
<!--                                                <li class='cover' id='bookCover_40540984'>-->
<!--                                                    <a href="https://www.goodreads.com/book/show/40540984-colour-runner"><img alt="Colour Runner" src="https://i.gr-assets.com/images/S/compressed.photo.goodreads.com/books/1529161169l/40540984._SX98_.jpg" />-->
<!--                                                    </a>-->
<!---->
<!---->
<!--                                                    <script>-->
<!--                                                        //<![CDATA[-->
<!--                                                        var newTip = new Tip($('bookCover_40540984'), "\n\n  <h2><a class=\"readable bookTitle\" href=\"https://www.goodreads.com/book/show/40540984-colour-runner?from_choice=false&amp;from_home_module=false\">Colour Runner<\/a><\/h2>\n\n      <div>\n        by <a class=\"authorName\" href=\"/author/show/18131248.Anthony_Ashe?a=9&amp;origin=related_works\">Anthony Ashe<\/a>\n      <\/div>\n\n          <div class=\"smallText uitext darkGreyText\">\n            <span class=\"minirating\"><span class=\"stars staticStars notranslate\"><span size=\"12x12\" class=\"staticStar p10\"><\/span><span size=\"12x12\" class=\"staticStar p10\"><\/span><span size=\"12x12\" class=\"staticStar p10\"><\/span><span size=\"12x12\" class=\"staticStar p10\"><\/span><span size=\"12x12\" class=\"staticStar p6\"><\/span><\/span> 4.60 avg rating &mdash; 147 ratings<\/span>            &mdash; published \n          <\/div>\n\n    <div class=\"addBookTipDescription\">\n      \n<span id=\"freeTextContainer8249594671044998083\">Sarah Green wishes she were taller. She wishes bubblegum wouldn&apos;t lose its flavour. She wishes school would start in the afternoon. But above all, Sarah wishes she could remain a kid forever. When she receives an invitation to the mysterious House of<\/span>\n  <span id=\"freeText8249594671044998083\" style=\"display:none\">Sarah Green wishes she were taller. She wishes bubblegum wouldn\'t lose its flavour. She wishes school would start in the afternoon. But above all, Sarah wishes she could remain a kid forever. When she receives an invitation to the mysterious House of Vine, a secret dwelling where reside two genii, her wishful thinking becomes all the more real.  A once in a lifetime opportunity awaits her, the chance to claim a single wish. But like those before her, Sarah must first agree to play a game. And it is a game of the deadliest kind, where terrors lurk behind every corner, where fiendish puzzles break her wits and where the clock shows her impending doom.  Can she overcome it within twenty-four hours? Can she uncover the horrible truth behind the House of Vine and its enigmatic hosts? It is, after all, child\'s play.<\/span>\n  <a data-text-id=\"8249594671044998083\" href=\"#\" onclick=\"swapContent(\$(this));; return false;\">...more<\/a>\n\n    <\/div>\n\n      <div class=\'wtrButtonContainer\' id=\'22_book_40540984\'>\n<div class=\'wtrUp wtrLeft\'>\n<form action=\"/shelf/add_to_shelf\" accept-charset=\"UTF-8\" method=\"post\"><input name=\"utf8\" type=\"hidden\" value=\"&#x2713;\" /><input type=\"hidden\" name=\"authenticity_token\" value=\"EDPUKCetuzVJdiLkHGJfvHgAnO9xpKKY0zVOQdgoutSblmjHeac98h4m+4HwSPxOhrh50yiakCNaJ/cWlgEJrA==\" />\n<input type=\"hidden\" name=\"book_id\" id=\"book_id\" value=\"40540984\" />\n<input type=\"hidden\" name=\"name\" id=\"name\" value=\"to-read\" />\n<input type=\"hidden\" name=\"unique_id\" id=\"unique_id\" value=\"22_book_40540984\" />\n<input type=\"hidden\" name=\"wtr_new\" id=\"wtr_new\" value=\"true\" />\n<input type=\"hidden\" name=\"from_choice\" id=\"from_choice\" value=\"false\" />\n<input type=\"hidden\" name=\"from_home_module\" id=\"from_home_module\" value=\"false\" />\n<input type=\"hidden\" name=\"ref\" id=\"ref\" value=\"\" class=\"wtrLeftUpRef\" />\n<input type=\"hidden\" name=\"existing_review\" id=\"existing_review\" value=\"false\" class=\"wtrExisting\" />\n<input type=\"hidden\" name=\"book_origin\" id=\"book_origin\" value=\"related_works\" />\n<input type=\"hidden\" name=\"page_referrer\" id=\"page_referrer\" value=\"https://www.goodreads.com/\" />\n<input type=\"hidden\" name=\"page_url\" id=\"page_url\" value=\"/book/show/12996.Othello\" />\n<button class=\'wtrToRead\' type=\'submit\'>\n<span class=\'progressTrigger\'>Want to Read<\/span>\n<span class=\'progressIndicator\'>saving…<\/span>\n<\/button>\n<\/form>\n\n<\/div>\n\n<div class=\'wtrRight wtrUp\'>\n<form class=\"hiddenShelfForm\" action=\"/shelf/add_to_shelf\" accept-charset=\"UTF-8\" method=\"post\"><input name=\"utf8\" type=\"hidden\" value=\"&#x2713;\" /><input type=\"hidden\" name=\"authenticity_token\" value=\"0mL0M3WISTDVGqJNxAe8AmXpO2f1+DoE+6Nd171X00hZx0jcK4LP94JKeygoLR/wm1HeW6zGCL9yseSA835gMA==\" />\n<input type=\"hidden\" name=\"unique_id\" id=\"unique_id\" value=\"22_book_40540984\" />\n<input type=\"hidden\" name=\"book_id\" id=\"book_id\" value=\"40540984\" />\n<input type=\"hidden\" name=\"a\" id=\"a\" />\n<input type=\"hidden\" name=\"name\" id=\"name\" />\n<input type=\"hidden\" name=\"from_choice\" id=\"from_choice\" value=\"false\" />\n<input type=\"hidden\" name=\"from_home_module\" id=\"from_home_module\" value=\"false\" />\n<input type=\"hidden\" name=\"book_origin\" id=\"book_origin\" value=\"related_works\" />\n<input type=\"hidden\" name=\"page_referrer\" id=\"page_referrer\" value=\"https://www.goodreads.com/\" />\n<input type=\"hidden\" name=\"page_url\" id=\"page_url\" value=\"/book/show/12996.Othello\" />\n<\/form>\n\n<button class=\'wtrShelfButton\'><\/button>\n<\/div>\n\n<div class=\'ratingStars wtrRating\'>\n<div class=\'starsErrorTooltip hidden\'>\nError rating book. Refresh and try again.\n<\/div>\n<div class=\'myRating uitext greyText\'>Rate this book<\/div>\n<div class=\'clearRating uitext\'>Clear rating<\/div>\n<div class=\"stars\" data-resource-id=\"40540984\" data-user-id=\"129148878\" data-submit-url=\"/review/rate/40540984?book_origin=related_works&page_referrer=https%3A%2F%2Fwww.goodreads.com%2F&page_url=%2Fbook%2Fshow%2F12996.Othello&rate_books_page=false&stars_click=false&wtr_button_id=22_book_40540984\" data-rating=\"0\"><a class=\"star off\" title=\"did not like it\" href=\"#\" ref=\"\">1 of 5 stars<\/a><a class=\"star off\" title=\"it was ok\" href=\"#\" ref=\"\">2 of 5 stars<\/a><a class=\"star off\" title=\"liked it\" href=\"#\" ref=\"\">3 of 5 stars<\/a><a class=\"star off\" title=\"really liked it\" href=\"#\" ref=\"\">4 of 5 stars<\/a><a class=\"star off\" title=\"it was amazing\" href=\"#\" ref=\"\">5 of 5 stars<\/a><\/div>\n<\/div>\n\n<\/div>\n\n\n\n\n", { style: 'addbook', stem: 'topRight', hook: { tip: 'topRight', target: 'bottomMiddle' }, hideOn: false, width: 400, hideAfter: 0.05, delay: 0.35 });-->
<!--                                                        $('bookCover_40540984').observe('prototip:shown', function() {-->
<!--                                                            if (this.up('#box')) {-->
<!--                                                                $$('div.prototip').each(function(i){i.setStyle({zIndex: $('box').getStyle('z-index')})});-->
<!--                                                            } else {-->
<!--                                                                $$('div.prototip').each(function(i){i.setStyle({zIndex: 6000})});-->
<!--                                                            }-->
<!--                                                        });-->
<!---->
<!--                                                        newTip['wrapper'].addClassName('prototipAllowOverflow');-->
<!---->
<!--                                                        $('bookCover_40540984').observe('prototip:shown', function () {-->
<!--                                                            $$('div.prototip').each(function (e) {-->
<!--                                                                if ($('bookCover_40540984').hasClassName('ignored')) {-->
<!--                                                                    e.setStyle({'display': 'none'});-->
<!--                                                                    return;-->
<!--                                                                }-->
<!--                                                                e.setStyle({'overflow': 'visible'});-->
<!--                                                            });-->
<!--                                                        });-->
<!--                                                        $('bookCover_40540984').observe('prototip:hidden', function () {-->
<!--                                                            $$('span.elementTwo').each(function (e) {-->
<!--                                                                if (e.getStyle('display') !== 'none') {-->
<!--                                                                    var lessLink = e.next();-->
<!--                                                                    swapContent(lessLink);-->
<!--                                                                }-->
<!--                                                            });-->
<!--                                                        });-->
<!---->
<!--                                                        //]]>-->
<!--                                                    </script>-->
<!---->
<!--                                                </li>-->
<!--                                                <li class='cover' id='bookCover_92517'>-->
<!--                                                    <a href="https://www.goodreads.com/book/show/92517.The_Glass_Menagerie"><img alt="The Glass Menagerie" src="https://i.gr-assets.com/images/S/compressed.photo.goodreads.com/books/1391591003l/92517._SX98_.jpg" />-->
<!--                                                    </a>-->
<!---->
<!---->
<!--                                                    <script>-->
<!--                                                        //<![CDATA[-->
<!--                                                        var newTip = new Tip($('bookCover_92517'), "\n\n  <h2><a class=\"readable bookTitle\" href=\"https://www.goodreads.com/book/show/92517.The_Glass_Menagerie?from_choice=false&amp;from_home_module=false\">The Glass Menagerie<\/a><\/h2>\n\n      <div>\n        by <a class=\"authorName\" href=\"/author/show/7751.Tennessee_Williams?a=9&amp;origin=related_works\">Tennessee Williams<\/a>\n      <\/div>\n\n          <div class=\"smallText uitext darkGreyText\">\n            <span class=\"minirating\"><span class=\"stars staticStars notranslate\"><span size=\"12x12\" class=\"staticStar p10\"><\/span><span size=\"12x12\" class=\"staticStar p10\"><\/span><span size=\"12x12\" class=\"staticStar p10\"><\/span><span size=\"12x12\" class=\"staticStar p6\"><\/span><span size=\"12x12\" class=\"staticStar p0\"><\/span><\/span> 3.71 avg rating &mdash; 113,861 ratings<\/span>            &mdash; published 1945\n          <\/div>\n\n    <div class=\"addBookTipDescription\">\n      \n<span id=\"freeTextContainer10484574838557640704\">No play in the modern theater has so captured the imagination and heart of the American public as Tennessee Williams&apos;s The Glass Menagerie. As Williams&apos;s first popular success, it launched the brilliant, if somewhat controversial, career, of our pre-<\/span>\n  <span id=\"freeText10484574838557640704\" style=\"display:none\">No play in the modern theater has so captured the imagination and heart of the American public as Tennessee Williams\'s The Glass Menagerie. As Williams\'s first popular success, it launched the brilliant, if somewhat controversial, career, of our pre-eminent lyric playwright. Since its premiere in Chicago in 1944, with the legendary Laurette Taylor in the role of Amanda, Menagaerie has been the bravura piece for great actresses from Jessica Tandy to Joanne Woodward, and is studied and performed in classrooms and theatres around the world. \n\nThe Glass Menagerie (in the reading text the author preferred) is now available only in its New Directions Paperbook edition. A new introduction by the editor of The Tennessee Williams Annual Review, Robert Bray, reappraises the play more than half a century after it won the New York Drama Critics Circle Award. This edition of The Glass Menagerie also includes Williams\'s essay on the impact of sudden fame on a struggling writer, &quot;The Catastrophe of Success,&quot; as well as a short section of Williams\'s own &quot;Production Notes.&quot; \n(back cover)<\/span>\n  <a data-text-id=\"10484574838557640704\" href=\"#\" onclick=\"swapContent(\$(this));; return false;\">...more<\/a>\n\n    <\/div>\n\n      <div class=\'wtrButtonContainer\' id=\'23_book_92517\'>\n<div class=\'wtrUp wtrLeft\'>\n<form action=\"/shelf/add_to_shelf\" accept-charset=\"UTF-8\" method=\"post\"><input name=\"utf8\" type=\"hidden\" value=\"&#x2713;\" /><input type=\"hidden\" name=\"authenticity_token\" value=\"jwItT397zifhk4L6xKcZOO2e4jq4sMVOjIgb3AjYVQIEp5GgIXFI4LbDW58ojbrKEyYHBuGO9/UFmqKLRvHmeg==\" />\n<input type=\"hidden\" name=\"book_id\" id=\"book_id\" value=\"92517\" />\n<input type=\"hidden\" name=\"name\" id=\"name\" value=\"to-read\" />\n<input type=\"hidden\" name=\"unique_id\" id=\"unique_id\" value=\"23_book_92517\" />\n<input type=\"hidden\" name=\"wtr_new\" id=\"wtr_new\" value=\"true\" />\n<input type=\"hidden\" name=\"from_choice\" id=\"from_choice\" value=\"false\" />\n<input type=\"hidden\" name=\"from_home_module\" id=\"from_home_module\" value=\"false\" />\n<input type=\"hidden\" name=\"ref\" id=\"ref\" value=\"\" class=\"wtrLeftUpRef\" />\n<input type=\"hidden\" name=\"existing_review\" id=\"existing_review\" value=\"false\" class=\"wtrExisting\" />\n<input type=\"hidden\" name=\"book_origin\" id=\"book_origin\" value=\"related_works\" />\n<input type=\"hidden\" name=\"page_referrer\" id=\"page_referrer\" value=\"https://www.goodreads.com/\" />\n<input type=\"hidden\" name=\"page_url\" id=\"page_url\" value=\"/book/show/12996.Othello\" />\n<button class=\'wtrToRead\' type=\'submit\'>\n<span class=\'progressTrigger\'>Want to Read<\/span>\n<span class=\'progressIndicator\'>saving…<\/span>\n<\/button>\n<\/form>\n\n<\/div>\n\n<div class=\'wtrRight wtrUp\'>\n<form class=\"hiddenShelfForm\" action=\"/shelf/add_to_shelf\" accept-charset=\"UTF-8\" method=\"post\"><input name=\"utf8\" type=\"hidden\" value=\"&#x2713;\" /><input type=\"hidden\" name=\"authenticity_token\" value=\"fE9FLcSPYSCZaf0KpftccbCGAtBzMZ3a9kXDpHMwRAX36vnCmoXn5845JG9J0f+DTj7n7CoPr2F/V3rzPRn3fQ==\" />\n<input type=\"hidden\" name=\"unique_id\" id=\"unique_id\" value=\"23_book_92517\" />\n<input type=\"hidden\" name=\"book_id\" id=\"book_id\" value=\"92517\" />\n<input type=\"hidden\" name=\"a\" id=\"a\" />\n<input type=\"hidden\" name=\"name\" id=\"name\" />\n<input type=\"hidden\" name=\"from_choice\" id=\"from_choice\" value=\"false\" />\n<input type=\"hidden\" name=\"from_home_module\" id=\"from_home_module\" value=\"false\" />\n<input type=\"hidden\" name=\"book_origin\" id=\"book_origin\" value=\"related_works\" />\n<input type=\"hidden\" name=\"page_referrer\" id=\"page_referrer\" value=\"https://www.goodreads.com/\" />\n<input type=\"hidden\" name=\"page_url\" id=\"page_url\" value=\"/book/show/12996.Othello\" />\n<\/form>\n\n<button class=\'wtrShelfButton\'><\/button>\n<\/div>\n\n<div class=\'ratingStars wtrRating\'>\n<div class=\'starsErrorTooltip hidden\'>\nError rating book. Refresh and try again.\n<\/div>\n<div class=\'myRating uitext greyText\'>Rate this book<\/div>\n<div class=\'clearRating uitext\'>Clear rating<\/div>\n<div class=\"stars\" data-resource-id=\"92517\" data-user-id=\"129148878\" data-submit-url=\"/review/rate/92517?book_origin=related_works&page_referrer=https%3A%2F%2Fwww.goodreads.com%2F&page_url=%2Fbook%2Fshow%2F12996.Othello&rate_books_page=false&stars_click=false&wtr_button_id=23_book_92517\" data-rating=\"0\"><a class=\"star off\" title=\"did not like it\" href=\"#\" ref=\"\">1 of 5 stars<\/a><a class=\"star off\" title=\"it was ok\" href=\"#\" ref=\"\">2 of 5 stars<\/a><a class=\"star off\" title=\"liked it\" href=\"#\" ref=\"\">3 of 5 stars<\/a><a class=\"star off\" title=\"really liked it\" href=\"#\" ref=\"\">4 of 5 stars<\/a><a class=\"star off\" title=\"it was amazing\" href=\"#\" ref=\"\">5 of 5 stars<\/a><\/div>\n<\/div>\n\n<\/div>\n\n\n\n\n", { style: 'addbook', stem: 'topRight', hook: { tip: 'topRight', target: 'bottomMiddle' }, hideOn: false, width: 400, hideAfter: 0.05, delay: 0.35 });-->
<!--                                                        $('bookCover_92517').observe('prototip:shown', function() {-->
<!--                                                            if (this.up('#box')) {-->
<!--                                                                $$('div.prototip').each(function(i){i.setStyle({zIndex: $('box').getStyle('z-index')})});-->
<!--                                                            } else {-->
<!--                                                                $$('div.prototip').each(function(i){i.setStyle({zIndex: 6000})});-->
<!--                                                            }-->
<!--                                                        });-->
<!---->
<!--                                                        newTip['wrapper'].addClassName('prototipAllowOverflow');-->
<!---->
<!--                                                        $('bookCover_92517').observe('prototip:shown', function () {-->
<!--                                                            $$('div.prototip').each(function (e) {-->
<!--                                                                if ($('bookCover_92517').hasClassName('ignored')) {-->
<!--                                                                    e.setStyle({'display': 'none'});-->
<!--                                                                    return;-->
<!--                                                                }-->
<!--                                                                e.setStyle({'overflow': 'visible'});-->
<!--                                                            });-->
<!--                                                        });-->
<!--                                                        $('bookCover_92517').observe('prototip:hidden', function () {-->
<!--                                                            $$('span.elementTwo').each(function (e) {-->
<!--                                                                if (e.getStyle('display') !== 'none') {-->
<!--                                                                    var lessLink = e.next();-->
<!--                                                                    swapContent(lessLink);-->
<!--                                                                }-->
<!--                                                            });-->
<!--                                                        });-->
<!---->
<!--                                                        //]]>-->
<!--                                                    </script>-->
<!---->
<!--                                                </li>-->
<!--                                                <li class='cover' id='bookCover_1381'>-->
<!--                                                    <a href="https://www.goodreads.com/book/show/1381.The_Odyssey"><img alt="The Odyssey" src="https://i.gr-assets.com/images/S/compressed.photo.goodreads.com/books/1390173285l/1381._SX98_.jpg" />-->
<!--                                                    </a>-->
<!---->
<!---->
<!--                                                    <script>-->
<!--                                                        //<![CDATA[-->
<!--                                                        var newTip = new Tip($('bookCover_1381'), "\n\n  <h2><a class=\"readable bookTitle\" href=\"https://www.goodreads.com/book/show/1381.The_Odyssey?from_choice=false&amp;from_home_module=false\">The Odyssey<\/a><\/h2>\n\n      <div>\n        by <a class=\"authorName\" href=\"/author/show/903.Homer?a=9&amp;origin=related_works\">Homer<\/a>\n      <\/div>\n\n          <div class=\"smallText uitext darkGreyText\">\n            <span class=\"minirating\"><span class=\"stars staticStars notranslate\"><span size=\"12x12\" class=\"staticStar p10\"><\/span><span size=\"12x12\" class=\"staticStar p10\"><\/span><span size=\"12x12\" class=\"staticStar p10\"><\/span><span size=\"12x12\" class=\"staticStar p6\"><\/span><span size=\"12x12\" class=\"staticStar p0\"><\/span><\/span> 3.78 avg rating &mdash; 883,228 ratings<\/span>            &mdash; published -800\n          <\/div>\n\n    <div class=\"addBookTipDescription\">\n      \n<span id=\"freeTextContainer9089133463645768342\">Sing to me of the man, Muse, the man of twists and turns\ndriven time and again off course, once he had plundered\nthe hallowed heights of Troy.\n\nSo begins Robert Fagles&apos; magnificent translation of the Odyssey, which Jasper Griffin in The New York Time<\/span>\n  <span id=\"freeText9089133463645768342\" style=\"display:none\">Sing to me of the man, Muse, the man of twists and turns\ndriven time and again off course, once he had plundered\nthe hallowed heights of Troy.\n\nSo begins Robert Fagles\' magnificent translation of the Odyssey, which Jasper Griffin in The New York Times Review of Books hails as &quot;a distinguished achievement.&quot;\n\nIf the Iliad is the world\'s greatest war epic, then the Odyssey is literature\'s grandest evocation of everyman\'s journey though life. Odysseus\' reliance on his wit and wiliness for survival in his encounters with divine and natural forces, during his ten-year voyage home to Ithaca after the Trojan War, is at once a timeless human story and an individual test of moral endurance. \n\nIn the myths and legends that are retold here, Fagles has captured the energy and poetry of Homer\'s original in a bold, contemporary idiom, and given us an Odyssey to read aloud, to savor, and to treasure for its sheer lyrical mastery.\n\nRenowned classicist Bernard Knox\'s superb Introduction and textual commentary provide new insights and background information for the general reader and scholar alike, intensifying the strength of Fagles\' translation.\n\nThis is an Odyssey to delight both the classicist and the public at large, and to captivate a new generation of Homer\'s students.\n\n--\n\nRobert Fagles, winner of the PEN/Ralph Manheim Medal for Translation and a 1996 Academy Award in Literature from the American Academy of Arts and Letters, presents us with Homer\'s best-loved and most accessible poem in a stunning new modern-verse translation.<\/span>\n  <a data-text-id=\"9089133463645768342\" href=\"#\" onclick=\"swapContent(\$(this));; return false;\">...more<\/a>\n\n    <\/div>\n\n      <div class=\'wtrButtonContainer\' id=\'24_book_1381\'>\n<div class=\'wtrUp wtrLeft\'>\n<form action=\"/shelf/add_to_shelf\" accept-charset=\"UTF-8\" method=\"post\"><input name=\"utf8\" type=\"hidden\" value=\"&#x2713;\" /><input type=\"hidden\" name=\"authenticity_token\" value=\"kYexdGBVRf3TJC8aGXDhfndqs1JvZyl9FdbWNx4gzmkaIg2bPl/DOoR09n/1WkKMidJWbjZZG8acxG9gUAl9EQ==\" />\n<input type=\"hidden\" name=\"book_id\" id=\"book_id\" value=\"1381\" />\n<input type=\"hidden\" name=\"name\" id=\"name\" value=\"to-read\" />\n<input type=\"hidden\" name=\"unique_id\" id=\"unique_id\" value=\"24_book_1381\" />\n<input type=\"hidden\" name=\"wtr_new\" id=\"wtr_new\" value=\"true\" />\n<input type=\"hidden\" name=\"from_choice\" id=\"from_choice\" value=\"false\" />\n<input type=\"hidden\" name=\"from_home_module\" id=\"from_home_module\" value=\"false\" />\n<input type=\"hidden\" name=\"ref\" id=\"ref\" value=\"\" class=\"wtrLeftUpRef\" />\n<input type=\"hidden\" name=\"existing_review\" id=\"existing_review\" value=\"false\" class=\"wtrExisting\" />\n<input type=\"hidden\" name=\"book_origin\" id=\"book_origin\" value=\"related_works\" />\n<input type=\"hidden\" name=\"page_referrer\" id=\"page_referrer\" value=\"https://www.goodreads.com/\" />\n<input type=\"hidden\" name=\"page_url\" id=\"page_url\" value=\"/book/show/12996.Othello\" />\n<button class=\'wtrToRead\' type=\'submit\'>\n<span class=\'progressTrigger\'>Want to Read<\/span>\n<span class=\'progressIndicator\'>saving…<\/span>\n<\/button>\n<\/form>\n\n<\/div>\n\n<div class=\'wtrRight wtrUp\'>\n<form class=\"hiddenShelfForm\" action=\"/shelf/add_to_shelf\" accept-charset=\"UTF-8\" method=\"post\"><input name=\"utf8\" type=\"hidden\" value=\"&#x2713;\" /><input type=\"hidden\" name=\"authenticity_token\" value=\"CSwSQME1pT+TFGluo2WnGjdB9q1ejmXND7CQauEVKWSCia6vnz8j+MREsAtPTwToyfkTkQewV3aGoik9rzyaHA==\" />\n<input type=\"hidden\" name=\"unique_id\" id=\"unique_id\" value=\"24_book_1381\" />\n<input type=\"hidden\" name=\"book_id\" id=\"book_id\" value=\"1381\" />\n<input type=\"hidden\" name=\"a\" id=\"a\" />\n<input type=\"hidden\" name=\"name\" id=\"name\" />\n<input type=\"hidden\" name=\"from_choice\" id=\"from_choice\" value=\"false\" />\n<input type=\"hidden\" name=\"from_home_module\" id=\"from_home_module\" value=\"false\" />\n<input type=\"hidden\" name=\"book_origin\" id=\"book_origin\" value=\"related_works\" />\n<input type=\"hidden\" name=\"page_referrer\" id=\"page_referrer\" value=\"https://www.goodreads.com/\" />\n<input type=\"hidden\" name=\"page_url\" id=\"page_url\" value=\"/book/show/12996.Othello\" />\n<\/form>\n\n<button class=\'wtrShelfButton\'><\/button>\n<\/div>\n\n<div class=\'ratingStars wtrRating\'>\n<div class=\'starsErrorTooltip hidden\'>\nError rating book. Refresh and try again.\n<\/div>\n<div class=\'myRating uitext greyText\'>Rate this book<\/div>\n<div class=\'clearRating uitext\'>Clear rating<\/div>\n<div class=\"stars\" data-resource-id=\"1381\" data-user-id=\"129148878\" data-submit-url=\"/review/rate/1381?book_origin=related_works&page_referrer=https%3A%2F%2Fwww.goodreads.com%2F&page_url=%2Fbook%2Fshow%2F12996.Othello&rate_books_page=false&stars_click=false&wtr_button_id=24_book_1381\" data-rating=\"0\"><a class=\"star off\" title=\"did not like it\" href=\"#\" ref=\"\">1 of 5 stars<\/a><a class=\"star off\" title=\"it was ok\" href=\"#\" ref=\"\">2 of 5 stars<\/a><a class=\"star off\" title=\"liked it\" href=\"#\" ref=\"\">3 of 5 stars<\/a><a class=\"star off\" title=\"really liked it\" href=\"#\" ref=\"\">4 of 5 stars<\/a><a class=\"star off\" title=\"it was amazing\" href=\"#\" ref=\"\">5 of 5 stars<\/a><\/div>\n<\/div>\n\n<\/div>\n\n\n\n\n", { style: 'addbook', stem: 'topRight', hook: { tip: 'topRight', target: 'bottomMiddle' }, hideOn: false, width: 400, hideAfter: 0.05, delay: 0.35 });-->
<!--                                                        $('bookCover_1381').observe('prototip:shown', function() {-->
<!--                                                            if (this.up('#box')) {-->
<!--                                                                $$('div.prototip').each(function(i){i.setStyle({zIndex: $('box').getStyle('z-index')})});-->
<!--                                                            } else {-->
<!--                                                                $$('div.prototip').each(function(i){i.setStyle({zIndex: 6000})});-->
<!--                                                            }-->
<!--                                                        });-->
<!---->
<!--                                                        newTip['wrapper'].addClassName('prototipAllowOverflow');-->
<!---->
<!--                                                        $('bookCover_1381').observe('prototip:shown', function () {-->
<!--                                                            $$('div.prototip').each(function (e) {-->
<!--                                                                if ($('bookCover_1381').hasClassName('ignored')) {-->
<!--                                                                    e.setStyle({'display': 'none'});-->
<!--                                                                    return;-->
<!--                                                                }-->
<!--                                                                e.setStyle({'overflow': 'visible'});-->
<!--                                                            });-->
<!--                                                        });-->
<!--                                                        $('bookCover_1381').observe('prototip:hidden', function () {-->
<!--                                                            $$('span.elementTwo').each(function (e) {-->
<!--                                                                if (e.getStyle('display') !== 'none') {-->
<!--                                                                    var lessLink = e.next();-->
<!--                                                                    swapContent(lessLink);-->
<!--                                                                }-->
<!--                                                            });-->
<!--                                                        });-->
<!---->
<!--                                                        //]]>-->
<!--                                                    </script>-->
<!---->
<!--                                                </li>-->
<!--                                            </ul>-->
<!--                                        </div>-->
<!--                                        <div class='navButton navButtonPrev initiallyHidden'>-->
<!--                                            <div class='navButtonArrow sliderArrowPrev'></div>-->
<!--                                        </div>-->
<!--                                        <div class='navButton navButtonNext'>-->
<!--                                            <div class='navButtonArrow sliderArrowNext'></div>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                    <a class="actionLink right seeMoreLink" href="https://www.goodreads.com/book/similar/995103-the-tragedy-of-othello-the-moor-of-venice">-->
<!--                                        See similar books…-->
<!--                                    </a>-->
<!--                                    <div class="clear">-->
<!---->
<!--                                    </div>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                            <div class="bigBoxBottom">-->
<!---->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->




<!--                    <div data-react-class="ReactComponents.GoogleBannerAd" data-react-props="{&quot;adId&quot;:&quot;div-gpt-ad-goodr-book-top-300x250&quot;,&quot;className&quot;:&quot;googleBannerAd--mediumRectangle&quot;}"></div>-->


<!--                    <div data-react-class="ReactComponents.GoogleFeaturedContentModule" data-react-props="{&quot;adId&quot;:&quot;&quot;,&quot;trackingOptions&quot;:{&quot;enableTracking&quot;:true,&quot;adId&quot;:&quot;&quot;},&quot;isMobile&quot;:false,&quot;isInline&quot;:false,&quot;hasBottomBorder&quot;:false}"></div>-->



<!--                    <div class="stacked">-->
<!--                        <div class=" clearFloats bigBox"><div class="h2Container gradientHeaderContainer"><h2 class="brownBackground"><a href="/work/shelves/995103">Genres</a></h2></div><div class="bigBoxBody"><div class="bigBoxContent containerWithHeaderContent">-->
<!--                                    <div class="elementList ">-->
<!--                                        <div class="left">-->
<!--                                            <a class="actionLinkLite bookPageGenreLink" href="/genres/classics">Classics</a>-->
<!--                                        </div>-->
<!--                                        <div class="right">-->
<!--                                            <a title="9225 people shelved this book as &#39;classics&#39;" class="actionLinkLite greyText bookPageGenreLink" rel="nofollow" href="/shelf/users/12996.Othello?shelf=classics">9,225 users</a>-->
<!--                                        </div>-->
<!--                                        <div class="clear"></div>-->
<!--                                    </div>-->
<!--                                    <div class="elementList ">-->
<!--                                        <div class="left">-->
<!--                                            <a class="actionLinkLite bookPageGenreLink" href="/genres/plays">Plays</a>-->
<!--                                        </div>-->
<!--                                        <div class="right">-->
<!--                                            <a title="5694 people shelved this book as &#39;plays&#39;" class="actionLinkLite greyText bookPageGenreLink" rel="nofollow" href="/shelf/users/12996.Othello?shelf=plays">5,694 users</a>-->
<!--                                        </div>-->
<!--                                        <div class="clear"></div>-->
<!--                                    </div>-->
<!--                                    <div class="elementList ">-->
<!--                                        <div class="left">-->
<!--                                            <a class="actionLinkLite bookPageGenreLink" href="/genres/fiction">Fiction</a>-->
<!--                                        </div>-->
<!--                                        <div class="right">-->
<!--                                            <a title="2023 people shelved this book as &#39;fiction&#39;" class="actionLinkLite greyText bookPageGenreLink" rel="nofollow" href="/shelf/users/12996.Othello?shelf=fiction">2,023 users</a>-->
<!--                                        </div>-->
<!--                                        <div class="clear"></div>-->
<!--                                    </div>-->
<!--                                    <div class="elementList ">-->
<!--                                        <div class="left">-->
<!--                                            <a class="actionLinkLite bookPageGenreLink" href="/genres/drama">Drama</a>-->
<!--                                        </div>-->
<!--                                        <div class="right">-->
<!--                                            <a title="1829 people shelved this book as &#39;drama&#39;" class="actionLinkLite greyText bookPageGenreLink" rel="nofollow" href="/shelf/users/12996.Othello?shelf=drama">1,829 users</a>-->
<!--                                        </div>-->
<!--                                        <div class="clear"></div>-->
<!--                                    </div>-->
<!--                                    <div class="elementList ">-->
<!--                                        <div class="left">-->
<!--                                            <a class="actionLinkLite bookPageGenreLink" href="/genres/academic">Academic</a> &gt;-->
<!--                                            <a class="actionLinkLite bookPageGenreLink" href="/genres/school">School</a>-->
<!--                                        </div>-->
<!--                                        <div class="right">-->
<!--                                            <a title="1055 people shelved this book as &#39;school&#39;" class="actionLinkLite greyText bookPageGenreLink" rel="nofollow" href="/shelf/users/12996.Othello?shelf=school">1,055 users</a>-->
<!--                                        </div>-->
<!--                                        <div class="clear"></div>-->
<!--                                    </div>-->
<!--                                    <div class="elementList ">-->
<!--                                        <div class="left">-->
<!--                                            <a class="actionLinkLite bookPageGenreLink" href="/genres/literature">Literature</a>-->
<!--                                        </div>-->
<!--                                        <div class="right">-->
<!--                                            <a title="664 people shelved this book as &#39;literature&#39;" class="actionLinkLite greyText bookPageGenreLink" rel="nofollow" href="/shelf/users/12996.Othello?shelf=literature">664 users</a>-->
<!--                                        </div>-->
<!--                                        <div class="clear"></div>-->
<!--                                    </div>-->
<!--                                    <div class="elementList ">-->
<!--                                        <div class="left">-->
<!--                                            <a class="actionLinkLite bookPageGenreLink" href="/genres/plays">Plays</a> &gt;-->
<!--                                            <a class="actionLinkLite bookPageGenreLink" href="/genres/theatre">Theatre</a>-->
<!--                                        </div>-->
<!--                                        <div class="right">-->
<!--                                            <a title="581 people shelved this book as &#39;theatre&#39;" class="actionLinkLite greyText bookPageGenreLink" rel="nofollow" href="/shelf/users/12996.Othello?shelf=theatre">581 users</a>-->
<!--                                        </div>-->
<!--                                        <div class="clear"></div>-->
<!--                                    </div>-->
<!--                                    <div class="elementList ">-->
<!--                                        <div class="left">-->
<!--                                            <a class="actionLinkLite bookPageGenreLink" href="/genres/academic">Academic</a> &gt;-->
<!--                                            <a class="actionLinkLite bookPageGenreLink" href="/genres/read-for-school">Read For School</a>-->
<!--                                        </div>-->
<!--                                        <div class="right">-->
<!--                                            <a title="513 people shelved this book as &#39;read-for-school&#39;" class="actionLinkLite greyText bookPageGenreLink" rel="nofollow" href="/shelf/users/12996.Othello?shelf=read-for-school">513 users</a>-->
<!--                                        </div>-->
<!--                                        <div class="clear"></div>-->
<!--                                    </div>-->
<!--                                    <div class="elementList ">-->
<!--                                        <div class="left">-->
<!--                                            <a class="actionLinkLite bookPageGenreLink" href="/genres/poetry">Poetry</a>-->
<!--                                        </div>-->
<!--                                        <div class="right">-->
<!--                                            <a title="451 people shelved this book as &#39;poetry&#39;" class="actionLinkLite greyText bookPageGenreLink" rel="nofollow" href="/shelf/users/12996.Othello?shelf=poetry">451 users</a>-->
<!--                                        </div>-->
<!--                                        <div class="clear"></div>-->
<!--                                    </div>-->
<!--                                    <div class="elementList elementListLast">-->
<!--                                        <div class="left">-->
<!--                                            <a class="actionLinkLite bookPageGenreLink" href="/genres/tragedy">Tragedy</a>-->
<!--                                        </div>-->
<!--                                        <div class="right">-->
<!--                                            <a title="347 people shelved this book as &#39;tragedy&#39;" class="actionLinkLite greyText bookPageGenreLink" rel="nofollow" href="/shelf/users/12996.Othello?shelf=tragedy">347 users</a>-->
<!--                                        </div>-->
<!--                                        <div class="clear"></div>-->
<!--                                    </div>-->
<!--                                    <a class="actionLink right seeMoreLink" href="/book/shelves/12996.Othello">See top shelves…</a>-->
<!--                                    <div class="clear"></div></div></div><div class="bigBoxBottom"></div></div>-->
<!--                    </div>-->

<!--                    <div id="aboutAuthor" class=" clearFloats bigBox"><div class="h2Container gradientHeaderContainer"><h2 class="brownBackground"><a href="/author/show/947.William_Shakespeare">About William Shakespeare</a></h2></div><div class="bigBoxBody"><div class="bigBoxContent containerWithHeaderContent">-->
<!--                                <div class='bookAuthorProfile'>-->
<!--                                    <div class='bookAuthorProfile__topContainer'>-->
<!--                                        <div class='bookAuthorProfile__photoContainer'>-->
<!--                                            <a href="/author/show/947.William_Shakespeare">-->
<!--                                                <div class='bookAuthorProfile__photo' style='background-image: url(https://images.gr-assets.com/authors/1586700347p3/947.jpg);'></div>-->
<!--                                            </a>-->
<!--                                        </div>-->
<!--                                        <div class='bookAuthorProfile__widgetContainer'>-->
<!--                                            <div class='bookAuthorProfile__name'>-->
<!--                                                <a href="/author/show/947.William_Shakespeare">-->
<!--                                                    William Shakespeare-->
<!--                                                </a>-->
<!--                                            </div>-->
<!--                                            <div class='bookAuthorProfile__followerCount'>-->
<!--                                                36,728-->
<!--                                                followers-->
<!--                                            </div>-->
<!--                                            <div class="authorFollowButtonContainer">-->
<!--                                                <button name="button" type="button" class="gr-button js-AuthorFollow gr-button--fullWidth gr-button--togglable--disabled" remote="true" method="post" rel="nofollow" data-author-id="947.William_Shakespeare" data-active-button-text="Following" data-inactive-button-text="Follow Author" data-hover-button-text="Unfollow" data-request-url="/author_followings?id=947">-->
<!--                                                    Follow Author-->
<!--                                                </button>-->
<!--                                            </div>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                    <div class='bookAuthorProfile__about'>-->
<!--                                        <span id="freeTextContainer12581028295708559870">-->
<!--                                            William Shakespeare (baptised 26 April 1564) was an English poet and playwright, widely regarded as the greatest writer in the English language and the world&apos;s pre-eminent dramatist. He is often called England&apos;s national poet and the &quot;Bard of Avon&quot; (or simply &quot;The Bard&quot;). His surviving works consist of 38 plays, 154 sonnets, two long narrative poems, and several other poems. His plays have been tr-->
<!--                                        </span>-->
<!--                                        <span id="freeText12581028295708559870" style="display:none">-->
<!--                                            William Shakespeare (baptised 26 April 1564) was an English poet and playwright, widely regarded as the greatest writer in the English language and the world's pre-eminent dramatist. He is often called England's national poet and the "Bard of Avon" (or simply "The Bard"). His surviving works consist of 38 plays, 154 sonnets, two long narrative poems, and several other poems. His plays have been translated into every major living language, and are performed more often than those of any other playwright.<br /><br />Shakespeare was born and raised in Stratford-upon-Avon. Scholars believe that he died on his fifty-second birthday, coinciding with St George’s Day.<br /><br />At the age of 18 he married Anne Hathaway, who bore him three children: Susanna, and twins Hamnet and Judith. Between 1585 and 1592 he began a successful career in London as an actor, writer, and part owner of the playing company the Lord Chamberlain's Men, later known as the King's Men. He appears to have retired to Stratford around 1613, where he died three years later. Few records of Shakespeare's private life survive, and there has been considerable speculation about such matters as his sexuality, religious beliefs, and whether the works attributed to him were written by others.<br /><br />Shakespeare produced most of his known work between 1590 and 1613. His early plays were mainly comedies and histories, genres he raised to the peak of sophistication and artistry by the end of the sixteenth century. Next he wrote mainly tragedies until about 1608, including <i>Hamlet, King Lear</i>, and <i>Macbeth</i>, considered some of the finest examples in the English language. In his last phase, he wrote tragicomedies, also known as romances, and collaborated with other playwrights. Many of his plays were published in editions of varying quality and accuracy during his lifetime, and in 1623, two of his former theatrical colleagues published the <i>First Folio</i>, a collected edition of his dramatic works that included all but two of the plays now recognised as Shakespeare's.<br /><br />Shakespeare was a respected poet and playwright in his own day, but his reputation did not rise to its present heights until the nineteenth century. The Romantics, in particular, acclaimed Shakespeare's genius, and the Victorians hero-worshipped Shakespeare with a reverence that George Bernard Shaw called "bardolatry". In the twentieth century, his work was repeatedly adopted and rediscovered by new movements in scholarship and performance. His plays remain highly popular today and are consistently performed and reinterpreted in diverse cultural and political contexts throughout the world.<br /><br />According to historians, Shakespeare wrote 37 plays and 154 sonnets throughout the span of his life. Shakespeare's writing average was 1.5 plays a year since he first started writing in 1589. There have been plays and sonnets attributed to Shakespeare that were not authentically written by the great master of language and literature.-->
<!--                                            <br />-->
<!--                                        </span>-->
<!--                                        <a data-text-id="12581028295708559870" href="#" onclick="swapContent($(this));; return false;">-->
<!--                                            ...more-->
<!--                                        </a>-->
<!---->
<!--                                    </div>-->
<!--                                </div>-->
<!---->
<!--                                <div class="clear"></div></div></div><div class="bigBoxBottom"></div>-->
<!--                    </div>-->



<!--                    <div class=" clearFloats bigBox"><div class="h2Container gradientHeaderContainer"><h2 class="brownBackground"><a href="/author/list/947.William_Shakespeare">Books by William Shakespeare</a></h2></div><div class="bigBoxBody"><div class="bigBoxContent containerWithHeaderContent">-->
<!--                                <div class="js-dataTooltip" data-use-wtr-tooltip='true'>-->
<!--                                    <div class="js-tooltipTrigger tooltipTrigger" data-resource-type='Book' data-resource-id='18135' data-placement='bottom-left'>-->
<!--                                        <a href="/book/show/18135.Romeo_and_Juliet">-->
<!--                                            <img id="more_book_18135" alt="Romeo and Juliet" title="Romeo and Juliet" width="50" src="https://i.gr-assets.com/images/S/compressed.photo.goodreads.com/books/1572098085l/18135._SX98_.jpg" />-->
<!--                                        </a>-->
<!--                                    </div>-->
<!--                                    <div class="js-tooltipTrigger tooltipTrigger" data-resource-type='Book' data-resource-id='1420' data-placement='bottom-left'>-->
<!--                                        <a href="/book/show/1420.Hamlet">-->
<!--                                            <img id="more_book_1420" alt="Hamlet" title="Hamlet" width="50" src="https://i.gr-assets.com/images/S/compressed.photo.goodreads.com/books/1351051208l/1420._SX98_.jpg" />-->
<!--                                        </a>-->
<!--                                    </div>-->
<!--                                    <div class="js-tooltipTrigger tooltipTrigger" data-resource-type='Book' data-resource-id='8852' data-placement='bottom-left'>-->
<!--                                        <a href="/book/show/8852.Macbeth">-->
<!--                                            <img id="more_book_8852" alt="Macbeth" title="Macbeth" width="50" src="https://i.gr-assets.com/images/S/compressed.photo.goodreads.com/books/1459795224l/8852._SX98_.jpg" />-->
<!--                                        </a>-->
<!--                                    </div>-->
<!--                                    <div class="js-tooltipTrigger tooltipTrigger" data-resource-type='Book' data-resource-id='1622' data-placement='bottom-left'>-->
<!--                                        <a href="/book/show/1622.A_Midsummer_Night_s_Dream">-->
<!--                                            <img id="more_book_1622" alt="A Midsummer Night&#39;s Dream" title="A Midsummer Night&#39;s Dream" width="50" src="https://i.gr-assets.com/images/S/compressed.photo.goodreads.com/books/1327874534l/1622._SX98_.jpg" />-->
<!--                                        </a>-->
<!--                                    </div>-->
<!--                                    <div class="js-tooltipTrigger tooltipTrigger" data-resource-type='Book' data-resource-id='12957' data-placement='bottom-left'>-->
<!--                                        <a href="/book/show/12957.Much_Ado_About_Nothing">-->
<!--                                            <img id="more_book_12957" alt="Much Ado About Nothing" title="Much Ado About Nothing" width="50" src="https://i.gr-assets.com/images/S/compressed.photo.goodreads.com/books/1327885569l/12957._SX98_.jpg" />-->
<!--                                        </a>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                                <div class="moreLink">-->
<!--                                    <a class="actionLink" href="/author/list/947.William_Shakespeare">-->
<!--                                        More&hellip;-->
<!--                                    </a>-->
<!--                                </div>-->
<!--                                <div class="clear">-->
<!---->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                        <div class="bigBoxBottom">-->
<!---->
<!--                        </div>-->
<!--                    </div>-->

<!--                    <div data-react-class="ReactComponents.GoogleBannerAd" data-react-props="{&quot;adId&quot;:&quot;div-gpt-ad-goodr-book-cb-300x250&quot;,&quot;className&quot;:&quot;googleBannerAd--mediumRectangle&quot;}">-->
<!---->
<!--                    </div>-->

<!--                    <div data-react-class="ReactComponents.NewsPreview" data-react-props="{&quot;sectionHeader&quot;:&quot;Related Articles&quot;,&quot;isMobile&quot;:false,&quot;isBookPage&quot;:true,&quot;imageOnLeft&quot;:true,&quot;showLikesComments&quot;:true,&quot;newsItems&quot;:[{&quot;newsUrl&quot;:&quot;https://www.goodreads.com/blog/show/1825-6-great-books-hitting-shelves-this-week?ref=book-show&quot;,&quot;excerpt&quot;:&quot;\n\n\nNeed another excuse to treat yourself to new book this week? We&#39;ve got you covered with the buzziest new releases of the day.\n\nTo create our...&quot;,&quot;likeCount&quot;:51,&quot;commentCount&quot;:12,&quot;title&quot;:&quot;6 Great Books Hitting Shelves This Week&quot;,&quot;newsImageUrl&quot;:&quot;https://images.gr-assets.com/blogs/1588885259p8/1825.jpg&quot;,&quot;authorImageUrl&quot;:null,&quot;bookImageUrl&quot;:null,&quot;key&quot;:&quot;kca://blog/amzn1.gr.blog.v3.Z1aivxchb3yLu6qr&quot;}]}">-->
<!--                        <div class="bigBox clearFloats" data-reactid=".1qj1jed90jk" data-react-checksum="-612915331">-->
<!--                            <div class="h2Container gradientHeaderContainer" data-reactid=".1qj1jed90jk.0">-->
<!--                                <h2 class="brownBackground newsPreview__sectionHeader--bookPage" data-reactid=".1qj1jed90jk.0.0">-->
<!--                                    Related Articles-->
<!--                                </h2>-->
<!--                            </div>-->
<!--                            <div class="newsPreview__item" data-reactid=".1qj1jed90jk.1:$kca=2//blog/amzn1=1gr=1blog=1v3=1Z1aivxchb3yLu6qr">-->
<!--                                <div data-reactid=".1qj1jed90jk.1:$kca=2//blog/amzn1=1gr=1blog=1v3=1Z1aivxchb3yLu6qr.0">-->
<!--                                    <a href="https://www.goodreads.com/blog/show/1825-6-great-books-hitting-shelves-this-week?ref=book-show" data-reactid=".1qj1jed90jk.1:$kca=2//blog/amzn1=1gr=1blog=1v3=1Z1aivxchb3yLu6qr.0.0">-->
<!--                                        <img class="newsPreview__newsImage" src="https://images.gr-assets.com/blogs/1588885259p8/1825.jpg" data-reactid=".1qj1jed90jk.1:$kca=2//blog/amzn1=1gr=1blog=1v3=1Z1aivxchb3yLu6qr.0.0.0"/>-->
<!--                                    </a>-->
<!--                                </div>-->
<!--                                <div class="newsPreview__textSection" data-reactid=".1qj1jed90jk.1:$kca=2//blog/amzn1=1gr=1blog=1v3=1Z1aivxchb3yLu6qr.1">-->
<!--                                    <div data-reactid=".1qj1jed90jk.1:$kca=2//blog/amzn1=1gr=1blog=1v3=1Z1aivxchb3yLu6qr.1.0">-->
<!--                                        <a class="gr-h4 gr-h4--serif newsPreview__newsHeader" href="https://www.goodreads.com/blog/show/1825-6-great-books-hitting-shelves-this-week?ref=book-show" data-reactid=".1qj1jed90jk.1:$kca=2//blog/amzn1=1gr=1blog=1v3=1Z1aivxchb3yLu6qr.1.0.0">-->
<!--                                            6 Great Books Hitting Shelves This Week-->
<!--                                        </a>-->
<!--                                    </div>-->
<!--                                    <div class="newsPreview__excerpt" data-reactid=".1qj1jed90jk.1:$kca=2//blog/amzn1=1gr=1blog=1v3=1Z1aivxchb3yLu6qr.1.1">-->
<!---->
<!---->
<!--                                        Need another excuse to treat yourself to new book this week? We've got you covered with the buzziest new releases of the day.-->
<!---->
<!--                                        To create our...-->
<!--                                    </div>-->
<!--                                    <div class="newsPreview__readMore" data-reactid=".1qj1jed90jk.1:$kca=2//blog/amzn1=1gr=1blog=1v3=1Z1aivxchb3yLu6qr.1.2"><a href="https://www.goodreads.com/blog/show/1825-6-great-books-hitting-shelves-this-week?ref=book-show" data-reactid=".1qj1jed90jk.1:$kca=2//blog/amzn1=1gr=1blog=1v3=1Z1aivxchb3yLu6qr.1.2.0">Read more...</a></div><div class="newsPreview__likesAndComments" data-reactid=".1qj1jed90jk.1:$kca=2//blog/amzn1=1gr=1blog=1v3=1Z1aivxchb3yLu6qr.1.3"><small class="newsPreview__likesAndComments__text" data-reactid=".1qj1jed90jk.1:$kca=2//blog/amzn1=1gr=1blog=1v3=1Z1aivxchb3yLu6qr.1.3.0"><span data-reactid=".1qj1jed90jk.1:$kca=2//blog/amzn1=1gr=1blog=1v3=1Z1aivxchb3yLu6qr.1.3.0.0"><span data-reactid=".1qj1jed90jk.1:$kca=2//blog/amzn1=1gr=1blog=1v3=1Z1aivxchb3yLu6qr.1.3.0.0.$0">51 likes</span><span data-reactid=".1qj1jed90jk.1:$kca=2//blog/amzn1=1gr=1blog=1v3=1Z1aivxchb3yLu6qr.1.3.0.0.$1"><span data-reactid=".1qj1jed90jk.1:$kca=2//blog/amzn1=1gr=1blog=1v3=1Z1aivxchb3yLu6qr.1.3.0.0.$1.0"> · </span></span><span data-reactid=".1qj1jed90jk.1:$kca=2//blog/amzn1=1gr=1blog=1v3=1Z1aivxchb3yLu6qr.1.3.0.0.$2">-->
<!--                                                    12 comments-->
<!--                                                </span>-->
<!--                                            </span>-->
<!--                                        </small>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->


<!--                    <div class=" clearFloats bigBox"><div class="h2Container gradientHeaderContainer"><h2 class="brownBackground"><a href="/trivia/work/995103-the-tragedy-of-othello-the-moor-of-venice">Trivia About Othello</a></h2></div><div class="bigBoxBody"><div class="bigBoxContent containerWithHeaderContent">-->
<!--                                <div class="mediumText">-->
<!--                                    180 trivia questions-->
<!--                                    <br />-->
<!--                                    6 quizzes-->
<!--                                </div>-->
<!--                                <a class="actionLink" style="float: right;" href="/trivia/work/995103-the-tragedy-of-othello-the-moor-of-venice">More quizzes &amp; trivia...</a>-->
<!--                                <div class="clear"></div></div></div><div class="bigBoxBottom"></div>-->
<!--                    </div>-->


<!--                    <div class=" clearFloats bigBox"><div class="h2Container gradientHeaderContainer"><h2 class="brownBackground"><a href="/work/quotes/995103-the-tragedy-of-othello-the-moor-of-venice">Quotes from Othello</a></h2></div><div class="bigBoxBody"><div class="bigBoxContent containerWithHeaderContent">-->
<!--                                <div class="stacked" tyle="padding-bottom:15px">-->
<!--                                    <span class="readable">&ldquo;O, beware, my lord, of jealousy;<br />It is the green-ey'd monster, which doth mock<br />The meat it feeds on.&rdquo;</span>-->
<!--                                    <nobr>-->
<!--                                        &mdash;-->
<!--                                        <a class="actionLinkLite" href="/quotes/16216-o-beware-my-lord-of-jealousy-it-is-the-green-ey-d">514 likes</a>-->
<!--                                    </nobr>-->
<!--                                    <div class="clear"></div>-->
<!--                                </div>-->
<!--                                <div class="stacked" tyle="padding-bottom:15px">-->
<!--                                    <span class="readable">&ldquo;For she had eyes and chose me.&rdquo;-->
<!--                                    </span>-->
<!--                                    <nobr>-->
<!--                                        &mdash;-->
<!--                                        <a class="actionLinkLite" href="/quotes/830510-for-she-had-eyes-and-chose-me">-->
<!--                                            462 likes-->
<!--                                        </a>-->
<!--                                    </nobr>-->
<!--                                    <div class="clear">-->
<!---->
<!--                                    </div>-->
<!--                                </div>-->
<!--                                <a class="actionLink" style="float: right" href="/work/quotes/995103-the-tragedy-of-othello-the-moor-of-venice">-->
<!--                                    More quotes&hellip;-->
<!--                                </a>-->
<!--                                <div class="clear">-->
<!---->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                        <div class="bigBoxBottom">-->
<!---->
<!--                        </div>-->
<!--                    </div>-->

<!--                    <div data-react-class="ReactComponents.GoogleBannerAd" data-react-props="{&quot;adId&quot;:&quot;div-gpt-ad-goodr-book-bottom-300x250&quot;,&quot;className&quot;:&quot;googleBannerAd--mediumRectangle&quot;}">-->
<!---->
<!--                    </div>-->


                </div>

                <span id="rating_graph" class="rating_graph">
    <script type="text/javascript+protovis">
      renderRatingGraph([101917, 117158, 78761, 19921, 5572]);
      if ($('rating_details')) {
        $('rating_details').insert({top: $('rating_graph')})
      }
    </script>
  </span>

                <script>
                    //<![CDATA[
                    if (typeof window.uet == 'function') { window.uet('af'); }
                    //]]>
                </script>

                <script>
                    //<![CDATA[

                    $j(document).ready(function() {
                        if (typeof window.uet == "function") {
                            window.uet("bb");

                            if (window.ue &&
                                window.ue.identifier &&
                                typeof window.ue.identifier.newRID == "function") {
                                var scope = "delayable_book_show";
                                window.ues("ctb", scope, "1");
                                var rid = window.ue.identifier.newRID();
                                window.ues("id", scope, rid);
                                window.uet("tc", scope);
                                // Only add csm_scope to params if we successfully initialized AJAX metrics
                                ;
                            }
                        }

                        $j("#lazy_loadable_view").load(
                            "/book/delayable_book_show/12996?page=1",
                            {"id":"12996.Othello","csm_scope":"delayable_book_show"},
                            function() {
                                $j(document).trigger("lazyload:complete");
                            }
                        );
                    });

                    //]]>
                </script>


                <div data-react-class="ReactComponents.QualtricsSurvey" data-react-props="{&quot;signedOut&quot;:false,&quot;qualtricsUrl&quot;:&quot;https://goodreads.co1.qualtrics.com/jfe/form/SV_73wucOsr7CfPm6N?grId=A3DS52GK4KUT4W?grId=A3DS52GK4KUT4W&quot;,&quot;type&quot;:&quot;book_show&quot;}"></div>



                <script>
                    //<![CDATA[
                    (function (w, d, load) {
                        var script,
                            first = d.getElementsByTagName('SCRIPT')[0],
                            n = load.length,
                            i = 0,
                            go = function () {
                                for (i = 0; i < n; i += 1) {
                                    script = d.createElement('SCRIPT');
                                    script.type = 'text/javascript';
                                    script.async = true;
                                    script.src = load[i];
                                    first.parentNode.insertBefore(script, first);
                                }
                            }
                        if (w.attachEvent) {
                            w.attachEvent('onload', go);
                        } else {
                            w.addEventListener('load', go, false);
                        }
                    }(window, document,
                        ['//assets.pinterest.com/js/pinit.js',
                            '//apis.google.com/js/plusone.js'
                        ]
                    ));

                    //]]>
                </script>

            </div>
            <div class="clear"></div>
        </div>
        <div class="clear"></div>
    </div>
    <div data-react-class="ReactComponents.GooglePageSkin" data-react-props="{&quot;adId&quot;:&quot;&quot;,&quot;trackingOptions&quot;:{&quot;enableTracking&quot;:true,&quot;adId&quot;:&quot;&quot;}}"></div>



    <div class="clear"></div>
    <footer class='responsiveSiteFooter'>
        <div class='responsiveSiteFooter__contents gr-container-fluid'>
            <div class='gr-row'>
                <div class='gr-col gr-col-md-8 gr-col-lg-6'>
                    <div class='gr-row'>
                        <div class='gr-col-md-3 gr-col-lg-4'>
                            <h3 class='responsiveSiteFooter__heading'>Company</h3>
                            <ul class='responsiveSiteFooter__linkList'>
                                <li class='responsiveSiteFooter__linkListItem'>
                                    <a class="responsiveSiteFooter__link" href="/about/us">About us</a>
                                </li>
                                <li class='responsiveSiteFooter__linkListItem'>
                                    <a class="responsiveSiteFooter__link" href="/jobs">Careers</a>
                                </li>
                                <li class='responsiveSiteFooter__linkListItem'>
                                    <a class="responsiveSiteFooter__link" href="/about/terms">Terms</a>
                                </li>
                                <li class='responsiveSiteFooter__linkListItem'>
                                    <a class="responsiveSiteFooter__link" href="/about/privacy">Privacy</a>
                                </li>
                                <li class='responsiveSiteFooter__linkListItem'>
                                    <a class="responsiveSiteFooter__link" href="https://help.goodreads.com/s/article/Goodreads-Interest-Based-Ads-Notice">Interest Based Ads</a>
                                </li>
                                <li class='responsiveSiteFooter__linkListItem'>
                                    <a class="responsiveSiteFooter__link" href="/adprefs">Ad Preferences</a>
                                </li>
                                <li class='responsiveSiteFooter__linkListItem'>
                                    <a class="responsiveSiteFooter__link" href="/help?action_type=help_web_footer">Help</a>
                                </li>
                            </ul>
                        </div>
                        <div class='gr-col-md-4 gr-col-lg-4'>
                            <h3 class='responsiveSiteFooter__heading'>Work with us</h3>
                            <ul class='responsiveSiteFooter__linkList'>
                                <li class='responsiveSiteFooter__linkListItem'>
                                    <a class="responsiveSiteFooter__link" href="/author/program">Authors</a>
                                </li>
                                <li class='responsiveSiteFooter__linkListItem'>
                                    <a class="responsiveSiteFooter__link" href="/advertisers">Advertise</a>
                                </li>
                                <li class='responsiveSiteFooter__linkListItem'>
                                    <a class="responsiveSiteFooter__link" href="/news?content_type=author_blogs">Authors &amp; ads blog</a>
                                </li>
                                <li class='responsiveSiteFooter__linkListItem'>
                                    <a class="responsiveSiteFooter__link" href="/api">API</a>
                                </li>
                            </ul>
                        </div>
                        <div class='gr-col-md-5 gr-col-lg-4'>
                            <h3 class='responsiveSiteFooter__heading'>Connect</h3>
                            <div class='responsiveSiteFooter__socialLinkWrapper'>
                                <a class="responsiveSiteFooter__socialLink" href="https://www.facebook.com/Goodreads/"><img alt="Goodreads on Facebook" src="https://s.gr-assets.com/assets/site_footer/footer_facebook-ea4ab848f8e86c5f5c98311bc9495a1b.svg" />
                                </a><a class="responsiveSiteFooter__socialLink" href="https://twitter.com/goodreads"><img alt="Goodreads on Twitter" src="https://s.gr-assets.com/assets/site_footer/footer_twitter-126b3ee80481a763f7fccb06ca03053c.svg" />
                                </a></div>
                            <div class='responsiveSiteFooter__socialLinkWrapper'>
                                <a class="responsiveSiteFooter__socialLink" href="https://www.instagram.com/goodreads/"><img alt="Goodreads on Instagram" src="https://s.gr-assets.com/assets/site_footer/footer_instagram-d59e3887020f12bcdb12e6c539579d85.svg" />
                                </a><a class="responsiveSiteFooter__socialLink" href="https://www.linkedin.com/company/goodreads-com/"><img alt="Goodreads on LinkedIn" src="https://s.gr-assets.com/assets/site_footer/footer_linkedin-5b820f4703eff965672594ef4d10e33c.svg" />
                                </a></div>
                        </div>
                    </div>
                </div>
                <div class='gr-col gr-col-md-4 gr-col-lg-6 responsiveSiteFooter__appLinksColumn'>
                    <div class='responsiveSiteFooter__appLinksColumnContents'>
                        <div class='responsiveSiteFooter__appLinksColumnBadges'>
                            <a href="https://itunes.apple.com/app/apple-store/id355833469?pt=325668&amp;ct=mw_footer&amp;mt=8"><img alt="Download app for iOS" src="https://s.gr-assets.com/assets/app/badge-ios-desktop-homepage-6ac7ae16eabce57f6c855361656a7540.svg" />
                            </a><a href="https://play.google.com/store/apps/details?id=com.goodreads&amp;utm_source=mw_footer&amp;pcampaignid=MKT-Other-global-all-co-prtnr-py-PartBadge-Mar2515-1"><img alt="Download app for Android" srcSet="https://s.gr-assets.com/assets/app/badge-android-desktop-home-2x-e31514e1fb4dddecf9293aa526a64cfe.png 2x" src="https://s.gr-assets.com/assets/app/badge-android-desktop-home-0f517cbae4d56c88a128d27a7bea1118.png" />
                            </a></div>
                        <ul class='responsiveSiteFooter__linkList'>
                            <li class='responsiveSiteFooter__linkListItem'>
                                ©
                                2021
                                Goodreads, Inc.
                            </li>
                            <li class='responsiveSiteFooter__linkListItem'>
                                <a class="responsiveSiteFooter__link" href="/toggle_mobile">Mobile version
                                </a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>


    <script>
        //<![CDATA[
        if (typeof window.uet == 'function') { window.uet('be'); }
        //]]>
    </script>

</div>
<!--
This partial loads on almost every page view.  The associated React component makes
a call to SignInPromptController#get to determine if the user should see the sign in interstial.
This is determined by how many signed out pagehits the user has executed an how recently they have
last seen the insterstitial.  If the controller responds indicating the popup should appear, the
React component will render its content.
-->
<div data-react-class="ReactComponents.LoginInterstitial" data-react-props="{&quot;allowFacebookSignIn&quot;:true,&quot;allowAmazonSignIn&quot;:true,&quot;overrideSignedOutPageCount&quot;:false,&quot;path&quot;:{&quot;signInUrl&quot;:&quot;/user/sign_in&quot;,&quot;signUpUrl&quot;:&quot;/user/sign_up&quot;,&quot;privacyUrl&quot;:&quot;/about/privacy&quot;,&quot;termsUrl&quot;:&quot;/about/terms&quot;,&quot;thirdPartyRedirectUrl&quot;:&quot;/user/new?connect_prompt=true&quot;}}"><noscript data-reactid=".nq108uuk8w" data-react-checksum="-1502736138"></noscript></div>

<div id="overlay" style="display:none" onclick="Lightbox.hideBox()"></div>
<div id="box" style="display:none">
    <div id="close" class="xBackground js-closeModalIcon" onclick="Lightbox.hideBox()" title="Close this window"></div>
    <div id="boxContents"></div>
    <div id="boxContentsLeftovers" style="display:none"></div>
    <div class="clear"></div>
</div>

<div id="fbSigninNotification" style="display:none;">
    <p>Welcome back. Just a moment while we sign you in to your Goodreads account.</p>
    <img src="https://s.gr-assets.com/assets/facebook/login_animation-085464711e6c1ed5ba287a2f40ba3343.gif" alt="Login animation" />
</div>




<script>
    //<![CDATA[
    qcdata = {} || qcdata;
    (function(){
        var elem = document.createElement('script');
        elem.src = (document.location.protocol == "https:" ? "https://secure" : "http://pixel") + ".quantserve.com/aquant.js?a=p-0dUe_kJAjvkoY";
        elem.async = true;
        elem.type = "text/javascript";
        var scpt = document.getElementsByTagName('script')[0];
        scpt.parentNode.insertBefore(elem,scpt);
    }());
    var qcdata = {qacct: 'p-0dUe_kJAjvkoY', uid: '129148878'};
    //]]>
</script>
<noscript>
    <img alt='Quantcast' border='0' height='1' src='//pixel.quantserve.com/pixel/p-0dUe_kJAjvkoY.gif' style='display: none;' width='1'>
</noscript>

<script>
    //<![CDATA[
    var _comscore = _comscore || [];
    _comscore.push({ c1: "2", c2: "6035830", c3: "", c4: "", c5: "", c6: "", c15: ""});
    (function() {
        var s = document.createElement("script"), el = document.getElementsByTagName("script")[0]; s.async = true;
        s.src = (document.location.protocol == "https:" ? "https://sb" : "http://b") + ".scorecardresearch.com/beacon.js";
        el.parentNode.insertBefore(s, el);
    })();
    //]]>
</script>
<noscript>
    <img style="display: none" width="0" height="0" alt="" src="https://sb.scorecardresearch.com/p?c1=2&amp;amp;c2=6035830&amp;amp;c3=&amp;amp;c4=&amp;amp;c5=&amp;amp;c6=&amp;amp;c15=&amp;amp;cv=2.0&amp;amp;cj=1" />
</noscript>


<script>
    //<![CDATA[
    window.addEventListener("DOMContentLoaded", function() {
        ReactStores.GoogleAdsStore.initializeWith({"targeting":{"sid":"osid.3ef9237958fcfb29a594dd991e8112c5","grsession":"osid.3ef9237958fcfb29a594dd991e8112c5","surface":"desktop","signedin":"true","gr_author":"false","author":["947","3137322","1020792","585","569","3706","799335","25885","2782"],"genres":["1","24","25","28","29","26","136","62","460","40","64","128","146","244","621","776","1053","8300","4","5","35","48","58","68","84","96","144","173","188","207","269","384","397","479","560","587","688","798","945","1024","1126","1413","1670","2093","2207","4005","5722","5737","6568"],"Gender":"male","Age":"20-24","shelf":["classics","plays","fiction","drama","school","literature","theatre","readforschool","poetry","tragedy"],"tags":["24","621","1","460","26","25","776","8300","146","9926"],"gtargeting":"dcly0qk1t","resource":"Work_995103"},"ads":{"div-gpt-ad-goodr-book-top-970x66":{"isNativeAd":false,"hasCreative":false,"hasRequestedCreative":false,"path":"/4215/goodr.book.top.970x66","dimensions":["970x66","970x90","970x250"],"adSizeMapping":null,"adDeviceType":"desktop","pmetImpressionTrackUrl":"https://www.goodreads.com/dfp/impression","pmetClickTrackUrl":"https://www.goodreads.com/dfp/click","creativeSelector":"div#google_image_div","isLazyLoaded":false},"div-gpt-ad-goodr-book-top-300x250":{"isNativeAd":false,"hasCreative":false,"hasRequestedCreative":false,"path":"/4215/goodr.book.top.300x250","dimensions":"300x250","adSizeMapping":null,"adDeviceType":"desktop","pmetImpressionTrackUrl":"https://www.goodreads.com/dfp/impression","pmetClickTrackUrl":"https://www.goodreads.com/dfp/click","creativeSelector":"div#google_image_div","isLazyLoaded":false},"div-gpt-ad-goodr-book-cb-300x250":{"isNativeAd":false,"hasCreative":false,"hasRequestedCreative":false,"path":"/4215/goodr.book.cb.300x250","dimensions":["300x250","2x1"],"adSizeMapping":null,"adDeviceType":"desktop","pmetImpressionTrackUrl":"https://www.goodreads.com/dfp/impression","pmetClickTrackUrl":"https://www.goodreads.com/dfp/click","creativeSelector":"div#google_image_div","isLazyLoaded":false},"div-gpt-ad-goodr-book-bottom-300x250":{"isNativeAd":false,"hasCreative":false,"hasRequestedCreative":false,"path":"/4215/goodr.book.bottom.300x250","dimensions":["300x250","3x1"],"adSizeMapping":null,"adDeviceType":"desktop","pmetImpressionTrackUrl":"https://www.goodreads.com/dfp/impression","pmetClickTrackUrl":"https://www.goodreads.com/dfp/click","creativeSelector":"div#google_image_div","isLazyLoaded":false}},"nativeAds":{}});ReactStores.UserShelvesStore.initializeWith({"defaultShelves":[{"name":"to-read","url":"/user_shelves/418448428","displayName":"Want to Read","bookCount":0},{"name":"currently-reading","url":"/user_shelves/418448429","displayName":"Currently Reading","bookCount":0},{"name":"read","url":"/user_shelves/418448430","displayName":"Read","bookCount":12}],"customExclusiveShelves":[],"nonExclusiveShelves":[]});  ReactStores.NotificationsStore.updateWith({"unreadCount":0,"unreadCountMore":false});
        ReactStores.CurrentUserStore.initializeWith({"currentUser":{"name":"Mohsen Mahmoodzadeh","profileUrl":"/user/show/129148878-mohsen-mahmoodzadeh","profileImage":"https://i.gr-assets.com/images/S/compressed.photo.goodreads.com/users/1611697567i/129148878._UX60_CR0,0,60,60_.jpg","pendingRecsCount":0,"groupInvitesCount":0,"tempFriendRequestCount":0,"tempUnreadMessageCount":0}});
        ReactStores.FavoriteGenresStore.updateWith({"allGenres":[{"name":"Art","url":"/genres/art"},{"name":"Biography","url":"/genres/biography"},{"name":"Business","url":"/genres/business"},{"name":"Children's","url":"/genres/children-s"},{"name":"Christian","url":"/genres/christian"},{"name":"Classics","url":"/genres/classics"},{"name":"Comics","url":"/genres/comics"},{"name":"Cookbooks","url":"/genres/cookbooks"},{"name":"Ebooks","url":"/genres/ebooks"},{"name":"Fantasy","url":"/genres/fantasy"},{"name":"Fiction","url":"/genres/fiction"},{"name":"Graphic Novels","url":"/genres/graphic-novels"},{"name":"Historical Fiction","url":"/genres/historical-fiction"},{"name":"History","url":"/genres/history"},{"name":"Horror","url":"/genres/horror"},{"name":"Memoir","url":"/genres/memoir"},{"name":"Music","url":"/genres/music"},{"name":"Mystery","url":"/genres/mystery"},{"name":"Nonfiction","url":"/genres/non-fiction"},{"name":"Poetry","url":"/genres/poetry"},{"name":"Psychology","url":"/genres/psychology"},{"name":"Romance","url":"/genres/romance"},{"name":"Science","url":"/genres/science"},{"name":"Science Fiction","url":"/genres/science-fiction"},{"name":"Self Help","url":"/genres/self-help"},{"name":"Sports","url":"/genres/sports"},{"name":"Thriller","url":"/genres/thriller"},{"name":"Travel","url":"/genres/travel"},{"name":"Young Adult","url":"/genres/young-adult"}],"favoriteGenres":["Business","Cookbooks","Fiction"]});
        ReactStores.TabsStore.updateWith({"communitySpotlight":"groups"});

    });
    //]]>
</script>

</body>
</html>

<!-- This is a random-length HTML comment: oeyvhzfpfpyaclqgoebcryjaaxgkvdtjccwjgrkhbfzeuqwjcznnstltilbovihzwiqupmatdkvzryzpwvlwvcoimldlrileylhugtryfvawiphpqfjoudjdefszzjzhmvbyjmipagykrmioneahasocxdahimjrnoxeslqslyrfbdmynmdngwggojrjzsuqczqjrvmaiujcnmvrjynjgxrzrokwoqayr -->