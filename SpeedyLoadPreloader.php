<?php
/**
 * Plugin Name: SpeedyLoad Preloader
 * Description: YouTubeとGoogleフォントのプリロードを追加してページ速度を向上させます。
 * Version: 1.0
 * Author: Mr. Tsutsumi
 * Author URI: https://github.com/titanvortex
 */

// Google Fonts プリロード
function speedyload_preload_google_fonts() {
    echo '<link rel="preload" href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" as="style" onload="this.onload=null;this.rel=\'stylesheet\'">';
}
add_action('wp_head', 'speedyload_preload_google_fonts');

// YouTube プリロード
function speedyload_preload_youtube() {
    echo '<link rel="preload" href="https://www.youtube.com/player_api" as="script">';
}
add_action('wp_head', 'speedyload_preload_youtube');

