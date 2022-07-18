@extends('template.base')

@section('pageTitle', 'Laravel Migration Seeder')

@section('pageMain')
<main>
    <div class="container">
        <h1>Train Schedule</h1>
        {{-- @dump($trains)
        @dump($trains[0]->train_number) --}}
        <table class="table">
            <tr>
                <th>Train Number</th>
                <th>Destination</th>
                <th>Departing From</th>
                <th>Departure Time</th>
                <th>Arrival Time</th>
                <th>Status</th>
            </tr>
            @for($i=0; $i<20; $i++)
                <tr>
                    <td>{{ $trains[$i]->train_number }}</td>
                    <td>{{ $trains[$i]->arriving_station }}</td>
                    <td>{{ $trains[$i]->departing_station }}</td>
                    <td>{{ $trains[$i]->departing_time }}</td>
                    <td>{{ $trains[$i]->arriving_time }}</td>
                    <td>
                        @if($trains[$i]->on_schedule)
                            {{$trains[$i]->on_schedule}}
                        @else
                            {{ $trains[$i]->cancelled }}
                        @endif
                    </td>
                </tr>

            @endfor



        </table>

    </div>
</main>

@endsection

