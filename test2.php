<?php

/**
 * @author ardane
 * @copyright 2016
 */

$data1 = array(
    'parent.child.field' => 1,
    'parent.child.field2' => 2,
    'parent2.child.name' => 'test',
    'parent2.child2.name' => 'test',
    'parent2.child2.position' => 10,
    'parent3.child3.position' => 10,
);
echo "<pre>";
echo "Начальный массив:";
print_r($data1); 
echo "</pre>"; 
$data = array();
foreach($data1 as $key => $value)
{
    $mas_key = explode(".", $key); 
    $data2 = array($mas_key[0] => array($mas_key[1] => array($mas_key[2] => $value))); 
    $data = array_merge_recursive ($data, $data2); 
}
echo "<pre>";
echo "Массив после первого преобразования:";
print_r($data); 
echo "</pre>"; 
$data2 = array();
foreach ($data as $key => $value) 
{
    foreach ($value as $key1 => $value1)
    {
        foreach ($value1 as $key2 => $value2)
        {
            $key_main = $key.".".$key1.".".$key2;
            $data2[$key_main] = $value2;
        }
    }	
}

echo "<pre>";
echo "Массив после обратного преобразования:";
print_r($data2); 
echo "</pre>"; 
?>