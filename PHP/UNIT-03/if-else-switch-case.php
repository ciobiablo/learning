<?php

$a = 5;
/*
switch ($a) {
    case 5:
        echo "5tir";
        break;
    case 6:
        echo "6 dır";
        break;
    default:
        echo "none";
        break;
}

switch ($a):
    case 5:
        echo "5tir";
        break;
    case 6:
        echo "6 dır";
        break;
    default:
        echo "none";
        break;
endswitch;


if ($a == 5){
    echo '1';
} elseif ($a == 6){
    echo '2';
} else {
    echo '3';
}
*/
if ($a == 5):
    echo '1';
elseif ($a == 6):
    echo '2';
else:
    echo '3';
endif;
?>

<?php if ($a == 5): ?>
    <b>a 5 e eşittir</b>
<?php endif; ?>

