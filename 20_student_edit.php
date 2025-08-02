<?php 
    include_once('17_connectDB.php');
    //lấy giá trị cũ của student
    if(isset($_GET['id']))
    {
        $id = $_GET['id'];
         //mở kết nối
        $cn = connect();

        //viết câu lệnh truy vấn
        $query = "SELECT * FROM tbStudent WHERE stuID = $id";

        //thực thi truy vấn => chỉ trả về 1 dòng dữ liệu do có WHERE 
        $row = mysqli_query($cn, $query);
        
        $item = mysqli_fetch_assoc($row);
        //đóng kết nối
        disconnect($cn);
    }

    if(isset($_POST['btnEdit']))
    {
        //mở kết nối
        $cn = connect();

        //get giá trị từ form đưa lên
        $id = $_POST['id'];
        $name = $_POST['name'];
        $gender = $_POST['gender'];
        $dob = $_POST['dob'];
        
        //viết câu lệnh truy vấn
        $query = "UPDATE tbStudent SET stuName = '$name', stuGender = '$gender', stuDOB = '$dob' WHERE stuID = $id";

        //thực thi truy vấn
        mysqli_query($cn, $query);
        //đóng kết nối
        disconnect($cn);
        
        //chuyển về trang index
        header("location: 18_student_index.php"); 
    }


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Edit</title>
</head>

<body>
    <h1>Edit Student</h1>
    <form action="20_student_edit.php" method="post">
        <div>
            ID: <input type="text" name="id" readonly value="<?php echo $item['stuID'] ?>">
        </div>
        <div>
            Name: <input type="text" name="name" required value="<?php echo $item['stuName'] ?>">
        </div>
          <div>
            Gender: <input type="radio" name="gender" value="Male" <?php if($item['stuGender'] == "Male") echo "checked" ?>> Male
                    <input type="radio" name="gender" value="Female" <?php if($item['stuGender'] == "Female") echo "checked" ?>> Female
        </div>
          <div>
            DOB: <input type="date" name="dob" required value="<?php echo $item['stuDOB'] ?>">
        </div>
          <div>
            <input type="submit" value="Edit" name="btnEdit">
        </div>
    </form>
</body>
</html>