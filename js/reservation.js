$('#submit').click((event) => { 
    event.preventDefault();
    str = "reply_reserve.php?firstname=" + $('#firstname').val() + "&lastname=" + $('#lastname').val() + "&adresse=" + $('#adresse').val() + "&contactno=" + $('#contactno').val()+ "&date=" + $('#date').val();
    window.location.replace(str);
})