<form action="#" method="POST">
	<fieldset>
		<legend>DEGREE</legend>
		     <input type="checkbox" name="degree" value="SSC" <?php if(isset($_POST['degree']) && $_POST['degree']=='SSC'){ echo "checked"; }?> >SSC
			 <input type="checkbox" name="degree" value="HSC" <?php if(isset($_POST['degree']) && $_POST['degree']=='HSC'){ echo "checked"; }?> >HSC
			 <input type="checkbox" name="degree" value="BSc" <?php if(isset($_POST['degree']) && $_POST['degree']=='BSc'){ echo "checked"; }?> >BSc
			 <input type="checkbox" name="degree" value="MSc" <?php if(isset($_POST['degree']) && $_POST['degree']=='MSc'){ echo "checked"; }?> >MSc
			 
		  <br>
<br/><br/>
		<input type="submit" name="submit" value="Submit" >
		<hr/>
	</fieldset>
</form>
			 