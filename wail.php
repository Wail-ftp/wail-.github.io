<!DOCTYPE html>
<html>
<head>
    <title>Dynamic Table Generator</title>
</head>
<body>
    <h2>Create a Dynamic Table</h2>
    <form method="post">
        <label for="numRows">Number of Rows:</label>
        <input type="number" name="numRows" id="numRows" required><br><br>

        <label for="numCols">Number of Columns:</label>
        <input type="number" name="numCols" id="numCols" required><br><br>

        <input  style ="  border-radius: 5px;"type="submit" value="Generate Table">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $n = $_POST["numRows"];
        $m = $_POST["numCols"];

        // Create the dynamic table
        echo '<h3>Generated Table</h3>';
        echo '<table border="1">';
        for ($i = 1; $i <= $n; $i++) {
            echo '<tr>';
            for ($j = 1; $j <= $m; $j++) {
                echo '<td> Data ' . $i . ' - ' . $j . '</td>';
            }
            echo '</tr>';
        }
        echo '</table>';
    }
    ?>
</body>
</html>
