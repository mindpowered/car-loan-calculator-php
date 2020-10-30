<?php
namespace mindpowered\wrappers;

use \maglev\MagLevPhp;

/**
 * CarLoanCalculatorPhpWrapper
 *
 * Copyright Mind Powered Corporation 2020
 * 
 * https://mindpowered.dev/
 */


/**
 * CarLoanCalculatorPhpWrapper
 *
 * car loan
 * calculator
 */
class CarLoanCalculatorPhpWrapper
{
/**
 * calc payments from price
 * @param unknown_type $newCarPrice 
 * @param unknown_type $tradeInAllowance 
 * @param unknown_type $tradeInLoanBalance 
 * @param unknown_type $downPaymentAndRebates 
 * @param unknown_type $loanDuration in months
 * @param unknown_type $salesTaxRate percent
 * @param unknown_type $interestRate percent
 * @return ...
 */
public function CalcPayments($newCarPrice, $tradeInAllowance, $tradeInLoanBalance, $downPaymentAndRebates, $loanDuration, $salesTaxRate, $interestRate)
{
	$bus = MagLevPhp::getInstance('default');
	$args = [$newCarPrice, $tradeInAllowance, $tradeInLoanBalance, $downPaymentAndRebates, $loanDuration, $salesTaxRate, $interestRate];
	$ret = $bus->call('CarLoanCalculator.CalcPayments', $args);
	return $ret;
}

/**
 * calc price from payment
 * @param unknown_type $monthlyPayment 
 * @param unknown_type $tradeInAllowance 
 * @param unknown_type $tradeInLoanBalance 
 * @param unknown_type $downPaymentAndRebates 
 * @param unknown_type $loanDuration in months
 * @param unknown_type $salesTaxRate percent
 * @param unknown_type $interestRate percent
 * @return ...
 */
public function CalcAffordability($monthlyPayment, $tradeInAllowance, $tradeInLoanBalance, $downPaymentAndRebates, $loanDuration, $salesTaxRate, $interestRate)
{
	$bus = MagLevPhp::getInstance('default');
	$args = [$monthlyPayment, $tradeInAllowance, $tradeInLoanBalance, $downPaymentAndRebates, $loanDuration, $salesTaxRate, $interestRate];
	$ret = $bus->call('CarLoanCalculator.CalcAffordability', $args);
	return $ret;
}

}
