<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Professor extends Model
{
public function up()
{
    Schema::create('professor', function (Blueprint $table) {
        $table->id();
        $table->string('nome');
        $table->date('data_nascimento');
        $table->string('matricula');
        $table->timestamps();
    });
}
}

$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "myDB";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO clientes (nome, datanascimento, matricula) VALUES ('João Silva', 'joao@email.com', 30)";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>