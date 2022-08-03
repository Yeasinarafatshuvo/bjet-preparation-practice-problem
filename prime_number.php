<?php  

$prime_number = 11;
$count = 0;
if($prime_number < 0)
{
    echo 'Not prime number';
}else{
    for ($i=2; $i <$prime_number ; $i++) { 
        if($prime_number % $i == 0){
            $count++;
            break;
        }
    }
    if($count > 0){
        echo 'Not prime number';
    }else{
        echo 'prime number';
    }

}


?>
