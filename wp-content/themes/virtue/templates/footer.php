<?php

/**
 * Footer Template
 *
 * @version 3.2.5
 */

if (!defined('ABSPATH')) exit; // Exit if accessed directly
?>
<footer id="containerfooter" class="footerclass" itemscope itemtype="https://schema.org/WPFooter">
  <div class="container">
    <!-- languages -->
    <div class="change-lang-mobile">
      <div id="weglot_here"></div>
    </div>
    <!-- footer -->
    <div class="row footer-container">
      <?php global $virtue;
      if (isset($virtue['footer_layout'])) {
        $footer_layout = $virtue['footer_layout'];
      } else {
        $footer_layout = 'fourc';
      }
      if ($footer_layout == "fourc") {
        if (is_active_sidebar('footer_1')) { ?>
          <div class="col-md-3 col-sm-6 footercol1">
            <?php dynamic_sidebar('footer_1'); ?>
          </div>
        <?php }; ?>
        <?php if (is_active_sidebar('footer_2')) { ?>
          <div class="col-md-3  col-sm-6 footercol2">
            <?php dynamic_sidebar('footer_2'); ?>
          </div>
        <?php }; ?>
        <?php if (is_active_sidebar('footer_3')) { ?>
          <div class="col-md-3 col-sm-6 footercol3">
            <?php dynamic_sidebar('footer_3'); ?>
          </div>
        <?php }; ?>
        <?php if (is_active_sidebar('footer_4')) { ?>
          <div class="col-md-3 col-sm-6 footercol4">
            <?php dynamic_sidebar('footer_4'); ?>
          </div>
        <?php }; ?>
        <?php } else if ($footer_layout == "threec") {
        if (is_active_sidebar('footer_third_1')) { ?>
          <div class="col-md-4 footercol1">
            <?php dynamic_sidebar('footer_third_1'); ?>
          </div>
        <?php }; ?>
        <?php if (is_active_sidebar('footer_third_2')) { ?>
          <div class="col-md-4 footercol2">
            <?php dynamic_sidebar('footer_third_2'); ?>
          </div>
        <?php }; ?>
        <?php if (is_active_sidebar('footer_third_3')) { ?>
          <div class="col-md-4 footercol3">
            <?php dynamic_sidebar('footer_third_3'); ?>
          </div>
        <?php }; ?>
        <?php } else {
        if (is_active_sidebar('footer_double_1')) { ?>
          <div class="col-md-6 footercol1">
            <?php dynamic_sidebar('footer_double_1'); ?>
          </div>
        <?php }; ?>
        <?php if (is_active_sidebar('footer_double_2')) { ?>
          <div class="col-md-6 footercol2">
            <?php dynamic_sidebar('footer_double_2'); ?>
          </div>
        <?php }; ?>
      <?php } ?>
      <div class="footercredits clearfix">
        <?php if (has_nav_menu('footer_navigation')) :
        ?><div class="footernav clearfix"><?php
          wp_nav_menu(array('theme_location' => 'footer_navigation', 'menu_class' => 'footermenu'));
        ?></div><?php
        endif; ?>
      </div>
      <div class="footercontent">
        <img src="<?php echo  IMAGES . '/logoFooter.jpg'; ?>" alt="" class="thelogo-img">
        <div class="footercontent-contact">
          <p class="contact-company">
            <span class="contact-company-name">株式会社　和僑</span><br>
            神奈川県公安委員会許可：第452760007200号
          </p>
        </div>
      </div>
    </div>
  </div>
  <div class="footercopyright">
    <p class="copyright-company">© 2010-2021 金券ショップ アクセスチケット</p>
  </div>

</footer>