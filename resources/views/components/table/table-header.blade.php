<tr>
    @foreach ($headerNameArray as $name)
        <th>@lang($name)</th>
    @endforeach
    @if ($showActions)
        <th>Actions</th>
@endif
</tr>