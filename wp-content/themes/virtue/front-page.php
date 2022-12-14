<?php
global $virtue;
if (isset($virtue['mobile_switch'])) {
  $mobile_slider = $virtue['mobile_switch'];
} else {
  $mobile_slider = '0';
}
if (isset($virtue['choose_slider'])) {
  $slider = $virtue['choose_slider'];
} else {
  $slider = 'mock_flex';
}
if ($mobile_slider == '1') {
  $mslider = $virtue['choose_mobile_slider'];
  if ($mslider == 'flex') {
    get_template_part('templates/mobile_home/mobileflex', 'slider');
  } else if ($mslider == 'video') {
    get_template_part('templates/mobile_home/mobilevideo', 'block');
  }
}
if ('flex' == $slider) {
  get_template_part('templates/home/flex', 'slider');
} elseif ('thumbs' == $slider) {
  get_template_part('templates/home/thumb', 'slider');
} elseif ('fullwidth' == $slider) {
  get_template_part('templates/home/flex', 'slider-fullwidth');
} elseif ('latest' == $slider) {
  get_template_part('templates/home/latest', 'slider');
} elseif ('carousel' == $slider) {
  get_template_part('templates/home/carousel', 'slider');
} elseif ('video' == $slider) {
  get_template_part('templates/home/video', 'block');
} elseif ('mock_flex' == $slider) {
  get_template_part('templates/home/mock', 'flex');
}
$show_pagetitle = false;
if (isset($virtue['homepage_layout']['enabled'])) {
  $i = 0;
  foreach ($virtue['homepage_layout']['enabled'] as $key => $value) {
    if ($key == 'block_one') {
      $show_pagetitle = true;
    }
    $i++;
    if ($i == 2) {
      break;
    }
  }
}
// Lets check if the user is trying to turn it off in the page meta box.
$show_pagetitle_override = true;
if (!is_home()) {
  $page_id    = get_option('page_on_front');
  $page_title = get_post_meta($page_id, '_kad_show_page_title', true);
  if (empty($page_title) || (!empty($page_title) && 'hide' !== $page_title)) {
    $show_pagetitle_override = true;
  } else {
    $show_pagetitle_override = false;
  }
} ?>

<div id="content" class="container homepagecontent <?php echo esc_attr(virtue_container_class()); ?>">
  <div class="row">
    <div class="main <?php echo esc_attr(virtue_main_class()); ?>" role="main">
      <div class="entry-content" itemprop="mainContentOfPage" itemscope itemtype="https://schema.org/WebPageElement">
        <div class="entry-content">
          <p class="header-shops">
            <!-- SHOP -->
            <img src="<?php echo  IMAGES . '/logo.png'; ?>" alt="" class="shoplogo-header">
            Shops
          </p>
        </div>
        <?php
        if (isset($virtue['homepage_layout']['enabled'])) {
          $layout = $virtue['homepage_layout']['enabled'];
        } else {
          $layout = array(
            'block_one' => 'block_one',
            'block_four' => 'block_four',
          );
        }

        if ($layout) :

          foreach ($layout as $key => $value) {

            switch ($key) {

              case 'block_one':
                if ($show_pagetitle == false && $show_pagetitle_override) {
        ?>
                  <div id="homeheader" class="welcomeclass">
                    <div class="page-header">
                      <h1 class="entry-title" itemprop="name">
                        <?php echo esc_html(virtue_title()); ?>
                      </h1>
                    </div>
                  </div>
                  <!--welcomeclass-->
                <?php
                }

                break;

              case 'block_four':
                if (is_home()) {
                  global $virtue_sidebar;
                  if (virtue_display_sidebar()) {
                    $virtue_sidebar = true;
                    $fullclass = '';
                  } else {
                    $virtue_sidebar = false;
                    $fullclass = 'fullwidth';
                  }
                  if (isset($virtue['home_post_summery']) and ($virtue['home_post_summery'] == 'full')) {
                    $summery = 'full';
                    $postclass = 'single-article fullpost';
                  } else {
                    $summery = 'summery';
                    $postclass = 'postlist';
                  }
                ?>
                  <div class="homecontent <?php echo esc_attr($fullclass); ?>  <?php echo esc_attr($postclass); ?> clearfix home-margin">
                    <?php
                    while (have_posts()) :
                      the_post();
                      if ($summery == 'full') {
                        get_template_part('templates/content', 'fullpost');
                      } else {
                        get_template_part('templates/content', get_post_format());
                      }
                    endwhile;

                    /**
                     * @hooked virtue_pagination - 10
                     */
                    do_action('virtue_pagination');
                    ?>
                  </div>
                <?php } else { ?>
                  <div class="homecontent clearfix home-margin">
                    <?php get_template_part('templates/content', 'page'); ?>
                  </div>
        <?php
                }
                break;
              case 'block_five':
                get_template_part('templates/home/blog', 'home');
                break;
              case 'block_six':
                get_template_part('templates/home/portfolio', 'carousel');
                break;
              case 'block_seven':
                get_template_part('templates/home/icon', 'menu');
                break;
              case 'block_twenty':
                get_template_part('templates/home/icon', 'menumock');
                break;
            }
          }
        endif;
        ?>
      </div>
    </div><!-- /.main -->