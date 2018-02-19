<?php

use App\Http\Flash;

function flash($title, $message = null)
{
    return $flash = new Flash($title, $message);
}
