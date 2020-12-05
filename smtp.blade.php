{!! Form::textField('settings[domain]', __('Domain'), \Arr::get($settings ?? [], 'domain')) !!}
{!! Form::textField('settings[port]', __('Port'), \Arr::get($settings ?? [], 'port')) !!}
{!! Form::textField('settings[encryption]', __('Encryption'), \Arr::get($settings ?? [], 'encryption')) !!}
{!! Form::textField('settings[username]', __('Username'), \Arr::get($settings ?? [], 'username')) !!}
{!! Form::passwordField('settings[password]', __('Password'), \Arr::get($settings ?? [], 'password')) !!}
