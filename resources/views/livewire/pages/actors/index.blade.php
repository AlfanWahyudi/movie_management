<section>
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Actor</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <button class="btn btn-primary">Add</button>
        </div>
    </div>
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">Name</th>
                <th scope="col">Birth Date</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($actors as $actor)
                <tr>
                    <td>{{ $actor->name }}</td>
                    <td>{{ $actor->birthdate }}</td>
                    <td>Action</td>
                </tr>
            @empty
                <tr>
                    <td colspan="3">
                        <p class="text-center fw-medium py-3 m-0">There is no records to display</p>
                    </td>
                </tr>
            @endforelse
        </tbody>
    </table>
</section>
