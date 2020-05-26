<?php require_once('../conn.php');
session_start();
if($_SESSION['name'] == '')
{
	echo '<script>window.location.href="login.php";</script>';
}
$sql = mysqli_query($conn,"SELECT * FROM `company_info`");
$info = mysqli_fetch_array($sql) or die("Error!");
//get loc info
$sql1 = mysqli_query($conn,"SELECT * FROM `location`");
$location = mysqli_fetch_array($sql1) or die("Error!");
?>
<!DOCTYPE html>
<html lang="en-US" prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb#" class="no-js no-svg">
<head><meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="content" author="Dennis Kiprotich">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<title><?php echo $info['name'];?></title> 
	<script>
			WebFont.load({
				google: {"families":["Lato:300,400,700,900"]},
				custom: {"families":["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands", "simple-line-icons"], urls: ["fonts.min.css"]},
				active: function() {
					sessionStorage.fonts = true;
				}
			});
		</script>
	<script>/* You can add more configuration options to webfontloader by previously defining the WebFontConfig with your options */
                            if ( typeof WebFontConfig === "undefined" ) {
                                WebFontConfig = new Object();
                            }
                            WebFontConfig['google'] = {families: ['Hind:400,500', 'Poppins:600,500', 'Sarala:700,400']};

                            (function() {
                                var wf = document.createElement( 'script' );
                                wf.src ='https://ajax.googleapis.com/ajax/libs/webfont/1.5.3/webfont.js';
                                wf.type = 'text/javascript';
                                wf.async = 'true';
                                var s = document.getElementsByTagName( 'script' )[0];
                                s.parentNode.insertBefore( wf, s );
                            })();
							</script> 
							<link rel="alternate" type="application/rss+xml" title="<?php echo $info['name'];?> &raquo; Feed" href="feed/" />
							<link rel="alternate" type="application/rss+xml" title="<?php echo $info['name'];?> &raquo; Comments Feed" href="comments/feed/"/>
							<meta property="og:title" content="Home"/>
							<meta property="og:type" content="article"/>
							<meta property="og:url" content=""/>
							<meta property="og:site_name" content="<?php echo $info['name'];?>"/>
							<meta property="og:description" content="Profitable Investmen tExcepteur sint occaecat cupidatat non proident, sunt"/>
							<link rel='stylesheet' id='wp-block-library-css'  href='../wp-includes/css/dist/block-library/style.min.css' type='text/css' media='all' />
							<link rel='stylesheet' id='wc-block-style-css'  href='../wp-content/plugins/woocommerce/packages/woocommerce-blocks/build/style.css' type='text/css' media='all' />
							<link rel='stylesheet' id='rs-plugin-settings-css'  href='../wp-content/plugins/revslider/public/assets/css/rs6.css' type='text/css' media='all' />
							<style id='rs-plugin-settings-inline-css' type='text/css'>#rs-demo-id {}</style>
							<link rel='stylesheet' id='contact-form-7-css'  href='../wp-content/plugins/contact-form-7/includes/css/styles.css' type='text/css' media='all' />
							<link rel='stylesheet' id='woocommerce-layout-css'  href='../wp-content/plugins/woocommerce/assets/css/woocommerce-layout.css' type='text/css' media='all' />
							<link rel='stylesheet' id='woocommerce-smallscreen-css'  href='../wp-content/plugins/woocommerce/assets/css/woocommerce-smallscreen.css' type='text/css' media='only screen and (max-width: 768px)' />
							<link rel='stylesheet' id='woocommerce-general-css'  href='../wp-content/plugins/woocommerce/assets/css/woocommerce.css' type='text/css' media='all' />
							<style id='woocommerce-inline-inline-css' type='text/css'>.woocommerce form .form-row .required { visibility: visible; }</style>
							<link rel='stylesheet' id='js_composer_front-css'  href='../wp-content/plugins/js_composer/assets/css/js_composer.min.css' type='text/css' media='all' />
							<link rel='stylesheet' id='counsel-min-css'  href='../wp-content/themes/counsel/assets/css/theme.min.css' type='text/css' media='all' />
							<link rel='stylesheet' id='counsel-style-css'  href='../wp-content/themes/counsel/style.css' type='text/css' media='all' />
							<link rel='stylesheet' id='counsel-shortcode-css'  href='../wp-content/themes/counsel/assets/css/shortcode.css' type='text/css' media='all' />
							<link rel='stylesheet' id='counsel-theme-style-css'  href='../wp-content/uploads/sites/17/counsel/theme_17.css' type='text/css' media='all' />
							<style id='counsel-theme-style-inline-css' type='text/css'>
							/*
							* Counsel Theme Page Style
							*/

