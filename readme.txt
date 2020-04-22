=== Favicon Extender ===
Contributors: gsarig
Donate link: https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=JHG58DVQSEA76
Tags: favicon
Requires at least: 4.8
Tested up to: 5.4
Requires PHP: 7.0
Stable tag: 1.0.1
License: GPLv2 or later


Extend the native WordPress Site Icon functionality to use different icons for Android, iOS and Windows.

== Description ==


WordPress includes a handy way to add a favicon on your site through its Site Customizer. This icon will be used as a favicon on desktop browsers, but on mobile devices as well, when users create a shortcut on their homescreen. What happens, though, if you want to have different icons on different occasions, either because, for example, iOS doesn't support transparency or simply because you want to have a more detailed icon on mobile devices? This plugin extends the WordPress' native functionality and allows you to upload different images for mobile (Android), iOS and Windows. Omitting an image will fallback to the default Site Icon.

= Features =

* Extend the native WordPress Site Icon functionality to use different icons for Android, iOS and Windows.


== Installation ==

1. Upload the Favicon Extender plugin to your WordPress plugins directory and activate it.
4. Go to the WordPress Customizer / Site Identity and add you Site Icon. As soon as you do this, a new option will appear, prompting you to upload separate icons for mobile, iOS and Windows.

== Frequently Asked Questions ==

= I activated the plugin but I don't see any new option =

This is probably because you didn't set a Site Icon. Favicon Extender is not a replacement for the WordPress' native functionality. Instead, it complements it. Therefore, in order for the plugin's options to appear, you need to set your Site Icon first.

= What kind of icons should I add? =

Mobile (Android) icons should be png of 192x192 pixels (transparency is allowed).  iOS icons should be 180x180 pixels, with no transparency (iOS doesn't support transparent icons). Windows icons should be 144x144 pixels. The plugin should guide you on that, forcing you to crop the images to the proper dimensions.

== Screenshots ==
1. Favicon Extender options.

== Changelog ==

= 1.0.1 =
* Fixed a bug with jQuery calling.

= 1.0 =
* Initial release