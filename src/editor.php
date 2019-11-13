<?php
namespace irek\editor;

/**
*@abstract
*/
abstract class Quill
{
	abstract function run();
}

/**
* Вывод редактора
*/
class Editor {
	public function run(){
		echo '<div id="quillEditor" style="height:300px"></div>';
	}
}
?>
<script src="https://code.jquery.com/jquery-latest.js"></script>
<link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
<script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>
<script>
	$(document).ready(function(){
		var options = {
			modules: {
			toolbar: [
			  ['bold', 'italic'],
			  ['link'],
			  [{ list: 'ordered' }, { list: 'bullet' }]
			]
		  },
		  placeholder: 'Введите сообщение',
		  theme: 'snow'
		};
		var editor = new Quill('#quillEditor', options);
	});
</script>