<?php
session_start();
?>
<!DOCTYPE html>
<html>
<title>profile</title>
<script src="chart/dist/chart.min.js"></script>
<head>
    <!-- <script src="https://use.fontawesome.com/6748c87fdd.js"></script> -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">



    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="mainPageAfSign.css">
</head>
<body>


<canvas id="myChart" width="400" height="400"></canvas>

<?php
include "connection.php";
$market_id = $_SESSION['id'];

$markets = $db->popularity();
//$markets->count("*")
/*else{
  $name="anonymous";
}*/

$lables = array();
foreach($markets as $market)  {
  $name="anonymous";
  if($market['market_id']==$market_id)
    {
    $user = $db->professional("id= ?", $market_id)->fetch();
    $name = $user['market_name'];
    }
  array_push($lables,$name) ;


}
$expences = array();
foreach($markets as $market)  {

    $popularity = $market['popularity'];
  array_push($expences,$popularity) ;

}

?>

<script>
var ctx = document.getElementById('myChart').getContext('2d');
var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: [
              <?php
                $first_value = true;
                foreach($lables as $lable) {
                  if ($first_value) {
                    $first_value = false;
                  } else {
                    echo ",";
                  }
                  echo '"' . $lable . '"';
                }
              ?>
            ],
        datasets: [{
            label: '# of Votes',
            data: [
              <?php
                $first_value = true;
                foreach($expences as $expence) {
                  if ($first_value) {
                    $first_value = false;
                  } else {
                    echo ",";
                  }
                  echo $expence;
                }
              ?>
            ],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            y: {
                beginAtZero: true
            }
        }
    }
});
</script>


</body>
</html>
