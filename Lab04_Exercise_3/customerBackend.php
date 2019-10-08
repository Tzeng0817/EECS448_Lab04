
<html>
<head>
  <title>Web Store</title>
  <link type="text/css" rel="stylesheet" href="style.css">
</head>
<body>
  <div class="form">
    <h1 class="center">Here's Yuor Receipt: </h1>
    <?php
      $total = 0;
      $items = ["BCAA","Creatine","Protein"];
      $costs = ["10.25","4.99","1.99" ];

      echo "Thank you for visiting Ben's Web Store<br><br>";
      echo "Welcome ".$_POST["username"]."<br>";
      echo "Your password is: ".$_POST["password"]."<br><br>";

      echo "<table>";

        // thead
        echo "<thead>";
          echo "<tr>";
            echo "<th class=\"no_border\"></th>";
            echo "<th>Quantity</th>";
            echo "<th>Cost Per Item</th>";
            echo "<th>Sub Total</th>";
          echo "</tr>";
        echo "</thead>";

        // tbody
        echo "<tbody>";

          //Items
          for($i = 0; $i < 3; $i++)
          {
            $item_subtotal = ($costs[$i] * $_POST["item-".($i + 1)]);
            $total += $item_subtotal;
            echo "<tr>";
              echo "<th>".$items[$i]."</th>";
              echo "<td>".number_format($_POST["item-".($i + 1)], 0)."</th>";
              echo "<td>\$".$costs[$i]."</th>";
              echo "<td>\$".number_format($item_subtotal, 2, '.', ',')."</th>";
            echo "</tr>";
          }

          //Shipping
          echo "<tr>";
            echo "<th>Shipping</th>";
            $total += $_POST["shipping"];

            if($_POST["shipping"] == 0)
            {
              echo "<td colspan=\"2\">7 day</td>";
            }
            else if($_POST["shipping"] == 5)
            {
              echo "<td colspan=\"2\">3 day</td>";
            }
            else
            {
              echo "<td colspan=\"2\">Overnight</td>";
            }
            echo "<td>\$".number_format($_POST["shipping"], 2, '.', ',')."</td>";
          echo "</tr>";
        echo "</tbody>";

        // Total Cost
        echo "<tfoot>";
          echo "<tr>";
            echo "<th colspan=\"3\">Total Cost</th>";
            echo "<th class=\"total\">\$".number_format($total, 2, '.', ',')."</th>";
          echo "</tr>";
        echo "</tfoot>";
      echo "</table>";
    ?>
  </div>
</body>
</html>
