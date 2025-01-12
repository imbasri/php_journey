<?php

// // notice error
// $num = 5;
// echo $number;
// echo "setelah notice error";
// 
// 
// // warning error
// include "footer.php";
// echo "setelah warning error";
// 
// // fatal error
// gaada();


// error handling
function devide($num1, $num2)
{
    if ($num2 == 0) {
        throw new Exception("tidak dapat dibagi 0");
    }
    return $num1 / $num2;
}
try {
    echo devide(10, 0);
} catch (Exception $e) {
    // ambil message dari class exception error
    echo "error : " . $e->getMessage();
} finally {
    echo "selalu berjalan setelah error atau tidak";
}
