wp.customize.bind('ready', function () {
	var iconFields = $('#customize-control-android_icon, #customize-control-ios_icon, #customize-control-windows_icon');
	wp.customize.control('override_icon', function (control) {
		control.setting.bind(function (value) {

			switch (value) {
				case false:
					iconFields.hide();
					break;
				case true:
					iconFields.show();
					break;
			}
		});
	});
	wp.customize('override_icon', function (setting) {
		var value = setting.get();
		if (value) {
			iconFields.show();
		} else {
			iconFields.hide();
		}
	});
});



