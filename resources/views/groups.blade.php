<h1>{{$heading}}</h1>
@foreach ($groupsList as $group)
<li>
    {{$group['id']}} {{$group['name']}}
</li>    
@endforeach