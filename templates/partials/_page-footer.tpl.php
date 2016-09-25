<?php
/**
 * @file: page footer partial.
 */
?>

<?php if ($just_above_footer = render($page['justabovefooter'])): ?>
  <div class="just-above-footer-wrapper">
    <footer class="just-above-footer container">
      <?php print $just_above_footer ?>
    </footer>
  </div>
<?php endif ?>

<div class="footer-wrapper">
  <footer class="footer">

    <!-- Secondary menu, if populated -->
    <?php if (($secondary_nav = render($secondary_nav)) || ($secondary_navigation = render($page['secondary_navigation']))): ?>
      <div class="row">
        <div class="container">
          <?php print isset($secondary_nav) ? $secondary_nav : NULL; ?>

          <?php print isset($secondary_navigation) ? $secondary_navigation : NULL; ?>
        </div>
      </div>
    <?php endif; ?>

    <div class="row">
      <div class="container">
        <?php print render($page['footer']) ?>

        <?php if (isset($logo) && !empty($logo)): ?>
          <a class="logo navbar-btn pull-right" href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>">
            <img src="<?php print $logo; ?>" class="logo" alt="<?php print t('Home'); ?>"/>
          </a>
        <?php endif ?>
      </div>
    </div>
  </footer>
</div>
