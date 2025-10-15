    		<div id="sidebar" class="app-sidebar">
    			<!-- BEGIN scrollbar -->
    			<div class="app-sidebar-content" data-scrollbar="true" data-height="100%">
    				<!-- BEGIN menu -->
    				<div class="menu">
    					<div class="menu-header">Navigation</div>
    					<div class="menu-item {{ request()->routeIs('dashboard') ? 'active' : '' }}">
    						<a href="{{ route('dashboard') }}" class="menu-link">
    							<span class="menu-icon"><i class="bi bi-cpu"></i></span>
    							<span class="menu-text">Dashboard</span>
    						</a>
    					</div>
    					<div class="menu-item">
    						<a href="analytics.html" class="menu-link">
    							<span class="menu-icon"><i class="bi bi-bar-chart"></i></span>
    							<span class="menu-text">Analytics</span>
    						</a>
    					</div>

    					<div class="menu-header">Administration</div>
    					<div class="menu-item has-sub {{ request()->routeIs([
    'dashboard.users.*', 
    'dashboard.roles.*', 
    'dashboard.permissions.*'
]) ? 'active' : '' }}">
    						<a href="javascript:;" class="menu-link">
    							<div class="menu-icon"><i class="bi bi-person-gear"></i></div>
    							<div class="menu-text">Management</div>
    							<span class="menu-caret"><b class="caret"></b></span>
    						</a>
    						<div class="menu-submenu">
    							<div class="menu-item {{ request()->routeIs('dashboard.users.*') ? 'active' : '' }}">
    								<a href="{{ route('dashboard.users.index') }}" class=" menu-link">
    									<div class="menu-icon"><i class="bi bi-person-lines-fill"></i></div>
    									<div class="menu-text">Users</div>
    								</a>
    							</div>
    							<div class="menu-item {{ request()->routeIs('dashboard.roles.*') ? 'active' : '' }}">
    								<a href="{{ route('dashboard.roles') }}" class="menu-link">
    									<div class="menu-icon"><i class="bi bi-person-badge"></i></div>
    									<div class="menu-text">Role</div>
    								</a>
    							</div>
    							<div class="menu-item {{ request()->routeIs('dashboard.permissions.*') ? 'active' : '' }}">
    								<a href="{{ route('dashboard.permissions') }}" class="menu-link">
    									<div class="menu-icon"><i class="bi bi-shield-shaded"></i></div>
    									<div class="menu-text">Permission</div>
    								</a>
    							</div>
    						</div>
    					</div>


    					<div class="menu-item">
    						<a href="map.html" class="menu-link">
    							<span class="menu-icon"><i class="bi bi-compass"></i></span>
    							<span class="menu-text">Map</span>
    						</a>
    					</div>
    					<div class="menu-divider"></div>
    					<div class="menu-header">Users</div>
    					<div class="menu-item">
    						<a href="profile.html" class="menu-link">
    							<span class="menu-icon"><i class="bi bi-people"></i></span>
    							<span class="menu-text">Profile</span>
    						</a>
    					</div>
    					<div class="menu-item">
    						<a href="calendar.html" class="menu-link">
    							<span class="menu-icon"><i class="bi bi-calendar4"></i></span>
    							<span class="menu-text">Calendar</span>
    						</a>
    					</div>
    					<div class="menu-item">
    						<a href="settings.html" class="menu-link">
    							<span class="menu-icon"><i class="bi bi-gear"></i></span>
    							<span class="menu-text">Settings</span>
    						</a>
    					</div>
    					<div class="menu-item">
    						<a href="helper.html" class="menu-link">
    							<span class="menu-icon"><i class="bi bi-gem"></i></span>
    							<span class="menu-text">Helper</span>
    						</a>
    					</div>
    				</div>
    				<!-- END menu -->
    				<div class="p-3 px-4 mt-auto">
    					<a href="https://seantheme.com/hud/documentation/index.html" target="_blank" class="btn d-block btn-outline-theme">
    						<i class="fa fa-code-branch me-2 ms-n2 opacity-5"></i> Documentation
    					</a>
    				</div>
    			</div>
    			<!-- END scrollbar -->
    		</div>