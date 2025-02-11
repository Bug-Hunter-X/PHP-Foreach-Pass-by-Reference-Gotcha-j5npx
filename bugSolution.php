```php
function processData(array $data): array {
  $result = [];
  foreach ($data as $value) {
    if (is_string($value)) {
      $result[] = strtolower($value);
    } else {
      $result[] = $value; 
    }
  }
  return $result;
}

$data = ['Apple', 'Banana', 'Orange'];
$processedData = processData($data);
print_r($processedData);
```