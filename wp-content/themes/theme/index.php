<?php get_header(); ?>

<div class="container-fluid">
    <div class="row">
        <div class="col-sm-8 blog-main">
            <? if (have_posts()) {
                while (have_posts()) {
                    the_post();
                    get_template_part('templates/news', get_post_format());
                }

                echo '<div class="pagination">' . paginate_links(
                        array(
                            'prev_text' => __('назад'),
                            'next_text' => __('далее')
                        )) . '</div>';
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

