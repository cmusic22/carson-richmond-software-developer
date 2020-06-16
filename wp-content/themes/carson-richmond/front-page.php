<?php get_header();

$mainTagline = get_field('main_tagline');
$secondTagline = get_field('secondary_tagline');
$backgroundImage = get_field('home_head_background_image');
$CTAheader = get_field('cta_header');
$CTAcontent = get_field('cta_content');
$CTAlink = get_field('cta_link');
$CTAbuttonText = get_field('cta_button_text');

?>
		 

		<div class="home-head-container" style="background-image: url(<?php echo $backgroundImage; ?>);">
			<div class="home-head-text">	  
		    	<h1><?php echo $mainTagline; ?></h1>
		    	<h2 class="brand h2"><?php echo $secondTagline; ?></h2>
			</div>
		</div>

		<?php if (have_rows('text_image_blocks')) : while (have_rows('text_image_blocks')) : the_row(); 
			//vars
			$blockHead = get_sub_field('block_head');
			$blockContent = get_sub_field('block_content');
			$backgroundColor = get_sub_field('content_background');
			$buttonText = get_sub_field('button_text');
			$buttonURL = get_sub_field('button_url');
			$blockImage = get_sub_field('block_image');
			$imgUrl = $blockImage['url'];
			$imgAlt = $blockImage['alt'];
			$right = get_sub_field('right_left');


			?>
			<?php if($right):?>
				<div class="row ">
					<div class="col-md-6 homeImg">
						<img class="img-fluid" src="<?php echo $imgUrl ;?>" alt="<?php echo $imgAlt; ?>">
					</div>
					<div class="col-md-6 row-text" style="background-color:<?php echo $backgroundColor; ?>;">
						<h2><?php echo $blockHead; ?></h2>
						<p><?php echo $blockContent; ?></p>
						<a class="btn btn-primary" href="<?php echo $buttonURL ;?>"><?php echo $buttonText; ?></a>
					</div>
				</div>

			<?php else:?>
			<div class="row ">
				<div class="col-md-6 row-text" style="background-color:<?php echo $backgroundColor; ?>;">
					<h2><?php echo $blockHead; ?></h2>
					<p><?php echo $blockContent; ?></p>
					<a class="btn btn-primary" href="<?php echo $buttonURL; ?>"><?php echo $buttonText; ?></a>
				</div>
				<div class="col-md-6 homeImg">
					<img class="img-fluid" src="<?php echo $imgUrl; ?>" alt="<?php echo $imgAlt; ?>">
				</div>
			</div>
		<?php endif;?>

		<?php endwhile; endif; ?>

		<div class="row contact-me-row">
			<div class="col-md-12 contact-me-text jewelbg">
				<h3><?php echo $CTAheader ;?></h3>
				<a class="btn btn-primary" href="<?php echo $CTAlink ;?>"><?php echo $CTAbuttonText ;?></a>
			</div>
		</div>


<?php get_footer();?> 