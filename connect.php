<?php
$connection = mysqli_connect('localhost', 'root', '') or die("Conexão com o banco de dados falhou" . mysqli_error($connection));
$select_db = mysqli_select_db($connection, 'lesante') or die("Seleção do banco de dados falhou" . mysqli_error($connection));