<?php
class ControllerExtensionModuleLuxshopAlltabs extends Controller {
	public function index($setting) {
		$data['nst_data'] = $this->config->get('nst_data');
		if(isset($data['nst_data']['lazyload_module']) && ($data['nst_data']['lazyload_module'] == 1)){
			$data['lazyload_module'] = true;
			if (isset($data['nst_data']['lazyload_image']) && ($data['nst_data']['lazyload_image'] !='')) {
				$data['lazy_image'] = 'image/' . $data['nst_data']['lazyload_image'];
			} else {
				$data['lazy_image'] = 'image/catalog/lazyload/lazyload.jpg';
			}
		} else {
			$data['lazyload_module'] = false;
		}
		$data['setting_module'] = $this->config->get('setting_module');
		if(deviceType == 'phone') {
			if(isset($data['setting_module']['hidden_model']) && ($data['setting_module']['hidden_model'] == 1)){
				$data['setting_module']['status_model'] = 0;
			}
			if(isset($data['setting_module']['hidden_desc']) && ($data['setting_module']['hidden_desc'] == 1)){
				$data['setting_module']['status_description'] = 0;
			}
			if(isset($data['setting_module']['hidden_rating']) && ($data['setting_module']['hidden_rating'] == 1)){
				$data['setting_module']['status_rating'] = 0;
			}
			if(isset($data['setting_module']['hidden_actions']) && ($data['setting_module']['hidden_actions'] == 1)){
				$data['setting_module']['status_actions'] = 0;
			}
		}
		$data['text_select'] = $this->language->get('text_select');
		$data['config_additional_settings_luxshop'] = $this->config->get('config_additional_settings_luxshop');
		$data['show_special_timer_module'] = $this->config->get('config_show_special_timer_module');
		$data['on_off_sticker_special'] = $this->config->get('on_off_sticker_special');
		$data['config_change_icon_sticker_special'] = $this->config->get('config_change_icon_sticker_special');
		$data['on_off_sticker_topbestseller'] = $this->config->get('on_off_sticker_topbestseller');
		$data['config_limit_order_product_topbestseller'] = $this->config->get('config_limit_order_product_topbestseller');
		$data['config_change_icon_sticker_topbestseller'] = $this->config->get('config_change_icon_sticker_topbestseller');
		$data['on_off_sticker_popular'] = $this->config->get('on_off_sticker_popular');
		$data['config_min_quantity_popular'] = $this->config->get('config_min_quantity_popular');
		$data['config_change_icon_sticker_popular'] = $this->config->get('config_change_icon_sticker_popular');
		$data['on_off_sticker_newproduct'] = $this->config->get('on_off_sticker_newproduct');
		$data['config_limit_day_newproduct'] = $this->config->get('config_limit_day_newproduct');
		$data['config_change_icon_sticker_newproduct'] = $this->config->get('config_change_icon_sticker_newproduct');
		$data['on_off_percent_discount'] = (!empty($this->config->get('on_off_percent_discount')) ? 1 : 0);

		$this->load->language('luxshop/theme');
		$data['required_text_option'] = $this->language->get('required_text_option');
		$data['lang_id'] = $this->config->get('config_language_id');
		$data['text_instock'] = $this->language->get('text_instock');
		$data['change_text_cart_button_out_of_stock'] = $this->config->get('config_change_text_cart_button_out_of_stock');


		$data['disable_cart_button'] = $this->config->get('config_disable_cart_button');
		$data['disable_fastorder_button'] = $this->config->get('config_disable_fastorder_button');

		$data['config_quickview_btn_name'] = $this->config->get('config_quickview_btn_name');
		$data['config_on_off_latest_quickview'] = $this->config->get('config_on_off_latest_quickview');
		$data['config_on_off_special_quickview'] = $this->config->get('config_on_off_special_quickview');
		$data['config_on_off_bestseller_quickview'] = $this->config->get('config_on_off_bestseller_quickview');
		$data['config_on_off_featured_quickview'] = $this->config->get('config_on_off_featured_quickview');
		$data['config_text_open_form_send_order'] = $this->config->get('config_text_open_form_send_order');
		$data['text_sticker_special'] = $this->config->get('config_change_text_sticker_special');
		$data['text_sticker_newproduct'] = $this->config->get('config_change_text_sticker_newproduct');
		$data['text_sticker_popular'] = $this->config->get('config_change_text_sticker_popular');
		$data['text_sticker_topbestseller'] = $this->config->get('config_change_text_sticker_topbestseller');
		$data['text_reviews_title'] = $this->language->get('text_reviews_title');
		$data['show_stock_status'] = $this->config->get('config_show_stock_status');
		$config_disable_cart_button_text = $this->config->get('config_disable_cart_button_text');
		if(!empty($config_disable_cart_button_text[$this->config->get('config_language_id')]['disable_cart_button_text'])){
			$data['disable_cart_button_text'] = $config_disable_cart_button_text[$this->config->get('config_language_id')]['disable_cart_button_text'];
		} else {
			$data['disable_cart_button_text'] = $this->language->get('disable_cart_button_text');
		}
		$data['disable_cart_button'] = $this->config->get('config_disable_cart_button');
		$data['disable_fastorder_button'] = $this->config->get('config_disable_fastorder_button');
		$data['show_options'] = $this->config->get('config_show_options_module');
		$show_options_required_featured = $this->config->get('config_show_options_required_module');
		static $module = 0;
		$this->load->language('extension/module/luxshop_alltabs');

		$data['heading_title'] = $this->language->get('heading_title');

		$data['text_tax'] = $this->language->get('text_tax');

		$data['button_cart'] = $this->language->get('button_cart');
		$data['button_wishlist'] = $this->language->get('button_wishlist');
		$data['button_compare'] = $this->language->get('button_compare');

		$data['tab_latest'] = $this->language->get('tab_latest');
      	$data['tab_featured'] = $this->language->get('tab_featured');
      	$data['tab_bestseller'] = $this->language->get('tab_bestseller');
      	$data['tab_special'] = $this->language->get('tab_special');
		$data['tab_popular'] = $this->language->get('tab_popular');
		$this->load->model('catalog/product');

		$this->load->model('tool/image');


		if (!$setting['limit']) {
			$setting['limit'] = 4;
		}

		$data['latest_products'] = array();
		$latest_results = $this->model_catalog_product->getLatestProducts($setting['limit']);

			foreach ($latest_results as $result) {

					if ($result['image']) {
						$image = $this->model_tool_image->resize($result['image'], $setting['width'], $setting['height']);
					} else {
						$image = $this->model_tool_image->resize('placeholder.png', $setting['width'], $setting['height']);
					}

					if ($this->customer->isLogged() || !$this->config->get('config_customer_price')) {
						$price = $this->currency->format($this->tax->calculate($result['price'], $result['tax_class_id'], $this->config->get('config_tax')), $this->session->data['currency']);
					} else {
						$price = false;
					}

					if ((float)$result['special']) {
						$special = $this->currency->format($this->tax->calculate($result['special'], $result['tax_class_id'], $this->config->get('config_tax')), $this->session->data['currency']);
					} else {
						$special = false;
					}

					if ($this->config->get('config_tax')) {
						$tax = $this->currency->format((float)$result['special'] ? $result['special'] : $result['price'], $this->session->data['currency']);
					} else {
						$tax = false;
					}

					if ($this->config->get('config_review_status')) {
						$rating = $result['rating'];
					} else {
						$rating = false;
					}

					$additional_image_hover = '';
					if(isset($data['setting_module']['status_additional_image_hover']) && ($data['setting_module']['status_additional_image_hover'] == 1)){
						$results_img = $this->model_catalog_product->getProductImages($result['product_id']);
						foreach ($results_img as $key => $result_img) {
							if ($key < 1) {
								$additional_image_hover = $this->model_tool_image->resize($result_img['image'], $setting['width'], $setting['height']);
							}
						}
					}
					if ((float)$result['special']) {
						$price2 = $this->tax->calculate($result['price'], $result['tax_class_id'], $this->config->get('config_tax'));
						$special2 = $this->tax->calculate($result['special'], $result['tax_class_id'], $this->config->get('config_tax'));
						$skidka = $special2/($price2/100)-100;
					} else {
						$skidka = "";
					}
					$top_bestsellers = $this->model_catalog_product->getTopSeller($result['product_id']);

					$product_quantity = $result['quantity'];
					$stock_status = $result['stock_status'];
					if (isset($product_info)) {
						$result = $product_info;
					} else {
						$result = $result;
					}
					if (VERSION >= 2.2) {
						$currency = $this->session->data['currency'];
					} else {
						$currency = '';
					}

					$options = array();
				if ($data['show_options']==1) {
					foreach ($this->model_catalog_product->getProductOptions($result['product_id']) as $option) {
						$product_option_value_data = array();

						foreach ($option['product_option_value'] as $option_value) {
							if (!$option_value['subtract'] || ($option_value['quantity'] > 0)) {
								if ((($this->config->get('config_customer_price') && $this->customer->isLogged()) || !$this->config->get('config_customer_price')) && (float)$option_value['price']) {
									$option_price = $this->currency->format($this->tax->calculate($option_value['price'], $result['tax_class_id'], $this->config->get('config_tax') ? 'P' : false), $currency);
								} else {
									$option_price = false;
								}

								$product_option_value_data[] = array(
									'product_option_value_id' => $option_value['product_option_value_id'],
									'option_value_id'         => $option_value['option_value_id'],
									'name'                    => $option_value['name'],
									'color'                   => $option_value['color'],
									'image'                   => $option_value['image'] ? $this->model_tool_image->resize($option_value['image'], 50, 50) : '',
									'price'                   => $option_price,
									'price_value'             => $this->tax->calculate($option_value['price'], $result['tax_class_id'], $this->config->get('config_tax') ? 'P' : false),
									'price_prefix'            => $option_value['price_prefix']
								);
							}
						}
						if($show_options_required_featured ==1) {
							if($option['required']) {
								$options[] = array(
									'product_option_id'    => $option['product_option_id'],
									'product_option_value' => $product_option_value_data,
									'option_id'            => $option['option_id'],
									'name'                 => $option['name'],
									'type'                 => $option['type'],
									'status_color_type'    => $option['status_color_type'],
									'value'                => $option['value'],
									'required'             => $option['required']
								);
							}
						} else {
							$options[] = array(
								'product_option_id'    => $option['product_option_id'],
								'product_option_value' => $product_option_value_data,
								'option_id'            => $option['option_id'],
								'name'                 => $option['name'],
								'type'                 => $option['type'],
								'status_color_type'    => $option['status_color_type'],
								'value'                => $option['value'],
								'required'             => $option['required']
							);
						}
					}
				}

					if ((float)$result['special']) {
						$special_date_end = $this->model_catalog_product->getDateEnd($result['product_id']);
					} else {
						$special_date_end = false;
					}

					if (($this->config->get('config_customer_price') && $this->customer->isLogged()) || !$this->config->get('config_customer_price')) {
						$price_no_format = $this->tax->calculate($result['price'], $result['tax_class_id'], $this->config->get('config_tax'));
					} else {
						$price_no_format = false;
					}

					if ((float)$result['special']) {
						$special_no_format = $this->tax->calculate($result['special'], $result['tax_class_id'], $this->config->get('config_tax'));
					} else {
						$special_no_format = false;
					}
					if((isset($result['date_available'])&&(round((strtotime(date("Y-m-d"))-strtotime($result['date_available']))/86400))<=$this->config->get('config_limit_day_newproduct'))) {
						$sticker_new_prod = true;
					} else {
						$sticker_new_prod = false;
					}
					$data['latest_products'][] = array(
						'width' => 			$setting['width'],
						'height' => 		$setting['height'],
						'sticker_new_prod'	=> $sticker_new_prod,
						'date_end'	 		=> $special_date_end,
						'product_quantity' 	=> $product_quantity,
						'stock_status' 		=> $stock_status,
						'options'	  		=> $options,
						'additional_image_hover' => $additional_image_hover,
						'reviews'    		=> sprintf((int)$result['reviews']),
						'skidka'     		=> round($skidka),
						'model'     		=> $result['model'],
						'date_available'	=> $result['date_available'],
						'viewed'	 		=> $result['viewed'],
						'top_bestsellers'	=> $top_bestsellers['total'],
						'minimum'     		=> ($result['minimum'] > 0) ? $result['minimum'] : 1,
						'price_no_format' 	=> $price_no_format,
						'special_no_format' => $special_no_format,
						'product_id'  		=> $result['product_id'],
						'thumb'       		=> $image,
						'name'        		=> $result['name'],
						'description' 		=> utf8_substr(strip_tags(html_entity_decode($result['description'], ENT_QUOTES, 'UTF-8')), 0, $this->config->get('theme_' . $this->config->get('config_theme') . '_product_description_length')) . '..',
						'price'       		=> $price,
						'special'     		=> $special,
						'tax'         		=> $tax,
						'rating'      		=> $rating,
						'href'        		=> $this->url->link('product/product', 'product_id=' . $result['product_id'])
					);
				}



			$data['special_products'] = array();

			$special_data = array(
				'sort'  => 'pd.name',
				'order' => 'ASC',
				'start' => 0,
				'limit' => $setting['limit']
			);
			$special_results = $this->model_catalog_product->getProductSpecials($special_data);
			foreach ($special_results as $result) {
					if ($result['image']) {
						$image = $this->model_tool_image->resize($result['image'], $setting['width'], $setting['height']);
					} else {
						$image = $this->model_tool_image->resize('placeholder.png', $setting['width'], $setting['height']);
					}

					if ($this->customer->isLogged() || !$this->config->get('config_customer_price')) {
						$price = $this->currency->format($this->tax->calculate($result['price'], $result['tax_class_id'], $this->config->get('config_tax')), $this->session->data['currency']);
					} else {
						$price = false;
					}

					if ((float)$result['special']) {
						$special = $this->currency->format($this->tax->calculate($result['special'], $result['tax_class_id'], $this->config->get('config_tax')), $this->session->data['currency']);
					} else {
						$special = false;
					}

					if ($this->config->get('config_tax')) {
						$tax = $this->currency->format((float)$result['special'] ? $result['special'] : $result['price'], $this->session->data['currency']);
					} else {
						$tax = false;
					}

					if ($this->config->get('config_review_status')) {
						$rating = $result['rating'];
					} else {
						$rating = false;
					}


					$additional_image_hover = '';
					if(isset($data['setting_module']['status_additional_image_hover']) && ($data['setting_module']['status_additional_image_hover'] == 1)){
						$results_img = $this->model_catalog_product->getProductImages($result['product_id']);
						foreach ($results_img as $key => $result_img) {
							if ($key < 1) {
								$additional_image_hover = $this->model_tool_image->resize($result_img['image'], $setting['width'], $setting['height']);
							}
						}
					}
					if ((float)$result['special']) {
						$price2 = $this->tax->calculate($result['price'], $result['tax_class_id'], $this->config->get('config_tax'));
						$special2 = $this->tax->calculate($result['special'], $result['tax_class_id'], $this->config->get('config_tax'));
						$skidka = $special2/($price2/100)-100;
					} else {
						$skidka = "";
					}
					$top_bestsellers = $this->model_catalog_product->getTopSeller($result['product_id']);
					$product_quantity = $result['quantity'];
					$stock_status = $result['stock_status'];
					if (isset($product_info)) {
						$result = $product_info;
					} else {
						$result = $result;
					}
					if (VERSION >= 2.2) {
						$currency = $this->session->data['currency'];
					} else {
						$currency = '';
					}

					$options = array();
				if ($data['show_options']==1) {
					foreach ($this->model_catalog_product->getProductOptions($result['product_id']) as $option) {
						$product_option_value_data = array();

						foreach ($option['product_option_value'] as $option_value) {
							if (!$option_value['subtract'] || ($option_value['quantity'] > 0)) {
								if ((($this->config->get('config_customer_price') && $this->customer->isLogged()) || !$this->config->get('config_customer_price')) && (float)$option_value['price']) {
									$option_price = $this->currency->format($this->tax->calculate($option_value['price'], $result['tax_class_id'], $this->config->get('config_tax') ? 'P' : false), $currency);
								} else {
									$option_price = false;
								}

								$product_option_value_data[] = array(
									'product_option_value_id' => $option_value['product_option_value_id'],
									'option_value_id'         => $option_value['option_value_id'],
									'name'                    => $option_value['name'],
									'color'                   => $option_value['color'],
									'image'                   => $option_value['image'] ? $this->model_tool_image->resize($option_value['image'], 50, 50) : '',
									'price'                   => $option_price,
									'price_value'             => $this->tax->calculate($option_value['price'], $result['tax_class_id'], $this->config->get('config_tax') ? 'P' : false),
									'price_prefix'            => $option_value['price_prefix']
								);
							}
						}
						if($show_options_required_featured ==1) {
							if($option['required']) {
								$options[] = array(
									'product_option_id'    => $option['product_option_id'],
									'product_option_value' => $product_option_value_data,
									'option_id'            => $option['option_id'],
									'name'                 => $option['name'],
									'type'                 => $option['type'],
									'status_color_type'    => $option['status_color_type'],
									'value'                => $option['value'],
									'required'             => $option['required']
								);
							}
						} else {
							$options[] = array(
								'product_option_id'    => $option['product_option_id'],
								'product_option_value' => $product_option_value_data,
								'option_id'            => $option['option_id'],
								'name'                 => $option['name'],
								'type'                 => $option['type'],
								'status_color_type'    => $option['status_color_type'],
								'value'                => $option['value'],
								'required'             => $option['required']
							);
						}
					}
				}

					if ((float)$result['special']) {
						$special_date_end = $this->model_catalog_product->getDateEnd($result['product_id']);
					} else {
						$special_date_end = false;
					}
					if (($this->config->get('config_customer_price') && $this->customer->isLogged()) || !$this->config->get('config_customer_price')) {
						$price_no_format = $this->tax->calculate($result['price'], $result['tax_class_id'], $this->config->get('config_tax'));
					} else {
						$price_no_format = false;
					}

					if ((float)$result['special']) {
						$special_no_format = $this->tax->calculate($result['special'], $result['tax_class_id'], $this->config->get('config_tax'));
					} else {
						$special_no_format = false;
					}
					if((isset($result['date_available'])&&(round((strtotime(date("Y-m-d"))-strtotime($result['date_available']))/86400))<=$this->config->get('config_limit_day_newproduct'))) {
						$sticker_new_prod = true;
					} else {
						$sticker_new_prod = false;
					}
					$data['special_products'][] = array(
						'width' => 			$setting['width'],
						'height' => 		$setting['height'],
						'sticker_new_prod'	=> $sticker_new_prod,
						'date_end'	 		=> $special_date_end,
						'product_quantity' 	=> $product_quantity,
						'stock_status' 		=> $stock_status,
						'options'	  		=> $options,
						'additional_image_hover' => $additional_image_hover,
						'reviews'    		=> sprintf((int)$result['reviews']),
						'skidka'     		=> round($skidka),
						'model'     		=> $result['model'],
						'date_available'	=> $result['date_available'],
						'viewed'	 		=> $result['viewed'],
						'top_bestsellers'	=> $top_bestsellers['total'],
						'minimum'     		=> ($result['minimum'] > 0) ? $result['minimum'] : 1,
						'price_no_format' 	=> $price_no_format,
						'special_no_format' => $special_no_format,
						'product_id'  		=> $result['product_id'],
						'thumb'       		=> $image,
						'name'        		=> $result['name'],
						'description' 		=> utf8_substr(strip_tags(html_entity_decode($result['description'], ENT_QUOTES, 'UTF-8')), 0, $this->config->get('theme_' . $this->config->get('config_theme') . '_product_description_length')) . '..',
						'price'       		=> $price,
						'special'     		=> $special,
						'tax'         		=> $tax,
						'rating'      		=> $rating,
						'href'        		=> $this->url->link('product/product', 'product_id=' . $result['product_id'])
					);
				}

			$data['bestseller_products'] = array();

			$bestseller_results = $this->model_catalog_product->getBestSellerProducts($setting['limit']);

			foreach ($bestseller_results as $result) {
					if ($result['image']) {
						$image = $this->model_tool_image->resize($result['image'], $setting['width'], $setting['height']);
					} else {
						$image = $this->model_tool_image->resize('placeholder.png', $setting['width'], $setting['height']);
					}

					if ($this->customer->isLogged() || !$this->config->get('config_customer_price')) {
						$price = $this->currency->format($this->tax->calculate($result['price'], $result['tax_class_id'], $this->config->get('config_tax')), $this->session->data['currency']);
					} else {
						$price = false;
					}

					if ((float)$result['special']) {
						$special = $this->currency->format($this->tax->calculate($result['special'], $result['tax_class_id'], $this->config->get('config_tax')), $this->session->data['currency']);
					} else {
						$special = false;
					}

					if ($this->config->get('config_tax')) {
						$tax = $this->currency->format((float)$result['special'] ? $result['special'] : $result['price'], $this->session->data['currency']);
					} else {
						$tax = false;
					}

					if ($this->config->get('config_review_status')) {
						$rating = $result['rating'];
					} else {
						$rating = false;
					}
					$additional_image_hover = '';
					if(isset($data['setting_module']['status_additional_image_hover']) && ($data['setting_module']['status_additional_image_hover'] == 1)){
						$results_img = $this->model_catalog_product->getProductImages($result['product_id']);
						foreach ($results_img as $key => $result_img) {
							if ($key < 1) {
								$additional_image_hover = $this->model_tool_image->resize($result_img['image'], $setting['width'], $setting['height']);
							}
						}
					}
					if ((float)$result['special']) {
						$price2 = $this->tax->calculate($result['price'], $result['tax_class_id'], $this->config->get('config_tax'));
						$special2 = $this->tax->calculate($result['special'], $result['tax_class_id'], $this->config->get('config_tax'));
						$skidka = $special2/($price2/100)-100;
					} else {
						$skidka = "";
					}
					$top_bestsellers = $this->model_catalog_product->getTopSeller($result['product_id']);
					$product_quantity = $result['quantity'];
					$stock_status = $result['stock_status'];
					if (isset($product_info)) {
						$result = $product_info;
					} else {
						$result = $result;
					}
					if (VERSION >= 2.2) {
						$currency = $this->session->data['currency'];
					} else {
						$currency = '';
					}

					$options = array();
				if ($data['show_options']==1) {
					foreach ($this->model_catalog_product->getProductOptions($result['product_id']) as $option) {
						$product_option_value_data = array();

						foreach ($option['product_option_value'] as $option_value) {
							if (!$option_value['subtract'] || ($option_value['quantity'] > 0)) {
								if ((($this->config->get('config_customer_price') && $this->customer->isLogged()) || !$this->config->get('config_customer_price')) && (float)$option_value['price']) {
									$option_price = $this->currency->format($this->tax->calculate($option_value['price'], $result['tax_class_id'], $this->config->get('config_tax') ? 'P' : false), $currency);
								} else {
									$option_price = false;
								}

								$product_option_value_data[] = array(
									'product_option_value_id' => $option_value['product_option_value_id'],
									'option_value_id'         => $option_value['option_value_id'],
									'name'                    => $option_value['name'],
									'color'                   => $option_value['color'],
									'image'                   => $option_value['image'] ? $this->model_tool_image->resize($option_value['image'], 50, 50) : '',
									'price'                   => $option_price,
									'price_value'             => $this->tax->calculate($option_value['price'], $result['tax_class_id'], $this->config->get('config_tax') ? 'P' : false),
									'price_prefix'            => $option_value['price_prefix']
								);
							}
						}
						if($show_options_required_featured ==1) {
							if($option['required']) {
								$options[] = array(
									'product_option_id'    => $option['product_option_id'],
									'product_option_value' => $product_option_value_data,
									'option_id'            => $option['option_id'],
									'name'                 => $option['name'],
									'type'                 => $option['type'],
									'status_color_type'    => $option['status_color_type'],
									'value'                => $option['value'],
									'required'             => $option['required']
								);
							}
						} else {
							$options[] = array(
								'product_option_id'    => $option['product_option_id'],
								'product_option_value' => $product_option_value_data,
								'option_id'            => $option['option_id'],
								'name'                 => $option['name'],
								'type'                 => $option['type'],
								'status_color_type'    => $option['status_color_type'],
								'value'                => $option['value'],
								'required'             => $option['required']
							);
						}
					}
				}
					if ((float)$result['special']) {
						$special_date_end = $this->model_catalog_product->getDateEnd($result['product_id']);
					} else {
						$special_date_end = false;
					}
					if (($this->config->get('config_customer_price') && $this->customer->isLogged()) || !$this->config->get('config_customer_price')) {
						$price_no_format = $this->tax->calculate($result['price'], $result['tax_class_id'], $this->config->get('config_tax'));
					} else {
						$price_no_format = false;
					}

					if ((float)$result['special']) {
						$special_no_format = $this->tax->calculate($result['special'], $result['tax_class_id'], $this->config->get('config_tax'));
					} else {
						$special_no_format = false;
					}
					if((isset($result['date_available'])&&(round((strtotime(date("Y-m-d"))-strtotime($result['date_available']))/86400))<=$this->config->get('config_limit_day_newproduct'))) {
						$sticker_new_prod = true;
					} else {
						$sticker_new_prod = false;
					}
					$data['bestseller_products'][] = array(
						'width' => 			$setting['width'],
						'height' => 		$setting['height'],
						'sticker_new_prod'	=> $sticker_new_prod,
						'date_end'	 		=> $special_date_end,
						'product_quantity' 	=> $product_quantity,
						'stock_status' 		=> $stock_status,
						'options'	  		=> $options,
						'additional_image_hover' => $additional_image_hover,
						'reviews'    		=> sprintf((int)$result['reviews']),
						'skidka'     		=> round($skidka),
						'model'     		=> $result['model'],
						'date_available'	=> $result['date_available'],
						'viewed'	 		=> $result['viewed'],
						'top_bestsellers'	=> $top_bestsellers['total'],
						'minimum'     		=> ($result['minimum'] > 0) ? $result['minimum'] : 1,
						'price_no_format' 	=> $price_no_format,
						'special_no_format' => $special_no_format,
						'product_id'  		=> $result['product_id'],
						'thumb'       		=> $image,
						'name'        		=> $result['name'],
						'description' 		=> utf8_substr(strip_tags(html_entity_decode($result['description'], ENT_QUOTES, 'UTF-8')), 0, $this->config->get('theme_' . $this->config->get('config_theme') . '_product_description_length')) . '..',
						'price'       		=> $price,
						'special'     		=> $special,
						'tax'         		=> $tax,
						'rating'      		=> $rating,
						'href'        		=> $this->url->link('product/product', 'product_id=' . $result['product_id'])
					);
				}

		$data['popular_products'] = array();

		$product_data = array();

		$query = $this->db->query("SELECT p.product_id FROM " . DB_PREFIX . "product p LEFT JOIN " . DB_PREFIX . "product_to_store p2s ON (p.product_id = p2s.product_id) WHERE p.status = '1' AND p.date_available <= NOW() AND p2s.store_id = '" . (int)$this->config->get('config_store_id') . "' ORDER BY p.viewed DESC LIMIT " . (int)$setting['limit']);

		foreach ($query->rows as $result) {
			$product_data[$result['product_id']] = $this->model_catalog_product->getProduct($result['product_id']);
		}

		$results = $product_data;
		foreach ($results as $result) {
					if ($result['image']) {
						$image = $this->model_tool_image->resize($result['image'], $setting['width'], $setting['height']);
					} else {
						$image = $this->model_tool_image->resize('placeholder.png', $setting['width'], $setting['height']);
					}

					if ($this->customer->isLogged() || !$this->config->get('config_customer_price')) {
						$price = $this->currency->format($this->tax->calculate($result['price'], $result['tax_class_id'], $this->config->get('config_tax')), $this->session->data['currency']);
					} else {
						$price = false;
					}

					if ((float)$result['special']) {
						$special = $this->currency->format($this->tax->calculate($result['special'], $result['tax_class_id'], $this->config->get('config_tax')), $this->session->data['currency']);
					} else {
						$special = false;
					}

					if ($this->config->get('config_tax')) {
						$tax = $this->currency->format((float)$result['special'] ? $result['special'] : $result['price'], $this->session->data['currency']);
					} else {
						$tax = false;
					}

					if ($this->config->get('config_review_status')) {
						$rating = $result['rating'];
					} else {
						$rating = false;
					}

					$additional_image_hover = '';
					if(isset($data['setting_module']['status_additional_image_hover']) && ($data['setting_module']['status_additional_image_hover'] == 1)){
						$results_img = $this->model_catalog_product->getProductImages($result['product_id']);
						foreach ($results_img as $key => $result_img) {
							if ($key < 1) {
								$additional_image_hover = $this->model_tool_image->resize($result_img['image'], $setting['width'], $setting['height']);
							}
						}
					}
					if ((float)$result['special']) {
						$price2 = $this->tax->calculate($result['price'], $result['tax_class_id'], $this->config->get('config_tax'));
						$special2 = $this->tax->calculate($result['special'], $result['tax_class_id'], $this->config->get('config_tax'));
						$skidka = $special2/($price2/100)-100;
					} else {
						$skidka = "";
					}
					$top_bestsellers = $this->model_catalog_product->getTopSeller($result['product_id']);
					$product_quantity = $result['quantity'];
					$stock_status = $result['stock_status'];
					if (isset($product_info)) {
						$result = $product_info;
					} else {
						$result = $result;
					}
					if (VERSION >= 2.2) {
						$currency = $this->session->data['currency'];
					} else {
						$currency = '';
					}

					$options = array();
				if ($data['show_options']==1) {
					foreach ($this->model_catalog_product->getProductOptions($result['product_id']) as $option) {
						$product_option_value_data = array();

						foreach ($option['product_option_value'] as $option_value) {
							if (!$option_value['subtract'] || ($option_value['quantity'] > 0)) {
								if ((($this->config->get('config_customer_price') && $this->customer->isLogged()) || !$this->config->get('config_customer_price')) && (float)$option_value['price']) {
									$option_price = $this->currency->format($this->tax->calculate($option_value['price'], $result['tax_class_id'], $this->config->get('config_tax') ? 'P' : false), $currency);
								} else {
									$option_price = false;
								}

								$product_option_value_data[] = array(
									'product_option_value_id' => $option_value['product_option_value_id'],
									'option_value_id'         => $option_value['option_value_id'],
									'name'                    => $option_value['name'],
									'color'                   => $option_value['color'],
									'image'                   => $option_value['image'] ? $this->model_tool_image->resize($option_value['image'], 50, 50) : '',
									'price'                   => $option_price,
									'price_value'             => $this->tax->calculate($option_value['price'], $result['tax_class_id'], $this->config->get('config_tax') ? 'P' : false),
									'price_prefix'            => $option_value['price_prefix']
								);
							}
						}
						if($show_options_required_featured ==1) {
							if($option['required']) {
								$options[] = array(
									'product_option_id'    => $option['product_option_id'],
									'product_option_value' => $product_option_value_data,
									'option_id'            => $option['option_id'],
									'name'                 => $option['name'],
									'type'                 => $option['type'],
									'status_color_type'    => $option['status_color_type'],
									'value'                => $option['value'],
									'required'             => $option['required']
								);
							}
						} else {
							$options[] = array(
								'product_option_id'    => $option['product_option_id'],
								'product_option_value' => $product_option_value_data,
								'option_id'            => $option['option_id'],
								'name'                 => $option['name'],
								'type'                 => $option['type'],
								'status_color_type'    => $option['status_color_type'],
								'value'                => $option['value'],
								'required'             => $option['required']
							);
						}
					}
				}
					if ((float)$result['special']) {
						$special_date_end = $this->model_catalog_product->getDateEnd($result['product_id']);
					} else {
						$special_date_end = false;
					}
					if (($this->config->get('config_customer_price') && $this->customer->isLogged()) || !$this->config->get('config_customer_price')) {
						$price_no_format = $this->tax->calculate($result['price'], $result['tax_class_id'], $this->config->get('config_tax'));
					} else {
						$price_no_format = false;
					}

					if ((float)$result['special']) {
						$special_no_format = $this->tax->calculate($result['special'], $result['tax_class_id'], $this->config->get('config_tax'));
					} else {
						$special_no_format = false;
					}
					if((isset($result['date_available'])&&(round((strtotime(date("Y-m-d"))-strtotime($result['date_available']))/86400))<=$this->config->get('config_limit_day_newproduct'))) {
						$sticker_new_prod = true;
					} else {
						$sticker_new_prod = false;
					}
					$data['popular_products'][] = array(
						'width' => 			$setting['width'],
						'height' => 		$setting['height'],
						'sticker_new_prod'	=> $sticker_new_prod,
						'date_end'	 		=> $special_date_end,
						'product_quantity' 	=> $product_quantity,
						'stock_status' 		=> $stock_status,
						'options'	  		=> $options,
						'additional_image_hover' => $additional_image_hover,
						'reviews'    		=> sprintf((int)$result['reviews']),
						'skidka'     		=> round($skidka),
						'model'     		=> $result['model'],
						'date_available'	=> $result['date_available'],
						'viewed'	 		=> $result['viewed'],
						'top_bestsellers'	=> $top_bestsellers['total'],
						'minimum'     		=> ($result['minimum'] > 0) ? $result['minimum'] : 1,
						'price_no_format' 	=> $price_no_format,
						'special_no_format' => $special_no_format,
						'product_id'  		=> $result['product_id'],
						'thumb'       		=> $image,
						'name'        		=> $result['name'],
						'description' 		=> utf8_substr(strip_tags(html_entity_decode($result['description'], ENT_QUOTES, 'UTF-8')), 0, $this->config->get('theme_' . $this->config->get('config_theme') . '_product_description_length')) . '..',
						'price'       		=> $price,
						'special'     		=> $special,
						'tax'         		=> $tax,
						'rating'      		=> $rating,
						'href'        		=> $this->url->link('product/product', 'product_id=' . $result['product_id'])
					);
				}

		$data['featured_products'] = array();

		$query = $this->db->query("SELECT `setting` FROM `" . DB_PREFIX . "module` WHERE `code` = 'featured'");
		if(!empty($query->row)){
			$module_info = json_decode($query->row['setting'], true);
			$products = $module_info['product'];
		} else {
			$products = false;
		}
		if($products){
		foreach ($products as $product_id){
			$product_info = $this->model_catalog_product->getProduct($product_id);
			if ($product_info) {
					if ($product_info['image']) {
						$image = $this->model_tool_image->resize($product_info['image'], $setting['width'], $setting['height']);
					} else {
						$image = $this->model_tool_image->resize('placeholder.png', $setting['width'], $setting['height']);
					}

					if ($this->customer->isLogged() || !$this->config->get('config_customer_price')) {
						$price = $this->currency->format($this->tax->calculate($product_info['price'], $product_info['tax_class_id'], $this->config->get('config_tax')), $this->session->data['currency']);
					} else {
						$price = false;
					}

					if ((float)$product_info['special']) {
						$special = $this->currency->format($this->tax->calculate($product_info['special'], $product_info['tax_class_id'], $this->config->get('config_tax')), $this->session->data['currency']);
					} else {
						$special = false;
					}

					if ($this->config->get('config_tax')) {
						$tax = $this->currency->format((float)$product_info['special'] ? $product_info['special'] : $product_info['price'], $this->session->data['currency']);
					} else {
						$tax = false;
					}

					if ($this->config->get('config_review_status')) {
						$rating = $product_info['rating'];
					} else {
						$rating = false;
					}
					$additional_image_hover = '';
					if(isset($data['setting_module']['status_additional_image_hover']) && ($data['setting_module']['status_additional_image_hover'] == 1)){
						$results_img = $this->model_catalog_product->getProductImages($result['product_id']);
						foreach ($results_img as $key => $result_img) {
							if ($key < 1) {
								$additional_image_hover = $this->model_tool_image->resize($result_img['image'], $setting['width'], $setting['height']);
							}
						}
					}
					if ((float)$product_info['special']) {
						$price2 = $this->tax->calculate($product_info['price'], $product_info['tax_class_id'], $this->config->get('config_tax'));
						$special2 = $this->tax->calculate($product_info['special'], $product_info['tax_class_id'], $this->config->get('config_tax'));
						$skidka = $special2/($price2/100)-100;
					} else {
						$skidka = "";
					}
					$top_bestsellers = $this->model_catalog_product->getTopSeller($product_info['product_id']);
					$product_quantity = $product_info['quantity'];
					$stock_status = $product_info['stock_status'];
					if (isset($product_info)) {
						$result = $product_info;
					} else {
						$result = $result;
					}
					if (VERSION >= 2.2) {
						$currency = $this->session->data['currency'];
					} else {
						$currency = '';
					}

					$options = array();
				if ($data['show_options']==1) {
					foreach ($this->model_catalog_product->getProductOptions($result['product_id']) as $option) {
						$product_option_value_data = array();

						foreach ($option['product_option_value'] as $option_value) {
							if (!$option_value['subtract'] || ($option_value['quantity'] > 0)) {
								if ((($this->config->get('config_customer_price') && $this->customer->isLogged()) || !$this->config->get('config_customer_price')) && (float)$option_value['price']) {
									$option_price = $this->currency->format($this->tax->calculate($option_value['price'], $result['tax_class_id'], $this->config->get('config_tax') ? 'P' : false), $currency);
								} else {
									$option_price = false;
								}

								$product_option_value_data[] = array(
									'product_option_value_id' => $option_value['product_option_value_id'],
									'option_value_id'         => $option_value['option_value_id'],
									'name'                    => $option_value['name'],
									'color'                   => $option_value['color'],
									'image'                   => $option_value['image'] ? $this->model_tool_image->resize($option_value['image'], 50, 50) : '',
									'price'                   => $option_price,
									'price_value'             => $this->tax->calculate($option_value['price'], $result['tax_class_id'], $this->config->get('config_tax') ? 'P' : false),
									'price_prefix'            => $option_value['price_prefix']
								);
							}
						}
						if($show_options_required_featured ==1) {
							if($option['required']) {
								$options[] = array(
									'product_option_id'    => $option['product_option_id'],
									'product_option_value' => $product_option_value_data,
									'option_id'            => $option['option_id'],
									'name'                 => $option['name'],
									'type'                 => $option['type'],
									'status_color_type'    => $option['status_color_type'],
									'value'                => $option['value'],
									'required'             => $option['required']
								);
							}
						} else {
							$options[] = array(
								'product_option_id'    => $option['product_option_id'],
								'product_option_value' => $product_option_value_data,
								'option_id'            => $option['option_id'],
								'name'                 => $option['name'],
								'type'                 => $option['type'],
								'status_color_type'    => $option['status_color_type'],
								'value'                => $option['value'],
								'required'             => $option['required']
							);
						}
					}
				}

					if ((float)$result['special']) {
						$special_date_end = $this->model_catalog_product->getDateEnd($result['product_id']);
					} else {
						$special_date_end = false;
					}
					if (($this->config->get('config_customer_price') && $this->customer->isLogged()) || !$this->config->get('config_customer_price')) {
						$price_no_format = $this->tax->calculate($product_info['price'], $product_info['tax_class_id'], $this->config->get('config_tax'));
					} else {
						$price_no_format = false;
					}

					if ((float)$product_info['special']) {
						$special_no_format = $this->tax->calculate($product_info['special'], $product_info['tax_class_id'], $this->config->get('config_tax'));
					} else {
						$special_no_format = false;
					}
					if((isset($result['date_available'])&&(round((strtotime(date("Y-m-d"))-strtotime($result['date_available']))/86400))<=$this->config->get('config_limit_day_newproduct'))) {
						$sticker_new_prod = true;
					} else {
						$sticker_new_prod = false;
					}
					$data['featured_products'][] = array(
						'width' => 			$setting['width'],
						'height' => 		$setting['height'],
						'sticker_new_prod'	=> $sticker_new_prod,
						'date_end'	 		=> $special_date_end,
						'product_quantity' 	=> $product_quantity,
						'stock_status' 		=> $stock_status,
						'options'	  		=> $options,
						'additional_image_hover' => $additional_image_hover,
						'reviews'    		=> sprintf((int)$product_info['reviews']),
						'skidka'     		=> round($skidka),
						'model'     		=> $product_info['model'],
						'date_available'	=> $product_info['date_available'],
						'viewed'	 		=> $product_info['viewed'],
						'top_bestsellers'	=> $top_bestsellers['total'],
						'minimum'     		=> ($product_info['minimum'] > 0) ? $product_info['minimum'] : 1,
						'price_no_format' 	=> $price_no_format,
						'special_no_format' => $special_no_format,
						'product_id'  		=> $product_info['product_id'],
						'thumb'       		=> $image,
						'name'        		=> $product_info['name'],
						'description' 		=> utf8_substr(strip_tags(html_entity_decode($product_info['description'], ENT_QUOTES, 'UTF-8')), 0, $this->config->get('theme_' . $this->config->get('config_theme') . '_product_description_length')) . '..',
						'price'       		=> $price,
						'special'     		=> $special,
						'tax'         		=> $tax,
						'rating'      		=> $rating,
						'href'        		=> $this->url->link('product/product', 'product_id=' . $product_info['product_id'])
					);
				}
		}
		}
			$data['module'] = $module++;

			return $this->load->view('extension/module/luxshop_alltabs', $data);


	}
}