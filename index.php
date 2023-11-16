<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Author
    </title>
    <link rel="stylesheet" href="<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous>"
</head>
<body>
    <div class="cointainer my-5">
        <h2>List of Clients</h2>
        <a class="btn btn primary"href"/myshop/creat.php" role ="button">Now Client</a>
        <br>
        <table class ="table">
        </table>
        <thead>
            <tr>
                <th>Id</th>
                <th>ullName</th>
                <th>Email</th>
                 <th>Address</th>
                <th>Biography</th>
                <th>DateofBirth</th>
                <th>Suspended</th>
            </tr>
        </thead
        <tbody>
            <?php
            $servername = "localhost";
            $username = "root";
            $password = "";
            $database = "author";

            //Create connection
            $connection = new mysqli($servername, $username, $password, $database); 
            //Check connection
          if ($connection -> connect_error) {
            die("Connection failed:". $connection -> connect_error);
          }
          //read all now from database table
          $sql = "SELECT*FROM clients";
          $result= $connection -> query($sql);
          if(! $result) {
            die ("Invalid query:". $connection -> connect_error);
           }

           //read data of each row
           while(! $result -> fetch_assoc()) {
            echo" <tr>
            <td>$row[id]</td>
            <td>$row[fullname]</td>
            <td>$row[email]</td>
           <td>$row[address]</td>
           <td>$row[biography]</td>
           <td>$row[dateofbirth]</td>
           <td>$row[suspended]</td>
            <td>
            <a class='btn btn primary btn-sm'href='/author/edit.php?id-$row[id]'>Edit</a>
            <a class='btn btn primary btn-sm'href='/author/delete.php?id$row[id]'>Delete</a>
            </td>
        </tr>
            ";
              }
            ?>
           
        </tbody>
</table>
    </div>     
</body>
</html>
