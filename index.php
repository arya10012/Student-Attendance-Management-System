<?php 
include 'Includes/dbcon.php';
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>School Portal</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@700&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Raleway:wght@800&display=swap');

        body {
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: row;
            align-items: center;
            justify-content: center;
            height: 100vh;
            background-image: url('im.jpg');
            background-size: cover;
            background-position: center;
            font-family: Arial, sans-serif;
            color: #fff;
        }
        .info {
            max-width: 500px;
            margin-right: 50px;
            padding: 36px;
            position: relative;
            border-radius: 24px;
            overflow: hidden;
            line-height: 1.6;
            border: 1px solid #999999;
            background: rgba(0, 0, 0, 0.5); /* Light black with opacity */
            transition: all 0.48s cubic-bezier(0.23, 1, 0.32, 1);
        }
        .content {
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            gap: 24px;
            color: #fff; /* White text color */
            transition: all 0.48s cubic-bezier(0.23, 1, 0.32, 1);
        }
        .content .heading {
            font-weight: 700;
            font-size: 36px;
            line-height: 1.3;
            z-index: 1;
            transition: all 0.48s cubic-bezier(0.23, 1, 0.32, 1);
        }
        .content .para {
            z-index: 1;
            opacity: 0.8;
            font-size: 18px;
            transition: all 0.48s cubic-bezier(0.23, 1, 0.32, 1);
        }
        .info::before {
            content: "";
            position: absolute;
            right: -5.2rem;
            top: -5.2rem;
            width: 10.4rem;
            height: 10.4rem;
            background: #0a3cff;
            z-index: 0;
            opacity: 0;
            border-radius: 50%;
            transition: all 0.48s cubic-bezier(0.23, 1, 0.32, 1);
        }
        .info::after {
            content: "";
            position: absolute;
            left: -5.2rem;
            bottom: -5.2rem;
            width: 10.4rem;
            height: 10.4rem;
            background: #0a3cff;
            z-index: 0;
            opacity: 0;
            border-radius: 50%;
            transition: all 0.48s cubic-bezier(0.23, 1, 0.32, 1);
        }
        .info:hover::before {
            scale: 7;
            opacity: 1;
        }
        .info:hover::after {
            scale: 7;
            opacity: 1;
        }
        .info:hover .content .heading {
            color: #000000;
        }
        .info:hover .content .para {
            color: #000000;
        }
        .info:hover {
            box-shadow: 0rem 6px 13px rgba(0, 0, 0, 0.1),
                        0rem 24px 24px rgba(0, 0, 0, 0.09),
                        0rem 55px 33px rgba(0, 0, 0, 0.05),
                        0rem 97px 39px rgba(0, 0, 0, 0.01),
                        0rem 152px 43px rgba(0, 0, 0, 0);
            border-color: #0a3cff;
            scale: 1.05;
        }
        @keyframes moving {
            0% {
                transform: rotate(0);
            }
            100% {
                transform: rotate(360deg);
            }
        }
        .container {
            background: rgba(0, 0, 0, 0.6);
            padding: 20px;
            border-radius: 10px;
            width: 300px;
            text-align: center;
        }
        h1 {
            font-family: 'Raleway', sans-serif;
            font-size: 36px;
            font-weight: 800;
            color: #fff;
            margin: 20px 0;
            text-transform: uppercase;
            transition: color 0.3s ease;
        }
        h1:hover {
            color: #87CEFA; /* Sky Blue */
        }
        .form-group {
            margin-bottom: 20px;
            text-align: left;
        }
        .form-group label {
            display: block;
            margin-bottom: 5px;
        }
        .form-group input {
            width: 100%;
            padding: 10px;
            border-radius: 5px;
            border: none;
            box-sizing: border-box;
        }
        .btn-success {
    width: 100%;
    padding: 12px;
    font-size: 18px;
    font-weight: bold;
    color: #fff;
    background-color:rgb(5, 124, 243); /* Navy Blue */
    border: none;
    border-radius: 8px;
    cursor: pointer;
    box-shadow: 0 0 5px rgba(103, 161, 235, 0.73); /* Subtle glow */
}

