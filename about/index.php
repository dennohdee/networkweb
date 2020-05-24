<?php require_once("header.php"); 
//get loc info
$sql2 = mysqli_query($conn,"SELECT * FROM `about`");
$about = mysqli_fetch_array($sql2) or die("Error!");
?>
<div class="counsel-content-wrapper"><div class="counsel-content counsel-page">
	<header id="page-title" class="page-title-wrap"><div class="page-title-wrap-inner" data-property="no-video"> 
		<span class="page-title-overlay"></span>
	<div class="container"><div class="row">
		<div class="col-md-12">
		<div class="page-title-inner"><div class="pull-center"><h1 class="page-title">Company Overview</h1>
		<div id="breadcrumb" class="breadcrumb"><a href="../">Home</a> <span class="current">Company Overview</span>
	</div></div></div></div></div></div></div>
	</header>
	<div class="counsel-content-inner">
	<div class="container"><div class="row">
	<div class="col-md-12">
		<div id="primary" class="content-area clearfix">
		<div id="page-251" class="post-251 page type-page status-publish hentry">
		<div class="vc_row wpb_row vc_row-fluid vc_custom_1535467314920">
		<div class="wpb_column vc_column_container vc_col-sm-12 vc_col-lg-6 vc_col-md-6">
		<div class="vc_column-inner vc_custom_1530864208792">
			<div class="wpb_wrapper">
			<div class="section-title-wrapper margin-bottom-40 text-left shortcode-rand-16 counsel-inline-css" data-css="&quot;.shortcode-rand-16.section-title-wrapper .sub-title { color: #3abb65; }.shortcode-rand-16 .section-title { text-transform: none; }&quot;">
	<div class="title-wrap"><span class="sub-title">Quality | Service | Commitment</span><h2 class="section-title"><?php echo $about['title'];?></h2></div><div class="section-description"></div></div>
	<div class="wpb_text_column wpb_content_element " >
		<div class="wpb_wrapper">
			<p><?php echo $about['description'];?></p>
	</div>
	</div></div></div></div>

	<div class="wpb_column vc_column_container vc_col-sm-12 vc_x	col-lg-6 vc_col-md-6">
		<div class="vc_column-inner"><div class="wpb_wrapper">
		<div  class="wpb_single_image wpb_content_element vc_align_center"><figure class="wpb_wrapper vc_figure">
		<div class="vc_single_image-wrapper   vc_box_border_grey">
		<img width="800" height="632" src="../wp-content/uploads/sites/17/2018/07/meeting-1.jpg" class="vc_single_image-img attachment-full" alt="" srcset="../wp-content/uploads/sites/17/2018/07/meeting-1.jpg 800w, ../wp-content/uploads/sites/17/2018/07/meeting-1-768x607.jpg 768w, ../wp-content/uploads/sites/17/2018/07/meeting-1-500x395.jpg 500w" sizes="(max-width: 800px) 100vw, 800px" />
	</div></figure></div></div></div></div>

	</div>
	
	<div class="vc_row wpb_row vc_row-fluid vc_custom_1535467323155">
		<div class="wpb_column vc_column_container vc_col-sm-12">
		<div class="vc_column-inner">
		<div class="wpb_wrapper">
			<div class="vc_row wpb_row vc_inner vc_row-fluid">
			<div class="wpb_column vc_column_container vc_col-sm-12 vc_col-lg-5 vc_col-md-6">
			<div class="vc_column-inner">
				<div class="wpb_wrapper">
				<div class="section-title-wrapper text-left shortcode-rand-25 counsel-inline-css" data-css="&quot;.shortcode-rand-25 .section-title { text-transform: none; }&quot;">
					<div class="title-wrap"><h3 class="section-title">Our Vision and Mission</h3></div>
				</div></div></div></div>
				<div class="wpb_column vc_column_container vc_col-sm-12 vc_col-lg-7 vc_col-md-6"><div class="vc_column-inner"><div class="wpb_wrapper"></div></div></div></div>
				<div class="vc_row wpb_row vc_inner vc_row-fluid">
					<div class="wpb_column vc_column_container vc_col-sm-12 vc_col-lg-4 vc_col-md-4"><div class="vc_column-inner vc_custom_1536411437466">
					<div class="wpb_wrapper"><div class="feature-box-wrapper pulse feature-box-style-2 text-center shortcode-rand-26 counsel-inline-css" data-css="&quot;.shortcode-rand-26.feature-box-wrapper &gt; *:nth-child(1) { margin-bottom: 32px; }.shortcode-rand-26.feature-box-wrapper &gt; *:nth-child(2) { margin-bottom: 5px; }.shortcode-rand-26.feature-box-wrapper &gt; *:nth-child(3) { margin-bottom: 10px; }.shortcode-rand-26.feature-box-wrapper {background: -moz-linear-gradient(141deg,  0%,  51%,  75%);\n\t\t\t\tbackground: -webkit-linear-gradient(141deg,  0%,  51%,  75%);\n\t\t\t\tbackground: linear-gradient(141deg,  0%,  51%,  75%);}.shortcode-rand-26 .feature-box-icon { font-size: 50px; }.shortcode-rand-26 .feature-box-icon { height: 100px; width: 100px; }.shortcode-rand-26 .feature-box-icon &gt; span { line-height: 2; }.shortcode-rand-26 .feature-box-icon { color: #ffffff; }.shortcode-rand-26:hover .feature-box-icon { color: #ffffff; }.shortcode-rand-26 .feature-box-icon { border-style: solid; border-color: #eaeaea; }.shortcode-rand-26 .feature-box-icon { border-width: 1px; }&quot;">
					<div class="feature-box-icon text-center rounded-circle theme-color-bg theme-hcolor-bg"><span class="icon-drop"></span></div>
				<div class="feature-box-title"><h4 class="section-title">Our Vision</h4></div>
				<div class="feature-box-content"><?php echo $info['vision'];?> </div></div></div></div></div>
				<div class="wpb_column vc_column_container vc_col-sm-12 vc_col-lg-8 vc_col-md-8"><div class="vc_column-inner vc_custom_1536411460128"><div class="wpb_wrapper"><div class="feature-box-wrapper pulse feature-box-style-2 text-center shortcode-rand-28 counsel-inline-css" data-css="&quot;.shortcode-rand-28.feature-box-wrapper &gt; *:nth-child(1) { margin-bottom: 32px; }.shortcode-rand-28.feature-box-wrapper &gt; *:nth-child(2) { margin-bottom: 5px; }.shortcode-rand-28.feature-box-wrapper &gt; *:nth-child(3) { margin-bottom: 10px; }.shortcode-rand-28.feature-box-wrapper {background: -moz-linear-gradient(141deg,  0%,  51%,  75%);\n\t\t\t\tbackground: -webkit-linear-gradient(141deg,  0%,  51%,  75%);\n\t\t\t\tbackground: linear-gradient(141deg,  0%,  51%,  75%);}.shortcode-rand-28 .feature-box-icon { font-size: 50px; }.shortcode-rand-28 .feature-box-icon { height: 100px; width: 100px; }.shortcode-rand-28 .feature-box-icon &gt; span { line-height: 2; }.shortcode-rand-28 .feature-box-icon { color: #ffffff; }.shortcode-rand-28:hover .feature-box-icon { color: #ffffff; }.shortcode-rand-28 .feature-box-icon { border-style: solid; border-color: #eaeaea; }.shortcode-rand-28 .feature-box-icon { border-width: 1px; }&quot;">
					<div class="feature-box-icon text-center rounded-circle theme-color-bg theme-hcolor-bg"><span class="icon-graph"></span></div>
				<div class="feature-box-title"><h4 class="section-title">Our Mission</h4></div>
				<div class="feature-box-content">
					<?php echo $info['mission'];?>
 <br><br></div>
			</div></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div></div>

	<?php require_once("footer.php"); ?>