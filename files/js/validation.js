function email_val(email){
    if(!/^[\w.-]+@[\w.-_]+.[a-zA-Z]+$/.test(email)){
        $("#email").addClass("input-error");
        $("<div class='error-message'>Please Enter Valid Id</div>").insertAfter("#email_f");
        return false;
    }
}

function name_val(id,name){
    var id = "#".concat(id);
    var clas = id.concat('_f');
    if(! /^([a-zA-Z]+)$/.test(name)){
        $(id).addClass("input-error");
        $("<div class='error-message'>No Special Characters Allowed</div>").insertAfter(clas);
        return false;
    }
}

function contact_val(contact){
    if(! /^[0-9]{9}$/.test(contact)){
        $("#contact").addClass("input-error");
        $("<div class='error-message'>Please Enter Valid Contact</div>").insertAfter("#contact_f");
        return false;
    }
}

function address_val(address){
    if(! /^[\w\.\-\_\,\s]+$/.test(address)){
        $("#address").addClass("input-error");
        $("<div class='error-message'>Can Only Use '._-,' Special Characters</div>").insertAfter("#address_f");
        return false;
    }
}

function password_val(password){
    if(! (/.{8,20}/.test(password)&&/[a-z]+/.test(password)
    		&&/[A-Z]+/.test(password)&&/[0-9]+/.test(password)
            &&/[\W]+/.test(password))){
        $("#password").addClass("input-error");
        $("<div class='error-message'>Password Must Contain 8-20 Characters, Uppercase, Lowercase, Numerical, Special Characters</div>").insertAfter("#password_f");
        return false;
    }
}

function text_val(text){
    if(! /^[\w._-,\/]/.test(text)){
        $("#text").addClass("input-error");
        $("<div class='error-message'>Can Only Use '._-,' Special Characters</div>").insertAfter("#text_f");
        return false;
    }
}

function id_val(id){
    if(! /(^(19|20){1}([0-9]{10})$|^(99){1}(0-9){9}v$)/.test(id)){
        $("#id").addClass("input-error");
        $("<div class='error-message'>Please Enter Valid Id</div>").insertAfter("#id_f");
        return false;
    }
}

function sid_val(sid){
    if(! /^(D|S|L|R|P){1}[0-9]{9}$/.test(sid)){
        $("#id").addClass("input-error");
        $("<div class='error-message'>Please Enter Valid Id</div>").insertAfter("#id_f");
        return false;
    }
}

function bday_val(bday){
    var day = new Date();
    var dd = String(day.getDate()).padStart(2, '0');
    var mm = String(day.getMonth() + 1).padStart(2, '0'); //January is 0!
    var yyyy = day.getFullYear() - 18;

    //console.log(today);
    //console.log(bday);
    day = yyyy + '-' + mm +'-' + dd;
    //console.log(day);
    //console.log(bday)

    if(bday > day){
        $("#birthday").addClass("input-error");
        $("<div class='error-message'>User Must Be Over 18 Years</div>").insertAfter("#bday_f");
        return false;
    }
}