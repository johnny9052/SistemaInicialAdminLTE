/* Funciones jQuery */

$(window).on("load", function (e) {
    $("#txtUser").focus();
});

     
/* Identificar a un usuario del sistema */
function LogIn() {
    if (validateForm() === true) {
        Execute(scanInfo('', true), 'Security/CtlLogIn', '', 'location.reload();');
    }
}