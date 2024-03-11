<?php

//Invoices
if(isset($fiveInvoices) && is_array($fiveInvoices) && count($fiveInvoices) > 0) {
    echo "<h1>All invoices</h1>";
    echo "<table>";
    echo "<tr>";
    echo "<th>Invoice number</th>";
    echo "<th>Due dates</th>";
    echo "<th>Company</th>";
    echo "<th>Created at</th>";
    echo "</tr>";
    foreach($fiveInvoices as $invoice) {
?>
    <tr>
        <td><?= $invoice->getRef() ?></td>
        <td><?= $invoice->getUpdate_at() ?></td>
        <td><?= $invoice->getCompany_name() ?></td>
        <td><?= $invoice->getCreated_at() ?></td>
    </tr>
<?php
    }
    echo "</table>";
}
//Contacts
if (!empty($fivecontacts)) {
    echo "<h2>All contacts</h2>";
    echo "<table>";
    echo "<tr>";
    echo "<th>Name</th>";
    echo "<th>Email</th>";
    echo "<th>Phone</th>";
    echo "<th>Company</th>";
    echo "<th>Created at</th>";
    echo "</tr>";

    foreach ($fivecontacts as $contact) {
        echo "<tr>";
        echo "<td>" . $contact->getName() . "</td>";
        echo "<td>" . $contact->getEmail() . "</td>";
        echo "<td>" . $contact->getPhone() . "</td>";
        echo "<td>" . $contact->getCompanyName() . "</td>";
        echo "<td>" . $contact->getCreatedAt() . "</td>";
        echo "</tr>";
    }

    echo "</table>";
} else {
    echo "<p>No contacts available</p>";
}



//Companies
if(isset($fiveCompanies) && is_array($fiveCompanies) && count($fiveCompanies) > 0) {
    echo "<h1>All companies</h1>";
    echo "<table>";
    echo "<tr>";
    echo "<th>Name</th>";
    echo "<th>TVA</th>";
    echo "<th>Country</th>";
    echo "<th>Type</th>";
    echo "<th>Created at</th>";
    echo "</tr>";
    foreach($fiveCompanies as $fivecomp) {
?>
    <tr>
        <td><?= $fivecomp->getName() ?></td>
        <td><?= $fivecomp->getTva() ?></td>
        <td><?= $fivecomp->getCountry() ?></td>
        <td><?= $fivecomp->getType_name() ?></td>
        <td><?= $fivecomp->getCreated_at() ?></td>
    </tr>
<?php
        }
    echo "</table>";
}
?>





