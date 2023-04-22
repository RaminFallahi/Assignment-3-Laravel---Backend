@extends ('layout.console')

@section ('content')

<section class="w3-padding">

    <h2>Add Job</h2>

    <form method="post" action="/console/jobs/add" novalidate class="w3-margin-bottom">

        @csrf

        <div class="w3-margin-bottom">
            <label for="title">Title:</label>
            <input type="title" name="title" id="title" value="{{old('title')}}" required>
            
            @if ($errors->first('title'))
                <br>
                <span class="w3-text-red">{{$errors->first('title')}}</span>
            @endif
        </div>

        <div class="w3-margin-bottom">
            <label for="company">Company:</label>
            <input type="text" name="company" id="company" value="{{old('company')}}" required>

            @if ($errors->first('company'))
                <br>
                <span class="w3-text-red">{{$errors->first('company')}}</span>
            @endif
        </div>

        <div class="w3-margin-bottom">
            <label for="location">Location:</label>
            <input type="text" name="location" id="location" value="{{old('location')}}" required>

            @if ($errors->first('location'))
                <br>
                <span class="w3-text-red">{{$errors->first('location')}}</span>
            @endif
        </div>

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
        <button type="submit" class="w3-button w3-green">Add Job</button>


    </form>

    <a href="/console/jobs/list">Back to Job List</a>

</section>

@endsection