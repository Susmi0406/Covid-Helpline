 <div class="panel panel-primary">
        <div class="panel-heading">
            <h2 class="text-center">Multi Dropdown</h2>
        </div>
        <div class="panel-body">
            <div class="col-md-3">
                <select name="country" id="country" class="form-control">
                    <option value="" selected="false">Country</option>
                    @foreach ($district as $district)
                    <option value="{{$district->id}}">{{$district->district}}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-md-6 mt-3">
                <select name="moharea" id="moharea" class="form-control">
                    <option value="" selected="false">State</option>
                </select>
            </div>
        </div>

        <div class="col-md-3 mt-3">
            <button class="btn btn-primary rounded" type="submit" name="search">Search <i
                    class="fa fa-search"></i></button>
        </div>
    </div>

    <script>
    $(function() {
        $('select[name="district"]').on('change', function () {
            var id = $(this).val();

            if (id) {
                $.get('/getMoharea/' + id, function(data) {
                    $('select[name="moharea"]').empty();

                    $.each(data,function(key, value) {
                        $('select[name="moharea"]').append('<option value="' + key + '">' + value + '</option>');
                    });
                }, 'json');
            } else {
                $('select[name="moharea"]').empty();
            }
        });
    });
</script>