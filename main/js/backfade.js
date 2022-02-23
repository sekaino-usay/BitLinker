$(() => {
  var navbar = $("#navbar");
  var navbar_toggler = $("#navbar-toggler");
  var back_fade = $("#back-fade");
  var navbar_collapse = $("#navbarsExample07XL");

  // open and close navbar
  navbar_toggler.on("click", toggleNavbar);
  // console.log(navbar_toggler);


  function toggleNavbar() {
    // navbar_collapse.toggleClass("show");
    back_fade.toggleClass("show");
    // console.log("Toggled at function.");
  }
});

function sleep(waitMsec) {
  var startMsec = new Date();

  // 指定ミリ秒間だけループさせる（CPUは常にビジー状態）
  while (new Date() - startMsec < waitMsec);
}
