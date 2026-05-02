<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!--Window utama untuk login-->
    <div class="box-main">
        <!--Gambar buku di bagian kiri window login-->
        <div class = "box-image"></div>

        <!--Form login di bagian kanan window login-->
        <div class = "box-form">
            <div class = "form-content">
                <form>
                    <h1>Welcome</h1>
                    <p>Login dengan Email</p>
                    <div class = "input-group" style = "margin-top: 30px;">
                        <label>Email</label>
                        <input type="text" name="Email" placeholder="Enter username">
                    </div>
                    <div class = "input-group"  style = "margin-top: 30px;">
                        <label>Password</label>
                        <input type="text" name="Password" placeholder="Enter password">
                    </div>
                    <button type="submit" class="btn-login">Login</button>
                </form>

                <div class="footer-text">
                    <p>Belum punya akun?</p>
                    <a href="#">Daftar sekarang</a>
                </div>

                <button class="btn-back">< Back</button>
            </div>
        </div>
    </div>
</body>
</html>