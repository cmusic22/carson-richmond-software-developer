<?php get_header();


$pageHead = get_field('page_head');
$headerBackground = get_field('header_background_image');
$CTAheader = get_field('cta_header');
$CTAlink = get_field('cta_link');
$CTAbuttonText = get_field('cta_button_text');


?>


<div class="row">
	<div class="col-md-12 pageHeader" style="<?php echo $headerBackground; ?>">
		<h1><?php echo $pageHead; ?></h1>
	</div>
</div>

<?php if (have_rows('content_image_row')) : while (have_rows('content_image_row')) : the_row(); 
		$sectionHead = get_sub_field('section_head');
		$sectionContent = get_sub_field('section_content');
		$rowImage = get_sub_field('row_image');
		$imgURL = $rowImage['url'];
		$imgAlt = $rowImage['alt'];
		$rowTextBGcolor = get_sub_field('row_text_bg_color');
		$right = get_sub_field('right_left');
	?>

	<?php if($right):?>
		<div class="row">
			<div class="col-md-6">
				<img class="img-fluid fill-space" src="<?php echo $imgURL; ?>" alt="<?php echo $imgAlt; ?>">
			</div>
			<div class="col-md-6 row-text" style="background-color:<?php echo $rowTextBGcolor; ?>">
				<h2><?php echo $sectionHead; ?></h2>
				<p><?php echo $sectionContent; ?></p>
			</div>
			
		</div>
	<?php else: ?>	
		<div class="row">
			<div class="col-md-6 row-text" style="background-color:<?php echo $rowTextBGcolor; ?>">
				<h2><?php echo $sectionHead; ?></h2>
				<p><?php echo $sectionContent; ?></p>
			</div>
			<div class="col-md-6">
				<img class="img-fluid" src="<?php echo $imgURL; ?>" alt="<?php echo $imgAlt; ?>">
			</div>
		</div>
	<?php endif; ?>
<?php endwhile; endif; ?>

<div class="row contact-me-row">
	<div class="col-md-12 contact-me-text jewelbg">
		<h3><?php echo $CTAheader ;?></h3>
		<a class="btn btn-primary" href="<?php echo $CTAlink ;?>"><?php echo $CTAbuttonText ;?></a>
	</div>
</div>

<?php get_footer();?>