<?php 
	require_once('scripts/sb_functions.php');
	global $logged_in;
	$logged_in = logged_in( true, true );
	
	read_config();
	
	require_once('languages/' . $blog_config[ 'blog_language' ] . '/strings.php');
	sb_language( 'options' );
	
	$dateArray = read_dateFormat();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=<?php echo( $lang_string[ 'html_charset' ] ); ?>" />
	<link rel="stylesheet" type="text/css" href="themes/<?php echo( $blog_theme ); ?>/style.css" />
	<?php require_once('themes/' . $blog_theme . '/user_style.php'); ?>
	<script language="javascript" src="scripts/sb_javascript.js" type="text/javascript"></script>
	<script type="text/javascript">
		<!--
		
		function longdate_view() {
			// Update the Long Date format preview field.
			
			var str = '';
			str = str + date_pulldown( document.forms[ 'setup' ][ 'lDate_slotOne' ].value, document.forms[ 'setup' ][ 'lDate_leadZeroDay' ].value, 'off', 'on' );
			str = str + document.forms[ 'setup' ][ 'lDate_slotOneSeparator' ].value;
			str = str + date_pulldown( document.forms[ 'setup' ][ 'lDate_slotTwo' ].value, document.forms[ 'setup' ][ 'lDate_leadZeroDay' ].value, 'off', 'on' );
			str = str + document.forms[ 'setup' ][ 'lDate_slotTwoSeparator' ].value;
			str = str + date_pulldown( document.forms[ 'setup' ][ 'lDate_slotThree' ].value, document.forms[ 'setup' ][ 'lDate_leadZeroDay' ].value, 'off', 'on' );
			str = str + document.forms[ 'setup' ][ 'lDate_slotThreeSeparator' ].value;
			str = str + date_pulldown( document.forms[ 'setup' ][ 'lDate_slotFour' ].value, document.forms[ 'setup' ][ 'lDate_leadZeroDay' ].value, 'off', 'on' );
			str = str + document.forms[ 'setup' ][ 'lDate_slotFourSeparator' ].value;
			
			document.forms[ 'setup' ][ 'longdate_preview' ].value = str;
		}
		
		function date_pulldown( val, leading_zero_day, leading_zero_month, full_century ) {
			// Return string dates in the correct format for the preview fields.
			
			var str = '';
			if ( val == 'weekday' ) {
				// Monday
				str = <?php echo( '\'' . strftime( '%A' ) . '\'' ); ?>;
			} else if ( val == 'month' ) {
				// January
				str = <?php echo( '\'' . strftime( '%B' ) . '\'' ); ?>;
			} else if ( val == 'month_short' ) {
				// Jan
				str = <?php echo( '\'' . strftime( '%b' ) . '\'' ); ?>;
			} else if ( val == 'month_decimal' ) {
				if ( leading_zero_month == 'on' ) {
					str = '01';
				} else {
					str = '1';
				}
			} else if ( val == 'day' ) {
				if ( leading_zero_day == 'on' ) {
					str = '09';
				} else {
					str = '9';
				}
			} else if ( val == 'year' ) {
				if ( full_century == 'on' ) {
					str = '2004';
				} else {
					str = '04';
				}
			} else if ( val == 'none' ) {
				str = '';
			}
			return str;
		}
		
		function shortdate_view() {
			// Update the Short Date format preview field.
			
			var str = '';
			var separator = document.forms[ 'setup' ][ 'sDate_separator' ].value;
			var leading_zero_day = document.forms[ 'setup' ][ 'sDate_leadZeroDay' ].value;
			var leading_zero_month = document.forms[ 'setup' ][ 'sDate_leadZeroMonth' ].value;
			var full_century = document.forms[ 'setup' ][ 'sDate_fullYear' ].value;
			
			switch ( document.forms[ 'setup' ][ 'sDate_order' ].value ) {
				case 'Month/Day/Year':
					str = str + date_pulldown( 'month_decimal', leading_zero_day, leading_zero_month, full_century );
					str = str + separator;
					str = str + date_pulldown( 'day', leading_zero_day, leading_zero_month, full_century );
					str = str + separator;
					str = str + date_pulldown( 'year', leading_zero_day, leading_zero_month, full_century );
					break;
				case 'Day/Month/Year':
					str = str + date_pulldown( 'day', leading_zero_day, leading_zero_month, full_century );
					str = str + separator;
					str = str + date_pulldown( 'month_decimal', leading_zero_day, leading_zero_month, full_century );
					str = str + separator;
					str = str + date_pulldown( 'year', leading_zero_day, leading_zero_month, full_century );
					break;
				case 'Year/Month/Day':
					str = str + date_pulldown( 'year', leading_zero_day, leading_zero_month, full_century );
					str = str + separator;
					str = str + date_pulldown( 'month_decimal', leading_zero_day, leading_zero_month, full_century );
					str = str + separator;
					str = str + date_pulldown( 'day', leading_zero_day, leading_zero_month, full_century );
					break;
				case 'Month/Year/Day':
					str = str + date_pulldown( 'month_decimal', leading_zero_day, leading_zero_month, full_century );
					str = str + separator;
					str = str + date_pulldown( 'year', leading_zero_day, leading_zero_month, full_century );
					str = str + separator;
					str = str + date_pulldown( 'day', leading_zero_day, leading_zero_month, full_century );
					break;
				case 'Day/Year/Month':
					str = str + date_pulldown( 'day', leading_zero_day, leading_zero_month, full_century );
					str = str + separator;
					str = str + date_pulldown( 'year', leading_zero_day, leading_zero_month, full_century );
					str = str + separator;
					str = str + date_pulldown( 'month_decimal', leading_zero_day, leading_zero_month, full_century );
					break;
				case 'Year/Day/Month':
					str = str + date_pulldown( 'year', leading_zero_day, leading_zero_month, full_century );
					str = str + separator;
					str = str + date_pulldown( 'day', leading_zero_day, leading_zero_month, full_century );
					str = str + separator;
					str = str + date_pulldown( 'month_decimal', leading_zero_day, leading_zero_month, full_century );
					break;
				case 'Day/MMM/Year':
					str = str + date_pulldown( 'day', leading_zero_day, leading_zero_month, full_century );
					str = str + separator;
					str = str + date_pulldown( 'month_short', leading_zero_day, leading_zero_month, full_century );
					str = str + separator;
					str = str + date_pulldown( 'year', leading_zero_day, leading_zero_month, full_century );
					break;
			}
			
			document.forms[ 'setup' ][ 'shortdate_preview' ].value = str;
			
		}
		
		function time_view() {
			// Update the Time format preview field.
			
			var str = '';
			
			var leading_zero_hour = document.forms[ 'setup' ][ 'time_leadZeroHour' ].value;
			var before_noon = document.forms[ 'setup' ][ 'time_AM' ].value;
			var after_noon = document.forms[ 'setup' ][ 'time_PM' ].value;
			var separator = document.forms[ 'setup' ][ 'time_separator' ].value;
			
			for ( i=0; i<document.forms[ 'setup' ][ 'time_clockFormat' ].length; i++ ) {
				if ( document.forms[ 'setup' ][ 'time_clockFormat' ][i].checked ) {
					var time_clockFormat = document.forms[ 'setup' ][ 'time_clockFormat' ][i].value;
				}
			}
			
			if ( time_clockFormat == "24" ) {
				if ( leading_zero_hour == 'on' ) {
					str = str + "00" + separator + "34";
					str = str + "   ";
					str = str + "16" + separator + "56";
				} else {
					str = str + "0" + separator + "34";
					str = str + "   ";
					str = str + "16" + separator + "56";
				}
			} else {
				if ( leading_zero_hour == 'on' ) {
					str = str + "12" + separator + "34" + before_noon;
					str = str + "   ";
					str = str + "04" + separator + "56" + after_noon;
				} else {
					str = str + "12" + separator + "34" + before_noon;
					str = str + "   ";
					str = str + "4" + separator + "56" + after_noon;
				}
			}
			
			document.forms[ 'setup' ][ 'time_preview' ].value = str;
		}
		//-->
	</script>
	<title><?php echo($blog_config[ 'blog_title' ]); ?> - <?php echo( $lang_string[ 'title' ] ); ?></title>
