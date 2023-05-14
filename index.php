<!-- php -->

<?php
$title = 'Homepage';

include('header.php'); //header php file

// if(user_logged_in())[
//     header('location: success.php')
// ];

if(isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = $_POST['pass'];
    $checkbox = isset($POST['checkbox']);
    
    define('EMAIL', 'hello@gmail.com');
    define('PASSWORD', 'hello123');


    if($email == EMAIL && $password == PASSWORD) {

        $_SESSION['success'] = 'Done';
        setcookie('fixed', 'running', time() + 60*60*24*365);

        header('location: success.php');
    }
    else {
        $fail = "Credentials not matched!";
    }
}

?>

<!-- htmla -->

        
        <!-- main area -->
        <main class="main-home_area py-8 flex-center">
            <div class="container">
                <div
                    class="max-w-md mx-auto bg-white rounded-lg overflow-hidden shadow-md"
                >
                    <div class="px-12 py-16">
                        <h2
                            class="text-xl tracking-wide font-bold mb-8 text-dark text-center uppercase"
                        >
                            Registration Form
                        </h2>
                        <form action="" method="POST">
                            <div class="flex mb-4">
                                <div class="mr-2 flex-1">
                                    <label
                                        class="block text-gray-700 text-sm font-bold mb-2 text-white"
                                        for="first-name"
                                    >
                                        First Name
                                    </label>
                                    <input
                                        class="appearance-none bg-gray-100 border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline focus-within:border-shadow"
                                        id="first-name"
                                        type="text"
                                        placeholder="First Name"
                                        required
                                    />
                                </div>
                                <div class="ml-2 flex-1">
                                    <label
                                        class="block text-gray-700 text-sm font-bold mb-2 text-white"
                                        for="last-name"
                                    >
                                        Last Name
                                    </label>
                                    <input
                                        class="appearance-none bg-gray-100 border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline focus-within:border-shadow"
                                        id="last-name"
                                        type="text"
                                        placeholder="Last Name"
                                        required
                                    />
                                </div>
                            </div>
                            <div class="mb-4">
                                <label
                                    class="block text-gray-700 text-sm font-bold mb-2 text-white"
                                    for="email"
                                >
                                    Email
                                </label>
                                <input
                                    class="appearance-none bg-gray-100 border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline focus-within:border-shadow"
                                    id="email"
                                    type="email"
                                    name="email"
                                    placeholder="Email"
                                    required
                                />
                            </div>
                            <div class="mb-4">
                                <label
                                    class="block text-gray-700 text-sm font-bold mb-2 text-white"
                                    for="password"
                                >
                                    Password
                                </label>
                                <input
                                    class="appearance-none bg-gray-100 border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline focus-within:border-shadow"
                                    id="password"
                                    type="password"
                                    name="pass"
                                    placeholder="Password"
                                    required
                                />
                            </div>
                            <div class="mb-4 font-semibold flex content-center gap-2">
                                <input type="checkbox" name="checkbox" id="check">
                                <label for="checkbox">Keep me logged in.</label>
                            </div>
                            <p class="text-center px-4 my-4 text-red-900 font-bold">
                                <?php 
                                if(isset($fail)) {
                                    echo $fail;
                                }
                                ?>
                            </p>
                            <div class="flex items-center">
                                <button
                                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full w-full focus:outline-none focus:shadow-outline"
                                    name="submit"
                                    type="submit"
                                >
                                    Register
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </main>


        <!-- footer php file -->
<?php
include('footer.php');
?>
