<?php
class ControllerExtensionModuleLuxshopNewsCategory extends Controller {
	public function index() {

		if($this->config->get('luxshop_news_status')){
		$this->load->language('extension/module/luxshop_news_category');

		if (isset($this->request->get['ls_news_id'])) {
			$parts = explode('_', (string)$this->request->get['ls_news_id']);
		} else {
			$parts = array();
		}

		if (isset($parts[0])) {
			$data['category_id'] = $parts[0];
		} else {
			$data['category_id'] = 0;
		}

		if (isset($parts[1])) {
			$data['child_id'] = $parts[1];
		} else {
			$data['child_id'] = 0;
		}

		$this->load->model('luxshop/category');


		$data['categories'] = array();

		$categories = $this->model_luxshop_category->getCategories(0);

		foreach ($categories as $category) {
			$children_data = array();

			if ($category['category_id'] == $data['category_id']) {
				$children = $this->model_luxshop_category->getCategories($category['category_id']);

				foreach($children as $child) {
					$filter_data = array('filter_category_id' => $child['category_id'], 'filter_sub_category' => true);

					$children_data[] = array(
						'category_id' => $child['category_id'],
						'name' => $child['name'] . ($this->config->get('articles_count') ? '<span class="articles-count">' . $this->model_luxshop_category->getTotalArticles($filter_data) . '</span>' : ''),
						'href' => $this->url->link('luxshop/category', 'ls_news_id=' . $category['category_id'] . '_' . $child['category_id'])
					);
				}
			}

			$filter_data = array(
				'filter_category_id'  => $category['category_id'],
				'filter_sub_category' => true
			);

			$data['categories'][] = array(
				'category_id' => $category['category_id'],
				'name'        => $category['name'] . ($this->config->get('articles_count') ? '<span class="articles-count">' . $this->model_luxshop_category->getTotalArticles($filter_data) . '</span>' : ''),
				'children'    => $children_data,
				'href'        => $this->url->link('luxshop/category', 'ls_news_id=' . $category['category_id'])
			);
		}

		return $this->load->view('extension/module/luxshop_news_category', $data);
		}
	}
}