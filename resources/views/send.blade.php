
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
                                                          <td>
                                                            <!-- Button trigger modal -->
                                                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">

                                                                المقترح
                                                            </button>
                                                            <!-- Modal -->
                                                            <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                                              <div class="modal-dialog modal-dialog-centered" role="document">
                                                                <div class="modal-content">
                                                                  <div class="modal-header">
                                                                    <h5 class="modal-title" id="exampleModalLongTitle"></h5>
                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                      <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                  </div>
                                                                  <div class="modal-body">
                                                                        {{ $send->message }}
                                                                  </div>
                                                                  <div class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">إغلاق</button>
                                                                  </div>
                                                                </div>
                                                              </div>
                                                            </div>

                                                          </td>


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
