<?php
// *	@source		See SOURCE.txt for source and other copyright.
// *	@license	GNU General Public License version 3; see LICENSE.txt

class ControllerProductProduct extends Controller {
	private $error = array();

	public function index() {
      
		$this->load->language('extension/module/luxshop_question_answer');	
        $data['qadata'] = $this->config->get('qadata');
		if(isset($data['qadata']['status'])){
		$this->load->model('extension/module/luxshop_question_answer');
		$info_question_answer = $this->model_extension_module_luxshop_question_answer->getTotalQuestionAnswer($this->request->get['product_id']);
		$data['tab_question_answer'] = sprintf($this->language->get('tab_question_answer'), $info_question_answer);
		}
      
       
        $data['fcpdata'] = $this->config->get('fcpdata');
		if (isset($data['fcpdata']['status']) && $data['fcpdata']['status']) {
		$this->document->addStyle('catalog/view/theme/luxshop/stylesheet/popup-found_cheaper_product/stylefcp.css');
			$data['fcpdata_css'] = '';
			if ($data['fcpdata']['color_found_cheaper_button']) {
				$data['fcpdata_css'] .='.btn-cheaper {color:'. $data['fcpdata']['color_found_cheaper_button'] .' !important; }';
			}
			if ($data['fcpdata']['background_found_cheaper_button']) {
				$data['fcpdata_css'] .='.btn-cheaper {background:'. $data['fcpdata']['background_found_cheaper_button'] .' !important; }';
			}
			if ($data['fcpdata']['background_found_cheaper_button_hover']) {
				$data['fcpdata_css'] .='.btn-cheaper:hover {background:'. $data['fcpdata']['background_found_cheaper_button_hover'] .' !important; }';
			}
			if ($data['fcpdata']['border_found_cheaper_button']) {
				$data['fcpdata_css'] .='.btn-cheaper {border-color:'. $data['fcpdata']['border_found_cheaper_button'] .' !important; }';
			}
			if ($data['fcpdata']['border_found_cheaper_button_hover']) {
				$data['fcpdata_css'] .='.btn-cheaper:hover {border-color:'. $data['fcpdata']['border_found_cheaper_button_hover'] .' !important; }';
			}
		}
      
		$this->load->language('product/product');
$this->load->language('luxshop/theme');

		$data['breadcrumbs'] = array();

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_home'),
			'href' => $this->url->link('common/home')
		);

		$this->load->model('catalog/category');

		if (isset($this->request->get['path'])) {
			$path = '';

			$parts = explode('_', (string)$this->request->get['path']);

			$category_id = (int)array_pop($parts);

			foreach ($parts as $path_id) {
				if (!$path) {
					$path = $path_id;
				} else {
					$path .= '_' . $path_id;
				}

				$category_info = $this->model_catalog_category->getCategory($path_id);

				if ($category_info) {
					$data['breadcrumbs'][] = array(
						'text' => $category_info['name'],
						'href' => $this->url->link('product/category', 'path=' . $path)
					);
				}
			}

			// Set the last category breadcrumb
			$category_info = $this->model_catalog_category->getCategory($category_id);

			if ($category_info) {
				$url = '';

				if (isset($this->request->get['sort'])) {
					$url .= '&sort=' . $this->request->get['sort'];
				}

				if (isset($this->request->get['order'])) {
					$url .= '&order=' . $this->request->get['order'];
				}

				if (isset($this->request->get['page'])) {
					$url .= '&page=' . $this->request->get['page'];
				}

				if (isset($this->request->get['limit'])) {
					$url .= '&limit=' . $this->request->get['limit'];
				}

				$data['breadcrumbs'][] = array(
					'text' => $category_info['name'],
					'href' => $this->url->link('product/category', 'path=' . $this->request->get['path'] . $url)
				);
			}
		}

		$this->load->model('catalog/manufacturer');

		if (isset($this->request->get['manufacturer_id'])) {
			$data['breadcrumbs'][] = array(
				'text' => $this->language->get('text_brand'),
				'href' => $this->url->link('product/manufacturer')
			);

			$url = '';

			if (isset($this->request->get['sort'])) {
				$url .= '&sort=' . $this->request->get['sort'];
			}

			if (isset($this->request->get['order'])) {
				$url .= '&order=' . $this->request->get['order'];
			}

			if (isset($this->request->get['page'])) {
				$url .= '&page=' . $this->request->get['page'];
			}

			if (isset($this->request->get['limit'])) {
				$url .= '&limit=' . $this->request->get['limit'];
			}

			$manufacturer_info = $this->model_catalog_manufacturer->getManufacturer($this->request->get['manufacturer_id']);

			if ($manufacturer_info) {
				$data['breadcrumbs'][] = array(
					'text' => $manufacturer_info['name'],
					'href' => $this->url->link('product/manufacturer/info', 'manufacturer_id=' . $this->request->get['manufacturer_id'] . $url)
				);
			}
		}

		if (isset($this->request->get['search']) || isset($this->request->get['tag'])) {
			$url = '';

			if (isset($this->request->get['search'])) {
				$url .= '&search=' . $this->request->get['search'];
			}

			if (isset($this->request->get['tag'])) {
				$url .= '&tag=' . $this->request->get['tag'];
			}

			if (isset($this->request->get['description'])) {
				$url .= '&description=' . $this->request->get['description'];
			}

			if (isset($this->request->get['category_id'])) {
				$url .= '&category_id=' . $this->request->get['category_id'];
			}

			if (isset($this->request->get['sub_category'])) {
				$url .= '&sub_category=' . $this->request->get['sub_category'];
			}

			if (isset($this->request->get['sort'])) {
				$url .= '&sort=' . $this->request->get['sort'];
			}

			if (isset($this->request->get['order'])) {
				$url .= '&order=' . $this->request->get['order'];
			}

			if (isset($this->request->get['page'])) {
				$url .= '&page=' . $this->request->get['page'];
			}

			if (isset($this->request->get['limit'])) {
				$url .= '&limit=' . $this->request->get['limit'];
			}

			$data['breadcrumbs'][] = array(
				'text' => $this->language->get('text_search'),
				'href' => $this->url->link('product/search', $url)
			);
		}

		if (isset($this->request->get['product_id'])) {
			$product_id = (int)$this->request->get['product_id'];
		} else {
			$product_id = 0;
		}

		$this->load->model('catalog/product');

		$product_info = $this->model_catalog_product->getProduct($product_id);

