<?php   namespace web\admin\controller;

class Category extends Common {
    //私有属性
    protected $db;
    //构造方法
    public function __construct()
    {
        parent::__construct();
        $this->db = new \system\model\Category();
    }
    //分类管理首页
    public function index(){
        //获取首页数据
        $data = Data::tree($this->db->get(),'cname');
//        var_dump($data);
        View::with('data',$data)->make();
    }
    //顶级分类添加
    public function add(){
        if (IS_POST){
            //如果添加成功
            if ($this->db->store()){
                message('添加成功','','success');
            }
            //失败的时候错误提示
            message('添加失败','','error');
        }
        View::make();
    }
    //子类添加
    public function addSon(){
        $cid = q('cid',0,'intval');
        if (IS_POST){
            //添加成功
            if ($this->db->store()){
                message('添加成功','','success');
            }
            //添加失败
            message($this->db->getError(),'','error');
        }
        //获取所属分类
        $cateDate = $this->db->where('cid',$cid)->field(['cid','cname'])->first();
//        p($cateDate);
        View::with('cateData',$cateDate)->make();
    }

    //分类编辑
    public function edit(){
        if (IS_POST){
            if ($this->db->edit()){
                message('修改成功','success');
            }
            message('操作失败','error');
        }
        $cid = q('get.cid',0,'intval');
        //获取旧数据
        $oldData = $this->db->where('cid',$cid)->first();
        //交给getCateData方法来完成
        $cateData = $this->db->getCateData($cid);
        //分配数据载入模版
        View::with('oldData',$oldData)->with('cateData',$cateData)->make();
    }
    //删除方法
    public function del(){
        $cid = q('get.cid',0,'intval');
        //查询单条
        $pid = $this->db->where('cid',$cid)->pluck('pid');
        //让子集上位
        $this->db->where('pid',$cid)->update(['pid'=>$pid]);
        //删除当前cid数据
        $this->db->where('cid',$cid)->delete();
        message('删除成功',u('index'),'success');
    }
}