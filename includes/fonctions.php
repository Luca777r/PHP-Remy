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
        <li class="list-group-item">'."TTC : ".$item[1].'</li>
        <li class="list-group-item">'."HT : ".$item[3].'</li>
        <li class="list-group-item">'.$item[2].'</li>
        <button type="button" class="btn btn-success">Acheter</button>
      </ul>
    </div>
  ';
 }

?>
