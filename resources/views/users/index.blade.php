@include ('admin.layout.header')

<body class="g-sidenav-show  bg-gray-200">
  <!--Sidebar-->
@include ('admin.layout.sidebar')
<!--End Sidebar-->
  <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
  @extends('layouts.app')

@section('content')
@csrf

<div class="position-absolute top-10 end-10">
    <div class="card container">
        <div class="card-header">Users</div>
@if(session()->has('success'))
<div class="alert alert-success">
    {{session()->get('success')}}
</div>
    @endif
        <div class="card-body">
                <table class="table">
                    <thead>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Address</th>
                        <th>Phone</th>
                        <th></th>
                        <th></th>
                    </thead>
                    <tbody>
                        @foreach(Auth::user()->get() as $user)
                        @if($user->is_admin==0)
                            <tr>
                                <td>
                                    {{ $user->name }}
                                </td>
                                    <td>
                                    {{ $user->email }}
                                    </td>
                                <td>
                                    {{ $user->address }}
                                </td>
                                    <td>
                                    {{ $user->phone }}
                                    </td>
                                    <td>
                                       
                                        
                                            <a class="btn btn-danger" href="{{url('/admin/user/'.$user->id.'/delete')}}" id="{{$user->id}}" role="button">delete</a>
                                    
                                    </td>
                            </tr>
                  @endif      
                @endforeach
                    </tbody>
                </table>
          
        </div>
    </div>

@endsection
</div>
</main>
</body>
</html>