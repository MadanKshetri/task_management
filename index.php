<?php include('config.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>

<body>

    <table class="table table-striped table-bordered">
        <thead>
            <tr>
                <th scope="col">User Name</th>
                <th scope="col">email</th>
                <th scope="col">password</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php

            $result = $conn->query("SELECT * FROM users WHERE name ='madan'");
            while ($user = $result->fetch_assoc()) {
                ?>
                <tr>
                    <th scope="row"><?php echo $user['name']; ?></th>
                    <td><?php echo $user['email']; ?></td>
                    <td><?php echo $user['password']; ?></td>
                    <td>
                        <a href="edit.php?id=<?php echo $user ['id'];?>"  class="btn btn-sm btn-primary">Edit</a>
                        <a href="edit.php?id=<?php echo $user ['id'];?>" class="btn btn-sm btn-danger" onclick="return confirm ('Are sure');>Delete</a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>

</html>