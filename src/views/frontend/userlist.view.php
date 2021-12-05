<pre>
<table class="table table-striped">
    <thead class="thead-dark">
        <tr>
        <th scope="col">Name</th>
        <th scope="col">Email</th>
        <th scope="col">Admin</th>
        <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($users as $user) :?>
            <tr>
                <td><?= $id = $user->getId();?></td>
                <td><?= $user->getName();?></td>
                <td><?= $user->getEmail();?></td>
                <td><input type="checkbox"></td>
                <td><button class="btn btn-link" ><a href="http://localhost:5555/deleteUser/<?= $user->getId(); ?>">Delete User</a></button></td>
            </tr>
        <?php  endforeach; ?>
    </tbody>
  </table>
</pre> 
 