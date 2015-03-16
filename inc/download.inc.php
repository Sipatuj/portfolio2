<?php
switch($id){
	case 'services': include 'inc/services.php'; break;
	case 'contacts': include 'inc/contacts.php'; break;
	default: include 'inc/works.php';
}	