<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - DBT</title>
    <link rel="stylesheet" href="css/style.css" />
</head>
<body>
    
<h3>Author Details</h3>
<form action="process-form.php" method="POST">
     <!-- AuthorId (PK) - Assuming it's auto-incremented in the database -->
    <label for="Author Fullname">Author'sFullname:</label><br>
    <input type="text" name="authorFullname" id="authorFullname" placeholder="Enter the author-Fullname" maxlength="50" required /><br><br>

    <label for="Author Email"> Email:</label><br>
    <input type="email" name="authorEmail" id="authoremail" placeholder="Enter the author-Email" maxlength="50" /><br><br>

    <label for="Author address">Address:</label><br>
    <input type="text" name="authoraddress" id="authoraddress" placeholder="Enter the author-address" maxlength="100" required /><br><br>

    <label for="Author Biography">Biography:</label><br>
    <textarea name="authorBiography" id="authorBiography" placeholder="Enter the Biography" rows="4" required></textarea><br><br>

    <label for="AuthorDateOfBirth">Date of Birth:</label>
    <input type="date" id="authorDateOfBirth" name="authorDateOfBirth" required><br>

    <label for="AuthorSuspended">Suspended:</label>
    <input type="checkbox" id="authorSuspended" name="authorSuspended"><br>


    <input type="submit" name="send_message" value="Send Message" />
</form>

    </div>
    

</body>
</html>
