<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->


<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" href="favicon.ico">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-blue.css">
    </head>
    <body>
        <div class="w3-container">
            <ul class="w3-ul w3-card-4">
                <li class="w3-bar">
                <img src="logo.jpg" class="w3-bar-item w3-circle w3-hide-small" style="width:100px">
                    <div class="w3-bar-item">
                        <span class="w3-large"><div class="w3-text-blue">POWER SYSTEM OPERATION CORPORATION LIMITED</div></span>
                        <span class="w3-text-red">(A Government of India Enterprise) CIN: U40105DL2009GOI188682</span><br>
                        <span class="w3-text-blue">North Eastern Regional Load Despatch Centre</span>
                    </div>
                </li>
            </ul>
        </div>
        <br><br>
        
        <a href="createIndent.php" class="btn btn-outline-success btn-lg pull-right"> Create New Indent </a>
        <?php
            include 'db.php';
            $dbhost = 'localhost';
            $dbuser = 'Nishant';
            $dbpass = 'nish303';
            $dbname = 'wnp';

            $db = new db($dbhost, $dbuser, $dbpass, $dbname);
            $sql = "SELECT `Indent#`,`TenderType`,`WorkName`,`CostEstimate` FROM indent";
                    if($result = $db->query($sql)->fetchAll()){
                        echo $result->numRows();
                        if($result->numRows() > 0){
                            echo "<table class='table table-bordered table-striped'>";
                                echo "<thead>";
                                    echo "<tr>";
                                        echo "<th>Indent No</th>";
                                        echo "<th>Tender Type</th>";
                                        echo "<th>Name of the Work</th>";
                                        echo "<th>Estimated Cost</th>";
                                        echo "<th>Current Status</th>";
                                    echo "</tr>";
                                echo "</thead>";
                                echo "<tbody>";
                                foreach($result as $row ){
                                    echo "<tr>";
                                        echo "<td>" . $row['Indent#'] . "</td>";
                                        echo "<td>" . $row['TenderType'] . "</td>";
                                        echo "<td>" . $row['WorkName'] . "</td>";
                                        echo "<td>" . $row['CostEstimate'] . "</td>";
                                        echo "<td>";
                                        echo "</td>";
                                    echo "</tr>";
                                }
                                echo "</tbody>";                            
                            echo "</table>";
                            // Free result set
                            
                        } else{
                            echo "<p class='lead'><em>No records were found.</em></p>";
                        }
                    } else{
                        echo "ERROR: Could not able to execute " ;
                    }
                    
                    // Close connection
                    $db->close();
                    
        
        // put your code here
        ?>
    </body>
</html>
