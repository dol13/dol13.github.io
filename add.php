<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
// Connect to the database via config.php
include('config.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if all fields have values
    if (isset($_POST['name1'], $_POST['name2'], $_POST['r1'], $_POST['r2'], $_POST['a1'],$_POST['a2'], $_POST['c2'], $_POST['c1'],
     $_POST['x1'], $_POST['x2']
    ,$_POST['p1'], $_POST['p2'], $_POST['b2'], $_POST['b1'], $_POST['senderBirthday'],  $_POST['u2'],  $_POST['id'])) {
        $name1 = $_POST['name1'] ?? '';
        $name2 = $_POST['name2'] ?? '';
    
        $r1  = $_POST['r1'] ?? '';
        $r2  = $_POST['r2'] ?? '';
    
        $a1 = $_POST['a1'] ?? '';
        $a2 = $_POST['a2'] ?? '';
    
        $c1 = $_POST['c1'] ?? '';
        $c2 = $_POST['c2'] ?? '';
    
        $x1 = $_POST['x1'] ?? '';
        $x2 = $_POST['x2'] ?? '';
    
        $p1 = $_POST['p1'] ?? '';
        $p2 = $_POST['p2'] ?? '';
    
        $b1 = $_POST['b1'] ?? '';
        $b2 = $_POST['b2'] ?? '';
    
        $senderBirthday = $_POST['senderBirthday'] ?? '';
        $u2 = $_POST['u2'] ?? '';
        $id = $_POST['id'] ?? '';

        // Ensure no field is empty
        if (!empty($name1) && !empty($name2) && !empty($r1) && !empty($r2) && !empty($a1) &&
        !empty($c1) && !empty($c2) && !empty($x1) && !empty($x2) && !empty($p1) &&
        !empty($p2) && !empty($b1) && !empty($b2) && !empty($senderBirthday) && !empty($u2) && !empty($a2)) {
            // Prepare the SQL INSERT statement
            $sql = "INSERT INTO b11 (name1, name2, r1, r2, a1, a2, c1, c2, x1, x2, p1, p2, b1, b2, senderBirthday, u2, id)
                    VALUES (:name1, :name2, :r1, :r2, :a1, :a2, :c1, :c2, :x1, :x2, :p1, :p2, :b1, :b2, :senderBirthday, :u2, :id)";

            try {
                // Prepare the SQL with PDO
                $query = $dbcon->prepare($sql);
                $query->bindParam(':id', $id, PDO::PARAM_STR);
                $query->bindParam(':name1', $name1, PDO::PARAM_STR);
                $query->bindParam(':name2', $name2, PDO::PARAM_STR);
                $query->bindParam(':r1', $r1, PDO::PARAM_STR);
                $query->bindParam(':r2', $r2, PDO::PARAM_STR);
                $query->bindParam(':a1', $a1, PDO::PARAM_STR);
                $query->bindParam(':a2', $a2, PDO::PARAM_STR);
                $query->bindParam(':c1', $c1, PDO::PARAM_STR);
                $query->bindParam(':c2', $c2, PDO::PARAM_STR);
                $query->bindParam(':x1', $x1, PDO::PARAM_STR);
                $query->bindParam(':x2', $x2, PDO::PARAM_STR);
                $query->bindParam(':p1', $p1, PDO::PARAM_STR);
                $query->bindParam(':p2', $p2, PDO::PARAM_STR);
                $query->bindParam(':b1', $b1, PDO::PARAM_STR);
                $query->bindParam(':b2', $b2, PDO::PARAM_STR);
                $query->bindParam(':senderBirthday', $senderBirthday, PDO::PARAM_STR);
                $query->bindParam(':u2', $u2, PDO::PARAM_STR);

                // Execute SQL
                $result = $query->execute();

                // Check result
                if ($result) {
                    echo "<script>alert('เพิ่มข้อมูลเรียบร้อย');</script>";
                } else {
                    echo "<script>alert('มีบางอย่างผิดพลาด');</script>";
                }
            } catch (PDOException $e) {
                echo "เกิดข้อผิดพลาด: " . $e->getMessage();
            }
        } else {
            echo "<script>alert('กรุณากรอกข้อมูลให้ครบทุกฟิลด์');</script>";
        }
    } else {
        echo "<script>alert('มีบางฟิลด์ไม่ได้ส่งข้อมูลมา');</script>";
    }
}
?> 
<center>
    <p>กดปุ่มเพื่อไปยังหน้าอื่น:</p>
    <a href="index.php" class="btn btn-primary">ข้อมูล</a>
</center>
</body>
</html>
