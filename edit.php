<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <title>User Registration</title>
</head>

<body>

    <?php
    include('config.php');
    if(isset($_GET['id']))
    {
        $id = $_GET['id'];
        $Select_result = $conn->query("SELECT * FROM users WHERE id = '$id'");
        $user = $select_result->fetch_assoc();
    }
    if (isset($_POST['submit'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        

        if ($name != "" && $email != "" && $password != "" && $Confirm_password != "") {
            if ($password == $Confirm_password) {
                $password = md5($password);
                $result = $conn->query("INSERT INTO users (name, email, password) VALUES ('$name' , '$email', '$password')");
                 if($result){
                    echo"Data Inserted";
                 }
                 else{
                    echo"Data insertion Failed";
                 }


            } else {
                echo "please enter the same password";
            }
        } else {
            echo "please fill up the data";
        }
    }


    ?>
    <div class="container">
        <h2>User Registration</h2>
        <form action="#" method="post">
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" value = "<?php echo$user['name']?>;" class="form-control" id="name" placeholder="Enter name">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email"  value = "<?php echo$user['email']?>;" name="email" class="form-control" id="email" placeholder="Enter email">
            </div>
           
            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
        </form>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>

</html>