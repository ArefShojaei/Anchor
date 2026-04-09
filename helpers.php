<?php defined("BASE_PATH") || die("Permission defined!");


function format_file_size(float $bytes, int $decimals = 2): string {
    $sizes = ["B", "KB", "MB", "GB", "TB"];

    if ($bytes == 0) return "0 B";

    $factor = floor((strlen($bytes) - 1) / 3);

    return sprintf("%.{$decimals}f", $bytes / pow(1024, $factor)) . " " . $sizes[$factor];
}

/**
 * Request processor
 */
function apply_security_headers(): void {
    header("X-Content-Type-Options: nosniff");
    header("X-Download-Options: noopen");
    header("X-Frame-Options: DENY");
    header("Content-Security-Policy: default-src 'none'; frame-ancestors 'none'");
    header("Referrer-Policy: no-referrer");
    header("Permissions-Policy: geolocation=(), microphone=(), camera=(), payment=()");
}

function read_file($file) {
    # File reader headers
    header("Content-type: " . mime_content_type($file));
    header("Content-length: " . filesize($file));
    header('Cache-Control: public, max-age=86400');

    readfile($file);

    exit;
}

function terminate_process(): void {
    http_response_code(404);

    die("File not found!");
}