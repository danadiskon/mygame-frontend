<!doctype html>
<html lang="">
<head>
  <meta charset="utf-8"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
  <meta name="viewport" content="width=device-width,initial-scale=1"/>

  <!-- Meta OG -->
  <meta property="og:title" content="GAME MASTER">
  <meta property="og:description" content="Kredit gratis,Tidak perlu deposit ⭐️⭐️⭐️⭐️ Pembesaran ultra tinggi,Penarikan gratis ⭐️⭐️⭐️⭐️ Layanan online 24 jam ⭐️⭐️⭐️⭐️ Rasakan sekarang juga">
  <meta property="og:image" content="../d16nkh0dr5k1oh.cloudfront.net/img/share88/share_open.png">
  <meta property="og:url" content="index.html">
  <meta property="og:type" content="website">
  <meta property="og:image:width" content="1200">
  <meta property="og:image:height" content="630">

  <!-- Meta Twitter -->
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content="GAME MASTER">
  <meta name="twitter:description" content="Kredit gratis,Tidak perlu deposit ⭐️⭐️⭐️⭐️ Pembesaran ultra tinggi,Penarikan gratis ⭐️⭐️⭐️⭐️ Layanan online 24 jam ⭐️⭐️⭐️⭐️ Rasakan sekarang juga">
  <meta name="twitter:image" content="../d16nkh0dr5k1oh.cloudfront.net/img/share88/share_open.png">
  <meta property="twitter:url" content="index.php">
  <meta property="twitter:domain" content="awpslotmaster.com">

  <!-- Title -->
  <title>GAME MASTER</title>

  <!-- Icon -->
  <!--[if IE]><link rel="icon" href="./fortune-ox-web.png"/><![endif]-->
  <link rel="icon" type="image/svg+xml" href="img/icons/favicon.svg">
  <link rel="icon" type="image/png" sizes="32x32" href="img/icons/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="img/icons/favicon-16x16.png">
  <link rel="manifest" href="manifest.json">

  <!-- PWA -->
  <meta name="theme-color" content="#4DBA87">
  <meta name="apple-mobile-web-app-capable" content="no">
  <meta name="apple-mobile-web-app-status-bar-style" content="default">
  <meta name="apple-mobile-web-app-title" content="GAME MASTER">
  <link rel="apple-touch-icon" href="img/icons/apple-touch-icon-152x152.png">
  <link rel="mask-icon" href="img/icons/safari-pinned-tab.svg" color="#4DBA87">
  <meta name="msapplication-TileImage" content="img/icons/msapplication-icon-144x144.png">
  <meta name="msapplication-TileColor" content="#000000">

  <!-- Scripts -->
  <script src="/js/config.js"></script>
  <script src="jquery.min.js"></script>
  <script defer="defer" src="js/chunk-vendors.acd6aeac.js"></script>
  <script defer="defer" src="js/app.191782e2.js"></script>

  <!-- Styles -->
  <link href="css/chunk-vendors.4c9084d4.css" rel="stylesheet">
  <link href="css/app.ae441871.css" rel="stylesheet">
</head>

