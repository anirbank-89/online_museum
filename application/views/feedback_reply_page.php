<!DOCTYPE html>
<html>
<head>
<title></title>
</head>
<body>
           <?php
           foreach ($data as $row) {
    ?>
           <form method="post">
                      Feedbacker Name : <input type="text" name="name" value="<?php echo $row->name?>"><br>
                      Feedbacker Email : <input type="email" name="email" value="<?php echo $row->email?>"><br>
                      Feedbacker Message : <textarea style="resize:none;width:40%;height:100px;"><?php echo $row->feedback_msg?></textarea><br>
                      Subject : <input type="text" name="subject"><br>
                      Body : <textarea style="resize:none;width:40%;height:200px;" name="mail_body"></textarea><br>
                      <input type="submit" name="submit" value="Send">
           </form>
           <?php
}
?>
</body>
</html>
