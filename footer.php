        </div><!-- /.container -->
        <footer class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="footer-icons">
        				<?php
                        echo strip_tags(wp_nav_menu(
                                array('theme_location' => 'footer-links',
                                    'container_class' => 'user_menu',//custom container class
                                    'echo' => false,
                                    'items_wrap' => '%3$s')
                        ), '<a><span><i><div>');
                        ?>
        			</div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12">
                    <p>
                        <i class="fa fa-copyright"></i> Copyright <script type="text/javascript">var d = new Date();var n = d.getFullYear();document.write(n);</script>. All rights reserved.<br>
                    </p>
                </div>
            </div>
		</footer>
        <?php wp_footer(); ?>
	</body>
</html>