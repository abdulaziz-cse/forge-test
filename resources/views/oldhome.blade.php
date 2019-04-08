@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">

                <div class="card-header">
                        <img src="logo4.png" style="text-align:center; padding: 30px; width: 90%;">


                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                </div>


                <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">رقم الطلب</th>
                            <th scope="col">القسم </th>
                            <th scope="col">الوقت</th>
                            <th scope="col">الأسم</th>
                            <th scope="col">رقم الجوال</th>
                            <th scope="col">تاريخ الطلب</th>

                          </tr>
                        </thead>
                        <tbody>
                                @foreach ($post as $posts)

                                @if($posts->approved==1)
                                <tr>
                                  <th scope="row">{{ $posts->id }}</th>
                                  <td>{{ $posts->patrs }}</td>
                                  <td>{{ $posts->time }}</td>
                                  <td>{{ $posts->name }}</td>
                                  <td>{{ $posts->number }}</td>
                                  <td>{{ $posts->created_at }}</td>
                                  <td>
                               </td>

                                </tr>
                                @endif


                                @endforeach

                        </tbody>

                      </table>
                      {{ $post->links() }}

            </div>
        </div>
    </div>
</div>
@endsection
