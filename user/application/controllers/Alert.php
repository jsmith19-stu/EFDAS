<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Alert extends BaseController{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Alert_model');
    } 

    /*
     * Listing of alerts
     */
    function index()
    {
        $data['alerts'] = $this->Alert_model->get_all_alerts();
        
        $data['_view'] = 'alert/index';
        $this->load->view('layouts/main',$data);
    }

    /*
     * Adding a new alert
     */
    function add()
    {   
        if(isset($_POST) && count($_POST) > 0)     
        {   
            $params = array(
				'owner_id' => $this->input->post('owner_id'),
				'device_id' => $this->input->post('device_id'),
				'risk_level' => $this->input->post('risk_level'),
				'alert_date' => $this->input->post('alert_date'),
				'alert_time' => $this->input->post('alert_time'),
            );
            
            $alert_id = $this->Alert_model->add_alert($params);
            redirect('alert/index');
        }
        else
        {            
            $data['_view'] = 'alert/add';
            $this->load->view('layouts/main',$data);
        }
    }  

    /*
     * Editing a alert
     */
    function edit($alert_id)
    {   
        // check if the alert exists before trying to edit it
        $data['alert'] = $this->Alert_model->get_alert($alert_id);
        
        if(isset($data['alert']['alert_id']))
        {
            if(isset($_POST) && count($_POST) > 0)     
            {   
                $params = array(
					'owner_id' => $this->input->post('owner_id'),
					'device_id' => $this->input->post('device_id'),
					'risk_level' => $this->input->post('risk_level'),
					'alert_date' => $this->input->post('alert_date'),
					'alert_time' => $this->input->post('alert_time'),
                );

                $this->Alert_model->update_alert($alert_id,$params);            
                redirect('alert/index');
            }
            else
            {
                $data['_view'] = 'alert/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The alert you are trying to edit does not exist.');
    } 

    /*
     * Deleting alert
     */
    function remove($alert_id)
    {
        $alert = $this->Alert_model->get_alert($alert_id);

        // check if the alert exists before trying to delete it
        if(isset($alert['alert_id']))
        {
            $this->Alert_model->delete_alert($alert_id);
            redirect('alert/index');
        }
        else
            show_error('The alert you are trying to delete does not exist.');
    }
    
}