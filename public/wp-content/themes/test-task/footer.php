<footer class="accordeon-section">
    <div class="container">
        <div class="accordeon-section__content">
            <h2 class="accordeon-section__title"><?php echo get_post_meta(get_the_ID(), 'footer_title', true); ?></h2>
            <img src="<?php the_field('flame'); ?>" alt="flame" class="accordeon-section__pic">
            <ul class="accordeon" id="accordeon">
        <?php for ($i = 1; $i <= 3; $i++): ?>
            <?php 
                $title = get_field("accordion_title_$i");
                $item1 = get_field("accordion_item_{$i}_1");
                $item2 = get_field("accordion_item_{$i}_2");
                $item3 = get_field("accordion_item_{$i}_3");
                $item3_context = get_field("accordion_item_{$i}_3_context");
                $arrow = get_field('accordeon_arrow'); // Одна и та же иконка
            ?>
            <?php if ($title): ?>
                <li class="accordeon__item" data-item>
                    <div class="accordeon__top-wrapper">
                        <h6 class="accordeon__title"><?php echo esc_html($title); ?></h6>
                        <img src="<?php echo esc_url($arrow); ?>" alt="" class="accordeon__arrow">
                    </div>
                    <div class="accordeon__wrapper-list">
                        <ul class="accordeon__list-answers">
                            <?php if ($item1): ?>
                                <li class="accordeon__sub-item">
                                    <p class="accordeon__answer"><?php echo esc_html($item1); ?></p>
                                </li>
                            <?php endif; ?>
                            <?php if ($item2): ?>
                                <li class="accordeon__sub-item">
                                    <p class="accordeon__answer"><?php echo esc_html($item2); ?></p>
                                </li>
                            <?php endif; ?>
                            <?php if ($item3): ?>
                                <li class="accordeon__sub-item">
                                    <p class="accordeon__answer">
                                        <?php echo esc_html($item3); ?>
                                        <?php if ($item3_context): ?>
                                            <span class="accordeon__context-text"><?php echo esc_html($item3_context); ?></span>
                                        <?php endif; ?>
                                    </p>
                                </li>
                            <?php endif; ?>
                        </ul>
                    </div>
                </li>
            <?php endif; ?>
        <?php endfor; ?>
    </ul>
        </div>
    </div>
</footer>
<?php wp_footer();?>
</body>
</html>