<?php
/**
 * Informasi akun untuk akses database
 * @var $dbhost host database biasanya diisi 'localhost' atau '127.0.0.1'
 * @var $dbuser username database, untuk xampp biasanya diisi "root"
 * @var $dbpass password database, untuk xampp biasanya dikosongkan
 * @var $dbname nama database yang akan diakses
 */
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$dbname = 'belajar';

// Fungsi untuk koneksi ke database { menggunakan MySQLi Object Oriented }
$db = new mysqli($dbhost,$dbuser,$dbpass,$dbname);

// Check hasil fungsi koneksi berhasil atau tidak

// Jika terjadi Error
if ($db->connect_error) {
    
    // Sistem dihentikan
    die('Terjadi Kegagalan : '. $db->connect_error );
}
?>