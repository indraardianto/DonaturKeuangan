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

	
            <!-- Chart Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-sm-12 col-xl-5">
                        <div class="bg-secondary rounded h-100 p-4">
                            <h6 class="mb-4">Doughnut Chart</h6>
                            <canvas id="doughnut-chart"></canvas>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Chart End -->

            <!-- Recent Sales Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="bg-secondary text-center rounded p-4">
                        
                    <div class="d-flex align-items-center justify-content-between mb-4 pt-4">
                        <h6 class="mb-0">Recent Salse</h6> 
                        <p align-center>
                        <a class="btn btn-sm btn-primary" href="{{route('tambahbuku')}}">Tambah Data Buku</a>                       
                        <a class="btn btn-sm btn-success" href="{{route('exportbuku')}}">Excel</a>
                         <a class="btn btn-sm btn-success" href="{{route('exportbukupdf')}}">PDF</a>
                        
                        </p>
                    </div>
                    <div class="table-responsive">                        
                        <table class="table text-start align-middle table-bordered table-hover mb-0">
                            <thead>
                                <tr class="text-center">
                                    <th scope="col">No</th>
                                    <th scope="col">Nama Buku</th>
                                    <th scope="col">Genre Buku</th>
                                    <th scope="col">Jumlah Buku</th> 
                                    <th scope="col">Nama Penerbit</th> 
                                    <th scope="col">Action</th>                                   
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                 $no = 1;
                                ?>   
                               @foreach ($query as $item)                                    
                                <tr class="text-center"> 
                                    <td>{{$no}}</td>
                                    <td>{{$item->nama_buku}}</td>
                                    <td>{{$item->genre__buku}}</td>
                                    <td>{{$item->jumlah_buku}}</td>
                                    <td>{{$item->penerbit->nama_penerbit}}</td>                                   
                                    <td class="text-center">
                                        <a class="btn btn-warning rounded-pill m-2" href="{{route('editbuku',$item->id)}}">Edit</a>
                                        <a class="btn btn-primary rounded-pill m-2" href="{{route('hapusbuku',$item->id)}}" onclick="return confirm('yakin gak luu? Kalo gak yakin mah jangan..! ')" >Hapus</a>
                                    </td>
                                </tr>
                                 <?php
                                 $no++;
                                ?> 
                                @endforeach                                                                                              
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- Recent Sales End -->
       
	
	


               

@endsection
