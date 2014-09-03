<footer class="content-info" role="contentinfo" data-spy="scroll" data-target="#main-nav">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                instagram feed
                <?php echo do_shortcode('[si_feed limit="12" size="small"]'); ?>
            </div>
            <div class="col-md-8 form">
                <h3 class="text-center">Drop Me A Line</h3>
                <?php echo do_shortcode('[contact-form-7 id="15" title="Footer Contact Form"]'); ?>
            </div>
        </div>
    </div>

    <div class="footer-secondary">
        <div class="container">
            <div class="row">
                <div class="col-md-2">
                    <p class="copyright">&copy; carlosesquer.com 2014</p>
                </div>
                <div class="col-md-8">
                    <ul class="social-links text-center">
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        <li><a href="#"><i class="fa fa-vimeo-square"></i></a></li>
                        <li><a href="#"><i class="fa fa-flickr"></i></a></li>
                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                        <li><a href="#"><i class="fa fa-rss"></i></a></li>
                    </ul>
                </div>
                <div class="col-md-2">

                </div>
            </div>
        </div>
    </div>

  <div class="container">
    <?php dynamic_sidebar('sidebar-footer'); ?>
  </div>
</footer>

<?php wp_footer(); ?>
