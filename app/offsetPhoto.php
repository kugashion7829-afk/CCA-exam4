<?php
$photos = [
    [
        'image' => './images/about.png',
        'title' => '私を見つけた日',
        'url' => './pages/photo1.php',
        'date' => '2026年11月05日更新'
    ],
    [
        'image' => './images/coldRain.png',
        'title' => '灯のように',
        'url' => './pages/photo2.php',
        'date' => '2026年11月05日更新'
    ],
    [
        'image' => './images/color.png',
        'title' => '知ってる。きっと私の色じゃないね',
        'css' => 'small',
        'url' => './pages/photo3.php',
        'date' => '2026年11月05日更新'
    ],
    [
        'image' => './images/point.png',
        'title' => 'ここに残るもの',
        'url' => './pages/photo4.php',
        'date' => '2026年11月05日更新'
    ],
    [
        'image' => './images/blessing.png',
        'title' => '祝福',
        'url' => './pages/photo5.php',
        'date' => '2026年11月05日更新'
    ],
    [
        'image' => './images/step.png',
        'title' => '影を纏う',
        'url' => './pages/photo6.php',
        'date' => '2026年11月05日更新'
    ],
];

$perPage = 3;
$totalPages = max(1, (int)ceil(count($photos) / $perPage));
$page = min($totalPages, max(1, (int)($_GET['page'] ?? 1)));

$offset = ($page - 1) * $perPage;
$visiblePhotos = array_slice($photos, $offset, $perPage);
?>