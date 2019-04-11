<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Alien Emoji Calculator App</title>
    <script
            src="https://code.jquery.com/jquery-3.1.1.min.js"
            integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
            crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
            integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
            crossorigin="anonymous"></script>

</head>
<body>
<h1 class="text-center">Alien Emoji Calculator App</h1>
<form id="calculate" class="form-inline text-center" action="/">
    <br/>

    <!-- Text input-->
    <div class="form-group">
        <label class="sr-only" for="operand_one">Operand</label>
        <div class="col-md-4">
            <input id="operand_one" name="operand_one" type="text" placeholder="operand one"
                   class="form-control input-md" required="">

        </div>
    </div>

    <!-- Select Basic -->
    <div class="form-group">
        <label class="sr-only" for="operation">Operation</label>
        <div class="col-md-4">
            <select id="operation" name="operation" class="form-control" data-style="btn-danger">
                <?php foreach ($operators as $operation => $symbol) { ?>
                    <option value="<?php echo $operation; ?>"><?php echo $symbol; ?></option>
                <?php } ?>
            </select>
        </div>
    </div>

    <!-- Text input-->
    <div class="form-group">
        <label class="sr-only" for="operand_two">Operand</label>
        <div class="col-md-4">
            <input id="operand_two" name="operand_two" type="text" placeholder="operand two"
                   class="form-control input-md" required="">

        </div>
    </div>

    <!-- Button -->
    <div class="form-group">
        <label class="col-md-4 control-label" for="singlebutton"></label>
        <div class="col-md-4">
            <button id="singlebutton" name="singlebutton" class="btn btn-primary">Calculate</button>
        </div>
    </div>

</form>

<div class="row text-center" id="output" style="margin-top:50px">
    <div class="col-sm-12"></div>
</div>

<script type="application/javascript" src='js/app.js'></script>
</body>
</html>