body {
		}.counsel-content > .counsel-content-inner{padding-top: 0px;padding-bottom: 0px;
		}</style> <script type='text/javascript' src='../wp-includes/js/jquery/jquery.js'></script> 
		<script type='text/javascript'>var wc_add_to_cart_params = {"ajax_url":"\/counsell\/wp-admin\/admin-ajax.php","wc_ajax_url":"\/counsell\/?wc-ajax=%%endpoint%%","i18n_view_cart":"View cart","cart_url":"http:\/\/demo.zozothemes.com\/counsell\/cart\/","is_cart":"","cart_redirect_after_add":"no"};</script>
		 <!--[if lt IE 9]> <script type='text/javascript' src='../wp-content/themes/counsel/assets/js/html5.js'></script> <![endif]-->
		 <link rel='https://api.w.org/' href='../wp-json/' />
		 <link rel="EditURI" type="application/rsd+xml" title="RSD" href="xmlrpc.php?rsd" />
		 <link rel="wlwmanifest" type="application/wlwmanifest+xml" href="wp-includes/wlwmanifest.xml" />
		 <meta name="generator" content="WordPress 5.4.1" /><meta name="generator" content="WooCommerce 4.1.0" />
		 <link rel="canonical" href="" />
		 <link rel='shortlink' href='' />
		 <link rel="alternate" type="application/json+oembed" href="../wp-json/oembed/1.0/embed?url=http%3A%2F%2Fdemo.zozothemes.com%2Fcounsell%2F" />
		 <link rel="alternate" type="text/xml+oembed" href="../wp-json/oembed/1.0/embed?url=http%3A%2F%2Fdemo.zozothemes.com%2Fcounsell%2F&#038;format=xml" /> 
		 <noscript><style>.woocommerce-product-gallery{ opacity: 1 !important; }</style>
		</noscript><meta name="generator" content="Powered by WPBakery Page Builder - drag and drop page builder for WordPress."/>
		 <meta name="generator" content="Powered by Slider Revolution 6.2.2 - responsive, Mobile-Friendly Slider Plugin for WordPress with comfortable drag and drop interface." />
		 <link rel="icon" href="../wp-content/uploads/sites/17/2018/09/<?php echo $info['logo']; ?>" sizes="32x32" />
		 <link rel="icon" href="../wp-content/uploads/sites/17/2018/09/<?php echo $info['logo']; ?>" sizes="192x192" />
		 <link rel="apple-touch-icon" href="../wp-content/uploads/sites/17/2018/09/cropped-favicon-180x180.png" />
		 <meta name="msapplication-TileImage" content="wp-content/uploads/sites/17/2018/09/cropped-favicon-270x270.png" /> 
		 <script type="text/javascript">function setREVStartSize(e){			
			try {								
				var pw = document.getElementById(e.c).parentNode.offsetWidth,
					newh;
				pw = pw===0 || isNaN(pw) ? window.innerWidth : pw;
				e.tabw = e.tabw===undefined ? 0 : parseInt(e.tabw);
				e.thumbw = e.thumbw===undefined ? 0 : parseInt(e.thumbw);
				e.tabh = e.tabh===undefined ? 0 : parseInt(e.tabh);
				e.thumbh = e.thumbh===undefined ? 0 : parseInt(e.thumbh);
				e.tabhide = e.tabhide===undefined ? 0 : parseInt(e.tabhide);
				e.thumbhide = e.thumbhide===undefined ? 0 : parseInt(e.thumbhide);
				e.mh = e.mh===undefined || e.mh=="" || e.mh==="auto" ? 0 : parseInt(e.mh,0);		
				if(e.layout==="fullscreen" || e.l==="fullscreen") 						
					newh = Math.max(e.mh,window.innerHeight);				
				else{					
					e.gw = Array.isArray(e.gw) ? e.gw : [e.gw];
					for (var i in e.rl) if (e.gw[i]===undefined || e.gw[i]===0) e.gw[i] = e.gw[i-1];					
					e.gh = e.el===undefined || e.el==="" || (Array.isArray(e.el) && e.el.length==0)? e.gh : e.el;
					e.gh = Array.isArray(e.gh) ? e.gh : [e.gh];
					for (var i in e.rl) if (e.gh[i]===undefined || e.gh[i]===0) e.gh[i] = e.gh[i-1];
										
					var nl = new Array(e.rl.length),
						ix = 0,						
						sl;					
					e.tabw = e.tabhide>=pw ? 0 : e.tabw;
					e.thumbw = e.thumbhide>=pw ? 0 : e.thumbw;
					e.tabh = e.tabhide>=pw ? 0 : e.tabh;
					e.thumbh = e.thumbhide>=pw ? 0 : e.thumbh;					
					for (var i in e.rl) nl[i] = e.rl[i]<window.innerWidth ? 0 : e.rl[i];
					sl = nl[0];									
					for (var i in nl) if (sl>nl[i] && nl[i]>0) { sl = nl[i]; ix=i;}															
					var m = pw>(e.gw[ix]+e.tabw+e.thumbw) ? 1 : (pw-(e.tabw+e.thumbw)) / (e.gw[ix]);					

					newh =  (e.type==="carousel" && e.justify==="true" ? e.gh[ix] : (e.gh[ix] * m)) + (e.tabh + e.thumbh);
				}			
				
				if(window.rs_init_css===undefined) window.rs_init_css = document.head.appendChild(document.createElement("style"));					
				document.getElementById(e.c).height = newh;
				window.rs_init_css.innerHTML += "#"+e.c+"_wrapper { height: "+newh+"px }";				
			} catch(e){
				console.log("Failure at Presize of Slider:" + e)
			}					   
		  };</script> 
		 <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" style="text/css" rel="stylesheet"> 
		  <style type="text/css" id="wp-custom-css">.navbar-items > li .main-logo img,
