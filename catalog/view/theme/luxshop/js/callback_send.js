function sendCallback() {
	$('#callback_url').val(window.location.href);
	$.ajax({
		url: 'index.php?route=extension/module/luxshop_callback',
		type: 'post',
		data: $('#callback_data').serialize() + '&action=send',
		dataType: 'json',
		beforeSend: function() {
			$('#modal-callback .modal-body').prepend('<div class="masked_bg"></div><div class="loading_masked"></div>');
			loading_masked(true);
		},
		complete: function() {
			$('.masked_bg,.loading_masked').remove();
			loading_masked(false);
		},
		success: function(json) {
			$('.alert').remove();
			$('#popup-callback .form-control').removeClass('error_input');
			if (json['warning']) {
				if (json['warning']['name']) {
					$('.contact-name').addClass('error_input');
					$('.contact-name').attr('placeholder',json['warning']['name']);
				}
				if (json['warning']['phone']) {
					$('.contact-phone').attr('placeholder',json['warning']['phone']);
					$('.contact-phone').addClass('error_input');
				}
				if (json['warning']['comment_buyer']) {
					$('.contact-comment').attr('placeholder',json['warning']['comment_buyer']);
					$('.contact-comment').addClass('error_input');
				}
				if (json['warning']['email_error']) {
					$('.contact-email').attr('placeholder',json['warning']['email_error']);
					$('.contact-email').addClass('error_input');
				}
				if (json['warning']['error_agree']) {
					$('.error_agree').append('<div class="alert alert-danger"><i class="fa fa-exclamation-circle"></i> ' + json['warning']['error_agree'] + '<button type="button" class="close" data-dismiss="alert">&times;</button></div>');
				}
				$('.popup-center').animate({ scrollTop: 0 }, 'slow');


			}
			if (json['success']){
				$('#modal-callback').modal('hide');
				html  = '<div id="modal-success-callback" class="modal fade">';
				html += '  <div class="modal-dialog">';
				html += '    <div class="modal-content ls-modal-success">';
				html += '      <div class="modal-body"><img class="success-icon" alt="success-icon" src="catalog/view/theme/luxshop/image/success-icon.svg"> <div class="text-modal-block"> ' + json['success'] + '</div><button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button></div>';
				html += '    </div>';
				html += '  </div>';
				html += '</div>';

				$('body').append(html);
				setTimeout(function () {
					$('#modal-success-callback').modal('show');
				}, 700);

			}
		}
	});
}