<?php
class savingsOverTime {

    function __construct() {

        $initialAmount = $_POST['initialAmount'];

        $monthlySavingsAmount = $_POST['monthlySavingsAmount'];

        $investmentPeriod = $_POST['investmentPeriod'];

        $assumedYield = $_POST['assumedYield'];


        $sumOfSavings = $this->calculateSum($initialAmount, $monthlySavingsAmount, $investmentPeriod, $assumedYield);

        $this->printResult($investmentPeriod, $sumOfSavings);

    }


    function calculateSum($initialAmount, $monthlySavingsAmount, $investmentPeriod, $assumedYield) {


        $sumOfSavings = $initialAmount * pow(1+(($assumedYield/12)*(1/100)),12*$investmentPeriod) + (($monthlySavingsAmount*12)/12) *

            (pow(1+(($assumedYield/12)*(1/100)),12*$investmentPeriod)-1) * (12/($assumedYield*(1/100)));


        return $sumOfSavings;
    }


    function printResult($investmentPeriod, $sumOfSavings) {

        echo '<h2>Efter ' . $investmentPeriod . ' år har du sparat ihop till ' . round($sumOfSavings, 0) . ' kr. </h2>';
    }
}