		if ($product_info) {
			$url = '';

			if (isset($this->request->get['path'])) {
				$url .= '&path=' . $this->request->get['path'];
			}

			if (isset($this->request->get['filter'])) {
				$url .= '&filter=' . $this->request->get['filter'];
			}

			if (isset($this->request->get['manufacturer_id'])) {
				$url .= '&manufacturer_id=' . $this->request->get['manufacturer_id'];
			}

			if (isset($this->request->get['search'])) {
				$url .= '&search=' . $this->request->get['search'];
			}

			if (isset($this->request->get['tag'])) {
				$url .= '&tag=' . $this->request->get['tag'];
			}

			if (isset($this->request->get['description'])) {
				$url .= '&description=' . $this->request->get['description'];
			}

			if (isset($this->request->get['category_id'])) {
				$url .= '&category_id=' . $this->request->get['category_id'];
			}

			if (isset($this->request->get['sub_category'])) {
				$url .= '&sub_category=' . $this->request->get['sub_category'];
			}

			if (isset($this->request->get['sort'])) {
				$url .= '&sort=' . $this->request->get['sort'];
			}

			if (isset($this->request->get['order'])) {
				$url .= '&order=' . $this->request->get['order'];
			}

			if (isset($this->request->get['page'])) {
				$url .= '&page=' . $this->request->get['page'];
			}

			if (isset($this->request->get['limit'])) {
				$url .= '&limit=' . $this->request->get['limit'];
			}

			$data['breadcrumbs'][] = array(
				'text' => $product_info['name'],
				'href' => $this->url->link('product/product', $url . '&product_id=' . $this->request->get['product_id'])
			);

			if ($product_info['meta_title']) {
				$this->document->setTitle($product_info['meta_title']);
			} else {
				$this->document->setTitle($product_info['name']);
			}
			
			if ($product_info['noindex'] <= 0 && $this->config->get('config_noindex_status')) {
				$this->document->setRobots('noindex,follow');
			}
			
			if ($product_info['meta_h1']) {
				$data['heading_title'] = $product_info['meta_h1'];
			} else {
				$data['heading_title'] = $product_info['name'];
			}
			
			$this->document->setDescription($product_info['meta_description']);
			$this->document->setKeywords($product_info['meta_keyword']);
			$this->document->addLink($this->url->link('product/product', 'product_id=' . $this->request->get['product_id']), 'canonical');
			
			
			
			
			
			

			$data['text_minimum'] = sprintf($this->language->get('text_minimum'), $product_info['minimum']);
			$data['text_login'] = sprintf($this->language->get('text_login'), $this->url->link('account/login', '', true), $this->url->link('account/register', '', true));

			$this->load->model('catalog/review');

			$data['tab_review'] = sprintf($this->language->get('tab_review'), $product_info['reviews']);

			$data['product_id'] = (int)$this->request->get['product_id'];
			$data['manufacturer'] = $product_info['manufacturer'];
			$data['manufacturers'] = $this->url->link('product/manufacturer/info', 'manufacturer_id=' . $product_info['manufacturer_id']);
			$data['model'] = $product_info['model'];
			$data['reward'] = $product_info['reward'];
			$data['points'] = $product_info['points'];
			$data['description'] = html_entity_decode($product_info['description'], ENT_QUOTES, 'UTF-8');

			$data['short_description'] = utf8_substr(strip_tags(html_entity_decode($product_info['description'], ENT_QUOTES, 'UTF-8')), 0, 220);
			

			if ($product_info['quantity'] <= 0) {
				$data['stock'] = $product_info['stock_status'];
			} elseif ($this->config->get('config_stock_display')) {
				$data['stock'] = $product_info['quantity'];
			} else {
				$data['stock'] = $this->language->get('text_instock');
			}


        $tabs_product_on_off = $this->config->get('tabs_product_on_off');
		$data['product_additional_tabs'] = array();
        if (isset($tabs_product_on_off['status']) && $tabs_product_on_off['status']) {
          $this->load->model('catalog/luxshop_product_tabs');
          $data['product_additional_tabs'] = $this->model_catalog_luxshop_product_tabs->getTabs($product_id);
        }
      
			$this->load->model('tool/image');

			$data['hide_short_desc_mob'] = (!empty($this->config->get('hide_short_desc_mob')) ? $this->config->get('hide_short_desc_mob') : 0);
			$data['hide_short_attr_mob'] = (!empty($this->config->get('hide_short_attr_mob')) ? $this->config->get('hide_short_attr_mob') : 0);
			$data['reviewCount'] = (int)$product_info['reviews'];	
			if ((float)$product_info['special']) {
				$data['special_date_end'] = $this->model_catalog_product->getDateEnd($product_id);
			} else {
				$data['special_date_end'] = false;
			}
			if((isset($product_info['date_available'])&&(round((strtotime(date("Y-m-d"))-strtotime($product_info['date_available']))/86400))<=$this->config->get('config_limit_day_newproduct'))) {
				$data['sticker_new_prod'] = true;
			} else {
				$data['sticker_new_prod'] = false;
			}
			$data['config_text_open_form_send_order'] = $this->config->get('config_text_open_form_send_order');
			$data['config_additional_settings_luxshop'] = $this->config->get('config_additional_settings_luxshop');
			$data['show_special_timer_module'] = $this->config->get('config_show_special_timer_module');
			$data['on_off_sticker_special'] = $this->config->get('on_off_sticker_special');
			$data['on_off_percent_discount'] = (!empty($this->config->get('on_off_percent_discount')) ? 1 : 0);
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
			
			$data['show_review_plus'] = $this->config->get('config_show_review_plus');
			$data['show_review_plus_requared'] = $this->config->get('config_show_review_plus_requared');
			$data['show_review_minus'] = $this->config->get('config_show_review_minus');
			$data['show_review_minus_requared'] = $this->config->get('config_show_review_minus_requared');
			$data['change_text_cart_button_out_of_stock'] = $this->config->get('config_change_text_cart_button_out_of_stock');	
			$data['show_nsproduct_btn_fastorder'] = $this->config->get('config_show_nsproduct_btn_fastorder');	
			$data['show_nsproduct_btn_wishlist'] = $this->config->get('config_show_nsproduct_btn_wishlist');	
			$data['show_nsproduct_btn_compare'] = $this->config->get('config_show_nsproduct_btn_compare');	
			$data['short_description_status'] = $this->config->get('config_short_description_status');	
			$data['short_attribut_status'] = $this->config->get('config_short_attribut_status');	
			$data['short_attribute_group_product'] = $this->config->get('config_short_attribute_group_product');	
			$data['short_attribute_group_product_item'] = $this->config->get('config_short_attribute_group_product_item');	
			$data['short_attribute_show_name'] = $this->config->get('config_short_attribute_show_name');	
			$data['fix_left_block'] = $this->config->get('config_fix_left_block');	
			$data['fix_right_block'] = $this->config->get('config_fix_right_block');
			
			$data['text_short_description'] = $this->language->get('text_short_description');
			$data['text_readmore_desc'] = $this->language->get('text_readmore_desc');
			$data['text_short_attribute'] = $this->language->get('text_short_attribute');
			$data['text_see_all_attribute'] = $this->language->get('text_see_all_attribute');
			$data['entry_plus'] = $this->language->get('entry_plus');
			$data['entry_minus'] = $this->language->get('entry_minus');
			$data['btn_add_new_review'] = $this->language->get('btn_add_new_review');
			$data['text_find_cheap'] = $this->language->get('text_find_cheap');	
			$data['required_text_option'] = $this->language->get('required_text_option');
			$data['ns_on_off_countdown_product'] = $this->config->get('config_on_off_countdown_product');
			$data['ns_on_off_product_sharing_facebock'] = $this->config->get('config_on_off_product_sharing_facebock');
			$data['ns_on_off_product_sharing_twitter'] = $this->config->get('config_on_off_product_sharing_twitter');
			$data['ns_on_off_product_sharing_googleplus'] = $this->config->get('config_on_off_product_sharing_googleplus');
			$data['ns_on_off_product_sharing_mailru'] = $this->config->get('config_on_off_product_sharing_mailru');
			$data['ns_on_off_product_sharing_vk'] = $this->config->get('config_on_off_product_sharing_vk');
			$data['ns_on_off_product_sharing_ok'] = $this->config->get('config_on_off_product_sharing_ok');
			if(($data['ns_on_off_product_sharing_facebock'] == '1') || ($data['ns_on_off_product_sharing_twitter'] =='1') || ($data['ns_on_off_product_sharing_googleplus'] =='1') || ($data['ns_on_off_product_sharing_mailru'] =='1') || ($data['ns_on_off_product_sharing_vk'] =='1') || ($data['ns_on_off_product_sharing_ok'] =='1') ) {
				$this->document->addScript('catalog/view/theme/luxshop/js/social-likes/social-likes.min.js');
				$this->document->addStyle('catalog/view/theme/luxshop/js/social-likes/social-likes_birman.css');
			}
			$data['ns_options_hidden_count'] = $this->config->get('config_options_hidden_count');
			
			$data['special_countdown_final'] = $this->language->get('special_countdown_final');
			$data['text_special_hurry_quantity'] = $this->language->get('text_special_hurry_quantity');
			$data['special_countdown_pcs'] = $this->language->get('special_countdown_pcs');
			$data['text_facebook'] = $this->language->get('text_facebook');
			$data['text_twitter'] = $this->language->get('text_twitter');
			$data['text_facebook'] = $this->language->get('text_facebook');
			$data['text_googleplus'] = $this->language->get('text_googleplus');
			$data['text_mailru'] = $this->language->get('text_mailru');
			$data['text_vk'] = $this->language->get('text_vk');
			$data['text_ok'] = $this->language->get('text_ok');
			$data['text_home_ns'] = $this->language->get('text_home_ns');
			$data['lang_id'] = $this->config->get('config_language_id');
			$data['text_sticker_special'] = $this->config->get('config_change_text_sticker_special'); 
			$data['text_sticker_newproduct'] = $this->config->get('config_change_text_sticker_newproduct'); 
			$data['text_sticker_popular'] = $this->config->get('config_change_text_sticker_popular'); 
			$data['text_sticker_topbestseller'] = $this->config->get('config_change_text_sticker_topbestseller'); 
			$top_best = $this->model_catalog_product->getTopSeller($this->request->get['product_id']);
			$data['top_bestsellers'] = $top_best['total'];
			$data['viewed'] = $product_info['viewed'];
			$data['date_available'] = $product_info['date_available'];
			if ((float)$product_info['special']) {
				$price2 = $this->tax->calculate($product_info['price'], $product_info['tax_class_id'], $this->config->get('config_tax'));
				$special2 = $this->tax->calculate($product_info['special'], $product_info['tax_class_id'], $this->config->get('config_tax'));
				$skidka = $special2/($price2/100)-100;
			} else {
				$skidka = "";
			}
			$data['skidka'] = round($skidka);
			$data['stock_quantity_count'] = $product_info['quantity'];
			if ($this->config->get('config_stock_display')) {
				$data['stock_quantity'] = $product_info['quantity'];
			} else {
				$data['stock_quantity'] = 'not_display';
			}
			if ($product_info['quantity'] <= 0) {
				$data['stock_status'] = $product_info['stock_status'];
			} else {
				$data['stock_status'] = $this->language->get('text_instock');
			}
			$data['disable_cart_button'] = $this->config->get('config_disable_cart_button'); 
			$data['disable_fastorder_button'] = $this->config->get('config_disable_fastorder_button'); 
			$data['product_quantity'] = $product_info['quantity'];
			$data['config_status_zoom_image'] = $this->config->get('config_status_zoom_image');
			if($data['config_status_zoom_image'] !='0') {
				$this->document->addScript('catalog/view/theme/luxshop/js/cloud-zoom/cloud-zoom.1.0.2.js');
				$this->document->addStyle('catalog/view/theme/luxshop/js/cloud-zoom/cloud-zoom.css');
			}
			$data['config_status_delivery_options'] = $this->config->get('config_status_delivery_options');
			$data['config_delivery_options_title'] = $this->config->get('config_delivery_options_title');
			$this->document->addScript('catalog/view/theme/luxshop/js/dragscroll.js');
			$this->document->addScript('catalog/view/theme/luxshop/js/fancybox/jquery.fancybox.min.js');
			$this->document->addStyle('catalog/view/theme/luxshop/js/fancybox/jquery.fancybox.min.css');
			$banner_delivery_option_items = $this->config->get('banner_delivery_option');
			if(isset($banner_delivery_option_items)){
				$banner_delivery_option = $this->config->get('banner_delivery_option');
			} else {
				$banner_delivery_option = array();
			}
			$data['banner_delivery_block'] = array();
			foreach ($banner_delivery_option as $result) {
				if(isset($result['popup'])){
					$result_popup = $result['popup'];
				} else {
					$result_popup = '0';
				}
				$data['banner_delivery_block'][] = array(
					'image' 		=> $this->model_tool_image->resize($result['image'], 50, 50),
					'title' 		=> $result['title'],
					'description' 	=>  html_entity_decode($result['description'][$this->config->get('config_language_id')], ENT_QUOTES, 'UTF-8'),
					'link'  		=> $result['link'],
					'popup'  		=> $result_popup,
					'sort'  		=> $result['sort']
				);	
			}
			
			if (!empty($data['banner_delivery_block'])){
				foreach ($data['banner_delivery_block'] as $key => $value) {
					$sort[$key] = $value['sort'];
				} 
				array_multisort($sort, SORT_ASC, $data['banner_delivery_block']);
			}
			$data['show_stock_status'] = $this->config->get('config_show_stock_status');
				$config_disable_cart_button_text = $this->config->get('config_disable_cart_button_text');
				if(!empty($config_disable_cart_button_text[$this->config->get('config_language_id')]['disable_cart_button_text'])){
					$data['disable_cart_button_text'] = $config_disable_cart_button_text[$this->config->get('config_language_id')]['disable_cart_button_text'];
				} else {
					$data['disable_cart_button_text'] = $this->language->get('disable_cart_button_text');
				}
				$data['ns_on_off_featured_model_product'] = $this->config->get('config_on_off_featured_model_product'); 	
				$data['ns_on_off_featured_description'] = $this->config->get('config_on_off_featured_description'); 	
				
								
				$data['ns_on_off_featured_fastorder'] = $this->config->get('config_on_off_featured_fastorder');	
				$data['ns_on_off_featured_rating'] = $this->config->get('config_on_off_featured_rating');	
				$data['ns_on_off_featured_quantity_reviews'] = $this->config->get('config_on_off_featured_quantity_reviews');
				$data['ns_on_off_featured_wishlist'] = $this->config->get('config_on_off_featured_wishlist');	
				$data['ns_on_off_featured_compare'] = $this->config->get('config_on_off_featured_compare');	
				$data['config_on_off_featured_quickview'] = $this->config->get('config_on_off_featured_quickview');
				$additional_image_hover_on_off = $this->config->get('config_on_off_featured_slider_additional_image');
				$data['text_reviews_title'] = $this->language->get('text_reviews_title');
			

			if ($product_info['image']) {
				$data['popup'] = $this->model_tool_image->resize($product_info['image'], $this->config->get('theme_' . $this->config->get('config_theme') . '_image_popup_width'), $this->config->get('theme_' . $this->config->get('config_theme') . '_image_popup_height'));
			} else {
				$data['popup'] = '';
			}

			if ($product_info['image']) {
				$data['thumb'] = $this->model_tool_image->resize($product_info['image'], $this->config->get('theme_' . $this->config->get('config_theme') . '_image_thumb_width'), $this->config->get('theme_' . $this->config->get('config_theme') . '_image_thumb_height'));
			} else {
				$data['thumb'] = '';
			}

			$data['images'] = array();

			$results = $this->model_catalog_product->getProductImages($this->request->get['product_id']);

			foreach ($results as $result) {
				$data['images'][] = array(

			'thumb_hover' => $this->model_tool_image->resize($result['image'], $this->config->get('theme_' . $this->config->get('config_theme') . '_image_thumb_width'), $this->config->get('theme_' . $this->config->get('config_theme') . '_image_thumb_height')),
			
					'popup' => $this->model_tool_image->resize($result['image'], $this->config->get('theme_' . $this->config->get('config_theme') . '_image_popup_width'), $this->config->get('theme_' . $this->config->get('config_theme') . '_image_popup_height')),
					'thumb' => $this->model_tool_image->resize($result['image'], $this->config->get('theme_' . $this->config->get('config_theme') . '_image_additional_width'), $this->config->get('theme_' . $this->config->get('config_theme') . '_image_additional_height'))
				);
			}

			if ($this->customer->isLogged() || !$this->config->get('config_customer_price')) {
				$data['price'] = $this->currency->format($this->tax->calculate($product_info['price'], $product_info['tax_class_id'], $this->config->get('config_tax')), $this->session->data['currency']);
			} else {
				$data['price'] = false;
			}

			if (!is_null($product_info['special']) && (float)$product_info['special'] >= 0) {
				$data['special'] = $this->currency->format($this->tax->calculate($product_info['special'], $product_info['tax_class_id'], $this->config->get('config_tax')), $this->session->data['currency']);
				$tax_price = (float)$product_info['special'];
			} else {
				$data['special'] = false;
				$tax_price = (float)$product_info['price'];
			}

			if ($this->config->get('config_tax')) {
				$data['tax'] = $this->currency->format($tax_price, $this->session->data['currency']);
			} else {
				$data['tax'] = false;
			}

			$discounts = $this->model_catalog_product->getProductDiscounts($this->request->get['product_id']);

			$data['discounts'] = array();

		$data['ls_microdata_status'] = (!empty($this->config->get('ls_microdata_status')) ? $this->config->get('ls_microdata_status') : 0);

		if(isset($data['ls_microdata_status']) && ($data['ls_microdata_status'] == 1)) {
		
			
			$data['microdata_currency'] = $this->session->data['currency'];
			$data['availability'] = $product_info['quantity'] ? true : false;
			$data['ratingValue'] = $product_info['rating'];
			
			$data['url_product'] = $this->url->link('product/product', $url . '&product_id=' . $this->request->get['product_id']);
			$data['productID'] = $this->request->get['product_id'];
			$data['schema_price'] = rtrim(preg_replace("/[^0-9\.]/", "", ($data['special'] ? $data['special'] : $data['price'])), '.');
			if(!empty($data['special_date_end']) && ($data['special_date_end'] !='0000-00-00')){
				$data['priceValidUntil'] = $data['special_date_end'];
			} else {
				$data['priceValidUntil'] = date('Y-m-d', strtotime('+1 month'));
			}
			$data['microdata_description'] = strip_tags(preg_replace("/('|\"|\r?\n)/",'',nl2br(html_entity_decode($product_info['description'], ENT_QUOTES, 'UTF-8'))));
			$data['microdata_category_name'] = false;
			if (isset($this->request->get['path']) && (!empty($category_info))) {
				$data['microdata_category_name'] = $category_info['name'];
			}
			$reviewsMicrodata = $this->model_catalog_review->getReviewsByProductId($product_id, $start = 0, $limit = 30);
			$data['reviewsMicrodata'] = array();
			foreach($reviewsMicrodata as $result_review){
				$data['reviewsMicrodata'][] = array(
					'author' => $result_review['author'],
					'rating' => $result_review['rating'],
					'text' 	 => strip_tags(preg_replace("/('|\"|\r?\n)/",'',nl2br(html_entity_decode($result_review['text'], ENT_QUOTES, 'UTF-8')))),
					'date_added' => date('Y-m-d', strtotime($result_review['date_added'])),
				);
			}
		}	
		

			foreach ($discounts as $discount) {
				$data['discounts'][] = array(
					'quantity' => $discount['quantity'],
					'price'    => $this->currency->format($this->tax->calculate($discount['price'], $product_info['tax_class_id'], $this->config->get('config_tax')), $this->session->data['currency'])
				);
			}


          if ($data['price']) {
              $data['price'] = '<span class=\'autocalc-product-price\'>' . $data['price'] . '</span>';
          }
          if ($data['special']) {
              $data['special'] = '<span class=\'autocalc-product-special\'>' . $data['special'] . '</span>';
          }
          if ($data['points']) {
              $data['points'] = '<span class=\'autocalc-product-points\'>' . $data['points'] . '</span>';
          }
          
          $data['price_value'] = $product_info['price'];
          $data['special_value'] = $product_info['special'];
          $data['tax_value'] = (float)$product_info['special'] ? $product_info['special'] : $product_info['price'];
          $data['points_value'] = $product_info['points'];
          
          $var_currency_autocalc = array();
          $currency_code_autocalc = $this->session->data['currency'];
          $var_currency_autocalc['value'] = $this->currency->getValue($currency_code_autocalc);
          $var_currency_autocalc['symbol_left'] = $this->currency->getSymbolLeft($currency_code_autocalc);
          $var_currency_autocalc['symbol_right'] = $this->currency->getSymbolRight($currency_code_autocalc);
          $var_currency_autocalc['decimals'] = $this->currency->getDecimalPlace($currency_code_autocalc);
          $var_currency_autocalc['decimal_point'] = $this->language->get('decimal_point');
          $var_currency_autocalc['thousand_point'] = $this->language->get('thousand_point');
          $data['currency_autocalc'] = $var_currency_autocalc;
          
          $data['dicounts_unf_autocalc'] = $discounts;

          $data['tax_class_id'] = $product_info['tax_class_id'];
          $data['tax_rates'] = $this->tax->getRates(0, $product_info['tax_class_id']);

      
			$data['options'] = array();

			foreach ($this->model_catalog_product->getProductOptions($this->request->get['product_id']) as $option) {
				$product_option_value_data = array();

				foreach ($option['product_option_value'] as $option_value) {
					if (!$option_value['subtract'] || ($option_value['quantity'] > 0)) {
						if ((($this->config->get('config_customer_price') && $this->customer->isLogged()) || !$this->config->get('config_customer_price')) && (float)$option_value['price']) {
							$price = $this->currency->format($this->tax->calculate($option_value['price'], $product_info['tax_class_id'], $this->config->get('config_tax') ? 'P' : false), $this->session->data['currency']);
						} else {
							$price = false;
						}

						$product_option_value_data[] = array(

          'price_value'                   => $option_value['price'],
          'points_value'                  => intval($option_value['points_prefix'].$option_value['points']),
      

          'price_value'                   => $option_value['price'],
          'points_value'                  => intval($option_value['points_prefix'].$option_value['points']),
        

			'color'    => $option_value['color'],
			'image_click' => $this->model_tool_image->resize($option_value['image'], $this->config->get('theme_' . $this->config->get('config_theme') . '_image_thumb_width'), $this->config->get('theme_' . $this->config->get('config_theme') . '_image_thumb_height')),
			'image_zoom' => $this->model_tool_image->resize($option_value['image'], $this->config->get('theme_' . $this->config->get('config_theme') . '_image_popup_width'), $this->config->get('theme_' . $this->config->get('config_theme') . '_image_popup_height')),
			'image_thumb' => $this->model_tool_image->resize($option_value['image'], $this->config->get('theme_' . $this->config->get('config_theme') . '_image_additional_width'), $this->config->get('theme_' . $this->config->get('config_theme') . '_image_additional_height')),
			
							'product_option_value_id' => $option_value['product_option_value_id'],
							'option_value_id'         => $option_value['option_value_id'],
							'name'                    => $option_value['name'],
							'image'                   => $this->model_tool_image->resize($option_value['image'], 50, 50),
							'price'                   => $price,
							'price_prefix'            => $option_value['price_prefix']
						);
					}
				}

				$data['options'][] = array(

			'status_color_type'    => $option['status_color_type'],
			
					'product_option_id'    => $option['product_option_id'],
					'product_option_value' => $product_option_value_data,
					'option_id'            => $option['option_id'],
					'name'                 => $option['name'],
					'type'                 => $option['type'],
					'value'                => $option['value'],
					'required'             => $option['required']
				);
			}

			if ($product_info['minimum']) {
				$data['minimum'] = $product_info['minimum'];
			} else {
				$data['minimum'] = 1;
			}

			$data['review_status'] = $this->config->get('config_review_status');

			if ($this->config->get('config_review_guest') || $this->customer->isLogged()) {
				$data['review_guest'] = true;
			} else {
				$data['review_guest'] = false;
			}

			if ($this->customer->isLogged()) {
				$data['customer_name'] = $this->customer->getFirstName() . '&nbsp;' . $this->customer->getLastName();
			} else {
				$data['customer_name'] = '';
			}

			$data['reviews'] = sprintf($this->language->get('text_reviews'), (int)$product_info['reviews']);
			$data['rating'] = (int)$product_info['rating'];

			// Captcha
			if ($this->config->get('captcha_' . $this->config->get('config_captcha') . '_status') && in_array('review', (array)$this->config->get('config_captcha_page'))) {
				$data['captcha'] = $this->load->controller('extension/captcha/' . $this->config->get('config_captcha'));
			} else {
				$data['captcha'] = '';
			}

			$data['share'] = $this->url->link('product/product', 'product_id=' . (int)$this->request->get['product_id']);


			$data['load_datetimepicker'] = false;
			foreach ($data['options'] as $option) {
				if ($option['type'] == 'date' || $option['type'] == 'datetime' || $option['type'] == 'time') {
					$data['load_datetimepicker'] = true;
					break;
				}
			}
			if($data['load_datetimepicker']){
				$data['lang_datetimepicker'] = $this->session->data['language'];
			}
			if($data['load_datetimepicker']){
				$this->document->addScript('catalog/view/javascript/jquery/datetimepicker/moment/moment.min.js');
				$this->document->addScript('catalog/view/javascript/jquery/datetimepicker/moment/moment-with-locales.min.js');
				$this->document->addScript('catalog/view/javascript/jquery/datetimepicker/bootstrap-datetimepicker.min.js');
				$this->document->addStyle('catalog/view/javascript/jquery/datetimepicker/bootstrap-datetimepicker.min.css');
			}
			
			$data['attribute_groups'] = $this->model_catalog_product->getProductAttributes($this->request->get['product_id']);

			$data['products'] = array();

			$results = $this->model_catalog_product->getProductRelated($this->request->get['product_id']);

			foreach ($results as $result) {
				if ($result['image']) {
					$image = $this->model_tool_image->resize($result['image'], $this->config->get('theme_' . $this->config->get('config_theme') . '_image_related_width'), $this->config->get('theme_' . $this->config->get('config_theme') . '_image_related_height'));
				} else {
					$image = $this->model_tool_image->resize('placeholder.png', $this->config->get('theme_' . $this->config->get('config_theme') . '_image_related_width'), $this->config->get('theme_' . $this->config->get('config_theme') . '_image_related_height'));
				}

				if ($this->customer->isLogged() || !$this->config->get('config_customer_price')) {
					$price = $this->currency->format($this->tax->calculate($result['price'], $result['tax_class_id'], $this->config->get('config_tax')), $this->session->data['currency']);
				} else {
					$price = false;
				}

				if (!is_null($result['special']) && (float)$result['special'] >= 0) {
					$special = $this->currency->format($this->tax->calculate($result['special'], $result['tax_class_id'], $this->config->get('config_tax')), $this->session->data['currency']);
					$tax_price = (float)$result['special'];
				} else {
					$special = false;
					$tax_price = (float)$result['price'];
				}
	
				if ($this->config->get('config_tax')) {
					$tax = $this->currency->format($tax_price, $this->session->data['currency']);
				} else {
					$tax = false;
				}

				if ($this->config->get('config_review_status')) {
					$rating = (int)$result['rating'];
				} else {
					$rating = false;
				}


			$data['config_quickview_btn_name'] = $this->config->get('config_quickview_btn_name');
			$data['nst_data'] = $this->config->get('nst_data');
			$data['setting_module'] = $this->config->get('setting_module');
			$data['text_instock'] = $this->language->get('text_instock');
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
			$top_bestsellers = $this->model_catalog_product->getTopSeller($result['product_id']);
			$additional_image_hover = false;
			if(isset($data['setting_module']['status_additional_image_hover']) && ($data['setting_module']['status_additional_image_hover'] == 1)){
				$results_img = $this->model_catalog_product->getProductImages($result['product_id']);
				foreach ($results_img as $key => $result_img) {
					if ($key < 1) {
						$additional_image_hover = $this->model_tool_image->resize($result_img['image'], $this->config->get('theme_' . $this->config->get('config_theme') . '_image_related_width'), $this->config->get('theme_' . $this->config->get('config_theme') . '_image_related_height'));
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
			$product_quantity = $result['quantity'];
			$stock_status = $result['stock_status'];
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
			
				$data['products'][] = array(

			'microdata_description' 	 => strip_tags(preg_replace('/[ \t]+/', ' ', preg_replace("/('|\"|\r?\n)/",'',nl2br(html_entity_decode($result['description'], ENT_QUOTES, 'UTF-8'))))),
			'microdata_price' 	 => ($result['special'] ? (float)rtrim($result['special'], ".") : (float)rtrim($result['price'], ".")),
		
					'product_id'  => $result['product_id'],
					'thumb'       => $image,
					'name'        => $result['name'],

			'width'  => $this->config->get('theme_' . $this->config->get('config_theme') . '_image_related_width'),
			'height'  => $this->config->get('theme_' . $this->config->get('config_theme') . '_image_related_height'),
			'minimum'     		=> ($result['minimum'] > 0) ? $result['minimum'] : 1,
			'price_no_format' 	=> $price_no_format,
			'special_no_format' => $special_no_format,	
			'date_end'	 				=> $special_date_end,
			'additional_image_hover' 	=> $additional_image_hover,
			'product_quantity' 			=> $product_quantity,
			'stock_status' 				=> $stock_status,
			'reviews'    				=> sprintf((int)$result['reviews']),
			'skidka'     				=> round($skidka),
			'model'     				=> $result['model'],
			'date_available'			=> $result['date_available'],
			'viewed'	 				=> $result['viewed'], 
			'top_bestsellers'	 		=> $top_bestsellers['total'],
			
					'description' => utf8_substr(trim(strip_tags(html_entity_decode($result['description'], ENT_QUOTES, 'UTF-8'))), 0, $this->config->get('theme_' . $this->config->get('config_theme') . '_product_description_length')) . '..',
					'price'       => $price,
					'special'     => $special,
					'tax'         => $tax,
					'minimum'     => $result['minimum'] > 0 ? $result['minimum'] : 1,
					'rating'      => $rating,
					'href'        => $this->url->link('product/product', 'product_id=' . $result['product_id'])
				);
			}

			$data['tags'] = array();

			if ($product_info['tag']) {
				$tags = explode(',', $product_info['tag']);

				foreach ($tags as $tag) {
					$data['tags'][] = array(
						'tag'  => trim($tag),
						'href' => $this->url->link('product/search', 'tag=' . trim($tag))
					);
				}
			}

			$data['recurrings'] = $this->model_catalog_product->getProfiles($this->request->get['product_id']);

			$this->model_catalog_product->updateViewed($this->request->get['product_id']);

			$data['thumb_width'] = $this->config->get('theme_' . $this->config->get('config_theme') . '_image_thumb_width');
			$data['thumb_height'] = $this->config->get('theme_' . $this->config->get('config_theme') . '_image_thumb_height');

			$data['ia_width'] = $this->config->get('theme_' . $this->config->get('config_theme') . '_image_additional_width');
			$data['ia_height'] = $this->config->get('theme_' . $this->config->get('config_theme') . '_image_additional_height');
			
			if ($product_info['image']) {
				$data['thumb_min'] = $this->model_tool_image->resize($product_info['image'], $this->config->get('theme_' . $this->config->get('config_theme') . '_image_additional_width'), $this->config->get('theme_' . $this->config->get('config_theme') . '_image_additional_height'));
			} else {
				$data['thumb_min'] = '';
			}
			if(isset($this->request->post['quickview29'])) {		
				$this->load->language('extension/module/luxshop_quickviewpro');
				$data['button_review'] = $this->language->get('button_review');
				$data['tab_general_quickview'] = $this->language->get('tab_general_quickview');
				$data['quantity_prod'] = $product_info['quantity'];
				$data['on_off_quickview_additional_image'] = $this->config->get('config_quickview_additional_image');
				$data['on_off_quickview_addtocart'] = $this->config->get('config_quickview_addtocart');
				$data['on_off_quickview_wishlist'] = $this->config->get('config_quickview_wishlist');
				$data['on_off_quickview_compare'] = $this->config->get('config_quickview_compare');
				$data['on_off_quickview_tab_description'] = $this->config->get('config_quickview_tab_description');
				$data['on_off_quickview_tab_specification'] = $this->config->get('config_quickview_tab_specification');
				$data['on_off_quickview_tab_review_quickview'] = $this->config->get('config_quickview_tab_review_quickview');
				$data['on_off_quickview_options_count'] = $this->config->get('config_quickview_options_count');
				$data['on_off_quickview_manufacturer'] = $this->config->get('config_quickview_manufacturer');
				$data['on_off_quickview_model'] = $this->config->get('config_quickview_model');
				$data['on_off_quickview_quantity'] = $this->config->get('config_quickview_quantity');
				
				return $this->response->setOutput($this->load->view('extension/module/luxshop_quickviewpro', $data));
			}
			
			

				$data['editorplus'] = '';
				if(isset($this->session->data['user_token'])){
				$this->luxshop_minifier->addScript('catalog/view/theme/luxshop/js/popup.js', 'footer');
				$data['editorplus'] = $this->load->controller('extension/module/luxshop_editorplus');
				}
			
			$data['column_left'] = $this->load->controller('common/column_left');
			$data['column_right'] = $this->load->controller('common/column_right');
			$data['content_top'] = $this->load->controller('common/content_top');
			$data['content_bottom'] = $this->load->controller('common/content_bottom');
			$data['footer'] = $this->load->controller('common/footer');
			$data['header'] = $this->load->controller('common/header');


			$data['config_additional_settings_luxshop'] = $this->config->get('config_additional_settings_luxshop');
			
			$data['ns_show_nextprev_prod'] = (!empty($this->config->get('ns_show_nextprev_prod')) ? 1 : 0);
			if(!isset($this->request->post['quickview29'])) {
				if(isset($data['ns_show_nextprev_prod']) && ($data['ns_show_nextprev_prod'] == 1)){
					$data['nextprevproduct'] = $this->load->controller('product/luxshop_nextprev');	
				}
			} else {
				$data['nextprevproduct'] = '';
			}
			
			$this->response->setOutput($this->load->view('product/product', $data));
		} else {
			$url = '';

			if (isset($this->request->get['path'])) {
				$url .= '&path=' . $this->request->get['path'];
			}

			if (isset($this->request->get['filter'])) {
				$url .= '&filter=' . $this->request->get['filter'];
			}

			if (isset($this->request->get['manufacturer_id'])) {
				$url .= '&manufacturer_id=' . $this->request->get['manufacturer_id'];
			}

			if (isset($this->request->get['search'])) {
				$url .= '&search=' . $this->request->get['search'];
			}

			if (isset($this->request->get['tag'])) {
				$url .= '&tag=' . $this->request->get['tag'];
			}

			if (isset($this->request->get['description'])) {
				$url .= '&description=' . $this->request->get['description'];
			}

			if (isset($this->request->get['category_id'])) {
				$url .= '&category_id=' . $this->request->get['category_id'];
			}

			if (isset($this->request->get['sub_category'])) {
				$url .= '&sub_category=' . $this->request->get['sub_category'];
			}

			if (isset($this->request->get['sort'])) {
				$url .= '&sort=' . $this->request->get['sort'];
			}

			if (isset($this->request->get['order'])) {
				$url .= '&order=' . $this->request->get['order'];
			}

			if (isset($this->request->get['page'])) {
				$url .= '&page=' . $this->request->get['page'];
			}

			if (isset($this->request->get['limit'])) {
				$url .= '&limit=' . $this->request->get['limit'];
			}

			$data['breadcrumbs'][] = array(
				'text' => $this->language->get('text_error'),
				'href' => $this->url->link('product/product', $url . '&product_id=' . $product_id)
			);

			$this->document->setTitle($this->language->get('text_error'));

			$data['continue'] = $this->url->link('common/home');

			$this->response->addHeader($this->request->server['SERVER_PROTOCOL'] . ' 404 Not Found');


				$data['editorplus'] = '';
				if(isset($this->session->data['user_token'])){
				$this->luxshop_minifier->addScript('catalog/view/theme/luxshop/js/popup.js', 'footer');
				$data['editorplus'] = $this->load->controller('extension/module/luxshop_editorplus');
				}
			
			$data['column_left'] = $this->load->controller('common/column_left');
			$data['column_right'] = $this->load->controller('common/column_right');
			$data['content_top'] = $this->load->controller('common/content_top');
			$data['content_bottom'] = $this->load->controller('common/content_bottom');
			$data['footer'] = $this->load->controller('common/footer');
			$data['header'] = $this->load->controller('common/header');

			$this->response->setOutput($this->load->view('error/not_found', $data));
		}
	}

	public function review() {

			$this->load->language('luxshop/theme');
			
			$data['text_admin_reply'] = $this->language->get('text_admin_reply');
			$data['text_plus'] = $this->language->get('text_plus');
			$data['text_purchased'] = $this->language->get('text_purchased');
			$data['text_minus'] = $this->language->get('text_minus');
			$data['text_comment'] = $this->language->get('text_comment');
			
			$data['show_review_plus'] = $this->config->get('config_show_review_plus');
			$data['show_review_plus_requared'] = $this->config->get('config_show_review_plus_requared');
			$data['show_review_minus'] = $this->config->get('config_show_review_minus');
			$data['show_review_minus_requared'] = $this->config->get('config_show_review_minus_requared');
			
		$this->load->language('product/product');
$this->load->language('luxshop/theme');

		$this->load->model('catalog/review');

		if (isset($this->request->get['page'])) {
			$page = (int)$this->request->get['page'];
		} else {
			$page = 1;
		}

		$data['reviews'] = array();

		$review_total = $this->model_catalog_review->getTotalReviewsByProductId($this->request->get['product_id']);

		$results = $this->model_catalog_review->getReviewsByProductId($this->request->get['product_id'], ($page - 1) * 5, 5);

		foreach ($results as $result) {
			$data['reviews'][] = array(
				'author'     => $result['author'],
				'text'       => nl2br($result['text']),

			'purchased'     => nl2br($result['purchased']),
			'plus'      	=> nl2br($result['plus']),
			'minus'       	=> nl2br($result['minus']),
			'admin_reply'	=> nl2br($result['admin_reply']),
				'rating'     => (int)$result['rating'],
				'date_added' => date($this->language->get('date_format_short'), strtotime($result['date_added']))
			);
		}

		$pagination = new Pagination();
		$pagination->total = $review_total;
		$pagination->page = $page;
		$pagination->limit = 5;
		$pagination->url = $this->url->link('product/product/review', 'product_id=' . $this->request->get['product_id'] . '&page={page}');

		$data['pagination'] = $pagination->render();

		$data['results'] = sprintf($this->language->get('text_pagination'), ($review_total) ? (($page - 1) * 5) + 1 : 0, ((($page - 1) * 5) > ($review_total - 5)) ? $review_total : ((($page - 1) * 5) + 5), $review_total, ceil($review_total / 5));

		$this->response->setOutput($this->load->view('product/review', $data));
	}

	public function write() {
		$this->load->language('product/product');
$this->load->language('luxshop/theme');

		$json = array();

		if ($this->request->server['REQUEST_METHOD'] == 'POST') {
			if ((utf8_strlen($this->request->post['name']) < 3) || (utf8_strlen($this->request->post['name']) > 25)) {
				$json['error'] = $this->language->get('error_name');
			}


			$this->load->language('luxshop/theme');		
			$show_review_plus = $this->config->get('config_show_review_plus');
			$show_review_plus_requared = $this->config->get('config_show_review_plus_requared');
			$show_review_minus = $this->config->get('config_show_review_minus');
			$show_review_minus_requared = $this->config->get('config_show_review_minus_requared');
			
			if(($show_review_plus =='1') && ($show_review_plus_requared =='1')){
				if ((utf8_strlen($this->request->post['plus']) < 3) || (utf8_strlen($this->request->post['plus']) > 1000)) {
					$json['error'] = $this->language->get('error_plus');
				}
			}
			if(($show_review_minus =='1') && ($show_review_minus_requared =='1')){
				if ((utf8_strlen($this->request->post['minus']) < 3) || (utf8_strlen($this->request->post['minus']) > 1000)) {
					$json['error'] = $this->language->get('error_minus');
				}
			}
			
			
			if ((utf8_strlen($this->request->post['text']) < 25) || (utf8_strlen($this->request->post['text']) > 1000)) {
				$json['error'] = $this->language->get('error_text');
			}

			if (empty($this->request->post['rating']) || $this->request->post['rating'] < 0 || $this->request->post['rating'] > 5) {
				$json['error'] = $this->language->get('error_rating');
			}

			// Captcha
			if ($this->config->get('captcha_' . $this->config->get('config_captcha') . '_status') && in_array('review', (array)$this->config->get('config_captcha_page'))) {
				$captcha = $this->load->controller('extension/captcha/' . $this->config->get('config_captcha') . '/validate');

				if ($captcha) {
					$json['error'] = $captcha;
				}
			}

			if (!isset($json['error'])) {
				$this->load->model('catalog/review');

				$this->model_catalog_review->addReview($this->request->get['product_id'], $this->request->post);

				$json['success'] = $this->language->get('text_success');
			}
		}

		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));
	}

