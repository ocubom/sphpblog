	<script type="text/javascript">
		<!--
		// Insert Style Tags
		function ins_styles(theform,sb_code,prompt_text,tag_prompt) {
			// insert [x]yyy[/x] style markup
			inserttext = prompt( '<?php echo( $lang_string['insert_styles'] ); ?>'+"\n["+sb_code+"]xxx[/"+sb_code+"]", prompt_text);
			if ( (inserttext != null) ) {
				theform.value += " ["+sb_code+"]"+inserttext+"[/"+sb_code+"]";
				theform.focus();
			}
		}
		
		// Insert Style Tags
		function ins_style_dropdown(theform, sb_code) {
			// insert [sb_code]xxx[/sb_code] style markup
			if ( sb_code != '--' ) {
				prompt_text = '[' + sb_code + ']xxx[/' + sb_code + ']';
				user_input = prompt( prompt_text, '' );
				if ( (user_input != null) ) {
					theform.value += '['+sb_code+']'+user_input+'[/'+sb_code+']';
					theform.focus();
				}
			}
		}
		
		// Insert Image Tag
		function ins_image(theform,prompt_text) {
			// insert [x]yyy[/x] style markup
			inserttext = prompt('<?php echo( $lang_string['insert_image'] ); ?>'+"\n[img="+prompt_text+"xxx]",prompt_text);
			if ((inserttext != null) && (inserttext != "")) {
				theform.value += "[img="+inserttext+"] ";
			}
			theform.focus();
		}
		
		// Insert Image Tag
		function ins_image_v2(theform) {
			image_url = prompt('<?php echo( $lang_string['insert_image'] ); ?>'+'\n[img=http://xxx] or [img=xxx]\n\n<?php echo( $lang_string['insert_image_optional'] ); ?>\nwidth=xxx height=xxx popup=true/false float=left/right','http://');
			if ((image_url != null) && (image_url != '')) {
				// Optional
				image_width = prompt('<?php echo( $lang_string['insert_image_width'] ); ?>'+'\n[img=xxx width=xxx]','');
				image_height = prompt('<?php echo( $lang_string['insert_image_height'] ); ?>'+'\n[img=xxx height=xxx]','');
				image_popup = prompt('<?php echo( $lang_string['insert_image_popup'] ); ?>'+'\n[img=xxx popup=true/false]', '');
				image_float = prompt('<?php echo( $lang_string['insert_image_float'] ); ?>'+'\n[img=xxx float=left/right]','');
				
				str = '[img='+image_url;
				if ((image_width != null) && (image_width != '')) {
					str += ' width='+image_width;
				}
				if ((image_height != null) && (image_height != '')) {
					str += ' height='+image_height;
				}
				if ((image_popup != null) && (image_popup != '')) {
					image_popup.toLowerCase;
					if ( image_popup == 'true' || image_popup == 'false' ) {
						str += ' popup='+image_popup;
					}
				}
				if ((image_float != null) && (image_float != '')) {
					image_float.toLowerCase;
					if ( image_float == 'left' || image_float == 'right' ) {
						str += ' float='+image_float;
					}
				}
				str += ']';
				
				theform.value += str;
				theform.focus();
			
			}
		}
		
		// Insert Image Dropdown Menu
		function ins_image_dropdown(theform,theImage) {
			if (theImage.value != "--") {
				theform.value += theImage.value;
				theform.focus();
			}
		}
		
		// Insert URL Tag
		function ins_url(theform) {
			// inserts named url link - [url=mylink new=true]text[/url]
			link_url = prompt('<?php echo( $lang_string['insert_url2'] ); ?>'+'\n[url=xxx][/url]',"http://");
			if ( (link_url != null) ) {
				link_text = prompt('<?php echo( $lang_string['insert_url1'] ); ?>'+'\n[url=]xxx[/url]',"");
				if ( (link_text == null) || (link_text == '') ) {
					link_text = link_url;
				}
				link_target = prompt('<?php echo( $lang_string['insert_url3'] ); ?>'+'\n[url= new=true/false][/url]','');
				str = '[url='+link_url;
				if ((link_target != null) && (link_target != '')) {
					link_target.toLowerCase;
					if ( link_target == 'true' || link_target == 'false' ) {
						str += ' new='+link_target;
						
					}
				}
				str += ']'+link_text+'[/url] ';
				
				theform.value += str;
				theform.focus();
			}
		}
		
		// Insert URL Tag
		function ins_url_no_options(theform) {
			// inserts named url link - [url=mylink new=true]text[/url]
			link_url = prompt('<?php echo( $lang_string['insert_url2'] ); ?>'+'\n[url=xxx][/url]',"http://");
			if ( (link_url != null) ) {
				link_text = prompt('<?php echo( $lang_string['insert_url1'] ); ?>'+'\n[url=]xxx[/url]',"");
				if ( (link_text == null) || (link_text == '') ) {
					link_text = link_url;
				}
				str = '[url='+link_url+']'+link_text+'[/url] ';
				
				theform.value += str;
				theform.focus();
			}
		}
		
		// Validate the Form
		function validate(theform) {
			if (theform.blog_text.value=="" || theform.blog_subject.value=="") {
				alert("<?php echo( $lang_string['form_error'] ); ?>");
				return false;
			} else {
				return true;
			}
		}
		
		// Validate the Form
		function validate_static(theform) {
			if (theform.blog_text.value=="" || theform.blog_subject.value=="" || theform.file_name.value=="" ) {
				alert("<?php echo( $lang_string['form_error'] ); ?>");
				return false;
			} else {
				return true;
			}
		}
		-->
	</script>
