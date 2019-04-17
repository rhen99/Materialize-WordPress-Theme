<div class="col m12 l1 offset-l1 sidebar">
                    <?php if(is_active_sidebar('sidebar')): ?>
                        <?php dynamic_sidebar('sidebar'); ?>
                    <?php endif; ?>
                </div>
            </div>
            <div class="posts-navigation">
                <?php previous_posts_link(); ?>
                <?php next_posts_link(); ?>
            </div>
</section>
    </main>
    <footer class="grey darken-3">
        <p class="center-align white-text">&copy; <?php echo date('Y'); ?></p>
        <?php wp_footer(); ?>
    </footer>
</body>
</html>