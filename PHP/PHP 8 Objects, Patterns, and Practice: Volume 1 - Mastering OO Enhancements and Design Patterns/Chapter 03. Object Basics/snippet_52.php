<?php

public function getSummaryLine(): string
{
    $base = "{$this->title} ( {$this->producerMainName}, ";
    $base .= "{$this->producerFirstName} )";
    if ($this->type == 'book') {
        $base .= ": page count - {$this->numPages}";
    } elseif ($this->type == 'record') {
        $base .= ": playing time - {$this->playLength}";
    }
    return $base;
}
