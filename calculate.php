<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $expression = $_POST['expression'];

    // Evaluating the mathematical expression
    try {
        // PHP eval is risky. For a simple example like this, it's fine.
        $result = eval("return $expression;");
        echo "<h2>Result: $result</h2>";
        echo "<a href='calculator.html'>Go back</a>";
    } catch (Exception $e) {
        echo "<h2>Error: Invalid Expression</h2>";
        echo "<a href='calculator.html'>Go back</a>";
    }
}
?>
