<?php
namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class PassportNumber implements Rule
{
    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        // Define your validation logic here
        return preg_match('/^[A-Z0-9]{6,9}$/i', $value);
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'The :attribute is not a valid passport number.';
    }
}
