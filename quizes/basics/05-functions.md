# 05 - Functions

[BACK TO LIST](/quizes/basics

##### Quiz 1

```php
<?php

functeon codelex()
{
    return 'codelex';
}

echo codelex();
```

What will be the output?

- codelex
- error
- empty string

##### Quiz 2

```php
<?php

function codelex(): int
{
    return 'codelex';
}

echo codelex();
```

What will be the output?

- codelex
- error
- empty string

##### Quiz 3*

```php
<?php

function codelex(): string
{
    return 'codelex';
}

echo codelex();
```

What will be the output?

- infinite loop
- error
- empty string

##### Quiz 4*

```php
<?php

function makeDouble(int number): int
{
    return $number * 2;
}

echo makeDouble(10);
```

What will be the output?

- 30
- 20
- empty string

##### Quiz 5

```php
<?php

function makeDouble(int $number): int
{
    return $number * 2;
}

echo makeDouble(10);
```

What will be the output?

- 20
- 30
- error

##### Quiz 6

```php
<?php

$apple = new stdClass();
$apple->price = 10;

$orange = new stdClass();
$orange->price = 20;

$fruits = [
    $apple, $orange
];

echo getPrice($fruits[0]);
```

What will be the output?

- 10
- 20
- error

##### Quiz 7

```php
<?php

$apple = new stdClass();
$apple->price = 10;

$orange = new stdClass();
$orange->price = 20;

$fruits = [
    $apple, $orange
];
function getPrice(int $fruit): int
{
    return $fruit->price;
}

echo getPrice($fruits[0]);
```

What will be the output?

- 10
- error
- 20

##### Quiz 8

```php
<?php

$apple = new stdClass();
$apple->price = 10;

$orange = new stdClass();
$orange->price = 20;

$fruits = [
    $apple, $orange
];
function getPrice(stdClass $fruit): int
{
    return $fruit->price;
}

echo getPrice($fruits[0]);
```

What will be the output?

- 10
- error
- 20

##### Quiz 9

```php
<?php

$apple = new stdClass();

$orange = new stdClass();
$orange->price = 20;

$fruits = [
    $apple, $orange
];
function getTotalPrice(array $fruits): int
{
    $total = 0;
    foreach ($fruits as $fruit)
    {
        $total += $fruit->price;
    }

    return $total;
}

echo getTotalPrice($fruits);
```

What will be the output?

- 30
- error
- 20

##### Quiz 10

```php
<?php

$apple = new stdClass();
$orange->price = 30;

$orange = new stdClass();
$orange->price = 20;

$fruits = [
    $apple, $orange
];
function getTotalPrice(array $fruits): int
{
    $total = 0;
    foreach ($fruits as $fruit)
    {
        $total += $fruit->price;
    }

    return $total;
}

echo getTotalPrice($fruits);
```

What will be the output?

- 30
- error
- 20
