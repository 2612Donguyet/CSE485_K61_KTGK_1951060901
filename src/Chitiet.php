
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
  <h2 > <p class="text-center fw-bolder bg-success">Danh sách bệnh nhân</p> </h2>
  <main class = "center">
      <table class="table">
        <thead>
          <tr>
            <th scope="col">patientid</th>
            <th scope="col">Firstname</th>
            <th scope="col">Lastname</th>
            <th scope="col">dateofbirth</th>
            <th scope="col">gender</th>
            <th scope="col">mobile</th>
            <th scope="col">email</th>
            <th scope="col">height</th>
            <th scope="col">weight</th>
            <th scope="col">blood_type</th>
            <th scope="col">created_on</th>
            <th scope="col">modified_on</th>
            <th scope="col">edit </th>
            <th scope="col">delete</th>
          </tr>
        </thead>
        <tbody>
          <?php 
                $conn = mysqli_connect('localhost', 'root', '', 'quanlybenhvien','3306');
                if(!$conn){
                    die("Kết nối không thành công");
                }

                $sql = "select * from patient";
                $result = mysqli_query($conn,$sql);

                if(mysqli_num_rows($result)>0)
                {
                  while($row= mysqli_fetch_assoc($result))
                  {
                    echo '<tr>';
                    echo '<td>'.$row['patientid'].'</td>';
                    echo '<td>'.$row['firstname'].'</td>';
                    echo '<td>'.$row['lastname'].'</td>';
                    echo '<td>'.$row['dateofbirth'].'</td>';
                    echo '<td>'.$row['gender'].'</td>';
                    echo '<td>'.$row['mobile'].'</td>';
                    echo '<td>'.$row['email'].'</td>';
                    echo '<td>'.$row['height'].'</td>';
                    echo '<td>'.$row['weight'].'</td>';
                    echo '<td>'.$row['blood_type'].'</td>';
                    echo '<td>'.$row['created_on'].'</td>';
                    echo '<td>'.$row['modified_on'].'</td>';
                    echo '<td> <a href="edit.php?id='.$row['patientid'].'"> edit</a></td>';
                    echo '<td> <a href="delete.php?id='.$row['patientid'].'"> delete</a></td>';
                    echo '</tr>';
                  }
                }
          ?>
        </tbody>
      </table>
  </main>
  <p class="text-center"><a href="add.php" class="btn-success">Thêm bệnh nhân</a></p>
<?php 
  mysqli_close($conn);
?>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>