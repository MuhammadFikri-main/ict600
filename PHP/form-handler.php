<?php
if(isset($_POST['name']) && isset($_POST['hometown'])){
    $name = $_POST['name'];
    $hometown = $_POST['hometown'];
}else{
    $name = "(Not Entered)";
    $hometown = "Nowhere";
}
?>
<html>
    <head>
        <title>Form Test</title>
    </head>
    <body>
        You name is: <?php echo $name ?><br>
        You are from: <?php echo $hometown ?><br>
        <form method="POST" action="form-handler.php">
            What is your name?
            <input type="text" name="name">
            You are from?
            <input type="text" name="hometown">
            <input type="submit">
        </form>
    </body>
</html>