function searchCategory() {
     var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("searchCat");
  filter = input.value.toUpperCase();
  table = document.getElementById("listcategory");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    } 
  }
}

function updateDetails(id,status,name,title)
{
    document.getElementsByClassName('popup')[0].style.display='block';
    document.getElementById('updateid').value=id;
    document.getElementById('up_cat_name').value=name;
    document.getElementById('up_cat_title').value=title;
}
/*--------------------------------------------------------------*/
//function addToCart()
//{var cart= document.getElementsByClassName('add_to_cart');
// var items=[];
//   for(var x=0;x<cart.length;x++){
//       if(cart[x].checked){
//           items.push(cart[x].value);
//        document.getElementsByClassName('cart_items')[0].innerHTML=items.length;}
//       else{document.getElementsByClassName('cart_items')[0].innerHTML=items.length; }
//   }
//}
/*------------------------------------QUANITITY-------------------------*/

function quanityScriptplusplus(){
var qu=document.getElementById('quantity_box').value;
if(qu<=50){
    document.getElementById('quantity_box').value=++qu;
var price_hid=document.getElementById('price_hid').value;
document.getElementById('price_mul').innerHTML=parseFloat(qu)*parseFloat(price_hid);

}
}
function quanityScriptminusminus(){
var qu=document.getElementById('quantity_box').value;
if(qu>=2){
    document.getElementById('quantity_box').value=--qu;
var price_hid=document.getElementById('price_hid').value;
document.getElementById('price_mul').innerHTML=parseFloat(qu)*parseFloat(price_hid);

}
}

function pressKeyprice()
{
    var qu=document.getElementById('quantity_box').value;
    if(!(qu<=0) && qu<=50){
    document.getElementById('price_mul').innerHTML=document.getElementById('price_hid').value*qu;
    }else{document.getElementById('quantity_box').value='';
    document.getElementById('price_mul').innerHTML=document.getElementById('price_hid').value;
    }
    if(isNaN(qu)){
        document.getElementById('quantity_box').value=1;
       document.getElementById('price_mul').innerHTML=document.getElementById('price_hid').value;  
    }
}
function cancelOrder(id){
  document.getElementsByClassName('popup')[0].style.display='block';
    document.getElementById('updateid').value=id;
}
/*------------------------------search  box----------------------------*/
