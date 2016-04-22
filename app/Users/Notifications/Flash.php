<?php

namespace App\Users\Notifications;

/**
 * Flash Message with Sweet Alert
 *
 * @package App\Users\Notification
 * @author Erik Galloway <erik@mybarnapp.com>
 */
class Flash
{

    /**
     * Create a flash message.
     *
     * @param $title
     * @param $message
     * @param $type
     * @param string $key
     */
    public function create($title, $message, $type, $key = 'flash_message')
    {

        session()->flash($key, [
            'title'   => $title,
            'message' => $message,
            'type'    => $type
        ]);
    }

    /**
     * Create an information flash message.
     *
     * @param $title
     * @param $message
     */
    public function message($title, $message)
    {

        session()->flash('flash_message', [
            'title'   => $title,
            'message' => $message,
            'type'    => 'info'
        ]);
    }

    /**
     * Create a success flash message.
     *
     * @param $title
     * @param $message
     */
    public function success($title, $message)
    {

        $this->create($title, $message, 'success');

    }

    /**
     * Create an error flash message.
     *
     * @param $title
     * @param $message
     */
    public function error($title, $message)
    {

        $this->create($title, $message, 'error');

    }

    /**
     * Create a warning flash message.
     *
     * @param $title
     * @param $message
     */
    public function warning($title, $message)
    {

        $this->create($title, $message, 'warning');

    }

    /**
     * Create an input flash message.
     *
     * @param $title
     * @param $message
     */
    public function input($title, $message)
    {

        $this->create($title, $message, 'input');

    }

    /**
     * Create an overlay flash message without a timer.
     *
     * @param $title
     * @param $message
     * @param string $level
     */
    public function overlay($title, $message, $level = 'success')
    {

        $this->create($title, $message, $level, 'flash_message_overlay');

    }
}