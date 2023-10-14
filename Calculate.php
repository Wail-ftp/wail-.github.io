<!DOCTYPE html>
<html>
<head>
</head>
<body>
   <div style="text-align: center;">
    <h3>TP 1</h3>
    <h3>Grade Report Results</h3>
    <p>&nbsp;</p>
   </div>

   <?php 
   if (isset($_POST['subj']) && isset($_POST['coef']) && isset($_POST['note'])) {
       $subj = $_POST['subj'];
       $coef = $_POST['coef'];
       $note = $_POST['note'];

       $totalWeightedScore = 0;
       $totalCoefficients = 0;

       echo '<table border="1" align="center" cellpadding="4" cellspacing="0">';
       echo '<caption>List of Subjects</caption>';
       echo '<tr>';
       echo '<th scope="col">Subject Label</th>';
       echo '<th scope="col">Coefficient</th>';
       echo '<th scope="col">Exam Score</th>';
       echo '<th scope="col">Weighted Score</th>';
       echo '</tr>';

       for ($i = 0; $i < count($subj); $i++) {
           echo '<tr>';
           echo '<td>' . $subj[$i] . '</td>';
           echo '<td>' . $coef[$i] . '</td>';
           echo '<td>' . $note[$i] . '</td>';

           $weightedScore = $coef[$i] * $note[$i];
           echo '<td>' . $weightedScore . '</td>';

           $totalWeightedScore += $weightedScore;
           $totalCoefficients += $coef[$i];

           echo '</tr>';
       }

       echo '</table>';
       
       $averageObtained = $totalWeightedScore / $totalCoefficients;
       echo '<div style="text-align: center;">';
       echo '<h3>Average Obtained = ' . $averageObtained . '</h3>';
       
       echo '<h3>Final Result = ' . ($averageObtained >= 10 ? 'Succeed' : 'Failed') . '</h3>';
       echo '</div>';
   } else {
       echo '<p>No data submitted.</p>';
   }
   ?>

</body>
</html>
