<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 *
 */

?>
 

<footer class="footer-section-container" style="background-image:url('<?php echo get_site_url(); ?>/wp-content/themes/imaginarians/app/images/footer-background-image.jpg');" alt="footer background image pattern">
    <div class="footer-section-content" >
        <h3>Core values guide everything we do.</h3>
        <h2>Driven by purpose: To transform lives</h2>
        <ul class="footer-list-description">
            <li>
                Preview some of the content on Purpose/Our DNA page. That content may include mission and vision. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vitae libero ornare, tempus sem quis, volutpat neque. Sed fringilla at erat at volutpat.
            </li>
            <li>
                Preview some of the content on Purpose/Our DNA page. That content may include mission and vision. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vitae libero ornare, tempus sem quis, volutpat neque. Sed fringilla at erat at volutpat.
            </li>
            <li>
                Preview some of the content on Purpose/Our DNA page. That content may include mission and vision. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vitae libero ornare, tempus sem quis, volutpat neque. Sed fringilla at erat at volutpat.
            </li>
        </ul>

         <!-- using the template-button component -->
        <div class="footer-button-container">
            <?php 
                get_template_part('template-parts/template', 'button', 
                    array(
                    'link' => 'https://www.imaginuity.com/who-we-are/',
                    'text' => '> Learn more',
                    'color' => 'white'
                    ) 
                );
            ;?>
        </div>
    </div>

   
</footer>


<?php wp_footer(); ?>
</body>
</html>
