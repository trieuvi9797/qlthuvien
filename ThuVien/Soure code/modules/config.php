<?php
$tenmaychu = 'localhost';
$tentaikhoan = 'root';
$pass = '';
$csdl = 'qls';
$conn = mysqli_connect($tenmaychu, $tentaikhoan, $pass, $csdl) or die('Không kết nối được');
mysqli_select_db($conn, $csdl);
