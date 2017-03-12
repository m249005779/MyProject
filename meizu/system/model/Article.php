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
		['digest','required','请填写文章摘要',self::MUST_VALIDATE,self::MODEL_BOTH],
	];

	//自动完成
	protected $auto=[
		//['字段名','处理方法','方法类型',验证条件,验证时机]
		['sendtime','time','function',self::MUST_AUTO,self::MODEL_INSERT],
		['user_uid','userUid','method',self::MUST_AUTO,self::MODEL_INSERT]
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
	//自动验证时候使用，自动处理用户id
	public function userUid()
	{
		return $_SESSION['admin']['uid'];
	}
	//获取所有数据
	public function getAll($is_recycle)
	{
		//分页
		$page = Page::row(7)->make($this->where('is_recycle',$is_recycle)->count());
		$data = $this->where('is_recycle',$is_recycle)->limit(Page::limit())->orderBy('aid','desc')->get();
		foreach($data as $k=>$v)
		{
			$data[$k]['category_cid'] = Db::table('category')->where('cid',$v['category_cid'])->pluck('cname');
		}
		return ['page'=>$page,'data'=>$data];
	}

	public function store()
	{
		//执行文章表验证
		if (!$this->create()) return false;
		//文章数据表验证article_data
		$articleDataModel = new \system\model\Article_data();
		if(!$articleDataModel->create())
		{
			//将article_data里面错误信息获取到，存入到article表的error属性中
			//这样就可以被文章表article的getError()方法获取到
			$this->error = $articleDataModel->getError();
			return false;
		}
		//验证标签是否有选择[tag_tid]
		if(!isset($_POST['tag_tid'])){
			$this->error = '请选择标签';return false;
		}
		//添加文章表article
		$aid = $this->add();
		//添加文章数据表article_data
		$articleDataModel->data['article_aid'] = $aid;
		$articleDataModel->add();
		//添加文章标签中间表
		$articleTagModel = new \system\model\Article_tag();
		foreach($_POST['tag_tid'] as $k=>$v)
		{
			$data = [
				'article_aid'=>$aid,
				'tag_tid'=>$v,
			];
			$articleTagModel->add($data);
		}
		return true;
	}
	public function edit()
	{
		if(!$this->create()) return false;
		//文章数据表验证article_data
		$articleDataModel = new \system\model\Article_data();
		if(!$articleDataModel->create())
		{
			$this->error = $articleDataModel->getError();
			return false;
		}
		//执行文章标签中间表的验证
		if(!isset($_POST['tag_tid']))
		{
			$this->error = '请选择文章标签';
			return false;
		}
		//执行文章表修改，注意隐藏与的aid主键
		$this->save();
		//执行文章数据表修改
		$data = [
			'keywords'=>$_POST['keywords'],
			'des'=>$_POST['des'],
			'content'=>$_POST['content'],
		];
		$articleDataModel->where('article_aid',$_POST['aid'])->update($data);
		//执行文章标签中间表的修改
		//把当前文章原来的标签删除
		$articleTagModel = new \system\model\Article_tag();
		$articleTagModel->where('article_aid',$_POST['aid'])->delete();
		//执行添加
		foreach($_POST['tag_tid'] as $k=>$v)
		{
			$data = [
				'article_aid'=>$_POST['aid'],
				'tag_tid'=>$v,
			];
			$articleTagModel->add($data);
		}
		return true;
	}
	//回收站删除
	public function del()
	{
		//删除文章表
		$this->db->where('aid',$_POST['aid'])->delete();
		//删除文章表
		$this->db->where('aid',$_POST['aid'])->delete();
		//删除文章标签中间表
		$articleTagModel = new \system\model\Article_tag();
		$articleTagModel->where('article_aid',$_POST['aid'])->delete();
		return true;
	}

}