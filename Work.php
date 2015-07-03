<!DOCTYPE html>
<?php


$lang = "fr";
if (isset($_GET["lang"]) && $_GET["lang"] == "en")
{
	$lang = "en";
}



 $id = 1; 
 
 	 // FILTER ARRAY
											

											$array = array(
									 1 => "interior",
									 2 => "interior",
									 3 => "interior",
									 4 => "interior",
									 5 => "interior",
									 6 => "interior",
									 7 => "interior",
									 8 => "product",
									 9 => "product",
									 10 => "product",
									 11 => "product",
									 12 => "perso",
									 13 => "perso",
									 14 => "perso",
									 15 => "perso",
									 16 => "perso",									 
									 );
									 
									 
									 
									 
 $maxId = 16;
if (isset($_GET["id"]))
{
	$id = $_GET["id"]; 
}
 
?>
<html class=" js flexbox flexboxlegacy canvas canvastext webgl no-touch geolocation postmessage websqldatabase indexeddb hashchange history draganddrop websockets rgba hsla multiplebgs backgroundsize borderimage borderradius boxshadow textshadow opacity cssanimations csscolumns cssgradients cssreflections csstransforms csstransforms3d csstransitions fontface generatedcontent video audio localstorage sessionstorage webworkers applicationcache svg inlinesvg smil svgclippaths" lang="en" style="padding-top: 60px;"><!--<![endif]--><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta charset="utf-8">
	<title>Coralie Foucault - <?php if ($lang == "en")
					{
						echo "Projects";					
					}
					else
					{
						echo "Projets";
					}
					?> <?php echo $id; ?> </title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

			<link rel="alternate" type="application/rss+xml" title="Nonus Feed" href="http://nonus.themewoodmen.com/feed/">
	
	<link rel="stylesheet" href="http://nonus.themewoodmen.com/wp-content/themes/nonus/theme/assets/css/jplayer.css?ver=3.6">
<link rel="stylesheet" href="http://nonus.themewoodmen.com/wp-content/themes/nonus/theme/assets/css/prettyPhoto.css?ver=3.6">
<link rel="stylesheet" href="http://nonus.themewoodmen.com/wp-content/plugins/LayerSlider/css/layerslider.css?ver=4.6.3">
<link rel="stylesheet" href="http://nonus.themewoodmen.com/wp-content/plugins/contact-form-7/includes/css/styles.css?ver=3.5.3">
<link rel="stylesheet" href="http://nonus.themewoodmen.com/wp-content/plugins/revslider/rs-plugin/css/settings.css?ver=3.6">
<link rel="stylesheet" href="http://nonus.themewoodmen.com/wp-content/plugins/revslider/rs-plugin/css/captions.css?ver=3.6">
<link rel="stylesheet" href="http://nonus.themewoodmen.com/wp-content/themes/nonus/theme/assets/css/style.css">
<script type="text/javascript" src="./Work/jquery.js"></script>
<script type="text/javascript" src="./Work/jquery-migrate.min.js"></script>
<script type="text/javascript" src="./Work/layerslider.kreaturamedia.jquery.js"></script>
<script type="text/javascript" src="./Work/jquery-easing-1.3.js"></script>
<script type="text/javascript" src="./Work/jquerytransit.js"></script>
<script type="text/javascript" src="./Work/layerslider.transitions.js"></script>
<script type="text/javascript" src="./Work/jquery.themepunch.revolution.min.js"></script>
<script type="text/javascript" src="./Work/jquery.fitvids.js"></script>
<script type="text/javascript" src="./Work/jquery.icheck.min.js"></script>
<script type="text/javascript" src="./Work/selectize.min.js"></script>
<script type="text/javascript" src="./Work/comment-reply.min.js"></script><style type="text/css"></style>
<link rel="shortcut icon" href="favicon.ico">
<style type="text/css" media="all">
	
	.container {
width: 930px;
}
.post-media.flexslider .flex-direction-nav .flex-prev, .post-media.flexslider .flex-direction-nav .flex-next 
{
background: transparent url('images/slider-controls.png') no-repeat 11px 15px;
background-color: rgba(255, 255, 255, 0);
}	

