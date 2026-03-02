<?php
/**
 * Front Controller / Router for mundial2fra1
 * URL format: index.php?page=home&lang=fr
 */

// Bootstrap language system
require_once __DIR__ . '/config/lang.php';

// Determine which page to load
$page = $_GET['page'] ?? 'home';

// Map page names to their PHP files
$page_map = [
    // Root pages
    'home'                          => 'pages/home.php',
    'kontakt'                       => 'pages/kontakt.php',
    'preise'                        => 'pages/preise.php',
    'oeffnungszeiten'               => 'pages/oeffnungszeiten.php',
    'aufgabe'                       => 'pages/aufgabe.php',
    'start'                         => 'pages/start.php',
    'login'                         => 'pages/login.php',
    'no-way'                        => 'pages/no-way.php',
    'back-to-unipark'               => 'pages/back-to-unipark.php',
    '404'                           => 'pages/404.php',
    '401'                           => 'pages/401.php',
    // Task pages
    'task-01'                       => 'pages/task-01.php',
    'task-01-cancel'                => 'pages/task-01-cancel.php',
    'task-01-end'                   => 'pages/task-01-end.php',
    'task-02'                       => 'pages/task-02.php',
    'task-02-cancel'                => 'pages/task-02-cancel.php',
    'task-02-end'                   => 'pages/task-02-end.php',
    'task-03'                       => 'pages/task-03.php',
    'task-03-cancel'                => 'pages/task-03-cancel.php',
    'task-03-end'                   => 'pages/task-03-end.php',
    // Angebote-2 subpages
    'angebote-golf'                 => 'pages/angebote-2/angebote-golf.php',
    'hallenbad'                     => 'pages/angebote-2/hallenbad.php',
    'bowling'                       => 'pages/angebote-2/bowling.php',
    'restaurant'                    => 'pages/angebote-2/restaurant.php',
    'birthday'                      => 'pages/angebote-2/birthday.php',
    'waiting-angebote'              => 'pages/angebote-2/waiting-angebote.php',
    'kauf-mundialcard'              => 'pages/angebote-2/kauf-mundialcard.php',
    'reservation-geburtstagsfeier'  => 'pages/angebote-2/reservation-geburtstagsfeier.php',
    'reservation-geburtstag-complete' => 'pages/angebote-2/reservation-geburtstag-complete.php',
    'waiting-kauf-mundialcard'      => 'pages/angebote-2/waiting-kauf-mundialcard.php',
    'waiting-reservation-geburtstag'=> 'pages/angebote-2/waiting-reservation-geburtstag.php',
];

// Resolve file path
if (isset($page_map[$page])) {
    $page_file = __DIR__ . '/' . $page_map[$page];
} else {
    // Unknown page → 404
    $page_file = __DIR__ . '/pages/404.php';
    $page = '404';
}

// Safety check
if (!file_exists($page_file)) {
    $page_file = __DIR__ . '/pages/404.php';
}

require $page_file;
