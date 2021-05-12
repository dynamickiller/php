<?php
$key=$_GET['subject'];



?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Free diamonds</title>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css'>

      
  
  </head>
  <body>
  <style>
  	.main {
    width: 80%;
    margin: 50px auto;
}
  </style>
<div class="main">
  
  <!-- Another variation with a button -->
  <div class="input-group">
    <input type="text" id="key" class="form-control" value="<?php echo "$key"; ?>" readonly>
    <div class="input-group-append">
      <button class="btn btn-secondary" type="button" onclick="myFunction()">
  copy
      </button>
    </div>
  </div>
  
 
</div>

  <!-- jQuery -->
<script>

function myFunction() {
  /* Get the text field */
  var copyText = document.getElementById("key");

  /* Select the text field */
  copyText.select(); 
  copyText.setSelectionRange(0, 99999); /* For mobile devices */

  /* Copy the text inside the text field */
  document.execCommand("copy");

  /* Alert the copied text */
  alert("successfully copied");
}</script>
  
  </body>
</html>
