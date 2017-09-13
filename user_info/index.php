<?php
	require_once('include_prepare.php');

	doHeader();
	$user_id   = $login->auth_userid;

	$user_list = $db->get_userlist_by_id($user_id);
	$user_data = $user_list[0];

	$ip_list = $db->get_associated_ipadresses($user_data['userid']);
	$uIP = '';
	foreach($ip_list as $ip) {
		if ($uIP == '') $uIP = $ip['address_ip'];
		else $uIP .= ', ' . $ip['address_ip'];
	}
	unset($ip_list);

	$group_list = $db->get_group_data();
	if ($config_ext['quota']['enabled'] == 1) $quota_data = $db->get_userquota_by_id($user_data['userid']);
?>
	<table class="box">
		<tr>
			<td class="box-headline">&gt;&gt; <?php echo strtoupper($user_data['userid'][0]) . substr($user_data['userid'], 1); ?></td>
		</tr>
		<tr>
			<td>
			<table class="box" style="border-style: none;">
				<tr>
					<td width="110"   class="box-sel-head" align="left"><?php echo $GLOBALS['language']['general']['username']; ?>:</td>
					<td width="100"  class="box-sel" align="left"><?php echo $user_data["userid"]; ?></td>
					<td width="*"  class="box-sel" align="center">&nbsp;</td>
					<td width="110"  class="box-sel-head" align="left"><?php echo $GLOBALS['language']['general']['homedirectory']; ?>:</td>
					<td width="100"  class="box-sel" align="left"><?php fix_home($user_data["homedir"]); ?></td>
					<td width="*"  class="box-sel" align="center">&nbsp;</td>
					<td width="110"   class="box-sel-head" align="left"><?php echo $GLOBALS['language']['general']['expiration']; ?>:</td>
					<td width="100"  class="box-sel" align="left"><?php echo format_date($user_data["expiration"]); ?></td>
				</tr>
				<tr>
					<td width="110"   class="box-sel-head" align="left"><?php echo $GLOBALS['language']['general']['userid']; ?>:</td>
					<td width="100"  class="box-sel" align="left"><?php echo $user_data["uid"]; ?></td>
					<td width="*"  class="box-sel" align="center">&nbsp;</td>
					<td width="110"  class="box-sel-head" align="left"><?php echo $GLOBALS['language']['general']['shell']; ?>:</td>
					<td width="100"  class="box-sel" align="left"><?php echo $user_data["shell"]; ?></td>
					<td width="*"  class="box-sel" align="center">&nbsp;</td>
					<td width="110"  class="box-sel-head" align="left"><?php echo $GLOBALS['language']['general']['lastlogin']; ?>:</td>
					<td width="100"  class="box-sel" align="left" valign="top"><?php echo format_date($user_data["lastlogin"]); ?></td>
				</tr>
				<tr>
					<td width="110"  class="box-sel-head" align="left"><?php echo $GLOBALS['language']['general']['groups']; ?>:</td>
					<td width="100"  class="box-sel" align="left">
					<?php
						echo '<span class="primarygroup">' .  $user_data['groupname'] . '</span>';
						if (isset($group_list["members"][$user_data["userid"]])) {
							foreach($group_list["members"][$user_data["userid"]] as $group) {
								echo ', ' . $group;
							}
						}
					?>
					</td>
					<td width="*"  class="box-sel" align="center">&nbsp;</td>
					<td width="110"  class="box-sel-head" align="left" valign="top"><?php echo $GLOBALS['language']['userv']['assoc_ip']; ?>:</td>
					<td width="100"  class="box-sel" align="left" rowspan="2" valign="top"><?php echo $uIP; ?></td>
					<td width="*"  class="box-sel" align="center">&nbsp;</td>
					<td width="110"  class="box-sel-head" align="left"><?php echo $GLOBALS['language']['general']['lastlogout']; ?>:</td>
					<td width="100"  class="box-sel" align="left" valign="top"><?php echo format_date($user_data["lastlogout"]); ?></td>
				</tr>
				<tr>
					<td width="105"   class="box-sel-head" align="left" valign="top"><?php echo $GLOBALS['language']['general']['disabled']; ?>:</td>
					<td width="100"  class="box-sel" align="left" valign="top"><?php
						if ($user_data["disabled"] == 0) echo $GLOBALS['language']['general']['no'];
						else echo '<span class="error">' . $GLOBALS['language']['general']['yes'] . '</span>';
					?></td>
					<td width="*"  class="box-sel" align="center">&nbsp;</td>
					<td width="100"  class="box-sel" align="left">&nbsp;</td>
					<td width="*"  class="box-sel" align="center">&nbsp;</td>
					<td width="110"  class="box-sel-head" align="left" valign="top"><?php echo $GLOBALS['language']['general']['numlogins']; ?>:</td>
					<td width="100"  class="box-sel" align="left" valign="top"><?php echo $user_data["6"]; ?></td>
				</tr>
				<tr><td colspan="8" class="box-sel">&nbsp;</td></tr>
				<tr><td colspan="8" class="box-subheadline"><?php echo $GLOBALS['language']['users']['pers_info']; ?></td></tr>
				<tr>
					<td width="110"   class="box-sel-head" align="left"><?php echo $GLOBALS['language']['general']['name']; ?>:</td>
					<td width="100"  class="box-sel" align="left"><?php echo $user_data["det_name"]; ?></td>
					<td width="*"  class="box-sel">&nbsp;</td>
					<td width="110"  class="box-sel-head" align="left" valign="top"><?php echo $GLOBALS['language']['general']['adress']; ?>:</td>
					<td width="100"  class="box-sel" align="left" rowspan="3" valign="top"><?php echo str_replace("\n", '<br>', $user_data["det_adress"]); ?></td>
					<td width="*"  class="box-sel">&nbsp;</td>
					<td width="110"   class="box-sel-head" align="left" valign="top"><?php echo $GLOBALS['language']['general']['notes']; ?>:</td>
					<td width="100"  class="box-sel" align="left" rowspan="3" valign="top"><?php echo format_longdetail($user_data["det_notes"]); ?></td>
				</tr>
				<tr>
					<td width="110"   class="box-sel-head" align="left"><?php echo $GLOBALS['language']['general']['email']; ?>:</td>
					<td width="100"  class="box-sel" align="left"><?php echo '<a href="mailto:' . $user_data["det_mail"] . '">' . $user_data["det_mail"] . '</a>'; ?></td>
					<td width="*"  class="box-sel">&nbsp;</td>
					<td width="100"  class="box-sel-head" align="left">&nbsp;</td>
					<td width="*"  class="box-sel">&nbsp;</td>
					<td width="100"   class="box-sel-head" align="left">&nbsp;</td>
				</tr>
				<tr>
					<td width="110"   class="box-sel-head" align="left">&nbsp;</td>
					<td width="100"  class="box-sel" align="left">&nbsp;</td>
					<td width="*"  class="box-sel">&nbsp;</td>
					<td width="100"  class="box-sel-head" align="left">&nbsp;</td>
					<td width="*"  class="box-sel">&nbsp;</td>
					<td width="100"   class="box-sel-head" align="left">&nbsp;</td>
				</tr>
				<?php
				if ($config_ext['quota']['enabled'] == 1 && $quota_data['have_quota'] == true && (
					$quota_data['total']['bytes_in_avail'] 		> 0 ||
					$quota_data['total']['bytes_out_avail'] 	> 0 ||
					$quota_data['total']['bytes_xfer_avail'] 	> 0 ||
					$quota_data['total']['files_in_avail'] 		> 0 ||
					$quota_data['total']['files_out_avail'] 	> 0 ||
					$quota_data['total']['files_xfer_avail'] 	> 0
					)) {
					?>
					<tr><td colspan="8" class="box-subheadline"><?php echo $GLOBALS['language']['userv']['quota_used']; ?></td></tr>
					<?php
					if ($quota_data['total']['bytes_out_avail'] > 0)
						make_quota_graph($GLOBALS['language']['configure']['quota_down_mb'],
										byte2mb($quota_data['used']['bytes_out_used']),
										byte2mb($quota_data['total']['bytes_out_avail']));

					if ($quota_data['total']['bytes_in_avail'] > 0)
						make_quota_graph($GLOBALS['language']['configure']['quota_up_mb'],
										byte2mb($quota_data['used']['bytes_in_used']),
										byte2mb($quota_data['total']['bytes_in_avail']));

					if ($quota_data['total']['bytes_xfer_avail'] > 0)
						make_quota_graph($GLOBALS['language']['configure']['quota_trans_mb'],
										byte2mb($quota_data['used']['bytes_xfer_used']),
										byte2mb($quota_data['total']['bytes_xfer_avail']));

					if ($quota_data['total']['files_out_avail'] > 0)
						make_quota_graph($GLOBALS['language']['configure']['quota_down_files'],
										$quota_data['used']['files_out_used'],
										$quota_data['total']['files_out_avail']);

					if ($quota_data['total']['files_in_avail'] > 0)
						make_quota_graph($GLOBALS['language']['configure']['quota_up_files'],
										$quota_data['used']['files_in_used'],
										$quota_data['total']['files_in_avail']);

					if ($quota_data['total']['files_xfer_avail'] > 0)
						make_quota_graph($GLOBALS['language']['configure']['quota_trans_files'],
										$quota_data['used']['files_xfer_used'],
										$quota_data['total']['files_xfer_avail']);
				}
				?>
			</table>
			</td>
		</tr>
	</table>
