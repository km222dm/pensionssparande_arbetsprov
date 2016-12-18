<?php
class preferredMonthlyPayment {

    function __construct() {

        $preferredPayment = $_POST['preferredPayment'];

        $yearOfRetirement = $_POST['yearOfRetirement'];

        $ageOfLastPayment = $_POST['ageOfLastPayment'];

        $averageReturn = $_POST['averageReturn'];


        $dailySavings = $this->calculateDailySavings($preferredPayment, $yearOfRetirement,  $ageOfLastPayment, $averageReturn);

        $this->printResult($preferredPayment, $dailySavings);

    }


    function calculateDailySavings($preferredPayment, $yearOfRetirement,  $ageOfLastPayment,  $averageReturn) {


        /***** Här är det tänkt att uträkningen ska ske för att ta reda på hur mycket man behöver spara/dag *****/


        return '(här ska svaret stå)';
    }


    function printResult($preferredPayment, $dailySavings) {

        echo '<h2>Du behöver spara: ' . $dailySavings . ' för att få ut ' . $preferredPayment . ' kr i månaden.</h2>';
    }
}


