

<?php
require_once "includes/header.php";
?>

      <div class="container-fluid">
    <div class="row d-flex justify-content-center">
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
                echo $value[$i];
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

  <?php
  require_once "includes/footer.php";
  ?>
