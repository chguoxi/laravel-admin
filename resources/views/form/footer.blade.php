<div class="card-footer row">

    <div class="col-md-{{$width['label']}}">
    </div>

    <div class="col-md-{{$width['field']}}">

        @if(in_array('submit', $buttons))
        <div class="btn-group">
            <button type="submit" class="btn btn-@color">{{ admin_trans('admin.submit') }}</button>
        </div>

        @foreach($submit_redirects as $value => $redirect)
            @if(in_array($redirect, $checkboxes))
            <span class="icheck-default">
                <input id="@id" type="checkbox" class="after-submit" name="_saved" value="{{ $value }}" {{ ($default_check == $redirect) ? 'checked' : '' }}>
                <label for="@id" class="float-right" style="margin: 5px 10px 0 0;">
                     {{ admin_trans("admin.{$redirect}") }}
                </label>
            </span>
            @endif
        @endforeach

        @endif

        @if(in_array('reset', $buttons))
        <div class="btn-group float-left">
            <button type="reset" class="btn btn-warning">{{ admin_trans('admin.reset') }}</button>
        </div>
        @endif

        @if(in_array('back', $buttons))
            <div class="btn-group">
                <button type="button" class="btn btn-info go-back">{{ admin_trans('admin.back') }}</button>
            </div>
        @endif
    </div>
</div>
