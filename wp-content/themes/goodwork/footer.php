
<footer class="footer">

    <div class="container">
        <div class="row">
            <div class="col-md-2">
                <a href="/">
                    <img src="<?= get_template_directory_uri()?>/img/logo-footer.png" alt="Good Work">
                </a>

            </div>
            <div class="col-md-10">
                <?php wp_nav_menu( array( 'theme_location' => 'main-menu',
                    'container_class' => 'header-main-menu' ) );
                ?>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6 col-md-push-6 col-sm-push-7 col-sm-5">
                <?php wp_nav_menu( array( 'theme_location' => 'soc-menu',
                    'container_class' => 'header-soc-menu' ) );
                ?>
            </div>
            <div class="col-md-6 col-md-pull-6 col-sm-pull-5 col-sm-7">
                <p class="copyright">Good work © 2019. Все Права Защищены.</p>
            </div>

        </div>
    </div>


</footer>

</div>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC2PXMX7wfMxaDhRTK9kTycpYJBNvWi4Gc"></script>
<?php
get_template_part('templates/modal');
wp_footer();
?>
</body>
</html>