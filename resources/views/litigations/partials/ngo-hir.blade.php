{{-- dd($information['ngohir'])  --}}
<div class="cbrms-tasks">
@if($information['current_task_status'] != 'Complete' && $information['ngohir'] != NULL)
    @if($information['ngohir']->interview_info > 0 && $information['ngohir']->basic_info && $information['ngohir']->address_at_source > 0 )
        <div class="completer">
            {!! Form::open(array('url' => '/cases/'.$litigation->id.'/task/9', 'method' => 'post', 'class' => 'form-horizontal')) !!}
                {!! Form::hidden('status_id', '4') !!}
                {!! Form::submit('Mark as Complete', ['class' => 'btn btn-complete']) !!}
            {!! Form::close() !!}
        </div>
    @endif
@endif
@if( $information['current_task_status'] == 'Complete' )
    <div class="completer print">
        <a target="_blank" class="btn btn-success" href="/cases/print/ngo-hir/{{$litigation->id}}"><span class="glyphicon glyphicon-print" aria-hidden="true"></span> Print</a>
    </div>
@endif

@if(count($information['ngohir']))
    @include('ngohirs.edit_partial')
@else
    @include('ngohirs.create_partial')
@endif
    @include('ngohirs.docs')
</div>

<script>


    $( document ).ready(function() {
        $('.male').click(function() {
            if($('.male').is(':checked')) {
                $('.for-female-only').css('display','none');
            }
        });

        $('.female').click(function() {
            if($('.female').is(':checked')) {
                $('.for-female-only').css('display','block');
            }
        });
    });
</script>