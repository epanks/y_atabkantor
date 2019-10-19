{{ Form::model($user, ['url' => ['/user', $user->id]]) }}
   {{ Form::text('name') }}
   <button>save</button>
{{ Form::close() }}