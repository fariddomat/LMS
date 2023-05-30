@extends('layouts.dashboard')
@section('title')
    Manage profiles
@endsection
@section('content')
    <main class="main">

        <!-- Breadcrumb -->
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('dashboard.profiles.index') }}">profiles</a></li>
            <li class="breadcrumb-item"><a href="">Admin</a>
            </li>
            <li class="breadcrumb-item active">Dashboard</li>

        </ol>

        <div class="container-fluid">

            <div class="animated fadeIn">
                <div class="col-lg-12" >
                    <form action="">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="search" id="search" autofocus
                                        value="{{ request()->search }}" aria-describedby="helpId" placeholder="البحث">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <button type="submit" class="btn btn-primary"><i class="fa fa-search"
                                        aria-hidden="true"></i>
                                    بحث</button>
                                    <a href="{{ route('dashboard.profiles.create') }}" class="btn btn-outline-primary"><i
                                            class="fa fa-plus" aria-hidden="true"></i> إضافة</a>

                            </div>
                        </div>
                    </form>
                </div>


                <div class="col-lg-12" style="margin-top: 15px">
                    <div class="card">
                        <div class="card-header">
                            <i class="fa fa-align-justify"></i> الطلاب
                        </div>
                        <div class="card-block table-responsive">

                            @if ($profiles->count() > 0)
                                <table class="table table-striped ">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>الاسم</th>
                                            <th>البريد الإلكتروني</th>
                                            <th>تاريخ التسجيل</th>
                                            <th>حالة الحساب</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($profiles as $index => $profile)
                                            <tr>
                                                <td>{{ $index + 1 }}</td>
                                                <td>{{ $profile->name }}</td>
                                                <td>{{ $profile->email }}</td>
                                                <td>{{ $profile->created_at->diffForHumans() }}</td>
                                                <td>{{ $profile->status }}</td>

                                                <td>

                                                    <a href="{{ route('dashboard.profiles.edit', $profile->id) }}"
                                                        class="btn btn-outline-warning" style="display: inline-block"><i
                                                            class="fa fa-edit"></i> تعديل</a>


                                                    <form action="{{ route('dashboard.profiles.destroy', $profile->id) }}"
                                                        method="POST" style="display: inline-block">
                                                        @csrf
                                                        @method('delete')
                                                        <button type="submit" class="btn btn-outline-danger delete"
                                                            style="display: inline-block"><i class="fa fa-trash"
                                                                aria-hidden="true"></i> حذف</button>
                                                    </form>

                                                    @if ($profile->status == 'active')
                                                        <form action="{{ route('dashboard.profiles.reject', $profile->id) }}"
                                                            method="POST" style="display: inline-block">
                                                            @csrf
                                                            @method('post')
                                                            <button type="submit" class="btn btn-outline-info"
                                                                style="display: inline-block"><i class="fa fa-ban"
                                                                    aria-hidden="true"></i> إلفاء تفعيل</button>
                                                        </form>
                                                    @else
                                                        <form action="{{ route('dashboard.profiles.active', $profile->id) }}"
                                                            method="POST" style="display: inline-block">
                                                            @csrf
                                                            @method('post')
                                                            <button type="submit" class="btn btn-outline-success"
                                                                style="display: inline-block"><i class="fa fa-ban"
                                                                    aria-hidden="true"></i> تفعيل</button>
                                                        </form>
                                                    @endif

                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>

                                <div class="text-center m-auto">{{ $profiles->appends(request()->query())->links() }}</div>
                            @else
                                <h3 style="font-weight: 400">Sorry no record found !</h3>
                            @endif
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!--/.container-fluid-->
    </main>
@endsection
