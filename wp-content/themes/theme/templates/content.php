<div class="post_page">
    <h2 class="blog-post-title">
        <? if (is_single())
            the_title();
        else if (is_page())
            the_title();
        ?>
    </h2><? the_content(); ?>
</div>