<?php
declare(strict_types=1);

namespace TinySecure\Model\Table;

use Cake\ORM\Table;

class TinySecureTable extends Table
{
    public function initialize(array $config): void
    {
        parent::initialize($config);

        // このモデルが操作するテーブル名を 'sample_configs' に設定
        $this->setTable('tinysecure_configs');

        // プライマリキー（主キー）を 'id' に設定
        $this->setPrimaryKey('id');

        // 'created' および 'modified' カラムを自動管理するためのビヘイビアを追加
        $this->addBehavior('Timestamp');
    }
}
