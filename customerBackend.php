<html>
    <head>
        <title>Lab 4: Exercise 3</title>
        <link rel="stylesheet" href="style.css">
        <script src="formChecker.js"></script>
    </head>
    <body>
        <div id="container">
            <h1>The order has been processed, here is the confirmation:</h1><br>
            <?php
                            $uName = $_POST["uNameFE"];
                            $pwd = $_POST["pwdFE"];
                            $numTowel  = $_POST["4grand"];
                            $numPhoto = $_POST["2grand"];
                            $numCassette  = $_POST["6grand"];
                            $fPrice = 0;
                            $sPrice = 0;
                            $tPrice = 0;
                            $fPrice  = $numTowel * 4000;
                            $sPrice = $numPhoto * 2000;
                            $tPrice  = $numCassette * 6000;
                            $shipPrice = $_POST["del"];
                            $finalPrice = '&#36;'.($fPrice + $sPrice + $tPrice + $shipPrice);

                            $whatShip = "";
                            if($shipPrice == 0)
                            {
                              $whatShip = "7 day: $0";
                            }
                            else if($shipPrice == 5)
                            {
                              $whatShip = "3 day: $5";
                            }
                            else if($shipPrice == 50)
                            {
                              $whatShip = "Overnight: $50";
                            }
                            else $shipType = "Invalid shipping type.";

                            $fPrice  = '&#36;'.$fPrice;
                            $sPrice  = '&#36;'.$sPrice;
                            $tPrice  = '&#36;'.$tPrice;
                            $sPrice  = '&#36;'.$shipPrice;

                            echo "<h3>Username: {$uName}</h3><h3>Password: {$pwd}</h3>";
                            echo "<br>";
                            echo "<h2>Receipt: </h2>";
                            echo "<table>";
                            echo    "<tr><td class=\"g\"></td><td class=\"g\"><b>&nbsp;&nbsp;&nbsp;Amount:&nbsp;&nbsp;&nbsp;</b></td><td class=\"g\"><b>Item Price: &nbsp;&nbsp;&nbsp;</b></td><td class=\"g\"><b>Total Price: </b></td></tr>";
                            echo    "<tr><td class=\"g\"><b>Towel</b></td><td class=\"b\">&nbsp;&nbsp;&nbsp;&nbsp;{$numTowel}</td><td class=\"b\">$4000.00</td><td class=\"b\">{$fPrice}.00</td></tr>";
                            echo    "<tr><td class=\"g\"><b>Photo</b></td><td class=\"b\">&nbsp;&nbsp;&nbsp;&nbsp;{$numPhoto}</td><td class=\"b\">$2000.00</td><td class=\"b\">{$sPrice}.00</td></tr>";
                            echo    "<tr><td class=\"g\"><b>Cassette</b></td><td class=\"b\">&nbsp;&nbsp;&nbsp;&nbsp;{$numCassette}</td><td class=\"b\">$6000.00</td><td class=\"b\">{$tPrice}.00</td></tr>";
                            echo    "<tr><td class=\"g\"><b>Shipping</b></td><td colspan=\"2\"  class=\"b\">{$shipType}</td><td class=\"b\">{$shipPrice}.00</td></tr>";
                            echo    "<tr><td colspan=\"3\" class=\"g\"><b>Total Cost</b></td><td class=\"g\"><b>{$finalPrice}.00</b></td></tr>";
                            echo "</table>";
                        ?>
                    </div>
                </body>
            </html>
