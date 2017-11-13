function edit_row(id)
{
 var name=document.getElementById("name_val"+id).innerHTML;
 var email=document.getElementById("email_val"+id).innerHTML;
 var favoriteFramework=document.getElementById("favoriteFramework_val"+id).innerHTML;
 var featuresToChange=document.getElementById("featuresToChange_val"+id).innerHTML; 
 var favoriteFeature=document.getElementById("favoriteFeature_val"+id).innerHTML; 
 var suggestionFeature=document.getElementById("suggestionFeature_val"+id).innerHTML; 
 var suggestionFramework=document.getElementById("suggestionFramework_val"+id).innerHTML; 


 document.getElementById("name_val"+id).innerHTML="<input type='text' id='name_text"+id+"' value='"+name+"'>";
 document.getElementById("email_val"+id).innerHTML="<input type='text' id='email_text"+id+"' value='"+email+"'>";
 document.getElementById("favoriteFramework_val"+id).innerHTML="<input type='text' id='favoriteFramework_text"+id+"' value='"+favoriteFramework+"'>";
 document.getElementById("featuresToChange_val"+id).innerHTML="<input type='text' id='featuresToChange_text"+id+"' value='"+featuresToChange+"'>";
 document.getElementById("favoriteFeature_val"+id).innerHTML="<input type='text' id='favoriteFeature_text"+id+"' value='"+favoriteFeature+"'>";
 document.getElementById("suggestionFeature_val"+id).innerHTML="<input type='text' id='suggestionFeature_text"+id+"' value='"+suggestionFeature+"'>";
 document.getElementById("suggestionFramework_val"+id).innerHTML="<input type='text' id='suggestionFramework_text"+id+"' value='"+suggestionFramework+"'>";

 document.getElementById("edit_button"+id).style.display="none";
 document.getElementById("save_button"+id).style.display="block";
}

function save_row(id)
{
 var name=document.getElementById("name_text"+id).value;
 var age=document.getElementById("age_text"+id).value;
	
 $.ajax
 ({
  type:'post',
  url:'modify_records.php',
  data:{
   edit_row:'edit_row',
   row_id:id,
   name_val:name,
   age_val:age
  },
  success:function(response) {
   if(response=="success")
   {
    document.getElementById("name_val"+id).innerHTML=name;
    document.getElementById("age_val"+id).innerHTML=age;
    document.getElementById("edit_button"+id).style.display="block";
    document.getElementById("save_button"+id).style.display="none";
   }
  }
 });
}

function delete_row(id)
{
 $.ajax
 ({
  type:'post',
  url:'modify_records.php',
  data:{
   delete_row:'delete_row',
   row_id:id,
  },
  success:function(response) {
   if(response=="success")
   {
    var row=document.getElementById("row"+id);
    row.parentNode.removeChild(row);
   }
  }
 });
}