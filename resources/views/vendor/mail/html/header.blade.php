<tr>
<td class="header">
<a href="{{ $url }}" style="display: inline-block;">
@if (trim($slot) !== 'Laravel')
<img src="https://archfxglobe.com/images/fxGlobe.gif" style="width:30px;" class="logo" alt="Logo">
@else
{{ $slot }}
@endif
</a>
</td>
</tr>
