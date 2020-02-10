@foreach($myData->users as $user)
    <p>This is user {{$user}}</p>
    <br>
@endforeach

{{$myData->personalData->username}}
<br>
{{$myData->personalData->password}}