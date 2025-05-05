<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php the_title(); ?></title>
    <?php wp_head();?>
</head>
<body>
<header class="main-header">
    <div class="container">
        <div class="main-header__content">
            <article class="hero">
                <div class="hero__titles">
                    <h1 class="hero__fake-heading">
                        <?php the_title(); ?>
                    </h1>
                    <picture>
                        <source srcset="<?php the_field('earn_img_desc'); ?>" media="(min-width: 1024px)">
                        <source srcset="<?php the_field('earn_img_tablet'); ?>" media="(min-width: 768px)">
                        <img class="hero__heading hero__heading--earn" src="<?php the_field('earn_img_mobile'); ?>" alt="<?php the_field('earn_img_alt'); ?>">
                    </picture>

                    <p class="hero__action">
                        <?php the_field('up_to'); ?>
                    </p>

                    <picture>
                        <source srcset="<?php the_field('price_img_desc'); ?>" media="(min-width: 1024px)">
                        <source srcset="<?php the_field('price_img_tablet'); ?>" media="(min-width: 768px)">
                        <img class="hero__heading hero__heading--price" src="<?php the_field('price_img_mobile'); ?>" alt="<?php the_field('price_img_alt'); ?>">
                    </picture>

                    <picture>
                        <source srcset="<?php the_field('bonus_img_desc'); ?>" media="(min-width: 1024px)">
                        <source srcset="<?php the_field('bonus_img_tablet'); ?>" media="(min-width: 768px)">
                        <img class="hero__heading hero__heading--bonus" src="<?php the_field('bonus_img_mobile'); ?>" alt="<?php the_field('bonus_img_alt'); ?>">
                    </picture>
                    <p class="hero__invite"><?php echo get_post_meta(get_the_ID(), 'invite', true); ?></p>
                </div>
                <img src="./img/icons/star.svg" alt="woman icon" class="hero__star">
                <div class="hero__eclipse hero__eclipse--top"></div>
                <div class="hero__eclipse hero__eclipse--middle"></div>
                <div class="hero__eclipse hero__eclipse--bottom"></div>
                <?php 
                    $link = get_field('link');
                    $link_text = get_field('link_text');
                    if( $link ): ?>
                        <a class="action-link" href="<?php echo esc_url( $link ); ?>">
                            <?php echo esc_html( $link_text ); ?>
                        </a>
                <?php endif; ?>
            </article>
            <img src="<?php the_field('diamond_blur'); ?>" alt="diamond icon" class="main-header__pic main-header__pic--diamond-blur">
            <img src="<?php the_field('diamond_quality'); ?>" alt="diamond icon" class="main-header__pic main-header__pic--diamond-quality">
            <img src="<?php the_field('diamond_pink'); ?>" alt="diamond icon" class="main-header__pic main-header__pic--diamond-pink">
            <img src="<?php the_field('mines'); ?>" alt="mines icon" class="main-header__pic main-header__pic--mines">
            <img src="<?php the_field('plane'); ?>" alt="plane icon" class="main-header__pic main-header__pic--plane">
            <img src="<?php the_field('baloon'); ?>" alt="balloon icon" class="main-header__pic main-header__pic--baloon">
            <img src="<?php the_field('man_pic'); ?>" alt="man icon" class="main-header__pic main-header__pic--man">
            <img src="<?php the_field('woman_pic'); ?>" alt="woman icon" class="main-header__pic main-header__pic--woman">
        </div>
    </div>
</header>