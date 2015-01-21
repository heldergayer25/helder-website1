<?php
/**
 * Destrói sessão existente
 */
	session_start();
	session_destroy();
	header("location:../index.php");
?>