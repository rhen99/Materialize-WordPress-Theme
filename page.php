<?php get_header(); ?>
                <div class="col m12 l8">
                    <?php if(have_posts()):  ?>
                        <?php while(have_posts()): the_post(); ?>
                            <?php get_template_part('content'); ?>
                        <?php endwhile;?>
                    <?php endif ?>

                    
                </div>
            <?php get_footer(); ?>