.post-media.flexslider .flex-direction-nav .flex-prev:hover {
background: transparent url('images/slider-controls-hover.png') no-repeat 11px 15px;
left: -25px;
}
.post-media.flexslider:hover .flex-direction-nav .flex-prev
{
left: -25px;
}


 .post-media.flexslider .flex-direction-nav .flex-next:hover {
background: transparent url('images/slider-controls-hover.png') no-repeat 11px 15px;
background-position: -106px 15px;
right: -25px;
}
.post-media.flexslider:hover .flex-direction-nav .flex-next 
{
right: -25px;
}
.post-media.flexslider .flex-direction-nav .flex-next {
background-position: -106px 15px;
right: -25px;
}	

.post-media.flexslider .flex-direction-nav .flex-prev {
left: -25px;
}	
	

	.flex-next {
	background-color: #FF3030;
	
	}

	.flex-prev {
	background-color: #FF3030;
	
	}
	
.post-media.flexslider .flex-control-paging {
bottom: -20px;
z-index: 2;
}
								
#MainNav ul li a {
font-family: Gulim;
text-transform: none;
}

#MainNav ul li a:hover {
color: #25FDE9;
}

.header_img{
background: url('./images/logo-small.png') no-repeat;
}
.header_img:hover{
background-image: url('./images/logo-small-turquoise.png');

}

								
	.work-nav a {
	background-color: #25FDE9;
	}
	
	.flexslider .flex-control-paging li a.flex-active {
background: #25FDE9;
}

a {
color: #25FDE9;
}
	
						
		.pull-left {
  float: left !important;
}
.pull-right {
  float: right !important;
}
.wpcf7 textarea {
  margin: 0;
  border: 2px solid #bfbfbf;
}
.wpcf7 textarea:focus {
  padding-top: 8px;
  padding-left: 11px !important;
}
.align-to-image-top {
  margin-top: -4px !important;
}
.section-emphasis:first-child {
  margin-top: -42px;
  padding-top: 42px;
}

section.section-emphasis h6,
section.section-emphasis h5,
section.section-emphasis h4,
section.section-emphasis h3,
section.section-emphasis h2,
section.section-emphasis h1 {
  color: #cfdae7;
}

.dropdown-menu li > a:hover,
.dropdown-menu li > a:focus,
.dropdown-submenu:hover > a {
  background: #2d91ff;
}</style>	<link rel="canonical" href="./Work/Work 12   Nonus.htm">
<meta id="syntaxhighlighteranchor" name="syntaxhighlighter-version" content="3.1.5">

	<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
 <!--[if lt IE 9]>
 <script src="http://nonus.themewoodmen.com/wp-content/themes/nonus/theme/assets/js/html5shiv.js"></script>
 <![endif]-->
