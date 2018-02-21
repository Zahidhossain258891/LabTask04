<!--<?php
	
	if(isset($_POST['blood'])){
		echo "Blood Group :".$_POST['blood']."  ";
	}
	
?>-->

<form action="#" method="POST">
	<fieldset>
		<legend>Blood Group</legend>
		DD
		<select name="blood">
     <option></option>
	<option value="O+" <?php if(isset($_POST['blood']) && $_POST['blood']=='O+'){ echo "selected"; }?>>O+</option>
	<option value="B+" <?php if(isset($_POST['blood']) && $_POST['blood']=='B+'){ echo "selected"; }?>>B+</option>
	<option value="O-" <?php if(isset($_POST['blood']) && $_POST['blood']=='O-'){ echo "selected"; }?>>O-</option>
	<option value="A+" <?php if(isset($_POST['blood']) && $_POST['blood']=='A+'){ echo "selected"; }?>>A+</option>
      </select>
		<br/><br/>
		<input type="submit" name="submit" value="Submit" >
		<hr/>
	</fieldset>
</form>