<style>
fieldset{
	width:400px;
	height:200px;
}
</style>
<?php
	$num=$_GET[a];

?>
<center>
<fieldset>
<form method=post action='delete.php?aa=<?php echo $num ?>'>
<br><br>↓비밀번호를 입력하세요↓<br><br>
	<input type="password" name="pass"></input><br><br>
	<input type="submit" value="확인"></input>

</fieldset>
</form>
</center>