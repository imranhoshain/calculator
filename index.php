//Function File include
<?php include "function.php";?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Object Oriented Programming PHP </title>
</head>

<body>
    <header>
        <?php include "inc/header.php"; ?>
    </header>
    <section>
        <div class="container">
           <h3 style="text-align:center;margin:50px 0px 100px;">Calculator PHP Program</h3>
            <div class="row">
                <div class="col-md-6">
                    <div class="mywork">
                        <form action="" method="post" enctype="multipart/form-data">
                            <table class="table table-striped table-inverse">
                                <tr>
                                    <td>Enter First Number: </td>
                                    <td><input type="number" name="num1"></td>
                                </tr>
                                <tr>
                                    <td>Enter Secound Number: </td>
                                    <td><input type="number" name="num2"></td>
                                </tr>
                                <tr style="margin-right:50px;">
                                    <td>Your Answer Here: </td>
                                    <td><input type="submit" name="calculation" value="Calculation" class="btn btn-success">
                                        <input type="reset" name="submit" value="Reset" class="btn btn-info"></td>
                                </tr>

                            </table>
                        </form>
                        <?php
                            if(isset($_POST['calculation'])){
                                $numOne=$_POST['num1'];
                                $numTwo=$_POST['num2'];
                                if(empty($numOne) or empty($numTwo)){
                                    echo "<h3 style='color:red;'>Required Must Not Be Empty</h3>";
                                }else{
                            $cal = new Calculation();
                        ?>
                    </div>
                </div>
                <div class="col-md-6">
                    <table class="table table-striped table-inverse">
                        <tr>
                            <td><?php echo"1st Number Is: ".$numOne."<br>"."2nd Number Is: ".$numTwo."<br>"; $cal->add($numOne, $numTwo);?></td>
                        </tr>
                        <tr>
                            <td><?php echo"1st Number Is: ".$numOne."<br>"."2nd Number Is: ".$numTwo."<br>"; $cal->sub($numOne, $numTwo);?></td>
                        </tr>
                        <tr>
                            <td><?php echo"1st Number Is: ".$numOne."<br>"."2nd Number Is: ".$numTwo."<br>"; $cal->mul($numOne, $numTwo);?></td>
                        </tr>
                        <tr>
                            <td><?php echo"1st Number Is: ".$numOne."<br>"."2nd Number Is: ".$numTwo."<br>"; $cal->div($numOne, $numTwo);?></td>
                        </tr>
                    </table>
                    <?php }}?>
                </div>
            </div>
        </div>
    </section>
    <footer>
        <?php include "inc/footer.php"; ?>
    </footer>
</body>

</html>