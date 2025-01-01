<div class="pagetitle">
    <h1>Hi, {{ auth()->user()->name }}</h1>
    <nav>
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="
            @if (\Auth::user()->role_access === 'teamlead')
                {{ route('teamlead.dashboard'); }}
            @elseif (\Auth::user()->role_access === 'engineer')
                {{ route('engineer.dashboard'); }}
            @endif
            ">Home</a></li>
        <li class="breadcrumb-item active">
            @if (\Route::is('teamlead.checklist') == true)
                Checklist Weekly
            @elseif(\Route::is('teamlead.dashboard') == true)
                Dashboard
            @elseif(\Route::is('teamlead.users') == true)
                Data User
            @endif
        </li>
    </ol>
    </nav>
</div>