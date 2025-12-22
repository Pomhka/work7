<?php

namespace user/work7;


abstract class AbstractNotification implements Notification
{
    protected string $status;
    protected string $timestamp;

   public function __construct()
    {
        $this->status='Не отправлено';
        $this->timestamp = '';
    }

    public function getStatus(): string
    {
        return $this->status . ($this->timestamp ? "в {$this->timestamp}" : '');
    }

    abstract public function send(string $message): string;
    abstract public function getType(): string;
}