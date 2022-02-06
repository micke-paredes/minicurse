var baseUrl = "http://localhost/Projects/minicurso/";

function getAjax(urlx, method, json_req) {
    var resp = null;
    jQuery.ajax({
        type: method,
        dataType: "JSON",
        url: urlx,
        data:json_req,
        success: function (data){
            resp = data;
        },
        error: function(err){
            alert("Error favor de verificar");
        },
        async: false
    });
    return resp;
}


function sendForm() {
    var fullName = document.getElementById("fullName").value;
    var lastName = document.getElementById("lastName").value;
    var email = document.getElementById("email").value;
    var phone = document.getElementById("phone").value;
    var street = document.getElementById("street").value;
    var internalNumber = document.getElementById("intNumber").value;
    var externalNumber = document.getElementById("extNumber").value;
    var state = document.getElementById("state").value;
    var city = document.getElementById("city").value;
    var municipality = document.getElementById("municipality").value;
    var colony = document.getElementById("colony").value;
    var zipCode = document.getElementById("zipCode").value;

    try {
        // var fullData = [fullName, lastName, email, phone, street, externalNumber, state, city, municipality, colony, zipCode];
        // for (var index = 0; index < fullData.length; index++) {
        //     if (!fullData[index]) {
        //         throw new Error("Ningun campo debe estar vacio.");
        //     }
        // }

        var sendData = {
            "apiKey": "insertData",
            "fullName": fullName,
            "lastName": lastName,
            "email": email,
            "phone": phone,
            "street": street,
            "intNumber": internalNumber,
            "extNumber": externalNumber,
            "state": state,
            "city": city,
            "municipality": municipality,
            "colony": colony,
            "zipCode": zipCode
        }

        var sendResult = getAjax(baseUrl + "class/backend.php", "POST", sendData);
        alert(sendResult);


    } catch(Error)  {
        alert(Error);
    }


}