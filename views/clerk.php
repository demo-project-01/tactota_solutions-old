<?php
   include 'clerk_sidebar.php';
   require '../controller/inventory_maintain.php';
   $data=new inventory_maintain();
   $sql=$data->display_few_reminders();
   //print_r($sql);
?>
<body>
<div class="content" style="width:auto;">
 <div>
    <div class= "dash1">
    <b><p class="dash">SUPPLIERS</p></b>
    <i class="fa fa-users fa-2x icon-right" aria-hidden="true"></i> 
    <b><p class="infor">10 Record(s)</p></b>
    </div>

    <div class= "dash2">
        <b><p class="dash">PRODUCTS</p></b>
        <i class="fa fa-table fa-2x icon-right" aria-hidden="true"></i>
        <b><p class="infor">25 Record(s)</p></b>
    </div>
     
    <div class= "dash5">
        <b><p class="dash">PURCHASE</p></b>
        <i class="fas fa-money-bill-alt fa-2x icon-right"></i>
        <b><p class="infor">15 Record(s)</p></b>
       
    </div>


    </div>

    <div> 
    <div class= "dash3">
        <b><p class="dash">REMINDERS</p></b>
        <i class="fa fa-bell-o fa-2x icon-right" aria-hidden="true"></i>
        <b><p class="infor">5 Record(s)</p></b>
        
    </div>
    <div class= "dash4">
        <b><p class="dash">RETURN ITEMS</p></b>
        <i class="fas fa-cart-arrow-down fa-2x icon-right"></i>
        <b><p class="infor">5 Record(s)</p></b>
    </div>
    <div class= "dash6">
        <b><p class="dash">CURRENT STOCKS</p></b>
        <i class="fas fa-store fa-2x icon-right"></i>
        <b><p class="infor">5 Record(s)</p></b>
    </div>
    </div>
    
   <div class="wrapper">
        <div class="list_wrap">
            <div class="subcontent">
            <i class="fa fa-list  icon-li" aria-hidden="true"> Stock Reminders</i>  
            </div>
            <div class="clerk-tbl">
            <table>
            <tboady>
            <ul>    
            <?php
            foreach ($sql as $k => $v){
                ?><tr>
                <td><li class="github">
                    <div class="list">
                    <div class="contentc">
                         <i class="fa fa-list-ul icon-list" aria-hidden="true"></i>
                            <b><?php echo $sql[$k]["p_name"] ?></b>
                        </div>   
                    </div>       
                   </li>
                </td>
            </tr>
            <?php }?>
            </ul>
            </tboady>
            </table>
            </div>
            </br></br>
                <div><br/>
                    <a href="reminderitems.php" class="viewsAll" ><span>View All Reminders</span></a>
                </div>    
        </div>
    </div>
    <div class="footer">
	<p>© Tactota Solutions All rights reserved </p>
   </div>
</div>
</body>
  
