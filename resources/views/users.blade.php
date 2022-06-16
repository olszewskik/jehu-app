<h1>{{$heading}}</h1>
@foreach ($usersList as $user)
<li>
    {{$user['id']}} {{$user['name']}}
</li>    
@endforeach