.navbar-items > li .sticky-logo img{
	max-height:45px !important;
}
@media only screen and (max-width : 767px){
.site-footer .footer-top-wrap .widget{
	text-align:center;
}
.site-footer .footer-top-wrap .widget .btn{
		margin:0px auto;
	}
}</style><style type="text/css" data-type="vc_custom-css">.services-1 .col-lg-4.col-md-4{
    padding: 0 20px;
}
.z-index-99{
    z-index: 9;
}
.top-100{
    top: -200px !important;
}</style>
<style type="text/css" data-type="vc_shortcodes-custom-css">.vc_custom_1536395430825{padding-bottom: 0px !important;background-color: #f8f8f8 !important;}.vc_custom_1536397420957{padding-top: 110px !important;background-color: #f8f8f8 !important;}.vc_custom_1536397237392{padding-top: 180px !important;padding-bottom: 60px !important;background-color: #3abb65 !important;}.vc_custom_1537433410809{margin-top: -60px !important;padding-top: 0px !important;}.vc_custom_1535460238195{background-color: #fafafa !important;}.vc_custom_1537433430809{padding-bottom: 110px !important;background-color: #fafafa !important;}.vc_custom_1528978304309{padding-top: 60px !important;padding-bottom: 60px !important;background-color: #fafafa !important;}.vc_custom_1536397518067{border-top-width: 10px !important;border-right-width: 10px !important;border-bottom-width: 10px !important;border-left-width: 10px !important;padding-top: 200px !important;padding-bottom: 200px !important;background-image: url(wp-content/uploads/sites/17/2018/07/event-9.jpg?id=838) !important;background-position: center !important;background-repeat: no-repeat !important;background-size: cover !important;border-left-color: #ffffff !important;border-left-style: solid !important;border-right-color: #ffffff !important;border-right-style: solid !important;border-top-color: #ffffff !important;border-top-style: solid !important;border-bottom-color: #ffffff !important;border-bottom-style: solid !important;border-radius: 10px !important;}.vc_custom_1536411437466{padding-right: 20px !important;padding-left: 20px !important;}.vc_custom_1536411445125{padding-right: 20px !important;padding-left: 20px !important;}.vc_custom_1536411460128{padding-right: 20px !important;padding-left: 20px !important;}</style>
<noscript><style>.wpb_animate_when_almost_visible { opacity: 1; }</style></noscript>
</head>
<body class="home page-template-default page page-id-588 theme-counsel woocommerce-no-js wpb-js-composer js-comp-ver-6.1 vc_responsive" data-scroll-time="" data-scroll-distance="">
	<div class="mobile-header">
		<div class="mobile-header-inner hidden-lg-up hidden-lg-land-up">
			<div class="sticky-outer"><div class="sticky-head">
				<div class="container">
					<ul class="mobile-header-items nav pull-left">
						<li class="nav-item">
							<div class="nav-item-inner"> 
								<a class="mobile-bar-toggle" href="#"> <span class="hamburger1"></span> <span class="hamburger2"></span> <span class="hamburger3"></span> </a>
							</div>
						</li>
					</ul>
					<ul class="mobile-header-items nav pull-center">
						<li class="nav-item"><div class="nav-item-inner">
							<div class="mobile-logo">
								<a href="../" title="<?php echo $info['name'];?>" >
								<img class="img-responsive" src="../wp-content/uploads/sites/17/2018/09/<?php echo $info['logo']; ?>" alt="<?php echo $info['name'];?>" title="<?php echo $info['name'];?>" /></a>
							</div>
						</div>
					</li>
				</ul>
				<ul class="mobile-header-items nav pull-right">
					<li class="nav-item">
						<div class="nav-item-inner"> 
							<a class="full-search-toggle" href="#"><i class="icon-magnifier icons"></i></a>
						</div>
					</li>
				</ul>
			</div>
		</div>
	</div>
</div>
</div>
<div class="mobile-bar animate-from-left"> <a class="mobile-bar-toggle close" href="#"></a>
	<div class="mobile-bar-inner">
		<div class="container">
			<ul class="mobile-bar-items nav flex-column mobile-bar-top">
				<li class="nav-item">
					<div class="nav-item-inner">
						<div class="mobile-logo">
							<a href="../" title="<?php echo $info['name'];?>" >
								<img class="img-responsive" src="../wp-content/uploads/sites/17/2018/09/<?php echo $info['logo']; ?>" alt="<?php echo $info['name'];?>" title="<?php echo $info['name'];?>" />
							</a>
						</div>
					</div>
				</li>
			</ul>
			<ul class="mobile-bar-items nav flex-column mobile-bar-middle">
				<li class="nav-item">
					<div class="nav-item-inner">
						<div class="counsel-mobile-main-menu"></div>
					</div>
				</li>
			</ul>
			<ul class="mobile-bar-items nav flex-column mobile-bar-bottom">
				<li class="nav-item">
					<div class="nav-item-inner">
						<ul class="nav social-icons  social-squared social-black social-h-white social-bg-transparent social-hbg-theme">
							<li class="nav-item"> 
								<a href="#" class="nav-link social-twitter"> <i class="fa fa-twitter"></i> 
								</a>
							</li>
							<li class="nav-item"> 
								<a href="#" class="nav-link social-fb"> <i class="fa fa-facebook"></i> </a>
							</li>
							<li class="nav-item"> 
								<a href="#" class="nav-link social-instagram"> <i class="fa fa-instagram"></i> </a>
							</li>
							<li class="nav-item"> 
								<a href="#" class="nav-link social-linkedin"> <i class="fa fa-linkedin"></i> </a>
							</li>
						</ul>
					</div>
				</li>
				<li class="nav-item">
					<div class="nav-item-inner">
						<form method="get" class="search-form" action="">
							<div class="input-group"> 
								<input type="text" class="form-control" name="s" value="" placeholder="Search for..."> <span class="input-group-btn"> <button class="btn btn-secondary" type="submit"><i class="fa fa-search"></i></button> </span>
							</div>
						</form>
					</div>
				</li>
			</ul>
		</div>
	</div>
</div>
<div class="full-search-wrapper"> 
	<a class="full-search-toggle close" href="#"></a>
	<form method="get" class="search-form" action="">
		<div class="input-group"> 
			<input type="text" class="form-control" name="s" value="" placeholder="Search for..."> 
			<span class="input-group-btn"> <button class="btn btn-secondary" type="submit"><i class="fa fa-search"></i></button> </span>
		</div>
	</form>
</div>
<div id="page" class="counsel-wrapper">
	<!-- header start-->
	<header class="counsel-header">
		<div class="header-inner hidden-md-down hidden-md-land-down">
			<div class="topbar clearfix"><div class="custom-container topbar-inner">
				<ul class="topbar-items nav pull-left">
					<li class="nav-item">
						<div class="nav-item-inner">
							<ul class="nav header-info">
								<li class="nav-item">Phone: <?php echo $info['phone'];?></li>
								<li class="nav-item">E-mail:<a href="mailto:<?php echo $info['email'];?>."> <?php echo $info['email'];?>.</a></li>
							</ul>
						</div>
					</li>
				</ul>
				<ul class="topbar-items nav pull-right">
					<li class="nav-item">
						<div class="nav-item-inner">
							<ul class="nav social-icons  social-squared social-black social-h-white social-bg-transparent social-hbg-theme">
								<li class="nav-item"> <a href="" class="nav-link social-twitter"> <i class=" fa fa-twitter"></i> </a>
								</li>
								<li class="nav-item"> 
									<a href="" class="nav-link social-fb"> <i class="fa fa-facebook"></i> </a>
								</li>
								<li class="nav-item"> 
									<a href="" class="nav-link social-instagram"> <i class="fa fa-instagram"></i> 
									</a>
								</li>									
								<li class="nav-item"> 
									<a href="" class="nav-link social-linkedin"> <i class="fa fa-linkedin"></i> 
									</a>
								</li>
							</ul>
						</div>
					</li>
				</ul>
			</div>
		</div>
		<div class="sticky-outer">
			<div class="sticky-head">
				<nav class="navbar clearfix">
					<div class="custom-container navbar-inner">
						<ul class="navbar-items nav pull-left">
							<li class="nav-item">
								<div class="nav-item-inner">
									<div class="main-logo"> 
										<a href="../" title="<?php echo $info['name'];?>">
											<img class="custom-logo img-responsive" src="../wp-content/uploads/sites/17/2018/09/<?php echo $info['logo']; ?>" alt="<?php echo $info['name'];?>" title="<?php echo $info['name'];?>" />
										</a>
									</div>
									<div class="sticky-logo">
										<a href="../" title="<?php echo $info['name'];?>" >
											<img class="img-responsive" src="../wp-content/uploads/sites/17/2018/09/<?php echo $info['logo']; ?>" alt="<?php echo $info['name'];?>" title="<?php echo $info['name'];?>" />
										</a>
									</div>
								</div>
							</li>
							<li class="nav-item">
								<div class="nav-item-inner"></div>
							</li>
						</ul>
						<ul class="navbar-items nav pull-right">
							<li class="nav-item">
								<div class="nav-item-inner">
									<ul id="counsel-main-menu" class="nav counsel-main-menu">
										<li id="menu-item-1255" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home page_item page-item-588 menu-item-has-children nav-item menu-item-1255">
											<a href="../" class="nav-link">Home</a>
										</li>
										<li id="menu-item-1266" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children nav-item menu-item-1266">
										<a href="about" class="nav-link">Team</a>
										</li>
										<li id="menu-item-1264" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children nav-item menu-item-1264 dropdown">
											<a href="services/" class="nav-link dropdown-toggle">Services</a>
											<ul role="menu" class=" dropdown-menu">
												<li id="menu-item-1495" class="menu-item menu-item-type-post_type menu-item-object-cl-service nav-item menu-item-1495">
													<a href="#" class="nav-link">All Services</a>
												</li>
											</ul>
										</li>
										<!-- <li id="menu-item-1402" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-has-children nav-item menu-item-1402">
											<a href="project" class="nav-link">Projects</a>
										</li> -->
										<!--<li id="menu-item-1265" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children nav-item menu-item-1265 dropdown">
											<a href="blog" class="nav-link dropdown-toggle">Blog</a>
										</li>-->
										<li id="menu-item-1259" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children nav-item menu-item-1259 dropdown">
											<a href="contact-us/" class="nav-link dropdown-toggle">Messages</a>
										</li>
									</ul>
								</div>
							</li>
							<li class="nav-item">
								<div class="nav-item-inner">
									<div class="search-toggle-wrap">
										<a class="full-bar-search-toggle" href="#">
											<i class="icon-magnifier icons"></i>
										</a>
									</div>
								</div>
							</li>
						</ul>
					</div>
					<div class="full-bar-search-wrap">
						<form method="get" class="search-form" action="">
							<div class="input-group"> 
								<input type="text" name="s" class="form-control" value="" placeholder="Search hit enter..">
							</div>
						</form> 
						<a href="#" class="close full-bar-search-toggle"></a>
					</div>
				</nav>
			</div>
		</div>
	</div>
</header>
<!--header end-->
