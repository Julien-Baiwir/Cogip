<?php 
if(isset($contacts) && is_array($contacts) && count($contacts) > 0): ?>
   <h2>All contacts</h2>
   <table>
        <tr>
            <th>Name</th>
            <th>Phone</th>
            <th>Email</th>
            <th>Company</th>
            <th>Created at</th>
        </tr>
        <?php foreach($contacts as $contact): ?>
            <tr>
                <td><?= $contact->getName() ?></td>
                <td><?= $contact->getPhone() ?></td>
                <td><?= $contact->getEmail() ?></td>
                <td><?= $contact->getCompanyName() ?></td>
                <td><?= $contact->getCreated_at() ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
<?php else: ?>
    <p>No contacts available</p>
<?php endif; ?>
