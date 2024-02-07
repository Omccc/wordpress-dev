<script type="text/template" id="tmpl-wms_pickup_open_modal_google_maps">
	<div class="wms_pickup_modal" id="wms_pickup_open_modal_google_maps">
		<div class="wc-backbone-modal">
			<div class="wc-backbone-modal-content">
				<section class="wc-backbone-modal-main" role="main">
					<div class="wc-backbone-modal-loader">
					</div>
					<header class="wc-backbone-modal-header">
						<button class="modal-close modal-close-link dashicons dashicons-no-alt">
							<span class="screen-reader-text"><?php echo esc_html_e('Close modal panel', 'woocommerce'); ?></span>
						</button>
					</header>
					<div class="wms_modal_content" style="height:100%">

						<div class="wms_pickup_modal_address">

							<div class="wms_pickup_modal_address_city">
								<input type="text" placeholder="<?php esc_html_e('City', 'wc-multishipping'); ?>" class="wms_pickup_modal_address_city_input">
							</div>
							<div class="wms_pickup_modal_address_zip-code">
								<input type="text" placeholder="<?php esc_html_e('Zip Code', 'wc-multishipping'); ?>" class="wms_pickup_modal_address_zipcode_input">
							</div>
							<div class="wms_pickup_modal_address_country">
                                <?php echo woocommerce_form_field('wms_pickup_modal_address_country_select', [
                                    'type'    => 'select',
                                    'class'   => ['wms_pickup_modal_address_country_select'],
                                    'options' => $countries,
                                ]); ?>
							</div>
							<div class="wms_pickup_modal_address_find_pickup">
								<button type="button" class="wms_pickup_modal_address_search"><?php echo __('Find a pickup point', 'wc-multishipping'); ?></button>
							</div>
						</div>
						<div class="wms_pickup_modal_map_container">

							<div class="wms_pickup_modal_map">
								<div id="wms_pickup_modal_map_googlemaps"></div>
							</div>
							<div class="wms_pickup_modal_listing"></div>
						</div>
					</div>
				</section>
			</div>
			<div class="wc-backbone-modal-backdrop modal-close"></div>
		</div>
	</div>
</script>
