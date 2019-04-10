function validarForm() {
   var n1 = form.n1.value;
   var n2 = form.n2.value;

   if (isNaN(form.n1.value) || form.n1.value == "" || form.n1.value==null){  
      alert("Digite apenas números!");  
      form.n1.select();  
      window.event.preventDefault() 
   } else if(isNaN(form.n2.value) || form.n2.value == "" || form.n2.value==null){
      alert("Digite apenas números!");  
      form.n2.select();  
      window.event.preventDefault() 
   }else {
      return false;
   }

}