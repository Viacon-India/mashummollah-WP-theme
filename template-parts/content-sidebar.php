<aside class="sidebar">
					
	<section class="search-bar">
		<?php get_search_form(); ?>
	</section>	

	<section class="email-from" style="margin-bottom:10px;">
		<!-- <h2>Do you want more traffic?</h2> -->

		<!-- <div class="form">
			<input class="form-control" type="domain" id="domain" placeholder="Enter Your Domain">
			<input class="form-control" type="email" id="email" placeholder="Enter Your Email">
		</div>
		<button type="submit" id="submit">Subscribe</button> -->

		<?php echo do_shortcode('[convertkit form=1097236]'); ?>
		<script async data-uid="f09928c0bb" src="https://fantastic-knitter-3728.ck.page/f09928c0bb/index.js"></script>
		
	</section>

	<section class="resorce">
		<h2>Latest Resource</h2>
		<ul>
			<?php $popular = new WP_Query(array( //based on views
				'post_type' => 'post',
				'posts_per_page'=> 3,
				'orderby' => 'date',
				'order' => 'DESC'
			));
			while ($popular->have_posts()) : $popular->the_post(); ?>			

				<li>
					<a href="<?php echo get_the_permalink(get_the_ID()); ?>"><?php the_title(); ?></a>					
				</li>

			<?php endwhile; wp_reset_postdata(); ?>
		
		</ul>
	</section>

	<section class="resorce">
		<h2>Categories</h2>
		<ul>
			<?php $categories = get_categories();
			foreach($categories as $category) { ?>
				<li>
					<a href="<?php echo get_category_link($category->term_id); ?>"><?php echo $category->name; ?></a>
				</li>
			<?php } ?>		
		</ul>
	</section>

	<section class="image-sec">
		<img src="<?php echo get_template_directory_uri(); ?>/images/single page/img1.png" alt="" srcset="">
	</section>

	<section class="resorce">
		<h2>Essencial Resource</h2>
		<ul>
			<?php $popular = new WP_Query(array( //based on views
				'post_type' => 'post',
				'posts_per_page'=> 3,
				'orderby' => 'meta_value',
				'meta_key' => 'post_views_count',
				'order' => 'DESC'
			));
			while ($popular->have_posts()) : $popular->the_post(); ?>			

				<li>
					<a href="<?php echo get_the_permalink(get_the_ID()); ?>"><?php the_title(); ?></a>					
				</li>

			<?php endwhile; wp_reset_postdata(); ?>
		
		</ul>
	</section>

</aside>