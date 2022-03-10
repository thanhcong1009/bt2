<?php
require_once './database.php';
// lấy dữ liệu sách
$stmt = $pdo->prepare("SELECT * FROM sach");
$stmt->execute();
$books = $stmt->fetchAll();

echo json_encode($books);

?>