<?php
	get_header();
?>

<main class="main">
	<div class="container py-5">
		<?php
		if (have_posts()) {
			?>
			<div class="search-count">
				<?php
					printf(
						esc_html(

							_n(
								'%d result found for your search.',
								'%d results found for your search.',
								(int) $wp_query->found_posts
							)
						),
						(int) $wp_query->found_posts
					);
				?>
			</div>
			<ol class="search-links">
				<?php
					while (have_posts()) {
						the_post();

						echo "<li><a href='" . get_the_permalink() . "'>" . get_the_title() . "</a></li>";
					}
				?>
			</ol>
			<?php
		} 
		else {
			echo "<h2>Sorry we can't found your search results, please try another search.</h2>";
		}
		?>
	</div>
</main>

<?php
	get_footer();
?>