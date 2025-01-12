<?php

// Dump and die
if (!function_exists('dd')) {
    function dd($data) {
        echo "<pre>"; // Sakārto daudz skaidrāk datus, kas ir tikuši izvadīti
        var_dump($data);
        echo "</pre>";
        die();
    }
}