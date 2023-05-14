<?php
$title = "About Me";
include('header.php'); //header php file
?>

<!-- main area -->
<main class="main-about_area py-10 text-center bg-gray-100">
    <div class="container mx-auto p-2">
        <h1 class="text-4xl font-bold mb-8">About Me</h1>
        <div class="max-w-md mx-auto">
            <div class="shadow-lg rounded-lg overflow-hidden">
                <img src="sakib.png" alt="Profile Picture" class="w-full object-fit">
                <div class="p-6">
                    <h2 class="text-2xl font-bold mb-2">Sakib</h2>
                    <p class="text-gray-700 text-sm">Sakib here. Who is comfortable with JavaScript, PHP, WordPress, CSS, HTML, Elementor, Figma And having some experience working on Linux systems.Interested in developing and designing web applications.</p>
                    <div class="flex mt-2 w-full py-4 justify-center font-bold gap-4 uppercase tracking-wider">
                        <div class="mr-2">
                            <a href="#" class="text-pink-600 hover:text-blue-700">Twitter</a>
                        </div>
                        <div>
                            <a href="#" class="text-pink-600 hover:text-blue-700">LinkedIn</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>



<!-- footer php file -->
<?php
include('footer.php');
?>