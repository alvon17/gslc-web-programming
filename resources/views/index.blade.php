@extends('layout')
@section('title', 'All Class')

@section('content')
    <form class="row g-3 search" action="" method="GET">
        <div class="col-auto">
            <input type="search" class="form-control name" placeholder="Search Name" name="name">
        </div>
        <div class="col-auto">
            <button type="submit" class="btn btn-primary mb-3 btn-confirm">Confirm identity</button>
        </div>
    </form>
    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">Name</th>
                <th scope="col">Age</th>
                <th scope="col">Speciality</th>
                <th scope="col">Campus Region</th>
            </tr>
        </thead>
        <tbody>

        </tbody>
        <tr>
            <td>
                @forelse ($studentName as $name)
                    <p>{{ $name }}</p>
                @empty
                    <p>No Student</p>
                @endforelse
            </td>
            <td>
                @foreach ($studentAge as $age)
                    <p>{{ $age }}</p>
                @endforeach
            </td>
            <td>
                @for ($i = 0; $i < count($studentSpeciality); $i++)
                    <p>{{ $studentSpeciality[$i] }}</p>
                @endfor
            </td>
            <td>
                @php
                    $i = 0;
                @endphp
                @while ($i < count($studentCampus))
                    <p>{{ $studentCampus[$i] }}</p>
                    @php
                        $i++;
                    @endphp
                @endwhile
            </td>
        </tr>
        </tbody>
    </table>
@endsection
