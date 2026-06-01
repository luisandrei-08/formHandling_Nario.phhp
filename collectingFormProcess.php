<?php

function sanitize($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

if(isset($_POST['submit']))
{
    $name = sanitize($_POST['name']);
    $gender = sanitize($_POST['gender']);
    $yearLevel = sanitize($_POST['yearLevel']);
    $comments = sanitize($_POST['comments']);

    if(
        empty($name) ||
        empty($gender) ||
        empty($yearLevel) ||
        empty($comments)
    )
    {
        die("All fields are required.");
    }

    if(!preg_match("/^[a-zA-Z\s]+$/", $name))
    {
        die("Student name must contain letters only.");
    }

    if(isset($_POST['skills']))
    {
        $skills = array_map('sanitize', $_POST['skills']);
        $skills = implode(", ", $skills);
    }
    else
    {
        $skills = "No skills selected";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Submitted Information</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<div class="result">

    <h2>Submitted Information</h2>

    <p><strong>Name:</strong> <?php echo $name; ?></p>

    <p><strong>Gender:</strong> <?php echo $gender; ?></p>

    <p><strong>Year Level:</strong> <?php echo $yearLevel; ?></p>

    <p><strong>Skills:</strong> <?php echo $skills; ?></p>

    <p><strong>Comments:</strong> <?php echo $comments; ?></p>

</div>

</body>
</html>