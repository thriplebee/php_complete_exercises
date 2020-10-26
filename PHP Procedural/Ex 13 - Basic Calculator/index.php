<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Basic Calculator</title>
</head>
<body>
    <!-- Create a form to get user inputs -->
    <form action = "" method = "GET">
        <input type = "text" name = "num1" placeholder = "Number 1"><br><br>
        <input type = "text" name = "num2" placeholder = "Number 2"><br><br>

        <select name = "ope">
            <option value="none">None</option>
            <option value="add">Add</option>
            <option value="subtract">Substract</option>
            <option value="multiply">Multiply</option>
            <option value="divide">Divide</option>
            <option value="remainder">Remainder</option>
        </select><br><br>

        <button type = "submit" name = "submit">Calculate</button>
    </form>

    <p>Answer is : </p>

    <?php
        if(isset($_GET['submit'])){ // If button press
            // Assign values to variables using name attributes of the elements of 'form' element
            $num1 = $_GET['num1'];
            $num2 = $_GET['num2'];
            $operator = $_GET['ope'];

            switch($operator){ // Display the answer according to the operator selected
                case 'add':
                    echo $num1 + $num2;
                break;
                case 'substract':
                    echo $num1 - $num2;
                break;
                case 'multiply':
                    echo $num1 * $num2;
                break;
                case 'divide':
                    echo $num1 / $num2;
                break;
                case 'remainder':
                    echo $num1 % $num2;
                break;
                default:
                    echo "Please select an operator";
            }
        }
    ?>
</body>
</html>