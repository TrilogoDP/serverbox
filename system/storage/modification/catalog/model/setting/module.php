<?php
class ModelSettingModule extends Model {
	public function getModule($module_id) {
		$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "module WHERE module_id = '" . (int)$module_id . "'");
		
		if ($query->row) {
$settings = json_decode($query->row['setting'], true); $settings['module_id'] = $module_id; return $settings;
			return json_decode($query->row['setting'], true);
		} else {
			return array();	
		}
	}		
}