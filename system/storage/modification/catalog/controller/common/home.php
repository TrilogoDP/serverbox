<?php
class ControllerCommonHome extends Controller {
	public function index() {
		$this->document->setTitle($this->config->get('config_meta_title'));
		$this->document->setDescription($this->config->get('config_meta_description'));
		$this->document->setKeywords($this->config->get('config_meta_keyword'));

		if (isset($this->request->get['route'])) {
			$canonical = $this->url->link('common/home');
			if ($this->config->get('config_seo_pro') && !$this->config->get('config_seopro_addslash')) {
				$canonical = rtrim($canonical, '/');
			}
			$this->document->addLink($canonical, 'canonical');
		}


			$data['ls_microdata_status'] = (!empty($this->config->get('ls_microdata_status')) ? $this->config->get('ls_microdata_status') : 0);

			if(isset($data['ls_microdata_status']) && ($data['ls_microdata_status'] == 1)) {
				if (isset($this->request->server['HTTPS']) && (($this->request->server['HTTPS'] == 'on') || ($this->request->server['HTTPS'] == '1'))) {
					$server = $this->config->get('config_ssl');
				} else {
					$server = $this->config->get('config_url');
				}
				$data['name'] = $this->config->get('config_name');
				if (is_file(DIR_IMAGE . $this->config->get('config_logo'))) {
					$data['logo'] = $server . 'image/' . $this->config->get('config_logo');
				} else {
					$data['logo'] = '';
				}
				$data['url'] = $server;
				$data['description'] = trim($this->document->getDescription());

				$ls_micsrodata = (!empty($this->config->get('ls_micsrodata')) ? $this->config->get('ls_micsrodata') : array());

				if(isset($ls_micsrodata['phones']) && !empty($ls_micsrodata['phones'])){
					$data['ls_micsrodata_phones'] = array_map('trim',explode(",", $ls_micsrodata['phones']));
				} else {
					$data['ls_micsrodata_phones'] = false;
				}

				if(isset($ls_micsrodata['city']) && !empty($ls_micsrodata['city'])){
					$data['ls_microdata_city'] = $ls_micsrodata['city'];
				}
				if(isset($ls_micsrodata['postcode']) && !empty($ls_micsrodata['postcode'])){
					$data['ls_microdata_postcode'] = $ls_micsrodata['postcode'];
				}
				if(isset($ls_micsrodata['email']) && !empty($ls_micsrodata['email'])){
					$data['ls_microdata_email'] = $ls_micsrodata['email'];
				}
				if(isset($ls_micsrodata['address']) && !empty($ls_micsrodata['address'])){
					$data['ls_microdata_address'] = $ls_micsrodata['address'];
				}
				if(isset($ls_micsrodata['social']) && !empty($ls_micsrodata['social'])){
					$data['ls_microdata_social'] = array_map('trim',explode(",", $ls_micsrodata['social']));
				} else {
					$data['ls_microdata_social'] = false;
				}
			}
		
		$data['column_left'] = $this->load->controller('common/column_left');
		$data['column_right'] = $this->load->controller('common/column_right');
		$data['content_top'] = $this->load->controller('common/content_top');
		$data['content_bottom'] = $this->load->controller('common/content_bottom');
		$data['footer'] = $this->load->controller('common/footer');

		$megamenu_setting = $this->config->get('megamenu_setting');
		$data['menu_open_hpage'] = (!empty($megamenu_setting['menu_open_hpage']) ? $megamenu_setting['menu_open_hpage'] : 0);
		$data['type_header'] = (!empty($this->config->get('type_header')) ? $this->config->get('type_header') : 1);
		
		$config_theme = $this->config->get('config_theme');
		$theme_default_directory = $this->config->get('theme_default_directory');
		if(($config_theme == 'luxshop') || ($theme_default_directory =='luxshop')){
			$this->load->model('design/layout');
			$this->load->model('luxshop/layout_home_page');
			if (isset($this->request->get['route'])) {
				$route = (string)$this->request->get['route'];
			} else {
				$route = 'common/home';
			}

			$layout_id = 0;

			if (!$layout_id) {
				$layout_id = $this->model_design_layout->getLayout($route);
			}
			$ns_theme_home_page_sheme = $this->config->get('ns_new_home_layout_module');
			$modules_luxshop = array();
			if (isset($ns_theme_home_page_sheme)) {
				$modules_luxshop = $this->config->get('ns_new_home_layout_module');
			} else {
				$modules_luxshop = array();
			}

			$modules_default_layout = $this->model_luxshop_layout_home_page->getLayoutModulesHomePage($layout_id);
			$hpmsheme = array();
			if(!empty($modules_default_layout)){
				foreach($modules_default_layout as $module_default_layout){
					$pos = strpos($module_default_layout['position'], 'position_');
					if ($pos !== false) {
						$hpmsheme[] = $module_default_layout;
					}
				}
			}
			$result_layout = array_merge($modules_luxshop, $hpmsheme);
			$detect = new Mobile_Detect();
			$deviceType = ($detect->isMobile() ? ($detect->isTablet() ? 'tablet' : 'phone') : 'computer');
			if(!empty($result_layout)){
				$this->load->model('setting/module');
				foreach ($result_layout as $key => $pos_mod) {
					if($deviceType == 'phone') {
					$mob_device = isset($pos_mod['mob_device']) ? $pos_mod['mob_device']: 0;
						if($mob_device == 1){
							continue;
						}
					}
					if($deviceType == 'tablet') {
					$tablet_device = isset($pos_mod['tablet_device']) ? $pos_mod['tablet_device']: 0;
						if($tablet_device == 1){
							continue;
						}
					}
					if($deviceType == 'computer') {
					$pc_device = isset($pos_mod['pc_device']) ? $pos_mod['pc_device']: 0;
						if($pc_device == 1){
							continue;
						}
					}
					$part = explode('.', $pos_mod['code']);

					if (isset($part[0]) && $this->config->get($part[0] . '_status')) {
						$data[$pos_mod['position']][] = $this->load->controller('extension/module/' . $part[0]);
					}

					if (isset($part[1])) {
						$setting_info = $this->model_setting_module->getModule($part[1]);

						if ($setting_info && $setting_info['status']) {
							$data[$pos_mod['position']][] = $this->load->controller('extension/module/' . $part[0], $setting_info);

						}
					}
				}
			}
							
		}
      
		$data['header'] = $this->load->controller('common/header');

		$this->response->setOutput($this->load->view('common/home', $data));
	}
}