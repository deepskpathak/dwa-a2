<?php
/**
 * Deepak Kumar
 * index file for Assignment 2
 */
?>
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
        <form class="form-horizontal">
            <fieldset>
                <div class="form-group">
                    <label for="numberToSplit" class="col-xs-4 control-label pull-left">How many ways to split? &nbsp;<span class="required"><sup>*</sup>required</span></label>
                    <div class="col-xs-4">
                        <input type="number" min="1" class="form-control" id="numberToSplit">
                    </div>
                </div>
                <div class="form-group">
                    <label for="amountToSplit" class="col-xs-4 control-label">How much was the tab? &nbsp;<span class="required"><sup>*</sup>required</span></label>
                    <div class="col-xs-4">
                        <input type="text" class="form-control" id="amountToSplit">
                    </div>
                </div>
                <div class="form-group">
                    <label for="select" class="col-xs-4 control-label">How was the service?</label>
                    <div class="col-xs-4">
                        <select class="form-control" id="select">
                            <option>Good</option>
                            <option>Average</option>
                            <option>Bad</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="roundUp" class="col-xs-4 control-label">Round Up? </label>
                        <div class="col-xs-4">
                            <input type="checkbox" class="" id="roundUp" value="">
                        </div>
                </div>
                <div class="form-group">
                    <div class="col-lg-10 col-lg-offset-4">
                        <button type="reset" class="btn btn-default">Reset</button>
                        <button type="submit" class="btn btn-success">Calculate</button>
                    </div>
                </div>
            </fieldset>
        </form>
    </div>
</div>
<!-- Compiled and minified JavaScript -->
<script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>