<?php
$counter = 0;
while ($counter < count($category)) 
{
echo
    '
    <a href="Flucategory.php?cat_name=' . $category[$counter]['cat_name'] . '"> ' . $category[$counter]['cat_name'] . ' </a><br />
    ';
    $counter++;
}
?>                     
