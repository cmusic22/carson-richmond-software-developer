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

<?php $experiences = new WP_Query(array(
	'post_type' => 'experiences'));?>

<?php while($experiences->have_posts()) : $experiences->the_post();
		$employer = get_field('employer');
		$location = get_field('location');
		$timeFrame = get_field('time_frame');
		$companyWebsite = get_field('company_website');

	?>

<div class="row">
		<div class="col-md-3 row-text">
			<h2><?php echo $employer; ?></h2>
			<p><?php  echo $location; ?></p><!--Location-->
			<p><?php echo $timeFrame; ?></p><!--Time Frame-->
			<p><?php echo $companyWebsite; ?></p>
		</div>
		<div class="col-md-3 row-text">
			<h3>Positions Held</h3>
			<ul>
				<?php if (have_rows('positions_held')) : while (have_rows('positions_held')) : the_row();
					//vars
					$position = get_sub_field('position'); ?>

					<li><?php echo $position; ?></li>

				<?php endwhile; endif; /*ends position repeater*/ ?>
			</ul>
		</div>
		<div class="col-md-6 row-text">
			<h3>Responsibilities</h3>
			<ul>
				<?php if (have_rows('responsibilities')) : while (have_rows('responsibilities')) : the_row();
						
					$responsibility = get_sub_field('responsibility'); ?>

					<li><?php echo $responsibility; ?></li>

				<?php endwhile; endif; /*ends responsibility repeater*/ ?>
			</ul>
		</div>
		
</div>

<?php endwhile; ?>


<?php get_footer();?>