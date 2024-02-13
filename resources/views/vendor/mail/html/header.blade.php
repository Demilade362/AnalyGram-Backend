@props(['url'])
<tr>
<td class="header">
<a href="{{ $url }}" style="display: inline-block;">
{{-- @if (trim($slot) === 'Laravel') --}}
<img src="https://analygram-6d0a5.web.app/hadderlogo.ico" class="logo" alt="Analygram Logo">
{{-- @else
{{ $slot }}
@endif --}}
</a>
</td>
</tr>
