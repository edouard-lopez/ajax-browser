<html style="padding:0px;margin:0px;">
<?php
	ini_set('upload_tmp_dir','./'); //    * upload_tmp_dir
	ini_set('file_uploads','true'); //    * file_uploads
	ini_set('max_execution_time','3600'); //    * max_execution_time
	ini_set('max_input_time','3600'); //    * max_input_time
	ini_set('memory_limit','1044M'); //    * memory_limit
	ini_set('post_max_size','1034M'); //    * post_max_size
	ini_set('upload_max_filesize','1024M'); //    * upload_max_filesize

echo '<body style="font-size:10px;padding:0px;margin:0px;" onload=""><img src="'.INSTAL_DIR.'icones/loader-2.gif" style="display:none;">';
if (!empty($_FILES))
{
	if (!empty($_FILES['aFile']))
	{
		if (!$_FILES['aFile']['error'])
		{
			if (FileTypeApprover($_FILES['aFile']['name']))
			{
				$DestFile = decode64($dest).$_FILES['aFile']['name'];
				if (move_uploaded_file($_FILES['aFile']['tmp_name'], $DestFile))
				{
					echo $DestFile.' > Complet ('.SizeConvert(filesize ($DestFile)).')<br>';
					if ($_SESSION['AJAX-B']['spy']['action'])
						file_put_contents ($_SESSION['AJAX-B']['spy_dir'].'/upload.spy', $_SESSION['AJAX-B']['login'].' ['.date ("d/m/y H:i:s",time()).'] > '.$DestFile.' ('.SizeConvert(filesize ($DestFile)).")\n", FILE_APPEND);
				}
				else echo $ABS[801].$DestFile."<br>".$ABS[802].' '.decode64($dest)."<br />";
			}
			else echo $ABS[803]."<br />";
		}
		else echo $ABS[804]." : \"".$_FILES['aFile']['name']."\"<br />";
	}
	else echo $ABS[805]."<br />";
}
if (isset($ultradownload) && strpos($ultradownload, '://')!=0)
{
	echo $GetFile = $ultradownload;
	echo $start = microtime_float();
	$New = file_get_contents($GetFile);
	file_put_contents (decode64($dest).UTF8basename($GetFile), $New);
	$end = microtime_float();
	if (is_file($New))
	{
		echo SizeConvert(filesize($version)).' > '.$end-$start." sec\n";
		if ($_SESSION['AJAX-B']['spy']['action'] && filesize(decode64($dest).UTF8basename($GetFile)) == strlen($New))
			file_put_contents ($_SESSION['AJAX-B']['spy_dir'].'/ultraDownload.spy', $_SESSION['AJAX-B']['login'].' ['.date ("d/m/y H:i:s",time()).'] > '.$GetFile.' > '.SizeConvert(filesize($New)).' > '.$end-$start." sec\n", FILE_APPEND);
	}
}
else
{
	echo $ABS[804]." : \"".$_FILES['aFile']['name']."\"<br />";
}
echo "Destination : ".decode64($dest)." ";?>
		<form METHOD="post" action="" enctype="multipart/form-data" style="padding:0px;margin:0px;">
			<input type="hidden" name="dest" value="<?php echo $dest;?>">
			<label>Ultra Download (Web to Web)</label><br/>
			<input type="input" name="ultradownload" value=""><input type="submit" onclick="this.parentNode.parentNode.firstChild.style.display='block';this.parentNode.style.display='none';" value="<?php echo $ABS[10];?>"><br/>
		</form>
		<form METHOD="post" action="" enctype="multipart/form-data" style="padding:0px;margin:0px;">
			<input type="hidden" name="dest" value="<?php echo $dest;?>">
			<label>Upload (Your file to Web)</label><br/>
			<input type="file" name="aFile" style="" onchange="this.parentNode.parentNode.firstChild.style.display='block';this.parentNode.style.display='none';this.parentNode.submit();">
		</form>
	</body>
</html>