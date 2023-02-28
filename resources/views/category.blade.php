<section class="text-center mt-4">
    <h3>Category table</h3>
</section>
<section>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <table id="categoryTable" class="table table-striped table-bordered">
                    <thead>
                        <th>ID</th>
                        <th>Name </th>
                        <th>Image</th>
                        <th>Description</th>
                    </thead>
                    <tbody>
                        @forelse($categories as $category)
                            <tr>
                                <td>{{ $category->id }}</td>
                                <td>{{ $category->name }}</td>
                                <td><img src="backend/images/{{ $category->image }}" alt="category-image"
                                        style="height:80px;width:120px;"></td>
                                <td>{{ $category->description }}</td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="3" class="text-danger font-weight-bold">No data available</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>

{{-- @section('admin-js')
    <script>
        $(document).ready(function() {
            $('#categoryTable').DataTable();
        });
    </script>
@endsection --}}
