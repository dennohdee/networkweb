<?php require_once("header.php");
$mylinks = mysqli_query($conn,"SELECT * FROM `social_links`");
//insert ot db
//contact edit
if(isset($_POST['contact-save']))
{
    $editinfosql = "UPDATE `company_info` SET `email`='".$_POST['email']."', `phone`='".$_POST['phone']."' WHERE 1";
    $editconsql = "UPDATE `location` SET `address`='".$_POST['address']."',`location`='".$_POST['location']."',
    `map`='".$_POST['map']."',`building`='".$_POST['building']."' WHERE 1";
    $editquery = mysqli_query($conn,$editconsql) or die('Oops! An Error occurred. Please try again.');
    $editinfoquery = mysqli_query($conn,$editinfosql) or die('Oops! An Error occurred. Please try again.');
    if($editquery & $editinfoquery)
    {
        $msg = "<div class='alert alert-success'>Updated Successfully!</div>";
        //echo '<script>window.location.href="/myweb/admin";</script>';
    }
    else{
        $msg = "<div class='alert alert-danger'>Failed! Please try again!</div>";
    }
}

elseif(isset($_POST['info-save']))
{
    //company info
    $editcinfosql = "UPDATE `company_info` SET `name`='".$_POST['name']."', `logo`='".$_POST['logo']."', `vision`='".$_POST['vision']."', `mission`='".$_POST['mission']."' WHERE 1";
    $editcinfoquery = mysqli_query($conn,$editcinfosql) or die('Oops! An Error occurred. Please try again.');
    if($editcinfoquery)
    {
        $target_dir = "../wp-content/uploads/sites/17/2018/09/";
        $target_file = $target_dir . basename($_FILES["file"]["name"]);
        move_uploaded_file($_FILES["file"]["tmp_name"], $target_file);
        $msg = "<div class='alert alert-success'>Updated Successfully!</div>";
        //echo '<script>window.location.href="/myweb/admin";</script>';
    }
    else{
        $msg = "<div class='alert alert-danger'>Failed! Please try again!</div>";
    }
}
elseif(isset($_POST['team-save']))
{
    $teamsql = "INSERT INTO `team`(`name`, `position`, `image`, `message`) VALUES ('".$_POST['name']."','".$_POST['position']."','".$_POST['photo']."','".$_POST['message']."')";
    $teamquery = mysqli_query($conn,$teamsql) or die("Oops! An Error occurred!");
    if($teamquery)
    {
        $target_dir = "../wp-content/uploads/sites/17/2018/06/";
        $msg = "<div class='alert alert-success'>Added Successfully!</div>";
    }
}
elseif(isset($_POST['service-save']))
{
    $servicesql = "INSERT INTO `services`(`name`, `image`, `description`) VALUES ('".$_POST['name']."','".$_POST['photo']."','".$_POST['description']."')";
    $servicequery = mysqli_query($conn,$servicesql) or die("Oops! An Error occurred!");
    if($servicequery)
    {
        $target_dir = "../wp-content/uploads/sites/17/2018/06/";
        $msg = "<div class='alert alert-success'>Added Successfully!</div>";
    }
}
elseif(isset($_POST['link-save']))
{
    $linksql = "INSERT INTO `social_links`(`name`, `link`) VALUES ('".$_POST['name']."','".$_POST['link']."')";
    $linkquery = mysqli_query($conn,$linksql) or die("Oops! An Error occurred!");
    if($linkquery)
    {
        $msg = "<div class='alert alert-success'>Added Successfully!</div>";
    }
}
elseif(isset($_POST['deletelink']))
{
    $linksql = "DELETE FROM `social_links` WHERE `id`='".$_POST['linkid']."'";
    $linkquery = mysqli_query($conn,$linksql) or die("Oops! An Error occurred!");
    if($linkquery)
    {
        $msg = "<div class='alert alert-success'>Deleted Successfully!</div>";
    }
}
elseif(isset($_POST['uplink']))
{
    $uplinksql = "UPDATE `social_links` SET `name`='".$_POST['name']."',`link`='".$_POST['link']."' WHERE `id`='".$_POST['id']."'";
    $uplinkquery = mysqli_query($conn,$uplinksql) or die("Oops! An Error occurred!");
    if($uplinkquery)
    {
        $msg = "<div class='alert alert-success'>Updated Successfully!</div>";
    }
}
?>
<div class="counsel-content-wrapper">
    <div class="counsel-content counsel-page">
    <div class="counsel-content-inner">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                <div id="primary" class="content-area clearfix">
                    <div id="page-415" class="post-415 page type-page status-publish hentry">
                        <div class="vc_row wpb_row vc_row-fluid">
                        <div class="wpb_column vc_column_container vc_col-sm-12">
                        <div class="vc_column-inner">
                            <div class="wpb_wrapper">
                            <?php if(isset($msg)){echo $msg;}?>
                            <div class="portfolio-wrapper text-center" data-css="&quot;&quot;">
                                <div class="image-gallery grid-layout portfolio-grid-layout" style="margin-bottom: -30px;" data-filter-stat="0" data-first-cat="">
                                <div class="isotope" data-cols="3" data-gutter="30" data-layout="fitRows" data-infinite="false">
                                    <!--  -->
                                    <div class="table-responsive">
                    <table class="table table-stripped table-bordered">
                        <tr>
                            <th>Name</th>
                            <th>Link</th>
                            <th>Actions</th>
                        <tr>
                        <?php while($linkdata = mysqli_fetch_array($mylinks)) { ?>
                        <tr>
                        <form name="" action="" method="post">
                            <td><input type="hidden" name="id" value="<?php echo $linkdata['id'];?>">
                            <input type="text" name="name" value="<?php echo $linkdata['name'];?>" class="form-control"></td>
                            <td><input type="text" name="link" value="<?php echo $linkdata['link'];?>" class="form-control"></td>
                            <td><button class="btn btn-info btn-sm" name="uplink" type="submit"><i class="fa fa-edit"></i> Update</button>
                            </form>
                            <!-- <form name="" action="" method="post">
                            <input type="hidden" name="linkid" value="<?php echo $linkdata['id'];?>">
                                <button class="btn btn-danger btn-sm" onclick="return confirm('Sure to delete?')" name="deletelink" type="submit"><i class="fa fa-trash"></i> Delete</button>
                            </form> -->
                            </td>
                        <tr>
                        <?php } ?>
                    </table>
                    </div>
                                   <article id="post-455" class="vc-portfolio">
                                    <div class="portfolio-wrap">
                                    <div class="portfolio-content-wrap">
                                        <div class="portfolio-title">
                                            <h3><a href="#" data-target="#linkmodal" data-toggle="modal" id="show-modal"></a></h3>
                                        </div>
                                    </div>
                                </div>
                                </article>
                    <!--  -->
                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>
