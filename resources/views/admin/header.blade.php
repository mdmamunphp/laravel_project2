<div class="header">    
            <div class="header-content clearfix">
                
                @if(session('sess_type')==1 || session('sess_type')==4)
                <div class="nav-control">
                    <div class="hamburger">
                        <span class="toggle-icon"><i class="icon-menu"></i></span>
                    </div>
                </div>
                @endif
                <!--<div class="header-left">-->
                <!--    <div class="input-group icons">-->
                <!--        <div class="input-group-prepend">-->
                <!--            <span class="input-group-text bg-transparent border-0 pr-2 pr-sm-3" id="basic-addon1"><i class="mdi mdi-magnify"></i></span>-->
                <!--        </div>-->
                <!--        <input type="search" class="form-control" placeholder="Search Dashboard" aria-label="Search Dashboard">-->
                <!--        <div class="drop-down animated flipInX d-md-none">-->
                <!--            <form action="#">-->
                <!--                <input type="text" class="form-control" placeholder="Search">-->
                <!--            </form>-->
                <!--        </div>-->
                <!--    </div>-->
                <!--</div>-->
                <div class="header-right">
                    <ul class="clearfix">
                    <?php
                                       $msg=DB::select("select * from merchandise_products where agent_id=0 order by id desc");
                                       $count=DB::select("select count(id) count from merchandise_products where agent_id=0");
                                    
                                  //  print_r($msg); 

                                if(session('sess_type')==1 || session('sess_type')==4){

                                    ?>
                        <li class="icons dropdown"><a href="javascript:void(0)" data-toggle="dropdown">
                                <!-- <i class="mdi mdi-email-outline"></i> -->
                                <i class="mdi mdi-bell-outline"></i>
                                <span class="badge badge-pill gradient-1">{{ $count[0]->count}}</span>
                            </a>
                            <div class="drop-down animated fadeIn dropdown-menu">
                                <div class="dropdown-content-heading d-flex justify-content-between">
                                  
                                
                                      <span class=""> New Messages    </span>  
                                    <a href="javascript:void()" class="d-inline-block">
                                        <span class="badge badge-pill gradient-1">{{ $count[0]->count}}</span>
                                    </a>
                                </div>
                                <div class="dropdown-content-body">
                                    <ul>
                                        @isset($msg)
                                        @foreach($msg as $value)
                                        <li class="notification-unread">
                                            <a href="javascript:void()">
                                                <!--<img class="float-left mr-3 avatar-img" src="{{ asset('public/asset/images/avatar/1.jpg')}}" alt="">-->
                                                <div class="notification-content">
                                                    <div class="notification-heading">
                                                    <?php
                                                       $mer=rollstar_details($value->user_id);
                                                       echo $mer[0]->name;
                                                       ?>
                                                    
                                                 </div>
                                                    <div class="notification-timestamp">{{$mer[0]->phone}}</div>
                                                    <div class="notification-text">{{$mer[0]->address}}</div>
                                                    <a href="{{ URL::to('admin_merchandise_product_list/'. $mer[0]->id) }}" class="btn btn-sm btn-warning">পন্যের তালিকা</a>
                                                </div>
                                            </a>
                                        </li>
                                        @endforeach
                                        @endisset
                                       
                                       
                                    </ul>
                                    
                                </div>
                            </div>
                        </li>
                        <?php
                                }else{
                                    ?>

<!-- ?>
                        <li class="icons dropdown"><a href="javascript:void(0)" data-toggle="dropdown">
                                <i class="mdi mdi-email-outline"></i>
                                <span class="badge badge-pill gradient-1">3</span>
                            </a>
                            <div class="drop-down animated fadeIn dropdown-menu">
                                <div class="dropdown-content-heading d-flex justify-content-between">
                                  
                                
                                      <span class="">3 New Messages    </span>  
                                    <a href="javascript:void()" class="d-inline-block">
                                        <span class="badge badge-pill gradient-1">3</span>
                                    </a>
                                </div>
                                <div class="dropdown-content-body">
                                    <ul>
                                        <li class="notification-unread">
                                            <a href="javascript:void()">
                                                <img class="float-left mr-3 avatar-img" src="{{ asset('public/asset/images/avatar/1.jpg')}}" alt="">
                                                <div class="notification-content">
                                                    <div class="notification-heading">Saiful Islam</div>
                                                    <div class="notification-timestamp">08 Hours ago</div>
                                                    <div class="notification-text">Hi Teddy, Just wanted to let you ...</div>
                                                </div>
                                            </a>
                                        </li>
                                       
                                    </ul>
                                    
                                </div>
                            </div>
                        </li>
 -->



                                    <?php
                                }?>



