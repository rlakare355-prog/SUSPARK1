<?php
// SPARK Platform - Student Logout
require_once __DIR__ . '/../includes/config.php';
require_once __DIR__ . '/../includes/database.php';
require_once __DIR__ . '/../includes/auth.php';

// Handle logout
if (isLoggedIn()) {
    try {
        // Log the logout activity
        logActivity($_SESSION['user_id'], 'logout', 'system', null, 'User logged out');

        // Perform logout
        logout();

        // Clear remember me cookie if exists
        if (isset($_COOKIE['remember_email'])) {
            setcookie('remember_email', '', time() - 3600, '/');
            unset($_COOKIE['remember_email']);
        }

        // Set success message
        $_SESSION['success'][] = "You have been logged out successfully.";

    } catch (Exception $e) {
        error_log("Logout error: " . $e->getMessage());
        $_SESSION['errors'][] = "An error occurred during logout.";
    }
}

// Redirect to home page
header('Location: index.php');
exit();
?>