@extends('layouts.app')

@section('content')
<div class="col-sm-8 offset-2">
  <div class="card LRCard">
  <h5 class="card-header cardheader">Edit Car</h5>
    <div class="card-body LRBody">
      <form method="POST" action="{{ route('update.car', $cars->id) }}" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="form-group LRInput">
          <label for="CarName">Car name</label>
          <input name="CarName" type="text" class="form-control" id="CarName" value="{{ $cars->name }}">
        </div>
        <div class="form-group LRInput">
          <select class="custom-select" name="Brand">
            <option value=""></option>
          </select>
        </div>
        <div class="form-group LRInput">
          <label for="Brand">Velocity (Km/h)</label>
          <input name="Velocity" type="number" class="form-control" id="Velocity" min="1" max="800" step="1" value="{{ $cars->velocity }}">
        </div>
        <div class="form-group LRInput">
          <label for="Acceleration">Acceleration (Sec -> 0-100 Km/h)</label>
          <input name="Acceleration" type="number" class="form-control" id="Acceleration" min="1" max="15" step="0.1" value="{{ $cars->acceleration }}">
        </div>
        <div class="form-group LRInput">
          <label for="Acceleration">PS</label>
          <input name="PS" type="number" class="form-control" id="PS" min="1" max="3000" step="1" value="{{ $cars->ps }}">
        </div>
        <div class="form-group LRInput">
          <label for="Price">Price (CHF)</label>
          <input name="Price" type="number" class="form-control" id="Price" min="1" max="70000000" step="1" value="{{ $cars->basePrice }}">
        </div>
        <div class="form-group LRInput">
          <label for="Weight">Weight (kg)</label>
          <input name="Weight" type="number" class="form-control" id="Weight" min="1" max="30000" step="1" value="{{ $cars->weight }}">
        </div>
        <div class="form-group LRInput">
          <label for="Weight">Seats</label>
          <input name="Seats" type="number" class="form-control" id="Seats" placeholder="e.g. 2" min="1" max="20" step="1" value="{{ $cars->seats }}">
        </div>
        <div class="form-group LRInput">
          <label for="ManufacturingYear">Manufacturing year</label>
          <input name="ManufacturingYear" type="number" class="form-control" id="ManufacturingYear" placeholder="e.g. 1980" min="1800" max="2020" step="1" value="{{ $cars->manufacturingYear }}">
        </div>
        <div class="form-group LRInput">
          <label for="Cylinders">Cylinders</label>
          <select name="Cylinders" class="form-control" id="Cylinders">
          @if(2 == $cars->cylinders)
          <option selected>2</option>
          @else
          <option>2</option>
          @endif
          @if(4 == $cars->cylinders)
          <option selected>4</option>
          @else
          <option>4</option>
          @endif
          @if(6 == $cars->cylinders)
          <option selected>6</option>
          @else
          <option>6</option>
          @endif
          @if(8 == $cars->cylinders)
          <option selected>8</option>
          @else
          <option>8</option>
          @endif
          @if(10 == $cars->cylinders)
          <option selected>10</option>
          @else
          <option>10</option>
          @endif
          @if(12 == $cars->cylinders))
          <option selected>12</option>
          @else
          <option>12</option>
          @endif
          @if(14 == $cars->cylinders)
          <option selected>14</option>
          @else
          <option>14</option>
          @endif
          @if(16 == $cars->cylinders)
          <option selected>16</option>
          @else
          <option>16</option>
          @endif
          </select>
        </div>
        <div class="form-group LRInput">
          <label for="Drivetrain">Drivetrain</label>
          <select name="Drivetrain" class="form-control" id="Drivetrain">
          @if('Front' == $cars->drivetrain)
          <option selected>Front</option>
          @else
          <option>Front</option>
          @endif
          @if('Back' == $cars->drivetrain)
          <option selected>Back</option>
          @else
          <option>Back</option>
          @endif
          @if('All Wheel Drive' == $cars->drivetrain)
          <option selected>All Wheel Drive</option>
          @else
          <option>All Wheel Drive</option>
          @endif

          </select>
        </div>
        <div class="form-group LRInput">
          <label for="Doors">Doors</label>
          <input name="Doors" type="number" class="form-control" id="Doors" placeholder="e.g. 4" min="1" max="8" step="1" value="{{ $cars->doors }}">
        </div>
        <div class="form-group LRInput">
          <label for="Torque">Torque</label>
          <input name="Torque" type="number" class="form-control" id="Torque" placeholder="e.g. 1300" min="1" max="9000" step="1" value="{{ $cars->torque }}">
        </div>
        <div class="form-group LRInput">
          <label for="Transmission">Transmission</label><br>
          @if('manuell' == $cars->transmission)
          <div class="form-check form-check-inline" id="Transmission">
            <input class="form-check-input" type="radio" name="transmission" id="transmission" value="automatic">
            <label class="form-check-label" for="inlineRadio1">Automatic</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="transmission" id="transmission" value="manuell" checked>
            <label class="form-check-label" for="inlineRadio2">Manuell</label>
          </div>
          @else
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="transmission" id="transmission" value="automatic" checked>
            <label class="form-check-label" for="inlineRadio1">Automatic</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="transmission" id="transmission" value="manuell">
            <label class="form-check-label" for="inlineRadio2">Manuell</label>
          </div>
          @endif
        </div>
        <button type="submit" class="btn btn-primary LRPrimary">Update</button>
        <a class="btn btn-secondary LRSecondary" href="/home">Cancel</a>
      </form>
    </div>
  </div>
</div>

@endsection