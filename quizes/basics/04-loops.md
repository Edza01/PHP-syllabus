# 04 - Loops

[BACK TO LIST](/quizes/basics)

##### Quiz 1

```php
<?php

for ($i=1;$i<=5;$i++){
    echo $i;
}
```

What will be the output?

- 12345
- error
- 54321

##### Quiz 2

```php
<?php

$items = [10, 20, 30];

foreach ($items as $item)
{
    echo $item;
}
```

What will be the output?

- 102030
- 302010
- error

##### Quiz 3

```php
<?php

$names = ['Jane', 'John', 'Lucy'];

foreach ($names in $name)
{
    echo $name;
}
```

What will be the output?

- JaneJohnLucy
- error
- empty

##### Quiz 4

```php
<?php

$i = 0;
while ($i <= 10)
{
    echo $i;
    $i++;
}
```

What will be the output?

- 012345678910
- 0123456789
- error

##### Quiz 5

```php
<?php

$i = 0;
while ($i <= 10)
{
    echo $i;
    $i--;
}
```

What will be the output?

- error
- 012345678910
- infinite loop

##### Quiz 6

```php
<?php

$car = new stdClass();
$car->number = 'JZ1122';

for ($i=0;$i<=10;$i++)
{
    echo $car->number;
}
```

What will be the output?

- 10 times JZ1122
- 11 times JZ1122
- infinite loop

##### Quiz 7

```php
<?php

$car = new stdClass();
$car->number = 'JZ1122';

for ($i=0;$i<=10;$i++)
{
    echo $car->number;
}
```

What will be the output?

- 10 times JZ1122
- 11 times JZ1122
- infinite loop

##### Quiz 8

```php
<?php

$products = [
    'apple' => 10,
    'cheese' => 5,
    'orange' => 12
];

foreach ($products as $product)
{
    switch ($product)
    {
        case 'apple' || 'banana':
            echo 'fruit';
        break;
        case 'cheese':
            echo 'milk type';
        break;
        default:
            echo 'no category';
        break;
    }
}
```

What will be the output?

- fruit fruit milk type
- fruit fruit no category
- error

##### Quiz 9

```php
<?php

$x = 1;

for ($i=0;$i<3;$i++)
{
    echo $x * $x + $x
}
```

What will be the output?

- 42
- error
- infinite loop

##### Quiz 10

```php
<?php

$x = 1;

for ($i=0;$i<3;$i++)
{
    echo $x * $x;
    $x++;
}
```

What will be the output?

- 1 4 9
- 9 4 1
- error