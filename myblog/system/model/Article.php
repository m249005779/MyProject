<?php namespace system\model;

use hdphp\Model\Model;

class Article extends Model{

	//数据表
	protected $table = "article";

	//完整表名
	protected $full = false;

	//自动验证
	protected $validate=[
		//['字段名','验证方法','提示信息',验证条件,验证时间]
        ['title','required','请输入文章标题',self::MUST_VALIDATE,self::MODEL_BOTH],
        ['author','required','请输入文章作者',self::MUST_VALIDATE,self::MODEL_BOTH],
        ['category_cid','required','请选择所属分类',self::MUST_VALIDATE,self::MODEL_BOTH],
        ['thumb','required','请上传缩略图',self::MUST_VALIDATE,self::MODEL_BOTH],
        ['digest','required','请输入文章摘要',self::MUST_VALIDATE,self::MODEL_BOTH],
	];

	//自动完成
	protected $auto=[
		//['字段名','处理方法','方法类型',验证条件,验证时机]
        ['sendtime','time','function',self::MUST_AUTO,self::MODEL_INSERT],
        ['user_uid','userUid','method',self::MUST_AUTO,self::MODEL_INSERT],
        ['updatetime','time','function',self::MUST_VALIDATE,self::MODEL_UPDATE],
	];

	//自动过滤
    protected $filter=[
        //[表单字段名,过滤条件,处理时间]
    ];

	//时间操作,需要表中存在created_at,updated_at字段
	protected $timestamps=false;


	//禁止插入的字段
	protected $denyInsertFields = [];

	//禁止更新的字段
	protected $denyUpdateFields = [];

	//前置方法 比如: _before_add 为添加前执行的方法
	protected function _before_add(){}
	protected function _before_delete(){}
	protected function _before_save(&$data){}

	protected function _after_add(){}
	protected function _after_delete(){}
	protected function _after_save(){}
    //添加功能
    public function store(){
        //文章表验证
        if (!$this->create()) return false;
        //文章数据表验证
        $articleDataModel = new \system\model\Article_data();
        if (!$articleDataModel->create()){
            //获取到$articleDataModel的错误存储到article中
            $this->error = $articleDataModel->getError();
            return false;
        }
        //验证表单是否选择了tag_id
        if (!isset($_POST['tag_tid'])){
            $this->error = '请选择标签';
            return false;
        }
        //添加文章表
        $aid = $this->add();
        //添加文章数据表article_data
        $articleDataModel->data['article_aid'] = $aid;
        $articleDataModel->add();
        //添加文章中间表
        $articleTagModel = new \system\model\Article_tag();
        foreach ($_POST['tag_tid'] as $v){
            $data = [
                'article_aid'=>$aid,
                'tag_tid'=>$v,
            ];
            $articleTagModel->add($data);
        }
        return true;
    }
    //userUid $auto 使用，自动处理用户uid
    public function userUid(){
        return $_SESSION['admin']['uid'];
    }
    //获取首页所有数据
    //$is_recycle获取不在回收站的数据
    public function getAll($is_recycle){
        //分页
        $page = Page::row(10)->make($this->where('is_recycle',$is_recycle)->count());
        $data = $this->where('is_recycle',$is_recycle)->limit(Page::limit())->orderBy('aid','asc')->get();
//        p($data);
        //通过循环把分类名称存入$data中
        foreach($data as $k=>$v){
            //通过循环把分类名称字段存入到category_cid中
            $data[$k]['category_cid'] = Db::table('category')->where('cid',$v['category_cid'])->pluck('cname');
        }
        return ['page'=>$page,'data'=>$data];
//        p($data);
    }
    //文章修改功能
    public function edit(){
        //文章表验证，和添加验证一样
        if (!$this->create()) return false;
        //文章数据表验证
        $articleDataModel = new \system\model\Article_data();
        if (!$articleDataModel->create()){
            //获取到$articleDataModel的错误存储到article中
            $this->error = $articleDataModel->getError();
            return false;
        }
        //文章中间表验证
        if (!isset($_POST['tag_tid'])){
            $this->error = '请选择标签';
            return false;
        }
        //文章表的修改，如果没有主键的隐藏域不能修改
        $this->save();
        //文章数据表修改
        $data = [
            'keywords'=>$_POST['keywords'],
            'des'=>$_POST['des'],
            'content'=>$_POST['content'],
        ];
//        p($data);exit;
        $articleDataModel->where('article_aid',$_POST['aid'])->update($data);
//        p($articleDataModel);exit;
        //删除原来标签
        $articleTagModel = new \system\model\Article_tag();
        $articleTagModel->where('article_aid',$_POST['aid'])->delete();
        //添加标签
        foreach ($_POST['tag_tid'] as $k=>$v){
            $data = [
                'article_aid'=>$_POST['aid'],
                'tag_tid'=>$v,
            ];
            $articleTagModel->add($data);
        }
        return true;
    }
    //从回收站删除
    public function del(){
        //删除文章表
        $this->db->where('aid',$_POST['aid'])->delete();
        //删除文章数据表
        $articleDataModel = new \system\model\Article_data();
        $articleDataModel->where('article_aid',$_POST['aid'])->delete();
        //删除文章标签中间表
        $articleTagModel = new \system\model\Article_tag();
        $articleTagModel->where('article_aid',$_POST['aid'])->delete();

        return true;
    }
}