<?php
namespace ProvesPlubo\Includes;

class Languages {

  public function __construct() {
    add_action( 'plugins_loaded', array( $this, 'load_plugin_textdomain' ) );
	}

	public function load_plugin_textdomain() {
		load_plugin_textdomain( 'proves-plubo', false, dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/' );
	}

}
