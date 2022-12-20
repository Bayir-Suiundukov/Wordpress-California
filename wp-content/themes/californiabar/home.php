<?php
/*
Template Name: Home
*/
?>
<?php get_header(); ?>

<!-- Intro -->

<div class="intro">
    <div class="intro__blur">
        <div class="container">
            <div class="intro__text">
                <div class="intro__title">CALIFORNIA BAR</div>
                <div class="intro__subtitle">Лучший <span style="color: #D6258F;"> концертный бар </span> на Арбате
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Upcoming events -->

<div class="events">
    <div class="container">
        <div class="title">Бли<span>жай</span>шие мер<span>о</span>приятия</div>
        <div class="events__list">
            <img class="event__arrow" width="287" src="<?php bloginfo('template_url'); ?>/assets/img/arrow.svg" alt="">

            <?php
global $post;

$myposts = get_posts([ 
	'numberposts' => -1,
    'category' => 3,
]);

if( $myposts ){
	foreach( $myposts as $post ){
		setup_postdata( $post );
		?>
		<!-- Вывод постов, функции цикла: the_title() и т.д. -->
        <div class="event__poster">
            <?php the_post_thumbnail($size = array(410,410)); ?>
            <div class="event__title"><?php the_title();?></div>
            <div class="event__date"><?php echo get_the_date();?></div>
            <span class="event__description"><?php echo get_the_content();?></span>
        </div>

		<?php 
	}
}
wp_reset_postdata(); // Сбрасываем $post
?>
        </div>
    </div>
</div>

<!-- Menu -->

<div class="menu">
    <a name="menu"></a>
    <img class="menu__star" src="<?php bloginfo('template_url'); ?>/assets/img/star.svg" alt="">
    <div id="menu__title" class="title">Но<span>в</span>инки <span>бар</span>а</div>
    <div class="container">
        <div class="menu__content">
            <div class="menu__list">
                <div class="menu__product">

                    <div class="menu__name-price">
                        <span class="menu__product-name">Джин-тоник</span><span class="menu__product-price">360
                            ₽</span>

                    </div>
                    <div class="menu__ingredients">Джин, тоник, лимон, лёд. 250 мл.</div>
                </div>


                <div class="menu__product">

                    <div class="menu__name-price">
                        <span class="menu__product-name">Отвертка</span><span class="menu__product-price">340
                            ₽</span>

                    </div>
                    <div class="menu__ingredients">Водка, апельсиновый сок, апельсин, лёд. 250 мл.</div>
                </div>


                <div class="menu__product">

                    <div class="menu__name-price">
                        <span class="menu__product-name">Джим бим эппл тоник</span class="menu__product-price"><span class="menu__product-price">360 ₽</span>

                    </div>
                    <div class="menu__ingredients">Джим бим эпл, тоник, яблоко, лёд. 250 мл.</div>
                </div>


                <div class="menu__product">

                    <div class="menu__name-price">
                        <span class="menu__product-name">Раша тудей</span><span class="menu__product-price">350
                            ₽</span>

                    </div>
                    <div class="menu__ingredients">Финляндия Водка, ликёр дыня, ликер банан, яблочный сок,
                        коктейльная вишня, лёд. 250мл.</div>
                </div>
            </div>

            <div class="menu__img">
                <img class="menu__img" src="<?php bloginfo('template_url'); ?>/assets/img/Drink.png" alt="">
                <a name='btn__second'></a>

            </div>

        </div>

        <div class="menu__buttons">
            <button class="menu__btn-first">Посмотреть барное меню целиком</button>
            <button class="menu__btn-second">Меню АЛКОШОК</button>
        </div>
    </div>
</div>

<!-- Banner -->

<div class="banner">
    <span>Дискотека</span>
    <span>Каждую пятницу и субботу</span>
</div>


<!-- Gallery -->

<div class="gallery">
    <div class="title">Г<span>а</span>ле<span>рея</span></div>
    <div class="container">
        <div class="gallery__content">
            <?php
            global $post;

            $myposts = get_posts([
                'numberposts' => -1,
                'category' => 4,
            ]);

            if ($myposts) {
                foreach ($myposts as $post) {
                    setup_postdata($post);
            ?>
                    <!-- Вывод постов, функции цикла: the_title() и т.д. -->
                    <div src='<?php the_content(); ?>' class="gallery__picture">
                        <?php the_content();?>
                    </div>


            <?php
                }
            } 
            wp_reset_postdata(); // Сбрасываем $post
            ?>

        </div>
    </div>
</div>

<!-- Adress -->

<div class="adress">
    <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2245.4591185135423!2d37.593229715930455!3d55.75052628055271!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46b54b6c516e9811%3A0x8804e3c5975c233!2sCalifornia%20Bar!5e0!3m2!1sru!2sru!4v1661842979518!5m2!1sru!2sru" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>

<?php get_footer(); ?>

<!-- container 1290px -->