$(document).ready(function () {

$('#new_todo_form').on('submit',
			       function (e) {
                    console.log("i'm here!!");
    console.log($(this).serialize());
				   e.preventDefault();
				   $.ajax("posts.php",
					  {type: "POST",
						  dataType: "json",
						  data: $(this).serialize(),
						  success: function(todo_json, status, jqXHR) {
						  //var t = new Post(todo_json);
                              console.log(todo_json);
                              
                              var mylink = "http://wwwp.cs.unc.edu/Courses/comp426-f16/users/psanka/a3/COMP_426/viewpost.php?id="+ todo_json;
                              window.location = mylink;
					      },
						  error: function(jqXHR, status, error) {
						  alert(jqXHR.responseText);
                              var mylink = "http://wwwp.cs.unc.edu/Courses/comp426-f16/users/psanka/a3/COMP_426/viewpost.php?id="+ jqXHR.responseText;
                              window.location = mylink;
					      }});
			       });
});