<?php
pc_base::load_sys_class('model','',0);//访问系统类
class mooc_model extends model{
    public $table_name='course';//表名
    public function __construct()//连接数据库的一些配置
    {
        $this->db_config = pc_base::load_config('database');
        $this->db_setting = 'default';
        parent::__construct();
    }
}