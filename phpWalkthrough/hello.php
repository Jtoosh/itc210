<?php
$friend_name = "Sir, the test results indicate that you are in fact a badger.";
$a = array('John', 'Jacob', '<span onmouseover = "alert(\'lol got u bro\')">Jingleheimer</span>', 'Schmidt');
$player = array('position' => 'Shortstop (SS)', 'team' => 'New York Mets', 'name' => 'Francisco Lindor', 'number' => '12', 'bats' => 'Switch',
'throws' => 'Right');
?>

<!DOCTYPE html>
<html>
<head>
    <title>PHP Walkthrough</title>
</head>
<body>
    <h1>Hi!</h1>
    <P> <?php echo $friend_name;?> my friend!</p>
    <p>
        <? var_dump($player);?>
    </p>
    <p>
        <?php echo 'Concatenated:' . $friend_name ;?> <br>
        <?php echo 'Single quotes: + $friend_name' ;?><br>
        <?php echo "Double quotes: $friend_name" ;?><br>
        <?php echo 'Multiple: ', $friend_name, ' parameters' ;?>
    </p>
    <p>
        <? for ($x = 0; $x<=20; $x++){
            echo $x; 
            if ($x%2 ==0) { 
                echo '<span> is even.</span>';
            }
            echo '<br>';

        }?> 
    </p>
    <p>
        <?
        for ($x=0; $x<count($a);$x++){
            echo 'Hello ', htmlspecialchars($a[$x]),'! <br>';
        }
        echo $_GET['name'];
        ?>
    </p>
</body>
</html>
