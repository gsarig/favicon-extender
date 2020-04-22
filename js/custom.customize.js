wp.customize.bind('ready', function () {
	var iconFields = jQuery('#customize-control-android_icon, #customize-control-ios_icon, #customize-control-windows_icon');
	var overrideControl = jQuery('#customize-control-override_icon');
	if (wp.customize('site_icon').get() === '0') {
		overrideControl.hide();
		iconFields.hide();
	} else {
		if (wp.customize('override_icon').get()) {
			iconFields.show();
		} else {
			iconFields.hide();
		}
	}
	wp.customize.control('site_icon', function (control) {
		control.setting.bind(function (value) {
			toggleIconFields(value);
		});
	});
	hideOverrideIcon();

	function toggleIconFields(value) {
		if (value) {
			overrideControl.show();
			wp.customize('override_icon', function (setting) {
				var value = setting.get();
				if (value) {
					iconFields.show();
				} else {
					iconFields.hide();
				}
			});
		} else {
			overrideControl.hide();
			iconFields.hide();
		}
	}

	function hideOverrideIcon() {
		wp.customize.control('override_icon', function (control) {
			control.setting.bind(function (value) {
				if (value) {
					iconFields.show();
				} else {
					iconFields.hide();
				}
			});
		});
	}
});
