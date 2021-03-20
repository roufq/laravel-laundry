<div class="left side-menu">
    <div class="sidebar-inner slimscrollleft">
        <div class="user-details">
            <div class="text-center">
                <img src="{{ asset('assets/images/IMG20190608134739.jpg')}}" alt="" class="img-circle">
            </div>
            <div class="user-info">
                <div class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">{{ Auth::user()->name }}</a>
                    <ul class="dropdown-menu">
                        <li><a href="javascript:void(0)"> Profile</a></li>
                        <li><a href="javascript:void(0)"> Settings</a></li>
                        <li><a href="javascript:void(0)"> Lock screen</a></li>
                        <li class="divider"></li>
                        <li>
                            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                        document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </li>
                    </ul>
                </div>

                <p class="text-muted m-0"><i class="fa fa-dot-circle-o text-success"></i> Online</p>
            </div>
        </div>
        <!--- Divider -->
        <div id="sidebar-menu">
            <?php

            use App\User;

            $user = User::where('id', Auth::User()->id)->first();
            ?>
            <ul>
                <li>
                    <a href="/home" class="waves-effect"><i class="ti-home"></i><span> Dashboard </span></a>
                </li>
                @if($user->hasAnyRole(['admin','kasir']))
                <li>
                    <a href="{{route('admin.member.index')}}" class="waves-effect"><i class="mdi mdi-account-card-details"></i><span> member </span></a>
                </li>
                @endif
                @if($user->hasAnyRole(['admin']))
                <li>
                    <a href="{{route('admin.user.index')}}" class="waves-effect"><i class="mdi mdi-account-multiple"></i><span> user </span></a>
                </li>
                @endif
                @if($user->hasAnyRole(['admin']))
                <li>
                    <a href="{{route('admin.outlet.index')}}" class="waves-effect"><i class="mdi mdi-store"></i><span> outlet </span></a>
                </li>
                @endif
                @if($user->hasAnyRole(['admin','kasir']))
                <li>
                    <a href="{{route('admin.paket.index')}}" class="waves-effect"><i class="mdi mdi-package-variant-closed"></i><span> paket </span></a>
                </li>
                @endif
                @if($user->hasAnyRole(['admin','kasir']))
                <li>
                    <a href="{{route('admin.transaksi.index')}}" class="waves-effect"><i class="mdi mdi-cash-multiple"></i><span> Transaksi </span></a>
                </li>
                @endif
                @if($user->hasAnyRole(['admin','outlet']))
                <li>
                    <a href="{{route('admin.laporan.index')}}" class="waves-effect"><i class="mdi mdi-file-document"></i><span> laporan </span></a>
                </li>
                @endif
            </ul>
        </div>
        <div class="clearfix"></div>
    </div> <!-- end sidebarinner -->
</div>