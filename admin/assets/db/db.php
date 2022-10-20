<?php

	/**
	 * Copyright (c) korneltth. All rights reserved.
	 *
	 * Developed By Ark Crew
	 * Software Company
	 * https://www.ark-crew.com
	*/

	$conn = mysqli_connect("eu-cdbr-west-03.cleardb.net", "be69f591a12483", "1cfcb2d6", "heroku_2c96fcd25fcd5eb");

	// Check connection
	if (mysqli_connect_errno()) {
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
?>
