<?php get_header(); ?>
          
                <div class="col m12 l8">
                    <?php if(has_post_thumbnail()): ?>
                    <div class="post-thumbnail">
                        <?php the_post_thumbnail(); ?>
                    </div>
                   <?php endif; ?>
                    <?php if(have_posts()):  ?>
                        <?php while(have_posts()): the_post(); ?>
                            <?php get_template_part('content'); ?>
                        <?php endwhile;?>
                        <?php else:?>
                            <p class="flow-text"><?php _e('No Post Found'); ?></p>
                    <?php endif ?>
                </div>
            <?php get_footer(); ?>