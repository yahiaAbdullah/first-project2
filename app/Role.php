<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    public function permissions(){
        return $this->belongsToMany(Permission::class) ;
    }

    public function assign(Permission $permissions){
      return $this->permissions()->save($permissions) ;

      //return $this->permissions()->sync($permissions) ;
    }
}
