/**
	* @license Copyright (c) 2003-2019, CKSource - Frederico Knabben. All rights reserved.
	* For licensing, see https://ckeditor.com/legal/ckeditor-oss-license
	*/

	CKEDITOR.editorConfig = function( config ) {
		config.toolbarGroups = [
		{ name: 'clipboard', groups: [ 'clipboard', 'undo' ] },
		{ name: 'insert', groups: [ 'insert' ] },
		{ name: 'links', groups: [ 'links' ] },
		'/',
		{ name: 'basicstyles', groups: [ 'basicstyles', 'cleanup' ] },
		{ name: 'paragraph', groups: [ 'list', 'indent', 'blocks', 'align','paragraph' ] },
		{ name: 'tools', groups: [ 'Maximize', 'ShowBlocks' ] },
		'/',
		{ name: 'styles', groups: [ 'styles' ] },
		{ name: 'colors', groups: [ 'colors' ] },
		{ name: 'editing', groups: [ 'find' ] },
		{ name: 'document', groups: [ 'mode','doctools' ] },
		];
		config.filebrowserBrowseUrl = '/admin_asset/ckeditor/kcfinder/browse.php?opener=ckeditor&type=files';
		config.filebrowserUploadUrl = '/admin_asset/ckeditor/kcfinder/upload.php?opener=ckeditor&type=files';
		config.filebrowserGoogledocsBrowseUrl = '/admin_asset/ckeditor/plugins/googledocs/documentsList.php';
		config.filebrowserImageBrowseUrl = '/admin_asset/ckeditor/kcfinder/browse.php?opener=ckeditor&type=images';
		config.filebrowserFlashBrowseUrl = '/admin_asset/ckeditor/kcfinder/browse.php?opener=ckeditor&type=flash';
		config.filebrowserImageUploadUrl = '/admin_asset/ckeditor/kcfinder/upload.php?opener=ckeditor&type=images';
		config.filebrowserFlashUploadUrl = '/admin_asset/ckeditor/kcfinder/upload.php?opener=ckeditor&type=flash';
		config.filebrowserUploadMethod = 'form';	
	}
	//Đặt giá trị mặc định cho ảnh Nội dung bài viết để responsve
	CKEDITOR.on('dialogDefinition', function (ev) {
		var dialogName = ev.data.name,
		dialogDefinition = ev.data.definition;
		if (dialogName == 'image') {
			var onOk = dialogDefinition.onOk;
			dialogDefinition.onOk = function (e) {
				var width = this.getContentElement('info', 'txtWidth');
            width.setValue('100%');//Set Default Width
            var height = this.getContentElement('info', 'txtHeight');
            height.setValue('');////Set Default height
            onOk && onOk.apply(this, e);
        };
    }
});