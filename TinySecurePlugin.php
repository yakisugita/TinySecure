<?php
declare(strict_types=1);

namespace SampleConfig;

use BaserCore\BcPlugin;

class SampleConfigPlugin extends BcPlugin
{
    public function initialize(): void
    {
        parent::initialize();
        // baserCMS のプラグインとして機能するための基本設定
    }
}
