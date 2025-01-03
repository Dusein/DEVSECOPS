<?php

use PHPUnit\Framework\TestCase;

class DatabaseTest extends TestCase
{
    public function testDatabaseConnection()
    {
        // Konfigurasi koneksi database
        $host = '127.0.0.1'; // Host lokal
        $username = 'root'; // Username default XAMPP
        $password = '';     // Password default XAMPP
        $dbname = 'db_mahasiswa'; // Nama database yang sesuai

        // Coba koneksi ke database
        $mysqli = new mysqli($host, $username, $password, $dbname);

        // Periksa apakah koneksi berhasil
        $this->assertTrue($mysqli->ping(), 'Database connection failed.');
    }
}
