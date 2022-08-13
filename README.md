# checkDigit
```
require_once 'checkDigit.php';
$check = new Luhn();
$integerA = 1234;
$integerB = 12344;
```

## Calculate and return the check digit only.
```
$check -> calculate($integerA);
// 4
$check -> calculate($integerB);
// 8
```

## Calculate the check digit and append it to the input.
```
$check -> append($integerA);
// 12344
$check -> append($integerB);
// 123448
```

## Validate the input.
```
$check -> validate($integerA);
// false
$check -> validate($integerB);
// true
```

## Validate and return input with check digit removed.
```
$check -> remove($integerA);
// false
$check -> remove($integerB);
// 1234
```
