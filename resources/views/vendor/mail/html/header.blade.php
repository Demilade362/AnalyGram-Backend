@props(['url'])
<tr>
<td class="header">
<a href="{{ $url }}" style="display: inline-block;">
@if (trim($slot) === 'Laravel')
<img src="https://drive.google.com/file/d/19Sm3kPbSKx8eXnZc7nwgaXA9oFRfMJ70/view?usp=sharing" class="logo" alt="Analygram Logo">
@else
{{ $slot }}
@endif
</a>
</td>
</tr>
