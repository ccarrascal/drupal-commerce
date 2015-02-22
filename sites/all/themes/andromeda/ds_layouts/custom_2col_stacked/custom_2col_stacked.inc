<?php

function ds_custom_2col_stacked() {
    return array(
      'label' => t('Custom 2 col stacked'),
      'regions' => array(
        // The key of this region name is also the variable used in
        // the template to print the content of that region.
        'header' => t('Header'),
        'left' => t('Left'),
        'right' => t('Right'),
        'footer' => t('Footer'),
      ),
      // Add this if there is a default css file.
      'css' => FALSE,
    );
  }