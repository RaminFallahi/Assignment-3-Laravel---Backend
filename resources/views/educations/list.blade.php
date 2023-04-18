@extends ('layout.console')

@section ('content')

<section class="w3-padding">

    <h2>Manage Educations</h2>

    <table class="w3-table w3-stripped w3-bordered w3-margin-bottom">
        <tr class="w3-red">
            <th>Level</th>
            <th>Title</th>
            <th>School</th>
            <th>Started</th>
            <th>Ended</th>
            <th></th>
        </tr>
        <!-- loop through the educations -->
        <?php foreach($educations as $education): ?>
            <tr>
                <td>{{$education->level}}</td>
                <td>{{$education->title}}</td>
                <td>{{$education->school}}</td>

                <td>{{\Carbon\Carbon::parse($education->started)->format('m/Y')}}</td>
                <td>{{\Carbon\Carbon::parse($education->ended)->format('m/Y')}}</td>
               
                <td><a href="/console/educations/edit/{{$education->id}}">Edit</a></td>
                <td><a href="/console/educations/delete/{{$education->id}}">Delete</a></td>
            </tr>
        <?php endforeach; ?>
    </table>

    <a href="/console/educations/add" class="w3-button w3-green">New Education</a>

</section>
