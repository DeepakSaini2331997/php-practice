<!DOCTYPE html>
<html lang="en">
<head>
    <title>PHP Calculator</title>
</head>
<body>
    <h3>Calculator with BODMAS Rules</h3>
    <form method="post" action="">
        <label for="expression">Enter an expression:</label>
        <input type="text" name="expression" id="expression" required>
        <input type="submit" value="Calculate">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $expression = $_POST["expression"];

        if (!preg_match('/^[0-9+\-\/\*\(\) ]+$/', $expression)) {
            echo '<p style="color: red;">Invalid expression.</p>';
        } else {
            $result = @eval("return $expression;");

            if ($result === FALSE) {
                echo '<p style="color: red;">Error in the expression.</p>';
            } else {
                echo '<p><b>Result:</b> ' . $result . '</p>';
            }
        }
    }
    ?>

</body>
</html>
