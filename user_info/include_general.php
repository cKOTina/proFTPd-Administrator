<?php
require_once('include_config.php');
require_once('include_language.php');

function doHeader($include_menu = true) {
	global $config_style_name;

	$config_proftp_admin_name = $GLOBALS['language']['name']['administrator'];
	?>
	<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
	<html>
		<head>
			<link rel="stylesheet" type="text/css" href="style/<?php echo $config_style_name . '/' . $config_style_name; ?>.css">
			<title><?php echo $config_proftp_admin_name; ?></title>
			<script src="jscript/functions.js" type="text/javascript"></script>
		</head>
		<body>
			<table class="outerBounds">
				<tr>
					<td>
							<table class="box">
								<tr><td class="box-main_title" align="center"><?php echo $config_proftp_admin_name; ?></td></tr>
								<tr><td><table class="box" style="border-style: none;"><tr><td></td></tr></table></td></tr>
							</table>
	<?php
							$main_menu[$GLOBALS['language']['menu']['log_out']]			= 'logout.php';
							if ($include_menu) doMenu($main_menu);
							echo '<br><br>';

}

function doFooter() {
					if (isset($GLOBALS['db']) && $GLOBALS['db']->log_has_errors())
						doErrorList($GLOBALS['language']['general']['error_db_errors'], $GLOBALS['db']->log_fetchlog());
					?>
					</td>
				</tr>
			</table>
		</body>
	</html>
	<?php
}

function doLogin() {
	global $config_language;
	?>
		<table class="box">
			<tr>
				<td class="box-headline">&gt;&gt; <?php echo $GLOBALS['language']['general']['log_in']; ?></td>
			</tr>
			<tr>
				<td>
					<form method="post" action="index.php">
						<table class="box" style="border-style: none;">
							<tr>
								<td width="100" class="box-sel-head"><?php echo $GLOBALS['language']['general']['username']; ?>:</td>
								<td width="220" class="box-sel" align="right">
									<input type="text" size="45" name="frm_username" style="width: 236px;">
								</td>

								<td width="*" class="box-sel">&nbsp;</td>
								<td width="130" class="box-sel-head"><?php echo $GLOBALS['language']['general']['password']; ?>:</td>
								<td width="220" class="box-sel" align="right">
									<input type="password" size="45" name="frm_password" style="width: 236px;">
								</td>
							</tr>

							<tr>
								<td width="100" class="box-sel-head"><?php echo $GLOBALS['language']['configure']['ui_language']; ?>:</td>
								<td class="box-sel" align="right">
									<select name="frm_language" style="width: 238px;">
										<option value="english"   <?php if (@$config_language == 'english')   echo 'selected'; ?>>English</option>
										<option value="hungarian" <?php if (@$config_language == 'hungarian') echo 'selected'; ?>>Hungarian</option>
										<option value="norwegian" <?php if (@$config_language == 'norwegian') echo 'selected'; ?>>Norwegian</option>
									</select>
								</td>
								<td width="*" class="box-sel">&nbsp;</td>
								<td width="130" class="box-sel-head">&nbsp;</td>
								<td width="220" class="box-sel">&nbsp;</td>
							</tr>
							<tr>
								<td colspan="5" align="right">
									<input type="submit" value="<?php echo $GLOBALS['language']['general']['log_in']; ?>">
								</td>
							</tr>
						</table>
					</form>
				</td>
			</tr>
		</table>
	<?php
}

function doError($type, $message) {
	?>
		<table class="box">
			<tr>
				<td class="box-headline">&gt;&gt; <?php echo $GLOBALS['language']['general']['error_occured']; ?></td>
			</tr>
			<tr>
				<td>
				<table class="box" style="border-style: none;">
					<tr><td width="*" class="box-sel" colspan="2">&nbsp;</td></tr>
					<tr>
						<td width="50" class="box-sel" valign="top"><?php echo $GLOBALS['language']['general']['error_type']; ?>:</td>
						<td width="*"  class="box-sel"><?php echo $type; ?></td>
					</tr>
					<tr>
						<td width="50" class="box-sel" valign="top"><?php echo $GLOBALS['language']['general']['error_details']; ?>:</td>
						<td width="*"  class="box-sel"><?php echo $message; ?></td>
					</tr>
					<tr><td width="*" class="box-sel" colspan="2">&nbsp;</td></tr>
				</table>
				</td>
			</tr>
		</table>
	<?php
}

function doErrorList($title = 'Error', $errorlist) {
	?>
		<br><br>
		<table class="box">
			<tr>
				<td class="box-headline">&gt;&gt; <?php echo $title; ?></td>
			</tr>
			<tr>
				<td>
				<table class="box" style="border-style: none;">
					<tr><td width="*" class="box-sel" colspan="2">&nbsp;</td></tr>
					<?php
						foreach ($errorlist as $item) {
							echo '<tr>';
							$item['category'] = str_replace('__', '&nbsp;&nbsp;&nbsp;\\_', $item['category']);
							if ($GLOBALS['db']->debug_mode && !$item['debug']) echo '<td width="50" class="box-sel" valign="top"><span class="error">' . $item['category'] . '</span></td>';
							else echo '	<td width="50" class="box-sel" valign="top">' . $item['category'] . '</td>';

							echo '	<td width="*"  class="box-sel">' . $item['description'] . '</td>';
							echo '</tr>';
						}
					?>
					<tr><td width="*" class="box-sel" colspan="2">&nbsp;</td></tr>
				</table>
				</td>
			</tr>
		</table>
	<?php
}

function doMenu($menu_objects) {
	echo '<table class="menu_box" style="border-style: none;"><tr><td>&nbsp;</td>';
	$first = 0;
	foreach ($menu_objects as $title => $link) {
		$first++;
		if ($title == "<spacer>" 	||
			$title == "<spacer_1>"	||
			$title == "<spacer_2>") echo '<td class="menu-spacer">&nbsp;</td>';
		else {
			if ($first != 0) echo '<td class="menu-element-space">&nbsp;</td>';

			if ($title == "<confirm_delete>") {
				echo '<td class="leaflet" align="center"><a href="' . $link . '" onclick="return confirm_delete(this)">' . $GLOBALS['language']['general']['delete'] . '</a></td>';
			}
			else echo '<td class="leaflet" align="center"><a href="' . $link . '">' . $title . '</a></td>';
		}
	}
	echo '</tr></table>';
}