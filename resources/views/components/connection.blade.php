<div class="my-2 shadow text-white bg-dark p-1" id="">
  <div class="d-flex justify-content-between">
    <table class="ms-1">
      
      <td class="align-middle">@if (isset($name))
      {{$name}}
      @endif
      </td>
      <td class="align-middle"> - </td>
      <td class="align-middle">@if (isset($email))
      {{$email}}
      @endif
      
    </table>
    <div>
      <button style="width: 220px" id="get_connections_in_common_" class="btn btn-primary" type="button"
        data-bs-toggle="collapse"  data-bs-target="#collapse_{{$name}}" aria-expanded="false" aria-controls="collapseExample" @if (isset($connected_id))
      onclick="getConnectionsInCommon( {{$connected_id}})"
      @endif>
        Connections in common (
          @if (isset($common))
          {{$common}}
          @endif
        )
      </button>
      <button id="create_request_btn_" class="btn btn-danger me-1"@if (isset($id))
      onclick="removeConnection( {{$id}})"
      @endif >Remove Connection</button>
    </div>

  </div>
  <div class="collapse" id="collapse_{{$name}}">

    <div id="content_{{$connected_id}}" class="p-2">
      {{-- Display data here --}}
     
    </div>
    <div id="connections_in_common_skeletons_">
      {{-- Paste the loading skeletons here via Jquery before the ajax to get the connections in common --}}
    </div>
    <!-- <div class="d-flex justify-content-center w-100 py-2">
      <button class="btn btn-sm btn-primary" id="load_more_connections_in_common_">Load
        more</button>
    </div> -->
  </div>
</div>
