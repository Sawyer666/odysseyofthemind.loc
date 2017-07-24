<?php get_header(); ?>

<div class="container-fluid">
    <div class="row">
        <div class="col-sm-8 blog-main">
            <div class="row">
                <? if (have_posts()) {
                    $i = 0;
                    while (have_posts()) {
                        the_post();
                        get_template_part('templates/photo', get_post_format());
                        $i++;
                        if ($i == 2) {
                            $i = 0 ?>
                            <div class="clearfix"></div>
                            <?
                        }
                    }
                } ?>
            </div>
            <? echo '<div class="pagination">' . paginate_links(
                    array(
                        'prev_text' => __('назад'),
                        'next_text' => __('далее')
                    )) . '</div>';
            ?>
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

