<?php
	/* Template Name: Portfolio
	   Author: Carson Richmond */
 get_header();

?>

<div class="row">
	<div class="col-md-12 pageHeader" style="background-color: # ;">
		<h1>Portfolio</h1>
	</div>
</div>


<?php 
	/*start post type loop*/
	$portfolioEntry = new WP_Query(array(
		'post_type' => 'portfolio_entry'));?>

<?php while($portfolioEntry->have_posts()) : $portfolioEntry->the_post();
		$projectName = get_field('project_name');
		$projectDescription = get_field('project_description');
		$thumbnail = get_field('project_thumbnail');
		$thumbnailURL = $thumbnail['url'];
		$thumbnailAlt = $thumbnail['alt'];
		$gitUrl = get_field('repository');
?>

<div class="row">
		<div class="col-md-3 row-text">
			<h2><?php echo $projectName; ?></h2>
			<img src="<?php echo $thumbnailURL; ?>" alt="<?php echo $thumbnailAlt; ?>">
			<p>Repository: <a href="<?php echo $gitUrl;?>" target="_blank"><?php echo $gitUrl; ?></a></p>
		</div>
		<div class="col-md-3 row-text">
			<h3>What was used:</h3>
			<ul>
				<?php if (have_rows('languages_used')) : while (have_rows('languages_used')) : the_row();
					//vars
					$lang = get_sub_field('languages'); ?>

					<li><?php echo $lang; ?></li>

				<?php endwhile; endif; /*ends language repeater*/ ?>
			</ul>
		</div>
		<div class="col-md-6 row-text">
			<h3>Project Description</h3>
			<p><?php echo $projectDescription; ?></p>

		</div>
		
</div>

<?php endwhile; ?>


<?php get_footer();?>