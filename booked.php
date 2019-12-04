<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <style>
            table {
                border-collapse: collapse;
            }
            th {
                background: #ccc;
            }

            th, td {
                border: 1px solid #ccc;
                padding: 8px;
            }

            tr:nth-child(even) {
                background: #efefef;
            }

            tr:hover {
                background: #d1d1d1;
            }


        </style>
    </head>
    <body>



        <table class="my_table">
            <tr>
                <th>Sno</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone No</th>
                <th>Order ID</th>
            </tr>
            <?php
            require_once 'PaytmKit/app/dbfile.php';
            $obj = new Database();
            $obj->connect();
            $table = "kukku";
            $cols = "cid, cname, cemail, cphno, orderid";
            $where = "rec_status=1";
            $obj->select($table, $cols, $where);
            $res = $obj->getResult();
            $a = 0;
            foreach ($res as $value) {
                $id = $res[$a]['cid'];
                $cname = $res[$a]['cname'];
                $cemail = $res[$a]['cemail'];
                $cphno = $res[$a]['cphno'];
                $oid = $res[$a]['orderid'];
                $cnt = $a + 1;
                ?>
                <tr>
                    <td><?php echo $cnt; ?></td>
                    <td><?php echo $cname; ?></td>
                    <td><?php echo $cemail; ?></td>
                    <td><?php echo $cphno; ?></td>
                    <td><?php echo $oid; ?></td>
                </tr>
                <?php
                $a++;
            }
            ?>
        </table>
    </body>
</html>
