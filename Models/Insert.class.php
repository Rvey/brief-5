<?php
class Insert extends  Database {

    public function __construct($final){


            $sql = "INSERT INTO book(room_name,room_type,room_view,pension_name,pension_type,total,adult_nbr,adult_choice,kids_nbr,babys_nbr,unique_id,user_id,check_in,check_out) value (:room_name,:room_type,:room_view,:pension_name,:pension_type,:total,:adult_nbr,:adult_choice,:kids_nbr,:babys_nbr,:unique_id,:user_id,:check_in,:check_out)";
            $query = $this->connect()->prepare($sql);
            $query->execute($final);



    }
}