<?php
/*
Template Name: home
Template Post Type: post, page
*/
?>
<?php get_header(); ?>
<section class="home section">
    <div class="container">
        <div class="home__inner">
            <div class="home-content">
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
            <?php $images = get_field('images'); ?>
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
<section class="solutions section">
    <div class="container">
        <div class="solutions__head text-center block-text">
            <h2 class="title"><?php the_field('video_title'); ?></h2>
            <p class="text"><?php the_field('video_text'); ?></p>
        </div>
        <div class="solutions__inner">
            <div class="solutions__video">
                <video>
                    <source src="<?php the_field('video'); ?>">
                </video>
            </div>
            <div class="solutions__items">
                <?php $video_items = get_field('video_items');
                foreach ($video_items as $key => $item) { ?>
                    <div class="solutions-item">
                        <div class="solutions-item__icon icon-box icon-box-m">
                            <span class="btn-content">
                                <?php echo file_get_contents($item['icon']); ?>
                            </span>
                        </div>
                        <div class="solutions-item__content">
                            <h4 class="solutions-item__title font title-s color-primary"><?php echo $item['title']; ?></h4>
                            <p class="solutions-item__text"><?php echo $item['text']; ?></p>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</section>
<!-- house -->

<div class="bg-block section" style="background-image: url('<?php the_field('bg_img') ?>');">
    <div class="container">
        <div class="bg-block__inner d-flex">
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
            <h3 class="bg-block__title title-l font"><?php the_field('bg_title'); ?></h3>
        </div>
    </div>
</div>
<section class="comfort section">
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
<section class="composition section">
    <div class="container">
        <div class="composition__head text-center block-text">
            <h2 class="title"><?php the_field('composition_title'); ?></h2>
            <p class="text"><?php the_field('composition_text'); ?></p>
        </div>

        <div class="composition__items">
            <?php $composition_items = get_field('composition_items');
            foreach ($composition_items as $key => $item) { ?>
                <div class="composition-item text-center">
                    <div class="composition-item__icon icon-box icon-box-l">
                        <?php echo file_get_contents($item['icon']); ?>
                    </div>
                    <h6 class="composition-item__title  title-s font color-primary"><?php echo $item['title']; ?></h6>
                    <p class="composition-item__text"><?php echo $item['text']; ?></p>
                </div>
            <?php } ?>
        </div>
    </div>
</section>
<section class="advantages section">
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
<div class="banner section">
    <div class="container">
        <div class="banner__inner">
            <div class="banner__content">
                <h4 class="banner__title title"> <?php the_field('banner_title'); ?></h4>
                <p class="banner__text"> <?php the_field('banner_text'); ?></p>
                <div class="banner__bottom">
                    <button class="banner__btn btn btn-accent btn-l">
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
            <img class="banner__img" src="<?php echo get_template_directory_uri(); ?>/assets/images/far_eastern.svg" alt="">
        </div>
    </div>
</div>
<section class="about section">
    <div class="container">
        <div class="about__head text-center block-text">
            <h4 class="title"><?php the_field('about_title'); ?></h4>
            <p class="text"><?php the_field('about_text'); ?></p>
        </div>
        <div class="about__items section">
            <?php $about_items = get_field('about_items');
            foreach ($about_items as $key => $item) { ?>
                <div class="about-item">
                    <div class="about-item__icon icon-box icon-box-l"><?php echo file_get_contents($item['icon']); ?></div>
                    <div class="about-item__content">
                        <h6 class="about-item__title color-primary font title-s"><?php echo $item['title']; ?></h6>
                        <p class="about-item__text"><?php echo $item['text']; ?></p>
                    </div>
                </div>
            <?php } ?>
        </div>
        <div class="about__images">
            <?php $about_images = get_field('about_images');
            foreach ($about_images as $key => $value) { ?>
                <img class="about__img br" src="<?php echo $value['url']; ?>" alt="">
            <?php } ?>
        </div>
    </div>
</section>
<div class="feedback section">
    <div class="container">
        <div class="feedback__inner br">
            <div class="feedback__col">
                <div class="feedback-form__title title"><?php the_field('form_title'); ?></div>
                <div class="feedback-form__text text"><?php the_field('form_text'); ?></div>
                <?php echo do_shortcode('[contact-form-7 id="6ba541b" html_class="feedback-form" title="Свяжитесь с нами"]'); ?>
            </div>
            <img class="feedback__img" src="<?php the_field('form_img'); ?>" alt="Свяжитесь с нами" />
        </div>
    </div>
</div>
<section class="factory section">
    <div class="container">
        <div class="factory__inner section">
            <div class="factory__content">
                <h4 class="factory__title title color-primary"><?php the_field('factory_title'); ?></h4>
                <p class="factory__text"><?php the_field('factory_text'); ?></p>
                <div class="factory__items">
                    <?php $factory_items = get_field('factory_items');
                    foreach ($factory_items as $key => $item) { ?>
                        <div class="factory-item">
                            <div class="factory-item__title color-primary font"><?php echo $item['title']; ?></div>
                            <div class="factory-item__text"><?php echo $item['text']; ?></div>
                        </div>
                    <?php } ?>
                </div>
            </div>
            <img class="factory__img br" src="<?php the_field('factory_img'); ?>" alt="">
        </div>
        <div class="factory-images__items">
            <?php $factory_images = get_field('factory_images');
            foreach ($factory_images as $key => $value) { ?>
                <img class="factory-item__img br" src="<?php echo $value['url']; ?>" alt="">
            <?php } ?>
        </div>
    </div>
</section>
<section class="faq section">
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
                        <h4 class="title-s font color-primary"><?php echo $item['title']; ?></h4>
                        <div class="faq-item__btn"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_2197_472)">
                                    <path d="M12 0C5.38294 0 0 5.38294 0 12C0 18.6171 5.38294 24 12 24C18.6171 24 24 18.6171 24 12C24 5.38294 18.6171 0 12 0ZM17.25 12.9999H12.9999V17.25C12.9999 17.802 12.552 18.2499 12 18.2499C11.448 18.2499 11.0001 17.802 11.0001 17.25V12.9999H6.75C6.19795 12.9999 5.75006 12.552 5.75006 12C5.75006 11.448 6.19795 11.0001 6.75 11.0001H11.0001V6.75C11.0001 6.19795 11.448 5.75006 12 5.75006C12.552 5.75006 12.9999 6.19795 12.9999 6.75V11.0001H17.25C17.802 11.0001 18.2499 11.448 18.2499 12C18.2499 12.552 17.802 12.9999 17.25 12.9999Z" fill="url(#paint0_linear_2197_472)" />
                                </g>
                                <defs>
                                    <linearGradient id="paint0_linear_2197_472" x1="12" y1="0" x2="12" y2="24" gradientUnits="userSpaceOnUse">
                                        <stop stop-color="#50B0FD" />
                                        <stop offset="1" stop-color="#3396DB" />
                                    </linearGradient>
                                    <clipPath id="clip0_2197_472">
                                        <rect width="24" height="24" fill="white" />
                                    </clipPath>
                                </defs>
                            </svg>
                        </div>
                    </div>
                    <div class="faq-spoller" style="display: none;"><?php echo $item['text']; ?></div>
                </div>
            <?php } ?>
        </div>
    </div>
