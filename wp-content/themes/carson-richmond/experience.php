<?php
	/* Template Name: Experience
	   Author: Carson Richmond */
 get_header(); 



?>

<div class="row">
	<div class="col-md-12 pageHeader" style="background-color: # ;">
		<h1>Experience</h1>
	</div>
</div>
<div class="row">
	<div class="col-md-12 resume-download">
		<a class="btn download-btn" href="#">Download My Resume</a>
	</div>
</div>

<!--Add CPT UI/ACF code-->
<?php 
add_action('experience_loop');	

function experience_loop() {
	$args = array(
		'post_type' => 'experiences',
	);

	$myExperiences = new WP_Query($args);
	$employer = get_field('employer');
	$location = get_field('location');
	$timeFrame = get_field('time_frame');

	if($myExperiences->have_posts()){
		while($myExperiences->have_posts()): $myExperiences->the_post();
		
};?>
<div class="row">
	<div class="col-md-6">
		<h2><?php echo $employer; ?></h2>
		<p><?php echo $location; ?></p><!--Location-->
		<p><?php echo $timeFrame; ?></p><!--Time Frame-->
		<ul>
			<?php if (have_rows('positions_held')) : while (have_rows('positions_held')) : the_row();
				//vars
				$position = get_sub_field('position'); ?>

				<li><?php echo $position; ?></li>

			<?php endwhile; endif; /*ends position repeater*/ ?>
		</ul>
	</div>
	<div class="col-md-6">
		<h3>Responsibilities</h3>
		<ul>
			<?php if (have_rows('responsibilities')) : while (have_rows('responsibilities')) : the_row();
					
				$responsibility = get_sub_field('responsibility'); ?>

				<li><?php echo $responsibility; ?></li>

			<?php endwhile; endif; /*ends responsibility repeater*/ ?>
		</ul>
	</div>
</div>

<?php } endwhile; endif;/*ends experience_loop function*/?>

<?php get_footer();?>