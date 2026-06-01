<!DOCTYPE html>
<html>
<head>
    <title>Student Profile Form</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<div class="container">

    <h1>Student Profile Form</h1>

    <form method="POST" action="collectingFormProcess.php">

        <label>Student Name:</label>
        <input type="text"
               name="name"
               pattern="[A-Za-z\s]+"
               title="Letters only"
               required>

        <label>Gender:</label><br>

        <input type="radio" name="gender" value="Male" required>
        Male

        <input type="radio" name="gender" value="Female">
        Female

        <br><br>

        <label>Year Level:</label>

        <select name="yearLevel" required>
            <option value="">-- Select Year Level --</option>
            <option value="1st Year">1st Year</option>
            <option value="2nd Year">2nd Year</option>
            <option value="3rd Year">3rd Year</option>
            <option value="4th Year">4th Year</option>
        </select>

        <label>Programming Skills:</label><br>

        <input type="checkbox" name="skills[]" value="HTML"> HTML <br>
        <input type="checkbox" name="skills[]" value="CSS"> CSS <br>
        <input type="checkbox" name="skills[]" value="PHP"> PHP <br>
        <input type="checkbox" name="skills[]" value="JavaScript"> JavaScript

        <br><br>

        <label>Comments:</label>

        <textarea name="comments" rows="5" required></textarea>

        <input type="submit"
               name="submit"
               value="Submit"
               class="submit-btn">

    </form>

</div>

</body>
</html>