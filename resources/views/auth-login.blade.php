<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="theme.css" />
    <title>login</title>
</head>

<body>
    <div class="container">
        <div class="forms-container">
            <div class="signin-signup">
                <form action="{{ route('authenticate') }}" method="post" class="sign-in-form">
                @csrf
                    <h2 class="title">Masuk</h2>
                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input name="email" type="email" placeholder="Username" required/>
                    </div>
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input name="password" type="password" placeholder="Password" required/>
                    </div>
                    <button type="submit" class="btn solid">Masuk</button>
                </form>
                <form action="{{ route('store') }}" method="post" class="sign-up-form">
                @csrf
                    <h2 class="title">Daftar</h2>
                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input name="name" type="text" placeholder="Username" required/>
                    </div>
                    <div class="input-field">
                        <i class="fas fa-envelope"></i>
                        <input name="email" type="email" placeholder="Email" required/>
                    </div>
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input name="password" type="password" placeholder="Password" required/>
                    </div>
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input name="password_confirmation" type="password" placeholder="Confirm Password" required/>
                    </div>
                    <input type="submit" class="btn" value="Daftar" />
                </form>
            </div>
        </div>

        <div class="panels-container">
            <div class="panel left-panel">
                <div class="content">
                    <img src="../assets/img/LOGO_MA_BARU_YAK-removebg-preview.png" alt="NephroCare Logo"
                        style="width: 100px; height: 100px; filter: drop-shadow(2px 2px 4px rgba(0, 0, 0, 1.0));" />
                    <p>
                        Bergabunglah di madrasah dan jadilah bagian dari Madrasah Hebat Bermartabat untuk meraih masa
                        depan yang lebih cerah.
                    </p>
                    <button class="btn transparent" id="sign-up-btn">
                        Daftar
                    </button>
                </div>
                <img src="img/log.svg" class="image" alt="" />
            </div>
            <div class="panel right-panel">
                <div class="content">
                    <img src="../assets/img/LOGO_MA_BARU_YAK-removebg-preview.png" alt="MA Logo"
                        style="width: 100px; height: 100px; filter: drop-shadow(2px 2px 4px rgba(0, 0, 0, 1.0));" />
                    <p>
                        Bergabunglah di madrasah dan jadilah bagian dari Madrasah Hebat Bermartabat untuk meraih masa
                        depan yang lebih cerah.
                    </p>
                    <button class="btn transparent" id="sign-in-btn">
                        Masuk
                    </button>
                </div>
                <img src="img/register.svg" class="image" alt="" />
            </div>
        </div>
    </div>

    <script src="app.js"></script>
</body>

</html>