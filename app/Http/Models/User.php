<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;
use \Exception;
use \Log;
class User extends Model
{
    //

    protected $table ="users";


    /**
     * Get user information based on the email
     * @param $email
     *
     */
    public function getUserByEmail($email){

        try{
            return self::where('email',$email)->first();

        }catch(Exception $e){

            Log::error($e->getMessage());
            return NULL;
        }
    }
}
