
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


<hr>
                                <div class="card">
                                  <div class="card-body">
                                        <table class="table">
                                                <thead>
                                                  <tr>
                                                    <th scope="col">ID</th>
                                                    <th scope="col">hالاسم </th>
                                                    <th scope="col">البريد الالكتروني</th>
                                                    <th scope="col">الموضوع</th>

                                                  </tr>
                                                </thead>
                                                <tbody>
                                                        @foreach ($sends as $send)
                                                        <tr>
                                                          <th scope="row">{{ $send->id }}</th>
                                                          <td>{{ $send->name }}</td>
                                                          <td>{{ $send->email }}</td>
                                                          <td>{{ $send->message }}</td>


                                                        </tr>





                                                        @endforeach

                                                </tbody>

                                              </table>

                                  </div>
                                </div>

                                {{ $sends->links() }}


            </div>
        </div>
    </div>
</div>
@endsection
