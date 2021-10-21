
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
  <h2 > <p class="text-center fw-bolder bg-success">Thêm bệnh nhân</p> </h2>
    <main class="container">
        <form action="process_add.php" method="post">
            <div class="mb-3">
                <label for="patientid" class="form-label">Mã bệnh nhân</label>
                <input type="text" class="form-control" id="patientid" name ="patientid">
            </div>
            <div class="mb-3">
                <label for="Firstname" class="form-label">Tên</label>
                <input type="text" class="form-control" id="Firstname" name="Firstname">
            </div>
            <div class="mb-3 ">
                <label for="Lastname" class="form-label">Họ tên đệm</label>
                <input type="text" class="form-control" id="Lastname" name="Lastname">
            </div>
            <div class="mb-3 ">
                <label for="dateofbirth" class="form-label">Ngày sinh</label>
                <input type="date" class="form-control" id="dateofbirth" name="dateofbirth">
            </div>
            <div class="mb-3 ">
                <label for="gender" class="form-label">Giới tính</label>
                <input type="text" class="form-control" id="gender" name="gender">
            </div>
            <div class="mb-3 ">
                <label for="mobile" class="form-label">Số điện thoại</label>
                <input type="tel" class="form-control" id="mobile" name="mobile">
            </div>
            <div class="mb-3 ">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email">
            </div>
            <div class="mb-3 ">
                <label for="height" class="form-label">Chiều cao</label>
                <input type="text" class="form-control" id="height" name="height">
            </div>
            <div class="mb-3 ">
                <label for="weight" class="form-label">Cân nặng</label>
                <input type="text" class="form-control" id="weight" name="weight">
            </div>
            <div class="mb-3 ">
                <label for="blood_type" class="form-label">Nhóm máu</label>
                <input type="text" class="form-control" id="blood_type" name="blood_type">
            </div>
            <div class="mb-3 ">
                <label for="created_on" class="form-label">Ngày lập sổ </label>
                <input type="date" class="form-control" id="created_on" name="created_on">
            </div>
            <div class="mb-3 ">
                <label for="modified_on" class="form-label">Ngày cập nhật </label>
                <input type="date" class="form-control" id="modified_on" name="modified_on">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </main>
  

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>