<?php 
$title = 'Contact Me';
include('header.php')
?>

<!-- main area -->


  <main class="main-contact-area">
    <div class="min-h-screen flex items-center justify-center bg-gray-100">
    <div class="bg-white p-4 rounded-md shadow-md w-2/3">
      <h2 class="text-2xl font-bold mb-4">Contact Us</h2>
      <form action="#" method="POST">
        <div class="mb-4">
          <label class="block mb-2" for="name">Name</label>
          <input class="w-full px-3 py-2 border border-gray-300 rounded" type="text" id="name" name="name" placeholder="Enter your name" required>
        </div>
        <div class="mb-4">
          <label class="block mb-2" for="email">Email</label>
          <input class="w-full px-3 py-2 border border-gray-300 rounded" type="email" id="email" name="email" placeholder="Enter your email" required>
        </div>
        <div class="mb-4">
          <label class="block mb-2" for="message">Message</label>
          <textarea class="w-full px-3 py-2 border border-gray-300 rounded" id="message" name="message" rows="4" placeholder="Enter your message" required></textarea>
        </div>
        <button class="bg-blue-500 w-full text-white px-4 py-2 rounded hover:bg-blue-600" type="submit">Submit</button>
      </form>
    </div>
  </div>
  </main>

<!-- footer php  -->
<?php
include('footer.php');
?>