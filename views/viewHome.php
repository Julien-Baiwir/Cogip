<?php
if(isset($fiveCompanies) && is_array($fiveCompanies) && count($fiveCompanies) > 0) {
    echo "<table>";
    echo "<tr>";
    echo "<th>Name</th>";
    echo "<th>TVA</th>";
    echo "<th>Country</th>";
 
    echo "<th>Created at</th>";
    echo "</tr>";
    foreach($fiveCompanies as $fivecomp) {
?>
    <tr>
        <td><?= $fivecomp->getName() ?></td>
        <td><?= $fivecomp->getTva() ?></td>
        <td><?= $fivecomp->getCountry() ?></td>
        <td><?= $fivecomp->getCreated_at() ?></td>
    </tr>
<?php
        }
    echo "</table>";
}
?>




