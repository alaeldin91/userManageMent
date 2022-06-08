<?php

namespace App\Rules;

use App\Models\Catogry;
use Illuminate\Contracts\Validation\Rule;

class RestCatogryValidator implements Rule
{
    private $restoId;
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct($restoId)
    {
        $this->restoId= $restoId;
        //
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        //
       // logger($attribute);
        //logger($value);

        if(Catogry::where('name',$value) ->where('resto_id',$this->restoId)->first()){
            return true;
        }
        return false;
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'this catogry for this restro doesnot exist.';
    }
}
