<?php
// Local XAMPP uses a subdirectory; the public site uses the domain root.
$serverName = strtolower($_SERVER['SERVER_NAME'] ?? '');
$isLocal = in_array($serverName, ['localhost', '127.0.0.1', '::1', '[::1]'], true);
$basePath = $isLocal ? '/liolion.shop' : '';