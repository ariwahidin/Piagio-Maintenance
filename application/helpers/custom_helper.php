<?php

function is_not_logged_in()
{
    $CI = &get_instance();
    if (!$CI->session->userdata('piaggio_auth')) {
        redirect(base_url('auth/login'));
    }
}

function is_logged_in()
{
    $CI = &get_instance();
    if ($CI->session->userdata('piaggio_auth')) {
        redirect(base_url('dashboard'));
    }
}

function list_menu()
{
    $CI = &get_instance();
    $query = $CI->db->get('master_menu');
    return $query;
}

function parentMenu()
{
    $CI = &get_instance();
    $query = $CI->db->get('master_parent_menu');
    return $query;
}

function child_menu($id)
{
    $where = array(
        'parent_id' => $id
    );
    $CI = &get_instance();
    $query = $CI->db->get_where('master_menu', $where);
    return $query;
}

function countDuration($start, $stop)
{
    // $date_a = '2024-01-01 17:10:10';
    // $date_b = '2024-01-30 17:10:10';

    if (!is_null($start) && !is_null($stop)) {
        // Konversi string tanggal ke timestamp
        $timestamp_a = strtotime($start);
        $timestamp_b = strtotime($stop);

        // Hitung perbedaan timestamp
        $difference = abs($timestamp_b - $timestamp_a);

        // Konversi perbedaan menjadi format jam, menit, detik
        $hours = floor($difference / (60 * 60));
        $minutes = floor(($difference - $hours * 3600) / 60);
        $seconds = $difference - ($hours * 3600) - ($minutes * 60);


        // Tambahkan nol di depan jika hanya satu digit
        $hours = ($hours < 10) ? "0$hours" : $hours;
        $minutes = ($minutes < 10) ? "0$minutes" : $minutes;
        $seconds = ($seconds < 10) ? "0$seconds" : $seconds;

        $timeDuration =  $hours . ":" . $minutes . ":" . $seconds;
        $terbilang = "$hours jam, $minutes menit, $seconds detik.";

        // $result = array(
        //     'time' => $timeDuration,
        //     'terbilang' => $terbilang
        // );
    } else {
        $timeDuration = '';
        // $result = array(
        //     'time' => '',
        //     'terbilang' => ''
        // );
    }
    return $timeDuration;
}

function roundMinutes($timeString)
{
    // Memisahkan string waktu menjadi bagian-bagian yang terpisah
    $timeParts = explode(':', $timeString);

    // Menghitung total menit dari waktu
    $totalMinutes = ($timeParts[0] * 60) + $timeParts[1];

    // Lakukan pembulatan ke menit terdekat
    $roundedMinutes = round($totalMinutes);

    // Mengembalikan hasil pembulatan
    return $roundedMinutes . " Menit";
}

function currentDateTime()
{
    $timezone = new DateTimeZone('Asia/Jakarta');
    $dateTime = new DateTime('now', $timezone);
    $formattedDateTime = $dateTime->format('Y-m-d H:i:s');
    return $formattedDateTime;
}

function userId()
{
    return $_SESSION['piaggio_auth']['user_id'];
}
