        <p>
            Welcome <strong><?php echo $UserName?></strong>
        </p>

        <table>
            <colgroup>
                <col class="col-1">
                <col class="col-2">
                <col class="col-3">
                <col class="col-4">
            </colgroup>
            <thead>
            <tr>
                <th>User ID</th>
                <th>User Code</th>
                <th>Username</th>
                <th>Password</th>
            </tr>
            </thead>
            <tfoot>

            </tfoot>
            <tbody>
            <?php $i = 0;?>
            <?php foreach ($Users as $user):?>
                <tr class="item <?php echo ($i++ % 2 == 0)? 'even' : 'odd'?>">
                    <td class="item-field"><?php echo trim($user->getUserid()) ?></td>
                    <td class="item-field"><?php echo trim($user->getUsercode()) ?></td>
                    <td class="item-field"><?php echo trim($user->getUsername()) ?></td>
                    <td class="item-field"><?php echo trim($user->getUserpass()) ?></td>
                </tr>
            <?php endforeach ?>
            </tbody>
        </table>

        <hr/>

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
                        <td class="item-field"><?php echo trim($item->getItemno()) ?></td>
                        <td class="item-field"><?php echo trim($item->getDescrip()) ?></td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>

        <footer>
            <hr />
            <div class="powered">&copy; 2014. VFP Business Solutions, LLC</div>
        </footer>
