<!DOCTYPE html>
<html>
    <head>
        <title>Tugas PHP</title>
    </head>

    <body>
        <?php
            $input1 = "Ayo";
            $input2 = "Belajar";
            $input3 = "Bersama";
            $input4 = "Niomic";
        ?>

        <h1>Operator String</h1>
        <table border="1">
            <tr>
                <td>Input 1</td>
                <td>Input 2</td>
                <td>Hasil</td>
            </tr>
            <tr>
                <td><?php echo $input1; ?></td>
                <td><?php echo $input2; ?></td>
                <td><?php echo $input1. " ". $input2; ?></td>
            </tr>
            <tr>
                <td><?php echo $input3; ?></td>
                <td><?php echo $input4; ?></td>
                <td><?php echo $input3. " ".$input4; ?></td>
            </tr>
        </table>
    </body>
</html>