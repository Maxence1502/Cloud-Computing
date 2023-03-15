<?php
    $servername = "database";
    $username = "maxence";
    $password = "maxence";
    $dbname = "cloud_computing";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    if (isset($_POST['add_user'])) {
        $nom = $_POST['nom'];
        $prenom = $_POST['prenom'];
        $email = $_POST['email'];

        $insert = "INSERT INTO clients (nom, prenom, email) VALUES ('{$nom}','{$prenom}','{$email}');";
        $result = $conn->query($insert);
    }

    $query = "SELECT * FROM clients";
    $result = $conn->query($query);
?>

<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Nom</th>
            <th>Prénom</th>
            <th>Email</th>
        </tr>
    </thead>

    <tbody>
    <?php while($row = $result->fetch_assoc()): ?>
        <tr>
            <td><?= $row["id"] ?></td>
            <td><?= $row["nom"] ?></td>
            <td><?= $row["prenom"] ?></td>
            <td><?= $row["email"] ?></td>
        </tr>
    <?php endwhile; ?>
    </tbody>
</table>

<div class="form-container">
    <form method="post">
        <input type="text" name="nom" placeholder="Nom">
        <input type="text" name="prenom" placeholder="Prénom">
        <input type="text" name="email" placeholder="Email">
        <button type="submit" name="add_user">Ajouter</button>
    </form>
</div>

<style>
    table {
      border-collapse: collapse;
      width: 100%;
      color: #333;
      font-family: Arial, sans-serif;
      font-size: 14px;
      text-align: left;
    }

    th {
      background-color: #ddd;
      font-weight: bold;
      padding: 10px;
      text-align: left;
    }

    td {
      padding: 10px;
      border-bottom: 1px solid #ddd;
    }

    .form-container {
      display: flex;
      justify-content: center;
      margin-top: 20px;
    }

    .form-container input[type=text] {
      padding: 5px;
      margin-right: 5px;
      font-size: 14px;
      border: 1px solid #ccc;
    }

    .form-container button {
      padding: 5px;
      font-size: 14px;
      background-color: #4CAF50;
      color: white;
      border: none;
      cursor: pointer;
    }
</style>