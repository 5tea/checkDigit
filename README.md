# checkDigit

$check = new Luhn();
$input = 1234;

# Return the check digit only
```
echo $check -> calculate($input);
```
* * 4

# Calculate the check digit and append it to $input
```
echo $check -> append($input);
```
* * 12344

# Validate the $input
```
echo $check -> validate($input) ? "Valid" : "Invalid";
```
* * "Invalid"
