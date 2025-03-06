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
            <td><?= h($config->id) ?></td> <!-- IDを表示 -->
            <td><?= h($config->name) ?></td> <!-- 設定のキーを表示 -->
            <td><?= h($config->value) ?></td> <!-- 設定の値を表示 -->
            <td><?= $this->Html->link('編集', ['action' => 'edit', $config->id]) ?></td> <!-- 編集ページへのリンク -->
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>
