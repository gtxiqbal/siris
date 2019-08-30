<?php

 $dbhost = 'localhost';
 $dbuser = 'root';
 $dbpass = 'gtx1919';
 $dbname = 'inventori';
 
 $koneksi = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
 
 if( $koneksi->connect_error )
 {
 	die( 'Oops!! Koneksi Gagal : '. $koneksi->connect_error );
 }
 ?>