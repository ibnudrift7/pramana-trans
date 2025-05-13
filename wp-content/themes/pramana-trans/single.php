<?php
  get_header();
?>

<main class="main">
  <?php the_content(); ?>

  <!-- Blog Content -->
  <section class="blog-content py-5">
    <div class="container py-4">
      <div class="row">
        <!-- Blog Posts - 3 columns per row -->
        <div class="col-lg-9">
          <div class="row">
            <?php
              $args = array(
                  'post_type' => 'post',
                  'posts_per_page' => -1,
                  'orderby' => 'date',
                  'order' => 'DESC'
              );
              
              $post_query = new WP_Query( $args );
              
              if ( $post_query->have_posts() ) {
                while ( $post_query->have_posts() ) {
                  $post_query->the_post(); 

                  $title = get_the_title();
                  $date_raw = get_post_timestamp();
                  $date = date("M d, Y", $date_raw);
                  $author_id = get_post_field ('post_author', get_the_ID());
                  $author_name = get_the_author_meta( 'display_name' , $author_id ); 
            ?>
                  <div class="col-md-4 mb-4">
                  <div class="card blog-card text-light bg-dark mb-2">
                    <img
                      src="https://images.unsplash.com/photo-1503376780353-7e6692767b70?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80"
                      class="card-img-top" alt="Blog Post">
                    <div class="card-body">
                      <div class="blog-meta pb-2">
                        <span><i class="far fa-calendar"></i> <?php echo $date ?></span>
                        <span><i class="far fa-user"></i> <?php echo $author_name; ?></span>
                      </div>
                      <h5 class="card-title pb-2"><?php echo $title; ?></h5>
                      <a href="<?php echo get_permalink(); ?>" class="btn btn-read-more btn-light">Read More</a>
                    </div>
                  </div>
                </div>
            <?php
                }
              }
              wp_reset_postdata();
            ?>
          </div>

          <!-- Pagination -->
          <nav aria-label="Page navigation" class="mt-4">
            <ul class="pagination justify-content-center">
              <li class="page-item disabled">
                <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
              </li>
              <li class="page-item active"><a class="page-link" href="#">1</a></li>
              <li class="page-item"><a class="page-link" href="#">2</a></li>
              <li class="page-item"><a class="page-link" href="#">3</a></li>
              <li class="page-item">
                <a class="page-link" href="#">Next</a>
              </li>
            </ul>
          </nav>
        </div>

        <!-- Sidebar -->
        <div class="col-lg-3">
          <div class="sidebar">
            <!-- Search Form -->
            <div class="search-form mb-4">
              <input type="text" class="form-control" placeholder="Search...">
              <button type="submit"><i class="fas fa-search"></i></button>
            </div>

            <!-- Categories -->
            <div class="categories mb-5">
              <h4>Categories</h4>
              <ul class="pl-0 ml-0">
                <?php 
                  $categories = get_categories();
                  foreach($categories as $category) {
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

            <!-- Tags -->
            <div class="tags">
              <h4>Tags</h4>
              <div class="d-flex flex-wrap gap-2">
                <?php
                  $tags = get_tags();
                  // var_dump($tags);
                  if ($tags) {
                    foreach($tags as $tag) {
                      echo '<a href="' . get_tag_link($tag->term_id ) .  '" class="badge bg-light text-dark p-2">' . $tag->name . '</a>'; 
                    }
                  }
                ?>
              </div>
            </div>
          </div>
        </div>
        <!-- end Sidebar -->

      </div>
    </div>
  </section>
  <!-- end Blog -->
</main>

<?php
get_footer();
?>