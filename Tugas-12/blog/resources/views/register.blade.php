<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form</title>
</head>
<body>
    <h1>Buat Account Baru!</h1>
    <h2>Sign Up Form</h2>
    <form action="{{ url('/Register') }}">
        <label>First name:</label><br>
        <input id="first_name" type="text" name="first"><br><br>
        <label >Last name:</label><br>
        <input id="last_name" type="text" name="last"><br><br>
        <label for="">Gender:</label><br>
        <input type="radio" name="option">Male <br>
        <input type="radio" name="option">Female <br>
        <input type="radio" name="option">Other <br><br>
        <label >Nationality:</label> <br>
        <select name="Nationality" id="">
            <option value="Indonesian">Indonesian</option>
            <option value="American">American</option>
            <option value="Australian">Australian</option>
            <option value="Other">Other</option>
        </select><br>
        <label for="">Language Spoken:</label><br>
        <input type="checkbox">Bahasa Indonesia <br>
        <input type="checkbox">English <br>
        <input type="checkbox">Other <br><br>
        <label for="">Bio:</label><br>
        <textarea name="Bio" id="" cols="30" rows="10"></textarea><br>
        <input type="submit" value="Sign Up">
        <a href="{{ url('/Welcome') }}">Welcome</a>
    </form>
</body>
</html>
