<table class="table table-striped" id="tabLinks">
    <thead>
        <tr>
            <th class="text-center">Оригинальная ссылка</th>
            <th class="text-center">Короткая ссылка</th>
            <th class="text-center">Клики</th>
        </tr>
    </thead>
    <tbody>
        <?php if (count($links) > 0) foreach ($links as $link) { ?>
            <tr>
                <td class="text-center">
                    <a href="<?= $link['original'] ?>" target="_blank"><?= $link['original'] ?></a>
                </td>
                <td class="text-center">
                    <a href="http://shortlink/<?= $link['small'] ?>" target="_blank">http://shortlink/<?= $link['small'] ?></a>
                </td>
                <td class="text-center"><?= $link['click'] ?></td>
            </tr>
        <?php } ?>
    </tbody>
</table>