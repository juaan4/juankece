<div>
<nav class="nav flex-column">
@foreach ($list as $row)
        <a class="nav-link" href="#">
        {{$row['label']}}
        </a>
@endforeach
</nav>
</div>