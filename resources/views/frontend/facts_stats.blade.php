@extends('layouts.frontendLayout.frontend_design')

@section('content')
<div class="main-content">
  <section class="inner-header divider parallax layer-overlay overlay-dark-5" data-bg-img="http://placehold.it/1920x1280">
    <div class="container pt-90 pb-50">
      <div class="section-content pt-100">
        <div class="row">
          <div class="col-md-12">
            <h3 class="title text-white">Facts and Statistics</h3>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section>
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="heading-line-bottom">
            <h4 class="heading-title"> Reasons why some vehicles failed the inspections</h4>
            <p>LUBRICANTS AND FLUIDS - (Low levels, dirty, or other reasons)</p>
          </div>
          <div class="progressbar-container">
            <div class="progress-item">
              <div class="progress-title">
                <h6 align="center">Brake Fluid</h6>
              </div>
              <div class="progress">
                <div class="progress-bar" data-percent="23"></div>
              </div>
            </div>
            <div class="progress-item">
              <div class="progress-title">

                <h6 align="center">Coolant (Flush)</h6>
              </div>
              <div class="progress">
                <div class="progress-bar" data-percent="20"></div>
              </div>
            </div>
            <div class="progress-item">
              <div class="progress-title">
                <h6 align="center">Coolant (Leaks)</h6>
              </div>
              <div class="progress">
                <div class="progress-bar" data-percent="8"></div>
              </div>
            </div>
            <div class="progress-item">
              <div class="progress-title">
                <h6 align="center">Coolant (Low Radiator)</h6>
              </div>
              <div class="progress">
                <div class="progress-bar" data-percent="11"></div>
              </div>
            </div>
            <div class="progress-item">
              <div class="progress-title">
                <h6 align="center">Engine Oil</h6>
              </div>
              <div class="progress">
                <div class="progress-bar" data-percent="30"></div>
              </div>
              <div class="progress-item">
                <div class="progress-title">
              <h6 align="center">Power Steering Fluid</h6>
            </div>
            <div class="progress">
              <div class="progress-bar" data-percent="21"></div>
            </div>
            <div class="progress-item">
              <div class="progress-title">
            <h6 align="center">Transmission Fluid </h6>
          </div>
          <div class="progress">
            <div class="progress-bar" data-percent="26"></div>
          </div>
          <div class="progress-item">
            <div class="progress-title">
          <h6 align="center">Washer Fluid</h6>
        </div>
        <div class="progress">
          <div class="progress-bar" data-percent="18"></div>
        </div>
      </div>
    </div>
          </div>
        </div>
        <div class="row">
        <div class="col-md-6">
          <div class="heading-line-bottom">
            <h4 class="heading-title">PARTS & TIRES (Dirty, damaged, cracked and needing replacement)</h4>
            <p>(Dirty, damaged, cracked and needing replacement)</p>
          </div>
          <div class="progressbar-container">
            <div class="progress-item">
              <div class="progress-title">
                <h6 align="center">Air Filter</h6>
              </div>
              <div class="progress">
                <div class="progress-bar" data-percent="24"></div>
              </div>
            </div>
            <div class="progress-item">
              <div class="progress-title">
                <h6 align="center">Belts</h6>
              </div>
              <div class="progress">
                <div class="progress-bar" data-percent="19"></div>
              </div>
            </div>
            <div class="progress-item">
              <div class="progress-title">
                <h6 align="center">Hoses</h6>
              </div>
              <div class="progress">
                <div class="progress-bar" data-percent="17"></div>
              </div>
            </div>
            <div class="progress-item">
              <div class="progress-title">
                <h6 align="center">PCV Filter</h6>
              </div>
              <div class="progress">
                <div class="progress-bar" data-percent="13"></div>
              </div>
            </div>
            <div class="progress-item">
              <div class="progress-title">
                <h6 align="center">Tire Pressure</h6>
              </div>
              <div class="progress">
                <div class="progress-bar" data-percent="21"></div>
              </div>
            </div>
            <div class="progress-item">
              <div class="progress-title">
                <h6 align="center">Tire Depth</h6>
              </div>
              <div class="progress">
                <div class="progress-bar" data-percent="16"></div>
              </div>
            </div>
            <div class="progress-item">
              <div class="progress-title">
                <h6 align="center">Tire Condition (Damage)</h6>
              </div>
              <div class="progress">
                <div class="progress-bar" data-percent="11"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>
@endsection