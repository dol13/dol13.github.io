<?php 

include('config.php');
if (isset($_GET['delete_id'])) {
    $delete_id = $_GET['delete_id'];
    $sql = "DELETE FROM b11 WHERE id = :id";
    $query = $dbcon->prepare($sql);
    $query->bindParam(':id', $delete_id, PDO::PARAM_STR);
    $query->execute();
    echo "<script>alert('ลบข้อมูลเรียบร้อย');</script>";
}

// Fetch all data from table b11
$sql = "SELECT * FROM b11";
$query = $dbcon->prepare($sql);
$query->execute();
$results = $query->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>รายการ</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            background-color: #eaeaea;
        }

        .envelope {
            background-color: #fff;
            width: 1630px;
            height: 650px;
            border: 2px solid #007BFF;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
            position: relative;
            overflow: hidden;
            text-align: center;
            padding: 20px;
        }

        h1 {
            color: #007BFF;
            margin: 20px 0;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 10px;
        }

        th, td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 10px;
            word-wrap: break-word;
        }

        th {
            background-color: #007BFF;
            color: white;
        }
    </style>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
       
        <!-- Sender Table -->
        <h2 class="mt-5 mb-4 text-center">ผู้ส่ง</h2>
        <table class="table table-bordered">
            <thead class="thead-dark">
                <tr> <th>ลำดับ</th>
                    <th>ชื่อผู้ส่ง</th>
                    <th>จังหวัด</th>
                    <th>อำเภอ</th>
                    <th>ตำบล</th>
                    <th>บ้านเลขที่</th>
                    <th>รหัสไปรษณีย์</th>
                    <th>เบอร์โทร</th>
                    <th>วันที่</th>
                    <th>ลบ</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($results as $row): ?>
                <tr>
                    <td><?php echo htmlspecialchars($row['id']); ?></td>
                    <td><?php echo htmlspecialchars($row['name1']); ?></td>
                    <td><?php echo htmlspecialchars($row['r1']); ?></td>
                    <td><?php echo htmlspecialchars($row['a1']); ?></td>
                    <td><?php echo htmlspecialchars($row['c1']); ?></td>
                    <td><?php echo htmlspecialchars($row['x1']); ?></td>
                    <td><?php echo htmlspecialchars($row['p1']); ?></td>
                    <td><?php echo htmlspecialchars($row['b1']); ?></td>
                    <td><?php echo htmlspecialchars($row['senderBirthday']); ?></td>
                    <td><a href="?delete_id=<?php echo htmlspecialchars($row['id']); ?>" onclick="return confirm('คุณแน่ใจหรือว่าต้องการลบข้อมูลนี้?');">ลบ</a></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

        <!-- Receiver Table -->
        <h2 class="mt-5 mb-4 text-center">ผู้รับ</h2>
        <table class="table table-bordered">
            <thead class="thead-dark">
                <tr>
                <th>ลำดับ</th>
                    <th>ชื่อผู้รับ</th>
                    <th>จังหวัด</th>
                    <th>อำเภอ</th>
                    <th>ตำบล</th>
                    <th>บ้านเลขที่</th>
                    <th>รหัสไปรษณีย์</th>
                    <th>เบอร์โทร</th>
                    <th>วันที่</th>
                    <th>ลบ</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($results as $row): ?>
                <tr>
                <td><?php echo htmlspecialchars($row['id']); ?></td>
                    <td><?php echo htmlspecialchars($row['name2']); ?></td>
                    <td><?php echo htmlspecialchars($row['r2']); ?></td>
                    <td><?php echo htmlspecialchars($row['a2']); ?></td>
                    <td><?php echo htmlspecialchars($row['c2']); ?></td>
                    <td><?php echo htmlspecialchars($row['x2']); ?></td>
                    <td><?php echo htmlspecialchars($row['p2']); ?></td>
                    <td><?php echo htmlspecialchars($row['b2']); ?></td>
                    <td><?php echo htmlspecialchars($row['u2']); ?></td>
                    <td><a href="?delete_id=<?php echo htmlspecialchars($row['id']); ?>" onclick="return confirm('คุณแน่ใจหรือว่าต้องการลบข้อมูลนี้?');">ลบ</a></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <center>
    <div class="add-link">
            <a href="444.php" class="btn btn-primary">เพิ่มข้อมูลสินค้า</a> 
            <a href="update.php" class="btn btn-primary">แก้ไขข้อมูล</a>
        </div> </center>
</body>
</html>