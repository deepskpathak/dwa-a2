<?php require 'formHandler.php';?>
<!DOCTYPE html>
<head>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://bootswatch.com/spacelab/bootstrap.min.css">
    <link rel="stylesheet" href="css/main.css">
    <title>Assignment 2</title>
</head>
<body>
<div class="container">
    <h1 class="center-block">Bill Splitter</h1>
    <div class="row">
        <form class="form-horizontal" method="POST" action="formHandler.php">
            <fieldset>
                <p class="bg-warning">
                    <?php if($_REQUEST['response'] == 0 && isset($_SESSION['message'])) echo $_SESSION['message']; unset($_SESSION['message']); ?>
                </p>
                <div class="form-group">
                    <label for="numberToSplit" class="col-xs-4 control-label pull-left">How many ways to split? &nbsp;<span class="required"><sup>*</sup>required</span></label>
                    <div class="col-xs-4">
                        <input type="number" min="1" class="form-control" id="numberToSplit" name="numberToSplit" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="amountToSplit" class="col-xs-4 control-label">How much was the tab? &nbsp;<span class="required"><sup>*</sup>required</span></label>
                    <div class="col-xs-4">
                        <input type="text" class="form-control" id="amountToSplit" name="amountToSplit" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="select" class="col-xs-4 control-label">How was the service?</label>
                    <div class="col-xs-4">
                        <select class="form-control" id="select" name="select">
                            <option>Good</option>
                            <option>Average</option>
                            <option>Bad</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="roundUp" class="col-xs-4 control-label">Round Up? </label>
                    <div class="col-xs-4">
                        <input type="checkbox" class="" id="roundUp" value="" name="roundUp">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-lg-10 col-lg-offset-4">
                        <button type="reset" class="btn btn-default" onClick="window.location.reload()">Reset</button>
                        <button type="submit" class="btn btn-success">Calculate</button>
                    </div>
                </div>
            </fieldset>
        </form>
        <div>
            <p class="bg-success">
                <?php if($_REQUEST['response'] == 1 && isset($_SESSION['compute'])) echo "Each member should pay $".$_SESSION['compute']; unset($_SESSION['compute']); ?>
            </p>
        </div>
    </div>
</div>
<!-- Compiled and minified JavaScript -->
<script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>