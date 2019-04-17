<?php get_header(); ?>
                <div class="col m12 l8">
                    <h2><?php bloginfo('title'); _e(' Blog');?></h2>
                    <?php if(have_posts()):  ?>
                        <?php while(have_posts()): the_post(); ?>
                            <?php get_template_part('content'); ?>
                        <?php endwhile;?>
                        
                        <?php else:?>
                            <p class="flow-text"><?php _e('No Post Found'); ?></p>
                    <?php endif ?>

                    
                </div>
            <?php get_footer(); ?>