<?php require_once("header.php");
//insert to feedback
if(isset($_POST['your_name']))
{
	$name = $_POST['your_name'];
	$email = $_POST['your_email'];
	$subject = $_POST['your_subject'];
	$message = $_POST['your_message'];
	$insql = "INSERT INTO feedbacks(name, email, subject, message) VALUES ($name,$email,$subject,$message)";
	$inquery = mysqli_query($conn,$insql) or die();
	echo "Success";
}
?>

<div class="counsel-content-wrapper"><div class="counsel-content counsel-page">
	<header id="page-title" class="page-title-wrap"><div class="page-title-wrap-inner" data-property="no-video"> <span class="page-title-overlay"></span>
	<div class="container">
	<div class="row">
	<div class="col-md-12">
	<div class="page-title-inner"><div class="pull-center">
		<h1 class="page-title">Contact Us</h1><div id="breadcrumb" class="breadcrumb"><a href="">Home</a> <span class="current">Contact Us</span>
	</div>
	</div>
	</div>
	</div>
	</div>
	</div></div>
	</header>
	<div class="counsel-content-inner"><div class="container"><div class="row">
		<div class="col-md-12">
		<div id="primary" class="content-area clearfix">
		<div id="page-468" class="post-468 page type-page status-publish hentry">
			<div class="vc_row wpb_row vc_row-fluid"><div class="wpb_column vc_column_container vc_col-sm-4">
			<div class="vc_column-inner">
				<div class="wpb_wrapper"><div class="vc_empty_space"   style="height: 74px"><span class="vc_empty_space_inner"></span></div>
				<div class="section-title-wrapper shortcode-rand-7 counsel-inline-css" data-css="&quot;.shortcode-rand-7 .section-title { text-transform: none; }&quot;">
					<div class="title-wrap"><h3 class="section-title">Address</h3></div>
					<div class="section-description">
					<strong>Address:</strong> <?php echo $location['address'];?></p>
					<p><strong>Phone:</strong><?php echo $info['phone'];?></p>
					<p><strong>Email:</strong> <a href="mailto:<?php echo $info['email'];?>."><?php echo $info['email'];?>.</a></p>
					<p><strong>Location:</strong> <a href="#">Westlands (H/O), Muratha Road,</a>
				</div></div></div></div></div>
				<div class="wpb_column vc_column_container vc_col-sm-1">
				<div class="vc_column-inner"><div class="wpb_wrapper"></div>
			</div></div>
			<div class="wpb_column vc_column_container vc_col-sm-7">
			<div class="vc_column-inner"><div class="wpb_wrapper">
				<div class="wpb_gmaps_widget wpb_content_element"><div class="wpb_wrapper">
				<div class="wpb_map_wraper">
				<iframe src="<?php echo $location['map'];?>" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0">
				</iframe>
					</div></div></div></div></div></div></div><div class="vc_row wpb_row vc_row-fluid vc_custom_1535467663151">
						<div class="wpb_column vc_column_container vc_col-sm-2">
						<div class="vc_column-inner">
						<div class="wpb_wrapper"></div>
						</div></div>
						<div class="wpb_column vc_column_container vc_col-sm-8">
						<div class="vc_column-inner"><div class="wpb_wrapper">
						<div class="section-title-wrapper text-center shortcode-rand-9 counsel-inline-css" data-css="&quot;.shortcode-rand-9 .section-title { text-transform: none; }&quot;">
						<div class="title-wrap"><h3 class="section-title">Drop us a Message</h3></div>
						<div class="section-description"></div></div>
						<div class="contact-form-wrapper contact-form-classic text-center" data-css="&quot;&quot;">
						<div class="contact-form">
						<div role="form"  class="wpcf7">
						<div class="screen-reader-response"></div>
						
						<form action="" method="post" class="wpcf7-form">
						<div style="display: none;"> 
						</div>
						<div class="row">
						<div class="col-md-6">
						<input type="text" name="your_name" value="" size="40" class="wpcf7-form-control" placeholder="Name" /></span></div>
						<div class="col-md-6">
						<input type="email" name="your_email" value="" size="40" class="wpcf7-form-control"placeholder="Email" /></span></div></div>
						<div class="row"><div class="col-md-12">
						<input type="text" name="your_subject" value="" size="40" class="wpcf7-form-control" placeholder="Subject" /></span></div></div>
						<div class="row">
						<div class="col-md-12">
						<textarea name="your_message" cols="40" rows="10" class="wpcf7-form-control" placeholder="Message"></textarea></span></div></div>
						<input type="submit" id="submit" onclick="Save()" value="Submit Now" class="wpcf7-form-control" />
						<div class="wpcf7-response-output wpcf7-display-none">
						</div></form>
						
						</div></div></div></div></div></div><div class="wpb_column vc_column_container vc_col-sm-2">
						<div class="vc_column-inner"><div class="wpb_wrapper"></div></div></div></div></div></div></div></div></div></div></div></div>
<script>
function Save(){
	console.log("Bar");
}
</script>
	<?php require_once("footer.php"); ?>