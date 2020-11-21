<?php
namespace mindpowered\carloancalculator;

use \maglev\MagLev;
use \maglev\MagLevPhp;
use \carloancalculator\CarLoanCalculator as CarLoanCalculator_Library;
use \persistence\Persistence;

/**
 * Copyright Mind Powered Corporation 2020
 * 
 * https://mindpowered.dev/
 */


/**
 * car loan
 * calculator
 */
class CarLoanCalculator
{
	/**
	 * CarLoanCalculator
	 */
	function __construct() {
		$bus = MagLev::getInstance('carloancalculator');
		$lib = new CarLoanCalculator_Library($bus);
		$persistence = new Persistence($bus);
	}

	/**
	 * Calculate what the payments would be from the price of the new car and the parameters of the monthly loan payments
	 * @param float $newCarPrice price of the car new
	 * @param float $tradeInAllowance trade-in value
	 * @param float $tradeInLoanBalance loan balance after trade-in
	 * @param float $downPaymentAndRebates total amount of rebates plus downpayment
	 * @param float $loanDuration loan duration in months
	 * @param float $salesTaxRate  sales tax as percentage
	 * @param float $interestRate interest rate as percentage
	 * @return array payments and total interest
	 */
	public function CalcPayments($newCarPrice, $tradeInAllowance, $tradeInLoanBalance, $downPaymentAndRebates, $loanDuration, $salesTaxRate, $interestRate)
	{
		$phpbus = MagLevPhp::getInstance('carloancalculator');
		$args = [$newCarPrice, $tradeInAllowance, $tradeInLoanBalance, $downPaymentAndRebates, $loanDuration, $salesTaxRate, $interestRate];
		$ret = null;
		$phpbus->call('CarLoanCalculator.CalcPayments', $args, function($async_ret) use (&$ret) { $retn = $async_ret; });
		return $ret;
	}

	/**
	 * Calculate the price of the car from the monthly loan payment information
	 * @param float $monthlyPayment monthly payment amount
	 * @param float $tradeInAllowance trade-in value
	 * @param float $tradeInLoanBalance loan balance after trade-in
	 * @param float $downPaymentAndRebates total amount of rebates plus downpayment
	 * @param float $loanDuration loan duration in months
	 * @param float $salesTaxRate sales tax rate as percentage
	 * @param float $interestRate interest rate as percentage
	 * @return float target price with tax and fees
	 */
	public function CalcAffordability($monthlyPayment, $tradeInAllowance, $tradeInLoanBalance, $downPaymentAndRebates, $loanDuration, $salesTaxRate, $interestRate)
	{
		$phpbus = MagLevPhp::getInstance('carloancalculator');
		$args = [$monthlyPayment, $tradeInAllowance, $tradeInLoanBalance, $downPaymentAndRebates, $loanDuration, $salesTaxRate, $interestRate];
		$ret = null;
		$phpbus->call('CarLoanCalculator.CalcAffordability', $args, function($async_ret) use (&$ret) { $retn = $async_ret; });
		return $ret;
	}

}
