<?php
/**
 * Footer Template.
 *
 * @package htmlTowordpress
*/
?>
    <!-- Footer -->
    <section id="footer">
        <div class="container">
            <div class="row">
                <div class="col-4 col-6-medium col-12-small">
                    <?php dynamic_sidebar('footer-1'); ?>
                </div><!--col-4-->
                <div class="col-4 col-6-medium col-12-small">
                    <?php dynamic_sidebar('footer-2'); ?>
                </div><!--col-4-->
                <div class="col-4 col-12-medium">
                    <?php dynamic_sidebar('footer-3'); ?>
                </div><!--col-4-->
                <div class="col-12">

                    <!-- Copyright -->
                    <div id="copyright">
                        <ul class="links">
                            <li>&copy; Untitled. All rights reserved.</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
                        </ul>
                    </div><!--copyright-->

                </div><!--col-12-->
            </div><!--row-->
        </div><!--container-->
    </section>
</div><!--page-wrapper-->

<!-- Scripts -->
<script src="assets/js/browser.min.js"></script>
<script src="assets/js/breakpoints.min.js"></script>
<script src="assets/js/util.js"></script>
<script src="assets/js/main.js"></script>

<?php wp_footer(); ?>

</body>
</html>