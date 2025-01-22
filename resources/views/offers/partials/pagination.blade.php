<ul class="pagination">
    <li class="page-item @if ($offers->onFirstPage()) disabled @endif">
        <a class="page-link" href="{{ $offers->previousPageUrl() }}">Previous</a>
    </li>

    @foreach ($offers->links() as $link)
        <li class="page-item @if ($link->active) active @endif">
            <a class="page-link" href="{{ $link->url }}">{{ $link->label }}</a>
        </li>
    @endforeach

    <li class="page-item @if (!$offers->hasMorePages()) disabled @endif">
        <a class="page-link" href="{{ $offers->nextPageUrl() }}">Next</a>
    </li>
</ul>
