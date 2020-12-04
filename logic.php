<?php
include "index.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Bootstrap CSS-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
    <!--Bootstrap JS-->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"</script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" </script>


     <!--Google fonts-->
     <link rel="preconnect" href="https://fonts.gstatic.com">
     <link href="https://fonts.googleapis.com/css2?family=Baloo+Thambi+2:wght@400;500;600;700;800&family=Padauk&display=swap" rel="stylesheet">
     <!--font Aesome-->
     <script src="https://kit.fontawesome.com/9b8b344da4.js" crossorigin="anonymous"></script>
     <!--My stylesheet-->
     <link rel= "stylesheet " href="style.css"



    <title></title>
</head>
<body>
<div class="container-fluid bg=light p-5 text-center my-3">
<h1>Covid-19 Tracker</h1>
<h5 class="text-muted">An opensource project to keep the track of covid-19</h5></div>
<div class="container-fluid"></div>

<table class="table">
<thead class="thead-dark">
  <tr>
   <th scope="col">Countries</th>
   <th scope="col">Confirmed</th>
   <th scope="col">Recovered</th>
   <th scope="col">Deaths</th>
   </tr>
</thead>
<tbody>
<?php
foreach($data as $key => $value){
    $increase =$value[$days_count]['confirmed']-$value[$days_count_prev]['confirmed']

    ?>
    <tr>
    <th><?php echo $key;?></th>
    <td>
     <?php echo $value[$days_count]['confirmed'];?>
     
     <?php echo $increase;?>
     
    </td>
    <td>
     <?php echo $value[$days_count]['recovered'];?>
    </td>
    <td>
     <?php echo $value[$days_count]['deaths'];?>
    </td>

    </tr>
    <?php }?>


</tbody>


</table>
</body>
</html>