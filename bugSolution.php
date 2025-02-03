```php
function my_function($arr) {
  $newArray = [];
  foreach ($arr as $key => $value) {
    if ($value !== 'target') {
      $newArray[] = $value;
    }
  }
  return $newArray;
}

$array = ['apple', 'banana', 'target', 'orange'];
$result = my_function($array);
print_r($result);
```