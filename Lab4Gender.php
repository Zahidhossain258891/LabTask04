<form action="#" method="POST">
	<fieldset>
		<legend>Gender</legend>
		     <input type="radio" name="gender" value="Male" <?php if(isset($_POST['gender']) && $_POST['gender']=='Male'){ echo "checked"; }?> >Male 
             <input type="radio" name="gender" value="female" <?php if(isset($_POST['gender']) && $_POST['gender']=='female'){ echo "checked"; }?> > Female
             <input type="radio" name="gender" value="other" <?php if(isset($_POST['gender']) && $_POST['gender']=='other'){ echo "checked"; }?> > Other
	
		  <br>
<br/><br/>
		<input type="submit" name="submit" value="Submit" >
		<hr/>
	</fieldset>
</form>
			 