</section>
<section id="contacts" class="contacts section">
    <div class="container">
        <div class="contacts__inner">
            <div class="contacts__content">
                <div class="contacts__title title color-primary"><?php the_field('contacts_title'); ?></div>
                <div class="contacts__text"><?php the_field('contacts_text'); ?></div>
                <div class="contacts__items">
                    <div class="contacts-row">
                        <a class="contacts-item title-s font" href="">
                            <span class="icon-Phone color-primary"></span>
                            <?php the_field('contacts_phone', 'options'); ?>
                        </a>
                        <div class="contacts-social">
                            <a class="contacts-social-item icon-box" href="" target="_blank"><span class="icon-WhatsApp"></span></a>
                            <a class="contacts-social-item icon-box" href="" target="_blank"><span class="icon-Telegram"></span></a>
                        </div>
                    </div>
                    <a class="contacts-item title-s font" href="mailto:">
                        <span class="icon-Email color-primary"></span>
                        <?php the_field('email', 'options'); ?>
                    </a>
                    <div class="contacts-item title-s font">
                        <span class="icon-Location color-primary"></span>
                        <?php the_field('address', 'options'); ?>
                    </div>
                </div>
                <button class="btn btn-primary btn-l">
                    <span class="btn-content"><?php the_field('contacts_btn_text'); ?>
                        <span class="icon-arrow-right"></span>
                    </span>

                </button>
            </div>
            <div class="contacts__map">
                <iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3Aa380edc36de874e088dafba0786ff15bf7b898e70f76d0a688e47d885c9f7ac4&amp;source=constructor" width="100%" height="100%" frameborder="0"></iframe>
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>