function proveriEmail()
{
    var provera = /^[a-zA-Z0-9]{2,64}@[a-z]{2,32}\.[a-z]{2,6}$/; 
    var tekst = document.mojaForma.email.value; 
    var rezultat = tekst.match(provera);
    if(rezultat != null)
    {
        alert("Email je ok!");
        return true;
    }
    else{
        alert("Email nije ok!");
        return false;
    }
}

