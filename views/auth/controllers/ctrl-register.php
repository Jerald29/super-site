<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = trim($_POST["username"]);
    $email = filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);
    $account_password = password_hash($_POST["account_password"], PASSWORD_DEFAULT);

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        die("Invalid email format");
    }

    try {
        require_once "../../../config/db.php";

        $query = "INSERT INTO accounts (username, email, account_password) VALUES (:username, :email, :account_password);";

        $stmt = $pdo->prepare($query);

        $stmt->bindParam(":username", $username);
        $stmt->bindParam(":email", $email);
        $stmt->bindParam(":account_password", $account_password);

        $stmt->execute();

        header ("Location: ../register.php");

        die();
    } catch (PDOException $e) {
        die("Query failed: " . $e->getMessage());
    }
}
else {
    header ("Location: ../register.php");
}