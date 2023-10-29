
<?php

 $result = $_GET["number1"] * $_GET["number2"];
 

?>







<body>
<div class="container">
    <form action="caul.php" method="GET" class="form">
        
<div>
    <label >Enter Number1:</label>
    <input type="Number" id="num1" name="number1" class ="form-control">
</div>

<div>
    <label >Enter Number2:</label>
    <input type="Number" id="num2" name="number2" class ="form-control">
</div>
<br>
<div>

<?php
echo $result


?>

</div>
<input type="submit" class = "btn btn-primary">

</form>
</div>




    
</body>