</div>
<!-- Modals -->
<!-- logo -->
<div class="modal fade" id="logomodal" tabindex="-1" role="dialog" aria-labelledby="shortcode-rand-28" aria-hidden="true">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Edit Company Info.</h5><span class="modal-close icon-close" data-dismiss="modal"></span>
			</div>
            <form name="" action="" method="post">
			<div class="modal-body">
				<div class="wpb_text_column wpb_content_element " >
					<div class="wpb_wrapper row">
                    <div class="col-md-6 form-group"> 
                    <input type="text" name="name" value="<?php echo $info['name'];?>" class="form-control wpcf7-text" aria-invalid="false" id="name" placeholder="Name" required> 
                    </div>
                    <div class="col-md-6 form-group">
                    <input type="file" name="logo" value="<?php echo $info['logo'];?>" class="form-control wpcf7-text" aria-invalid="false" id="logo" required> 
                    </div>
                    <div class="col-md-12 form-group">
                    <label>Vision:</label>
                    <textarea name="vision" class="form-control wpcf7-text" aria-invalid="false" id="vision" placeholder="Type vision here"><?php echo $info['vision'];?></textarea>
                    </div>
                    <div class="col-md-12 form-group">
                    <label>Mission:</label>
                    <textarea name="mission" class="form-control wpcf7-text" aria-invalid="false" id="mission" placeholder="Type mission here"><?php echo $info['mission'];?></textarea> 
                    </div>
					</div>
				</div>
			</div>
            <div class="modal-footer">
            <button class="btn btn btn-default btn-light btn-shadowed shortcode-rand-67 counsel-inline-css" name="info-save" type="submit">Save</button>
            </div>
            </form>
		</div>
	</div>
