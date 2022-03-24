# 01 - VARIABLES

[BACK TO LIST](/quizes/basics)

###### Quiz 1

```php
<?php

$name = 'Codelex';

echo $name;
```

What will be the output?

- Error
- string Codelex
- integer Codelex

###### Quiz 2

```php
<?php

$name = 'Codelex'
$number = 10;

echo $name . ' ' . $number;
```

What will be the output?

- 10
- Error
- string Codelex 10

###### Quiz 3

```php
<?php

$number = 10;
$times = 2;

echo $number * $times;
```

What will be the output?

- 20
- Error
- 10

###### Quiz 4

```php
<?php

$number = 10;
$times = 2;

echo $number * $times . $codelex;
```

What will be the output?

- 20 codelex
- 10 codelex
- 20

###### Quiz 5

```php
<?php

$index = 10.1;
$name = 'John';

echo $index + $name;
```

What will be the output?

- warning and output string John
- error
- 10.1John

###### Quiz 6

```php
<?php

$list = [1,2,3,4];

echo $list;
```

What will be the output?

- error
- 1234
- empty

###### Quiz 7

```php
<?php

$list = [1, 2, 3 4];

echo count($list);
```

What will be the output?

- 4
- error
- empty

###### Quiz 8

```php
<?php

function smart()
{
    echo 'be smart.';
}

echo $smart();
```

What will be the output?

- error
- be smart
- a?

###### Quiz 9

```php
<?php

function smart()
{
    return 'codelex';
}

echo smart();
```

What will be the output?

- error
- codelex
- be smart

###### Quiz 9

```php
<?php

function makeDouble(string $number): int
{
    return $number * 2;
}

echo makeDouble(10);
```

What will be the output?

- 20
- 20.2
- error

###### Quiz 10

```php
<?php

$fruit = new stdClass();
$fruit->name = 'Apple';

function getName(stdClass $fruit): string
{
    return strtolower($fruit->name);
}

echo getName($fruit);
```

What will be the output?

- APPLE
- Apple
- apple