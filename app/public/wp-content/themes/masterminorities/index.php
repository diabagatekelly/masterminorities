<div class="container-fluid general-page">
<?php
   pageBanner(array(
       'title' => 'Blog',
       'background' => get_theme_file_uri('/images/blog.jpg')
   ));
?>

    <div class="row d-flex align-items-top blog-container">
        <div class="col-xs-12 col-md-9 text-center justify-content-center">
            <div class="row d-flex align-items-center">
            
            <?php 
            $stickies = get_option( 'sticky_posts' );
if ( $stickies ) {
    $args = [
        'post_type'           => 'post',
        'post__in'            => $stickies,
        'posts_per_page'      => 1,
        'ignore_sticky_posts' => 1
    ];
    $featured = new WP_Query($args);
            
            if($featured -> have_posts()) {
                ?>
                <div class="col-12">
                    <h2 class="text-left">Featured</h2>
                </div>
                <div class="col-12 featured-blog">

                <?php 
       
        while($featured -> have_posts()) {
            $featured -> the_post(); ?>
<div class="col">
            <h4><a href="<?php the_permalink();?>"><?php the_title()?></a></h4>
            <p>Posted by <?php the_author()?> on <?php the_time('n/j/y') ?> in <?php echo get_the_category_list(', ') ?> </p>
            <a href="<?php the_permalink();?>"><img class="img-fluid" src="<?php $pageBannerImage = get_field('banner_image'); echo $pageBannerImage['url'] ?>"></a>
            <p><?php echo wp_trim_words(get_the_content(), 50) ?></p>
            <a href="<?php the_permalink(); ?>">View Full Post</a>
            </div>

<?php
        }
        ?>
</div>

    <?php }
}
    ?>
<div class="col-12">
    <h2 class="text-left">What's new</h2>
</div>
</div>
<div class="row d-flex align-items-center regular-posts">



<?php 
get_header();

if(have_posts()) {

while(have_posts(  )) {
the_post(); ?>
<div class="col-xs-12 col-sm-5 col-lg-3 text-center justify-content-center blog-post" style="background-image: linear-gradient(rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4)), url(<?php $pageBannerImage = get_field('banner_image'); echo $pageBannerImage['url'] ?>); background-repeat: no-repeat; background-size: cover; color: white">
            <h4><a href="<?php the_permalink();?>"><?php the_title()?></a></h4>
            <div>
                <p>Posted by <?php the_author()?> on <?php the_time('n/j/y') ?> in <?php echo get_the_category_list(', ') ?> </p>
            </div>
            <div>
                <?php the_excerpt()?>
            </div>
            <a href="<?php the_permalink(); ?>">Continue Reading</a>
            </div>
<?php
}
} else {
    ?>
    <div class="col">
    <h4>Coming Soon!</h4>
</div>
<?php
}
?>
    


<div class="col-12 text-left">
<?php 
        echo paginate_links();
    ?>
</div>
</div>

        </div>
        <?php get_template_part('template-parts/sidebar'); ?>
    </div>
    <?php get_template_part('template-parts/footer'); ?>



</div>