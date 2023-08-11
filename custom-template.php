<?php

use Automattic\WooCommerce\Internal\Admin\BlockTemplates\AbstractBlockTemplate;

class CustomTemplate extends AbstractBlockTemplate {

    /**
	 * Get the slug of the template.
	 *
	 * @return string Template slug
	 */
    public function get_id(): string {
        return 'namespace/my-custom-template';
    }

    /**
	 * Get the title of the template.
	 *
	 * @return string Template title
	 */
    public function get_title(): string {
        return __( 'Custom template', 'woocommerce' );
    }

    /**
	 * Get the description for the template.
	 *
	 * @return string Template description
	 */
    public function get_description(): string {
        return __( 'Custom template showing template registration and extensibility.', 'woocommerce' );
    }

    /**
	 * Get the area for the template.
	 *
	 * @return string Template area
	 */
    public function get_area(): string {
        return 'woocommerce/admin/product/edit';
    }

}