</div>
<!-- ./logo -->
<!-- contact -->
<div class="modal fade" id="contactmodal" tabindex="-1" role="dialog" aria-labelledby="shortcode-rand-28" aria-hidden="true">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Edit contact details</h5><span class="modal-close icon-close" data-dismiss="modal"></span>
			</div>
            <form name="contact" action="" method="post">
			<div class="modal-body">
				<div class="wpb_text_column wpb_content_element " >
					<div class="wpb_wrapper row">
                    <div class="col-md-6 form-group"> 
                    <input type="text" name="email" value="<?php echo $info['email'];?>" class="form-control wpcf7-text" aria-invalid="false" id="email" placeholder="Email Address" required> 
                    </div>
                    <div class="col-md-6 form-group">
                    <input type="text" name="phone" value="<?php echo $info['phone'];?>" class="form-control wpcf7-text" aria-invalid="false" id="phone" placeholder="Phone" required> 
                    </div>
                    <div class="col-md-6 form-group">
                    <input type="text" name="address" value="<?php echo $location['address'];?>" class="form-control wpcf7-text" aria-invalid="false" id="address" placeholder="Address e.g. P.O Box 111" required> 
                    </div>
                    <div class="col-md-6 form-group">
                    <input type="text" name="location" value="<?php echo $location['location'];?>" class="form-control wpcf7-text" aria-invalid="false" id="location" placeholder="Location" required> 
                    </div>
                    <div class="col-md-12 form-group">
                    <input type="text" name="building" value="<?php echo $location['building'];?>" class="form-control wpcf7-text" aria-invalid="false" id="building" placeholder="Building e.g. Heights plaza, 6th floor"> 
                    </div>
                    <div class="col-md-12 form-group">
                    <input type="text" name="map" value="<?php echo $location['map'];?>" class="form-control wpcf7-text" aria-invalid="false" id="map" placeholder="Map url e.g. https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6304.829986131271!2d-122.4746968033092!3d37.80374752160443!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x808586e6302615a1%3A0x86bd130251757c00!2sStorey+Ave%2C+San+Francisco%2C+CA+94129!5e0!3m2!1sen!2sus!4v1435826432051"> 
                    </div>
                    
					</div>
				</div>
			</div>
            <div class="modal-footer">
            <button class="btn btn btn-default btn-light btn-shadowed shortcode-rand-67 counsel-inline-css" name="contact-save" type="submit">Save</button>
            </div>
            </form>
		</div>
	</div>
</div>
<!-- ./contact -->
<!-- team -->
<div class="modal fade" id="teammodal" tabindex="-1" role="dialog" aria-labelledby="shortcode-rand-28" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Add Management Team</h5><span class="modal-close icon-close" data-dismiss="modal"></span>
			</div>
			<form name="" action="" method="post">
			<div class="modal-body">
				<div class="wpb_text_column wpb_content_element " >
					<div class="wpb_wrapper row">
                    <div class="col-md-6 form-group"> 
                    <input type="text" name="name" value="" class="form-control wpcf7-text" aria-invalid="false" id="name" placeholder="Name" required> 
                    </div>
                    <div class="col-md-6 form-group">
                    <input type="text" name="position" value="" class="form-control wpcf7-text" aria-invalid="false" id="position" placeholder="Position" required> 
                    </div>
                    <div class="col-md-12 form-group">
                    <label for="logo">Photo:</label>
                    <input type="file" name="photo" value="" class="form-control wpcf7-text" aria-invalid="false" id="photo" required>
                    </div>
                    <div class="col-md-12 form-group">
                    <textarea name="message" class="form-control wpcf7-text" aria-invalid="false" id="message" placeholder="Type message here"></textarea> 
                    </div>
					</div>
				</div>
			</div>
            <div class="modal-footer">
            <button class="btn btn btn-default btn-light btn-shadowed shortcode-rand-67 counsel-inline-css" name="team-save" type="submit">Save</button>
            </div>
            </form>
		</div>
	</div>
