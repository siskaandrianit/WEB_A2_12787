@extends('base')
@section('content')
    <!-- Main Section -->
    <section class="main-section">
        <!-- Add Your Content Inside -->
        <div class="content">
            <!-- Remove This Before You Start -->
            <h1>Edit Admin</h1>
            <hr>
            @foreach($data as $datas)
            <form action="{{ route('admin.update', $datas->id) }}" method="post">
                {{ csrf_field() }}
                {{ method_field('PUT') }}
               <div class="form-group">
                    <label for="id">ID:</label>
                    <input type="number" class="form-control" id="usr" name="id" value="{{$datas->id}}">
                </div>
                 <div class="form-group">
                    <label for="nama">Nama:</label>
                    <input type="text" class="form-control" id="usr" name="nama" value="{{ $datas->nama }}">
                </div>
                <div class="form-group">
                    <label for="ipv4">IPv4:</label>
                    <input type="ipv4" class="form-control" id="ipv4" name="ipv4" value="{{ $datas->ipv4 }}">
                </div>
                <div class="form-group">
                    <label for="username">Username:</label>
                    <input type="text" class="form-control" id="username" name="username" value="{{ $datas->username }}">
                </div>
                <div class="form-group">
                    <label for="password">Password:</label>
                    <input type="text" class="form-control" id="password" name="password" value="{{ $datas->password }}">
                </div>
               <div class="form-group">
                    <button type="submit" class="btn btn-md btn-primary">Submit</button>
                    <button type="reset" class="btn btn-md btn-danger">Cancel</button>
                </div>
            </form>
            @endforeach
        </div>
        <!-- /.content -->
    </section>
    <!-- /.main-section -->
@endsection