<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Girişi</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100">
    <div class="flex items-center justify-center h-screen">
        <div class="w-full max-w-md">
            <h2 class="text-2xl font-bold text-center mb-6">Admin Girişi</h2>
            <form method="POST" action="{{ route('admin.login.submit') }}">
                @csrf
                <div class="mb-4">
                    <label for="email" class="block text-gray-700">E-posta</label>
                    <input type="email" id="email" name="email" required class="mt-1 block w-full p-2 border border-gray-300 rounded" autofocus>
                </div>
                <div class="mb-4">
                    <label for="password" class="block text-gray-700">Şifre</label>
                    <input type="password" id="password" name="password" required class="mt-1 block w-full p-2 border border-gray-300 rounded">
                </div>
                <div class="mb-4">
                    <button type="submit" class="w-full bg-blue-500 text-white p-2 rounded">Giriş Yap</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
