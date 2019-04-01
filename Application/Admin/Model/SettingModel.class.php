<?php
namespace Admin\Model;
use Think\Model;

class SettingModel extends Model
{
    public function getAll()
    {
        $data=$this->select();
        $result=array();
        foreach($data as $row)
        {
            $result[$row['key']]=$row['value'];
        }
        return $result;
    }

    public function getContent()
    {
        $result=$this->select();
        return $result;
    }
}
?>