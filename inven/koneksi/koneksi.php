<?php

$koneksi = mysqli_connect('localhost', 'root', '', 'stokbarang');

if ($koneksi->connect_error) {
	die("koneksi Gagal: " . $koneksi->connect_error);
}
?>