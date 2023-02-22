<div id="display-image">
    <?php

        $db = mysqli_connect("localhost", "root", "", "oms1");

		$query = " select * from document_report";
		$result = mysqli_query($db, $query);

		while ($data = mysqli_fetch_assoc($result)) {
		?>
			<img src="../mentor/images/std_photo/<?php echo $data['filename']; ?>">
			<img src="../mentor/images/aadhar_card_photo/<?php echo $data['filename']; ?>">
			<img src="../mentor/images/SSC_result_photo/<?php echo $data['filename']; ?>">
			<img src="../mentor/images/HSC_result_photo/<?php echo $data['filename']; ?>">
			<img src="../mentor/images/vac_certi_photo/<?php echo $data['filename']; ?>">
			<img src="../mentor/images/caste_certi_photo/<?php echo $data['filename']; ?>">

		<?php
		}
	?> 
</div>