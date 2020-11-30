<?php
   include 'clerk_sidebar.php';
 //  require '../controller/inventory_maintain.php';
  // $data=new inventory_maintain();
   //$sql=$data->display_reminders();
   //print_r($sql);
?>
<link rel="stylesheet" href="..public/css/style1.css">
<link rel="stylesheet" href="../public/css/update.css">
<link rel="stylesheet" href="../public/css/report.css">


<div class="content"style="width:auto;">
<h1 id="tbl-heading">Customer Reviews</h1>

<div class="nav-bar">
      <table>
        <tr>
          <td class="button-bar">
            <ul>
              <li><a class="button" href="#">Annual</a>
              <li><a class="button" href="#">Monthly</a>
              <li><a class="button" href="#">Weekly</a>           
          </td>
          <td class="date-bar">
            <li><a class="button" href="#">Custom Time Range: </a>   
            <label for="f_date" class="date-lbl">From : </label>
              <input type="date" id="f_date" name="f_date" placeholder="Select start date" min="2017-04-01" max="2020-11-21">
            <label for="t_date" class="date-lbl">To : </label>
                <input type="date" id="t_date" name="t_date" placeholder="Select End date" min="2017-04-01" max="2020-11-21">
          </td>
        </tr>
      </table>
    </div>
    <div class="page">
    <div class="view-tbl" id="view-tbl1">
       <table>
            <thead>
                <tr>
                    <th>Date</th>
                    <th>Email</th>
                    <th>Description</th>
                    <!--th scope="col" colspan=2 >Action</th-->
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>20/11/2020</td>
                    <td>nuwansasanka1@gmail.com</td>
                    <td>Customer Service was good. I got good quality products</td>
                    <!--td><a href="#" title="View"><i class="fa fa-eye" aria-hidden="true" id="tbl-icon"></i></a></td-->
                    <!--td><a href="#" title="Delete"><i class="fa fa-trash-o" aria-hidden="true" id="tbl-icon"></i></a></td-->
                </tr>
                <tr>
                    <td>20/11/2020</td>
                    <td>mufernando02@gmail.com</td>
                    <td>Excellent service</td>
                    <!--td><a href="#" title="View"><i class="fa fa-eye" aria-hidden="true" id="tbl-icon"></i></a></td-->
                    <!--td><a href="#" title="Delete"><i class="fa fa-trash-o" aria-hidden="true" id="tbl-icon"></i></a></td-->
                </tr>
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