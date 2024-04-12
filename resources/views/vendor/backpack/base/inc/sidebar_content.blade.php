{{-- This file is used to store sidebar items, inside the Backpack admin panel --}}
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('dashboard') }}"><i class="la la-home nav-icon"></i> {{ trans('backpack::base.dashboard') }}</a></li>

<li class="nav-item"><a class="nav-link" href="{{ backpack_url('user') }}"><i class="nav-icon la la-question"></i> Users</a></li>
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('category') }}"><i class="nav-icon la la-question"></i> Categories</a></li>
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('averagetime') }}"><i class="nav-icon la la-question"></i> Averagetimes</a></li>
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('numberofplayer') }}"><i class="nav-icon la la-question"></i> Numberofplayers</a></li>
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('game') }}"><i class="nav-icon la la-question"></i> Games</a></li>
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('reservation') }}"><i class="nav-icon la la-question"></i> Reservations</a></li>