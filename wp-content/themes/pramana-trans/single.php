<?php
  get_header();
?>

<main class="main">
  <?php get_template_part('template-parts/blocks/subpage-banner/subpage-banner'); ?>

  <section class="py-5">
    <div class="container">
      <div class="row">

        <!-- Blog Content -->
        <div class="col-lg-9">
          <?php
            $date_raw = get_post_timestamp();
            $date = date("M d, Y", $date_raw);
          ?>
          <div class="post-date fw-bold mb-4"><?php echo $date; ?></div>
          <?php the_content(); ?>
        </div>

        <!-- Sidebar -->
        <div class="col-lg-3">
          <div class="sidebar">
            <!-- Search Form -->
            <div class="search-form mb-4">
              <form action="<?php echo site_url(); ?>">
                <input name="s" type="text" class="form-control" placeholder="Search...">
                <!-- <button type="submit"><i class="fas fa-search"></i></button> -->
              </form>
            </div>

            <!-- Categories -->
            <div class="categories mb-5">
              <h4>Categories</h4>
              <ul class="pl-0 ml-0">
                <?php 
                  $categories = get_categories();
                  foreach($categories as $category) {
                    if ($category->name == 'Tour City'){
                      continue;
                    }
                    
                    echo '<li><a href="' . get_category_link($category->term_id) . '">' . $category->name . ' <span class="badge">' . $category->category_count . '</span></a></li>';
                  } 
                ?>
              </ul>
            </div>

            <!-- Recent Posts -->
            <div class="recent-posts mb-4">
              <h4>Recent Posts</h4>
              <ul>
                <?php
                  $args = array(
                    'post_type' => 'post',
                    'posts_per_page' => 5,
                    'orderby' => 'date',
                    'order' => 'DESC'
                  );
                  
                  $post_query = new WP_Query( $args );
                  
                  if ( $post_query->have_posts() ) {
                    while ( $post_query->have_posts() ) {
                      $post_query->the_post(); 
                      $title = get_the_title();
                ?>
                      <li><a href="<?php echo get_permalink(); ?>"><?php echo $title ?></a></li>
                <?php
                    }
                  }
                  wp_reset_postdata();
                ?>
              </ul>
            </div>
          </div>
        </div>
        <!-- end Sidebar -->
      </div>
    </div>
  </section>
</main>

<?php
get_footer();
?>