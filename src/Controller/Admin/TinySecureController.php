<?php
declare(strict_types=1);

namespace TinySecure\Controller\Admin;

use BaserCore\Controller\Admin\BcAdminAppController;
use Cake\Event\EventInterface;

class TinySecureController extends BcAdminAppController
{
    public function initialize(): void
    {
        parent::initialize();

        // SampleConfigs モデルをロード（DBとのやり取りに使用）
        // $this->loadComponent('TinySecure.TinySecure');

        // 管理画面のレイアウトを設定
        $this->viewBuilder()->setLayout('admin');
    }

    /**
     * 設定一覧を表示
     */
    public function index()
    {
        // すべての設定を取得
        $configs = $this->TinySecure->find()->all();

        // ビューにデータを渡す
        $this->set(compact('configs'));
    }

    /**
     * 設定の編集
     */
    public function edit($id = null)
    {
        // 指定されたIDの設定を取得
        $config = $this->TinySecure->get($id);

        // フォームが送信された場合
        if ($this->request->is(['post', 'put'])) {
            // 送信されたデータをエンティティに適用
            $config = $this->TinySecure->patchEntity($config, $this->request->getData());

            // データを保存
            if ($this->TinySecure->save($config)) {
                $this->Flash->success('設定を保存しました。');
                return $this->redirect(['action' => 'index']);
            }

            // 保存に失敗した場合
            $this->Flash->error('保存に失敗しました。');
        }

        // ビューにデータを渡す
        $this->set(compact('config'));
    }
}
