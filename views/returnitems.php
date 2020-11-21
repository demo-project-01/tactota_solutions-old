<?php
   include 'clerk_sidebar.php';
   require '../controller/inventory_maintain.php';
   $data=new inventory_maintain();
   $sql=$data->display_returnitem_details();
 
?>
<head>
<link rel="stylesheet" href="../public/css/update.css">
</head>
<div class="content" style="width:auto;">
    <h1 id="tbl-heading">Return Items</h1><br/>
    <div class="search">
    <input type="text" placeholder="Search..">
    </div>
    <div class="update-tbl">
       <table>
            <thead>
                <tr>
                <!--th> Product ID</th-->
                    <th> Product Name</th>
                    <th> Brand Name</th>  
                    <th> Model Number</th>
                    <th> Action</th>
                    <!--th scope="col" colspan=2 border=0></th-->
                </tr>
            </thead>
            <tbody>
            <?php

            foreach ($sql as $k => $v)
            {
                ?>
                <tr>
                <!--td><!-?php echo $sql[$k]["p_id"] ?></td-->
                    <td><?php echo $sql[$k]["p_name"] ?></td>
		            <td><?php echo $sql[$k]["brand_name"] ?></td>
                    <td><?php echo $sql[$k]["model_no"] ?></td>
                    <td><a href="../controller/inventory_maintain.php?action=display_onereturnitem_details&id=<?php  echo $sql[$k]["p_id"]; ?>" class="view"><button>View</button></a></td>
                </tr>
                <?php
            } ?>
            </tbody>
       </table>
    </div>
    <div class="footer">
		<p>© Tactota Solutions All rights reserved </p>
    </div>  
</div>