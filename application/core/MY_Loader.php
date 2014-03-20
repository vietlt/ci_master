<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class MY_Loader extends CI_Loader
{
    public function block_view($view, $vars = array() , $return = false)
    {
        $CI = & get_instance();
        if ($CI->config->item('current_area') == 'frontend') {
            if (file_exists(APPPATH . '/views/frontend/' . $CI->config->item('frontend_template_dir') . DIRECTORY_SEPARATOR . $view . EXT)) {
                $view = 'frontend' . DIRECTORY_SEPARATOR . $CI->config->item('frontend_template_dir') . DIRECTORY_SEPARATOR . $view;
            } else {
                $view = 'frontend' . DIRECTORY_SEPARATOR . 'default' . DIRECTORY_SEPARATOR . $view;
            }
        }
        if ($CI->config->item('current_area') == 'backend') {
            if (file_exists(APPPATH . '/views/backend/' . $CI->config->item('backend_template_dir') . DIRECTORY_SEPARATOR . $view . EXT)) {
                $view = 'backend' . DIRECTORY_SEPARATOR . $CI->config->item('backend_template_dir') . DIRECTORY_SEPARATOR . $view;
            } else {
                $view = 'backend' . DIRECTORY_SEPARATOR . 'default' . DIRECTORY_SEPARATOR . $view;
            }
        }
        return $this->_ci_load(array(
            '_ci_view' => $view,
            '_ci_vars' => $this->_ci_object_to_array($vars) ,
            '_ci_return' => $return
        ));
    }
    public function view($view, $vars = array() , $return = false)
    {
        $CI = & get_instance();
        if ($CI->config->item('current_area') == 'frontend') {
            $vars['layout_content'] = $this->block_view($view, $vars, true);
            return $this->_ci_load(array(
                '_ci_view' => 'frontend/' . $CI->config->item('frontend_template_dir') . '/layout/' . $CI->config->item('frontend_layout') ,
                '_ci_vars' => $this->_ci_object_to_array($vars) ,
                '_ci_return' => $return
            ));
        } 

        if ($CI->config->item('current_area') == 'backend') {
            $vars['backend_content'] = $this->block_view($view, $vars, true);
            return $this->_ci_load(array(
                '_ci_view' => 'backend/' . $CI->config->item('backend_template_dir') . '/layout/' . $CI->config->item('backend_layout') ,
                '_ci_vars' => $this->_ci_object_to_array($vars) ,
                '_ci_return' => $return
            ));
        } 

        
        else {
            return $this->_ci_load(array(
                '_ci_view' => $view,
                '_ci_vars' => $this->_ci_object_to_array($vars) ,
                '_ci_return' => $return
            ));
        }
    }

    public function default_view($view, $vars = array(), $return = FALSE)
    {
        return $this->_ci_load(array('_ci_view' => $view, '_ci_vars' => $this->_ci_object_to_array($vars), '_ci_return' => $return));
    }
}
