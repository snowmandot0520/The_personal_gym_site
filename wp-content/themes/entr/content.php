<article class="content-article">                   
    <div <?php post_class('news-item archive-item'); ?>>
        <?php
        do_action('entr_archive_before_posts');
        $contents = get_theme_mod('blog_layout', array('image', 'title', 'meta', 'excerpt'));
        foreach ($contents as $content) {
            do_action('entr_archive_' . $content);
        }
        do_action('entr_archive_after_posts');
        ?>
    </div>
</article>
