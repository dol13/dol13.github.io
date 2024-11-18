
<?php
include('config.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Submission</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-5">
        <center>
            <table style="width:90%" border="1">
                <tr>
                    <td>
                        <form class="row g-3 needs-validation" novalidate id="myForm" action="add.php" method="POST">
                        <div class="col-md-4">
                                <label for="senderName" class="form-label"> ลำดับ</label>
                                <input type="text" class="form-control" id="senderName" name="id" required>
                                <div class="valid-feedback">Looks good!</div>
                            </div> 
                            <h4>ข้อมูลผู้ส่ง</h4>
                            <div class="col-md-4">
                                <label for="senderName" class="form-label">ชื่อผู้ส่ง</label>
                                <input type="text" class="form-control" id="senderName" name="name1" required>
                                <div class="valid-feedback">Looks good!</div>
                            </div> 

                            <div class="col-md-4">
                                <label for="senderProvince" class="form-label">จังหวัด</label>
                                <select class="form-select" id="senderProvince" name="r1" required>
                        
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
                                <label for="senderDistrict" class="form-label">อำเภอ</label>
                                <select class="form-select" id="senderDistrict" name="a1" required>
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
                                <label for="senderSubdistrict" class="form-label">ตำบล</label>
                                <select class="form-select" id="senderSubdistrict" name="c1" required>
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
                                <label for="senderAddress" class="form-label">บ้านเลขที่</label>
                                <input type="text" class="form-control" id="senderAddress" placeholder="บ้านเลขที่" name="x1" required>
                                <div class="invalid-feedback">กรุณากรอกบ้านเลขที่</div>
                            </div>

                            <div class="col-md-4">
                                <label for="senderPostalCode" class="form-label">รหัสไปรษณีย์</label>
                                <input type="text" class="form-control" id="senderPostalCode" name="p1" required>
                                <div class="invalid-feedback">กรุณากรอกรหัสไปรษณีย์</div>
                            </div>

                            <div class="col-md-4">
                                <label for="recipientPostalCode3" class="form-label">เบอร์โทร</label>
                                <input type="text" class="form-control" id="recipientPostalCode3" name="b1"required>
                                <div class="invalid-feedback">กรุณากรอกเบอร์โทร</div>
                            </div>

                            <div class="col-md-4">
                                <label for="senderBirthday" class="form-label">วันที่</label>
                                <input type="date" id="senderBirthday" name="senderBirthday" class="form-control"  required>
                                <div class="invalid-feedback">กรุณากรอกวันที่</div>
                            </div>

                            <h4 class="mt-4">ข้อมูลผู้รับ</h4>
                            <div class="col-md-4">
                                <label for="recipientName" class="form-label">ชื่อผู้รับ</label>
                                <input type="text" class="form-control" id="recipientName" name="name2" required>
                                <div class="valid-feedback">Looks good!</div>
                            </div>

                            <div class="col-md-4">
                                <label for="recipientProvince" class="form-label">จังหวัด</label>
                                <select class="form-select" id="recipientProvince" name="r2" required>
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
                                <label for="recipientDistrict" class="form-label">อำเภอ</label>
                                <select class="form-select" id="recipientDistrict" name="a2" required>
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
                                <label for="recipientSubdistrict" class="form-label">ตำบล</label>
                                <select class="form-select" id="recipientSubdistrict" name="c2" required>
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
                                <label for="recipientAddress" class="form-label">บ้านเลขที่</label>
                                <input type="text" class="form-control" id="recipientAddress" placeholder="บ้านเลขที่" name="x2"required>
                                <div class="invalid-feedback">กรุณากรอกบ้านเลขที่</div>
                            </div>

                            <div class="col-md-4">
                                <label for="recipientPostalCode" class="form-label">รหัสไปรษณีย์</label>
                                <input type="text" class="form-control" id="recipientPostalCode" name="p2"required>
                                <div class="invalid-feedback">กรุณากรอกรหัสไปรษณีย์</div>
                            </div>

                            <div class="col-md-4">
                                <label for="recipientPostalCode2" class="form-label">เบอร์โทร</label>
                                <input type="text" class="form-control" id="recipientPostalCode2" name="b2"required>
                                <div class="invalid-feedback">กรุณากรอกเบอร์โทร</div>
                            </div>
 
                            <div class="col-md-4">
                                <label for="recipientBirthday" class="form-label">วันที่</label>
                                <input type="date" id="recipientBirthday" name="u2" class="form-control"  required>
                                <div class="invalid-feedback">กรุณากรอกวันที่</div>
                            </div>

                            <div class="col-12">
                                <a href="add.php"><button class="btn btn-primary" type="submit">Submit form</button></a>
                            </div>
                        </form>
                    </td>
                </tr>
            </table>
        </center>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-p5bE18Mm3w/5eJ2/xt5jlHkwLO0NUI6qZ5RgX7LVZVxdL8HCnKoF/MN1j69O4l7e" crossorigin="anonymous"></script>
    <script>
    // JavaScript for disabling form submissions if there are invalid fields
    (() => {
        'use strict';
        const forms = document.querySelectorAll('.needs-validation');
        Array.from(forms).forEach(form => {
            form.addEventListener('submit', event => {
                if (!form.checkValidity()) {
                    event.preventDefault();
                    event.stopPropagation();
                }
                form.classList.add('was-validated');
            }, false);
        });
    })();
</script> 
<?php
include('config.php');
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name1 = $_POST['name1'];
    $r1 = $_POST['r1']; 
    $r2 = $_POST['r2'];
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
    $r2 = $_POST['r2'];
    $id = $_POST['id'];
    // Add further input fields as needed...

    $sql = "INSERT INTO table_name (name1, name2, r1, r2, a1, a2, c1, c2, x1, x2, p1, p2, b1, b2, senderBirthday, u2, id) 
    VALUES (:name1, :name2, :r1, :r2, :a1, :a2, :c1, :c2, :x1, :x2, :p1, :p2, :b1, :b2, :senderBirthday, :u2, :id)";
$stmt = $pdo->prepare($sql);
$stmt->execute([
':name1' => $name1, 
':name2' => $name2,
':r1' => $r1, 
':r2' => $r2,
':a1' => $a1, 
':a2' => $a2,
':c1' => $c1, 
':c2' => $c2,
':x1' => $x1, 
':x2' => $x2,
':p1' => $p1, 
':p2' => $p2,
':b1' => $b1, 
':b2' => $b2,
':senderBirthday' => $senderBirthday, 
':u2' => $u2, 
':id' => $id
]);
echo "Data inserted successfully!";

}
?>
</body> 
</html>
