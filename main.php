<?php

	$page=isset($_GET['page']) ? $_GET['page'] : '';
	if ($page=='') include ('home-page.php');
	if ($page=='poli') include ('poli.php');

	?>