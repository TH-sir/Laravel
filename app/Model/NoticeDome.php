<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Validator;

class NoticeDome extends Model {

    /**
     * 定义表名称
     * @var type 
     */
    protected $table = 'notice_classify';

    /**
     * 是否维护时间戳
     * @var type 
     */
    public $timestamps = true;

    /**
     * 模型中日期字段的存储格式
     * @var string
     */
    protected $dateFormat = 'U';

    /**
     * 数据的校验
     */
    public function validator($data)
    {
        return Validator::make($data, [
                    'name' => 'required|string|max:100',
                    'brief' => 'required|string|max:255',
        ]);
    }

}
