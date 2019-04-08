
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

                <a href="{{ url('old') }}"> الطلبات المقبولة</a>
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
                            <th scope="col">قبول الطلب </th>

                          </tr>
                        </thead>
                        <tbody>
                                @foreach ($posts as $post)

                                @if($post->approved==0)

                                <tr>
                                  <th scope="row">{{ $post->id }}</th>
                                  <td>{{ $post->patrs }}</td>
                                  <td>{{ $post->time }}</td>
                                  <td>{{ $post->name }}</td>
                                  <td>{{ $post->number }}</td>
                                  <td>{{ $post->created_at }}</td>
                                  <td>
                                <form action="{{route('accept',$post->id)}}" method="post">
                                    @csrf
                                <button type="submit"  name="approved"  value="1" class="btn action-button"
                                 style="
                                width: 100px;
                                background: #cf9535;
                                font-weight: bold;
                                color: white;
                                border: 0 none;
                                border-radius: 25px;
                                cursor: pointer;
                                padding: 10px 5px;
                                margin: 10px 5px;
                                ">قبول</button>
                                </form>
                               </td>

                                </tr>

                                @endif




                                @endforeach

                        </tbody>

                      </table>
                      {{ $posts->links() }}

            </div>
        </div>
    </div>
</div>
@endsection
