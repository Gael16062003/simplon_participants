var a;
function show_hide()
{
    if(a==1)
        {
            document.getElementById("form_simplon").style.display="inline";
            return a=0;
        }
            
        else
            {
                document.getElementById("form_simplon").style.display="none";
                return a=1;
            }
}