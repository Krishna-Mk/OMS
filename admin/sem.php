<script type="text/javascript">
	$(document).ready(function(){
		$("#sem_dropdown").change(function(){
				
				var selected=$(this).val();
				$("#employee_div").load("search.php",{selected_sem: selected});
			});
		
	});
</script>

	<select name="sem" class="form-control" id="sem_dropdown">
		<option>---Semester---</option>
		<?php
			require('config.php');
			$db = new db;
			$result=$db->getsem($_POST['selected_sem']);
			while($row=mysqli_fetch_array($result)){
				echo "<option value=".$row['sem_id '].">".$row['sem']."</option>";	
			}
			$db->closeCon();
		?>
	</select>