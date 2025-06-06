<?php if (count($languages) > 1) { ?>
	<div class="pull-right">
		<form id="form-language">
			<div class="btn-group">
				<button class="btn btn-link btnp dropdown-toggle" data-toggle="dropdown">
					<?php foreach ($languages as $language) { ?>
						<?php if ($language['code'] == $code) { ?>
							<?php echo $language['name']; ?>
						<?php } ?>
					<?php } ?>
					<span class="hidden-xs hidden-sm hidden-md"></span> <i class="fa fa-caret-down"></i></button>
				<ul class="dropdown-menu">
					<?php foreach ($languages as $language) { ?>
						<li>
							<?php if ($language['main']) { ?>
								<a class="language-call btn btn-link btn-block language-selectt" onclick="lm_deleteCookie('languageauto'); window.location = '<?php echo $language['url']; ?>'" name="<?php echo $language['code']; ?>" href="<?php echo $language['url']; ?>"><?php if (isset($settings_widget['image_status']) && $settings_widget['image_status']) { ?><img src="catalog/language/<?php echo $language['code']; ?>/<?php echo $language['code']; ?>.png" alt="<?php echo $language['name']; ?>" title="<?php echo $language['name']; ?>"><?php } ?> <?php echo $language['name']; ?></a>
							<?php } else { ?>
								<a class="language-call btn btn-link btn-block language-selectt" onclick="lm_setCookie('languageauto', '1', {expires: 180}); window.location = '<?php echo $language['url']; ?>'" name="<?php echo $language['code']; ?>" href="<?php echo $language['url']; ?>"><?php if (isset($settings_widget['image_status']) && $settings_widget['image_status']) { ?><img src="catalog/language/<?php echo $language['code']; ?>/<?php echo $language['code']; ?>.png" alt="<?php echo $language['name']; ?>" title="<?php echo $language['name']; ?>"><?php } ?> <?php echo $language['name']; ?></a>
							<?php } ?>
						</li>
					<?php } ?>
				</ul>
			</div>
		</form>
	</div>
	<script>
		function lm_setCookie(name, value, options = {}) {
			options = {
				path: '/',
				...options
			};

			let date = new Date(Date.now() + (86400e3 * options.expires));
			date = date.toUTCString();
			options.expires = date;

			let updatedCookie = encodeURIComponent(name) + "=" + encodeURIComponent(value);

			for (let optionKey in options) {
				updatedCookie += "; " + optionKey;
				let optionValue = options[optionKey];
				if (optionValue !== true) {
					updatedCookie += "=" + optionValue;
				}
			}
			document.cookie = updatedCookie;
		}

		function lm_deleteCookie(name) {
			lm_setCookie(name, "", {
				'max-age': -1
			});
		}
	</script>
<?php } ?>