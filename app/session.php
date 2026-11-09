<?php
// セッションとフォーム送信用トークンの共通初期化
if (session_status() === PHP_SESSION_NONE) {
    $lifetime = 3 * 24 * 60 * 60;

    ini_set('session.gc_maxlifetime', (string)$lifetime);

    session_set_cookie_params([
        'lifetime' => $lifetime,
        'path' => '/',
        'secure' => !empty($_SERVER['HTTPS'])
                    && $_SERVER['HTTPS'] !== 'off',
        'httponly' => true,
        'samesite' => 'Lax',
    ]);

    session_start();

    $params = session_get_cookie_params();

    setcookie(session_name(), session_id(), [
        'expires' => time() + $lifetime,
        'path' => $params['path'],
        'domain' => $params['domain'],
        'secure' => $params['secure'],
        'httponly' => $params['httponly'],
        'samesite' => $params['samesite'],
    ]);
}

if (!isset($_SESSION['csrfToken'])) {
    $_SESSION['csrfToken'] = bin2hex(random_bytes(32));
}

function hasValidCsrfToken(): bool
{
    $token = $_POST['csrfToken'] ?? '';
    return is_string($token) && hash_equals($_SESSION['csrfToken'], $token);
}