</div>
<!-- ./team -->
<!-- service -->
<div class="modal fade" id="servicemodal" tabindex="-1" role="dialog" aria-labelledby="shortcode-rand-28" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Add Service</h5><span class="modal-close icon-close" data-dismiss="modal"></span>
			</div>
			<form name="" action="" method="post">
			<div class="modal-body">
				<div class="wpb_text_column wpb_content_element " >
					<div class="wpb_wrapper row">
                    <div class="col-md-12 form-group"> 
                    <input type="text" name="name" value="" class="form-control wpcf7-text" aria-invalid="false" id="name" placeholder="Name" required> 
                    </div>
                    <div class="col-md-12 form-group">
                    <label for="logo">Photo:</label>
                    <input type="file" name="photo" value="" class="form-control wpcf7-text" aria-invalid="false" id="photo" required>
                    </div>
                    <div class="col-md-12 form-group">
                    <textarea name="description" class="form-control wpcf7-text" aria-invalid="false" id="description" placeholder="Type description here"></textarea> 
                    </div>
					</div>
				</div>
			</div>
            <div class="modal-footer">
            <button class="btn btn btn-default btn-light btn-shadowed shortcode-rand-67 counsel-inline-css" name="service-save" type="submit">Save</button>
            </div>
            </form>
		</div>
	</div>
</div>
<!-- ./service -->
<!-- link -->
<div class="modal fade" id="linkmodal" tabindex="-1" role="dialog" aria-labelledby="shortcode-rand-28" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Add Link</h5><span class="modal-close icon-close" data-dismiss="modal"></span>
			</div>
			<form name="" action="" method="post">
			<div class="modal-body">
				<div class="wpb_text_column wpb_content_element">
					<div class="wpb_wrapper row">
                    <div class="col-md-12 form-group"> 
                    <input type="text" name="name" value="" class="form-control wpcf7-text" aria-invalid="false" id="name" placeholder="Social Name" required> 
                    </div>
                    <div class="col-md-12 form-group">
                    <label for="logo">Link:</label>
                    <input type="text" name="link" value="" class="form-control wpcf7-text" aria-invalid="false" id="link" required placeholder="Type url e.g http://www.facebook.com/foobar">
                    </div>
					</div>
				</div>
			</div>
            <div class="modal-footer">
            <button class="btn btn btn-default btn-light btn-shadowed shortcode-rand-67 counsel-inline-css" name="link-save" type="submit">Save</button>
            </div>
            </form>
		</div>
	</div>
</div>
<!-- ./link -->
<!-- view link -->
<div class="modal fade" id="viewlinkmodal" tabindex="-1" role="dialog" aria-labelledby="shortcode-rand-28" aria-hidden="true">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">View Social Links</h5><span class="modal-close icon-close" data-dismiss="modal"></span>
			</div>
			
			<div class="modal-body">
				<div class="wpb_text_column wpb_content_element">
					<div class="wpb_wrapper row">
                    <!-- table -->
                    <div class="table-responsive">
                    <table class="table table-stripped table-bordered">
                        <tr>
                            <th>Name</th>
                            <th>Link</th>
                            <th>Actions</th>
                        <tr>
                        <?php while($linkdata = mysqli_fetch_array($mylinks)) { ?>
                        <tr>
                        <form name="" action="" method="post">
                            <td><input type="hidden" name="id" value="<?php echo $linkdata['id'];?>">
                            <input type="text" name="name" value="<?php echo $linkdata['name'];?>" class="form-control"></td>
                            <td><input type="text" name="link" value="<?php echo $linkdata['link'];?>" class="form-control"></td>
                            <td><button class="btn btn-info btn-sm" name="uplink" type="submit"><i class="fa fa-edit"></i> Update</button>
                            </form>
                            <form name="" action="" method="post">
                            <input type="hidden" name="linkid" value="<?php echo $linkdata['id'];?>">
                                <button class="btn btn-danger btn-sm" onclick="return confirm('Sure to delete?')" name="deletelink" type="submit"><i class="fa fa-trash"></i> Delete</button>
                            </form>
                            </td>
                        <tr>
                        <?php } ?>
                    </table>
                    </div>
                    <!-- ./table -->
                   
					</div>
				</div>
			</div>
            <div class="modal-footer">
            
            </div>
            
		</div>
	</div>
</div>
<!-- ./view link -->
<!-- ./Modals -->
    
    <div class="vc_row-full-width vc_clearfix"></div></div></div></div></div></div></div></div></div>

<?php require_once("footer.php"); ?>