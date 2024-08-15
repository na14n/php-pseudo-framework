<?php

//  ==========================================
//       This is the Forms Validator 
// ===========================================
// 
//  This is where you validate the forms posted
//  on your controllers.
// 
//   Each Form should have their own Form Class.
//  
//   This sample form will give you overview on
//   how to use this class.
//   
//   You are generally be editing only the
//   __construct by specifying the attributes passed
//   and the corresponding validator function to
//   validate the attribute.
//
//   This example validates the string using the
//   string function in the Validator class.
//
//   Just import the Form Validator class and
//   instantiate the validate function that will
//   return a boolean that corresponds with the
//   validation result.
//
//   $form = SampelForm::validate($attributes = [
//    'string' => $_POST['body'],
//   ]);
//
//   the form varialbe will now be either true or
//   false depending on the posted body. Make sure
//   to use the appropriate keys when passing the
//   attributes.
//   



namespace Http\Forms;

use Core\ValidationException;
use Core\Validator;

class SampleForm
{
    protected $errors = [];

    public function __construct(public array $attributes)
    {
        if (!Validator::string($attributes['string'])) {
            $this->errors['string'] = 'There are errors with your string!';
        }
    }

    public static function validate($attributes)
    {
        $instance = new static($attributes);

        return $instance->failed() ? $instance->throw() : $instance;
    }

    public function throw()
    {
        ValidationException::throw($this->errors(), $this->attributes);
    }

    public function failed()
    {
        return count($this->errors());
    }

    public function errors()
    {
        return $this->errors;
    }

    public function error($field, $message)
    {
        $this->errors[$field] = $message;

        return $this;
    }
}
