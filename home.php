<?php
/*
Template Name: home
Template Post Type: post, page
*/
?>
<?php get_header(); ?>
<section class="home">
    <div class="container">
        <div class="homer__inner">
            <div class="homer-content">
                <h1 class="homer__title title-l color-primary font">
                    <?php the_field('title'); ?>
                </h1>
                <p class="home__text"><?php the_field('text'); ?></p>
                <button class="btn btn-primary btn-l">
                    <span class="btn-content">
                        <?php the_field('btn_text'); ?>
                        <span class="icon-arrow-right"></span>
                    </span>
                </button>
            </div>
            <?php $images = get_field('images');
            //    print_r($images[0]); 
            ?>
            <div class="home-images">
                <div class="home__img-top">
                    <img src="<?php echo $images[0]['url']; ?>" alt="">
                </div>
                <div class="home-bottom__images">
                    <div class="home-bottom__img-left">
                        <img src="<?php echo $images[1]['url']; ?>" alt="">
                    </div>
                    <div class="home-bottom__img-right">
                        <img src="<?php echo $images[2]['url']; ?>" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="solutions">
    <div class="container">
        <div class="solutions__head text-center block-text">
            <h2 class="title"><?php the_field('video_title'); ?></h2>
            <p class="text"><?php the_field('video_text'); ?></p>
        </div>
        <div class="solutions__inner">
            <div class="solutions__video">
                <video controls>
                    <source src="<?php the_field('video'); ?>">
                </video>
            </div>
            <div class="solutions__items">
                <?php $video_items = get_field('video_items');
                foreach ($video_items as $key => $item) { ?>
                    <div class="solutions-item">
                        <div class="solutions-item__icon icon-box icon-box-m">
                            <?php echo file_get_contents($item['icon']); ?>
                        </div>
                        <h4 class="solutions-item__title font title-s color-primary"><?php echo $item['title']; ?></h4>
                        <p class="solutions-item__text"><?php echo $item['text']; ?></p>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</section>
<!-- house -->
<div class="bg-block">
    <div class="container">
        <div class="bg-block__inner">
            <div class="bg-block__items">
                <?php $bg_items = get_field('bg_items');
                foreach ($bg_items as $key => $item) { ?>
                    <div class="bg-block-item">
                        <div class="bg-block-item__icon icon-box icon-box-m">
                            <?php echo file_get_contents($item['icon']); ?>
                        </div>
                        <div class="bg-block-item__content">
                            <div class="bg-block-item__title font title-s color-primary"><?php echo $item['title']; ?></div>
                            <div class="bg-block-item__text"><?php echo $item['text']; ?></div>
                        </div>
                    </div>
                <?php } ?>
            </div>
            <h3 class="bg-block__title title-l"><?php the_field('bg_title'); ?></h3>
        </div>
    </div>
</div>
<section class="comfort">
    <div class="container">
        <div class="comfort__head text-center block-text">
            <h4 class="title"><?php the_field('comfort_title'); ?></h4>
            <p class="text"><?php the_field('comfort_text'); ?></p>
        </div>
        <div class="comfort__images">
            <?php $comfort_images = get_field('comfort_images');
            foreach ($comfort_images as $key => $value) { ?>
                <img class="comfort__img" src="<?php echo $value['url']; ?>" alt="Уют и стиль <?php echo $key; ?>">
            <?php } ?>
        </div>
    </div>
</section>
<section class="composition">
    <div class="container">
        <div class="composition__head text-center block-text">
            <h2 class="title"><?php the_field('composition_title'); ?></h2>
            <p class="text"><?php the_field('composition_text'); ?></p>
        </div>
    </div>
    <div class="composition__items">
        <?php $composition_items = get_field('composition_items');
        foreach ($composition_items as $key => $item) { ?>
            <div class="composition-item">
                <div class="composition-item__icon icon-box icon-box-l">
                    <?php echo file_get_contents($item['icon']); ?>
                </div>
                <h6 class="composition-item__title font color-primary"><?php echo $item['title']; ?></h6>
                <p class="composition-item__text"><?php echo $item['text']; ?><< /p>
            </div>
        <?php } ?>
    </div>
</section>
<section class="advantages">
    <div class="container">
        <div class="advantages__head text-center block-text">
            <h4 class="title"><?php the_field('advantages_title'); ?></h4>
            <p class="text"><?php the_field('advantages_text'); ?></p>
        </div>
        <div class="advantages__items">
            <?php $advantages_items = get_field('advantages_items');
            foreach ($advantages_items as $key => $item) { ?>
                <div class="advantages-item">
                    <div class="advantages-item__content">
                        <div class="advantages-item__subtitle"><?php echo $item['subtitle']; ?></div>
                        <h4 class="advantages-item__title title color-primary"><?php echo $item['title']; ?></h4>
                        <p class="advantages-item__text"><?php echo $item['text']; ?></p>
                    </div>
                    <div class="advantages-item__image">
                        <img src="<?php echo $item['img']; ?>" alt="<?php echo $item['title']; ?>">
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</section>
<div class="banner">
    <div class="container">
        <div class="banner__inenr">
            <div class="banner__content">
                <h4 class="banner__title title"></h4>
                <p class="banner__text"></p>
                <div class="banner__bottom">
                    <button class="banner__btn btn btn-l">
                        <span class="btn-content">
                            <?php the_field('btn_text'); ?>
                            <span class="icon-arrow-right"></span>
                        </span>
                    </button>
                    <div class="banner-socials">
                        <a class="banner-socials-item" href="#" target="_blank"><span class="icon-WhatsApp"></span></a>
                        <a class="banner-socials-item" href="#" target="_blank"><span class="icon-Telegram"></span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<section class="about">
    <div class="container">
        <div class="about__head text-center block-text">
            <h4 class="title"><?php the_field('about_title'); ?></h4>
            <p class="text"><?php the_field('about_texts'); ?></p>
        </div>
        <div class="about__items">
            <?php $about_items = get_field('about_items');
            foreach ($about_items as $key => $item) { ?>
                <div class="about-item">
                    <div class="about-item-icon icon-box"></div>
                    <div class="about-item__content">
                        <h6 class="about-item__title font title-s"></h6>
                        <p class="about-item__text"></p>
                    </div>
                </div>
            <?php } ?>
        </div>
        <div class="about__images">
            <?php $about_images = get_field('about_images');
            foreach ($about_images as $key => $value) { ?>
                <img class="about__img" src="<?php echo $value['url']; ?>" alt="">
            <? } ?>
        </div>
    </div>
</section>
<section class="factory">
    <div class="container">
        <div class="factory__inner">
            <div class="factory__content">
                <h4 class="factory__title title color-primary"><?php the_field('factory_title'); ?></h4>
                <p class="factory__text"><?php the_field('factory_text'); ?></p>
                <div class="factory__items">
                    <?php $factory_items = get_field('factory_items');
                    foreach ($factory_items as $key => $item) { ?>
                        <div class="factory-item">
                            <div class="factory__title color-primary font"><?php echo $item['title']; ?></div>
                            <div class="factory__text"><?php echo $item['text']; ?></div>
                        </div>
                    <?php } ?>
                </div>
            </div>
            <div class="factory-img">
                <img src="<?php the_field('factory_img'); ?>" alt="">
            </div>
        </div>
        <div class="factory-images__items">
            <?php $factory_images = get_field('factory_images');
            foreach ($factory_images as $key => $value) { ?>
                <img class="factory-item__img" src="<?php echo $value['url']; ?>" alt="">
            <?php } ?>
        </div>
    </div>
</section>
<section class="faq">
    <div class="container">
        <div class="faq__head text-center block-text">
            <h4 class="title"><?php the_field('faq_title'); ?></h4>
            <p class="text"><?php the_field('faq_text'); ?></p>
        </div>
        <div class="faq__items">
            <?php $faq_items = get_field('faq_items');
            foreach ($faq_items as $key => $item) { ?>
                <div class="faq-item">
                    <div class="faq-question">
                        <h4><?php echo $item['title']; ?></h4>
                        <div>+</div>
                    </div>
                    <div class="faq-spoller"><?php echo $item['text']; ?></div>
                </div>
            <?php } ?>
        </div>
    </div>
</section>
<section class="contacts">
    <div class="container">
        <div class="contacts__inner">
            <div class="contacts__content">
                <div class="contacts__title"><?php the_field('contacts_title'); ?></div>
                <div class="contacts__text"><?php the_field('contacts_text'); ?></div>
                <div class="contacts__items">
                    <div class="contacts-row">
                        <a class="contacts-item" href="">
                            <span class="icon-Phone"></span>

                        </a>
                        <div class="contacts-social">
                            <a class="contacts-social-item icon-box" href="" target="_blank"><span class="icon-WhatsApp"></span></a>
                            <a class="contacts-social-item icon-box" href="" target="_blank"><span class="icon-Telegram"></span></a>
                        </div>
                    </div>
                    <a class="contacts-item" href="mailto:">
                        <span class="icon-Email"></span>

                    </a>
                    <div class="contacts-item">
                        <span class="icon-Location"></span>

                    </div>
                </div>
                <button class="btn btn-primary btn-l">
                    <span class="btn-content"><?php the_field('contacts_btn_text'); ?></span>
                    <span class="icon-arrow-right"></span>
                </button>
            </div>
            <div class="contacts__map"><?php the_field('map'); ?></div>
        </div>
    </div>
</section>
<?php get_footer(); ?>