/**
 * Created by sansharma on 1/2/2017.
 */
$('#label1').click(function() {
   alert("Hi");
});

function findHotel(){
   alert("inside find hotel");
   var location = $( "#sel1" ).val();
   var no_of_person =  $('.checkbox-inline:checked').val();
   var check_in = $( "#check_in_date" ).val();
   var check_out = $( "#check_out_date" ).val();
   if(location == null){
      alert("Please Enter the location");
   }
   else if(check_in == null){
      alert("Please Enter Check in date");
   }
   else {
      alert("Please Enter the Check out date");
   }

}
