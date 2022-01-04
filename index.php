<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
     rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
        <div class="formCalc">
            <form method="POST">
                <div class="mb-3">
                    <label for="InputString" class="form-label badge bg-primary text-wrap" style="width: 6rem;height:2rem;">Calculator</label>
                    <input type="text" class="form-control" id="num1" name="num1" aria-describedby="emailHelp">Enter Number
                    <br>
                    <br>
                    <input type="text" class="form-control" id="num2" name="num2" aria-describedby="emailHelp">Enter Number
                </div>
                <div class="select-style">
                    <select name="operation" class="form-select">
                        <option value="add">ADD</option>
                        <option value="sub">SUB</option>
                        <option value="mul">MULT</option>
                        <option value="div">DIV</option>
                    </select>
                </div>
                <br>
                <button type="submit" name="submit"class="btn btn-info text-white fw-bold">Submit</button>
            </form>
        </div>
       <br>
        <p class="badge bg-danger text-wrap" style="width: 15rem;">
            <?php
            if(isset($_POST['submit']))
            {
             $num1=$_POST['num1'];
             $num2=$_POST['num2']; 
             
             $operation = $_POST['operation'];

             switch($operation){
                case "add" :$sum=$num1+$num2;
                     echo "The addition of two numbers is {$sum}";
                     break;
                case "sub" :$dif=$num1-$num2;
                     echo "The subtraction of two numbers is {$dif}";
                     break;
                case "mul" :$mul=$num1*$num2;
                    echo "The multiplication of two numbers is {$mul}";
                    break;
                case "div": $div=$num1/$num2;
                    echo "The division of two numbers is {$div}";
                    break;
                default: echo "sorry";
                     break;
             }
            }
            ?>
        
        </p>

      </div>
   </div>
</div>
    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" 
crossorigin="anonymous"></script>
</body>
</html>