<tr>
<td class="header">
<a href="{{ $url }}" style="display: inline-block;">
@if (trim($slot) !== 'Laravel')
<img src="https://archfxglobe.com/images/fxGlobe.gif" class="logo" alt="Logo">
@else
{{ $slot }}
@endif
</a>
</td>
</tr>
