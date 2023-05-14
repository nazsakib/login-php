<?php

// setcookie("cookie_name", "cookie_value", time in seconds); - how to set cookie

setcookie("email", "hello@gmail.com", time() + 20);
//echo time(); // time itself won't show because it's returnin, not echoing

// print_r($_COOKIE); - how to declare / access cookie

print_r($_COOKIE);
?>