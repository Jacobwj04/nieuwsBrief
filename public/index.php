<?php

require_once "api.php";

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Rest API</title>
</head>

<body>
    <article class="widget">
        <form action="api.php" class="widget__form" method="POST">
            <input type="email" class="widget__input" placeholder="Vul hier je email" id="email" name="email">
            <select id="nieuwsbriefOptions" name="nieuwsbriefOptions" class="widget__options">
                <option value="Nieuwsbrief1" class="dietPlan__option">Nieuwsbrief 1
                </option>
                <option value="Nieuwsbrief2" class="widget__option">Nieuwsbrief 2
                </option>
            </select>
            <input type="submit" class="widget__submit">
        </form>
    </article>
</body>

</html>