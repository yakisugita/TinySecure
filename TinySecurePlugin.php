<?php
declare(strict_types=1);

namespace TinySecure;

use BaserCore\BcPlugin;

class TinySecurePlugin extends BcPlugin
{
    public function initialize(): void
    {
        parent::initialize();
        // baserCMS のプラグインとして機能するための基本設定
    }
}
