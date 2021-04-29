export function HomeCss() {
  return (
    <>
      {/*Google fonts*/}
      <link href="https://fonts.googleapis.com/css?family=Aldrich" rel="stylesheet"/>
      <link href="https://fonts.googleapis.com/css?family=Noto+Sans:400,700,400italic" rel="stylesheet"
            type="text/css"/>
      <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css"/>

      {/*Stylesheets*/}
      <link rel="stylesheet" href="/css/bootstrap.min.css"/>
      <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.9.0/css/all.css"
            integrity="sha384-vlOMx0hKjUCl4WzuhIhSNZSm2yQCaf0mOU1hEDK/iztH3gU4v5NMmJln9273A6Jz"
            crossOrigin="anonymous"/>
      <link rel="stylesheet" href="/css/slick.css"/>
      <link rel="stylesheet" href="/css/slick-theme.css"/>
      <link rel="stylesheet" href="/css/jquery.fancybox.css"/>
      <link rel="stylesheet" href="/css/animate.min.css"/>
      <link rel="stylesheet" href="/css/conduction.css"/>
      <link rel="stylesheet" href="/css/app.css"/>

      {/*Custom Colors*/}
      <link rel="stylesheet" href="/css/colors/conduction.css"/>
      {/*[if lt IE 8]*/}
      <link rel="stylesheet" href="css/ie-older.css"/>
      {/*[endif]*/}
      <noscript>
        <link rel="stylesheet" href="css/no-js.css"/>
      </noscript>

      <link style={{background: "transparent"}} rel="apple-touch-icon" sizes="180x180"
            href="/favicon/apple-touch-icon.png"/>
      <link style={{background: "transparent"}} rel="icon" type="image/png" sizes="32x32"
            href="/favicon/favicon-32x32.png"/>
      <link style={{background: "transparent"}} rel="icon" type="image/png" sizes="16x16"
            href="/favicon/favicon-16x16.png"/>
    </>
  );
}

export function HomeJs() {
  return (
    <>
      <script type="text/javascript" src="js/jquery-1.11.3.min.js"></script>
      <script type="text/javascript" src="js/jquery-migrate-1.2.1.min.js"></script>
      <script type="text/javascript" src="js/bootstrap.min.js"></script>
      <script type="text/javascript" src="js/jquery.easing.min.js"></script>
      <script type="text/javascript" src="js/response.min.js"></script>
      <script type="text/javascript" src="js/jquery.placeholder.min.js"></script>
      <script type="text/javascript" src="js/jquery.fitvids.js"></script>
      <script type="text/javascript" src="js/jquery.imgpreload.min.js"></script>
      <script type="text/javascript" src="js/waypoints.min.js"></script>
      <script type="text/javascript" src="js/slick.min.js"></script>
      <script type="text/javascript" src="js/jquery.mousewheel-3.0.6.pack.js"></script>
      <script type="text/javascript" src="js/jquery.fancybox.pack.js"></script>
      <script type="text/javascript" src="js/parallax.min.js"></script>
      <script type="text/javascript" src="js/jquery.counterup.min.js"></script>
      <script type="text/javascript" src="js/isotope.pkgd.min.js"></script>
      <script type="text/javascript" src="js/script.js"></script>

      <script>
        {/*/***/}
        {/** Functie die een klik op een uitgaande link vastlegt in Google Analytics.*/}
        {/** Deze functie vereist een geldige URL-tekenreeks als argument en gebruikt deze*/}
        {/** als gebeurtenislabel. Wanneer de methode 'transport' wordt ingesteld op 'beacon', wordt de hit verzonden*/}
        {/** bij gebruik van 'navigator.sendBeacon' in een browser die dat ondersteunt.*/}
        {/*/***/}
        {/*  var captureOutboundLink = function (url, action) {*/}
        {/*  ga('send', 'event', 'outbound', action, url, {*/}
        {/*  'transport': 'beacon',*/}
        {/*  'hitCallback': function () {*/}
        {/*  document.location = url;*/}
        {/*}*/}
        {/*})*/}
        {/*}*/}

      </script>

      {/*Start of HubSpot Embed Code */}
      <script type="text/javascript" id="hs-script-loader" async defer src="//js.hs-scripts.com/6108438.js"></script>
      {/*End of HubSpot Embed Code*/}

    </>
  );
}
