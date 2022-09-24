function dataSiswa(){
  //menangkap id  
  let forms = document.getElementById('form');
  let siswa = forms.nama.value;
  let profesi = forms.pekerjaan.value;
  let hb = forms.hobby.value;
  
  let data = `Data Siswa:
  <br /> Nama: ${siswa} 
  <br /> Pekerjaan: ${profesi}
  <br /> Hobby: ${hb} `;
  
  document.getElementById('isi').innerHTML = data;
}