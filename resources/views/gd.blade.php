@extends('layout')
@section('title', 'Class GD')

@section('content')
    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">Name</th>
                <th scope="col">Age</th>
                <th scope="col">Ipk</th>
                <th scope="col">Status</th>
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
                @for ($i = 0; $i < count($studentAge); $i++)
                    <p>{{ $studentAge[$i] }}</p>
                @endfor
            </td>
            <td>
                @php
                    $i = 0;
                @endphp
                @while ($i < count($studentIpk))
                    <p>{{ $studentIpk[$i] }}</p>
                    @php
                        $i++;
                    @endphp
                @endwhile
            </td>
            <td>
                @foreach ($studentIpk as $ipk)
                    @if ($ipk >= 3)
                        <div class="alert alert-success">
                            Lulus
                        </div>
                    @elseif ($ipk < 3)
                        <div class="alert alert-danger">
                            Tidak Lulus
                        </div>
                    @endif
                @endforeach
            </td>
        </tr>
        </tbody>
    </table>
@endsection
