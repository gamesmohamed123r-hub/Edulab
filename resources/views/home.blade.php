@extends('layouts.app')
@section('content')

<div class="d-flex justify-content-center align-items-center mt-3 bg-light">
    
    <div class="container-fluid d-flex align-items-center justify-content-center" style="max-width: 1200px;">
        
        <button class="btn btn-outline-secondary me-3" type="button" data-bs-target="#adminDashboardCarousel" data-bs-slide="prev" style="height: 50px; width: 50px; border-radius: 50%;">
            <i class="fas fa-chevron-left">&lt;</i> </button>

        <div id="adminDashboardCarousel" class="carousel slide flex-grow-1" data-bs-interval="false">
            <div class="carousel-inner shadow-sm rounded bg-white p-4">

{{-- ======================================user table==================================--}}

                <div class="carousel-item active">
                    <div class="d-flex justify-content-between align-items-center">
                    <h4 class="mb-3 text-secondary">Users 
                       <span class="badge text-bg-secondary">{{$users->count()}}</span></h4>
                       <a href={{route('user.create')}} class="btn btn-success">
                                       <i class="fa-solid fa-user-plus"></i>
                                    </a>
                    </div>
                    <table class="table table-striped table-hover border mb-0">
                        <thead class="table-dark">
                            @if (session('message'))
                                <h4 class="alert alert-success text-center">{{session('message')}}</h4>
                            @endif
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>phone</th>
                                <th>status</th>
                                <th>Role</th>
                                <th>operations</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $item)
                            <tr>
                                <td>{{$item->id}}</td>
                                <td>{{$item->name}}</td>
                                <td>{{$item->email}}</td>
                                <td>{{$item->phone}}</td>
                                <td>
                                    @if ($item->status=="1")
                                        <span class="badge bg-success">Active</span>
                                     @else
                                         <span class="badge bg-secondary">InActive</span>  
                                    @endif
                                </td>
                                <td>{{$item->role}}</td>
                                <td>                                  
                                     <a href={{route('user.edit',$item->id)}} class="btn btn-secondary">
                                        <i class="fa-solid fa-pen-to-square"></i>
                                    </a>                                    
                                    <a href={{route('user.delete',$item->id)}} class="btn btn-danger">
                                        <i class="fa-solid fa-trash"></i>
                                    </a>
                                </td>
                            </tr>
                            @endforeach                    
                        </tbody>
                    </table>
                </div>

{{-- ======================================categories table==================================--}}
                
                <div class="carousel-item">
                    <div class="d-flex justify-content-between align-items-center">
                     <h4 class="mb-3 text-secondary">categories 
                       <span class="badge text-bg-secondary">{{$categories->count()}}</span></h4>
                       <a href={{route('category.create')}} class="btn btn-success">
                                       <i class="fa-solid fa-plus"></i>
                                    </a>
                    </div>
                    <table class="table table-striped table-hover border mb-0">
                        <thead class="table-dark">
                            <tr>
                                <th>id</th>
                                <th>image</th>
                                <th>title</th>
                                <th>description</th>
                                <th>status</th>
                                <th>operation</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($categories as $item)
                            <tr>
                                <td>{{$item->id}}</td>
                                <td>
                                 <img style="width: 150px" src="{{asset('img/category/'.$item->cate_image)}}">
                                </td>
                                <td>{{$item->title_en}}</td>
                                <td>{{$item->description_en}}</td>
                                <td>{{$item->status}}</td>
                                <td>
                                    <a href={{ route('category.show', $item->id) }} class="btn btn-success">
                                        <i class="fa-solid fa-eye"></i></a>
                                    <a href={{route('category.edit',$item->id)}} class="btn btn-secondary">
                                        <i class="fa-solid fa-pen-to-square"></i>
                                    </a>                                    
                                    <a href={{route('category.delete',$item->id)}} class="btn btn-danger">
                                        <i class="fa-solid fa-trash"></i>
                                    </a>
                                </td>
                            </tr>
                            
                            @endforeach
                        </tbody>
                    </table>
                </div>

