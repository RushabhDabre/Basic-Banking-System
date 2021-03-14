<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>History</title>
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

    <div class="topnav" id="myTopnav">
        <a href="transfermoney.php">View Customers</a>
        <a href="index.php" class="active">Home</a>
        <a href="javascript:void(0);" class="icon" onclick="myFunction()">
            <i class="fa fa-bars"></i>
        </a>
    </div>
    <table>
        <thead>
            <tr>
                <th>Sender</th>
                <th>Receiver</th>
                <th>Amount</th>
                <th>Date</th>
                <th>Time</th>
            </tr>
        </thead>
        <tbody>
            <?php

            include 'config.php';

            $sql = "select * from transaction";

            $query = mysqli_query($conn, $sql);

            while ($rows = mysqli_fetch_assoc($query)) {
            ?>

                <tr>

                    <td class="py-2"><?php echo $rows['sender']; ?></td>
                    <td class="py-2"><?php echo $rows['receiver']; ?></td>
                    <td class="py-2"><?php echo $rows['Amount']; ?> </td>
                    <td class="py-2"><?php echo $rows['date']; ?> </td>
                    <td class="py-2"><?php echo $rows['time']; ?> </td>

                <?php
            }

                ?>
        </tbody>

    </table>
</body>

</html>