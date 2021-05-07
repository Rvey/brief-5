<?php
class Pension extends Database{

    public function get_pension_price($pension){
        $req = "SELECT pension_price FROM pension where pension_name = ?";
        $query = $this->connect()->prepare($req);
        $query->execute([$pension]);
        $result =  $query->fetch();
        return $result['pension_price'];
    }
}