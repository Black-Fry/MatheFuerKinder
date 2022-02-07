
function disableInput (id, laufVariable, result)
{
    var errechneterWert = parseInt(document.getElementById(id).value);
    
    //alert (errechneterWert + " " + result);
    
    document.getElementById(id).disabled = true;   
    
    //verify - show green / red Feld hinter Ergebnis
    if ( (errechneterWert === parseInt(result)) )
    {   document.getElementById("corr_" + laufVariable).style.visibility = 'visible';    }
    else
    {   document.getElementById("false_" + laufVariable).style.visibility = 'visible';    }
}

function disableAndShowToast (id, laufVariable, result)
{
    var x = document.getElementById("snackbar");

    // Add the "show" class to DIV
    x.className = "show";

    // After 3 seconds, remove the show class from DIV
    setTimeout(function(){ x.className = x.className.replace("show", ""); }, 3000);
    
    disableInput(id, laufVariable, result);
}               