


<?php 
    $title1 = $args['data1']['title'];
    $subtitle1 = $args['data1']['subtitle'];
    $paragraph1 = $args['data1']['paragraph'];
    $image1 = $args['data1']['image'];
    $link1 = $args['data1']['link'];

    $title2 = $args['data2']['title'];
    $subtitle2 = $args['data2']['subtitle'];
    $paragraph2 = $args['data2']['paragraph'];
    $image2 = $args['data2']['image'];
    $link2 = $args['data2']['link'];

    if ($paragraph2 == '') {
        $isEmpty = 'hide';
    };

;?>



<section class="template-section-container">
    <div class="template-section">
        <div class="full-wrapper">
            <div class="figure1" style="background-image:url('<?php echo get_site_url(); ?>/wp-content/themes/imaginarians/app/images/<?php echo $image1;?>');" alt="<?php echo $image1 ;?>"> 
                <!-- needs to be a component -->
                <section class="hero-container">
                    <div class="hero-banner">
                        <div class="hero-banner-typography">
                            <h3>
                                <?php  echo $subtitle1 ;?>
                            </h3>
                            <h2> 
                                <?php  echo $title1 ;?>
                            </h2>
                            <p>
                                <?php  echo $paragraph1 ;?>
                            </p>
                            <?php 
                                get_template_part('template-parts/template', 'button', 
                                    array(
                                        'link' => 'https://www.imaginuity.com/careers/apply/',
                                        'text' => '> Learn more',
                                        'color' => 'white',
                                        'link' => $link1
                                    )
                                );
                            ;?>
                        </div>
                    </div>
                </section>
            </div>
        </div>
        <div class="full-wrapper <?php echo $isEmpty ;?>">
            <div class="figure1 " style="background-image:url('<?php echo get_site_url(); ?>/wp-content/themes/imaginarians/app/images/<?php echo $image2;?>');" alt="<?php echo $image2 ;?>"> 
                <!-- needs to be a component -->
                <section class="hero-container">
                    <div class="hero-banner">
                        <div class="hero-banner-typography">
                        <h3>
                                <?php  echo $subtitle2 ;?>
                            </h3>
                            <h2> 
                                <?php  echo $title2 ;?>
                            </h2>
                            <p>
                                <?php  echo $paragraph2 ;?>
                            </p>
                            <?php if($paragraph2) : ?>
                                <?php 
                                    get_template_part('template-parts/template', 'button', 
                                        array(
                                            'link' => 'https://www.imaginuity.com/careers/apply/',
                                            'text' => '> Learn more',
                                            'color' => 'white',
                                            'link' => $link2
                                        )
                                    );
                                ;?>
                            <?php endif; ?>
                            
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
</section>


