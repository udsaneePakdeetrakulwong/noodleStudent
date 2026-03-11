<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/css.css">
    <title>CRUD food Information</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12"> <br>
                <h3>รายชื่อลูกค้า <a href="addfood_dropdownlist.php" class="btn btn-info float-end">+เพิ่มลิสต์รายการอาหาร</a> </h3>
                <table class="table table-striped  table-hover table-responsive table-bordered">
                    <thead align="center">
                        <tr>
                            <th width="10%">รหัสเมนูอาหาร</th>
                             __________________
                            <th width="20%">ราคา</th>
                             __________________
                            <th width="10%">รูปภาพ</th>
                            <th width="5%">แก้ไข</th>
                            <th width="5%">ลบ</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php
                        require  __________________
                        $sql =  " __________________;
                        $stmt = $conn->prepare($sql);
                        $stmt->execute();
                        $result = $stmt->fetchAll();
                        $sum = 0;
                        foreach ($result as $r) {
                            $sum = $sum + $r[2];

                        ?>
                            <tr>
                                <td><?= $r[0] ?></td>
                                <td><?= $r[1] ?></td>
                                <td><?= $r[ __________________]  ?></td>
                                <td><?= $r[ __________________] ?></td>
                                <td><img src="../image/<?= $r[4]; ?>" width="50px" height="50" alt="image" onclick="enlargeImg()" id="img1"></td>
                                <td><a href="updatelistfrom.php?foodmenuID=<?= $r[' __________________'] ?>" class="btn btn-warning btn-sm">แก้ไข</a></td>
                                <td><a href="deletemenulist.php? __________________=<?= $r[' __________________'] ?>" class="btn btn-danger btn-sm" onclick="return confirm('ยืนยันการลบข้อมูล !!');">ลบ</a></td>
                            </tr>
                        <?php
                        }

                        ?>


                    </tbody>

                </table>
            </div>
        </div>
    </div>
    <?php
    echo "sum food price = " . $sum

    ?>
</body>

</html>