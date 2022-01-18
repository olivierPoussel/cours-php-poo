<form action="index.php?controller=user&task=search" method="post">
    <input name="search" type="text" placeholder="email rechercher">
    <input type="submit" value="Rechercher">
</form>

<?php if (count($result) > 0) : ?>
    <h2>Résultat de la recherche</h2>
    <table>
        <thead>
            <tr>
                <th>id</th>
                <th>first name</th>
                <th>last name</th>
                <th>email</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($result as $user) : ?>
                <tr>
                    <td><?= $user['id'] ?></td>
                    <td><?= $user['first_name'] ?></td>
                    <td><?= $user['last_name'] ?></td>
                    <td><?= $user['email'] ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

<?php endif ?>