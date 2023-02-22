<table   class="table table-striped table-responsive">
			<tr>
				<th>student id</th>
				<th>Name</th>
				<th>Enrolement</th>
				<th>Institute</th>
				<th>Course</th>
				<th>Mentor</th>
                <th>Sem</th>

			</tr>
			<?php
			require('config.php');
			$db = new db;
			$result=$db->getAllstudents();
			while($row=mysqli_fetch_array($result)){
				echo "<tr>
					<td>".$row['id']."</td>
					<td>".$row['firstName']."</td>
					<td>".$row['enrollment_no']."</td>
					<td>".$row['institute']."</td>
					<td>".$row['course']."</td>
					<td>".$row['mentor_id']."</td>
                    <td>".$row['sem']."</td>
				</tr>";
			}
			$db->closeCon();
			?>
</table>