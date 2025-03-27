<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Özür Dilerim</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        .moving-button {
            position: absolute;
            transition: transform 0.5s ease-in-out;
        }
        .container {
            position: relative;
            width: 800px;
            height: 800px;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            border: 2px solid #ccc;
        }
        @media (max-width: 768px) {
            .container {
                width: 90vw;
                height: 400px;
            }
        }
        img {
            max-width: 200px;
            max-height: 200px;
        }
        .button-container {
            position: relative;
            width: 300px;
            height: 150px;
        }
    </style>
</head>
<body class="flex items-center justify-center h-screen bg-gray-100">
    <div class="container text-center relative">
        <img src="https://i.pinimg.com/originals/2d/8c/70/2d8c7057a36d0c15680962716ee4ddec.jpg" alt="Özür Dilerim" class="mx-auto mb-4 rounded-lg">
        <p id="message" class="text-xl font-semibold mb-4">Seni Üzdüğüm İçin Özür Dilerim, Barışalım mı?</p>
        <div class="button-container">
            <button id="yes-btn" class="bg-green-500 text-white px-6 py-2 rounded-lg mr-4 hover:bg-green-600">Evet</button>
            <button id="no-btn" class="bg-red-500 text-white px-6 py-2 rounded-lg moving-button">Hayır</button>
        </div>
    </div>

    <script>
        document.getElementById("yes-btn").addEventListener("click", function() {
            document.getElementById("message").textContent = "Teşekkür ederim!";
            document.getElementById("yes-btn").style.display = "none";
            document.getElementById("no-btn").style.display = "none";
        });

        function moveButton() {
            const button = document.getElementById("no-btn");
            const container = document.querySelector(".container");
            const maxX = container.clientWidth - button.offsetWidth;
            const maxY = container.clientHeight - button.offsetHeight;

            const randomX = Math.floor(Math.random() * maxX);
            const randomY = Math.floor(Math.random() * maxY);

            button.style.transform = `translate(${randomX}px, ${randomY}px)`;
        }

        document.getElementById("no-btn").addEventListener("mouseover", moveButton);
        document.getElementById("no-btn").addEventListener("touchstart", moveButton);
    </script>
</body>
</html>