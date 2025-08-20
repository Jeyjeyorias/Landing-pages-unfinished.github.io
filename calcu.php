<!DOCTYPE html>
<html lang="en">
 
<head>
    <title>Simple Calculator Program in PHP</title>
</head>

<style>
    body {
  display: flex;
  justify-content: center; 
  align-items: center; 
  min-height: 100vh; 
  margin: 0; 
}

 h1{
  color: blue;
  font-family: verdana;
  font-size: 300%;

 }



</style>

<?php
$result = ''; // Initialize the result variable
$first_num = $second_num = $operator = ''; // Initialize variables for first number, second number, and operator

// Check if form is submitted and variables are set
if (isset($_POST['first_num']) && isset($_POST['second_num']) && isset($_POST['operator'])) {
    $first_num = $_POST['first_num'];
    $second_num = $_POST['second_num'];
    $operator = $_POST['operator'];

    if (is_numeric($first_num) && is_numeric($second_num)) {
        switch ($operator) {
            case "Add":
                $result = $first_num + $second_num;
                break;
            case "Subtract":
                $result = $first_num - $second_num;
                break;
            case "Multiply":
                $result = $first_num * $second_num;
                break;
            case "Divide":
                if ($second_num != 0) {
                    $result = $first_num / $second_num;
                } else {
                    $result = 'Error: Division by zero';
                }
                break;
            default:
                $result = 'Invalid operator';
                break;
        }
    } else {
        $result = 'Please enter valid numbers';
    }
}
?>

<body>
    <div id="page-wrap">
        <h1>PHP - Simple Calculator Program</h1>
        <form action="" method="post" id="quiz-form">
            <p>
                <input type="number" name="first_num" id="first_num" required="required" value="<?php echo htmlspecialchars($first_num); ?>" /> <b>First Number</b>
            </p>
            <p>
                <input type="number" name="second_num" id="second_num" required="required" value="<?php echo htmlspecialchars($second_num); ?>" /> <b>Second Number</b>
            </p>
            <p>
                <input readonly="readonly" name="result" value="<?php echo htmlspecialchars($result); ?>"> <b>Result</b>
            </p>
            <input type="submit" name="operator" value="Add" />
            <input type="submit" name="operator" value="Subtract" />
            <input type="submit" name="operator" value="Multiply" />
            <input type="submit" name="operator" value="Divide" />
        </form>
    </div>
</body>

</html>
