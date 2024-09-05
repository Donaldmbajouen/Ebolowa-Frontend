@extends('layouts.DashboardHome')

@section('content')

<div class="row">
    <div class="col-md-1"></div>
    <div class="col-md-10 table-responsive p-3 centered shadow-lg " style="background-color: white; color:black;">
        <div class="row bg-secondary-subtle p-3">
            <div class="ms-5 input_search">
                <i class="fa fa-search"></i>
                <input  type="text" placeholder="Rechrcher...">
            </div>
            <div class="col button-header">
                <button class="btn btn-primary btn-circle btn-md me-2"><i class="fa fa-plus"></i></button>
                {{-- <button class="btn btn-primary btn-rounded-circle btn-md me-2"data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@fat"><i class="fa fa-plus"></i></button> --}}
                <button class="btn btn-primary btn-circle btn-md me-5"><i class="fa fa-redo"></i></button>
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-xl">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h1 class="modal-title fs-5" id="exampleModalLabel">Ajouter une Structure</h1>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                          <form>
                            <div class="mb-3">
                              <label for="recipient-name" class="col-form-label">Recipient:</label>
                              <input type="text" class="form-control" id="recipient-name">
                            </div>
                            <div class="mb-3">
                              <label for="message-text" class="col-form-label">Message:</label>
                              <textarea class="form-control" id="message-text"></textarea>
                            </div>
                          </form>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                          <button type="button" class="btn btn-primary">Send message</button>
                        </div>
                      </div>
                    </div>
                  </div>
            </div>
        </div><br><br>
        <div class="col">
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">ID</th>
                    <th scope="col">First</th>
                    <th scope="col">Last</th>
                    <th scope="col">First</th>
                    <th scope="col">Last</th>
                    <th scope="col">Handle</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td style="color: rgb(8, 8, 8); diaplay:flex; justify-content:end;">
                        <a class=" nav-link btn-circle bg-primary"><i class="fa fa-eye"  ></i></a>
                        <a class=" nav-link btn-circle bg-success"><i class="fa fa-pen" ></i></a>
                        <a class="nav-link btn-circle bg-danger"><i class="fa fa-trash" ></i></a>
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">2</th>
                    <td>Jacob</td>
                    <td>Thornton</td>
                    <td>@fat</td>
                    <td>Jacob</td>
                    <td>Thornton</td>
                  </tr>
                  <tr>
                    <th scope="row">3</th>
                    <td>Larry the Bird</td>
                    <td>@twitter</td>
                    <td>@twitter</td>
                    <td>@twitter</td>
                    <td>@twitter</td>
                  </tr>
                </tbody>
            </table>
        </div>
    </div>

</div><br><br><br><b><br><br><br><br><br><br><br></b>

@endsection()
