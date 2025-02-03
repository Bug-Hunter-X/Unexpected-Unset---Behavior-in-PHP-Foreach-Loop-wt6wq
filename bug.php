```php
function my_function($arr) {
  foreach ($arr as $key => $value) {
    if ($value === 'target') {
      unset($arr[$key]);
    }
  }
  return $arr;
}

$array = ['apple', 'banana', 'target', 'orange'];
$result = my_function($array);
print_r($result);
```