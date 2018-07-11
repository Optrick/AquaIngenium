<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
  <!-- Google Tag Manager -->
  <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
  new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
  j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
  'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
  })(window,document,'script','dataLayer','GTM-K9VMSRP');</script>
  <!-- End Google Tag Manager -->
  <title>Aqua Ingenium - Sp&eacute;cialistes en ing&eacute;nierie des eaux à Qu&eacute;bec.</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta property="og:title" content="Aqua Ingenium" />
  <meta name="description" content="Aqua Ingenium - Sp&eacute;cialistes en ing&eacute;nierie des eaux à Qu&eacute;bec.">
  <meta name="author" content="Aqua Ingenium">
  <!-- CSS -->
  <link rel="alternate" href="http://aquaingenium.com" hreflang="fr-ca"/>
  <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
  <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->
  <!-- CSS -->
  <link href="css/aquaingenium_Vo2.css" rel="stylesheet" type="text/css">
  <link href="css/animate.css" rel="stylesheet" type="text/css">
  <link href="css/queries.css" rel="stylesheet" type="text/css">
  <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
  <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <link href="css/bootstrap-responsive.min.css" rel="stylesheet"> type="text/css"
  <link href="css/style.css" rel="stylesheet" type="text/css">
  <link href="css/bootstrap-lightbox.min.css" rel="stylesheet" type="text/css">
  <link href="css/tabs.css" rel="stylesheet" type="text/css"/>
  <!-- Custom Fonts -->
  <link href="css/font-awesome.min.css" rel="stylesheet"  type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300|Open+Sans:400,600,600i,800" rel="stylesheet">
  <!-- ResizingNav -->
  <script src="js/classie.js"></script>
  <script>
    function init() {
        window.addEventListener('scroll', function(e){
            var distanceY = window.pageYOffset || document.documentElement.scrollTop,
                shrinkOn = 75,
                header = document.querySelector("header"),
        figure = document.querySelector("figure"),
        accueil = document.querySelector("#Accueil"),
        nav = document.querySelector(".navbar.navbar-expand-lg.navbar-light"),
        navbar = document.querySelector(".navbar-expand-lg .navbar-collapse");
            if (distanceY > shrinkOn) {
                classie.add(header,"smaller"),
        classie.add(figure,"smaller"),
        classie.add(accueil,"smaller"),
        classie.add(nav,"smaller"),
        classie.add(navbar,"smaller");
            } else {
                if (classie.has(header,"smaller")) {
                    classie.remove(header,"smaller");
                }
            }
        });
    }
    window.onload = init();
  </script>
  <!-- Custom FAV -->
  <link rel="image_src" href="img/favicon-96x96.png">
  <link rel="icon" type="image/png" sizes="32x32" href="img/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="96x96" href="img/favicon-96x96.png">
  <link rel="icon" type="image/png" sizes="16x16" href="img/favicon-16x16.png">
</head>
<body data-spy="scroll" data-target=".navbar" data-offset='64' onLoad="$.stellar();">
  <!-- Google Tag Manager (noscript) -->
  <noscript>
    <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-K9VMSRP"
  height="0" width="0" style="display:none;visibility:hidden">
    </iframe>
  </noscript><!-- End Google Tag Manager (noscript) -->
<!-- ==================================================
Navigation
================================================== -->
<!-- include '_add/navigation.php'; ?>-->
<header class="">
  <div id="navigation" class="bg-light fixed-top">
    <nav class="navbar navbar-expand-lg navbar-light">
      <a class="" href="http://aquaingenium.com/" role="button">
        <figure class="logoAquaIngenium">
          <img src="../SVG/L-AI-mini.svg" id="L-AI-mini" alt="Logo Aqua Ingenium - Ingénieurs de eaux ">
        </figure>
      </a>
      <div class="m-navbar-toggler">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      </div>
      <div class="collapse navbar-collapse nav-top" id="navbarSupportedContent" >
        <ul class="navbar-nav nav ml-md-auto"><!--  class nav TRÈS IMPORTANTE POUR NICESCROLL  -->
          <li class="nav-item">
            <a class="nav-link btn-aqua" href="index.php" role="button">Accueil <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link btn-aqua" href="index.php#services-top" role="button">Services</a>
          </li>
          <li class="nav-item">
            <a class="nav-link btn-aqua" href="#APropos-top" role="button">À propos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link btn-aqua" href="#Equipe-top" role="button">&eacute;quipe</a>
          </li>
          <li class="nav-item">
            <a class="nav-link btn-aqua" href="#Joindre-top" role="button">Nous  joindre</a>
          </li>
        </ul>
      </div> <!-- /collapse navbar-collapse -->
    </nav>
  </div> <!-- /navigation -->
