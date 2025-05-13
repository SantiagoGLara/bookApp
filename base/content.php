<?php
	$option=$_GET['op']??'10';
	switch($option){
		case '10':include('../content/books_list.php');break;
		case '11':include('../content/book_new.php');break;
		case '12':include('../content/books_modify.php');break;
		case '13':include('../content/books_delete.php');break;
	}
?>
