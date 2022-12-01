<?php

/**
 * Header Template
 *
 * @version 3.2.9
 * @package Virtue Theme
 */

if (!defined('ABSPATH')) {
  exit; // Exit if accessed directly.
}

global $virtue;
?>
<header class="banner headerclass bg-color" itemscope itemtype="https://schema.org/WPHeader">
  <?php
  if (kadence_display_topbar()) :
    get_template_part('templates/header', 'topbar');
  endif;

  if (isset($virtue['logo_layout'])) {
    if ('logocenter' == $virtue['logo_layout']) {
      $logocclass = 'col-md-6';
      $menulclass = 'col-md-6';
    } elseif ('logohalf' == $virtue['logo_layout']) {
      $logocclass = 'col-md-6';
      $menulclass = 'col-md-6';
    } else {
      $logocclass = 'col-md-6';
      $menulclass = 'col-md-6';
    }
  } else {
    $logocclass = 'col-md-6';
    $menulclass = 'col-md-6';
  }
  ?>
  <div class="container">
    <div class="row flex-center">
      <!-- LOGO -->
      <div class="<?php echo esc_attr($logocclass); ?> clearfix kad-header-left">
        <div id="logo" class="logocase">
          <a class="brand logofont" href="<?php echo esc_url(home_url('/')); ?>">
            <div id="thelogo">
              <div class="thelogo-top">
                <img src="<?php echo  IMAGES . '/logoHome.png'; ?>" alt="" class="thelogo-img">
              </div> 
              <div class="thelogo-bottom">
                <span class="text-logo">Discount price anywhere in Japan&nbsp;voucher online order site</span>
                <span class="text-company">ACCESS TICKET</span>
              </div>
            </div>
          </a>
        </div> <!-- Close #logo -->
      </div><!-- close logo span -->
      <!-- MENU -->
      <div class="<?php echo esc_attr($menulclass); ?> clearfix kad-header-left">
        <div class="change-lang">
          <div id="weglot_here"></div>
        </div>
        <?php if (has_nav_menu('mobile_navigation')) : ?>
          <button class="nav-trigger-case mobileclass collapsed" data-toggle="collapse" data-target=".kad-nav-collapse">
            <span class="kad-navbtn"><i class="icon-reorder"></i></span>
          </button>
          <div id="mobile-nav-trigger" class="nav-trigger">
            <div id="kad-mobile-nav" class="kad-mobile-nav">
              <div class="kad-nav-inner mobileclass">
                <div class="kad-nav-collapse">
                  <?php
                  if (isset($virtue['mobile_submenu_collapse']) && '1' == $virtue['mobile_submenu_collapse']) {
                    wp_nav_menu(array(
                      'theme_location' => 'mobile_navigation',
                      'items_wrap'     => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                      'menu_class'     => 'kad-mnav',
                      'walker'         => new Virtue_Mobile_Nav_Walker(),
                    ));
                  } else {
                    wp_nav_menu(array(
                      'theme_location' => 'mobile_navigation',
                      'items_wrap'     => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                      'menu_class'     => 'kad-mnav',
                    ));
                  }
                  ?>
                </div>
              </div>
            </div>
          </div>
        <?php endif; ?>
        <?php do_action('kt_before_secondary_navigation'); ?>
      </div>
    </div> <!-- Close Row -->
  </div> <!-- Close Container -->
  <!--close container-->
  </section>
</header>