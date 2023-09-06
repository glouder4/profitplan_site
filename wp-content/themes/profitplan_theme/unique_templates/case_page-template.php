<?php
    /*
        Template Name: Шаблон кейса
        Template Post Type: cases
    */
    get_header();
    $about_case = get_field('о_кейсе');
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

                <div class="hmb_btns mt-3 col-12">
                    <a href="<?=get_field('демо_ссылка');?>">
                        <div class="hmb_btn">Открыть демо</div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="container">
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <section id="about_case-tasks">
            <?php
                $tasks = $about_case['задачи'];

                if( $tasks != '' ):
            ?>
                <div id="tasks" class="case_task-data">
                    <h3>Задачи</h3>
                    <ul>
                        <?php foreach ($tasks['задача'] as $task):  ?>
                            <li><?=$task['текст'];?></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            <?php endif; ?>

            <?php
            $solutions = $about_case['решения'];

            if( $solutions != '' ):
                ?>
                <div id="solutions" class="case_task-data <?=( $tasks != '' ) ? 'mt-3' : '';?>">
                    <h3>Решения</h3>
                    <ul>
                        <?php foreach ($solutions['решение'] as $solution):  ?>
                            <li><?=$solution['текст'];?></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            <?php endif; ?>

            <?php
            $results = $about_case['результаты'];

            if( $results != '' ):
                ?>
                <div id="results" class="case_task-data <?=( $solutions != '' ) ? 'mt-3' : '';?>">
                    <h3>Результаты</h3>
                    <ul>
                        <?php foreach ($results['результат'] as $result):  ?>
                            <li><?=$result['текст'];?></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            <?php endif; ?>


        </section>

        <div class="entry-content">
            <?php
                the_content();
            ?>
        </div><!-- .entry-content -->

    </article><!-- #post-<?php the_ID(); ?> -->
</div>
<?php
    get_footer();
?>

