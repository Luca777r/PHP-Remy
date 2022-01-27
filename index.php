
        <?php
$myproducts = [
   ["Bonnet en laine", 10, "€", "","Description : Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis a leo diam. Quisque lorem orci, accumsan quis dolor sed, gravida.","bonnet 1.jpeg"] ,
   ["Bonnet en laine bio", 20, "€","","Description : Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis a leo diam. Quisque lorem orci, accumsan quis dolor sed, gravida.","bonnet 2.jpeg"],
  ["Bonnet en laine et cachemire", 12, "€","","Description : Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis a leo diam. Quisque lorem orci, accumsan quis dolor sed, gravida.","bonnet 3.jpeg"],
  ["Bonnet arc-en-ciel", 15, "€","","Description : Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis a leo diam. Quisque lorem orci, accumsan quis dolor sed, gravida.","bonnet 4.jpeg"]
]
?>
<?php 

function HT(&$array)
{
      foreach( $array as &$value ) {
         $tva=(($value[1]*20)/100);
         $value[3]=$value[1]-$tva;
    }
  }
  HT($myproducts);
?>

<?php 
 function affichage(&$item){

echo '

     <div class="card" style="width: 18rem;">
      <img class="card-img-top" src="./assets/'.$item[5].'" alt="Card image cap">
      <div class="card-body">
        <h5 class="card-title">'.$item[0].'</h5>
        <p class="card-text">'.$item[4].'</p>
      </div>
      <ul class="list-group list-group-flush">
        <li class="list-group-item">'.$item[1].'</li>
        <li class="list-group-item">'.$item[3].'</li>
        <li class="list-group-item">'.$item[2].'</li>
        <button type="button" class="btn btn-success">Success</button>
      </ul>
    </div>
  ';
 }

?>






<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <title>Premiere page</title>
</head>
      

<body>
      <div class="container-fluid">
    <div class="row">
  <table>

  <?php
    foreach ($myproducts as $key => $value) {
      affichage($value);



    
  ?>
    <tr>
      <?php
            for ($i=0; $i <= 4 ; $i++) { 


              ?>
              
      <td>
        <?php

             if($i === 1 && $value[1] <= 12) {
               echo "<span style='color:lightgreen'>".$value[1]."</span>";
               }
               elseif ($i === 1 && $value[1] >= 12) {
                        echo "<span style='color:lightblue'>".$value[1]."</span>";
                        

               
             } else {

             }
             
              ?>
      </td>

          <?php
    }
    }
    ?>
    </tr>
      </div>
    </div>
  </table>
</body>

</html>