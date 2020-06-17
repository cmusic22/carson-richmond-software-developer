<?php
	/* Template Name: Contact Me
	   Author: Carson Richmond */
 get_header();

 $headerBGcolor = get_field('header_bg_color');
 $contactCTA = get_field('contact_cta');
 $emailAddress = get_field('email_address');
 $linkedInURL = get_field('linked_in_url');
 $linkedInIMG = get_field('linked_in_array');
 $linkedInIMGurl = $linkedInIMG['url'];
 $linkedInIMGalt = $linkedInIMG['alt'];

?>

<div class="row">
	<div class="col-md-12 pageHeader" style="background-color: <?php echo $headerBGcolor; ?>;">
		<h1>Contact Me</h1>
	</div>
</div>
<div class="row">
	<div class="col-md-6 row-text">
		<!--contact info/description-->
		<p><?php echo $contactCTA; ?></p>
		<p>Email: <a href="mailto:<?php echo $emailAddress; ?>"> <?php echo $emailAddress; ?></a></p>
		<p>
			<a href="<?php echo $linkedInURL; ?>">
				<img class="img-fluid" src="<?php echo $linkedInIMGurl; ?>" alt="<?php echo $linkedInIMGalt; ?>" title="">
			</a>
		</p>
	</div>
	<div class="col-md-6">
		<!--Gravity Form-->
		<?php gravity_form( 1, false, false, false, '', false); ?>
	</div>
</div>
<?php get_footer();?>