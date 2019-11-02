<?php
/**
 * Created by PhpStorm.
 * User: ecneb
 * Date: 2019-11-02
 * Time: 11:15
 */

class Temperatures extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->load->model('Temperature');
    }

    public function index()
    {
        $this->output
            ->set_content_type('application/json')
            ->set_output(json_encode($this->Temperature->get()));
    }

    public function insert()
    {
        $this->output
            ->set_content_type('application/json')
            ->set_output(json_encode(array('success' => $this->Temperature->insert(array(
                'temperature' => $this->input->post("temperature"),
                'humidity' => $this->input->post("humidity")
            )))));
    }

    public function update()
    {
        $this->output
            ->set_content_type('application/json')
            ->set_output(json_encode(array('success' => $this->Temperature->update($this->input->post("temperature_id"), array(
                'temperature' => $this->input->post("temperature"),
                'humidity' => $this->input->post("humidity")
            )))));
    }

    public function delete($temperature_id)
    {
        $this->output
            ->set_content_type('application/json')
            ->set_output(json_encode(array('success' => $this->Temperature->delete($temperature_id))));
    }

    public function increase(){
        $this->output
            ->set_content_type('application/json')
            ->set_output(json_encode(array('increased' => 1)));
    }

    public function decrease(){
        $this->output
            ->set_content_type('application/json')
            ->set_output(json_encode(array('decreased' => 1)));
    }
}