<?php
include "config.php";

$sqli = "SELECT *FROM users";

$result = $conn->query($sqli);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <h2>
            users
        </h2>
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">First Name</th>
                    <th scope="col">Last Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Password</th>
                    <th scope="col">Gender</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if($result-> num_rows>0 ){
                    while($row = $result->fetch_assoc()){
                        ?>
                <tr>
                    <td>
                        <?php echo $row['id']; ?>
                    </td>
                    <td>
                        <?php echo $row['firstname']; ?>
                    </td>
                    <td>
                        <?php echo $row['lastname']; ?>
                    </td>
                    <td>
                        <?php echo $row['email']; ?>
                    </td>
                    <td>
                        <?php echo $row['password']; ?>
                    </td>
                    <td>
                        <?php echo $row['gender']; ?>
                    </td>
                    <td>
                        <a class="btn btn-primary" href="update.php?id=<?php echo $row['id']; ?>">Edit</a>
                        <a class="btn btn-danger" href="delete.php?id=<?php echo $row['id']; ?>">Delete</a>
                    </td>
                </tr>
                <?php }
                }
                ?>
            </tbody>
        </table>
    </div>
</body>

</html>