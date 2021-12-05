<pre>
    <table class="table table-striped">
        <thead class="thead-dark">
            <tr>
                <td><?= $id = $user->getId();?></td>
                <td><?= $user->getName();?></td>
                <td><?= $user->getEmail();?></td>
                <td><input type="checkbox"></td>
                <td><button class="btn btn-link" ><a href="http://localhost:5555/deleteUser/<?= $user->getId(); ?>">Delete User</a></button></td>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($users as $user) :?>
                <tr>
                    <td><?= $user->getName();?></td>
                    <td><?= $user->getEmail();?></td>
                    <td><input type="checkbox"></td>
                    <td><button class="btn btn-link">Delete User</button></td>
                </tr>
            <?php  endforeach; ?>
        </tbody>
    </table>
</pre> 
 