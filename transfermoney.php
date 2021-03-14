<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transfer Money</title>
    <link rel="stylesheet" type="text/css" href="table.css">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="nevbar.css">

    <style type="text/css">
        button {
            border: none;
            border-radius: 4px;
            padding: 10px;
            background: #958e88;
            color: white;
            letter-spacing: 1.5px;
            font-size: 15px;
            transition: 0.5s;
        }

        button:hover {
            background-color: #616C6F;
            color: white;
        }
    </style>

    <style>
        body {
            text-align: center;
        }
    </style>
    <style>
        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        td,
        th,
        tr {
            border: 1px solid #dddddd;
            text-align: center;
            padding: 8px;
        }

        tr:nth-child(even) {
            background-color: #dddddd;
        }
    </style>
</head>

<body>
    <?php
    include 'config.php';
    $sql = "SELECT * FROM user ";
    $result = mysqli_query($conn,$sql);
?>
    <div class="topnav" id="myTopnav">
        <a href="transactionhistory.php">History</a>
        <a href="index.php" class="active">Home</a>
          <i class="fa fa-bars"></i>
    </div>
    <div class="container">
        <h2 class="text-center pt-4">Transfer Money</h2>
        <br>
            <div class="row">
                <div class="col">
                    <div class="table-responsive-sm">
                    <table class="table table-hover table-sm table-striped table-condensed table-bordered">
        <thead>
            <tr>
                <th scope="col" class="text-center py-2">ID</th>
                <th scope="col" class="text-center py-2">Name</th>
                <th scope="col" class="text-center py-2">Email</th>
                <th scope="col" class="text-center py-2">Balance</th>
                <th scope="col" class="text-center py-2">Details</th>
            </tr>
        </thead>
        <tbody> 
        <?php 
            while($rows=mysqli_fetch_assoc($result)){
        ?>
            <tr>
                <td class="py-2"><?php echo $rows['Id'] ?></td>
                <td class="py-2"><?php echo $rows['Name']?></td>
                <td class="py-2"><?php echo $rows['E-mail']?></td>
                <td class="py-2"><?php echo $rows['Balance']?></td>
                <td><a href="selecteduserdetail.php?id= <?php echo $rows['Id'] ;?>"> <button type="button" class="btn">Transfer</button></a></td> 
            </tr>
            <?php
                    }
                ?>
        
        </tbody>
    </table>
   </body>
</html>