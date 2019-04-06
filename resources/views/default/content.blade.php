{{--{{$bvar or $title}}--}}
{{--@if(count($data) > 3)--}}

{{--    В массиве больше трех элементов--}}
{{--    @elseif(count($data) > 10)--}}
{{--    В массиве больше десяти элементов--}}
{{--    @else--}}
{{--    В массиве неизвестность бесконечность жопа--}}
{{--@endif--}}

{{--<ul>--}}
{{--    @for($i=0; $i < count($dataI); $i++)--}}

{{--        <li>{{$dataI[$i]}}</li>--}}

{{--    @endfor--}}
{{--</ul>--}}

{{--@foreach($data as $k=>$item)--}}
{{--    <li>{{$k .'=>'. $item}}</li>--}}
{{--@endforeach--}}

@forelse($data as $k=>$item)
    <li>{{$k .'=>'. $item}}</li>
    @empty
    <p>No items</p>
    @endforelse

@each('default.list', $data, 'value')

@myDir(SVOYAk)

<div class="card mb-4 box-shadow">
    <div class="card-header">
        <h4 class="my-0 font-weight-normal">Pro</h4>
    </div>
    <div class="card-body">
        <h1 class="card-title pricing-card-title">$15
            <small class="text-muted">/ mo</small>
        </h1>
        <ul class="list-unstyled mt-3 mb-4">
            <li>20 users included</li>
            <li>10 GB of storage</li>
            <li>Priority email support</li>
            <li>Help center access</li>
        </ul>
        <button type="button" class="btn btn-lg btn-block btn-primary">Get started</button>
    </div>
</div>
