<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="ja" xml:lang="ja" style="margin-top: 0 !important;">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta property="og:locale" content="ja_JP">

    <title>
        <?php if (is_front_page() || is_home()) {
            echo get_bloginfo('name');
        } else {
            wp_title('|', true, 'right');
            echo bloginfo('name');
        } ?>
    </title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.css" />
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>

    <?php wp_head(); ?>

</head>

<style>
.dt {
    font-weight: bold;
    width: 126px;
    flex-shrink: 0;
    font-size: 17px;
}

.wpcf7-form>p {
    width: 100%;
    display: flex;
    margin-bottom: clamp(12px, 0.629rem + 0.52vw, 20px);
}

.wpcf7-form-control-wrap {
    width: 100%;
    line-height: 1.88;
    font-size: 17px;
}

.wpcf7-form-control-wrap>input {
    padding: 0.8em 1.25em;
    border: 0;
    border-radius: 0.8rem;
    width: 100%;
    max-width: 100%;
    background-color: #f4f4f4;
    line-height: 1.6;
    resize: vertical;
}

.wpcf7-form-control-wrap>textarea {
    padding: 0.8em 1.25em;
    border: 0;
    border-radius: 0.8rem;
    width: 100%;
    max-width: 100%;
    background-color: #f4f4f4;
    line-height: 1.6;
    resize: vertical;
}

.wpcf7-form-control .wpcf7-submit {
    width: 270px;
}

.wpcf7-submit {
    margin: auto;
}

.wpcf7-list-item-label {
    font-size: 16px;
}

.wpcf7-form>p>input[type=submit] {
    background-color: var(--color-accent-pink);
    color: #fff;
    font-weight: bold;
    padding: 0.4em 1em;
    border-radius: 5px;
    font-size: clamp(20px, 0.97rem + 0.13vw, 18px);
    display: inline-flex;
    align-items: center;
    gap: 3px;
}

.p-merit__list-item-title-icon>a {
    color: white;
}
</style>

<style id='classic-theme-styles-inline-css' type='text/css'>
/*! This file is auto-generated */
.wp-block-button__link {
    color: #fff;
    background-color: #32373c;
    border-radius: 9999px;
    box-shadow: none;
    text-decoration: none;
    padding: calc(.667em + 2px) calc(1.333em + 2px);
    font-size: 1.125em
}

.wp-block-file__button {
    background: #32373c;
    color: #fff;
    text-decoration: none
}
</style>

<?php
global $post;

if ($post->post_type != "page") {
    $post_slug = $post->post_type;
} else {
    $post_slug = $post->post_name;
}
if (is_archive() || is_category() || is_single()) {
    $nav_last_category = [];
    $nav_query_categories = get_the_category();
    if (!empty($nav_query_categories)) {
        $nav_last_category = end(array_values($nav_query_categories));
    }
    if (!empty($nav_last_category)) {
        $post_slug = $nav_last_category->slug;
    }
}
?>

<body class="home blog" style="margin-top:-27px;">
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-W6P4NRB" height="0" width="0"
            style="display:none;visibility:hidden"></iframe></noscript>

    <!-- End Google Tag Manager (noscript) -->
    <section class="Rectangke-1">
        <div class="header_logo">
            Hello
        </div>
    </section>

    <footer class=" l-footer" id="footer">
        <p class="l-footer__copyright">Copyright(C) XXXXXXX Corporation. All rights reserved.</p>
    </footer>
    <link rel='stylesheet' id='mw-wp-form-css'
        href='https://promotion-cast.com/lp02/wp-content/plugins/mw-wp-form/css/style.css?ver=6.3.2' type='text/css'
        media='all' />
    <script type='text/javascript' src='https://promotion-cast.com/lp02/wp-includes/js/jquery/jquery.min.js?ver=3.7.0'
        id='jquery-core-js'>
    </script>
    <script type='text/javascript'
        src='https://promotion-cast.com/lp02/wp-includes/js/jquery/jquery-migrate.min.js?ver=3.4.1'
        id='jquery-migrate-js'></script>
    <script type='text/javascript'
        src='https://promotion-cast.com/lp02/wp-content/plugins/mw-wp-form/js/form.js?ver=6.3.2' id='mw-wp-form-js'>
    </script>
    <script>
    {
        var tUrl = 'https://promotion-cast.com/lp02/wp-content/themes/promotion-cast-2023/'
    }
    </script>
    <script src="https://promotion-cast.com/lp02/wp-content/themes/promotion-cast-2023/js/lib.min.js?v=1603146349">
    </script>
    <script src="https://polyfill.io/v2/polyfill.min.js?features=IntersectionObserver"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lozad.js/1.6.0/lozad.min.js"></script>
    <script src="https://ajaxzip3.github.io/ajaxzip3.js" charset="UTF-8"></script>
    <script src="https://cdn.jsdelivr.net/npm/vanilla-autokana@1.1.6/dist/autokana.min.js"></script>
    <script src="https://promotion-cast.com/lp02/wp-content/themes/promotion-cast-2023/js/form.min.js?v=1603146349">
    </script>
    <script src="https://promotion-cast.com/lp02/wp-content/themes/promotion-cast-2023/js/smoothscroll.js?v=1696837138">
    </script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js">
    </script>
    <script src="https://promotion-cast.com/lp02/wp-content/themes/promotion-cast-2023/js/script.js?v=1699859468">
    </script>
    <script>
    document.addEventListener("DOMContentLoaded", function() {
        AutoKana.bind("#name", "#kana", {
            katakana: true
        });
    });
    </script>

</body>

</html>