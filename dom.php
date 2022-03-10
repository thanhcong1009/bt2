<?php
require_once './database.php';
// lấy dữ liệu sách từ database
$stmt = $pdo->prepare("SELECT * FROM sach");
$stmt->execute();
$books = $stmt->fetchAll();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/2.2.2/css/buttons.dataTables.min.css">
  <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.js"></script>
  <script src="https://cdn.datatables.net/buttons/2.2.2/js/dataTables.buttons.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
  <script src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.html5.min.js"></script>
  <script src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.print.min.js"></script>
</head>
<body>
  <table id="table_id" class="display nowrap">
    <thead>
        <tr>
            <th>Mã sách</th>
            <th>Tên sách</th>
            <th>Giá</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($books as $book) { ?>
        <tr>
            <td><?php echo $book['masach'] ?></td>
            <td><?php echo $book['tensach'] ?></td>
            <td><?php echo $book['gia'] ?></td>
        </tr>
        <?php } ?>
    </tbody>
  </table>
  <script>
    $(document).ready(function() {
        $('#table_id').DataTable({
          dom: 'Bfrtip',
          buttons: [
            'excel', 'print', 'pdf'
          ]
        });
    });
  </script>
</body>
</html>