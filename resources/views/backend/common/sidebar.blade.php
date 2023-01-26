@php
$prefix = Request::route()->getPrefix();
$route = Route::current()->getName();
@endphp
<div class="d-flex flex-column align-items-stretch flex-shrink-0 bg-white" style="width: 200px;">
    <div class="list-group list-group-flush border-bottom scrollarea">

        <a href="{{ route('backend.pages.index') }}" class="list-group-item list-group-item-action py-3 lh-tight @if($prefix == '/backend' && $route == 'backend.pages.index') active @else @endif">
            <div class="d-flex w-100 align-items-center justify-content-between">
                <strong class="mb-1">Pages</strong>
            </div>
        </a>

        <a href="{{ route('backend.content.index') }}" class="list-group-item list-group-item-action py-3 lh-tight @if($prefix == '/backend' && $route == 'backend.content.index') active @else @endif">
            <div class="d-flex w-100 align-items-center justify-content-between">
                <strong class="mb-1">Contents</strong>
            </div>
        </a>

        <a href="{{ route('backend.setting.index') }}" class="list-group-item list-group-item-action py-3 lh-tight @if($prefix == '/backend' && $route == 'backend.setting.index') active @else @endif">
            <div class="d-flex w-100 align-items-center justify-content-between">
                <strong class="mb-1">Settings</strong>
            </div>
        </a>

        <a href="{{ route('backend.contact.index') }}" class="list-group-item list-group-item-action py-3 lh-tight @if($prefix == '/backend' && $route == 'backend.contact.index') active @else @endif">
            <div class="d-flex w-100 align-items-center justify-content-between">
                <strong class="mb-1">Messages</strong>
            </div>
        </a>

    </div>
</div>