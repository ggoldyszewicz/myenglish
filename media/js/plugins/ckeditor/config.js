/**
 * @license Copyright (c) 2003-2013, CKSource - Frederico Knabben. All rights reserved.
 * For licensing, see LICENSE.html or http://ckeditor.com/license
 */

CKEDITOR.editorConfig = function( config ) {
	// Define changes to default configuration here. For example:
	// config.language = 'fr';
	// config.uiColor = '#AADC6E';
    config.filebrowserBrowseUrl = '/administrator/kcfinder/browse.php?type=files';
    config.filebrowserImageBrowseUrl = '/administrator/kcfinder/browse.php?type=images';
    config.filebrowserFlashBrowseUrl = '/administrator/kcfinder/browse.php?type=flash';
    config.filebrowserUploadUrl = '/administrator/kcfinder/upload.php?type=files';
    config.filebrowserImageUploadUrl = '/administrator/kcfinder/upload.php?type=images';
    config.filebrowserFlashUploadUrl = '/administrator/kcfinder/upload.php?type=flash';
};
