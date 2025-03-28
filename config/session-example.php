<?php
// Session configuration settings (example file)

// Set session settings BEFORE session_start()
ini_set('session.gc_maxlifetime', 3600); // Garbage collection max lifetime
session_set_cookie_params([
    'lifetime' => 3600,  // Session cookie lifetime (1 hour)
    'path' => '/',
    'domain' => '',      // Set this if needed
    'secure' => true,    // Only allow cookies over HTTPS
    'httponly' => true,  // Prevent JavaScript from accessing session cookies
    'samesite' => 'Strict' // Protect against CSRF attacks
]);

// Start the session
session_start();

// Regenerate session ID to prevent session fixation attacks
session_regenerate_id(true);