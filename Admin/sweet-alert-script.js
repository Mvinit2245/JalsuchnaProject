
 $(document).ready(function(){

              $("#alert-basic").click(function(){
                  swal("Hello world!");
              });

              $("#alert-title").click(function(){
                  swal("Here's the title!", "...and here's the text!");
              });

              $("#alert-success-feed").click(function(){
                  swal("","Feedback Sent Successfully","success");
              });

              $("#alert-success-add").click(function(){
                swal("","Valveman added successfully","success");
              });

              $("#alert-error").click(function(){
                  swal("Somthing Wrong!", "You clicked the button!,", "error");
              });

              $("#alert-info").click(function(){
                  swal("Information!", "You clicked the button!,", "info");
              });

              $("#alert-warning").click(function(){
                  swal("Warning!", "You clicked the button!,", "warning");
              });


              $("#confirm-btn-alert").click(function()
              {

                  swal({
                    title: "Are you sure?",
                    text: "Do you want to save updated information ?",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                  })
                  .then((willDelete) => {
                    if (willDelete) {
                      swal("Your details are updated successfully", {
                        icon: "success",
                      });
                    } else {
                      swal("Your details are not updated");
                    }
                  });

              });






              $("#delete-btn-alert").click(function()
              {

                  swal({
                    title: "Are you sure?",
                    text: "Do you want to delete valveman ?",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                  })
                  .then((willDelete) => {
                    if (willDelete) {
                      swal("Valveman deleted successfully", {
                        icon: "success",
                      });
                    } else {
                      swal("Your details are not updated");
                    }
                  });

              });


          });