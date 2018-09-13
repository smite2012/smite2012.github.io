jQuery(document).ready(function ($) {
    function validate(ajaxResult) {
        let name = dataObj['name'];
        let email = dataObj['email'];
        let telephone = dataObj['telephone'];
        let message = dataObj['message'];
        validateForm(name, email, telephone, message);

        function validateForm(name, email, telephone, message) {
            let nameRegex = /[A-Z][a-z]+\s[A-Z][a-z]+/g;
            let emailRegex = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
            let telephoneRegex = /[0-9]{4}[ -][0-9]{3}[ -][0-9]{4}/g;
            let messageRegex = /(([a-z]|[A-Z])+.{4,})/g;
            let validName = nameRegex.test(name);
            let validEmail = emailRegex.test(email);
            let validTelephone = telephoneRegex.test(telephone);
            let validMessage = messageRegex.test(message);
            let userTip = document.getElementById('tip');
            var arrayOfErrors = [];
            if (validName === false) {
                var validNameTip = "Invalid name";
                arrayOfErrors.push(validNameTip);
            }
            if (validName === true) {
                arrayOfErrors.splice(arrayOfErrors.indexOf(validNameTip), 0);
            }
            if (validEmail === false) {
                var validEmailTip = "Invalid email";
                arrayOfErrors.push(validEmailTip);
            }
            if (validEmail === true) {
                arrayOfErrors.splice(arrayOfErrors.indexOf(validEmailTip), 0);
            }
            if (validTelephone === false) {
                var validTelephoneTip = "Invalid telephone";
                arrayOfErrors.push(validTelephoneTip);
            }
            if (validTelephone === true) {
                arrayOfErrors.splice(arrayOfErrors.indexOf(validTelephone), 0);
            }
            if (validMessage === false) {
                var validMessageTip = "Invalid message";
                arrayOfErrors.push(validMessageTip);
            }
            if (validMessage === true) {
                arrayOfErrors.splice(arrayOfErrors.indexOf(validMessageTip), 0);
            }
            if ((validName === true) && (validEmail === true) && (validTelephone === true) && (validMessage === true)) {
                $(userTip).css("color", "green");
                arrayOfErrors[0] = "Message was sent!";
                ajaxResult = true;
            } else {
                $(userTip).css("color", "red");
            }
            for (var i = 0; i < arrayOfErrors.length; i++) {
                userTip.innerHTML = arrayOfErrors[0];
            }
            return [validName, validEmail, validTelephone, validMessage];
        }

        return ajaxResult;
    }

    function addListenerMulti(element, eventNames, listener) {
        let events = eventNames.split(' ');
        for (let i = 0, iLen = events.length; i < iLen; i++) {
            element.addEventListener(events[i], listener, false);
        }
    }

    let form = document.getElementById("form");
    addListenerMulti(form, 'focusout ', function (a) {
        a.preventDefault();
        let formSerializeArray = $("#form").serializeArray();
        dataObj = {};
        $(formSerializeArray).each(function (i, field) {
            dataObj[field.name] = field.value;
        });
        let ajaxResult = false;
        validate(ajaxResult);
    });
    addListenerMulti(form, 'submit ', function (b) {
        b.preventDefault();
        let formSerializeArray = $("#form").serializeArray();
        dataObj = {};
        $(formSerializeArray).each(function (i, field) {
            dataObj[field.name] = field.value;
        });
        let ajaxResult = false;
        if (validate(ajaxResult)) {
            jQuery.post(myajax.url + '?action=my_action', formSerializeArray, function (response) {
                console.log('Server response: ' + response);
            });
        } else {
        }
    });
});
