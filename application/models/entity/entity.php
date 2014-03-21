<?php
/**
 * Created by PhpStorm.
 * User: Vietlt
 * Date: 3/3/14
 * Time: 6:07 PM
 */

class entity
{
    protected $_data = array();


//    public function getData($name) {
//        die($name);
//        return $this->_data[$name];
//    }
//    public function __call($method, $args) {
//        if(substr($method,0,3) == "get") {
//
//            return $this->getData(substr($method,3,strlen($method)));
//        }
//
//    }

    public function __call($method, $args)
    {
        switch (substr($method, 0, 3)) {
            case 'get' :
                $key = $this->_underscore(substr($method, 3));
                $data = $this->getData($key, isset($args[0]) ? $args[0] : null);
                return $data;

            case 'set' :
                $key = $this->_underscore(substr($method, 3));
                $result = $this->setData($key, isset($args[0]) ? $args[0] : null);
                return $result;
        }
    }

    public function __get($var)
    {
        $var = $this->_underscore($var);
        return $this->getData($var);
    }

    public function __set($var, $value)
    {
        $var = $this->_underscore($var);
        $this->setData($var, $value);
    }

    protected function _underscore($name)
    {
        $result = strtolower(preg_replace('/(.)([A-Z])/', "$1_$2", $name));
        return $result;
    }

    public function setData($key, $value = null)
    {
        $this->_data[$key] = $value;
        return $this;
    }
    public function getData($key)
    {
        if(!isset($this->_data[$key])) return null;
        return $this->_data[$key];
    }
}