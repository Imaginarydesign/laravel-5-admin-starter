<!-- Left side column. contains the sidebar -->
<aside class="main-sidebar">
	<!-- sidebar: style can be found in sidebar.less -->
	<section class="sidebar">
		<!-- Sidebar user panel -->
		<div class="user-panel">
			<div class="pull-left image">
				<img src="{{ url('images/man.png') }}" class="img-circle" alt="User Image" />
			</div>
			<div class="pull-left info">
				<p>{{ Auth::user()->name }}</p>
				<a href="#"><i class="fa fa-circle text-success"></i> Online</a>
			</div>
		</div>
		<!-- search form -->
		<form action="#" method="get" class="sidebar-form">
			<div class="input-group">
				<input type="text" name="q" class="form-control" placeholder="Search..."/>
				<span class="input-group-btn">
					<button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
				</span>
			</div>
		</form>
		<!-- /.search form -->
		<!-- sidebar menu: : style can be found in sidebar.less -->
		<ul class="sidebar-menu">
			<li class="header">MAIN NAVIGATION</li>
			<li class="treeview {{ Request::is('/') ? 'active' : '' }}">
				<a href="/">
					<i class="fa fa-dashboard"></i> <span>Dashboard</span> <i class="fa fa-angle-left pull-right"></i>
				</a>
			</li>
			<li class="treeview {{ Request::is('temp*') ? 'active' : '' }}">
				<a href="#">
					<i class="fa fa-files-o"></i>
					<span>Resource</span>
					<span class="label label-primary pull-right">{{ count(App\Temp::all()) }}</span>
				</a>
				<ul class="treeview-menu">
					<li><a href="{{ url('/temp') }}"><i class="fa fa-circle-o"></i> Index</a></li>
					<li><a href="{{ url('/temp/create') }}"><i class="fa fa-circle-o"></i> Add new</a></li>
				</ul>
			</li>
			<li>
				<a href="{{ url('/settings') }}">
					<i class="fa fa-cog"></i> <span>Settings</span>
				</a>
			</li>            
		</ul>
	</section>
	<!-- /.sidebar -->
</aside>