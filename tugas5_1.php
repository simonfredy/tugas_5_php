<!DOCTYPE html>
<html>
    <head>
        <title>Tugas 5 PHP</title>
    </head>

    <body>
        <?php
            $i1 = "false";
            $i2 = "true";

            $and1 = ($i1 AND $i1);
            $and2 = ($i1 AND $i2);
            $and3 = ($i2 AND $i1);
            $and4 = ($i2 AND $i2);
            
            $or1 = ($i1 OR $i1);
            $or2 = ($i1 OR $i2);
            $or3 = ($i2 OR $i1);
            $or4 = ($i2 OR $i2);

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
                <td><?php echo "$and1"; ?></td>
                <td><?php echo "$or1"; ?></td> 
            </tr>
            <tr>
                <td>False</td>
                <td>True</td>
                <td><?php echo "$and2"; ?></td>
                <td><?php echo "$or2"; ?></td> 
            </tr>
            <tr>
                <td>True</td>
                <td>False</td>
                <td><?php echo "$and3"; ?></td>
                <td><?php echo "$or3"; ?></td> 
            </tr>
            <tr>
                <td>True</td>
                <td>True</td>
                <td><?php echo "$and4"; ?></td>
                <td><?php echo "$or4"; ?></td> 
            </tr>
        </table>
    </body>
</html>