</head>
<?php 
	function page_content() {
		global $lang_string, $user_colors;
		global $dateArray;
		
		?>
		
		<script type="text/javascript">
		/* Added as a script so that it doesn't need the body elements' attribute onload="" */
		window.onload = longdate_view(); shortdate_view(); time_view();
		</script>
		
		<h2><?php echo( $lang_string[ 'title' ] ); ?></h2>
		<?php echo( $lang_string[ 'instructions' ] ); ?><p />
		
		<div class="hr"><hr /></div>
		
		<form action="options_cgi.php" method="POST" name="setup" id="setup" onSubmit="return validate(this)">
			
			<?php echo( $lang_string[ 'ldate_title' ] ); ?><br /><br />
			<table border="0" cellspacing="0" cellpadding="0">
				<tr valign="top">
					<td width="195">
						<select name="lDate_slotOne" id="lDate_slotOne" onChange="longdate_view();">
							<option label="<?php echo( $lang_string[ 'weekday' ] ); ?>" value="weekday"<?php if ( $dateArray[ 'lDate_slotOne' ] == 'weekday') { echo ( ' selected="selected"'); } ?>><?php echo( $lang_string[ 'weekday' ] ); ?></option>
							<option label="<?php echo( $lang_string[ 'month' ] ); ?>" value="month"<?php if ( $dateArray[ 'lDate_slotOne' ] == 'month') { echo ( ' selected="selected"'); } ?>><?php echo( $lang_string[ 'month' ] ); ?></option>
							<option label="<?php echo( $lang_string[ 'day' ] ); ?>" value="day"<?php if ( $dateArray[ 'lDate_slotOne' ] == 'day') { echo ( ' selected="selected"'); } ?>><?php echo( $lang_string[ 'day' ] ); ?></option>
							<option label="<?php echo( $lang_string[ 'year' ] ); ?>" value="year"<?php if ( $dateArray[ 'lDate_slotOne' ] == 'year') { echo ( ' selected="selected"'); } ?>><?php echo( $lang_string[ 'year' ] ); ?></option>
							<option label="<?php echo( $lang_string[ 'none' ] ); ?>" value="none"<?php if ( $dateArray[ 'lDate_slotOne' ] == 'none') { echo ( ' selected="selected"'); } ?>><?php echo( $lang_string[ 'none' ] ); ?></option>
						</select>
						<input type="text" name="lDate_slotOneSeparator" id="lDate_slotOneSeparator" size="6" value="<?php echo ( $dateArray[ 'lDate_slotOneSeparator' ] ); ?>" onblur="longdate_view();" /><br />
						
						<select name="lDate_slotTwo" id="lDate_slotTwo" onChange="longdate_view();">
							<option label="<?php echo( $lang_string[ 'weekday' ] ); ?>" value="weekday"<?php if ( $dateArray[ 'lDate_slotTwo' ] == 'weekday') { echo ( ' selected="selected"'); } ?>><?php echo( $lang_string[ 'weekday' ] ); ?></option>
							<option label="<?php echo( $lang_string[ 'month' ] ); ?>" value="month"<?php if ( $dateArray[ 'lDate_slotTwo' ] == 'month') { echo ( ' selected="selected"'); } ?>><?php echo( $lang_string[ 'month' ] ); ?></option>
							<option label="<?php echo( $lang_string[ 'day' ] ); ?>" value="day"<?php if ( $dateArray[ 'lDate_slotTwo' ] == 'day') { echo ( ' selected="selected"'); } ?>><?php echo( $lang_string[ 'day' ] ); ?></option>
							<option label="<?php echo( $lang_string[ 'year' ] ); ?>" value="year"<?php if ( $dateArray[ 'lDate_slotTwo' ] == 'year') { echo ( ' selected="selected"'); } ?>><?php echo( $lang_string[ 'year' ] ); ?></option>
							<option label="<?php echo( $lang_string[ 'none' ] ); ?>" value="none"<?php if ( $dateArray[ 'lDate_slotTwo' ] == 'none') { echo ( ' selected="selected"'); } ?>><?php echo( $lang_string[ 'none' ] ); ?></option>
						</select>
						<input type="text" name="lDate_slotTwoSeparator" id="lDate_slotTwoSeparator" size="6" value="<?php echo ( $dateArray[ 'lDate_slotTwoSeparator' ] ); ?>" onblur="longdate_view();" /><br />
						
						<select name="lDate_slotThree" id="lDate_slotThree" onChange="longdate_view();">
							<option label="<?php echo( $lang_string[ 'weekday' ] ); ?>" value="weekday"<?php if ( $dateArray[ 'lDate_slotThree' ] == 'weekday') { echo ( ' selected="selected"'); } ?>><?php echo( $lang_string[ 'weekday' ] ); ?></option>
							<option label="<?php echo( $lang_string[ 'month' ] ); ?>" value="month"<?php if ( $dateArray[ 'lDate_slotThree' ] == 'month') { echo ( ' selected="selected"'); } ?>><?php echo( $lang_string[ 'month' ] ); ?></option>
							<option label="<?php echo( $lang_string[ 'day' ] ); ?>" value="day"<?php if ( $dateArray[ 'lDate_slotThree' ] == 'day') { echo ( ' selected="selected"'); } ?>><?php echo( $lang_string[ 'day' ] ); ?></option>
							<option label="<?php echo( $lang_string[ 'year' ] ); ?>" value="year"<?php if ( $dateArray[ 'lDate_slotThree' ] == 'year') { echo ( ' selected="selected"'); } ?>><?php echo( $lang_string[ 'year' ] ); ?></option>
							<option label="<?php echo( $lang_string[ 'none' ] ); ?>" value="none"<?php if ( $dateArray[ 'lDate_slotThree' ] == 'none') { echo ( ' selected="selected"'); } ?>><?php echo( $lang_string[ 'none' ] ); ?></option>
						</select>
						<input type="text" name="lDate_slotThreeSeparator" id="lDate_slotThreeSeparator" size="6" value="<?php echo ( $dateArray[ 'lDate_slotThreeSeparator' ] ); ?>" onblur="longdate_view();" /><br />
						
						<select name="lDate_slotFour" id="lDate_slotFour" onChange="longdate_view();">
							<option label="<?php echo( $lang_string[ 'weekday' ] ); ?>" value="weekday"<?php if ( $dateArray[ 'lDate_slotFour' ] == 'weekday') { echo ( ' selected="selected"'); } ?>><?php echo( $lang_string[ 'weekday' ] ); ?></option>
							<option label="<?php echo( $lang_string[ 'month' ] ); ?>" value="month"<?php if ( $dateArray[ 'lDate_slotFour' ] == 'month') { echo ( ' selected="selected"'); } ?>><?php echo( $lang_string[ 'month' ] ); ?></option>
							<option label="<?php echo( $lang_string[ 'day' ] ); ?>" value="day"<?php if ( $dateArray[ 'lDate_slotFour' ] == 'day') { echo ( ' selected="selected"'); } ?>><?php echo( $lang_string[ 'day' ] ); ?></option>
							<option label="<?php echo( $lang_string[ 'year' ] ); ?>" value="year"<?php if ( $dateArray[ 'lDate_slotFour' ] == 'year') { echo ( ' selected="selected"'); } ?>><?php echo( $lang_string[ 'year' ] ); ?></option>
							<option label="<?php echo( $lang_string[ 'none' ] ); ?>" value="none"<?php if ( $dateArray[ 'lDate_slotFour' ] == 'none') { echo ( ' selected="selected"'); } ?>><?php echo( $lang_string[ 'none' ] ); ?></option>
						</select>
						<input type="text" name="lDate_slotFourSeparator" id="lDate_slotFourSeparator" size="6" value="<?php echo ( $dateArray[ 'lDate_slotFourSeparator' ] ); ?>" onblur="longdate_view();" /><br />
					</td>
					<td>
						<input type="checkbox" id="lDate_leadZeroDay" name="lDate_leadZeroDay" onClick="longdate_view();"<?php if ( $dateArray[ 'lDate_leadZeroDay' ] == 'on') { echo ( ' checked'); } ?> /><?php echo( $lang_string[ 'zero_day' ] ); ?><br /><br />
						
						<?php echo( $lang_string[ 'preview' ] ); ?><br />
						<input type="text" name="longdate_preview" id="longdate_preview" size="20" /><br />
					</td>
				</tr>
			</table>
			
			<div class="hr"><hr /></div>
			
			<?php echo( $lang_string[ 'sdate_title' ] ); ?><br /><br />
			<table border="0" cellspacing="0" cellpadding="0">
				<tr valign="top">
					<td width="195">
						<select name="sDate_order" id="sDate_order" onChange="shortdate_view();">
							<?php $temp = $lang_string[ 's_month' ] . '/' . $lang_string[ 's_day' ] . '/' . $lang_string[ 's_year' ]; ?>
							<option label="<?php echo( $temp ); ?>" value="Month/Day/Year"<?php if ( $dateArray[ 'sDate_order' ] == 'Month/Day/Year') { echo ( ' selected="selected"'); } ?>><?php echo( $temp ); ?></option>
							<?php $temp = $lang_string[ 's_day' ] . '/' . $lang_string[ 's_month' ] . '/' . $lang_string[ 's_year' ]; ?>
							<option label="<?php echo( $temp ); ?>" value="Day/Month/Year"<?php if ( $dateArray[ 'sDate_order' ] == 'Day/Month/Year') { echo ( ' selected="selected"'); } ?>><?php echo( $temp ); ?></option>
							<?php $temp = $lang_string[ 's_year' ] . '/' . $lang_string[ 's_month' ] . '/' . $lang_string[ 's_day' ]; ?>
							<option label="<?php echo( $temp ); ?>" value="Year/Month/Day"<?php if ( $dateArray[ 'sDate_order' ] == 'Year/Month/Day') { echo ( ' selected="selected"'); } ?>><?php echo( $temp ); ?></option>
							<?php $temp = $lang_string[ 's_month' ] . '/' . $lang_string[ 's_year' ] . '/' . $lang_string[ 's_day' ]; ?>
							<option label="<?php echo( $temp ); ?>" value="Month/Year/Day"<?php if ( $dateArray[ 'sDate_order' ] == 'Month/Year/Day') { echo ( ' selected="selected"'); } ?>><?php echo( $temp ); ?></option>
							<?php $temp = $lang_string[ 's_day' ] . '/' . $lang_string[ 's_year' ] . '/' . $lang_string[ 's_month' ]; ?>
							<option label="<?php echo( $temp ); ?>" value="Day/Year/Month"<?php if ( $dateArray[ 'sDate_order' ] == 'Day/Year/Month') { echo ( ' selected="selected"'); } ?>><?php echo( $temp ); ?></option>
							<?php $temp = $lang_string[ 's_year' ] . '/' . $lang_string[ 's_day' ] . '/' . $lang_string[ 's_month' ]; ?>
							<option label="<?php echo( $temp ); ?>" value="Year/Day/Month"<?php if ( $dateArray[ 'sDate_order' ] == 'Year/Day/Month') { echo ( ' selected="selected"'); } ?>><?php echo( $temp ); ?></option>
							<?php $temp = $lang_string[ 's_day' ] . '/' . $lang_string[ 's_mon' ] . '/' . $lang_string[ 's_year' ]; ?>
							<option label="<?php echo( $temp ); ?>" value="Day/MMM/Year"<?php if ( $dateArray[ 'sDate_order' ] == 'Day/MMM/Year') { echo ( ' selected="selected"'); } ?>><?php echo( $temp ); ?></option>
						</select><br /><br />
						<?php echo( $lang_string[ 'separator' ] ); ?><br />
						<input type="text" name="sDate_separator" id="sDate_separator" value="<?php echo ( $dateArray[ 'sDate_separator' ] ); ?>" size="6" onblur="shortdate_view();" /><br />
					</td>
					<td>
						<input type="checkbox" id="sDate_leadZeroDay" name="sDate_leadZeroDay" onClick="shortdate_view();"<?php if ( $dateArray[ 'sDate_leadZeroDay' ] == 'on') { echo ( ' checked'); } ?> /><?php echo( $lang_string[ 'zero_day' ] ); ?><br />
						<input type="checkbox" id="sDate_leadZeroMonth" name="sDate_leadZeroMonth" onClick="shortdate_view();"<?php if ( $dateArray[ 'sDate_leadZeroMonth' ] == 'on') { echo ( ' checked'); } ?> /><?php echo( $lang_string[ 'zero_month' ] ); ?><br />
						<input type="checkbox" id="sDate_fullYear" name="sDate_fullYear" onClick="shortdate_view();"<?php if ( $dateArray[ 'sDate_fullYear' ] == 'on') { echo ( ' checked'); } ?> /><?php echo( $lang_string[ 'show_century' ] ); ?><br /><br />
						
						<?php echo( $lang_string[ 'preview' ] ); ?><br />
						<input type="text" name="shortdate_preview" id="shortdate_preview" size="20" value="" /><br />
					</td>
				</tr>
			</table>
			
			<div class="hr"><hr /></div>
			
			<?php echo( $lang_string[ 'time_title' ] ); ?><br /><br />
			<table border="0" cellspacing="0" cellpadding="0">
				<tr valign="top">
					<td width="195">
						<input type="radio" name="time_clockFormat" value="24" onClick="time_view();"<?php if ( $dateArray[ 'time_clockFormat' ] == '24') { echo ( ' checked'); } ?> /><?php echo( $lang_string[ '24hour' ] ); ?><br />
						<input type="radio" name="time_clockFormat" value="12" onClick="time_view();"<?php if ( $dateArray[ 'time_clockFormat' ] == '12') { echo ( ' checked'); } ?> /><?php echo( $lang_string[ '12hour' ] ); ?><br /><br />
						<input type="checkbox" id="time_leadZeroHour" name="time_leadZeroHour" onClick="time_view();"<?php if ( $dateArray[ 'time_leadZeroHour' ] == 'on') { echo ( ' checked'); } ?> /><?php echo( $lang_string[ 'zero_hour' ] ); ?><br />
					</td>
					<td>
						<input type="text" id="time_AM" name="time_AM" value="<?php echo ( $dateArray[ 'time_AM' ] ); ?>" size="6" onBlur="time_view();" /> <?php echo( $lang_string[ 'before_noon' ] ); ?><br />
						<input type="text" id="time_PM" name="time_PM" value="<?php echo ( $dateArray[ 'time_PM' ] ); ?>" size="6" onBlur="time_view();" /> <?php echo( $lang_string[ 'after_noon' ] ); ?><br />
						<input type="text" id="time_separator" name="time_separator" value="<?php echo ( $dateArray[ 'time_separator' ] ); ?>" size="6" onBlur="time_view();" /> <?php echo( $lang_string[ 'separator' ] ); ?><br /><br />
						
						<?php echo( $lang_string[ 'preview' ] ); ?><br />
						<input type="text" id="time_preview" name="time_preview" size="20" value="" /><br />
					</td>
				</tr>
			</table>
			
			<div class="hr"><hr /></div>
			
			<?php echo( $lang_string[ 'date_title' ] ); ?><br />
			<select name="eFormat_slotOne" id="eFormat_slotOne">
				<option label="<?php echo( $lang_string[ 'long_date' ] ); ?>" value="long"<?php if ( $dateArray[ 'eFormat_slotOne' ] == 'long') { echo ( ' selected="selected"'); } ?>><?php echo( $lang_string[ 'long_date' ] ); ?></option>
				<option label="<?php echo( $lang_string[ 'short_date' ] ); ?>" value="short"<?php if ( $dateArray[ 'eFormat_slotOne' ] == 'short') { echo ( ' selected="selected"'); } ?>><?php echo( $lang_string[ 'short_date' ] ); ?></option>
				<option label="<?php echo( $lang_string[ 'time' ] ); ?>" value="time"<?php if ( $dateArray[ 'eFormat_slotOne' ] == 'time') { echo ( ' selected="selected"'); } ?>><?php echo( $lang_string[ 'time' ] ); ?></option>
				<option label="<?php echo( $lang_string[ 'none' ] ); ?>" value="none"<?php if ( $dateArray[ 'eFormat_slotOne' ] == 'none') { echo ( ' selected="selected"'); } ?>><?php echo( $lang_string[ 'none' ] ); ?></option>
			</select>
			<input type="text" name="eFormat_separator" id="eFormat_separator" size="6" value="<?php echo ( $dateArray[ 'eFormat_separator' ] ); ?>" />
			<select name="eFormat_slotTwo" id="eFormat_slotTwo">
				<option label="<?php echo( $lang_string[ 'long_date' ] ); ?>" value="long"<?php if ( $dateArray[ 'eFormat_slotTwo' ] == 'long') { echo ( ' selected="selected"'); } ?>><?php echo( $lang_string[ 'long_date' ] ); ?></option>
				<option label="<?php echo( $lang_string[ 'short_date' ] ); ?>" value="short"<?php if ( $dateArray[ 'eFormat_slotTwo' ] == 'short') { echo ( ' selected="selected"'); } ?>><?php echo( $lang_string[ 'short_date' ] ); ?></option>
				<option label="<?php echo( $lang_string[ 'time' ] ); ?>" value="time"<?php if ( $dateArray[ 'eFormat_slotTwo' ] == 'time') { echo ( ' selected="selected"'); } ?>><?php echo( $lang_string[ 'time' ] ); ?></option>
				<option label="<?php echo( $lang_string[ 'none' ] ); ?>" value="none"<?php if ( $dateArray[ 'eFormat_slotTwo' ] == 'none') { echo ( ' selected="selected"'); } ?>><?php echo( $lang_string[ 'none' ] ); ?></option>
			</select><br /><br />
			
			<?php echo( $lang_string[ 'menu_title' ] ); ?><br />
			<select name="mFormat" id="mFormat">
				<option label="<?php echo( $lang_string[ 'long_date' ] ); ?>" value="long"<?php if ( $dateArray[ 'mFormat' ] == 'long') { echo ( ' selected="selected"'); } ?>><?php echo( $lang_string[ 'long_date' ] ); ?></option>
				<option label="<?php echo( $lang_string[ 'short_date' ] ); ?>" value="short"<?php if ( $dateArray[ 'mFormat' ] == 'short') { echo ( ' selected="selected"'); } ?>><?php echo( $lang_string[ 'short_date' ] ); ?></option>
			</select>
			
			<div class="hr"><hr /></div>
													
			<?php echo( $lang_string[ 'server_offset' ] . ' ' . strftime( '%R ( %r )' ) ); ?><br />
			<input type="text" id="server_offset" name="server_offset" value="<?php echo ( $dateArray[ 'server_offset' ] ); ?>" size="6" />
			
			<div class="hr"><hr /></div>
			
			<input type="submit" name="submit" value="<?php echo( $lang_string[ 'submit_btn' ] ); ?>" /><br /><br />
		</form>
		
		<?php 
	}
?>
<?php 
	theme_pagelayout();
?>

</html>
