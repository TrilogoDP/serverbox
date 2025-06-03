function quickorder_confirm() {
		$('#quickorder_url').val(window.location.href);
		$.ajax({
			url: 'index.php?route=extension/module/luxshop_newfastorder',
			type: 'post',
			data: $('#fastorder_data').serialize() + '&action=send',
			dataType: 'json',
			beforeSend: function() {
				$('#modal-quickorder .modal-body').prepend('<div class="masked_bg"></div><div class="loading_masked"></div>');
				loading_masked(true);
			},
			complete: function() {
				$('.masked_bg,.loading_masked').remove();
				loading_masked(false);
			},
			success: function(json) {
				$('#modal-quickorder .form-control').removeClass('error_input');
				$('.alert, .text-danger').remove();
				$('.form-group').removeClass('has-error');
				if (json['error']) {
					if (json['error']['name_fastorder']) {
						$('#contact-name').attr('placeholder',json['error']['name_fastorder']);
						$('#contact-name').addClass('error_input');
					}
					if (json['error']['phone']) {
						$('#contact-phone').attr('placeholder',json['error']['phone']);
						$('#contact-phone').addClass('error_input');
					}
					if (json['error']['comment_buyer']) {
						$('#contact-comment').attr('placeholder',json['error']['comment_buyer']);
						$('#contact-comment').addClass('error_input');
					}
					if (json['error']['email_error']) {
						$('#contact-email').attr('placeholder',json['error']['email_error']);
						$('#contact-email').addClass('error_input');
					}
					if (json['error']['error_agree']) {
						$('.error_agree').append('<div class="alert alert-danger"><i class="fa fa-exclamation-circle"></i> ' + json['error']['error_agree'] + '<button type="button" class="close" data-dismiss="alert">&times;</button></div>');
					}

					/*if (json['error']['option']) {
								for (i in json['error']['option']) {
									$('.option-error-'+ i).html(json['error']['option'][i]);
								}
					}*/
					if (json['error']) {
						if (json['error']['option']) {
						$('.options').removeClass('hidden-options');
							for (i in json['error']['option']) {
								var element = $('#input-option' + i.replace('_', '-'));

								if (element.parent().hasClass('input-group')) {
									element.parent().after('<div class="text-danger">' + json['error']['option'][i] + '</div>');
								} else {
									element.after('<div class="text-danger">' + json['error']['option'][i] + '</div>');
								}

								setTimeout(function () {
					  				$('.option-danger, .alert, .text-danger').remove();
								}, 7000);

							}
						}

						// Highlight any found errors
						$('.text-danger').parent().addClass('has-error');
					}

				}

				if (json['success']){
					$('#modal-quickorder').modal('hide');

					html  = '<div id="modal-addquickorder" class="modal fade">';
					html += '  <div class="modal-dialog">';
					html += '    <div class="modal-content ls-modal-success">';
					html += '      <div class="modal-body"><img class="success-icon" alt="success-icon" src="catalog/view/theme/luxshop/image/success-icon.svg"> <div class="text-modal-block">' + json['success'] + '</div><button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button></div>';
					html += '    </div>';
					html += '  </div>';
					html += '</div>';

					$('body').append(html);
					setTimeout(function () {
						$('#modal-addquickorder').modal('show');
					}, 500);
				}
			}

		});
}

function quickorder_confirm_checkout() {

	$('#quickorder_url').val(window.location.href);
	var success = 'false';
	$.ajax({
		url: 'index.php?route=extension/module/luxshop_newfastordercart',
		type: 'post',
		data: $('#fastorder_data').serialize() + '&action=send',
		dataType: 'json',
		beforeSend: function() {
			$('#modal-quickorder .modal-body').prepend('<div class="masked_bg"></div><div class="loading_masked"></div>');
			loading_masked(true);
		},
		complete: function() {
			$('.masked_bg,.loading_masked').remove();
			loading_masked(false);
		},
		success: function(json) {

			$('.alert').remove();
			$('#modal-quickorder .form-control').removeClass('error_input');
			if (json['error']) {
				if (json['error']['name_fastorder']) {
					$('.contact-name').attr('placeholder',json['error']['name_fastorder']);
					$('.contact-name').addClass('error_input');
				}
				if (json['error']['phone']) {
					$('.contact-phone').attr('placeholder',json['error']['phone']);
					$('.contact-phone').addClass('error_input');
				}
				if (json['error']['comment_buyer']) {
					$('.contact-comment').attr('placeholder',json['error']['comment_buyer']);
					$('.contact-comment').addClass('error_input');
				}
				if (json['error']['email_error']) {
					$('.contact-email').attr('placeholder',json['error']['email_error']);
					$('.contact-email').addClass('error_input');
				}
				if (json['error']['error_agree']) {
					$('.error_agree').append('<div class="alert alert-danger"><i class="fa fa-exclamation-circle"></i> ' + json['error']['error_agree'] + '<button type="button" class="close" data-dismiss="alert">&times;</button></div>');
				}
				if (json['error']['comment_buyer']) {
					$('#error_comment_buyer').html(json['error']['comment_buyer']);
				}
			}

			if (json['success']){
				$('.shopping-cart #cart').load('index.php?route=common/cart/info .shopping-cart #cart');

				$('#modal-quickorder').modal('hide');

				html  = '<div id="modal-addquickorder" class="modal fade">';
				html += '  <div class="modal-dialog">';
				html += '    <div class="modal-content ls-modal-success">';
				html += '      <div class="modal-body"><img class="success-icon" alt="success-icon" src="catalog/view/theme/luxshop/image/success-icon.svg"> <div class="text-modal-block">' + json['success'] + '</div><button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button></div>';
				html += '    </div>';
				html += '  </div>';
				html += '</div>';

				$('body').append(html);
				setTimeout(function () {
					$('#modal-addquickorder').modal('show');
				}, 500);
			}
		}

		});
}