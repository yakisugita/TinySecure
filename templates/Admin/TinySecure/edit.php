<?= $this->BcAdmin->title('設定の編集') ?>

<!-- フォーム開始 -->
<?= $this->BcAdminForm->create($config) ?>

<table class="form-table">
    <tr>
        <th>キー</th>
        <td><?= $this->BcAdminForm->control('name', ['readonly' => true]) ?></td> <!-- 設定キー（変更不可） -->
    </tr>
    <tr>
        <th>値</th>
        <td><?= $this->BcAdminForm->control('value') ?></td> <!-- 設定値（変更可能） -->
    </tr>
</table>

<!-- 送信ボタン -->
<div class="submit">
    <?= $this->BcAdminForm->button('保存', ['class' => 'button']) ?>
</div>

<!-- フォーム終了 -->
<?= $this->BcAdminForm->end() ?>
