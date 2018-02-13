<?php

namespace Models;

use Illuminate\Database\Eloquent\Model;

class Clause extends Model
{
    protected $table = 'zz_group_module';

    /* Relazioni Eloquent */

    public function groups()
    {
        return $this->hasMany(Group::class, 'idgruppo');
    }

    public function module()
    {
        return $this->belongsTo(Module::class, 'idmodule');
    }

    public function getClauseAttribute($value)
    {
        return Module::replacePlaceholder($value);
    }
}