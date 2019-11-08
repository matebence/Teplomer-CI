<?php
/**
 * Created by PhpStorm.
 * User: ecneb
 * Date: 2019-11-08
 * Time: 10:13
 */

class Control extends CI_Model
{
    public function insert($control = array())
    {
        if ($this->db->insert(strtolower(get_class($this)), $control)) {
            return $this->db->insert_id();
        } else {
            return 0;
        }
    }

    public function update($control_id, $control)
    {
        if (!empty($control)) {
            foreach ($control_id as $id) {
            	$this->db->where('id', $id)->update(strtolower(get_class($this)), $control)? 1 : 0;                
            }
            return 1;
        } else {
            return 0;
        }
    }

    public function delete($control_id)
    {
        return $this->db->delete(strtolower(get_class($this)), array('id' => $control_id)) ? true : false;
    }

    public function get()
    {
        return $this->db
            ->select("id, description, value")
            ->from(strtolower(get_class($this)))
            ->where('value', 1)
            ->get()
            ->row();
    }
}