<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="login.css" />
    <title>HALAMAN LOGIN</title>
</head>

<body>
    <section>
        <div class="form-box">
            <div class="form-value">
                <form action="login.php" method="POST" name="form_input">
                    <h2>Login</h2>
                    <div class="inputbox">
                        <ion-icon name="mail-outline"></ion-icon>
                        <input type="text" name="username" required />
                        <label for="">Username</label>
                    </div>
                    <div class="inputbox">
                        <ion-icon name="lock-closed-outline"></ion-icon>
                        <input type="password" name="katasandi" required />
                        <label for="">Password</label>
                    </div>
                    <button type="submit" name="submit">Log in</button>
                </form>
            </div>
        </div>
    </section>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>