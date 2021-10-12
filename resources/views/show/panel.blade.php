
<div class="card card-outline card-{{ $style }}">
    <div class="card-header">
        <h3 class="card-title">{{ $title }}</h3>
        <div class="card-tools">
            {!! $tools !!}
        </div>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <div class="form-horizontal">

        <div class="card-body">

            <div class="fields-group">

                @foreach($fields as $field)
                    {!! $field->render() !!}
                @endforeach
            </div>

        </div>
        <div class="card-footer row">
            <div class="col-md-2">
            </div>
            <div class="col-md-8">


                    @if($buttons)
                        @foreach($buttons as $button)
                            {!! $button->render()!!}
                        @endforeach
                    @endif


            </div>
        </div>


        <!-- /.card-body -->
    </div>
</div>
