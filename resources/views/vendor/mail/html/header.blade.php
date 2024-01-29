@props(['url'])
<tr>
<td class="header">
<a href="{{ $url }}" style="display: inline-block;">
@if (trim($slot) === 'Laravel')
<img src="https://i.imgur.com/fnJ96IE.jpg" class="logo" alt="Analygram Logo">
@else
{{ $slot }}
@endif
</a>
</td>
</tr>
