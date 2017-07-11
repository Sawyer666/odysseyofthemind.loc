
<div class="blog-post">
    <h2 class="blog-post-title">
        <? if (is_single())
            the_title();
        else { ?>
            <a href="<? the_permalink() ?>">
                <? the_title() ?>
            </a>
        <? } ?>
    </h2>
    <div class="blog-post-meta"><? the_content(); ?></div>
</div>