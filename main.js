const komen = document.querySelector('#komen')

let kirimBtn = document.getElementById('kirim');
let form = document.getElementById('form');

form.addEventListener('submit', (e) => {
    e.preventDefault();
});

kirimBtn.addEventListener('click', (e) =>{
    let name = document.getElementById('name');
    let status = document.getElementById('status');
    let ucapan = document.getElementById('ucapan');

    
    localStorage.setItem('name', name);
    localStorage.setItem('status', status);
    localStorage.setItem('ucapan', ucapan);
    komen.innerHTML = `<h5 class="card-title" style="font-size: 18px;" id="komen">${name} <span style=" font-size:10px; background: rgba(154, 240, 154, 0.301); border-radius: 10px; padding: 5px;">Hadir</h5>`
});


// <div class="row form-comment" style="margin: 3px;">
// <div class="col-1" style="padding: 2px;">
// <img src="img/pp.png" style="width: 50px; height: auto; border-radius: 50%;" alt="">
// </div>
// <div class="card w-75" style="border-radius: 14px;">
// <div class="card-body">
//   <h5 class="card-title" style="font-size: 18px;">Supriyatno <span style=" font-size:10px; background: rgba(154, 240, 154, 0.301); border-radius: 10px; padding: 5px;">Hadir</h5>
//   <p class="card-text">Meskipun tak semudah itu aku melupakanmu, aku rela dan turut berbahagia atas pernikahanmu. Semoga Romeo bisa menjagamu dengan baik. Kalau tak bisa aku siap mengantri. Hihi </p>
// </div>
// </div>
// <span class="s-comment">04 September 2023</span>
// </div>
// <div class="row form-comment" style="margin: 3px;">
//   <div class="col-1" style="padding: 2px;">
//     <img src="img/pp.png" style="width: 50px; height: auto; border-radius: 50%;" alt="">
//   </div>
//   <div class="card w-75" style="border-radius: 14px;">
//     <div class="card-body">
//       <h5 class="card-title" style="font-size: 18px;">Fernando <span style=" font-size:10px; background: rgba(154, 240, 154, 0.301); border-radius: 10px; padding: 5px;">Hadir</h5>
//       <p class="card-text">Buah jambu Buah kedondong, uhuy akhirnya kawanku nikah dong. Semoga menjadi keluarga sakinah, mawadah, warahmah aamiin. </p>
//     </div>