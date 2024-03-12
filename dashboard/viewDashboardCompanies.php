<h2>New Company</h2>

<h2>Testcomp	BE0485 335 485  Belgium	 Supplier	15-03-2024</h2>

<form action="index.php?url=dashboardcompanies/addCompany" method="POST">
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" required><br><br>

    <label for="tva">TVA:</label>
    <input type="text" id="tva" name="tva" required><br><br>

    <label for="country">Country:</label>
    <input type="text" id="country" name="country" required><br><br>

    <label for="type_id">Type:</label>
    <select id="type_id" name="type_id">
        <option value="1">Client</option>
        <option value="2">Supplier</option>
    </select><br><br>

    <input type="submit" value="Submit">
</form>



<?php
if (!empty($fiveCompanies)) {
?>
    <h2>Last companies</h2>
    <table>
        <tr>
            <th>Name</th>
            <th>TVA</th>
            <th>Country</th>
        </tr>
        <?php foreach ($fiveCompanies as $fivecomp): ?>
            <tr>
                <td><?= $fivecomp->getName() ?></td>
                <td><?= $fivecomp->getTva() ?></td>
                <td><?= $fivecomp->getCountry() ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
<?php
}
?>
