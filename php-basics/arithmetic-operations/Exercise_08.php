<?php

# Exercise #8

//Foo Corporation needs a program to calculate how much to pay their hourly employees. The US Department of Labor
//requires that employees get paid time and a half for any hours over 40 that they work in a single week. For example, if an
//employee works 45 hours, they get 5 hours of overtime, at 1.5 times their base pay. The State of Massachusetts requires
//that hourly employees be paid at least $8.00 an hour. Foo Corp requires that an employee not work more than 60 hours in
//a week.
//
//## Summary
//
//- An employee gets paid (hours worked) × (base pay), for each hour up to 40 hours.
//- For every hour over 40, they get overtime = (base pay) × 1.5.
//- The base pay must not be less than the minimum wage ($8.00 an hour). If it is, print an error.
//- If the number of hours is greater than 60, print an error message.
//
//Write a method that takes the base pay and hours worked as parameters, and prints the total pay or an error.
//Write a main method that calls this method for each of these employees:
//
//| Employee | Base Pay | Hours Worked |
//| ---      | ---      | ---          |
//| Employee 1 | $7.50 | 35 |
//| Employee 2 | $8.20 | 47 |
//| Employee 3 | $10.00 | 73 |


function calculateWage($basePay, $hoursWorked)
{
    if ($basePay < 8) return 'error, input is less than minimum allowed wage';
    else
    {
        if ($hoursWorked < 40) return $hoursWorked * $basePay;
        else if ($hoursWorked > 60) return'error, Dont work to much, else you will get too good at stuff';
        else if ($hoursWorked > 40)
        {
            $hoursOverWorked = $hoursWorked - 40;
            return ($hoursOverWorked * $basePay) * 1.5;
        }
    }
}

print_r('Employee 1' . calculateWage(7.50, 35));
echo "<br>";
print_r( 'Employee 2' .calculateWage(8.20, 47));
echo "<br>";
print_r('Employee 3' .calculateWage('Employee 1' . 10.00, 73));