{{-- ======================================courses table==================================--}}

                <div class="carousel-item">
                    <div class="d-flex justify-content-between align-items-center">
                     <h4 class="mb-3 text-secondary">courses 
                       <span class="badge text-bg-secondary">{{$courses->count()}}</span></h4>
                       <a href={{route('course.create')}} class="btn btn-success">
                                       <i class="fa-solid fa-plus"></i>
                                    </a>
                    </div>
                    <table class="table table-striped table-hover border mb-0">
                        <thead class="table-dark">
                            <tr>
                                <th>from category</th>
                                <th>id</th>
                                <th>image</th>
                                <th>title</th>
                                <th>description</th>
                                <th>price</th>
                                <th>status</th>
                                <th>operation</th>
                            </tr>
                        </thead>
                        <tbody>
                             @foreach ($courses as $item)
                            <tr>
                                <td>{{$item->category->title_en ?? 'NO Category'}}</td>
                                <td>{{$item->id}}</td>
                                <td>
                                 <img style="width: 100px" src="{{asset('img/course/'.$item->cour_image)}}" alt="">
                                </td>
                                <td>{{$item->title_en}}</td>
                                <td>{{$item->description_en}}</td>
                                <td>{{$item->price}}</td>
                                <td>{{$item->status}}</td>
                                <td>
                                    <a href={{ route('course.show', $item->id) }} class="btn btn-success">
                                        <i class="fa-solid fa-eye"></i></a>
                                    <a href={{route('course.edit',$item->id)}} class="btn btn-secondary">
                                        <i class="fa-solid fa-pen-to-square"></i>
                                    </a>                                    
                                    <a href="{{route('course.delete',$item->id)}}" class="btn btn-danger">
                                        <i class="fa-solid fa-trash"></i>
                                    </a>
                                </td>
                            </tr> 
                            
                            @endforeach
                        </tbody>
                    </table>
                </div>

{{-- ======================================courses table==================================--}}

               <div class="carousel-item">
                    <div class="d-flex justify-content-between align-items-center">
                     <h4 class="mb-3 text-secondary">lessons 
                       <span class="badge text-bg-secondary">{{$lessons->count()}}</span></h4>
                       <a href={{route('lesson.create')}} class="btn btn-success">
                                       <i class="fa-solid fa-plus"></i>
                                    </a>
                    </div>
                    <table class="table table-striped table-hover border mb-0">
                        <thead class="table-dark">
                            <tr>
                                <th>from courses</th>
                                <th>id</th>
                                <th>title</th>
                                <th>description</th>
                                <th>video</th>
                                <th>status</th>
                                <th>operation</th>
                            </tr>
                        </thead>
                        <tbody>
                             @foreach ($lessons as $item)
                            <tr>
                                <td>{{$item->courses->title_en ?? 'NO Courses'}}</td>
                                <td>{{$item->id}}</td>
                                <td>{{$item->title_en}}</td>
                                <td>{{$item->description_en}}</td>
                                <td>
                                    @if($item->video_url)
                                        <video style="width: 150px; height: 100px; object-fit: cover;" controls preload="metadata">
                                            <source src="{{ asset('video/lesson/' . $item->video_url) }}">
                                            Your browser does not support the video tag.
                                        </video>
                                    @else
                                        <span class="text-muted">No Video</span>
                                    @endif
                                </td>
                                <td>{{$item->status}}</td>
                                <td>
                                    <a href={{route('lesson.show',$item->id)}} class="btn btn-success">
                                        <i class="fa-solid fa-eye"></i></a>
                                    <a href={{route('lesson.edit',$item)}} class="btn btn-secondary">
                                        <i class="fa-solid fa-pen-to-square"></i>
                                    </a>                                    
                                    <a href={{route('lesson.delete',$item->id)}} class="btn btn-danger">
                                        <i class="fa-solid fa-trash"></i>
                                    </a>
                                </td>
                            </tr> 
                            
                            @endforeach
                        </tbody>
                    </table>
                </div>
                
            </div>

{{-- ======================================enrollments table==================================--}}

           <div class="carousel-item">
    <div class="d-flex justify-content-between align-items-center">
        <h4 class="mb-3 text-secondary">Enrollments 
            <span class="badge text-bg-secondary">{{$enrollments->count()}}</span>
        </h4>
    </div>
    <table class="table table-striped table-hover border mb-0">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>User Name</th>
                <th>Category</th>
                <th>Amount</th>
                <th>Status</th>
                <th>Transaction ID</th>
                <th>operation</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($enrollments as $item)
            <tr>
                <td>{{$item->id}}</td>
                <td>{{$item->user->name ?? 'Deleted User'}}</td>
                <td>{{$item->category->title_en ?? 'Deleted Category'}}</td>
                <td>{{$item->paid_amount}} $</td>
                <td>
                    @if($item->payment_status == 'paid')
                        <span class="badge bg-success">Paid</span>
                    @else
                        <span class="badge bg-warning">Pending</span>
                    @endif
                </td>
                <td>{{$item->transaction_id ?? 'N/A'}}</td>
                <td>     <a href={{route('erollment.delete',$item->id)}} class="btn btn-danger">
                                        <i class="fa-solid fa-trash"></i>
                                    </a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
           </div>

        </div>



        <button class="btn btn-outline-secondary ms-3" type="button" data-bs-target="#adminDashboardCarousel" data-bs-slide="next" style="height: 50px; width: 50px; border-radius: 50%;">
            <i class="fas fa-chevron-right">&gt;</i> </button>

    </div>
</div>
@endsection