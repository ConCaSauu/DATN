/**
 * @license Copyright (c) 2003-2023, CKSource Holding sp. z o.o. All rights reserved.
 * For licensing, see https://ckeditor.com/legal/ckeditor-oss-license
 */

CKEDITOR.editorConfig = function( config ) {
	// Define changes to default configuration here. For example:
	// config.language = 'fr';
	// config.uiColor = '#AADC6E';
	config.versionCheck = false;
	config.contentsCss = [
		'https://fonts.googleapis.com/css2?family=Quicksand&display=swap',
		CKEDITOR.getUrl('contents.css') // nếu bạn có file CSS riêng
	];
	config.font_names = 'Quicksand/Quicksand, sans-serif;' + config.font_names;
	config.font_defaultLabel = 'Quicksand';
	config.bodyClass = 'quicksand-font';
};
