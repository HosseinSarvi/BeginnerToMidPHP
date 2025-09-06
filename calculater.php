<?php
function calculater($n1,$n2,$operation){
    switch($operation){
        case "+": $result = $n1 + $n2 ;break;
        case "-": $result = $n1 - $n2 ;break;
        case "*": $result = $n1 * $n2 ;break;
        case "/": $result = $n1 / $n2 ;break;
    }
    return $result;
}

if(isset($_POST["submit"])){
    $n1 = $_POST["number1"];
    $n2 = $_POST["number2"];
    $operation = $_POST["operation"];
    
    echo calculater($n1,$n2,$operation);
}
?>

<form method="POST" action="">
    <label for="number1">Number1:</label>
    <input type="number" name="number1" id="number1" required><br><br>
    
    <label for="number2">Number2:</label>
    <input type="number" name="number2" id="number2" required><br><br>
    
    <select name="operation" id="operation">
        <option value="+">+</option>
        <option value="-">-</option>
        <option value="*">*</option>
        <option value="/">/</option>
    </select>
    
    <button type="submit" name="submit">Calculate</button>
</form>
