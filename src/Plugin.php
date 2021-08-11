<?php

declare(strict_types=1);

namespace AttachmentCreator;

class Plugin
{
    public function __construct()
    {
        if (!is_admin()) return;
    }
}
