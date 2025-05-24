<?php
/*
 * Template Name: Blog Template
 */

  get_header();
?>

<main class="main">
  <?php the_content(); ?>

  <!-- Blog Content -->
  <section class="blog-content py-5">
    <div class="container py-4">
      <div class="row">
        <div class="col-lg-9">
          <div class="row">
            <?php
              $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
              $args = array(
                'post_type' => 'post',
                'posts_per_page' => 10,
                'paged' => $paged,
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
                  $author_name = get_the_author_meta('display_name' , $author_id);
                  $img_url = get_the_post_thumbnail_url(get_the_ID(), 'full');

            ?>
                  <div class="col-md-4 mb-4">
                  <div class="card blog-card text-light bg-dark mb-2">
                    <img
                      src="<?php echo $img_url; ?>"
                      class="card-img-top" alt="<?php echo $title; ?>">
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
            ?>
          </div>

          <!-- Pagination -->
          <nav aria-label="Page navigation" class="mt-4">
            <?php 
              $pages = paginate_links([
                'base'         => str_replace( 999999999, '%#%', esc_url( get_pagenum_link( 999999999 ) ) ),
                'total'        => $post_query->max_num_pages,
                'current'      => max( 1, get_query_var( 'paged' ) ),
                'format'       => '?paged=%#%',
                'show_all'     => false,
                'type'         => 'array',
                'prev_text'    => 'Previous',
                'next_text'    => 'Next',
              ]);

              if(is_array($pages)) {
                echo '<ul class="pagination justify-content-center">';

                foreach ($pages as $page) {
                  $link = preg_replace('/\bpage-numbers\b/', 'page-link', $page);;
                  $is_active = false;
                  
                  if (preg_match('/class="[^"]*\bcurrent\b[^"]*"/', $link)) {
                    $is_active = true;
                  }
                  
                  echo '<li class="page-item ' . ($is_active ? 'active' : '' ) . '">' . $link . '</li>';
                }

                echo '</ul>';
              }

              wp_reset_postdata();
            ?>
          </nav>
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
  <!-- end Blog -->
</main>

<?php
  get_footer();
?>