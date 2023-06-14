<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Days left until Christmas</title>
  </head>
  <body>
    <ul>
    <?php
      // Date of a current day
      $currentDay = date("l F jS Y");

      // Specify the target date
      $targetDate = "2023-12-24";

      // Convert the target date to a timestamp
      $targetTimestamp = strtotime($targetDate);

      // Get the current timestamp
      $currentTimestamp = time();

      // Calculate the difference in seconds between the current date and the target date
      $diffSeconds = $targetTimestamp - $currentTimestamp;

      // Calculate the number of days
      $daysLeft = floor($diffSeconds / (60 * 60 * 24));

      // Output the result
      echo "<li>Today is " . $currentDay . "</li>";
      echo "<li>There are " . $daysLeft . " days left until " . $targetDate . "</li>";
    ?>
    </ul>
  </body>
</html>
