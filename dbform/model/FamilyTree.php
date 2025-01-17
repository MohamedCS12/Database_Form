<?php
require_once 'Database.php';

class FamilyTree {
    public function getFamilyTreeData() {
        $pdo = Database::connect();
        $sql = 'SELECT m.Name, m.DateJoin, SUM(p.Amount) AS PersonalSales, 
               (SELECT SUM(p2.Amount) FROM tbiPurchase p2 
                JOIN tbiMember m2 ON m2.MemberID = p2.MemberID 
                WHERE m2.ParentID = m.MemberID) AS GroupSales 
                FROM tbiMember m 
                LEFT JOIN tbiPurchase p ON m.MemberID = p.MemberID 
                GROUP BY m.MemberID, m.Name, m.DateJoin';
        $result = $pdo->query($sql);
        Database::disconnect();
        return $result->fetchAll(PDO::FETCH_ASSOC);
    }
}
?>