<style id="css-ddslick" type="text/css">#themeSwitcher .dd-select{ -moz-border-radius: 4px; -webkit-border-radius: 4px; border-radius: 4px; border:0; position:relative; cursor:pointer; white-space:nowrap;}#themeSwitcher .dd-desc { color:#bfbfbf; display:block; overflow: hidden; font-weight:normal; line-height: 1.4em; }#themeSwitcher .dd-selected{ overflow:hidden; display:block; padding:10px; font-weight:bold; font-size:14px; font-family:Arial, sans-serif; text-transform:uppercase; color: #fff;}#themeSwitcher .dd-pointer{ width:0; height:0; position:absolute; right:4px; top:50%; margin-top:-7px;}#themeSwitcher .dd-pointer-down{ background:transparent url(http://frame.themeforest.createit.pl/assets/themewoodmen/images/pointer.png) no-repeat top center; width:20px; height:20px;}#themeSwitcher .dd-pointer-up{}#themeSwitcher .dd-options{top:33px; border-bottom:2px solid #cccccc;  list-style:none;  display:none; position:absolute; z-index:2000; margin:0; padding:0;background:#4d4d4d; overflow:auto; -webkit-border-bottom-right-radius: 3px; -webkit-border-bottom-left-radius: 3px; -moz-border-radius-bottomright: 3px; -moz-border-radius-bottomleft: 3px; border-bottom-right-radius: 3px; border-bottom-left-radius: 3px; border-bottom: none;}#themeSwitcher .dd-option{ padding:10px; display:block; border-bottom:solid 1px #454545; overflow:hidden; text-decoration:none; font-weight:bold; font-size:14px; font-family:Arial, sans-serif; text-transform:uppercase; color:#bfbfbf; cursor:pointer;-webkit-transition: all 0.25s ease-in-out; -moz-transition: all 0.25s ease-in-out;-o-transition: all 0.25s ease-in-out;-ms-transition: all 0.25s ease-in-out; }#themeSwitcher .dd-options > li:last-child > .dd-option{ border-bottom:none;}#themeSwitcher .dd-option:hover{ background:#454545; color:#fff;}#themeSwitcher .dd-selected-description-truncated { text-overflow: ellipsis; white-space:nowrap; }#themeSwitcher .dd-option-selected { background:#f4d4d4d; }#themeSwitcher .dd-selected-text {width:185px; display:block; overflow:hidden; margin:0; line-height:16px; font-weight:bold; font-size:14px; font-family:Arial, sans-serif;}#themeSwitcher .dd-option-text {margin:0; line-height:16px; font-weight:bold; font-family:Arial, sans-serif;}#themeSwitcher .dd-option-image, .dd-selected-image { vertical-align:middle; float:left; margin-right:5px; max-width:64px;}#themeSwitcher .dd-image-right { float:right; margin-right:15px; margin-left:5px;}#themeSwitcher .dd-container{ position:relative;}#themeSwitcher .dd-selected-text { font-weight:bold}​</style></head>
		<body class="single single-portfolio postid-1140 menuShadow patnone mp6 top-navbar work-12 hasCtBar" style="">

	<div id="boxedWrapper">
	
<?php include('header.php'); ?>
							
							<div class="container breadcrumbs">
													    <div class="row-fluid">
													        <div class="span12">
													            <div class="breadcrumbs-inner" style="margin-top: 10px">
													                <a style="font-family: Gulim;" href="works.php"><?php if ($lang == "en")
					{
						echo "Projects";					
					}
					else
					{
						echo "Projets";
					}
					?></a>&nbsp;&nbsp;/&nbsp;&nbsp;<span style="font-family: Gulim;"><?php if ($lang == "en")
					{
						echo "Project";					
					}
					else
					{
						echo "Projet";
					}
					?> <?php echo $id; ?>
					
					  <nav class="work-nav" style="float:right; margin-top:-5px ;">
			    				    <a href="Work.php?id=<?php
									if ($id == 1)
										echo $maxId;
									else
										echo $id - 1;					
									?><?php if ($lang == "en") { echo "&lang=en";} ?>" class="prev">Previous</a>
	            			    	                				    <a href="works.php<?php if ($lang == "en") { echo "?lang=en";} ?>" class="all">All</a>
	            			    				    <a href="Work.php?id=<?php
									if ($id == $maxId)
										echo 1;
									else						
										echo $id + 1;	
									?><?php if ($lang == "en") { echo "&lang=en";} ?>" class="next">Next</a>
			    		    </nav>
							</span>
													            </div>
													        </div>
													    </div>
													</div>
<section class="container">
	
	<div class="row-fluid">
			        <div class="span9">
		     
															<div  id="flexslider242" class="post-media flexslider " style="height: 466px;">
						            <div class="sliderBox">
						                <div  class="navFlexFull">

						                <ol class="flex-control-nav flex-control-paging">


   <?php 
								$string = file_get_contents("Items/".$id."/nb.txt", FILE_USE_INCLUDE_PATH);								
								$i = 1;	

							
								while($i <= $string)
									{								
								?>

									 <!-- 	<li>
											<a class=""><?php echo $i;?></a>
											</li>
													-->										
											<?php 
$i++;
									}
									?>
										</ol>
											<ul  class="flex-direction-nav">
										
										</div>
						                <!-- / navFlexFull -->
						            </div>
						        <ul class="slides">
								  <?php 
					 								$i = 1;			
								while($i <= $string)
									{
									?>
									
									<li style="width: 100%; float: left; margin-right: -100%; position: relative; display: none;" class="">
							
										<img src="./Items/<?php echo $id."/".$i; ?>.jpg" alt=""> 
				            
									</li>
									
									<?php 
$i++;
									}
									?>
									
