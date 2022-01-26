
        <?php
$myproducts = [
   ["Bonnet en laine", "10€", "Description : Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis a leo diam. Quisque lorem orci, accumsan quis dolor sed, gravida."] ,
   ["Bonnet en laine bio", "20€", "Description : Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis a leo diam. Quisque lorem orci, accumsan quis dolor sed, gravida."],
  ["Bonnet en laine et cachemire", "12€", "Description : Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis a leo diam. Quisque lorem orci, accumsan quis dolor sed, gravida."],
  ["Bonnet arc-en-ciel", "15€", "Description : Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis a leo diam. Quisque lorem orci, accumsan quis dolor sed, gravida."]
]
?>










<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Premiere page</title>
</head>
      

<body>
  <table>
  <?php
    foreach ($myproducts as $key => $value) {


      
  ?>
    <tr>
      <?php
            for ($i=0; $i <= 2 ; $i++) { 
              ?>
      <td>
        <?php   
         echo $value[$i];
         ?>
      </td>
          <?php
    }
    ?>
    </tr>
    <?php
    }
    ?>
  </table>
</body>
</html>