<!-- php -->
<?php
//session_start();
include('header.php');


if(!user_logged_in())[
    header('location: index.php')
];
?>


    <div class="min-h-screen flex-center w-full">
        <div class="max-w-md w-full px-6 py-12 bg-white shadow-md rounded-md overflow-hidden">
            <div class="text-center">
                <h2 class="text-3xl font-bold mb-4">Registration Successfull!</h2>
                <p class="text-gray-500 pb-8">Thank you for registering!</p>
                <a class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full w-1/3 focus:outline-none focus:shadow-outline" href="logout.php">Back</a>
            </div>
        </div>
    </div>


<?php
include('footer.php');
?>
