

<?php
require_once "includes/header.php";
?>
<table>
      <?php
        foreach( $myproducts as $value ) {

        ?>
      <tr>
        <?php
            for ($i = 0; $i <= 4; $i++) {
        ?>
      <td>
          <?php 

          if($i==2 && $value[$i]<= 12){
            echo "<strong style='color:lightgreen'>".$value[2]."</strong>"."<span> €</span>";
            }elseif ($i==2 && $value[$i]>= 12) {
                echo "<strong style='color:blue'>".$value[2]."</strong>"."<span> €</span>";
            }elseif($i==1){

                echo $value[1]."<span> €</span>";

            } else{
              echo $value[$i];
            }
 
        ?>
        </td> 
        <?php } ?> 
      </tr>

      <?php  } ?>
    </table>


  <?php
  require_once "includes/footer.php";
  ?>
