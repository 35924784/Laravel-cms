<?php
/**
 * Laravel-cms - cms based on laravel
 *
 * @category  Laravel-cms
 * @package   Laravel
 * @author    Qiangzi <35924784@qq.com>
 * @date      2018/06/06 09:08:00
 * @copyright Copyright 2018 LaraCMS
 * @license   https://opensource.org/licenses/MIT
 * @github    https://github.com/35924784/laravel-cms
 * @link      https://www.laracms.cn
 * @version   Release 1.0
 */

namespace Qiangzi\LaravelCms\Models;

/**
 * 区块模型
 *
 * Class Block
 * @package Qiangzi\LaravelCms\Models
 */
class Block extends Model
{
    protected $fillable = ['id','type', 'object_id', 'title', 'template', 'icon', 'more_title', 'more_link', 'content','created_op','updated_op'];

    public function getRouteKeyName()
    {
        return 'id';
    }
    
    /**
     * 清除缓存
     *
     * @param $object_id
     *
     * @return bool
     */
    public static function clearCache($object_id){
        $key = 'block_cache_'.$object_id;
    
        \Cache::forget($key);
    
        return true;
    }
}
