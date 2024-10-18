<?php
    $email = $password = "";
    $error = "";
    $loginSuccess = false;

    // Periksa apakah request berasal dari form submission
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Periksa apakah email dan password tidak kosong
        if (!empty($_POST["email"]) && !empty($_POST["password"])) {
            $email = htmlspecialchars($_POST["email"]);
            $password = htmlspecialchars($_POST["password"]);

            // Validasi dan verifikasi login (contoh sederhana)
            if ($email == "user@example.com" && $password == "password123") {
                $loginSuccess = true;
            } else {
                $error = "Invalid email or password.";
            }
        } else {
            $error = "Please fill in both email and password.";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Result</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-800 text-white font-sans">
    <section id="result" class="max-w-5xl mx-auto py-12 px-4">
        <h2 class="text-3xl font-semibold text-center">Login Result</h2>

        <?php if ($loginSuccess): ?>
            <div class="bg-green-500 text-white p-4 my-4">
                Login successful! Welcome, <?php echo $email; ?>.
            </div>
        <?php else: ?>
            <div class="bg-red-500 text-white p-4 my-4"><?php echo $error; ?></div>
            <a href="login.html" class="text-blue-500 hover:text-blue-300">Go back to login</a>
        <?php endif; ?>
    </section>
</body>
</html>
