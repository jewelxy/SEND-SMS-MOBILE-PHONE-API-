<?php
require_once 'function/function.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
     <div class="row">
            <div class="messageBox class-col-t-12 class-col-m-12 class-col-12">
                <form action="" method="POST">
                    <div class="fromGroupInput"> 
                        <label for="mobile">Mobile Number</label>
                        <input type="number" name="number" id="" placeholder="Enter your mobile number">
                    </div>
                    <div class="fromGroupTexArea"> 
                        <label for="message">Message</label>
                        <textarea name="text" id="" cols="30" rows="10" placeholder="Insert Text here"></textarea>
                    </div>
                    <div class="fromGroupbutton">
                        <button name="submit">Send Message</button>
                    </div>
                </form>
            </div>
     </div>
    </div>
</body>
</html>