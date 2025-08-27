<?php session_start();
	if (isset($_SESSION['contador'])) {
		$_SESSION['contador']++;
	}
	else {
		$_SESSION['contador'] = 1;
	}
	?>
    <p>Has visitado la página <?php echo $_SESSION['contador']; ?> veces</p>
    
