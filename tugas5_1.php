<!DOCTYPE html>
<html>
    <head>
        <title>Tugas 5 PHP</title>
    </head>

    <body>
        <?php
            $and1 = (false && false);
            $and2 = (false && true);
            $and3 = (true && false);
            $and4 = (true && true);
            
            $or1 = (false || false);
            $or2 = (false || true);
            $or3 = (true || false);
            $or4 = (true || true);

        ?>
        <p>Tabel Logika 1111</p>
        <table border="1">
            <tr>
                <td>Input true</td>
                <td>Input 2</td>
                <td>AND</td>
                <td>OR</td> 
            </tr>
            <tr>
                <td>False</td>
                <td>False</td>
                <td><?php echo (float) $and1; ?></td>
                <td><?php echo (float) $or1; ?></td> 
            </tr>
            <tr>
                <td>False</td>
                <td>True</td>
                <td><?php echo (float) $and2; ?></td>
                <td><?php echo $or2; ?></td> 
            </tr>
            <tr>
                <td>True</td>
                <td>False</td>
                <td><?php echo (float) $and3; ?></td>
                <td><?php echo $or3; ?></td> 
            </tr>
            <tr>
                <td>True</td>
                <td>True</td>
                <td><?php echo $and4; ?></td>
                <td><?php echo $or4; ?></td> 
            </tr>
        </table>
    </body>
</html>