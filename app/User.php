<?php

namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

class User extends Model implements AuthenticatableContract, CanResetPasswordContract
{
    use Authenticatable, CanResetPassword;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'users';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'email', 'password'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = ['password', 'remember_token'];

    // user has many posts
  	public function posts()
  	{
  		return $this->hasMany('App\Posts','author_id');
  	}

  	public function canPost()
  	{
  		$user_class = $this->user_class;
  		if($user_class == 'author' || $user_class == 'moderator' || $user_class == 'editor' || $user_class == 'admin' )
  		{
  			return true;
  		}
  		return false;
  	}

  	public function isAdmin()
  	{
  		$user_class = $this->user_class;
  		if($user_class == 'admin')
  		{
  			return true;
  		}
  		return false;
  	}

  	public function isEditor()
  	{
  		$user_class = $this->user_class;
  		if($user_class == 'editor')
  		{
  			return true;
  		}
  		return false;
  	}

  	public function isModerator()
  	{
  		$user_class = $this->user_class;
  		if($user_class == 'moderator')
  		{
  			return true;
  		}
  		return false;
  	}

  	public function isAuthor()
  	{
  		$user_class = $this->user_class;
  		if($user_class == 'author')
  		{
  			return true;
  		}
  		return false;
  	}

  	public function isContributor()
  	{
  		$user_class = $this->user_class;
  		if($user_class == 'contributor')
  		{
  			return true;
  		}
  		return false;
  	}

}
