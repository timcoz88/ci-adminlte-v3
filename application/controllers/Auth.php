<?php
#===================================================|
# Please DO NOT modify this information :			|
#---------------------------------------------------|
# @Author 		: Susantokun
# @Date 		: 2018-05-25T05:18:17+07:00
# @Email 		: susantokun.com@gmail.com
# @Project 		: CodeIgniter
# @Filename 	: Auth.php
# @Instagram 	: susantokun
# @Website 		: http://www.susantokun.com
# @Youtube 		: http://youtube.com/susantokun
# @Last modified time: 2018-05-25T06:57:45+07:00
#===================================================|

defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function index()
    {
        $this->load->view('login');
    }

    public function login()
    {
        redirect('dashboard1');
    }
}
