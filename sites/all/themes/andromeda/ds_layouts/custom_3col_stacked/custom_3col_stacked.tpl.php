<?php

/**
 * @file
 * Display Suite custom 3 column stacked template.
 */
?>
<<?php print $layout_wrapper; print $layout_attributes; ?> class="custom-2col-stacked <?php print $classes;?> clearfix">

  <?php if (isset($title_suffix['contextual_links'])): ?>
  <?php print render($title_suffix['contextual_links']); ?>
  <?php endif; ?>

  <<?php print $header_wrapper ?> class="group-header<?php print $header_classes; ?>">
    <?php print $header; ?>
  </<?php print $header_wrapper ?>>

  <div class="grid-parent ">
      <div class="grid-child grid-15 grid-space-right">

  <<?php print $left_wrapper ?> class="group-left<?php print $left_classes; ?>">
    <?php print $left; ?>
  </<?php print $left_wrapper ?>>

      </div>
      <div class="grid-child grid-60 grid-space-right">

  <<?php print $center_wrapper ?> class="group-center<?php print $center_classes; ?>">
    <?php print $center; ?>
  </<?php print $center_wrapper ?>>

      </div>
      <div class="grid-child grid-25">

  <<?php print $right_wrapper ?> class="group-right<?php print $right_classes; ?>">
    <?php print $right; ?>
  </<?php print $right_wrapper ?>>

      </div>
  </div>

  <<?php print $footer_wrapper ?> class="group-footer<?php print $footer_classes; ?>">
    <?php print $footer; ?>
  </<?php print $footer_wrapper ?>>

</<?php print $layout_wrapper ?>>

<?php if (!empty($drupal_render_children)): ?>
  <?php print $drupal_render_children ?>
<?php endif; ?>
