<!DOCTYPE html>
<html>

<meta charset="utf8">
<title >MY Masseges </title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

<head>

Send SMS using PHP

</head>

<body>

<form method="POST" action="SMS.php">

Mobile Number<input type="Text" name="Number"><br/> 

Type your Message <input type="Text" name="Message"><br/>

<input type="Submit" value="Send SMS">

</form>



<form>
    <div class="form-row align-items-center">
        <div class="col-sm-3 my-1">
            <label class="sr-only" for="inlineFormInputName">Name</label>
            <input type="text" class="form-control" id="inlineFormInputName" placeholder="Jane Doe">
        </div>
        <div class="col-sm-3 my-1">
            <label class="sr-only" for="inlineFormInputGroupUsername">Username</label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <div class="input-group-text">@</div>
                </div>
                <input type="text" class="form-control" id="inlineFormInputGroupUsername" placeholder="Username">
            </div>
        </div>
        <div class="col-auto my-1">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" id="autoSizingCheck2">
                <label class="form-check-label" for="autoSizingCheck2">
                    Remember me
                </label>
            </div>
        </div>
        <div class="col-auto my-1">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
</form>



<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" ></script>
</body>

</html>
