<?php namespace App\Http\Requests;

use Illuminate\Contracts\Auth\Guard;

class AddContactRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @param Guard $guard
     *
     * @return bool
     */
    public function authorize(Guard $guard)
    {
        //Since you asked for no authentication
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return ['name' => 'required',
                'nickname' => 'required',
                'date_met' => 'required',
                'notes' => 'required',
                'preferred_contact_method' => 'required',
                'email' => 'required',
                'phone' => 'required',
        ];
    }
}