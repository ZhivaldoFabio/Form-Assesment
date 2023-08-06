<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Form Assesment</title>
    <link rel="stylesheet" href="stylesheet.css">
    <link rel="scriptsheet" href="scriptsheet.js">

</head>

<body class="logpage">
    <div class="center">
        <h1>Log-in PHP</h1>
        <form action="" method="POST">
            <div class="text_field">
                <input class="inputlogin" name="username" type="text" required>
                <span></span>
                <label>Username</label>
            </div>
            <div class="text_field">
                <input class="inputlogin" name="password" type="password" required>
                <span></span>
                <label>Password</label>
            </div>
            <div class="pass">Forgot Password?</div>
            <button onclick="signIn()">Sign In</button>
            <input class="inputlogin" name="submit_login" type="submit" value="Login">
            <div class="signup_link">
                Not a Care Giver? <a href="www.satunama.org">Contact Support.</a>
            </div>

            <?php
            session_start();

            if (isset($_POST["submit_login"])) {
                $username = $_POST["username"];
                $password = $_POST["password"];

                if ($username === "admin" && $password === "admin123") {
                    // Login successful, store user information in session and redirect to another page
                    $_SESSION["username"] = $username;
                    header("Location: display.php"); // Replace "welcome.php" with the desired page after successful login
                    exit();
                } else {
                    // Invalid username or password, display error message
                    echo "<script>alert('Invalid username or password. Please retry.');</script>";
                }
            }
            ?>

        </form>
    </div>
    <script src="https://www.gstatic.com/firebasejs/9.0.2/firebase-app.js"></script>
    <script src="https://www.gstatic.com/firebasejs/9.0.2/firebase-analytics.js"></script>

    <script>
        // Your web app's Firebase configuration
        // For Firebase JS SDK v7.20.0 and later, measurementId is optional
        const firebaseConfig = {
            apiKey: "AIzaSyD5x3fDbgMX18By8TGEzcn0TYz2Evr2owU",
            authDomain: "satunama-assesments.firebaseapp.com",
            projectId: "satunama-assesments",
            storageBucket: "satunama-assesments.appspot.com",
            messagingSenderId: "327603693254",
            appId: "1:327603693254:web:d30b36cde75c15fa0919c7",
            measurementId: "G-V7VMNQLF62" // This line is optional
        };

        // Initialize Firebase
        const app = initializeApp(firebaseConfig);
        const analytics = getAnalytics(app);
    </script>
</body>

</html>