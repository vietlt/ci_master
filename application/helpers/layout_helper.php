<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if ( ! function_exists('css_url'))
{
	function css_url($uri = '')
	{
		$CI =& get_instance();
		return $CI->config->base_url('/resource/frontend/'.$CI->config->item('frontend_skin_dir').'/css/'.$uri);
	}
}

if ( ! function_exists('js_url'))
{
	function js_url($uri = '')
	{
		$CI =& get_instance();
		return $CI->config->base_url('/resource/frontend/'.$CI->config->item('frontend_skin_dir').'/js/'.$uri);
	}
}

if (! function_exists('backend_css_url'))
{
	function backend_css_url()
	{
		$CI =& get_instance();
		return $CI->config->base_url('/resource/backend/'.$CI->config->item('backend_skin_dir').'/css/'.$uri);
	}
}

if (! function_exists('backend_js_url'))
{
	function backend_js_url()
	{
		$CI =& get_instance();
		return $CI->config->base_url('/resource/backend/'.$CI->config->item('backend_skin_dir').'/js/'.$uri);
	}
}

if (! function_exists('backend_img_url'))
{
	function backend_img_url()
	{
		$CI =& get_instance();
		return $CI->config->base_url('/resource/backend/'.$CI->config->item('backend_skin_dir').'/img/'.$uri);
	}
}