<?php
	$user_menu[$GLOBALS['language']['menu']['traffic']]			= $_SERVER['PHP_SELF'] . '?section=traffic';
	$user_menu[$GLOBALS['language']['menu']['section']]			= $_SERVER['PHP_SELF'] . '?section=section';
	$user_menu[$GLOBALS['language']['menu']['transfer_log']]	= $_SERVER['PHP_SELF'] . '?section=transferlog';
	doMenu($user_menu);
	unset($user_menu);
	echo '<br><br>';

	if (isset($_GET["section"]) and $_GET["section"] == "alter")
			include('user_view_alter.php');

	if (isset($_GET["section"]) and $_GET["section"] == "traffic")
		make_traffic_time($GLOBALS['language']['userv']['generated_traffic'], $user_data["userid"]);

	if (isset($_GET["section"]) and $_GET["section"] == "section") {
		make_traffic_section($GLOBALS['language']['userv']['down_sections'], $user_data["userid"], "RETR");
		echo '<br><br>';
		make_traffic_section($GLOBALS['language']['userv']['up_sections'], $user_data["userid"], "STOR");
	}

	if (isset($_GET["section"]) and $_GET["section"] == "transferlog") {
		$logskip = 0;
		if (isset($_GET["logskip"]) && $_GET["logskip"] !=0) $logskip = (int) $_GET["logskip"];

		make_logviewer($logskip, $_SERVER['PHP_SELF'] . '?section=transferlog&amp;', $user_data["userid"]);
	}
	doFooter();



	function format_longdetail($detail) {
		return wordwrap($detail, 25, "<br>", 1);
	}

	function make_quota_graph($label, $used, $total) {
		global $config_style_name;

		$percent= (int)(($used / $total) * 100);
		if ($percent > 100) $percent = 100;

		$color	= getColor($percent);
		$size	= ($percent * 300 / 100);

		echo '<tr onmouseover="if (typeof(this.style) != \'undefined\') this.className = \'overRow\';" onmouseout="if (typeof(this.style) != \'undefined\') this.className = \'\'">';
		echo '<td colspan="2" class="box-sel-head">' . $label . ':</td>';
		echo '<td colspan="5" class="box-sel" align="center">';
		echo '<img src="style/' . $config_style_name . '/' . $color . '.gif" width="' . $size . '" height="8" class="bar-left" alt="' . $percent . '%">';
		echo '<img src="style/' . $config_style_name . '/black.gif" width="' . (300 - $size) . '" height="8" class="bar-right" alt="' . (100 - $percent) . '%">';
		echo '</td>';
		echo '<td colspan="1" class="box-sel" align="right">' . $used . ' / ' . $total . '</td>';
		echo '</tr>';
	}

	function format_date($date) {
		if ($date == '0000-00-00 00:00:00') return '<span class="error">' . $GLOBALS['language']['general']['expiration_never'] . '</span>';
		else return $date;
	}
?>