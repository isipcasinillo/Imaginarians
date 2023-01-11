


<?php 
    $link = $args['link'];
    $text = $args['text'];
    $color = $args['color'];

;?>

<a href="<?php echo $link ;?>" target="_blank">
    <button  class="button-cta-rounded" style="color: <?php echo $color ;?>; border-color: <?php echo $color ;?>" > <?php  echo $text ;?> </button>
</a>


<?php  echo $subtitle1 ;?>