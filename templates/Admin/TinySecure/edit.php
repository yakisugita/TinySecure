<?= $this->BcAdmin->title('設定の編集') ?>
<?= $this->BcAdminForm->create($config) ?>
    <table class="form-table">
        <tr>
            <th>キー</th>
            <td><?= $this->BcAdminForm->control('name', ['readonly' => true]) ?></td>
        </tr>
        <tr>
            <th>値</th>
            <td><?= $this->BcAdminForm->control('value') ?></td>
        </tr>
    </table>
    <div class="submit">
        <?= $this->BcAdminForm->button('保存', ['class' => 'button']) ?>
    </div>
<?= $this->BcAdminForm->end() ?>