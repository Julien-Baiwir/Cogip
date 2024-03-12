
<form action="index.php?url=dashboardcontacts/addContact" method="POST">
  <h2>Add Contact</h2>

  <label for="name">Name:</label>
  <input type="text" id="name" name="name" required><br><br>

  <label for="email">Email:</label>
  <input type="email" id="email" name="email" required><br><br>

  <label for="phone">Phone Number:</label>
  <input type="tel" id="phone" name="phone" required><br><br>

  <label for="company_id">Company:</label>
  <select id="company_id" name="company_id" required>
    <option value="">-- Select Company --</option>

    <?php
      $companies = getCompanyName(); 

      if (!empty($companies)) {
        foreach ($companies as $company) {
          echo "<option value='" . $company['id'] . "'>" . $company['name'] . "</option>";
        }
      }
    ?>
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


