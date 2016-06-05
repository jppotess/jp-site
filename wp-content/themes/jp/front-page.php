<?php

get_header(); ?>

        <div class="c-hero--fh">
            <div class="c-hero--fh__body">
                <div class="o-wrapper">
                    <h1 class="c-hero--fh__body__title">Hey, I'm John!</h1>
                    <h2 class="c-hero--fh__body__subtitle">Entrepreneur, Frontend/WordPress Developer, and Travel Enthusiast</h2>
                </div>
            </div>
        </div>

    <div class="o-container">
       <div class="c-hero">
            <div class="c-hero__body">
                <div class="o-wrapper">
                    <h3 class="c-hero__body__title">Not sure where to go next?</h3>
                    <p class="c-hero__body__content">That's ok, we've all lost our way at some point.</p>
                    <div class="c-hero__cta">
                        <div class="o-wrapper">
                            <h4 class="c-hero__cta__title">May I suggest checking out the:</h4>
                            <a class="c-button" href="<?php get_site_url();?>/about/" alt="About">About Section</a>
                            <span class="c-hero__cta__divider">- OR -</span>
                            <a class="c-button" href="<?php get_site_url();?>/blog/" alt="Blog">Blog Section</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php
get_footer();
