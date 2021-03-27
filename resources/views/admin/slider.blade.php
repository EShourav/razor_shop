@extends('admin_layout')
@section('admin_content')
    <div class="content-wrapper">
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">All Slider Image</h3>
                                <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 150px;">

                    <div class="input-group-append">
                      <a href="{{URL::to('/add_slider')}}"><input type="button" name="add_slider" value="&#10133; Slider Image"></a>
                    </div>
                  </div>
                </div>
                            </div>
                            <div class="card-body">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Image</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                            $all_slider_info=DB::table('sliders')->get();
                                            foreach($all_slider_info as $v_slider)
                                            {?>
                                        <tr>
                                            <td>{{ $v_slider -> id}}</td>
                                            <td><img src="{{ $v_slider -> image}}" style="width: 300px; height: 200px;"></td>
                                            <td>{{ $v_slider -> status}}</td>
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