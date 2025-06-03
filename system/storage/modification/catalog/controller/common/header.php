<?php
// *	@source		See SOURCE.txt for source and other copyright.
// *	@license	GNU General Public License version 3; see LICENSE.txt

class ControllerCommonHeader extends Controller {
	public function index() {
		// Analytics
		$this->load->model('setting/extension');

		$data['analytics'] = array();

		$analytics = $this->model_setting_extension->getExtensions('analytics');

		foreach ($analytics as $analytic) {
			if ($this->config->get('analytics_' . $analytic['code'] . '_status')) {
				$data['analytics'][] = $this->load->controller('extension/analytics/' . $analytic['code'], $this->config->get('analytics_' . $analytic['code'] . '_status'));
			}
		}

		if ($this->request->server['HTTPS']) {
			$server = $this->config->get('config_ssl');
		} else {
			$server = $this->config->get('config_url');
		}

		if (is_file(DIR_IMAGE . $this->config->get('config_icon'))) {
			$this->document->addLink($server . 'image/' . $this->config->get('config_icon'), 'icon');
		}

		$data['title'] = $this->document->getTitle();

		$data['base'] = $server;
		$data['description'] = $this->document->getDescription();
		$data['keywords'] = $this->document->getKeywords();
		$data['links'] = $this->document->getLinks();
		$data['robots'] = $this->document->getRobots();
		$data['styles'] = $this->document->getStyles();
		$data['scripts'] = $this->document->getScripts('header');
		$data['lang'] = $this->language->get('code');
		$data['direction'] = $this->language->get('direction');

		$data['name'] = $this->config->get('config_name');

		if (is_file(DIR_IMAGE . $this->config->get('config_logo'))) {
			$data['logo'] = $server . 'image/' . $this->config->get('config_logo');
		} else {
			$data['logo'] = '';
		}


		$this->load->model('tool/image');
		$data['deviceType'] = deviceType;
		$data['special_timer_position'] = $this->config->get('config_special_timer_position');
		$data['ls_hbannerpc_width'] = (!empty($this->config->get('ls_hbannerpc_width')) ? $this->config->get('ls_hbannerpc_width') : false);
		$data['ls_hbannerpc_height'] = (!empty($this->config->get('ls_hbannerpc_height')) ? $this->config->get('ls_hbannerpc_height') : false);
		$data['ls_hbannermob_width'] = (!empty($this->config->get('ls_hbannermob_width')) ? $this->config->get('ls_hbannermob_width') : false);
		$data['ls_hbannermob_height'] = (!empty($this->config->get('ls_hbannermob_height')) ? $this->config->get('ls_hbannermob_height') : false);
		$data['status_search_word'] = (!empty($this->config->get('search_word')[$this->config->get('config_language_id')]['text']) ? true : false);
		$data['design_icon_menu'] = (!empty($this->config->get('design_icon_menu')) ? $this->config->get('design_icon_menu') : 1);
		$data['fm_show_btn_go_home'] = (!empty($this->config->get('fm_show_btn_go_home')) ? $this->config->get('fm_show_btn_go_home') : 0);
		$data['fm_show_logo_hide_search'] = (!empty($this->config->get('fm_show_logo_hide_search')) ? $this->config->get('fm_show_logo_hide_search') : 0);
		$data['fm_fix_bottom'] = (!empty($this->config->get('fm_fix_bottom')) ? $this->config->get('fm_fix_bottom') : 0);
		$data['fm_type_design'] = (!empty($this->config->get('fm_type_design')) ? $this->config->get('fm_type_design') : 1);
		$data['show_text_after_icon'] = (!empty($this->config->get('show_text_after_icon')) ? $this->config->get('show_text_after_icon') : 0);
		$data['fb_widget'] = $this->config->get('fb_widget');
		$data['fb_widget_pos'] = false;
		if(isset($data['fb_widget']['status']) && $data['fb_widget']['status'] == 1 && $data['fb_widget']['position']) {
			$data['fb_widget_pos'] = 'right';
		}
		
		$data['fm_logo_width'] = (!empty($this->config->get('fm_logo_width')) ? $this->config->get('fm_logo_width') : '');
		$data['fm_logo_height'] = (!empty($this->config->get('fm_logo_height')) ? $this->config->get('fm_logo_height') : '');
		
		$data['fm_logo'] = false;
		if(!empty($this->config->get('fm_show_logo_hide_search')) && ($this->config->get('fm_show_logo_hide_search') == 1)){
			if(!empty($this->config->get('fm_logo_width')) && (!empty($this->config->get('fm_logo_height')))){
				$data['fm_logo'] = $this->model_tool_image->resize($this->config->get('fm_logo'), $this->config->get('fm_logo_width'), $this->config->get('fm_logo_height'));
			}
		}
		
		$data['logo_iwh_status'] = false;
		$data['logo_w'] = (!empty($this->config->get('theme_' . $this->config->get('config_theme') . '_image_logo_width')) ? $this->config->get('theme_' . $this->config->get('config_theme') . '_image_logo_width') : '');
		$data['logo_h'] = (!empty($this->config->get('theme_' . $this->config->get('config_theme') . '_image_logo_height')) ? $this->config->get('theme_' . $this->config->get('config_theme') . '_image_logo_height') : '');
		if(!empty($data['logo_w']) && (!empty($data['logo_h']))){
			$data['logo_iwh_status'] = true;
			$data['logo'] = $this->model_tool_image->resize($this->config->get('config_logo'), $data['logo_w'], $data['logo_h']);
		}
		$data['hide_logo_phone_mob'] = (!empty($this->config->get('hide_logo_phone_mob')) ? $this->config->get('hide_logo_phone_mob') : 0);
		$fix_top_tabs_mobile = (!empty($this->config->get('fix_top_tabs_mobile')) ? $this->config->get('fix_top_tabs_mobile') : 0);
		
		$data['class_pp_tabs_fix'] = false;
		if(isset($fix_top_tabs_mobile, $this->request->get['route'], $this->request->get['product_id']) && ($fix_top_tabs_mobile == 1)){
			$data['class_pp_tabs_fix'] = true;
		}
		$data['fixed_bar_footer'] = (!empty($this->config->get('fixed_bar_footer')) ? $this->config->get('fixed_bar_footer') : 0);
		$data['quantity_viewed'] = 0;
		if (isset($this->request->cookie['productviewed']) && ($data['fixed_bar_footer'] == 1)) {
			$data['quantity_viewed'] = count(explode(',', $this->request->cookie['productviewed']));
		}
		
		$data['hide_text_addtocart'] = (!empty($this->config->get('hide_text_addtocart')) ? $this->config->get('hide_text_addtocart') : 0);
		$data['config_additional_settings_luxshop'] = $this->config->get('config_additional_settings_luxshop');
		$data['lang_id'] = $this->config->get('config_language_id');
		$data['type_header'] = (!empty($this->config->get('type_header')) ? $this->config->get('type_header') : 1);
		$data['swap_search_dmenu'] = (!empty($this->config->get('swap_search_dmenu')) ? $this->config->get('swap_search_dmenu') : 0);
		$data['catalog_before_logo'] = (!empty($this->config->get('catalog_before_logo')) ? $this->config->get('catalog_before_logo') : 0);
		if($data['type_header'] == 2){
			$data['ls_dop_menu'] = $this->load->controller('common/luxshop_dopmenu');
		}
		
		$data['header_doptext_status'] = (!empty($this->config->get('header_doptext_status')) ? $this->config->get('header_doptext_status') : false);
		
		if($data['header_doptext_status']){
			$data['header_doptext'] = html_entity_decode($this->config->get('header_doptext')[$data['lang_id']]['text'], ENT_QUOTES, 'UTF-8');
		}
		
		
		$data['bg_product_image'] = $this->config->get('bg_product_image');
		$data['ls_type_btn'] = $this->config->get('ls_type_btn');
		$data['ns_type_sticker'] = $this->config->get('ns_type_sticker');
		$data['site_screen_width'] = $this->config->get('site_screen_width');
		$data['first_name'] = ($this->customer->isLogged()) ? $this->customer->getFirstName() : '';
		$data['last_name'] = ($this->customer->isLogged()) ? $this->customer->getLastName() : '';
		$data['nst_data'] = $this->config->get('nst_data');
		$data['show_h_compare'] = $this->config->get('show_h_compare');
		$data['show_h_wishlist'] = $this->config->get('show_h_wishlist');
		
		$data['config_change_color_icon_sticker_popular'] = $this->config->get('config_change_color_icon_sticker_popular');
		$data['config_change_background_sticker_popular'] = $this->config->get('config_change_background_sticker_popular');
		$data['config_change_color_text_sticker_popular'] = $this->config->get('config_change_color_text_sticker_popular');
		$data['config_change_color_icon_sticker_special'] = $this->config->get('config_change_color_icon_sticker_special');
		$data['config_change_background_sticker_special'] = $this->config->get('config_change_background_sticker_special');
		$data['config_change_color_text_sticker_special'] = $this->config->get('config_change_color_text_sticker_special');
		$data['config_change_color_icon_sticker_topbestseller'] = $this->config->get('config_change_color_icon_sticker_topbestseller');
		$data['config_change_background_sticker_topbestseller'] = $this->config->get('config_change_background_sticker_topbestseller');
		$data['config_change_color_text_sticker_topbestseller'] = $this->config->get('config_change_color_text_sticker_topbestseller');
		$data['config_change_color_icon_sticker_newproduct'] = $this->config->get('config_change_color_icon_sticker_newproduct');
		$data['config_change_background_sticker_newproduct'] = $this->config->get('config_change_background_sticker_newproduct');
		$data['config_change_color_text_sticker_newproduct'] = $this->config->get('config_change_color_text_sticker_newproduct');	
		$data['config_ns_themes_custom_bg_mode'] = $this->config->get('config_ns_themes_custom_bg_mode');
		$data['config_themes_custom_bg_img_preview'] = $this->config->get('config_themes_custom_bg_img_preview');
		$data['config_themes_custom_bg_repeat'] = $this->config->get('config_themes_custom_bg_repeat');
		$data['config_themes_custom_bg_attachment'] = $this->config->get('config_themes_custom_bg_attachment');
		$data['config_ns_themes_custom_bg_mode_color'] = $this->config->get('config_ns_themes_custom_bg_mode_color');
		$data['config_themes_custom_bg_attachment'] = $this->config->get('config_themes_custom_bg_attachment');
		$data['config_themes_custom_bg_position'] = $this->config->get('config_themes_custom_bg_position');
		$data['config_on_off_shopping_cart_hover'] = $this->config->get('config_on_off_shopping_cart_hover');
		$data['custom_style'] = $this->config->get('config_custom_style_luxshop');
		$data['color_schem'] = $this->config->get('config_design_template_color_theme');
		$design_fastorder = $this->config->get('config_select_design_fastorder');
		$callbackpro = $this->config->get('callbackpro');
		$design_callback = (isset($callbackpro['select_design_theme_callback']) ? $callbackpro['select_design_theme_callback'] : 1);
		
		$megamenu_setting = $this->config->get('megamenu_setting');
		$data['menu_width'] = $megamenu_setting['horizontal_menu_width'];
		$data['config_fixed_panel_top'] = $megamenu_setting['fixed_panel_top'];
		if($megamenu_setting['status']=='1'){
			$data['megamenu_status']=true;
			$data['menuvh'] = $this->load->controller('common/menuvh');
		} else { 
			$data['megamenu_status']=false;
		}
		$data['hmenu_type'] = $megamenu_setting['horizontal_menu_width'];
		$data['main_menu_mask'] = $megamenu_setting['main_menu_mask'];
		
		
		$minify_css = $this->config->get('config_minify_css');
		$minify_js = $this->config->get('config_minify_js');
		
		$this->luxshop_minifier->addStyle('catalog/view/theme/luxshop/stylesheet/bootstrap/css/bootstrap.min.css');
		$this->luxshop_minifier->addStyle('catalog/view/theme/luxshop/js/slick/slick.css');
		$theme_fonts = $this->config->get('theme_fonts');
		if($theme_fonts == 'open-sans'){
			$this->luxshop_minifier->addStyle('catalog/view/theme/luxshop/stylesheet/fonts/opensans-fonts.css');
		} elseif($theme_fonts == 'rubik') {
			$this->luxshop_minifier->addStyle('catalog/view/theme/luxshop/stylesheet/fonts/rubik-fonts.css');
		} elseif($theme_fonts == 'nunito-sans') {
			$this->luxshop_minifier->addStyle('catalog/view/theme/luxshop/stylesheet/fonts/nunito-sans-fonts.css');
		} else {
			$this->luxshop_minifier->addStyle('catalog/view/theme/luxshop/stylesheet/fonts/montserrat-fonts.css');
		}
		$this->luxshop_minifier->addStyle('catalog/view/theme/luxshop/stylesheet/stylesheet.css');
		$this->luxshop_minifier->addStyle('catalog/view/theme/luxshop/stylesheet/megamenu.css');
		$this->luxshop_minifier->addStyle('catalog/view/theme/luxshop/stylesheet/stickers.css');
		$this->luxshop_minifier->addStyle('catalog/view/theme/luxshop/stylesheet/tabs.css');
		$this->luxshop_minifier->addStyle('catalog/view/theme/luxshop/stylesheet/theme_scheme/theme_'. $data['color_schem'] .'.css');
		
		if ($data['custom_style'] !='') { 
			$this->luxshop_minifier->addStyle('catalog/view/theme/luxshop/stylesheet/'. $data['custom_style'] .'.css');
		}
		$agreedata = $this->config->get('agreedata');
		if (isset($agreedata) && $agreedata['status'] != 0) {
			$this->luxshop_minifier->addStyle('catalog/view/theme/luxshop/stylesheet/agree_popup/style_agree.css');
		}
		
		if(isset($minify_css) && ($minify_css == 1)){
			$data['minifycss'] = false;
			foreach ($data['styles'] as $style) {
				$this->luxshop_minifier->addStyle($style['href']);
			}
		} else {
			$data['minifycss'] = true;
		}
		$this->luxshop_minifier->addStyle('catalog/view/theme/luxshop/stylesheet/csseditor.css');
		$data['css_luxshop'] = $this->luxshop_minifier->css();
		
		$this->luxshop_minifier->addScript('catalog/view/javascript/jquery/jquery-2.1.1.min.js', 'header'); 
		$this->luxshop_minifier->addScript('catalog/view/theme/luxshop/js/slick/slick.min.js');
		$this->luxshop_minifier->addScript('catalog/view/javascript/bootstrap/js/bootstrap.min.js', 'header'); 
		$this->luxshop_minifier->addScript('catalog/view/theme/luxshop/js/jquery.menu-aim.js', 'header'); 	
		$this->luxshop_minifier->addScript('catalog/view/theme/luxshop/js/megamenu.js', 'header');
		$this->luxshop_minifier->addScript('catalog/view/theme/luxshop/js/common.js', 'header'); 
		/*if(isset($data['nst_data']['lazyload_page'],$data['nst_data']['lazyload_module']) && (($data['nst_data']['lazyload_page'] =='1') || ($data['nst_data']['lazyload_module'] == '1'))){
			$this->luxshop_minifier->addScript('catalog/view/theme/luxshop/js/jquery_lazyload/lazyload.min.js', 'header'); 
		}*/
		
		if(isset($minify_js) && ($minify_js == 1)){
			$data['minifyjs'] = false;
			foreach ($data['scripts'] as $script) {
				$search_http = strpos($script, 'http');
				if ($search_http === false) {
					$this->luxshop_minifier->addScript($script, 'header');
				} else {
					$data['script_remote_servers'][] = $script;
				}
			}
		} else {
			$data['minifyjs'] = true;
		}
		$data['js_luxshop'] = $this->luxshop_minifier->js('header');
		
		
		$header_nav_menu_link_array = $this->config->get('header_nav_menu_link');
		if(isset($header_nav_menu_link_array)) {
			$header_nav_menu_link = $this->config->get('header_nav_menu_link');
		} else {
			$header_nav_menu_link = array();
		}
		$data['header_nav_menu_links'] = array();
		
		foreach ($header_nav_menu_link as $result) {				
			$data['header_nav_menu_links'][] = array(
				'icon_image' 	=> $result['icon_image'],
				'title' 		=> $result['title'],
				'link'  		=> $result['link'][$this->config->get('config_language_id')],
				'popup'  		=> $result['popup'],		
			);	
		}
		
		$data['home_page'] = (isset($this->request->server['HTTPS']) ? HTTPS_SERVER : HTTP_SERVER) . substr($this->request->server['REQUEST_URI'], 1, (strlen($this->request->server['REQUEST_URI'])-1));

			$this->load->language('luxshop/theme');
			$data['text_viewed'] = $this->language->get('text_viewed');	
			$data['text_catalog'] = $this->language->get('text_catalog');	
			$data['text_info_mob'] = $this->language->get('text_info_mob');	
			$data['text_search'] = $this->language->get('text_search');	
			$data['days'] = $this->language->get('days');	
			$data['hours'] = $this->language->get('hours');	
			$data['minutes'] = $this->language->get('minutes');	
			$data['sec'] = $this->language->get('sec');	
			$data['text_showmore'] = $this->language->get('text_showmore');
			$data['text_callback_header'] = $this->language->get('text_callback_header');
			$data['button_shopping'] = $this->language->get('button_shopping');
			$data['button_checkout'] = $this->language->get('button_checkout');
			$data['onepcheckout'] = $this->url->link('checkout/onepcheckout', '', true);
			$this->load->language('product/category');
			$data['text_compare'] = sprintf($this->language->get('text_compare_ns'), (isset($this->session->data['compare']) ? count($this->session->data['compare']) : 0));
			$data['compare'] = $this->url->link('product/compare');
			
			$data['header_phones'] = $this->config->get('config_phones_header');
			$header_phones = $this->config->get('config_phones_header');
			$data['desc_info_mob'] = html_entity_decode($this->config->get('language_description_info_mob')[$data['lang_id']]['text'], ENT_QUOTES, 'UTF-8');
			
			$data['arbitrary_text'] = html_entity_decode($this->config->get('arbitrary_text')[$data['lang_id']]['text'], ENT_QUOTES, 'UTF-8');
			$text_after_phone = $this->config->get('text_after_phone');
			$data['text_after_phone'] = $text_after_phone[$data['lang_id']]['text'];
			
			$data['config_phones_array'] = array();
			$data['header_phones_dropdown'] = array();
			if(!empty($header_phones)){
				foreach ($header_phones as $phone_header) {
					if (isset($phone_header['image']) && is_file(DIR_IMAGE . $phone_header['image'])) {
							$data['icon_phone'] = $this->model_tool_image->resize($phone_header['image'], 25, 25);
						} else {
							$data['icon_phone'] = '';
					}
					if($phone_header['dropdown'] == '1'){
						$data['config_phones_array'][] = array(
							'icon_phone' => $data['icon_phone'],
							'phone'      => html_entity_decode($phone_header['phone'][$data['lang_id']], ENT_QUOTES, 'UTF-8'),
							'icon'       => (isset($phone_header['icon']) ? $phone_header['icon'] : ''),
							'type'      =>  (isset($phone_header['type'][$data['lang_id']]) ? html_entity_decode($phone_header['type'][$data['lang_id']], ENT_QUOTES, 'UTF-8') : ''),
						);
					} else {
						$data['header_phones_dropdown'][] = array(
							'icon_phone' => $data['icon_phone'],
							'phone'      => html_entity_decode($phone_header['phone'][$data['lang_id']], ENT_QUOTES, 'UTF-8'),
							'icon'       => (isset($phone_header['icon']) ? $phone_header['icon'] : ''),
							'type'      =>  (isset($phone_header['type'][$data['lang_id']]) ? html_entity_decode($phone_header['type'][$data['lang_id']], ENT_QUOTES, 'UTF-8') : ''),
						);
					}
				}
			}
			$data['swap_header_blocks'] = $this->config->get('swap_header_blocks');
			$data['type_shop_cart'] = $this->config->get('type_shop_cart');
			if (isset($data['nst_data']['hbannerpc'][$this->config->get('config_language_id')]['image']) && is_file(DIR_IMAGE . $data['nst_data']['hbannerpc'][$this->config->get('config_language_id')]['image'])) {
				$data['hbannerpc'][$this->config->get('config_language_id')]['image'] = 'image/' . $data['nst_data']['hbannerpc'][$this->config->get('config_language_id')]['image'];
			} else {
				$data['hbannerpc'][$this->config->get('config_language_id')]['image'] = '';
			}
			if (isset($data['nst_data']['hbannermob'][$this->config->get('config_language_id')]['image']) && is_file(DIR_IMAGE . $data['nst_data']['hbannermob'][$this->config->get('config_language_id')]['image'])) {
				$data['hbannermob'][$this->config->get('config_language_id')]['image'] = 'image/' . $data['nst_data']['hbannermob'][$this->config->get('config_language_id')]['image'];
			} else {
				$data['hbannermob'][$this->config->get('config_language_id')]['image'] = '';
			}
		
		$this->load->language('common/header');
		
		
		$host = isset($this->request->server['HTTPS']) && (($this->request->server['HTTPS'] == 'on') || ($this->request->server['HTTPS'] == '1')) ? HTTPS_SERVER : HTTP_SERVER;
		if ($this->request->server['REQUEST_URI'] == '/') {
			$data['og_url'] = $this->url->link('common/home');
		} else {
			$data['og_url'] = $host . substr($this->request->server['REQUEST_URI'], 1, (strlen($this->request->server['REQUEST_URI'])-1));
		}
		
		$data['og_image'] = $this->document->getOgImage();
		


		// Wishlist
		if ($this->customer->isLogged()) {
			$this->load->model('account/wishlist');

			$data['text_wishlist'] = sprintf($this->language->get('text_wishlist_ns'), $this->model_account_wishlist->getTotalWishlist());
		} else {
			$data['text_wishlist'] = sprintf($this->language->get('text_wishlist_ns'), (isset($this->session->data['wishlist']) ? count($this->session->data['wishlist']) : 0));
		}

		$data['text_logged'] = sprintf($this->language->get('text_logged'), $this->url->link('account/account', '', true), $this->customer->getFirstName(), $this->url->link('account/logout', '', true));
		
		$data['home'] = $this->url->link('common/home');

			$data['lang_id'] = $this->config->get('config_language_id');
			$data['callbackpro'] = $this->config->get('callbackpro');	
			
		$data['wishlist'] = $this->url->link('account/wishlist', '', true);
		$data['logged'] = $this->customer->isLogged();
		$data['account'] = $this->url->link('account/account', '', true);
		$data['register'] = $this->url->link('account/register', '', true);
		$data['login'] = $this->url->link('account/login', '', true);
		$data['order'] = $this->url->link('account/order', '', true);
		$data['transaction'] = $this->url->link('account/transaction', '', true);
		$data['download'] = $this->url->link('account/download', '', true);
		$data['logout'] = $this->url->link('account/logout', '', true);
		$data['shopping_cart'] = $this->url->link('checkout/cart');
		$data['checkout'] = $this->url->link('checkout/checkout', '', true);
		$data['contact'] = $this->url->link('information/contact');
		$data['telephone'] = $this->config->get('config_telephone');
		
		$data['language'] = $this->load->controller('common/language');
		$data['currency'] = $this->load->controller('common/currency');
		$data['currency'] = $this->load->controller('common/currency');
		if ($this->config->get('configblog_blog_menu')) {
			$data['blog_menu'] = $this->load->controller('blog/menu');
		} else {
			$data['blog_menu'] = '';
		}
		$data['search'] = $this->load->controller('common/search');
		$data['cart'] = $this->load->controller('common/cart');
		$data['menu'] = $this->load->controller('common/menu');

		return $this->load->view('common/header', $data);
	}
}
