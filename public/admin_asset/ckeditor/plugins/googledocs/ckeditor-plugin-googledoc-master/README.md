ckeditor-plugin-googledoc
=========================

Подключение плагина.
====================
1. Скопировать файлы в ckeditor/plugins/googledocs/
2. Add to config.js


  //  подключаю плагин
  
  // add plugin to CKEditor
  
  config.extraPlugins = '...,googledocs,...';
  
  //  по этому адресу обрабатывается загрузка документа на сервер
  
  // URL of a upload script
  
  config.filebrowserGoogledocsUploadUrl = 'http://site.com/documentUpload.php';
  
  //  по этому адресу можно получить список документов на сервере
  
  // URL where you can get a list of uploaded documents
  
  config.filebrowserGoogledocsBrowseUrl = 'http://site.com/documentsList.php';
  

3. A sample of documentUpload.php and documentsList.php you can get https://github.com/w3craftsman/ckeditor-plugin-googledoc.
4. Реализована возможность загрузки документов на сервер частями.
   Для этого части файла должны быть переименованы по формату:
   имя_файла.расширение.номер_части.всего_частей (например: text.txt.1.3, text.txt.2.3, text.txt.3.3)
   В процессе загрузки на сервер части файла "склеиваются", при этом части файла переименовываются по формату:
   имя_файла.расширение.начальный_номер_части-конечный_номер_части.всего_частей (например: text.txt.1-2.3)

