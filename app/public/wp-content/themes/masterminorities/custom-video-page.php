<?php /*Template Name: CustomPageT1 */ ?>
<?php 
get_header();
?>

<div class="container-fluid">
    <?php
   pageBanner();
?>

<?php
while(have_posts(  )) {
the_post(  ); ?>
   
<div class="row d-flex align-items-center page-container video-page">
    <div class="col text-center justify-content-center live-video">
    <h2>Live Streaming Video</h2>
    <div class="row d-flex">
        <div class="col-12 justify-content-center text-center">
        <p class="font-weight-bold">Next Live Stream Date: <?php the_field('live_stream_day') ?> at <?php the_field('live_stream_time') ?> PST</p>
        <?php the_content()?>
        </div>
        <div class="col-12 justify-content-left text-left">
        <?php comments_template( '', true ); ?>
        </div>
    </div>
</div>
</div>
<?php }
?>

<div class="row d-flex align-items-top page-container video-page">
    <div class="col-xs-12 col-sm-9 text-left justify-content-center ed-videos-section">
        <div class="row d-flex align-items-center">
        <div class="col-12 text-center justify-content-center">
    <h2>Educational Videos</h2>
</div>
<?php 
// Define custom query parameters
$custom_query_args = array( 
    'paged' => get_query_var('paged', 1),
    'post_type' => 'videos',
    'posts_per_page' => '4'
);
    
    // Instantiate custom query
    $videoPosts = new WP_Query( $custom_query_args );

        while($videoPosts -> have_posts()) {
            $videoPosts -> the_post(); ?>
<div class="col-xs-12 col-lg-6 text-center justify-content-center ed-videos">
            <h4><a href="<?php the_permalink();?>"><?php the_title()?></a></h4>
            <p>Posted by <?php the_author()?> on <?php the_time('n/j/y') ?> in <a href="<?php echo site_url('/videos') ?>">Videos</a></p>
            <?php the_content()?>
            <a href="<?php the_permalink(); ?>">View Full Post</a>
            </div>
<?php
    }
    ?>
    
   <div class="col-12 text-left pagination">
   <?php echo paginate_links(array(
       'total' => $videoPosts->max_num_pages
   ))
   ?>
    </div>
        </div>
    </div>
    <?php get_template_part('template-parts/sidebar'); ?>

      
    </div>
    <?php get_template_part('template-parts/footer'); ?>


</div>
    



