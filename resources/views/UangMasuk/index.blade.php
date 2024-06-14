@extends('template.uang')
@section('masuk')             
           <!-- [ Header ] start -->
	<header class="navbar pcoded-header navbar-expand-lg navbar-light header-blue">
		
			
				<div class="m-header">
					<a class="mobile-menu" id="mobile-collapse" href="#!"><span></span></a>
					<a href="#!" class="b-brand">
						<!-- ========   change your logo hear   ============ -->
						<img src="{{asset('ablepro-master')}}dist/assets/images/logo.png" alt="" class="logo">
						<img src="{{asset('ablepro-master')}}dist/assets/images/logo-icon.png" alt="" class="logo-thumb">
					</a>
					<a href="#!" class="mob-toggler">
						<i class="feather icon-more-vertical"></i>
					</a>
				</div>
				<div class="collapse navbar-collapse">
					<ul class="navbar-nav mr-auto">
						<li class="nav-item">
							<a href="#!" class="pop-search"><i class="feather icon-search"></i></a>
							<div class="search-bar">
								<input type="text" class="form-control border-0 shadow-none" placeholder="Search hear">
								<button type="button" class="close" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
						</li>
					</ul>
					<ul class="navbar-nav ml-auto">
						<li>
							<div class="dropdown">
								<a class="dropdown-toggle" href="#" data-toggle="dropdown"><i class="icon feather icon-bell"></i></a>
								<div class="dropdown-menu dropdown-menu-right notification">
									<div class="noti-head">
										<h6 class="d-inline-block m-b-0">Notifications</h6>
										<div class="float-right">
											<a href="#!" class="m-r-10">mark as read</a>
											<a href="#!">clear all</a>
										</div>
									</div>
									<ul class="noti-body">
										<li class="n-title">
											<p class="m-b-0">NEW</p>
										</li>
										<li class="notification">
											<div class="media">
												<img class="{{asset('ablepro-master')}}/dist/assets/images-radius" src="{{asset('ablepro-master')}}dist/assets/images/user/avatar-1.jpg" alt="Generic placeholder image">
												<div class="media-body">
													<p><strong>John Doe</strong><span class="n-time text-muted"><i class="icon feather icon-clock m-r-10"></i>5 min</span></p>
													<p>New ticket Added</p>
												</div>
											</div>
										</li>
										<li class="n-title">
											<p class="m-b-0">EARLIER</p>
										</li>
										<li class="notification">
											<div class="media">
												<img class="{{asset('ablepro-master')}}dist/assets/images-radius" src="{{asset('ablepro-master')}}dist/assets/images/user/avatar-2.jpg" alt="Generic placeholder image">
												<div class="media-body">
													<p><strong>Joseph William</strong><span class="n-time text-muted"><i class="icon feather icon-clock m-r-10"></i>10 min</span></p>
													<p>Prchace New Theme and make payment</p>
												</div>
											</div>
										</li>
										<li class="notification">
											<div class="media">
												<img class="{{asset('ablepro-master')}}/dist/assets/images-radius" src="{{asset('ablepro-master')}}dist/assets/images/user/avatar-1.jpg" alt="Generic placeholder image">
												<div class="media-body">
													<p><strong>Sara Soudein</strong><span class="n-time text-muted"><i class="icon feather icon-clock m-r-10"></i>12 min</span></p>
													<p>currently login</p>
												</div>
											</div>
										</li>
										<li class="notification">
											<div class="media">
												<img class="{{asset('ablepro-master')}}/dist/assets/images-radius" src="{{asset('ablepro-master')}}dist/assets/images/user/avatar-2.jpg" alt="Generic placeholder image">
												<div class="media-body">
													<p><strong>Joseph William</strong><span class="n-time text-muted"><i class="icon feather icon-clock m-r-10"></i>30 min</span></p>
													<p>Prchace New Theme and make payment</p>
												</div>
											</div>
										</li>
									</ul>
									<div class="noti-footer">
										<a href="#!">show all</a>
									</div>
								</div>
							</div>
						</li>
						<li>
							<div class="dropdown drp-user">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">
									<i class="feather icon-user"></i>
								</a>
								<div class="dropdown-menu dropdown-menu-right profile-notification">
									<div class="pro-head">
										<img src="{{asset('ablepro-master')}}dist/assets/assets/images/user/avatar-1.jpg" class="{{asset('ablepro-master')}}/dist/assets/images-radius" alt="User-Profile-Image">
										<span>John Doe</span>
										<a href="auth-signin.html" class="dud-logout" title="Logout">
											<i class="feather icon-log-out"></i>
										</a>
									</div>
									<ul class="pro-body">
										<li><a href="user-profile.html" class="dropdown-item"><i class="feather icon-user"></i> Profile</a></li>
										<li><a href="email_inbox.html" class="dropdown-item"><i class="feather icon-mail"></i> My Messages</a></li>
										<li><a href="auth-signin.html" class="dropdown-item"><i class="feather icon-lock"></i> Lock Screen</a></li>
									</ul>
								</div>
							</div>
						</li>
					</ul>
				</div>
				
			
	</header>
	<!-- [ Header ] end -->

	
 <h5>Striped Table</h5>
                        <span class="d-block m-t-5">use class <code>table-striped</code> inside table element</span>
                    </div>
                    <div class="card-body table-border-style">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>TANGGAL</th>
                                        <th>URAIAN</th>
                                        <th>UANG MASUK</th>
                                        <th>UANG KELUAR</th>
										<th>KETERANGAN</th>
										<th>SALDO</th>
										<th>#</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>20 May 2024</td>
                                        <td>Markonah</td>
                                        <td>13.500.00</td>
                                        <td>3.700.000</td>
										<td>Ranjang Santri</td>
										<td>9.800.000</td>
										<td>.</td>
                                    </tr>
                                    <tr>
                                        <td>08 February 2025</td>
                                        <td>Afghan Fawwaz</td>
                                        <td>10.000.000</td>
										<td>1.930.000</td>
                                        <td>Tempat Wudhu</td>
										<td>8.170.000</td>
										<td>.</td>
                                    </tr>
                                    <tr>
										<td>05 Juni 2024</td>
                                        <td>Trischa</td>
                                        <td>16.000.000</td>
                                        <td>14.600.000</td>
                                        <td>Hewan Qurban</td>
										<td>1.400.000</td>
										<td></td>
                                    </tr>
                                </tbody>
								<div class="table-responsive">
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- [ stiped-table ] end -->
         

       
	
	


               

@endsection
