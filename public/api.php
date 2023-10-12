<?php


if (!empty($_POST['email'])) {
    $email = validateFormData("email");
    $name = validateFormData("name");
    $nieuwsbrief = validateFormData("nieuwsbriefOptions");
} else {
    echo 'veld is leeg';
}

function validateFormData($formData)
{
    if (isset($_POST[$formData]) && !empty($_POST[$formData])) {
        $filter = trim($_POST[$formData]);
        $filter = htmlspecialchars($filter);
        $filter = stripslashes($filter);
        print_r($filter);
        return $filter;
    } else {
        echo "error";
    }
}

$servername = "mariadb";
$user = "exampleuser";
$password = "examplepass";
$db = "exampledb";

$dateTime = new DateTime();
$dateNow = $dateTime->format('Y-m-d H:i:s');

try {
    $conn = new PDO("mysql:host=$servername;port=3306;dbname=$db", $user, $password);
    $statement = $conn->prepare("INSERT INTO users(name, email, date, active) VALUES(:name, :email, :date, :active)");
    $statement->execute([
        "name" => $name,
        "email" => $email,
        "date" => $dateNow,
        "active" => 0,
    ]);
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
;