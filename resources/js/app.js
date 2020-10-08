require('./bootstrap');
window.$ = require('jquery');


function getData(){

  var postUrl = '/api/posts/all';

  $.ajax({
    url: postUrl,
    method: "GET",
    success: function(posts){

      var target = $('#posts');

      for (var i = 0; i < posts.length; i++) {

        var post = posts[i];
        var html = "<li>" + post['title'] + "; " + post['views'] + "views" + "</li>";

        target.append(html);
      }
    },
    error: function(request, state, error) {
      console.log(state);
      console.log(request);
      console.log(error);
    }
  });
}

function init() {

  getData();
}

$(document).ready(init);
