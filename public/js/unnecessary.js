function confirmdel(){
    setInterval((event) => {
console.log(event.target.id)

}, 1000);

}
function fonks(){


return {
edit_check:false,

edit:function($event){

$event.target.innerHTML = "onayla";
let chd = $event.target.parentElement.parentElement;

items = chd.querySelectorAll("td:not(td:last-child)")
s = document.getElementsByClassName("onay")[0]

let form1 = chd.getElementsByTagName("form")[0];
if (!this.edit_check){
items.forEach(element => {
   
    var tde=document.createElement("td");
    
    var tmpObj=document.createElement("input");
    tmpObj.setAttribute("value", element.innerHTML);
   tmpObj.setAttribute("name",element.className);
    tde1 = tde.appendChild(tmpObj);           
    element.replaceWith(tde)           
});
this.edit_check=true;}

//forEach(element => chd.replaceChild(tmpObj,element));
else{
   items.forEach(element => {
   form1.appendChild(element)   })
form1.appendChild(s);
s.click();
this.edit_check = false;
    $.ajax({
type: "POST",
url: "update",
data: { name: ""},
success: success,
dataType: dataType
});
}

}}}