<?php
include 'clerk_sidebar.php';
session_start();
$row=$_SESSION['view_inbox_email'];
//print_r($row);
?>
<head>
<link rel="stylesheet" href="../public/css/update.css">
<link rel="stylesheet" href="../public/css/email.css">
</head>

<div class="content" style="width: auto;">
    <h1 id="tbl-heading">Supplier Reply</h1>

    <div class="email-tbl">
        <table class="email">
            <form action="" method="post">
            <tbody>
                <tr id="email-tr">
                    <td class="bold">From</td>
                    <td><input id="email-text" type="text" name="to" placeholder="<?php echo $row['email'] ?>"/></td>
                </tr>
              
                <tr id="email-tr">
                    <td class="bold">Message</td>
                    <td><textarea id="email-textarea" name="message" placeholder="<?php echo $row['description'] ?>" rows=4 cols=60></textarea></td>
                </tr>
                <tr id="email-tr">
                    <td colspan=2>
                        <a class="add_button" href="inbox_supplier_reply.php"><i class="fa fa-angle-double-left" aria-hidden="true">&nbsp&nbspBack</i></a>
                        <a class="add_button" href="../controller/inventory_maintain.php?action=view_inbox_delete&id=<?php echo $sql[$k]["email_id"]; ?>" ><i class="fa fa-trash" aria-hidden="true">&nbsp&nbspDelete</i></a>
                    </td>
                </tr>

            </tbody>
            </form>
        </table> 
    </div>
    <div class="footer">
        <p>© Tactota Solutions All rights reserved </p>
  </div>
</div>


</body>

