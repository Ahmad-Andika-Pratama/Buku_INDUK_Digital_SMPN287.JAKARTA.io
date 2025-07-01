let kelas_7 = document.querySelector(".kelas_7");
let kelas_8 = document.querySelector(".kelas_8");
let kelas_9 = document.querySelector(".kelas_9");
let home = document.querySelector(".home");
document.getElementById("pilih_kelas").onclick = () => {
  kelas_7.classList.toggle("keluar");
  kelas_8.classList.toggle("keluar");
  kelas_9.classList.toggle("keluar");
  home.classList.toggle("keluar");
};

const myH1 = document.getElementById("pilih_kelas");
const elementA = document.getElementById("arrowA");
const elementB = document.getElementById("arrowB");

// Menggunakan status kelas untuk mengelola visibilitas
myH1.addEventListener("click", function () {
  if (elementA.classList.contains("visible-element")) {
    // Jika A terlihat, sembunyikan A dan tampilkan B
    elementA.classList.remove("visible-element");
    elementA.classList.add("hidden-element");

    // Setelah transisi selesai, ubah kelas B
    // Kita bisa menggunakan setTimeout atau event 'transitionend'
    setTimeout(() => {
      elementB.classList.remove("hidden-element");
      elementB.classList.add("visible-element");
    }, 400); // Sesuaikan dengan durasi transisi
  } else {
    // Jika B terlihat, sembunyikan B dan tampilkan A
    elementB.classList.remove("visible-element");
    elementB.classList.add("hidden-element");

    setTimeout(() => {
      elementA.classList.remove("hidden-element");
      elementA.classList.add("visible-element");
    }, 400); // Sesuaikan dengan durasi transisi
  }
});

// ? animasi halaman_pembuka
TweenLite.set(".introline, .bigline", { x: "-101%" });

var lines = new TimelineMax({ repeat: 5, yoyo: true, repeatDelay: 2 })
  .to(".bigline", 1, { x: "0%" })
  .to(".introline", 1, { x: "0%" }, "+=0.3");
