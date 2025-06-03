<?php

// Heading
$_['heading_title']    = 'Статус замовлень';

// Text
$_['text_success']     = 'Налаштування змінені';
 
		$_['column_select_bg_os']          			= 'Обрати Фон';
		$_['column_select_color_text_os']          	= 'Обрати колір тексту';
		$_['column_on_off_send_mail']          		= 'Вкл / Викл відправку листа на пошту';
		
$_['text_list']        = 'Список статусів замовлень';
$_['text_add']         = 'Додати';
$_['text_edit']        = 'Редагування';

// Column
$_['column_name']      = 'Назва статусу замовлення';
$_['column_action']    = 'Дія';

// Entry
						
					$_['text_email_template'] 		= ' Шаблон листа';
$_['it_supports_variable_or_html_tags'] 	= ' Підтримує змінні та html теги';
$_['text_close'] 							= 'Закрити';
$_['ttn_subject_text'] 						= 'Тема листа';
$_['ttn_subject_text_variables'] 						= 'Підтримує змінні';
$_['list_of_variables'] 					= 'Список Змінних';
$_['list_of_variables_text'] 				= 'Список Змінних';
$_['list_of_variables_entry'] 				= '<table><tr><td>
<br/><b>~number_ttn~</b> - номер ТТН
<br/><b>~order_id~</b> - номер замовлення
<br/><b>~totals~</b> - сума замовлення у поточній валюті
<br/><b>~invoice_no~</b> - номер рахунку
<br/><b>~invoice_prefix~</b> - префікс рахунку
<br/><b>~store_id~</b> - id магазину          
<br/><b>~store_name~</b> - назва магазину          
<br/><b>~store_url~</b> - url магазину           			
<br/><b>~customer_id~</b> - id покупця 
<br/><b>~firstname~</b> - ім’я
<br/><b>~lastname~</b> - прізвище               
<br/><b>~telephone~</b> - телефон      
<br/><b>~fax~</b> - факс
<br/><b>~email~</b> - пошта              
<br/><b>~payment_firstname~</b> - ім’я платника      
<br/><b>~payment_lastname~</b> - прізвище платника
<br/><b>~payment_company~</b> - компанія платника
<br/><b>~payment_address_1~</b> - адреса платника
<br/><b>~payment_address_2~</b> - адреса2 платника
<br/><b>~payment_postcode~</b> - індекс платника
<br/><b>~payment_city~</b> - місто платника
<br/><b>~payment_zone_id~</b> - id гео зони платника
<br/><b>~payment_zone~</b> - гео зона платника
<br/><b>~payment_zone_code~</b> - код зони платника
<br/><b>~payment_country_id~</b> - id країни платника
<br/><b>~payment_country~</b> - країна платника
<br/><b>~payment_iso_code_2~</b> - iso код платника
<br/><b>~payment_iso_code_3~</b>  - iso код платника
<br/><b>~payment_address_format~</b> - формат адреси платника
<br/><b>~payment_method~</b> - метод оплати
<br/><b>~payment_code~</b> - код оплати
</td><td>
<br/><b>~shipping_firstname~</b> - ім’я для доставки
<br/><b>~shipping_lastname~</b> - прізвище для доставки
<br/><b>~shipping_company~</b> - компанія для доставки  
<br/><b>~shipping_address_1~</b> - адреса доставки
<br/><b>~shipping_address_2~</b> - адреса2 доставки
<br/><b>~shipping_postcode~</b> - індекс для доставки
<br/><b>~shipping_city~</b> - місто доставки       
<br/><b>~shipping_zone_id~</b> - id гео зони доставки
<br/><b>~shipping_zone~</b> - гео зона доставки
<br/><b>~shipping_zone_code~</b>  - код зони доставки
<br/><b>~shipping_country_id~</b> - id країни доставки
<br/><b>~shipping_country~</b> - країна доставки
<br/><b>~shipping_iso_code_2~</b> - iso код доставки
<br/><b>~shipping_iso_code_3~</b> - iso код доставки 
<br/><b>~shipping_address_format~</b> - формат адреси доставки
<br/><b>~shipping_method~</b> - метод доставки
<br/><b>~shipping_code~</b> - код метода доставки     
<br/><b>~comment~</b> - коментар        
<br/><b>~total~</b> - сума разом (у валюті за замовчуванням)         
<br/><b>~order_status_id~</b> - id статусу замовлення         
<br/><b>~order_status~</b> - статус замовлення
<br/><b>~language_id~</b> - id мови
<br/><b>~language_code~</b> - код мови  
<br/><b>~language_filename~</b> - файл мови
<br/><b>~language_directory~</b> - папка мови
<br/><b>~currency_id~</b> - id валюти
<br/><b>~currency_code~</b> - код валюти 
<br/><b>~currency_value~</b> - курс валюти
<br/><b>~ip~</b> - ip
<br/><b>~forwarded_ip~</b> - переадресований ip            
<br/><b>~user_agent~</b> - юзер агент          
<br/><b>~accept_language~</b> - мова 		
<br/><b>~date_modified~</b> - дата змінення замовлення   
<br/><b>~date_added~</b> - дата створення замовлення
</td></tr></table><br/>
Деякі змінні можуть не працювати, це залежить від версії магазину.
';
                
$_['entry_name']       = 'Назва статусу замовлення';

// Error
$_['error_permission'] = 'У вас недостатньо прав для внесення змін';
$_['error_name']       = 'Назва має містити від 3 до 32 символів';
$_['error_default']    = 'Статус замовлення неможливо видалити тому, що він використовується як статус замовлення за замовчуванням';
$_['error_download']   = 'Статус замовлення неможливо видалити тому, що він використовується як статус завантаження за замовчуванням';
$_['error_store']      = 'Статус замовлення неможливо видалити тому, що він використовується в %s магазинах';
$_['error_order']      = 'Статус замовлення неможливо видалити тому, що він використовується в %s замовленнях';