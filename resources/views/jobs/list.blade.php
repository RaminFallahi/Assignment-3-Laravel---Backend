@extends ('layout.console')

@section ('content')

<section class="w3-padding">

    <h2>Manage Jobs</h2>

    <table class="w3-table w3-stripped w3-bordered w3-margin-bottom">
        <tr class="w3-red">
            <th>Title</th>
            <th>Company</th>
            <th>Location</th>
            <th>Start Date</th>
            <th>End Date</th>

        </tr>
        @foreach ($jobs as $job)
            <tr>
                <td>{{$job->title}}</td>
                <td>{{$job->company}}</td>
                <td>{{$job->location}}</td>
                <td>{{$job->start_date}}</td>
                <td>{{$job->end_date}}</td>
                <td><a href="/console/jobs/edit/{{$job->id}}">Edit</a></td>
                <td>
                    <a href="/console/jobs/delete/{{ $job->id }}" 
                    onclick="event.preventDefault(); document.getElementById('delete-form-{{ $job->id }}').submit();">Delete</a>
                    <form id="delete-form-{{ $job->id }}" action="/console/jobs/delete/{{ $job->id }}" method="POST" style="display: none;">
                        @csrf
                        @method('DELETE')
                    </form>
                </td>
            </tr>
        @endforeach
    </table>

    <a href="/console/jobs/add" class="w3-button w3-green">New Job</a>

</section>

@endsection
