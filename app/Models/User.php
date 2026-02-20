<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use App\Enums\UserStatus;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\user as Authenticatable;

/**
 * Class User
 *
 * @property int $id
 * @property string $first_name
 * @property string $last_name
 * @property string $mobile
 * @property string $email
 * @property string $password
 * @property int $status
 * @property Carbon $created_at
 * @property Carbon $updated_at
 *
 * @package App\Models
 */
class User extends Authenticatable
{
	protected $table = 'users';
	public static $snakeAttributes = false;

	protected $casts = [
		'status' => UserStatus::class
	];

	protected $hidden = [
		'password'
	];

	protected $fillable = [
		'first_name',
		'last_name',
		'mobile',
        'email',
		'password',
		'status'
	];
}
