function SifreQur() {
    var result= '';
    var characters= 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789!#@$%^&*()_+';
    var charactersLength = characters.length;
    for ( var i = 0; i < 8; i++ ) {
      result += characters.charAt(Math.floor(Math.random() * 
        charactersLength));
   }
   document.getElementById("sifre").value=result;
}
function BtnDisabled(){
   let pass1=document.getElementById("yenisifre").value;
   let pass2=document.getElementById("tekrarsifre").value;
   if(pass1!=undefined || pass1!=null || pass2!=undefined || pass2!=null )
   {
      document.getElementsByClassName("pass")[0].disabled = false;
   }


}
function SifreYoxla(){
   BtnDisabled();
  let pass1=document.getElementById("yenisifre").value;
  let pass2=document.getElementById("tekrarsifre").value;
  let cls='';
  let msg='';


  if(pass1===pass2){
     msg="Eynidir";
     cls="secondary";
  }
  else{
     msg="Eyni deyil";
     cls="danger"
  }
  document.getElementsByClassName("sifremesaj")[0].innerHTML=
    `<div class="alert alert-${cls}" role="alert">${cls}</div>`
}
