<div class="sidebar-inner slimscroll">
    <div id="sidebar-menu" class="sidebar-menu">
        <ul>
            <li class="menu-title">Main</li>
            <li class="active">
                <a href="{{ route('admin.dashboard') }}"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a>
            </li>
            <li>
                <a href="{{ route('campaign.index') }}"><i class="fa fa-hospital-o"></i> <span>Campaign</span></a>
            </li>
            <li>
                <a href="{{ route('volunteer.index') }}"><i class="fa fa-user"></i> <span>Volunteer</span></a>
            </li>
            <li>
                <a href="{{ route('donor.index') }}"><i class="fa fa-universal-access"></i> <span>Donor</span></a>
            </li>
            <li class="submenu">
                <a href="#"><i class="fa fa-user"></i> <span> Users </span> <span class="menu-arrow"></span></a>
                <ul style="display: none;">
                    <li><a href="#">User List</a></li>
                    <li><a href="#">Register User</a></li>

                </ul>
            </li>

        </ul>
    </div>
</div>
