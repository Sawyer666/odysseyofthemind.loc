<?php get_header();?>

<div class="row">
	<div class="col-sm-8 blog-main">
		<? if ( have_posts() ) {
			while ( have_posts() ) {
				the_post(); ?>
				<div class="blog-post">
					<h2 class="blog-post-title"><? the_title() ?></h2>

					<div class="blog-post-meta"><? the_content(); ?></div>
				</div>
			<? }
		}
		?>
	</div>
    <div class="col-sm-3 col-sm-offset-1 blog-sidebar">
		<? if ( is_active_sidebar( 'sidebar' ) ) {
			dynamic_sidebar( 'sidebar' );
		} ?>
        <div class="sidebar-module"></div>
    </div>
</div>
<?php get_footer(); ?>

