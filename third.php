<?php
function quickSort($arr) {
  if (count($arr) <= 1) {
    return $arr;
  }

  $pivot = $arr[0];
  $left = [];
  $right = [];

  for ($i = 1, $iMax = count($arr); $i < $iMax; $i++) {
    if ($arr[$i] < $pivot) {
      $left[] = $arr[$i];
    } else {
      $right[] = $arr[$i];
    }
  }

  $sortedLeft = quickSort($left);
  $sortedRight = quickSort($right);

  return array_merge($sortedLeft, [$pivot], $sortedRight);
}

$N = (int)trim(fgets(STDIN));
$numbers = [];

for ($i = 0; $i < $N; $i++) {
  $number = (int)trim(fgets(STDIN));
  $numbers[] = $number;
}

$sortedNumbers = quickSort($numbers);

foreach ($sortedNumbers as $num) {
  echo $num . "\n";
}
?>
