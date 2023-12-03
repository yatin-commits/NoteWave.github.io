<?php


if ($_SERVER["REQUEST_METHOD"] == "POST") {
$firstname = htmlspecialchars($_POST["name"]);

$lastname = htmlspecialchars($_POST["email"]);

$favouritepet = htmlspecialchars($_POST["message"]);

echo "These are the data, that the user submitted:";

echo "<br>";

echo $firstname;
echo "<br>";
echo $lastname;

echo "<br>";

echo $favouritepet;

header("Location: ./index.html")
}