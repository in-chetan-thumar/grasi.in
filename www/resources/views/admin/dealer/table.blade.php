<table id="user-data " class="table table-striped table-bordered dt-responsive mt-2"
    style="border-collapse: collapse; border-spacing: 0; width: 100%;">
    <thead>
        <tr>
            <th>Sort id</th>
            <th>Dealership name</th>
            <th>Name</th>
            <th>Number</th>
            <th>Email</th>
            <th>Address</th>
            <th>State</th>
            <th>City</th>
            <th>Pincode</th>
            <th>Status</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($tableData as $key => $row)
            <tr>
                <td>{{ $row->sort_id }}</td>
                <td>{{ $row->dealership_name }}</td>
                <td>{{ $row->contact_name }}</td>
                <td>{{ $row->contact_number }}</td>
                <td>{{ $row->contact_email }}</td>
                <td>{{ $row->address }}</td>
                <td> {{ $row->state }}</td>
                <td>{{ $row->city }}</td>
                <td>{{ $row->pincode }}</td>
                <td>
                    @if ($row->is_active == 'Y')
                        <span class="badge bg-success">Active</span>
                    @else
                        <span class="badge bg-danger">Inactive</span>
                    @endif
                </td>
                <td>

                    <div class="btn-group" role="group">
                        <button id="btnGroupVerticalDrop1" type="button" class="btn btn-primary dropdown-toggle"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                            Action
                        </button>
                        <div class="dropdown-menu">
                            @can('dealers.edit')
                                <a class="dropdown-item" onclick="showEditModel(event)"
                                    href="{{ route('dealers.edit', $row->id) }}">Edit</a>
                            @endcan

                            @if ($row->is_active == 'Y')
                                <a class="dropdown-item" href="{{ route('dealers.status', $row->id) }}">Inactive</a>
                            @else
                                <a class="dropdown-item" href="{{ route('dealers.status', $row->id) }}">Active</a>
                            @endif
                            @can('dealers.destroy')
                                {{-- <a class="dropdown-item"
                                    onclick="if(confirm('Are you sure you want to delete.')) document.getElementById('delete-{{ $row->id }}').submit()">
                                    Delete</a>
                                <form id="delete-{{ $row->id }}" action="{{ route('dealers.destroy', $row->id) }}"
                                    method="POST">
                                    @method('DELETE')
                                    @csrf
                                </form> --}}
                                <button class="dropdown-item" data-url="{{ route('dealers.destroy', $row->id) }}"
                                    onclick="confirmDelete(event)">
                                    Delete
                                </button>
                            @endcan
                        </div>
                    </div>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

{{ $tableData->links() }}
