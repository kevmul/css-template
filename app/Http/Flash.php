<?php

class Flash
{

    public $title;
    public $message;
    public $level;
    public $important = false;

    public function __construct($title, $message)
    {
        $this->title   = $title;
        $this->message = $message;
    }


    public function create()
    {
        session()->flash('flash_message', [
            'title'     => $this->title,
            'body'      => $this->message,
            'level'     => $this->level,
            'important' => $this->important
        ]);
        return $this;
    }


    public function message()
    {
        $this->create($this->title, $this->message);
        return $this;
    }

    public function primary()
    {
        $this->create($this->level = 'primary');
        return $this;
    }

    public function secondary()
    {
        $this->create($this->level = 'secondary');
        return $this;
    }

    public function tertiary()
    {
        $this->create($this->level = 'tertiary');
        return $this;
    }


    public function success()
    {
        $this->create($this->level = 'success');
        return $this;
    }

    public function error()
    {
        $this->create($this->level = 'error');
        return $this;
    }

    public function info()
    {
        $this->create($this->level = 'info');
        return $this;
    }

    public function warning()
    {
        $this->create($this->level = 'warning');
        return $this;
    }

    public function important()
    {
        $this->create($this->important = true);
        return $this;
    }
}
