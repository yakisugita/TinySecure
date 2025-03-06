<?php
declare(strict_types=1);

use Migrations\AbstractMigration;

class CreateTinySecure extends AbstractMigration
{
    public function change(): void
    {
        // sample_configs テーブルを作成
        $table = $this->table('tinysecure_configs');

        // 'name' カラム: 設定のキー（例: site_title など）
        $table->addColumn('name', 'string', ['limit' => 255, 'null' => false]);

        // 'value' カラム: 設定値（例: "My Website" など）
        $table->addColumn('value', 'text', ['null' => true]);

        // 'created' カラム: 作成日時（デフォルトで現在時刻）
        $table->addColumn('created', 'datetime', ['default' => 'CURRENT_TIMESTAMP']);

        // 'modified' カラム: 更新日時（デフォルトで現在時刻、更新時に自動更新）
        $table->addColumn('modified', 'datetime', ['default' => 'CURRENT_TIMESTAMP', 'update' => 'CURRENT_TIMESTAMP']);

        // テーブルを作成
        $table->create();
    }
}
