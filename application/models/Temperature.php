<?php
/**
 * Created by PhpStorm.
 * User: ecneb
 * Date: 2019-11-02
 * Time: 11:15
 */

class Temperature extends CI_Model
{
    public function insert($temperature = array())
    {
        if ($this->db->insert(strtolower(get_class($this)), $temperature)) {
            return $this->db->insert_id();
        } else {
            return 0;
        }
    }

    public function update($temperature_id, $temperature)
    {
        if (!empty($temperature)) {
            return $this->db->where('id', $temperature_id)->update(strtolower(get_class($this)), $temperature);
        } else {
            return false;
        }
    }

    public function delete($temperature_id)
    {
        return $this->db->delete(strtolower(get_class($this)), array('id' => $temperature_id)) ? true : false;
    }

    public function get()
    {
        return $this->db
            ->select("id, temperature, humidity, timestamp")
            ->from(strtolower(get_class($this)))
            ->order_by('timestamp','desc')
            ->limit(1)
            ->get()
            ->row();
    }
}