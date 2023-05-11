<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Success</title>
  <!-- Include Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.15/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="h-screen flex-center">
        <div class="max-w-md w-full px-6 py-12 bg-white shadow-md rounded-md">
            <div class="text-center">
            <h2 class="text-3xl font-bold mb-4">Registration Successfull!</h2>
            <p class="text-gray-500 pb-8">Thank you for registering!</p>

            <button onclick="redirectToLogin()" 
                class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full w-1/3 focus:outline-none focus:shadow-outline" type="submit">Back</button>
        </div>
    </div>

    <script>
        function redirectToLogin() {
            window.location.href = "index.php"; 
        }
    </script>
</body>
</html>