	public function getRecurringDescription() {
		$this->load->language('product/product');
$this->load->language('luxshop/theme');
		$this->load->model('catalog/product');

		if (isset($this->request->post['product_id'])) {
			$product_id = $this->request->post['product_id'];
		} else {
			$product_id = 0;
		}

		if (isset($this->request->post['recurring_id'])) {
			$recurring_id = $this->request->post['recurring_id'];
		} else {
			$recurring_id = 0;
		}

		if (isset($this->request->post['quantity'])) {
			$quantity = $this->request->post['quantity'];
		} else {
			$quantity = 1;
		}

		$product_info = $this->model_catalog_product->getProduct($product_id);
		
		$recurring_info = $this->model_catalog_product->getProfile($product_id, $recurring_id);

		$json = array();

		if ($product_info && $recurring_info) {
			if (!$json) {
				$frequencies = array(
					'day'        => $this->language->get('text_day'),
					'week'       => $this->language->get('text_week'),
					'semi_month' => $this->language->get('text_semi_month'),
					'month'      => $this->language->get('text_month'),
					'year'       => $this->language->get('text_year'),
				);

				if ($recurring_info['trial_status'] == 1) {
					$price = $this->currency->format($this->tax->calculate($recurring_info['trial_price'] * $quantity, $product_info['tax_class_id'], $this->config->get('config_tax')), $this->session->data['currency']);
					$trial_text = sprintf($this->language->get('text_trial_description'), $price, $recurring_info['trial_cycle'], $frequencies[$recurring_info['trial_frequency']], $recurring_info['trial_duration']) . ' ';
				} else {
					$trial_text = '';
				}

				$price = $this->currency->format($this->tax->calculate($recurring_info['price'] * $quantity, $product_info['tax_class_id'], $this->config->get('config_tax')), $this->session->data['currency']);

				if ($recurring_info['duration']) {
					$text = $trial_text . sprintf($this->language->get('text_payment_description'), $price, $recurring_info['cycle'], $frequencies[$recurring_info['frequency']], $recurring_info['duration']);
				} else {
					$text = $trial_text . sprintf($this->language->get('text_payment_cancel'), $price, $recurring_info['cycle'], $frequencies[$recurring_info['frequency']], $recurring_info['duration']);
				}

				$json['success'] = $text;
			}
		}

		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));
	}
}
