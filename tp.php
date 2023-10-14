<!DOCTYPE html>
<html>
<head>
</head>
<body>
   <div style="text-align: center;">
    <h3>TP 1</h3>
    <h3>Calculating a Grade Report</h3>
    <p>&nbsp;</p>
   </div>

   <form action="Calculate.php" method="post">
       <?php 
       $numRows = $_GET["numRows"];
       echo '<table border="1" align="center" cellpadding="4" cellspacing="0">';
       echo '<caption>List of Subjects</caption>';
       echo '<tr>';
       echo '<th scope="col">Subject Label</th>';
       echo '<th scope="col">Coefficient</th>';
       echo '<th scope="col">Exam Score</th>';
       echo '</tr>';

       for ($i = 0; $i < $numRows; $i++) {
           echo '<tr>';
           echo '<td><input name="subj[]" type="text" required="required"></td>';
           echo '<td><input name="coef[]" type="number" max="5" min="1"></td>';
           echo '<td><input name="note[]" type="number" max="20" min="0"></td>';
           echo '</tr>';
       }

       echo '</table>';
       ?>
       <br></br>
       <div style="text-align: center;">
       <input type="submit" value="Calculate">
      </div>
   </form>

</body>
</html>
