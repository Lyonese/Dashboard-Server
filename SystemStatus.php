<?php
function getServiceStatus($service) {
    $status = shell_exec("service $service status");
    if (strpos($status, 'running') !== false) {
        return "Activo";
    } else {
        return "Inactivo";
    }
}

$pihole_status = getServiceStatus('pihole-FTL');
$tailscale_status = getServiceStatus('tailscaled');
$plex_status = getServiceStatus('plexmediaserver');
$nextcloud_status = getServiceStatus('apache2');

$navidrome_status = isProcessRunning('navidrome');
function isProcessRunning($processName) {
    $output = shell_exec("pgrep -x $processName");
    return !empty($output) ? "Activo" : "Inactivo";
}

function getSystemStatus() {
    $output = shell_exec("bash ./SystemStatus.sh");
    $data = explode(", ", trim($output));

    $cpu_usage = isset($data[0]) ? round($data[0]) : 0;
    $cpu_temp = isset($data[1]) ? round($data[1], 1) : 'N/A';
    $bytes_sent = isset($data[2]) ? round($data[2] / 1024 / 1024, 2) : 0; // Convertir a MB
    $bytes_recv = isset($data[3]) ? round($data[3] / 1024 / 1024, 2) : 0; // Convertir a MB

    $mb_sent_per_sec = $bytes_sent;
    $mb_recv_per_sec = $bytes_recv;

    return array(
        "cpu" => $cpu_usage,
        "cpu_temp" => $cpu_temp,
        "mb_sent_per_sec" => $mb_sent_per_sec,
        "mb_recv_per_sec" => $mb_recv_per_sec
    );
}


$system_status = getSystemStatus();

function getRamUsage() {
    $meminfo = file_get_contents("/proc/meminfo");
    preg_match("/MemTotal:\s+(\d+) kB/", $meminfo, $total);
    preg_match("/MemAvailable:\s+(\d+) kB/", $meminfo, $available);

    if ($total && $available) {
        $used = $total[1] - $available[1];
        return round(($used / $total[1]) * 100);
    }
    return 0;
}

$ram_usage = getRamUsage();
$ram_usage = trim($ram_usage);
$ram_usage = is_numeric($ram_usage) ? round($ram_usage) : 0;

$disk_usage = round((disk_total_space("/") - disk_free_space("/")) / disk_total_space("/") * 100) . "%";

echo json_encode(array(
    "cpu" => $system_status['cpu'],
    "cpu_temp" => $system_status['cpu_temp'],
    "mb_sent_per_sec" => $system_status['mb_sent_per_sec'],
    "mb_recv_per_sec" => $system_status['mb_recv_per_sec'],
    "ram" => $ram_usage,
    "disk" => $disk_usage,
    "pihole" => $pihole_status,
    "tailscale" => $tailscale_status,
    "plex" => $plex_status,
    "nextcloud" => $nextcloud_status,
    "navidrome" => $navidrome_status // Incluir estado de Navidrome en el JSON
));
?>
