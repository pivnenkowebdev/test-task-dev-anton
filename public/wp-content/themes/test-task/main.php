<main>
    <section class="guide-section">
        <div class="container">
            <div class="guide-section__content">
                <ul class="guide-list">
                    <li class="guide-list__item">
                        <article class="hint">
                            <img src="<?php the_field('icon_verif'); ?>" alt="verification icon" class="hint__icon">
                            <p class="hint__descriprion"><span class="hint__text"><?php echo get_post_meta(get_the_ID(), 'complete', true); ?></span> <span class="hint__context"><?php echo get_post_meta(get_the_ID(), 'verification', true); ?></span></p>
                        </article>
                    </li> 
                    <li class="guide-list__item">
                        <article class="hint">
                            <img src="<?php the_field('icon_link'); ?>" alt="get link icon" class="hint__icon">
                            <p class="hint__descriprion"><span class="hint__context">Get</span> <span class="hint__text">a referral</span> <span class="hint__context">link</span></p>
                        </article>
                    </li> 
                    <li class="guide-list__item">
                        <article class="hint">
                            <img src="<?php the_field('icon_invite'); ?>" alt="invite icon" class="hint__icon">
                            <p class="hint__descriprion"><span class="hint__context">Invite</span> <span class="hint__text">up to 5 friends</span></p>
                        </article>
                    </li>
                    <li class="guide-list__item">
                        <article class="hint">
                            <img src="<?php the_field('icon_bonus'); ?>" alt="bonus icon" class="hint__icon">
                            <p class="hint__descriprion"><span class="hint__context">Receive a bonus</span> <span class="hint__text">for yourself and your friend</span></p>
                        </article>
                    </li>
                </ul>
            </div>
        </div>
    </section>
</main>