.btn-success:hover {
    background-color:rgb(31, 104, 182); /* Darker navy on hover */
    box-shadow: 0 0 15px rgba(48, 110, 172, 0.8); /* Stronger glow effect */
}

       
        h2 {
            font-family: 'Roboto', sans-serif;
            font-size: 24px;
            font-weight: 700;
            margin-bottom: 20px;
            color: #fff;
        }
        footer {
            display: flex;
            justify-content: space-around;
           
            padding: 10px;
            width: 100%;
            box-sizing: border-box;
            color: #fff;
            font-family: 'Roboto', sans-serif;
            position: absolute;
            bottom: 0;
        }
    select {
    width: 100%;
    padding: 10px;
    border-radius: 5px;
    border: none;
    box-sizing: border-box;
    font-size: 16px;
   }
      
    </style>
</head>
<body>
    <div class="info">
        <div class="content">
            <p class="para"><b>About Application :</b><br>The Student Attendance Management System (SAMS) is a comprehensive software application designed to streamline and automate the process of managing student attendance in educational institutions. The system aims to reduce manual workload, improve the accuracy of attendance records, and provide a user-friendly interface for students, teachers, and administrators. In educational institutions, attendance management plays a crucial role in tracking students’ participation and engagement. Traditionally, attendance has been taken manually, which is time-consuming, prone to human error, and inefficient. The development of an automated attendance management system seeks to overcome these challenges and enhance the efficiency of the attendance tracking process.</p>
        </div>
    </div>
    <div class="container">
        <h1>Student Attendance Management</h1>
        <h2>Login Panel</h2>
         <form class="user" method="Post" action="">
                              <div class="form-group">
    <label for="userType" class="text-white">Select User Role :</label>
    <select required name="userType" class="form-control">
        <option value="">--Select User Role--</option>
        <option value="Administrator">Administrator</option>
        <option value="ClassTeacher">ClassTeacher</option>
    </select>
</div>
         

                                        <div class="form-group">
                                            <label for="username" class="text-white">Email Address :</label>
                                            <input type="text" class="form-control" required name="username" placeholder="Enter Email Address">
                                        </div>
                                        <div class="form-group">
                                            <label for="password" class="text-white">Password :</label>
                                            <input type="password" name="password" required class="form-control" placeholder="Enter Password">
                                        </div>
                <div class="form-group">
                <div class="form-group">
                                            <input type="submit" class="btn btn-success btn-block" value="Login" name="login" />



<?php

  if(isset($_POST['login'])){

    $userType = $_POST['userType'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $password = md5($password);

    if($userType == "Administrator"){

      $query = "SELECT * FROM tbladmin WHERE emailAddress = '$username' AND password = '$password'";
      $rs = $conn->query($query);
      $num = $rs->num_rows;
      $rows = $rs->fetch_assoc();

      if($num > 0){

        $_SESSION['userId'] = $rows['Id'];
        $_SESSION['firstName'] = $rows['firstName'];
        $_SESSION['lastName'] = $rows['lastName'];
        $_SESSION['emailAddress'] = $rows['emailAddress'];

        echo "<script type = \"text/javascript\">
        window.location = (\"Admin/index.php\")
        </script>";
      }

      else{

        echo "<div class='alert alert-danger' role='alert'>
        Invalid Username/Password!
        </div>";

      }
    }
    else if($userType == "ClassTeacher"){

      $query = "SELECT * FROM tblclassteacher WHERE emailAddress = '$username' AND password = '$password'";
      $rs = $conn->query($query);
      $num = $rs->num_rows;
      $rows = $rs->fetch_assoc();

      if($num > 0){

        $_SESSION['userId'] = $rows['Id'];
        $_SESSION['firstName'] = $rows['firstName'];
        $_SESSION['lastName'] = $rows['lastName'];
        $_SESSION['emailAddress'] = $rows['emailAddress'];
        $_SESSION['classId'] = $rows['classId'];
        $_SESSION['classArmId'] = $rows['classArmId'];

        echo "<script type = \"text/javascript\">
        window.location = (\"ClassTeacher/index.php\")
        </script>";
      }

      else{

        echo "<div class='alert alert-danger' role='alert'>
        Invalid Username/Password!
        </div>";

      }
    }
    else{

        echo "<div class='alert alert-danger' role='alert'>
        Invalid Username/Password!
        </div>";

    }
}
?>

                                    <!-- <hr>
                    <a href="index.html" class="btn btn-google btn-block">
                      <i class="fab fa-google fa-fw"></i> Login with Google
                    </a>
                    <a href="index.html" class="btn btn-facebook btn-block">
                      <i class="fab fa-facebook-f fa-fw"></i> Login with Facebook
                    </a> -->


                                    <div class="text-center">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Login Content -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="js/ruang-admin.min.js"></script>
    

</body>

</html>
