<?php
class ControllerExtensionModuleLuxshopBannerBlocks extends Controller {
	public function index($setting) {
		$data['nst_data'] = $this->config->get('nst_data');
        if(isset($data['nst_data']['lazyload_module']) && ($data['nst_data']['lazyload_module'] == 1)){
            $data['lazyload_module'] = true;
            if (isset($data['nst_data']['lazyload_image']) && ($data['nst_data']['lazyload_image'] !='')) {
                $data['lazy_image'] = 'image/' . $data['nst_data']['lazyload_image'];
            } else {
                $data['lazy_image'] = 'image/catalog/lazyload/lazyload1px.png';
            }
        } else {
            $data['lazyload_module'] = false;
        }
		$data['banner_column'] = isset($setting['banner_column']) ? $setting['banner_column'] : 4;
		$data['type_view_mob'] = (!empty($setting['type_view_mob']) ? $setting['type_view_mob'] : 0);
		$this->load->language('extension/module/luxshop_banner_blocks');

		$this->load->model('tool/image');

		$data['language_id'] = $this->config->get('config_language_id');

		$results = $setting['banner_item'];

		foreach ($results as $result) {
			if(isset($result['popup'])){
				$result_popup = $result['popup'];
			} else {
				$result_popup = '0';
			}
			$data['blocks'][] = array(
				'width' 	=> 50,
				'height' 	=> 50,
				'image' 	=> $this->model_tool_image->resize($result['image'], 50, 50),
				'title' 	=> $result['title'],
				'description' => $result['description'],
				'link'  	=> $result['link'],
				'popup'  	=> $result_popup,
				'sort'  	=> $result['sort']
			);
		}

		if (!empty($data['blocks'])){
			foreach ($data['blocks'] as $key => $value) {
				$sort[$key] = $value['sort'];
			}
			array_multisort($sort, SORT_ASC, $data['blocks']);
		}

		return $this->load->view('extension/module/luxshop_banner_blocks', $data);
	}
}