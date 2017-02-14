/**
 * @license Copyright (c) 2003-2017, CKSource - Frederico Knabben. All rights reserved.
 * For licensing, see LICENSE.md or http://ckeditor.com/license
 */

CKEDITOR.editorConfig = function( config ) {
	// Define changes to default configuration here. For example:
	// config.language = 'fr';
	// config.uiColor = '#AADC6E';
    config.filebrowserBrowseUrl = 'rsc/js/ckeditor/kcfinder-3.20-test1/browse.php?opener=ckeditor&type=files';
    config.filebrowserImageBrowseUrl = 'rsc/js/ckeditor/kcfinder-3.20-test1/browse.php?opener=ckeditor&type=images';
    config.filebrowserFlashBrowseUrl = 'rsc/js/ckeditor/kcfinder-3.20-test1/browse.php?opener=ckeditor&type=flash';
    config.filebrowserUploadUrl = 'rsc/js/ckeditor/kcfinder-3.20-test1/upload.php?opener=ckeditor&type=files';
    config.filebrowserImageUploadUrl = 'rsc/js/ckeditor/kcfinder-3.20-test1/upload.php?opener=ckeditor&type=images';
    config.filebrowserFlashUploadUrl = 'rsc/js/ckeditor/kcfinder-3.20-test1/upload.php?opener=ckeditor&type=flash';
};
