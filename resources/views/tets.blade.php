<p><a href="<?=$domain_link;?>">Back</a></p>
<?php
if(!empty($_GET['token_version']))
{
?>
<div id="warning">
	<b>Warning!!!</b> You are viewing a previously saved version. Hitting "<b>Save</b>" button will update the live
	page.
	<br>
	<a href="?siteid=<?= $_GET['siteid']; ?>&domain=<?= $_GET['domain']; ?>&id=<?= $_GET['id']; ?>">Back to Live
		Version!</a>
</div>
<?php
}
?>
<form method="post">
	<?php
	if ( !empty($_GET['token_version']) )
	{
	$versionSql = 'SELECT tl.token,tv.value
                                      FROM site_token_list_version AS tl
                                      LEFT JOIN site_token_value_version AS tv ON tl.id = tv.version_id
                                      WHERE tl.id ="' . $_GET['token_version'] . '"';
	$versionData = mysql_query($versionSql);
	$versionData = mysql_fetch_array($versionData);
	error_check();
	?>
	<table border="0" cellpadding="10" cellspacing="1" class="table1">
		<tr>
			<td bgcolor="#F2F2F2">
				<acronym title="Maximum 100 Characters - please use only letters, numbers and dashes">Token
					Name</acronym>
			</td>
			<td bgcolor="#F2F2F2">
				<input type="text" name="token" maxlength="100" size="30" required="yes" validate="text"
				       message="Please enter token." value="<?=$versionData['token'];?>"/>
			</td>
			<td bgcolor="#F2F2F2"><acronym title="Token will be replaced with this default value in the CMS">Default
					Value</acronym>
			</td>
			<td bgcolor="#F2F2F2">
                <textarea cols="61" name="value" rows="15" required="yes" validate="text"
                          message="Please enter default token value."><?=$versionData['value'];?></textarea>
			</td>
		</tr>
		<tr>
			<td colspan="4" align="center" bgcolor="#F2F2F2">
				<input name="save" type="submit" value="Save"
				       onClick="validate(this.form); return document.formSubmit;">
			</td>
		</tr>
	</table>
	<?php
	}
	else
	{
	?>
	<table border="0" cellpadding="10" cellspacing="1" class="table1">
		<tr>
			<td bgcolor="#F2F2F2"><acronym title="Maximum 100 Characters - please use only letters, numbers and dashes">Token
					Name</acronym></td>
			<td bgcolor="#F2F2F2"><input type="text" name="token" maxlength="100" size="30" required="yes"
			                             validate="text" message="Please enter token." value="<?=$row['token'];?>"/>
			</td>
			<td bgcolor="#F2F2F2"><acronym title="Token will be replaced with this default value in the CMS">Default
					Value</acronym></td>
			<td bgcolor="#F2F2F2"><textarea cols="61" name="value" rows="15" required="yes" validate="text"
			                                message="Please enter default token value."><?=$row['value'];?></textarea>
			</td>
		</tr>
		<tr>
			<td colspan="4" align="center" bgcolor="#F2F2F2">
				<input name="save" type="submit" value="Save"
				       onClick="validate(this.form); return document.formSubmit;"></td>
		</tr>
	</table>
	<?php
	}
	?>


	<p align="center">&nbsp;</p>
</form>
<?php
if ( count($allVersionList) > 0 )
{
?>

<div id="scroll">
	<table id="admintable">

		<?php
		if(!empty($allVersionList))
		{
		?>
		<tr>
			<td colspan="2" bgcolor="e0e0e0"><b>Previously Saved Versions</b></td>
		</tr>
		<?php
		}
		$count = 0;
		foreach ( $allVersionList as $data )
		{
		if( $count == 0 )
		{
		?>
		<tr>
			<td colspan="2">
				<?php
				if ($data['token_id'] == $_GET['id']) {
					echo "<b>";
				}
				?>
				Saved on
				<a href="?siteid=<?= $_GET['siteid']; ?>&domain=<?= $_GET['domain']; ?>&id=<?= $_GET['id']; ?>">
					<?php $date = new \DateTime($data['timestamp']);
					echo $date->format('M jS Y g:ia'); ?></a>
				by <?= $data['u_fullname']; ?>
			</td>
		</tr>
		<?php

		$count++;
		}
		else{?>
		<tr>
			<td colspan="2">
				<?php
				if ($data['token_id'] == $_GET['city_page_settings_version']) {
					echo "<b>";
				}
				?>
				Saved on
				<a href="?siteid=<?= $_GET['siteid']; ?>&id=<?= $_GET['id']; ?>&domain=<?= $_GET['domain']; ?>&id=<?= $_GET['id']; ?>&token_version=<?= $data['id']; ?>">
					<?php
					$date = new \DateTime($data['timestamp']);
					echo $date->format('M jS Y g:ia');
					?>
				</a>
				by
				<?= $data['u_fullname']; ?> <?php if ($data['id'] == $_GET['token_version']) {
					echo " - Currently viewing this version</b>";
				} ?>
			</td>
		</tr>


		<?php }
		} ?>

	</table>
</div>
<?php
}
?>