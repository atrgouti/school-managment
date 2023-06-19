<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method='post'>
        <input type="text" name='num'>
        <button type='submit' name='submit'>submit</button>
    </form>
    <?php 
    $mynumber = $_POST['num'];
    // for($i = 1; $i <= 10; $i++){
    //     echo $i.'*'.$mynumber.'='.$i * $mynumber .'</br>';
    // }
    // if($mynumber % 2 === 0){
    //     echo 'pair';
    // }else{
    //     echo 'unpair';
    // }
    ?>
</body>
</html>