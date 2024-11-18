<?php
require_once("config.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name1 = $_POST['name1'];
    $r1 = $_POST['r1']; 
    $r2=  $_POST['r2'];
    $a1 = $_POST['a1'];
    $a2 = $_POST['a2'];
    $c1 = $_POST['c1'];
    $c2 = $_POST['c2'];
    $x1 = $_POST['x1'];
    $x2 = $_POST['x2'];
    $p1 = $_POST['p1'];
    $p2 = $_POST['p2'];
    $b1 = $_POST['b1'];
    $b2 = $_POST['b2'];
    $senderBirthday = $_POST['senderBirthday'];
    $name2 = $_POST['name2'];
    $u2 = $_POST['u2'];
    $id = $_POST['id'];

    // Validate required fields
    if (empty($name1) || empty($r1) || empty($r2) || empty($a1) || empty($a2) || empty($c1) || 
        empty($c2) || empty($x1) || empty($x2) || empty($p1) || empty($p2) || empty($b1) || 
        empty($b2) || empty($senderBirthday) || empty($name2) || empty($u2) || empty($id)) {
        $errorMsg = "All fields are required.";
    } else {
        try { $update_stmt = $dbcon->prepare("
                UPDATE b11 SET
                    name1 = :name1, 
                    name2 = :name2, 
                    r1 = :r1, 
                    r2 = :r2, 
                    a1 = :a1, 

                    a2 = :a2, 
                    c1 = :c1, 
                    c2 = :c2, 
                    x1 = :x1, 
                    x2 = :x2, 
                    p1 = :p1, 
                    p2 = :p2, 
                    b1 = :b1, 
                    b2 = :b2, 
                    senderBirthday = :senderBirthday, 
                    u2 = :u2 
                WHERE id = :id
            ");
  
            $update_stmt->bindParam(':name1', $name1);
            $update_stmt->bindParam(':name2', $name2);
            $update_stmt->bindParam(':r1', $r1);
            $update_stmt->bindParam(':r2', $r2);
            $update_stmt->bindParam(':a1', $a1);
            $update_stmt->bindParam(':a2', $a2);
            $update_stmt->bindParam(':c1', $c1);
            $update_stmt->bindParam(':c2', $c2);
            $update_stmt->bindParam(':x1', $x1);
            $update_stmt->bindParam(':x2', $x2);
            $update_stmt->bindParam(':p1', $p1);
            $update_stmt->bindParam(':p2', $p2);
            $update_stmt->bindParam(':b1', $b1);
            $update_stmt->bindParam(':b2', $b2);
            $update_stmt->bindParam(':senderBirthday', $senderBirthday);
            $update_stmt->bindParam(':u2', $u2);
            $update_stmt->bindParam(':id', $id);
            if ($update_stmt->execute()) {
                header("Location: index.php");
                exit();
            } else {
                $errorMsg = "Failed to update record.";
            }
        } catch (PDOException $e) {
            $errorMsg = "Database error: " . $e->getMessage();
        }
    }

    // แสดงข้อผิดพลาดหากมี
    if (isset($errorMsg)) {
        echo "<script>alert('$errorMsg');</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>แบบฟอร์มอัปเดต</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
<div class="container mt-5">
        <center>
            <table style="width:90%" border="1">
                <tr>
                    <td>
             
                    <form class="row g-3 needs-validation" novalidate id="myForm" action="update.php" method="POST">
                        <div class="col-md-4">
                                <label for="senderName" class="form-label"> ลำดับ</label>
                                <input type="text" class="form-control" id="senderName" name="id" required>
                                <div class="valid-feedback">Looks good!</div>
                            </div> 
                            <h4>ข้อมูลผู้ส่ง</h4>
                            <div class="col-md-4">
                                <label for="name1" class="form-label">ชื่อผู้ส่ง</label>
                                <input type="text" class="form-control" id="name1" name="name1" required>
                                <div class="valid-feedback">Looks good!</div>
                            </div> 

                            <div class="col-md-4">
                                <label for="r1" class="form-label">จังหวัด</label>
                                <select class="form-select" id="r1" name="r1" required>
                        
                                    <option selected disabled>เลือกจังหวัด</option>
                                    <option value="กรุงเทพมหานคร">กรุงเทพมหานคร</option>
<option value="กระบี่">กระบี่</option>
<option value="กาญจนบุรี">กาญจนบุรี</option>
<option value="กาฬสินธุ์">กาฬสินธุ์</option>
<option value="กำแพงเพชร">กำแพงเพชร</option>
<option value="ขอนแก่น">ขอนแก่น</option>
<option value="จันทบุรี">จันทบุรี</option>
<option value="ฉะเชิงเทรา">ฉะเชิงเทรา</option>
<option value="ชลบุรี">ชลบุรี</option>
<option value="ชัยนาท">ชัยนาท</option>
<option value="ชัยภูมิ">ชัยภูมิ</option>
<option value="ชุมพร">ชุมพร</option>
<option value="ตรัง">ตรัง</option>
<option value="ตราด">ตราด</option>
<option value="ตาก">ตาก</option>
<option value="นครนายก">นครนายก</option>
<option value="นครปฐม">นครปฐม</option>
<option value="นครราชสีมา">นครราชสีมา</option>
<option value="นครศรีธรรมราช">นครศรีธรรมราช</option>
<option value="นนทบุรี">นนทบุรี</option>
<option value="นราธิวาส">นราธิวาส</option>
<option value="น่าน">น่าน</option>
<option value="บุรีรัมย์">บุรีรัมย์</option>
<option value="ปทุมธานี">ปทุมธานี</option>
<option value="ประจวบคีรีขันธ์">ประจวบคีรีขันธ์</option>
<option value="ปราจีนบุรี">ปราจีนบุรี</option>
<option value="ปัตตานี">ปัตตานี</option>
<option value="พะเยา">พะเยา</option>
<option value="เพชรบุรี">เพชรบุรี</option>
<option value="เพชรบูรณ์">เพชรบูรณ์</option>
<option value="แพร่">แพร่</option>
<option value="พังงา">พังงา</option>
<option value="ระนอง">ระนอง</option>
<option value="ระยอง">ระยอง</option>
<option value="ร้อยเอ็ด">ร้อยเอ็ด</option>
<option value="ลพบุรี">ลพบุรี</option>
<option value="ลำปาง">ลำปาง</option>
<option value="ลำพูน">ลำพูน</option>
<option value="สงขลา">สงขลา</option>
<option value="สกลนคร">สกลนคร</option>
<option value="สมุทรปราการ">สมุทรปราการ</option>
<option value="สมุทรสงคราม">สมุทรสงคราม</option>
<option value="สมุทรสาคร">สมุทรสาคร</option>
<option value="สระแก้ว">สระแก้ว</option>
<option value="สระบุรี">สระบุรี</option>
<option value="สุโขทัย">สุโขทัย</option>
<option value="สุพรรณบุรี">สุพรรณบุรี</option>
<option value="อ่างทอง">อ่างทอง</option>
<option value="อำนาจเจริญ">อำนาจเจริญ</option>
<option value="อุดรธานี">อุดรธานี</option>
<option value="อุตรดิตถ์">อุตรดิตถ์</option>
<option value="อุทัยธานี">อุทัยธานี</option>
<option value="เชียงราย">เชียงราย</option>
<option value="เชียงใหม่">เชียงใหม่</option>
<option value="นครสวรรค์">นครสวรรค์</option>
<option value="บึงกาฬ">บึงกาฬ</option>
<option value="มุกดาหาร">มุกดาหาร</option>
<option value="ยโสธร">ยโสธร</option>
<option value="อุบลราชธานี">อุบลราชธานี</option>
<option value="ศรีสะเกษ">ศรีสะเกษ</option>
<option value="หนองคาย">หนองคาย</option>
<option value="หนองบัวลำภู">หนองบัวลำภู</option>
<option value="เลย">เลย</option>

                                    
                                    <!-- More options... -->
                                </select>
                                <div class="invalid-feedback">กรุณาเลือกจังหวัด</div>
                            </div>

                            <div class="col-md-4">
                                <label for="a1" class="form-label">อำเภอ</label>
                                <select class="form-select" id="a1" name="a1" required>
                                    <option selected disabled>เลือกอำเภอ</option>
                                    <option value="พระนคร">พระนคร</option>
<option value="ดุสิต">ดุสิต</option>
<option value="หนองจอก">หนองจอก</option>
<option value="บางรัก">บางรัก</option>
<option value="บางเขน">บางเขน</option>
<option value="บางกอกน้อย">บางกอกน้อย</option>
<option value="บางกอกใหญ่">บางกอกใหญ่</option>
<option value="ธนบุรี">ธนบุรี</option>
<option value="ห้วยขวาง">ห้วยขวาง</option>
<option value="คลองสามวา">คลองสามวา</option>
<option value="ลาดกระบัง">ลาดกระบัง</option>
<option value="ประเวศ">ประเวศ</option>
<option value="สวนหลวง">สวนหลวง</option>
<option value="จตุจักร">จตุจักร</option>
<option value="บางซื่อ">บางซื่อ</option>
<option value="พญาไท">พญาไท</option>
<option value="ราชเทวี">ราชเทวี</option>
<option value="คลองเตย">คลองเตย</option>
<option value="วัฒนา">วัฒนา</option>
<option value="บางนา">บางนา</option>
<option value="พระโขนง">พระโขนง</option>
<option value="ทุ่งครุ">ทุ่งครุ</option>
<option value="บางบอน">บางบอน</option>
<option value="หนองแขม">หนองแขม</option>
<option value="ลาดพร้าว">ลาดพร้าว</option>
<option value="วังทองหลาง">วังทองหลาง</option>
<option value="บางแค">บางแค</option>
<option value="ทวีวัฒนา">ทวีวัฒนา</option>
<option value="คลองสาน">คลองสาน</option>
<option value="จอมทอง">จอมทอง</option>
<option value="บางขุนเทียน">บางขุนเทียน</option>

                                    <!-- More options... -->
                                </select>
                                <div class="invalid-feedback">กรุณาเลือกอำเภอ</div>
                            </div>

                            <div class="col-md-4">
                                <label for="c1" class="form-label">ตำบล</label>
                                <select class="form-select" id="c1" name="c1" required>
                                    <option selected disabled>เลือกตำบล</option>
                                    <option value="พระบรมมหาราชวัง">พระบรมมหาราชวัง</option>
<option value="วังบูรพาภิรมย์">วังบูรพาภิรมย์</option>
<option value="วัดราชบพิธ">วัดราชบพิธ</option>
<option value="สำราญราษฎร์">สำราญราษฎร์</option>
<option value="ศาลเจ้าพ่อเสือ">ศาลเจ้าพ่อเสือ</option>
<option value="เสาชิงช้า">เสาชิงช้า</option>
<option value="บวรนิเวศ">บวรนิเวศ</option>
<option value="ตลาดยอด">ตลาดยอด</option>
<option value="ชนะสงคราม">ชนะสงคราม</option>
<option value="บ้านพานถม">บ้านพานถม</option>
<option value="บางขุนพรหม">บางขุนพรหม</option>
<option value="วัดสามพระยา">วัดสามพระยา</option>
<option value="ดุสิต">ดุสิต</option>
<option value="วชิรพยาบาล">วชิรพยาบาล</option>
<option value="สวนจิตรลดา">สวนจิตรลดา</option>
<option value="สี่แยกมหานาค">สี่แยกมหานาค</option>
<option value="ถนนนครไชยศรี">ถนนนครไชยศรี</option>
<option value="กระทุ่มราย">กระทุ่มราย</option>
<option value="หนองจอก">หนองจอก</option>
<option value="คลองสิบ">คลองสิบ</option>
<option value="คลองสิบสอง">คลองสิบสอง</option>
<option value="โคกแฝด">โคกแฝด</option>
<option value="คู้ฝั่งเหนือ">คู้ฝั่งเหนือ</option>
<option value="ลำผักชี">ลำผักชี</option>
<option value="ลำต้อยติ่ง">ลำต้อยติ่ง</option>
                                       
                                    </optgroup>
                                </select>
                                <div class="invalid-feedback">กรุณาเลือกตำบล</div>
                            </div>

                            <div class="col-md-4">
                                <label for="x1" class="form-label">บ้านเลขที่</label>
                                <input type="text" class="form-control" id="x1" placeholder="บ้านเลขที่" name="x1" required>
                                <div class="invalid-feedback">กรุณากรอกบ้านเลขที่</div>
                            </div>

                            <div class="col-md-4">
                                <label for="p1" class="form-label">รหัสไปรษณีย์</label>
                                <input type="text" class="form-control" id="p1" name="p1" required>
                                <div class="invalid-feedback">กรุณากรอกรหัสไปรษณีย์</div>
                            </div>

                            <div class="col-md-4">
                                <label for="b1" class="form-label">เบอร์โทร</label>
                                <input type="text" class="form-control" id="b1" name="b1"required>
                                <div class="invalid-feedback">กรุณากรอกเบอร์โทร</div>
                            </div>

                            <div class="col-md-4">
                                <label for="senderBirthday" class="form-label">วันที่</label>
                                <input type="date" id="senderBirthday" name="senderBirthday" class="form-control"  required>
                                <div class="invalid-feedback">กรุณากรอกวันที่</div>
                            </div>

                            <h4 class="mt-4">ข้อมูลผู้รับ</h4>
                            <div class="col-md-4">
                                <label for="name2" class="form-label">ชื่อผู้รับ</label>
                                <input type="text" class="form-control" id="name2" name="name2" required>
                                <div class="valid-feedback">Looks good!</div>
                            </div>

                            <div class="col-md-4">
                                <label for="r2" class="form-label">จังหวัด</label>
                                <select class="form-select" id="r2" name="r2" required>
                                    <option selected disabled>เลือกจังหวัด</option>
                                    <option value="กรุงเทพมหานคร">กรุงเทพมหานคร</option>
<option value="กระบี่">กระบี่</option>
<option value="กาญจนบุรี">กาญจนบุรี</option>
<option value="กาฬสินธุ์">กาฬสินธุ์</option>
<option value="กำแพงเพชร">กำแพงเพชร</option>
<option value="ขอนแก่น">ขอนแก่น</option>
<option value="จันทบุรี">จันทบุรี</option>
<option value="ฉะเชิงเทรา">ฉะเชิงเทรา</option>
<option value="ชลบุรี">ชลบุรี</option>
<option value="ชัยนาท">ชัยนาท</option>
<option value="ชัยภูมิ">ชัยภูมิ</option>
<option value="ชุมพร">ชุมพร</option>
<option value="ตรัง">ตรัง</option>
<option value="ตราด">ตราด</option>
<option value="ตาก">ตาก</option>
<option value="นครนายก">นครนายก</option>
<option value="นครปฐม">นครปฐม</option>
<option value="นครราชสีมา">นครราชสีมา</option>
<option value="นครศรีธรรมราช">นครศรีธรรมราช</option>
<option value="นนทบุรี">นนทบุรี</option>
<option value="นราธิวาส">นราธิวาส</option>
<option value="น่าน">น่าน</option>
<option value="บุรีรัมย์">บุรีรัมย์</option>
<option value="ปทุมธานี">ปทุมธานี</option>
<option value="ประจวบคีรีขันธ์">ประจวบคีรีขันธ์</option>
<option value="ปราจีนบุรี">ปราจีนบุรี</option>
<option value="ปัตตานี">ปัตตานี</option>
<option value="พะเยา">พะเยา</option>
<option value="เพชรบุรี">เพชรบุรี</option>
<option value="เพชรบูรณ์">เพชรบูรณ์</option>
<option value="แพร่">แพร่</option>
<option value="พังงา">พังงา</option>
<option value="ระนอง">ระนอง</option>
<option value="ระยอง">ระยอง</option>
<option value="ร้อยเอ็ด">ร้อยเอ็ด</option>
<option value="ลพบุรี">ลพบุรี</option>
<option value="ลำปาง">ลำปาง</option>
<option value="ลำพูน">ลำพูน</option>
<option value="สงขลา">สงขลา</option>
<option value="สกลนคร">สกลนคร</option>
<option value="สมุทรปราการ">สมุทรปราการ</option>
<option value="สมุทรสงคราม">สมุทรสงคราม</option>
<option value="สมุทรสาคร">สมุทรสาคร</option>
<option value="สระแก้ว">สระแก้ว</option>
<option value="สระบุรี">สระบุรี</option>
<option value="สุโขทัย">สุโขทัย</option>
<option value="สุพรรณบุรี">สุพรรณบุรี</option>
<option value="อ่างทอง">อ่างทอง</option>
<option value="อำนาจเจริญ">อำนาจเจริญ</option>
<option value="อุดรธานี">อุดรธานี</option>
<option value="อุตรดิตถ์">อุตรดิตถ์</option>
<option value="อุทัยธานี">อุทัยธานี</option>
<option value="เชียงราย">เชียงราย</option>
<option value="เชียงใหม่">เชียงใหม่</option>
<option value="นครสวรรค์">นครสวรรค์</option>
<option value="บึงกาฬ">บึงกาฬ</option>
<option value="มุกดาหาร">มุกดาหาร</option>
<option value="ยโสธร">ยโสธร</option>
<option value="อุบลราชธานี">อุบลราชธานี</option>
<option value="ศรีสะเกษ">ศรีสะเกษ</option>
<option value="หนองคาย">หนองคาย</option>
<option value="หนองบัวลำภู">หนองบัวลำภู</option>
<option value="เลย">เลย</option>

                                    
                                </select>
                                <div class="invalid-feedback">กรุณาเลือกจังหวัด</div>
                            </div>

                            <div class="col-md-4">
                                <label for="a2" class="form-label">อำเภอ</label>
                                <select class="form-select" id="a2" name="a2" required>
                                    <option selected disabled>เลือกอำเภอ</option>
                                    <option value="พระนคร">พระนคร</option>
<option value="ดุสิต">ดุสิต</option>
<option value="หนองจอก">หนองจอก</option>
<option value="บางรัก">บางรัก</option>
<option value="บางเขน">บางเขน</option>
<option value="บางกอกน้อย">บางกอกน้อย</option>
<option value="บางกอกใหญ่">บางกอกใหญ่</option>
<option value="ธนบุรี">ธนบุรี</option>
<option value="ห้วยขวาง">ห้วยขวาง</option>
<option value="คลองสามวา">คลองสามวา</option>
<option value="ลาดกระบัง">ลาดกระบัง</option>
<option value="ประเวศ">ประเวศ</option>
<option value="สวนหลวง">สวนหลวง</option>
<option value="จตุจักร">จตุจักร</option>
<option value="บางซื่อ">บางซื่อ</option>
<option value="พญาไท">พญาไท</option>
<option value="ราชเทวี">ราชเทวี</option>
<option value="คลองเตย">คลองเตย</option>
<option value="วัฒนา">วัฒนา</option>
<option value="บางนา">บางนา</option>
<option value="พระโขนง">พระโขนง</option>
<option value="ทุ่งครุ">ทุ่งครุ</option>
<option value="บางบอน">บางบอน</option>
<option value="หนองแขม">หนองแขม</option>
<option value="ลาดพร้าว">ลาดพร้าว</option>
<option value="วังทองหลาง">วังทองหลาง</option>
<option value="บางแค">บางแค</option>
<option value="ทวีวัฒนา">ทวีวัฒนา</option>
<option value="คลองสาน">คลองสาน</option>
<option value="จอมทอง">จอมทอง</option>
<option value="บางขุนเทียน">บางขุนเทียน</option>

                                </select>
                                    <!-- More options... -->
                                </select>
                                <div class="invalid-feedback">กรุณาเลือกอำเภอ</div>
                            </div>

                            <div class="col-md-4">
                                <label for="c2" class="form-label">ตำบล</label>
                                <select class="form-select" id="c2" name="c2" required>
                                    <option selected disabled>เลือกตำบล</option>
                                    <option value="พระบรมมหาราชวัง">พระบรมมหาราชวัง</option>
<option value="วังบูรพาภิรมย์">วังบูรพาภิรมย์</option>
<option value="วัดราชบพิธ">วัดราชบพิธ</option>
<option value="สำราญราษฎร์">สำราญราษฎร์</option>
<option value="ศาลเจ้าพ่อเสือ">ศาลเจ้าพ่อเสือ</option>
<option value="เสาชิงช้า">เสาชิงช้า</option>
<option value="บวรนิเวศ">บวรนิเวศ</option>
<option value="ตลาดยอด">ตลาดยอด</option>
<option value="ชนะสงคราม">ชนะสงคราม</option>
<option value="บ้านพานถม">บ้านพานถม</option>
<option value="บางขุนพรหม">บางขุนพรหม</option>
<option value="วัดสามพระยา">วัดสามพระยา</option>
<option value="ดุสิต">ดุสิต</option>
<option value="วชิรพยาบาล">วชิรพยาบาล</option>
<option value="สวนจิตรลดา">สวนจิตรลดา</option>
<option value="สี่แยกมหานาค">สี่แยกมหานาค</option>
<option value="ถนนนครไชยศรี">ถนนนครไชยศรี</option>
<option value="กระทุ่มราย">กระทุ่มราย</option>
<option value="หนองจอก">หนองจอก</option>
<option value="คลองสิบ">คลองสิบ</option>
<option value="คลองสิบสอง">คลองสิบสอง</option>
<option value="โคกแฝด">โคกแฝด</option>
<option value="คู้ฝั่งเหนือ">คู้ฝั่งเหนือ</option>
<option value="ลำผักชี">ลำผักชี</option>
<option value="ลำต้อยติ่ง">ลำต้อยติ่ง</option>
                                    </optgroup>
                                </select>
                                <div class="invalid-feedback">กรุณาเลือกตำบล</div>
                            </div>

                            <div class="col-md-4">
                                <label for="x2" class="form-label">บ้านเลขที่</label>
                                <input type="text" class="form-control" id="x2" placeholder="บ้านเลขที่" name="x2"required>
                                <div class="invalid-feedback">กรุณากรอกบ้านเลขที่</div>
                            </div>

                            <div class="col-md-4">
                                <label for="p2" class="form-label">รหัสไปรษณีย์</label>
                                <input type="text" class="form-control" id="p2" name="p2"required>
                                <div class="invalid-feedback">กรุณากรอกรหัสไปรษณีย์</div>
                            </div>

                            <div class="col-md-4">
                                <label for="b2" class="form-label">เบอร์โทร</label>
                                <input type="text" class="form-control" id="b2" name="b2"required>
                                <div class="invalid-feedback">กรุณากรอกเบอร์โทร</div>
                            </div>
 
                            <div class="col-md-4">
                                <label for="u2" class="form-label">วันที่</label>
                                <input type="date" id="u2" name="u2" class="form-control"  required>
                                <div class="invalid-feedback">กรุณากรอกวันที่</div>
                            </div>

                        <div class="col-md-4">
                            <button type="submit" class="btn btn-primary">อัปเดตข้อมูล</button>
                        </div>
                        </form>
                    </td>
                </tr>
            </table>
        </center>
    </div>

    <script>
function redirectToIndex() {
    // การส่งฟอร์มสำเร็จจะนำไปสู่หน้า index.php
    setTimeout(function() {
        window.location.href = 'index.php';
    }, 1000);  // จะย้ายหน้าไปที่ index.php หลังจาก 1 วินาที
    return false;  // ป้องกันการรีเฟรชหน้า
}
</script>

    <!-- Bootstrap JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>


