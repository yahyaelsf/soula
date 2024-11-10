<form action="{{ route('admin.musics.store') }}" method="post">

    @csrf

    @isset($music)
        <input type="hidden" name="pk_i_id" value="{{ $music->getKey() }}" />
    @endisset

    <x-localizable-inputs :inputs="$inputs" :item="$music">
    </x-localizable-inputs>

    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label class="form-control-label">الكورسات</label>
                {!! Form::select('fk_i_cource_id', $courceLabels , $music->fk_i_cource_id ?? '' , ['class' => 'form-control', 'id' => 'fk_i_cource_id']) !!}
            </div>
        </div>
         <div class="col-md-6">
            <div class="form-group">
                <label class="form-control-label">الفيديوهات</label>
                {!! Form::select('fk_i_vedio_id', $vedioLabels , $music->fk_i_vedio_id ?? '' , ['class' => 'form-control', 'id' => 'fk_i_vedio_id']) !!}
            </div>
        </div>

        <div class="col-md-12">
            <div class="form-group">
                <label class="form-control-label">الموسيقى:</label>
                <input name="s_music" type="file" multiple class="form-control-file" />
            </div>
        </div>
    </div>

    {{-- <div class="row">
        <div class="form-group">
            <div class="col-lg-12 col-xl-12">
                <div class="kt-avatar kt-avatar--outline" id="kt_user_avatar_1">
                    <div class="kt-avatar__holder"
                        style="background-image: url({{ $music && $music->s_cover ? asset($music->s_cover) : '' }})">
                    </div>
                    <label class="kt-avatar__upload" data-toggle="kt-tooltip" title=""
                        data-original-title="Change avatar">
                        <i class="fa fa-pen"></i>
                        <input type="file" name="s_cover">
                    </label>
                    <span class="kt-avatar__cancel" data-toggle="kt-tooltip" title=""
                        data-original-title="Cancel avatar">
                        <i class="fa fa-times"></i>
                    </span>
                </div>
            </div>
        </div>
    </div> --}}



    <div class="d-flex justify-content-end">
        <button type="submit" class="btn btn-primary">@lang('buttons.save')</button>
        <button type="button" class="btn btn-secondary ml-2" data-dismiss="modal">@lang('buttons.close')</button>
    </div>

</form>
