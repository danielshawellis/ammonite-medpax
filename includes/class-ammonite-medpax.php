<?php

class Ammonite_Medpax {
  public function __construct() {
    $this->version = AMMONITE_MEDPAX_VERSION;
    $this->plugin_name = 'ammonite-medpax';

    $this->load_dependencies();
  }

  private function load_dependencies() {
    // Include loader and set it to class property
    require_once plugin_dir_path( dirname( __FILE__ ) ) . 'includes/class-ammonite-medpax-loader.php';
    $this->loader = new Ammonite_Medpax_Loader();
  }

  public function run() {
    // Run the loader defined at 'includes/class-ammonite-medpax-loader.php'
		$this->loader->run();
	}
}
