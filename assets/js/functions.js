function checkin(){
    d=new Date(document.getElementById("checkin").value);
    dt=d.getDate();
    mn=d.getMonth();
    mn++;
    yy=d.getFullYear();
    document.getElementById("check_in_date").value=mn+"-"+dt+"-"+yy
}
function checkout(){
    d=new Date(document.getElementById("checkout").value);
    dt=d.getDate();
    mn=d.getMonth();
    mn++;
    yy=d.getFullYear();
    document.getElementById("check_out_date").value=mn+"-"+dt+"-"+yy
}
