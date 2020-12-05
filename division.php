<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Addition</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">    
</head>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>

<body>
    
    <div class="navbar">
        <a href="index.php"><i class="fa fa-fw fa-home"></i> Home</a> 
        <a href="addition.php"><i class="fa fa-fw fa-plus"></i> Addition </a> 
        <a href="subtraction.php"><i class="fa fa-fw fa-minus"></i> Subtraction </a> 
        <a href="multiplication.php"><i class="fa fa-fw fa-times"></i> Multiplication </a>
        <a class="active"  href="division.php"><i class="fa fa-fw fa-magic"></i> Division </a>
      </div>
    
    &nbsp;
    <center><h5>Division</h5></center>
   
    <div class="container">

        <div class="row">

            <div class="col">
                   
                <table class="table">

                    <tr>
                        <td>Enter 1st number</td>
                        <td><input type="text" class="form-control" id="num1"></td>
                    </tr>

                    <tr>
                        <td>Enter 2nd number</td>
                        <td><input type="text" class="form-control" id="num2"></td>
                    </tr>

                    <tr>
                        <td></td>
                        <td><button onclick="clickme()"  class="btn btn-primary"> Submit </button></td>
                    </tr>

                    <tr>
                        <td>Quotient of the two numbers :</td>
                        <td><p id="res"></p></td>
                    </tr>


                </table>

            </div>

        </div>

    </div>

    <script>
        function clickme()
        {
            var num1=parseInt(document.getElementById("num1").value)
            var num2=parseInt(document.getElementById("num2").value)
            console.log(num1)
            console.log(num2)
            var quo= num1/num2
            document.getElementById("res").innerHTML=quo
        }

    </script>

</body>
</html>