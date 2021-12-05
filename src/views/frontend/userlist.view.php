<pre>
    <table class="table table-striped">
        <tbody>
            <?php foreach ($users as $user) :?>
                <tr>
                    <td><?= $user->getName();?></td>
                    <td><?= $user->getEmail();?></td>
                    <td><input type="checkbox"></td>
                    <td><button class="btn btn-link"><a href="deleteUser/<?= $user->getId() ?>">Delete User</a></button></td>
                </tr>
            <?php  endforeach; ?>
        </tbody>
    </table>
</pre> 
 