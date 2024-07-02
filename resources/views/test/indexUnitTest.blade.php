<!-- resources/views/units/index.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD with Modal</title>
    <!-- Tailwind CSS -->
    {{-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> --}}
    <!-- jQuery -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>
<body>
    <div class="container mx-auto mt-8">
        <h1 class="text-3xl font-semibold mb-4">Unit List</h1>

        <!-- Button to open modal -->
        <button id="openAddModal" class="px-4 py-2 bg-green-500 text-white rounded-lg mb-4">Add Unit</button>

        <!-- Table -->
        <table class="w-full border-collapse">
            <thead>
                <tr>
                    <th class="border p-2">ID</th>
                    <th class="border p-2">Unit Type</th>
                    <th class="border p-2">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($units as $unit)
                    <tr>
                        <td class="border p-2">{{ $unit->id }}</td>
                        <td class="border p-2">{{ $unit->unitType }}</td>
                        <td class="border p-2">
                            <button class="px-4 py-2 bg-blue-500 text-white rounded-lg editButton" data-id="{{ $unit->id }}">Edit</button>
                            <button class="px-4 py-2 bg-red-500 text-white rounded-lg deleteButton" data-id="{{ $unit->id }}">Delete</button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <!-- Add/Edit Modal -->
    <div id="unitModal" class="fixed inset-0 flex items-center justify-center z-50 hidden bg-black bg-opacity-50">
        <div class="bg-white p-8 rounded-lg shadow-lg w-1/2">
            <h2 id="modalTitle" class="text-2xl font-semibold mb-4">Add Unit</h2>
            <form id="unitForm">
                @csrf
                <input type="hidden" id="unit_id">
                <div class="mb-4">
                    <label for="unitType" class="block text-sm font-medium text-gray-700">Unit Type</label>
                    <input type="text" id="unitType" name="unitType" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" required>
                </div>
                <div class="flex justify-end">
                    <button type="button" id="closeModal" class="px-4 py-2 bg-gray-200 text-gray-700 rounded-lg mr-2">Close</button>
                    <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded-lg">Save</button>
                </div>
            </form>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            // Open Add Modal
            $('#openAddModal').click(function() {
                $('#unitForm')[0].reset();
                $('#modalTitle').text('Add Unit');
                $('#unit_id').val('');
                $('#unitModal').removeClass('hidden');
            });

            // Open Edit Modal
            $('.editButton').click(function() {
                var unitId = $(this).data('id');
                $.get('/units/' + unitId, function(data) {
                    $('#modalTitle').text('Edit Unit');
                    $('#unit_id').val(data.id);
                    $('#unitType').val(data.unitType);
                    $('#unitModal').removeClass('hidden');
                });
            });

            // Close Modal
            $('#closeModal').click(function() {
                $('#unitModal').addClass('hidden');
            });

            // Submit Form
            $('#unitForm').submit(function(e) {
                e.preventDefault();
                var unitId = $('#unit_id').val();
                var url = unitId ? '/units/' + unitId : '/units';
                var method = unitId ? 'PUT' : 'POST';
                $.ajax({
                    url: url,
                    type: method,
                    data: $(this).serialize(),
                    success: function(response) {
                        alert(response.message);
                        location.reload(); // Reload page after saving
                    },
                    error: function(xhr) {
                        console.log(xhr.responseJSON);
                    }
                });
            });

            // Delete Unit
            $('.deleteButton').click(function() {
                if (!confirm('Are you sure?')) return;
                var unitId = $(this).data('id');
                $.ajax({
                    url: '/units/' + unitId,
                    type: 'DELETE',
                    data: {
                        _token: '{{ csrf_token() }}'
                    },
                    success: function(response) {
                        alert(response.message);
                        location.reload(); // Reload page after deletion
                    },
                    error: function(xhr) {
                        console.log(xhr.responseJSON);
                    }
                });
            });
        });
    </script>
</body>
</html>
