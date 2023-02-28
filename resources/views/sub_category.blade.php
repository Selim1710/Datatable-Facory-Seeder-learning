<section class="text-center mt-4">
    <h3>Sub-Category table</h3>
</section>
<section>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <table id="subCategoryTable" class="table table-striped table-bordered">
                    <thead>
                        <th>ID</th>
                        <th>Category ID</th>
                        <th>Name</th>
                        <th>Description</th>
                    </thead>
                    <tbody>
                        @forelse($subCategories as $subCategory)
                            <tr>
                                <td>{{ $subCategory->id }}</td>
                                <td>{{ $subCategory->category_id }}</td>
                                <td>{{ $subCategory->name }}</td>
                                <td>{{ $subCategory->description }}</td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="4" class="text-danger font-weight-bold">No data available</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>

@section('admin-js')
    <script>
        $(document).ready(function() {
            $('#subCategoryTable').DataTable();
        });
    </script>
@endsection
