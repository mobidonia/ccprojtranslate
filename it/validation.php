<?php

return array (
  'accepted' => ':attribute deve essere accettato.',
  'active_url' => 'The :attribute is not a valid URL.',
  'after' => ':attribute deve essere una data dopo il :date.',
  'after_or_equal' => ':attribute deve essere una data uguale o precedente il :date.',
  'alpha' => ':attribute deve contenere solo lettere.',
  'alpha_dash' => ':attribute deve contenere lettere, numeri, trattino alto e trattino basso.',
  'alpha_num' => ':attribute deve contenere lettere e numeri.',
  'array' => ':attribute deve essere un array.',
  'attributes' => 
  array (
  ),
  'before' => ':attribute deve essere una data prima del :date.',
  'before_or_equal' => ':attribute deve essere una prima o uguale a :date.',
  'between' => 
  array (
    'array' => ':attribute deve essere fra :min e :max articoli.',
    'file' => ':attribute devere essere fra :min e :max kilobytes.',
    'numeric' => ':attribute deve essere fra :min e :max.',
    'string' => ':attribute deve contenere fra :min e :max caratteri.',
  ),
  'boolean' => 'The :attribute field must be true or false.',
  'confirmed' => 'The :attribute confirmation does not match.',
  'custom' => 
  array (
    'address_id' => 
    array (
      'required' => 'Please select your address',
    ),
    'dinein_table_id' => 
    array (
      'required' => 'Per favore selziona il tuo tavolo',
    ),
    'general_payment_error_action' => 
    array (
      'required' => 'The payment attempt failed. If you are system administrator, please check the issue in the payment provider.',
    ),
    'link_payment_error_action' => 
    array (
      'required' => 'Link based payment method not found',
    ),
    'mollie_error_action' => 
    array (
      'required' => 'Error on obtaining Payment Link.',
    ),
    'order_price' => 
    array (
      'min' => 'Order minimum is :min. Please add few more items in cart',
    ),
    'paypal_payment_approval_missing' => 
    array (
      'required' => 'We where unable to obtain paypal payment link.',
    ),
    'paypal_payment_error_action' => 
    array (
      'required' => 'The payment attempt failed because additional action is required before it can be completed',
    ),
    'paystack_error_action' => 
    array (
      'required' => 'Error on communication with PayStack',
    ),
    'stripe_payment_error_action' => 
    array (
      'required' => 'The payment attempt failed because additional action is required before it can be completed',
    ),
    'stripe_payment_failure' => 
    array (
      'required' => 'The payment attempt failed for various other reasons, such as being out of available funds. Please check your provided data.',
    ),
  ),
  'date' => 'The :attribute is not a valid date.',
  'date_equals' => 'The :attribute must be a date equal to :date.',
  'date_format' => 'The :attribute does not match the format :format.',
  'different' => 'The :attribute and :other must be different.',
  'digits' => 'The :attribute must be :digits digits.',
  'digits_between' => 'The :attribute must be between :min and :max digits.',
  'dimensions' => 'The :attribute has invalid image dimensions.',
  'distinct' => 'The :attribute field has a duplicate value.',
  'email' => 'The :attribute must be a valid email address.',
  'ends_with' => 'The :attribute must end with one of the following: :values.',
  'exists' => 'The selected :attribute is invalid.',
  'file' => 'The :attribute must be a file.',
  'filled' => 'The :attribute field must have a value.',
  'gt' => 
  array (
    'array' => 'The :attribute must have more than :value items.',
    'file' => 'The :attribute must be greater than :value kilobytes.',
    'numeric' => 'The :attribute must be greater than :value.',
    'string' => 'The :attribute must be greater than :value characters.',
  ),
  'gte' => 
  array (
    'array' => 'The :attribute must have :value items or more.',
    'file' => 'The :attribute must be greater than or equal :value kilobytes.',
    'numeric' => 'The :attribute must be greater than or equal :value.',
    'string' => 'The :attribute must be greater than or equal :value characters.',
  ),
  'image' => 'The :attribute must be an image.',
  'in' => 'The selected :attribute is invalid.',
  'in_array' => 'The :attribute field does not exist in :other.',
  'integer' => 'The :attribute must be an integer.',
  'ip' => 'The :attribute must be a valid IP address.',
  'ipv4' => 'The :attribute must be a valid IPv4 address.',
  'ipv6' => 'The :attribute must be a valid IPv6 address.',
  'json' => 'The :attribute must be a valid JSON string.',
  'lt' => 
  array (
    'array' => 'The :attribute must have less than :value items.',
    'file' => 'The :attribute must be less than :value kilobytes.',
    'numeric' => 'The :attribute must be less than :value.',
    'string' => 'The :attribute must be less than :value characters.',
  ),
  'lte' => 
  array (
    'array' => 'The :attribute must not have more than :value items.',
    'file' => 'The :attribute must be less than or equal :value kilobytes.',
    'numeric' => 'The :attribute must be less than or equal :value.',
    'string' => 'The :attribute must be less than or equal :value characters.',
  ),
  'max' => 
  array (
    'array' => 'The :attribute may not have more than :max items.',
    'file' => 'The :attribute may not be greater than :max kilobytes.',
    'numeric' => 'The :attribute may not be greater than :max.',
    'string' => 'The :attribute may not be greater than :max characters.',
  ),
  'mimes' => 'The :attribute must be a file of type: :values.',
  'mimetypes' => 'The :attribute must be a file of type: :values.',
  'min' => 
  array (
    'array' => 'The :attribute must have at least :min items.',
    'file' => 'The :attribute must be at least :min kilobytes.',
    'numeric' => 'The :attribute must be at least :min.',
    'string' => 'The :attribute must be at least :min characters.',
  ),
  'multiple_of' => 'The :attribute must be a multiple of :value',
  'not_in' => 'The selected :attribute is invalid.',
  'not_regex' => 'The :attribute format is invalid.',
  'numeric' => 'The :attribute must be a number.',
  'password' => 'The password is incorrect.',
  'present' => 'The :attribute field must be present.',
  'regex' => 'The :attribute format is invalid.',
  'required' => 'The :attribute field is required.',
  'required_if' => 'The :attribute field is required when :other is :value.',
  'required_unless' => 'The :attribute field is required unless :other is in :values.',
  'required_with' => 'The :attribute field is required when :values is present.',
  'required_with_all' => 'The :attribute field is required when :values are present.',
  'required_without' => 'The :attribute field is required when :values is not present.',
  'required_without_all' => 'The :attribute field is required when none of :values are present.',
  'same' => 'The :attribute and :other must match.',
  'size' => 
  array (
    'array' => 'The :attribute must contain :size items.',
    'file' => 'The :attribute must be :size kilobytes.',
    'numeric' => 'The :attribute must be :size.',
    'string' => 'The :attribute must be :size characters.',
  ),
  'starts_with' => 'The :attribute must start with one of the following: :values.',
  'string' => 'The :attribute must be a string.',
  'timezone' => 'The :attribute must be a valid zone.',
  'unique' => 'The :attribute has already been taken.',
  'uploaded' => 'The :attribute failed to upload.',
  'url' => 'The :attribute format is invalid.',
  'uuid' => 'The :attribute must be a valid UUID.',
);
