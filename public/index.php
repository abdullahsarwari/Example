
<!DOCTYPE html>
<html
<head>
<title>Arrys</title>
</head>

<body>
  <?php

// is like a folder that we can put our files in
// we creat and string first and the we can just
//print it
// if we want to replace something inside we use the code
//our arry we will use the <?php $mixed[2]="cat";


$abdullah=array(1,4,7,8,9,8,6 );
echo $abdullah [4];
?>


<?php $mixed= array(6, "fox", "dog", 5);
?>

<?php  echo $mixed [2]; ?>
<?php echo $mixed [0];?>
<?php echo $mixed[1];?>


<?php echo $abdullah[1][2]; ?>


<?php $mixed[2]="cat"; ?>


<?php $mixed[1]="hi";?>


<?php $mixed[]="Hi";?>


<pre>
<?php echo print_r ($mixed);?>
</pre>

</body>
</html>
