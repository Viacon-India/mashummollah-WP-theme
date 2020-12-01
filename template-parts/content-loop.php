<li class="cards_item">
    <div class="card">
        <div class="card_image">
        	<a href="<?php echo get_the_permalink(get_the_ID()); ?>">
        		<?php echo get_the_post_thumbnail(get_the_ID(),'blog-thumbnail'); ?>
        	</a>
        </div>
        <div class="card_content">
            <h2 class="card_title"><a href="<?php echo get_the_permalink(get_the_ID()); ?>"><?php the_title(); ?></a></h2>
            <div class="card_text"><?php echo get_the_excerpt(get_the_ID()); ?></div>
            <!-- <button href="<?php echo get_the_permalink(get_the_ID()); ?>"><button class="btn card_btn">Read More</button></a> -->
            <a class="btn card_btn" href="<?php echo get_the_permalink(get_the_ID()); ?>">Read More</a>
        </div>
    </div>
</li>