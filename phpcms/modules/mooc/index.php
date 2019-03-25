<?php
class index {
    private $db;
    public function __construct()//加载model
    {
        $this->db=pc_base::load_model('mooc_model');
        $this->_userid = param::get_cookie('_userid');
        $this->_username = param::get_cookie('_username');
        $this->_groupid = param::get_cookie('_groupid');
    }
//课程页
    public function cate(){
        $userid=$this->_userid;
        $username=$this->_username;
        $fid=$_GET['fid'];//代表field里面的id所属于的左边分类
//        课程
        $list=$this->db->select(array('fid'=>$fid),'*',20);
        $r=$this->db->query('select * from field');
        $fields = $this->db->fetch_array($r);
//        category表和course表的fid是一个
        $a=$this->db->query('select * from category where fid='.$fid);
        $cates=$this->db->fetch_array($a);
        include template('mooc','cate');
    }
    public function  more(){
        $page=$_GET['page'];
        $fid=$_GET['fid'];
        $data=$this->db->listinfo(array('fid'=>$fid),'',$page);
        echo json_encode($data);
    }
    public function search(){
        //分两种情况。一种是从键盘输入的keyword一种是获取的fid
        $fid=$_GET['fid'];
        if(isset($_POST['q'])){
            $keyword=$_POST['q'];
            $sql = "SELECT * FROM `mooc_course` WHERE `title` LIKE '%".$keyword."%'";
        }else{

            $sql="select * from mooc_course where fid=".$fid;
        }
        $r=$this->db->query($sql);
        $lists=$this->db->fetch_array($r);
        $a=$this->db->query('select * from field');
        $fields=$this->db->fetch_array($a);
        include template('mooc','search');
    }
    public  function  course(){
        $id=$_GET['id'];
        $course=$this->db->get_one(array('id'=>$id));
        $r=$this->db->query('select * from chapters where cid='.$id);
        $chapters=$this->db->fetch_array($r);
        foreach($chapters as $key=>$value){
            $r=$this->db->query('select * from sections where cid='.$value['id']);
            $sections=$this->db->fetch_array($r);
            $chapters[$key]['sections']=$sections;
        }
        include template ('mooc','course');
    }
    public  function  x(){
        $id=$_GET['id'];
        $userid=$this->_userid;
        $sql = "select x.category_id,y.* from course_category as x,mooc_course as y where x.course_id=y.id and category_id=".$id;
        $r=$this->db->query($sql);
        $lists=$this->db->fetch_array($r);
        $sql2 = "select x.name,y.category_id,z.title from category as x,course_category as y,mooc_course as z where x.id=y.category_id and y.course_id=z.id and x.id=".$id;
        $n=$this->db->query($sql2);
        $names=$this->db->fetch_array($n);
        include template('mooc','x');
    }
    public  function s(){
        $cate_id=$_GET['id'];
        $type_id=$_GET['type_id'];
        $order=$_GET['order'];
        $sql = 'select x.category_id,y.* from course_category as x,mooc_course as y where x.course_id=y.id and x.category_id='.$cate_id;
        if($type_id!=='0'){
            $sql=$sql.' and y.id='.$type_id;
        }
        if($order=='1'){
            $sql=$sql.' order by y.create_time';
        }else{
            $sql=$sql.' order by y.view_count';
        }
        $r=$this->db->query($sql);
        $cates=$this->db->fetch_array($r);
        echo json_encode($cates);
    }
    public  function  show(){
        $id=$_GET['id'];//获取课程id
        $r=$this->db->query('select * from chapters where cid='.$id);
        $chapters=$this->db->fetch_array($r);
//        $sql="select y.*,z.title from mooc_course as x,chapters as y,sections as z where x.id=y.cid and y.id=z.cid";
//        $o=$this->db->query($sql);
//        $so=$this->db->fetch_array($o);
        foreach($chapters as $key=>$value){
            $r=$this->db->query('select * from sections where cid='.$value['id']);
            $sections=$this->db->fetch_array($r);
            $chapters[$key]['sections']=$sections;
        }

        include template('mooc','show');
    }
    public function shownei(){
        $id=$_GET['id'];
        $cid=$_GET['cid'];
        $r=$this->db->query('select * from chapters where cid='.$id);
        $chapters=$this->db->fetch_array($r);
        foreach($chapters as $key=>$value){
            $r=$this->db->query('select * from sections where cid='.$value['id']);
            $sections=$this->db->fetch_array($r);
            $chapters[$key]['sections']=$sections;
        }
        $ra=$this->db->query('select * from sections where id='.$cid);
        $sections=$this->db->fetch_array($ra);
        include template('mooc','shownei');
    }
}


//    public function a(){//方法是a.html
//        $list=$this->db->select();//查询
//        include template('mooc','a');//文件名是mooc 但是调用的是a.html(在template下面的mooc)
//    }
//    public  function  insert(){
//        $id=$this->db->insert($_POST,true);
//        if($id){
//            showmessage('插入成功','/index.php?m=mooc&c=course&a=b');
//        }else{
//            showmessage('插入失败','/index.php?m=mooc&c=course&a=b');
//        }
//    }

//    public function test(){
//        $r= $this->db->select(array(),'name,price');
//        $r= $this->db->select(array('name'=>'han'),'name,price','3');
//        $r=$this->db->listinfo(array(),'name',2,1);//页长 ，第几个
//        $r=$this->db->get_one(array('id'=>4),'name,pic');
//        查看别的表中的内容
//        $r=$this->db->query('select * from mooc_category');
//        $c=$this->db->fetch_array($r);
//插入数据
//        $this->db->insert(array('name'=>'abc','pic'=>'a','price'=>'12'));
//        $id=$this->db->insert_id();
//        更新数据
//        $r=$this->db->update(array('name'=>'cccc'),array('id'=>3));
//        删除数据
//        $r=$this->db->delete(array('name'=>'han'));
//        $r=$this->db->count(array('price'=>'12'));
//        数
//        echo '<pre>';
//        print_r($r);
//        echo '</pre>';
//    }
//    public function insert(){
//        $id=$this->db->insert($_POST,true);
//        if($id){
//            showmessage('success','/index.php?m=mooc&c=course&a=b');
//        }
//        else{
//            showmessage('default','/index.php?m=mooc&c=course&a=b');
//        }
//    }
//}