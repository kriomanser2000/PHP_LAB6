<?php
function getTimeOfDayClass()
{
    $hour = date('H');
    if ($hour >= 6 && $hour < 12)
    {
        return 'morning';
    }
    elseif ($hour >= 12 && $hour < 18)
    {
        return 'day';
    }
    elseif ($hour >= 18 && $hour < 21)
    {
        return 'evening';
    }
    else
    {
        return 'night';
    }
}
function getGreetingMessage()
{
    $hour = date('H');
    if ($hour >= 6 && $hour < 12)
    {
        return 'Доброго ранку!';
    }
    elseif ($hour >= 12 && $hour < 18)
    {
        return 'Доброго дня!';
    }
    elseif ($hour >= 18 && $hour < 21)
    {
        return 'Доброго вечора!';
    }
    else
    {
        return 'Доброї ночі!';
    }
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<style>
    body
    {
        margin: 0;
        padding: 0;
        height: 100vh;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 2em;
        color: white;
    }
    .morning
    {
        background-color: blue;
    }
    .day
    {
        background-color: yellow;
        color: black;
    }
    .evening
    {
        background-color: red;
    }
    .night
    {
        background-color: black;
    }
</style>
<body>
<body class="<?php echo getTimeOfDayClass(); ?>">
<p><?php echo getGreetingMessage(); ?></p>
</body>
</html>