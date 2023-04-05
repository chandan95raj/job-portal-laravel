
<!-- ======================= Page Title ===================== -->
<div class="page-title">
  <div class="container">
    <div class="page-caption">
      <h2>Profile Settings</h2>
      <p><a href="{{ url('/admin') }}" title="Home">Home</a> <i class="ti-angle-double-right"></i> Profile Settings</p>
    </div>
  </div>
</div>
<!-- ======================= End Page Title ===================== --> 

<!-- ================ Profile Settings ======================= -->
<section class="padd-top-80 padd-bot-80">
  <div class="container">
    <div class="row"> 
      <div class="col-md-3">
		<div id="leftcol_item">
		  <div class="user_dashboard_pic"> <img alt="user photo" src="{{ asset('public/admin/assets/img/user-profile.png')}}"> <span class="user-photo-action">User Title</span> </div>
		</div>
		<div class="dashboard_nav_item">
		  <ul>
		    <li><a href="{{ url('/admin') }}"><i class="login-icon ti-dashboard"></i> Dashboard</a></li>
			<li><a href="{{ url('/admin/profile-settings') }}"><i class="login-icon ti-user"></i> Edit Profile</a></li>
			<li class="active"><a href="{{ url('/admin/change-password') }}"><i class="login-icon ti-key"></i> Change Password</a></li>
			<li><a href="#"><i class="login-icon ti-power-off"></i> Logout</a></li>
		  </ul>
		</div>
	  </div>
	  <div class="col-md-9">
		<div class="profile_detail_block">
			<div class="col-md-4 col-sm-6 col-xs-12">
			  <div class="form-group">
				<label>Old Password</label>
				<input type="text" class="form-control" placeholder="***********">
			  </div>
			</div>
			<div class="col-md-4 col-sm-6 col-xs-12">
			  <div class="form-group">
				<label>Canform Password</label>
				<input type="text" class="form-control" placeholder="***********">
			  </div>
			</div>
			<div class="col-md-4 col-sm-6 col-xs-12">
			  <div class="form-group">
				<label>New Password</label>
				<input type="text" class="form-control" placeholder="***********">
			  </div>
			</div>	
			<div class="clearfix"></div>
			<div class="col-md-12 padd-top-10 text-center"> <a href="#" class="btn btn-m theme-btn full-width">Update</a></div>
		</div>
      </div>	  
    </div>
  </div>
</section>
<!-- ================ End Profile Settings ======================= --> 
