
            <!-- Menu -->
            <div class="menu">
                <ul class="list">
                    <li class="header">MAIN NAVIGATION</li>
                    <li class="active">
                        <a href="{{ url('/home') }}">
                            <i class="material-icons">home</i>
                            <span>Home</span>
                        </a>


                 @can('menu_ebook')
                       {{--  e-Book --}}
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">collections_bookmark</i>
                            <span>e-Book</span>
                        </a>
                        <ul class="ml-menu">
                         @foreach($menuFakultas as $fa)
                            <li>
                                <a href="#" class="menu-toggle">
                                    <span>{{ $fa->jurusan }}</span>
                                </a>
                              <ul class="ml-menu">
                                   @foreach( $fa->categories as $ka )
                                    <li>
                                        <a href="{{url('/kategory_ebook', $ka->id)}}">
                                            <span>{{ $ka->kategory }}</span>
                                        </a>
                                    </li>
                                    @endforeach 
                                </ul>
                            </li> 
                         @endforeach                            
                        </ul>
                    </li>
                   {{--  video --}}
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">video_library</i>
                            <span>Video</span>
                        </a>
                        <ul class="ml-menu">
                         @foreach($menuFakultas as $fa)
                            <li>
                                <a href="#" class="menu-toggle">
                                    <span>{{ $fa->jurusan }}</span>
                                </a>
                              <ul class="ml-menu">
                                   @foreach( $fa->categories as $ka )
                                    <li>
                                        <a href="{{url('/kategory_video', $ka->id)}}">
                                            <span>{{ $ka->kategory }}</span>
                                        </a>
                                    </li>
                                    @endforeach 
                                </ul>
                            </li> 
                         @endforeach                            
                        </ul>
                    </li>
                @endcan


                    @can('menu_administrasi')
                    {{-- Tambah Data --}}
                    <li class="header">ADMINISTRASI</li>
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">computer</i>
                            <span>Pustaka Digital</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="{{ route ('book.create') }}">
                                <i class="material-icons">collections_bookmark</i>
                                    <span>Tambah e-Book</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route ('video.create') }}">
                                <i class="material-icons">video_library</i>
                                    <span>Tambah Video</span>
                                </a>
                            </li>
                        </ul>
                    </li>   
                     @endcan


                    @can('menu_pengaturan')
                    {{-- Hanya Admin --}}
                     <li class="header">PENGATURAN</li>
                     <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">person</i>
                            <span>Anggota</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="{{ route ('user.index') }}">
                                <i class="material-icons">group</i>
                                    <span>User</span>
                                </a>
                            </li>
                             <li>
                                <a href="javascript:void(0);">
                                <i class="material-icons">person</i>
                                    <span>Author</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route ('role.index') }}">
                                <i class="material-icons">vpn_key</i>
                                    <span>Role</span>
                                </a>
                            </li>
                            
                        </ul>
                    </li> 
                       <li>
                        <a href="{{ route ('book.index') }}">
                            <i class="material-icons">archive</i>
                            <span>Koleksi</span>
                        </a>
                        <li>
                        <a href="{{ route ('faculty.index') }}">
                            <i class="material-icons">domain</i>
                            <span>Jurusan</span>
                        </a>
                         <li>
                        <a href="{{ route ('category.index') }}">
                            <i class="material-icons">list</i>
                            <span>Materi</span>
                        </a>
                    </li> 
                    </li>
                    </li>@endcan
                </ul>
            </div>
            <!-- #Menu -->