</header>
<!-- ==================================================
A Propos - Top section
================================================== -->
<?php include '_add/a-propos.php'; ?>

<!-- ==================================================
Notre Équipe
================================================== -->
<?php include '_add/equipe.php'; ?>

<!-- ==================================================
start footer
================================================== -->
<?php include '_add/footer.php'; ?>

<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
<!-- Function TABS.  -->
<script type="text/javascript" src="js/modernizr.custom.04022.js"></script>
<!-- Tweak pour les SVG -> PNG.  -->
<script type="text/javascript" src="http://aquaingenium.com/js/SVGeeze.min.js"></script>
<script>svgeezy.init(false, 'png');</script>

<!-- myScrypt - API Google maps -->
<script src="js/myscript-map.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCIRAL2hNFanesB5Lo1Dw9yQ9NRIYtbVaA&callback=initMap"
    async defer>
</script>

<!--latest jQuery-->
<script type="text/javascript" src="http://code.jquery.com/jquery-latest.js"></script>
<!--main bootstrap js-->
<script type="text/javascript" src="js/bootstrap.min.js" type="text/javascript"></script>
<!--custom js-->
<script type="text/javascript" src="js/custom.js" type="text/javascript"></script>
<!--preloader-->
<script type="text/javascript">
  $(window).load(function() {
    $("#status").fadeOut();
    $("#preloader").delay(150).fadeOut("slow");
  })
</script>
<!--retina support-->
<script src="js/retina.js" type="text/javascript"></script>
<!--smooth scroll on page-->
<script src="js/jquery.easing-1.3.pack.js" type="text/javascript"></script>
<!--custom scrollbar-->
<script src="js/jquery.nicescroll.min.js" type="text/javascript"></script>
<!--parallax-->
<script src="js/jquery.stellar.js" type="text/javascript"></script>
<!--contact-->
<script src="js/jquery.form.js"></script>
<!--gallery lightbox-->
<script src="js/bootstrap-lightbox.min.js"></script>
<!--google analytics-->
<script type="text/javascript">
  var _gaq = _gaq || [];
  _gaq.push(['create', 'UA-105544197-1', 'auto']);
  _gaq.push(['send', 'pageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();
</script>
<script type="application/ld+json">
{
	"@context": "http://schema.org",
	"@type": "Organization",
	"url": "http://www.aquaingenium.com",
	"logo": "http://www.aquaingenium.com/img/l-aquaingenium.png"
  },{
	"@type": "ContactPoint",
	"telephone": "+1-505-998-3793",
	"contactType": "customer service "
  },{
	"@type": "ContactPoint",
	"telephone": "+1-418-997-8689",
	"contactType": "customer service",
	"contactOption": "Qu&eacute;bec",
	"areaServed": "CA",
	"availableLanguage": ["English","French"]
  },{
	"@type": "ContactPoint",
	"telephone": "+1-418-482-1620",
	"contactType": "customer service",
	"contactOption": "Saguenay Lac St-Jean",
	"areaServed": "CA",
	"availableLanguage": ["English","French"]
  },{
	"@type": "ContactPoint",
	"telephone": "+1-418-932-7082",
	"contactType": "customer service",
	"contactOption": ["Bas St-Laurent","Gasp&eacute;sie"],
	"areaServed": "CA",
	"availableLanguage": ["English","French"]
  },{
  "@context": "http://schema.org",
  "@type": "LocalBusiness",
  "address": {
	"@type": "PostalAddress",
	"addressRegion": "QC",
  },
  "description": "Sp&eacute;cialistes en ing&eacute;nierie des eaux",
  "name": "Aqua Ingenium",
</script>
</body>
</html>
