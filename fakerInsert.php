<?php
// manggil seluruh package di vendor
require_once 'vendor/autoload.php';
require_once 'config.php';
$faker = Faker\Factory::create('id_ID');
// perulangan sampai seribu kali
for ($i=0; $i<10; $i++){
    // insert data ke database
	$sql = "INSERT INTO users (nama, email, alamat) VALUES ('".$faker->name."','".$faker->email."','".$faker->address."')";
	if ($conn->query($sql) === TRUE) {
		echo "=";
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}
}
echo "semua data berhasil disimpan";
$conn->close();