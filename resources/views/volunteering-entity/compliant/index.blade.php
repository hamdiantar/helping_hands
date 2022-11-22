@extends('volunteering-entity.layouts.app')

@section('title', 'opportunities')

@section('breadcrumb')
    <li><a href="#">Compliant Management </a></li>
@endsection
@section('content')
    <div class="container-fluid py-2">
        <div class="row">
            <div class="col-12">
                <div class="card my-4">

                    <div class="card-header p-0 position-relative mt-n4 mx-3">
                        <div class="bg-gradient-warning shadow-warning border-radius-lg pt-3 pb-3">
                            <h6 class="text-white text-capitalize ps-3">Compliant Management</h6>
                            <a href="{{route('volunteering-entity.compliant.create')}}"
                               class="btn bg-gradient-dark btn-sm btn-add"><i
                                        class="fa fa-plus fs-15"></i></a>
                        </div>
                    </div>

                    <div class="card-body ml-3 mr-3">
                        <div class="table-responsive p-0">
                            <table class="table  table-bordered mb-0 " id="dataTable">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Title</th>
                                    <th>Against</th>
                                    <th>Title</th>
                                    <th>Status</th>
                                    <th>Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($items as $item)
                                    <tr>
                                        <td>{{$item->COMP_ID}}</td>
                                        <td>{{optional($item->volunteer)->full_name}}</td>
                                        <td><p class="text-xs font-weight-bold mb-0">{{$item->COMP_TITLE}}</p></td>
                                        <td>{{$item->COMP_AGAINST}}</td>
                                        <td>{{$item->COMP_TITLE}}</td>
                                        <td>{{$item->COMP_STATUS}}</td>
                                        <td class="align-middle"><a
                                                    href="{{route('volunteering-entity.compliant.show', $item->COMP_ID)}}"
                                                    class="text-secondary font-weight-bold text-xs"><i
                                                        class="fa fa-eye text-info"></i></a>
                                            <a href="{{route('volunteering-entity.compliant.edit', $item->COMP_ID)}}"
                                               class="text-secondary font-weight-bold text-xs  ml-2"><i
                                                        class="fa fa-pen text-info"></i></a>
                                            <a style="cursor: pointer"
                                               onclick="confirmAction('formid{{$item->COMP_ID}}', 'delete ?')"
                                               class="text-secondary font-weight-bold text-xs  ml-2"><i
                                                        class="fa fa-trash text-danger"></i>
                                            </a>
                                            <form id="formid{{$item->OPP_ID}}" method="post"
                                                  action="{{route('volunteering-entity.compliant.destroy', $item->COMP_ID)}}">
                                                @csrf
                                                @method('DELETE')
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
