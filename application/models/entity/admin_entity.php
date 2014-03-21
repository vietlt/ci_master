<?php
class admin_entity extends entity
{
    public function getAccount() {
        return '<b>[CI-Master]</b> '.$this->getData('account');
    }
}