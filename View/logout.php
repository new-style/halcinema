<?php
	session_start();
	session_destroy();
	header("Location: http://127.0.0.1/halcinema/View/Shop/shop_index.php");