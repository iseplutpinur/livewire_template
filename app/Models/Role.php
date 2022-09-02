<?php

/**
 * @Author: Bayu Rifki Alghifari
 * @Date:   2022-02-09 17:23:41
 * @Last Modified by:   Bayu Rifki Alghifari
 * @Last Modified time: 2022-02-09 17:24:29
 */


namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $fillable = ['name', 'guard_name'];
}
