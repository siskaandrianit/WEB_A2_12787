@extends('base')
@section('content')
    <!-- Main Section -->
    <section class="main-section">
        <!-- Add Your Content Inside -->
        <div class="content">
            <!-- Remove This Before You Start -->
            <h1>Tambah Admin</h1>
            <hr>
            <form action="{{ route('admin.store') }}" method="post">
                {{ csrf_field() }}
				<div class="form-group">
                    <label for="id">ID:</label>
                    <input type="number" class="form-control" id="usr" name="id">
                </div>
                <div class="form-group">
                    <label for="nama">Nama:</label>
                    <input type="text" class="form-control" id="usr" name="nama">
                </div>
				 <div class="form-group">
                    <label for="ipv4">ipv4:</label>
                    <input type="text" class="form-control" id="usr" name="ipv4">
                </div>
				
				<div class="form-group">
                    <label for="username">Username:</label>
                    <input type="text" class="form-control" id="usr" name="username">
                </div>
				<div class="form-group">
                    <label for="password">Password:</label>
                    <input type="text" class="form-control" id="usr" name="password">
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-md btn-primary">Submit</button>
                    <button type="reset" class="btn btn-md btn-danger">Cancel</button>
                </div>
            </form>
        </div>
        <!-- /.content -->
    </section>
    <!-- /.main-section -->
@endsection