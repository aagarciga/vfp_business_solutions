<table>
    <colgroup>
        <col class="col-1">
        <col class="col-2">
    </colgroup>
    <thead>
        <tr>
            <th>Item No.</th>
            <th>Description</th>
        </tr>
    </thead>
    <tfoot>

    </tfoot>
    <tbody>
        <?php $i = 0;?>
        <?php foreach ($Items as $item):?>
            <tr class="item <?php echo ($i++ % 2 == 0)? 'even' : 'odd'?>">
                <td class="item-field"><?php echo trim($item->ITEMNO) ?></td>
                <td class="item-field"><?php echo trim($item->DESCRIP) ?></td>
            </tr>
        <?php endforeach ?>
    </tbody>
</table>
