<article class="blog-post-news">
    <div class="post-news-thumb">
        <?
        if (has_post_thumbnail())
            the_post_thumbnail();
        else { ?>
            <img src="<? bloginfo('template_directory'); ?>/img/news.png"/>
        <? } ?>
    </div>

    <h2 class="blog-news-title">
        <a href="<? the_permalink() ?>">
            <? the_title() ?>
        </a>
    </h2>
    <p class="post-info">
        <? echo the_time('j F Y'); ?>
    </p>
    <div class="blog-post-meta">
        <? the_content(); ?>
        <a class="btn btn-default" href="<?php the_permalink() ?>">
            Читать далее
            <span class="triang"></span>
        </a>
    </div>
</article>