<!--									<li style="width: 100%; float: left; margin-right: -100%; position: relative; display: list-item;" class="flex-active-slide">
							
										<img src="./Work/work-large-8.jpg" alt="">
				            
									</li> 
									-->
								</ul>
				                  </div>
				                  <!-- / flexFull -->		    </div>
	    		<div class="span3">
								  
							    <p style="color: #929292; text-align:right">       
<!-- ############## Project Text -->
					<?php 
					
					if ($lang == 'en')
					$text = file_get_contents("Items/".$id."/text.php", FILE_USE_INCLUDE_PATH);																								
					else					
					$text = file_get_contents("Items/".$id."/text-fr.php", FILE_USE_INCLUDE_PATH);																								
								
								echo "".$text;
								
								?>
									</p>
									<div class="spacer" style="height: 30px;"></div>

								<a><h4 style="font-family: Gulim; text-transform: none;; color: #707070; text-align:right"><a href="works.php<?php

								if ($lang == "en") { echo "?lang=en";}

								echo "#filter=.".$array[$id];
								?>"><i class="icon-tag"></i>
								<?php if ($lang == "en")
						{
							if ($array[$id] == "interior")
								echo "Interior Design";
								else if ($array[$id] == "product")
								echo "Product Design";
								else if ($array[$id] == "perso")
								echo "Personnal Work";
						
						}
						else
						{
							if ($array[$id] == "interior")
								echo "Architecture Intérieure";
								else if ($array[$id] == "product")
								echo "Design d'Objet";
								else if ($array[$id] == "perso")
								echo "Travaux Personnels";							
						}
					?>
								
								</a></h4>

<!-- ############## END Project Text -->

			</div>
	</div>

    <div class="spacer" style="height: 30px"></div>
<!--
			<h4 class="text-center" style="font-family: Gulim; text-transform: none; color: #929292">
			
			<?php if ($lang == "en")
					{
						echo "Others Projects";					
					}
					else
					{
						echo "Autres Projets";
					}
					?></h4>--><!--<div class="spacer" style="height: 20px;"></div><div class="row-fluid">
							        <div class="span12">
							            <div id="IsotopeContainer" class="isotope col4" style="position: relative; overflow: hidden; height: 181px;">
										<?php

										do 
										{
											$rand1 = rand(1, $maxId);
										} while ($rand1 == $id);
										do 
										{
											$rand2 = rand(1, $maxId);
										} while ($rand2 == $id || $rand2 == $rand1);
										do 
										{
											$rand3 = rand(1, $maxId);
										} while ($rand3 == $id || $rand3 == $rand1 || $rand3 == $rand2);
										do 
										{
											$rand4 = rand(1, $maxId);
										} while ($rand4 == $id || $rand4 == $rand1 || $rand4 == $rand2 || $rand4 == $rand3);
										
										 ?>


							<div class="isotope-item" style="position: absolute; left: 0px; top: 0px; -webkit-transform: translate3d(0px, 0px, 0px);">
			                    <a href="Work.php?id=<?php echo $rand1; ?><?php if ($lang == "en") { echo "&lang=en";} ?>">
			                        <img src="./Items/<?php echo $rand1; ?>/icon.jpg" alt="">			                        
			                    </a>
			                </div>
							<div class="isotope-item" style="position: absolute; left: 0px; top: 0px; -webkit-transform: translate3d(240px, 0px, 0px);">
			                    <a href="Work.php?id=<?php echo $rand2; ?><?php if ($lang == "en") { echo "&lang=en";} ?>">
			                        <img src="./Items/<?php echo $rand2; ?>/icon.jpg" alt="">
			                    </a>
			                </div>
							<div class="isotope-item" style="position: absolute; left: 0px; top: 0px; -webkit-transform: translate3d(480px, 0px, 0px);">
			                    <a href="Work.php?id=<?php echo $rand3; ?><?php if ($lang == "en") { echo "&lang=en";} ?>">
			                        <img src="./Items/<?php echo $rand3; ?>/icon.jpg" alt="">
			                    </a>
			                </div>
							<div class="isotope-item" style="position: absolute; left: 0px; top: 0px; -webkit-transform: translate3d(720px, 0px, 0px);">
			                    <a href="Work.php?id=<?php echo $rand4; ?><?php if ($lang == "en") { echo "&lang=en";} ?>">
			                        <img src="./Items/<?php echo $rand4; ?>/icon.jpg" alt="">
			                    </a>
			                </div>
							            
										</div>
							        </div>
							    </div>	
	

