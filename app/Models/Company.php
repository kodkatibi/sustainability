<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Company extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $guarded = [];

    protected $appends = [
        'voteResult'
    ];


    public function votes()
    {
        return $this->hasMany(Vote::class, 'company_id');
    }


    function getVoteResultAttribute(){
        return round($this->votes()->avg('rate'), 1);
    }


    public function Policies()
    {
        return $this->hasMany(Policy::class,'company_id');
    }

}
