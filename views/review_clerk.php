<?php
  include 'clerk_sidebar.php';
  require '../controller/inventory_maintain.php';
   $data=new inventory_maintain();
   $sql=$data->review_clerk();
//  print_r($sql);
?>
<link rel="stylesheet" href="..public/css/style1.css">
<link rel="stylesheet" href="../public/css/update.css">
<link rel="stylesheet" href="../public/css/report.css">


<div class="content"style="width:auto;">
<h1 id="tbl-heading">Customer Reviews</h1>
    <div class="page">
    <div class="view-tbl" id="view-tbl1">
    <table>
            <thead>
                <tr>
                    <th>Date</th>
                    <th>Email</th>
                    <th>Subject</th>
                    <th scope="col" colspan=2 >Action</th>
                </tr>
            </thead>
            <tbody>
            <?php
            if(!empty($sql)){
         foreach ($sql as $k => $v)
           {
             ?>
            <tr>

             <td><?php echo $sql[$k]["date"] ?></td>
             <td><?php echo $sql[$k]["email"] ?></td>
             <td><?php echo $sql[$k]["subject"] ?></td>
         

           
             <td><a href="../controller/inventory_maintain.php?action=view_feedback&id=<?php echo $sql[$k]['feedback_id'] ?>" title="View"><i class="fa fa-eye" aria-hidden="true" id="tbl-icon"></i></a></td>
            
            </tr>
  <?php
           }
                           } ?>
                              <?php 
      
          
          ?>
            </tbody>
       </table> 
    
    </div>
    <table>
        <tr>
          <td class="center-btn">
            <a class="button" href="clerk.php" style="float:left;"><i class="fa fa-angle-double-left" aria-hidden="true">&nbsp&nbspBack</i></a>
          </td>
          <!--td class="center-btn">
            <a class="button" href="#" style="float:right;"><i class="fa fa-download" aria-hidden="true">&nbsp&nbspDownload Report</i></a>
          </td-->
        </tr>
      </table>
  </div>
    <div class="footer">
	<p>© Tactota Solutions All rights reserved </p>
    </div>    
</div>
