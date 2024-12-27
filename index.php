<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Happy Birthday</title>
    <style>
        body {
            font-family: 'Comic Sans MS', cursive, sans-serif;
            text-align: center;
            background: linear-gradient(120deg, #ffe4e1, #ffd1dc);
            color: #333;
            margin: 0;
            padding: 0;
        }

        .container {
            margin-top: 50px;
            padding: 20px;
            animation: fadeIn 2s ease-in-out;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }

        #nameInput {
            padding: 10px;
            font-size: 16px;
            width: 200px;
            border: 2px solid #ff7f7f;
            border-radius: 5px;
        }

        button {
            padding: 10px 20px;
            font-size: 16px;
            margin: 10px;
            border: none;
            border-radius: 10px;
            cursor: pointer;
        }

        #submitButton {
            background: linear-gradient(45deg, #ff7f7f, #ffb6c1);
            color: white;
            box-shadow: 0px 5px 15px rgba(0, 0, 0, 0.2);
            transition: transform 0.2s ease-in-out;
        }

        #submitButton:hover {
            transform: scale(1.1);
        }

        .error {
            color: red;
            margin-top: 10px;
        }

        .birthday-img {
            width: 150px;
            height: auto;
            margin: 20px 0;
        }

        .sparkle {
            font-size: 24px;
            color: #ff69b4;
            animation: sparkle 1.5s infinite;
        }

        @keyframes sparkle {
            0%, 100% {
                opacity: 0.8;
            }
            50% {
                opacity: 1;
            }
        }
    </style>
</head>
<body>

<!-- Halaman 1: Verifikasi Nama -->
<div class="container">
    <h1>Halo Cintaaa </h1>
    <p class="sparkle">Test ehh masuken nama kamu, bebas bade Wulan, Siwul, Kulkas, atau nama lengkap oge!</p>
    <img src="https://via.placeholder.com/150/ff7f7f/ffffff?text=🎂" alt="Birthday" class="birthday-img">
    <input type="text" id="nameInput" placeholder="Masukkan namamu" required />
    <button id="submitButton">Lanjut</button>
    <p id="errorMessage" class="error" style="display: none;">Nama tidak dikenal, coba lagi!</p>
</div>

<script>
    const allowedNames = ["Siti Wulan Dari", "Wulan", "Kulkas", "Siwul"];
    const nameInput = document.getElementById("nameInput");
    const submitButton = document.getElementById("submitButton");
    const errorMessage = document.getElementById("errorMessage");

    submitButton.addEventListener("click", () => {
        const enteredName = nameInput.value.trim().toLowerCase();
        const normalizedAllowedNames = allowedNames.map(name => name.toLowerCase());
        if (normalizedAllowedNames.includes(enteredName)) {
            window.location.href = `halaman-konfirmasi.php?name=${encodeURIComponent(enteredName)}`;
        } else {
            errorMessage.style.display = "block";
        }
    });
</script>

</body>
</html