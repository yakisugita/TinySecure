<?= $this->BcAdmin->title('設定一覧') ?>
<table class="list-table">
    <thead>
        <tr>
            <th>ID</th>
            <th>キー</th>
            <th>値</th>
            <th>操作</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($configs as $config): ?>
        <tr>
            <td><?= h($config->id) ?></td>
            <td><?= h($config->name) ?></td>
            <td><?= h($config->value) ?></td>
            <td><?= $this->Html->link('編集', ['action' => 'edit', $config->id]) ?></td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>