@extends('layouts.admin')

@section('content')
<div class="box box-info">
    <div class="box-header">
      <h3 class="box-title">Hover Data Table</h3>
    </div>
    <div class="box-body">
            
        <table class="table table-bordered table-hover dataTable">
            <thead>
                <tr>
                    <th>#</th>
                    <th>用户</th>
                    <th>电话</th>
                    <th>金额</th>
                    <th>期限</th>
                    <th>电话</th>
                    <th>城市</th>
                    <th>品牌</th>
                    <th>归属地</th>
                    <th>购于</th>
                    <th>购买方式</th>
                    <th>状态</th>
                    <th>操作</th>

                </tr>
            </thead>
            <tbody>
            @foreach($cars as $car)
                <tr>
                    <th>{{ $car->id }}</th>
                    <td>{{ $car->real_name }}</td>
                    <td>{{ $car->phone }}</td>
                    <td><span class="glyphicon glyphicon-yen" aria-hidden="true"></span> {{ $car->loan }}</td>
                    <td>{{ $car->duration }}</td>
                    <td>{{ $car->phone }}</td>
                    <td>{{ $car->city }}</td>
                    <td>{{ $car->brand }}</td>
                    <td>{{ $car->location }}</td>
                    <td>{{ $car->bought_at }}</td>
                    <td>{{ $car->paid_by }}</td>
                    <td>{{ $car->status }}</td>
                    <td>
                        <button class='btn-success' onclick='pass({{ $car->id }}, this)'><span class="fa fa-check" aria-hidden="true"></span> </button>
                        <button class='btn-danger' onclick='reject({{ $car->id }}, this)'><span class="fa fa-close" aria-hidden="true"></span> </button>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <div class="pull-right">
            {!! $cars->links() !!}        
        </div>
    </div>
</div>

@endsection

@section('js')
<script>
function pass(id, btn)
{
    $.post('/cars/'+id+'/pass' ,{}, function(result){
        $(btn).closest('tr').css('display', 'none');
        $('#success-div').show(); 

    });
}

function reject(id, btn)
{
    $.post('/applies/'+id+'/reject', {}, function(result){
        $(btn).closest('tr').css('display', 'none');
        $('#success-div').show();
    });
}
</script>
@stop