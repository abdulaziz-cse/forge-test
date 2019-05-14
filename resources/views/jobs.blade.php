
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
                                                    <th scope="col">الاسم </th>
                                                    <th scope="col">العمر</th>
                                                    <th scope="col">الجنس</th>
                                                    <th scope="col">البريد الالكتروني</th>
                                                    <th scope="col">الرقم</th>
                                                    <th scope="col">الشهادة</th>
                                                    <th scope="col">سيرة مختصرة</th>

                                                  </tr>
                                                </thead>
                                                <tbody>
                                                        @foreach ($jobs as $job)
                                                        <tr>
                                                          <th scope="row">{{ $job->id }}</th>
                                                          <td>{{ $job->name }}</td>
                                                          <td>{{ $job->age }}</td>
                                                          <td>{{ $job->sex }}</td>
                                                          <td>{{ $job->email }}</td>
                                                          <td>{{ $job->phone }}</td>
                                                          <td>{{ $job->DG }}</td>
                                                          <td>
                                                          <!-- Button trigger modal -->
                                                          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
                                                              السيرة الذاتية
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
                                                                      {{ $job->about }}

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

                                {{ $jobs->links() }}


            </div>
        </div>
    </div>
</div>
@endsection
