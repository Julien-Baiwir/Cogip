
<h2>new contact</h2>

<h2>Rita Wilson	 rita.wilson@belgalol.com  	666-666</h2>

<form action="index.php?url=dashboardcontacts/addContact" method="POST">
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" required><br><br>

    <label for="phone">Phone:</label>
    <input type="text" id="phone" name="phone" required><br><br>

    <label for="email">Email:</label>
    <input type="text" id="email" name="email" required><br><br>

    <label for="company_id">Type:</label>
    <select id="company_id" name="company_id">
        <option value="">Select a company</option>
        <?php foreach($contacts as $contact): ?>
            <option value="<?= $contact->getCompanyId() ?>"><?= $contact->getCompanyName() ?></option>
        <?php endforeach; ?>
    </select><br><br>

    <input type="submit" value="Submit">
</form>


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