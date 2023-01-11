<!-- Using Css from _front-page.scss -->

<?php
    /* Template Name: Home Page */
    get_header();

?>
  

<section class="hero-header-container">
    <div class="hero-header">
        <img src="<?php echo get_site_url(); ?>/wp-content/themes/imaginarians/app/images/Headline-ImaginariansWanted-1.svg" alt="imaginarian wanted image">
    </div>
</section>


<section class="hero-container">
    <div class="hero-banner">
        <div class="hero-banner-typography">
            <h3> Imagine yourself at Imaginuity.</h3>
            <h2> 
                Imaginuity is partly about imagination, partly about ingenuity—and all about collaboration.
            </h2>
            
            <!-- using the template-button component -->
            <?php 
                get_template_part('template-parts/template', 'button', 
                    array(
                    'link' => 'https://www.imaginuity.com/careers/apply/',
                    'text' => '> Explore open positions',
                    'color' => 'white'
                    ) 
                );
            ;?>
             
        </div>
        <div class="video-wrapper">
            <video class="template-hero-video" autoplay loop muted playsinline src="<?php echo get_site_url(); ?>/wp-content/themes/imaginarians/app/images/adobe-video.mov">
        </div>
    </div>
</section>

<section class="cta-mobile">
    <img src="<?php echo get_site_url(); ?>/wp-content/themes/imaginarians/app/images/connect-cta-mobile.png" alt="connect call to action mobile" >
</section>

<?php 
    get_template_part('template-parts/template', 'double',  
    array( 
        'data1'  => array(
          'subtitle' => 'Focus on your next step — and the one after that, and the one after that.',
          'title' => 'Growth-focused career paths. Lorem ipsum dolor sit amet.',
          'paragraph' => 'Preview some of the content on Careers page. That content may include IC vs M paths at higher levels, CTA to open positions, deep dives into various departments, and/or examples of employee success stories.',
          'image' => 'blue-image-banner.jpg',
          'link' => 'https://www.imaginuity.com/who-we-are/'
        ),
        'data2'  => array(
            'image' => 'arrow-image.jpg'
        ),
    ));
?>


<section class="careers-tab-section">
    <section class="hero-container">
        <div class="hero-banner">
            <div class="hero-banner-typography">
                <h2> 
                    Ready to join us?<br>
                    Check out open roles now.
                </h2>
                <p>
                    Lorem ipsum dolor sit amet. Claudia in piscine cadet.
                </p>

                <!-- using the template-button component -->
                <?php 
                    get_template_part('template-parts/template', 'button', 
                        array(
                            'link' => 'https://www.imaginuity.com/careers/apply/',
                            'text' => '> Learn more',
                            'color' => 'white'
                        )
                    );
                ;?>
            </div>
            
            <img src="<?php echo get_site_url(); ?>/wp-content/themes/imaginarians/app/images/orange-accent-graphic.jpg" alt="orange graphic background" >
        </div>
    </section>
</section>




<?php 
    get_template_part('template-parts/template', 'double',  
    array( 
        'data1'  => array(
          'subtitle' => 'Environment',
          'title' => 'Business in the front —',
          'paragraph' => 'Preview some of the content on Environment/Experience page. That content may include hybrid WFH, free snack and soda at the office, 360º views of downtown, social and collaborative work spaces in the new office.',
          'image' => 'building-sky-image-banner.jpg',
          'link' => 'https://www.imaginuity.com/who-we-are/'
        ),
        'data2'  => array(
            'subtitle' => 'Experience',
            'title' => '— Party in the back',
            'paragraph' => 'Preview some of the content on Environment/Experience page. That content may include Engagement Houses, Halloween decor and costume contests. Chili cookout, Christmas Party, Hackathons.',
            'image' => 'donuts-image-banner.jpg',
            'link' => 'https://www.imaginuity.com/who-we-are/'
          ),
        
    ));
?>





<!------------------------------------------------ Benefits Section -------------------------------------------------->

<section class="benefit-section-container">
    <h2> Benefits </h2>
    <div class="benefit-section-content">

        <!-- needs to be converted to forloop/ template-part -->
        <div class="benefit-section-card">
            <img src="<?php echo get_site_url(); ?>/wp-content/themes/imaginarians/app/images/pig-icon.png" alt="piggy bank icon" >
            <hr/>
            <h3>   
                401K <br/>
                6% match
            </h3>
        </div>

        <div class="benefit-section-card">
            <img src="<?php echo get_site_url(); ?>/wp-content/themes/imaginarians/app/images/bandaid-icon.png" alt="cross bandaid icon" >
            <hr/>
            <h3>   
                HEALTHCARE<br/>
                100% PAID PREMIUMS
            </h3>
        </div>

        <div class="benefit-section-card">
            <img src="<?php echo get_site_url(); ?>/wp-content/themes/imaginarians/app/images/tree-icon.png" alt="nature tree icon">
            <hr/>
            <h3>   
                PTO<br/>
                6 WEEKS
            </h3>
        </div>
        <div class="benefit-section-card">
            <img src="<?php echo get_site_url(); ?>/wp-content/themes/imaginarians/app/images/chair-icon.png" alt="relaxing chair icon">
            <hr/>
            <h3>   
                HYBRID OFFICE
                FLEXIBILITY
            </h3>
        </div>
        <div class="benefit-section-card">
            <img src="<?php echo get_site_url(); ?>/wp-content/themes/imaginarians/app/images/profit-icon.png" alt="profit dividing icon" >
            <hr/>
            <h3>   
                PROFIT SHARING
                BONUS
            </h3>
        </div>
        <div class="benefit-section-card">
            <img src="<?php echo get_site_url(); ?>/wp-content/themes/imaginarians/app/images/snacks-icon.png" alt="chip snack icon">
            <hr/>
            <h3>   
                FREE IN-OFFICE SODAS AND SNACKS 
            </h3>
        </div>
    </div>
    <!-- using the template-button component -->
    <?php 
        get_template_part('template-parts/template', 'button', 
            array(
            'link' => 'https://www.imaginuity.com/who-we-are/',
            'text' => '> Learn more',
            'color' => '#004E78'
            ) 
        );
    ;?>

</section>


<?php get_footer(); ?>