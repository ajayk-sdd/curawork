var skeletonId = 'skeleton';
var contentId = 'content';
var skipCounter = 0;
var takeAmount = 10;



function getsendRequests() {
      $('#content').html("");
      var functionsOnSuccess = [
        [exampleOnSuccessFunction, ["result", 'response']]
      ];
      ajax('/getRequests/', 'POST', functionsOnSuccess);

}
function getRecieveRequests() {

      $('#content').html("");
      var functionsOnSuccess = [
        [exampleOnSuccessFunction, ["result", 'response']]
      ];
        ajax('/getReceivedRequests/', 'POST', functionsOnSuccess);
}

function getMoreRequests() {
 
    var old=$("#load_more_btn1").val()
      var newval=parseInt(old)+10;
      $("#load_more_btn1").val(newval)
      var form = ajaxForm([
        ['total', newval],
      ]);
      var functionsOnSuccess = [
        [exampleOnSuccessFunction, ["result", 'response']]
      ];
      ajax('/getMoreRequests', 'POST', functionsOnSuccess, form);
}

function getMoreAccepts() {
 
  var old=$("#load_more_btn1").val()
    var newval=parseInt(old)+10;
    $("#load_more_btn1").val(newval)
    var form = ajaxForm([
      ['total', newval],
    ]);
    var functionsOnSuccess = [
      [exampleOnSuccessFunction, ["result", 'response']]
    ];
    ajax('/getMoreAccepts', 'POST', functionsOnSuccess, form);
}

function getConnections() {

      $('#content').html("");
      var functionsOnSuccess = [
        [exampleOnSuccessFunction, ["result", 'response']]
      ];
        ajax('/getConnections', 'POST', functionsOnSuccess);
}

function getMoreConnections() {
  var old=$("#load_more_btn1").val()
  var newval=parseInt(old)+10;
  $("#load_more_btn1").val(newval)
  var form = ajaxForm([
    ['total', newval],
  ]);
  var functionsOnSuccess = [
    [exampleOnSuccessFunction, ["result", 'response']]
  ];
  ajax('/getMoreConnections', 'POST', functionsOnSuccess, form);
}

function getConnectionsInCommon( connectionId) {
 
      var form = ajaxForm([
        ['id', connectionId],
        ['total', 10],
      ]);
      var functionsOnSuccess = [
        [exampleOnSuccessFunction, [connectionId, 'response']]
      ];
      ajax('/getConnectionsInCommon', 'POST', functionsOnSuccess, form);
 
}

function getMoreConnectionsInCommon( connectionId) {
 // alert(connectionId)
  var old=$("#load_more_btn1").val()
  var newval=parseInt(old)+10;
  $("#load_more_btn1").val(newval)
  var form = ajaxForm([
    ['total', newval],
    ['id', connectionId],
  ]);
  var functionsOnSuccess = [
    [exampleOnSuccessFunction, [connectionId, 'response']]
  ];
  ajax('/getConnectionsInCommon', 'POST', functionsOnSuccess, form);
  // Optional: Depends on how you handle the "Load more"-Functionality
  // your code here...
}

function getSuggestions() {
  var old=$("#btnradio1").val();
  var newval=parseInt(old);
 

  if(newval==10){
    $("#load_more_btn_parent").hide();
    
  }
      $('#content').html("");
      var functionsOnSuccess = [
        [exampleOnSuccessFunction, ["result", 'response']]
      ];
        ajax('/getSuggestion/', 'POST', functionsOnSuccess);
    
}

function getMoreSuggestions() {
  var old=$("#load_more_btn").val()
  var newval=parseInt(old)+10;
  $("#load_more_btn").val(newval)
  var form = ajaxForm([
    ['total', newval],
  ]);
  var functionsOnSuccess = [
    [exampleOnSuccessFunction, ["result", 'response']]
  ];
  ajax('/getMoreSuggestions', 'POST', functionsOnSuccess, form);


  // Optional: Depends on how you handle the "Load more"-Functionality
  // your code here...
}

function sendRequest(userId, suggestionId) {
 
        var form = ajaxForm([
          ['sid', suggestionId],
        ]);
        var functionsOnSuccess = [
          [exampleOnSuccessFunction, ["result", 'response']]
        ];
        ajax('/sendRequest', 'POST', functionsOnSuccess, form);
        var old=$("#btnradio1").val();
        var newval=parseInt(old)-1;
        var oldRequest=$("#btnradio2").val();
        var newRequest=parseInt(oldRequest)+1;
        console.log("newval",newval);
        $("#btnradio1").val(newval);
        $("#btnradio2").val(newRequest);
        $("#get_suggestions_btn").text("Sent Requests ("+newval+")");
        $("#get_sent_requests_btn").text("Suggestions ("+newRequest+")");
       
        if(old==10){
          $("#load_more_btn_parent").addClass("d-none");
          
        }
  
}

function deleteRequest( requestId) {
        var old=$("#btnradio1").val()
        var newval=parseInt(old)+1;
        var oldRequest=$("#btnradio2").val()
        var newRequest=parseInt(oldRequest)-1;
        console.log("newval",newval)
        $("#btnradio1").val(newval)
        $("#btnradio2").val(newRequest)
        $("#get_suggestions_btn").text("Sent Requests ("+newval+")")
        $("#get_sent_requests_btn").text("Suggestions ("+newRequest+")")
        var form = ajaxForm([
          ['id', requestId],
        ]);
        var functionsOnSuccess = [
          [exampleOnSuccessFunction, ["result", 'response']]
        ];
        ajax('/deleteRequest', 'POST', functionsOnSuccess, form);
 
}

function acceptRequest( requestId) {

        var old=$("#btnradio3").val();
        var newval=parseInt(old)-1;
        var oldRequest=$("#btnradio4").val();
        var newRequest=parseInt(oldRequest)+1;
        console.log("newval",newval);
        $("#btnradio3").val(newval);
        $("#btnradio4").val(newRequest);
        $("#get_received_requests_btn").text("Received Requests("+newval+")");
        $("#get_connections_btn").text("Connections ("+newRequest+")");

        var form = ajaxForm([
          ['id', requestId],
        ]);
        var functionsOnSuccess = [
          [exampleOnSuccessFunction, ["result", 'response']]
        ];
        ajax('/acceptRequest', 'POST', functionsOnSuccess, form);
}

function removeConnection(connectionId) {
      var old=$("#btnradio4").val();
      var newval=parseInt(old)-1;
      $("#btnradio4").val(newval);
      var oldRequest=$("#btnradio1").val();
      var newRequest=parseInt(oldRequest)+1;
      $("#btnradio1").val(newRequest);
      $("#get_connections_btn").text("Connections ("+newval+")");
      $("#get_suggestions_btn").text("Suggestions ("+newRequest+")");
      var form = ajaxForm([
        ['id', connectionId],
      ]);
      var functionsOnSuccess = [
        [exampleOnSuccessFunction, ["result", 'response']]
      ];
      ajax('/deleteConnection', 'POST', functionsOnSuccess, form);
  
}

$(function () {
  //getSuggestions();
});
