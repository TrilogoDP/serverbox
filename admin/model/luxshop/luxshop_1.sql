SET sql_mode = '';

CREATE TABLE IF NOT EXISTS `oc_question_answer`(
`qa_id` INT(11) NOT NULL AUTO_INCREMENT,
`name_field` TEXT NOT NULL,
`telephone_field` TEXT NOT NULL,
`comment_field` TEXT NOT NULL,
`email_field` TEXT NOT NULL,
`qa_product_id` INT(11) NOT NULL,
`comment_manager` TEXT NOT NULL,
`status_id` INT(11) NOT NULL,
`date_added` DATETIME NOT NULL,
`date_modified` DATETIME NOT NULL,
PRIMARY KEY (`qa_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

CREATE TABLE IF NOT EXISTS `oc_found_cheaper`(
`id_found_cheaper` int(11) NOT NULL AUTO_INCREMENT,
`name_field` text NOT NULL,
`telephone_field` text NOT NULL,
`link_field` text NOT NULL,
`comment_field` text NOT NULL,
`email_field` text NOT NULL,
`fcp_product_id` int(11) NOT NULL,
`comment_manager` text NOT NULL,
 `status_id` int(11) NOT NULL,
`date_added` datetime NOT NULL,
`date_modified` datetime NOT NULL,
PRIMARY KEY (`id_found_cheaper`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

DELETE FROM `oc_setting` WHERE `key` = 'config_theme';
INSERT INTO `oc_setting` (`store_id`, `code`, `key`, `value`, `serialized`) VALUES
(0, 'config', 'config_theme', 'luxshop', 0);
DELETE FROM `oc_setting` WHERE `code` = 'callbackpro';
INSERT INTO `oc_setting` (`store_id`, `code`, `key`, `value`, `serialized`) VALUES
(0, 'callbackpro', 'callbackpro', '{"config_on_off_fields_firstname_cb":"1","config_fields_firstname_requared_cb":"1","config_placeholder_fields_firstname_cb":{"1":{"config_placeholder_fields_firstname_cb":"\\u0412\\u0430\\u0448\\u0435 \\u0438\\u043c\\u044f"},"2":{"config_placeholder_fields_firstname_cb":"You name"}},"config_on_off_fields_phone_cb":"1","config_fields_phone_requared_cb":"1","config_placeholder_fields_phone_cb":{"1":{"config_placeholder_fields_phone_cb":"\\u0412\\u0430\\u0448 \\u0442\\u0435\\u043b\\u0435\\u0444\\u043e\\u043d"},"2":{"config_placeholder_fields_phone_cb":"Phone"}},"config_mask_phone_number_cb":"+3(999) 999-99-99","config_on_off_fields_comment_cb":"1","config_placeholder_fields_comment_cb":{"1":{"config_placeholder_fields_comment_cb":"\\u041a\\u043e\\u043c\\u043c\\u0435\\u043d\\u0442\\u0430\\u0440\\u0438\\u0439"},"2":{"config_placeholder_fields_comment_cb":"Comment"}},"config_on_off_fields_email_cb":"1","config_placeholder_fields_email_cb":{"1":{"config_placeholder_fields_email_cb":"E-mail"},"2":{"config_placeholder_fields_email_cb":"E-mail"}},"csscallback":{"background_callbackpro_header":"","text_color_callbackpro_header":"","background_callback_center":"","background_contact_content":"","color_contact_content":"","boxshadow_img_callback":"","config_background_callback":"","config_background_callback_hover":"","config_background_button_callback":"","config_background_button_callback_hover":"","config_border_color_button_callback":"","config_border_color_button_callback_hover":"","background_callback_footer":""},"icon_callbackpro_header":"","title_callback":{"1":{"text":"\\u0417\\u0430\\u043a\\u0430\\u0437\\u0430\\u0442\\u044c \\u0437\\u0432\\u043e\\u043d\\u043e\\u043a"},"2":{"text":"\\u0417\\u0430\\u043a\\u0430\\u0437\\u0430\\u0442\\u044c \\u0437\\u0432\\u043e\\u043d\\u043e\\u043a"}},"config_any_text_bottom_before_button":{"1":{"config_any_text_bottom_before_button":""},"2":{"config_any_text_bottom_before_button":""}},"main_image_callback":"","block_name_phone":{"1":{"block_name_phone":""},"2":{"block_name_phone":""}},"config_email_1":"","skype":"","skype_date_start":"","skype_date_end":"","title_schedule":{"1":{"text":""},"2":{"text":""}},"daily":{"1":{"text":""},"2":{"text":""}},"weekend":{"1":{"text":""},"2":{"text":""}},"position_animate_btn_1":"\\u0412\\u044b\\u0431\\u0440\\u0430\\u0442\\u044c \\u0440\\u0430\\u0441\\u043f\\u043e\\u043b\\u043e\\u0436\\u0435\\u043d\\u0438\\u0435","position_animate_btn_2":"\\u0412\\u044b\\u0431\\u0440\\u0430\\u0442\\u044c \\u0440\\u0430\\u0441\\u043f\\u043e\\u043b\\u043e\\u0436\\u0435\\u043d\\u0438\\u0435","position_animate_btn_3":"\\u0412\\u044b\\u0431\\u0440\\u0430\\u0442\\u044c \\u0440\\u0430\\u0441\\u043f\\u043e\\u043b\\u043e\\u0436\\u0435\\u043d\\u0438\\u0435","position_animate_btn_4":"\\u0412\\u044b\\u0431\\u0440\\u0430\\u0442\\u044c \\u0440\\u0430\\u0441\\u043f\\u043e\\u043b\\u043e\\u0436\\u0435\\u043d\\u0438\\u0435","config_phone_number_send_sms":"","config_login_send_sms":"","config_pass_send_sms":"","quickorder_subject_me_callback1":"","quickorder_description_me_callback1":"","quickorder_subject_me_callback2":"","quickorder_description_me_callback2":"","config_you_email_callback":""}', 1);


/*Быстрый заказ*/
DELETE FROM `oc_setting` WHERE `code` = 'fastorder';
INSERT INTO `oc_setting` (`store_id`, `code`, `key`, `value`, `serialized`) VALUES
(0, 'fastorder', 'config_on_off_fields_firstname', '1', 0),
(0, 'fastorder', 'config_fields_firstname_requared', '1', 0),
(0, 'fastorder', 'config_placeholder_fields_firstname', '{"1":{"config_placeholder_fields_firstname":"\\u0412\\u0430\\u0448\\u0435 \\u0438\\u043c\\u044f"},"2":{"config_placeholder_fields_firstname":"You name"}}', 1),
(0, 'fastorder', 'config_on_off_fields_phone', '1', 0),
(0, 'fastorder', 'config_fields_phone_requared', '1', 0),
(0, 'fastorder', 'config_placeholder_fields_phone', '{"1":{"config_placeholder_fields_phone":"\\u0412\\u0430\\u0448 \\u0442\\u0435\\u043b\\u0435\\u0444\\u043e\\u043d"},"2":{"config_placeholder_fields_phone":"You telephone"}}', 1),
(0, 'fastorder', 'config_mask_phone_number', '+38(099)999-99-99', 0),
(0, 'fastorder', 'config_on_off_fields_comment', '1', 0),
(0, 'fastorder', 'config_placeholder_fields_comment', '{"1":{"config_placeholder_fields_comment":"\\u041a\\u043e\\u043c\\u043c\\u0435\\u043d\\u0442\\u0430\\u0440\\u0438\\u0439"},"2":{"config_placeholder_fields_comment":"Comment"}}', 1),
(0, 'fastorder', 'config_on_off_fields_email', '1', 0),
(0, 'fastorder', 'config_placeholder_fields_email', '{"1":{"config_placeholder_fields_email":"E-mail"},"2":{"config_placeholder_fields_email":"E-mail"}}', 1),
(0, 'fastorder', 'config_general_image_product_popup', '1', 0),
(0, 'fastorder', 'config_title_popup_quickorder', '{"1":{"config_title_popup_quickorder":"\\u041a\\u0443\\u043f\\u0438\\u0442\\u044c \\u0432 1 \\u043a\\u043b\\u0438\\u043a"},"2":{"config_title_popup_quickorder":"Byu 1 click"}}', 1),
(0, 'fastorder', 'config_text_open_form_send_order', '{"1":{"config_text_open_form_send_order":"\\u041a\\u0443\\u043f\\u0438\\u0442\\u044c \\u0432 1 \\u043a\\u043b\\u0438\\u043a"},"2":{"config_text_open_form_send_order":"Buy 1 click"}}', 1),
(0, 'fastorder', 'config_text_before_button_send', '{"1":{"config_text_before_button_send":""},"2":{"config_text_before_button_send":""}}', 1),
(0, 'fastorder', 'config_any_text_at_the_bottom', '{"1":{"config_any_text_at_the_bottom":""},"2":{"config_any_text_at_the_bottom":""}}', 1),
(0, 'fastorder', 'config_complete_quickorder', '{"1":{"config_complete_quickorder":""},"2":{"config_complete_quickorder":""}}', 1),
(0, 'fastorder', 'config_phone_number_send_sms_fastorder', '', 0),
(0, 'fastorder', 'config_login_send_sms_fastorder', '', 0),
(0, 'fastorder', 'config_pass_send_sms_fastorder', '', 0),
(0, 'fastorder', 'quickorder_subject1', '', 0),
(0, 'fastorder', 'quickorder_description1', '', 0),
(0, 'fastorder', 'quickorder_subject2', '', 0),
(0, 'fastorder', 'quickorder_description2', '', 0),
(0, 'fastorder', 'quickorder_subject_me1', '', 0),
(0, 'fastorder', 'quickorder_description_me1', '', 0),
(0, 'fastorder', 'quickorder_subject_me2', '', 0),
(0, 'fastorder', 'quickorder_description_me2', '', 0),
(0, 'fastorder', 'config_you_email_quickorder', '', 0),
(0, 'fastorder', 'config_on_off_send_buyer_mail', '0', 0),
(0, 'fastorder', 'config_on_off_send_me_mail', '0', 0),
(0, 'fastorder', 'config_me_html_products', '0', 0),
(0, 'fastorder', 'config_buyer_html_products', '0', 0),
(0, 'fastorder', 'config_on_off_shipping_method', '0', 0),
(0, 'fastorder', 'config_on_off_payment_method', '0', 0),
(0, 'fastorder', 'config_fields_comment_requared', '0', 0),
(0, 'fastorder', 'config_fields_email_requared', '0', 0);


/*Отзывы о магазине*/
TRUNCATE TABLE `oc_reviews_store_theme`;
INSERT INTO `oc_reviews_store_theme` (`reviews_store_theme_id`, `status`, `sort_order`) VALUES
(1, 1, 0),
(2, 1, 0),
(3, 1, 0),
(4, 1, 0);

TRUNCATE TABLE `oc_reviews_store_theme_desc`;
INSERT INTO `oc_reviews_store_theme_desc` (`reviews_store_theme_id`, `language_id`, `theme_text`) VALUES
(1, 1, 'Оценка магазина'),
(1, 2, 'Store rating'),
(2, 1, 'Качество товара'),
(2, 2, 'Product quality'),
(3, 1, 'Доставка'),
(3, 2, 'Delivery'),
(4, 1, 'Цена'),
(4, 2, 'Price');

TRUNCATE TABLE `oc_reviews_store_rating`;

INSERT INTO `oc_reviews_store_rating` (`reviews_store_id`, `reviews_store_theme_id`, `rating`) VALUES
(1, 1, 5),
(1, 2, 5),
(1, 3, 5),
(1, 4, 5),
(2, 1, 5),
(2, 2, 5),
(2, 3, 5),
(2, 4, 5),
(3, 1, 5),
(3, 2, 5),
(3, 3, 5),
(3, 4, 5),
(4, 1, 5),
(4, 2, 5),
(4, 3, 5),
(4, 4, 5),
(5, 1, 5),
(5, 2, 5),
(5, 3, 5),
(5, 4, 5),
(6, 1, 5),
(6, 2, 5),
(6, 3, 5),
(6, 4, 5);

TRUNCATE TABLE `oc_reviews_store`;
INSERT INTO `oc_reviews_store` (`reviews_store_id`, `author`, `description`, `admin_response`, `rating`, `like`, `dislike`, `status`, `status_check`, `date_added`, `date_modified`) VALUES
(1, 'Елена', 'супер зашла в интернет -магазин Luxshop увидела нужный товар положила в корзину и вуаля доставили домой по укр почте-совершенно бесплатно супер условия покупки -доставки товара ', '', 0, 0, 0, 1, 1, '2021-12-22 15:22:51', '0000-00-00 00:00:00'),
(2, 'Світлана', 'Делаю не первую покупку в Luxshop. В этот раз заказала набор контейнеров LUMINARC 3 шт. + сумка, доставили быстро, всё целое, нигде ни царапинки. Спасибо! ', '', 0, 0, 0, 1, 1, '2021-12-22 15:23:26', '0000-00-00 00:00:00'),
(3, 'Татьяна', 'Очень довольна покупкой.Доставили быстро,курьер все на месте проверил,подсказал,молодец.Всем рекомендую! ', '', 0, 0, 0, 1, 1, '2021-12-22 15:23:51', '0000-00-00 00:00:00'),
(4, 'Марина', 'Благодаря квалифицированной консультации менеджера магазина, приобрели отличную стиральную машину с хорошей скидкой. Доставка тоже была осуществлена в оговоренные сроки. Спасибо магазину! Будем обращаться с удовольствием еще! ', 'Спасибо', 0, 0, 0, 1, 1, '2021-12-22 15:24:11', '2021-12-22 15:27:43'),
(5, 'Алексей', 'Товар получил , качество супер цена могла быть и дешевле )) по магазину вопросов нет, все удобно и понятно .. Спасибо ', '', 0, 0, 0, 1, 1, '2021-12-22 15:24:38', '0000-00-00 00:00:00'),
(6, 'Ирина', 'Купила варочную поверхность BEKO HIZG 64120 В в интернет магазине CyberStore по отличной цене, за 1600 грн по акции. В то время как в магазинах цены от 3000 грн были. Поверхностью очень довольна, работает отлично, качество хорошее. Еще заказывала вытяжку и телевизор, но пока не проверяла, позже напишу отзывы на них. Всю технику покупаю только в CyberStore , пока нареканий не было. Большой плюс, что рассрочка в CyberStore дается на 2 года на многие товары, в то время как в других магазинах на эти же товары только на 10 месяцев. ', '', 0, 0, 0, 1, 1, '2021-12-22 15:24:58', '0000-00-00 00:00:00');

DELETE FROM `oc_setting` WHERE `code` = 'reviews_store_setting';
INSERT INTO `oc_setting` (`store_id`, `code`, `key`, `value`, `serialized`) VALUES
(0, 'reviews_store_setting', 'reviews_store_setting', '{"status":"1","show_like_dislike":"1","review_guest":"1"}', 1);

DELETE FROM `oc_setting` WHERE `code` = 'myonepagecheckout';
INSERT INTO `oc_setting` (`store_id`, `code`, `key`, `value`, `serialized`) VALUES
(0, 'myonepagecheckout', 'details_payment_fax', '0', 0),
(0, 'myonepagecheckout', 'details_telephone', 'required', 0),
(0, 'myonepagecheckout', 'details_payment_email', 'required', 0),
(0, 'myonepagecheckout', 'details_last_name', 'required', 0),
(0, 'myonepagecheckout', 'config_show_onepagecheckout', '1', 0),
(0, 'myonepagecheckout', 'address_payment_company', '0', 0),
(0, 'myonepagecheckout', 'address_payment_address_1', 'required', 0),
(0, 'myonepagecheckout', 'address_payment_city', 'required', 0),
(0, 'myonepagecheckout', 'address_payment_postcode', '0', 0),
(0, 'myonepagecheckout', 'address_shipping_address', '0', 0);

DELETE FROM `oc_setting` WHERE `code` = 'ut5setting';
INSERT INTO `oc_setting` (`store_id`, `code`, `key`, `value`, `serialized`) VALUES
(0, 'ut5setting', 'ttn_subject1', '', 0),
(0, 'ut5setting', 'ttn_description1', '', 0),
(0, 'ut5setting', 'ttn_subject2', '', 0),
(0, 'ut5setting', 'ttn_description2', '', 0),
(0, 'ut5setting', 'config_on_off_order_payment_method', '1', 0),
(0, 'ut5setting', 'config_on_off_order_shipping_method', '1', 0),
(0, 'ut5setting', 'config_on_off_model_product', '1', 0),
(0, 'ut5setting', 'config_on_off_sku_product', '1', 0),
(0, 'ut5setting', 'config_on_off_upc_product', '1', 0),
(0, 'ut5setting', 'config_on_off_column_product', '1', 0),
(0, 'ut5setting', 'config_on_off_column_comment_manager', '0', 0),
(0, 'ut5setting', 'config_on_off_column_send_ttn_email', '0', 0),
(0, 'ut5setting', 'config_on_off_column_price_purchase', '0', 0),
(0, 'ut5setting', 'config_on_off_column_total_profit', '0', 0),
(0, 'ut5setting', 'config_on_off_column_manager_process_orders', '0', 0),
(0, 'ut5setting', 'config_on_off_column_delivery_price', '0', 0),
(0, 'ut5setting', 'config_on_off_column_build', '0', 0),
(0, 'ut5setting', 'config_on_off_column_rise_product', '0', 0);

DELETE FROM `oc_setting` WHERE `code` = 'quickviewpro';
INSERT INTO `oc_setting` (`store_id`, `code`, `key`, `value`, `serialized`) VALUES
(0, 'quickviewpro', 'config_quickview_wishlist', '1', 0),
(0, 'quickviewpro', 'config_quickview_compare', '1', 0),
(0, 'quickviewpro', 'config_quickview_addtocart', '1', 0),
(0, 'quickviewpro', 'config_quickview_additional_image', '1', 0),
(0, 'quickviewpro', 'config_quickview_tab_description', '1', 0),
(0, 'quickviewpro', 'config_quickview_tab_specification', '1', 0),
(0, 'quickviewpro', 'config_quickview_tab_review_quickview', '1', 0),
(0, 'quickviewpro', 'config_quickview_options_count', '10', 0),
(0, 'quickviewpro', 'config_quickview_manufacturer', '1', 0),
(0, 'quickviewpro', 'config_quickview_model', '1', 0),
(0, 'quickviewpro', 'config_quickview_quantity', '1', 0),
(0, 'quickviewpro', 'config_quickview_btn_name', '{"1":{"config_quickview_btn_name":"\\u041f\\u0440\\u043e\\u0441\\u043c\\u043e\\u0442\\u0440"},"2":{"config_quickview_btn_name":"Quickview"}}', 1),
(0, 'quickviewpro', 'config_on_off_featured_quickview', '1', 0),
(0, 'quickviewpro', 'config_on_off_latest_quickview', '1', 0),
(0, 'quickviewpro', 'config_on_off_bestseller_quickview', '1', 0),
(0, 'quickviewpro', 'config_on_off_special_quickview', '1', 0),
(0, 'quickviewpro', 'config_on_off_category_page_quickview', '1', 0),
(0, 'quickviewpro', 'config_on_off_search_page_quickview', '1', 0),
(0, 'quickviewpro', 'config_on_off_manufacturer_page_quickview', '1', 0),
(0, 'quickviewpro', 'config_on_off_special_page_quickview', '1', 0);

DELETE FROM `oc_setting` WHERE `code` = 'autosearch';
INSERT INTO `oc_setting` (`store_id`, `code`, `key`, `value`, `serialized`) VALUES
(0, 'ns_autosearch_data', 'ns_autosearch_data', '{"status":"1","search_model_on_off":"1","search_tag_on_off":"0","search_manufacturer_on_off":"0","search_upc_on_off":"0","search_sku_on_off":"0","display_image_on_off":"1","image_search_width":"50","image_search_height":"50","display_model_on_off":"1","display_manufacturer_on_off":"0","display_price_on_off":"0","display_rating_on_off":"0","display_stock_on_off":"0"}', 1);

DELETE FROM `oc_setting` WHERE `code` = 'fcpdata';
INSERT INTO `oc_setting` (`store_id`, `code`, `key`, `value`, `serialized`) VALUES
(0, 'fcpdata', 'fcpdata', '{"status":"1","send_email_status":"0","email_found_cheaper":"","name_field":"1","name_field_required":"1","name_field_placeholder":{"1":{"text":"\\u0412\\u0430\\u0448\\u0435 \\u0438\\u043c\\u044f"},"2":{"text":"You name"}},"telephone_field":"1","telephone_field_mask":"+38(099)999-99-99","telephone_field_required":"1","telephone_field_placeholder":{"1":{"text":"\\u0412\\u0430\\u0448 \\u0442\\u0435\\u043b\\u0435\\u0444\\u043e\\u043d"},"2":{"text":"You phone"}},"comment_field":"1","comment_field_required":"0","comment_field_placeholder":{"1":{"text":"\\u041a\\u043e\\u043c\\u043c\\u0435\\u043d\\u0442\\u0430\\u0440\\u0438\\u0439"},"2":{"text":"Comment"}},"email_field":"1","email_field_required":"1","email_field_placeholder":{"1":{"text":"Email"},"2":{"text":"Email"}},"link_field":"1","link_field_required":"0","link_field_placeholder":{"1":{"text":"\\u0421\\u0441\\u044b\\u043b\\u043a\\u0430"},"2":{"text":"Link"}},"title_popup_found_cheaper":{"1":{"text":"\\u041d\\u0430\\u0448\\u043b\\u0438 \\u0434\\u0435\\u0448\\u0435\\u0432\\u043b\\u0435 ? "},"2":{"text":"Found it cheaper?"}},"found_cheaper_info_text":{"1":{"text":""},"2":{"text":""}},"found_cheaper_botton_text":{"1":{"text":"\\u041d\\u0430\\u0448\\u043b\\u0438 \\u0434\\u0435\\u0448\\u0435\\u0432\\u043b\\u0435 ? "},"2":{"text":"Found it cheaper?"}},"found_cheaper_botton_icon":"","color_send_button":"","background_send_button":"","background_send_button_hover":"","border_send_button":"","border_send_button_hover":"","color_found_cheaper_button":"","background_found_cheaper_button":"","background_found_cheaper_button_hover":"","border_found_cheaper_button":"","border_found_cheaper_button_hover":""}', 1);

DELETE FROM `oc_setting` WHERE `code` = 'qadata';
INSERT INTO `oc_setting` (`store_id`, `code`, `key`, `value`, `serialized`) VALUES
(0, 'qadata', 'qadata', '{"status":"1","email_question_answer":"","name_field":"1","name_field_required":"1","name_field_placeholder":{"1":{"text":"\\u0412\\u0430\\u0448\\u0435 \\u0438\\u043c\\u044f"},"2":{"text":"Your name"}},"telephone_field":"1","telephone_field_mask":"+38(099)999-99-99","telephone_field_required":"1","telephone_field_placeholder":{"1":{"text":"\\u0412\\u0430\\u0448 \\u0442\\u0435\\u043b\\u0435\\u0444\\u043e\\u043d"},"2":{"text":"Your phone"}},"email_field":"1","email_field_required":"1","email_field_placeholder":{"1":{"text":"Email"},"2":{"text":"Email"}}}', 1);


DELETE FROM `oc_setting` WHERE `code` = 'settingluxshop';
INSERT INTO `oc_setting` (`store_id`, `code`, `key`, `value`, `serialized`) VALUES
(0, 'settingluxshop', 'show_subcategories', '1', 0),
(0, 'settingluxshop', 'hide_short_attr_mob', '1', 0),
(0, 'settingluxshop', 'hide_short_desc_mob', '1', 0),
(0, 'settingluxshop', 'config_show_special_timer_module', '1', 0),
(0, 'settingluxshop', 'config_show_special_timer_page', '1', 0),
(0, 'settingluxshop', 'config_show_review_plus', '1', 0),
(0, 'settingluxshop', 'config_show_review_plus_requared', '0', 0),
(0, 'settingluxshop', 'config_show_review_minus', '1', 0),
(0, 'settingluxshop', 'config_show_review_minus_requared', '0', 0),
(0, 'settingluxshop', 'config_ns_themes_custom_bg_mode', '0', 0),
(0, 'settingluxshop', 'config_themes_custom_bg_img_preview', '', 0),
(0, 'settingluxshop', 'config_themes_custom_bg_attachment', 'scroll', 0),
(0, 'settingluxshop', 'config_themes_custom_bg_position', 'top left', 0),
(0, 'settingluxshop', 'config_themes_custom_bg_repeat', 'repeat', 0),
(0, 'settingluxshop', 'config_ns_themes_custom_bg_mode_color', '', 0),
(0, 'settingluxshop', 'ls_hbannerpc_width', '2048', 0),
(0, 'settingluxshop', 'ls_hbannerpc_height', '60', 0),
(0, 'settingluxshop', 'ls_hbannermob_width', '', 0),
(0, 'settingluxshop', 'ls_hbannermob_height', '', 0),
(0, 'settingluxshop', 'setting_module', '{\"mobile_qrp\":\"0\",\"status_model\":\"1\",\"status_description\":\"0\",\"status_additional_image_hover\":\"1\",\"status_rating\":\"1\",\"status_quantity_reviews\":\"1\",\"status_fastorder\":\"1\",\"status_wishlist\":\"1\",\"status_compare\":\"1\",\"hidden_desc\":\"1\",\"hidden_model\":\"1\",\"hidden_rating\":\"1\",\"hidden_actions\":\"1\"}', 1),
(0, 'settingluxshop', 'ns_new_home_layout_module', '[{\"code\":\"luxshop_megasliderpro.46\",\"position\":\"position_1\",\"sort_order\":\"0\",\"mob_device\":\"1\",\"tablet_device\":\"1\"},{\"code\":\"luxshop_latest_grid.38\",\"position\":\"position_22\",\"sort_order\":\"0\"},{\"code\":\"featured.28\",\"position\":\"position_11\",\"sort_order\":\"0\"},{\"code\":\"latest.49\",\"position\":\"position_12\",\"sort_order\":\"0\"},{\"code\":\"special.48\",\"position\":\"position_13\",\"sort_order\":\"0\",\"mob_device\":\"1\",\"tablet_device\":\"1\"},{\"code\":\"bestseller.47\",\"position\":\"position_14\",\"sort_order\":\"0\",\"mob_device\":\"1\",\"tablet_device\":\"1\"},{\"code\":\"luxshop_banner_pro.32\",\"position\":\"position_15\",\"sort_order\":\"0\"},{\"code\":\"luxshop_productany.34\",\"position\":\"position_15\",\"sort_order\":\"0\"},{\"code\":\"luxshop_product_categorytabs.43\",\"position\":\"position_15\",\"sort_order\":\"0\"},{\"code\":\"luxshop_wallcategory.45\",\"position\":\"position_15\",\"sort_order\":\"0\"},{\"code\":\"luxshop_reviews_store.41\",\"position\":\"position_15\",\"sort_order\":\"0\"}]', 1),
(0, 'settingluxshop', 'show_subcategories', '1', 0),
(0, 'settingluxshop', 'show_subcategories_image', '1', 0),
(0, 'settingluxshop', 'ns_subcat_width', '110', 0),
(0, 'settingluxshop', 'ns_subcat_height', '110', 0),
(0, 'settingluxshop', 'show_attr_cpage', '1', 0),
(0, 'settingluxshop', 'cpage_attr_group_count', '2', 0),
(0, 'settingluxshop', 'cpage_attr_group_item_count', '2', 0),
(0, 'settingluxshop', 'config_price_list_view_on_off', '1', 0),
(0, 'settingluxshop', 'config_catalog_category_description_dropped', '1', 0),
(0, 'settingluxshop', 'config_on_off_category_page_model_product', '1', 0),
(0, 'settingluxshop', 'config_on_off_category_page_description', '0', 0),
(0, 'settingluxshop', 'config_on_off_category_page_slider_additional_image', '1', 0),
(0, 'settingluxshop', 'config_on_off_category_page_rating', '1', 0),
(0, 'settingluxshop', 'config_on_off_category_page_quantity_reviews', '1', 0),
(0, 'settingluxshop', 'config_on_off_category_page_fastorder', '1', 0),
(0, 'settingluxshop', 'config_on_off_category_page_wishlist', '1', 0),
(0, 'settingluxshop', 'config_on_off_category_page_compare', '1', 0),
(0, 'settingluxshop', 'config_price_list_view_on_off_special_page', '1', 0),
(0, 'settingluxshop', 'config_on_off_special_page_model_product', '1', 0),
(0, 'settingluxshop', 'config_on_off_special_page_description', '0', 0),
(0, 'settingluxshop', 'config_on_off_special_page_slider_additional_image', '1', 0),
(0, 'settingluxshop', 'config_on_off_special_page_rating', '1', 0),
(0, 'settingluxshop', 'config_on_off_special_page_quantity_reviews', '1', 0),
(0, 'settingluxshop', 'config_on_off_special_page_fastorder', '1', 0),
(0, 'settingluxshop', 'config_on_off_special_page_wishlist', '1', 0),
(0, 'settingluxshop', 'config_on_off_special_page_compare', '1', 0),
(0, 'settingluxshop', 'show_image_brand', '1', 0),
(0, 'settingluxshop', 'config_price_list_view_on_off_manufacturer_page', '1', 0),
(0, 'settingluxshop', 'config_on_off_manufacturer_page_model_product', '1', 0),
(0, 'settingluxshop', 'config_on_off_manufacturer_page_description', '0', 0),
(0, 'settingluxshop', 'config_on_off_manufacturer_page_slider_additional_image', '1', 0),
(0, 'settingluxshop', 'config_on_off_manufacturer_page_rating', '1', 0),
(0, 'settingluxshop', 'config_on_off_manufacturer_page_quantity_reviews', '1', 0),
(0, 'settingluxshop', 'config_on_off_manufacturer_page_fastorder', '1', 0),
(0, 'settingluxshop', 'config_on_off_manufacturer_page_wishlist', '1', 0),
(0, 'settingluxshop', 'config_on_off_manufacturer_page_compare', '1', 0),
(0, 'settingluxshop', 'config_price_list_view_on_off_search_page', '1', 0),
(0, 'settingluxshop', 'config_on_off_search_page_model_product', '1', 0),
(0, 'settingluxshop', 'config_on_off_search_page_description', '0', 0),
(0, 'settingluxshop', 'config_on_off_search_page_slider_additional_image', '1', 0),
(0, 'settingluxshop', 'config_on_off_search_page_rating', '1', 0),
(0, 'settingluxshop', 'config_on_off_search_page_quantity_reviews', '1', 0),
(0, 'settingluxshop', 'config_on_off_search_page_fastorder', '1', 0),
(0, 'settingluxshop', 'config_on_off_search_page_wishlist', '1', 0),
(0, 'settingluxshop', 'config_on_off_search_page_compare', '1', 0),
(0, 'settingluxshop', 'setting_lp', '{\"status_latest_page\":\"1\",\"status_lp_price_list\":\"1\",\"status_lp_model\":\"1\",\"status_lp_description\":\"1\",\"status_lp_dop_image_hover_cp\":\"1\",\"status_lp_rating\":\"1\",\"status_lp_quantity_reviews\":\"1\",\"status_lp_fastorder\":\"1\",\"status_lp_wishlis\":\"1\",\"status_lp_compare\":\"1\"}', 1),
(0, 'settingluxshop', 'config_day_latest_product', '50000', 0),
(0, 'settingluxshop', 'ns_show_nextprev_prod', '1', 0),
(0, 'settingluxshop', 'fix_top_tabs_mobile', '1', 0),
(0, 'settingluxshop', 'config_fix_left_block', '1', 0),
(0, 'settingluxshop', 'config_fix_right_block', '1', 0),
(0, 'settingluxshop', 'config_short_description_status', '1', 0),
(0, 'settingluxshop', 'config_short_attribut_status', '1', 0),
(0, 'settingluxshop', 'config_short_attribute_show_name', '1', 0),
(0, 'settingluxshop', 'config_short_attribute_group_product', '3', 0),
(0, 'settingluxshop', 'config_short_attribute_group_product_item', '3', 0),
(0, 'settingluxshop', 'config_show_nsproduct_btn_fastorder', '1', 0),
(0, 'settingluxshop', 'config_show_nsproduct_btn_wishlist', '1', 0),
(0, 'settingluxshop', 'config_show_nsproduct_btn_compare', '1', 0),
(0, 'settingluxshop', 'config_on_off_countdown_product', '1', 0),
(0, 'settingluxshop', 'config_on_off_product_sharing_facebock', '0', 0),
(0, 'settingluxshop', 'config_on_off_product_sharing_twitter', '0', 0),
(0, 'settingluxshop', 'config_on_off_product_sharing_googleplus', '0', 0),
(0, 'settingluxshop', 'config_on_off_product_sharing_mailru', '0', 0),
(0, 'settingluxshop', 'config_on_off_product_sharing_vk', '0', 0),
(0, 'settingluxshop', 'config_on_off_product_sharing_ok', '0', 0),
(0, 'settingluxshop', 'config_status_zoom_image', '1', 0),
(0, 'settingluxshop', 'config_status_delivery_options', '0', 0),
(0, 'settingluxshop', 'config_delivery_options_title', '{\"1\":{\"config_delivery_options_title\":\"\"},\"2\":{\"config_delivery_options_title\":\"\"}}', 1),
(0, 'settingluxshop', 'config_design_template_color_theme', '2', 0),
(0, 'settingluxshop', 'config_custom_style_luxshop', '', 0),
(0, 'settingluxshop', 'theme_fonts', 'montserrat', 0),
(0, 'settingluxshop', 'design_icon_menu', '2', 0),
(0, 'settingluxshop', 'type_header', '3', 0),
(0, 'settingluxshop', 'catalog_before_logo', '1', 0),
(0, 'settingluxshop', 'bg_product_image', '1', 0),
(0, 'settingluxshop', 'ls_type_btn', '3', 0),
(0, 'settingluxshop', 'hide_text_addtocart', '1', 0),
(0, 'settingluxshop', 'site_screen_width', '3', 0),
(0, 'settingluxshop', 'fm_logo', 'catalog/ls_files/logo_ls_2.svg', 0),
(0, 'settingluxshop', 'fm_show_btn_go_home', '1', 0),
(0, 'settingluxshop', 'fm_show_logo_hide_search', '1', 0),
(0, 'settingluxshop', 'fm_logo_width', '140', 0),
(0, 'settingluxshop', 'fm_logo_height', '40', 0),
(0, 'settingluxshop', 'fm_type_design', '1', 0),
(0, 'settingluxshop', 'ns_type_sticker', '1', 0),
(0, 'settingluxshop', 'on_off_sticker_special', '1', 0),
(0, 'settingluxshop', 'on_off_percent_discount', '1', 0),
(0, 'settingluxshop', 'config_change_background_sticker_special', '#E6896C', 0),
(0, 'settingluxshop', 'config_change_color_text_sticker_special', '#FFFFFF', 0),
(0, 'settingluxshop', 'config_change_text_sticker_special', '{\"1\":{\"config_change_text_sticker_special\":\"\\u0410\\u043a\\u0446\\u0438\\u044f\"},\"2\":{\"config_change_text_sticker_special\":\"Sale\"}}', 1),
(0, 'settingluxshop', 'config_change_icon_sticker_special', '', 0),
(0, 'settingluxshop', 'config_change_color_icon_sticker_special', '', 0),
(0, 'settingluxshop', 'on_off_sticker_newproduct', '1', 0),
(0, 'settingluxshop', 'config_limit_day_newproduct', '50000', 0),
(0, 'settingluxshop', 'config_change_background_sticker_newproduct', '#6CB5E6', 0),
(0, 'settingluxshop', 'config_change_text_sticker_newproduct', '{\"1\":{\"config_change_text_sticker_newproduct\":\"\\u041d\\u043e\\u0432\\u0438\\u043d\\u043a\\u0430\"},\"2\":{\"config_change_text_sticker_newproduct\":\"New\"}}', 1),
(0, 'settingluxshop', 'config_change_color_text_sticker_newproduct', '#FFFFFF', 0),
(0, 'settingluxshop', 'config_change_icon_sticker_newproduct', '', 0),
(0, 'settingluxshop', 'config_change_color_icon_sticker_newproduct', '', 0),
(0, 'settingluxshop', 'on_off_sticker_popular', '1', 0),
(0, 'settingluxshop', 'config_min_quantity_popular', '50', 0),
(0, 'settingluxshop', 'config_change_background_sticker_popular', '#62CB59', 0),
(0, 'settingluxshop', 'config_change_text_sticker_popular', '{\"1\":{\"config_change_text_sticker_popular\":\"\\u0422\\u043e\\u043f\"},\"2\":{\"config_change_text_sticker_popular\":\"Top\"}}', 1),
(0, 'settingluxshop', 'config_change_color_text_sticker_popular', '#FFFFFF', 0),
(0, 'settingluxshop', 'config_change_icon_sticker_popular', '', 0),
(0, 'settingluxshop', 'config_change_color_icon_sticker_popular', '', 0),
(0, 'settingluxshop', 'on_off_sticker_topbestseller', '1', 0),
(0, 'settingluxshop', 'config_limit_order_product_topbestseller', '1', 0),
(0, 'settingluxshop', 'config_change_background_sticker_topbestseller', '#E6CB6C', 0),
(0, 'settingluxshop', 'config_change_text_sticker_topbestseller', '{\"1\":{\"config_change_text_sticker_topbestseller\":\"\\u0425\\u0438\\u0442\"},\"2\":{\"config_change_text_sticker_topbestseller\":\"Hit\"}}', 1),
(0, 'settingluxshop', 'config_change_color_text_sticker_topbestseller', '#FFFFFF', 0),
(0, 'settingluxshop', 'config_change_icon_sticker_topbestseller', '', 0),
(0, 'settingluxshop', 'config_change_color_icon_sticker_topbestseller', '', 0),
(0, 'settingluxshop', 'show_h_compare', '1', 0),
(0, 'settingluxshop', 'show_h_wishlist', '1', 0),
(0, 'settingluxshop', 'fixed_bar_footer', '1', 0),
(0, 'settingluxshop', 'show_hc_search', '1', 0),
(0, 'settingluxshop', 'header_doptext_status', '1', 0),
(0, 'settingluxshop', 'header_doptext', '{\"1\":{\"text\":\"&lt;p&gt;&lt;span style=&quot;white-space:pre-wrap;&quot;&gt;\\u041f\\u043d-\\u041f\\u0442 \\u0441 09:00 \\u0434\\u043e 18:00, &lt;br&gt;\\u0421\\u0431 \\u0441 10:00 \\u0434\\u043e 15:30, \\u0412\\u0441- \\u0432\\u044b\\u0445\\u043e\\u0434\\u043d\\u043e\\u0439&lt;\\/span&gt;&lt;br&gt;&lt;\\/p&gt;\"},\"2\":{\"text\":\"&lt;p&gt; &lt;span style=&quot;white-space: pre-wrap;&quot;&gt; Mon-Fri from 09:00 to 18:00, &lt;br&gt; Sat from 10:00 to 15:30, Sun - closed &lt;\\/span&gt; &lt;br&gt; &lt;\\/p&gt;\"}}', 1),
(0, 'settingluxshop', 'language_description_info_mob', '{\"1\":{\"text\":\"&lt;p&gt;&lt;span style=&quot;white-space:pre-wrap;&quot;&gt;\\u041f\\u043d-\\u041f\\u0442 \\u0441 09:00 \\u0434\\u043e 18:00, &lt;br&gt;\\u0421\\u0431 \\u0441 10:00 \\u0434\\u043e 15:30, \\u0412\\u0441- \\u0432\\u044b\\u0445\\u043e\\u0434\\u043d\\u043e\\u0439&lt;\\/span&gt;&lt;br&gt;&lt;\\/p&gt;\"},\"2\":{\"text\":\"&lt;p&gt; &lt;span style=&quot;white-space: pre-wrap;&quot;&gt; Mon-Fri from 09:00 to 18:00, &lt;br&gt; Sat from 10:00 to 15:30, Sun - closed &lt;\\/span&gt; &lt;br&gt; &lt;\\/p&gt;\"}}', 1),
(0, 'settingluxshop', 'header_nav_menu_link', '[{\"icon_image\":\"\",\"title\":{\"1\":\"\\u0414\\u043e\\u0441\\u0442\\u0430\\u0432\\u043a\\u0430\",\"2\":\"Delivery\"},\"link\":{\"1\":\"delivery\",\"2\":\"delivery\"},\"popup\":\"0\"},{\"icon_image\":\"\",\"title\":{\"1\":\"\\u041e\\u043f\\u043b\\u0430\\u0442\\u0430\",\"2\":\"Payment\"},\"link\":{\"1\":\"payment\",\"2\":\"payment\"},\"popup\":\"0\"}]', 1),
(0, 'settingluxshop', 'swap_header_blocks', '1', 0),
(0, 'settingluxshop', 'search_word', '{\"1\":{\"text\":\"Apple MacBook Pro M1, Apple iPhone 13 Pro Max, Apple iPad Pro 11\"},\"2\":{\"text\":\"Apple MacBook Pro M1, Apple iPhone 13 Pro Max, Apple iPad Pro 11\"}}', 1),
(0, 'settingluxshop', 'config_phones_header', '[{\"image\":\"\",\"icon\":\"\",\"type\":{\"1\":\"href=&quot;tel:+74951244501&quot; target=&quot;_blank&quot;\",\"2\":\"href=&quot;tel:+74951244501&quot; target=&quot;_blank&quot;\"},\"phone\":{\"1\":\" +7 (495) 124-45-01\",\"2\":\" +7 (495) 124-45-01\"},\"dropdown\":\"1\"},{\"image\":\"\",\"icon\":\"\",\"type\":{\"1\":\"href=&quot;tel:+74951244502&quot; target=&quot;_blank&quot;\",\"2\":\"href=&quot;tel:+74951244502&quot; target=&quot;_blank&quot;\"},\"phone\":{\"1\":\" +7 (495) 124-45-02\",\"2\":\" +7 (495) 124-45-02\"},\"dropdown\":\"1\"},{\"image\":\"\",\"icon\":\"\",\"type\":{\"1\":\"href=&quot;tel:+74951244503&quot; target=&quot;_blank&quot;\",\"2\":\"href=&quot;tel:+74951244503&quot; target=&quot;_blank&quot;\"},\"phone\":{\"1\":\" +7 (495) 124-45-03\",\"2\":\" +7 (495) 124-45-03\"},\"dropdown\":\"0\"},{\"image\":\"\",\"icon\":\"\",\"type\":{\"1\":\"href=&quot;tel:+74951244504&quot; target=&quot;_blank&quot;\",\"2\":\"href=&quot;tel:+74951244504&quot; target=&quot;_blank&quot;\"},\"phone\":{\"1\":\" +7 (495) 124-45-04\",\"2\":\" +7 (495) 124-45-04\"},\"dropdown\":\"0\"},{\"image\":\"catalog\\/ls_files\\/widget_icon\\/iocn_callback.svg\",\"icon\":\"\",\"type\":{\"1\":\"href=&quot;javascript:void(0)&quot; onclick=&quot;get_modal_callbacking();&quot;\",\"2\":\"href=&quot;javascript:void(0)&quot; onclick=&quot;get_modal_callbacking();&quot;\"},\"phone\":{\"1\":\"\\u0417\\u0430\\u043a\\u0430\\u0437\\u0430\\u0442\\u044c \\u0437\\u0432\\u043e\\u043d\\u043e\\u043a\",\"2\":\"\\u0417\\u0430\\u043a\\u0430\\u0437\\u0430\\u0442\\u044c \\u0437\\u0432\\u043e\\u043d\\u043e\\u043a\"},\"dropdown\":\"0\"},{\"image\":\"catalog\\/ls_files\\/widget_icon\\/iocn_mes.svg\",\"icon\":\"\",\"type\":{\"1\":\"href=&quot;https:\\/\\/m.me\\/theme_luxshop&quot; target=&quot;_blank&quot;\",\"2\":\"href=&quot;https:\\/\\/m.me\\/theme_luxshop&quot; target=&quot;_blank&quot;\"},\"phone\":{\"1\":\"Messenger\",\"2\":\"Messenger\"},\"dropdown\":\"0\"},{\"image\":\"catalog\\/ls_files\\/widget_icon\\/iocn_skype.svg\",\"icon\":\"\",\"type\":{\"1\":\"\",\"2\":\"\"},\"phone\":{\"1\":\"\\u041d\\u0430\\u043f\\u0438\\u0441\\u0430\\u0442\\u044c \\u0432 Skype\",\"2\":\"\\u041d\\u0430\\u043f\\u0438\\u0441\\u0430\\u0442\\u044c \\u0432 Skype\"},\"dropdown\":\"0\"},{\"image\":\"catalog\\/ls_files\\/widget_icon\\/iocn_teleg.svg\",\"icon\":\"\",\"type\":{\"1\":\"href=&quot;https:\\/\\/t.me\\/theme_luxshop&quot; target=&quot;_blank&quot;\",\"2\":\"href=&quot;https:\\/\\/t.me\\/theme_luxshop&quot; target=&quot;_blank&quot;\"},\"phone\":{\"1\":\"Telegram\",\"2\":\"Telegram\"},\"dropdown\":\"0\"},{\"image\":\"catalog\\/ls_files\\/widget_icon\\/iocn_viber.svg\",\"icon\":\"\",\"type\":{\"1\":\"\",\"2\":\"\"},\"phone\":{\"1\":\"Viber\",\"2\":\"Viber\"},\"dropdown\":\"0\"},{\"image\":\"catalog\\/ls_files\\/widget_icon\\/iocn_whatsapp.svg\",\"icon\":\"\",\"type\":{\"1\":\"\",\"2\":\"\"},\"phone\":{\"1\":\"WhatsApp\",\"2\":\"WhatsApp\"},\"dropdown\":\"0\"}]', 1),
(0, 'settingluxshop', 'text_after_phone', '{\"1\":{\"text\":\"\"},\"2\":{\"text\":\"\"}}', 1),
(0, 'settingluxshop', 'arbitrary_text', '{\"1\":{\"text\":\"\"},\"2\":{\"text\":\"\"}}', 1),
(0, 'settingluxshop', 'config_ns_footer_counters', '', 0),
(0, 'settingluxshop', 'ns_logo_footer', '', 0),
(0, 'settingluxshop', 'config_phones_footer', '[{\"icon_footer_phone\":\"\",\"type\":{\"1\":\"\",\"2\":\"\"},\"phone_footer\":{\"1\":\"\\u041f\\u043d-\\u041f\\u0442 \\u0441 09:00 \\u0434\\u043e 18:00, \",\"2\":\"Mon-Fri from 09:00 to 18:00, \"}},{\"icon_footer_phone\":\"\",\"type\":{\"1\":\"\",\"2\":\"\"},\"phone_footer\":{\"1\":\"\\u0421\\u0431 \\u0441 10:00 \\u0434\\u043e 15:30, \\u0412\\u0441- \\u0432\\u044b\\u0445\\u043e\\u0434\\u043d\\u043e\\u0439\",\"2\":\"Sat from 10:00 to 15:30, Sunday - closed \"}},{\"icon_footer_phone\":\"\",\"type\":{\"1\":\"\",\"2\":\"\"},\"phone_footer\":{\"1\":\"&lt;span style=&quot;font-size:18px;color:#fff;font-weight:600;&quot;&gt;+7 (495) 124-45-01&lt;\\/span&gt;\",\"2\":\"&lt;span style=&quot;font-size:18px;color:#fff;font-weight:600;&quot;&gt;+7 (495) 124-45-01&lt;\\/span&gt;\"}},{\"icon_footer_phone\":\"\",\"type\":{\"1\":\"\",\"2\":\"\"},\"phone_footer\":{\"1\":\"&lt;span style=&quot;font-size:18px;color:#fff;font-weight:600;&quot;&gt;+7 (495) 124-45-02&lt;\\/span&gt;\",\"2\":\"&lt;span style=&quot;font-size:18px;color:#fff;font-weight:600;&quot;&gt;+7 (495) 124-45-02&lt;\\/span&gt;\"}},{\"icon_footer_phone\":\"\",\"type\":{\"1\":\"\",\"2\":\"\"},\"phone_footer\":{\"1\":\"&lt;span style=&quot;font-size:18px;color:#fff;font-weight:600;&quot;&gt;+7 (495) 124-45-03&lt;\\/span&gt;\",\"2\":\"&lt;span style=&quot;font-size:18px;color:#fff;font-weight:600;&quot;&gt;+7 (495) 124-45-03&lt;\\/span&gt;\"}},{\"icon_footer_phone\":\"\",\"type\":{\"1\":\"\",\"2\":\"\"},\"phone_footer\":{\"1\":\"&lt;span style=&quot;font-size:18px;color:#fff;font-weight:600;&quot;&gt;+7 (495) 124-45-04&lt;\\/span&gt;\",\"2\":\"&lt;span style=&quot;font-size:18px;color:#fff;font-weight:600;&quot;&gt;+7 (495) 124-45-04&lt;\\/span&gt;\"}},{\"icon_footer_phone\":\"\",\"type\":{\"1\":\"\",\"2\":\"\"},\"phone_footer\":{\"1\":\"help.luxshop@gmail.com\",\"2\":\"help.luxshop@gmail.com\"}}]', 1),
(0, 'settingluxshop', 'config_description_store_footer', '{\"1\":{\"config_description_store_footer\":\"\"},\"2\":{\"config_description_store_footer\":\"\"}}', 1),
(0, 'settingluxshop', 'footer_map_status', 'off', 0),
(0, 'settingluxshop', 'config_google_api_map_key', '', 0),
(0, 'settingluxshop', 'config_center_google_map', '', 0),
(0, 'settingluxshop', 'config_zoom_google_map', '', 0),
(0, 'settingluxshop', 'code_map', '', 0),
(0, 'settingluxshop', 'config_on_off_footer_ribbon', '1', 0),
(0, 'settingluxshop', 'config_footer_ribbon', '{\"1\":{\"config_footer_ribbon\":\"LuxShop - \\u0414\\u0435\\u043c\\u043e\\u043d\\u0441\\u0442\\u0440\\u0430\\u0446\\u0438\\u044f \\u0448\\u0430\\u0431\\u043b\\u043e\\u043d\\u0430\"},\"2\":{\"config_footer_ribbon\":\"LuxShop - Template Demonstration \"}}', 1),
(0, 'settingluxshop', 'banner_items_footer', '[{\"icon_type\":\"1\",\"icon_image\":\"\",\"image\":\"catalog\\/ls_files\\/new-file-ns\\/advantage1.svg\",\"title\":{\"1\":\"\\u0411\\u0435\\u0441\\u043f\\u043b\\u0430\\u0442\\u043d\\u0430\\u044f \\u0434\\u043e\\u0441\\u0442\\u0430\\u0432\\u043a\\u0430\",\"2\":\"Free shipping\"},\"description\":{\"1\":\"\\u043e\\u0442 1000 \\u0433\\u0440\\u043d\",\"2\":\"from 1000 UAH\"},\"link\":{\"1\":\"\",\"2\":\"\"},\"popup\":\"0\"},{\"icon_type\":\"1\",\"icon_image\":\"\",\"image\":\"catalog\\/ls_files\\/new-file-ns\\/advantage2.svg\",\"title\":{\"1\":\"\\u0411\\u043e\\u043d\\u0443\\u0441\\u044b \\u0437\\u0430 \\u043f\\u043e\\u043a\\u0443\\u043f\\u043a\\u0443\",\"2\":\"Purchase bonuses\"},\"description\":{\"1\":\"5% \\u043d\\u0430 \\u0412\\u0430\\u0448 \\u0441\\u0447\\u0435\\u0442\",\"2\":\"5% to your account\"},\"link\":{\"1\":\"\",\"2\":\"\"},\"popup\":\"0\"},{\"icon_type\":\"1\",\"icon_image\":\"\",\"image\":\"catalog\\/ls_files\\/new-file-ns\\/advantage3.svg\",\"title\":{\"1\":\"\\u0413\\u0430\\u0440\\u0430\\u043d\\u0442\\u0438\\u0439\\u043d\\u043e\\u0435 \\u043e\\u0431\\u0441\\u043b\\u0443\\u0436\\u0438\\u0432\\u0430\\u043d\\u0438\\u0435\",\"2\":\"Warranty service\"},\"description\":{\"1\":\"\",\"2\":\"\"},\"link\":{\"1\":\"\",\"2\":\"\"},\"popup\":\"0\"},{\"icon_type\":\"1\",\"icon_image\":\"\",\"image\":\"catalog\\/ls_files\\/new-file-ns\\/advantage4.svg\",\"title\":{\"1\":\"\\u0412\\u043e\\u0437\\u0432\\u0440\\u0430\\u0442 \\u0438 \\u043e\\u0431\\u043c\\u0435\\u043d\",\"2\":\"Return and exchange\"},\"description\":{\"1\":\"\\u0432 \\u0442\\u0435\\u0447\\u0435\\u043d\\u0438\\u0438 14 \\u0434\\u043d\\u0435\\u0439\",\"2\":\"within 14 days\"},\"link\":{\"1\":\"\",\"2\":\"\"},\"popup\":\"0\"},{\"icon_type\":\"1\",\"icon_image\":\"\",\"image\":\"catalog\\/ls_files\\/new-file-ns\\/advantage5.svg\",\"title\":{\"1\":\"\\u0421\\u0435\\u0440\\u0442\\u0438\\u0444\\u0438\\u0446\\u0438\\u0440\\u043e\\u0432\\u0430\\u043d\\u043d\\u044b\\u0435 \\u0442\\u043e\\u0432\\u0430\\u0440\\u044b\",\"2\":\"Certified goods\"},\"description\":{\"1\":\"\",\"2\":\"\"},\"link\":{\"1\":\"\",\"2\":\"\"},\"popup\":\"0\"},{\"icon_type\":\"1\",\"icon_image\":\"\",\"image\":\"catalog\\/ls_files\\/new-file-ns\\/advantage6.svg\",\"title\":{\"1\":\"\\u0421\\u043a\\u0438\\u0434\\u043a\\u0438 \\u043f\\u043e \\u043f\\u0440\\u043e\\u0433\\u0440\\u0430\\u043c\\u043c\\u0435 \",\"2\":\"Program discounts\"},\"description\":{\"1\":\"~OLD to New~\",\"2\":\"~OLD to New~\"},\"link\":{\"1\":\"\",\"2\":\"\"},\"popup\":\"0\"}]', 1),
(0, 'settingluxshop', 'footer_column_setting_ns', '{\"column_1\":{\"1\":{\"icon_image\":\"\",\"name_column\":\"\\u0418\\u043d\\u0444\\u043e\\u0440\\u043c\\u0430\\u0446\\u0438\\u044f\"},\"2\":{\"icon_image\":\"\",\"name_column\":\"Information\"}},\"column_2\":{\"1\":{\"icon_image\":\"\",\"name_column\":\"\\u0414\\u043e\\u043f\\u043e\\u043b\\u043d\\u0438\\u0442\\u0435\\u043b\\u044c\\u043d\\u043e\"},\"2\":{\"icon_image\":\"\",\"name_column\":\"Extras\"}},\"column_3\":{\"1\":{\"icon_image\":\"\",\"name_column\":\"\\u041b\\u0438\\u0447\\u043d\\u044b\\u0439 \\u043a\\u0430\\u0431\\u0438\\u043d\\u0435\\u0442\"},\"2\":{\"icon_image\":\"\",\"name_column\":\"My Account\"}},\"column_4\":{\"1\":{\"icon_image\":\"\",\"name_column\":\"\\u041a\\u0430\\u0442\\u0435\\u0433\\u043e\\u0440\\u0438\\u0438\"},\"2\":{\"icon_image\":\"\",\"name_column\":\"Categories\"}},\"link_manufacturer\":\"1\",\"link_voucher\":\"1\",\"link_affiliate\":\"1\",\"link_special\":\"1\",\"link_account\":\"1\",\"link_order\":\"1\",\"link_wishlist\":\"1\",\"link_newsletter\":\"1\",\"link_contact\":\"1\",\"link_return\":\"1\",\"1\":{\"footer_links\":{\"1\":{\"title\":\"Apple Store\",\"link\":\"apple-store\",\"column_link\":\"4\"},\"2\":{\"title\":\"Game Zone\",\"link\":\"game-zone\",\"column_link\":\"4\"},\"3\":{\"title\":\"\\u0410\\u0443\\u0434\\u0438\\u043e \\u0442\\u0435\\u0445\\u043d\\u0438\\u043a\\u0430\",\"link\":\"audio-tehnika\",\"column_link\":\"4\"},\"4\":{\"title\":\"\\u0411\\u044b\\u0442\\u043e\\u0432\\u0430\\u044f \\u0442\\u0435\\u0445\\u043d\\u0438\\u043a\\u0430\",\"link\":\"bytovaja-tehnika\",\"column_link\":\"4\"},\"5\":{\"title\":\"\\u0413\\u0430\\u0434\\u0436\\u0435\\u0442\\u044b\",\"link\":\"gadzhety\",\"column_link\":\"4\"},\"6\":{\"title\":\"\\u041a\\u043e\\u043c\\u043f\\u044c\\u044e\\u0442\\u0435\\u0440\\u044b\",\"link\":\"kompjutery\",\"column_link\":\"4\"},\"7\":{\"title\":\"\\u041d\\u043e\\u0443\\u0442\\u0431\\u0443\\u043a\\u0438 \\u0438 \\u043f\\u043b\\u0430\\u043d\\u0448\\u0435\\u0442\\u044b\",\"link\":\"noutbuki-i-planshety\",\"column_link\":\"4\"},\"8\":{\"title\":\"\\u0422\\u0412, \\u0412\\u0438\\u0434\\u0435\\u043e, \\u0424\\u043e\\u0442\\u043e\",\"link\":\"tv-video-foto\",\"column_link\":\"4\"}}},\"2\":{\"footer_links\":{\"1\":{\"title\":\"Apple Store\",\"link\":\"apple-store\",\"column_link\":\"4\"},\"2\":{\"title\":\"Game Zone\",\"link\":\"game-zone\",\"column_link\":\"4\"},\"3\":{\"title\":\"Audio technology\",\"link\":\"audio-tehnika\",\"column_link\":\"4\"},\"4\":{\"title\":\"Appliances\",\"link\":\"bytovaja-tehnika\",\"column_link\":\"4\"},\"5\":{\"title\":\"Gadgets\",\"link\":\"gadzhety\",\"column_link\":\"4\"},\"6\":{\"title\":\"Computers\",\"link\":\"kompjutery\",\"column_link\":\"4\"},\"7\":{\"title\":\"Laptops &amp; Tablets\",\"link\":\"noutbuki-i-planshety\",\"column_link\":\"4\"},\"8\":{\"title\":\"TV, Video, Photo\",\"link\":\"tv-video-foto\",\"column_link\":\"4\"}}}}', 1),
(0, 'settingluxshop', 'config_social_footer', '[{\"image_footer_social\":\"\",\"social_icon_footer\":\"fa fa-whatsapp\",\"bg_hover_icon\":\"#4BD428\",\"social_link_footer\":\"\"},{\"image_footer_social\":\"\",\"social_icon_footer\":\"fa fa-facebook\",\"bg_hover_icon\":\"#4E2FB5\",\"social_link_footer\":\"\"},{\"image_footer_social\":\"\",\"social_icon_footer\":\"fa fa-odnoklassniki-square\",\"bg_hover_icon\":\"#FF792B\",\"social_link_footer\":\"\"},{\"image_footer_social\":\"\",\"social_icon_footer\":\"fa fa-youtube-square\",\"bg_hover_icon\":\"#FF2121\",\"social_link_footer\":\"\"},{\"image_footer_social\":\"\",\"social_icon_footer\":\"fa fa-vk\",\"bg_hover_icon\":\"#4576FF\",\"social_link_footer\":\"\"}]', 1),
(0, 'settingluxshop', 'config_on_off_shopping_cart_hover', '0', 0),
(0, 'settingluxshop', 'config_on_off_shopping_cart_click', '0', 0),
(0, 'settingluxshop', 'config_shopping_cart_after_add', '2', 0),
(0, 'settingluxshop', 'type_shop_cart', '0', 0),
(0, 'settingluxshop', 'ls_contacts', '{\"1\":{\"address\":\"\\u0433.\\u0425\\u0430\\u0440\\u044c\\u043a\\u043e\\u0432 \\u0443\\u043b. \\u0413\\u0435\\u0440\\u043e\\u0435\\u0432 \\u0442\\u0440\\u0443\\u0434\\u0430 9, 2 \\u044d\\u0442\\u0430\\u0436, \\u043e\\u0444\\u0438\\u0441 13\",\"email\":\"luxshop@gmail.com\",\"phone\":\"+7 (495) 124-45-01,\\r\\n+7 (495) 124-45-02,\\r\\n+7 (495) 124-45-03,\\r\\n+7 (495) 124-45-04,\",\"working_time\":\"\\u041f\\u043d-\\u041f\\u0442 \\u0441 09:00 \\u0434\\u043e 18:00\\r\\n\\u0421\\u0431 \\u0441 10:00 \\u0434\\u043e 15:30\\r\\n\\u0412\\u0441- \\u0432\\u044b\\u0445\\u043e\\u0434\\u043d\\u043e\\u0439\",\"map_code\":\"&lt;iframe src=&quot;https:\\/\\/www.google.com\\/maps\\/embed?pb=!1m18!1m12!1m3!1d2563.32065678716!2d36.33622651571592!3d50.02408707941882!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4127a762f219d2b1%3A0x42a6d742aa7427cc!2z0YPQuy4g0JPQtdGA0L7QtdCyINCi0YDRg9C00LAsIDksINCl0LDRgNGM0LrQvtCyLCDQpdCw0YDRjNC60L7QstGB0LrQsNGPINC-0LHQu9Cw0YHRgtGMLCA2MTAwMA!5e0!3m2!1sru!2sua!4v1636467980941!5m2!1sru!2sua&quot; width=&quot;100%&quot; height=&quot;500&quot; style=&quot;border:1px solid #F8F9FA;&quot; allowfullscreen=&quot;&quot; loading=&quot;lazy&quot;&gt;&lt;\\/iframe&gt;\",\"image\":\"&lt;b&gt;Notice&lt;\\/b&gt;: Undefined offset: 1 in &lt;b&gt;\\/var\\/www\\/luxshop\\/data\\/www\\/luxshop.waterfilter.in.ua\\/admin\\/view\\/template\\/extension\\/module\\/luxshop\\/contact_page.tpl&lt;\\/b&gt; on line &lt;b&gt;42&lt;\\/b&gt;\"},\"2\":{\"address\":\"Kharkiv st. Heroes of Labor 9, 2nd floor, office 13\",\"email\":\"luxshop@gmail.com\",\"phone\":\"+7 (495) 124-45-01,\\r\\n+7 (495) 124-45-02,\\r\\n+7 (495) 124-45-03,\\r\\n+7 (495) 124-45-04,\",\"working_time\":\"Mon-Fri from 09:00 to 18:00\\r\\nSat from 10:00 to 15:30\\r\\nSun - day off\",\"map_code\":\"&lt;iframe src=&quot;https:\\/\\/www.google.com\\/maps\\/embed?pb=!1m18!1m12!1m3!1d2563.32065678716!2d36.33622651571592!3d50.02408707941882!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4127a762f219d2b1%3A0x42a6d742aa7427cc!2z0YPQuy4g0JPQtdGA0L7QtdCyINCi0YDRg9C00LAsIDksINCl0LDRgNGM0LrQvtCyLCDQpdCw0YDRjNC60L7QstGB0LrQsNGPINC-0LHQu9Cw0YHRgtGMLCA2MTAwMA!5e0!3m2!1sru!2sua!4v1636467980941!5m2!1sru!2sua&quot; width=&quot;100%&quot; height=&quot;500&quot; style=&quot;border:1px solid #F8F9FA;&quot; allowfullscreen=&quot;&quot; loading=&quot;lazy&quot;&gt;&lt;\\/iframe&gt;\",\"image\":\"&lt;b&gt;Notice&lt;\\/b&gt;: Undefined offset: 2 in &lt;b&gt;\\/var\\/www\\/luxshop\\/data\\/www\\/luxshop.waterfilter.in.ua\\/admin\\/view\\/template\\/extension\\/module\\/luxshop\\/contact_page.tpl&lt;\\/b&gt; on line &lt;b&gt;42&lt;\\/b&gt;\"}}', 1),
(0, 'settingluxshop', 'ls_micsrodata', '{\"city\":\"\\u0433.\\u0425\\u0430\\u0440\\u044c\\u043a\\u043e\\u0432\",\"address\":\" \\u0443\\u043b. \\u0413\\u0435\\u0440\\u043e\\u0435\\u0432 \\u0442\\u0440\\u0443\\u0434\\u0430 9, 2 \\u044d\\u0442\\u0430\\u0436, \\u043e\\u0444\\u0438\\u0441 13\",\"postcode\":\"61879\",\"phones\":\"+7 (495) 124-45-01, +7 (495) 124-45-02, +7 (495) 124-45-03\",\"email\":\"luxshop@gmail.com\",\"social\":\"\"}', 1),
(0, 'settingluxshop', 'ls_microdata_status', '1', 0),
(0, 'settingluxshop', 'config_additional_settings_luxshop', '{\"quantity_btn_module\":\"1\",\"quantity_btn_page\":\"1\",\"quantity_multiple\":\"0\",\"price_recalc\":\"0\"}', 1),
(0, 'settingluxshop', 'nst_data', '{\"defaut_display_view\":\"grid\",\"lazyload_page\":\"0\",\"lazyload_module\":\"0\",\"lazyload_image\":\"\",\"header_bg_mode\":\"0\",\"header_bg_img\":\"\",\"header_bg_mode_color\":\"\",\"header_bg_position\":\"top left\",\"header_bg_repeat\":\"repeat\",\"bg_mode_pos_2\":\"0\",\"img_pos_2\":\"\",\"bg_mode_color_pos_2\":\"\",\"title_color_pos_2\":\"\",\"bg_mode_pos_11\":\"0\",\"img_pos_11\":\"\",\"bg_mode_color_pos_11\":\"\",\"title_color_pos_11\":\"\",\"bg_mode_pos_15\":\"0\",\"img_pos_15\":\"\",\"bg_mode_color_pos_15\":\"\",\"title_color_pos_15\":\"\",\"bg_mode_pos_22\":\"0\",\"img_pos_22\":\"\",\"bg_mode_color_pos_22\":\"\",\"title_color_pos_22\":\"\",\"hbannerpc\":{\"1\":{\"image\":\"catalog\\/ls_files\\/top_banner_ls.png\",\"bg\":\"#000000\",\"link\":\"new_apple\"},\"2\":{\"image\":\"catalog\\/ls_files\\/en_top_banner_ls.png\",\"bg\":\"#000000\",\"link\":\"new_apple\"}},\"hbannermob\":{\"1\":{\"image\":\"\",\"bg\":\"\",\"link\":\"\"},\"2\":{\"image\":\"\",\"bg\":\"\",\"link\":\"\"}}}', 1),
(0, 'settingluxshop', 'config_special_timer_position', '1', 0),
(0, 'settingluxshop', 'config_show_options_required_page', '0', 0),
(0, 'settingluxshop', 'config_show_options_required_module', '0', 0),
(0, 'settingluxshop', 'config_show_options_page', '0', 0),
(0, 'settingluxshop', 'config_show_options_module', '0', 0),
(0, 'settingluxshop', 'config_disable_fastorder_button', '1', 0),
(0, 'settingluxshop', 'config_show_stock_status', '1', 0),
(0, 'settingluxshop', 'config_minify_css', '0', 0),
(0, 'settingluxshop', 'config_minify_js', '0', 0),
(0, 'settingluxshop', 'config_disable_cart_button', '1', 0),
(0, 'settingluxshop', 'config_change_text_cart_button_out_of_stock', '1', 0),
(0, 'settingluxshop', 'config_disable_cart_button_text', '{\"1\":{\"disable_cart_button_text\":\"\\u041f\\u0440\\u043e\\u0434\\u0430\\u043d\\u043e\"},\"2\":{\"disable_cart_button_text\":\"Out off Stock\"}}', 1);


DELETE FROM `oc_setting` WHERE `code` = 'theme_luxshop';
INSERT INTO `oc_setting` (`store_id`, `code`, `key`, `value`, `serialized`) VALUES
(0, 'theme_luxshop', 'theme_luxshop_status', '1', 0),
(0, 'theme_luxshop', 'theme_luxshop_product_limit', '15', 0),
(0, 'theme_luxshop', 'theme_luxshop_product_description_length', '100', 0),
(0, 'theme_luxshop', 'theme_luxshop_image_logo_width', '140', 0),
(0, 'theme_luxshop', 'theme_luxshop_image_logo_height', '40', 0),
(0, 'theme_luxshop', 'theme_luxshop_image_category_width', '80', 0),
(0, 'theme_luxshop', 'theme_luxshop_image_category_height', '80', 0),
(0, 'theme_luxshop', 'theme_luxshop_image_manufacturer_width', '80', 0),
(0, 'theme_luxshop', 'theme_luxshop_image_manufacturer_height', '80', 0),
(0, 'theme_luxshop', 'theme_luxshop_image_thumb_width', '400', 0),
(0, 'theme_luxshop', 'theme_luxshop_image_thumb_height', '400', 0),
(0, 'theme_luxshop', 'theme_luxshop_image_popup_width', '600', 0),
(0, 'theme_luxshop', 'theme_luxshop_image_popup_height', '600', 0),
(0, 'theme_luxshop', 'theme_luxshop_image_product_width', '228', 0),
(0, 'theme_luxshop', 'theme_luxshop_image_product_height', '228', 0),
(0, 'theme_luxshop', 'theme_luxshop_image_additional_width', '74', 0),
(0, 'theme_luxshop', 'theme_luxshop_image_additional_height', '74', 0),
(0, 'theme_luxshop', 'theme_luxshop_image_related_width', '80', 0),
(0, 'theme_luxshop', 'theme_luxshop_image_related_height', '80', 0),
(0, 'theme_luxshop', 'theme_luxshop_image_compare_width', '90', 0),
(0, 'theme_luxshop', 'theme_luxshop_image_compare_height', '90', 0),
(0, 'theme_luxshop', 'theme_luxshop_image_wishlist_width', '47', 0),
(0, 'theme_luxshop', 'theme_luxshop_image_wishlist_height', '47', 0),
(0, 'theme_luxshop', 'theme_luxshop_image_cart_width', '47', 0),
(0, 'theme_luxshop', 'theme_luxshop_image_cart_height', '47', 0),
(0, 'theme_luxshop', 'theme_luxshop_image_location_width', '268', 0),
(0, 'theme_luxshop', 'theme_luxshop_image_location_height', '50', 0);


CREATE TABLE IF NOT EXISTS `oc_megasliderpro`(
`megasliderpro_id` int(11) NOT NULL AUTO_INCREMENT,
`name` varchar(64) NOT NULL,
`status` tinyint(1) NOT NULL,
`delay` int(11) DEFAULT NULL,
`hover` tinyint(1) DEFAULT NULL,
`nextback` tinyint(1) DEFAULT NULL,
`contrl` tinyint(1) DEFAULT NULL,
`effect` varchar(64) NOT NULL,
PRIMARY KEY (`megasliderpro_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

CREATE TABLE IF NOT EXISTS `oc_megasliderpro`(
`megasliderpro_id` int(11) NOT NULL AUTO_INCREMENT,
`name` varchar(64) NOT NULL,
`status` tinyint(1) NOT NULL,
`delay` int(11) DEFAULT NULL,
`hover` tinyint(1) DEFAULT NULL,
`nextback` tinyint(1) DEFAULT NULL,
`contrl` tinyint(1) DEFAULT NULL,
`effect` varchar(64) NOT NULL,
PRIMARY KEY (`megasliderpro_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

CREATE TABLE IF NOT EXISTS `oc_megasliderpro_image` (
`megasliderpro_image_id` int(11) NOT NULL AUTO_INCREMENT,
`megasliderpro_id` int(11) NOT NULL,
`type` int(11) NOT NULL,
`sort_order` int(11) NOT NULL,
PRIMARY KEY (`megasliderpro_image_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;


CREATE TABLE IF NOT EXISTS `oc_megasliderpro_image_description` (
`megasliderpro_image_id` int(11) NOT NULL,
`language_id` int(11) NOT NULL,
`megasliderpro_id` int(11) NOT NULL,
`title` varchar(255) NOT NULL,
`sub_title` text DEFAULT NULL,
`bg_title` varchar(64) DEFAULT NULL,
`color_title` varchar(64) DEFAULT NULL,
`bg_sub_title` varchar(64) DEFAULT NULL,
`color_sub_title` varchar(64) DEFAULT NULL,
`opacity_bg_title` varchar(64) DEFAULT NULL,
`opacity_bg_sub_title` varchar(64) DEFAULT NULL,
`effect_title` varchar(64) DEFAULT NULL,
`effect_sub_title` varchar(64) DEFAULT NULL,
`effect_description_title` varchar(64) DEFAULT NULL,
`description` text,
`price` DECIMAL(15,4) DEFAULT 0,
`price_bg` VARCHAR(64),
`link` text NOT NULL,
`image` text NOT NULL,
`small_image` text NOT NULL,
PRIMARY KEY (`megasliderpro_image_id`,`language_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

TRUNCATE TABLE `oc_megasliderpro`;
INSERT INTO `oc_megasliderpro` (`megasliderpro_id`, `name`, `status`, `delay`, `hover`, `nextback`, `contrl`, `effect`) VALUES
(1, 'Главная модуль слайдер pro', 1, 10000, 1, 1, 1, 'fade');

TRUNCATE TABLE `oc_megasliderpro_image`;
INSERT INTO `oc_megasliderpro_image` (`megasliderpro_image_id`, `megasliderpro_id`, `type`, `sort_order`) VALUES
(18, 1, 1, 3),
(17, 1, 2, 2),
(16, 1, 1, 1);

TRUNCATE TABLE `oc_megasliderpro_image_description`;
INSERT INTO `oc_megasliderpro_image_description` (`megasliderpro_image_id`, `language_id`, `megasliderpro_id`, `title`, `sub_title`, `bg_title`, `color_title`, `bg_sub_title`, `color_sub_title`, `opacity_bg_title`, `opacity_bg_sub_title`, `effect_title`, `effect_sub_title`, `effect_description_title`, `description`, `price`, `price_bg`, `link`, `image`, `small_image`) VALUES
(18, 1, 1, 'Apple iPad Pro M1', 'Чип M1. iPad Pro c чипом M1 — самый быстрый iPad. Он разработан таким образом, чтобы уникальные технологии в чипе M1 — например, передовой процессор обработки сигнала и архитектура объединённой памяти — полностью раскрыли свой потенциал.', '', '', '', '', '1', '1', 'slideInDown', 'slideInLeft', 'no_select', '', 47999.0000, '', '', 'catalog/ls_files/ms_image/ms_slide_1.png', ''),
(18, 2, 1, 'Apple iPad Pro M1', 'Chip M1. iPad Pro with M1 chip is the fastest iPad. It is designed so that the unique technologies in the M1 chip - such as advanced signal processing and shared memory architecture - reach their full potential.', '', '', '', '', '1', '1', 'no_select', 'no_select', 'no_select', '', 47999.0000, '', '', 'catalog/ls_files/ms_image/ms_slide_1.png', ''),
(17, 1, 1, 'Apple MacBook Pro M1 Max Chip', 'Вы можете выбрать мощный чип M1 Pro или ещё более мощный M1 Max — для максимально сложных задач.', '', '', '', '', '1', '1', 'fadeInUp', 'fadeInLeft', 'no_select', '', 122999.0000, '', '', 'catalog/ls_files/ms_image/ms_slide_2.png', ''),
(17, 2, 1, 'Apple MacBook Pro M1 Max Chip', 'You can choose the powerful M1 Pro chip or the even more powerful M1 Max for the most demanding tasks.', '', '', '', '', '1', '1', 'no_select', 'no_select', 'no_select', '', 122999.0000, '', '', 'catalog/ls_files/ms_image/ms_slide_2.png', ''),
(16, 1, 1, 'Apple iPad mini 8.3&quot; 64GB', 'Восхитительно мощно. Удивительно компактно. Мощный чип A15 Bionic с системой Neural Engine', '', '', '', '', '1', '1', 'slideInDown', 'slideInRight', 'no_select', '', 17999.0000, '', '', 'catalog/ls_files/ms_image/ms_slide_3.png', ''),
(16, 2, 1, 'Apple iPad mini 8.3&quot; 64GB', 'Delightfully powerful. Amazingly compact. Powerful A15 Bionic Chip with Neural Engine', '', '', '', '', '1', '1', 'no_select', 'no_select', 'no_select', '', 17999.0000, '', '', 'catalog/ls_files/ms_image/ms_slide_3.png', '');


CREATE TABLE IF NOT EXISTS `oc_megamenuvh` (
`megamenu_id` int(11) NOT NULL AUTO_INCREMENT,
`namemenu` text NOT NULL,
`dop_info_vm` text NOT NULL,
`additional_menu` varchar(45) NOT NULL,
`link` text NOT NULL,
`menu_type` varchar(45) NOT NULL,
`status` tinyint(1) NOT NULL DEFAULT '1',
`sticker_parent` varchar(255) NOT NULL,
`sticker_parent_bg` varchar(255) NOT NULL,
`spctext` varchar(255) NOT NULL,
`sort_menu` int(3) NOT NULL DEFAULT '0',
`image` varchar(255) NOT NULL,
`image_hover` varchar(255) NOT NULL,
`informations_list` longtext NOT NULL,
`manufacturers_setting` longtext NOT NULL,
`products_setting` longtext NOT NULL,
`link_setting` tinyint(1) NOT NULL,
`category_setting` longtext NOT NULL,
`html_setting` longtext NOT NULL,
`freelinks_setting` longtext NOT NULL,
`use_add_html` tinyint(1) NOT NULL,
`add_html` longtext NOT NULL,
PRIMARY KEY (`megamenu_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

TRUNCATE TABLE `oc_megamenuvh`;
INSERT INTO `oc_megamenuvh` (`megamenu_id`, `namemenu`, `dop_info_vm`, `additional_menu`, `link`, `menu_type`, `status`, `sticker_parent`, `sticker_parent_bg`, `spctext`, `sort_menu`, `image`, `image_hover`, `informations_list`, `manufacturers_setting`, `products_setting`, `link_setting`, `category_setting`, `html_setting`, `freelinks_setting`, `use_add_html`, `add_html`) VALUES
(18, '{\"1\":\"MP3 \\u041f\\u043b\\u0435\\u0435\\u0440\\u044b\",\"2\":\"MP3 Players\"}', '', 'left', '{\"1\":\"mp3-players\",\"2\":\"mp3-players\"}', 'category', 1, '\"\"', '', '', 7, '', '', '', '', '', 0, '{\"variant_category\":\"simple\",\"show_sub_category\":\"1\",\"category_img_width\":\"50\",\"category_img_height\":\"50\",\"category_list\":[\"43\",\"44\",\"47\",\"48\",\"49\",\"50\",\"51\",\"52\",\"53\",\"54\",\"55\",\"56\",\"38\",\"37\",\"39\",\"40\",\"41\",\"42\"]}', '', '', 0, ''),
(17, '{\"1\":\"\\u041a\\u0430\\u043c\\u0435\\u0440\\u044b\",\"2\":\"Cameras\"}', '', 'left', '{\"1\":\"camera\",\"2\":\"camera\"}', 'category', 1, '\"\"', '', '', 6, '', '', '', '', '', 0, '{\"variant_category\":\"simple\",\"show_sub_category\":\"1\",\"category_img_width\":\"50\",\"category_img_height\":\"50\",\"category_list\":[]}', '', '', 0, ''),
(16, '{\"1\":\"\\u0422\\u0435\\u043b\\u0435\\u0444\\u043e\\u043d\\u044b \\u0438 PDA\",\"2\":\"Phones &amp; PDAs\"}', '', 'left', '{\"1\":\"smartphone\",\"2\":\"smartphone\"}', 'category', 1, '\"\"', '', '', 5, '', '', '', '', '', 0, '{\"variant_category\":\"simple\",\"show_sub_category\":\"1\",\"category_img_width\":\"50\",\"category_img_height\":\"50\",\"category_list\":[]}', '', '', 0, ''),
(15, '{\"1\":\"\\u041f\\u0440\\u043e\\u0433\\u0440\\u0430\\u043c\\u043d\\u043e\\u0435 \\u043e\\u0431\\u0435\\u0441\\u043f\\u0435\\u0447\\u0435\\u043d\\u0438\\u0435\",\"2\":\"Software\"}', '', 'left', '{\"1\":\"software\",\"2\":\"software\"}', 'category', 1, '\"\"', '', '', 4, '', '', '', '', '', 0, '{\"variant_category\":\"simple\",\"show_sub_category\":\"1\",\"category_img_width\":\"50\",\"category_img_height\":\"50\",\"category_list\":[]}', '', '', 0, ''),
(14, '{\"1\":\"\\u041f\\u043b\\u0430\\u043d\\u0448\\u0435\\u0442\\u044b\",\"2\":\"Tablets\"}', '', 'left', '{\"1\":\"tablet\",\"2\":\"tablet\"}', 'category', 1, '\"\"', '', '', 3, '', '', '', '', '', 0, '{\"variant_category\":\"simple\",\"show_sub_category\":\"1\",\"category_img_width\":\"50\",\"category_img_height\":\"50\",\"category_list\":[]}', '', '', 0, ''),
(13, '{\"1\":\"\\u041a\\u043e\\u043c\\u043f\\u043e\\u043d\\u0435\\u043d\\u0442\\u044b\",\"2\":\"Components\"}', '', 'left', '{\"1\":\"component\",\"2\":\"component\"}', 'category', 1, '\"\"', '', '', 2, '', '', '', '', '', 0, '{\"variant_category\":\"simple\",\"show_sub_category\":\"1\",\"category_img_width\":\"50\",\"category_img_height\":\"50\",\"category_list\":[\"32\",\"28\",\"29\",\"30\",\"31\"]}', '', '', 0, ''),
(11, '{\"1\":\"\\u041a\\u043e\\u043c\\u043f\\u044c\\u044e\\u0442\\u0435\\u0440\\u044b\",\"2\":\"Desktops\"}', '', 'left', '{\"1\":\"desktops\",\"2\":\"desktops\"}', 'category', 1, '\"\"', '', '', 0, '', '', '', '', '', 0, '{\"variant_category\":\"simple\",\"show_sub_category\":\"1\",\"category_img_width\":\"50\",\"category_img_height\":\"50\",\"category_list\":[\"26\",\"27\"]}', '', '', 0, ''),
(12, '{\"1\":\"\\u041d\\u043e\\u0443\\u0442\\u0431\\u0443\\u043a\\u0438\",\"2\":\"Laptops &amp; Notebooks\"}', '', 'left', '{\"1\":\"laptop-notebook\",\"2\":\"laptop-notebook\"}', 'category', 1, '\"\"', '', '', 1, '', '', '', '', '', 0, '{\"variant_category\":\"simple\",\"show_sub_category\":\"1\",\"category_img_width\":\"50\",\"category_img_height\":\"50\",\"category_list\":[\"46\",\"45\"]}', '', '', 0, ''),
(9, '{\"1\":\"\\u041d\\u043e\\u0432\\u0438\\u043d\\u043a\\u0438\",\"2\":\"Latest\"}', '{\"1\":\"\",\"2\":\"\"}', 'left', '{\"1\":\"index.php?route=product\\/luxshop_latestpage\",\"2\":\"index.php?route=product\\/luxshop_latestpage\"}', 'link', 1, '{\"1\":\"\",\"2\":\"\"}', 'FFFFFF', 'FFFFFF', 0, '', '', '', '', '', 0, '', '', '', 0, '{\"1\":\"\",\"2\":\"\"}');

DELETE FROM `oc_setting` WHERE `code` = 'megamenu_setting';
INSERT INTO `oc_setting` (`store_id`, `code`, `key`, `value`, `serialized`) VALUES
(0, 'megamenu_setting', 'megamenu_setting', '{\"status\":\"1\",\"main_menu_mask\":\"0\",\"fixed_panel_top\":\"1\",\"horizontal_menu_width\":\"1\"}', 1);


TRUNCATE TABLE `oc_layout_module`;
INSERT INTO `oc_layout_module` (`layout_module_id`, `layout_id`, `code`, `position`, `sort_order`, `pc_device`, `tablet_device`, `mob_device`) VALUES
(2, 4, '0', 'content_top', 0, 0, 0, 0),
(3, 4, '0', 'content_top', 1, 0, 0, 0),
(20, 5, '0', 'column_left', 2, 0, 0, 0),
(69, 10, 'affiliate', 'column_right', 1, 0, 0, 0),
(68, 6, 'account', 'column_right', 1, 0, 0, 0),
(123, 1, 'luxshop_easybanner.33', 'content_top', 1, 0, 0, 0),
(120, 3, 'luxshop_productany.34', 'column_left', 0, 0, 0, 0),
(121, 3, 'luxshop_productviewed.44', 'column_left', 1, 0, 0, 0),
(122, 1, 'luxshop_banner_blocks.35', 'content_top', 0, 0, 0, 0);

TRUNCATE TABLE `oc_module`;
INSERT INTO `oc_module` (`module_id`, `name`, `code`, `setting`) VALUES
(47, 'Хит продаж главная', 'bestseller', '{\"name\":\"\\u0425\\u0438\\u0442 \\u043f\\u0440\\u043e\\u0434\\u0430\\u0436 \\u0433\\u043b\\u0430\\u0432\\u043d\\u0430\\u044f\",\"limit\":\"6\",\"width\":\"75\",\"height\":\"75\",\"status\":\"1\"}'),
(29, 'Карусель на главной странице', 'carousel', '{\"name\":\"Карусель на главной странице\",\"banner_id\":\"8\",\"width\":\"130\",\"height\":\"100\",\"status\":\"1\"}'),
(28, 'Рекомендуемые на главной странице', 'featured', '{\"name\":\"\\u0420\\u0435\\u043a\\u043e\\u043c\\u0435\\u043d\\u0434\\u0443\\u0435\\u043c\\u044b\\u0435 \\u043d\\u0430 \\u0433\\u043b\\u0430\\u0432\\u043d\\u043e\\u0439 \\u0441\\u0442\\u0440\\u0430\\u043d\\u0438\\u0446\\u0435\",\"product_name\":\"\",\"product\":[\"43\",\"40\",\"42\",\"30\",\"48\",\"34\"],\"limit\":\"6\",\"width\":\"75\",\"height\":\"75\",\"status\":\"1\"}'),
(27, 'Слайдшоу на главной странице', 'slideshow', '{\"name\":\"Слайдшоу на главной странице\",\"banner_id\":\"7\",\"width\":\"1140\",\"height\":\"380\",\"status\":\"1\"}'),
(31, 'Баннер Продукция HP', 'banner', '{\"name\":\"Баннер Продукция HP\",\"banner_id\":\"6\",\"width\":\"182\",\"height\":\"182\",\"status\":\"1\"}'),
(32, 'Banner Pro', 'luxshop_banner_pro', '{\"status\":\"1\",\"name\":\"Banner Pro\",\"quantity_column\":\"6\",\"banner_pro\":{\"1\":{\"title\":{\"1\":\"\\u041a\\u0432\\u0430\\u0434\\u0440\\u043e\\u043a\\u043e\\u043f\\u0442\\u0435\\u0440 DJI Phantom 4 Pro\",\"2\":\"DJI Phantom 4 Pro Quadcopter\"},\"color_title\":{\"1\":\"\",\"2\":\"\"},\"description\":{\"1\":\"\\u041e\\u0431\\u043d\\u0430\\u0440\\u0443\\u0436\\u0435\\u043d\\u0438\\u0435 \\u043f\\u0440\\u0435\\u043f\\u044f\\u0442\\u0441\\u0442\\u0432\\u0438\\u0439 \\u0432 5 \\u043d\\u0430\\u043f\\u0440\\u0430\\u0432\\u043b\\u0435\\u043d\\u0438\\u044f\\u0445\",\"2\":\"Obstacle detection in 5 directions \"},\"color_desc\":{\"1\":\"\",\"2\":\"\"},\"bg_block\":{\"1\":\"\",\"2\":\"\"},\"image\":{\"1\":\"catalog\\/ls_files\\/banner_pro\\/Frame 125.png\",\"2\":\"catalog\\/ls_files\\/banner_pro\\/Frame 125.png\"},\"image_width\":{\"1\":\"228\",\"2\":\"228\"},\"image_height\":{\"1\":\"190\",\"2\":\"190\"},\"link\":{\"1\":\"\",\"2\":\"\"},\"price_from\":{\"1\":\"\",\"2\":\"\"},\"price\":{\"1\":\"55899\",\"2\":\"55899\"},\"price_color\":{\"1\":\"\",\"2\":\"\"}},\"2\":{\"title\":{\"1\":\"Mortal Kombar 11\",\"2\":\"Mortal Kombar 11\"},\"color_title\":{\"1\":\"\",\"2\":\"\"},\"description\":{\"1\":\"\\u0418\\u0441\\u043f\\u044b\\u0442\\u0430\\u0439\\u0442\\u0435 2 \\u043e\\u0434\\u043e\\u0431\\u0440\\u0435\\u043d\\u043d\\u044b\\u0445 \\u043a\\u0440\\u0438\\u0442\\u0438\\u043a\\u0430\\u043c\\u0438 \\u0441\\u044e\\u0436\\u0435\\u0442\\u043d\\u044b\\u0435 \\u0440\\u0435\\u0436\\u0438\\u043c\\u044b \\u043f\\u043e \\u043e\\u0440\\u0438\\u0433\\u0438\\u043d\\u0430\\u043b\\u044c\\u043d\\u043e\\u0439 \\u0438\\u0433\\u0440\\u0435 MK11 \\u0438 MK11: \\u041f\\u043e\\u0441\\u043b\\u0435\\u0434\\u0441\\u0442\\u0432\\u0438\\u044f. \",\"2\":\"Try 2 critically acclaimed story modes from the original MK11 and MK11: Traces. \"},\"color_desc\":{\"1\":\"\",\"2\":\"\"},\"bg_block\":{\"1\":\"\",\"2\":\"\"},\"image\":{\"1\":\"catalog\\/ls_files\\/banner_pro\\/Frame 124.png\",\"2\":\"catalog\\/ls_files\\/banner_pro\\/Frame 124.png\"},\"image_width\":{\"1\":\"228\",\"2\":\"228\"},\"image_height\":{\"1\":\"190\",\"2\":\"190\"},\"link\":{\"1\":\"\",\"2\":\"\"},\"price_from\":{\"1\":\"\",\"2\":\"\"},\"price\":{\"1\":\"1299\",\"2\":\"1299\"},\"price_color\":{\"1\":\"\",\"2\":\"\"}},\"3\":{\"title\":{\"1\":\"\\u041c\\u043e\\u043d\\u043e\\u043a\\u043e\\u043b\\u0435\\u0441\\u043e InMotion SCV V8F\",\"2\":\"Monowheel InMotion SCV V8F\"},\"color_title\":{\"1\":\"\",\"2\":\"\"},\"description\":{\"1\":\" \\u0421 \\u043d\\u043e\\u0432\\u043e\\u0439 \\u043c\\u043e\\u0434\\u0435\\u043b\\u044c\\u044e V8F \\u043a\\u043e\\u043c\\u043f\\u0430\\u043d\\u0438\\u044f \\u0432\\u043d\\u043e\\u0432\\u044c \\u0441\\u043e\\u0447\\u0435\\u0442\\u0430\\u0435\\u0442 \\u0432 \\u043e\\u0434\\u043d\\u043e\\u043c \\u0443\\u0441\\u0442\\u0440\\u043e\\u0439\\u0441\\u0442\\u0432\\u0435 \\u0432\\u0441\\u0435 \\u0444\\u0443\\u043d\\u043a\\u0446\\u0438\\u0438.\",\"2\":\"With the new V8F, the company is once again combining all modern functions in one device in the best possible way.\"},\"color_desc\":{\"1\":\"\",\"2\":\"\"},\"bg_block\":{\"1\":\"\",\"2\":\"\"},\"image\":{\"1\":\"catalog\\/ls_files\\/banner_pro\\/inmotion-scv-v8f.png\",\"2\":\"catalog\\/ls_files\\/banner_pro\\/inmotion-scv-v8f.png\"},\"image_width\":{\"1\":\"228\",\"2\":\"228\"},\"image_height\":{\"1\":\"199\",\"2\":\"190\"},\"link\":{\"1\":\"\",\"2\":\"\"},\"price_from\":{\"1\":\"\",\"2\":\"\"},\"price\":{\"1\":\"26999\",\"2\":\"26999\"},\"price_color\":{\"1\":\"\",\"2\":\"\"}},\"4\":{\"title\":{\"1\":\"MacBook Air Apple M1 Gold\",\"2\":\"MacBook Air Apple M1 Gold\"},\"color_title\":{\"1\":\"\",\"2\":\"\"},\"description\":{\"1\":\"\\u0422\\u043e\\u043d\\u043a\\u0438\\u0439, \\u043b\\u0435\\u0433\\u043a\\u0438\\u0439, \\u0441 \\u043d\\u043e\\u0432\\u044b\\u043c \\u043f\\u0440\\u043e\\u0446\\u0435\\u0441\\u0441\\u043e\\u0440\\u043e\\u043c \\u041c1 \\u0438 \\u0435\\u0449\\u0435 \\u043c\\u043e\\u0449\\u043d\\u0435\\u0435\",\"2\":\"Slim, lightweight, with the new M1 processor and even more powerful\"},\"color_desc\":{\"1\":\"\",\"2\":\"\"},\"bg_block\":{\"1\":\"\",\"2\":\"\"},\"image\":{\"1\":\"catalog\\/ls_files\\/banner_pro\\/Frame 128.png\",\"2\":\"catalog\\/ls_files\\/banner_pro\\/Frame 128.png\"},\"image_width\":{\"1\":\"228\",\"2\":\"228\"},\"image_height\":{\"1\":\"190\",\"2\":\"190\"},\"link\":{\"1\":\"\",\"2\":\"\"},\"price_from\":{\"1\":\"\",\"2\":\"\"},\"price\":{\"1\":\"38499\",\"2\":\"38499\"},\"price_color\":{\"1\":\"\",\"2\":\"\"}},\"5\":{\"title\":{\"1\":\"Apple Watch \",\"2\":\"Apple Watch \"},\"color_title\":{\"1\":\"\",\"2\":\"\"},\"description\":{\"1\":\"\\u0412\\u0441\\u0435\\u0433\\u0434\\u0430 \\u043d\\u0430 \\u0441\\u0442\\u0440\\u0430\\u0436\\u0435 \\u0432\\u0430\\u0448\\u0435\\u0433\\u043e \\u0437\\u0434\\u043e\\u0440\\u043e\\u0432\\u044c\\u044f \\u2013 \\u043e\\u0441\\u043d\\u0430\\u0449\\u0435\\u043d\\u043d\\u044b\\u0435 \\u043d\\u043e\\u0432\\u0435\\u0439\\u0448\\u0438\\u043c \\u0441\\u0435\\u043d\\u0441\\u043e\\u0440\\u043e\\u043c \\u0441\\u0435\\u0440\\u0434\\u0435\\u0447\\u043d\\u043e\\u0433\\u043e \\u0440\\u0438\\u0442\\u043c\\u0430\",\"2\":\"Always on guard for your health - equipped with the latest heart rate sensor\"},\"color_desc\":{\"1\":\"\",\"2\":\"\"},\"bg_block\":{\"1\":\"\",\"2\":\"\"},\"image\":{\"1\":\"catalog\\/ls_files\\/banner_pro\\/Frame 129.png\",\"2\":\"catalog\\/ls_files\\/banner_pro\\/Frame 129.png\"},\"image_width\":{\"1\":\"228\",\"2\":\"228\"},\"image_height\":{\"1\":\"190\",\"2\":\"190\"},\"link\":{\"1\":\"\",\"2\":\"\"},\"price_from\":{\"1\":\"\",\"2\":\"\"},\"price\":{\"1\":\"14999\",\"2\":\"14999\"},\"price_color\":{\"1\":\"\",\"2\":\"\"}},\"6\":{\"title\":{\"1\":\"Apple iPad Pro 11 M1\",\"2\":\"Apple iPad Pro 11 M1\"},\"color_title\":{\"1\":\"\",\"2\":\"\"},\"description\":{\"1\":\"\\u041d\\u0435\\u0432\\u0435\\u0440\\u043e\\u044f\\u0442\\u043d\\u0430\\u044f \\u043f\\u0440\\u043e\\u0438\\u0437\\u0432\\u043e\\u00ad\\u0434\\u0438\\u00ad\\u0442\\u0435\\u043b\\u044c\\u00ad\\u043d\\u043e\\u0441\\u0442\\u044c \\u0447\\u0438\\u043f\\u0430 M1, \\u0432\\u0435\\u043b\\u0438\\u043a\\u043e\\u043b\\u0435\\u043f\\u043d\\u044b\\u0439 \\u0434\\u0438\\u0441\\u043f\\u043b\\u0435\\u0439 \\u0438 \\u0431\\u044b\\u0441\\u0442\\u0440\\u0430\\u044f \\u0431\\u0435\\u0441\\u043f\\u0440\\u043e\\u0432\\u043e\\u0434\\u043d\\u0430\\u044f \\u0441\\u0432\\u044f\\u0437\\u044c\",\"2\":\"\\u041d\\u0435\\u0432\\u0435\\u0440\\u043e\\u044f\\u0442\\u043d\\u0430\\u044f \\u043f\\u0440\\u043e\\u0438\\u0437\\u0432\\u043e\\u00ad\\u0434\\u0438\\u00ad\\u0442\\u0435\\u043b\\u044c\\u00ad\\u043d\\u043e\\u0441\\u0442\\u044c \\u0447\\u0438\\u043f\\u0430 M1, \\u0432\\u0435\\u043b\\u0438\\u043a\\u043e\\u043b\\u0435\\u043f\\u043d\\u044b\\u0439 \\u0434\\u0438\\u0441\\u043f\\u043b\\u0435\\u0439 \\u0438 \\u0431\\u044b\\u0441\\u0442\\u0440\\u0430\\u044f \\u0431\\u0435\\u0441\\u043f\\u0440\\u043e\\u0432\\u043e\\u0434\\u043d\\u0430\\u044f \\u0441\\u0432\\u044f\\u0437\\u044c\"},\"color_desc\":{\"1\":\"\",\"2\":\"\"},\"bg_block\":{\"1\":\"\",\"2\":\"\"},\"image\":{\"1\":\"catalog\\/ls_files\\/banner_pro\\/Frame 127.png\",\"2\":\"catalog\\/ls_files\\/banner_pro\\/Frame 127.png\"},\"image_width\":{\"1\":\"228\",\"2\":\"228\"},\"image_height\":{\"1\":\"190\",\"2\":\"190\"},\"link\":{\"1\":\"\",\"2\":\"\"},\"price_from\":{\"1\":\"\",\"2\":\"\"},\"price\":{\"1\":\"22177\",\"2\":\"22177\"},\"price_color\":{\"1\":\"\",\"2\":\"\"}}}}'),
(33, 'easy Banner', 'luxshop_easybanner', '{\"status\":\"1\",\"name\":\"easy Banner\",\"easy_banner_type\":\"3\",\"easy_banner\":{\"1\":{\"title\":{\"1\":\"Apple Watch \",\"2\":\"Apple Watch \"},\"color_title\":{\"1\":\"#000000\",\"2\":\"#000000\"},\"description\":{\"1\":\"\\u0412\\u0441\\u0435\\u0433\\u0434\\u0430 \\u043d\\u0430 \\u0441\\u0442\\u0440\\u0430\\u0436\\u0435 \\u0432\\u0430\\u0448\\u0435\\u0433\\u043e \\u0437\\u0434\\u043e\\u0440\\u043e\\u0432\\u044c\\u044f \\u2013 \\u043e\\u0441\\u043d\\u0430\\u0449\\u0435\\u043d\\u043d\\u044b\\u0435 \\u043d\\u043e\\u0432\\u0435\\u0439\\u0448\\u0438\\u043c \\u0441\\u0435\\u043d\\u0441\\u043e\\u0440\\u043e\\u043c \\u0441\\u0435\\u0440\\u0434\\u0435\\u0447\\u043d\\u043e\\u0433\\u043e \\u0440\\u0438\\u0442\\u043c\\u0430\",\"2\":\"Always on guard for your health - equipped with the latest heart rate sensor\"},\"color_desc\":{\"1\":\"#000000\",\"2\":\"#000000\"},\"bg_block\":{\"1\":\"#F8F9FA\",\"2\":\"#F8F9FA\"},\"image\":{\"1\":\"catalog\\/ls_files\\/apple_watch.png\",\"2\":\"catalog\\/ls_files\\/apple_watch.png\"},\"image_width\":{\"1\":\"300\",\"2\":\"300\"},\"image_height\":{\"1\":\"300\",\"2\":\"300\"},\"logo_image\":{\"1\":\"\",\"2\":\"\"},\"logo_image_width\":{\"1\":\"\",\"2\":\"\"},\"logo_image_height\":{\"1\":\"\",\"2\":\"\"},\"link\":{\"1\":\"\",\"2\":\"\"},\"price_from\":{\"1\":\"\\u043e\\u0442\",\"2\":\"from\"},\"price\":{\"1\":\"14999\",\"2\":\"14999\"},\"price_color\":{\"1\":\"#000000\",\"2\":\"#000000\"},\"price_bg\":{\"1\":\"#FFFFFF\",\"2\":\"#FFFFFF\"}},\"3\":{\"title\":{\"1\":\"Apple iPad Pro 11 M1\",\"2\":\"Apple iPad Pro 11 M1\"},\"color_title\":{\"1\":\"#000000\",\"2\":\"#000000\"},\"description\":{\"1\":\"\\u041d\\u0435\\u0432\\u0435\\u0440\\u043e\\u044f\\u0442\\u043d\\u0430\\u044f \\u043f\\u0440\\u043e\\u0438\\u0437\\u0432\\u043e\\u00ad\\u0434\\u0438\\u00ad\\u0442\\u0435\\u043b\\u044c\\u00ad\\u043d\\u043e\\u0441\\u0442\\u044c \\u0447\\u0438\\u043f\\u0430 M1, \\u0432\\u0435\\u043b\\u0438\\u043a\\u043e\\u043b\\u0435\\u043f\\u043d\\u044b\\u0439 \\u0434\\u0438\\u0441\\u043f\\u043b\\u0435\\u0439 \\u0438 \\u0431\\u044b\\u0441\\u0442\\u0440\\u0430\\u044f \\u0431\\u0435\\u0441\\u043f\\u0440\\u043e\\u0432\\u043e\\u0434\\u043d\\u0430\\u044f \\u0441\\u0432\\u044f\\u0437\\u044c\",\"2\":\"Incredible M1 chip performance, brilliant display and fast wireless connectivity\"},\"color_desc\":{\"1\":\"#000000\",\"2\":\"#000000\"},\"bg_block\":{\"1\":\"#F8F9FA\",\"2\":\"#F8F9FA\"},\"image\":{\"1\":\"catalog\\/ls_files\\/ipad_pro_m1.png\",\"2\":\"catalog\\/ls_files\\/ipad_pro_m1.png\"},\"image_width\":{\"1\":\"300\",\"2\":\"300\"},\"image_height\":{\"1\":\"300\",\"2\":\"300\"},\"logo_image\":{\"1\":\"\",\"2\":\"\"},\"logo_image_width\":{\"1\":\"\",\"2\":\"\"},\"logo_image_height\":{\"1\":\"\",\"2\":\"\"},\"link\":{\"1\":\"\",\"2\":\"\"},\"price_from\":{\"1\":\"\",\"2\":\"from\"},\"price\":{\"1\":\"22450\",\"2\":\"22450\"},\"price_color\":{\"1\":\"#000000\",\"2\":\"#000000\"},\"price_bg\":{\"1\":\"#FFFFFF\",\"2\":\"#FFFFFF\"}},\"4\":{\"title\":{\"1\":\"Apple Air Pods Pro\",\"2\":\"Apple Air Pods Pro\"},\"color_title\":{\"1\":\"#000000\",\"2\":\"#000000\"},\"description\":{\"1\":\"\\u0410\\u043a\\u0442\\u0438\\u0432\\u043d\\u043e\\u0435 \\u0448\\u0443\\u043c\\u043e\\u043f\\u043e\\u0434\\u0430\\u0432\\u043b\\u0435\\u043d\\u0438\\u0435 \\u0434\\u043b\\u044f \\u0438\\u043c\\u043c\\u0435\\u0440\\u0441\\u0438\\u0432\\u043d\\u043e\\u0433\\u043e \\u0437\\u0432\\u0443\\u043a\\u0430.\\r\\n\\u0412 \\u041f\\u0440\\u043e\\u0437\\u0440\\u0430\\u0447\\u043d\\u043e\\u043c \\u0440\\u0435\\u0436\\u0438\\u043c\\u0435 \\u0441\\u043b\\u044b\\u0448\\u043d\\u043e \\u043e\\u043a\\u0440\\u0443\\u0436\\u0430\\u044e\\u0449\\u0438\\u0439 \\u043c\\u0438\\u0440.\",\"2\":\"Active noise cancellation for immersive sound.\\r\\nIn Transparent mode, you can hear the world around you.\"},\"color_desc\":{\"1\":\"#000000\",\"2\":\"#000000\"},\"bg_block\":{\"1\":\"#F8F9FA\",\"2\":\"#F8F9FA\"},\"image\":{\"1\":\"catalog\\/ls_files\\/air_pods_pro.png\",\"2\":\"catalog\\/ls_files\\/air_pods_pro.png\"},\"image_width\":{\"1\":\"300\",\"2\":\"300\"},\"image_height\":{\"1\":\"300\",\"2\":\"300\"},\"logo_image\":{\"1\":\"\",\"2\":\"\"},\"logo_image_width\":{\"1\":\"\",\"2\":\"\"},\"logo_image_height\":{\"1\":\"\",\"2\":\"\"},\"link\":{\"1\":\"\",\"2\":\"\"},\"price_from\":{\"1\":\"\\u043e\\u0442\",\"2\":\"from\"},\"price\":{\"1\":\"8299\",\"2\":\"8299\"},\"price_color\":{\"1\":\"#000000\",\"2\":\"#000000\"},\"price_bg\":{\"1\":\"#FFFFFF\",\"2\":\"#FFFFFF\"}}}}'),
(34, 'Успей купить', 'luxshop_productany', '{\"name\":\"\\u0423\\u0441\\u043f\\u0435\\u0439 \\u043a\\u0443\\u043f\\u0438\\u0442\\u044c\",\"config_productany_title\":{\"1\":{\"config_productany_title\":\"\\u0423\\u0441\\u043f\\u0435\\u0439 \\u043a\\u0443\\u043f\\u0438\\u0442\\u044c\"},\"2\":{\"config_productany_title\":\"\\u0423\\u0441\\u043f\\u0435\\u0439 \\u043a\\u0443\\u043f\\u0438\\u0442\\u044c\"}},\"config_title_color_text_productany\":\"#000000\",\"product\":[\"42\",\"30\",\"47\",\"28\",\"41\"],\"limit\":\"5\",\"width\":\"200\",\"height\":\"200\",\"status_timer_special\":\"1\",\"status\":\"1\"}'),
(35, 'banner block', 'luxshop_banner_blocks', '{\"name\":\"\\u0411\\u0430\\u043d\\u043d\\u0435\\u0440\\u044b \\u0411\\u043b\\u043e\\u043a\\u0438 \\u0413\\u043b\\u0430\\u0432\\u043d\\u0430\\u044f\",\"status\":\"1\",\"banner_column\":\"3\",\"banner_item\":[{\"image\":\"catalog\\/ls_files\\/new-file-ns\\/b-block-1.svg\",\"title\":{\"1\":\"\\u041f\\u043e\\u0434\\u0434\\u0435\\u0440\\u0436\\u043a\\u0430 24\\/7\",\"2\":\"24\\/7 support\"},\"description\":{\"1\":\"\\u041c\\u044b \\u0440\\u0430\\u0431\\u043e\\u0442\\u0430\\u0435\\u0442 24 \\u0447\\u0430\\u0441\\u0430 7 \\u0434\\u043d\\u0435\\u0439 \\u0432 \\u043d\\u0435\\u0434\\u0435\\u043b\\u044e\",\"2\":\"We work 24 hours 7 days a week\"},\"link\":{\"1\":\"\",\"2\":\"\"},\"popup\":\"0\",\"sort\":\"\"},{\"image\":\"catalog\\/ls_files\\/new-file-ns\\/b-block-2.svg\",\"title\":{\"1\":\"\\u0414\\u043e\\u0441\\u0442\\u0430\\u0432\\u043a\\u0430\",\"2\":\"Delivery\"},\"description\":{\"1\":\"\\u0411\\u0435\\u0441\\u043f\\u043b\\u0430\\u0442\\u043d\\u0430\\u044f \\u0434\\u043e\\u0441\\u0442\\u0430\\u0432\\u043a\\u0430 \\u043d\\u0430 \\u0432\\u0441\\u0435 \\u0437\\u0430\\u043a\\u0430\\u0437\\u044b \\u0432\\u044b\\u0448\\u0435 1000 \\u0433\\u0440\\u043d\",\"2\":\"Free shipping on all orders over UAH 1000.\"},\"link\":{\"1\":\"\",\"2\":\"\"},\"popup\":\"0\",\"sort\":\"\"},{\"image\":\"catalog\\/ls_files\\/new-file-ns\\/b-block-3.svg\",\"title\":{\"1\":\"100% \\u0411\\u0435\\u0437\\u043e\\u043f\\u0430\\u0441\\u043d\\u0430\\u044f \\u043e\\u043f\\u043b\\u0430\\u0442\\u0430\",\"2\":\"100% secure payment\"},\"description\":{\"1\":\"\\u041c\\u044b \\u0433\\u0430\\u0440\\u0430\\u043d\\u0442\\u0438\\u0440\\u0443\\u0435\\u043c \\u0431\\u0435\\u0437\\u043e\\u043f\\u0430\\u0441\\u043d\\u0443\\u044e \\u043e\\u043f\\u043b\\u0430\\u0442\\u0443\",\"2\":\"We guarantee secure payment\"},\"link\":{\"1\":\"\",\"2\":\"\"},\"popup\":\"0\",\"sort\":\"\"},{\"image\":\"catalog\\/ls_files\\/new-file-ns\\/transfer.svg\",\"title\":{\"1\":\"14-\\u0434\\u043d\\u0435\\u0432\\u043d\\u044b\\u0439 \\u0432\\u043e\\u0437\\u0432\\u0440\\u0430\\u0442\",\"2\":\"14 days return\"},\"description\":{\"1\":\"\\u0415\\u0441\\u043b\\u0438 \\u0432\\u0430\\u043c \\u043d\\u0435 \\u043d\\u0440\\u0430\\u0432\\u0438\\u0442\\u0441\\u044f \\u0442\\u043e\\u0432\\u0430\\u0440, \\u0443 \\u0432\\u0430\\u0441 \\u0435\\u0441\\u0442\\u044c 14 \\u0434\\u043d\\u0435\\u0439, \\u0447\\u0442\\u043e\\u0431\\u044b \\u0432\\u0435\\u0440\\u043d\\u0443\\u0442\\u044c \\u0435\\u0433\\u043e\",\"2\":\"If you do not like the item, you have 14 days to return it.\"},\"link\":{\"1\":\"\",\"2\":\"\"},\"popup\":\"0\",\"sort\":\"\"}]}'),
(38, 'Компьютеры', 'luxshop_latest_grid', '{\"name\":\"\\u041a\\u043e\\u043c\\u043f\\u044c\\u044e\\u0442\\u0435\\u0440\\u044b\",\"title_module\":{\"1\":\"\\u041a\\u043e\\u043c\\u043f\\u044c\\u044e\\u0442\\u0435\\u0440\\u044b\",\"2\":\"\\u041a\\u043e\\u043c\\u043f\\u044c\\u044e\\u0442\\u0435\\u0440\\u044b\"},\"category_id\":\"20\",\"filter_sub_category\":\"1\",\"status_showmore\":\"1\",\"limit_max\":\"50\",\"limit\":\"5\",\"limit_tablet\":\"3\",\"limit_mob\":\"2\",\"width\":\"200\",\"height\":\"200\",\"status\":\"1\"}'),
(49, 'Новинки главная', 'latest', '{\"name\":\"\\u041d\\u043e\\u0432\\u0438\\u043d\\u043a\\u0438 \\u0433\\u043b\\u0430\\u0432\\u043d\\u0430\\u044f\",\"limit\":\"5\",\"width\":\"75\",\"height\":\"75\",\"status\":\"1\"}'),
(48, 'Акция главная', 'special', '{\"name\":\"\\u0410\\u043a\\u0446\\u0438\\u044f \\u0433\\u043b\\u0430\\u0432\\u043d\\u0430\\u044f\",\"limit\":\"3\",\"width\":\"75\",\"height\":\"75\",\"status\":\"1\"}'),
(41, 'Отзывы о магазине', 'luxshop_reviews_store', '{\"name\":\"\\u041e\\u0442\\u0437\\u044b\\u0432\\u044b \\u043e \\u043c\\u0430\\u0433\\u0430\\u0437\\u0438\\u043d\\u0435\",\"limit\":\"3\",\"limit_tablet\":\"3\",\"limit_mob\":\"1\",\"status_showmore\":\"1\",\"limit_max\":\"6\",\"status\":\"1\"}'),
(42, 'Отзывы покупателей', 'luxshop_reviewscustomer', '{\"name\":\"\\u041e\\u0442\\u0437\\u044b\\u0432\\u044b \\u043f\\u043e\\u043a\\u0443\\u043f\\u0430\\u0442\\u0435\\u043b\\u0435\\u0439\",\"reviewscustomer\":{\"order_type\":\"last\",\"module_header\":{\"1\":\"\\u041e\\u0442\\u0437\\u044b\\u0432\\u044b \\u043f\\u043e\\u043a\\u0443\\u043f\\u0430\\u0442\\u0435\\u043b\\u0435\\u0439\",\"2\":\"\\u041e\\u0442\\u0437\\u044b\\u0432\\u044b \\u043f\\u043e\\u043a\\u0443\\u043f\\u0430\\u0442\\u0435\\u043b\\u0435\\u0439\"},\"status_showmore\":\"1\",\"limit_max\":\"12\",\"limit\":\"4\",\"limit_tablet\":\"2\",\"limit_mob\":\"1\",\"category_sensitive\":\"1\",\"show_all_button\":\"1\"},\"status\":\"1\"}'),
(43, 'Главная продукты из категорий', 'luxshop_product_categorytabs', '{\"name\":\"\\u0413\\u043b\\u0430\\u0432\\u043d\\u0430\\u044f \\u043f\\u0440\\u043e\\u0434\\u0443\\u043a\\u0442\\u044b \\u0438\\u0437 \\u043a\\u0430\\u0442\\u0435\\u0433\\u043e\\u0440\\u0438\\u0439\",\"category_sel\":[\"25\",\"20\",\"18\",\"57\"],\"sorts_product\":\"p.sort_order DESC\",\"filter_sub_category\":\"1\",\"status_showmore\":\"1\",\"limit_max\":\"15\",\"limit\":\"5\",\"limit_tablet\":\"3\",\"limit_mob\":\"2\",\"width\":\"200\",\"height\":\"200\",\"status\":\"1\"}'),
(44, 'Вы Смотрели', 'luxshop_productviewed', '{\"name\":\"\\u0412\\u044b \\u0421\\u043c\\u043e\\u0442\\u0440\\u0435\\u043b\\u0438\",\"limit\":\"5\",\"width\":\"200\",\"height\":\"200\",\"status\":\"1\"}'),
(45, 'Категории', 'luxshop_wallcategory', '{\"name\":\"\\u041a\\u0430\\u0442\\u0435\\u0433\\u043e\\u0440\\u0438\\u0438\",\"title_name\":{\"1\":{\"title_name\":\"\\u041a\\u0430\\u0442\\u0435\\u0433\\u043e\\u0440\\u0438\\u0438\"},\"2\":{\"title_name\":\"\\u041a\\u0430\\u0442\\u0435\\u0433\\u043e\\u0440\\u0438\\u0438\"}},\"width\":\"150\",\"height\":\"150\",\"limit\":\"10\",\"type_view_mob\":\"0\",\"status\":\"1\",\"wall_category\":[{\"category\":\"34\",\"image\":\"catalog\\/ls_files\\/3dr-solo.jpg\",\"sort_order\":\"0\"},{\"category\":\"33\",\"image\":\"catalog\\/ls_files\\/tehnika-b.jpg\",\"sort_order\":\"0\"},{\"category\":\"25\",\"image\":\"catalog\\/ls_files\\/sportlux_1.jpg\",\"sort_order\":\"0\"},{\"category\":\"20\",\"image\":\"catalog\\/ls_files\\/new-file-ns\\/apple-mq2y2uaa.png\",\"sort_order\":\"0\"},{\"category\":\"18\",\"image\":\"catalog\\/ls_files\\/new-file-ns\\/c1d01642557c49a4931cb5540166ceb91.png\",\"sort_order\":\"0\"},{\"category\":\"57\",\"image\":\"catalog\\/ls_files\\/new-file-ns\\/24540529742672_small11.png\",\"sort_order\":\"0\"},{\"category\":\"17\",\"image\":\"catalog\\/ls_files\\/new-file-ns\\/b-1018-3d-ochki1.png\",\"sort_order\":\"0\"},{\"category\":\"24\",\"image\":\"catalog\\/ls_files\\/ipad_pro_m1.png\",\"sort_order\":\"0\"}]}'),
(46, 'MSP главная', 'luxshop_megasliderpro', '{\"name\":\"MSP \\u0433\\u043b\\u0430\\u0432\\u043d\\u0430\\u044f\",\"status\":\"1\",\"banner\":\"1\",\"width\":\"1945\",\"height\":\"470\"}');


TRUNCATE TABLE `oc_extension`;
INSERT INTO `oc_extension` (`extension_id`, `type`, `code`) VALUES
(1, 'payment', 'cod'),
(2, 'total', 'shipping'),
(3, 'total', 'sub_total'),
(4, 'total', 'tax'),
(5, 'total', 'total'),
(6, 'module', 'banner'),
(7, 'module', 'carousel'),
(8, 'total', 'credit'),
(9, 'shipping', 'flat'),
(10, 'total', 'handling'),
(11, 'total', 'low_order_fee'),
(12, 'total', 'coupon'),
(13, 'module', 'category'),
(14, 'module', 'account'),
(15, 'total', 'reward'),
(16, 'total', 'voucher'),
(17, 'payment', 'free_checkout'),
(18, 'module', 'featured'),
(19, 'module', 'slideshow'),
(20, 'theme', 'default'),
(21, 'dashboard', 'activity'),
(22, 'dashboard', 'sale'),
(23, 'dashboard', 'recent'),
(24, 'dashboard', 'order'),
(25, 'dashboard', 'online'),
(26, 'dashboard', 'map'),
(27, 'dashboard', 'customer'),
(28, 'dashboard', 'chart'),
(29, 'report', 'sale_coupon'),
(31, 'report', 'customer_search'),
(32, 'report', 'customer_transaction'),
(33, 'report', 'product_purchased'),
(34, 'report', 'product_viewed'),
(35, 'report', 'sale_return'),
(36, 'report', 'sale_order'),
(37, 'report', 'sale_shipping'),
(38, 'report', 'sale_tax'),
(39, 'report', 'customer_activity'),
(40, 'report', 'customer_order'),
(41, 'report', 'customer_reward'),
(42, 'module', 'blog_latest'),
(43, 'module', 'blog_featured'),
(44, 'module', 'blog_category'),
(45, 'module', 'featured_article'),
(46, 'module', 'featured_product'),
(48, 'module', 'luxshop_myonepagecheckout'),
(50, 'theme', 'luxshop'),
(51, 'module', 'luxshop_megamenuvh'),
(52, 'module', 'luxshop_megasliderpro'),
(53, 'module', 'luxshop_banner_pro'),
(54, 'module', 'luxshop_easybanner'),
(55, 'module', 'luxshop_productany'),
(56, 'module', 'luxshop_autosearch'),
(57, 'module', 'luxshop_banner_blocks'),
(58, 'module', 'luxshop_quickviewpro'),
(59, 'module', 'luxshop_feedback_widget'),
(60, 'module', 'luxshop_question_answer'),
(61, 'module', 'luxshop_ut5setting'),
(62, 'module', 'luxshop_setting_theme'),
(63, 'module', 'luxshop_found_cheaper_product'),
(64, 'module', 'luxshop_latest_grid'),
(65, 'module', 'luxshop_reviews_store'),
(66, 'module', 'luxshop_reviewscustomer'),
(67, 'module', 'luxshop_product_categorytabs'),
(68, 'module', 'luxshop_productviewed'),
(69, 'module', 'luxshop_wallcategory'),
(70, 'module', 'bestseller'),
(71, 'module', 'latest'),
(72, 'module', 'special');