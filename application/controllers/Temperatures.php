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
        $this->load->model('Control');
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
            ->set_output(json_encode(array('success' => array('temperature' => $this->Temperature->insert(array(
                'temperature' => $this->input->post("temperature"),
                'humidity' => $this->input->post("humidity")))), 'control' => $this->Control->get())));
    }

    public function update()
    {
        $this->output
            ->set_content_type('application/json')
            ->set_output(json_encode(array('success' => $this->Control->update(array(
                'value' => 0)))));
    }

    public function increase()
    {
        if ($this->Control->get()->value == 0) {
            $this->output
                ->set_content_type('application/json')
                ->set_output(json_encode(array('increased' => $this->Control->update(1, array("value" => 1)))));
        } else {
            $this->output
                ->set_content_type('application/json')
                ->set_output(json_encode(array('increased' => 0)));
        }
    }

    public function decrease()
    {
        if ($this->Control->get()->value == 0) {
            $this->output
                ->set_content_type('application/json')
                ->set_output(json_encode(array('decreased' => $this->Control->update(2, array("value" => 1)))));
        } else {
            $this->output
                ->set_content_type('application/json')
                ->set_output(json_encode(array('decreased' => 0)));
        }
    }
}