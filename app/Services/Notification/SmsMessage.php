<?php

namespace App\Services\Notification;

class SmsMessage
{
    protected string $gate;

    protected string $message;

    protected string $to;

    protected bool $dry = false;

    public function message($message = ''): self
    {
        $this->message = $message;

        return $this;
    }

    public function to($to): self
    {
        $this->to = $to;

        return $this;
    }

    public function gate(string $gate = 'default'): static
    {
        $this->gate = $gate;

        return $this;
    }

    public function send(): void
    {
    }

    public function dryRun(): self
    {
        $this->dry = true;

        return $this;
    }
}
