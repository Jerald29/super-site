<?php
// Set session settings BEFORE session_start()
ini_set('session.gc_maxlifetime', 3600);
session_set_cookie_params([
    'lifetime' => 3600,
    'path' => '/',
    'domain' => '',
    'secure' => true,
    'httponly' => true,
    'samesite' => 'Strict'
]);

// Now start the session
session_start();

// Regenerate session ID to prevent session fixation attacks
session_regenerate_id(true);