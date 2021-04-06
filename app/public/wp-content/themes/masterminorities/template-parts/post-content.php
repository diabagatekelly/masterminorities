<?php
while(have_posts(  )) {
the_post(  ); ?>
<div class="row d-flex align-items-top page-container">
    <div class="col-xs-12 col-sm-9 text-left justify-content-center single-post-content">
    <?php the_content()?>
    <?php comments_template( '', true ); ?>

    </div>

    <?php }
?>