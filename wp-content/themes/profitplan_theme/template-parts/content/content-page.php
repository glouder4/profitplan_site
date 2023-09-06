<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>
<section id="banner_section" class="full_screen_section inner_page">
    <div class="waveWrapper waveAnimation">
        <div class="waveWrapperInner bgTop">
            <div class="wave waveTop" style="background-image: url('http://front-end-noobs.com/jecko/img/wave-top.png')"></div>
        </div>
        <div class="waveWrapperInner bgMiddle">
            <div class="wave waveMiddle" style="background-image: url('http://front-end-noobs.com/jecko/img/wave-mid.png')"></div>
        </div>
        <div class="waveWrapperInner bgBottom">
            <div class="wave waveBottom" style="background-image: url('http://front-end-noobs.com/jecko/img/wave-bot.png')"></div>
        </div>

        <div id="banner_section-data">
            <div class="container">
                <div class="d-flex flex-column" id="desc_first_banner">
                    <div class="section_title">
                        <div class="title"><?php get_template_part( 'template-parts/header/entry-header' ); ?></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="container">
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

        <div class="entry-content">
            <?php
            the_content();
            ?>
        </div><!-- .entry-content -->

    </article><!-- #post-<?php the_ID(); ?> -->
</div>
