<?php
echo "<h1>Hello World</h1>";
echo"Hello     World";
echo "hello","world";
echo "hello"."world";
echo "hello","world";
echo "<script>alert('123')</script>";
echo 'alert("123")';
print ("Hello World");
$total = 3+/*2*/+2+1;
echo " <!--  Total is $total --> ";
echo $total;
?>
<?= "Hello World"; ?>
<!-- 
hello -->

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1><?php echo "hello" ?></h1>
  <?php
  echo "<h1>hello</h1>";
  ?>
  <p <?php echo 'style="color: red;"'?>>Lorem ipsum dolor sit amet consectetur adipisicing elit.
    In commodi, nulla dignissimos iste facilis est repellat vitae. 
    Autem at facilis quibusdam quas! Quibusdam vel mollitia possimus voluptatibus
    placeat dignissimos qui!</p>
    <p><?php echo "lorem nulla dignissimos iste facilis est repellat vitae.<br>
    Autem at facilis quibusdam quas! "?></p>
    <script>
      <?php echo 'alert("hello")'; ?>
    </script>
</body>
</html>