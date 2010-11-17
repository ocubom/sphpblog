<?php

if ($blog_config->getTag('USE_JS_EDITOR')) {

?>

<link rel="stylesheet" type="text/css" href="scripts/plugins/markitup/markitup/skins/sphpblog/style.css" />
<link rel="stylesheet" type="text/css" href="scripts/plugins/markitup/markitup/sets/sphpblog/style.css" />

<script type="text/javascript" src="scripts/plugins/markitup/jquery-1.4.2.min.js"></script>
<script type="text/javascript" src="scripts/plugins/markitup/markitup/jquery.markitup.js"></script>
<script type="text/javascript" src="scripts/plugins/markitup/markitup/sets/sphpblog/set.js"></script>

<script type="text/javascript">
<!--
$(document).ready(function()	{
	// Add markItUp! to your textarea in one line
	$('#blog_text').markItUp(mySettings);
	
});
-->
</script>

<?php
}
?>

<script type="text/javascript">
	<!--
	
	// Insert Image Dropdown Menu
	function ins_image_dropdown(theform,theImage) {
		if (theImage.value != '-'+'-') {
			insertAtCaret(theform, theImage.value);
			theform.focus();
		}
	}
	
	//Insert Emoticon
	function ins_emoticon(theform, emoticon) {
		insertAtCaret(theform, emoticon);
		theform.focus();
	}
	
	// Validate the Form
	function validate(theform) {
		if (theform.blog_text.value=="" || theform.blog_subject.value=="") {
			alert("<?php echo( $lang_string[ 'form_error' ] ); ?>");
			return false;
		} else {
			return true;
		}
	}
	
	// Validate the Form
	function validate_static(theform) {
		if (theform.blog_text.value=="" || theform.blog_subject.value=="" || theform.file_name.value=="" ) {
			alert("<?php echo( $lang_string[ 'form_error' ] ); ?>");
			return false;
		} else {
			return true;
		}
	}

	function setCaretTo(obj, pos) {
		if(obj.createTextRange) {
			var range = obj.createTextRange();
			range.move('character', pos);
			range.select();
		} else if(obj.selectionStart) {
			obj.focus();
			obj.setSelectionRange(pos, pos);
		}
	}
	
	function insertAtCaret(obj, text) {
		var mytext;
		obj.focus();
		
		if (document.selection) {
			// 'Code For IE'
			text = ' ' + text + ' ';
			if (obj.createTextRange && obj.caretPos) {
				var caretPos = obj.caretPos;
				caretPos.text = caretPos.text.charAt(caretPos.text.length - 1) == ' ' ? text + ' ' : text;
				return;
			}
		} else if (obj.selectionStart!==false) {
			// 'Code for Gecko'
			var start = obj.selectionStart;
			var end   = obj.selectionEnd;
			
			obj.value = obj.value.substr(0, start) + text + obj.value.substr(end, obj.value.length);
		}
		
		if (start != null) {
			setCaretTo(obj, start + text.length);
		} else {
			obj.focus();
			obj.value += text;
		}
	}

	-->
</script>
