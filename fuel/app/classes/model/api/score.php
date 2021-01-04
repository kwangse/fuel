<?php

class Model_Api_Score extends Model
{
    public function get_data()
    {
        $sql = 'select * from sss_contract_assigned_discount';
        $query = DB::query($sql);
        $result = $query->execute();
        $resarr = $result->as_array();
        return $resarr;
    }
}
