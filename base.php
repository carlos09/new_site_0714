<?php get_template_part('templates/head'); ?>
<body <?php body_class(); ?> data-spy="scroll" data-target="#main-nav">

  <!--[if lt IE 8]>
    <div class="alert alert-warning">
      <?php _e('You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.', 'roots'); ?>
    </div>
  <![endif]-->

  <?php
    do_action('get_header');
    get_template_part('templates/header');
  ?>

  <div class="wrap" role="document">
    <div class="content row">
      <main id="header" class="main <?php echo roots_main_class(); ?>" role="main">
        <div class="header">
            <div class="container">
                <div class="row">
                    <div class="content">
                        <h1 class="text-right">Design // Develop // Create</h1>
                        <p class="text-right">My name is Carlos, I design and develop for the web.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="container intro-content">
            <div class="row">
                <div class="col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2">
                    <p class="text-center visi-hidden">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse malesuada, nibh in imperdiet dictum, lorem dolor sagittis arcu, in tristique magna neque nec quam. Morbi nec molestie mauris. Integer mattis metus sed nibh varius commodo. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
                </div>
            </div>
        </div>
      </main><!-- /.main -->

        <div class="clear"></div>

        <section id="about" data-target="#main-nav">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-md-4 col-md-offset-2 left-side visi-hidden">
                        <h2>Who<br/>
                        <span class="light-teal">I am.</span></h2>
                    </div>
                    <div class="col-sm-6 right-side visi-hidden">
                        <p>Hello! My name is Carlos Esquer, and I am a web designer & developer based out of San Diego, Ca. I have a passion for design & al things web. I thrive on staying in the know about new technology and web design trends.</p>
                    </div>
                </div>
            </div>
        </section>

        <section id="skills">
            <div class="container">
                <div class="row">
                    <h2 class="text-center">Skills</h2>

                    <div class="col-sm-6 skills-left">
                        <div class="progress">
                            <div id="html" class="progress-bar pull-right" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%">HTML</div>
                        </div>
                        <div class="progress">
                            <div id="css" class="progress-bar pull-right" role="progressbar" aria-valuenow="2" aria-valuemin="0" aria-valuemax="100" style="width: 0%">CSS / CSS3</div>
                        </div>
                        <div class="progress">
                            <div id="jquery" class="progress-bar pull-right" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%">jQuery</div>
                        </div>
                        <div class="progress">
                            <div id="php" class="progress-bar pull-right" role="progressbar" aria-valuenow="2" aria-valuemin="0" aria-valuemax="100" style="width: 0%">Php</div>
                        </div>

                    </div>
                    <div class="col-sm-6 skills-right">
                        <div class="progress">
                            <div id="wordpress" class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%">Wordpress</div>
                        </div>
                        <div class="progress">
                            <div id="drupal" class="progress-bar" role="progressbar" aria-valuenow="2" aria-valuemin="0" aria-valuemax="100" style="width: 0%">Drupal</div>
                        </div>
                        <div class="progress">
                            <div id="symfony2" class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%">Symfony2</div>
                        </div>
                        <div class="progress">
                            <div id="seo" class="progress-bar" role="progressbar" aria-valuenow="2" aria-valuemin="0" aria-valuemax="100" style="width: 0%">Seo</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section id="process">
            <div class="container">
                <div class="row">
                    <div class="col-sm-4 text-center step step-design visi-hidden">
                        <div class="icon-top design">
                            <span class="glyphter-2">K</span>
                        </div>
                        <h4 class="text-uppercase">Design</h4>
                        <p>Vivamus aliquam nec ipsum non sodales. Sed consectetur egestas ullamcorper. Cras maximus blandit nisi in facilisis.</p>
                    </div>
                    <div class="col-sm-4 text-center step step-develop visi-hidden">
                        <div class="icon-top develop">
                            <span class="glyphter-1">U</span>
                        </div>
                        <h4 class="text-uppercase">Develop</h4>
                        <p>Vivamus aliquam nec ipsum non sodales. Sed consectetur egestas ullamcorper. Cras maximus blandit nisi in facilisis.</p>
                    </div>
                    <div class="col-sm-4 text-center step step-deliver visi-hidden">
                        <div class="icon-top deliver">
                            <span class="glyphter-1">J</span>
                        <div>
                        <h4 class="text-uppercase">Create</h4>
                        <p>Vivamus aliquam nec ipsum non sodales. Sed consectetur egestas ullamcorper. Cras maximus blandit nisi in facilisis.</p>
                    </div>
                </div>
            </div>
        </section>

        <section id="pieces" data-target="#main-nav">
            <div class="container">
                <div class="row">


                    <?php
                    $myposts = get_posts('');
                    foreach($myposts as $post) :
                    setup_postdata($post);
                    ?>

                    <div class="col-xs-8 col-xs-offset-2 col-sm-3 col-sm-offset-0 project-post">
                        <div class="thumb">
                            <?php if (has_post_thumbnail()) : ?>
                                <div class="entry-thumbnail">
                                <a href="<?php the_permalink() ?>"><?php the_post_thumbnail( 'project-thumb' );  ?></a>
                                </div>
                            <?php endif; ?>
                            <a href="<?php the_permalink() ?>"><div class="overlay"></div></a>
                        </div>

                        <a href="<?php the_permalink() ?>"><h4 class="title text-center"><?php the_title(); ?></h4></a>
                        <p class="category text-center"><?php $category = get_the_category(); echo $category[0]->cat_name; ?></p>
                    </div>
                    <?php endforeach; wp_reset_postdata(); ?>
                </div>

                <div class="row">
                    <div class="col-md-4 col-md-offset-4 text-center view-more-btn">
                        <a href="#">View More</a>
                    <div>
                </div>
            </div>
        </section>

        <section id="map">

        </section>
        <div class="clear"></div>

      <?php if (roots_display_sidebar()) : ?>
        <aside class="sidebar <?php echo roots_sidebar_class(); ?>" role="complementary">
          <?php include roots_sidebar_path(); ?>
        </aside><!-- /.sidebar -->
      <?php endif; ?>
    </div><!-- /.content -->
  </div><!-- /.wrap -->

  <?php get_template_part('templates/footer'); ?>

</body>
</html>
