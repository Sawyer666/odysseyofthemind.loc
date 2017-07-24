<?php get_header(); ?>
<? include __DIR__ . '/templates/flex_slider.php' ?>
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-8 blog-main">
            <? if (have_posts()) {
                while (have_posts()) {
                    the_post();
                    get_template_part('templates/content', get_post_format());
                }
            } ?>
        </div>
        <div class="col-sm-3 col-sm-offset-1 blog-sidebar">
            <? if (is_active_sidebar('sidebar')) {
                dynamic_sidebar('sidebar');
            } ?>
            <div class="sidebar-module"></div>
        </div>
    </div>
</div>
</div>
<?php get_footer(); ?>

