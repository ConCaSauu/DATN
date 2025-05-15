@extends('admin.master')

@section('content')

<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">List Jobs</h3>
    </div>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="card-body"> 
        <div class="table table-responsive">            
            <table id="tb" class="table table-striped">
                <thead>
                    <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Category Id</th>
                    <th scope="col">Company Id</th>
                    <th scope="col">Name</th>
                    <th scope="col">Salary Min</th>
                    <th scope="col">Salary Max</th>
                    <th scope="col">Status</th>
                    <th scope="col">Created At</th>
                    <th scope="col">Updated At</th>
                    <th scope="col">Manage</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($jobs as $item)

                    <tr>
                            
                        <th scope="row">{{$item->id}}</th>
                        <td>{{$item->category->name}}</td>
                        <td>{{$item->ucid}}</td>
                        <td>{{$item->name}}</td>
                        <td>@if($item->salary_min)
                                {{number_format($item->salary_min)}} Tr
                            @else
                                none
                            @endif
                        </td>
                        <td>
                            @if($item->salary_max)
                                {{number_format($item->salary_max)}} Tr
                            @else
                                none
                            @endif
                        </td>
                        <td>
                            @if ($item->status == 'active')
                                <span class="text text-success">Active</span>
                            @elseif($item->status == 'unactive')
                                <span class="text text-danger">Unactive</span>
                            @elseif($item->status == 'lock')
                                <span class="text text-danger">Lock</span>
                            @elseif($item->status == 'pending')
                                <span class="text text-warning">Pending</span>
                            @endif
                        </td>
                        <td>{{$item->created_at}}</td>
                        <td>{{$item->updated_at}}</td>
                        <td style="display:flex">   
                            <a style="flex: 1" href="{{route('job.edit', $item)}}" ><i class="fa-solid fa-pen-to-square"></i></a>
                            @if($item->status == 'active')
                            <a style="flex: 1" href="{{route('job.lock', $item)}}" onclick="lockJobWithConfirmation(event)"><i style="color: red" class="fa-solid fa-lock"></i></a> 
                            @elseif($item->status == 'pending')
                            <a style="flex: 1" href="{{route('job.accept', $item)}}"><i style="color:green" class=" fa-solid fa-circle-check"></i></a>
                            @elseif($item->status == 'lock')
                            <a style="flex: 1" href="{{route('job.unlock', $item)}}"><i style="color:green" class="fa-solid fa-key"></i></a>
                            @else
                            @endif
                        </td>
                    </tr>
                    @empty
                        <h2>No Data</h2>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
<script>
    function submitWithConfirmation(event) {
        
        const confirmed = confirm('Are you sure you want to lock this Job?');
        if(!confirmed) {
            event.preventDefault(); // prevent default link behavior
        }
    }
</script>
@endsection

{{--  

--}}