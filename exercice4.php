<?php
$origin = new DateTimeImmutable('2000-11-22');
$target = new DateTimeImmutable('2023-02-07');
$difference = $origin->diff($target);
echo $difference->format('%y years, %m months, %d days');
?>
