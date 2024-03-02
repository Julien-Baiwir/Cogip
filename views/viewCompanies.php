<?php
if(isset($companies) && is_array($companies) && count($companies) > 0) {
    echo "<h1>All companies</h1>";
    echo "<table>";
    echo "<tr>";
    echo "<th>Name</th>";
    echo "<th>TVA</th>";
    echo "<th>Country</th>";
    echo "<th>Type</th>";
    echo "<th>Created at</th>";
    echo "</tr>";
    foreach($companies as $company) {
?>
    <tr>
        <td><?= $company->getName() ?></td>
        <td><?= $company->getTva() ?></td>
        <td><?= $company->getCountry() ?></td>
        <td><?= $company->getType_name() ?></td>
        <td><?= $company->getCreated_at() ?></td>
    </tr>
<?php
        }
    echo "</table>";
}
?>
