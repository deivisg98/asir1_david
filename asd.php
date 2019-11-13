<?php

$vacaciones = getHolidays(2019);

foreach ($holidays as $holiday) {
    echo date('d-M-Y', $holiday) . '<br>';
}

?>