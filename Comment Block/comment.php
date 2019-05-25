<?php
	date_default_timezone_set("Asia/Bangkok");
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
	<title></title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
<?php
echo "<form>
	<input type='hidden' name='date' value='".date('d-m-Y H:i:s')."'>
	<textarea class="username" name='uid'></textarea><br>
	<textarea name='message'></textarea><br>
	<button type='submit' name='submit'>Comment</button>
</form>"
?>

</body>

</html>