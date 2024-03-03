<?php 
if(isset($companies) && is_array($companies) && count($companies) > 0): ?>
    <h2>All companies</h2>
    <table>
        <tr>
            <th>Name</th>
            <th>TVA</th>
            <th>Country</th>
            <th>Type</th>
            <th>Created at</th>
        </tr>
        <?php foreach($companies as $company): ?>
            <tr>
  

                <td><a href="index.php?url=details/<?= $company->getID() ?>"><?= $company->getName() ?></a></td>
                <td><?= $company->getName() ?></td>
                <td><?= $company->getTva() ?></td>
                <td><?= $company->getCountry() ?></td>
                <td><?= $company->getType_name() ?></td>
                <td><?= $company->getCreated_at() ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
<?php else: ?>
    <p>No companies available</p>
<?php endif; ?>

