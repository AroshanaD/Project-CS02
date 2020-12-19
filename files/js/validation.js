function email_val(email) {
    if (!/^[\w.-]+@[\w.-_]+.[a-zA-Z]+$/.test(email)) {
        $("#email").addClass("input-error");
        $("<div class='error-message'>Please Enter Valid Id</div>").insertAfter("#email_f");
        return false;
    }
}

function name_val(id, name) {
    var id = "#".concat(id);
    var clas = id.concat('_f');
    if (! /^([a-zA-Z]+)$/.test(name)) {
        $(id).addClass("input-error");
        $("<div class='error-message'>No Special Characters Allowed</div>").insertAfter(clas);
        return false;
    }
}

function contact_val(contact) {
    if (! /^[0-9]{9}$/.test(contact)) {
        $("#contact").addClass("input-error");
        $("<div class='error-message'>Please Enter Valid Contact</div>").insertAfter("#contact_f");
        return false;
    }
}

function address_val(address) {
    if (! /^[\w\.\-\_\,\s]+$/.test(address)) {
        $("#address").addClass("input-error");
        $("<div class='error-message'>Can Only Use '._-,' Special Characters</div>").insertAfter("#address_f");
        return false;
    }
}

function password_val(password) {
    if (!(/.{8,20}/.test(password) && /[a-z]+/.test(password)
        && /[A-Z]+/.test(password) && /[0-9]+/.test(password)
        && /[\W]+/.test(password))) {
        $("#password").addClass("input-error");
        $("<div class='error-message'>Password Must Contain 8-20 Characters, Uppercase, Lowercase, Numerical, Special Characters</div>").insertAfter("#password_f");
        return false;
    }
}

function text_val(id, text) {
    var id = "#".concat(id);
    var clas = id.concat('_f');
    if (! /^[\w\.\_\-\,\s]/.test(text)) {
        $(id).addClass("input-error");
        $("<div class='error-message'>Can Only Use '._-,' Special Characters</div>").insertAfter(clas);
        return false;
    }
}

function id_val(id) {
    if (! /(^(19|20){1}([0-9]{10})$|^9[0-9]{8}V$)/.test(id)) {
        $("#id").addClass("input-error");
        $("<div class='error-message'>Please Enter Valid Id</div>").insertAfter("#id_f");
        return false;
    }
}

function sid_val(sid) {
    if (! /^(D|S|L|R|P){1}[0-9]{9}$/.test(sid)) {
        $("#id").addClass("input-error");
        $("<div class='error-message'>Please Enter Valid Id</div>").insertAfter("#id_f");
        return false;
    }
}

function bday_val(bday) {
    var day = new Date();
    var dd = String(day.getDate()).padStart(2, '0');
    var mm = String(day.getMonth() + 1).padStart(2, '0'); //January is 0!
    var yyyy = day.getFullYear() - 18;

    //console.log(today);
    //console.log(bday);
    day = yyyy + '-' + mm + '-' + dd;
    //console.log(day);
    //console.log(bday)

    if (bday > day) {
        $("#birthday").addClass("input-error");
        $("<div class='error-message'>User Must Be Over 18 Years</div>").insertAfter("#bday_f");
        return false;
    }
}

function manufacture_val(manufacture_date) {
    var day = new Date();
    var dd = String(day.getDate()).padStart(2, '0');
    var mm = String(day.getMonth() + 1).padStart(2, '0'); //January is 0!

    var yyyy = day.getFullYear();
    day = yyyy + '-' + mm + '-' + dd;

    console.log(day);
    console.log(manufacture_date);

    if (manufacture_date >= day) {
        $("#manufacture_date").addClass("input-error");
        $("<div class='error-message'>Incorrect manufacture date.</div>").insertBefore(".drop-icon");
    }

    yyyy = yyyy - 1;
    day = yyyy + '-' + mm + '-' + dd;

    if (manufacture_date < day) {
        if(confirm("Manufacture date of medicine is not within one year. Please check before proceed")){
            return true;
        }
        else{
            return false;
        }
    }
}

function expire_val(expire_date) {
    var day = new Date();
    var dd = String(day.getDate()).padStart(2, '0');
    var mm = String(day.getMonth() + 1).padStart(2, '0'); //January is 0!

    var yyyy = day.getFullYear();
    day = yyyy + '-' + mm + '-' + dd;

    console.log(day);
    console.log(expire_date);

    if (expire_date <= day) {
        $("#expire_date").addClass("input-error");
        $("<div class='error-message'>Incorrect expire date.</div>").insertBefore(".drop-icon");
        return false;
    }

    yyyy = yyyy  + 1;
    day = yyyy + '-' + mm + '-' + dd;

    if (day > expire_date) {
        if(confirm("Expire date of medicine is within one year. Please check before proceed")){
            return true;
        }
        else{
            return false;
        }
    }
}