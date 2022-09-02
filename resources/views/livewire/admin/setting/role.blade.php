<div class="container-fluid">
    <div data-widget-group="group1">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h2>{{ $header }}</h2>
                        <div class="panel-ctrls"></div>
                    </div>
                    <div class="panel-body">
                        <a data-toggle="modal" href="#myModal" wire:click="clear" class="btn btn-success btn-sm"><i class="fa fa-plus"></i> Create</a>
                        <br>
                        <br>
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6">
                                <select wire:model="paginate" class="form-control sm">
                                    <option value="5">5</option>
                                    <option value="10">10</option>
                                    <option value="50">50</option>
                                    <option value="100">100</option>
                                </select>
                            </div>
                            <div class="col-lg-4 col-md-4"></div>
                            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6">
                                <div class="input-group">
                                    <span class="input-group-addon">
                                        <i class="ti ti-search"></i>
                                    </span>
                                    <input wire:model="search" type="text" class="form-control sm" placeholder="Search......" autocomplete="current-password">
                                </div>
                            </div>
                        </div>
                        <br>
                        <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Guard Name</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($data as $r)
                                    <tr>
                                        <td>{{ $r->name }}</td>
                                        <td>{{ $r->guard_name }}</td>
                                        <td>
                                            <a data-toggle="modal" href="#myModal" wire:click="getDetail({{$r->id}})" class="btn btn-primary btn-sm">
                                                <i class="fa fa-pencil"></i> Update
                                            </a>
                                            <button wire:click="confirmDelete({{ $r->id }})" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i>
                                                Delete
                                            </button>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="panel-footer text-right">
                        {{ $data->links('livewire.pagination') }}
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div wire:ignore.self class="modal fade" id="myModal" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div wire:ignore.self class="modal-backdrop fade in" style="height: 100%;opacity: 0.5 !important;"></div>
        <div class="modal-dialog">
            <form wire:submit.prevent="save">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h2 class="modal-title">{{ $statusUpdate ? 'Update' : 'Create' }} {{ $header }}</h2>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-12">
                                <label>Name</label>
                                <div class="input-group">
                                    <span class="input-group-addon">
                                        <i class="ti ti-bookmark"></i>
                                    </span>
                                    <input wire:model="name" type="text" class="form-control sm">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <label>Guard Name</label>
                                <div class="input-group">
                                    <span class="input-group-addon">
                                        <i class="ti ti-bookmark"></i>
                                    </span>
                                    <input wire:model="guard_name" type="text" class="form-control sm">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default btn-sm" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-danger btn-sm">Save</button>
                    </div>
                </div><!-- /.modal-content -->
            </form>
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
</div> <!-- .container-fluid -->
