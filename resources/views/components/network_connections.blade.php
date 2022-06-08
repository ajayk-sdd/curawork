<div class="row justify-content-center mt-5">
  <div class="col-12">
    <div class="card shadow  text-white bg-dark">
      <div class="card-header">Coding Challenge - Network connections</div>
      <div class="card-body">
        <div class="btn-group w-100 mb-3" role="group" aria-label="Basic radio toggle button group">
          <input type="radio" class="btn-check" name="btnradio"  @if (isset($suggest))
             value="{{$suggest}}"
            @endif id="btnradio1"  autocomplete="off" onclick="getSuggestions()" checked >
          <label class="btn btn-outline-primary" for="btnradio1" id="get_suggestions_btn">Suggestions (@if (isset($suggest))
            {{$suggest}}
            @endif ) </label>

          <input type="radio" class="btn-check" name="btnradio" @if (isset($requested))
             value="{{$requested}}"
            @endif id="btnradio2" autocomplete="off"  onclick="getsendRequests('sent')">
          <label class="btn btn-outline-primary" for="btnradio2" id="get_sent_requests_btn">Sent Requests (@if (isset($requested))
          {{$requested}}
          @endif )</label>

          <input type="radio" class="btn-check" name="btnradio" @if (isset($received))
             value="{{$received}}"
            @endif  id="btnradio3" autocomplete="off"  onclick="getRecieveRequests('Received')">
          <label class="btn btn-outline-primary" for="btnradio3" id="get_received_requests_btn">Received
            Requests(@if (isset($received))
            {{$received}}
            @endif )</label>

          <input type="radio" class="btn-check" name="btnradio" @if (isset($connected))
             value="{{$connected}}"
            @endif id="btnradio4" autocomplete="off" onclick="getConnections()">
          <label class="btn btn-outline-primary" for="btnradio4" id="get_connections_btn"  >Connections (@if (isset($connected))
            {{$connected}}
            @endif )</label>
        </div>
        <hr>
        <div id="content" class="">    
        
        </div>
           
        <div id="skeleton" class="d-none">
          @for ($i = 0; $i < 10; $i++)
            <x-skeleton />
          @endfor
        </div>
       

        <!-- <span class="fw-bold">"Load more"-Button</span> -->
        <!-- <div class="d-flex justify-content-center mt-2 py-3 {{-- d-none --}}" id="load_more_btn_parent">
          <button class="btn btn-primary" onclick="" id="load_more_btn">Load more</button>
        </div> -->
      </div>
    </div>
  </div>
</div>

{{-- Remove this when you start working, just to show you the different components --}}

<!-- <div id="connections_in_common_skeleton" class="{{-- d-none --}}">
  <br>
  <span class="fw-bold text-white">Loading Skeletons</span>
  <div class="px-2">
    @for ($i = 0; $i < 10; $i++)
      <x-skeleton />
    @endfor
  </div>
</div> -->
