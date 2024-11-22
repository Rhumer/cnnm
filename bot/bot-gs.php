<?php
$content = file_get_contents("php://input");
$update = json_decode($content, true);

$spreadsheetURL = "https://docs.google.com/spreadsheets/d/1lZFhqY0znNAtajHlOlJMEzK8Agz4mVJ86vBq4kdDCGA/edit?gid=1825487262#gid=1825487262"; // replace with your own spreadsheet URL
$worksheetName = "Sheet7"; // replace with name of your destination sheet

$values = [["name" => $update["message"]["from"]["first_name"], "
