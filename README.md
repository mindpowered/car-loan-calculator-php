
carloancalculator
=================
Car Loan Auto Loan Payment Calculator - Calculate financing on a new car including trade-in and taxes

![Build Status](https://mindpowered.dev/assets/images/github-badges/build-passing.svg)

Contents
========

* [Source Code and Documentation](#source-code-and-documentation)
* [About](#about)
* [Requirements](#requirements)
* [Installation](#installation)
* [Usage](#usage)
* [Support](#support)
* [Licensing](#licensing)

# Source Code and Documentation
- Source Code: [https://github.com/mindpowered/car-loan-calculator-php](https://github.com/mindpowered/car-loan-calculator-php)
- Documentation: [https://mindpowered.github.io/car-loan-calculator-php](https://mindpowered.github.io/car-loan-calculator-php)

# About
This package aims to calculate the following:
- Given the price of a new car, what is the payment?
- Given a certain payment, what is the max price of the new car?

The calculation takes into account:
- The interest rate of the car loan
- The term (length) of the car loan
- Applicable Taxes
- Trade-in value and amount owing
- Down payment

# Requirements
- php >= 7
- php `mbstring` extension
- php `xml` extension


Third-party dependencies may have additional requirements.

# Installation

You can get carloancalculator using Composer. Composer manages dependencies for packages from Packagist and you can get it here: <https://getcomposer.org/> .

Create a composer.json file in the top-most directory of your project and add `mindpowered/carloancalculator` to the requirements:
```
{
        "require": {
                "mindpowered/carloancalculator" : "*"
        }
}
```
Now you can run the command to update composer: `composer update`. In order for composer to install the package dependencies you will need an archive manager such as zip installed. Composer requires use of the commands `zip` and `unzip`.


# Usage
```php
require __DIR__ . '/vendor/autoload.php';

use \mindpowered\carloancalculator\CarLoanCalculator;

$clc = new CarLoanCalculator();
$clc->CalcPayments(33429, 4500, 0, 10000, 2000, 0.7, 3.99);

```


# Support
We are here to support using this package. If it doesn't do what you're looking for, isn't working, or you just need help, please [Contact us][contact].

There is also a public [Issue Tracker][bugs] available for this package.

# Licensing
This package is released under the MIT License.



[bugs]: https://github.com/mindpowered/car-loan-calculator-php/issues
[contact]: https://mindpowered.dev/support/?ref=car-loan-calculator-php/
[docs]: https://mindpowered.github.io/car-loan-calculator-php/
[licensing]: https://mindpowered.dev/?ref=car-loan-calculator-php
[purchase]: https://mindpowered.dev/purchase/
