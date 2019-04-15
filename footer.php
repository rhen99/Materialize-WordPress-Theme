<div class="col m12 l1 offset-l1 sidebar">
                    <?php if(is_active_sidebar('sidebar')): ?>
                        <?php dynamic_sidebar('sidebar'); ?>
                    <?php endif; ?>
                </div>
            </div>
</section>
    </main>
    <footer class="grey darken-3">
        <p class="center-align white-text">&copy; <?php echo date('Y'); ?></p>
        <?php wp_footer(); ?>
    </footer>
</body>
</html>