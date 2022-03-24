# 02 - IF, ELSE, SWITCH

[BACK TO LIST](/quizes/basics)

###### Quiz 1

```php
<?php

$x = 1;

if ($x == 1)
{
    echo "correct";
}
```

What will be the output?

- empty
- string correct
- error

###### Quiz 2

```php
<?php

$x = 10;

if ($x = 5)
{
    echo 'Correct';
} else {
    echo 'Wrong';
}
```

What will be the output?

- error
- correct
- wrong

###### Quiz 3

```php
<?php

$x = 100;

if ($x > 100 && $x == 100)
{
    echo 'Correct';
} else {
    echo 'Wrong';
}
```

What will be the output?

- correct
- error
- wrong

###### Quiz 4

```php
<?php

$x = 150;

if ($x >= 100 || $x == 140)
{
    echo 'Correct';
} else {
    echo 'Wrong';
}
```

What will be the output?

- correct
- error
- wrong

###### Quiz 5

```php
<?php

$x = 100;

if ($x > 100 || $x == 100)
{
    echo 'Correct';
} else {
    echo 'Wrong';
}
```

What will be the output?

- correct
- error
- wrong

###### Quiz 6

```php
<?php

$name = 'John';

if ($name == 'Jane' || $x = 'John')
{
    echo 'Correct';
} else {
    echo 'Wrong';
}
```

What will be the output?

- wrong
- error
- error

###### Quiz 7

```php
<?php

$list = [10, 20, 30];

if (count($list) > 3)
{
    echo count($list);
} else {
    echo 'Wrong';
}
```

What will be the output?

- Wrong
- error
- integer 3

###### Quiz 8

```php
<?php

$name = 'John'
$surname = 'Doe'

if ($name == 'Jane' && $surname == 'Doe')
{
    echo $name . $surname;
} else {
    echo 'Person not found.';
}
```

What will be the output?

- Person not found.
- error
- John Doe

###### Quiz 9

```php
<?php

$license = 'c';

if ($license === 'C')
{
    echo 'License found';
} else {
    echo 'License not found.';
}
```

What will be the output?

- License found
- License not found
- error

###### Quiz 10

```php
<?php

$license = 'c';

if (in_array($license, ['c', 'd']) && strlen($license) == 1)
{
    echo 'Correct';
} else {
    echo 'Wrong';
}
```

What will be the output?

- Wrong
- error
- Correct