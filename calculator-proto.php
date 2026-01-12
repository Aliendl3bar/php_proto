<?php
    function add($a, $b) {
        return $a + $b;
    }
    function subtract($a, $b) {
        return $a - $b;
    }
    function multiply($a, $b) {
        return $a * $b;
    }
    function divide($a, $b) {
        if ($b == 0) {
            return "Error: Division by zero.";
        }
        return $a / $b;
    }

    function calculate($type, $num1, $num2) {
        switch ($type) {
            case 1:
                return add($num1, $num2);
            case 2:
                return subtract($num1, $num2);
            case 3:
                return multiply($num1, $num2);
            case 4:
                return divide($num1, $num2);
            default:
                return "Invalid calculation type.";
        }
    }

    $result = null;
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $type = $_POST["type"] ?? 0;
        $num1 = $_POST["num1"] ?? 0;
        $num2 = $_POST["num2"] ?? 0;
        $result = calculate($type, $num1, $num2);
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Simple Calculator</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
    </head>
    <body>
        <h1>Simple Calculator</h1>
        <h3>type 1 : addition </h3>
        <h3>type 2 : subtraction </h3>
        <h3>type 3 : multiplication </h3>
        <h3>type 4 : division </h3>

        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
            type: <input type="number" name="type" required><br>
            num1: <input type="number" name="num1" required><br>
            num2: <input type="number" name="num2" required><br>
            <input type="submit" value="Submit">
        </form>

        <?php if ($result !== null): ?>
            <h2>Result: <?php echo $result; ?></h2>
        <?php endif; ?>
    </body>
</html>


