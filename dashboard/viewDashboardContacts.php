<h2>new contact</h2>

<?php
// Contacts
if (!empty($fivecontacts)) {
?>
    <h2>All contacts</h2>
    <table>
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
        </tr>
        <?php foreach ($fivecontacts as $contact): ?>
            <tr>
                <td><?= $contact->getName() ?></td>
                <td><?= $contact->getEmail() ?></td>
                <td><?= $contact->getPhone() ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
<?php
} else {
    echo "<p>No contacts available</p>";
}