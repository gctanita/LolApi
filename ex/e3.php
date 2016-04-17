<?php
	$company = array(
array("Acme Anvil Co."),
array(
array(
"Human Resources",
array(
"Tom",
"Dick",
"Harry"
)
),
array(
"Accounting",
array(
"Zoe",
"Duncan",
"Jack",
"Jane"
)
)
)
);
class Company_Iterator extends RecursiveIteratorIterator
{
function beginChildren() {
if ($this->getDepth() >= 3) {
echo str_repeat("\t", $this->getDepth() - 1);
echo "<ul>" . PHP_EOL;
}
}
function endChildren() {
if ($this->getDepth() >= 3) {
echo str_repeat("\t", $this->getDepth() - 1);
echo "</ul>" . PHP_EOL;
}
}
}

class RecursiveArrayObject extends ArrayObject
{
function getIterator() {
return new RecursiveArrayIterator($this);
}
}

$it = new Company_Iterator(
new RecursiveArrayObject($company)
);
$in_list = false;
foreach ($it as $item) {
echo str_repeat("\t", $it->getDepth());
switch ($it->getDepth()) {
case 1:
echo "<h1>Company: $item</h1>" . PHP_EOL;
break;
case 2:
echo "<h2>Department: $item</h2>" . PHP_EOL;
break;
default:
echo "<li>$item</li>" . PHP_EOL;
}
}

$it->beginChildren();