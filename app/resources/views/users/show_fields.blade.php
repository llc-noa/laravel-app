<!-- User Id Field -->
<div class="col-sm-12">
    {!! Form::label('user_name', 'User Name:') !!}
    <p>{{ $user->name }}</p>
</div>

<!-- email Field -->
<div class="col-sm-12">
    {!! Form::label('email', 'email:') !!}
    <p>{{ $user->email }}</p>
</div>

<!-- icon Field -->
<div class="col-sm-12">
    {!! Form::label('icon', 'icon:') !!}
    <div>
        <p>{{ basename($user->icon) }}</p>
        <img src="{{ asset(Auth::user()->icon) }}"
        class="elevation-2"
        alt="User Image">
    </div>
</div>