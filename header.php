<?php require_once __DIR__ . '/app/config.php'; require_once __DIR__ . '/app/session.php'; ?>

<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="<?= $basePath ?>/common/reset.css">
        <link rel="stylesheet" href="<?= $basePath ?>/styles/style.css">
        <link rel="stylesheet" href="<?= $basePath ?>/styles/pageStyle.css">
        <link rel="stylesheet" href="<?= $basePath ?>/styles/activityStyle.css">
        <link rel="icon" type="image/png" href="<?= $basePath ?>/images/ukatou.png">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100..900&family=Zen+Kurenaido&display=swap" rel="stylesheet">
        <title>雨花灯</title>
    </head>

    <body>
        <header>
            <div>
            
                <div class="title">
                    <h1>雨花灯</h1>
                </div>
            
                <ul class="linkWrap hidding">
                    <li><a class="zoom" href="<?= $basePath ?>/index.php">About Me</a></li>
                    <li><a class="zoom" href="<?= $basePath ?>/photograph.php">Photograph</a></li>
                    <li><a class="zoom" href="<?= $basePath ?>/activity.php">Activity</a></li>
                    <li><a class="zoom" href="<?= $basePath ?>/skill.php">Skill</a></li>
                    <li><a class="zoom" href="<?= $basePath ?>/link.php">Link</a></li>
                </ul>

                <div class="headerMenu">
                    <div class="open">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                    <div class="close invisible">
                        <span></span>
                        <span></span>
                    </div>
                </div>

            </div>
        </header>
        <main>