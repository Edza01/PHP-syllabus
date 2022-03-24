# 03 - IF, ELSE, SWITCH

[BACK TO LIST](/quizes/basics)

###### Quiz 1

```php
<?php

$persons = [
    'John Doe',
    'Jane Doe',
    'Lucy Doe'
];

echo $persons[0];
```

What will be the output?

- error
- string John Doe
- string Lucy Doe

###### Quiz 2

```php
<?php

$fruits = [
    'apple', 'orange', 'pineapple'
];

echo $fruits['apple'];
```

What will be the output?

- apple
- Error
- empty

###### Quiz 3

```php
<?php

$items = [
    'name' => 'John Doe'
];

echo $items[0];
```

What will be the output?

- empty
- string John Doe
- Error

###### Quiz 4

```php
<?php

$persons = [
    'John Doe',
    'Jane Doe',
    'Lucy Doe'
];

echo $persons[2];
```

What will be the output?

- error
- string John Doe
- string Lucy Doe

###### Quiz 5

```php
<?php

$jane = new stdClass();
$jane->name = 'Jane';

$john = new stdClass();
$john->name = 'Jane';

$lucy = new stdClass();
$lucy->name = 'Lucy';

$persons = [
    $jane, $john, $lucy
];

echo $persons[0]->name;
```

What will be the output?

- John
- Jane
- error

###### Quiz 6

```php
<?php

$persons = [
    'John Doe',
    'Jane Doe',
    'Lucy Doe',
];

echo $persons[2,];
```

What will be the output?

- error
- string John Doe
- string Lucy Doe

###### Quiz 7

```php
<?php

$person = new stdClass();

echo $person->name;
```

What will be the output?

- error
- null
- string empty

###### Quiz 8

```php
<?php

$person = new stdClass();
$person->name = 'John';
$person->weight = 80;

echo $person->name . ' ' . $person->weight;
```

What will be the output?

- John 80
- John
- error

###### Quiz 9

```php
<?php

$person = new stdClass();
$person->name = 'John';
$person->weight = 80;
$person->height = 2;

echo $person->weight * 2 * $person->height;
```

What will be the output?

- 360
- 320
- error

###### Quiz 10

```php
<?php

$persons = [
    $john = new stdClass();
    $john->name = 'John';
];

echo $persons[0]->name;
```

What will be the output?

- error
- John
- empty string
