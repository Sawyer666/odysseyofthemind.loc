<div class="blog-post col-sm-6">
    <div class="blog-photo-data">
        <a href="<? the_permalink() ?>">
            <div class="post-thumb">
                <? the_post_thumbnail(); ?>
            </div>

            <div class="photo_content">
                <p class="post-info">
                    <? echo the_time('j F Y'); ?>
                </p>
                <h4 class="blog-post-title">
                    <? the_title() ?>
                </h4>
                <p><?php echo wp_trim_excerpt(); ?></p>
            </div>
        </a>
    </div>
</div>