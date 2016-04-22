<?php

use App\Users\Notifications\Flash;

if (!function_exists('flash')) {

    /**
     * Create a flash message
     *
     * @param string|null $title
     * @param string|null $message
     * @return \App\Users\Flash\Message
     */
    function flash($title = null, $message = null)
    {
        $flash = app(Flash::class);

        if (func_num_args() === 0) {
            return $flash;
        }

        $flash->message($title, $message);
    }

}