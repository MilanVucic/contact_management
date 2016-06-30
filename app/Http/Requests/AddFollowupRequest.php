<?php namespace App\Http\Requests;
use Illuminate\Contracts\Auth\Guard;

class AddFollowupRequest extends Request
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
        return [
        ];
    }
}