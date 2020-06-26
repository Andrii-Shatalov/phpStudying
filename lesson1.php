<?php
$rows = 10;
$columns = 10;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Table</title>
</head>
<style>
.box-border
{
   display: inline-block;
   border: 1px solid black;
   width: 180px;
   height: 380px;
   text-align: center;
}
.main-box 
{
   display: block;
   border: 1px solid black;
   width: 926px;
   height: 764px;
}
</style>
<body>
<div class="main-box">
<?php for ($i=1; $i <=$rows ; $i++) : ?>
<div class="box-border">
<?php for ($j=1; $j <=$columns ; $j++) : ?>
<p><?php echo "$i * $j"." = ". $i*$j; ?></p>
<?php endfor;?>
</div>
<?php endfor;?>
</div>
</body>
</html>
