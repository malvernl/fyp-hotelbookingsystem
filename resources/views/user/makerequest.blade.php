@extends('layouts.navbarlayout')

@section('content')
<div class="request-container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header profile-title">
                    Request Table
                </div>
                <div class="card-body">
                    <table>
                        <tr>
                        <th>Request ID</th>
                        <th>Request Name</th>
                        <th>Request Description</th>
                        <th>Status</th>
                        <th>Booking ID</th>
                        </tr>
                        @foreach($Ureq as $req)
                        <tr>
                            <td>R00{{$req->id}}</td>
                            <td>{{$req->requestitem}}</td>
                            <td>{{$req->requestdesc}}</td>
                            @if($req->active == 0)
                            <td>Ready to be approved</td>
                            @elseif($req->active == 1)
                                <td>Accepted</td>
                            @else
                                <td>Declined</td>
                            @endif
                            <td>B00{{$req->bookingid}}</td>
                        </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div class="row justify-content-center" style="margin-top: 40px;">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header profile-title">
                    Request For Something?
                </div>
                
                <div class="card-body">
                    <form method="POST" action="/home/request">
                        @csrf
                        <div class="row">
                            <div class="column">
                                <div class="section">
                                    <span class="section-text">Description</span><br />
                                    <select name="requestdesc" id="requestdesc" required>
                                        <option value="" selected="selected">Select Request First</option>
                                    </select>
                                </div>
                            </div>
                            <div class="column">
                                <div class="section">
                                    <span class="section-text">Request</span><br />
                                    <select name="requestitem" id="requestitem" required>
                                        <option value="" selected="selected">Select Request</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="row flex-center">
                            <input type="submit" class="btn btn-primary link-text" style="padding-left: 40px; padding-right: 40px;"></a>
                        </div>
                    </form>
                    <br />
                    <div class="row flex-center">
                        <a href="/home" class="btn btn-primary link-text" style="padding-left: 75px; padding-right: 75px">Back</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

<script>
    var requestObject = {
        "Blankets": {
          "1": [],
          "2": [],
          "3": [],
        },
        "Towels": {
          "1": [],
          "2": [],
          "3": [],
        },
        "Food": {
          "Coffee": [],
          "Big Breakfast": [],
          "Fish and Chips": [],
        },
    }
    
    window.onload = function() {
      var requestSel = document.getElementById("requestitem");
      var descriptSel = document.getElementById("requestdesc");
      
      for (var x in requestObject) {
          requestSel.options[requestSel.options.length] = new Option(x, x);
      }
      
      requestSel.onchange = function() {
        descriptSel.length = 1;
        for (var y in requestObject[this.value]) {
          descriptSel.options[descriptSel.options.length] = new Option(y, y);
        }
      }
    }
</script>

