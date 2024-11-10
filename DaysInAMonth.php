<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Days in a Month</title>
</head>
<body>

    <form action="" method="post">

        <h1><b>Days in a Month</b></h1>
        <p>Please choose a month.</p>
        <select name="month" id="month">

            <!-- <option value="">Choose a month...</option> -->
            <option value="..." disabled selected>Select a month...</option>
            <option value="january">January</option>
            <option value="february">February</option>
            <option value="march">March</option>
            <option value="april">April</option>
            <option value="may">May</option>
            <option value="june">June</option>
            <option value="july">July</option>
            <option value="august">August</option>
            <option value="september">September</option>
            <option value="october">October</option>
            <option value="november">November</option>
            <option value="december">December</option>

        </select>
        
        <br><br>
        <input type="submit" value="Go">

    </form>

    <?php

    if($_SERVER['REQUEST_METHOD'] == 'POST') {

        if(!empty($_POST['month'])) {

            $monthsName = [

                "january" => "January",
                "february" => "February",
                "march" => "March",
                "april" => "April",
                "may" => "May",
                "june" => "June",
                "july" => "July",
                "august" => "August",
                "september" => "September",
                "october" => "October",
                "november" => "November",
                "december" => "Decemeber"

            ];

            $days = [

                "january" => 31,
                "february" => 28,
                "march" => 31,
                "april" => 30,
                "may" => 31,
                "june" => 30,
                "july" => 31,
                "august" => 31,
                "september" => 30,
                "october" => 31,
                "november" => 30,
                "december" => 31

            ];

            $month = $_POST['month'];
            $monthName = $monthsName[$month];
            $dayInMonth = $days[$month];

            if($month == "february") {

                // $year = date('Y');

                //     if (($year % 4 == 0 && $year % 100 != 0) || ($year % 400 == 0)) {
                //         $dayInMonth = 29;
                //     }

                echo "<br>The month of February has 28 days, if leap year 29.";

            } else {
                echo "<br>The month of $monthName has $dayInMonth days.";
            }

                    
        } else {
            echo "<br><h1><b>Please select a month!</b></h1>";
        }

    }

?>
</body>
</html>