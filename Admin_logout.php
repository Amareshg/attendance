<?php
	session_start();
	session_unset();
	session_destroy();
	echo "<script>
	alert('Admin logged out Successfully');
	</script>";
	header('Refresh: 0; URL = Index.php');
?>