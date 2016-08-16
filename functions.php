<?php

$active_plugins = apply_filters( 'active_plugins', get_option( 'active_plugins' ) );

require 'inc/optimizations.php';

require 'inc/gpchild-functions.php';
require 'inc/gpchild-template-functions.php';
require 'inc/gpchild-template-hooks.php';

if ( in_array( 'woocommerce/woocommerce.php', $active_plugins ) ) {
  require 'inc/woocommerce/functions.php';
  require 'inc/woocommerce/template-functions.php';
  require 'inc/woocommerce/template-hooks.php';
}

