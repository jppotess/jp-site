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

    <div class="o-container--flex">
       <div class="c-hero">
            <div class="c-hero__body">
                <h3 class="c-sub-title">Not sure where to go next?</h3>
                <p>That's cool, it's a crazy world and we've all lose our way at some point or another.</p>
                <h4>How about:</h4>
                <a href="<?php get_site_url();?>/about/" alt="About"><button>Learn about me and the site</button></a>
                <span>- OR -</span>
                <a href="<?php get_site_url();?>/blog/" alt="Blog"><button>Check out the blog</button></a>
            </div>
       </div>
    </div>

<?php
get_footer();
