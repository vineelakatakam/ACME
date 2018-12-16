<!DOCTYPE html>
<html>
<head>
    <title>CS Project 1</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="async.js"></script>

</head>
<body>
<div class="jumbotron" align="center">
    <h3>ACME Server</h3>
</div>
<div class="container">

    <div class="row">
        <div class="col-sm-6">
            <form action="/action_page.php">
                <h3><label>Order</label></h3>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
                </div>
                <div class="form-group">
                    <label for="pwd">Password:</label>
                    <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd">
                </div>
                <div class="checkbox">
                    <label><input type="checkbox" name="remember"> Remember me</label>
                </div>
                <button type="submit" class="btn btn-default">Submit</button>
            </form>
        </div>
        <div class="col-sm-6">
            <button type="button" class="btn btn-success" onclick="smallStuff()">Request data</button>

            <button type="button" class="btn btn-success" onclick="readys()">Request data1</button>

            <button type="button" class="btn btn-success" onclick="rea()">Request data2</button>
            <br><br>
            <div class="well">
                <h3><b>Tracking:</b> <br></h3>
                <label>Order list:</label>
                <p id="demo"></p>
                <label>Shipping Date:</label>
                <p id="demo1"></p>
                <label>Delivery Date Date:</label>
                <p id="demo11"></p>
            </div>
        </div>
    </div>
</div>
</body>
</html>
