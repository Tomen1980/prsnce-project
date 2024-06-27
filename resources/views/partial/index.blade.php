<!-- resources/views/items/index.blade.php -->

<div class="container">
    <div class="row">
        <div class="col-md-8">
            <h1>Daftar Item</h1>

            <div class="mb-3">
                <input
                    type="text"
                    id="search"
                    class="form-control"
                    placeholder="Cari item..."
                    name="search"
                    value="{{ isset($search) ? $search : '' }}"
                >
            </div>

            <ul id="item-list" class="list-group">
                @include('partial.list')
            </ul>

            {{ $users->links() }}
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        // Fungsi untuk melakukan pencarian secara live
        $('#search').on('keyup', function() {
            var search = $(this).val();

            $.ajax({
                url: '{{ route("searchPeserta") }}',
                type: 'GET',
                data: {
                    'search': search
                },
                success: function(data) {
                    $('#item-list').html(data);
                }
            });
        });
    });
</script>
