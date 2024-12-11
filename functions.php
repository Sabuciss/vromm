<?php

// Dump and die
function dd($data){
    echo"<pre>";// sakarto daudz skaidrak datus kas ir tikti izvadīti
    var_dump($data);
    echo"</pre>";
    die();
}