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
    </style>
</head>
<body class="flex items-center justify-center h-screen bg-gray-100">
    <div class="text-center relative">
        <img src="https://i.pinimg.com/originals/2d/8c/70/2d8c7057a36d0c15680962716ee4ddec.jpg" alt="Özür Dilerim" class="mx-auto mb-4 rounded-lg">
        <p id="message" class="text-xl font-semibold mb-4">Seni Üzdüğüm İçin Özür Dilerim, Barışalım mı?</p>
        <div class="relative inline-block">
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

        document.getElementById("no-btn").addEventListener("mouseover", function() {
            const button = document.getElementById("no-btn");
            const maxWidth = window.innerWidth - button.offsetWidth;
            const maxHeight = window.innerHeight - button.offsetHeight;

            const randomX = Math.floor(Math.random() * maxWidth);
            const randomY = Math.floor(Math.random() * maxHeight);

            button.style.transform = `translate(${randomX - button.offsetLeft}px, ${randomY - button.offsetTop}px)`;
        });
    </script>
</body>
</html>