@extends('layouts.app')

@section('content_header_title')
    Dashboard
@endsection

@section('content_body')
    <div class="row">
        <div class="col-lg-3 col-md-6 col-sm-12">
            <x-adminlte-card title="Total Students" theme="primary" icon="fas fa-user">
                <h2>{{$total_students}}</h2>
            </x-adminlte-card>        
        </div>

        <div class="col-lg-9 col-md-6 col-sm-12">
            <x-adminlte-card title="Grade wise students" theme="success" icon="fas fa-chart-bar">
                <canvas id="salesChart" height="150"></canvas>
            </x-adminlte-card>
        </div>
    </div>
@endsection

@push('js')
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
document.addEventListener("DOMContentLoaded", function () {
    new Chart(document.getElementById('salesChart'), {
        type: 'bar',
        data: {
            labels: @json($labels),
            datasets: [{
                label: 'Students',
                data: @json($values),
                borderWidth: 1,
            }]
        }
    });
});
</script>
@endpush
