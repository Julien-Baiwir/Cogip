<?php
class TypesManager extends Model {
    public function getTypes() {
        return $this->getAll('types', 'Types');
    }
}
