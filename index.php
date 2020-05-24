<?php require_once('header.php'); 
//services
$sqlservice = mysqli_query($conn,"SELECT * FROM `services` LIMIT 3");
//team
$sqlteam = mysqli_query($conn,"SELECT * FROM `team` LIMIT 3");

?>
<div class="counsel-content-wrapper">
	<div class="counsel-content counsel-page">
		<div class="header-slider-wrapper">
			<p class="rs-p-wp-fix"></p> 
			<rs-module-wrap id="rev_slider_1_1_wrapper" data-source="gallery" style="background:transparent;padding:0;margin:0px auto;margin-top:0;margin-bottom:0;max-width:">
				 <rs-module id="rev_slider_1_1" style="display:none;" data-version="6.2.2"> 
					<rs-slides> 
						<rs-slide data-key="rs-1" data-title="Slide" data-duration="8970" data-anim="ei:d;eo:d;s:d;r:0;t:notransition;sl:d;"> 
							<img src="counsel/wp-content/uploads/sites/17/revslider/home-default/slide-1.jpg" title="Home" class="rev-slidebg" data-no-retina> 
							<rs-layer
 id="slider-1-slide-1-layer-6" 
 class="text-color"
 data-type="text"
 data-color="rgba(255, 255, 255, 1)"
 data-rsp_ch="on"
 data-xy="x:l,l,l,c;xo:91px,93px,68px,2px;y:m;yo:-136px,-145px,-118px,-122px;"
 data-text="s:48,48,38,28;l:48,48,38,28;ls:0px,0,0,0;"
 data-frame_0="x:50px;tp:600;"
 data-frame_1="tp:600;st:1000;sp:1500;sR:1000;"
 data-frame_999="o:0;tp:600;e:nothing;st:w;sR:6470;"
 style="z-index:5;font-family:Raleway;"
 >Welcome to </rs-layer><rs-layer
 id="slider-1-slide-1-layer-1" 
 data-type="text"
 data-color="rgba(255, 255, 255, 1)"
 data-rsp_ch="on"
 data-xy="x:l,l,l,c;xo:93px,93px,68px,0;y:m;yo:-72px,-79px,-63px,-76px;"
 data-text="s:60,60,55,40;l:60,60,55,40;ls:0px,0,0,0;fw:900,900,900,700;"
 data-frame_0="x:50px;tp:600;"
 data-frame_1="tp:600;st:1360;sp:1500;sR:1360;"
 data-frame_999="o:0;tp:600;e:nothing;st:w;sR:6110;"
 style="z-index:6;font-family:Raleway;"
 ><?php echo $info['name']; ?> </rs-layer><rs-layer
 id="slider-1-slide-1-layer-12" 
 data-type="text"
 data-rsp_ch="on"
 data-xy="x:l,l,l,c;xo:93px,93px,68px,0;y:m;yo:25px,22px,29px,19px;"
 data-text="w:normal;l:28;ls:0px,0,0,0;a:inherit,inherit,inherit,center;"
 data-dim="w:482px,482px,482px,326px;h:60px,60px,60px,auto;"
 data-frame_0="tp:600;"
 data-frame_1="tp:600;st:2090;sR:2090;"
 data-frame_999="o:0;tp:600;st:w;sR:6580;"
 style="z-index:7;font-family:Sarala;"
 >Home to Telecommunications, Electrical, Safety and Security Solutions.  </rs-layer><rs-layer
 id="slider-1-slide-1-layer-10" 
 data-type="text"
 data-rsp_ch="on"
 data-xy="x:l,l,l,c;xo:93px,93px,68px,-100px;y:m;yo:129px,120px,118px,118px;"
 data-text="s:16,20,20,20;l:22;a:inherit;"
 data-actions='o:click;a:scrollbelow;offset:-100;e:none;'
 data-padding="t:,0,0,0;r:,0,0,0;b:,0,0,0;l:,0,0,0;"
 data-frame_0="tp:600;"
 data-frame_1="tp:600;e:power2.inOut;st:2570;sp:1500;sR:2570;"
 data-frame_999="o:0;tp:600;e:nothing;st:w;sR:4900;"
 style="z-index:8;font-family:Sarala;text-transform:uppercase;"
 ><div class="btn btn-default">Learn More</div> </rs-layer><rs-layer
 id="slider-1-slide-1-layer-11" 
 data-type="text"
 data-rsp_ch="on"
 data-xy="x:l,l,l,c;xo:288px,310px,284px,100px;y:m;yo:129px,120px,118px,115px;"
 data-text="s:16,20,20,20;l:22;a:inherit;"
 data-actions='o:click;a:scrollbelow;offset:-100;e:none;'
 data-padding="t:,0,0,0;r:,0,0,0;b:,0,0,0;l:,0,0,0;"
 data-border="bow:,,,;"
 data-frame_0="tp:600;"
 data-frame_1="tp:600;e:power2.inOut;st:3130;sp:1500;sR:3130;"
 data-frame_999="o:0;tp:600;e:nothing;st:w;sR:4340;"
 style="z-index:9;font-family:Sarala;text-transform:uppercase;"
 ><div class="btn btn-bordered">Contact Us</div> </rs-layer><rs-layer
 id="slider-1-slide-1-layer-13" 
 data-type="image"
 data-rsp_ch="on"
 data-xy="x:r;xo:0,-1px,-437px,-595px;y:b;yo:0,0,32px,-10px;"
 data-text="l:22;a:inherit;"
 data-dim="w:['700px','700px','700px','700px'];h:['530px','530px','530px','530px'];"
 data-vbility="t,f,f,f"
 data-frame_0="tp:600;"
 data-frame_1="tp:600;st:1000;sR:1000;"
 data-frame_999="o:0;tp:600;st:w;sR:7670;"
 style="z-index:10;">
 <img src="counsel/wp-content/uploads/sites/17/revslider/home-default/p8.png" data-no-retina> </rs-layer> </rs-slide> </rs-slides> <rs-progress class="rs-bottom" style="visibility: hidden !important;"></rs-progress> </rs-module> <script type="text/javascript">setREVStartSize({c: 'rev_slider_1_1',rl:[1240,1024,778,480],el:[],gw:[1370,1024,778,480],gh:[700,650,550,550],type:'standard',justify:'',layout:'fullwidth',mh:"0"});
					var	revapi1,
						tpj;
					jQuery(function() {
						tpj = jQuery;
						if(tpj("#rev_slider_1_1").revolution == undefined){
							revslider_showDoubleJqueryError("#rev_slider_1_1");
						}else{
							revapi1 = tpj("#rev_slider_1_1").show().revolution({
								jsFileLocation:"wp-content/plugins/revslider/public/assets/js/",
								visibilityLevels:"1240,1024,778,480",
								gridwidth:"1370,1024,778,480",
								gridheight:"700,650,550,550",
								spinner:"spinner1",
								responsiveLevels:"1240,1024,778,480",
								disableProgressBar:"on",
								navigation: {
									mouseScrollNavigation:false,
									onHoverStop:false,
									touch: {
										touchenabled:true,
										touchOnDesktop:true
									}
								},
								fallbacks: {
									nextSlideOnWindowFocus:true,
									allowHTML5AutoPlayOnAndroid:true
								},
							});
						}
						
					});</script> <script>var htmlDivCss = ' #rev_slider_1_1_wrapper rs-loader.spinner1{ background-color: #FFFFFF !important; } '
					var htmlDiv = document.getElementById('rs-plugin-settings-inline-css');
					if(htmlDiv) {
						htmlDiv.innerHTML = htmlDiv.innerHTML + htmlDivCss;
					}else{
						var htmlDiv = document.createElement('div');
						htmlDiv.innerHTML = '<style>' + htmlDivCss + '</style>';
						document.getElementsByTagName('head')[0].appendChild(htmlDiv.childNodes[0]);
					}</script> 
					</rs-module-wrap>
					</div>
					<div class="counsel-content-inner">
						<div class="container">
							<div class="row">
								<div class="col-md-12">
								<div id="primary" class="content-area clearfix">
								<div id="page-588" class="post-588 page type-page status-publish hentry">
								
								<div data-vc-full-width="true" data-vc-full-width-init="false" class="vc_row wpb_row vc_row-fluid vc_custom_1536395430825 vc_row-has-fill">
								<div class="wpb_column vc_column_container vc_col-sm-12">
								<div class="vc_column-inner">
								<div class="wpb_wrapper">
								<div class="section-title-wrapper text-center shortcode-rand-35 counsel-inline-css" data-css="&quot;.shortcode-rand-35 .title-wrap { margin: 0px 0px 24px 0px; }.shortcode-rand-35 .section-title { text-transform: capitalize; }&quot;">
									<div class="title-wrap">
									<h2 class="section-title">Our Services</h2>
									</div>
									
								</div>
								<div class="services-wrapper services-1 services-light shortcode-rand-36 counsel-inline-css" data-css="&quot;.shortcode-rand-36.services-wrapper .services-inner &gt; *:nth-child(1) { margin-bottom: 40px; }.shortcode-rand-36.services-wrapper .services-inner &gt; *:nth-child(2) { margin-bottom: 30px; }.shortcode-rand-36.services-wrapper .services-inner &gt; *:nth-child(3) { margin-bottom: 30px; }&quot;">
								<div class="row">
								<?php while($servicedata = mysqli_fetch_array($sqlservice)) { ?>
								<!-- -->
								<div class="col-lg-4 col-md-4">
									<div class="services-inner" style="height:680px">
										<div class="services-thumb">
											<img height="355" width="600" class="img-fluid" alt="We Love Our Client" src="wp-content/uploads/sites/17/2018/06/<?php echo $servicedata['image'];?>"/>
										</div>
										<div class="services-title">
											<h3 class="invisible-number"><?php echo $servicedata['id'];?></h3>
											<h3>
												<a href="services" class="entry-title"><?php echo $servicedata['name'];?></a>
											</h3>
										</div>
										<div class="services-excerpt">
											<p><?php echo substr($servicedata['description'],0,170).'...';?></p>
										</div>
										<div class="services-read-more">
											<a href="services" class="read-more">Learn More</a>
										</div>
									</div>
								</div>
								<?php } ?>
								<!-- -->
								
								  </div>
								</div>
								</div>
							 </div>
							</div>
						</div>

		
	
	<div class="vc_row-full-width vc_clearfix"></div>
	<div data-vc-full-width="true" data-vc-full-width-init="true" class="vc_row wpb_row vc_row-fluid sc_bg_b vc_custom_1537433430809 vc_row-has-fill" style="position: relative; left: -93px; box-sizing: border-box; width: 1356px; padding-left: 93px; padding-right: 93px;">
	<div class="wpb_column vc_column_container vc_col-sm-12">
	<div class="vc_column-inner"><div class="wpb_wrapper"><div class="vc_row wpb_row vc_inner vc_row-fluid">
	<div class="wpb_column vc_column_container vc_col-sm-12 vc_col-lg-6 vc_col-md-6"><div class="vc_column-inner">
	<div class="wpb_wrapper"><div class="section-title-wrapper text-left shortcode-rand-57 counsel-inline-css">
	<div class="title-wrap"><h2 class="section-title">Our Team</h2></div>
	</div></div></div></div>
	<div class="wpb_column vc_column_container vc_col-sm-12 vc_col-lg-6 vc_col-md-6"><div class="vc_column-inner">
	<div class="wpb_wrapper"></div>
	</div></div></div>
	<div class="team-wrapper team-1 text-left team-light shortcode-rand-58 counsel-inline-css">
	<div class="row">
	<?php while($team = mysqli_fetch_array($sqlteam)) { ?>
	<div class="col-lg-4 col-md-6">
	<div class="team-inner team-overlay-actived"><div class="team-thumb"><span class="overlay-bg overlay-custom"></span>
	<div class="team-overlay overlay-bottom-center text-center"><div class="team-social-wrap clearfix">
	<ul class="nav social-icons team-social social-circled social-white social-h-own social-bg-trans social-hbg-white">
	<li><a>G.M</a></li>
	</ul></div></div>
	<img src="wp-content/uploads/sites/17/2018/06/<?php echo $team['image'];?>" class="img-fluid wp-post-image" alt="" width="458" height="500" style="height:250px;">
	</div><div class="team-name">
	<p><a href="#" class="client-name"> <?php echo $team['name'];?> - <?php echo $team['position'];?> </a></p>
	</div><div class="team-designation">
	<p><?php echo $team['message'];?></p>
	</div></div></div>
	<?php } ?>
	</div></div></div></div></div></div></div>

	<div class="vc_row-full-width vc_clearfix"></div>
	<div class="vc_row wpb_row vc_row-fluid">
	<div class="wpb_column vc_column_container vc_col-sm-5 vc_col-lg-5 vc_col-md-5">
	<div class="vc_column-inner">
	<div class="wpb_wrapper">
	<div class="section-title-wrapper text-left shortcode-rand-60 counsel-inline-css" data-css="&quot;.shortcode-rand-60 .title-wrap { margin: 0px 0px 24px 0px; }.shortcode-rand-60 .section-title { font-size: 35px; text-transform: none; }&quot;">
	<div class="title-wrap"><h2 class="section-title">Request a Free Consultion</h2></div>
	<div class="section-description"></div>
	</div>
	<div class="contact-form-wrapper contact-form-classic text-left" data-css="&quot;&quot;">
	<div class="contact-form">
	<div role="form" class="wpcf7" id="wpcf7-f7-p588-o2" lang="en-US" dir="ltr">
	<div class="screen-reader-response"></div>
	<form action="/counsell/#wpcf7-f7-p588-o2" method="post" class="wpcf7-form" novalidate="novalidate">
	<div style="display: none;"> 
	<input type="hidden" name="_wpcf7" value="7" /> 
	<input type="hidden" name="_wpcf7_version" value="5.1.7" /> 
	<input type="hidden" name="_wpcf7_locale" value="en_US" /> 
	<input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f7-p588-o2" /> 
	<input type="hidden" name="_wpcf7_container_post" value="588" />
	</div>
	<div class="row">
	<div class="col-md-6"> 
	<span class="wpcf7-form-control-wrap your-name">
	<input type="text" name="your-name" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="Name" />
	</span>
	</div>
	<div class="col-md-6"> 
	<span class="wpcf7-form-control-wrap your-email">
	<input type="email" name="your-email" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email" aria-required="true" aria-invalid="false" placeholder="Email" />
	</span>
	</div>
	</div>
	<div class="row">
	<div class="col-md-12"> 
	<span class="wpcf7-form-control-wrap your-subject">
	<input type="text" name="your-subject" value="" size="40" class="wpcf7-form-control wpcf7-text" aria-invalid="false" placeholder="Subject" />
	</span>
	</div>
	</div>
	<div class="row">
	<div class="col-md-12"> 
	<span class="wpcf7-form-control-wrap your-message">
	<textarea name="your-message" cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea" aria-invalid="false" placeholder="Message"></textarea>
	</span>
	</div>
	</div>
	<p><input type="submit" value="Submit Now" class="wpcf7-form-control wpcf7-submit" /></p>
	<div class="wpcf7-response-output wpcf7-display-none"></div>
	</form>
	</div>
	</div>
	</div>
	</div>
	</div>
	</div>
	<div class="wpb_column vc_column_container vc_col-sm-7 vc_col-lg-7 vc_col-md-7">
	<div class="vc_column-inner">
	<div class="wpb_wrapper">
	<div  class="wpb_single_image wpb_content_element vc_align_left   pt-md-5">
	<figure class="wpb_wrapper vc_figure"><div class="vc_single_image-wrapper   vc_box_border_grey">
	<img width="828" height="465" src="wp-content/uploads/sites/17/2018/09/world-map.png" class="vc_single_image-img attachment-full" alt="" srcset="wp-content/uploads/sites/17/2018/09/world-map.png 828w, wp-content/uploads/sites/17/2018/09/world-map-768x431.png 768w, wp-content/uploads/sites/17/2018/09/world-map-400x225.png 400w" sizes="(max-width: 828px) 100vw, 828px" />
	</div>
	</figure>
	</div>
	</div>
	</div>
	</div>
	</div>
	


	
	</div>
	</div>
	</div>
	</div>
	</div>
	</div>
	</div>
	</div>
	</div>

	<?php require_once('footer.php'); ?>