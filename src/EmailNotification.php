<?php
namespace user/work7;

class EmailNotification extends AbstractNotification
{
   public function send(string $message): string
    {
        $this->status = 'Отправлено';
        $this->timestamp = date('Y-m-d H:i:s');
        return "Email отправлен с таким содержимым: {$message}";
    }

   public function getType(): string
    {
        return 'Email';
    }
}