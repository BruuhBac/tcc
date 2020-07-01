<?php
session_start();
if(!$_SESSION['nome']) {
	header('Location: registro.html');
	exit();
}