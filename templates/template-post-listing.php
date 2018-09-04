<?php /* Template Name: Post-Listing Template */ 
$arg = [
    'post_type'     => 'post',
    'post_status'   => 'publish',
    'posts_per_page'=> 9
  ];
  $posts = new WP_Query($arg);
  
  get_header(); ?>
  <!--blog body-->
  <main>
    <div id="title">
      <h1>
        <?php the_title();?>
      </h1>
      <h3>
        <!-- <?php echo $searched_string; ?> -->
      </h3>
    </div>
    <div class="latest" id="featured">
      <div class="alignment1">
        <?php if ($posts->have_posts()) : ?>
        <?php while ($posts->have_posts()) : $posts->the_post(); ?>
        <div class="projectPreview">
          <a href="<?php the_permalink(); ?>">
            <?php
                    // Check to see if the post has a featured image
                    if (has_post_thumbnail()): ?>
            <?php the_post_thumbnail( 'thumbnail', array( 'class' => 'roundImage' ) );?>
            <?php else: ?>
            <img src="https://placehold.it/1280x720" alt="project preview" class="roundImage">
            <?php endif; ?>
            <h3 class="ontop">
              <?php the_title()?>
            </h3>
          </a>
        </div>
        <?php endwhile; ?>
        <?php wp_reset_postdata(); ?>
        <?php else : ?>
        <p>
          <?php echo 'Sorry, no posts matched your criteria.'; ?>
        </p>
        <?php endif; ?>
      </div>
    </div>
    <!--end of featured-->
    <button id="seeMore">See more</button>
    <!-- end of latest featured -->
  
  </main>
  <?php get_footer(); ?>