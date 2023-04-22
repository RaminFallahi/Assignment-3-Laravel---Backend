@extends ('layout.console')

@section ('content')

<section class="w3-padding">

    <h2>Edit Education</h2>

    <form method="post" action="/console/educations/edit/{{$education->id}}" novalidate class="w3-margin-bottom">

        @csrf

        <div class="w3-margin-bottom">
            <label for="level">Level:</label>
            <input type="level" name="level" id="level" value="{{old('title')}}" required>
            
            @if ($errors->first('level'))
                <br>
                <span class="w3-text-red">{{$errors->first('level')}}</span>
            @endif
        </div>

        <div class="w3-margin-bottom">
            <label for="title">Title:</label>
            <input type="title" name="title" id="title" value="{{old('title')}}" required>
            
            @if ($errors->first('title'))
                <br>
                <span class="w3-text-red">{{$errors->first('title')}}</span>
            @endif
        </div>

        <div class="w3-margin-bottom">
            <label for="school">Institution:</label>
            <input type="text" name="school" id="school" value="{{old('institution')}}" required>

            @if ($errors->first('school'))
                <br>
                <span class="w3-text-red">{{$errors->first('school')}}</span>
            @endif
        <div class="w3-margin-bottom">
            <label for="started">Started:</label>
            <input type="date" name="started" id="started" value="{{old('started')}}" required>

            @if ($errors->first('started'))
                <br>
                <span class="w3-text-red">{{$errors->first('started')}}</span>
            @endif
        </div>

        <div class="w3-margin-bottom">
            <label for="ended">Ended:</label>
            <input type="date" name="ended" id="ended" value="{{old('ended')}}" required>

            @if ($errors->first('ended'))
                <br>
                <span class="w3-text-red">{{$errors->first('ended')}}</span>
            @endif
        </div>
                
        <button type="submit" class="w3-button w3-green">Edit Education</button>

    </form>

    <a href="/console/educations/list">Back to Education List</a>

</section>

@endsection
