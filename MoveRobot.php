<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Robot Control Panel</title>
</head>
<body>
    <header><h1>Control the Robot</h1></header>
    <form method="post">
        <button name="dir" type="submit" id="stop" value="stop">Stop</button>
        <button name="dir" type="submit" id="forward" value="forward">Forward</button>
        <button name="dir" type="submit" id="right" value="right">Right</button>
        <button name="dir" type="submit" id="backward" value="backward">Backward</button>
        <button name="dir" type="submit" id="left" value="left">Left</button>
    </form>
</body>
</html>

<?php

$servername = "localhost";
$username = "root";
$password = "";
$DBname = "motion";

$conn = mysqli_connect($servername,$username,$password,$DBname);
if(!$conn){
    die("connection failed". mysqli_connect_error().'<br>');
}
else{
    echo 'conncted successfully <br>';
}


    /*              INSERTING RECORD               */
if(isset($_POST['dir'])){
        
        $dir = $_POST['dir'];
        $sql = "INSERT INTO movements (direction) 
        VALUES ('$dir')";

        if(mysqli_query($conn,$sql)){
            switch ($dir) {
                case 'stop':
                    echo 'the robot has stopted';
                    break;
                case 'right':
                        echo 'the robot has move right';
                        break;
                case 'left':
                        echo 'the robot has move left';
                        break;
                case 'forward':
                        echo 'the robot has move forward';
                        break;
                case 'backward':
                        echo 'the robot has move backward';
                        break;
                default:
                    echo 'the robot is not responding';
                    break;
            }
        
        }
        else{
            echo "Error: failed to move ".'<br>';
        }
}
else{
    echo "robot is not responsing <br>";
}
exit;
?>