-->


										<script type="text/javascript">
				jQuery(document).ready(function () {
					var $menu = jQuery('#nav-main');
					var $element = $menu.find('a[href*="/works/"]').parent();
					if ($element.length == 1) {
						$menu.find('li').removeClass('active');
						$element.addClass("active");
					}
				});
			</script>
			
</section>


<!--footer-->
	<script type="text/javascript" src="./Work/jquery.form.min.js"></script>
<script type="text/javascript">
/* <![CDATA[ */
var _wpcf7 = {"loaderUrl":"\/wp-content\/themes\/nonus\/theme\/assets\/img\/loading.gif","sending":"Sending ...","cached":"1"};
/* ]]> */
</script>
<script type="text/javascript" src="./Work/scripts.js"></script>
<script type="text/javascript" src="./Work/selectnav.min.js"></script>
<script type="text/javascript" src="./Work/modernizr.custom.js"></script>
<script type="text/javascript" src="./Work/plugins.js"></script>
<script type="text/javascript" src="./Work/main.js"></script>
<script type="text/javascript" src="./Work/jquery.flexslider-min.js"></script>
<script type="text/javascript" src="./Work/jquery.isotope.min.js"></script>
<script type="text/javascript" src="./Work/jquery.ba-bbq.min.js"></script>
<script type="text/javascript" src="./Work/jquery.colorbox-min.js"></script>
<script type="text/javascript">
jQuery(window).load(function () {
				    jQuery("#flexslider242").flexslider({
				        animation: "fade",              //String: Select your animation type, "fade" or "slide"
				        easing: "swing",               //{NEW} String: Determines the easing method used in jQuery transitions. jQuery easing plugin is supported!
				        // easing types :
				        // swing, easeInQuad, easeOutQuad, easeInOutQuad, easeInCubic, easeOutCubic,
				        // easeInOutCubic, easeInQuart, easeOutQuart, easeInOutQuart, easeInQuint,
				        // easeOutQuint, easeInOutQuint, easeInSine, easeOutSine, easeInOutSine,
				        // easeInExpo, easeOutExpo, easeInOutExpo, easeInCirc, easeOutCirc,
				        // easeInOutCirc, easeInElastic, easeOutElastic, easeInOutElastic, easeInBack,
				        // easeOutBack, easeInOutBack, easeInBounce, easeOutBounce, easeInOutBounce
				        direction: "horizontal",        //String: Select the sliding direction, "horizontal" or "vertical"
				        reverse: false,                 //{NEW} Boolean: Reverse the animation direction
				        animationLoop: true,             //Boolean: Should the animation loop? If false, directionNav will received "disable" classes at either end
				        smoothHeight: true,            //{NEW} Boolean: Allow height of the slider to animate smoothly in horizontal mode
				        startAt: 0,                     //Integer: The slide that the slider should start on. Array notation (0 = first slide)
				        slideshow: true,                //Boolean: Animate slider automatically
				        slideshowSpeed: 7000,           //Integer: Set the speed of the slideshow cycling, in milliseconds
					    animationSpeed: 800,           //Integer: Set the speed of animations, in milliseconds
				        initDelay: 0,                   //{NEW} Integer: Set an initialization delay, in milliseconds
				        randomize: false,               //Boolean: Randomize slide order

				        // Primary Controls
				        controlNav: true,               //Boolean: Create navigation for paging control of each clide? Note: Leave true for manualControls usage
				        directionNav: true,             //Boolean: Create navigation for previous/next navigation? (true/false)

				        // Usability features
				        pauseOnAction: true,            //Boolean: Pause the slideshow when interacting with control elements highly recommended
				        pauseOnHover: true,            //Boolean: Pause the slideshow when hovering over slider, then resume when no longer hovering
				        touch: true,                    //{NEW} Boolean: Allow touch swipe navigation of the slider on touch-enabled devices
				        video: true,                   //{NEW} Boolean: If using video in the slider, will prevent CSS3 3D Transforms to avoid graphical glitches
				        useCSS: false,                   //{NEW} Boolean: Slider will use CSS3 transitions if available


				        // Secondary Navigation
				        keyboard: true,                 //Boolean: Allow slider navigating via keyboard left/right keys
				        multipleKeyboard: false,        //{NEW} Boolean: Allow keyboard navigation to affect multiple sliders. Default behavior cuts out keyboard navigation with more than one slider present.
				        mousewheel: false,              //{UPDATED} Boolean: Requires jquery.mousewheel.js (https://github.com/brandonaaron/jquery-mousewheel) - Allows slider navigating via mousewheel
				        controlsContainer: "#flexslider242 .sliderBox .navFlexFull",


				        // Callback API
				        start: function () {
				            jQuery(".flexslider.flexFull").removeClass("loading-slider");

				        }
				    });
				});

				/* adjusting mainslider */
				jQuery(document).ready(function () {
				    var navHeight = jQuery(".navbar-inner").height();
				    jQuery(".flexFull.flexslider .sliderDesc, .flexFull.flexslider .sliderBox").css("margin-top", navHeight);
				    jQuery(".flexFull.flexslider").css("margin-top", -navHeight);
				});</script>
