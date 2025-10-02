<?php

$servername='localhost';
$username='root';
$pass='';
$datbase='registration';

$connection=mysqli_connect($servername,$username,$pass,$datbase);

if(!$connection){
    echo "connected!";
}

if(isset($_POST['btn'])){
    $n1=$_POST['first_name'];
    $n2=$_POST['last_name'];
    $n3=$_POST['email'];
    $n4=$_POST['confirm_email'];
    $n5=$_POST['password'];
    $n11=$_POST['Date_of_Birth'];
    $n12=$_POST['file'];
    $n13=$_POST['city'];
    $n14=$_POST['selection'];
    $n15=$_POST['zip'];
    $n6=$_POST['gender'];
    $n7=$_POST['checkbox'];
    $n8=$_POST['phone'];
    $n9=$_POST['whatsapp'];
    $n10=$_POST['address'];
    $n16=$_POST['description'];


    $querry="INSERT INTO forms(first_name , last_name , email ,confirm_password, password , Date_of_Birth, file , city , selection , zip , gender, checkbox, phone,whatsapp,address,description) VALUES ('$n1','$n2','$n3','$n4','$n5', '$n11', '$n12', '$n13', '$n14', '$n15', '$n6','$n7','$n8','$n9','$n10','$n16')";

    $fire = mysqli_query($connection,$querry);

    if($fire){
    echo "<script>
        alert('Data Added Successfully!');
        window.location.href='prac.php'; // Refresh or redirect using JS
    </script>";
    exit();
}
else{
        echo "<script>alert('Disconnected!')</script>";
    }

}

// $sql = "SELECT * FROM forms ORDER BY id DESC"; // Replace 'id' with your actual primary key column
// $result = mysqli_query($connection, $sql);

// if ($result && mysqli_num_rows($result) > 0) {
//     echo "<div class='container mt-5'>";
//     echo "<h2 class='text-light text-center'>Submitted Entries</h2>";
//     echo "<table class='table table-bordered table-striped table-dark'>";
//     echo "<thead><tr>
//             <th>ID</th>
//             <th>First Name</th>
//             <th>Last Name</th>
//             <th>Email</th>
//             <th>DOB</th>
//             <th>City</th>
//             <th>Country</th>
//             <th>Gender</th>
//             <th>Phone</th>
//             <th>WhatsApp</th>
//             <th>Address</th>
//             <th>Qualification</th>
//             <th>Description</th>
//         </tr></thead>";
//     echo "<tbody>";

//     while ($row = mysqli_fetch_assoc($result)) {
//         echo "<tr>
//                 <td>" . htmlspecialchars($row['id']) . "</td>
//                 <td>" . htmlspecialchars($row['first_name']) . "</td>
//                 <td>" . htmlspecialchars($row['last_name']) . "</td>
//                 <td>" . htmlspecialchars($row['email']) . "</td>
//                 <td>" . htmlspecialchars($row['Date_of_Birth']) . "</td>
//                 <td>" . htmlspecialchars($row['city']) . "</td>
//                 <td>" . htmlspecialchars($row['selection']) . "</td>
//                 <td>" . htmlspecialchars($row['gender']) . "</td>
//                 <td>" . htmlspecialchars($row['phone']) . "</td>
//                 <td>" . htmlspecialchars($row['whatsapp']) . "</td>
//                 <td>" . htmlspecialchars($row['address']) . "</td>
//                 <td>" . htmlspecialchars($row['checkbox']) . "</td>
//                 <td>" . htmlspecialchars($row['description']) . "</td>
//             </tr>";
//     }

//     echo "</tbody></table></div>";
// } else {
//     echo "<p class='text-light text-center'>No data found.</p>";
// }


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <title>Sign-in Page</title>
    <style>
  .input-icon-wrapper {
    position: relative;
  }

  .input-icon-wrapper i {
    position: absolute;
    top: 50%;
    left: 10px;
    transform: translateY(-50%);
    color: #0a0a0a;
    font-size: 1.2rem; 
  }

  .input-icon-wrapper input {
    padding-left: 2.5rem; 
  }

  @media (max-width: 576px) {
    .input-icon-wrapper i {
      font-size: 1rem;
      left: 8px;
    }

    .input-icon-wrapper input {
      padding-left: 2rem;
    }
  }
</style>
</head>
<body class="bg-dark mb-3 text-light">
    <div class="container w-50 border rounded" style="box-shadow: 2px 10px 50px #6eb2dfff;">
        <h1 class="text-light text-center fs-1 border-bottom border-white m-3 p-3">Registration Form</h1>
        <form action="pracform.php" method="post" >
            <div class="row">
                <div class="col-md-6">
                <label for="first" class="form-label text-light" >First Name</label>
                <input type="text" name="first_name" id="first" class="form-control " required>
            </div>
            <br>
            <div class="col-md-6">
                <label for="last" class="form-label text-light">Last Name</label>
                <input type="text" name="last_name" id="last" class="form-control" required>
            </div>
            </div>
            <br>

