<?php
$number = $_GET['number'];
$percent = $_GET['percent'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multiply table</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <style>
        table tr td {
            text-align: center;
            vertical-align: middle;
            border: 1px solid grey;
        }

        table tr td.header {
            background-color: #e1e3e1;
            font-weight: bold;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Multiplication table generator</h1>
        <div class="card mt-3">
            <div class="card-body">                
                <div class="col-12 text-end mb-3">
                    <a href="task.php" class="btn btn-dark btn-lg">Go Back</a>
                </div>
                <table class="table">
                    <?php
                    for ($i = 0; $i <= $number; $i++) {
                    ?>
                        <td class='header'><?= ($i == 0) ? "" : $i ?></td>
                    <?php
                    }
                    ?>
                    <?php
                    for ($y = 1; $y <= $number; $y++) {
                    ?>
                        <tr>
                            <td class="header"><?= $y ?></td>
                            <?php
                            for ($z = 1; $z <= $number; $z++) {
                            ?>
                                <td><?= (rand(0, 100) < $percent) ? '' : $y*$z ?></td>
                            <?php
                            }
                            ?>
                        </tr>
                    <?php
                    }
                    ?>
                </table>
            </div>
        </div>
    </div>
</body>

</html>