<script type="text/javascript">
/* ISOTOPE */

		    jQuery(window).load(function () {
		        var $container = jQuery("#IsotopeContainer"), // object that will keep track of options
		            isotopeOptions = {}, // defaults, used if not explicitly set in hash
		            defaultOptions = {
		                filter: "*",
		                sortBy: "original-order",
		                sortAscending: true,
		                layoutMode: "masonry"
		            };


		        var setupOptions = jQuery.extend({}, defaultOptions, {
		            itemSelector: ".isotope-item",
		            masonry: {
		                // columnWidth: $container.width() / 4
		            }
		        });

		        // set up Isotope
		        $container.isotope(setupOptions);

		        var $optionSets = jQuery("#IsotopeOptions").find(".isotope-options"), isOptionLinkClicked = false;

		        // switches selected class on buttons
		        function changeSelectedLink($elem) {
		          if (!($elem === undefined)) {
		            // remove selected class on previous item
		            $elem.closest(".isotope-options").find(".selected").removeClass("selected");
		            // set selected class on new item
		            $elem.addClass("selected");
		            }

		        }


		        $optionSets.find("a").click(function () {
		            var $this = jQuery(this);
		            // dont proceed if already selected
		            if ($this.hasClass("selected")) {
		                return;
		            }
		            changeSelectedLink($this);
		            // get href attr, remove leading #
		            var href = $this.attr("href").replace(/^#/, ""), // convert href into object
		                option = jQuery.deparam(href, true);
		            // apply new option to previous
		            jQuery.extend(isotopeOptions, option);
		            // set hash, triggers hashchange on window
		            jQuery.bbq.pushState(isotopeOptions);
		            isOptionLinkClicked = true;
		            return false;
		        });


		        var hashChanged = false;

		        jQuery(window).bind("hashchange", function (event) {
		            // get options object from hash
		            var hashOptions = window.location.hash ? jQuery.deparam.fragment(window.location.hash, true) : {}, // do not animate first call
		                aniEngine = hashChanged ? "best-available" : "none", // apply defaults where no option was specified
		                options = jQuery.extend({}, defaultOptions, hashOptions, { animationEngine: aniEngine });
		            // apply options from hash
		            $container.isotope(options);
		            // save options
		            isotopeOptions = hashOptions;

		            // if option link was not clicked
		            // then well need to update selected links
		            if (!isOptionLinkClicked) {
		                // iterate over options
		                var hrefObj, hrefValue, $selectedLink;
		                for (var key in options) {
		                    hrefObj = {};
		                    hrefObj[ key ] = options[ key ];
		                    // convert object into parameter string
		                    hrefValue = jQuery.param(hrefObj);
		                    // get matching link
		                    $selectedLink = $optionSets.find("a[href='#" + hrefValue + "']");
		                    changeSelectedLink($selectedLink);
		                }
		            }

		            isOptionLinkClicked = false;
		            hashChanged = true;
		        })// trigger hashchange to capture any hash data on init
		            .trigger("hashchange");
		    });
		    /* ISOTOPE */</script>
<script type="text/javascript">
jQuery(document).ready(function () {
					jQuery("#newsletterSubmit_592").click(function(){
						var $email = jQuery("#newsletterEmail_592").val();
						jQuery.ajax({
							type: "POST",
							  url: "http://nonus.themewoodmen.com/wp-admin/admin-ajax.php",
							  data: {
									action: "NewsletterAjax",
									email: $email,
									mailto: "office@createit.pl",
									subject: "Nonus newsletter"
							  },
							success: function (data, textStatus, XMLHttpRequest){
							    jQuery("#newsletterError_592").hide();
								jQuery("#newsletterInfo_592").hide();
							    jQuery("#newsletterError_592") . html("");
								jQuery("#newsletterInfo_592") . html("");
								if(data=="true"){
									jQuery("#newsletterInfo_592") . text("Thank you!").fadeIn();
									jQuery("#newsletterEmail_592").attr("value", "").hide();
									jQuery("#newsletterEmail_592").parent("div.mailIcon").hide();
									jQuery("#newsletterSubmit_592").hide();
								}else{
									jQuery("#newsletterError_592") . text("An error occured. Please try again.").fadeIn();
									jQuery("#newsletterEmail_592").addClass("error");
								}
							},
							error: function (MLHttpRequest, textStatus, errorThrown){
								jQuery("#newsletterInfo_592") . html("");
								jQuery("#newsletterError_592") . html("");
								jQuery("#newsletterError_592") . text("An error occured. Please try again.").fadeIn();
							}
						})
						return false;
					});
				});</script>
	

<!-- switcher -->
<script src="./Work/demo.js"></script>
<link rel="stylesheet" type="text/css" href="./Work/demo.css">
<link rel="stylesheet" type="text/css" href="./Work/skins.css">
<div id="stylechooser" style="left: -243px;">

</div>
<!-- end switcher -->
<!-- frame -->

<link href="./Work/jquery.qtip.min.css" media="all" rel="stylesheet" type="text/css">
<link href="./Work/style.css" media="all" rel="stylesheet" type="text/css">
<script src="./Work/jquery.qtip.min.js"></script>
<script src="./Work/switcher.js"></script>
<script src="./Work/jquery.ddslick.js"></script>
<script src="./Work/switcher(1).js"></script>


<!-- end frame -->

	


<!-- Performance optimized by W3 Total Cache. Learn more: http://www.w3-edge.com/wordpress-plugins/

Page Caching using disk: enhanced
Object Caching 3441/3925 objects using disk

 Served from: nonus.themewoodmen.com @ 2013-12-04 09:34:50 by W3 Total Cache --><div id="cboxOverlay" style="display: none;"></div><div id="colorbox" class="" role="dialog" tabindex="-1" style="display: none;"><div id="cboxWrapper"><div><div id="cboxTopLeft" style="float: left;"></div><div id="cboxTopCenter" style="float: left;"></div><div id="cboxTopRight" style="float: left;"></div></div><div style="clear: left;"><div id="cboxMiddleLeft" style="float: left;"></div><div id="cboxContent" style="float: left;"><div id="cboxTitle" style="float: left;"></div><div id="cboxCurrent" style="float: left;"></div><button type="button" id="cboxPrevious"></button><button type="button" id="cboxNext"></button><button id="cboxSlideshow"></button><div id="cboxLoadingOverlay" style="float: left;"></div><div id="cboxLoadingGraphic" style="float: left;"></div><button type="button" id="cboxClose"></button></div><div id="cboxMiddleRight" style="float: left;"></div></div><div style="clear: left;"><div id="cboxBottomLeft" style="float: left;"></div><div id="cboxBottomCenter" style="float: left;"></div><div id="cboxBottomRight" style="float: left;"></div></div></div><div style="position: absolute; width: 9999px; visibility: hidden; display: none;"></div></div></body><iframe src="javascript:0" style="display: none;"></iframe></html>