<!-- 
                        <li class="icons dropdown"><a href="javascript:void(0)" data-toggle="dropdown">
                                <i class="mdi mdi-bell-outline"></i> 
                                <i class="mdi mdi-email-outline"></i>
                                <span class="badge badge-pill gradient-2">3</span>
                            </a>
                            <div class="drop-down animated fadeIn dropdown-menu dropdown-notfication">
                                <div class="dropdown-content-heading d-flex justify-content-between">
                                    <span class="">2 New Notifications</span>  
                                    <a href="javascript:void()" class="d-inline-block">
                                        <span class="badge badge-pill gradient-2">5</span>
                                    </a>
                                </div>
                                <div class="dropdown-content-body">
                                    <ul>
                                        <li>
                                            <a href="javascript:void()">
                                                <span class="mr-3 avatar-icon bg-success-lighten-2"><i class="icon-present"></i></span>
                                                <div class="notification-content">
                                                    <h6 class="notification-heading">Events near you</h6>
                                                    <span class="notification-text">Within next 5 days</span> 
                                                </div>
                                            </a>
                                        </li>
                                        
                                       
                                        
                                    </ul>
                                    
                                </div>
                            </div>
                        </li> -->
                        <!-- <li class="icons dropdown d-none d-md-flex">
                            <a href="javascript:void(0)" class="log-user"  data-toggle="dropdown">
                                <span>English</span>  <i class="fa fa-angle-down f-s-14" aria-hidden="true"></i>
                            </a>
                            <div class="drop-down dropdown-language animated fadeIn  dropdown-menu">
                                <div class="dropdown-content-body">
                                    <ul>
                                        <li><a href="javascript:void()">English</a></li>
                                        <li><a href="javascript:void()">Dutch</a></li>
                                    </ul>
                                </div>
                            </div>
                        </li> -->
                        <li class="icons dropdown">
                            <div class="user-img c-pointer position-relative"   data-toggle="dropdown">
                                <span class="activity active"></span>
                                @if(session('sess_type')==1 || session('sess_type')==4)
                                <img src="{{ asset('public/admin/'.session('sess_user_images'))}}" height="40" width="40" alt="">
                                @elseif(session('sess_type')==2)
                                <img src="{{ asset('public/admin/merchandise/'.session('sess_user_images'))}}" height="40" width="40" alt="">
                                @elseif(session('sess_type')==3)
                                 <img src="{{ asset('public/admin/agent/'.session('sess_user_images'))}}" height="40" width="40" alt="">
                                @endif
                            </div>
                            <div class="drop-down dropdown-profile animated fadeIn dropdown-menu">
                                <div class="dropdown-content-body">
                                    <ul>
                                        <li>
                                        <?php
                                            if(session('sess_type')==1){
                                                ?>
                                                 <a href="{{url('admin')}}"><i class="icon-user"></i> <span>Dashboard</span></a>
                                            <a href="{{URL::to('admin_profile/'.session('sess_user_id'))}}"><i class="icon-user"></i> <span>Profile</span></a>
                                            <?php
                                            }elseif(session('sess_type')==2){
                                                
                                                ?>
                                                    <a href="{{url('merchandise')}}"><i class="icon-user"></i> <span>Dashboard</span></a>
                                                   <a href="{{URL::to('merchandise_profile/'.session('sess_user_id'))}}"><i class="icon-user"></i> <span>Profile</span></a>
                                            <?php
                                            }elseif(session('sess_type')==3){
                                                ?>
                                                  <a href="{{url('delivery_man')}}"><i class="icon-user"></i> <span>Dashboard</span></a>
                                             <a href="{{URL::to('agent_profile/'.session('sess_user_id'))}}"><i class="icon-user"></i> <span>Profile</span></a>
                                         <?php   }
                                            ?>
                                        </li>
                                        <!-- <li>
                                            <a href="javascript:void()">
                                                <i class="icon-envelope-open"></i> <span>Inbox</span> <div class="badge gradient-3 badge-pill gradient-1">3</div>
                                            </a>
                                        </li> -->
                                        
                                        <hr class="my-2">
                                        <!-- <li>
                                            <a href="page-lock.html"><i class="icon-lock"></i> <span>Lock Screen</span></a>
                                        </li> -->
                                        <li><a href="{{ url('logout')}}"><i class="icon-key"></i> <span>Logout</span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>