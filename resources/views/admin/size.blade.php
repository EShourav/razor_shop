@extends('admin_layout')
@section('admin_content')
    <div class="content-wrapper">
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">All Size</h3>
                                <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 150px;">

                    <div class="input-group-append">
                      <a href="{{URL::to('/add_size')}}"><input type="button" name="add_size" value="&#10133; Size"></a>
                    </div>
                  </div>
                </div>
                            </div>
                            <div class="card-body">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Size</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                            $all_size_info=DB::table('size')->get();
                                            foreach($all_size_info as $v_size)
                                            {?>
                                        <tr>
                                            <td>{{ $v_size -> id}}</td>
                                            <td>{{ $v_size -> size}}</td>
                                            <td>edit</td>
                                        </tr>
                                    <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </section>
    </div>

@endsection