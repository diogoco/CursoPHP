function carregaTexto($valor){
    document.frmLogin.telefone.value = $valor;
}

function openModal(pUrl, pWidth, pHeight) {
	if (window.showModalDialog) {
		return window.showModalDialog(pUrl, window,
		  "dialogWidth:" + pWidth + "px;dialogHeight:" + pHeight + "px");
	} else {
		try {
			netscape.security.PrivilegeManager.enablePrivilege(
			  "UniversalBrowserWrite");
			window.open(pUrl, "wndModal", "width=" + pWidth
			  + ",height=" + pHeight + ",resizable=no,modal=yes");
			return true;
		}
		catch (e) {
			alert("Script não confiável, não é possível abrir janela modal.");
			return false;
		}
	}
}

function fecha(){
    window.close();
    opener.location.href=opener.location.href;
}
/*
    <input type ="text" name="cep" maxlenght="10" onkeypress = "mascara(this, '##.###.####')" />
*/
function mascara(src, mask){
    var i = src.value.length;
    var saida = mask.substring(0,1);
    var texto = mask.substring(i);

    if(texto.substring(0,1) != saida)
        src.value += texto.substring(0,1);
}