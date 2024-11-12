<?php

namespace Bouhaddou\ToastBhd;

class Toast
{
    public function success($message)
    {
        return $this->toast('success', $message);
    }

    public function error($message)
    {
        return $this->toast('error', $message);
    }

    public function warning($message)
    {
        return $this->toast('warning', $message);
    }

    public function info($message)
    {
        return $this->toast('info', $message);
    }

    private function toast($type, $message)
    {
        // Le type peut être success, error, warning, ou info
        session()->flash('toast', ['type' => $type, 'message' => $message]);

        return $this;
    }
}
