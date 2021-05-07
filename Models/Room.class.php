<?php
class Room extends Database {

    public function get_room_price($room_name){
        $req = "Select room_price FROM room where room_name = ?";
        $query = $this->connect()->prepare($req) ;
        $query->execute([$room_name]);
        $result = $query->fetch();
        return $result['room_price'];
    }

    public function get_room_view_price($room_view){
        $req = "SELECT view_price FROM room_view where view_name = ?";
        $query = $this->connect()->prepare($req);
        $query->execute([$room_view]);
        $result =  $query->fetch();
        return $result['view_price'];
    }
}