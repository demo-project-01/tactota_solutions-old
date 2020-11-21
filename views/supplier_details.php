<?php
include 'clerk_sidebar.php';
require '../controller/inventory_maintain.php';
$data=new inventory_maintain();
$sql=$data->view_suppliers();
?>
<head>
<link rel="stylesheet" href="../public/css/update.css">

</head>
<div class="content" style="width:auto;">
    <h1 id="tbl-heading">Supplier Details</h1>
    
    <div class="new">
        <a class="add_button" href="add_suppliers.php"><i class="fa fa-plus" aria-hidden="true"></i>
Add new Suppliers</a>
    </div>
    <br/>
    <div class="search">
        <input type="text" placeholder="Search..">
    </div>

    <div class="view-tbl">
        <table>
            <thead>
                <tr>
                   
                    <th>Supplier Name</th>
                    <th>Email Address</th>
                    <th>Address</th>
                    <th>Contact Number</th>
                    <th colspan=3>Action</th>
                </tr>
            </thead>
            <tbody>
            <?php
            foreach ($sql as $k => $v)
            {
                ?>
                <tr>
                    
                    <td><?php echo $sql[$k]["sup_name"] ?></td>
                    <td><?php echo $sql[$k]["email_address"] ?></td>
                    <td><?php echo $sql[$k]["address"] ?></td>
                    <td><?php echo $sql[$k]["telephone_no"] ?></td>

                   <td><a href="../controller/inventory_maintain.php?action=supplier_profile&id=<?php
                      echo $sql[$k]["sup_id"]; ?>" title="view"><i class="fa fa-eye" aria-hidden="true"></i>
                    </a></td>
                    <td><a href ="#" title="Update"><i class="fa fa-pencil" aria-hidden="true"></i></a></td>
                    <td><a href ="#" title="Delete"><i class="fa fa-trash" aria-hidden="true"></i></a></td>
                   </tr>
                <?php

            } ?>
            </tbody>
        </table>
    </div>
</div>
</body>

