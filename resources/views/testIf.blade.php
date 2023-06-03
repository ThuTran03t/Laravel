@php $gio = gmdate("H", time()+3600*7); @endphp
@if ($gio<12)
    Chào buổi sáng
@elseif ($gio<18)
    Chào buổi chiều