<!DOCTYPE html>
<html>
    <head>
        <body>
        <style>
            table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
            }

            td, th {
            border: 1px solid #000;
            text-align: left;
            padding: 8px;
            }

            tr:nth-child(even) {
            background-color: #dddddd;
            }
        </style>
    </head>
    <table>
    <?php for ($i = 0; $i <= 9; $i++) { ?>
        <tr>
            <?php for ($j = 0; $j <= 9; $j++) { ?>
                <?php if ($i == 0) { ?>
                    <?php if ($j != 0) { ?>
                        <td><h2><?= $j ?></h2></td>
                    <?php } else { ?>
                        <td><h2></h2></td>
                    <?php } ?>
                <?php } elseif ($i == 1) { ?>
                    <?php if ($j == 0) { ?>
                        <td><h2><?= $i ?></h2></td>
                    <?php } else { ?>
                        <td><?= $j ?></td>
                    <?php } ?>
                <?php } else { ?>
                    <?php if ($j == 0) { ?>
                        <td><h2><?= $i ?></h2></td>
                    <?php } else { ?>
                        <td><?= $i * $j ?></td>
                    <?php } ?>
                <?php } ?>
            <?php } ?>
        </tr>
    <?php } ?>
</table>
</body>
<html>