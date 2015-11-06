<?php 

namespace App\Http\Requests\Auth;

use Response;
use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest {

    /**
     * The URI to redirect to if validation fails.
     *
     * @var string
     */
    protected $redirect = 'auth/login'; 


    public function rules()
    {
        return [
            'username' => 'required',
            'password' => 'required'
        ];
    }

    public function authorize()
    {
        return true;
    }

}