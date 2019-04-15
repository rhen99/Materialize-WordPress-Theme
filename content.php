<?php if(!is_singular()): ?>
    <div class="col m12 l6">
        <div class="card">
            <?php if(has_post_thumbnail()): ?>
                    <div class="card-image">
                        <?php the_post_thumbnail(); ?>
                    </div>
            <?php endif; ?>
                <div class="card-content">
                    <span class="card-title"><?php the_title(); ?></span>
                     <small><strong>Posted at <?php the_time('F j, Y g:ia'); ?> by <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>" class="pink-text text-darken-4"><?php the_author(); ?></a></strong></small>
                    <?php the_excerpt(); ?>
                </div>
                <div class="card-action">
                    <a class="pink-text darken-4" href="<?php the_permalink(); ?>">Read More</a>
                </div>
        </div>
    </div>
<?php else: ?>
    <h3><?php the_title(); ?></h3>
    <h6><?php _e('Posted at '); the_time('F j, Y g:ia'); _e(' by '); ?><a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>" class="pink-text text-darken-4"><?php the_author(); ?></a></h6>
    <?php the_content(); ?>
    <?php if(is_single()): ?>
    <?php if(comments_open()): ?>
        <?php comments_template(); ?>
    <?php else: ?>
    <p class="orange-text flow-text"><?php _e('Comments are not allowed on this post.') ?></p>
    <?php endif; ?>
    <?php endif; ?>
<?php endif; ?>