<!DOCTYPE html>
<html>
<head>
    <title>PHP Form Validation Lab</title>
</head>
<body>

<h2>PHP Form Validation</h2>

<?php

$name = $email = "";
$nameErr = $emailErr = $dobErr = $genderErr = $skillErr = $degreeErr = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if ($_POST["name"] == "") {
        $nameErr = "Name is required";
    } else {
        $name = trim($_POST["name"]);

        if (str_word_count($name) < 2) {
            $nameErr = "At least two words required";
        } 
        
    }

    if ($_POST["email"] == "") {
        $emailErr = "Email is required";
    } else if (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
        $emailErr = "Invalid email format";
    }

    if ($_POST["dd"] == "" || $_POST["mm"] == "" || $_POST["yy"] == "") {
        $dobErr = "DOB is required";
    } else if (
        $_POST["dd"] < 1 || $_POST["dd"] > 31 ||
        $_POST["mm"] < 1 || $_POST["mm"] > 12 ||
        $_POST["yy"] < 1953 || $_POST["yy"] > 1998
    ) {
        $dobErr = "Invalid date range";
    }

    if (!isset($_POST["gender"])) {
        $genderErr = "Select gender";
    }

    if (!isset($_POST["skill"]) || count($_POST["skill"]) < 2) {
        $skillErr = "Select at least two skills";
    }

    
    if ($_POST["degree"] == "") {
        $degreeErr = "Select a degree";
    }
}
?>

<form method="post">

Name:<input type="text" name="name" value="<?php echo $name; ?>">
<span style="color:red"><?php echo $nameErr; ?></span>
<br><br>

Email:<input type="text" name="email">
<span style="color:red"><?php echo $emailErr; ?></span>
<br><br>

Date of Birth:<input type="number" name="dd" placeholder="DD">
<input type="number" name="mm" placeholder="MM">
<input type="number" name="yy" placeholder="YYYY">
<span style="color:red"><?php echo $dobErr; ?></span>
<br><br>

Gender:<input type="radio" name="gender" value="male">male
<input type="radio" name="gender" value="female">female
<input type="radio" name="gender" value="other">other
<span style="color:red"><?php echo $genderErr; ?></span>
<br><br>

Skills:<input type="checkbox" name="skill[]" value="PHP">PHP<input type="checkbox" name="skill[]" value="Java"> Java
<input type="checkbox" name="skill[]" value="C++"> C++
<input type="checkbox" name="skill[]" value="Python"> Python
<span style="color:red"><?php echo $skillErr; ?></span>
<br><br>

Degree:<select name="degree">
    <option value="">Select</option>
    <option value="SSC">SSC</option>
    <option value="HSC">HSC</option>
    <option value="BSc">BSc</option>



</select>
<span style="color:red"><?php echo $degreeErr; ?></span>
<br><br>

<input type="submit" value="Submit">

</form>

</body>
</html>
