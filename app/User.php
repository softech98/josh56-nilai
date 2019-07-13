<?php namespace App;
use Cartalyst\Sentinel\Users\EloquentUser;
use Illuminate\Database\Eloquent\SoftDeletes;
use Cviebrock\EloquentTaggable\Taggable;

class User extends EloquentUser
{
    /**
	 * The database table used by the model.
	 *
	 * @var string
	 */

	protected $table = 'users';
	public static $jenis_kelamin = ['Pria' => 'Pria', 'Wanita' => 'Wanita'];
	/**
	 * The attributes to be fillable from the model.
	 *
	 * A dirty hack to allow fields to be fillable by calling empty fillable array
	 *
	 * @var array
	 */
    use Taggable;

	protected $fillable = [
        'email',
        'guru_id',
        'username',
        'password',
        'nama',
        'permissions',
        'gender',
        'pic',
    ];

    protected $loginNames = ['email', 'username'];
	protected $guarded = ['id'];
	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = ['password', 'remember_token'];

	/**
	* To allow soft deletes
	*/
	// use SoftDeletes;

    // protected $dates = ['deleted_at'];

    protected $appends = ['full_name'];
    public function getFullNameAttribute()
    {
        return str_limit($this->nama, 30);
    }
   
    public function gurus()
	{
    	return $this->hasOne('App\Guru');
    }

}
