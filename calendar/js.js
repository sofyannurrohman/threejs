var d = new Date;
$("#day").text(d.getDate());
var monthNames = [ "January", "February", "March", "April", "May", "June",
    "July", "August", "September", "October", "November", "December" ];
$("#month").text(monthNames[d.getMonth()]);