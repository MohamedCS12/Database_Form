<?php
require_once __DIR__ . '/../model/FamilyTree.php';  // Correct path to the Model
require_once __DIR__ . '/../view/FamilyTreeView.php';  // Correct path to the View

class FamilyTreeController {
    private $familyTreeModel;

    public function __construct() {
        $this->familyTreeModel = new FamilyTree();
    }

    public function show() {
        $data = $this->familyTreeModel->getFamilyTreeData();
        FamilyTreeView::render($data);
    }
}
?>
