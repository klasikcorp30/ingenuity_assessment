$.getJSON("./php/retrieve_data.php")
.then((response) => {
    var textContent;
    for(var i=0; i < response.length; i++){
        textContent += `<option value=${response[i].fname +" "+ response[i].lname}>${response[i].fname +" "+ response[i].lname}</option>`
    }
    $("#staff").html(textContent);
});


$.getJSON("./php/retrieve_projects.php")
.then((response) => {
    var textContent;
    for(var i=0; i < response.length; i++){
        textContent+= `<input type="checkbox" name="pro[]" class="mr-2" value="${response[i].pro_name}">${response[i].pro_name}
        <br>
        `
    }
    $("#lstOfProjects").html(textContent.substr(9));
});

