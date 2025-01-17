<?php
class FamilyTreeView {
    public static function render($data) {
        echo '<!DOCTYPE html>';
        echo '<html lang="en">';
        echo '<head>';
        echo '<meta charset="UTF-8">';
        echo '<meta name="viewport" content="width=device-width, initial-scale=1.0">';
        echo '<title>Family Tree Display</title>';
        echo '<link rel="stylesheet" href="styles.css">'; // Ensure the path to your CSS file is correct
        echo '</head>';
        echo '<body>';
        echo '<h1>Family Tree Display</h1>';
        echo '<ul>';
        foreach ($data as $row) {
            echo '<li>';
            echo '<span class="detail">Name: ' . htmlspecialchars($row['Name']) . '</span>';
            echo '<span class="detail">Joined: ' . htmlspecialchars($row['DateJoin']) . '</span>';
            echo '<span class="detail">Personal Sales: $' . htmlspecialchars(number_format((float)($row['PersonalSales']), 2, '.', '')) . '</span>';
            echo '<span class="detail">Group Sales: $' . htmlspecialchars(number_format((float)($row['GroupSales']), 2, '.', '')) . '</span>';
            echo '</li>';
        }
        echo '</ul>';
        echo '</body>';
        echo '</html>';
    }
}
?>
