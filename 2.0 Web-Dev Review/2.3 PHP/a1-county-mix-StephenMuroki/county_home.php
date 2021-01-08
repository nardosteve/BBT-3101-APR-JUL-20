<?php
require_once 'county_mix.php';
 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>County Mix</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="icon" href="images/ke.ico">
    <!-- Pure CSS Framework CDN -->
    <!-- Pure-CSS from https://codepen.io/P1N2O/pen/pyBNzX -->
    <link rel="stylesheet" href="https://unpkg.com/purecss@2.0.3/build/pure-min.css" integrity="sha384-cg6SkqEOCV1NbJoCu11+bm0NvBRc8IYLRGXkmNrqUBfTjmMYwNKPWBTIKyw9mHNJ" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Chelsea+Market&display=swap" rel="stylesheet">
  </head>
  <body>

    <!-- Adding a Nav-bar -->
    <div class="nav-bar pure-menu pure-menu-horizontal">
    <a href="county_home.php" class="pure-menu-heading pure-menu-link">KE-COUNTY-MIX</a>
    <ul class="pure-menu-list">
        <li class="pure-menu-item">
            <a href="county_home.php" class="pure-menu-link">HOME</a>
        </li>
        <li class="pure-menu-item">
            <a href="https://github.com/StephenMuroki/a1-county-mix-StephenMuroki.git" class="pure-menu-link">GITHUB-REPO</a>
        </li>
    </ul>
</div>
    <!-- Adding a Nav-bar -->

    <!-- Code for Generating table with Data from Array -->
<div class="pure-table data_table">
  <?php
    echo '<table border="1">';
    echo '<tr><th>#</th><th>Name</th><th>Governor</th><th>Website</th><th>Party</th></tr>';

    foreach($county_data_information as $county){
      echo '<tr>';

      foreach ($county as $value) {
        echo '<td>'. $value. '</td>';
      }
            // Governor Parties
            if ($county['Party'] == 'Jubilee') {
              echo '<td>','<img src="images/Jubilee_Party_logo.png" width="50px" height="50px">';
            }elseif ($county['Party'] == 'ODM') {
              echo '<td>','<img src="images/odm.png" width="50px" height="50px">';
            }elseif ($county['Party'] == 'WDM K') {
              echo '<td>','<img src="images/Wiper_kenya_wdm_logo.png" width="50px" height="50px">';
            }elseif ($county['Party'] == 'Independent') {
              echo '<td>','<img src="images/210px-Coat_of_arms_of_Kenya_(Official).svg.png" width="50px" height="50px">';
            }elseif ($county['Party'] == 'Narc Kenya') {
              echo '<td>','<img src="images/Narc_Kenya_logo.jpg" width="50px" height="50px">';
            }elseif ($county['Party'] == 'FORD Kenya') {
              echo '<td>','<img src="images/FORDKSIMBA.jpg" width="50px" height="50px">';
            }else {
              echo '<td>','<img src="images/Kenya_African_National_Union.gif" width="50px" height="50px">';
            }
            // Governor Parties
      echo "</tr>";
      // Array Sum
    }
    echo '</table>';
    echo '<tfoot>
    <tr>
      <td>No of Governors:</td>
      <td></td>
    </tr>
    </tfoot>';
  ?>
</div>
    <!-- Code for Generating table with Data from Array -->
  </body>
</html>
