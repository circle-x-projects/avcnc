
<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">
        <li class="nav-item">
            <a class="nav-link " href="{{ route('teamlead.dashboard') }}">
                <i class="bi bi-stack"></i>
                <span style="font-size: 11pt; margin-top: 2px">Dashboard</span>
            </a>
        </li>
        <!-- End Dashboard Menu -->

        <li class="nav-heading">Team Management</li>

        <li class="nav-item">
            <a class="nav-link collapsed" href="{{ asset('nice-admin') }}/pages-blank.html">
                <i class="bi bi-send-exclamation"></i> <!-- Active -->
                {{-- <i class="bi bi-send-exclamation"></i> <!-- Non Active --> --}}
                <span style="font-size: 11pt;">Reminder Notes</span>
            </a>
        </li><!-- End Blank Page Nav -->

    </ul>

</aside>