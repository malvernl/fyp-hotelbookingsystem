@extends('layouts.navbarlayout')

@section('content')
<div class="bookroom-container">
    <form method="POST" action="/home/viewbook/bookroom/{{$Room->id}}">
        @csrf
        <div class="book-row">
            <div class="leftcolumn">
                <div class="book-card">
                    <h2>{{$Room->roomname}}</h2>
                    @if($Room->roomtype == 1)
                    <p>The room is a standard room</p>
                    <p>It's a {{ $Room->roomdescript }}</p>
                    <p>The price is {{ $Room->price }}</p>
                    <img src="/img/seaview.png" style="width: 500px;height: 300px;">
                    @elseif($Room->roomtype == 2)
                    <p>The room is a high-tier standard room</p>
                    <p>It's a {{ $Room->roomdescript }}</p>
                    <p>The price is {{ $Room->price }}</p>
                    <img src="/img/mountainview.png" style="width: 500px;height: 300px;">
                    @elseif($Room->roomtype == 3)
                    <h5>The room is a premium room</p>
                    <p>It's a {{ $Room->roomdescript }}</p>
                    <p>The price is {{ $Room->price }}</p>
                    <img src="/img/queenseaview.png" style="width: 500px;height: 300px;">
                    @elseif($Room->roomtype == 4)
                    <p>The room is a deluxe room</p>
                    <p>It's a {{ $Room->roomdescript }}</p>
                    <p>The price is {{ $Room->price }}</p>
                    <img src="/img/kingseaview.png" style="width: 500px;height: 300px;">
                    @endif
                </div>
            </div>
            <div class="rightcolumn">
                <div class="book-card">
                    <input type="hidden" name="roomid" id="roomid" value="{{ $Room->id }}">
                    <input type="hidden" name="userid" id="userid" value="{{ $User->id }}">
                    <input type="hidden" name="name" id="name" value="{{ $User->name }}">
                    <h2>Date</h2>
                    <p>Please choose the date:</p>
                    <p>Start Date: <input type="date" id="dt1" name="startdate" required></p>
                    <p>End Date: <input type="date" id="dt2" name="enddate" required></p>
                    <br/>
                    <h2>Payment: <input type="text" id="payment" name="payment" required></h2>
                    <br />
                    <input type="submit" Value="Book" class="btn btn-primary" style="margin: 10px"></button>
                    <a href="/home/viewbook" class="btn btn-primary" style="margin: 10px">Back</a>
                </div>
            </div>
    </form>
</div>
@endsection

<script>
    $( function() {
        var datepicker = new ej.calendars.DatePicker({ width: "255px" });
        datepicker.appendTo('#datepicker');
    } );
    $(document).ready(function () {

    $("#dt1").datepicker({
        dateFormat: "dd-M-yy",
        minDate: 0,
        onSelect: function () {
            var dt2 = $('#dt2');
            var startDate = $(this).datepicker('getDate');
            var minDate = $(this).datepicker('getDate');
            var dt2Date = dt2.datepicker('getDate');
            //difference in days. 86400 seconds in day, 1000 ms in second
            var dateDiff = (dt2Date - minDate)/(86400 * 1000);
        
            startDate.setDate(startDate.getDate() + 30);
            if (dt2Date == null || dateDiff < 0) {
                dt2.datepicker('setDate', minDate);
            }
            else if (dateDiff > 30){
                dt2.datepicker('setDate', startDate);
            }
            //sets dt2 maxDate to the last day of 30 days window
            dt2.datepicker('option', 'maxDate', startDate);
            dt2.datepicker('option', 'minDate', minDate);
        }
    });
    $('#dt2').datepicker({
        dateFormat: "dd-M-yy",
        minDate: 0
    });
});
</script>
