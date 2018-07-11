<!DOCTYPE html>
<html lang="en">
<head>
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
  <link href="css/aquaingenium_Vo2.css" rel="stylesheet">
  <link href="css/animate.css" rel="stylesheet">
  <link href="css/queries.css" rel="stylesheet">
  <link href="css/bootstrap.css" rel="stylesheet">
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/bootstrap-responsive.min.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">
  <link href="css/bootstrap-lightbox.min.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="css/tabs.css" />
  <!-- Custom Fonts -->
  <link href="css/font-awesome.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300|Open+Sans:400,600,600i,800" rel="stylesheet">
  <!-- Global Site Tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-105544197-1"></script>
    <script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments)};
		gtag('js', new Date());

		gtag('config', 'UA-105544197-1');
	</script>
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
<body>
<!-- ==================================================
Navigation
================================================== -->
<?php include '_add/navigation.php'; ?>

<!-- ==================================================
Style typo - Combinaison
================================================== -->
<article id="margin5">
    <div class="container margin5">
      <div class="span2 text-right margin5">
        <br /><br /><br /><br /><br /><br /><br /><br />
        <h1>H1 :</h1>
      </div> <!-- /.col-xs-6 -->
      <div class="offset-1 span6 margin5">
        <br /><br /><br /><br /><br /><br /><br /><br />
        <h1 class="display-3">Aqua Ingenium</h1>
        <h6 class="">display-3</h6>
      </div> <!-- /.col-xs-6 -->
    </div><!-- /.container -->
    <hr></hr>
    <br />
    <div class="container b-bleu blanc margin5">
      <div class="span2 text-right margin5">
        <h1>H1 :</h1>
      </div> <!-- /.col-xs-6 -->
      <div class="offset-1 span6 margin5">
        <h1 class="titre">Installations Septiques</h1>
        <h6 class="">titre</h6>
        <p class="exergue">Nous sommes des sp&eacute;cialistes du Règlement sur l’&eacute;vacuation et le traitement des eaux us&eacute;es des r&eacute;sidences isol&eacute;es <strong>(Q2-R22).</strong></p>
        <h6 class="">exergue + Strong</h6>
      </div> <!-- /.col-xs-6 -->
    </div><!-- /.container -->
    <hr></hr>

</artcile>
<!-- ==================================================
Style typo -
================================================== -->
<article id="services">
  <div class="bblancgris tgrey">
    <div class="container oswald space-top">
      <div class="span6 text-right">
        <h1 class="text-uppercase tfatweight surtitre">H1</h1>
        <h6 class="">-</h6>
        <br />
        <h1 class="text-uppercase">H1</h1>
        <h6 class="">-</h6>
        <hr></hr>
        <h2 class="text-uppercase tfatweight">h2</h2>
        <h6 class="">-</h6>
        <br />
        <h2 class="text-uppercase">h2</h2>
        <h6 class="">-</h6>
        <hr></hr>
        <h3 class="text-uppercase tfatweight">h3</h3>
        <h6 class="">-</h6>
        <br />
        <h3 class="text-uppercase">h3</h3>
        <h6 class="">-</h6>
        <hr></hr>
        <h4 class="text-uppercase tfatweight">h4</h4>
        <h6 class="">-</h6>
        <br />
        <h4 class="text-uppercase">h4</h4>
        <h6 class="">-</h6>
        <hr></hr>
        <h5 class="text-uppercase tfatweight">h5</h5>
        <h6 class="">-</h6>
        <br />
        <h5 class="text-uppercase">h5</h5>
        <h6 class="">-</h6>
        <hr></hr>
      </div> <!-- /.col-xs-6 -->
      <div class="col-xs-offset-1 col-xs-4">
        <h1 class="text-uppercase tfatweight surtitre">Optrick Media</h1>
        <h6 class="">H1 - SURTITRE - FATWEIGHT - TEXT-UPPERCASE</h6>
        <br />
        <h1 class="text-uppercase">Optrick Media</h1>
        <h6 class="">H1 - TEXT-UPPERCASE</h6>
        <hr></hr>
        <h2 class="text-uppercase tfatweight">Optrick Media</h2>
        <h6 class="">H2 - FATWEIGHT - TEXT-UPPERCASE</h6>
        <br />
        <h2 class="text-uppercase">Optrick Media</h2>
        <h6 class="">H2 - TEXT-UPPERCASE</h6>
        <hr></hr>
        <h3 class="text-uppercase tfatweight">Optrick Media</h3>
        <h6 class="">H3 - SURTITRE - FATWEIGHT - TEXT-UPPERCASE</h6>
        <br />
        <h3 class="text-uppercase">Optrick Media</h3>
        <h6 class="">H3 - TEXT-UPPERCASE</h6>
        <hr></hr>
        <h4 class="text-uppercase tfatweight">Optrick Media</h4>
        <h6 class="">H4 - FATWEIGHT - TEXT-UPPERCASE</h6>
        <br />
        <h4 class="text-uppercase">Optrick Media</h4>
        <h6 class="">H4 - TEXT-UPPERCASE</h6>
        <hr></hr>
        <h5 class="text-uppercase tfatweight">Optrick Media</h5>
        <h6 class="">H5 - FATWEIGHT - TEXT-UPPERCASE</h6>
        <br />
        <h5 class="text-uppercase">Optrick Media</h5>
        <h6 class="">H5 - TEXT-UPPERCASE</h6>
        <hr></hr>
      </div> <!-- /.col-xs-6 -->
      <div class="col-xs-offset-1 col-xs-1 text-right">
        <h1>p</h1>
        <h6 class="">-</h6>
        <h1>a</h1>
      </div><!-- /.col-xs-offset-1 col-xs-4 tleft -->
      <div class="col-xs-offset-1 col-xs-3">
        <p>Optrick Media</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse molestie lorem nisl, ac consequat purus condimentum et. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
        <br />
        <a href="3"> Optrick Media</a>
      </div><!-- /.col-xs-offset-1 col-xs-4 tleft -->
    </div><!-- /.container -->
  </div><!-- /.bblancgris -->
</artcile>
<!-- ==================================================
============= ============= ============= =============
================================================== -->
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
    <script>
		svgeezy.init(false, 'png');
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
