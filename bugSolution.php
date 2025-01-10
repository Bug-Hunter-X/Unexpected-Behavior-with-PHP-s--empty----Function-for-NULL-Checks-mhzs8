This solution uses the strict equality operator (`===`) to explicitly check for NULL values, eliminating the ambiguity associated with `empty()`.

```php
function checkValue($value) {
  if ($value === null) {
    return "Value is null";
  } else {
    return "Value is not null";
  }
}

$nullValue = null;
$emptyString = "";
$zero = 0;

echo checkValue($nullValue); // Outputs "Value is null"
echo checkValue($emptyString); // Outputs "Value is not null"
echo checkValue($zero); // Outputs "Value is not null"
```
By using `===`, you ensure your code behaves predictably and only identifies actual NULL values.