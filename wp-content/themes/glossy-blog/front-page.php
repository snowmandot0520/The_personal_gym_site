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

    .wpcf7-submit{
        margin:auto;
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
<!-- <style id='global-styles-inline-css' type='text/css'>
/*********************************
    LAYOUT SET
*********************************/

/*---------- header ----------*/
.l-header {
    position: sticky;
    top: 0;
    z-index: 1512px;
    height: 84px;
    background: #D9D9D9;
 
}

.l-header__inner {
    padding-top: clamp(10px, -16.286px + 2.567vw, 33px);
}

.l-header__content {
    display: flex;
    justify-content: space-between;
    padding-left: 18.7vw;
    align-items: center;
}

.l-header__logo a {
    width: 16.3vw;
    display: block;
}

.l-header__logo .p-cta__btn a {
    color: var(--color-accent-pink);
    font-size: 13px;
    letter-spacing: -0.6px;
    background: linear-gradient(90deg, rgba(239, 115, 29, 1) 0%, rgba(240, 57, 153, 1) 100%);
    width: 50px;
}

.l-header__nav {
    background-color: #fff;
    display: flex;
    align-items: center;
    box-shadow: 0px 6px 10px 0px #0000001a;
    border-radius: 44px 0 0 42px;
    padding: 0.8em 0.75em 0.8em 2.19vw;
    gap: 1.72vw;
}

/* .l-header__nav li:nth-of-type(2) {
  padding-right: 2.08vw;
} */

.l-header__nav .p-cta__btn a {
    width: clamp(165px, 102.143px + 6.138vw, 220px);
    font-size: clamp(12px, 7.429px + 0.446vw, 16px);
    line-height: 1.5;
}

.l-header__nav .p-cta__btn span {
    font-size: clamp(10px, 7.714px + 0.223vw, 12px);
}

.l-header__nav-item a {
    font-size: clamp(10px, 4.286px + 0.558vw, 15px);
    font-weight: bold;
    color: #071631;
}

.l-header__hamburger {
    display: none;
}

.l-header__nav li:first-of-type {
    display: none;
}

@media screen and (max-width: 1920px) {
    .l-header__content {
        display: flex;

        gap: clamp(12px, -5.107rem + 9.15vw, 94px);
        padding-left: clamp(12px, -0.536rem + 2.01vw, 30px);
    }
}

@media screen and (max-width: 1024px) {
    .l-header {
        height: initial;
    }

    .l-header__content {
        justify-content: space-between;
    }

    .l-header__inner {
        background-color: #fff;
        padding-top: 0;
    }

    .l-header__logo {
        position: relative;
        z-index: 100;
    }

    .l-header__logo a {
        min-width: 203px;
    }

    .l-header__nav {
        position: fixed;
        inset: 0;
        background-color: #fff;
        flex-direction: column;
        border-radius: 0;
        background-image: url(../img/header-bg-menu-01.jpg);
        background-repeat: no-repeat;
        background-position: right center;
        background-size: contain;
        align-items: flex-start;
        padding: 100px 10.7vw 40px;
        /* width: 100vw; */
        display: none;
    }

    .l-header__hamburger {
        display: flex;
        flex-direction: column;
        gap: 6px;
        padding: 18px 16px;
        position: relative;
        z-index: 100;
    }

    .l-header__hamburger span {
        width: 24px;
        height: 3px;
        display: block;
        background-color: #000000;
        transition: 0.3s;
        border-radius: 35px;
    }

    .l-header__hamburger span:nth-of-type(2) {
        width: 62.5%;
    }

    .l-header__hamburger.active span:nth-of-type(1) {
        transform: translateY(6px) rotate(-45deg);
    }

    .l-header__hamburger.active span:nth-of-type(2) {
        opacity: 0;
    }

    .l-header__hamburger.active span:nth-of-type(3) {
        transform: translateY(-12px) rotate(45deg);
    }

    .l-header__nav.active-nav {
        display: flex;
        justify-content: space-between;
    }

    /* .l-header__nav li:nth-of-type(2) {
    padding-right: 0;
  } */

    .l-header__nav li:first-of-type {
        display: block;
    }

    .l-header__nav-item {
        width: 100%;
    }

    .l-header__nav-item a {
        font-size: 3.73vw;
        width: 100%;
    }

    .l-header__nav .p-cta__btn::before {

        color: var(--color-accent-pink);
        font-size: 13px;
        letter-spacing: -0.6px;
    }

    .l-header__nav .p-cta__btn a {
        width: 100%;
        font-size: 18px;
        margin-top: 0.5em;
    }

    .l-header__nav .p-cta__btn span {
        font-size: 14px;
    }
}

/*---------- footer ----------*/
.l-footer * {
    line-height: 1.5;
}

.l-footer {
    background-color: #fff;
}

.l-footer__main {
    padding: clamp(45px, 34.078px + 2.913vw, 90px) 0;
    text-align: center;
}

.l-footer__logo {
    width: 313px;
    margin: 0 auto 47px;
}

.l-footer__nav {
    display: flex;
    justify-content: center;
    gap: 30px;
    margin-bottom: 30px;
}

.l-footer__nav-item a {
    font-size: clamp(10px, 8.786px + 0.324vw, 15px);
    color: #071631;
}

.l-footer__menu-item a {
    width: 100%;
    font-size: clamp(10px, 8.786px + 0.324vw, 15px);
    color: #909090;
}

.l-footer__menu {
    display: flex;
    justify-content: center;
    gap: 30px;
}

.l-footer__menu-item {
    position: relative;
    color: #909090;
    display: flex;
    gap: 0.5em;
    align-items: center;
}

.l-footer__menu-item::before {
    content: "";
    width: 0.7em;
    aspect-ratio: 1 / 1;
    display: block;
    border-top: 2px solid #909090;
    border-right: 2px solid #909090;
    transform: rotate(45deg);
}

.l-footer__copyright {
    text-align: center;
    font-size: clamp(10px, 9.029px + 0.259vw, 14px);
    color: #fff;
    background-color: #071631;
    line-height: 1.36;
    padding: 0.7em 0;
}

@media screen and (max-width: 768px) {
    .l-footer__nav {
        display: none;
    }

    .l-footer__logo {
        width: 184px;
        margin-bottom: 41px;
    }

    .l-footer__menu-item a {
        font-size: 13px;
    }

    .wrapblog>ul {
        flex-wrap: wrap;
    }
}

/*********************************
    COMPONENT SET
*********************************/
.l-contents {
    margin-top: -82px;
}

.l-page .md-mv .en {
    color: #f0565b;
    font-family: "Pacifico", cursive;
}

.l-page .md-mv .title {
    color: #f0565b;
}

.l-page .bread {
    background-color: #fff;
}

.page-id-72 .p-entry__privacy {
    display: none;
}

.page-id-2302 .p-entry__privacy {
    display: none;
}

.l-blog .main .recommend {
    background: none;
}

.l-single .main .mv {
    background: url(../img/blog_mv_bg@2x.jpg) no-repeat 50% / cover;
    padding-top: 23rem;
    padding-bottom: 14rem;
    color: #fff;
    text-align: center;
}

@media screen and (max-width: 1024px) {
    .l-contents {
        margin-top: 0;
    }
}

@media screen and (max-width: 768px) {
    .l-single .main .mv {
        background: url(../img/blog_mv_bg_sp.jpg) no-repeat 50% / cover;
        padding-top: 8.38rem;
        padding-bottom: 5.53rem;
    }

    .page-id-2302 .l-entry .main .entry .entryform-dl .dl-in dt {
        min-width: 120px;
    }
}

/*---------- inner ----------*/
.c-inner {
    max-width: 1250px;
    margin: 0 auto;
    padding: 0 25px;
    height: 100%;
}

.c-inner--narrow {
    max-width: 1050px;
    margin: 0 auto;
    padding: 0 25px;
}

/*---------- heading ----------*/
.c-common__h2 {
    text-align: center;
    margin-bottom: 32px;
}

.c-common__h2-en {
    font-family: var(--font-Pacifico);
    color: var(--color-accent-pink);
    font-size: clamp(26px, 1.473rem + 0.65vw, 36px);
    line-height: 1.7;
    margin-bottom: 0.27em;
}

.c-common__h2-jp {
    font-size: clamp(24px, 1.227rem + 1.17vw, 42px);
    font-weight: bold;
    line-height: 1.3;
    word-break: keep-all;
    
}

.c-common__h2-jp-first {
    font-size: clamp(24px, 1.227rem + 1.17vw, 42px);
    font-weight: bold;
    line-height: 1.3;
    word-break: keep-all;
}

.c-common__h2-jp-second {
    display: none;
    font-size: clamp(24px, 1.227rem + 1.17vw, 42px);
    font-weight: bold;
    line-height: 1.3;
    word-break: keep-all;
    
}

@media screen and (max-width: 425px) {
    .c-common__h2-jp-first {
        display: none
    }

    .c-common__h2-jp-second {
        display: block;
}



/*---------- cta ----------*/
.p-cta__btn {
    text-align: center;
    position: relative;
}

.p-cta__btn a {
    width: 400px;
    padding: 0.5em 0;
    background: linear-gradient(90deg,
            rgba(239, 115, 29, 1) 0%,
            rgba(240, 57, 153, 1) 100%);
    color: #fff;
    display: block;
    box-shadow: 0px 3px 10px 0px #0000001a;
    font-weight: 500;
    border-radius: 50px;
    margin: 0 auto;
    font-size: clamp(18px, 1.064rem + 0.26vw, 22px);
    font-weight: 700;
}

.p-cta__btn span {
    position: relative;
    display: flex;
    gap: 0.5em;
    align-items: center;
    justify-content: center;
}

.p-cta__btn a span::before,
.p-cta__btn a span::after {
    height: 1em;
    content: "";
}

.p-cta__btn a span::before {
    border-left: solid 2px;
    left: 0;
    transform: rotate(-30deg);
}

.p-cta__btn a span::after {
    border-right: solid 2px;
    right: 0;
    transform: rotate(30deg);
}

@media screen and (max-width: 768px) {
    .p-cta__btn a {
        width: 294px;
    }
}

.p-entry__btn span {
    border: 1px solid #e55749;
    border-radius: 32px;
    font-weight: bold;
    color: #fff;
    background-color: #e55749;
    width: 270px !important;
    display: block;
    margin: 0 auto;
}

.p-entry__btn span input {
    display: inline-block;
    padding: 1.4em;
    border: 0;
    width: 100%;
    height: 100%;
    font-size: inherit;
    font-weight: inherit;
    line-height: 1;
    color: inherit;
    background: transparent;
    outline: none;
    -webkit-transition: color 0s;
    transition: color 0s;
}

.p-entry__privacy {
    font-size: 14px;
    margin-bottom: 1em;
}

.p-entry__privacy>p {
    padding: 0 10px
}

.p-entry__privacy a {
    text-decoration: underline;
    font-size: inherit;
}

@media screen and (max-width: 768px) {
    .p-entry__btn span input {
        padding: 13px 63px;
    }
}

/*********************************
    UTILITY SET
*********************************/
/*---------- SP/PC ----------*/
.u-sp-only {
    display: none;
}

.u-pc-only {
    display: block;
}

@media screen and (max-width: 768px) {
    .u-sp-only {
        display: block;
    }

    .u-pc-only {
        display: none;
    }
}

/*---------- font color ----------*/
.u-color-pink {
    color: var(--color-accent-pink);
}

.u-color-yellow {
    color: #feeb35;
}

/*---------- font family ----------*/
.u-font-en {
    font-family: "Roboto";
}

/*---------- display ----------*/
.u-inline-block {
    display: inline-block;
}

/*---------- text-align ----------*/
.u-text-center {
    text-align: center;
}

/*---------- animation ----------*/
@keyframes slide {
    0% {
        transform: translateX(0%);
    }

    100% {
        transform: translateX(-100%);
    }
}

.p-about__main-list-item-flex-img-img {
    border-radius: 50% !important;
}



/*--------------------------------
A Modern CSS Reset
--------------------------------*/
/* Box sizing rules */
*,
*::before,
*::after {
    box-sizing: border-box;
}

/* Remove default margin */
body,
h1,
h2,
h3,
h4,
p,
figure,
blockquote,
dl,
dd {
    margin: 0;
}

/* Remove list styles on ul, ol elements with a list role, which suggests default styling will be removed */
ul[role="list"],
ol[role="list"] {
    list-style: none;
}

/* Set core root defaults */
html:focus-within {
    scroll-behavior: smooth;
}

/* Set core body defaults */
body {
    min-height: 100vh;
    text-rendering: optimizeSpeed;
    line-height: 1.5;
}

/* A elements that don't have a class get default styles */
a:not([class]) {
    -webkit-text-decoration-skip: ink;
    text-decoration-skip-ink: auto;
}

/* Make images easier to work with */
img,
picture {
    max-width: 100%;
    display: block;
}

/* Inherit fonts for inputs and buttons */
input,
button,
textarea,
select {
    font: inherit;
}

/* Remove all animations, transitions and smooth scroll for people that prefer not to see them */
@media (prefers-reduced-motion: reduce) {
    html:focus-within {
        scroll-behavior: auto;
    }

    *,
    *::before,
    *::after {
        -webkit-animation-duration: 0.01ms !important;
        animation-duration: 0.01ms !important;
        -webkit-animation-iteration-count: 1 !important;
        animation-iteration-count: 1 !important;
        transition-duration: 0.01ms !important;
        scroll-behavior: auto !important;
    }
}

/*--------------------------------
base
--------------------------------*/
:root {
    /*---------- color ----------*/
    --font-Roboto: "Roboto", sans-serif;
    --font-Pacifico: "Pacifico", cursive;

    /*---------- color ----------*/
    --color-accent-pink: #f0565b;
}

*,
*:before,
*:after {
    -o-box-sizing: border-box;
    -ms-box-sizing: border-box;
    box-sizing: border-box;
}

html {
    font-size: 16px;
    line-height: 1.6;
    height: 100%;
}

body {
    color: #071631;
    font-family: "Noto Sans JP", sans-serif;
    min-width: 350px;
    width: 100%;
    overflow-x: hidden;
}

img,
object,
video {
    border: none;
    display: block;
    height: auto;
    max-width: 100%;
    width: 100%;
}

ul,
ol {
    list-style: none;
    margin: 0;
    padding: 0;
}

a {
    color: initial;
    text-decoration: none;
    transition: 0.4s;
}

a:hover {
    opacity: 0.8;
    transition: all 0.3s;
}

a:hover img {
    text-decoration: none;
    opacity: 0.8;
    transition: all 0.3s;
}

/*********************************
    PROJECT SET
*********************************/
/*---------- mv ----------*/


body {
    --wp--preset--color--black: #000000;
    --wp--preset--color--cyan-bluish-gray: #abb8c3;
    --wp--preset--color--white: #ffffff;
    --wp--preset--color--pale-pink: #f78da7;
    --wp--preset--color--vivid-red: #cf2e2e;
    --wp--preset--color--luminous-vivid-orange: #ff6900;
    --wp--preset--color--luminous-vivid-amber: #fcb900;
    --wp--preset--color--light-green-cyan: #7bdcb5;
    --wp--preset--color--vivid-green-cyan: #00d084;
    --wp--preset--color--pale-cyan-blue: #8ed1fc;
    --wp--preset--color--vivid-cyan-blue: #0693e3;
    --wp--preset--color--vivid-purple: #9b51e0;
    --wp--preset--gradient--vivid-cyan-blue-to-vivid-purple: linear-gradient(135deg, rgba(6, 147, 227, 1) 0%, rgb(155, 81, 224) 100%);
    --wp--preset--gradient--light-green-cyan-to-vivid-green-cyan: linear-gradient(135deg, rgb(122, 220, 180) 0%, rgb(0, 208, 130) 100%);
    --wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange: linear-gradient(135deg, rgba(252, 185, 0, 1) 0%, rgba(255, 105, 0, 1) 100%);
    --wp--preset--gradient--luminous-vivid-orange-to-vivid-red: linear-gradient(135deg, rgba(255, 105, 0, 1) 0%, rgb(207, 46, 46) 100%);
    --wp--preset--gradient--very-light-gray-to-cyan-bluish-gray: linear-gradient(135deg, rgb(238, 238, 238) 0%, rgb(169, 184, 195) 100%);
    --wp--preset--gradient--cool-to-warm-spectrum: linear-gradient(135deg, rgb(74, 234, 220) 0%, rgb(151, 120, 209) 20%, rgb(207, 42, 186) 40%, rgb(238, 44, 130) 60%, rgb(251, 105, 98) 80%, rgb(254, 248, 76) 100%);
    --wp--preset--gradient--blush-light-purple: linear-gradient(135deg, rgb(255, 206, 236) 0%, rgb(152, 150, 240) 100%);
    --wp--preset--gradient--blush-bordeaux: linear-gradient(135deg, rgb(254, 205, 165) 0%, rgb(254, 45, 45) 50%, rgb(107, 0, 62) 100%);
    --wp--preset--gradient--luminous-dusk: linear-gradient(135deg, rgb(255, 203, 112) 0%, rgb(199, 81, 192) 50%, rgb(65, 88, 208) 100%);
    --wp--preset--gradient--pale-ocean: linear-gradient(135deg, rgb(255, 245, 203) 0%, rgb(182, 227, 212) 50%, rgb(51, 167, 181) 100%);
    --wp--preset--gradient--electric-grass: linear-gradient(135deg, rgb(202, 248, 128) 0%, rgb(113, 206, 126) 100%);
    --wp--preset--gradient--midnight: linear-gradient(135deg, rgb(2, 3, 129) 0%, rgb(40, 116, 252) 100%);
    --wp--preset--font-size--small: 13px;
    --wp--preset--font-size--medium: 20px;
    --wp--preset--font-size--large: 36px;
    --wp--preset--font-size--x-large: 42px;
    --wp--preset--spacing--20: 0.44rem;
    --wp--preset--spacing--30: 0.67rem;
    --wp--preset--spacing--40: 1rem;
    --wp--preset--spacing--50: 1.5rem;
    --wp--preset--spacing--60: 2.25rem;
    --wp--preset--spacing--70: 3.38rem;
    --wp--preset--spacing--80: 5.06rem;
    --wp--preset--shadow--natural: 6px 6px 9px rgba(0, 0, 0, 0.2);
    --wp--preset--shadow--deep: 12px 12px 50px rgba(0, 0, 0, 0.4);
    --wp--preset--shadow--sharp: 6px 6px 0px rgba(0, 0, 0, 0.2);
    --wp--preset--shadow--outlined: 6px 6px 0px -3px rgba(255, 255, 255, 1), 6px 6px rgba(0, 0, 0, 1);
    --wp--preset--shadow--crisp: 6px 6px 0px rgba(0, 0, 0, 1);
}

:where(.is-layout-flex) {
    gap: 0.5em;
}

:where(.is-layout-grid) {
    gap: 0.5em;
}

body .is-layout-flow>.alignleft {
    float: left;
    margin-inline-start: 0;
    margin-inline-end: 2em;
}

body .is-layout-flow>.alignright {
    float: right;
    margin-inline-start: 2em;
    margin-inline-end: 0;
}

body .is-layout-flow>.aligncenter {
    margin-left: auto !important;
    margin-right: auto !important;
}

body .is-layout-constrained>.alignleft {
    float: left;
    margin-inline-start: 0;
    margin-inline-end: 2em;
}

body .is-layout-constrained>.alignright {
    float: right;
    margin-inline-start: 2em;
    margin-inline-end: 0;
}

body .is-layout-constrained>.aligncenter {
    margin-left: auto !important;
    margin-right: auto !important;
}

body .is-layout-constrained> :where(:not(.alignleft):not(.alignright):not(.alignfull)) {
    max-width: var(--wp--style--global--content-size);
    margin-left: auto !important;
    margin-right: auto !important;
}

body .is-layout-constrained>.alignwide {
    max-width: var(--wp--style--global--wide-size);
}

body .is-layout-flex {
    display: flex;
}

body .is-layout-flex {
    flex-wrap: wrap;
    align-items: center;
}

body .is-layout-flex>* {
    margin: 0;
}

body .is-layout-grid {
    display: grid;
}

body .is-layout-grid>* {
    margin: 0;
}

:where(.wp-block-columns.is-layout-flex) {
    gap: 2em;
}

:where(.wp-block-columns.is-layout-grid) {
    gap: 2em;
}

:where(.wp-block-post-template.is-layout-flex) {
    gap: 1.25em;
}

:where(.wp-block-post-template.is-layout-grid) {
    gap: 1.25em;
}

.has-black-color {
    color: var(--wp--preset--color--black) !important;
}

.has-cyan-bluish-gray-color {
    color: var(--wp--preset--color--cyan-bluish-gray) !important;
}

.has-white-color {
    color: var(--wp--preset--color--white) !important;
}

.has-pale-pink-color {
    color: var(--wp--preset--color--pale-pink) !important;
}

.has-vivid-red-color {
    color: var(--wp--preset--color--vivid-red) !important;
}

.has-luminous-vivid-orange-color {
    color: var(--wp--preset--color--luminous-vivid-orange) !important;
}

.has-luminous-vivid-amber-color {
    color: var(--wp--preset--color--luminous-vivid-amber) !important;
}

.has-light-green-cyan-color {
    color: var(--wp--preset--color--light-green-cyan) !important;
}

.has-vivid-green-cyan-color {
    color: var(--wp--preset--color--vivid-green-cyan) !important;
}

.has-pale-cyan-blue-color {
    color: var(--wp--preset--color--pale-cyan-blue) !important;
}

.has-vivid-cyan-blue-color {
    color: var(--wp--preset--color--vivid-cyan-blue) !important;
}

.has-vivid-purple-color {
    color: var(--wp--preset--color--vivid-purple) !important;
}

.has-black-background-color {
    background-color: var(--wp--preset--color--black) !important;
}

.has-cyan-bluish-gray-background-color {
    background-color: var(--wp--preset--color--cyan-bluish-gray) !important;
}

.has-white-background-color {
    background-color: var(--wp--preset--color--white) !important;
}

.has-pale-pink-background-color {
    background-color: var(--wp--preset--color--pale-pink) !important;
}

.has-vivid-red-background-color {
    background-color: var(--wp--preset--color--vivid-red) !important;
}

.has-luminous-vivid-orange-background-color {
    background-color: var(--wp--preset--color--luminous-vivid-orange) !important;
}

.has-luminous-vivid-amber-background-color {
    background-color: var(--wp--preset--color--luminous-vivid-amber) !important;
}

.has-light-green-cyan-background-color {
    background-color: var(--wp--preset--color--light-green-cyan) !important;
}

.has-vivid-green-cyan-background-color {
    background-color: var(--wp--preset--color--vivid-green-cyan) !important;
}

.has-pale-cyan-blue-background-color {
    background-color: var(--wp--preset--color--pale-cyan-blue) !important;
}

.has-vivid-cyan-blue-background-color {
    background-color: var(--wp--preset--color--vivid-cyan-blue) !important;
}

.has-vivid-purple-background-color {
    background-color: var(--wp--preset--color--vivid-purple) !important;
}

.has-black-border-color {
    border-color: var(--wp--preset--color--black) !important;
}

.has-cyan-bluish-gray-border-color {
    border-color: var(--wp--preset--color--cyan-bluish-gray) !important;
}

.has-white-border-color {
    border-color: var(--wp--preset--color--white) !important;
}

.has-pale-pink-border-color {
    border-color: var(--wp--preset--color--pale-pink) !important;
}

.has-vivid-red-border-color {
    border-color: var(--wp--preset--color--vivid-red) !important;
}

.has-luminous-vivid-orange-border-color {
    border-color: var(--wp--preset--color--luminous-vivid-orange) !important;
}

.has-luminous-vivid-amber-border-color {
    border-color: var(--wp--preset--color--luminous-vivid-amber) !important;
}

.has-light-green-cyan-border-color {
    border-color: var(--wp--preset--color--light-green-cyan) !important;
}

.has-vivid-green-cyan-border-color {
    border-color: var(--wp--preset--color--vivid-green-cyan) !important;
}

.has-pale-cyan-blue-border-color {
    border-color: var(--wp--preset--color--pale-cyan-blue) !important;
}

.has-vivid-cyan-blue-border-color {
    border-color: var(--wp--preset--color--vivid-cyan-blue) !important;
}

.has-vivid-purple-border-color {
    border-color: var(--wp--preset--color--vivid-purple) !important;
}

.has-vivid-cyan-blue-to-vivid-purple-gradient-background {
    background: var(--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple) !important;
}

.has-light-green-cyan-to-vivid-green-cyan-gradient-background {
    background: var(--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan) !important;
}

.has-luminous-vivid-amber-to-luminous-vivid-orange-gradient-background {
    background: var(--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange) !important;
}

.has-luminous-vivid-orange-to-vivid-red-gradient-background {
    background: var(--wp--preset--gradient--luminous-vivid-orange-to-vivid-red) !important;
}

.has-very-light-gray-to-cyan-bluish-gray-gradient-background {
    background: var(--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray) !important;
}

.has-cool-to-warm-spectrum-gradient-background {
    background: var(--wp--preset--gradient--cool-to-warm-spectrum) !important;
}

.has-blush-light-purple-gradient-background {
    background: var(--wp--preset--gradient--blush-light-purple) !important;
}

.has-blush-bordeaux-gradient-background {
    background: var(--wp--preset--gradient--blush-bordeaux) !important;
}

.has-luminous-dusk-gradient-background {
    background: var(--wp--preset--gradient--luminous-dusk) !important;
}

.has-pale-ocean-gradient-background {
    background: var(--wp--preset--gradient--pale-ocean) !important;
}

.has-electric-grass-gradient-background {
    background: var(--wp--preset--gradient--electric-grass) !important;
}

.has-midnight-gradient-background {
    background: var(--wp--preset--gradient--midnight) !important;
}

.has-small-font-size {
    font-size: var(--wp--preset--font-size--small) !important;
}

.has-medium-font-size {
    font-size: var(--wp--preset--font-size--medium) !important;
}

.has-large-font-size {
    font-size: var(--wp--preset--font-size--large) !important;
}

.has-x-large-font-size {
    font-size: var(--wp--preset--font-size--x-large) !important;
}

.wp-block-navigation a:where(:not(.wp-element-button)) {
    color: inherit;
}

:where(.wp-block-post-template.is-layout-flex) {
    gap: 1.25em;
}

:where(.wp-block-post-template.is-layout-grid) {
    gap: 1.25em;
}

:where(.wp-block-columns.is-layout-flex) {
    gap: 2em;
}

:where(.wp-block-columns.is-layout-grid) {
    gap: 2em;
}

.wp-block-pullquote {
    font-size: 1.5em;
    line-height: 1.6;
}
}

</style> -->
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
    <div id="overlay" class="md-overlay" ></div>
    <header class="l-header">
        <div class="l-header__inner">
            <div class="l-header__content">
                <div class="l-header__logo">

                    <!-- <a href="https://promotion-cast.com/lp02/"> -->
                    <!-- <div class="p-cta__btn">セレクトショップ在庫買取専⾨店</div> -->
                    <picture>
                            <!-- <source
                                srcset="<?php echo get_template_directory_uri(); ?>/assets/img/logo1.png" style=
                                media="(max-width: 1024px)"> -->
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo1.png"
                                alt="Promotion Cast">
                        </picture>
                    </a>
                </div>
                <ul class="l-header__nav">
                    <li class="l-header__nav-item"><a href="#">トップ</a></li>
                    <li class="l-header__nav-item"><a href="#about">メニュー</a></li>
                    <li class="l-header__nav-item"><a href="#work">メニュー</a></li>
                    <li class="l-header__nav-item"><a href="#voice">メニュー</a></li>
                    <li class="l-header__nav-item"><a href="#message">メリット</a></li>
                    <li class="l-header__nav-item"><a href="#merit">お客様の声</a></li>
                    <li class="l-header__nav-item"><a href="#faq">よくある質問</a></li>
                    <span class="p-merit__list-item-title-icon-navbtn"><a href="#entry" style="color: white;">お見積もり•お問い合わせ</a></span>
                    <!-- <span class="p-merit__list-item-title-icon"><a href="#entry">LINE</a></span> -->

                </ul>
                <div class="l-header__hamburger">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
        </div>
    </header>
    <div class="l-contents l-top l-page">
        <section class="p-mv">
            <div class="c-inner">
                <div class="titles">                    
                    <div class="titlesmall">セレクトショップ限定</div>                    
                    <div class="titlebig">在庫買取サービス</div>
                    <div class="textimg">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo2.png" alt="">
                    </div>          
                </div>
                <div class="doublebtn">
                    <div>
                        <span>∖お気軽に/</span><br>お見積もり<br>お問い合わせ
                    </div>
                    <span class="p-merit__list-item-title-icon-firstbtn"><a href="#entry" style="color: white">LINE</a></span>
                    <span class="p-merit__list-item-title-icon-secondbtn"><a href="#entry" style="color: white">メール</a></span>
                </div>                
            </div>
        </section>
    </div>

    <section class="p-about">
        <div class="c-inner">
            <div class="p-about__content">
                <div class="firstlist">こんな在庫ありませんか?</div>
                <ul class="p-about__icon">
                    <li class="p-about__main-list-item-list-item" style="text-align: center;">
                                <figure class="p-about__main-list-item-list-item-img">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/avatars/too much.png"
                                        alt="">
                                </figure>
                                <span class="letter">仕入れ過ぎた在庫</span>
                    </li>
                    <li class="p-about__main-list-item-list-item" style="text-align: center;">
                                <figure class="p-about__main-list-item-list-item-img">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/avatars/left icon.png"
                                        alt="">
                                </figure>
                                <span class="letter">古い在庫</span>
                    </li>
                    <li class="p-about__main-list-item-list-item" style="text-align: center;">
                                <figure class="p-about__main-list-item-list-item-img-3">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/avatars/damaged.png"
                                        alt="">
                                </figure>
                                <span class="letter">ヤケ・ダメージなど の訳あり品</span>
                    </li>
                    <li class="p-about__main-list-item-list-item" style="text-align: center;">
                                <figure class="p-about__main-list-item-list-item-img">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/avatars/stuff icon.png"
                                        alt="">
                                </figure>
                                <span class="letter">スタッフの私物 （古着）</span>
                    </li>
                </ul>
                <div class="p-about__content content" style="font-size: 16px;">その他、店頭で販売しにくくなった在庫を探しています!
                </div>

                <div class=" p-about__main" style="margin-top:100px;" id="about">
                    <div class="c-common__h2">
                        <!-- <p class="c-common__h2-en">About Promotion Cast</p> -->
                        <h2 class="c-common__h2-jp">在庫買取はストッカにお任せください</h2>
                        <h2 class="c-common__h2-jp-1">在庫買取はストッカ<br>にお任せください</h2>
                    </div>
                    <!-- <div class="p-about__main contents">
                        <div style="width:40%; ">
                            <p class=" p-about__main__contents text1">
                                ●●はセレクショップ専⾨ 在庫買取店です。
                            </p>
                            <p class="p-about__main-text">
                                ここにテキストが⼊ります。
                            </p>

                        </div>
                        <picture class=" p-about__main-img">
                            <source
                                srcset="https://promotion-cast.com/lp02/wp-content/themes/promotion-cast-2023/img/about-img-01-sp.png"
                                media="(max-width: 768px)">
                            <img src="https://promotion-cast.com/lp02/wp-content/themes/promotion-cast-2023/img/about-img-01.png"
                                alt="">
                        </picture>
                    </div> -->

                </div>

                <ul class="p-about__main-list">
                    <li class="p-about__main-list-item">
                        <!-- <span class="p-about__main-list-item-num">01</span> -->
                        <!-- <p class="p-about__main-list-item-lead">プロモーションキャストのサービス<span>2</span></p> -->

                        <div class="p-about__main-list-item-flex">

                            <div class="p-about__main-list-item-flex-text">
                                <h3 class="p-about__main-list-item-title" style="text-align: center;">私たちはセレクトショップの 在庫買取専門店です</h3>
                                セレクトショップ様から「売れない在庫がある」 「ブランド維持のために値下げできない」といった ご相談をいただいてきました。
                                ストッカにご依頼いただければ、適正価格で在庫を 買い取り「余剰在庫の現金化」が可能です。
                            </div>
                            <picture class="p-about__main-list-item-flex-img">
                                <source
                                    srcset="<?php echo get_template_directory_uri(); ?>/assets/img/about.jpg"
                                    media="(max-width: 768px)">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/about.jpg"
                                    alt="秘童厳守で在庫を買取!">
                            </picture>
                        </div>
                    </li>
                    <li class="p-about__main-list-item">
                        <!-- <span class="p-about__main-list-item-num">02</span> -->
                        <!-- <p class="p-about__main-list-item-lead">プロモーションキャストのサービス<span>1</span></p> -->
                        <h3 class="p-about__main-list-item-title">ストッカの在庫買取サービス4つのポイント</h3>
                        <ul class="p-about__main-list-item-list">
                            <li class="p-about__main-list-item-list-item">
                                <figure class="p-about__main-list-item-list-item-img">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/avatars/icon4.png"
                                        alt="">
                                </figure>
                                <h4 class="p-about__main-list-item-list-item-title">01.<br>1点〜取引OK</h4>
                                <div>まずはお試しで問い合わせて みませんか?<br>
                                        アイテムによって1点から買 取承ります。</div>
                            </li>
                            <li class="p-about__main-list-item-list-item">
                                <figure class="p-about__main-list-item-list-item-img">
                                    <img src="https://promotion-cast.com/lp02/wp-content/themes/promotion-cast-2023/img/about-img-list-01.jpg"
                                        alt="">
                                </figure>
                                <h4 class="p-about__main-list-item-list-item-title">02. <br>季節外アイテムの 買取OK</h4>
                                <div>真夏にダウン、真冬に半袖の 買取も0Kです。通常査定でご案内します.</div>
                                <!-- <p class="p-about__main-list-item-list-item-text">
                                    固定シフトではなく「やりたいとき」にお仕事に入れます。急な稽古やオーディションも安心​です。</p> -->
                            </li>
                            <li class="p-about__main-list-item-list-item">
                                <figure class="p-about__main-list-item-list-item-img">
                                    <img src="https://promotion-cast.com/lp02/wp-content/themes/promotion-cast-2023/img/about-img-list-02.jpg"
                                        alt="">
                                </figure>
                                <h4 class="p-about__main-list-item-list-item-title">03.<br>宅配買取​</h4>
                                <div>事前のお見積もりのもと・ 在庫は宅配買取でお取引します。<br>店頑にお邪魔するこ とがないので安心です。</div>
                                <!-- <p class="p-about__main-list-item-list-item-text">
                                    時給は1500～1800円（交通費支給あり）なので​効率的に稼ぐことができます！ </p> -->
                            </li>
                            <li class="p-about__main-list-item-list-item">
                                <figure class="p-about__main-list-item-list-item-img">
                                    <img src="https://promotion-cast.com/lp02/wp-content/themes/promotion-cast-2023/img/about-img-list-03.jpg"
                                        alt="">
                                </figure>
                                <h4 class="p-about__main-list-item-list-item-title">04.<br>キャンセルOK​</h4>
                                <div>本査定にご納得いただけなか った場合はキャンセルも承り ます。</div>
                                <!-- <p class="p-about__main-list-item-list-item-text">
                                    ​1日単位から長期のお仕事まで、多岐にわたるお仕事が豊富にあります。​</p> -->
                            </li>
                        </ul>
                    </li>

                </ul>
            </div>
        </div>

    </section>

    <section class="p-work" id="work">
        <div class="p-work__content" style="margin-top:100px;">
            <div class="c-common__h2">
                <!-- <p class="c-common__h2-en">Work Contents</p> -->
                <h2 class="c-common__h2-jp">メンズブランドなら<br>どんなアイテムでも買取OK</h2>
            </div>
            <ul class="p-about__workicon">
                <li class="p-about__main-list-item-commonh2">
                    <div class="p-about__main-list-item-flex-work">
                        <picture class="p-about__main-list-item-flex-img">
                            <!-- <img class="preserve_img01"
                                src="<?php echo get_template_directory_uri(); ?>/assets/img/テンダーロイン/LAMBERジャケット2.jpg"
                                media="(max-width: 768px)"> -->
                            <img class="preserve_img01" style="width: 100px;"
                                src="<?php echo get_template_directory_uri(); ?>/assets/img/accessaries/clothes.jpg"
                                alt="clothes" class="p-about__main-list-item-flex-img-img">
                        </picture>
                        <div class="p-about__main-list-item-flex-text"
                            style="display: flex; justify-content: center; align-items: center;">
                            <h3 class="p-about__main-list-item-title" style="font-size: 20px;">洋服</h3>
                        </div>
                    </div>
                </li>
                <li class="p-about__main-list-item-commonh2">
                    <div class="p-about__main-list-item-flex-work">
                        <picture class="p-about__main-list-item-flex-img">
                            <!-- <img class="preserve_img01"
                                src="<?php echo get_template_directory_uri(); ?>/assets/img/テンダーロイン/LAMBERジャケット2.jpg"
                                media="(max-width: 768px)"> -->
                            <img class="preserve_img01" style="width: 100px;"
                                src="<?php echo get_template_directory_uri(); ?>/assets/img/accessaries/shoes.jpg" alt="80周年"
                                class="p-about__main-list-item-flex-img-img">
                        </picture>
                        <div class="p-about__main-list-item-flex-text"
                            style="display: flex; justify-content: center; align-items: center;">
                            <h3 class="p-about__main-list-item-title" style="font-size: 20px;">靴・ブーツ</h3>
                        </div>
                    </div>
                </li>
                <li class="p-about__main-list-item-commonh2">
                    <div class="p-about__main-list-item-flex-work">
                        <picture class="p-about__main-list-item-flex-img">
                            <!-- <img class="preserve_img01"
                                src="<?php echo get_template_directory_uri(); ?>/assets/img/テンダーロイン/LAMBERジャケット2.jpg"
                                                media="(max-width: 768px)"> -->
                            <img class="preserve_img01" style="width: 100px;"
                                src="<?php echo get_template_directory_uri(); ?>/assets/img/accessaries/wallets.jpg"
                                alt="プロモーション材料の支援" class="p-about__main-list-item-flex-img-img">
                        </picture>
                        <div class="p-about__main-list-item-flex-text"
                            style="display: flex; justify-content: center; align-items: center;">
                            <h3 class="p-about__main-list-item-title" style="font-size: 20px;">バッグ・財布</h3>
                        </div>
                    </div>
                </li>
                <li class="p-about__main-list-item-commonh2">
                    <div class="p-about__main-list-item-flex-work">
                        <picture class="p-about__main-list-item-flex-img">
                            <!-- <img class="preserve_img01"
                                src="<?php echo get_template_directory_uri(); ?>/assets/img/テンダーロイン/LAMBERジャケット2.jpg"
                                                media="(max-width: 768px)"> -->
                            <img class="preserve_img01" style="width: 100px;"
                                src="<?php echo get_template_directory_uri(); ?>/assets/img/accessaries/Idonknow.jpg"
                                alt="アクセサリー" class="p-about__main-list-item-flex-img-img">
                        </picture>
                        <div class="p-about__main-list-item-flex-text"
                            style="display: flex; justify-content: center; align-items: center;">
                            <h3 class="p-about__main-list-item-title" style="font-size: 20px;">アクセサリー</h3>
                        </div>
                    </div>
                </li>
                <li class="p-about__main-list-item-commonh2">
                    <div class="p-about__main-list-item-flex-work">
                        <picture class="p-about__main-list-item-flex-img">
                            <!-- <img class="preserve_img01"
                                src="<?php echo get_template_directory_uri(); ?>/assets/img/テンダーロイン/LAMBERジャケット2.jpg"
                                                media="(max-width: 768px)"> -->
                            <img class="preserve_img01" style="width: 100px;"
                                src="<?php echo get_template_directory_uri(); ?>/assets/img/accessaries/hat.jpg"
                                alt="ファッション ⼩物" class="p-about__main-list-item-flex-img-img">
                        </picture>
                        <div class="p-about__main-list-item-flex-text"
                            style="display: flex; justify-content: center; align-items: center;">
                            <h3 class="p-about__main-list-item-title" style="font-size: 20px;">ファッション ⼩物</h3>
                        </div>
                    </div>
                </li>
                <li class="p-about__main-list-item-commonh2">
                    <div class="p-about__main-list-item-flex-work">
                        <picture class="p-about__main-list-item-flex-img">
                            <!-- <img class="preserve_img01"
                                src="<?php echo get_template_directory_uri(); ?>/assets/img/テンダーロイン/LAMBERジャケット2.jpg"
                                                media="(max-width: 768px)"> -->
                            <img class="preserve_img01" style="width: 100px;"
                                src="<?php echo get_template_directory_uri(); ?>/assets/img/accessaries/wristwatch.jpg"
                                alt="ルイスレザーラインドグローブ" class="p-about__main-list-item-flex-img-img">
                        </picture>
                        <div class="p-about__main-list-item-flex-text"
                            style="display: flex; justify-content: center; align-items: center;">
                            <h3 class="p-about__main-list-item-title" style="font-size: 20px;">その他</h3>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </section>

    <section class="p-voice" id="voice">
        <div class="c-inner">
            <div class="p-voice__content">
                <div class="c-common__h2">
                    <!-- <p class="c-common__h2-en">Voice</p> -->
                    <h2 class="c-common__h2-jp-first">ストッカはファッションジャンルを問<br>わずご利⽤いただけます</h2>
                    <h2 class="c-common__h2-jp-second">ストッカはファッショ<br>ンジャンルを問わずご利⽤<br>いただけます</h2>
                </div>
                <ul class="p-voice__card">
                    <li class="p-voice__card-item">                        
                        <div class="p-voice__card-item-content">
                            <h3 class="p-voice__card-item-title">
                                Domestic<br> <span style="font-size:18px;">brand</span>
                            </h3>
                            <p class="p-voice__card-item-text">
                                日本国内プランドを積極定に買取しています。 ストリート•モード・アメカジ•ルードなどジャン ルを問わずお任せいただけます。
                                トレンドが過ぎてしまったアイテムもぜひご相談く ださい。
                            </p>
                        </div>
                    </li>
                    <li class="p-voice__card-item">                        
                        <div class="p-voice__card-item-content">
                            <h3 class="p-voice__card-item-title">
                                Import<br> <span style="font-size:18px;">brand</span>
                            </h3>
                            <p class="p-voice__card-item-text">
                                ストッカは世界中のファッションブランドを取り扱 っています。国内代理店タグのない.並行輸入品も買取可能です。 
                                他社で断られてしまったものでも、ぜひご相談くだ さい。
                            </p>
                        </div>
                    </li>
                    <li class="p-voice__card-item">                        
                        <div class="p-voice__card-item-content">
                            <h3 class="p-voice__card-item-title">
                                Luxury<br> <span style="font-size:18px;">brand</span>
                            </h3>
                            <p class="p-voice__card-item-text">
                                ストッカにはハイブランドの鑑定士が在籍していま す。高級腕時計やバッグなども併せてお任せくださ い。
                                ハイブランドは、どんなにボロボロでも必ず買 取可能です。
                            </p>
                        </div>
                    </li>
                </ul>
                <div class="slick-pager2"></div>
            </div>
        </div>
    </section>

    <?php
        $args = array(
            'post_type' => 'brand',
            'posts_per_page' => -1,
            'order' => 'order',
            'orderby' => 'post_date',
            'post_status' => 'publish',
        );

        $brands = new WP_Query($args);
    ?>
    <section class="p-work" id="work">
        <div class="p-work__content" style="margin-top:100px;">
            <ul class="p-about__workicon">
            <?php
                if ($brands->have_posts()) :
                    while ($brands->have_posts()) : $brands->the_post();
            ?>
                <li class="p-about__main-list-item-commonh3">
                    <div class="p-about__main-list-item-flex-work">
                        <div class="p-about__main-list-item-flex-text-brand"
                            style="display: flex; justify-content: center; align-items: center;">
                            <h3 class="p-about__main-list-item-title" style="font-size: 20px;"><?php the_title(); ?></h3>
                        </div>
                    </div>
                </li>
            <?php
                    endwhile;
                endif;
            ?>
            </ul>
        </div>
    </section>

    <section class="p-message">
        <div class="c-inner">
            <div class="p-message__content">
                <div class="c-common__h2">
                    <p class="c-common__h2-jp" style="margin-top: 70px;">在庫買取サービスを<br>利⽤するメリット</p>
                </div>
                <div class="p-message__box">
                    <picture class="p-message__box-img">                        
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/vertical3.png"
                            alt="活かせるのは表現力　身につくのも表現力">
                    </picture>
                    <div class="p-message-text" >
                        <div class="p-message__box-text" style="justify-content:normal;">
                            <div class="titl" >
                                メリット 01.
                            </div>
                            <div style="font-weight: bold; font-size: 25px;">節税対策</div>
                            <div>
                                決算前に滞留在庫を売却することで期末在庫評価額が減り、相対的に節税効果を見込めます。余分な在庫があるだけで余分な税金を納付している可能性があるため、売却がおすすめです。
                            </div>          
                        </div>
                        <div class="p-message__box-text">
                            <div class="titl">
                                メリット 02.
                            </div>
                            <div style="font-weight: bold; font-size: 25px;">ショップ価値の維持</div>
                            <div>
                                必要以上に値下げしてしまうと、定価で買わない客様が増えてショップ価値が低下します。適切に在庫を売却してショップ価値を高めましょう。
                            </div>          
                        </div>
                        <div class="p-message__box-text">
                            <div class="titl">
                                メリット 03.
                            </div>
                            <div style="font-weight: bold; font-size: 25px;">余剰在庫の現⾦化</div>
                            <div>
                                動かない在庫をそのままにしていても、商品自体の価値が年々下がってしまいます。動きにくい在庫をまとめて現金に変えられるのは在庫仮サービスのメリットです。
                            </div>          
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <section class="p-work p-work1" id="work">
        <div class="p-work__content">
            <div class="c-common__h2">
                <h2 class="c-common__h2-jp">事例紹介</h2>
            </div>
            <div class="p-work__list">
                <ul class="p-work__list-inner slider-02">
                    <li class="p-work__list-item">
                        <h3 class="p-work__list-item-title">事例１</h3>
                        <div class="p-work__list-item-box">
                            <figure class="p-work__list-item-box-img">
                                <picture>
                                    <!-- <source
                                        srcset="https://promotion-cast.com/lp02/wp-content/uploads/2023/10/work-img-01-sp-1.jpg"
                                        media="(max-width: 768px)"> -->
                                    <img class="preserve_img01"
                                        src="<?php echo get_template_directory_uri(); ?>/assets/img/3496.jpg">
                                </picture>
                            </figure>
                            <div class="p-work__list-item-box-info">
                                <div class="p-work__list-item-box-info-main">
                                    <p class="p-work__list-item-box-info-main-detail">ご依頼点数：30点
                                    <p class="p-work__list-item-box-info-main-jikyu">
                                        通常買取価格￥0000&nbsp;<span>¥0000買取</span>
                                    </p>
                                    </p>
                                    <p class="p-work__list-item-box-info-main-detail"><span>・セレクトショップ(法⼈)</span>
                                    </p>
                                    <p class="p-work__list-item-box-info-main-detail">
                                        <span>・ドメスティックブランド取り扱い店</span>
                                    </p>
                                </div>
                                <p class="p-work__list-item-ex"><span>依頼内容：</span><br>ここにテキストが⼊ります。ここにテキストが⼊ります。</p>
                                <!-- <p class="p-work__list-item-box-info-sub">
                                    商品の魅力をお客様にお伝えして、購入に結び付けるお仕事です。商品を理解し、お客様に楽しんで頂ける工夫をします。 </p> -->
                            </div>
                        </div>
                    </li>
                    <li class="p-work__list-item">
                        <h3 class="p-work__list-item-title">事例2</h3>
                        <div class="p-work__list-item-box">
                            <figure class="p-work__list-item-box-img">
                                <picture>
                                    <!-- <source
                                        srcset="https://promotion-cast.com/lp02/wp-content/uploads/2023/10/work-img-01-sp-1.jpg"
                                        media="(max-width: 768px)"> -->
                                    <img class="preserve_img01"
                                        src="<?php echo get_template_directory_uri(); ?>/assets/img/3496.jpg">
                                </picture>
                            </figure>
                            <div class="p-work__list-item-box-info">
                                <div class="p-work__list-item-box-info-main">
                                    <p class="p-work__list-item-box-info-main-detail">ご依頼点数：30点
                                    <p class="p-work__list-item-box-info-main-jikyu">
                                        通常買取価格￥0000&nbsp;<span>¥0000買取</span>
                                    </p>
                                    </p>
                                    <p class="p-work__list-item-box-info-main-detail"><span>・セレクトショップ(法⼈)</span>
                                    </p>
                                    <p class="p-work__list-item-box-info-main-detail">
                                        <span>・ドメスティックブランド取り扱い店</span>
                                    </p>
                                </div>
                                <p class="p-work__list-item-ex"><span>依頼内容：</span><br>ここにテキストが⼊ります。ここにテキストが⼊ります。</p>
                                <!-- <p class="p-work__list-item-box-info-sub">
                                    商品の魅力をお客様にお伝えして、購入に結び付けるお仕事です。商品を理解し、お客様に楽しんで頂ける工夫をします。 </p> -->
                            </div>
                        </div>
                    </li>
                    <li class="p-work__list-item">
                        <h3 class="p-work__list-item-title">事例3</h3>
                        <div class="p-work__list-item-box">
                            <figure class="p-work__list-item-box-img">
                                <picture>
                                    <!-- <source
                                        srcset="https://promotion-cast.com/lp02/wp-content/uploads/2023/10/work-img-01-sp-1.jpg"
                                        media="(max-width: 768px)"> -->
                                    <img class="preserve_img01"
                                        src="<?php echo get_template_directory_uri(); ?>/assets/img/3496.jpg">
                                </picture>
                            </figure>
                            <div class="p-work__list-item-box-info">
                                <div class="p-work__list-item-box-info-main">
                                    <p class="p-work__list-item-box-info-main-detail">ご依頼点数：30点
                                    <p class="p-work__list-item-box-info-main-jikyu">
                                        通常買取価格￥0000&nbsp;<span>¥0000買取</span>
                                    </p>
                                    </p>
                                    <p class="p-work__list-item-box-info-main-detail"><span>・セレクトショップ(法⼈)</span>
                                    </p>
                                    <p class="p-work__list-item-box-info-main-detail">
                                        <span>・ドメスティックブランド取り扱い店</span>
                                    </p>
                                </div>
                                <p class="p-work__list-item-ex"><span>依頼内容：</span><br>ここにテキストが⼊ります。ここにテキストが⼊ります。</p>
                                <!-- <p class="p-work__list-item-box-info-sub">
                                    商品の魅力をお客様にお伝えして、購入に結び付けるお仕事です。商品を理解し、お客様に楽しんで頂ける工夫をします。 </p> -->
                            </div>
                        </div>
                    </li>
                    <li class="p-work__list-item">
                        <h3 class="p-work__list-item-title">事例4</h3>
                        <div class="p-work__list-item-box">
                            <figure class="p-work__list-item-box-img">
                                <picture>
                                    <!-- <source
                                        srcset="https://promotion-cast.com/lp02/wp-content/uploads/2023/10/work-img-01-sp-1.jpg"
                                        media="(max-width: 768px)"> -->
                                    <img class="preserve_img01"
                                        src="<?php echo get_template_directory_uri(); ?>/assets/img/3496.jpg">
                                </picture>
                            </figure>
                            <div class="p-work__list-item-box-info">
                                <div class="p-work__list-item-box-info-main">
                                    <p class="p-work__list-item-box-info-main-detail">ご依頼点数：30点
                                    <p class="p-work__list-item-box-info-main-jikyu">
                                        通常買取価格￥0000&nbsp;<span>¥0000買取</span>
                                    </p>
                                    </p>
                                    <p class="p-work__list-item-box-info-main-detail"><span>・セレクトショップ(法⼈)</span>
                                    </p>
                                    <p class="p-work__list-item-box-info-main-detail">
                                        <span>・ドメスティックブランド取り扱い店</span>
                                    </p>
                                </div>
                                <p class="p-work__list-item-ex"><span>依頼内容：</span><br>ここにテキストが⼊ります。ここにテキストが⼊ります。</p>
                                <!-- <p class="p-work__list-item-box-info-sub">
                                    商品の魅力をお客様にお伝えして、購入に結び付けるお仕事です。商品を理解し、お客様に楽しんで頂ける工夫をします。 </p> -->
                            </div>
                        </div>
                    </li>
                </ul>
                <div class="slick-pager"></div>
            </div>
        </div>
    </section>

    <section class="p-merit" id="merit">
        <div class="p-merit__content">
            <div class="c-inner--narrow">
                <div class="c-common__h2">
                    <h2 class="c-common__h2-jp">買取キャンペーン実施中！</h2>
                </div>
                <ul class="p-merit__list">
                    <li class="p-merit__list-item" style="display: flex; flex-direction: column; align-items: center;">
                        <h3 class="p-merit__list-item-title">
                            <span class="p-merit__list-item-title-icon"><span>1</span>キャンペーン</span>
                        </h3>
                        <p class="p-merit__list-item-title-text"><span style="font-weight: bold; font-size: 25px; color: #660b8b;">初回ご利用10%アップ</span></p>
                        <div class="p-merit-div">初めてストッカをご利用されるお客様は、<br>
                            通常から10%アップの査定額でご案内します。</div>
                    </li>
                    <li class="p-merit__list-item">
                        <h3 class="p-merit__list-item-title">
                            <span class="p-merit__list-item-title-icon"><span>2</span>キャンペーン</span>
                        </h3>
                        <p class="p-merit__list-item-title-text"><span style="font-weight: bold; font-size: 25px; color: #660b8b;">10点以上成約15%アップ</span></p>
                    </li>
                    <li class="p-merit__list-item" style="display: flex; flex-direction: column; align-items: center;">
                        <h3 class="p-merit__list-item-title">
                            <span class="p-merit__list-item-title-icon"><span>3</span>キャンペーン</span>
                        </h3>
                        <p class="p-merit__list-item-title-text"><span style="font-weight: bold; font-size: 25px; color: #660b8b;">20点以上20%アップ</span></p>
                        <div class="p-merit-div">
                            <p class="p-merit__list-item-title-text-p">・キャンペーン適用前の査定額に加算します</p>
                            <p class="p-merit__list-item-title-text-p">・20%アップが上限となります</p>
                            <p class="p-merit__list-item-title-text-p">・査定額はすべて税込です</p>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="c-inner">
                <div class="p-merit__shien">
                    <h2 class="p-merit__shien-title">
                        在庫買取の流れ
                    </h2>
                    <ul class="p-merit__shien-list">
                        <li class="p-merit__shien-list-item">
                            <figure>
                                <img src="https://promotion-cast.com/lp02/wp-content/themes/promotion-cast-2023/img/merit-img-icon-06.png"
                                    alt="">

                            </figure>
                            <p>
                                お問い合わせ<br><span style="font-size: 14px; font-weight: 500;"> メール / LINE でお問い合わせ</span>
                            </p>
                        </li>
                        <li class="p-merit__shien-list-item">
                            <figure>
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/avatars/clothes.png"
                                    alt="">
                            </figure>
                            <p>
                                事前のお⾒積り<br><span style="font-size: 14px; font-weight: 500;"> リストや写真を拝見し概算のお見積もいをご 案内します。</span>
                            </p>

                        </li>
                        <li class="p-merit__shien-list-item">
                            <figure>
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/avatars/mobile.png"
                                    alt="">
                            </figure>
                            <p>
                                ご依頼<br><span style="font-size: 14px; font-weight: 500;"> お見積もリが良ければ 申し込みフオームから ご依頼ください。</span>
                            </p>
                        </li>
                        <li class="p-merit__shien-list-item">
                            <figure>
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/avatars/cardboard.png"
                                    alt="">
                            </figure>
                            <p>
                                在庫の発送<br><span style="font-size: 14px; font-weight: 500;"> 商品を段ボ—ルに入れてクロネコヤマトの着払いでお送りください。</span>
                            </p>
                        </li>
                        <li class="p-merit__shien-list-item">
                            <figure>
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/avatars/magnifying glass.png"
                                    alt="">
                            </figure>
                            <p>
                                本査定<br><span style="font-size: 14px; font-weight: 500;"> 商品を実際に拝見して査定します。その際、要する日数をご案内します。</span>
                            </p>
                        </li>
                        <li class="p-merit__shien-list-item">
                            <figure>
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/avatars/money.png"
                                    alt="">
                            </figure>
                            <p>
                                ご成約<br><span style="font-size: 14px; font-weight: 500;"> ご成約の際よお振込いたします。ご利用が混み合う場合は日数を要することがございます。</span>
                            </p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="p-faq" id="faq">
        <div class="c-inner">
            <div class="p-faq__content">
                <div class="c-common__h2">
                    <p class="c-common__h2-en">Faq</p>
                    <h2 class="c-common__h2-jp">よくあるご質問</h2>
                </div>
                <ul class="question-list flex bet str break">
                    <h3 class="p-merit__list-item-title">
                        <span class="p-merit__list-item-title-icon">取り扱いブランドについて</span>
                    </h3>
                    <li class="md-acc">
                        <input id="question1" class="acc-check" type="checkbox" value="" />
                        <i class="icon icon-arrow_icon"></i>
                        <label for="question1" class="acc-btn">
                            <p class="top-text flex hstart vstart">
                                <picture>
                                    <source
                                        srcset="https://promotion-cast.com/lp02/wp-content/themes/promotion-cast-2023/img/top_question_q@2x.png.webp"
                                        type="image/webp">
                                    <img class="img"
                                        src="https://promotion-cast.com/lp02/wp-content/themes/promotion-cast-2023/img/top_question_q@2x.png"
                                        width="27" height="25" alt="" loading="lazy">
                                </picture>ノーブランドの在庫も買取可能ですか?
                            </p>
                            <p class="acc-body bottom-text">A.ストッカはメンズブランドのみ取り扱っております。 しかし、ご紹介できる企篥があリますのでご相談ください。</p>
                        </label>
                    </li>
                    <li class="md-acc">
                        <input id="question2" class="acc-check" type="checkbox" value="" />
                        <i class="icon icon-arrow_icon"></i>
                        <label for="question2" class="acc-btn">
                            <p class="top-text flex hstart vstart">
                                <picture>
                                    <source
                                        srcset="https://promotion-cast.com/lp02/wp-content/themes/promotion-cast-2023/img/top_question_q@2x.png.webp"
                                        type="image/webp">
                                    <img class="img"
                                        src="https://promotion-cast.com/lp02/wp-content/themes/promotion-cast-2023/img/top_question_q@2x.png"
                                        width="27" height="25" alt="" loading="lazy">
                                </picture>あまり有名ではないブランドですが買取可能ですか?
                            </p>
                            <p class="acc-body bottom-text">A.ブランドによりますので、一度問い合わせくださいますと幸いです。</p>
                        </label>
                    </li>
                    <li class="md-acc">
                        <input id="question3" class="acc-check" type="checkbox" value="" />
                        <i class="icon icon-arrow_icon"></i>
                        <label for="question3" class="acc-btn">
                            <p class="top-text flex hstart vstart">
                                <picture>
                                    <source
                                        srcset="https://promotion-cast.com/lp02/wp-content/themes/promotion-cast-2023/img/top_question_q@2x.png.webp"
                                        type="image/webp">
                                    <img class="img"
                                        src="https://promotion-cast.com/lp02/wp-content/themes/promotion-cast-2023/img/top_question_q@2x.png"
                                        width="27" height="25" alt="" loading="lazy">
                                </picture>どんなブランドを高く買ってもらえますか?
                            </p>
                            <p class="acc-body bottom-text">A.現在人気のブランドや、トレンドのものは査定額をお付けしやすい傾向にあります。 写真などでお見積もりいたします。<br />
                            </p>
                        </label>
                    </li>
                    <h3 class="p-merit__list-item-title">
                        <span class="p-merit__list-item-title-icon">お取引について</span>
                    </h3>
                    <li class="md-acc">
                        <input id="question4" class="acc-check" type="checkbox" value="" />
                        <i class="icon icon-arrow_icon"></i>
                        <label for="question4" class="acc-btn">
                            <p class="top-text flex hstart vstart">
                                <picture>
                                    <source
                                        srcset="https://promotion-cast.com/lp02/wp-content/themes/promotion-cast-2023/img/top_question_q@2x.png.webp"
                                        type="image/webp">
                                    <img class="img"
                                        src="https://promotion-cast.com/lp02/wp-content/themes/promotion-cast-2023/img/top_question_q@2x.png"
                                        width="27" height="25" alt="" loading="lazy">
                                </picture>事前査定で必要な情報は何ですか?
                            </p>
                            <p class="acc-body bottom-text">A.webサイトに掲載中のものであれば、商品ページリンク。それ以外は写真やブランド名•品名などがわかると概算でお見積もり可能です。</p>
                        </label>
                    </li>
                    <li class="md-acc">
                        <input id="question5" class="acc-check" type="checkbox" value="" />
                        <i class="icon icon-arrow_icon"></i>
                        <label for="question5" class="acc-btn">
                            <p class="top-text flex hstart vstart">
                                <picture>
                                    <source
                                        srcset="https://promotion-cast.com/lp02/wp-content/themes/promotion-cast-2023/img/top_question_q@2x.png.webp"
                                        type="image/webp">
                                    <img class="img"
                                        src="https://promotion-cast.com/lp02/wp-content/themes/promotion-cast-2023/img/top_question_q@2x.png"
                                        width="27" height="25" alt="" loading="lazy">
                                </picture>売却時に必要なものはありますか?
                            </p>
                            <p class="acc-body bottom-text">A.法人の方 → 登記簿謄本の写し、または履歴事項全部証明書の写し ご担当者の身分証個人事業主の方 → 事業主さまの身分証</p>
                        </label>
                    </li>
                    <li class="md-acc">
                        <input id="question6" class="acc-check" type="checkbox" value="" />
                        <i class="icon icon-arrow_icon"></i>
                        <label for="question6" class="acc-btn">
                            <p class="top-text flex hstart vstart">
                                <picture>
                                    <source
                                        srcset="https://promotion-cast.com/lp02/wp-content/themes/promotion-cast-2023/img/top_question_q@2x.png.webp"
                                        type="image/webp">
                                    <img class="img"
                                        src="https://promotion-cast.com/lp02/wp-content/themes/promotion-cast-2023/img/top_question_q@2x.png"
                                        width="27" height="25" alt="" loading="lazy">
                                </picture>直接現地に来ていただくことは可能ですか?
                            </p>
                            <p class="acc-body bottom-text">A.場合によっては可能ですが、基本的にはLINEやメールでのご連絡のうえ、 お見積もりする方針となっております。</p>
                        </label>
                    </li>
                    <h3 class="p-merit__list-item-title">
                        <span class="p-merit__list-item-title-icon">機密情報の取り扱いについて</span>
                    </h3>
                    <li class="md-acc">
                        <input id="question7" class="acc-check" type="checkbox" value="" />
                        <i class="icon icon-arrow_icon"></i>
                        <label for="question7" class="acc-btn">
                            <p class="top-text flex hstart vstart">
                                <picture>
                                    <source
                                        srcset="https://promotion-cast.com/lp02/wp-content/themes/promotion-cast-2023/img/top_question_q@2x.png.webp"
                                        type="image/webp">
                                    <img class="img"
                                        src="https://promotion-cast.com/lp02/wp-content/themes/promotion-cast-2023/img/top_question_q@2x.png"
                                        width="27" height="25" alt="" loading="lazy">
                                </picture>売却の実態がブランド側に知られることはありませんか?
                            </p>
                            <p class="acc-body bottom-text">A.はい・古物営業法•個人情報保摸法に則り厳重に管理いたします。またショップ名や個人•法人名を公表することもありませんのでご安心ください。</p>
                        </label>
                    </li>
                    <li class="md-acc">
                        <input id="question8" class="acc-check" type="checkbox" value="" />
                        <i class="icon icon-arrow_icon"></i>
                        <label for="question8" class="acc-btn">
                            <p class="top-text flex hstart vstart">
                                <picture>
                                    <source
                                        srcset="https://promotion-cast.com/lp02/wp-content/themes/promotion-cast-2023/img/top_question_q@2x.png.webp"
                                        type="image/webp">
                                    <img class="img"
                                        src="https://promotion-cast.com/lp02/wp-content/themes/promotion-cast-2023/img/top_question_q@2x.png"
                                        width="27" height="25" alt="" loading="lazy">
                                </picture>売却の実態がブランド側に知られることはありませんか?
                            </p>
                            <p class="acc-body bottom-text">A.はい、古物営業法•個人情報保護法に則り厳婁に管理いたします。またショップ名や個人・法人名を公表することもありませんのでご安心ください。</p>
                        </label>
                    </li>                    
                </ul>
            </div>
        </div>
    </section>

    <section class="p-reason" id="reason">
        <div class="c-inner--narrow">
            <div class="p-reason__content">
                <div class="c-common__h2">
                    <h2 class="c-common__h2-jp">担当者紹介</h2>
                </div>
                <div class="p-reason__box">
                    <figure class="p-reason__box-img">
                        <img class="preserve_img01"
                            src="<?php echo get_template_directory_uri(); ?>/assets/img/avatar/1.jpg">
                    </figure>
                    <div class="p-reason__box-info">
                        <p class="p-reason__box-info-en">担当者 01</p>
                        <h3 class="p-reason__box-info-title">チーフバイヤー:湯田</h3>
                        <p class="p-reason__box-info-text">
                            リュース歴15年以上の経験をもとに、お客様にメリット を感じていただける査定や、お取引を心がけています。 ご希望やお悩みなどがありましたらぜひご相談ください。
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="p-blog" id="blog">
        <div class="c-inner">
            <div class="p-blog__content">
                <div class="c-common__h2">
                    <p class="c-common__h2-en">Blog</p>
                    <h2 class="c-common__h2-jp">ブログ</h2>
                </div>
                <div class="wrapblog">
                    <ul class="blog-list flex bet str break md-blog-list">
                        <?php
                        $args = array(
                            'posts_per_page' => 4, /* how many post you need to display */
                            'offset' => 0,
                            'orderby' => 'post_date',
                            'order' => 'DESC',
                            'post_type' => 'post', /* your post type name */
                            'post_status' => 'publish'
                        );
                        $query = new WP_Query($args);
                        if ($query->have_posts()):
                            while ($query->have_posts()):
                                $query->the_post();
                                ?>
                        <li>
                            <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                                <div class="md-lay lay bright zoom">
                                    <div class="lay-bg">
                                        <?php the_post_thumbnail(); ?>
                                    </div>
                                </div>
                                <div class="flex hstart vcenter break top-box">
                                    <ul class="category-list flex str hstart break">
                                        <?php
                                            $categories = get_the_category();
                                            if (!empty($categories)) {
                                                foreach ($categories as $category) {
                                        ?>
                                        <li>
                                            <?php echo $category->name ?>
                                        </li>
                                        <?php
                                                }
                                            }
                                        ?>
                                    </ul>
                                    <time class="day" datetime="2020-10-10">
                                        <?php the_date(); ?>
                                    </time>
                                </div>
                                <h3 class="head">
                                    <span class="js-t8 line3">
                                        <?php the_title(); ?>
                                    </span>
                                </h3>
                            </a>
                        </li>
                        <?php
                            endwhile;
                        endif;
                        ?>
                    </ul>
                    <div class="p-blog__btn">
                        <a href="<?php echo esc_url(site_url()); ?>/blog">
                            VIEW MORE
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="p-flow">
        <div class="c-inner">
            <div class="p-flow__content">
                <div class="c-common__h2">
                    <h2 class="c-common__h2-jp">在庫買取について<br class="u-sp-only">相談する</h2>
                </div>
                <div id="progress">
                    <div class="progress-bar" id="custom-progress"></div>
                </div>
                <div class="p-flow__shien">
                    <ul class="p-flow__shien-list">
                        <li class="p-flow__shien-list-item" style="width:375px;">
                            <!-- <figure class="p-flow__shien-list-item-img">
                                <img src="https://promotion-cast.com/lp02/wp-content/themes/promotion-cast-2023/img/flow-img-icon-06.png"
                                    alt="">
                            </figure> -->
                            <h5 class="p-flow__shien-list-item-title">ご都合の良い問い合わせ⽅法で、ご相談可能です。<br>〜2⽇以内にご返信いたします​</h5>
                            <span class="p-flow__shien-list-item-text"></span>
                        </li>
                    </ul>
                </div>
                <div class="p-flow__shien" style="display: flex; justify-content: center;">
                    <li class="p-about__main-list-item-commonh2" style="width: 40%;">
                        <div class=" p-about__main-list-item-flex-work">
                            <picture class="p-about__main-list-item-flex-img" style="width:24%;">
                                <img class="preserve_img01" style="width: 100px;"
                                    src="<?php echo get_template_directory_uri(); ?>/assets/img/Line.png" alt="LINE"
                                    class="p-about__main-list-item-flex-img-img">
                            </picture>
                            <picture class="p-about__main-list-item-flex-img" style="width:24%;">
                                <img class="preserve_img01" style="width: 100px;"
                                    src="<?php echo get_template_directory_uri(); ?>/assets/img/QR.png" alt="QR"
                                    class="p-about__main-list-item-flex-img-img">
                            </picture>
                            <!-- <div class="p-about__main-list-item-flex-text"
                                style="display: flex; justify-content: center; align-items: center;">
                                <h3 class="p-about__main-list-item-title" style="font-size: 20px;">靴・ブーツ</h3>
                            </div> -->
                        </div>
                    </li>
                </div>
            </div>
        </div>
    </section>

    <section class="p-entry" id="entry">
        <div class="c-inner">
            <div class="p-entry__content">
                <div class="c-common__h2">
                    <h2 class="c-common__h2-jp">メールでお問い合わせ</h2>
                </div>
                <div class="p-entry__privacy" style="text-align:center; font-size:17px;">
                    <p>下記フォームへ必要事項を⼊⼒し、内容を確認のうえ送信してください。<br>お問い合わせいただいた内容を確認し、担当者よりご連絡いたします。</p>
                </div>
                <div class="p-entry__inner">
                    <ul class="p-entry__tab parent">
                        <li><a href="" data-filter="seeker" class="active">内容⼊⼒--内容確認--送信完了</a></li>
                        <!-- <li><a href="" data-filter="office">劇団・タレント<WBR>事務所様</a></li> -->
                    </ul>
                    <div class="p-entry__form">
                        <div class="seeker" style="font-size:14px">
                            <div id="mw_wp_form_mw-wp-form-4" class="mw_wp_form mw_wp_form_input  ">
                                <?php echo apply_shortcodes( '[contact-form-7 id="e5965c0" title="コンタクトフォーム 1"]' ); ?>
                             
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    </div>
    <footer class="l-footer" id="footer">
        <p class="l-footer__copyright">Copyright(C) XXXXXXX Corporation. All rights reserved.</p>
    </footer>
    <link rel='stylesheet' id='mw-wp-form-css'
        href='https://promotion-cast.com/lp02/wp-content/plugins/mw-wp-form/css/style.css?ver=6.3.2' type='text/css'
        media='all' />
    <script type='text/javascript' src='https://promotion-cast.com/lp02/wp-includes/js/jquery/jquery.min.js?ver=3.7.0'
        id='jquery-core-js'></script>
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
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
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