function hitung(tombol){
  //tangkap id form
  let form = document.getElementById('calcForm');
  //input angka
  let a1 = parseFloat(form.angka1.value);
  let a2 = parseFloat(form.angka2.value);
  //handle error
  switch(tombol){
    case 'btn_tambah': 
      if(isNaN(a1) || isNaN(a2)){
        alert("Harap masukkan angka!!!");
      }else{
        let total = a1 + a2; //rumus
        form.hasil.value = total; //penempatan hasil
      }
    break;
    
    case 'btn_kurang': 
      if(isNaN(a1) || isNaN(a2)){
        alert("Harap masukkan angka!!!");
      }else{
        let total = a1 - a2; //rumus
        form.hasil.value = total; //penempatan hasil
      }
    break;
    
    case 'btn_kali': 
      if(isNaN(a1) || isNaN(a2)){
        alert("Harap masukkan angka!!!");
      }else{
        let total = a1 * a2; //rumus
        form.hasil.value = total; //penempatan hasil
      }
    break;
    
    case 'btn_bagi': 
      if(isNaN(a1) || isNaN(a2)){
        alert("Harap masukkan angka!!!");
      }else{
        let total = a1 / a2; //rumus
        form.hasil.value = total; //penempatan hasil
      }
    break;
    
    case 'btn_pangkat': 
      if(isNaN(a1) || isNaN(a2)){
        alert("Harap masukkan angka!!!");
      }else{
        let total = Math.pow(a1,a2); //rumus
        form.hasil.value = total; //penempatan hasil
      }
      break;
    
    default:
      break;
  }
}