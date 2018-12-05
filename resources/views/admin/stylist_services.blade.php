@foreach($services as $service)
    <div class="ask-question__quest"  style="margin-bottom: 15px; max-height: 50px">
        <div class="ask-question__quest-icon">
            <img src="{{$service->picture}}" class="navigation__profile-img">


        </div>
        <div class="ask-question__quest-block">
            <h2 class="ask-question__quest-block-title" style="color:black;margin-bottom: 0px; margin-top: 13px">
              {{$service->name}}
            </h2>

        </div>
    </div>

@endforeach