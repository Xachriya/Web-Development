<html>
    <head>
</head>
<body>
    <?php
// owner counting
$sql1 = "SELECT count(id) FROM `owners`";
$run1 = $config->query($sql1);
$ownercount = mysqli_num_rows($run1);

// dog-counting
$sql2 = "SELECT count(id) FROM `dogs`";
$run2 = $config->query($sql2);
$dogscount = mysqli_num_rows($run2);

// events-counting
$sql3 = "SELECT count(*) FROM `dogs`";
$run3 = $config->query($sql3);
$eventscount = mysqli_num_rows($run3);
?>

<h1>“Welcome to Poppleton Dog Show! This year <?php echo $ownercount;?> owners entered <?php echo $dogscount;?> dogs in <?phpecho $eventscount;?>
events!”.      </h1>



</body>
</html>