<body style="margin:0">
  <noscript>
    <strong>We're sorry but GAME MASTER doesn't work properly without JavaScript enabled. Please enable it to continue.</strong>
  </noscript>
  <div id="app"></div>

  <!-- Helper -->
  <script>
    function getQueryString(name) {
      let href = window.location.href;
      let search = href.substr(href.indexOf("?"));
      if (!search) {
        search = window.location.search;
      }
      let reg = new RegExp("(^|&)" + name + "=([^&]*)(&|$)", "i");
      let rs = search.substr(1);
      let r = rs.match(reg);
      if (r != null) return unescape(r[2]);
      return null;
    }
  </script>

  <!-- FB Event Init -->
  <script>
    function initFbevents(appId) {
      !(function (f, b, e, v, n, t, s) {
        if (f.fbq) return;
        n = f.fbq = function () {
          n.callMethod ? n.callMethod.apply(n, arguments) : n.queue.push(arguments);
        };
        if (!f._fbq) f._fbq = n;
        n.push = n;
        n.loaded = !0;
        n.version = "2.0";
        n.queue = [];
        t = b.createElement(e);
        t.async = !0;
        t.src = v;
        s = b.getElementsByTagName(e)[0];
        s.parentNode.insertBefore(t, s);
      })(window, document, "script", "../connect.facebook.net/en_US/fbevents.js");

      fbq("init", appId);
      fbq("track", "PageView");
    }

    let userInfo = JSON.parse(localStorage.getItem("USER_INFO"));
    let token = userInfo ? userInfo.token : null;
    let getAppid = JSON.parse(localStorage.getItem("appid"));

    if (getAppid && getAppid != "null") {
      initFbevents(getAppid);
    } else {
      window.wodowInitFbEvent = function () {
        $.ajax({
          url: window.CONFIG.FRONTEND_URL + "/v1/bus/getFbEventId.php",

          type: "post",
          dataType: "json",
          beforeSend: function (xhr) {
            xhr.setRequestHeader("access-token", token);
          },
          headers: { "Content-Type": "application/json;charset=utf8" },
          data: JSON.stringify({ href: window.location.href }),
          success: function (result) {
            localStorage.setItem("eventType", result.data.eventType);
            if (!result.success) {
              localStorage.setItem("OKSId", false);
              return;
            }
            if (result.data.eventType == 1) {
              initFbevents(result.data.eventInitId);
            } else if (result.data.eventType == 2 && result.data.eventInitId != "") {
              kwaiq.ccKwaiqId = result.data.eventInitId;
              if (kwaiq.ccKwaiqId) {
                kwaiq.load(kwaiq.ccKwaiqId);
                kwaiq.page();
                kwaiq.instance(kwaiq.ccKwaiqId).track("contentView");
              }
            }
          },
          error: function () {
            return;
          },
        });
      };
      $(function () {
        window.wodowInitFbEvent();
      });
    }
  </script>

  <!-- LOBBY_UTILS -->
  <script defer="defer">
    (function () {
      window.LOBBY_UTILS = {
        redirect() {
          var userAgent = window.navigator.userAgent.toLowerCase();
          if (userAgent.indexOf("micromessenger") !== -1) {
            var payload = window.btoa(JSON.stringify({
              origialUrl: encodeURIComponent(window.location.href),
            }));
            var wechatGuidePage = `/pages/wechat?payload=${payload}&t=${+new Date()}`;
            window.location.href = wechatGuidePage;
          }
        },
        get(url, success, fail) {
          var xhr = new XMLHttpRequest();
          xhr.open("GET.html", url);
          xhr.send();
          xhr.onreadystatechange = function () {
            if (xhr.readyState === 4) {
              if (xhr.status === 200) {
                success && success(xhr.response);
              } else {
                fail && fail();
              }
            }
          };
        },
        retry(globalVar) {
          if (window[globalVar] || /\/cdn\/recovery(\?(.*)?)?$/.test(window.location.href)) return;
          window.location.href = "/cdn/recovery" + window.location.search;
        },
        loadDatadome() {
          try {
            var commonKey = "C01051E5D668890A2691F6CDEA4C0B";
            var datadomeKeyConfig = { "026": commonKey, 419: commonKey, 135: commonKey };
            var siteCode = window.LOBBY_SITE_CONFIG.siteCode;
            if (Object.keys(datadomeKeyConfig).includes(siteCode)) {
              !(function (a, b, c, d, e, f) {
                a.ddjskey = e;
                a.ddoptions = f || null;
                var m = b.createElement(c),
                    n = b.getElementsByTagName(c)[0];
                m.async = 1;
                m.src = d;
                n.parentNode.insertBefore(m, n);
              })(window, document, "script", "../js.datadome.co/tags.js", datadomeKeyConfig[siteCode], { ajaxListenerPath: true });
            }
          } catch (error) {}
        },
        loadSW() {
          if ("serviceWorker" in navigator) {
            navigator.serviceWorker.getRegistrations().then(function (regs) {
              for (var key in regs) {
                regs[key].unregister();
              }
            });
          }
        },
      };
      LOBBY_UTILS.redirect();
      window.addEventListener("load", function () {
        LOBBY_UTILS.loadSW();
        LOBBY_UTILS.loadDatadome();
      });
    })();
  </script>

  <!-- Device Tracking -->
  <script>
    let baseUrl = window.CONFIG.FRONTEND_URL + "/v1/bus/gameAccessStatics.php";

    function randomString(e) {
      e = e || 32;
      var t = "ABCDEFGHJKMNPQRSTWXYZabcdefhijkmnprstwxyz0123456789";
      let a = t.length;
      let n = "";
      for (let i = 0; i < e; i++) {
        n += t.charAt(Math.floor(Math.random() * a));
      }
      return n;
    }

    let deviceId = localStorage.getItem("uniSmsDeviceId");
    if (!deviceId) {
      deviceId = randomString(20);
      let data = { href: window.location.href, deviceId: deviceId };

      $.ajax({
        url: baseUrl,
        type: "post",
        dataType: "json",
        headers: { "Content-Type": "application/json;charset=utf8" },
        data: JSON.stringify(data),
        success: function () {
          localStorage.setItem("uniSmsDeviceId", deviceId);
        },
        error: function () {
          console.log("server error");
        },
      });
    }
  </script>
</body>
</html>