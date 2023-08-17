<?php
/**
 * Plugin Name: WooCommerce Block Template Extensibility
 * Author: Joshua Flowers
 * Version: 0.1.0
 */

class WooCommerceBlockTemplateExtensibility {

    /**
     * Initialize the template changes.
     */
    public function init() {
        add_action( 'init', array( $this, 'add_custom_template' ) );
    }

    /**
     * Add a custom product template.
     */
    public function add_custom_template() {
        include_once __DIR__ . '/custom-template.php';
        $template_registry = wc_get_container()->get( Automattic\WooCommerce\Internal\Admin\BlockTemplateRegistry\BlockTemplateRegistry::class );
        $template_registry->register( 'namespace/my-custom-template', CustomTemplate::class );
    }
}

$custom_template_example = new WooCommerceBlockTemplateExtensibility();
$custom_template_example->init();