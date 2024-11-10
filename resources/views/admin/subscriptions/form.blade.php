<form action="{{ route('admin.subscriptions.store') }}" method="post">

    @csrf

    @isset($subscription)
        <input type="hidden" name="pk_i_id" value="{{ $subscription->getKey() }}" />
    @endisset

    <x-localizable-inputs :inputs="$inputs" :item="$subscription">
    </x-localizable-inputs>

    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label class="form-control-label">الكورسات</label>
                {!! Form::select('fk_i_cource_id', $courceLabels, $subscription->fk_i_cource_id ?? '', [
                    'class' => 'form-control',
                    'id' => 'fk_i_cource_id',
                ]) !!}
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label class="form-control-label">الفيديوهات</label>
                {!! Form::select('fk_i_vedio_id', $vedioLabels, $subscription->fk_i_vedio_id ?? '', [
                    'class' => 'form-control',
                    'id' => 'fk_i_vedio_id',
                ]) !!}
            </div>
        </div>
         <div class="col-md-6">
            <div class="form-group">
                <label class="form-control-label"> اختار المستخدم</label>
                <select class="form-control" name="fk_i_user_id">
                    <option value="" selected disabled>اختار المستخدم</option>
                    @foreach($users as $user)
                        <option value="{{ $user->pk_i_id }}"
                        @if($user->pk_i_id ==$subscription->fk_i_user_id )selected @endif
                        >{{ $user->s_name }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label class="form-control-label">حالة الاشتراك</label>
                <select class="form-control" name="status">
                    <option value="" selected disabled>اختار حالة الدفع</option>
                    <option value="peending" @if($subscription->status == 'peending' )selected @endif>إنتظار القبول</option>
                    <option value="success" @if($subscription->status == 'success' )selected @endif>تم الدفع</option>
                    <option value="failed"  @if($subscription->status == 'failed' )selected @endif>الغاء الدفع</option>
                </select>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label class="form-control-label">طريقة الدفع</label>
                <select class="form-control" name="gateway">
                    <option value="" selected disabled>اختار حالة الدفع</option>
                    <option value="cash" @if($subscription->gateway == 'cash' )selected @endif> دفع كاش</option>
                    <option value="visa" @if($subscription->gateway == 'visa' )selected @endif> دفع بالفيزا</option>
                    <option value="paypal" disabled @if($subscription->gateway == 'paypal' )selected @endif> paypal</option>
                </select>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label class="form-control-label">السعر</label>
                <input type="number" name="amount" value="{{ $subscription->amount ?? '' }}" class="form-control" >
            </div>
        </div>
    </div>

    <div class="d-flex justify-content-end">
        <button type="submit" class="btn btn-primary">@lang('buttons.save')</button>
        <button type="button" class="btn btn-secondary ml-2" data-dismiss="modal">@lang('buttons.close')</button>
    </div>

</form>
