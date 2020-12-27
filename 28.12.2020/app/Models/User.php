<?php


namespace App\Models;


use App\Core\Model;

/**
 * @property  $username
 * @property  $firstname
 * @property  $lastname
 * @property  $birthday
 * @property  $role
 *
 */
class User extends Model
{
    protected $password;
}