<div class="row">
  <div class="col-md-12">
    <label for="email" class="form-label text-light">E-mail</label>
    <div class="input-icon-wrapper">
      <i class="fa-solid fa-envelope"></i>
      <input type="email" name="email" id="email" class="form-control" required>
    </div>
  </div>

        <div class="col-md-6">
             <label for="pass" class="form-label text-light">Password</label>
             <div class="input-icon-wrapper">
            <i class="fa-solid fa-lock"></i>
            <input type="password" name="password" id="pass" class="form-control" required>
                </div>
            </div>

            <div class="col-md-6">
            <label for="confirm" class="form-label text-light">Confirm Password</label>
                <div class="input-icon-wrapper">
                    <i class="fa-solid fa-lock"></i>
                    <input type="password" name="confirm_password" id="confirm" class="form-control" required>
                </div>
            </div>
            </div>
            <br>
                <div class="row">
                <div class="col-md-6">
                    <label for="dob" class="form-label text-white">D.O.B</label>
                    <input type="datetime-local" name="Date_of_Birth" id="dob" class="form-control" required>
                </div>
                <div class="col-md-6">
                    <label for="file" class="form-label text-white">File</label>
                    <input type="file" name="file" id="file" class="form-control" required>
                </div>
            </div>
            <br>
                <div class="row">
                <div class="col-md-5">
                    <label for="city" class="form-label text-white">City</label>
                    <input type="text" name="city" id="city" class="form-control" required>
                </div>
                <div class="col-md-5">
                    <label for="inputState" class="form-label text-white">Country</label>
                    <select id="inputState" class="form-select" name="selection" required>
                    <option selected>Choose</option>
                    <option>Pakistan</option>
                    <option>India</option>
                    <option>China</option>
                    <option>USA</option>
                    <option>Canada</option>
                    <option>Australia</option>
                    <option>Bangladesh</option>
                    <option>London</option>
                    <option>Italy</option>
                    </select>
                </div>
                <div class="col-md-2">
                    <label for="zip" class="form-label text-white">Zip</label>
                    <input type="text" name="zip" id="zip" class="form-control" required>
                </div>
            </div>
            <br>
            <div class="col-md-12">
                <label for="gender" class="form-label  text-light">Gender:-</label>
                <br>
                <input type="radio" name="gender" id="gender" value="Male" required><span class="text-light">Male</span>
                <input type="radio" name="gender" id="gender" value="Female" required><span class="text-light">Female</span>
                <input type="radio" name="gender" id="gender" value="others" ><span class="text-light">Others</span>
            </div>
            <br>
            <div class="row">
                <div class="col-md-6">
                <label for="ph" class="form-label  text-light">Phone No:-</label>
                <input type="tel" name="phone" id="ph" class="form-control" required>
            </div>
            <div class="col-md-6">
                <label for="whatsapp" class="form-label text-light">whatsapp No:-</label>
                <input type="tel" name="whatsapp" id="whatsapp" class="form-control" required>
            </div>
            </div>
            <br>
            <div class="col-md-12">
                <label for="address" class="form-label text-light">Address:-</label>
                <input type="text" name="address" id="address" class="form-control" required>
            </div>
            <br>
            <div class="row">
                <div class="col-md-12">
                    <label for="check" class="form-label">Qualification:-</label>
                    <br>
                    <div class="col-md-2">
                        <input type="checkbox" name="checkbox" id="check" value="Matric">  Matric
                    </div>
                    <div class="col-md-2">
                        <input type="checkbox" name="checkbox" id="check"  value="F.Sc"> F.Sc
                    </div>
                    <div class="col-md-2">
                        <input type="checkbox" name="checkbox" id="check"  value="F.A"> F.A
                    </div>
                    <div class="col-md-2">
                        <input type="checkbox" name="checkbox" id="check"  Value="B.Sc"> B.Sc
                    </div>
                    <div class="col-md-2">
                        <input type="checkbox" name="checkbox" id="check"  value="M.A"> M.A
                    </div>
                    <div class="col-md-2">
                        <input type="checkbox" name="checkbox" id="check"  value="Phd"> Phd
                    </div>
                </div>
            </div>
            <br>
            <div class="col-md-12">
                <label for="description" class="form-label text-light">Description</label>
                <textarea name="description" id="description" class="form-control"></textarea>
            </div>
            <br>
              <div class="col-12">
                <button type="submit" name="btn" class="btn btn-outline-success w-100">Submit</button>
                <br><br>
            </div>
              <div class="col-12">
                <button type="reset" name="btn" class="btn btn-outline-danger w-100">Reset</button>
                <br><br>
            </div>
        </form>
    </div>
</body>
</html>